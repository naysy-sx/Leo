<h1>dfgdfgdfgdfgdfgd</h1>

<div class="products-list filter-result">
    <?php foreach ($dataProvider->getModels() as $product): ?>
        <?= $this->render('_card', ['model' => $product]) ?>
    <?php endforeach; ?>
</div>
<h1>dfgdfgdfgdfgdfgd</h1>