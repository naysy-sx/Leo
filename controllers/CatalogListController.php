<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class CatalogListController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CatalogList::find(),
            // настройте другие параметры, если необходимо
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
?>
