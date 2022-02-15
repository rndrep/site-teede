<?php 
use yii\helpers\Html;
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
    <?php \assets\fontawesome\FontawesomeAsset::register($this); ?>
    <?php $this->head() ?>
</head>
<body class = "teede">
<?php $this->beginBody() ?>
<div class="teede-header">
	
<!--Сервисная панель-->
	
<!--Шапка сайта-->
<div><p>Хедер сайта КЦОД</p></div>
<!--menu-->
<nav><p>Меню сайта КЦОД</p></nav>

	<div class = "mainInform">
		<?= $content ?>
	</div>

	<footer>
<div class="teede-footer sem-bg-gr">
<div><p>Фотер сайта КЦОД</p></div>
</div>
   
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
