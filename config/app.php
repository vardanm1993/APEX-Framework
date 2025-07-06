<?php

use App\Providers\ApexServiceProvider;

return [
    'name' => 'Apex Framework',
    'env' => 'local',

    'providers' => [
        ApexServiceProvider::class,
    ],
];