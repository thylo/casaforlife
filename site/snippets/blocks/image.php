<?php
  $alt      = $block->alt();
  $caption  = $block->caption();
  $contain  = $block->crop()->isFalse();
  $link     = $block->link();
  $ratio    = $block->ratio()->or('auto');
  $class    = $ratio != 'auto' ? 'img' : 'auto';
  $src      = null;
  $srcValue      = null;
  $lightbox = $link->isEmpty();

if ($block->location() == 'web') {
  $src      = $block->src();
  $srcValue = $src->escape('attr');
} elseif ($image = $block->image()->toFile()) {
  $alt = $alt->or($image->alt());
  $src = $srcValue = $image->url();
}

if ($ratio !== 'auto') {
  $ratio = explode("/",$ratio);
  $w = $ratio[0] ?? 1;
  $h = $ratio[1] ?? 1;
}

$attrs = attr([
  'class'         => $class,
  'data-contain'  => $contain,
  'data-lightbox' => $lightbox,
  'href'          => $link->or($src),
  'style'         => '--w:' . $w . '; --h:' . $h,
]);

?>
<?php if ($srcValue) : ?>
  <figure>
      <img class="o-fluidimage" src="<?= $srcValue ?>" alt="<?= $alt->esc()?>">
    <?php if ($caption->isNotEmpty()) : ?>
      <figcaption>
        <?= $caption ?>
      </figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>