<div class="l-container l-container--copy">
    <div class="c-article__content">

<?php foreach ($page->article()->toBlocks() as $block): ?>    
            <div id="<?= $block->id() ?>" class="o-section block block-type-<?= $block->type() ?>">
            <?php snippet(
                'blocks/' . $block->type(),
                [
                'block' => $block,
                'theme' => 'dark'
                ]
            ) ?>
            </div>
        <?php endforeach ?>
    </div>
</div>