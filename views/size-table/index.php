<style>
  .main__content_wrapper{
    padding-top: 10rem;
  }
  .bread_in_p{
    color: #fff;
    height: 300px;
    margin-bottom: 6rem;
    background-image: url(https://leoking.ru/wp-content/uploads/2022/06/tabl.png);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .table-wrapper{
    overflow-x: auto;
  }
</style>


<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Таблица размеров';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php echo $this->render('/layouts/_parts/_breadcrumbs.php', ['title' => $this->title]); ?>
<section class="bread_in_p">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <h1><?= Html::encode($this->title) ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="in_page_cont">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <h2>Размер одежды для малыша</h3>
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Возраст ребенка</th>
                        <th>Рост ребенка, см</th>
                        <th>Вес, кг</th>
                        <th>Окружность груди, см</th>
                        <th>Размер одежды</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Недоношенный</td>
                        <td>44-50 см</td>
                        <td>до 3 кг</td>
                        <td>32 см</td>
                        <td>44, 50</td>
                    </tr>
                    <tr>
                        <td>0-1 мес.</td>
                        <td>50-56 см</td>
                        <td>3-3.5 кг</td>
                        <td>36 см</td>
                        <td>56</td>
                    </tr>
                    <tr>
                        <td>1-3 мес.</td>
                        <td>56-62 см</td>
                        <td>5-5.5 кг</td>
                        <td>40 см</td>
                        <td>62</td>
                    </tr>
                    <tr>
                        <td>3-6 мес.</td>
                        <td>62-68 см</td>
                        <td>7-8 кг</td>
                        <td>44 см</td>
                        <td>68</td>
                    </tr>
                    <tr>
                        <td>6-9 мес.</td>
                        <td>68-74 см</td>
                        <td>8-9 кг</td>
                        <td>48 см</td>
                        <td>74</td>
                    </tr>
                    <tr>
                        <td>9-12 мес</td>
                        <td>74-80 см</td>
                        <td>9-11 кг</td>
                        <td>52 см</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>1-1,5 года</td>
                        <td>80-86 см</td>
                        <td>10.5-12.5 кг</td>
                        <td>56 см</td>
                        <td>86</td>
                    </tr>
                    <tr>
                        <td>1,5-2 года</td>
                        <td>86-92 см</td>
                        <td>12-14,5 кг</td>
                        <td>60 см</td>
                        <td>92</td>
                    </tr>
                    <tr>
                        <td>2-3 года</td>
                        <td>92-98 см</td>
                        <td>14-16.5 кг</td>
                        <td>64 см</td>
                        <td>98</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <h2>Размер головного убора</h2>
        <div class="table-wrapper">
          <table class="table" style="max-width: 500px;">
              <thead>
                  <tr>
                      <th>Окружность головы, см</th>
                      <th>Возраст ребенка</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>32 см</td>
                      <td>недоношенный</td>
                  </tr>
                  <tr>
                      <td>34 см</td>
                      <td>недоношенный</td>
                  </tr>
                  <tr>
                      <td>36 см</td>
                      <td>0-1 мес.</td>
                  </tr>
                  <tr>
                      <td>38 см</td>
                      <td>1-3 мес.</td>
                  </tr>
                  <tr>
                      <td>40 см</td>
                      <td>3-5 мес.</td>
                  </tr>
                  <tr>
                      <td>42 см</td>
                      <td>3-6 мес.</td>
                  </tr>
                  <tr>
                      <td>44 см</td>
                      <td>6-9 мес.</td>
                  </tr>
                  <tr>
                      <td>46 см</td>
                      <td>9 мес.-1 год</td>
                  </tr>
                  <tr>
                      <td>48 см</td>
                      <td>1,5 год-2,5 год</td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>