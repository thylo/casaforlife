<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop = $block->crop()->isTrue();
$ratio = $block->ratio()->or('auto');

if ($ratio == 'auto') {
    $ratio = 1;
} else {
    $ratio = explode("/", $ratio);
    $ratio = $ratio[1] / $ratio[0];
} ?>

<figure class="c-gallery">
    <?php if ($block->title()->isNotEmpty()): ?>
        <h3 class="c-gallery__title c-smalltitle"><?= $block->title() ?></h3>
    <?php endif ?>
    <ul class="c-gallery-images o-list-bare l-grid l-grid--auto js-gallery">
        <?php foreach ($block->images()->toFiles() as $image): ?>
            <?php $croppedImage = $image->thumb(array(
                'width' => 1280,
                'height' => 1280 * $ratio,
                'crop' => $crop)); ?>
            <li class="o-list-bare__item" data-src="<?= $image->url() ?>">
                <figure>
                    <a href="<?= $image->url() ?>">
                        <img alt="<?= $image->alt() ?>" class="o-fluidimage c-gallery__image"
                             src="<?= $croppedImage->url() ?>"></a>
                    <?php if ($image->alt()): ?>
                        <figcaption><?= $image->alt() ?></figcaption>
                    <?php endif ?>
                </figure>
            </li>
        <?php endforeach ?>
    </ul>
    <?php if ($caption->isNotEmpty()): ?>
        <figcaption>
            <p><?= $caption->text() ?></p>
        </figcaption>
    <?php endif ?>
</figure>