<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\searchModels\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="panel panel-primary">

        <div class="panel-heading">
            <div class="panel-title">
                <h4>
                    <?= Html::encode($this->title) ?>
                    <span class="badge badge-danger"><?=$dataProvider->count?></span>
                </h4>
            </div>
        </div>

        <div class="panel-body no-padding">
            <!-- List of Comments -->
            <?=
            \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'options' => [
                    'tag' => 'ul',
                    'class' => 'comments-list',
                ],
                'layout' => "{items}",
                'itemView' => 'view',
                'itemOptions' => [
                    'tag' => 'li',
                ]
            ]);
            ?>

        </div>

    </div>

    <?php Pjax::end(); ?>
</div>
