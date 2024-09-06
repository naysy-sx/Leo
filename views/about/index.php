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
              <div class="top_title">Какие чудеса ждут вас на нашей фабрике?</div>
              <div class="text"></div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="text_it">
              <p>Только представьте: в просторных цехах, оснащенных сверхумными машинами, создается детская одежда нового уровня качества и стиля. Каждая модель уникальна не только своим дизайном, но и натуральностью материалов: органического хлопка, мягкой шерсти и тонкого шелка. Наши квалифицированные эксперты тщательно подходят к отбору сырья.</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="img_block"><img src="https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/05/img_it.png.webp"></div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="img_block center"><img src="https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/05/img_it2.png.webp"></div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="text_it">
              <p>Создавая летнюю, нательную и домашнюю одежду, мы отправляемся на просторы полей Турции – одного из лидеров по производству и поставкам хлопка в мире. Пушистые шарики белоснежного хлопчатника – одного из древнейших культурных растений планеты, собираются специально обученным персоналом вручную. Для изготовления пряжи мы используем только внутреннюю, самую нежную и деликатную часть соцветия.</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="text_it">
              <p>Шелковые волокна доставляют на нашу фабрику прямиком с тутовых плантаций Китая. Именно оттуда берет свое начало история возникновения этого материала в 4 тысячелетии до нашей эры. Высококачественный шелк славится своей гигиеничностью, воздухопроницаемостью и терморегуляцией, что так важно для самых маленьких.</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="img_block center"><img src="https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/05/img_it3.png.webp"></div>
          </div>
          <div class="col-xl-12">
            <div class="small_texts">
              <p>Потребности маленьких клиентов растут, а вместе с ними развиваемся мы, взяв в свои заботливые руки весь кропотливый процесс отбора сырья, разработки фасонов, их исполнения и передачи на прилавки магазинов. Гарант лучшего для покупателей – основная задача компании. </p>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="col-xl-12">
            <div class="motto">
              <div class="top_text">Наш девиз:</div>
              <div class="texts">Стиль и комфорт без вреда здоровью для каждого малыша</div>
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

    <!--<section class="mailing">
      <div class="container">
        <div class="row">
          <div class="offset-xl-2 col-xl-8">
            <div class="title_block">Подпишитесь на рассылку!</div>
            <div class="text">
              <p>Сообщаем о бомбических скидках и акциях</p>
            </div>
            <div class="wpcf7 js" id="wpcf7-f6-o1" lang="ru-RU" dir="ltr">
              <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
              </div>
              <form action="/o-kompanii/#wpcf7-f6-o1" method="post" class="wpcf7-form init" aria-label="Контактная форма" novalidate="novalidate" data-status="init">
                <div style="display: none;"> <input type="hidden" name="_wpcf7" value="6"> <input type="hidden" name="_wpcf7_version" value="5.9.3"> <input type="hidden" name="_wpcf7_locale" value="ru_RU"> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-o1"> <input type="hidden" name="_wpcf7_container_post" value="0"> <input type="hidden" name="_wpcf7_posted_data_hash" value=""> <input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA4o_cMozeuentevDidJ8m_sN4r0Fk9mQ3alCpcZoq-D_jsEyQ6TQzAYH4-w2fmN7VNQIFQDsPMAKf9yYeOSAnC4n2zqKMqM7FKCDVC0uFGbFSLTeEZBA7nuhTikunuMtOdiu47EJNtWQbcTt9aPEWUXsSgM9rvEw1IwhhSSdoh74U67-1wIHo1QsTFDShGpEX8wYTTnrX6nwnT2Syt8R-ewPxem5es55wsSv7eoHS-X-ZmMQEjbpTeWCmymMOC1gkoKE7t4ebGajsMoZVM2niWC-lk0cqi0mg_FyZIb-nhiG2DuucMlVXDv4-zISR9NRJzQiuEky7ffF1XQBuYW68yQO5oYSFQlLidbrJkDY62jYOCrKhSSPcCY9Bs50_61kCJggHavKnYj26If2Pg7Zaf4eISHWT2vH4fCd3iNu0A_8Xk8eKMaK6TsRm06Tu3Ff4drEwaRaaijdzTrLdJqGwRYWwvY0mUu8z_uUnDqV-lKeQg4TFsR86ZyXQW2Bg_w7lqMB3BcJTEqC0-zYqBycma-LYfDJYDKuscKOMbEn2xCDcPLJ2SW3UYfiZiB5sy13nPtS3DuJirtHQpKFqzXAIC2HSL-uOtwChJESm3MAukzDGhlBxyPPYSk69S2X5h_-l39FqixG0rM8C3bOPyTGviTXEDEBg"> </div>
                <div class="form">
                  <div class="line">
                    <p><span class="wpcf7-form-control-wrap" data-name="email-318"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Ваш email" value="" type="email" name="email-318"></span> </p>
                  </div>
                  <div class="line_submit">
                    <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Подписаться"><span class="wpcf7-spinner"></span> </p>
                  </div>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>-->
