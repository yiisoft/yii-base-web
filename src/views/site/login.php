<?php

/** @var yii\web\View $this */
/** @var Yiisoft\Yii\Bootstrap4\ActiveForm $form */
/** @var yii\app\forms\LoginForm $model */
/** @var bool $setupIncomplete */
/** @var string[] $requiredPackages */

use yii\helpers\Html;
use Yiisoft\Yii\Bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
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
    <?php else: ?>
    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
    <?php endif ?>
</div>
