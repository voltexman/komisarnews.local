<?php


namespace backend\widgets;


use backend\models\Mail;
use yii\base\Widget;

class MailSend extends Widget
{
    public function run()
    {
        return $this->render('mailSendForm', ['model' => (new Mail())]);
    }
}