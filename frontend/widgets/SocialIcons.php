<?php

namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class SocialIcons extends Widget
{
	public $position;

	public function run()
	{
		return $this->render('socialIcons', ['position' => $this->position]);
	}
}
