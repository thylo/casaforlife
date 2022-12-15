<?php $hero_img = $page->heroimage()->toFile()?>
<?php $hero_title =  $page->headline()->or($page->title())->esc() ?>

<header class="c-herobanner">
    <div class=" c-herobanner__content">
        <?= snippet('hero/bigTitle',['text' => $hero_title]) ?>
        <?php if ($page->subheadline()->isNotEmpty()) : ?>
            <h3 class="c-herobanner__headline">
                <?= $page->subheadline()->esc() ?>
            </h3>
            <?php endif ?>
        </div>
        
    <?php if ($hero_img) : ?>
        <div class="c-herobanner__img">
            <?php snippet('hero/svgHeroClipPath') ?>
                <img class="o-fluidimage" src="<?= $hero_img->url() ?>" alt="Hero banner">
        </div>
   <?php endif ?>
</header>