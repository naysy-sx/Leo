<?php
namespace app\controllers;

use app\models\CatalogList;
use app\models\Categories;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;




class SiteController extends Controller
{
    public function actionIndex($category_id = null)
    {
        $model = new CatalogList();
        $model->load(Yii::$app->request->get());
        $query = CatalogList::find();
        $products = CatalogList::find()->asArray()->limit(6)->all();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 12,
            ],
        ]);
        return $this->render('index', [
            'products'     => $products,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
    }
}