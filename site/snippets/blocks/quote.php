<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php
    $text = $block->text();
    $citation = $block->citation();
?>

<div class="c-quote--all">
    <div class="c-quote__icon">
        <img src="/assets/img/svg/quoteIcon.svg" alt="Icone de citation">
    </div>
    <blockquote class="c-quote">
        <?php if ($text): ?>
            <p class="article__quote__text"><?= $text ?></p>
        <?php endif; ?>
        <?php if ($citation): ?>
            <footer class="c-quote__author">
                <?= $citation ?>
            </footer>
        <?php endif; ?>
    </blockquote>
</div>
