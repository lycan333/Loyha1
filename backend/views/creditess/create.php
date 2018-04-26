<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Credites */

$this->title = 'Create Credites';
$this->params['breadcrumbs'][] = ['label' => 'Credites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
