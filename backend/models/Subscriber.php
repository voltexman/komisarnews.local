<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Subscriber extends ActiveRecord
{
    const LAST_LIMIT = 5;

    public static function tableName()
    {
        return '{{subscribers}}';
    }

    public function getLastSubscribers()
    {
        return Subscriber::find()
            ->limit(self::LAST_LIMIT)
            ->all();
    }
}
