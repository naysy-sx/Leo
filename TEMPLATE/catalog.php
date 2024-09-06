<?php
$products_images_dir = 'product_images';
$products_images_tmp = scandir($products_images_dir);
$products_images     = [];

foreach ($products_images_tmp as $product_img) {
    if (is_file($products_images_dir . '/' . $product_img)) {
        $products_images[] = $products_images_dir . '/' . $product_img;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leoking</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&family=Karma:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .product__card--action__btn--svg {
            margin-top: -5px;
        }

        .header-icons {
            color: #ac8164;
        }
    </style>
</head>
<body>
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
            </div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>
<header class="header__section">
    <div class="header__topbar bg__primary">
    </div>
    <div class="main__header position__relative header__sticky">
        <div class="container">
            <div class="main__header--inner d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                  stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/>
                        </svg>
                        <span class="visually-hidden">Навигация</span>
                    </a>
                </div>
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="#!">
                            <img class="main__logo--img" src="images/logo.png" alt="Leoking">
                        </a></h1>
                </div>
                <div class="header__menu d-none d-lg-block">
                    <nav class="header__menu--navigation">
                        <ul class="header__menu--wrapper d-flex">
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#!">Каталог
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                         height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Название
                                                                                                                      категории</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Название
                                                                                                                      категории</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Название
                                                                                                                      категории</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Название
                                                                                                                      категории</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Название
                                                                                                                      категории</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#!">Lookbook</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#!">Sale</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#!">Покупателям
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                         height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Оплата</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Оплата
                                                                                                                      долями</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Доставка</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Возврат</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="#!" class="header__sub--menu__link">Правила</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#!">Контакты</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#!">ОПТ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__account">
                    <ul class="header__account--wrapper d-flex align-items-center">
                        <li class="header__account--items  header__account--search__items d-none d-lg-block">
                            <a class="header__account--btn search__open--btn header-icons" href="javascript:void(0)"
                               data-offcanvas>
                                    <span class="header__account--btn__icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 16L11 11M12.6667 6.83333C12.6667 7.59938 12.5158 8.35792 12.2226 9.06565C11.9295 9.77339 11.4998 10.4164 10.9581 10.9581C10.4164 11.4998 9.77339 11.9295 9.06565 12.2226C8.35792 12.5158 7.59938 12.6667 6.83333 12.6667C6.06729 12.6667 5.30875 12.5158 4.60101 12.2226C3.89328 11.9295 3.25022 11.4998 2.70854 10.9581C2.16687 10.4164 1.73719 9.77339 1.44404 9.06565C1.15088 8.35792 1 7.59938 1 6.83333C1 5.28624 1.61458 3.80251 2.70854 2.70854C3.80251 1.61458 5.28624 1 6.83333 1C8.38043 1 9.86416 1.61458 10.9581 2.70854C12.0521 3.80251 12.6667 5.28624 12.6667 6.83333Z"
                                                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                <span class="visually-hidden">Поиск</span>
                            </a>
                        </li>
                        <li class="header__account--items">
                            <a class="header__account--btn d-sm-2-none header-icons" href="#!">
                                    <span class="header__account--btn__icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 16V14.3333C16 13.4493 15.6049 12.6014 14.9016 11.9763C14.1984 11.3512 13.2446 11 12.25 11H4.75C3.75544 11 2.80161 11.3512 2.09835 11.9763C1.39509 12.6014 1 13.4493 1 14.3333V16"
                                                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.5 7.66667C10.5711 7.66667 12.25 6.17428 12.25 4.33333C12.25 2.49238 10.5711 1 8.5 1C6.42893 1 4.75 2.49238 4.75 4.33333C4.75 6.17428 6.42893 7.66667 8.5 7.66667Z"
                                                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                <span class="visually-hidden">My Account</span>
                            </a>
                        </li>
                        <li class="header__account--items header__minicart--items">
                            <a class="header__account--btn minicart__open--btn header-icons" href="javascript:void(0)"
                               data-offcanvas>
                                    <span class="header__account--btn__icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.25 7.66667V4.33333C12.25 3.44928 11.8549 2.60143 11.1517 1.97631C10.4484 1.35119 9.49456 1 8.5 1C7.50544 1 6.55161 1.35119 5.84835 1.97631C5.14509 2.60143 4.75 3.44928 4.75 4.33333V7.66667M1.9375 6H15.0625L16 16H1L1.9375 6Z"
                                                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>  
                                    </span>
                                <span class="items__count">2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="#!">
                    <img src="logo.svg" alt="Logo-img" style="width: 100%;">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>закрыть</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#!">На главную</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#!">Каталог</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#!">Доставка</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#!">Оплата</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#!">Оптовикам</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="#!">Контакты</a></li>
                </ul>
                <div class="offcanvas__account--items">
                    <a class="offcanvas__account--items__btn d-flex align-items-center" href="#!">
                            <span class="offcanvas__account--items__icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                     viewBox="0 0 512 512"><path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="32"/><path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                            stroke-width="32"/></svg>
                            </span>
                        <span class="offcanvas__account--items__label">Личный кабинет</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="offcanvas__sticky--toolbar">
        <ul class="d-flex justify-content-between">
            <li class="offcanvas__sticky--toolbar__list">
                <a class="offcanvas__sticky--toolbar__btn" href="#!">
                    <span class="offcanvas__sticky--toolbar__icon" style="margin-left: 9px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                             viewBox="0 0 22 17"><path fill="currentColor"
                                                       d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path></svg>
                        </span>
                    <span class="offcanvas__sticky--toolbar__label">Главная</span>
                </a>
            </li>
            <li class="offcanvas__sticky--toolbar__list">
                <a class="offcanvas__sticky--toolbar__btn" href="#!">
                    <span class="offcanvas__sticky--toolbar__icon" style="margin-left: 7px;">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443"
                             viewBox="0 0 448 512"><path
                                    d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path></svg>
                        </span>
                    <span class="offcanvas__sticky--toolbar__label">Каталог</span>
                </a>
            </li>
            <li class="offcanvas__sticky--toolbar__list ">
                <a class="offcanvas__sticky--toolbar__btn search__open--btn" href="#!" data-offcanvas>
                        <span class="offcanvas__sticky--toolbar__icon" style="margin-left: 3px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path
                                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                        </span>
                    <span class="offcanvas__sticky--toolbar__label">Поиск</span>
                </a>
            </li>
            <li class="offcanvas__sticky--toolbar__list">
                <a class="offcanvas__sticky--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__sticky--toolbar__icon" style="margin-left: 8px">
                            <svg width="17" height="15" viewBox="0 0 14 11" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z"
                                      fill="currentColor"/>
                             </svg> 
                        </span>
                    <span class="offcanvas__sticky--toolbar__label">Корзина</span>
                    <span class="items__count">2</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="offCanvas__minicart">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Корзина</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="32" d="M368 368L144 144M368 144L144 368"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="minicart__product">
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="#!"><img src="assets/img/product/small-product/product1.webp"
                                      alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="#!">Наименование</a></h4>
                    <span class="color__variant"><b>Цвет:</b> Бежевый</span>
                    <div class="minicart__price">
                        <span class="minicart__current--price">12 500 руб.</span>
                        <span class="minicart__old--price">17 410 руб.</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    value="Decrease Value">-
                            </button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter/>
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                    value="Increase Value">+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="#!"><img src="assets/img/product/small-product/product1.webp"
                                      alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="#!">Наименование</a></h4>
                    <span class="color__variant"><b>Цвет:</b> Бежевый</span>
                    <div class="minicart__price">
                        <span class="minicart__current--price">12 500 руб.</span>
                        <span class="minicart__old--price">17 410 руб.</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    value="Decrease Value">-
                            </button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter/>
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                    value="Increase Value">+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="minicart__amount">
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Кол-во:</span>
                <span><b>2 шт.</b></span>
            </div>
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>На сумму:</span>
                <span><b>22 960 руб.</b></span>
            </div>
        </div>
        <div class="minicart__button d-flex justify-content-center" style="margin-top: 25px">
            <a class="primary__btn minicart__button--link" href="#!">В корзину</a>
            <a class="primary__btn minicart__button--link" href="#!">Оформить</a>
        </div>
    </div>
    <div class="predictive__search--box ">
        <div class="predictive__search--box__inner">
            <h2 class="predictive__search--title">Поиск</h2>
            <form class="predictive__search--form" action="#">
                <label>
                    <input class="predictive__search--input" placeholder="Что хотите найти?" type="text">
                </label>
                <button class="predictive__search--button text-white" aria-label="search button">
                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                         height="25.443" viewBox="0 0 512 512">
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                              stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/>
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                              stroke-width="32" d="M338.29 338.29L448 448"/>
                    </svg>
                </button>
            </form>
        </div>
        <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                 height="30.443" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="32" d="M368 368L144 144M368 144L144 368"/>
            </svg>
        </button>
    </div>
</header>
<main class="main__content_wrapper">
    <section class="hero__slider--section">
        <div class="hero__slider--activation swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero__slider--items" style="height: 90px; padding: 0">
                    </div>
                </div>
            </div>
            <div class="slider__pagination swiper-pagination"></div>
        </div>
    </section>

    <section class="product__section section--padding " style="margin-top: 100px">
        <div class="container">
            <div class="section__heading mb-40">
                <h2 class="section__heading--maintitle" style="font-weight: 300">Продукция</h2>
            </div>

            <style>
                .lk-select {
                    height: 40px;
                    margin-bottom: 25px;
                    border-radius: 8px;
                    font-size: 13px;
                }
            </style>

            <div class="row">
                <div class="col-md-3">
                    <select class="form-control lk-select">
                        <option value="">Сезон</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control lk-select">
                        <option value="">Пол</option>
                    </select></div>
                <div class="col-md-3">
                    <select class="form-control lk-select">
                        <option value="">Размер</option>
                    </select></div>
                <div class="col-md-3">
                    <select class="form-control lk-select">
                        <option value="">Цвет</option>
                    </select></div>
            </div>

            <div class="row">

                <?php
                $i    = 0;
                $stop = 12;

                while ($i < $stop) {
                    $rand_1            = rand(0, count($products_images) - 1);
                    $rand_2            = rand(0, count($products_images) - 1);
                    $rand_product_img1 = $products_images[$rand_1];
                    $rand_product_img2 = $products_images[$rand_2];
                    ?>
                    <div class="col-md-3" style="margin-bottom: 25px">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block" href="#!">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                         src="<?=$rand_product_img1?>" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                         src="<?=$rand_product_img2?>" alt="product-img">
                                </a>
                                <ul class="product__card--action">
                                    <li class="product__card--action__list">
                                        <a class="product__card--action__btn" title="Quick View"
                                           data-bs-toggle="modal" data-bs-target="#examplemodal"
                                           href="javascript:void(0)">
                                            <svg class="product__card--action__btn--svg" width="16" height="16"
                                                 viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Просмотр</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="product__add--to__card">
                                    <a class="product__card--btn" title="В корзину" href="#!"> В корзину
                                    </a>
                                </div>
                            </div>
                            <div class="product__card--content text-center">
                                <h3 class="product__card--title"><a href="#!">Наименование</a></h3>
                                <div class="product__card--price">
                                    <span class="current__price">6 500 руб.</span>
                                    <!--                                        <span class="old__price">9 200 руб.</span>-->
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php $i++;
                } ?>

            </div>
            <div class="swiper__nav--btn swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class=" -chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
            <div class="swiper__nav--btn swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class=" -chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
        </div>

        <!--            <div class="product__section--inner">-->
        <!--                <div class="row mb--n30">-->
        <!--                    --><?php
        //                    $i    = 0;
        //                    $stop = 12;
        //
        //                    while ($i < $stop) {
        //                        $rand_1            = rand(0, count($products_images) - 1);
        //                        $rand_2            = rand(0, count($products_images) - 1);
        //                        $rand_product_img1 = $products_images[$rand_1];
        //                        $rand_product_img2 = $products_images[$rand_2];
        //                        ?>
        <!--                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">-->
        <!--                            <article class="product__card">-->
        <!--                                <div class="product__card--thumbnail">-->
        <!--                                    <a class="product__card--thumbnail__link display-block" href="#!">-->
        <!--                                        <img class="product__card--thumbnail__img product__primary--img"-->
        <!--                                             src="-->
        <? //=$rand_product_img1?><!--" alt="product-img">-->
        <!--                                        <img class="product__card--thumbnail__img product__secondary--img"-->
        <!--                                             src="-->
        <? //=$rand_product_img2?><!--" alt="product-img">-->
        <!--                                    </a>-->
        <!--                                    --><?php ///* <span class="product__badge">-14%</span> */ ?>
        <!--                                    <ul class="product__card--action">-->
        <!--                                        <li class="product__card--action__list">-->
        <!--                                            <a class="product__card--action__btn" title="Quick View"-->
        <!--                                               data-bs-toggle="modal"-->
        <!--                                               data-bs-target="#examplemodal" href="javascript:void(0)">-->
        <!--                                                <svg class="product__card--action__btn--svg" width="16" height="16"-->
        <!--                                                     viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                    <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"-->
        <!--                                                          fill="currentColor"></path>-->
        <!--                                                </svg>-->
        <!--                                                <span class="visually-hidden">Посмотреть</span>-->
        <!--                                            </a>-->
        <!--                                        </li>-->
        <!--                                    </ul>-->
        <!--                                    <div class="product__add--to__card">-->
        <!--                                        <a class="product__card--btn" title="Add To Card" href="#!"> В корзину-->
        <!--                                            <svg width="17" height="15" viewBox="0 0 14 11" fill="none"-->
        <!--                                                 xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z"-->
        <!--                                                      fill="currentColor"/>-->
        <!--                                            </svg>-->
        <!--                                        </a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="product__card--content text-center">-->
        <!--                                    <ul class="rating product__card--rating d-flex justify-content-center">-->
        <!--                                        <li class="rating__list">-->
        <!--                                            <span class="rating__icon">-->
        <!--                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"-->
        <!--                                                     xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"-->
        <!--                                                      fill="currentColor"/>-->
        <!--                                                </svg>-->
        <!--                                            </span>-->
        <!--                                        </li>-->
        <!--                                        <li class="rating__list">-->
        <!--                                            <span class="rating__icon">-->
        <!--                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"-->
        <!--                                                     xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"-->
        <!--                                                      fill="currentColor"/>-->
        <!--                                                </svg>-->
        <!--                                            </span>-->
        <!--                                        </li>-->
        <!--                                        <li class="rating__list">-->
        <!--                                            <span class="rating__icon">-->
        <!--                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"-->
        <!--                                                     xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"-->
        <!--                                                      fill="currentColor"/>-->
        <!--                                                </svg>-->
        <!--                                            </span>-->
        <!--                                        </li>-->
        <!--                                        <li class="rating__list">-->
        <!--                                            <span class="rating__icon">-->
        <!--                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"-->
        <!--                                                     xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"-->
        <!--                                                      fill="currentColor"/>-->
        <!--                                                </svg>-->
        <!--                                            </span>-->
        <!--                                        </li>-->
        <!--                                        <li class="rating__list">-->
        <!--                                            <span class="rating__icon">-->
        <!--                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"-->
        <!--                                                     xmlns="http://www.w3.org/2000/svg">-->
        <!--                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"-->
        <!--                                                      fill="currentColor"/>-->
        <!--                                                </svg>-->
        <!--                                            </span>-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <span class="rating__review--text">(25 отзывов)</span>-->
        <!--                                        </li>-->
        <!--                                    </ul>-->
        <!--                                    <h3 class="product__card--title">-->
        <!--                                        <a href="#!">-->
        <!--                                            Наименование товара-->
        <!--                                        </a>-->
        <!--                                    </h3>-->
        <!--                                    <div class="product__card--price">-->
        <!--                                        <span class="current__price">7 650 руб.</span>-->
        <!--                                        <span class="old__price"> 12 990 руб.</span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </article>-->
        <!--                        </div>-->
        <!--                        --><?php //$i++;
        //                    } ?>
        <!---->
        <!--                </div>-->
        <!--                <div class="product__load--more text-center">-->
        <!--                    <a class="load__more--btn primary__btn" href="#!">Посмотреть весь каталог</a>-->
        <!--                </div>-->
        <!--            </div>-->
        </div>
    </section>

    <section class="section--padding">
        <div class="container">
            <div class="section__heading mb-40">
                <h2 class="section__heading--maintitle" style="font-weight: 300">А еще у нас есть</h2>
            </div>

            <style>
                .one-category {
                    background-size: cover;
                    height: 285px;
                    color: white;
                    font-size: 20px;
                    padding-left: 25px;
                    display: flex;
                    justify-content: flex-start;
                    align-items: flex-end;
                    padding-bottom: 25px;
                    font-weight: 700;
                }

                .reset-padding {
                    padding-right: 1rem !important;
                    padding-left: 1rem !important;
                }
            </style>

            <div class="row">
                <div class="col-md-6 reset-padding">
                    <div class="one-category" style="background: url(images/catalog_img/1.png) 100% 100% no-repeat;">
                        Платья
                    </div>
                    <div class="one-category"
                         style="background: url(images/catalog_img/4.png) 100% 100% no-repeat; width: 48%; float: left; margin-top: 25px;">
                        Комплекты на выписку
                    </div>
                    <div class="one-category"
                         style="background: url(images/catalog_img/5.png) 100% 100% no-repeat; width: 48%; float: left; margin-left: 25px; margin-top: 25px;">
                        Пледы
                    </div>

                </div>
                <div class="col-md-3 reset-padding">
                    <div class="one-category"
                         style="background: url(images/catalog_img/2.png) 100% 100% no-repeat; height: 595px">
                        Комбинезоны
                    </div>
                </div>
                <div class="col-md-3 reset-padding">
                    <div class="one-category" style="background: url(images/catalog_img/3.png) 100% 100% no-repeat;">
                        Пинетки
                    </div>
                    <div class="one-category"
                         style="background: url(images/catalog_img/6.png) 100% 100% no-repeat; margin-top: 25px">
                        Подарочные сертификаты
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 reset-padding">
                    <div class="one-category"
                         style="background: url(images/catalog_img/7.png) 100% 100% no-repeat; margin-top: 25px">
                        Шапочки
                    </div>
                </div>
                <div class="col-md-3 reset-padding">
                    <div class="one-category"
                         style="background: url(images/catalog_img/8.png) 100% 100% no-repeat; margin-top: 25px">
                        Костюмы
                    </div>
                </div>
                <div class="col-md-3 reset-padding">
                    <div class="one-category"
                         style="background: url(images/catalog_img/9.png) 100% 100% no-repeat; margin-top: 25px">
                        Боди
                    </div>
                </div>
                <div class="col-md-3 reset-padding">
                    <div class="one-category"
                         style="background: url(images/catalog_img/10.png) 100% 100% no-repeat; margin-top: 25px">
                        Распродажа
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section--padding">
        <div class="container">
            <img src="images/d_block.png" style="width: 100%;">
        </div>
    </section>

</main>
<footer class="footer__section footer__bg">
    <div class="container">
        <div class="main__footer section--padding">
            <div class="row ">
                <div class="col-lg-4 col-md-8">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title d-none d-sm-u-block">О нас
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <div class="footer__widget--inner">
                            <div class="footer__logo">
                                <a class="footer__logo--link" href="#!">
                                    <img class="footer__logo--img" src="logo.svg" style="width: 100%;">
                                </a>
                            </div>
                            <p class="footer__widget--desc">
                                Потребности маленьких клиентов растут, а вместе с ними развиваемся мы, взяв в свои
                                заботливые руки весь кропотливый процесс отбора сырья, разработки фасонов, их исполнения
                                и передачи на прилавки магазинов. Гарант лучшего для покупателей – основная задача
                                компании.
                            </p>
                            <ul class="footer__widget--info">
                                <li class="footer__widget--info_list">
                                    <svg class="footer__widget--info__icon" width="20" height="23" viewBox="0 0 20 23"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.3334 10.1666C18.3334 14.769 10.0001 20.9999 10.0001 20.9999C10.0001 20.9999 1.66675 14.769 1.66675 10.1666C1.66675 5.56421 5.39771 1.83325 10.0001 1.83325C14.6025 1.83325 18.3334 5.56421 18.3334 10.1666Z"
                                              stroke="currentColor" stroke-width="2"></path>
                                        <ellipse cx="10.0001" cy="10.1667" rx="2.5" ry="2.5" stroke="currentColor"
                                                 stroke-width="2"></ellipse>
                                    </svg>
                                    <span class="footer__widget--info__text">Адрес до склада или офиса</span>
                                </li>
                                <li class="footer__widget--info_list">
                                    <svg class="footer__widget--info__icon" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.31 1.52371L18.6133 2.11296C18.6133 2.11296 19.2026 7.41627 13.31 13.3088C7.41748 19.2014 2.11303 18.6133 2.11303 18.6133L1.52377 13.31L5.64971 10.9529L7.71153 13.0148C7.71153 13.0148 9.18467 12.7201 10.9524 10.9524C12.7202 9.18461 13.0148 7.71147 13.0148 7.71147L10.953 5.64965L13.31 1.52371Z"
                                              stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <a class="footer__widget--info__text" href="#!">+7 (916) 503-22-30</a>
                                </li>
                                <li class="footer__widget--info_list">
                                    <svg class="footer__widget--info__icon" width="24" height="20" viewBox="0 0 24 20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.00006 3.33325H22.0001V17.4999H2.00006V3.33325Z"
                                              stroke="currentColor" stroke-width="2"></path>
                                        <path d="M3.2655 3.33325H20.7871L12 12.4999L3.2655 3.33325Z"
                                              stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <a class="footer__widget--info__text" href="#!">info@leoking.ru</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">Каталог
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Категория</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Категория</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Категория</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Категория</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Категория</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">Покупка
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">Информация
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <div class="footer__widget--inner">
                            <ul class="footer__widget--menu footer__widget--inner">
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">Режим работы
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <div class="footer__widget--inner">
                            <ul class="footer__widget--menu footer__widget--inner">
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="#!">Название</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                <p class="copyright__content mb-0"><span class="text__secondary">© 2022</span> © Leoking 2022.
                                                                                               Информация, размещённая
                                                                                               на сайте, носит
                                                                                               ознакомительный характер
                                                                                               и ни в коем случае не
                                                                                               является публичной
                                                                                               офертой, определяемой
                                                                                               положением Статьи 437
                                                                                               Гражданского Кодекса РФ.
                </p>
                <div class="footer__payment">
                    <img src="assets/img/icon/payment-img.webp" alt="payment-img">
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="examplemodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog quickview__main--wrapper modal-dialog-centered">
        <div class="modal-content quickview__main__content">
            <div class="modal-header quickview_m_header">
                <button type="button" class="btn-close quickview__close--btn" data-bs-dismiss="modal"
                        aria-label="Close">✕
                </button>
            </div>
            <div class="modal-body quickview__inner">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="quickview__gallery">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                               data-gallery="product-media-preview"
                                               href="#!"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product/product1.webp"
                                                        alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                   href="#!"
                                                   data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg"
                                                         xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                         height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                              fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                              stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-miterlimit="10" stroke-width="32"
                                                              d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                               data-gallery="product-media-preview"
                                               href="#!"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product/product2.webp"
                                                        alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                   href="#!"
                                                   data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg"
                                                         xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                         height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                              fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                              stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-miterlimit="10" stroke-width="32"
                                                              d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                               data-gallery="product-media-preview"
                                               href="#!"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product/product3.webp"
                                                        alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                   href="#!"
                                                   data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg"
                                                         xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                         height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                              fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                              stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-miterlimit="10" stroke-width="32"
                                                              d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                               data-gallery="product-media-preview"
                                               href="#!"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product/product4.webp"
                                                        alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                   href="#!"
                                                   data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg"
                                                         xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                         height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                              fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                              stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-miterlimit="10" stroke-width="32"
                                                              d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox"
                                               data-gallery="product-media-preview"
                                               href="#!"><img
                                                        class="product__media--preview__items--img"
                                                        src="assets/img/product/big-product/product5.webp"
                                                        alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                   href="#!"
                                                   data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg"
                                                         xmlns="http://www.w3.org/2000/svg" width="22.51"
                                                         height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                              fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                              stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-miterlimit="10" stroke-width="32"
                                                              d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__media--nav swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                 src="assets/img/product/small-product/product1.webp"
                                                 alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                 src="assets/img/product/small-product/product2.webp"
                                                 alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                 src="assets/img/product/small-product/product3.webp"
                                                 alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                 src="assets/img/product/small-product/product4.webp"
                                                 alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img"
                                                 src="assets/img/product/small-product/product5.webp"
                                                 alt="product-nav-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper__nav--btn swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class=" -chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <div class="swiper__nav--btn swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class=" -chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quickview__info">
                            <form action="#">
                                <h2 class="product__details--info__title mb-15">Наименование товара</h2>
                                <div class="product__card--price mb-15">
                                    <span class="current__price">7 250 руб.</span>
                                    <span class="old__price"> 9 500 руб</span>
                                </div>
                                <ul class="rating product__card--rating mb-20 d-flex">
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                  fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                  fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                  fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                  fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                  fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="rating__review--text">(25 отзывов)</span>
                                    </li>
                                </ul>
                                <p class="product__details--info__desc mb-15">
                                    Текстовое описание товара
                                </p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-20">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-10">Цвет:</legend>
                                            <div class="variant__color d-flex">
                                                <div class="variant__color--list">
                                                    <input id="color-red1" name="color" type="radio" checked>
                                                    <label class="variant__color--value red" for="color-red1"
                                                           title="Red"><img class="variant__color--value__img"
                                                                            src="assets/img/product/small-product/product1.webp"
                                                                            alt="variant-color-img"></label>
                                                </div>
                                                <div class="variant__color--list">
                                                    <input id="color-red2" name="color" type="radio">
                                                    <label class="variant__color--value red" for="color-red2"
                                                           title="Black"><img class="variant__color--value__img"
                                                                              src="assets/img/product/small-product/product2.webp"
                                                                              alt="variant-color-img"></label>
                                                </div>
                                                <div class="variant__color--list">
                                                    <input id="color-red3" name="color" type="radio">
                                                    <label class="variant__color--value red" for="color-red3"
                                                           title="Pink"><img class="variant__color--value__img"
                                                                             src="assets/img/product/small-product/product3.webp"
                                                                             alt="variant-color-img"></label>
                                                </div>
                                                <div class="variant__color--list">
                                                    <input id="color-red4" name="color" type="radio">
                                                    <label class="variant__color--value red" for="color-red4"
                                                           title="Orange"><img class="variant__color--value__img"
                                                                               src="assets/img/product/small-product/product4.webp"
                                                                               alt="variant-color-img"></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list mb-20">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-10">Размер:</legend>
                                            <ul class="variant__size d-flex">
                                                <li class="variant__size--list">
                                                    <input id="weight1" name="weight" type="radio" checked>
                                                    <label class="variant__size--value red" for="weight1">1</label>
                                                </li>
                                                <li class="variant__size--list">
                                                    <input id="weight2" name="weight" type="radio">
                                                    <label class="variant__size--value red" for="weight2">2</label>
                                                </li>
                                                <li class="variant__size--list">
                                                    <input id="weight3" name="weight" type="radio">
                                                    <label class="variant__size--value red" for="weight3">3</label>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="quickview__variant--list quantity d-flex align-items-center mb-15">
                                        <div class="quantity__box">
                                            <button type="button"
                                                    class="quantity__value quickview__value--quantity decrease"
                                                    aria-label="quantity value" value="Decrease Value">-
                                            </button>
                                            <label>
                                                <input type="number" class="quantity__number quickview__value--number"
                                                       value="1" data-counter/>
                                            </label>
                                            <button type="button"
                                                    class="quantity__value quickview__value--quantity increase"
                                                    aria-label="quantity value" value="Increase Value">+
                                            </button>
                                        </div>
                                        <button class="primary__btn quickview__cart--btn" type="submit">В корзину
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsletter__popup" data-animation="slideInUp">
    <div id="boxes" class="newsletter__popup--inner">
        <button class="newsletter__popup--close__btn" aria-label="search close button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
            </svg>
        </button>
        <div class="box newsletter__popup--box d-flex align-items-center">
            <div class="newsletter__popup--thumbnail">
                <img class="newsletter__popup--thumbnail__img display-block"
                     src="assets/img/banner/newsletter-popup-thumb2.webp" alt="newsletter-popup-thumb">
            </div>
            <div class="newsletter__popup--box__right">
                <h2 class="newsletter__popup--title">Join Our Newsletter</h2>
                <div class="newsletter__popup--content">
                    <label class="newsletter__popup--content--desc">Enter your email address to subscribe our
                                                                    notification of our new post &amp; features by
                                                                    email.</label>
                    <div class="newsletter__popup--subscribe" id="frm_subscribe">
                        <form class="newsletter__popup--subscribe__form">
                            <input class="newsletter__popup--subscribe__input" type="text"
                                   placeholder="Enter you email address here...">
                            <button class="newsletter__popup--subscribe__btn">Subscribe</button>
                        </form>
                        <div class="newsletter__popup--footer">
                            <input type="checkbox" id="newsletter__dont--show">
                            <label class="newsletter__popup--dontshow__again--text" for="newsletter__dont--show">Don't
                                                                                                                 show
                                                                                                                 this
                                                                                                                 popup
                                                                                                                 again</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button id="scroll__top">
    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
              d="M112 244l144-144 144 144M256 120v292"/>
    </svg>
</button>
<div class="right-icons">
    <div class="whatsapp_icon">
        <img src="images/whatsapp_icon.svg" style="width: 50px;">
    </div>
</div>
<script src="assets/js/vendor/popper.js" defer="defer"></script>
<script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/glightbox.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>