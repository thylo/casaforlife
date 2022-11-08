<?php snippet('header') ?>

<main>
<div class="o-container">
<?php foreach (page()->sections()->toBlocks() as $block): ?>
    <div id="<?= $block->id() ?>" class="o-section block block-type-<?= $block->type() ?>">
      <?php snippet('blocks/' . $block->type(), [
        'block' => $block,
        'theme' => 'dark'
      ]) ?>
    </div>
  <?php endforeach ?>
</div>

</main>

<?php snippet('footer') ?>
