<?php snippet('header') ?>

<?php $user = $page->author()->toUser() ?>

<div class="c-pagesection c-pagesection--article">
    <div class="c-article">
        <div class="c-article_head">
            <div class="c-article__media">
                <img class="o-fluidimage c-article__cover" src="<?= $page->cover()->toFile()->url() ?>">
            </div>
            <div class="l-container l-container--copy">
                <div class="c-article__body">
                    <h1 class="c-article__title"><?= $page->headline() ?></h1>
                    <!-- Tags -->
                    <!-- <div class="c-article__tags-date">
                        <div class="c-article__tags-link">
                            <ul class="c-article__tags o-list-bare">
                                <?php foreach ($page->tags()->split(',') as $tag): ?>
                                    <li class="c-article__tag-item">
                                        <p class="c-articlecard__tag"><?= $tag ?></p>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <p class="c-article__date"><?= $page->date()->toDate('d-m-Y') ?></p>
                    </div> -->
                    <p class="c-article__date"><?= $page->date()->toDate('d-m-Y') ?></p>
                </div>
            </div>
            <!-- Article content block -->
        </div>
        <?php snippet('articleContent') ?>
        <!-- Author -->
        <?php if($page->author()->isNotEmpty()): ?>
            <div class="c-article__author">
                <h3 class="c-smalltitle"><?= site()->authorTitle()->text() ?></h3>
                <img class="o-fluidimage c-article__author-picture" src="<?= $user->avatar()->thumb(['width' => 200, 'height' => 200, 'crop' => true, 'quality' => 80])->url() ?>">
                <p class="c-c-article__author-name"><?= $user->name() ?></p>
            </div>
        <?php endif ?>
    </div>
</div>


<?php snippet('footer') ?>
