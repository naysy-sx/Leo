<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
	.main__content_wrapper {
	  padding-top: 10rem;
	}

	@media (min-width: 1200px) {
	  .best-offer-wrapper{
	  	grid-template-columns: 60px 1260px 60px !important;
			width: calc(100% + 10rem) !important;
    	margin: 0 -4rem;
	  }
	}

  .best-offer-wrapper{
    display: grid;
    grid-template-columns: 60px 1fr 60px;
    grid-template-areas: 'prev slider next';
    position: relative;
    width: 100%;
    overflow: hidden;
    grid-gap: 30px;
    align-items: center;
    justify-content: center;
  }

  .best-offer-wrapper .best-offer{
    grid-area: slider;
    overflow: hidden;
    padding: 1rem;
  }

  .best-offer-wrapper .swiper-button-prev{
    grid-area: prev;
    width: 60px;
    height: 60px;
  }

  .best-offer-wrapper .swiper-button-prev svg{
    position: relative;
    left: 3rem;
  }

  .best-offer-wrapper .swiper-button-next{
    grid-area: next;
    width: 60px;
    height: 60px;
  }

  .best-offer-wrapper ..products-list-item{
    width: 400px;
  }


</style>


<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Избранное';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>


<section class="cart__section section--padding">
  <div class="container">
      <div class="cart__section--inner">
          <form action="#"> 
              <h2 class="cart__title mb-30">Избранное</h2>
              <div class="cart__table">
                  <table class="cart__table--inner">
                      <thead class="cart__table--header">
                          <tr class="cart__table--header__items">
                              <th class="cart__table--header__list">Название</th>
                              <th class="cart__table--header__list">Цена</th>
                              <th class="cart__table--header__list text-right">Добавить в корзину</th>
                          </tr>
                      </thead>
                      <tbody class="cart__table--body">
                          <tr class="cart__table--body__items">
                              <td class="cart__table--body__list">
                                  <div class="cart__product d-flex align-items-center">
                                      <button class="cart__remove--btn" aria-label="search button" type="button">
                                          <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px">
                                          	<path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/>
                                          </svg>
                                      </button>
                                      <div class="cart__thumbnail">
                                          <a href="product-details.html">
                                          	<img class="border-radius-5" src="https://leoking.ru/wp-content/uploads/2022/06/stan1769.jpg" alt="cart-product">
                                          </a>
                                      </div>
                                      <div class="cart__content">
                                          <h3 class="cart__content--title h4">
                                          	<a href="product-details.html">Шапка детская для мальчика из 100% хлопка</a>
                                         	</h3>
                                          <span class="cart__content--variant">Цвет: светлый</span>
                                          <span class="cart__content--variant">Размер: 5 M</span>
                                      </div>
                                  </div>
                              </td>
                              <td class="cart__table--body__list">
                                  <span class="cart__price">1000 Р</span>
                              </td>
                              <td class="cart__table--body__list text-right">
                                  <a class="wishlist__cart--btn primary__btn" href="cart.html">Добавить в корзину</a>
                              </td>
                          </tr>
                          <tr class="cart__table--body__items">
                              <td class="cart__table--body__list">
                                  <div class="cart__product d-flex align-items-center">
                                      <button class="cart__remove--btn" aria-label="search button" type="button">
                                          <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px">
                                          	<path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/>
                                          </svg>
                                      </button>
                                      <div class="cart__thumbnail">
                                          <a href="product-details.html">
                                          	<img class="border-radius-5" src="https://leoking.ru/wp-content/uploads/2022/06/stan1769.jpg" alt="cart-product">
                                          </a>
                                      </div>
                                      <div class="cart__content">
                                          <h3 class="cart__content--title h4">
                                          	<a href="product-details.html">Вязаные пинетки</a>
                                         	</h3>
                                          <span class="cart__content--variant">Цвет: Бежевый</span>
                                          <span class="cart__content--variant">Размер: 2 M</span>
                                      </div>
                                  </div>
                              </td>
                              <td class="cart__table--body__list">
                                  <span class="cart__price">2000 Р</span>
                              </td>
                              <td class="cart__table--body__list text-right">
                                  <a class="wishlist__cart--btn primary__btn" href="cart.html">Добавить в корзину</a>
                              </td>
                          </tr>
                      </tbody>
                  </table> 
                  <div class="continue__shopping d-flex justify-content-between">
                      <a class="continue__shopping--link" href="index.php?r=shop">Вернутся в каталог</a>
                  </div>
              </div> 
          </form> 
      </div>
  </div>     
</section>
<!-- cart section end -->

<section class="product__section section--padding ">
    <div class="container">
        <div class="section__heading mb-40">
            <h2 class="section__heading--maintitle" style="font-weight: 300; text-align: center;">Лучшее предложение</h2>
        </div>

        <div class="best-offer-wrapper">
          <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="#98928E" d="m2.82 12l7.715 7.716q.22.22.218.528t-.224.529t-.529.221t-.529-.221L1.83 13.137q-.242-.243-.354-.54q-.111-.299-.111-.597t.111-.596q.112-.298.354-.54L9.47 3.22q.221-.221.532-.218q.31.003.532.224q.22.221.22.529t-.22.529z"/></svg>
          </div>
        	<div class="best-offer">
            <div class="swiper-wrapper">
	            <?php
		            foreach ($products as $product) {
		                echo $this->render('@app/views/shop/_card', [
		                    'model' => $product,
		                ]);
		            }
		           ?>
            </div>
          </div>
         	<div class="swiper-button-next">
       			 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
       			 	<path fill="#98928E" d="M15.187 12L7.47 4.285q-.221-.221-.218-.532q.003-.31.224-.532Q7.698 3 8.009 3q.31 0 .532.221l7.636 7.643q.242.242.354.54t.111.596t-.111.596t-.354.54L8.535 20.78q-.222.221-.53.218q-.307-.003-.528-.224t-.221-.532t.221-.531z"/>
       			 </svg>
          </div>
       </div>
    </div>
</section>

<script>
  const bestOffer = new Swiper('.best-offer', {
    slidesPerView: 3,
    loop: true,
    clickable: true,
    spaceBetween: 30,
    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        0: {
            slidesPerView: 1,
        },
    },        
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
  });
	</script>



    <section class="section--padding">
        <div class="container">
            <img src="images/d_block.png" style="width: 100%;">
        </div>
    </section>

    <section class="section--padding">
        <div class="container" style="color: #b69f83; text-align: center; font-size: 20px; font-weight: 600">
            Загляните к нашим партнёрам! Вы точно найдёте там что то интересное.<br><br>

            <div class="row">
                <div class="col-md-3">
                    <img src="images/catalog_img/b1.png" style="width: 100%;">
                </div>
                <div class="col-md-3">
                    <img src="images/catalog_img/b2.png" style="width: 100%;">
                </div>
                <div class="col-md-3">
                    <img src="images/catalog_img/b3.png" style="width: 100%;">
                </div>
                <div class="col-md-3">
                    <img src="images/catalog_img/b4.png" style="width: 100%;">
                </div>
            </div>

        </div>
    </section>
