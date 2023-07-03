<?php
/** @var \Kirby\Cms\Page $item */
$user = $item->author()->toUser();
$url = $item->url();
$title = $item->headline();
$description = $item->subheadline();
$location = $item->location()->yaml();
$long = $location['lon'];
$lat = $location['lat'];
$coverUrl = $item->cover()->toFile()->thumb(['width' => 1000, 'height' => 600, 'crop' => true, 'quality' => 60])->url();
$date = $item->date()->toDate('d-m-Y');
?>

<article class="c-projectcard js-projectcard" data-link="<?= $url ?>" data-date="<?= $date ?>" data-name="<?= $title ?>" data-long="<?= $long ?>" data-lat="<?= $lat ?>">
    <a href="<?= $url ?>" class="c-projectcard__media">
        <?php if ($coverUrl): ?>
            <img class="o-fluidimage" src="<?= $coverUrl ?>">
        <?php endif; ?>
    </a>
    <div class="c-projectcard__body">
        <?php if ($date): ?>
            <p class="c-projectcard__date"><?= $date ?></p>
        <?php endif; ?>
        <a href="<?= $url ?>" class="c-link--bare">
            <?php if ($title): ?>
                <h3 class="c-projectcard__title"><?= $title ?></h3>
            <?php endif; ?>
        </a>
        <?php if ($description): ?>
            <p class="c-projectcard__tagline"><?= $description ?></p>
        <?php endif; ?>
        <!-- Tags -->
       <!-- <div class="c-projectcard__tags-link">
            <ul class="c-projectcard__tags">
                <?php foreach ($item->tags()->split(',') as $tag): ?>
                    <li class="c-projectcard__tag-item">
                        <p class="c-projectcard__tag"><?= $tag ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <a href="<?= $url ?>" class="c-projectcard__link c-link"> En savoir plus</a>
        </div> -->
        <a href="<?= $url ?>" class="c-projectcard__link c-link"> En savoir plus</a>
    </div>
</article>
