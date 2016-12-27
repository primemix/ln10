<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width-device-width, initial-scale=1']); ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <nav class="row">
        <div class="nav-wrapper">
            <a href="<?= Url::to('/') ?>" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?=Url::toRoute('/university'); ?>"><?= Yii::t('common', 'University') ?></a></li>
                <li><a href="<?=Url::toRoute('/department'); ?>"><?= Yii::t('common', 'Department') ?></a></li>
                <li><a href="<?=Url::toRoute('/teacher'); ?>"><?= Yii::t('common', 'Teachers') ?></a></li>
                <li><a href="<?=Url::toRoute('/student'); ?>"><?= Yii::t('common', 'Students') ?></a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?> | <?= $this->render('main/select-language') ?></p>
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
