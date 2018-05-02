<? foreach (Yii::$app->session->allFlashes as $k => $v) { ?>
    <div class="alert alert-<?= $k ?>">
        <?= $v ?>
    </div>
<? } ?>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div class="panel-title"><?= $model->getAttribute('title') ?></div>
            </div>
            <?= \yii\widgets\DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'title',
                    'pageSize',
                    'EditionYear',
                    'editions',
                    'ISBN',
                    'publisher.name',
                    'prince',
                    'qrcode',
                    'category.name',
                    'lang.lang',
                ],
            ]) ?>
            <div class="panel-footer">
                <?= \yii\helpers\Html::a("O'zgartirish", \yii\helpers\Url::to(['books/update', 'id' => $model->getAttribute('id')]), [
                    'class' => 'btn btn-success'
                ]) ?>
                <?= \yii\helpers\Html::a("O'chirish", \yii\helpers\Url::to(['books/delete', 'id' => $model->getAttribute('id')]), [
                    'class' => 'btn btn-danger'
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= $model->getAttributeLabel('img') ?></div>
            </div>
            <img src="/uploads/<?= $model->getAttribute('img') ?>" style="width: 100%" alt="">
        </div>
    </div>
</div>