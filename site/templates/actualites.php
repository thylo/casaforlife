
<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<div class="c-pagesection u-pt-m">
  <div class="l-container">

  <?php
  $listedElements = $page->children()->listed()->sortBy('date','desc');
  ?>

  <?php if($listedElements->isNotEmpty()): ?>
      <ul class="l-grid l-grid--2cols@small l-grid--3cols@large">
  <?php endif; ?>


  <?php foreach ($listedElements as $item): ?>
      <li>
          <?= snippet('actuCard', ['item' => $item]) ?>
      </li>
  <?php endforeach; ?>

  <?php if($listedElements->count()): ?>
  </ul>
  <?php endif; ?>

  </div>
</div>

<?php snippet('footer') ?>