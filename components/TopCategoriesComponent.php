<?php
namespace app\components;

use yii\base\Component;
use app\models\CatalogList;

class TopCategoriesComponent extends Component
{
    public $topCategories;

    public function init()
    {
        parent::init();
        $this->topCategories = CatalogList::getTopCategories();
    }
}