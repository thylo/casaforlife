<?php
/** @var Kirby\Cms\Block $block */
?>

<div class="c-hero">
    <img
            src="<?= $block->hero_image()->toFile()->url() ?>"
            srcset="<?= $block->hero_image()->toFile()->srcset() ?>"/>
</div>