<style>
	.main__content_wrapper {
	  padding-top: 10rem;
	}
</style>

<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Как работает сертификат';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

<section class="about_section electro">
  <div class="container construct">
    <div class="row">
      <div class="col-8">
        <h1>Как работает сертификат</h1>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>


    <div class="row">

    	<div class="col-xl-7">

				<div class="texter_block">
				  <p>Для использования сертификата в интернет-магазине Leoking нужно указать его номер при оформлении заказа (на этапе выбора способа оплаты) в поле "Оплата электронным сертификатом". </p>
				  <ul>
				    <li>Вы можете приобрести Электронный подарочный сертификат установленного номинала: 2000 р., 4 000 р., 5 000 р., 10 000 руб. или указать любую сумму от 2 000 р. до 50 000 р. </li>
				    <li>Электронным сертификатом можно оплатить покупку в интернет-магазине Leoking.</li>
				    <li>При покупке на сумму, превышающую номинал электронного сертификата, доплату можно внести любым доступным способом. </li>
				    <li>По данному сертификату можно совершить только одну покупку до полного погашения сертификата. Остаток средств после совершения покупки аннулируется. </li>
				    <li>Срок действия электронного сертификата — 12 месяцев с момента покупки.</li>
				  </ul>
				  <p> Сразу после оплаты вы получите письмо с номером сертификата на свою электронную почту и сможете тут же переслать его получателю подарка. Так что сделать приятный сюрприз близким можно в любую минуту всего парой кликов. Не сообщайте номер сертификата из письма никому, кроме получателя, чтобы им не воспользовались третьи лица.</p>
				</div>
				<a 
					href="index.php?r=sertificate" 
					class="back_oform">
					<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5 1L1 5L5 9" stroke="#676461" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> 
					</svg> Назад к оформлению
				</a>
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
