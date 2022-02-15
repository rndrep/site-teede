<?php
namespace frontteede\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use apps\example\models\LoginFormExample;
use apps\content\help\PhotoAlbumHelper;
use globals\db\entity\kdf\content\TipBannerGallery;
use globals\db\entity\kdf\system\RecordStatus;
use globals\db\entity\module\news\News;
use globals\help\FrontendHelper;
use globals\help\LanguageHelper;

use frontteede\models\PasswordResetRequestForm;
use frontteede\models\ResetPasswordForm;
use frontteede\models\SignupForm;
use frontteede\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends AbstractPublicController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        // Для главной страницы сайта
        // Рендеринг представления (view) без макета
        //$this->layout = false;

      $this->layout = 'main-ru';
        //$siteIds = PrilozhenieHelper::getSiteIdsWithoutLang();

        //$today = strtotime(date("Y-m-d H:i:s"));
        $today = date("Y-m-d H:i:s");
        // Сформировать запрос к БД
        $query = News::find()
            //->where(['in', 'site_lang_id', $siteIds])
            ->where(['=', 'site_lang_id', $this->siteLang->id])
            //Выводить только новости с датой публикации меньше или равно, чем сейчас
            //todo возможно, правильнее сравнивать форматы дат, приведенные к дате $today = strtotime(date("Y-m-d H:i:s"))
            ->andWhere(['<=', 'publ_date',  $today])
            ->andWhere(['rec_status' => RecordStatus::PUBLISHED])
            ->orderBy(['publ_date' => SORT_DESC])
            //Лимит вывода записей
            ->limit(3);

        $newsList = $query->all();
        // Получить редактируемый блок главной страницы сайта
        $htmlBlock = FrontendHelper::getHtmlBlockForPageMain($this->siteLang);

        // Получить массив главных галерей баннеров на главной страницы сайта
        $bannerGalleryList = PhotoAlbumHelper::getBannerGalleryListByType(TipBannerGallery::MAIN_GALLERY_FOR_MAIN_PAGE);

        $bannerList = [];
        // Получить двумерный массив с атрибутами изображений из галереи
        if ($bannerGalleryList !== null) {
            $bannerList = PhotoAlbumHelper::getImageAtrributesByAlbum($bannerGalleryList[0]->id, PhotoAlbumHelper::BANNER_GALLERY);
        }

        // Выбрать файл с представлением (view),
        // соответственно текущему языку
        $view = LanguageHelper::getViewForSiteLanguage('index-');
        
        return $this->render($view, [
            'htmlBlock' => $htmlBlock,
            'bannerList' => $bannerList,
            'newsList' => $newsList,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginFormExample();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {

        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     *
     */
    public function actionMaintenance()
    {
        return "<h1>На портале проводятся технические работы</h1>";
    }
}
