<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--actu">
    <div class="c-actu_head">
        <div class="c-actu__media">
            <img class="o-fluidimage c-actu__cover" src="<?= $page->cover()->toFile()->url() ?>">
        </div>
        <div class="l-container l-container--copy">
            <div class="c-actu__body">
                <h1 class="c-actu__title"><?= $page->headline() ?></h1>
                <!-- Tags -->
                <!-- <div class="c-actu__tags-date">
                    <div class="c-actu__tags-link">
                        <ul class="c-actu__tags o-list-bare">
                            <?php foreach ($page->tags()->split(',') as $tag): ?>
                                <li class="c-actu__tag-item">
                                    <p class="c-actucard__tag"><?= $tag ?></p>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <p class="c-actu__date"><?= $page->date()->toDate('d-m-Y') ?></p>
                </div> -->
                <p class="c-actu__date"><?= $page->date()->toDate('d-m-Y') ?></p>
            </div>
        </div>
        <div class="l-container l-container--copy">
        <div class="c-actu__content">
            <?php foreach ($page->text()->toBlocks() as $block): ?>
                <?php if ($block->type() == 'image'): ?>
                        <img class="o-fluidimage c-actu__contentimage" src="<?= $block->image()->toFile()->url() ?>">
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

<?php snippet('footer') ?>
