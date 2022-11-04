<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="c-contact" style="--bg-image:url(<?= $block->background_image()->toFile()->url() ?>)">
  <div class="c-contact__wrapper o-wrapper">
    <div class="c-contact__content u-padding u-1/2@tablet">
      <h1><?= $block->title() ?></h1>
      <div><?= $block->body()->markdown() ?></div>
    </div>
  </div>
</div>