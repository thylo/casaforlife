<?php $hero_img = $page->heroimage()->toFile()?>

<header class="c-herobanner">
    <div class=" c-herobanner__content">
        <h1 class="c-herobanner__title c-pagetitle">
            <?= $page->headline()->or($page->title())->esc() ?>
        </h1>
        <?php if ($page->subheadline()->isNotEmpty()) : ?>
            <h3 class="c-herobanner__headline">
                <?= $page->subheadline()->esc() ?>
            </h3>
            <?php endif ?>
        </div>
        
    <?php if ($hero_img) : ?>
        <div class="c-herobanner__img">
            <?php snippet('svgHomeClipPath') ?>
                <img class="o-fluidimage" src="<?= $hero_img->url() ?>" alt="Hero banner">
        </div>
   <?php endif ?>
</header>