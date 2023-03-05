<?php
/** @var \Kirby\Cms\Page $page */
$listedElements = $page->children()->listed()->sortBy('date', 'desc');
$tag = param('tag');
$projects = $page->children();
?>
<?php snippet('header') ?>

    <div class="c-pagesection c-pagesection--brand">
        <div class="l-container">

            <?php snippet('hero/hero') ?>

        </div>
    </div>

    <div id="anchor-projects" class="c-pagesection u-pt-m">
        <div class="l-container">
            <?php if ($listedElements->isNotEmpty()): ?>
            <div class="c-projects">
                <ul class="c-projects__filters o-list-bare">
                    <li class="c-projects__filter-item">
                        <a href="<?= $page->url() ?>#anchor-projects" class="c-projects__filter
            <?= !isset($tag) ? 'active' : '' ?>">Tous</a>
                    </li>
                    <?php foreach ($page->projectTypes()->toStructure() as $type): ?>
                        <li class="c-projects__filter-item">
                            <?= \Kirby\Toolkit\Html::a(url($page->url(), ['params' => ['tag' => $type->id()]]), $type->title(), [
                                'class' => ['c-projects__filter', $tag == $type->id() ? 'active' : ""]
                            ]) ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>

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