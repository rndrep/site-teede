<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontteede',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'frontteede\controllers',
    'bootstrap' => [
        'log',
        // Модуль поддержки мультиязычности
        'language'
    ],

    'components' => [
        'request' => [
            'baseUrl' => '', // убрать frontend/web
            // Переопределить для поддержки мультиязычности
            'class' => 'apps\common\components\Request',

            'csrfParam' => '_csrf-frontteede',
            // for REST
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],

        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-front-teede',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => \yii\helpers\ArrayHelper::merge(
            require Yii::getAlias('@common/config/urlManagerFrontend.php'), []
        ),
    ],

    // Зарегистрировать общие модули + настроить модули под конкретноему ИПК
    //'modules' => \yii\helpers\ArrayHelper::merge($params['modules'], [
    'modules' => [
         // Модуль поддержки мультиязычности приложений
        'language' => [
            'languages' => [
                'En' => 'en',
                'Ru' => 'ru',
            ],
        ],
        // Модуль управление правами доступа
        'acl' => [
            // Макеты (layout) из папки проекта
            'privateLayoutFile' => 'adminMain', // для административной части модуля
        ],
        // Модуль контент
        'content' => [
            // Макеты (layout) из папки проекта
            'privateLayoutFile' => 'adminMain', // для административной части модуля
        ],
        // Модуль баннеры
        'banner' => [
            // Макет (layout) из папки проекта
            'fileLayout' => 'adminMain',
        ],
        // Модуль цитаты
        'citation' => [
            // Макеты (layout) из папки проекта
            'privateLayoutFile' => 'adminMain', // для административной части модуля
        ],
        'comment' => [
            // Макет (layout) из папки проекта
            'privateLayoutFile' => 'adminMain',
        ],
        'news' => [
            // Макет (layout) из папки проекта
            'privateLayoutFile' => 'adminMain',
        ],
        'tree' => [
            // Макет (layout) из папки проекта
            'privateLayoutFile' => 'adminMain',
        ]
    ],

    // Так можно делать, если контроллеры НЕ требуют файлы представлений.
    // Например, возвращают JSON или текст
    'controllerMap' => [
        'runex01' => [
            'class' => 'modules\example\controllers\Ex01Controller',
        ],
    ],

    // Изменить default controller
    //'defaultRoute' => 'home',
    // tutor: moduleID; site: controllerID; about: actionID
    //'defaultRoute' => 'tutor/site/about',

    // Заблокировать приложение для пользователей
    //'catchAll' => ['site/maintenance'],

    'homeUrl' => '/',

    'name' => 'КРЦДО',

    'params' => $params,
];
