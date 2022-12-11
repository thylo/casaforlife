<?php if (site()->mainMenu()->isNotEmpty()): ?>
    
   <nav class="c-mainnav c-mainnav--desk">
        <div class="l-container">
            <ul class="o-list-bare c-menu c-menu--desk o-list-inline" id="js-menu">
                <li class="o-list-bare__item ">
                    <a href="/" class=" c-menu__logo js-menu__logo--desk">
                    <?= svg("/assets/img/svg/logo.svg") ?>
                    </a>
                </li>
                <?= snippet('nav') ?>   
            </ul>
        </div>
   </nav>
    <button class="c-menu-toggle" id="js-menu-toggle">
        <?= svg("/assets/img/svg/menu.svg") ?>
    </button>
    <header class="c-menu c-scroll-menu" id="js-menu-scroll">
        <button class="c-menu-toggle c-scroll-menu__close" id="js-menu-close">
            <?= svg("/assets/img/svg/x.svg") ?>
        </button>
        <nav class="c-mainnav">
            <ul class="o-list-bare u-margin-none c-menu--small">
                <li class="o-list-bare__item">
                    <a href="/" class="u-padding-small c-menu__logo">
                        <?= svg("/assets/img/svg/logo.svg") ?>
                    </a>
                </li>
                <?= snippet('nav') ?>
            </ul>
        </nav>
   </div>
<?php endif; ?>