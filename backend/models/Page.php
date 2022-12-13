<?php

namespace backend\models;

use yii\db\ActiveRecord;
use yii\helpers\BaseStringHelper;

class Page extends ActiveRecord
{
    public $indexationItems = [
        'index, follow' => 'Индексировать страницу, индексировать ссылки',
        'index, nofollow' => 'Индексировать страницу, не индексировать ссылки',
        'noindex, follow' => 'Не индексировать страницу, индексировать ссылки',
        'noindex, nofollow' => 'Не индексировать страницу, не индексировать ссылки'
    ];

    public static function tableName()
    {
        return '{{pages}}';
    }

    public function rules()
    {
        return [
            [['main_title', 'order_title', 'contacts_title',
                'main_keywords', 'order_keywords', 'contacts_keywords',
                'main_description', 'order_description', 'contacts_description', 'contacts_text'], 'required', 'message' => '{attribute} нужно заполнить'],
            [['main_title', 'order_title', 'contacts_title',
                'main_keywords', 'order_keywords', 'contacts_keywords',
                'main_description', 'order_description', 'contacts_description'], 'trim'],
            [['main_indexation', 'main_text', 'order_indexation', 'contacts_indexation'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'main_title' => 'Заголовок',
            'main_text' => 'Текст на главной странице',
            'order_title' => 'Заголовок',
            'contacts_title' => 'Заголовок',
            'main_keywords' => 'Ключевые слова',
            'order_keywords' => 'Ключевые слова',
            'contacts_keywords' => 'Ключевые слова',
            'main_description' => 'Описание',
            'order_description' => 'Описание',
            'contacts_description' => 'Описание',
            'main_indexation' => 'Параметры индексации',
            'order_indexation' => 'Параметры индексации',
            'contacts_indexation' => 'Параметры индексации',
            'contacts_text' => 'Текст в блоке'
        ];
    }
}