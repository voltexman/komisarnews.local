<?php

namespace backend\widgets;

use yii\base\Widget;

class ArticleCategoryNameShow extends Widget
{
	public $category;

	public function run()
	{
		$category = $this->category;
		switch ($category) {
			case 'sale':
				$category = 'Продажа волос';
				break;
			case 'article':
				$category = 'Статьи';
				break;
            case 'main':
                $category = 'Главная';
                break;
            case 'cities':
                $category = 'Города';
                break;
		}

		return $category;
	}
}
