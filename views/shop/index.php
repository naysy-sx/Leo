<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title                   = isset($category) ? $category->title : 'Каталог';
$this->params['breadcrumbs'][] = $this->title;

?>

<?=$this->render('//layouts/_parts/_breadcrumbs', ['title' => $this->title])?>

<section class="product__section section--padding">
    <div class="container">
        <div class="section__heading mb-40">
            <h2 class="section__heading--maintitle" style="font-weight: 300"><?=Html::encode($this->title)?></h2>
        </div>

        <style>

            .filter-result{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-gap: 3rem;
            }
            .lk-select {
                height: 40px;
                margin-bottom: 25px;
                border-radius: 8px;
                font-size: 13px;
            }
            .products-list {
                padding: 2rem 2rem 4rem;
                margin: 0 -2rem;
            }

            .filter-result .filter-result-section{
                padding: 3rem 2rem;
            }

            .filter-result .filter-result-section h2{
                margin-bottom: 1.5rem;
            }

            .filter-result .filter-result-section h2,
            .filter-result .filter-result-section h2 a{
                font-weight: 300;
                color: #b69f83;
            }

            .filter-result:has(.filter-result-section){
                display: flex;
                flex-direction: column;
                margin: 0 -2rem;
            }

            .filter-result .filter-result-section .swiper-pagination-bullet.swiper-pagination-bullet-active,
            .filter-result .filter-result-section .swiper-pagination-bullet,
            .filter-result .filter-result-section .swiper-button-next:after, 
            .filter-result .filter-result-section .swiper-button-prev:after,
            .filter-result .filter-result-section .swiper-button-next, 
            .filter-result .filter-result-section .swiper-rtl .swiper-button-next,
            .filter-result .filter-result-section .swiper-button-prev, 
            .filter-result .filter-result-section .swiper-rtl .swiper-button-prev{
                color:  #bea98e;
                font-size: 15px;
            }

            .filter-result .filter-result-section .swiper-button-prev,
            .filter-result .filter-result-section .swiper-button-next{
                background: #fff;
                border: 1px solid #bea98e;
                font-size: 16px;
                height: 4rem;
                width: 4rem;
            }

            .filter-result .filter-result-section .swiper-button-prev{
                left: 3rem;
            }
            .filter-result .filter-result-section .swiper-button-next{
                right: 3rem;

            }

            .filter-result .swiper-pagination-bullet{
                border-color: #b69f83;
            }
            .filter-result .swiper-pagination-bullet.swiper-pagination-bullet-active{
                border-color: #b69f83;
                background-color: #b69f83;
            }


            .filter-result .items-grid .products-list-item.swiper-slide{
                height: auto;
            }

            .products-list.filter-result:has(.items-grid){
                display: block;
            }

            .filter-result .items-grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-gap: 3rem;
            }



        </style>

        <?php

        $form = ActiveForm::begin([
            'method'             => 'get',
            'action'             => ['shop/index'],
            'options'            => ['id' => 'catalog-filters'],
            'enableClientScript' => false,
        ]);


        

        ?>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group field-cataloglist-seasons">

                    <select id="cataloglist-seasons" class="form-control lk-select seasons-select"
                            name="CatalogList[seasons]">
                        <option value="">Сезон</option>
                        <option value="весна-лето">весна-лето</option>
                        <option value="всесезонный">всесезонный</option>
                        <option value="осень-зима">осень-зима</option>
                    </select>

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group field-cataloglist-genders">

                    <select id="cataloglist-genders" class="form-control lk-select genders-select"
                            name="CatalogList[genders]">
                        <option value="">Пол</option>
                        <option value="Девочка">Девочка</option>
                        <option value="Мальчик">Мальчик</option>
                    </select>

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group field-cataloglist-sizes">

                    <select id="cataloglist-sizes" class="form-control lk-select sizes-select"
                            name="CatalogList[sizes]">
                        <option value="">Размер</option>
                        <option value="1-3 М/56-62 cm">1-3 М/56-62 cm</option>
                        <option value="3-6 M/62-68 cm">3-6 M/62-68 cm</option>
                        <option value="6-9 M/68-74 cm">6-9 M/68-74 cm</option>
                        <option value="9-12 M/74-80 cm">9-12 M/74-80 cm</option>
                        <option value="12-18 М/80-86 cm">12-18 М/80-86 cm</option>
                        <option value="18-24 М/86-92 cm">18-24 М/86-92 cm</option>
                        <option value="24-36 М/92-98 cm">24-36 М/92-98 cm</option>
                        <option value="0-1m/50-56 сm">0-1m/50-56 сm</option>
                        <option value="85*95">85*95</option>
                        <option value="1-6 M">1-6 M</option>
                        <option value="1-12 M">1-12 M</option>
                        <option value="6-12 M">6-12 M</option>
                        <option value="12-18 M">12-18 M</option>
                        <option value="18-24 М">18-24 М</option>
                        <option value="0-3m/50-62 сm">0-3m/50-62 сm</option>
                    </select>

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group field-cataloglist-colors">

                    <select id="cataloglist-colors" class="form-control lk-select colors-select"
                            name="CatalogList[colors]">
                        <option value="">Цвет</option>
                        <option value="Белый">Белый</option>
                        <option value="Голубой">Голубой</option>
                        <option value="Бежевый">Бежевый</option>
                        <option value="Серый">Серый</option>
                        <option value="Розовый">Розовый</option>
                        <option value="Персиковый">Персиковый</option>
                        <option value="Ярко-розовый">Ярко-розовый</option>
                        <option value="Бирюзовый">Бирюзовый</option>
                        <option value="Желтый">Желтый</option>
                        <option value="Зеленый">Зеленый</option>
                        <option value="Синий">Синий</option>
                        <option value="Оранжевый">Оранжевый</option>
                        <option value="Коричневый">Коричневый</option>
                        <option value="Горчичный">Горчичный</option>
                        <option value="Мятный">Мятный</option>
                        <option value="Сиреневый">Сиреневый</option>
                        <option value="Красный">Красный</option>
                        <option value="Хаки">Хаки</option>
                        <option value="Фуксия">Фуксия</option>
                        <option value="Молочный">Молочный</option>
                        <option value="Сливовый">Сливовый</option>
                        <option value="Чёрный">Чёрный</option>
                        <option value="Бордовый">Бордовый</option>
                        <option value="Коралловый">Коралловый</option>
                        <option value="Кремовый">Кремовый</option>
                        <option value="Тёмно-серый">Тёмно-серый</option>
                        <option value="Ярко-синий">Ярко-синий</option>
                    </select>

                    <div class="help-block"></div>
                </div>
            </div>
        </div>


        <?php ActiveForm::end(); ?>

        <?php
            $isCategorySelected = isset($_GET['category_id']);
        ?>


        <div class="filter-result">
            <?php foreach ($productsData as $data): ?>
                <section class="filter-result-section">
                    <h2>
                        <a href="<?= Yii::$app->urlManager->createUrl(['shop/index', 'category_id' => $data['category']->id]) ?>" class="category-link">
                            <?= Html::encode($data['category']->title) ?>
                        </a>
                    </h2>
                    <div class="products-list filter-result <?= !$isCategorySelected ? 'products-slider swiper' : '' ?>">
                        <div class="<?= !$isCategorySelected ? 'swiper-wrapper' : 'items-grid' ?>">
                            <?php
                            foreach ($data['dataProvider']->getModels() as $product) {
                                echo $this->render('_card', [
                                    'model' => $product,
                                ]);
                            }
                            ?>
                        </div>
                        <?php if (!$isCategorySelected): ?>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.products-slider:not(.category-selected)').forEach(function (slider) {
                    new Swiper(slider, {
                        loop: true,
                        navigation: {
                            nextEl: slider.querySelector('.swiper-button-next'),
                            prevEl: slider.querySelector('.swiper-button-prev'),
                        },
                        pagination: {
                            el: slider.querySelector('.swiper-pagination'),
                            clickable: true,
                        },
                        spaceBetween: 32, 
                        breakpoints: {
                            576: {
                                slidesPerView: 1,
                            },
                            768: {
                                slidesPerView: 2,
                            },
                            993: {
                                slidesPerView: 3,
                            },
                            1200: {
                                slidesPerView: 4,
                            }
                        }
                    });
                });
            })



        </script>

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
    <div class="container">
        <img src="images/d_block.png" style="width: 100%;">
    </div>
</section>