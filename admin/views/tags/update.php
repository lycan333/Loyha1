<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TagKeys */

$this->title = 'Update Tag Keys: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tag Keys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tag-keys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
