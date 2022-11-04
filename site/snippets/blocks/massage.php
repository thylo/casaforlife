<?php
/** @var Kirby\Cms\Block $block */
?>
<div class="o-wrapper u-padding-vertical-huge c-massages">
  <h1><?= $block->title() ?></h1>
  <div>
    <?= $block->intro() ?>
  </div>
  <ul class="u-margin-top o-list-bare">
    {%for service in page.services%}
    <li class="o-list-bare__item c-massage">
      <h3 class="c-massage__title">{{service.title?></h3>
      <div class="o-layout">
        <div class="o-layout__item u-1/2@tablet">
          <div class="c-massage__description">{{service.description()?></div>
          {% assign prices = services.prices %}
          {% include prices.html %}
        </div>
        <div class="o-layout__item u-1/2@tablet">
          {% include cloudinary.html path=page.image options="w_350,c_fill,g_face,f_auto" alt=page.image
          %}
        </div>
      </div>
    </li>
    {%endfor%}
  </ul>
</div>