<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Publisher */

$this->title = 'Nashiriyot qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Publishers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
