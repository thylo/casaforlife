<?php snippet('header') ?>

<?php foreach (page()->sections()->toBlocks() as $block): ?>
  <div id="<?= $block->id() ?>" class="o-section block block-type-<?= $block->type() ?>">
    <?php snippet('blocks/' . $block->type(), [
      'block' => $block,
      'theme' => 'dark'
    ]) ?>
  </div>
  
<?php endforeach ?>

<h1> <?= $page->title()?> </h1>
<h3> <?= $page->intro()?> </h3>
<p> <?= $page->text()?> </p>
<?php snippet('footer') ?>
