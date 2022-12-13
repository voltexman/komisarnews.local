<?php

namespace frontend\widgets;

use frontend\models\Articles;
use yii\base\Widget;

class AboutUs extends Widget
{
	public function run()
	{
		return $this->render('aboutUs', [
			'cities' => (new Articles)::findAll(['category' => 'cities'])
		]);
	}
}
