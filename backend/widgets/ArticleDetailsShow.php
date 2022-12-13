<?php

namespace backend\widgets;

use yii\base\Widget;
use backend\models\Article;

class ArticleDetailsShow extends Widget
{
	public $id;

	public function run()
	{
		$id = $this->id;
		return $this->render('articleDetails', [
			'article' => Article::findOne(['id' => $id])
		]);
	}
}
