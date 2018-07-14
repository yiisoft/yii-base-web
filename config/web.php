<?php

return [
    'app' => [
        'controllerNamespace' => yii\app\controllers::class,
    ],
    'user' => [
        'identityClass' => yii\app\models\User::class, // User must implement the IdentityInterface
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
