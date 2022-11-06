<?php foreach (site()->content()->get("mainMenu")->toPages() as $index => $item): ?>
    <li class="o-list-bare__item o-list-inline__item c-menu__item menu-item-<?= $index ?><?= (site()->page()->id() == $item->id()) ? " active" : "" ?>">
        <a href="<?= url($item) ?>" title="Go to <?= $item ?>" class="c-menu__link">
            <?= $item->title() ?>
        </a>
    </li>
<?php endforeach; ?>
    <li class="o-list-bare__item o-list-inline__item c-menu__item menu-item-language">
            <a href="/" title="Change the language"" class="c-menu__link">
                Fr
            </a>
    </li>