<?php
namespace app\controllers;
use yii\web\Controller;

class LookbookController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}