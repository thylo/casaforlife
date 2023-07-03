<?php
/** @var Kirby\Cms\Block $block */
?>

<?php
$backgroundImage = $block->background_image()->toFile()->url();
$title = $block->title();
$body = $block->body()->markdown();
?>

<?php if ($backgroundImage): ?>
  <div class="c-contact" style="--bg-image:url(<?= $backgroundImage ?>)">
    <div class="c-contact__wrapper o-wrapper">
      <div class="c-contact__content u-padding u-1/2@tablet">
        <?php if ($title): ?>
          <h1><?= $title ?></h1>
        <?php endif; ?>
        <?php if ($body): ?>
          <div><?= $body ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
