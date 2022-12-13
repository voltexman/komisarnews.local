<?php

namespace frontend\models;

use yii\base\Model;

class Contacts extends Model
{
	public $name;
	public $contact;
	public $message;

	public function rules()
	{
		return [
			[ ['name', 'contact', 'message'], 'required' ],
			[ ['name', 'contact', 'message'], 'trim' ],
			[ 'name', 'string', 'min' => 2, 'tooShort' => 'Якось маловато для імені :)' ],
			[ 'name', 'string', 'max' => 50, 'tooLong' => 'Занадто багадо для імені :)' ],
			[ 'contact', 'string', 'length' => [5, 35] ],
			[ 'message', 'string', 'min' => 15, 'tooShort' => 'Опишіть детальніше' ]
		];
	}

	public function attributeLabels()
	{
		return [
			'name' => 'Як Вас звати?',
			'contact' => 'Телефон чи Email',
			'message' => 'Ваше повідомлення'
		];
	}
}
