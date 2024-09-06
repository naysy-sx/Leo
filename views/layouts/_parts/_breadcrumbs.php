<?php
use yii\helpers\Html;

if (!isset($title)) {
    $title = 'Доставка'; // Значение по умолчанию, если $title не передан
}
?>


<!-- Start breadcrumb section -->
<div class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a href="<?= Yii::$app->homeUrl ?>">Главная</a></li>
                        <li class="breadcrumb__content--menu__items"><span><?= Html::encode($title) ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcrumb section -->