<?php /** @var \Kirby\Cms\Block $block */ ?>
<div class="c-article__quote--all">
    <div class="c-article__quote-icon">
        <img src="/assets/img/svg/quoteIcon.svg" alt="Icone de citation">
    </div>
    <blockquote class="c-article__quote">
      <p class="article__quote-text"> <?= $block->text() ?> </p>
      <?php if ($block->citation()->isNotEmpty()): ?>
      <footer class="c-article__quote-author">
        <?= $block->citation() ?>
      </footer>
      <?php endif ?>
    </blockquote>
</div>