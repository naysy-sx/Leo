<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Query;
/**
 * This is the model class for table "CatalogList".
 *
 * @property int|null $id
 * @property string|null $type
 * @property string|null $articul
 * @property string|null $title
 * @property int|null $sales
 * @property string|null $publishStatus
 * @property int|null $recommendStatus
 * @property string|null $visibilityInCatalog
 * @property string|null $shortDescription
 * @property string|null $longDescription
 * @property string|null $startActionDiscount
 * @property string|null $startFinishDiscount
 * @property string|null $taxStatus
 * @property string|null $taxClass
 * @property string|null $stockAvailability
 * @property string|null $stock
 * @property string|null $valueMinimalStock
 * @property string|null $preorderEnable
 * @property string|null $soldIndividually
 * @property string|null $weight
 * @property string|null $widthX
 * @property string|null $widthY
 * @property string|null $height
 * @property string|null $allowFeedback
 * @property string|null $notePurchase
 * @property string|null $promotionalPrice
 * @property string|null $baseCost
 * @property string|null $categories
 * @property string|null $labels
 * @property string|null $classDeliviery
 * @property string|null $images
 * @property string|null $limitDownloads
 * @property string|null $daysLoadingTime
 * @property string|null $parent
 * @property string|null $groupItems
 * @property string|null $upsales
 * @property string|null $crossales
 * @property string|null $externalUrl
 * @property string|null $textButton
 * @property string|null $position
 * @property string|null $attrTitle1
 * @property string|null $attrVals1
 * @property string|null $attrVisibility1
 * @property string|null $attrGlobal1
 * @property string|null $attrDefault1
 * @property string|null $attrTitle2
 * @property string|null $attrVals2
 * @property string|null $attrVisibility2
 * @property string|null $attrGlobal2
 * @property string|null $attrDefault2
 * @property string|null $attrTitle3
 * @property string|null $attrVals3
 * @property string|null $attrVisibility3
 * @property string|null $attrGlobal3
 * @property string|null $attrTitle4
 * @property string|null $attrVals4
 * @property string|null $attrVisibility4
 * @property string|null $attrGlobal4
 */
class CatalogList extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CatalogList';
    }

    public static function getTopCategories($limit = 10)
    {
        return (new Query())
            ->select(['categories', 'COUNT(*) as count'])
            ->from(self::tableName())
            ->where(['not', ['categories' => null]]) // Условие для исключения пустых категорий
            ->andWhere(['not', ['categories' => '']]) // Условие для исключения пустых строк
            ->groupBy('categories')
            ->orderBy(['count' => SORT_DESC])
            ->limit($limit)
            ->all();
    }

    public static function getColors()
    {
        $colors = self::find()->select('attrVals1')->column();
        $uniqueColors = self::getUniqueValues($colors);
        return $uniqueColors;
    }
    public static function getSizes()
    {
        $sizes = self::find()->select('attrVals2')->column();
        $uniqueSizes = self::getUniqueValues($sizes);
        return $uniqueSizes;
    }
    public static function getGenders()
    {
        $genders = self::find()->select('attrVals3')->column();
        $uniqueGenders = self::getUniqueValues($genders);
        return $uniqueGenders;
    }

    public static function getSeasons()
    {
        $seasons = self::find()->select('attrVals4')->column();
        $uniqueSeasons = self::getUniqueValues($seasons);
        return $uniqueSeasons;
    }

    public static function getProductsOnSale()
    {
        return self::find()
            ->where(['sales' => 1])
            ->limit($limit)
            ->all();
    }

    private static function getUniqueValues($values)
    {
        $uniqueValues = [];
        foreach ($values as $value) {
            $items = explode(',', $value);
            foreach ($items as $item) {
                $item = trim($item);
                if (!empty($item) && !in_array($item, $uniqueValues)) {
                    $uniqueValues[] = $item;
                }
            }
        }
        return $uniqueValues;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'recommendStatus'], 'integer'],
            [['type'], 'string', 'max' => 13],
            [['articul'], 'string', 'max' => 9],
            [['title'], 'string', 'max' => 64],
            [['sales'], 'integer', 'min' => 0, 'max' => 1],
            [['publishStatus', 'soldIndividually', 'daysLoadingTime'], 'string', 'max' => 3],
            [['visibilityInCatalog', 'taxClass', 'weight', 'notePurchase', 'attrTitle1', 'attrTitle2'], 'string', 'max' => 7],
            [['shortDescription', 'attrDefault1'], 'string', 'max' => 10],
            [['longDescription'], 'string', 'max' => 1089],
            [['startActionDiscount'], 'string', 'max' => 18],
            [['startFinishDiscount', 'stock', 'valueMinimalStock', 'preorderEnable', 'limitDownloads', 'textButton', 'attrVisibility1', 'attrGlobal1', 'attrVisibility2', 'attrGlobal2', 'attrVisibility3', 'attrGlobal3', 'attrVisibility4', 'attrGlobal4'], 'string', 'max' => 1],
            [['taxStatus'], 'string', 'max' => 499],
            [['stockAvailability'], 'string', 'max' => 67],
            [['widthX'], 'string', 'max' => 78],
            [['widthY', 'position'], 'string', 'max' => 2],
            [['height', 'baseCost', 'classDeliviery', 'crossales', 'attrTitle3', 'attrTitle4'], 'string', 'max' => 5],
            [['allowFeedback', 'upsales'], 'string', 'max' => 34],
            [['promotionalPrice'], 'string', 'max' => 85],
            [['categories'], 'string', 'max' => 28],
            [['labels'], 'string', 'max' => 69],
            [['images'], 'string', 'max' => 663],
            [['parent', 'attrVals3'], 'string', 'max' => 16],
            [['groupItems', 'externalUrl', 'attrVals4'], 'string', 'max' => 11],
            [['attrVals1'], 'string', 'max' => 81],
            [['attrVals2'], 'string', 'max' => 101],
            [['attrDefault2'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'type' => 'Type',
            'articul' => 'Articul',
            'title' => 'Title',
            'sales' => 'Sales',
            'publishStatus' => 'Publish Status',
            'recommendStatus' => 'Recommend Status',
            'visibilityInCatalog' => 'Visibility In Catalog',
            'shortDescription' => 'Short Description',
            'longDescription' => 'Long Description',
            'startActionDiscount' => 'Start Action Discount',
            'startFinishDiscount' => 'Start Finish Discount',
            'taxStatus' => 'Tax Status',
            'taxClass' => 'Tax Class',
            'stockAvailability' => 'Stock Availability',
            'stock' => 'Stock',
            'valueMinimalStock' => 'Value Minimal Stock',
            'preorderEnable' => 'Preorder Enable',
            'soldIndividually' => 'Sold Individually',
            'weight' => 'Weight',
            'widthX' => 'Width X',
            'widthY' => 'Width Y',
            'height' => 'Height',
            'allowFeedback' => 'Allow Feedback',
            'notePurchase' => 'Note Purchase',
            'promotionalPrice' => 'Promotional Price',
            'baseCost' => 'Base Cost',
            'categories' => 'Categories',
            'labels' => 'Labels',
            'classDeliviery' => 'Class Deliviery',
            'images' => 'Images',
            'limitDownloads' => 'Limit Downloads',
            'daysLoadingTime' => 'Days Loading Time',
            'parent' => 'Parent',
            'groupItems' => 'Group Items',
            'upsales' => 'Upsales',
            'crossales' => 'Crossales',
            'externalUrl' => 'External Url',
            'textButton' => 'Text Button',
            'position' => 'Position',
            'attrTitle1' => 'Attr Title1',
            'attrVals1' => 'Attr Vals1',
            'attrVisibility1' => 'Attr Visibility1',
            'attrGlobal1' => 'Attr Global1',
            'attrDefault1' => 'Attr Default1',
            'attrTitle2' => 'Attr Title2',
            'attrVals2' => 'Attr Vals2',
            'attrVisibility2' => 'Attr Visibility2',
            'attrGlobal2' => 'Attr Global2',
            'attrDefault2' => 'Attr Default2',
            'attrTitle3' => 'Attr Title3',
            'attrVals3' => 'Attr Vals3',
            'attrVisibility3' => 'Attr Visibility3',
            'attrGlobal3' => 'Attr Global3',
            'attrTitle4' => 'Attr Title4',
            'attrVals4' => 'Attr Vals4',
            'attrVisibility4' => 'Attr Visibility4',
            'attrGlobal4' => 'Attr Global4',
        ];
    }
}
