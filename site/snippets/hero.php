<?php $hero_img = $page->hero_image()->toFile()?>

<header class="c-herobanner">
    <div class="c-herobanner__img">
        <?php snippet('svgHomeClipPath') ?>
        <?php if ($image = $page->image()) : ?>
            <img class="o-fluidimage" src="<?= $hero_img->url() ?>" alt="Hero banner">
        <?php endif ?>
    </div>
    <div class=" c-herobanner__content">
        <h1 class="c-herobanner__title">
            <?= $page->headline()->or($page->title())->esc() ?>
        </h1>
        <?php if ($page->subheadline()->isNotEmpty()) : ?>
            <h3 class="c-herobanner__headline">
                <?= $page->subheadline()->esc() ?>
            </h3>
        <?php endif ?>
    </div>
</header>