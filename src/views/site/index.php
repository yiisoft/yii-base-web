<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= $this->app->t('yii-base-web', 'Congratulations!') ?></h1>

        <p class="lead"><?= $this->app->t('yii-base-web', 'You have successfully created your Yii-powered application.') ?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com"><?= $this->app->t('yii-base-web', 'Get started with Yii') ?></a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2><?= $this->app->t('yii-base-web', 'Info') ?></h2>

                <p>
                    This is the Index page. You may modify the following file to customize its content:
                </p>

                <code><?= __FILE__ ?></code>



            </div>
            <div class="col-lg-4">
                <h2><?= $this->app->t('yii-base-web', 'Pages') ?></h2>

                <p>List of actions in the application-base site controller:</p>
                <p>
                    <?= Html::a('About', ['about']) ?>
                    <?= Html::a('Contact', ['contact']) ?>
                    <?= Html::a('Login', ['login']) ?>
                </p>
            </div>
            <div class="col-lg-4">
                <h2><?= $this->app->t('yii-base-web', 'Documentation') ?></h2>

                <p>More information about Yii 3.x Framework online:</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/"><?= $this->app->t('yii-base-web', 'Yii Forum') ?> &raquo;</a></p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/"><?= $this->app->t('yii-base-web', 'Yii Documentation') ?> &raquo;</a></p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/"><?= $this->app->t('yii-base-web', 'Yii Extensions') ?> &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
