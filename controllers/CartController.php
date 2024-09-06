<?php
namespace app\controllers;

use app\models\CatalogList;
use app\models\SessionLeo;
use yii\web\Controller;

class CartController extends Controller
{
    /**
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('cart');
    }

    /**
     * @return bool
     */
    public function actionAddToCart()
    {
        $this->layout = false;
        $id           = htmlspecialchars($_GET['id']);
        $product      = CatalogList::find()->where(['id' => $id])->asArray()->one();

        if ($product) {
            $session = new SessionLeo;
            $session->add($id, $product);

            return $this->render("../shop/_cart");
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function actionSendOrder()
    {
        return $this->render('send-order');
    }
}