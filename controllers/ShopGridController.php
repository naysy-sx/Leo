<?php
namespace app\controllers;
use yii\web\Controller;

class ShopGridController extends Controller
{
    public function actionIndex()
    {
        return $this->render('shop-grid');
    }
}
?>
