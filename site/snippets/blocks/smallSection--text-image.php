<?php
/** @var Kirby\Cms\Block $block */
?>

<div class="c-smallsection c-smallsection--text-image l-grid l-grid--2cols@medium">
    <?php if ($block->image()->isNotEmpty()): ?>
        <div class="c-smallsection__media c-smallsection-media">
            <img class="o-fluidimage c-smallsection-media__cover" src="<?= $block->image()->toFile()->url() ?>">
        </div>
    <?php endif ?>
    <div class="c-smallsection__content">
        <div class="c-smallsection__content">
            <?php if ($block->title()->isNotEmpty()): ?>
                <h2 class="c-smallsection__title"><?= $block->title() ?></h2>
            <?php endif ?>
            <div class="c-wysiwig"><?= $block->textContent()->kt() ?></div>
        </div>
    </div>
</div>