<?php

use Apex\Core\Providers\HttpServiceProvider;
use App\Providers\ApexServiceProvider;

return [
    'name' => 'Apex Framework',
    'env' => 'local',

    'providers' => [
        ApexServiceProvider::class,
        HttpServiceProvider::class,
    ],
];