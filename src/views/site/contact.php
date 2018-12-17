<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var yii\app\forms\ContactForm $model */
/** @var bool $setupIncomplete */
/** @var string[] $requiredPackages */

use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($setupIncomplete) : ?>
        <div class="alert alert-error">
            In order to be able to access this sample page, you will need to install these required packages:
            <ul>
                <?php foreach ($requiredPackages as $package => $class): ?>
                <li><a href="https://github.com/yiisoft/<?= $package ?>"><?= $package ?></a> (provides <?= $class ?>)</li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php elseif ($this->app->session->hasFlash('contactFormSubmitted')): ?>
        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if ($this->app->get('mailer')->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= $this->app->getAlias($this->app->get('mailer')->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'as clientScript' => \yii\jquery\ActiveFormClientScript::class,
                ]); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
