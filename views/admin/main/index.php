<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = Yii::t('app', 'Админка');
$this->params['breadcrumbs'][] = $this->title;
?>
<!--    <p>-->
<!--        --><?//= Html::encode($msg); ?>
<!--    </p>-->
    <p>
        <?= HtmlPurifier::process($msg); ?>
    </p>
<?php
echo '<br/><br/>';
//echo '<pre>';
//print_r($msg);
//echo '</pre>';
?>
<p>На главной странице CMS будет размещена справочная информация для контент-менеджеров и администраторов сайта.</p>
