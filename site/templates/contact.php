<?php
/** @var Kirby\Cms\Block $block */
?>

<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<?php if($page->equipCard()->isNotEmpty()):?>
  
  <div class="c-pagesection c-pagesection--notop">
    <div class="l-container">
      <ul class="o-listbare l-grid l-grid--auto">
        <?php foreach ($page->equipCard()->toBlocks() as $block): ?>
            <?php snippet(
              'blocks/' . $block->type(),
              [
                'block' => $block,
                'theme' => 'dark'
              ]
            ) ?>
          <?php endforeach ?>
        </div>
      </ul>
  </div>

<?php endif ?>
 

<?php snippet('footer') ?>