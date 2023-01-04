<?php if (site()->mainMenu()->isNotEmpty()): ?>
    
   <nav class="c-mainnav c-mainnav--desk">
        <div class="l-container">
            <ul class="o-list-bare c-menu c-menu--desk" id="js-menu">
                <li class="o-list-bare__item ">
                    <a href="/" class=" c-menu__logo js-menu__logo--desk">
                    <?= svg("/assets/img/svg/logo.svg") ?>
                    </a>
                </li>
                <?= snippet('nav') ?>   
            </ul>
        </div>
   </nav>
    <a href="#footermenu" class="c-menu-toggle" id="js-menu-toggle">
        <?= svg("/assets/img/svg/menu.svg") ?>
    </a>
    <div class="c-menu c-scroll-menu" id="js-menu-scroll">
        <a href="#footermenu" class="c-menu-toggle c-scroll-menu__close" id="js-menu-close">
            <?= svg("/assets/img/svg/x.svg") ?>
        </a>
        <nav class="c-mainnav c-mainnav--phone">
            <ul class="o-list-bare c-menu--small">
                <li class="c-menu__item o-list-bare__item">
                    <a href="/" class="u-padding-small c-menu__logo">
                        <?= svg("/assets/img/svg/logo.svg") ?>
                    </a>
                </li>
                <?= snippet('nav') ?>
            </ul>
        </nav>
   </div>
<?php endif; ?>