<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Employes */

$this->title = 'Create Employes';
$this->params['breadcrumbs'][] = ['label' => 'Employes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
