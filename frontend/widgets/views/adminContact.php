<?php

/**
 * @var $admin User
 */

use frontend\models\User;
use yii\widgets\Menu;
use rmrevin\yii\ionicon\Ion;

echo Menu::widget([
    'encodeLabels' => false,
    'options' => [
        'class' => 'page-contact-block'
    ],
    'items' => [
        ['label' => Ion::icon('person') . $admin['name']],
        ['label' => Ion::icon('android-call') . '+' . $admin['phone']],
        ['label' => Ion::icon('email') . $admin['email']],
        ['label' => Ion::icon('ios-location') . $admin['address']]
    ],
]);
