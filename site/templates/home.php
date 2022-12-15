<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<div class="l-container">
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

</div>

<?php snippet('footer') ?>