<?php


namespace backend\widgets;


use yii\base\Widget;

class OrderButtonStatus extends Widget
{
    public $order;
    public $class;

    static function getClass($status)
    {
        switch ($status) {
            case 'Завершён': return 'btn-success'; break;
            case 'В ожидании': return 'btn-warning'; break;
            default: return 'btn-danger';
        }
    }

    public function run()
    {
        return $this->render('orderButtonStatus', [
            'order' => $this->order,
            'class' => self::getClass($this->order['status'])
            ]);
    }
}