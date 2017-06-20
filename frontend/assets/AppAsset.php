<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@webroot/themes/kupon';
    public $baseUrl = '@web';
    public $css = [
        "css/bootstrap.min.css",
        "css/themify-icons.css",
        "css/font-awesome.css",
        "css/owl.carousel.css",
        "css/animate.min.css",
        "css/animsition.css",
        "css/plugins.min.css",
        "css/style.css",
    ];
    public $js = [
//        "js/jquery.min.js",
        "js/bootstrap.min.js",
        "js/jquery.animsition.min.js",
        "js/owl.carousel.js",
        "js/jquery.flexslider-min.js",
        "js/plugins.js",
        "js/kupon.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
