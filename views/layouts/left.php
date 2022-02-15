<?php

$person = Yii::$app->user->lichnost;

$roleList = Yii::$app->user->roles;

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/logo/tpu_logo_dark.png" alt="Logo"/>
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    echo $person->imya . ' ' . mb_substr($person->otchestvo, 0, 1) . '. ' . $person->familiya;
                    ?>
                </p>
                <?php foreach ($roleList as $role) { ?>
                    <a href="#"><i class="fa fa-circle text-info"></i><?= $role ?></a><br>
                <?php } ?>
            </div>
        </div>

        <?php
        //Модули CMS
        $items = [];
        if (Yii::$app->user->can('cms.content_view')) {
            array_push($items, ['label' => '', 'options' => ['class' => 'header']],
                ['label' => 'Главная', 'icon' => 'fas fa-home', 'url' => ['/admin']],
                ['label' => 'Управление сайтом', 'options' => ['class' => 'header']],
                ['label' => 'Меню', 'icon' => 'fas fa-sitemap', 'url' => ['/content/menu']],
                ['label' => 'Структура сайта', 'icon' => 'fas fa-file-alt', 'url' => ['/content/site-map/index']],
                //['label' => 'Страницы', 'icon' => 'fas fa-tree', 'url' => ['/tree/main/index']],
                ['label' => 'Фотогалереи', 'icon' => 'fas fa-image', 'url' => ['/content/photo-album']],
                ['label' => 'Баннеры', 'icon' => 'fas fa-image', 'url' => ['/content/banner/index']],
                ['label' => 'Рубрики новостей', 'icon' => 'far fa-newspaper', 'url' => ['/news/rubrika/index']],
                ['label' => 'Новости', 'icon' => 'far fa-newspaper', 'url' => ['/news/main/index']],
                ['label' => 'Комментарии', 'icon' => 'far fa-comment', 'url' => ['/comment/manage']],
                ['label' => 'Цитаты', 'icon' => 'fas fa-quote-left', 'url' => ['/citation/main']],
                //['label' => 'Файлы (удалить)', 'icon' => 'far fa-file', 'url' => ['/content/picture']],
                ['label' => 'Изображения', 'icon' => 'fas fa-table', 'url' => ['/content/picture/grid-view']],
                ['label' => 'Загрузка изображений', 'icon' => 'fas fa-download', 'url' => ['/content/picture/upload-image']],
                ['label' => 'Файлы', 'icon' => 'fas fa-table', 'url' => ['/content/files/grid-view']],
                ['label' => 'Загрузка файлов', 'icon' => 'fas fa-download', 'url' => ['/content/files/upload-file']],
                ['label' => 'Настройки', 'options' => ['class' => 'header']],
                ['label' => 'Пользователи', 'icon' => 'fas fa-users', 'url' => ['/acl/main']],
                ['label' => 'Роли', 'icon' => 'fas fa-info', 'url' => ['/acl/main/roles']]
            );
        }
        ?>
        <?=
        \assets\src\admin\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree', 'style' => 'font-size: 14px;'],
                'items' => $items,
            ]
        ) ?>

    </section>
</aside>
