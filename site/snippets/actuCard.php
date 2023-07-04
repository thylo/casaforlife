<?php
$user = $item->author()->toUser();
$url = $item->url();
$cover = $item->cover()->toFile()->thumb(['width' => 1000, 'height' => 600, 'crop' => true, 'quality' => 60])->url();
$date = $item->date()->toDate('d-m-Y');
$headline = $item->headline();
$subheadline = $item->subheadline();
$tags = $item->tags()->split(',');
?>

<article class="c-actucard">
    <a href="<?= $url ?>" class="c-actucard__media">
        <img class="o-fluidimage" src="<?= $cover ?>">
    </a>
    <div class="c-actucard__body">
        <?php if (isset($date) && $date!== ''): ?>
            <p class="c-actucard__date"><?= $date ?></p>
        <?php endif ?>
        <a href="<?= $url ?>" class="c-link--bare">
            <?php if (isset($headline) && $headline->isNotEmpty()): ?>
                <h3 class="c-actucard__title"><?= $headline ?></h3>
            <?php endif ?>
        </a>
        <?php if (isset($subheadline) && $subheadline->isNotEmpty()): ?>
            <p class="c-actucard__tagline"><?= $subheadline ?></p>
        <?php endif ?>
        <!-- Tags -->
        <!-- <div class="c-actucard__tags-link">
            <ul class="c-actucard__tags">
                <?php foreach ($tags as $tag): ?>
                    <li class="c-actucard__tag-item">
                        <p class="c-actucard__tag"><?= $tag ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <a href="<?= $url ?>" class="c-actucard__link c-link"> En savoir plus</a>
        </div> -->
        <a href="<?= $url ?>" class="c-actucard__link c-link"> En savoir plus</a>
    </div>
</article>
