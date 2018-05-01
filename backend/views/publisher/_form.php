<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Publisher */
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

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
