<?php $user = $item->author()->toUser()?>

<article class="c-actucard">
    <div class="c-actucard__media">
                <img class="o-fluidimage" src="<?= $item->cover()->toFile()->url() ?>">
    </div>
    <div class="c-actucard__body">
        <h3 class="c-actucard__title"><?= $item->headline() ?></h3> 
        <p class="c-actucard__tagline "><?= $item->subheadline() ?></p>
        <div class="c-actucard__tag-date">
            <ul class="c-actucard__tags">
                <?php foreach ($item->tags()->split(',') as $tag): ?>
                    <li class="c-actucard__tag-item">
                        <p class="c-actucard__tag"><?= $tag ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
            <p class="c-actucard__author-date"><?= $item->date()->toDate('d-m-Y') ?></p>
        </div>
        <a href="<?= $item->url() ?>" class="c-actucard__link c-link">En savoir plus</a>
    </div>
</article>