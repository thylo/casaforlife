<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<div class="c-pagesection">
  <div class="l-container">
    <div class="c-smallsection-group">
      <?php foreach ($page->blockContent()->toBlocks() as $block): ?>
          <?php snippet(
            'blocks/' . $block->type(),
            [
              'block' => $block,
              'theme' => 'dark'
            ]
          ) ?>
      <?php endforeach ?>
    </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>