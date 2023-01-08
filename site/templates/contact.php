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
      <?php if($page->equipTitle()->isNotEmpty()):?>
        <h2 class="c-smalltitle"><?= $page->equipTitle() ?></h2>
      <?php endif ?>
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

<?php if($page->soutenirTitle()->isNotEmpty()):?>
  <div class="c-pagesection c-pagesection--notop">
    <div class="l-container">
      <div class="c-smallsection l-grid l-grid--2cols@medium">
        <?php if ($page->soutenirImage()->isNotEmpty()): ?>
          <div class="c-smallsection__media">
            <img class="o-fluidimage c-smallsection__cover" src="<?= $page->soutenirImage()->toFile()->url() ?>">
          </div>
          <?php endif ?>
          <div id="nous-soutenir" class="c-smallsection__content">
          <?php if($page->soutenirTitle()->isNotEmpty()):?>
            <h2 class="c-smallsection__title"><?= $page->soutenirTitle() ?></h2>
          <?php endif ?>
          <div><?= $page->soutenirContent()->kt() ?></div>
        </div>
    </div>
  </div>
<?php endif ?>

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