<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

    <section class="about_section">
      <div class="container">
        <div class="row">
            <div class="col-xl-12">
              <div class="texts_block">
                <div class="top_title">Lookbook</div>
              </div>
              <div class="text" style="display: flex;">

                <style>

                  #preloader{
                    display: none !important;
                  }

.catalog-grid{
                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                    grid-template-rows: 285px 285px 285px;
                    gap: 0;
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
                    padding: 1rem;
                    color: white;
                    height: 100%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center center;
                    font-size: 20px;   
                    font-weight: bold;               
                }

                .catalog-grid-link img{
                  width: 100%;
                  height: 100%;  
                  object-fit: cover;       
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

                <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
                <link
                  rel="stylesheet"
                  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
                />
                <ul class="catalog-grid">
                    <?php

                    $imagesPath = Yii::getAlias('@webroot') . '/images/lookbook/';
                    $imagesUrl = Yii::$app->request->baseUrl . '/images/lookbook/';


                    $images = glob($imagesPath . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);


                    if (count($images) < 30) {
                        die('Не хватает изображений для генерации.');
                    }


                    shuffle($images);

                    for ($i = 0; $i < 30; $i++) {

                        if ($i % 10 === 0) {
                            $class = 'big-horizontal';
                        } elseif (($i - 1) % 10 === 0) {
                            $class = 'big-vertical';
                        } else {
                            $class = '';
                        }

                        $image = array_shift($images);

                        $filename = basename($image);

                        if (strpos($filename, '_small') !== false) {
                            $smallImage = $filename;
                            $largeImage = str_replace('_small', '', $filename);
                        } else {
                            $smallImage = pathinfo($filename, PATHINFO_FILENAME) . '_small.' . pathinfo($filename, PATHINFO_EXTENSION);
                            $largeImage = $filename;
                        }

                        if (!file_exists($imagesPath . $smallImage)) {
                            $smallImage = $largeImage;
                        }

                        echo '<li class="catalog-grid-item ' . $class . '">';
                        echo '<a class="catalog-grid-link" href="' . $imagesUrl . $largeImage . '" data-fancybox>';
                        echo '<img src="' . $imagesUrl . $smallImage . '" alt="" loading="lazy">';
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        Fancybox.bind("[data-fancybox]", {
            // Ваши настройки Fancybox (если нужны)
        });
    });
</script>


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

