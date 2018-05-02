<?php
/* @var $this yii\web\View */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">Kitoblar</div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="panel-body no-padding">
                <?=
                \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [
                        'tag' => 'ul',
                        'class' => 'comments-list',
                    ],
                    'emptyText'=>'Baza Bo\'sh',
                    'layout' => "{items}",
                    'itemView' => 'view',
                    'itemOptions' => [
                        'tag' => 'li',
                    ]
                ]);
                ?>
            </div>

        </div>

    </div>
</div>