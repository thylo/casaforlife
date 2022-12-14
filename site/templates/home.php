<?php snippet('header') ?>

<div class="l-container">
  <div class="c-pagesection">

    <?php snippet('hero') ?>
    
  </div>

  <div class="c-pagesection">

    <?php if ($page = page('Actualites')): ?>

      <?php $listedElements = $page->children()->listed()->limit(3); ?>

      <ul class="l-grid l-grid--3cols">
        <?php foreach ($listedElements as $item): ?>

          <li>
            <?= snippet('actuCard', ['item' => $item]) ?>
          </li>

        <?php endforeach ?>
      </ul>

    <?php endif ?>

  </div>

</div>

<?php snippet('footer') ?>