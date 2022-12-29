<?php $user = $item->author()->toUser()?>

<article class="c-actucard">
    <div class="c-actucard__media">
                <img class="o-fluidimage" src="<?= $item->cover()->toFile()->url() ?>">
    </div>
    <div class="c-actucard__body">
        <p class="c-actucard__date"><?= $item->date()->toDate('d-m-Y') ?></p>
        <a href="<?= $item->url() ?>" class="c-link--bare">
            <h3 class="c-actucard__title"><?= $item->headline() ?></h3> </a>
        <p class="c-actucard__tagline "><?= $item->subheadline() ?></p>
        <!-- Tags -->
       <!-- <div class="c-actucard__tags-link">
            <ul class="c-actucard__tags">
                <?php foreach ($item->tags()->split(',') as $tag): ?>
                    <li class="c-actucard__tag-item">
                        <p class="c-actucard__tag"><?= $tag ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <a href="<?= $item->url() ?>" class="c-actucard__link c-link"> En savoir plus</a>
        </div> -->
        <a href="<?= $item->url() ?>" class="c-actucard__link c-link"> En savoir plus</a>
    </div>
</article>