<?php

use yii\helpers\Url;

// если заданы картинки
if (isset($model['images'])) {
    $images = explode(', ', $model['images']);

    if (isset($images[0])) {
        $firstImage = trim($images[0]);
    } else {
        $firstImage = '';
    }
} else {
    $images     = [];
    $images[0]  = '';
    $firstImage = '';
}

if (empty($model['baseCost'])){
    $model['baseCost'] = 0;
}

?>
<div class="products-list-item">
    <article class="product__card">
        <div class="product__card--thumbnail">
            <a class="product__card--thumbnail__link display-block" href="<?=Url::to([
                'product/view',
                'id' => $model['id'],
            ]);?>">
                <img class="product__card--thumbnail__img product__primary--img"
                     src="<?=htmlspecialchars($firstImage)?>" alt="<?=htmlspecialchars($model['title'])?>">
            </a>
            <ul class="product__card--action">
                <li class="product__card--action__list">
                    <!--<a class="product__card--action__btn" title="<?=htmlspecialchars($model['title'])?>"
                       data-bs-toggle="modal" data-bs-target="#examplemodal"
                       href="javascript:void(0)">
                        <svg class="product__card--action__btn--svg" width="16" height="16"
                             viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                  fill="currentColor"></path>
                        </svg>
                        <span class="visually-hidden">Просмотр</span>
                    </a>-->
                </li>
            </ul>
            <div class="product__add--to__card">
                <a class="product__card--btn add-to-card" data-id="<?=$model['id']?>" title="В корзину" href="#!">
                    В корзину
                </a>
            </div>
        </div>
        <div class="product__card--content">
            <div class="params">
                <h3 class="params-title">
                    <a href="<?=Url::to([
                    'product/view',
                    'id' => $model['id'],
                ]);?>" class="params-link"><?=htmlspecialchars($model['title'])?></a>
                </h3>
                <div class="params-cost"><?=htmlspecialchars($model['baseCost'])?> р.</div>
                <div class="params-artikul">арт <?=htmlspecialchars($model['articul'])?></div>
                <dl class="params-options -colors">
                    <dt>Цвет</dt>
                    <dd>
                        <?php
                            $colorString = htmlspecialchars($model['attrVals1']);
                            $colors = explode(", ", $colorString);
                            $colorCodes = [
                                'Белый' => '#FFFFFF',
                                'Голубой' => '#ADD8E6',
                                'Бежевый' => '#F5F5DC',
                                'Серый' => '#808080',
                                'Розовый' => '#FFC0CB',
                                'Персиковый' => '#FFDAB9',
                                'Ярко-розовый' => '#FF69B4',
                                'Бирюзовый' => '#40E0D0',
                                'Желтый' => '#FFFF00',
                                'Зеленый' => '#008000',
                                'Синий' => '#0000FF',
                                'Оранжевый' => '#FFA500',
                                'Коричневый' => '#A52A2A',
                                'Горчичный' => '#FFDB58',
                                'Мятный' => '#98FB98',
                                'Сиреневый' => '#EE82EE',
                                'Красный' => '#FF0000',
                                'Хаки' => '#BDB76B',
                                'Фуксия' => '#FF00FF',
                                'Молочный' => '#FFFAFA',
                                'Сливовый' => '#DDA0DD',
                                'Чёрный' => '#000000',
                                'Бордовый' => '#800000',
                                'Коралловый' => '#FF7F50',
                                'Кремовый' => '#FFFDD0',
                                'Тёмно-серый' => '#A9A9A9',
                                'Ярко-синий' => '#0000CD',
                            ];
                        ?>

                        <ul class="params-colors-list">
                            <?php foreach ($colors as $color) : ?>
                                <li class="params-colors-item">
                                    <input type="radio" name="color_<?= htmlspecialchars($model['id']) ?>" id="color_<?= htmlspecialchars($model['id']) ?>_<?= htmlspecialchars($color) ?>" data-color="<?= htmlspecialchars($color) ?>">
                                    <label 
                                        for="color_<?= htmlspecialchars($model['id']) ?>_<?= htmlspecialchars($color) ?>" 
                                        style="background-color: <?= isset($colorCodes[$color]) ? $colorCodes[$color] : '#000000' ?>;"
                                        title="<?= htmlspecialchars($color) ?>"
                                    ></label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </dd>
                </dl>
                <dl class="params-options -sizes">
                    <dt>Размеры</dt>
                    <dd>
                        <?php
                            $sizesString = htmlspecialchars($model['attrVals2']);
                            $sizes = explode(", ", $sizesString);
                            $formattedSizes = array_map(function ($size) {
                                $slashPos = strpos($size, '/');
                                if ($slashPos !== false) {
                                    $sizeAfterSlash = trim(substr($size, $slashPos + 1));
                                    $formattedSize = substr($sizeAfterSlash, 0, strpos($sizeAfterSlash, ' '));
                                } else {
                                    $formattedSize = $size;
                                }

                                return $formattedSize;
                            }, $sizes);
                        ?>
                        <ul class="params-sizes-list">
                            <?php foreach ($formattedSizes as $key => $size) : ?>
                                <li class="params-sizes-item">
                                    <input type="radio" name="size_<?=htmlspecialchars($model['id'])?>" id="size_<?=htmlspecialchars($model['id'])?>_<?= $key + 1 ?>">
                                    <label for="size_<?=htmlspecialchars($model['id'])?>_<?= $key + 1 ?>">                                        
                                        <span><?= htmlspecialchars($size) ?> СМ</span>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </dd>
                </dl>
            </div>
            <!--<h3 class="product__card--title">
                <a href="<?=Url::to([
                    'product/view',
                    'id' => $model['id'],
                ]);?>">
                    <?=htmlspecialchars($model['title'])?>
                </a>
            </h3>
            <div class="product__card--price">
                <span class="current__price"><?=htmlspecialchars($model['baseCost'])?> руб.</span>
            </div>
            <div class="product__card--info">
                <small style="font-size: 12px; display: block; line-height: 1;"><strong>Размеры:</strong> <?=htmlspecialchars($model['attrVals2'])?></small>
                <small style="font-size: 12px; display: block; line-height: 1;"><strong>Цвет:</strong> <?=htmlspecialchars($model['attrVals4'])?></small>
            </div>-->
        </div>
    </article>
</div>