<?php
/** @var Kirby\Cms\Block $block */
?>

<?php
$imageUrl = $block->section_image()->toFile()->url();
$title = $block->title();
$body = $block->body()->markdown();
?>

<?php if ($imageUrl): ?>
    <div class="c-split" style="--bg-image:url(<?= $imageUrl ?>)">
        <div class="c-split__wrapper">
            <div class="o-wrapper u-padding-vertical-huge">
                <div class="o-layout">
                    <div class="o-layout__item u-1/2@tablet u-1/2@desktop">
                        <div>
                            <?php if ($title): ?>
                                <h1><?= $title ?></h1>
                            <?php endif; ?>
                            <?php if ($body): ?>
                                <?= $body ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
