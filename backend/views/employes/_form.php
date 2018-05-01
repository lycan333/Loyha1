<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employes */
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

                <?= $form->field($model, 'userId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'id', 'FIO'))?>

                <?= $form->field($model, 'img')->fileInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<div class="employes-form">



</div>
