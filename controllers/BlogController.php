<?php
namespace app\controllers;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionIndex()
    {
        return $this->render('blog');
    }
}
?>
