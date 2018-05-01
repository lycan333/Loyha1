<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Authors */
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
                <div class="row">

                    <?= $form->field($model, 'FIO', [
                        'options' => [
                            'class' => 'col-md-6'
                        ]
                    ])->textInput(['maxlength' => true])->label("FISH") ?>

                    <?= $form->field($model, 'img', [
                        'options' => [
                            "class" => 'col-md-6'
                        ]
                    ])->fileInput(['maxlength' => true])->label("Suratini kiritish") ?>
                </div>
                <div class="row">
                    <?= $form->field($model, 'userId', [
                        'options' => [
                            "class" => "col-md-12"
                        ]
                    ])->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'FIO'))->label("Avtorni tanlash") ?>
                </div>
                <div class="row">
                    <?= $form->field($model, 'about', [
                        'options' => [
                            "class" => "col-md-12"
                        ]
                    ])->textarea(['rows' => 6])->label("Avtor haqida") ?>

                </div>
                <div class="form-group col-md-12">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
