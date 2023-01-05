<div class="l-container l-container--copy">
    <div class="c-article__content">
        <?php foreach ($page->text()->toBlocks() as $block): ?>
            <?php if ($block->type() == 'image'): ?>
                    <img class="o-fluidimage c-article__contentimage" src="<?= $block->image()->toFile()->url() ?>">
                <?php elseif (true): ?>
                    <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
                <?= $block ?>
            </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</div>