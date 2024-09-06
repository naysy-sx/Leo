<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogList */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Catalog Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="catalog-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'type',
            'articul',
            'title',
            'publishStatus',
            'recommendStatus',
            'visibilityInCatalog',
            'shortDescription',
            'longDescription',
            'startActionDiscount',
            'startFinishDiscount',
            'taxStatus',
            'taxClass',
            'stockAvailability',
            'stock',
            'valueMinimalStock',
            'preorderEnable',
            'soldIndividually',
            'weight',
            'widthX',
            'widthY',
            'height',
            'allowFeedback',
            'notePurchase',
            'promotionalPrice',
            'baseCost',
            'categories',
            'labels',
            'classDeliviery',
            'images',
            'limitDownloads',
            'daysLoadingTime',
            'parent',
            'groupItems',
            'upsales',
            'crossales',
            'externalUrl',
            'textButton',
            'position',
            'attrTitle1',
            'attrVals1',
            'attrVisibility1',
            'attrGlobal1',
            'attrDefault1',
            'attrTitle2',
            'attrVals2',
            'attrVisibility2',
            'attrGlobal2',
            'attrDefault2',
            'attrTitle3',
            'attrVals3',
            'attrVisibility3',
            'attrGlobal3',
            'attrTitle4',
            'attrVals4',
            'attrVisibility4',
            'attrGlobal4',
            'category_id',
        ],
    ]) ?>

</div>
