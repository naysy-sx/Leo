<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Где купить';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

<section class="about_section">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="texts_block">
          <div class="top_title">Где купить?</div>
          <div class="text"></div>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="text">
          <p class="has-text-align-center text-center">Наша продукция представлена в</p>
        </div>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <style>

          .buy-locations-wrapper{
            display: grid;
            grid-template-columns: 60px 1fr 60px;
            grid-template-rows: 150px auto;
            grid-template-areas: 'prev slider next' '. pager .';
            position: relative;
            width: 100%;
            overflow: hidden;
            grid-gap: 30px;
            align-items: center;
            justify-content: center;
          }



          .buy-locations-wrapper .buy-locations-slider{
            grid-area: slider;
            overflow: hidden;
          }

          .buy-locations-wrapper .swiper-pagination{
            grid-area: pager;
          }

          .buy-locations-wrapper .swiper-button-prev{
            grid-area: prev;
            width: 60px;
            height: 60px;
          }

          .buy-locations-wrapper .swiper-button-prev svg{
            position: relative;
            left: 1rem;
          }

          .buy-locations-wrapper .swiper-button-next{
            grid-area: next;
            width: 60px;
            height: 60px;
          }

          .buy-locations-wrapper .swiper-slide{
            display: flex;
            width: 100%;
            height: 150px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 3rem;
          }

          .buy-locations-wrapper .swiper-slide img{
            width: 150px;
            height: 80px;
            object-fit: contain;
          }

          .swiper-pagination .swiper-pagination-bullet {
              margin: 0 10px !important;
              background: transparent;
              border: 1px solid #1b1b1b;
              opacity: 1;
              height: 11px;
              width: 11px;
              position: relative;
              -webkit-transition: .5s;
              -o-transition: .5s;
              transition: .5s;
          }

          .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
              border-color: #f2af90;
          }

          .swiper-pagination .swiper-pagination-bullet:after {
              content: '';
              width: 3px;
              height: 3px;
              display: block;
              position: absolute;
              bottom: 0;
              left: 0;
              right: 0;
              top: 0;
              margin: auto;
              background: #000;
              border-radius: 50%;
              -webkit-transform: scale(0);
              -ms-transform: scale(0);
              transform: scale(0);
              -webkit-transition: .5s;
              -o-transition: .5s;
              transition: .5s;
          }


          .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active:after {
              content: '';
              -webkit-transform: scale(1);
              -ms-transform: scale(1);
              transform: scale(1);
              background: #f2af90;
          }


        </style>

        <div class="buy-locations-wrapper">
          <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="#98928E" d="m2.82 12l7.715 7.716q.22.22.218.528t-.224.529t-.529.221t-.529-.221L1.83 13.137q-.242-.243-.354-.54q-.111-.299-.111-.597t.111-.596q.112-.298.354-.54L9.47 3.22q.221-.221.532-.218q.31.003.532.224q.22.221.22.529t-.22.529z"/></svg>
          </div>
          <div class="buy-locations-slider">
            <div class="buy-locations">
              <div class="swiper-wrapper">
                  <div class="swiper-slide" role="group"> 
                    <a href="https://gum.ru/shops/detskiy-gum/" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/09/detskiy_gum-1.png"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group"> 
                    <a href="https://danielonline.ru/" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/logo_daniel_20220211.svg"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group"> 
                    <a href="https://www.lamoda.ru" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/2d3ea597273620fc56a906d344d30785.svg"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group" > 
                    <a href="https://stockmann.ru/" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/bez-nazvaniya.svg"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group" > 
                    <a href="https://www.winny.ru/" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/logo1150-1.png"> 
                    </a> 
                  </div>
                  <div class="swiper-slide swiper-slide-prev" role="group" > 
                    <a href="https://www.hcmoda.ru/" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/logomain-2.png"> 
                    </a> 
                  </div>
                  <div class="swiper-slide swiper-slide-active" role="group" > 
                    <a href="https://underlinestore.ru" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/under-1.svg"> 
                    </a> 
                  </div>
                  <div class="swiper-slide swiper-slide-next" role="group" > 
                    <a href="https://www.detmir.ru" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/06/4e2097989e09febdac5bf6bcfabe1832.svg"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group" > 
                    <a href="https://imperiya-detstva.ru" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/07/logo-name.png"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group"> 
                    <a href="http://www.bgd.ru" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/07/bgd-logo-b3b73cad78e74e1336dfebd218761c1c.png"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group" > 
                    <a href="https://telegraph.zelenopark.ru/" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2022/10/sm.png"> 
                    </a> 
                  </div>
                  <div class="swiper-slide" role="group"> 
                    <a href="https://www.olant-shop.ru" target="_blank"> 
                      <img src="https://leoking.ru/wp-content/uploads/2023/02/logo_color.svg"> 
                    </a> 
                  </div>
              </div>          
            </div>
          </div>
          <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="#98928E" d="M15.187 12L7.47 4.285q-.221-.221-.218-.532q.003-.31.224-.532Q7.698 3 8.009 3q.31 0 .532.221l7.636 7.643q.242.242.354.54t.111.596t-.111.596t-.354.54L8.535 20.78q-.222.221-.53.218q-.307-.003-.528-.224t-.221-.532t.221-.531z"/></svg>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <script>
          const buyLocations = new Swiper('.buy-locations', {
            slidesPerView: 5,
            loop: true,
            clickable: true,
            spaceBetween: 30,
            breakpoints: {
                1366: {
                    slidesPerView: 5,
                },
                992: {
                    slidesPerView: 4,
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                0: {
                    slidesPerView: 1,
                },
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true
            },            
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
          });
        </script>

      </div>
    </div>
  </div>
</section>