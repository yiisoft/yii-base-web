<?php

/* @var $this \yii\web\View */
/* @var $content string */

use Yiisoft\Yii\Base\Web\Widgets\Alert;
use Yiisoft\Yii\Base\Web\Assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Yii;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= $this->getApp()->language ?>">
<head>
    <meta charset="<?= $this->getApp()->encoding ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title . ' · ' . $this->app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <?= Html::a($this->getApp()->name, $this->getApp()->homeUrl); ?>
    <?= Menu::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => $this->app->t('yii', 'Home'), 'url' => ['/site/index']],
            ['label' => $this->app->t('yii-base-web', 'About'), 'url' => ['/site/about']],
            ['label' => $this->app->t('yii-base-web', 'Contact'), 'url' => ['/site/contact']],
           true /* TODO: This should be $this->getApp()->user->isGuest */ ? (
               ['label' => $this->app->t('yii-base-web', 'Login'), 'url' => ['/site/login']]
           ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . '$this->getApp()->user->identity->username' . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    ?>
</header>

<main>
    <?= Breadcrumbs::widget([
        'links' => $this->params['breadcrumbs'] ?? [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer>
    <p class="float-left">&copy; My Company <?= date('Y') ?></p>
    <p class="float-right">
        <?= Yii::t('yii', 'Powered by {yii}', [
            'yii' => '<a href="http://www.yiiframework.com/" rel="external">' . Yii::t('yii', 'Yii Framework') . '</a>',
        ]) ?>
    </p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
