<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Employes */

$this->title = 'Kitobxon';
$this->params['breadcrumbs'][] = ['label' => 'Employes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

