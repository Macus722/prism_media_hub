<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    \Illuminate\Support\Facades\DB::connection()->getPdo();
    $dbName = \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
    echo "\n\033[1;32mSUCCESS: Successfully connected to the database => " . $dbName . "\033[0m\n\n";

    // Test a simple query
    $settingsCount = \Illuminate\Support\Facades\DB::table('settings')->count();
    echo "Found {$settingsCount} records in the 'settings' table.\n";

} catch (\Exception $e) {
    echo "\n\033[1;31mFAILED: Could not connect to the database.\033[0m\n";
    echo "Please check your .env credentials.\n";
    echo "Error: " . $e->getMessage() . "\n\n";
}
