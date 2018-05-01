<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Publisher */

$this->title = 'Nashriyotni o\'zgartirish: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Nashriyot', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
