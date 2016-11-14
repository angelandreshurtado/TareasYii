<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/font-awesome.min.css',
        'css/style.css',
        'css/animate.min.css',
    ];
    public $js = [
        'js/common.js',
        'js/jquery.localScroll.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.min.js',
        'js/jquery.scrollTo.min.js',
        'js/validate.js',
        'js/waypoints.min.js',
		'js/waypoints.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
