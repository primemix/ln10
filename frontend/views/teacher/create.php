<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model frontend\models\Teacher */
$this->title = 'Create Teacher';
$this->params['breadcrumbs'][] = ['label' => 'Teacher', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>