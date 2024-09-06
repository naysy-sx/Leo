<?php
namespace app\controllers;
use yii\web\Controller;

class ProductGalleryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('product-gallery');
    }
}
?>
