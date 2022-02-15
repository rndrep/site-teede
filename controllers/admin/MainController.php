<?php
namespace frontteede\controllers\admin;

use Yii;
use globals\help\LanguageHelper;

class MainController extends AdminController
{
    // Использоать главный макет приложения "frontend/views/layout/main-ru.php"
    //public $layout = null;
    // Рендеринг представления (view) без макета
    //public $layout = false;

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        return $behaviors;
    }

    public function actionIndex()
    {
        $message = '<h2>Коммуникационно-ресурсный центр дуального обучения</h2>';
        Yii::info("In method: MainController::actionIndex. message => {$message}");

        // Получить id-языка, для которого
        // выводится\создается контент сайта
        $currentLangId = LanguageHelper::getCurrentLangIdForContent();
        return $this->render('index', ['currentLangId' => $currentLangId, 'msg' => $message]);

    }
}