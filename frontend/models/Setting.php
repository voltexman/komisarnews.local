<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Setting extends ActiveRecord
{
    public static function tableName()
    {
        return '{{settings}}';
    }

    public function getIndexMetaTags()
    {
        return Setting::find()->select('index_description, index_keywords, index_robots, index_title')->one();
    }
}