<?php

namespace backend\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%users}}';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'address' => 'Адрес',
            'phone' => 'Телефон'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'email'], 'required'],
            [['name', 'address', 'phone', 'email'], 'trim'],
            [['email'], 'email'],
            [['phone'], 'number']
        ];
    }
}