<?php

namespace backend\widgets;

use frontend\models\Visitor;
use yii\base\Widget;

class DashboardVisitorsCount extends Widget
{
    private static function getSuffix($count)
    {
        switch (substr($count, -1)) {
            case 0: $suffix = 'Посетителей'; break;
            case 1: $suffix = 'Посетитель'; break;
            case 2: $suffix = 'Посетителя'; break;
            case 5: $suffix = 'Посетителей'; break;
            default: $suffix = 'Посетителей';
        }

        return $suffix;
    }

    public function run()
    {
        $visitors = new Visitor();
        $count = $visitors::find()->count();

        return $this->render('dashboardVisitorsCount', [
            'counts' => $count,
            'suffix' => self::getSuffix($count)
        ]);
    }
}
