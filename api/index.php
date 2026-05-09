<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Load Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 2. Bootstrap Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. Fix for Vercel's Read-Only Filesystem
// We force the storage path to /tmp which is writable on Vercel
$app->useStoragePath('/tmp/storage');

// Create necessary folders in /tmp
$storageFolders = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }
}

// 4. Run Application
$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
