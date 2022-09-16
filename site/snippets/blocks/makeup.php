<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="o-wrapper u-margin-vertical-huge">
  <div class="c-column-overlay">
    <div class="c-column-overlay__image" style="--bg-image:<?= $block->section_image()->toFile()->url() ?>">

    </div>
    <div class="c-column-overlay__content">
      <h1><?= $block->title() ?></h1>
      <div class=""><?= $block->description()->markdown() ?></div>
    </div>
  </div>
</div>