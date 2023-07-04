<?php 
    $contactImage = $block->contact_image()->toFile();
    $contactName = $block->contact_name();
    $contactPhone = $block->contact_phone();
    $contactMail = $block->contact_mail();
    $contactFunction = $block->contact_function();
?>

<li class="c-contactcard c-contactlist__item">
    <?php if ($contactImage && $contactImage->isNotEmpty()): ?>
        <img class="c-contactcard__img" src="<?= $contactImage->url() ?>"
            alt="<?= $contactName ?> photo">
    <?php endif; ?>
    <ul class="c-contactcard__content o-list-bare u-margin-none">
        <li class="c-contactcard__item c-contactcard__infos">
            <?php if ($contactName && $contactName->isNotEmpty()): ?>
                <div class="c-contactcard__name">
                    <p><?= $contactName ?></p>
                </div>
            <?php endif; ?>
            <?php if ($contactFunction && $contactFunction->isNotEmpty()): ?>
                <div class="c-contactcard__function">
                    <p><?= $contactFunction ?></p>
                </div>
            <?php endif; ?>
        </li>
        <?php if ($contactPhone && $contactPhone->isNotEmpty() || $contactMail && $contactMail->isNotEmpty()): ?>
            <li class="c-contactcard__item c-contactcard__contacts">
                <?php if ($contactPhone && $contactPhone->isNotEmpty()): ?>
                    <a href="tel:<?= $contactPhone ?>" title="Phone"
                        class="c-contactcard__link c-clickable-icon">
                        <svg class="c-linkicon c-linkicon--phone" fill="none" height="100%" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path vector-effect="non-scaling-stroke"
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if ($contactMail && $contactMail->isNotEmpty()): ?>
                    <a href="mailto:<?= $contactMail->text() ?>" title="Mail"
                        class="c-clickable-icon c-contactcard__link">
                        <svg class="feather feather-mail" fill="none" height="100%" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path vector-effect="non-scaling-stroke"
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline vector-effect="non-scaling-stroke" points="22,6 12,13 2,6" />
                        </svg>
                    </a>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    </ul>
</li>
