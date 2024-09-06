<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'col-md-3'],
    'itemView' => function ($model, $key, $index, $widget) {
        return $this->render('_catalog-item', ['model' => $model]);
    },
    'layout' => "{items}\n{summary}",
]); ?>


<div class="pagination__area">
    <nav class="pagination justify-content-center">
        <?= LinkPager::widget([
            'pagination' => $dataProvider->pagination,
            'options' => ['class' => 'pagination__wrapper d-flex align-items-center justify-content-center'],
            'linkContainerOptions' => ['class' => 'pagination__list'],
            'linkOptions' => ['class' => 'pagination__item link'],
            'disabledListItemSubTagOptions' => ['class' => 'pagination__item--current'],
            'nextPageLabel' => '<span class="pagination__item--arrow  link"><svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg></span>',
            'prevPageLabel' => '<span class="pagination__item--arrow  link"><svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"></path></svg></span>',
            'nextPageCssClass' => 'pagination__list',
            'prevPageCssClass' => 'pagination__list',
        ]); ?>
    </nav>
</div>