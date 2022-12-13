<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Visitor;
use frontend\models\Page;
use frontend\models\Subscriber;
use frontend\models\Articles;
use frontend\models\Contacts;
use frontend\models\Order;
use yii\helpers\Json;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout', 'signup'],
//                'rules' => [
//                    [
//                        'actions' => ['signup'],
//                        'allow' => true,
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => '404'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function beforeAction($action)
    {
        $visitor = new Visitor();

        !$visitor->hasVisitor() ? $visitor->addVisitor() : $visitor->updateVisitor();

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        // $model = new Setting();

        return $this->render('index', [
            'metaTags' => Page::find()->one()
        ]);
    }

    public function actionArticle($alias)
    {
        $article = new Articles();

        if ($article->getArticleByAlias($alias) !== NULL) {
            return $this->render('article', [
                'article' => $article->getArticleByAlias($alias)
            ]);
        } else return $this->redirect('404/')->send();
    }

    public function actionOrder()
    {
        $model = new Order();

        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->status = 'Новый';
                $model->images = UploadedFile::getInstances($model, 'images');
                if ($model->images) {
                    $imagesUpload = $model->upload(Yii::$app->request->post('Order')['fio']);
                    if ($imagesUpload) {
                        // file is uploaded successfully
                        $model->directory = $imagesUpload['imagesDirectory'];
                        $model->images = $imagesUpload['imagesList'];
                    }
                } else {
                    $model->images = null;
                    $model->directory = null;
                }
                $model->options = Json::encode(Yii::$app->request->post('options'));
                $model->save();
//                return $this->render('order', ['model' => $model]);
                Yii::$app->mailer->compose('order/send-order-mail', ['model' => $model])
                    ->setFrom('voltexman@gmail.com')
                    ->setTo('123komisar@gmail.com')
                    ->setSubject('Заказ на покупку волос с сайта komisarnews.com')
                    ->send();
                return $this->redirect('/site/order');
            }
        }

        return $this->render('order', [
            'model' => $model,
            'metaTags' => Page::find()->one()
        ]);
    }

    public function actionContacts()
    {
        $model = new Contacts();

        if (Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//                $data = Yii::$app->request->post('Contacts');
                return 'Благодарим Вас, письмо успешно отправлено, мы с Вами свяжемся по указанным контактам';
            }
        }
        return $this->render('contacts', [
            'model' => $model,
            'metaTags' => Page::find()->one()
        ]);
    }

    public function actionSubscriber()
    {
        $model = new Subscriber();

        if (Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                if ($model->hasSubscriber(Yii::$app->request->post('Subscriber')['email'])) {
                    return 'Ваш E-Mail вже зареєстрований в нас';
                } else {
                    if ($model->addSubscriber(Yii::$app->request->post('Subscriber')['email'])) {
                        return 'Ви успішно підписались на наші листи';
                    }
                }
            }
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
