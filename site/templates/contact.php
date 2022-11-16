<?php
/** @var Kirby\Cms\Block $block */
?>

<?php snippet('header') ?>


  <div class="o-container">
    <?php foreach (page()->sections()->toBlocks() as $block): ?>
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


<?php snippet('footer') ?>