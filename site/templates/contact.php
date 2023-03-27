<?php
/** @var Kirby\Cms\Block $block */
?>

<?php snippet('header') ?>

<div class="c-pagesection c-pagesection--brand c-pagesection--secondary">
  <div class="l-container">
    
  <?php snippet('hero/hero--secondary') ?>w

  </div>
</div>

<?php if($page->equipCard()->isNotEmpty()):?>
  <div class="c-pagesection c-pagesection--notop">
    <div class="l-container">
      <?php if($page->equipTitle()->isNotEmpty()):?>
        <h2 class="c-smalltitle"><?= $page->equipTitle() ?></h2>
      <?php endif ?>
        <ul class="o-listbare l-grid l-grid--auto">
          <?php foreach ($page->equipCard()->toBlocks() as $block): ?>
              <?php snippet(
                'blocks/' . $block->type(),
                [
                  'block' => $block,
                  'theme' => 'dark'
                ]
              ) ?>
            <?php endforeach ?>
          </div>
        </ul>
  </div>
<?php endif ?>

<?php if($page->soutenirTitle()->isNotEmpty()):?>
  <div class="c-pagesection c-pagesection--notop">
    <div class="l-container">
      <div class="c-smallsection l-grid l-grid--2cols@medium">
        <?php if ($page->soutenirImage()->isNotEmpty()): ?>
          <div class="c-smallsection__media c-smallsection-media">
            <img class="o-fluidimage c-smallsection__cover" src="<?= $page->soutenirImage()->toFile()->url() ?>">
          </div>
          <?php endif ?>
          <div id="nous-soutenir" class="c-smallsection__content">
          <?php if($page->soutenirTitle()->isNotEmpty()):?>
            <h2 class="c-smallsection__title"><?= $page->soutenirTitle() ?></h2>
          <?php endif ?>
          <div><?= $page->soutenirContent()->kt() ?></div>
        </div>
    </div>
  </div>
<?php endif ?>

<?php if($page->blockContent()->isNotEmpty()):?>
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
  </div>
<?php endif ?>

<?php if($page->contactTitle()->isNotEmpty()):?>
  <div class="c-pagesection">
    <div class="l-container">
      <div class="c-smallsection l-grid l-grid--2cols@medium">
        <?php if ($page->contactImage()->isNotEmpty()): ?>
            <div class="c-smallsection__media">
                <img alt="<?= $page->contactImage()->toFile()->alt()->esc() ?>" class="o-fluidimage c-smallsection__cover" src="<?= $page->contactImage()->toFile()->url() ?>">
            </div>
        <?php endif ?>
        <div class="c-smallsection__content c-contact__content" id="contact-us">
            <div class="c-smallsection__text">
                <?php if($page->contactTitle()->isNotEmpty()): ?>
                    <h2 class="c-smallsection__title"><?= $page->title() ?></h2>
                <?php endif ?>
                    <div><?= $page->contactContent()->kt() ?></div>
            </div>
            <div class="c-contact__icons">
              <?php if(site()->email()->isNotEmpty()): ?>
                  <a href="mailto:<?= site()->email()->value() ?>" title="Mail" class="c-contact__iconlink c-contact__iconlink--mail">
                      <svg class="feather feather-mail" fill="none" height="100%" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path vector-effect="non-scaling-stroke"
                          d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                      <polyline vector-effect="non-scaling-stroke" points="22,6 12,13 2,6" />
                      </svg>
                      <?= site()->email()->value() ?>
                  </a>
              <?php endif ?>
              <div class="c-contact__secondary-icons">
                  <?php if(site()->phone()->isNotEmpty()): ?>
                      <a href="tel:<?= site()->phone()->value() ?>" title="Téléphone" class="c-contact__iconlink c-clickable-icon">
                          <svg class="c-linkicon" fill="none" height="100%" stroke="currentColor" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path vector-effect="non-scaling-stroke"
                              d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                          </svg>
                      </a>
                  <?php endif ?>
                  <?php if(site()->address()->isNotEmpty()): ?>
                      <a href="<?= site()->address()->value() ?>" target="_blank" title="Adresse" class="c-contact__iconlink c-clickable-icon">
                          <svg class="feather feather-map-pin" fill="none" height="100%" stroke="currentColor"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path vector-effect="non-scaling-stroke" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                          <circle vector-effect="non-scaling-stroke" cx="12" cy="10" r="3" />
                          </svg>
                      </a>
                  <?php endif ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>
 

<?php snippet('footer') ?>