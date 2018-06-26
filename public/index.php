<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/env.php';
require dirname(__DIR__) . '/vendor/yiisoft/yii2/Yii.php';

$config = require dirname(__DIR__) . '/config/web.php';

(new yii\web\Application($config))->run();
