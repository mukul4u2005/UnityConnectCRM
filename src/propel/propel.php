<?php

return [
    'propel' => [
        'generator' => [
            'schema' => [
                'autoPackage' => true,
            ],
        ],
        'database' => [
            'connections' => [
                'default' => [
                    'adapter'  => 'mysql',
                    'dsn'      => 'mysql:host=localhost;port=3306;dbname=unityconnectcrm',
                    'user'     => 'unityconnectcrm',
                    'password' => 'unityconnectcrm',
                    'settings' => [
                        'charset' => 'utf8',
                    ],
                ],
            ],
        ],
    ],
];
