<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<div class="c-pagesection u-pt-m">
  <div class="l-container">

    <?php if ($page = page('Actualites')): ?>

      <?= snippet('hero/bigTitleh2',['text' => page('Actualites')->headline()]) ?>

      <?php $listedElements = $page->children()->listed()->sortBy('date','desc')->limit(3); ?>

        <ul class="l-grid l-grid--2cols@small l-grid--3cols@large">
          <?php foreach ($listedElements as $item): ?>

            <li>
              <?= snippet('actuCard', ['item' => $item]) ?>
            </li>

          <?php endforeach ?>
        </ul>

    <?php endif ?>
  </div>
</div>

<?php $page = $pages->current() ?>

<div class="c-pagesection">
  <div class="l-container">
    <div class="c-smallsection-group">
      <?php foreach ($page->blockContent()->toBlocks() as $block): ?>
          <?php snippet(
            'blocks/' . $block->type(),
            [
              'block' => $block,
              'theme' => 'ligth'
            ]
          ) ?>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>