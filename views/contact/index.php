<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="contacts_page_top">


  <?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-6">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="items">
          <div class="item">
            <div class="icon"><img src="https://leoking.ru/wp-content/uploads/2022/05/icon_1.png"></div>
            <div class="zag">Офис</div>
            <div class="info">
              <p>г. Москва, Очаковское шоссе, д. 28, стр.2, 1 этаж</p>
            </div>
          </div>
          <div class="item">
            <div class="icon"><img src="https://leoking.ru/wp-content/uploads/2022/05/icon_2.png"></div>
            <div class="zag">СКЛАД</div>
            <div class="info">
              <p>г. Москва, Очаковское шоссе, д. 28, стр.2, 1 этаж</p>
            </div>
          </div>
          <div class="item">
            <div class="icon"><img src="https://leoking.ru/wp-content/uploads/2022/05/works_time.png"></div>
            <div class="zag">ВРЕМЯ РАБОТЫ</div>
            <div class="info">
              <p>Пн-Пт: 09.00 – 18.00</p>
            </div>
          </div>
          <div class="item">
            <div class="icon"><img src="https://leoking.ru/wp-content/uploads/2022/05/icon_4.png"></div>
            <div class="zag">ТЕЛЕФОН</div>
            <div class="info">
              <p><a href="tel:+79858627803">+7 (985) 862-78-03</a></p>
            </div>
          </div>
          <div class="item">
            <div class="icon"><img src="https://leoking.ru/wp-content/uploads/2022/05/icon_3.png"></div>
            <div class="zag">EMAIL</div>
            <div class="info">
              <p><a href="mailto:info@leoking.ru">info@leoking.ru</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-6">
        <div class="map"> 
          <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;source=constructor-api&amp;um=constructor%3A9acb409cd77e171ee8b2361557e31e6a95e474350e32b51cf15939669ae5d06d" frameborder="0" allowfullscreen="true" width="100%" height="100%" style="display: block;"></iframe>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="rekviz">
          <div class="it">
            <div class="zag">РЕКВИЗИТЫ</div>
            <div class="lines">
              <div class="line">ИП Коган Ольга Леонидовна</div>
              <div class="line">Место фактического нахождения:</div>
              <div class="line">119602, г. Москва, ул. Никулинская, д. 27, кв. 112</div>
              <div class="line">ИНН: 231705470210</div>
            </div>
          </div>
          <div class="it">
            <div class="zag">БАНКОВСКИЕ РЕКВИЗИТЫ</div>
            <div class="lines">
              <div class="line">Счет №: 40802810238000088377 в ПАО Сбербанк</div>
              <div class="line">Кор. Счет №: 30101810400000000225</div>
              <div class="line">БИК:044525225</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="form_block">
          <div class="tops_zag">Обратная связь</div>
          <div class="text">Поделитесь вашем мнение или задайте нам вопрос. Мы будем рады слышать вас!</div>
          <div class="wpcf7 js" id="wpcf7-f588-o1" lang="ru-RU" dir="ltr">
            <div class="screen-reader-response">
              <p role="status" aria-live="polite" aria-atomic="true"></p>
              <ul></ul>
            </div>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                <div class="alert alert-success">
                    <h3>Заявка отправлена!</h3>
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php if (Yii::$app->mailer->useFileTransport): ?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                        Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php endif; ?>
                </p>
            <?php else: ?>
            <form action="/kontakty/#wpcf7-f588-o1" method="post" class="wpcf7-form init" aria-label="Контактная форма" novalidate="novalidate" data-status="init">
              <div style="display: none;"> <input type="hidden" name="_wpcf7" value="588"> <input type="hidden" name="_wpcf7_version" value="5.9.3"> <input type="hidden" name="_wpcf7_locale" value="ru_RU"> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f588-o1"> <input type="hidden" name="_wpcf7_container_post" value="0"> <input type="hidden" name="_wpcf7_posted_data_hash" value=""> <input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA4a8qaW89-sf30B3SWZn4UMvlmjMdbr1HEWezXnHJ9eG7oUjKbfioVZ5Ct9nNBv3XxCrsey6X8yltAcTlD1WNnubxpskiiE5QnHnrS4DbGN3dF_kpUhEFURKrB4EEpHs4eyrEkk3jPykkOnpXgxP0dpou5RKPUevlnHDjGeKTrczFlEXEEDAH891gEwPDxNhZTM5CW6ZUebC7jeIcbEWUuKNvHVRtP90CS3la5z01Jrtd6YPlx-qRglC-78LeDN2eQ-9knGh_xJBX1dJ-QBXFD1oXN4e3BHbqY694WJqHaGtytM7a3XwlM6oIWl1UE745cS57qINAUpdR7e0Ji8AWR2ko1CyyfXFoTc1cj9_6i2ltN8QugTr_5lVdZLRPGFa5asSN-PsvEbjaIWJQ0Mp2qHspMCzVeVpkHq89bDgBpc9gnDqjWPDRlBY-kkOFaS4m70_7I1j_O2LyiJ3U1aTHwXiyF78GlKKzYA44XlxJELnLV-6NQeZGKsiRXni4xwlACRy0UHaMBaMbiy0fUWy-zigvjBZ5rYf3AgsZSP1svL9RaJfzO8Tv65myflsnaumguASMzNcA6hBbrOgmNNGTPZovc9Qb1xjoY3Y56rMIRpxVA1J8ENjlxmc1tqz3pC7K2Rfu87F55iWkm3C4mzbKYhRAWomg"> </div>
              <div class="lines">
                <div class="line half">
                  <p><span class="wpcf7-form-control-wrap" data-name="text-819"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя" value="" type="text" name="text-819"></span> </p>
                </div>
                <div class="line half">
                  <p><span class="wpcf7-form-control-wrap" data-name="last_name"><input size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Фамилия" value="" type="text" name="last_name"></span> </p>
                </div>
                <div class="line half">
                  <p><span class="wpcf7-form-control-wrap" data-name="tel-487"><input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Контактный номер" value="" type="tel" name="tel-487"></span> </p>
                </div>
                <div class="line half">
                  <p>
                    <span class="wpcf7-form-control-wrap" data-name="email-282">
                      <protonpass-control-9a9c data-protonpass-role="icon"></protonpass-control-9a9c>
                      <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email" aria-invalid="false" placeholder="Ваш email" value="" type="email" name="email-282" style="padding-right: 39.2px !important;" data-protonpass-base-css="{&quot;padding-right&quot;:&quot;&quot;}">
                    </span>
                  </p>
                </div>
                <div class="line">
                  <p><textarea placeholder="Сообщение"></textarea> </p>
                </div>
                <div class="submit">
                  <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Отправить"><span class="wpcf7-spinner"></span> </p>
                </div>
                <div class="check">
                  <p><span class="wpcf7-form-control-wrap" data-name="acceptance-341"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-341" value="1" checked="checked" aria-invalid="false"><span class="wpcf7-list-item-label">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных *</span></label></span></span></span> </p>
                </div>
              </div>
              <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>

            
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>

            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mailing">
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-8">
        <div class="title_block">Подпишитесь на рассылку!</div>
        <div class="text">
          <p>Сообщаем о бомбических скидках и акциях</p>
        </div>
        <div class="wpcf7 js" id="wpcf7-f6-o2" lang="ru-RU" dir="ltr">
          <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
          </div>


            <form 
                action="/kontakty/#wpcf7-f6-o2" 
                method="post" 
                class="wpcf7-form init" 
                aria-label="Контактная форма" 
                novalidate="novalidate" 
                data-status="init"
            >
                <div style="display: none;"> 
                    <input type="hidden" name="_wpcf7" value="6"> 
                    <input type="hidden" name="_wpcf7_version" value="5.9.3"> 
                    <input type="hidden" name="_wpcf7_locale" value="ru_RU"> 
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-o2"> 
                    <input type="hidden" name="_wpcf7_container_post" value="0"> 
                    <input type="hidden" name="_wpcf7_posted_data_hash" value=""> 
                    <input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA4a8qaW89-sf30B3SWZn4UMvlmjMdbr1HEWezXnHJ9eG7oUjKbfioVZ5Ct9nNBv3XxCrsey6X8yltAcTlD1WNnubxpskiiE5QnHnrS4DbGN3dF_kpUhEFURKrB4EEpHs4eyrEkk3jPykkOnpXgxP0dpou5RKPUevlnHDjGeKTrczFlEXEEDAH891gEwPDxNhZTM5CW6ZUebC7jeIcbEWUuKNvHVRtP90CS3la5z01Jrtd6YPlx-qRglC-78LeDN2eQ-9knGh_xJBX1dJ-QBXFD1oXN4e3BHbqY694WJqHaGtytM7a3XwlM6oIWl1UE745cS57qINAUpdR7e0Ji8AWR2ko1CyyfXFoTc1cj9_6i2ltN8QugTr_5lVdZLRPGFa5asSN-PsvEbjaIWJQ0Mp2qHspMCzVeVpkHq89bDgBpc9gnDqjWPDRlBY-kkOFaS4m70_7I1j_O2LyiJ3U1aTHwXiyF78GlKKzYA44XlxJELnLV-6NQeZGKsiRXni4xwlACRy0UHaMBaMbiy0fUWy-zigvjBZ5rYf3AgsZSP1svL9RaJfzO8Tv65myflsnaumguASMzNcA6hBbrOgmNNGTPZovc9Qb1xjoY3Y56rMIRpxVA1J8ENjlxmc1tqz3pC7K2Rfu87F55iWkm3C4mzbKYhRAWomg"> 
                </div>
                <div class="form">
                  <div class="line">
                    <p><span class="wpcf7-form-control-wrap" data-name="email-318">
                        <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Ваш email" value="" type="email" name="email-318"></span> 
                    </p>
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
</section>

<!--
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
-->
