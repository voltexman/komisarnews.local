<?php

namespace backend\controllers;

use backend\widgets\MailSend;
use yii\base\Controller;

class MailController extends Controller
{
	public $pageName = [
	    'pageIcon' => 'pe-7s-mail',
		'pageTitle' => 'Письма',
		'pageDescription' => 'Обращения посетителей и клиентов'
	];

	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionSend()
    {
        return MailSend::widget();
    }
}
