<?php
namespace frontteede\assets;

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
		'css/style.css',
		'js/lightslider-master/css/lightslider.css',
        'js/lightbox2-master/css/lightbox.css',
    ];
    public $js = [
        //'//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js',
        'js/jquery-3.4.1.min.js',
		'js/script.js',
		'js/lightslider-master/js/lightslider.js',
        'js/lightbox2-master/js/lightbox.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
