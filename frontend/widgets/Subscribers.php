<?php

namespace frontend\widgets;

use frontend\models\Subscriber;
use yii\base\Widget;

class Subscribers extends Widget
{
    public function run()
    {
        $model = new Subscriber();

        return $this->render('subscribersForm', [
            'model' => $model,
        ]);
    }
}