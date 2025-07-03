<?php

use Apex\Core\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$app = require(__DIR__ . '/../bootstrap/app.php');


$request = $app->make(Request::class);

echo "Method: " . $request->method() . "\n";
echo "URI: " . $request->uri() . "\n";