<?php

namespace backend\widgets;

use Yii;
use rmrevin\yii\fontawesome\FAS;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class AddButtonShow extends Widget
{
    public $hasButton;

    public function run()
    {
        $action = Yii::$app->controller->action->id;
        $controller = Yii::$app->controller->id;

        if ($controller == 'article' && $action == 'index') {
            $this->hasButton = true;
            $textButton = 'Добавить материал';
            $urlButton = $controller . '/' . 'create';
        }
        if ($controller == 'subscriber' && $action == 'index') {
            $this->hasButton = true;
            $textButton = 'Разослать письма';
            $urlButton = '';
        }

        if ($this->hasButton) {
            return Html::a(FAS::icon('plus-circle') . '&nbsp' . $textButton, Url::to($urlButton), ['class' => 'btn btn-warning']);
        }
    }
}
