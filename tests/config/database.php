<?php

return [

    'computer_services' => [
        'driver' => 'mysql',
        'url' => env('DATABASE_URL'),
        'host' => env('CS_DB_HOST', 'localhost'),
        'port' => env('CS_DB_PORT', '3306'),
        'database' => env('CS_DB_DATABASE', 'forge'),
        'username' => env('CS_DB_USERNAME', 'forge'),
        'password' => env('CS_DB_PASSWORD', ''),
        'unix_socket' => env('DB_SOCKET', ''),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_thai_520_w2',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        ]) : [],
    ],

    'sqlite' => [
        'driver' => 'sqlite',
        'database' => ':memory',
        'prefix' => ''
    ]
];
