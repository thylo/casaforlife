<?php
/** @var Kirby\Cms\FIeld $prices */
?>
<ul class="o-list-bare u-margin-top c-prices">

    <?php foreach ($prices->toStructure() as $price): ?>
        <li class="o-list-bare__item c-prices__item c-price">
            <div class="u-padding-small">
                <h4 class="o-flex-layout__item u-margin-none c-price__title">
                    <?= $price->title() ?>
                </h4>
                <div>
                    <?= $price->description()->markdown() ?>
                </div>
            </div>
            <div class="c-price__meta">
                <?php if ($price->duration()->isNotEmpty()): ?>
                    <span class="u-padding-small c-price__duration">
                    <?= svg("/assets/img/svg/watch.svg") ?>
                    <span><?= $price->duration() ?></span>
                </span>&nbsp;-&nbsp;
                <?php endif; ?>
                <span class="u-padding-small c-price__price">
              <?= $price->price() ?>
            </span>
            </div>
        </li>
    <?php endforeach; ?>

</ul>
