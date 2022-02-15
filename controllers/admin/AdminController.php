<?php
namespace frontteede\controllers\admin;

//use Yii;
//use yii\filters\AccessControl;
use apps\common\controllers\AbstractAdminController;

/**
 * Базовый контроллер административной части
 */
abstract class AdminController extends AbstractAdminController
{
    // Назначить новый макет (layout) для представлений (views) контроллера
    public $layout = "adminMain";

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Ограничить доступ к административной части проекта НТБ
        // только пользователям с правилами ntb.all и cms.login
        /*
        $behaviors['access'] = [
            'class' => AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    // Доступ ко всем методам контроллера, разрешен
                    // только пользователям с permission => ['cms.login' and 'ntb.all']
                    'roles' => ['ntb.all'],
                ],
            ],
        ];
        */

        return $behaviors;
    }

    public function  __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config);
    }
}
