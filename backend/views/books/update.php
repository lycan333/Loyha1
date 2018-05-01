<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */

$this->title = 'Kitobni o\'zgatirish: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
