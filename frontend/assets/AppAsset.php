<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'lib/bootstrap/dist/css/bootstrap.css',
        'lib/fontawesome/css/font-awesome.min.css',
        'lib/ionicons/css/ionicons.css',
        'lib/owlcarousel/owl-carousel/owl.carousel.css',
        'lib/owlcarousel/owl-carousel/owl.theme.css',
        'lib/FlexSlider/flexslider.css',
        'lib/magnific-popup/dist/magnific-popup.css',
        'css/main.css',
        'css/ie_fix.css',
        'css/style.css',
        'css/site.css'
    ];
    public $js = [
//        'lib/jquery/dist/jquery.js',
        'lib/components-modernizr/modernizr.js',
        'lib/bootstrap/dist/js/bootstrap.js',
        'lib/imagesloaded/imagesloaded.pkgd.min.js',
        'lib/isotope/dist/isotope.pkgd.min.js',
        'lib/owlcarousel/owl-carousel/owl.carousel.js',
//        'https://maps.googleapis.com/maps/api/js?sensor=false',
        'lib/waypoints/lib/jquery.waypoints.min.js',
        'lib/waypoints/lib/shortcuts/inview.min.js',
        'lib/simple-text-rotator/jquery.simple-text-rotator.js',
        'lib/jquery.mb.YTPlayer/dist/jquery.mb.YTPlayer.min.js',
        'lib/magnific-popup/dist/jquery.magnific-popup.js',
        'js/flexslider.js',
        'js/main.js',
        'js/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
        '\gietos\yii\ionicons\AssetBundle',
    ];
}
