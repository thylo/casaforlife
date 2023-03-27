<?php
/** @var Kirby\Cms\Block $block */
$type = $block->blockType()->value();
$theme = $block->theme()->value();
$style = $block->style()->value();


$sectionClass = 'c-smallsection l-grid l-grid--2cols@medium c-smallsection--' . $theme . ' c-smallsection--' . $type;
$sectionMediaClass = 'c-smallsection__media c-smallsection-media c-smallsection-media--' . $theme;
$sectionTitleClass = 'c-smallsection__title c-smallsection__title--' . $theme;

if ($style == 'square') {
    $ratio = $block->image()->toFile()->ratio();
    $format = "";  

    if ($ratio > 1) {
        $format = "horizontal";
    } else {
        $format = "vertical";
    }

    $sectionMediaClass .= ' c-smallsection-media--no-deco' . ' ' . $format;
  }
?>

<div class="<?= $sectionClass ?>">
    <?php if ($block->image()->isNotEmpty()): ?>
        <div class="<?= $sectionMediaClass ?>">
            <img class="o-fluidimage c-smallsection-media__cover" src="<?= $block->image()->toFile()->url() ?>">
        </div>
    <?php endif ?>
    <div class="c-smallsection__content">
        <?php if($block->title()->isNotEmpty()): ?>
            <h2 class="<?=  $sectionTitleClass ?>"><?= $block->title() ?></h2>
        <?php endif ?>
            <div class="c-wysiwig"><?= $block->textContent()->kt() ?></div>
    </div>
</div>