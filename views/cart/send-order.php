<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Оформление заказа';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>


<style>
    .cust_page_text .text p {
        font-size: 17px;
        color: rgb(54, 54, 54);
        line-height: 1.647;
        text-align: left;
    }

    .cust_page_text .text strong {
        font-size: 17px;
        color: rgb(54, 54, 54);
        font-weight: 700;
        line-height: 1.647;
        text-align: left;
    }

    .cust_page_text ul{
        padding: 0 0 2rem 1.5rem;
    }

    .cust_page_text ul li{
        list-style-type: disc;
        line-height: 1.8;
        font-size: 16px;
    }

    .cust_page_text ul li + li{
        margin-top: 10px;
    }

    .order-form{
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .order-block{
        padding: 38px 40px 40px;
        border: 1px solid #e4e4e4;
    }
    .order-block legend{
        font-weight: 700;
        font-size: 14px;
        line-height: 1;
        letter-spacing: .06em;
        text-transform: uppercase;
        border: 0;
    }

</style>

<section class="how_buy_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="cust_page_text">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="order">
                    <form class="order-form">
                        <fieldset class="order-block">
                            <legend>есть учетная запись? <a href="">Войти</a></legend>
                            <p>Если вы не были зарегистрированы в нашем интернет-магазине, то мы автоматически создадим для вас учетную запись. Пароль вы можете поменять в личном кабинете.</p>
                        </fieldset>
                        <!-- 1  Промокод -->
                        <fieldset class="order-block">
                            <legend class="mb-3">ПРОМОКОД</legend>
                            <input type="text" placeholder="*****" class="form-control mb-5" id="promocode" name="promocode" />
                        </fieldset>
                        <!-- 1  Способ и адрес доставки -->
                        <fieldset class="order-block">
                            <legend class="mb-3">1. Способ и адрес доставки</legend>

                            <input type="text" placeholder="адрес" class="form-control mb-5" id="locations-choice" name="locations-choice" />

                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input type="radio" id="order-delivery" name="courier-delivery-radio" class="form-check-input" checked>
                                        <label for="order-delivery" class="form-check-label">Доставка курьером</label>                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input type="radio" id="order-delivery-points" name="courier-delivery-radio" class="form-check-input i-2">
                                        <label for="order-delivery-points" class="form-check-label">Пункты выдачи заказов</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input type="radio" id="self-delivery" name="courier-delivery-radio" class="form-check-input i-3">
                                        <label for="self-delivery" class="form-check-label">Самовывоз</label>
                                    </div>
                                </div>
                            </div>

                            <hr class="hr">

                            <div class="courier-delivery" id="i-1">
                                <div class="order-item">
                                    <label class="order-label">
                                        <span class="order-label-radiowrapper">
                                            <input type="radio" name="courier-delivery" id="boxberry">
                                        </span>
                                        <div class="order-label-logo">
                                            <img src="https://loomknits.com/upload/resize_cache/sale/delivery/logotip/f85/4r8z4t1jzocp5d4ay0s9h2kjrhn0tjxj/95_55_1/boxberry_logo.png" alt="">
                                        </div>                                        
                                        <p class="order-label-title">Доставка Boxberry (Курьерская доставка)</p>
                                        <strong class="order-label-cost">409 руб.</strong>
                                        <span class="order-label-days">5 дней</span> 
                                    </label>
                                </div>
                                <div class="order-item">
                                    <label class="order-label">
                                        <span class="order-label-radiowrapper">
                                            <input type="radio" name="courier-delivery" id="sdek">
                                        </span>
                                        <div class="order-label-logo">
                                            <img src="https://loomknits.com/upload/sale/delivery/logotip/5da/courier.png" alt="">
                                        </div>                                        
                                        <p class="order-label-title">СДЭК (Доставка курьером)</p>
                                        <strong class="order-label-cost">581 руб.</strong>
                                        <span class="order-label-days">2-3 дня</span> 
                                    </label>
                                </div>
                                <div class="order-address">
                                    <div class="order-item">
                                        <label for="" class="form-label">Улица<sup>*</sup></label>
                                        <input type="text" name="street" class="form-control">
                                    </div>
                                    <div class="order-item">
                                        <div class="row">
                                            <div class="col">
                                                <label for="" class="form-label">Улица<sup>*</sup></label>
                                                <input type="text" name="street" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Подъезд</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Этаж</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">Квартира / офис</label>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="order-item">
                                        <label for="" class="form-label">Комментарий к адресу</label>
                                        <input type="text" name="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="courier-delivery" id="i-2">
                                <div class="order-item">
                                    <label class="order-label">
                                        <span class="order-radiowrapper">
                                            <input type="radio" name="courier-delivery" id="boxberry-2">
                                        </span>
                                        <div class="order-label-logo">
                                            <img src="https://loomknits.com/upload/resize_cache/sale/delivery/logotip/f85/4r8z4t1jzocp5d4ay0s9h2kjrhn0tjxj/95_55_1/boxberry_logo.png" alt="">
                                        </div>                                        
                                        <p class="order-label-title">СДЭК (Доставка до пункта выдачи)</p>
                                        <strong class="order-label-cost">300 руб.</strong>
                                        <span class="order-label-days">2-3 дня</span>
                                        <div class="order-label-point">
                                            <a href="" class="order-label-point btn primary__btn">Выбрать пункт самовывоза</a>
                                        </div>                                        
                                    </label>
                                </div>
                                <div class="order-item">
                                    <label class="order-label">
                                        <span class="order-label-radiowrapper">
                                            <input type="radio" name="courier-delivery" id="sdek-2">
                                        </span>
                                        <div class="order-label-logo">
                                            <img src="https://loomknits.com/upload/sale/delivery/logotip/5da/courier.png" alt="">
                                        </div>                                        
                                        <p class="order-label-title">СДЭК (Доставка курьером)</p>
                                        <strong class="order-label-cost">300 руб.</strong>
                                        <span class="order-label-days">3 дня</span> 
                                        <a href="" class="order-label-point">Выбрать пункт самовывоза</a>                                        
                                        <div class="order-label-point">
                                            <a href="" class="order-label-point btn primary__btn">Выбрать пункт самовывоза</a>
                                        </div>                                       
                                    </label>
                                </div>
                            </div>
                            <div class="courier-delivery" id="i-3" style="display: none;">
                                <div class="order-item">
                                    <label class="order-label">                                 
                                        <p class="order-label-title">г. Москва, Очаковское шоссе, д. 28, стр.2, 1 этаж)</p>                                      
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <!-- 2  Способ оплаты -->
                        <fieldset class="order-block">
                            <legend>2. Способ оплаты</legend>
                            <div class="order-item -payment-delivery">
                                <label class="order-label -pay">
                                    <span class="order-label-radiowrapper">
                                        <input type="radio" name="courier-delivery" id="sdek-2">
                                    </span>
                                    <p class="order-label-title">Оплата банковской картой</p>
                                </label>
                            </div>
                            <div class="order-item -four-payment">
                                <label class="order-label -four-payment">
                                    <span class="order-label-radiowrapper">
                                        <input type="radio" name="courier-delivery" id="four-payment">
                                    </span>
                                    <p class="order-label-title">Оплата долями (4 платежа)</p>
                                </label>
                            </div>
                            <div class="order-item -self-delivery" style="display: none;">
                                <label class="order-label -pay">
                                    <span class="order-label-radiowrapper">
                                        <input type="radio" name="courier-delivery" id="self-delivery-pay">
                                    </span>
                                    <p class="order-label-title">Оплата при получении</p>
                                </label>
                            </div>
                        </fieldset>

                        <!-- 3 Контактная информация  -->
                        <fieldset class="order-block">
                            <legend class="">3. Контактная информация</legend>
                            <div class="order-item">
                                <label for="" class="form-label">Ф.И.О<sup>*</sup></label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="order-item">
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label">Электронный адрес<sup>*</sup></label>
                                        <input type="email" name="" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Контактный телефон</label>
                                        <input type="tel" name="" class="form-control">
                                    </div>
                                </div>                                    
                            </div>
                        </fieldset>

                        <!-- 4  Подтверждение заказа -->
                        <fieldset class="order-block">
                            <legend>4. Подтверждение заказа</legend>
                            <div class="order-item">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="require-operator">
                                  <label class="form-check-label" for="require-operator">
                                    Требуется подтверждение оператора?
                                  </label>
                                </div>
                            </div>
                            <div class="order-item">
                                <label class="form-label">Комментарий к заказу</label>
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                            <div class="order-item">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="subscribe" checked>
                                  <label class="form-check-label" for="subscribe">
                                    Я согласен на получение маркетинговых рассылок компании
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="personal-data" checked>
                                  <label class="form-check-label" for="personal-data">
                                    Я согласен на обработку персональных данных
                                  </label>
                                </div>
                            </div>
                        </fieldset>
                        <button class="primary__btn minicart__button--link" style="max-width: 200px;">Оформить заказ</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="minicart__product">
                    <?php
                    $total_qty = 0;
                    $total_price = 0;
                    //            session_destroy();

                    if (!empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $product) {
                            $price = (int)$product['baseCost'];
                            $upPrice = $price * 1.25;
                            $total_qty += $product['qty'];
                            $total_price += $price;

                            // выцепляем первую фотку
                            $first_image = explode(', ', $product['images']);
                            $first_image = $first_image[0];
                            ?>
                            <div class="minicart__product--items d-flex">
                                <div class="minicart__thumb">
                                    <a href="#!">
                                        <img src="<?=$first_image?>" alt="<?=$product['title']?>">
                                    </a>
                                </div>

                                <div class="minicart__text">
                                    <h4 class="minicart__subtitle"><a href="#!"><?=$product['title']?></a></h4>
                                    <span class="color__variant"><b>Цвет:</b> Бежевый</span>
                                    <div class="minicart__price">
                                        <span class="minicart__current--price"><?=$product['baseCost']?> руб.</span>
                                        <span class="minicart__old--price">
                                                    <?php
                                                    echo round($upPrice, 2);
                                                    ?> руб.</span>
                                    </div>
                                    <div class="minicart__text--footer d-flex align-items-center">
                                        <div class="quantity__box minicart__quantity">
                                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                                    value="Decrease Value">-
                                            </button>
                                            <label>
                                                <input type="number" class="quantity__number" min="0" value="<?=$product['qty']?>" data-counter/>
                                            </label>
                                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                                    value="Increase Value">+
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                 
                </div>
                <div class="minicart__amount">
                    <div class="minicart__amount_list d-flex justify-content-between">
                        <span>Кол-во:</span>
                        <span><b><?=$total_qty?> шт.</b></span>
                    </div>
                    <div class="minicart__amount_list d-flex justify-content-between">
                        <span>На сумму:</span>
                        <span><b><?=$total_price?> руб.</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



