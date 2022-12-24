<?php $user = $item->author()->toUser()?>

<article class="c-actucard">
    <a href="<?= $item->url() ?>" class="c-actucard__link">
        <div class="c-actucard__media">
            <img class="o-fluidimage" src="<?= $item->cover()->toFile()->url() ?>">
        </div>
        <div class="c-actucard__body">
            <h3 class="c-actucard__title"><?= $item->title() ?></h3> 
            <p class="c-actucard__tagline "><?= $item->subheadline() ?></p>
            <span class="c-actucard__author-date"><?= $item->date()->toDate('d-m-Y') ?></span>
            <ul class="c-actucard__tags">
                <?php foreach ($item->tags()->split(',') as $tag): ?>
                    <li class="c-actucard__tag-item">
                        <span class="c-actucard__tag"><?= $tag ?></span>
                    </li>
                <?php endforeach ?>
            </ul>
            <div class="actucard__author">
                <p class="c-actucard__author-name"><?= $user->username() ?></p>
            </div>
        </div>
    </a>
</article>