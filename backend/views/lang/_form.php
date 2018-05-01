<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Languages */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="center-block" style="width: 50%;">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div class="panel-title"><?= $this->title ?></div>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
