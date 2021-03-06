<?php

namespace backend\controllers;

use yii\filters\AccessControl;

class HomeController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $this->layout="app";
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
                'denyCallback' => function ($r, $c) {
                    \Yii::$app->session->setFlash('danger',"Siz ro'yhatdan o'tmadiz");
                    \Yii::$app->user->loginRequired();
                }
            ]
        ];// TODO: Change the autogenerated stub
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
