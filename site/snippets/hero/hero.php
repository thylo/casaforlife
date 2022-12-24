<?php $hero_img = $page->heroimage()->toFile()?>
<?php $hero_title =  $page->headline()->or($page->title())->esc() ?>

<?php $mainBtn = $page->mainBtn()->toLinkObject()?>
<?php $secondaryBtn = $page->secondaryBtn()->toLinkObject()?>


<header class="c-herobanner">
    <div class=" c-herobanner__content">
        <?= snippet('hero/bigTitle',['text' => $hero_title]) ?>
        <?php if ($page->subheadline()->isNotEmpty()) : ?>
            <h3 class="c-herobanner__headline">
                <?= $page->subheadline()->esc() ?>
            </h3>
        <?php endif ?>
        <?php if ($mainBtn->isNotEmpty()) : ?>
            <a href="<?= $mainBtn->url() ?>" class="c-herobanner__btn c-ctalink">
            <?= $mainBtn->text() ?>
            </a>
        <?php endif ?>
        <?php if ($secondaryBtn->isNotEmpty()) : ?>
            <a href="<?= $secondaryBtn->url() ?>" class="c-herobanner__btn c-ctalink c-ctalink--white-stroke">
            <?= $secondaryBtn->text() ?>
            </a>
        <?php endif ?>
    </div>
        
    <?php if ($hero_img) : ?>
        <div class="c-herobanner__picture o-fluidimage">
            <div class="c-herobanner__deco">
                <svg viewBox="0 0 818 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M812.5 409V1221.5H5.5V409C5.5 186.153 186.153 5.5 409 5.5C631.847 5.5 812.5 186.153 812.5 409Z" stroke="white" stroke-width="11"/>
                </svg>
            </div>
            <div class="c-herobanner__img">
                <img src="<?= $hero_img->url() ?>" alt="Hero banner">
                <?php snippet('hero/svgHeroClipPath') ?>
            </div>
            
        </div>
   <?php endif ?>
</header>