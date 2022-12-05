<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'karyawans',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'karyawans',
        ],
    ],


    'providers' => [
        'karyawans' => [
            'driver' => 'eloquent',
            'model' => App\Models\Karyawan::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    'passwords' => [
        'karyawans' => [
            'provider' => 'karyawans',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => 10800,

];
