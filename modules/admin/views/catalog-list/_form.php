<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalog-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'articul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publishStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recommendStatus')->textInput() ?>

    <?= $form->field($model, 'visibilityInCatalog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortDescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longDescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startActionDiscount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startFinishDiscount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxClass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stockAvailability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valueMinimalStock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preorderEnable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soldIndividually')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'widthX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'widthY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowFeedback')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notePurchase')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promotionalPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baseCost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categories')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'labels')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classDeliviery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'images')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'limitDownloads')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daysLoadingTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groupItems')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upsales')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crossales')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'externalUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'textButton')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrTitle1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVals1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVisibility1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrGlobal1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrDefault1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrTitle2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVals2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVisibility2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrGlobal2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrDefault2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrTitle3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVals3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVisibility3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrGlobal3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrTitle4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVals4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrVisibility4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attrGlobal4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
