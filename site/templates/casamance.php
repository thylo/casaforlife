<?php snippet('header') ?>

<?php
/** @var \Kirby\Cms\Page $page */
$projectsPage = page('projects');
$projects = $projectsPage->children();
?>

<!-- hero -->
<div class="c-pagesection c-pagesection--brand c-pagesection--secondary">
    <div class="l-container">
        <?php snippet('hero/hero--secondary') ?>
    </div>
</div>

<!-- map -->
<div class="c-pagesection c-pagesection--notop">
    <div class="l-container">
        <?php snippet('map') ?>
    </div>
</div>

<ul class="c-map__projects c-map__projects--display-none">
    <?php foreach ($projects as $item): ?>
        <li>
            <?php snippet('projectCard', ['item' => $item]) ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php if ($page->blockContent()->isNotEmpty()): ?>
    <div class="c-pagesection c-pagesection--notop">
        <div class="l-container">
            <div class="c-smallsection-group">
                <?php foreach ($page->blockContent()->toBlocks() as $block): ?>
                    <?php snippet(
                        'blocks/' . $block->type(),
                        [
                            'block' => $block,
                            'theme' => 'dark'
                        ]
                    ) ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>

<?php snippet('footer') ?>
