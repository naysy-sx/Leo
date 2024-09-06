<?php
namespace app\controllers;
use yii\web\Controller;

class ShopGridListController extends Controller
{
    public function actionIndex()
    {
        return $this->render('shop-grid-list');
    }
}
?>
