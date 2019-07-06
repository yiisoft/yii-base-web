<?php
use hiqdev\composer\config\Builder;
use yii\helpers\Yii;
use Yiisoft\Di\Container;

// ensure we get report on all possible php errors
error_reporting(E_ALL);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
define('YII_ENV', 'test');

$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

(function () {
    $composerAutoload = __DIR__ . '/../vendor/autoload.php';
    if (!is_file($composerAutoload)) {
        die('You need to set up the project dependencies using Composer');
    }

    require_once $composerAutoload;

    $container = new Container(require Builder::path('tests'));

    Yii::setContainer($container);
})();
