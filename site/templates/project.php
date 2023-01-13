<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--article">
    <div class="c-article">
        <div class="c-article_head">
            <div class="c-article__media">
                <img class="o-fluidimage c-article__cover" src="<?= $page->cover()->toFile()->url() ?>">
            </div>
            <div class="l-container l-container--copy">
                <div class="c-article__body">
                    <h1 class="c-article__title"><?= $page->headline() ?></h1>
                    <div class="c-article__date-position">
                        <p class="c-article__date"><?= $page->date()->toDate('d-m-Y') ?></p>
                        <div class="c-article__position">
                            <p class="c-article__location"><?= $page->locationLat()?></p>
                            <p class="c-article__location"><?= $page->locationLong()?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project content block -->
        <?php snippet('articleContent') ?>
    </div>
</div>


<?php snippet('footer') ?>