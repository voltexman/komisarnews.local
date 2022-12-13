<?php

namespace backend\widgets;

use backend\models\Order;
use yii\base\Widget;
use yii\helpers\Json;

class OrderDetailsShow extends Widget
{
    public $order;

    public function run()
    {
        $order = $this->order;
        $photos = Json::decode($order['images']);

        return $this->render('orderDetails', [
            'order' => $order,
            'photos' => $photos
            ]);
    }
}