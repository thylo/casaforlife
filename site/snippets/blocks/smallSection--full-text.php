<div class="c-smallsection c-smallsection--full-text">
    <div class="c-smallsection__content">
        <?php if($block->title()->isNotEmpty()): ?>
                <h2 class="c-smallsection__title"><?= $block->title() ?></h2>
            <?php endif ?>
            <div class="c-smallsection__text c-smallsection__text--full-text"><?= $block->textContent()->kt() ?></div>
        </div>
</div>