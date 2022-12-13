<?php

namespace backend\controllers;

use Yii;
use backend\widgets\OrderDetailsShow;
use backend\models\Order;
use yii\base\Controller;

class OrderController extends Controller
{
    public $pageName = [
        'pageIcon' => 'pe-7s-id',
        'pageTitle' => 'Заказы на продажу',
        'pageDescription' => 'Сформированный список всех заказов на продажу волос'
    ];

    public function actionIndex()
    {
        return $this->render('index', ['orders' => (new Order())::find()->all()]);
    }

    public function actionStatus()
    {
        if (Yii::$app->request->isAjax) {
            $order = Order::findOne(['id' => Yii::$app->request->post('id')]);
            $order->status = Yii::$app->request->post('status');
            $order->save();
        }
        return false;
    }

    public function actionDetails()
    {
        if (Yii::$app->request->isAjax) {
            return OrderDetailsShow::widget(['order' => (new Order())::findOne(Yii::$app->request->get('id'))]);
        }
        return false;
    }
}
