<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

echo "<h1>Clearing Caches...</h1>";

try {
    echo "Running view:clear...<br>";
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    echo "Done.<br>";

    echo "Running cache:clear...<br>";
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    echo "Done.<br>";

    echo "<h2>SUCCESS! Force Refresh your browser now.</h2>";
} catch (\Exception $e) {
    echo "<h2>Error: " . $e->getMessage() . "</h2>";
}
