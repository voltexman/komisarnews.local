<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use dastanaron\translit\Translit;
use yii\helpers\Json;
use yii\imagine\Image;

class Order extends ActiveRecord
{
    public $colors = [
        'Блонд' => 'Блонд',
        'Світло-русий' => 'Світло-русий',
        'Русий' => 'Русий',
        'Світло-коричневий' => 'Світло-коричневий',
        'Коричневий' => 'Коричневий',
        'Темно-коричневий' => 'Темно-коричневий',
        'Чорний' => 'Чорний'
    ];

    public static function tableName()
    {
        return '{{orders}}';
    }

    public function rules()
    {
        return [
            [['fio', 'phone'], 'required', 'message' => 'Обов`язково заповнити'],
            [['fio', 'city', 'email', 'phone'], 'trim'],
            [['email'], 'email'],
            [['phone'], 'number'],
            [['fio', 'email'], 'string', 'min' => 2, 'max' => 70],
            [['weight'], 'number', 'min' => 0, 'max' => 10000],
            [['length'], 'number', 'min' => 0, 'max' => 2000],
            [['age'], 'number', 'min' => 18, 'max' => 50],
            [['images'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 10],
            [['message'], 'string', 'max' => 2000],
            [['color'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'fio' => 'Ваше ім`я',
            'city' => 'Місто',
            'age' => 'Ваш вік',
            'email' => 'Електронна пошта',
            'phone' => 'Номер телефону',
            'color' => 'Колір',
            'weight' => 'Вага',
            'length' => 'Довжина',
            'images' => 'Фотографії',
            'message' => 'Ваше повідомлення'
        ];
    }

    static function imagesDirectoryName($fio)
    {
        $translit = new Translit();
        $directoryName = $translit->translit($fio, true) . '_' .
            Yii::$app->formatter->asDate('now', 'yyyyMMdd') .
            Yii::$app->formatter->asTime('now', 'HHmmss');

        return $directoryName;
    }

    public function upload($fio)
    {
        if ($this->validate()) {
            $imagesDirectory = self::imagesDirectoryName($fio);
            $imagesPath = 'uploads/' . $imagesDirectory . '/';
            $thumbnailsPath = $imagesPath . 'thumbnails' . '/';
            FileHelper::createDirectory($imagesPath);
            FileHelper::createDirectory($thumbnailsPath);
            foreach ($this->images as $file) {
                $file->saveAs($imagesPath . $file->baseName . '.' . $file->extension);
                Image::thumbnail($imagesPath . $file->baseName . '.' . $file->extension, 120, 120)
                    ->save($thumbnailsPath . $file->baseName . '.' . $file->extension);
                $imagesList[] = $file->baseName . '.' . $file->extension;
            }
            return [
                'imagesDirectory' => $imagesDirectory,
                'imagesList' => Json::encode($imagesList)
            ];
        } else {
            return false;
        }
    }

    public function getCities()
    {
        return include Yii::getAlias('@app') . '/assets/cities.php';
    }
}
