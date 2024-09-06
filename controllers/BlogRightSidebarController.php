<?php
namespace app\controllers;
use yii\web\Controller;

class BlogRightSidebarController extends Controller
{
    public function actionIndex()
    {
        return $this->render('blog-right-sidebar');
    }
}
?>
