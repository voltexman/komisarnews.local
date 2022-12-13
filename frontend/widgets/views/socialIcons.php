<?php

use yii\widgets\Menu;
use yii\helpers\Url;
use kartik\icons\Icon;

echo Menu::widget([
	'encodeLabels' => false,
	'options' => [
		'class' => $position . '-social-block'
	],
    'items' => [
        ['label' => Icon::show('facebook', ['framework' => Icon::FA]), 'url' => Url::to('https://www.facebook.com')],
        ['label' => Icon::show('youtube', ['framework' => Icon::FA]), 'url' => Url::to('https://www.youtube.com')],
        ['label' => Icon::show('instagram', ['framework' => Icon::FA]), 'url' => Url::to('https://www.instagram.com')],
    ],
]);
