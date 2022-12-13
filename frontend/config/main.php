<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    'bootstrap' => ['log', 'devicedetect'],
    'language' => 'uk',
    'layout' => 'default',
//    'timeZone' => 'Europe/Kiev',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'devicedetect' => [
            'class' => 'alexandernst\devicedetect\DeviceDetect'
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // отключение дефолтного jQuery
                    'js' => [
                        'lib/jquery/dist/jquery.js', // добавление вашей версии
                    ]
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
//        'geo' => [
//            'class' => 'div\geoip\Geo',
//            'cityClass' => 'app\models\City' // модель города
//        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
//        'session' => [
//            // this is the name of the session cookie used for login on the frontend
//            'name' => 'advanced-frontend',
//        ],
//        'log' => [
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
//            ],
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<action:contacts|order|subscriber>' => 'site/<action>',
                '<alias>' => 'site/article',
                '' => 'site/index'
            ],
        ],
    ],
    'params' => $params,
];
