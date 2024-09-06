<?php
namespace app\controllers;

use app\models\CatalogList;
use app\models\Categories;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ShopController extends Controller
{

 
    public function actionFilterByCategory($category_id)
    {
        echo $category_id;
    }

    public function actionIndex($category_id = null, $sales = 0)
    {
        $model = new CatalogList();
        $model->load(Yii::$app->request->get());
        
        // Получаем все категории
        $categories = Categories::find()->all();
    
        // Если `category_id` передан, фильтруем продукты по этой категории
        if ($category_id !== null) {
            $categories = Categories::find()->where(['id' => $category_id])->all();
        }
        
        $productsData = [];
        
        foreach ($categories as $category) {
            $query = CatalogList::find()->where(['category_id' => $category->id]);
            
            if ($sales == 1) {
                $query->andWhere(['sales' => 1]);
            }
            
            if (!empty($model->season)) {
                $query->andWhere(['like', 'attrVals3', $model->season]);
            }
            
            if (!empty($model->gender)) {
                $query->andWhere(['like', 'attrVals4', $model->gender]);
            }
            
            if (!empty($model->size)) {
                $query->andWhere(['like', 'attrVals2', $model->size]);
            }
            
            if (!empty($model->color)) {
                $query->andWhere(['like', 'attrVals1', $model->color]);
            }
            
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);
            
            $productsData[$category->id] = [
                'category' => $category,
                'dataProvider' => $dataProvider,
            ];
        }
    
        return $this->render('index', [
            'productsData' => $productsData,
            'model' => $model,
        ]);
    }
    
    

    public function actionProductsSearch()
    {
        $this->layout = false;

        $result = '';

        $seasons_name = htmlspecialchars($_GET['seasons_name']);
        $genders_name = htmlspecialchars($_GET['genders_name']);
        $sizes_name = htmlspecialchars($_GET['sizes_name']);
        $colors_name = htmlspecialchars($_GET['colors_name']);

        $query = CatalogList::find()
            ->andFilterWhere(['like', 'attrVals4', $seasons_name])
            ->andFilterWhere(['like', 'attrVals3', $genders_name])
            ->andFilterWhere(['like', 'attrVals2', $sizes_name])
            ->andFilterWhere(['like', 'attrVals1', $colors_name]);

        if (isset($_GET['sales']) && $_GET['sales'] == 1) {
            $query->andWhere(['sales' => 1]);
        }

        $products = $query->asArray()->all();

        foreach ($products as $product) {
            $result .= $this->render('_card', ['model' => $product]);
        }

        return $result;
    }
}
