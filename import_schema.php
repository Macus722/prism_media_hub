<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

$path = base_path('database/schema_only_export.sql');

if (!File::exists($path)) {
    echo "Error: Could not find database/schema_only_export.sql\n";
    exit(1);
}

try {
    echo "Connecting to DB => " . env('DB_DATABASE') . "...\n";
    $pdo = DB::connection()->getPdo();
    echo "Connected!\n\n";

    // Step 1: Create all required sequences first (needed by CREATE TABLE nextval calls)
    $sequences = [
        'settings_id_seq',
        'orders_id_seq',
        'brands_id_seq',
        'offline_payments_id_seq',
        'offline_clients_id_seq',
        'users_id_seq',
        'migrations_id_seq',
        'failed_jobs_id_seq',
        'personal_access_tokens_id_seq',
        'order_logs_id_seq',
        'customers_id_seq',
    ];

    echo "Creating sequences...\n";
    foreach ($sequences as $seq) {
        try {
            DB::unprepared("CREATE SEQUENCE IF NOT EXISTS \"{$seq}\"");
            echo "  ✔ {$seq}\n";
        } catch (\Exception $e) {
            echo "  ~ {$seq} already exists, skipping.\n";
        }
    }
    echo "\n";

    // Step 2: Import each CREATE TABLE statement individually (skip if table exists)
    echo "Importing tables...\n";
    $sql = File::get($path);

    // Split SQL by CREATE TABLE blocks
    preg_match_all('/CREATE TABLE[^;]+;/s', $sql, $matches);
    $tables = $matches[0];

    foreach ($tables as $tableSQL) {
        // Extract table name for logging
        preg_match('/CREATE TABLE "([^"]+)"/', $tableSQL, $nameMatch);
        $name = $nameMatch[1] ?? 'unknown';

        try {
            // Wrap in IF NOT EXISTS check
            $safeSQL = str_replace(
                'CREATE TABLE "' . $name . '"',
                'CREATE TABLE IF NOT EXISTS "' . $name . '"',
                $tableSQL
            );
            DB::unprepared($safeSQL);
            echo "  ✔ {$name}\n";
        } catch (\Exception $e) {
            echo "  ~ {$name}: " . $e->getMessage() . "\n";
        }
    }

    echo "\nRunning Seeders...\n";
    \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'SettingsSeeder', '--force' => true]);
    echo \Illuminate\Support\Facades\Artisan::output();

    echo "\n\033[1;32mSUCCESS: prism_media_hub database is fully initialized!\033[0m\n\n";

    // Final verification
    $count = DB::table('settings')->count();
    echo "Settings table has {$count} records.\n";
    $preset = DB::table('settings')->where('key', 'design_preset')->first();
    echo "Design Preset => " . ($preset->value ?? 'NOT FOUND') . "\n\n";

} catch (\Exception $e) {
    echo "\n\033[1;31mFAILED.\033[0m\n";
    echo "Error: " . $e->getMessage() . "\n\n";
}
