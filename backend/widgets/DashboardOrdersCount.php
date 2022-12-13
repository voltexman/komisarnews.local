<?php

namespace backend\widgets;

use backend\models\Order;
use yii\base\Widget;

class DashboardOrdersCount extends Widget
{
    private static function getSuffix($count)
    {
        switch (substr($count, -1)) {
            case 1: $suffix = 'Заказ'; break;
            case 2: $suffix = 'Заказа'; break;
            case 3: $suffix = 'Заказа'; break;
            case 4: $suffix = 'Заказа'; break;
            default: $suffix = 'Заказов';
        }

        return $suffix;
    }

    public function run()
    {
        $orders = new Order();
        $count = $orders->getOrdersCount();

        return $this->render('dashboardOrdersCount', [
            'count' => $count,
            'suffix' => self::getSuffix($count),
            'last' => ''
        ]);
    }
}
