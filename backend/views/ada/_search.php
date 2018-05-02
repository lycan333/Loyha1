<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\queries\BookQuery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'pageSize') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'EditionYear') ?>

    <?php // echo $form->field($model, 'editions') ?>

    <?php // echo $form->field($model, 'ISBN') ?>

    <?php // echo $form->field($model, 'publisherId') ?>

    <?php // echo $form->field($model, 'prince') ?>

    <?php // echo $form->field($model, 'qrcode') ?>

    <?php // echo $form->field($model, 'categoryId') ?>

    <?php // echo $form->field($model, 'langId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
