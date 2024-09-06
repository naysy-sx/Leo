<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\CatalogList;
use yii\web\NotFoundHttpException;

class ProductController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $model = CatalogList::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException('Запрашиваемая страница не найдена');
        }
        return $this->render('view', ['model' => $model]);
    }
}
?>