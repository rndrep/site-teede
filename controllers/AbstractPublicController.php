<?php
namespace frontteede\controllers;

use Yii;

use apps\common\controllers\AbstractUserController;
use globals\help\PrilozhenieHelper;

/**
 * Абстрактный контроллер для публичной части сайта
 */
abstract class AbstractPublicController extends AbstractUserController
{
    // Объект SiteLang
    protected $siteLang;

    // Текущий язык
    protected $lang;

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        return $behaviors;
    }

    public function  __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);

        // Объект SiteLang
        $this->siteLang = PrilozhenieHelper::getSiteLang();
        // Текущий язык
        $this->lang = Yii::$app->language;

        // Установить файл с макетом (layout) для представлений,
        // соответственно текущему языку
        $this->layout = 'main-' . $this->lang;
    }
}