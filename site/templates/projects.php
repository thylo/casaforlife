
<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand ">
  <div class="l-container">
    
    <?php snippet('hero/hero') ?>

  </div>
</div>

<div id="anchor-projects" class="c-pagesection u-pt-m">
  <div class="l-container">

  <?php
  $listedElements = $page->children()->listed()->sortBy('date','desc');?>

  <?php if($listedElements->count()): ?>
    <div class="c-projects">
      <ul class="c-projects__filters o-list-bare">
        <li class="c-projects__filter-item">
            <a href="<?= $page->url() ?>#anchor-projects" class="c-projects__filter 
            <?= !isset($_GET['tag']) ? 'active' : '' ?>">Tous</a>
        </li>
      <?php foreach($page->children()->listed()->pluck('projectStatus', ',', true) as $tag): ?>
        <li class="c-projects__filter-item">
            <a href="<?= $page->url() . '?tag=' . $tag ?>#anchor-projects" class="c-projects__filter 
            <?= isset($_GET['tag']) && $_GET['tag'] !== null && $tag === $_GET['tag'] ? 'active' : '' ?>"><?= $tag ?></a>
        </li>
      <?php endforeach?>
      </ul>
  <?php endif?>

  <?php
    $tag = $_GET['tag'] ?? null;
    if($tag) {
      $projects = $page->children()->listed()->sortBy('date','desc')->filterBy('projectStatus', $tag, ',');
    } else {
      $projects = $page->children()->listed()->sortBy('date','desc');
    } ?>

    <?php foreach($projects->pluck('projectType', ',', true) as $type): ?>
      <?php
        switch($type):
          case 'agreculture':
            $title = 'Nos réalisations en maraîchage et accès à l’eau';
            break;
          case 'handicap':
            $title = 'Nos réalisations dans le domaine du handicap';
            break;
          case 'sante':
            $title = 'Nos réalisations en santé et maternité';
            break;
          case 'autre':
            $title = 'Autres réalisations';
            break;
        endswitch;
      ?>
        <div class="c-projects__section">
          <h3 class="c-projects__title c-smalltitle"><?= $title ?></h3>
            <?php if($projects->count()): ?>
              <ul class="l-grid l-grid--2cols@small l-grid--3cols@large">
            <?php endif; ?>

                <?php foreach ($projects->filterBy('projectType', $type, ',') as $item): ?>
                    <li>
                        <?= snippet('projectCard', ['item' => $item]) ?>
                    </li>
                <?php endforeach; ?>

              <?php if($listedElements->count()): ?>
              </ul>
              <?php endif; ?>
        </div>
    <?php endforeach?>
  </div>
</div>

<?php snippet('footer') ?>