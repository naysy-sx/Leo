<?php
namespace app\controllers;

use app\models\CatalogList;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class SaleController extends Controller
{
    public function actionIndex()
    {
        $model = new CatalogList();
        $model->load(Yii::$app->request->get());
        
        // Создаем запрос с условием фильтрации по полю sale
        $query = CatalogList::find()->where(['sales' => 1]);

        // Используем этот же запрос для получения продуктов
        $products = $query->asArray()->limit(6)->all();
        
        // Используем этот же запрос для ActiveDataProvider
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