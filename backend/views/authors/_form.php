<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Authors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authors-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(),'id','FIO')) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
