<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\httpclient\Client;

class Subscriber extends ActiveRecord
{
    public static function tableName()
    {
        return '{{subscribers}}';
    }

    public function rules()
    {
        return [
            [['email'], 'required', 'message' => 'Необхідно вказати E-Mail'],
            ['email', 'email', 'message' => 'Треба ввести правильний E-Mail']
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => ''
        ];
    }

    protected static function getLocation()
    {
        $client = new Client([
            'requestConfig' => [
                'format' => Client::FORMAT_JSON
            ],
            'responseConfig' => [
                'format' => Client::FORMAT_JSON
            ],
        ]);
        $response = $client->createRequest()
            ->setMethod('post')
            ->setUrl('http://api.sypexgeo.net/json/' . Yii::$app->request->userIP)
            ->send();

        return $response->data['city']['name_ru'];
    }

    public function hasSubscriber($email)
    {
        return Subscriber::findOne(['email' => $email]);
    }

    public function addSubscriber($email = '')
    {
        $subscriber = new Subscriber();
        $subscriber->email = $email;
        $subscriber->date = Yii::$app->formatter->asDate('now', 'yyyy-MM-dd');
        $subscriber->time = Yii::$app->formatter->asTime('now', 'HH:mm:ss');
        $subscriber->location = self::getLocation();
        return $subscriber->save();
    }
}