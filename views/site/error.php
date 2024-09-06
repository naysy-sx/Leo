<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $exception \yii\web\HttpException */
/* @var $name string */
/* @var $message string */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Что-то пошло не так!
    </p>
    <p>
        Скоро исправим.
    </p>

</div>