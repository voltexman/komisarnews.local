<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Article;
use yii\filters\AccessControl;
use dastanaron\translit\Translit;
use backend\widgets\ArticleDetailsShow;

class ArticleController extends Controller
{
    public $pageName = [
        'pageIcon' => 'pe-7s-note2',
        'pageTitle' => 'Список материалов',
        'pageDescription' => 'Все материалы по продаже волос по городам и обычные статьи'
    ];

    public function actions()
    {
        return [
            'images-get' => [
                'class' => 'vova07\imperavi\actions\GetImagesAction',
                'url' => 'http://backend.komisarnews/images', // Directory URL address, where files are stored.
                'path' => '@web/images/content', // Or absolute path to directory where files are stored.
                'options' => ['only' => ['*.jpg', '*.jpeg', '*.png', '*.gif', '*.ico']], // These options are by default.
            ],
        ];
    }

//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
////                'only' => ['login', 'logout', 'signup'],
//                'rules' => [
//                    [
//                        'allow' => true,
//                        'actions' => ['login', 'signup'],
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'allow' => true,
//                        'actions' => ['logout'],
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//        ];
//    }

    public function actionIndex()
    {
        $articles = new Article;

        if (Yii::$app->request->post()) {
            Yii::$app->response->redirect(\yii\helpers\Url::to('admin/articles', true));
        }
        return $this->render('list', [
            'articles' => $articles::find()->all()
        ]);
    }

    public function actionStatus()
    {
        $article = new Article;

        if ($article->getStatus(Yii::$app->request->post('change'), Yii::$app->request->post('id'))) {
            if ($article->setStatus(Yii::$app->request->post('change'), Yii::$app->request->post('id'), 0)) {
                return false;
            }
        } else {
            if ($article->setStatus(Yii::$app->request->post('change'), Yii::$app->request->post('id'), 1)) {
                return true;
            }
        }
    }

    public function actionDetails()
    {
        return ArticleDetailsShow::widget(['id' => Yii::$app->request->post('id')]);
    }

    public function actionCreate()
    {
        $model = new Article();

        if (Yii::$app->request->post()) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                if (!$model->alias) {
                    $model->alias = (new Translit())->translit($model->name, true, 'ru-en');
                }
                $model->save();
            }
            return self::actionIndex();
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionUpdate()
    {
        if (Yii::$app->request->isPost) {
            $model = Article::findOne(Yii::$app->request->post('Article')['id']);

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->alias = (new Translit())->translit($model->name, true, 'ru-en');
                $model->save();
            }
            return $this->redirect('/admin/articles');
        }

        return $this->render('view', [
            'model' => (new Article())::findOne(Yii::$app->request->get('id'))
        ]);
    }

    public function actionDelete()
    {
        if (Yii::$app->request->get()) {
            $model = Article::findOne(Yii::$app->request->get('id'));
            $model->delete();
        }
        return $this->redirect('/admin/articles');
    }
}
