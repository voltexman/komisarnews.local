<?php

namespace backend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class ArticleStatusShow extends Widget
{
	public $id;
	public $publication = false;
	public $indexation = false;

	public function run()
	{
		$id = $this->id;
		$publication = $this->publication;
		$indexation = $this->indexation;

		if ($publication) $publication = true;
		if ($indexation) $indexation = true;

		return
            Html::checkbox('publication', $publication, [
                'class' =>  'js-switch',
                'id' => $id,
                'change' => 'publication'
            ]) . '&nbsp' .
            Html::checkbox('indexation', $indexation, [
                'class' => 'js-switch',
                'id' => $id,
                'change' => 'indexation'
            ]);
	}
}
