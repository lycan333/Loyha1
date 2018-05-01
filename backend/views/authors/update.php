<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Authors */

$this->title = 'Avtor: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
