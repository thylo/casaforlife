<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<div class="l-container">
<div class="c-pagesection u-pt-m">

    <?php if ($page = page('Actualites')): ?>

      <?= snippet('hero/bigTitleh2',['text' => page('Actualites')->headline()]) ?>

      <?php $listedElements = $page->children()->listed()->sortBy('date','desc')->limit(3); ?>

      <ul class="l-grid l-grid--3cols">
        <?php foreach ($listedElements as $item): ?>

          <li>
            <?= snippet('actuCard', ['item' => $item]) ?>
          </li>

        <?php endforeach ?>
      </ul>

    <?php endif ?>

    <?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
?>

<?php $page = $pages->current() ?>

<div class="l-container">
  <?= console_log($page->blockContent()->toBlocks()); ?>
  <?php foreach ($page->sections()->blockContent()->toBlocks() as $block): ?>
        
      <div id="<?= $block->id() ?>" class="o-section block block-type-<?= $block->type() ?>">
        <?php snippet(
          'blocks/' . $block->type(),
          [
            'block' => $block,
            'theme' => 'ligth'
          ]
        ) ?>
      </div>
    <?php endforeach ?>
  </div>

  </div>
</div>

</div>

<?php snippet('footer') ?>