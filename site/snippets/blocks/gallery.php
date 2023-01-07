<?php
/** @var \Kirby\Cms\Block $block */
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');

if($ratio == 'auto') {
    $ratio = 1;
} else {
    $ratio = explode("/",$ratio);
    $ratio = $ratio[1] / $ratio[0];
}?>

<figure class="c-gallery">
        <ul class="c-gallery-images o-list-bare l-grid l-grid--auto">
            <?php foreach ($block->images()->toFiles() as $image): ?>
                <?php $croppedImage = $image->thumb(array(
                    'width'  => 1280,
                    'height' => 1280 * $ratio,
                    'crop'   => $crop));?>
            <li class="o-list-bare__item">
                <img class="o-fluidimage c-gallery__image" src="<?= $croppedImage->url() ?>">
            </li>
            <?php endforeach ?>
        </ul>
        <?php if ($caption->isNotEmpty()): ?>
            <figcaption>
                <p><?= $caption->text() ?></p>
            </figcaption>
        <?php endif ?>
</figure>