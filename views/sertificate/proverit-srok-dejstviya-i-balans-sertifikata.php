<style>
	.main__content_wrapper {
	  padding-top: 10rem;
	}
</style>


<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Проверить срок действия и баланс сертификата';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>

<style>

</style>

<section class="about_section">
  <div class="container check_coupon">
    <div class="row">
      <div class="col-8">
        <h1>Проверить срок действия и баланс сертификата</h1>
      </div>
    </div>

		<div class="row">
		  <div class="col-xl-4">
		    <div class="card">
		      <img width="401" height="268" src="https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/12/cert.png.webp" class="attachment-full size-full wp-post-image" alt="" decoding="async" srcset="https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/12/cert.png.webp 401w, https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/12/cert-300x200.png.webp 300w, https://leoking.ru/wp-content/webp-express/webp-images/uploads/2022/12/cert-224x150.png.webp 224w" sizes="(max-width: 401px) 100vw, 401px"> 
		      <div class="price_meta">Узнайте баланс</div>
		    </div>
		  </div>
		  <div class="col-xl-4">
		    <div class="block check_date">
		      <div class="tit">Проверить срок действия</div>
		      <div class="line"> <label class="number" for="dater">Номер сертификата</label> <input type="text" id="dater" placeholder="Введите код сертификата"> <a href="#" class="check">Проверить</a> </div>
		    </div>
		  </div>
		  <div class="col-xl-4">
		    <div class="block check_balance">
		      <div class="tit">Проверить баланс</div>
		      <div class="line"> <label class="number" for="balance">Номер сертификата</label> <input type="text" id="balance" placeholder="Введите код сертификата"> <a href="#" class="check">Проверить</a> </div>
		    </div>
		  </div>
		  <div class="col-xl-12">
    		<a 
					href="index.php?r=sertificate" 
					class="back_oform">
					<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5 1L1 5L5 9" stroke="#676461" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> 
					</svg> Назад к оформлению
				</a>
    		
		  </div>
		</div>
   </div>

  </section>
