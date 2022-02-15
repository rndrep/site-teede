<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="container">
    <div class="row">
        <div class="site-error">
            <h1><?= Html::encode($this->title) ?></h1>
            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>
            <p>
                Во время обработки запроса произошла ошибка.
            </p>
            <p>
                Обратитесь пожалуйста, в службу поддержки отдела портальных решений.
            </p>
        </div>
    </div>
</div>
