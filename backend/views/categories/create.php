<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Categories */

$this->title = 'Kategoriya qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

