<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use yii\base\Controller;

class SettingController extends Controller
{
	public $pageName = [
	    'pageIcon' => 'pe-7s-settings',
		'pageTitle' => 'Настройки',
		'pageDescription' => 'Настройки и параметры сайта'
	];

	public function actionIndex()
	{
	    $model = User::findOne(1);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
        }

		return $this->render('index', ['model' => $model]);
	}
}
