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
        'css/site.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css',
        'css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/_all-skins.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
//        'js/bootstrap.min.js',
//        'js/jquery.slimscroll.min.js',
//        'js/Chart.js',
//        'js/fastclick.js',
//        'js/adminlte.min.js',
//        'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
