<?php

namespace frontend\controllers;

use frontend\models\BookAuthors;
use frontend\models\BookEmples;
use frontend\models\Books;
use yii\data\ActiveDataProvider;

class BooksController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = new ActiveDataProvider([
            'query'=>BookEmples::find()
        ]);
        return $this->render('index',[
            'dataProvider'=>$data
        ]);
    }
    public function actionCategory($category){
        $data = new ActiveDataProvider([
            'query'=>Books::find()->where(['categoryId'=>$category])
        ]);
        return $this->render('index',[
            'dataProvider'=>$data
        ]);
    }

}
