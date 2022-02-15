<?php
namespace frontteede\controllers;

use Yii;

class TestController extends AbstractPublicController
{
    public function actionConfig()
    {
        // Использоать главный макет приложения "frontend/views/layout/main-ru.php"
        //$this->layout = null;
        // Рендеринг представления (view) без макета
        //$this->layout = false;

        $conf = [];

        $conf['id'] = Yii::$app->id;
        $conf['name'] = Yii::$app->name;
        $conf['basePath'] = Yii::$app->basePath;
        //$conf['aliases'] = Yii::$app->aliases;
        $conf['bootstrap'] = Yii::$app->bootstrap;
        $conf['catchAll'] = Yii::$app->catchAll;
        $conf['language'] = Yii::$app->language;
        $conf['sourceLanguage'] = Yii::$app->sourceLanguage;
        $conf['timeZone'] = Yii::$app->timeZone;
        $conf['charset'] = Yii::$app->charset;
        $conf['defaultRoute'] = Yii::$app->defaultRoute;
        //$conf['extensions'] = Yii::$app->extensions;
        $conf['params'] = Yii::$app->params;
        //$conf['components'] = Yii::$app->components;
        $conf['modules'] = Yii::$app->modules;

        return $this->render('config', [
            'conf' => $conf,
        ]);
    }

    public function actionStaticPage()
    {
        // Текущий язык
        $lang = Yii::$app->language;
        // Показать страницу соответственно текущему языку
        return $this->render('pageLang-' . $lang);
    }
}