<?php

use yii\widgets\DetailView;

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        [
            'label' => 'Имя',
            'attribute' => 'fio',
        ],
        [
            'label' => 'Возраст',
            'attribute' => 'age',
        ],
        [
            'label' => 'Email',
            'attribute' => 'email',
        ],
        [
            'label' => 'Телефон',
            'attribute' => 'phone',
        ],
        [
            'label' => 'Город',
            'attribute' => 'city',
        ],
        [
            'label' => 'Цвет',
            'attribute' => 'color',
        ],
        [
            'label' => 'Вес',
            'attribute' => 'weight',
        ],
        [
            'label' => 'Длина',
            'attribute' => 'length',
        ],
        [
            'label' => 'Сообщение',
            'attribute' => 'message',
        ],
    ],
]);