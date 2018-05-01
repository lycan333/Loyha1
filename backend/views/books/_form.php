<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<? foreach (Yii::$app->session->allFlashes as $k => $v) { ?>
    <div class="alert alert-<?= $k ?>">
        <?= $v ?>
    </div>
<? } ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Kitob malumotlari</div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?= $form->field($model, 'title', [
                            'options' => [
                                'class' => 'col-md-8'
                            ]
                        ])->textInput(['maxlength' => true,])->label("Kitob nomi") ?>

                        <?= $form->field($model, 'pageSize', [
                            'options' => [
                                'class' => 'col-md-4'
                            ]
                        ])->textInput()->label("Kitop sahifalari") ?>

                    </div>
                    <div class="row">
                        <?= $form->field($model, 'EditionYear', [
                            'options' => [
                                'class' => 'col-md-4'
                            ]
                        ])->textInput()->label("Nashr etilgan yili") ?>
                        <?= $form->field($model, 'editions', [
                            'options' => [
                                'class' => 'col-md-4'
                            ]
                        ])->textInput()->label("Nashir raqami") ?>
                        <?= $form->field($model, 'imageFiles',
                            [
                                'options' => [
                                    'class' => 'col-md-4'
                                ]
                            ])->fileInput()->label("Surati") ?>

                    </div>
                    <div class="row">
                        <?= $form->field($model, 'ISBN', [
                            'options' => [
                                'class' => 'col-md-4'
                            ]
                        ])->textInput(['maxlength' => true])->label("ISBN") ?>


                        <?= $form->field($model, 'prince', [
                            'options' => [
                                'class' => 'col-md-4'
                            ]

                        ])->textInput()->label("Narxi") ?>

                        <?= $form->field($model, 'qrcode', [
                            'options' => [
                                'class' => 'col-md-4'
                            ]

                        ])->textInput(['maxlength' => true])->label("QRCode") ?>

                    </div>

                </div>
                <div class="panel-footer">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Kategoriya</div>
                </div>
                <div class="panel-body">
                    <?= $form->field($model, 'categoryId')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Categories::find()->all(), 'id', 'name'))->label("Kategoriyasi") ?>
                    <?= $form->field($model, 'publisherId', [])->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Publisher::find()->all(), 'id', 'name'))->label("Nashriyot") ?>
                    <?= $form->field($model, 'langId')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Languages::find()->all(), 'id', 'lang'))->label("Nashr tili") ?>
                    <div class="form-group">
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>