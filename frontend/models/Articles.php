<?php

namespace frontend\models;

use NazmulB\MacAddressPhpLib\MacAddress;
use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
    const MAIN_PAGE = 1;

    private static function getMenuItems($category)
    {
        $items = [];

        $items = Articles::find()
            ->select(['name', 'alias'])
            ->where(['category' => $category])
            ->orderBy('id DESC')
            ->asArray()
            ->all();

        return $items;
    }

    static function viewMenuItems($category)
    {
        $array = self::getMenuItems($category);
        $result = [];

        for ( $i = 0; $i < count($array); $i++ ) {

            $result[] = [
                'label' => $array[$i]['name'],
                'url' => ['/' . $array[$i]['alias']],
            ];
        }

        return $result;
    }

    public function getMainPage()
    {
        $mainPage = Articles::find()
        ->where(['main' => self::MAIN_PAGE])
        ->one();

        return $mainPage;
    }

    public function getArticleByAlias($alias)
    {
        $article = Articles::find()
        ->where(['alias' => $alias])
        ->one();

        return $article;
    }
}
