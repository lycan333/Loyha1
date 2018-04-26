<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="center-block" style="width: 25%">
        <? foreach (Yii::$app->session->allFlashes as $k=>$v  ) {?>
            <div class="alert alert-<?=$k?>">
                <?=$v?>
            </div>
        <?}?>

        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    <?= Html::encode($this->title) ?>
                </div>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

