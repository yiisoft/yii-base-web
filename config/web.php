<?php

return [
    'app' => [
        'controllerNamespace' =>  \Yiisoft\Yii\Base\Web\Controllers::class,
    ],
    'user' => [
        'identityClass' =>  \Yiisoft\Yii\Base\Web\Models\User::class, // User must implement the IdentityInterface
    ],
    'request' => [
        'enableCookieValidation' => false,
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '',
    ],
    'assetManager' => [
        'appendTimestamp' => true,
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
];
