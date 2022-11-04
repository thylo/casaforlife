<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="c-credentials">
  <div class="o-wrapper">
    <div class="u-padding-vertical-large">
      <img src="/assets/img/svg/logo.svg" alt="" class="c-credentials__logo">
      <h3><?= $block->subtitle() ?></h3>
      <div><?= $block->body()->markdown() ?></div>
    </div>
  </div>
</div>


