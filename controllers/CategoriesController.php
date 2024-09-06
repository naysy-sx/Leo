<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\CatalogList;
use app\models\Categories;

class CategoriesController extends Controller
{
    public function actionIndex()
    {
        // Получаем все категории из столбца categories таблицы CatalogList
        $categories = CatalogList::find()
            ->select('categories')
            ->column();

        // Удаляем пустые строки и дубликаты
        $categories = array_filter(array_unique($categories));

        // Вставляем уникальные категории в таблицу categories
        foreach ($categories as $category) {
            // Проверяем, существует ли уже такая категория
            if (!Categories::find()->where(['title' => $category])->exists()) {
                $newCategory = new Categories();
                $newCategory->title = $category;
                $newCategory->save();
            }
        }

        // Обновляем столбец category_id в таблице CatalogList
        $catalogItems = CatalogList::find()->all();
        foreach ($catalogItems as $item) {
            if (!empty($item->categories)) {
                // Находим категорию в таблице categories
                $category = Categories::find()->where(['title' => $item->categories])->one();
                if ($category !== null) {
                    // Обновляем столбец category_id
                    $item->category_id = $category->id;
                    $item->save();
                }
            }
        }

        return $this->render('index');
    }
}