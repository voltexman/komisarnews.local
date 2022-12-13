<?php


namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\httpclient\Client;
use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;

class Visitor extends ActiveRecord
{
    public static function tableName()
    {
        return '{{visitors}}';
    }

    public function hasVisitor()
    {
        return Visitor::find()
            ->where(['ip' => Yii::$app->request->userIP])
            ->one();
    }

    public function addVisitor()
    {
        $visitor = new Visitor();
        $visitor->ip = Yii::$app->request->userIP;
        $visitor->location = self::getVisitorLocation();
        $visitor->date = Yii::$app->formatter->asDate('now', 'yyyy-MM-dd');
        $visitor->time = Yii::$app->formatter->asTime('now', 'HH:mm:ss');
        $visitor->pages = Json::encode(ArrayHelper::toArray(self::getVisitedPageName()));
        $visitor->browser = (new Browser())->getName();
        $visitor->os = (new Os())->getName();
        $visitor->device = Yii::getAlias('@device');
        $visitor->count = 1;
        $visitor->save();
    }

    public function updateVisitor()
    {
        $visitor = Visitor::find()
            ->where(['ip' => Yii::$app->request->userIP])
            ->one();
        $pages = Json::decode($visitor->pages);
        if (!ArrayHelper::isIn(self::getVisitedPageName(), $pages)) {
            array_push($pages, self::getVisitedPageName());
            $visitor->pages = Json::encode($pages);
            $visitor->save();
        }
        $visitor->updateCounters(['count' => 1]);
    }

    protected function getVisitedPageName()
    {
        $articles = new Articles();

        if ($articles->getArticleByAlias(Yii::$app->request->pathInfo) !== NULL) {
            $article = $articles->getArticleByAlias(Yii::$app->request->pathInfo);

            return $article->name;
        }
        return Yii::$app->request->pathInfo;
    }

    protected static function getVisitorLocation()
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
}