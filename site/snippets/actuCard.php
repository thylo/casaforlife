
<article class="c-actucard">
    <a href="<?= $item->url() ?>" class="c-actucard__link">
        <div class="c-actucard__media">
            <img class="o-fluidimage" src="<?= $item->cover()->toFile()->url() ?>">
        </div>
        <div class="c-actucard__body">
            <h3 class="c-actucard__title"><?= $item->title() ?></h3> 
            <p class="c-actucard__tagline "><?= $item->subheadline() ?></p>
        </div>
    </a>
</article>