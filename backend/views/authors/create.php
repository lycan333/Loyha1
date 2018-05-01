<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Authors */

$this->title = 'Create Authors';
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
