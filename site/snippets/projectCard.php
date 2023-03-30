<?php 
    $user = $item->author()->toUser();
    $url = $item->url();
    $title = $item->headline();
    $description = $item->subheadline();
    $location = $item->location()->yaml();
    $long = $location['lon'];
    $lat = $location['lat'];
?>

<article class="c-projectcard js-projectcard" data-link="<?= $url ?>" data-date="<?= $item->date()->toDate('d-m-Y') ?>" data-name="<?= $title ?>" data-long="<?= $long ?>" data-lat="<?= $lat ?>">
    <a href="<?= $url ?>" class="c-projectcard__media">
        <img class="o-fluidimage" src="<?= $item->cover()->toFile()->thumb(['width' => 1000, 'height' => 600, 'crop' => true, 'quality' => 60])->url()?>">
    </a>
    <div class="c-projectcard__body">
        <p class="c-projectcard__date"><?= $item->date()->toDate('d-m-Y') ?></p>
        <a href="<?= $url ?>" class="c-link--bare">
            <h3 class="c-projectcard__title"><?= $title ?></h3> </a>
        <p class="c-projectcard__tagline "><?= $description ?></p>
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