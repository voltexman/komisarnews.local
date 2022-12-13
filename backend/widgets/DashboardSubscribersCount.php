<?php

namespace backend\widgets;

use backend\models\Subscriber;
use yii\base\Widget;

class DashboardSubscribersCount extends Widget
{
    private static function getSuffix($count)
    {
        switch (substr($count, -1)) {
            case 1: $suffix = 'Подписчик'; break;
            case 2: $suffix = 'Подписчика'; break;
            case 3: $suffix = 'Подписчика'; break;
            case 4: $suffix = 'Подписчика'; break;
            default: $suffix = 'Подписчиков';
        }

        return $suffix;
    }

    public function run()
    {
        $subscribers = new Subscriber();
        $count = $subscribers::find()->count();

        return $this->render('dashboardSubscribersCount', [
            'subscribers' => $count,
            'suffix' => self::getSuffix($count)
        ]);
    }
}
