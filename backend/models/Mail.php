<?php


namespace backend\models;


use yii\base\Model;

class Mail extends Model
{
    public $subject;
    public $message;

    public function rules()
    {
        return [
            [['subject', 'message'], 'required', 'message' => 'нужно заполнить'],
            [['subject', 'message'], 'trim']
        ];
    }

    public function attributeLabels()
    {
        return [
            'subject' => 'Тема письма',
            'message' => 'Текст сообщения'
        ];
    }
}