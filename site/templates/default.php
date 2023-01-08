<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<?php if($page->blockContent()->isNotEmpty()):?>
  <div class="c-pagesection c-pagesection--notop">
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
<?php endif ?>

<?php snippet('footer') ?>