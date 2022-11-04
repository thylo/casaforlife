<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="o-wrapper u-padding-vertical-large">
  <h1><?= $block->title()->html() ?></h1>
  <div>
    <?= $block->description()->markdown() ?>
  </div>

  <ul class="u-padding-vertical-large o-list-bare c-consulting-services">

    <?php foreach ($block->services()->toStructure() as $service): ?>
      <li class="o-list-bare__item">
        <div class="c-consulting-service">

          <div class="c-consulting-service__content">
            <?php if ($service->service_image()->isNotEmpty()): ?>
              <div class="u-margin-bottom">
                <?= $service->service_image()->toFile()->resize(250, 250) ?>
              </div>
            <?php endif; ?>
            <h3><?= $service->title() ?></h3>
            <div class="">
              <div class="c-service__description"><?= $service->description()->markdown() ?></div>
              <div class="c-service__prices">
                <?= snippet('prices', ['prices' => $service->prices()]) ?>
              </div>
            </div>
          </div>
        </div>
      </li>

    <?php endforeach; ?>
  </ul>
</div>