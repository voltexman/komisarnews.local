<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    const STATUS_NEW = 'Новый';
    const LAST_LIMIT = 5;

    public static function tableName()
    {
        return '{{orders}}';
    }

    public function getLastOrders()
    {
        return Order::find()
            ->where(['status' => self::STATUS_NEW])
            ->limit(self::LAST_LIMIT)
            ->orderBy(['id' => SORT_DESC])
            ->all();
    }

    public function getOrderById($id)
    {
        return Order::findOne($id);
    }

    public function getAllOrders()
    {
        return;
    }

    public function changeStatus()
    {
        return false;
    }

    public function getOrdersCount()
    {
        return Order::find()->count();
    }
}
