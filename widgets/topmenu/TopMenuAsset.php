<?php
namespace frontteede\widgets\topmenu;

//use Yii;
use yii\web\AssetBundle;

class TopMenuAsset extends AssetBundle
{
    /**
    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
    **/

    // By default, JS files are included before the closing body tag.
    // To include JS files in the head section
    //public  $jsOptions = ['position' => \yii\web\View::POS_HEAD];

    public function init()
    {
        parent::init();

        $this->sourcePath = __DIR__ . '/assets';

        $this->css = [
            'css/menu.css',
        ];

        $this->js = [
            'js/menu.js',
        ];
    }
}