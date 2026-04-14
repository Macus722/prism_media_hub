<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

try {
    echo "Connecting to Neon master database to create new isolate DB...\n";
    // We connect to the current neondb and execute raw SQL
    // NOTE: Postgres CREATE DATABASE cannot run inside a transaction block.
    // PDO by default might not be in a transaction, but we can set PDO::ATTR_AUTOCOMMIT

    $pdo = DB::connection()->getPdo();
    $pdo->exec('CREATE DATABASE prism_media_hub');
    echo "\n\033[1;32mSUCCESS: Database prism_media_hub created successfully!\033[0m\n\n";

} catch (\Exception $e) {
    if (strpos($e->getMessage(), 'already exists') !== false) {
        echo "\n\033[1;32mDatabase prism_media_hub already exists! Moving to next step.\033[0m\n\n";
    } else {
        echo "\n\033[1;31mFAILED: Could not create database.\033[0m\n";
        echo "Error: " . $e->getMessage() . "\n\n";
    }
}
