<?php
require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
