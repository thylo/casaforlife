<?php
/** @var Kirby\Cms\Block $block */
?>

<div class="c-imagetexte">
    <?php if ($block->image()->isNotEmpty()): ?>
    <div class="c-imagetexte__media">
        <img class="o-fluidimage c-imagetexte__cover" src="<?= $block->image()->toFile()->url() ?>">
    </div>
    <?php endif ?>
    <div class="c-imagetexte__content">
        <div class="c-imagetexte__wrapper o-wrapper">
            <div class="c-imagetexte__content">
                <h1><?= $block->title() ?></h1>
                <div><?= $block->body()->text() ?></div>
            </div>
    </div>
</div>