<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pageSize')->textInput() ?>

    <?= $form->field($model, 'EditionYear')->textInput() ?>

    <?= $form->field($model, 'editions')->textInput() ?>

    <?= $form->field($model, 'ISBN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publisherId')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Publisher::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'prince')->textInput() ?>

    <?= $form->field($model, 'qrcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoryId')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Categories::find()->all(),'id','name')) ?>

    <?= $form->field($model, 'langId')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Languages::find()->all(),'id','lang')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
