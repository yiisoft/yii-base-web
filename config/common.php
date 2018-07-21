<?php

return [
    'app' => [
        'basePath' => dirname(__DIR__) . '/src',
        'controllerNamespace' => \yii\app\commands::class,
        /*
        'controllerMap' => [
            'fixture' => [ // Fixture generation command line.
                'class' => 'yii\faker\FixtureController',
            ],
        ],
        */
    ],

    'logger' => [
        'targets' => [
            [
                '__class' => yii\log\FileTarget::class,
                'levels' => ['error', 'warning'],
            ],
        ],
    ],

    'cache' => [
        '__class' => yii\caching\Cache::class,
        'handler' => [
            '__class' => yii\caching\FileCache::class,
            'keyPrefix' => 'my-project',
        ],
    ],
    'mailer' => [
        '__class' => yii\swiftmailer\Mailer::class,
    ],
    'db' => array_filter([
        '__class' => yii\db\Connection::class,
        'dsn' => $params['db.dsn'],
        'username' => $params['db.username'],
        'password' => $params['db.password'],
        'charset' => $params['db.charset'],
        'enableSchemaCache' => defined('YII_ENV') && YII_ENV !== 'dev',
    ]),
];
