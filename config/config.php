<?php

return [
    'db' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'test',
        ]
    ],
    'phpsettings' => [
        'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
        'display_errors' => 1,
        'date.timezone' => 'Europe/Istanbul',
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