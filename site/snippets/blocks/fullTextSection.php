<?php
/** @var Kirby\Cms\Block $block */
?>

<div class="c-fulltext-section">
        <div class="c-fulltext-section__content">
            <h2 class="c-smallsection__title"><?= $block->title() ?></h2>
            <div class="c-fulltext-section__text"><?= $block->textContent()->kt() ?></div>
        </div>
</div>