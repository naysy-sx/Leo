<style>
    .minicart__product--items{
        position: relative;
    }
    .delete-card{
        position: absolute;
        right: 0;
        top: 0;
        padding: 0.5rem;
    }
    .delete-card:hover{
        color: red;
    }
</style>

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
                <a class="delete-card" title="Удалить из корзины">╳</a>
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
<div class="minicart__button d-flex justify-content-center" style="margin-top: 25px">
    <a class="primary__btn minicart__button--link" href="index.php?r=cart/send-order">Оформить</a>
</div>