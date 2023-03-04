<?php
/** @var Kirby\Cms\Block $block */
?>

<?php
$ratio = $block->image()->toFile()->ratio();
$format = "";
?>

<?php if ($ratio > 1): ?>
    <?php $format = "horizontal" ?>
<?php else : ?>
    <?php $format = "vertical" ?>
<?php endif ?>


<div class="c-smallsection l-grid l-grid--2cols@medium">
    <?php if ($block->image()->isNotEmpty()): ?>
        <div class="c-smallsection__media c-smallsection-media c-smallsection-media--no-deco <?= $format ?>">
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