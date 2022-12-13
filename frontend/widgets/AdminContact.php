<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\User;

class AdminContact extends Widget
{
	public function run()
	{
		return $this->render('adminContact', [
		    'admin' => User::findOne(1)
        ]);
	}
}
