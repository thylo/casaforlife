<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<?php if($page->flashContent()->isNotEmpty()): ?>
    <div class="c-pagesection u-pt-m">
        <div class="l-container">
          <div class="c-flash">
            <div class="c-flash__txt">
            <?php if($page->flashTitle()->isNotEmpty()): ?>
                <h2 class="c-smalltitle c-flash__title"><?= $page->flashTitle() ?></h2>
            <?php endif ?>
                <div class="c-flash__content">
                    <?= $page->flashContent()->kt() ?>
                </div>
                <?php if ($page->flashBtn()->toLinkObject()->isNotEmpty()) : ?>
                    <a href="<?= $page->flashBtn()->toLinkObject()->url() ?>" class="c-ctalink c-ctalink--white-stroke">
                  <?= $page->flashBtn()->toLinkObject()->text() ?>
                </a>
              <?php endif ?>
            </div>
            <?php if ($page->flashImage()->isNotEmpty()) : ?>
            <div class="c-flash__media">
                <img class="o-fluidimage c-flash__img" src="<?= $page->flashImage()->toFile()->url() ?>">
            </div>
            <?php endif ?>
          </div>
        </div>
    </div>
<?php endif ?>

<div class="c-pagesection u-pt-m">
  <div class="l-container">

    <?php if ($newsPage = page('actualites')): ?>

      <?= snippet('hero/bigTitleh2',['text' => page('Actualites')->headline()]) ?>

      <?php $listedElements = $newsPage->children()->listed()->sortBy('date','desc')->limit(3); ?>

        <ul class="l-grid l-grid--3cols@medium">
          <?php foreach ($listedElements as $item): ?>

            <li>
              <?= snippet('actuCard', ['item' => $item]) ?>
            </li>

          <?php endforeach ?>
        </ul>
      
      <a href="<?= $newsPage->url()?>" class="c-link c-actulink"> Toutes nos actualités</a>
    <?php endif ?>
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