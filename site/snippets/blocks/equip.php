<li class="c-contactcard c-contactlist__item">
  <img class="c-contactcard__img" src="<?= $block->contact_image()->toFile()->url() ?>"
  alt="<?= $block->content()->contact_name() ?> photo">
  <ul class="c-contactcard__content o-list-bare u-margin-none">
    
    <?php if($block->contact_phone()->isNotEmpty() || $block->contact_mail()->isNotEmpty()):?>
      <li class="c-contactcard__item c-contactcard__infos">
        <?php if($block->contact_name()->isNotEmpty()):?>
          <div class="c-contactcard__name">
            <p> <?= $block->contact_name() ?> </p>
          </div>
          <?php endif?>
          <?php if($block->contact_function()->isNotEmpty()):?>
            <div class="c-contactcard__function">
              <p> <?= $block->contact_function() ?> </p>
            </div>
            <?php endif?>
          </li>
          <?php endif?>
          
    <?php if($block->contact_phone()->isNotEmpty() || $block->contact_mail()->isNotEmpty()):?>
      
      <li class="c-contactcard__item c-contactcard__contacts">
        <?php if($block->contact_phone()->isNotEmpty()):?>
          <a href="tel:<?= $block->contact_phone() ?>" title="Phone" class="c-contactcard__link c-clickable-icon">
            <svg class="c-linkicon c-linkicon--phone" fill="none" height="100%" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path vector-effect="non-scaling-stroke"
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </a>
        <?php endif?>
        
        <?php if($block->contact_mail()->isNotEmpty()):?>
          <a href="mailto:<?= $block->contact_mail()->text() ?>" title="Mail" class=" c-clickable-icon c-contactcard__link">
            <svg class="feather feather-mail" fill="none" height="100%" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path vector-effect="non-scaling-stroke"
              d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline vector-effect="non-scaling-stroke" points="22,6 12,13 2,6" />
            </svg>
          </a>
        <?php endif?>

      </li>
    <?php endif?>

  </ul>
</li>