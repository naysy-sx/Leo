<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catalog Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Catalog List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'articul',
            'title',
            'publishStatus',
            //'recommendStatus',
            //'visibilityInCatalog',
            //'shortDescription',
            //'longDescription',
            //'startActionDiscount',
            //'startFinishDiscount',
            //'taxStatus',
            //'taxClass',
            //'stockAvailability',
            //'stock',
            //'valueMinimalStock',
            //'preorderEnable',
            //'soldIndividually',
            //'weight',
            //'widthX',
            //'widthY',
            //'height',
            //'allowFeedback',
            //'notePurchase',
            //'promotionalPrice',
            //'baseCost',
            //'categories',
            //'labels',
            //'classDeliviery',
            //'images',
            //'limitDownloads',
            //'daysLoadingTime',
            //'parent',
            //'groupItems',
            //'upsales',
            //'crossales',
            //'externalUrl',
            //'textButton',
            //'position',
            //'attrTitle1',
            //'attrVals1',
            //'attrVisibility1',
            //'attrGlobal1',
            //'attrDefault1',
            //'attrTitle2',
            //'attrVals2',
            //'attrVisibility2',
            //'attrGlobal2',
            //'attrDefault2',
            //'attrTitle3',
            //'attrVals3',
            //'attrVisibility3',
            //'attrGlobal3',
            //'attrTitle4',
            //'attrVals4',
            //'attrVisibility4',
            //'attrGlobal4',
            //'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
