<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Languages */

$this->title = 'Yangi tilni kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
