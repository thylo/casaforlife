<?php /** @var \Kirby\Cms\Block $block */ ?>
<<?= $level = $block->level()->or('h2') ?> class="c-heading"><?= $block->text() ?></<?= $level ?>>