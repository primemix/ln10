<?php
use frontend\components\FirstWidget;

$this->registerCssFile('@web/css/main.css');

?>

<h1>main/index</h1>
<h2><?= Yii::t('common', 'Example text...') ?></h2>
<p>
    <?= FirstWidget::widget() ?>
    <?= $hello ?>
</p>