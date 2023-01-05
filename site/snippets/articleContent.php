<div class="l-container l-container--copy">
    <div class="c-article__content">
    
    <?php function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
    ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code; } ?>

<?php foreach ($page->article()->toBlocks() as $block): ?>
    
    <?= console_log($block->type()); ?>    
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