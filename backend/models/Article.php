<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
	public static function tableName()
	{
		return '{{articles}}';
	}

	public function rules()
    {
        return [
            [['name', 'title'], 'required', 'message' => 'нужно заполнить'],
            [['name', 'title', 'alias', 'keywords', 'description'], 'trim'],
            [['text', 'category', 'publication', 'indexation'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название статьи',
            'title' => 'Заголовок статьи',
            'alias' => 'Псевдоним',
            'text' => 'Материал',
            'publication' => 'Опубликован на сайте',
            'indexation' => 'Индексируется поисковиками',
            'category' => 'Категория материала',
            'keywords' => 'Ключевые слова',
            'description' => 'Описание'
        ];
    }

    public function getStatus($change, $id)
    {
        return Article::findOne($id)->$change;
    }

    public function setStatus($change, $id, $setStatus)
    {
        $status = Article::findOne($id);
        $status->$change = $setStatus;
        return $status->update();
    }
}
