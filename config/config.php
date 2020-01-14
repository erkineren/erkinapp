<?php

return [
    'db' => [
        'default' => [
            'host' => 'localhost',
            'username' => '',
            'password' => '',
            'dbname' => '',
        ]
    ],
    'phpsettings' => [
        'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
        'display_errors' => 1,
        'display_startup_errors' => 1,
        'date.timezone' => 'Europe/Istanbul',
        'max_execution_time' => 3600,
        'memory_limit' => '256M'
    ],
    'theme' => [
        'name' => 'default',
    ],
    'language' => 'tr',

    'phinx' => [
        'paths' => [
            'migrations' => realpath(BASE_PATH . '/db/migrations'),
            'seeds' => realpath(BASE_PATH . '/db/seeds'),
        ],
        'environments' => [
            'default_migration_table' => 'phinxlog',
            'default_database' => 'default',
        ],
    ]
];