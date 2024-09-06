<style>
    .main__content_wrapper{
        padding-top: 10rem;
    }
</style>

<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Распродажа';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

    <section class="about_section">
      <div class="container">
        <div class="row">
            <div class="col-xl-12">
              <div class="top_title">Распродажа</div>
              <div class="products-list">              
                <?php
                    foreach ($products as $product) {
                        echo $this->render('@app/views/shop/_card', [
                            'model' => $product,
                        ]);
                    }
                ?>
            </div>
          </div>
        </div>
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

