<?php
namespace app\controllers;
use yii\web\Controller;

class BlogDetailsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('blog-details');
    }
}
?>
