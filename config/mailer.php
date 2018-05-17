<?php


return [
    '__class' => yii\swiftmailer\Mailer::class,
    'transport' => [
        'class'    => Swift_SmtpTransport::class,
        'host'     => 'host',
        'username' => 'username',
        'password' => 'password',

    ],
];
