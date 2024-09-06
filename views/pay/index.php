<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Оплата картой';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>


    <section class="how_buy_top">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <h1><?= Html::encode($this->title) ?></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="how_buy" style="background-image:url(https://leoking.ru/wp-content/uploads/2022/05/how_1.png);">
      <div class="container">
        <div class="row">
          <div class="offset-xl-7 col-xl-5">
            <div class="mobile_img"> <img src="https://leoking.ru/wp-content/uploads/2022/05/how_1.png"> </div>
            <div class="wrap">
              <div class="zag">Оформление заказа</div>
              <div class="text">
                <p>После выбора товара нажмите кнопку В корзину — товар добавится в вашу корзину.</p>
                <p>Далее, если вы закончили выбирать товар, нажмите кнопку ваша корзина.</p>
                <p>На странице ваша корзина будут перечислены все выбранные вами товары.</p>
                <p>В поле Количество вы можете изменить количество товара для покупки. После изменения количества товара необходимо нажать кнопку Пересчитать для пересчета итоговой суммы заказа.</p>
                <p>В колонке Действия над каждым товаром можно произвести следующие действия: либо удалить товар из корзины, либо отложить товар на будущее.</p>
                <p>Также можно ввести код скидки в соответствующее поле.</p>
              </div>
              <div class="num">01</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="how_buy right" style="background-image:url(https://leoking.ru/wp-content/uploads/2022/05/how_2.png);">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="mobile_img"> <img src="https://leoking.ru/wp-content/uploads/2022/05/how_2.png"> </div>
            <div class="wrap">
              <div class="zag">Подтверждение заказа</div>
              <div class="text">
                <p>После ввода необходимой информации о доставке товара (ФИО получателя, адрес доставки, контактные данные, вариант доставки, способ оплаты и т.д) для оформления заказа вам нужно нажать кнопку Оформить заказ.</p>
                <p>Копия заказа будет выслана на ваш e-mail, указанный при оформлении заказа.</p>
                <p>Внимание! Неправильно указанный номер телефона, неточный или неполный адрес могут привести к дополнительной задержке! Пожалуйста, внимательно проверяйте ваши персональные данные при регистрации и оформлении заказа.</p>
                <p>Через некоторое время после оформления покупки, с вами свяжется наш менеджер по контактным данным, указанным при оформлении заказа. С менеджером можно будет согласовать точное время и сроки доставки, а также уточнить детали.</p>
              </div>
              <div class="num">02</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="how_buy" style="background-image:url(https://leoking.ru/wp-content/uploads/2022/05/how_3.png);">
      <div class="container">
        <div class="row">
          <div class="offset-xl-7 col-xl-5">
            <div class="mobile_img"> <img src="https://leoking.ru/wp-content/uploads/2022/05/how_3.png"> </div>
            <div class="wrap">
              <div class="zag">Оплата и цены</div>
              <div class="text">
                <p>Внимание! Для каждого отдельного заказа возможен только один способ оплаты на ваш выбор. Оплата заказа по частям различными способами невозможна. Если Вам нужно оплатить части заказа разными способами, пожалуйста, оформите несколько заказов.</p>
                <p>Возможные способы оплаты при получении товара на территории России:</p>
                <p>– Оплата на расчетный счет продавца</p>
                <p>Оплата производится безналичными платежом на расчетный счет производителя по заранее выставленному счету в рублях.</p>
                <p>– Оплата на сайте</p>
                <p>Оплата производится прямо на сайте после оформления заказа или через специальную ссылку для оплаты, которую присылает менеджер.</p>
                <p>– Оплата наложенным платежом</p>
                <p>Форма оплаты при использовании транспортных компаний для доставки</p>
              </div>
              <div class="num">03</div>
            </div>
          </div>
        </div>
      </div>
    </section>
