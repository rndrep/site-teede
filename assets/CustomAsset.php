<?php
namespace frontteede\assets;

use yii\web\AssetBundle;

class CustomAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';

    public $sourcePath = '@frontteede/assets/src';

    public $css = [
        'css/css-site.css',
        'css/css-style.css',
        //'js/lightslider-master/css/lightslider.css',
        //'js/lightbox2-master/css/lightbox.css',
        'js/lidrekon/slep/css/special.min.css',
        'js/owlcarousel/owl.carousel.css',
        'js/owlcarousel/owl.theme.default.css',
    ];

    public $js = [
        //'//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js',
        //'js/jquery-3.4.1.min.js',
        'js/script.js',
        //'js/lightslider-master/js/lightslider.js',
        //'js/lightbox2-master/js/lightbox.js',
        'js/owlcarousel/owl.carousel.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js',
        'js/lidrekon/slep/js/uhpv-full.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
    **/

    // By default, JS files are included before the closing body tag.
    // To include JS files in the head section
    //public  $jsOptions = ['position' => View::POS_HEAD];
}
