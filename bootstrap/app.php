<?php

use Apex\Core\App\Application;

require_once __DIR__ . '/../vendor/autoload.php';

global $app;

$app = new Application();

$config = require(__DIR__ . '/../config/app.php');


$app->registerConfiguredProviders($config['providers'] ?? []);

return $app;