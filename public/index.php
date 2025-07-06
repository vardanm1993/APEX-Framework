<?php

use Apex\Core\App\Bootstrap;
use Apex\Core\Exception\Handler;
use Apex\Core\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/app.php';

$app = Bootstrap::boot($config);

try {
    $request = $app->make(Request::class);

    echo "Method: " . $request->method() . "\n";
    echo "URI: " . $request->uri() . "\n";
} catch (Throwable $e) {
    (new Handler())->handle($e);
}

