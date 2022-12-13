<?php

namespace backend\controllers;

use Yii;
use backend\models\Page;
use yii\base\Controller;

class PagesController extends Controller
{
    public $pageName = [
        'pageIcon' => 'pe-7s-settings',
        'pageTitle' => 'Страницы',
        'pageDescription' => 'Содержимое основных страниц сайта'
    ];

    public function actionIndex()
    {
        $model = Page::find()->one();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
        }

        return $this->render('index', ['model' => $model, 'indexationItems' => $model->indexationItems]);
    }
}