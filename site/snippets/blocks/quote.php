<?php /** @var \Kirby\Cms\Block $block */ ?>
<div class="c-quote--all">
    <div class="c-quote__icon">
        <img src="/assets/img/svg/quoteIcon.svg" alt="Icone de citation">
    </div>
    <blockquote class="c-quote">
      <p class="article__quote__text"> <?= $block->text() ?> </p>
      <?php if ($block->citation()->isNotEmpty()): ?>
      <footer class="c-quote__author">
        <?= $block->citation() ?>
      </footer>
      <?php endif ?>
    </blockquote>
</div>