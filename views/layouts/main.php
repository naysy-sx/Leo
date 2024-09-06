<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&family=Karma:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .product__card--action__btn--svg {
            margin-top: -5px;
        }
    </style>
</head>

<body>
    <?php $this->beginBody() ?>    
      <?php echo $this->render('_parts/_preloader.php') ?>
      <?php echo $this->render('_parts/_header.php') ?>
      <main class="main__content_wrapper">
        <?= $content ?>
      </main>
    </div>

    <?php echo $this->render('_parts/_footer.php') ?>
    <?php echo $this->render('_parts/_modals.php') ?>
    <?php echo $this->render('_parts/_popup.php') ?>

    <button id="scroll__top">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                  d="M112 244l144-144 144 144M256 120v292"/>
        </svg>
    </button>
    <div class="right-icons">
        <div class="whatsapp_icon">
            <img src="images/whatsapp_icon.svg" style="width: 50px;">
        </div>
    </div>


    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
