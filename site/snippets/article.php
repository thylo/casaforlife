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
            <div class="l-container l-container--copy">
            <div class="c-article__content">
                <?php foreach ($page->text()->toBlocks() as $block): ?>
                    <?php if ($block->type() == 'image'): ?>
                            <img class="o-fluidimage c-article__contentimage" src="<?= $block->image()->toFile()->url() ?>">
                        <?php elseif (true): ?>
                            <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
                        <?= $block ?>
                    </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
            </div>
        </div>
    </div>
</div>