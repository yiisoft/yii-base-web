<?php

return [
    'app' => [
        'basePath' => dirname(__DIR__) . '/src',
        'controllerNamespace' => \yii\app\commands::class,
        /*
        'controllerMap' => [
            'fixture' => [ // Fixture generation command line.
                '__class' => 'yii\faker\FixtureController',
            ],
        ],
        */
    ],

    'logger' => [
        '__construct()' => [
            'targets' => [
                [
                    '__class' => Yiisoft\Log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],

    'cache' => [
        '__class' => Yiisoft\Cache\Cache::class,
        'handler' => [
            '__class' => Yiisoft\Cache\FileCache::class,
            'keyPrefix' => 'my-project',
        ],
    ],
    'mailer' => [
        '__class' => Yiisoft\Yii\SwiftMailer\Mailer::class,
    ],
    'db' => array_filter([
        '__class' => yii\db\Connection::class,
        'dsn' => $params['db.dsn'],
        'username' => $params['db.username'],
        'password' => $params['db.password'],
        'enableSchemaCache' => defined('YII_ENV') && YII_ENV !== 'dev',
    ]),

    'translator' => [
        'translations' => [
            'yii-base-web' => [
                '__class' => yii\i18n\PhpMessageSource::class,
                'sourceLanguage' => 'en-US',
                'basePath' => '@yii/app/messages',
            ],
        ],
    ],
];
