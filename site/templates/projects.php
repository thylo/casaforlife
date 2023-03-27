<?php
/** @var \Kirby\Cms\Page $page */
$listedElements = $page->children()->listed()->sortBy('date', 'desc');
$tag = param('tag');
$projects = $page->children();
?>
<?php snippet('header') ?>

    <div class="c-pagesection c-pagesection--brand c-pagesection--secondary">
        <div class="l-container">

            <?php snippet('hero/hero--secondary') ?>

        </div>
    </div>

    <div class="c-pagesection c-pagesection--notop">
        <div class="l-container">
            <?php snippet('map') ?>
        </div>
    </div>

    <div id="anchor-projects" class="c-pagesection u-pt-m">
        <div class="l-container">
            <?php foreach ($page->projectTypes()->toStructure() as $type): ?>
                <div class="c-projects__section">
                    <h3 class="c-projects__title c-smalltitle"><?= $type->title() ?></h3>
                    <?php if ($projects->count()): ?>
                        <ul class="l-grid l-grid--2cols@small l-grid--3cols@large">
                            <?php foreach ($projects->filterBy('projectType', $type->id(), ',') as $item): ?>
                                <li>
                                    <?= snippet('projectCard', ['item' => $item]) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    </div>
<?php snippet('footer') ?>