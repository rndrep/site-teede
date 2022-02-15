<?php
namespace frontteede\widgets\topmenu;

//use Yii;
use globals\widgets\menus\AbstractMenu;

/**
 * Widget выводит верхнее меню
 */
class TopMenu extends AbstractMenu
{
    protected function registerAsset() {
        $view = $this->getView();
        TopMenuAsset::register($view);
    }
}