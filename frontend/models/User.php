<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    const STATUS_ADMIN = 'admin';

    public static function tableName()
    {
        return '{{%users}}';
    }
}
