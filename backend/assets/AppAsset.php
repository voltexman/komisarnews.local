<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/fontawesome/css/font-awesome.css',
        'vendor/animate.css/animate.css',
        'vendor/bootstrap/css/bootstrap.css',
        'styles/pe-icons/pe-icon-7-stroke.css',
        'styles/pe-icons/helper.css',
        'styles/stroke-icons/style.css',
        'styles/style.css',
        'css/site.css',
    ];
    public $js = [
        'vendor/pacejs/pace.min.js',
        'vendor/bootstrap/js/bootstrap.min.js',
        'scripts/luna.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'rmrevin\yii\fontawesome\AssetBundle'
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
