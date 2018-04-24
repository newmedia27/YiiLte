<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */

$this->title = 'Update Posts: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

?>



<div class="posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cats'=>$cats,
    ]) ?>

</div>
