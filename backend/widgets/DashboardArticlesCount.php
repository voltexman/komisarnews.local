<?php

namespace backend\widgets;

use backend\models\Article;
use yii\base\Widget;

class DashboardArticlesCount extends Widget
{
    private static function getSuffix($count)
    {
        switch (substr($count, -1)) {
            case 0: $suffix = 'Статей'; break;
            case 1: $suffix = 'Статья'; break;
            case 5: $suffix = 'Статей'; break;
            case 6: $suffix = 'Статей'; break;
            case 7: $suffix = 'Статей'; break;
            case 8: $suffix = 'Статей'; break;
            case 9: $suffix = 'Статей'; break;
            case 11:$suffix = 'Статей'; break;
            case 12:$suffix = 'Статей'; break;
            case 13:$suffix = 'Статей'; break;
            case 14:$suffix = 'Статей'; break;
            default: $suffix = 'Статьи';
        }

        return $suffix;
    }

    public function run()
    {
        $articles = new Article();
        $count = $articles::find()->count();

        return $this->render('dashboardArticlesCount', [
            'count' => $count,
            'suffix' => self::getSuffix($count),
            'shared' => '5'
        ]);
    }
}
