<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use assets\common\JSQueryAsset;
use assets\admin\DefaultAdminAsset;

JSQueryAsset::register($this);
DefaultAdminAsset::register($this);

if (Yii::$app->controller->action->id === 'login') {
/**
 * Do not use this code in your template. Remove it.
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    // \backend\assets\AppAsset::register($this);
    \assets\admin\AdminAsset::register($this);
    \assets\fontawesome\FontawesomeAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@assets/src/admin');

    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>

        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>

    <div class="wrapper">

        <?= $this->render(
            'header',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left',
            ['directoryAsset' => '@assets/admin']
        )
        ?>

        <?= $this->render(
            'content',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
