
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
  echo param('tag');

  $inProgressElements = $listedElements->filterBy('projectStatus', param('status'))->sortBy('date','desc');
  $futurElements = $listedElements->filterBy('projectStatus', 'En projet')->sortBy('date','desc');
  $finishedElements = $listedElements->filterBy('projectStatus', 'Terminé')->sortBy('date', 'desc');
  $elementsToShow = $listedElements;

  ?>

  <?php if($listedElements->count()): ?>
    <div class="c-projects">
      <ul class="c-projects__filters o-list-bare">
        <li class="c-projects__filter-item">
            <a href="#" class="c-projects__filter js-projects__filter c-projects__filter--active">Tous</a>
        </li>
        <?php if($inProgressElements->count()): ?>
          <li class="c-projects__filter-item">
            <a href="/tag:inProgress" class="c-projects__filter js-projects__filter">En cours</a>
          </li>
          <?php endif; ?>
        <?php if($futurElements->count()): ?>
          <li class="c-projects__filter-item">
            <a href="/tag:futur" class="c-projects__filter js-projects__filter">En projet</a>
          </li>
          <?php endif; ?>
        <?php if($finishedElements->count()): ?>
          <li class="c-projects__filter-item">
            <a href="/tag:finished" class="c-projects__filter js-projects__filter">Terminé</a>
          </li>
        <?php endif; ?>
      </ul>
    
      <ul class="l-grid l-grid--2cols@small l-grid--3cols@large">
  <?php endif; ?>


  <?php foreach ($elementsToShow as $item): ?>
      <li>
          <?= snippet('projectCard', ['item' => $item]) ?>
      </li>
  <?php endforeach; ?>

  <?php if($listedElements->count()): ?>
   </ul>
  </div>
  <?php endif; ?>

  </div>
</div>

<?php snippet('footer') ?>