<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TagKeys */

$this->title = 'Create Tag Keys';
$this->params['breadcrumbs'][] = ['label' => 'Tag Keys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-keys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
