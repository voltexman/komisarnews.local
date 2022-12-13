<?php


namespace backend\controllers;

use backend\models\Subscriber;
use yii\base\Controller;

class SubscriberController extends Controller
{
    public $pageName = [
        'pageIcon' => 'pe-7s-users',
        'pageTitle' => 'Подписчики',
        'pageDescription' => 'Список подписавшихся на сайте'
    ];

    public function actionIndex()
    {
        $subscriber = new Subscriber();

         return $this->render('index', [
             'subscribers' => $subscriber::find()->all()
         ]);
    }
}