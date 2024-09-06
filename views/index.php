<?php 
use yii\helpers\Url; 
use app\models\CatalogList;
?>


<?php
  $products_images_dir = dirname(dirname(__DIR__)) . '/public_html/img/product_images';
  $products_images_tmp = scandir($products_images_dir);
  $products_images     = [];

  foreach ($products_images_tmp as $product_img) {
      if (is_file($products_images_dir . '/' . $product_img)) {
          $products_images[] = 'img/product_images/' . $product_img;
      }
  }
?>


<?php

/* @var $this yii\web\View */

$this->title = 'Главная страница';
?>

    <section class="hero__slider--section">
        <div class="hero__slider--activation swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/leokingyii/public_html/images/main_bg.png" alt="" class="swiper-slide-image">
                    <div class="hero__slider--items">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider__content" style="text-align: left; min-height: 70vh">
                                        <h2 class="slider__maintitle text__primary h1 text-left font-white">
                                            Хлопковая нежность для вас и ваших детей
                                        </h2>
                                        <a class="btn main-btn" href="#!">
                                            смотреть каталог
                                             <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15.9732 5.19375L11.1893 0.460018C11.1225 0.392216 11.0412 0.338185 10.9507 0.301395C10.8601 0.264605 10.7623 0.245867 10.6636 0.246372C10.5648 0.246877 10.4672 0.266615 10.377 0.304329C10.2869 0.342044 10.2061 0.396903 10.14 0.465385C10.001 0.610077 9.9245 0.79778 9.92549 0.992021C9.92649 1.18626 10.0049 1.37316 10.1454 1.51643L13.6531 4.9864L0.935903 5.05145C0.734471 5.06613 0.546408 5.15137 0.409525 5.29006C0.272641 5.42874 0.197086 5.61057 0.19805 5.799C0.199014 5.98743 0.276425 6.16848 0.41472 6.30575C0.553015 6.44303 0.74194 6.52635 0.943512 6.53896L13.6586 6.47392L10.1866 9.98155C10.0475 10.1262 9.97108 10.3139 9.97207 10.5082C9.97306 10.7024 10.0514 10.8893 10.192 11.0326C10.2588 11.1004 10.3401 11.1544 10.4306 11.1912C10.5212 11.228 10.6189 11.2467 10.7177 11.2462C10.8165 11.2457 10.9141 11.226 11.0042 11.1883C11.0944 11.1506 11.1751 11.0957 11.2413 11.0272L15.9786 6.25458C16.1206 6.1093 16.1989 5.91956 16.1979 5.72303C16.1969 5.5265 16.1167 5.33757 15.9732 5.19375Z"
                                                       fill="currentColor"/>
                                               </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/leokingyii/public_html/images/slide-2.jpg" alt="" class="swiper-slide-image">
                    <div class="hero__slider--items">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider__content" style="text-align: left; min-height: 70vh">
                                        <h2 class="slider__maintitle text__primary h1 text-left font-white">
                                            Слайд 2
                                        </h2>
                                        <a class="btn main-btn" href="#!">
                                            смотреть каталог
                                             <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15.9732 5.19375L11.1893 0.460018C11.1225 0.392216 11.0412 0.338185 10.9507 0.301395C10.8601 0.264605 10.7623 0.245867 10.6636 0.246372C10.5648 0.246877 10.4672 0.266615 10.377 0.304329C10.2869 0.342044 10.2061 0.396903 10.14 0.465385C10.001 0.610077 9.9245 0.79778 9.92549 0.992021C9.92649 1.18626 10.0049 1.37316 10.1454 1.51643L13.6531 4.9864L0.935903 5.05145C0.734471 5.06613 0.546408 5.15137 0.409525 5.29006C0.272641 5.42874 0.197086 5.61057 0.19805 5.799C0.199014 5.98743 0.276425 6.16848 0.41472 6.30575C0.553015 6.44303 0.74194 6.52635 0.943512 6.53896L13.6586 6.47392L10.1866 9.98155C10.0475 10.1262 9.97108 10.3139 9.97207 10.5082C9.97306 10.7024 10.0514 10.8893 10.192 11.0326C10.2588 11.1004 10.3401 11.1544 10.4306 11.1912C10.5212 11.228 10.6189 11.2467 10.7177 11.2462C10.8165 11.2457 10.9141 11.226 11.0042 11.1883C11.0944 11.1506 11.1751 11.0957 11.2413 11.0272L15.9786 6.25458C16.1206 6.1093 16.1989 5.91956 16.1979 5.72303C16.1969 5.5265 16.1167 5.33757 15.9732 5.19375Z"
                                                       fill="currentColor"/>
                                               </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/leokingyii/public_html/images/slide-3.jpg" alt="" class="swiper-slide-image">
                    <div class="hero__slider--items">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider__content" style="text-align: left; min-height: 70vh">
                                        <h2 class="slider__maintitle text__primary h1 text-left font-white">
                                            Слайд 3
                                        </h2>
                                        <a class="btn main-btn" href="#!">
                                            смотреть каталог
                                             <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15.9732 5.19375L11.1893 0.460018C11.1225 0.392216 11.0412 0.338185 10.9507 0.301395C10.8601 0.264605 10.7623 0.245867 10.6636 0.246372C10.5648 0.246877 10.4672 0.266615 10.377 0.304329C10.2869 0.342044 10.2061 0.396903 10.14 0.465385C10.001 0.610077 9.9245 0.79778 9.92549 0.992021C9.92649 1.18626 10.0049 1.37316 10.1454 1.51643L13.6531 4.9864L0.935903 5.05145C0.734471 5.06613 0.546408 5.15137 0.409525 5.29006C0.272641 5.42874 0.197086 5.61057 0.19805 5.799C0.199014 5.98743 0.276425 6.16848 0.41472 6.30575C0.553015 6.44303 0.74194 6.52635 0.943512 6.53896L13.6586 6.47392L10.1866 9.98155C10.0475 10.1262 9.97108 10.3139 9.97207 10.5082C9.97306 10.7024 10.0514 10.8893 10.192 11.0326C10.2588 11.1004 10.3401 11.1544 10.4306 11.1912C10.5212 11.228 10.6189 11.2467 10.7177 11.2462C10.8165 11.2457 10.9141 11.226 11.0042 11.1883C11.0944 11.1506 11.1751 11.0957 11.2413 11.0272L15.9786 6.25458C16.1206 6.1093 16.1989 5.91956 16.1979 5.72303C16.1969 5.5265 16.1167 5.33757 15.9732 5.19375Z"
                                                       fill="currentColor"/>
                                               </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__pagination swiper-pagination"></div>
        </div>
    </section>

    <section class="section--padding">
        <div class="container">
            <div class="section__heading mb-40">
                <h2 class="section__heading--maintitle" style="font-weight: 300">Каталог</h2>
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

                .catalog-grid{
                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                    grid-template-rows: 285px 285px 285px;
                    gap: 25px;
                }



                .catalog-grid-item.big-horizontal{
                    grid-column: 1 / 3;
                }

                .catalog-grid-item.big-vertical{
                    grid-column: 3 / 4;
                    grid-row: 1 / 3;
                }

                .catalog-grid-link{
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-end;
                    align-items: flex-start;
                    padding: 25px;
                    color: white;
                    height: 100%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center center;
                    font-size: 20px;   
                    font-weight: bold;                
                }
                .catalog-grid-link:hover{
                    color: white;              
                }

                @media (max-width: 992px) {
                    .catalog-grid{
                        grid-template-columns: 1fr 1fr 1fr;
                        grid-template-rows: 200px 200px 200px 200px;
                        gap: 1rem;
                    }
                    .catalog-grid-link{
                        padding: 1rem;
                        font-size: 1.5rem;               
                    }
                }
                @media (max-width: 768px) {
                    .catalog-grid{
                        grid-template-rows: 150px 150px 150px 150px;
                    }
                }
                @media (max-width: 576px) {
                    .catalog-grid-item.big-horizontal{
                        grid-column: inherit;
                    }
                    .catalog-grid-item.big-vertical{
                        grid-column: inherit;
                        grid-row: inherit;
                    }
                    .catalog-grid{
                        grid-template-columns: 1fr 1fr;
                        grid-template-rows: 100px 100px 100px 100px 100px;
                    }
                }


            </style>


            <ul class="catalog-grid">
                <li class="catalog-grid-item big-horizontal">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/1.png);" href="index.php?r=shop%2Findex&category_id=4">
                        <span>Платья</span>
                    </a>
                </li>
                <li class="catalog-grid-item big-vertical">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/2.png);" href="index.php?r=shop%2Findex&category_id=3">
                        <span>Комбинезоны</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/3.png);" href="index.php?r=shop%2Findex&category_id=8">
                        <span>Пинетки</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/4.png);" href="index.php?r=shop%2Findex&category_id=11">
                        <span>Аксессуары</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/5.png);" href="index.php?r=shop%2Findex&category_id=7">
                        <span>Пледы</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/6.png);" href="index.php?r=shop%2Findex&category_id=13">
                        <span>Подарочные сертификаты</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/7.png);" href="index.php?r=shop%2Findex&category_id=9">
                        <span>Шапочки</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/8.png);" href="index.php?r=shop%2Findex&category_id=1">
                        <span>Костюмы</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/9.png);" href="index.php?r=shop%2Findex&category_id=5">
                        <span>Боди</span>
                    </a>
                </li>
                <li class="catalog-grid-item">
                    <a class="catalog-grid-link" style="background-image: url(images/catalog_img/10.png);" href="index.php?r=shop%2Findex&category_id=13">
                        <span>Распродажа</span>
                    </a>
                </li>                
            </ul>
        </div>
    </section>


    <section class="section--padding">
        <div class="container"
             style="background: url(images/subscr_bg.png) 100% 100% no-repeat; height: 395px; text-align: center">
            <div class="subscr-title">Подпишитесь и узнавайте первыми информацию о новинках и акциях</div>

            <div class="row mt-30">
                <div class="col-md-10">
                    <input type="text" class="form-control subscr-input" placeholder="Ваш e-mail">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-subscr">Подписаться</button>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-md-12" style="font-weight: 400">
                    Подписываясь на рассылку, Вы соглашаетесь с условиями <u>Политики конфиденциальности</u>
                </div>
            </div>

        </div>
    </section>

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

