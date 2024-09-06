<style>
  .main__content_wrapper {
    padding-top: 10rem;
  }
</style>


<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Электронный подарочный сертификат';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

    <section class="about_section electro">

      <div class="container construct">
        <div class="row">
          <div class="col-8">
            <h1>Электронный подарочный сертификат</h1>
            <p style="padding: 4rem 0; font-size: 18px;">Покупайте себе и дарите близким. Подарочный сертификат мгновенно придёт вам или тому, кому подарили. Соврешайте покупки и оплачивайте их онлайн на нашем сайте.</p>
          </div>
        </div>

        <style>
          .pricer input[type='radio']{
            display: none;
          }

          .pricer input[type='radio']:checked + label{
            color: #fff !important;
            background: #bea98e;
            border-color: #bea98e;
          }

        </style>


        <div class="row">
          <div class="col-xl-7">
            <div class="construct">
              <div class="it">
                <div class="tit">Выберите номинал</div>
                <div class="pricer">

                  <input type="radio" name="price-variant" data-price="2000" id="price-variant-1" checked>
                  <label for="price-variant-1" class="price">2 000 р.</label>
                  <input type="radio" name="price-variant" data-price="4000" id="price-variant-2">
                  <label for="price-variant-2" class="price">4 000 р.</label>
                  <input type="radio" name="price-variant" data-price="5000" id="price-variant-3">
                  <label for="price-variant-3" class="price">5 000 р.</label>
                  <input type="radio" name="price-variant" data-price="10000" id="price-variant-4">
                  <label for="price-variant-4" class="price">10 000 р.</label>

                  <div class="summ_picker"> 
                    <input type="number" placeholder="Введите другую сумму"> 
                  </div>
                </div>
              </div>
              <div class="it">
                <div class="tit">Кому</div>

                <style>
                  .changer input[type='radio']{
                    display: none;
                  }
                  .changer label {
                    padding: 13px 18px;
                    border: 1px solid #A3A6AE;
                    border-radius: 50px;
                    display: flex;
                    font-family: 'Nunito';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 16px;
                    line-height: 90%;
                    color: #A3A6AE;
                    text-decoration: none;
                    transition: .5s;
                  }
                  .changer input[type='radio']:checked + label{
                    color: #fff !important;
                    background: #bea98e;
                    border-color: #bea98e;
                  }
                </style>

                <div class="changer"> 
                  <input type="radio" name="who-variant" data-who="self" id="who-variant-1" checked>
                  <label for="who-variant-1" class="price">Отправить сертификат на мою почту</label>
                  <input type="radio" name="who-variant" data-who="gift" id="who-variant-2">
                  <label for="who-variant-2" class="price">Отправить сертификат в подарок</label>
                </div>


                <div class="hr"></div>
                <div class="changed">
                  <div class="el" id="gift">
                    <div class="small_tit">Получатель</div>
                    <div class="lines poluch">
                      <div class="line"> <label for="names">Имя</label> <input type="text" placeholder="Введите Имя" id="names"> </div>
                      <div class="line"> <label for="phones">Телефон</label> <input type="tel" placeholder="+7 (999) 999-99-99" id="phones"> </div>
                      <div class="line"> <label for="mails">E-mail</label> <input type="email" placeholder="example@gmail.com" id="mails"> </div>
                      <div class="line wide gifts"> <label for="comments">Комментарий</label> <input type="text" placeholder="Добавьте приятных слов подарку" id="comments"> </div>
                    </div>
                    <div class="hr gifts"></div>
                    <div class="small_tit gifts">От кого</div>
                    <div class="lines from gifts">
                      <div class="line"> <label for="names_from">Имя</label> <input type="text" placeholder="Введите Имя" id="names_from"> </div>
                      <div class="line"> <label for="phones_from">Телефон</label> <input type="tel" placeholder="+7 (999) 999-99-99" id="phones_from"> </div>
                      <div class="line"> <label for="mails_from">E-mail</label> <input type="email" placeholder="example@gmail.com" id="mails_from"> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="it">
                <div class="tit">Дата отправки</div>

                <style>
                  .select_date input[type='radio']{
                    display: none;
                  }
                  .select_date label {
                    padding: 13px 18px;
                    border: 1px solid #A3A6AE;
                    border-radius: 50px;
                    display: flex;
                    font-style: normal;
                    font-weight: 700;
                    font-size: 16px;
                    line-height: 90%;
                    color: #A3A6AE;
                    text-decoration: none;
                    transition: .5s;
                  }
                  .select_date input[type='radio']:checked + label{
                    color: #fff !important;
                    background: #bea98e;
                    border-color: #bea98e;
                  }

                  .select_date .selected_date{
                    display: none;
                  }

                  .select_date input#send-variant-2[type='radio']:checked + label + .selected_date{
                    display: block;
                  }

                </style>

                <div class="select_date"> 

                  <input type="radio" name="send-variant" data-send="now" id="send-variant-1" checked>
                  <label for="send-variant-1" class="price">Отправить сразу после оплаты</label>
                  <input type="radio" name="send-variant" data-send="date" id="send-variant-2">
                  <label for="send-variant-2" class="price">Отправить в указанную дату</label>
                  <div class="selected_date">
                    <div class="sel" id="date">
                      <div class="title_small moment">Дата</div>
                      <div class="small_text">Сертификат и поздравление придут на почту получателя в указанную вами дату и время </div>
                      <div class="line_date moment"> 
                        <input type="date" id="data" placeholder="Выберте дату" class="hasDatepicker"> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="it">
                <div class="total_summ">
                  <div class="tot_tit">Оплата</div>
                  <div class="summ">
                    <div class="left">
                      <div class="titl">Итого:</div>
                      <div class="price">4 000 р.</div>
                    </div>
                    <div class="right"> <a href="#" class="payment">Оплатить</a> </div>
                    <div class="hided" style="display: none">
                      <form class="cart" action="https://leoking.ru/product/certificate/" method="post" enctype="multipart/form-data">
                        <div class="mwb_wgm_added_wrapper">
                          <p class="mwb_wgm_section"> <label>Введите стоимость подарочной карты:</label> <input type="text" class="mwb_wgm_price" id="mwb_wgm_price" name="mwb_wgm_price" value="4000"> </p>
                          <p class="mwb_wgm_section demo_theme_date_style"> <label>Выберите Дату:</label> <input type="text" name="mwb_wgm_send_date" id="mwb_wgm_send_date" class="mwb_wgm_send_date hasDatepicker" placeholder=""> <span class="mwb_wgm_info">(Получатель получит подарочную карту в выбранную дату)</span> </p>
                          <p class="mwb_wgm_section"> <label class="mwb_wgm_from_label">От:</label> <input type="text" name="mwb_wgm_from_name" id="mwb_wgm_from_name" class="mwb_wgm_from_name" placeholder="Введите имя отправителя" required="required"> </p>
                          <p class="mwb_wgm_section mwb_wgm_msg_field"> <label>Подарочное сообщение:</label> <textarea name="mwb_wgm_message" id="mwb_wgm_message" class="mwb_wgm_message"></textarea> Персонажи: (<span id="mwb_box_char">0</span>/999) </p>
                          <p> <label class="mwb_gm_method">Способ доставки:</label> </p>
                          <div class="mwb_wgm_delivery_method">
                            <input type="radio" name="mwb_wgm_send_giftcard" value="Mail to recipient" class="mwb_wgm_send_giftcard" checked="checked" id="to_mail"><span class="mwb_wgm_method">Email To Recipient</span> 
                            <div class="mwb_wgm_delivery_via_email"> <input type="text" name="mwb_wgm_to_email" id="mwb_wgm_to_email" class="mwb_wgm_to_email" placeholder="Введите адрес электронной почты получателя (обязательно)."> <input type="text" name="mwb_wgm_to_name_optional" id="mwb_wgm_to_name_optional" class="mwb_wgm_to_email" placeholder="Введите имя получателя"><span class="mwb_wgm_msg_info">We will send it to recipient email address.</span></div>
                          </div>
                          <p></p>
                          <div class="mwb_wgm_selected_template" style="display: inline-block; text-decoration: none; padding-right:20px;"><img class="mwb_wgm_featured_img mwb_wgm_pre_selected_temp" id="5311" style="width: 70px; height: 70px;" src="https://leoking.ru/wp-content/plugins/woocommerce-ultimate-gift-card//assets/images/placeholder.png"></div>
                          <input name="add-to-cart" value="5317" type="hidden" class="mwb_wgm_hidden_pro_id"> <input name="mwb_wgm_selected_temp" id="mwb_wgm_selected_temp" value="5311" type="hidden"> 
                          <p></p>
                        </div>
                        <div class="quantity">
                          <label class="screen-reader-text" for="quantity_6615930f33f6b">Количество товара Электронный подарочный сертификат</label> 
                          <div class="minus">-</div>
                          <input type="number" id="quantity_6615930f33f6b" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off"> 
                          <div class="plus">+</div>
                        </div>
                        <button type="submit" name="add-to-cart" value="5317" class="single_add_to_cart_button button alt">В корзину</button> 
                      </form>
                    </div>
                  </div>
                  <div class="policy"> Нажимая кнопку "Оплатить", я принимаю <a href="#">условия политики конфиденциальности</a> и <a href="#">правила пользования электронным подарочным сертификатом</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="right_block">
              <div class="card">
                <img width="401" height="268" src="https://leoking.ru/wp-content/uploads/2022/12/cert.png" class="attachment-full size-full wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://leoking.ru/wp-content/uploads/2022/12/cert.png 401w, https://leoking.ru/wp-content/uploads/2022/12/cert-300x200.png 300w, https://leoking.ru/wp-content/uploads/2022/12/cert-224x150.png 224w" sizes="(max-width: 401px) 100vw, 401px"> 
                <div class="price_meta">4 000 р.</div>
              </div>
              <div class="about_card">
                <div class="tit">Сведения о сертификате</div>
                <div class="list">
                  <a href="index.php?r=sertificate/kak-rabotaet-sertifikat">
                    <span>Как работает сертификат</span> 
                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 9L5 5L1 1" stroke="#A2A6AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </a>
                  <a href="index.php?r=sertificate/pravila-polzovaniya-elektronnym-sertifikatom">
                    <span>Правила пользования</span> 
                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 9L5 5L1 1" stroke="#A2A6AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </a>
                  <a href="index.php?r=sertificate/proverit-srok-dejstviya-i-balans-sertifikata">
                    <span>Проверить сертификат</span> 
                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 9L5 5L1 1" stroke="#A2A6AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </a>
                </div>
              </div>
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
