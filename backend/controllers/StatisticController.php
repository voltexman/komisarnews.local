<?php

namespace backend\controllers;

use yii\base\Controller;

class StatisticController extends Controller
{
	public $pageName = [
	    'pageIcon' => 'pe-7s-graph2',
		'pageTitle' => 'Статистика',
		'pageDescription' => 'Собранная статистика всех посещений сайта и просмотров страниц'
	];

	public function actionIndex()
	{
		return $this->render('index');
	}
}
