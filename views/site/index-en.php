<?php
use yii\helpers\Html;

//use common\widgets\Alert;
//use frontteede\widgets\topmenu\TopMenu;
use apps\content\help\TargetBlankHelper;

use assets\common\JSQueryAsset;
//use frontteede\assets\AppAsset;
use frontteede\assets\CustomAsset;
use globals\help\DateHelper;

//AppAsset::register($this);
CustomAsset::register($this);
JSQueryAsset::register($this);

$this->title = $this->title = Yii::t('app', 'КЦДО');
?>
<div class="container">
    <div class = "row">
        <div class = "col-md-6" >
            <ul class = "owl-carousel owl-theme" >
                <?php
                if (count($bannerList) == 0) {
                    //
                }
                else {
                    // $bannerList: двумерный массив с атрибутами изображений из галереи баннеров
                    foreach ($bannerList as $ban) {
                        $banner = Html::img($ban['url'], ['alt' => $ban['title'], 'class'=>'img-responsive']);
                        if ((int) $ban['target'] === TargetBlankHelper::NEW_WINDOW) {
                            $linkBanner = Html::a($banner, $ban['link_url'], ['target' => '_blank']);
                        }
                        else {
                            $linkBanner = Html::a($banner, $ban['link_url']);
                        }

                        echo '<div>';
                        echo $linkBanner;
                        echo '</div>';
                    }
                }

                ?>
            </ul>
        </div>
        <div class = "col-md-6" >
            <!--<div class = "electron_resource active_button" id = "tab1"> Search in the Library Catalogue </div>
            <div class = "electron_resource" id = "tab2"> Search on the Website </div>-->
            <div id = "block1">
                <!--<?=modules\searchLucene\widgets\SearchForm::widget([
                    'inputPlaceholder' => 'Search',
                    'inputClass' => 'form-control',
                ])?>-->
                <h3> News </h3>

                <?php
                // $newsList: массив объектов globals\db\entity\module\news\News
                if (count($newsList) == 0):
                    ?>
                    <p>Ничего не найдено</p>
                <?php endif; ?>
                <?php foreach ($newsList as $news){
                    $content = \yii\helpers\StringHelper::truncateWords($news['content'], 10, '...');
                    $pubDateStr = DateHelper::formatToRusString($news->publ_date);
                    list($day, $month, $year) = explode(".", $pubDateStr);
                    ?>
                    <h4 class="item-title">
                        <?= Html::a($news->zagolovok, ["/news/{$year}/{$month}/{$day}/{$news->id}"], ['class' => 'bg-color1']); ?>
                        <span class="item_param">
                </span>
                    </h4>
                    <p><?=strip_tags($content)?><br><!--<?= Html::a('Читать далее', ["/news/{$year}/{$month}/{$day}/{$news->id}"],['class'=>'news_link']); ?>--></p>
                    <div class="item-line-bottom"></div>
                <?php } ?>

                <div><a href="/news/index" class="btn btn-default">All news</a></div>
            </div>
            <div id = "block2">
                <?=modules\searchLucene\widgets\SearchForm::widget([
                    'inputPlaceholder' => 'Search',
                    'inputClass' => 'form-control',
                ])?>
            </div>
        </div>
    </div>
    <!-- Вставить редактируемый администратором блок главной страницы сайта -->
    <?= $htmlBlock->content; ?>
</div>
