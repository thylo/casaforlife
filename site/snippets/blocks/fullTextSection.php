<div class="c-fulltext-section">
    <div class="c-fulltext-section__content">
        <?php if($block->title()->isNotEmpty()): ?>
                <h2 class="c-smallsection__title"><?= $block->title() ?></h2>
            <?php endif ?>
            <div class="c-fulltext-section__text"><?= $block->textContent()->kt() ?></div>
        </div>
</div>