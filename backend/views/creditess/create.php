<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Credites */

$this->title = 'Masul shaxslar';
$this->params['breadcrumbs'][] = ['label' => 'Credites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
