<?php
namespace app\controllers;
use yii\web\Controller;

class 404Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('404');
    }
}
?>
