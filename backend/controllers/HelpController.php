<?php

namespace backend\controllers;

use yii\base\Controller;

class HelpController extends Controller
{
	public $pageName = [
		'pageIcon' => 'pe-7s-help2',
		'pageTitle' => 'Справка',
		'pageDescription' => 'Помощь и ответы на многие вопросы'
	];

	public function actionIndex()
	{
		return $this->render('index');
	}
}
