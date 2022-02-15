<?php
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
//use common\widgets\Alert;

use frontteede\widgets\topmenu\TopMenu;
use globals\db\entity\kdf\content\TipMenu;
use modules\language\widgets\LanguageList;

use assets\common\JSQueryAsset;
//use frontteede\assets\AppAsset;
use frontteede\assets\CustomAsset;

//AppAsset::register($this);
CustomAsset::register($this);
JSQueryAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php \assets\fontawesome\FontawesomeAsset::register($this); ?>
</head>
<body class = "ntb">
<?php $this->beginBody() ?>
<header>
    <div class="head_fon">
        <div class="service_panel">
            <div class="container">
                <div class="row">
                    <div class="authorization-indicator">
                        <?php if (Yii::$app->user->isGuest){?>
                            <?= Html::tag('span', 'guest');?>
                            <?= Html::a(Yii::t('app','Войти'), '/auth/login');?>
                        <?php }else{?>
                            <!-- POST-запрос -->
                            <?php
                            $authLichnost = Yii::$app->user->lichnost;
                            // Или
                            $linkLogout = Html::a(Yii::t('app','Выйти (' .$authLichnost->familiya . ' ' .$authLichnost->imya . ')'),
                                ['/auth/logout'],
                                [
                                    'class' => 'logout',
                                    'data' => [
                                        'method' => 'post',
                                        'confirm' => Yii::t('app','Вы действительно хотите выйти?'),
                                    ],
                                ]
                            );

                            echo $linkLogout;
                            ?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container top-head">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-links">
                        <a class="icon" href="https://tpu.ru" target="_blank"><img src="/images/logo/tpu_logo_dark.png" width="30" style="margin-top: -5px;"></a>
                        <a class="icon" href="https://www.facebook.com/TPUnews" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a class="icon" href="https://vk.com/tpunews" target="_blank" ><i class="fab fa-vk"></i></a>
                        <a class="icon"  href="https://www.instagram.com/tpu.ru" target="_blank" ><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search_panel">
                        <a href="/search"><i class="fa fa-search"></i></a> |
                        <?php echo LanguageList::widget([]); ?>
                        | <a id="specialButton" href="#"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="logo_img"><a href="<?=\yii\helpers\Url::home();?>"><img src="/images/logo/logo1_en.png" class="img-responsive"></a></div>
                    <div class="contact-top">
                        <div class="contact">
                            <a href="#"><div class="btn-contact"><i class="fa fa-address-book"></i><br> Contacts</div></a>
                            <a href="#"><div class="btn-contact"><i class="fa fa-phone-square"></i><br> Phonebook</div></a>
                            <a href="#"><div class="btn-contact"><i class="fa fa-clock"></i><br> Opening Hours</div></a>
                            <a href="#"><div class="btn-contact"><i class="fa fa-database"></i><br> Data bases</div></a>
                            <a href="#"><div class="btn-contact"><i class="fa fa-book-open"></i><br> Catalogue</div></a>
                            <a href="#"><div class="btn-contact"><i class="fa fa-question-circle"></i><br> Help</div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    </div>
</header>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?= TopMenu::widget([
                    'tipMenuId' => TipMenu::TIP_MENU_TOP,
                    'idMenu' => 'top-menu-main',
                    'classMenu' => 'nav navbar-nav',
                ]); ?>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>

    <div class = "mainInform">
        <?= $content ?>
    </div>

<footer>
    <div class="container">
        <div class="row">
                <div class = "col-md-4 engColumns">
                    <?= yii\helpers\Html::a('',["/site/index",'#'=>'form'],['class'=>'home_link column logo_en'])?>
                </div>
                <div class = "col-md-4">
                    <dl>
                        <dt> Useful Links </dt>
                        <dd> Library Catalogue </dd>
                        <dd> Scholarly Works </dd>
                        <dd> Electronic Library </dd>
                    </dl>
                </div>
                <div class = "col-md-4 footer_contact">
                    <dl>
                        <dt> Contacts </dt>
                        <dd> 53a, Belinsky Street, Tomsk,  <br> Russia, 634034 </dd>
                        <dd> 8(3822) 60-63-52, 70-50-01 </dd>
                        <dd> info@lib.tpu.ru </dd>
                        <dd class = "footer_icons">
                            <a class="icon fb" href="https://www.facebook.com/TPUnews" target="_blank"></a>
                            <a class="icon vk" href="https://vk.com/tpunews" target="_blank" ></a>
                            <a class="icon inst"  href="https://www.instagram.com/tpu.ru" target="_blank" ></a>
                        </dd>
                    </dl>
                </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
