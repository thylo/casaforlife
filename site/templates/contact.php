<?php
/** @var Kirby\Cms\Block $block */
?>

<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<?php function console_log($output, $with_script_tags = true) {
$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
if ($with_script_tags) {
    $js_code = '<script>' . $js_code . '</script>';
}
echo $js_code; } ?>

  <div class="l-container">
  <?php foreach ($page->equip() as $item): ?>
    <?php foreach ($item): ?>

    <div class="c-equip">
      <div class="c-equip__img">
        <img src="<?= $item->image()->toFile()->url() ?>" alt="">
      </div>
      <div class="c-equip__content">
        <h2 class="c-equip__title"><?= $item->title() ?></h2>
        <p class="c-equip__text"><?= $item->text() ?></p>
      </div>
    </div>
  <?php endforeach ?>
  </div>


  <div class="l-container">
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