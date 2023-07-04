<?php
$menuItems = site()->content()->get("mainMenu")->toPages();
?>

<?php foreach ($menuItems as $index => $item): ?>
    <?php
    $isActive = (site()->page()->id() == $item->id());
    $menuClass = "o-list-bare__item c-menu__item menu-item-$index" . ($isActive ? " active" : "");
    $menuUrl = url($item);
    $menuTitle = $item->title();
    ?>
    <li class="<?= $menuClass ?>">
        <a href="<?= $menuUrl ?>" title="Go to <?= $menuTitle ?>" class="c-menu__link c-link c-link--invert">
            <?= $menuTitle ?>
        </a>
    </li>
<?php endforeach; ?>
