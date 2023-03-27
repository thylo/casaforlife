<?php
/** @var Kirby\Cms\Block $block */
$type = $block->blockType()->value();
$theme = $block->theme()->value();
$style = $block->style()->value();


$sectionClass = 'c-smallsection l-grid l-grid--2cols@medium';
$sectionMediaClass = 'c-smallsection__media c-smallsection-media';

if ($type == 'img-text') {
  $sectionClass .= ' c-smallsection--image-text';
}
if ($type == 'text-img') {
  $sectionClass .= ' c-smallsection--text-image';
}


if ($theme == 'light') {
  $sectionClass .= ' c-smallsection--light';
}
if ($theme == 'dark') {
  $sectionClass .= ' c-smallsection--dark';
}

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
        <div class="c-smallsection__content">
            <?php if($block->title()->isNotEmpty()): ?>
                <h2 class="c-smallsection__title"><?= $block->title() ?></h2>
            <?php endif ?>
                <div class="c-wysiwig"><?= $block->textContent()->kt() ?></div>
        </div>
    </div>
</div>