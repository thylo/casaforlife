<?php snippet('header') ?>

<?php
$user = $page->author()->toUser();
$coverUrl = $page->cover()->toFile()->url();
$headline = $page->headline();
$tags = $page->tags()->split(',');
$date = $page->date();

$authorTitle = site()->authorTitle()->text();
$avatarUrl = $user && $user->avatar() ? $user->avatar()->thumb(['width' => 200, 'height' => 200, 'crop' => true, 'quality' => 80])->url() : null;
$authorName = $user && $user->name()->isNotEmpty() ? $user->name() : null;
?>

<div class="c-pagesection c-pagesection--article">
    <div class="c-article">
        <div class="c-article_head">
            <div class="c-article__media">
                <img class="o-fluidimage c-article__cover" src="<?= $coverUrl ?>">
            </div>
            <div class="l-container l-container--copy">
                <div class="c-article__body">
                    <?php if ($headline->isNotEmpty()): ?>
                        <h1 class="c-article__title"><?= $headline ?></h1>
                    <?php endif ?>
                    <!-- Tags -->
                    <!-- <div class="c-article__tags-date">
                        <div class="c-article__tags-link">
                            <ul class="c-article__tags o-list-bare">
                                <?php foreach ($tags as $tag): ?>
                                    <li class="c-article__tag-item">
                                        <p class="c-articlecard__tag"><?= $tag ?></p>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <p class="c-article__date"><?= $date->toDate('d-m-Y') ?></p>
                    </div> -->
                    <?php if ($date->isNotEmpty()): ?>
                        <p class="c-article__date"><?= $date->toDate('d-m-Y') ?></p>
                    <?php endif ?>
                </div>
            </div>
            <!-- Article content block -->
        </div>
        <?php snippet('articleContent') ?>
        <!-- Author -->
        <?php if ($user && $authorName): ?>
            <div class="c-article-author">
                <?php if ($authorTitle): ?>
                    <h3 class="c-smalltitle"><?= $authorTitle ?></h3>
                <?php endif ?>
                <?php if ($avatarUrl): ?>
                    <img class="o-fluidimage c-article-author__picture" src="<?= $avatarUrl ?>">
                <?php endif ?>
                <?php if ($authorName): ?>
                    <p class="c-article-author__name"><?= $authorName ?></p>
                <?php endif ?>
            </div>
        <?php endif ?>
    </div>
</div>

<?php snippet('footer') ?>
