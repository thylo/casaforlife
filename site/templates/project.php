<?php snippet('header') ?>

<?php 
    $user = $page->author()->toUser();
    $title = $page->headline();
    $location = $page->location()->yaml();
    $coverUrl = $page->cover()->toFile()->url();
    $date = $page->date()->toDate('d-m-Y');
?>

<div class="c-pagesection c-pagesection--article">
    <div class="c-article">
        <div class="c-article_head">
            <div class="c-article__media">
                <?php if ($coverUrl): ?>
                    <img class="o-fluidimage c-article__cover" src="<?= $coverUrl ?>">
                <?php endif; ?>
            </div>
            <div class="l-container l-container--copy">
                <div class="c-article__body">
                    <?php if ($title): ?>
                        <h1 class="c-article__title"><?= $title ?></h1>
                    <?php endif; ?>
                    <div class="c-article__date-position">
                        <?php if ($date): ?>
                            <p class="c-article__date"><?= $date ?></p>
                        <?php endif; ?>
                        <div class="c-article__position">
                            <?php if ($location['lat']): ?>
                                <p class="c-article__location"><?= $location['lat'] ?></p>
                            <?php endif; ?>
                            <?php if ($location['lon']): ?>
                                <p class="c-article__location"><?= $location['lon'] ?></p>
                            <?php endif; ?>
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
