<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\searchModels\EmployesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kitobxonlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<?php Pjax::begin(); ?>
<p>
    <?= Html::a('Kitobxon qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => '{items}',
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'user.FIO',
        [
            'header' => 'Kitoblar soni',
            'value' => function ($r) {
                return count($r->bookEmples);
            }
        ],

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
<?php Pjax::end(); ?>
