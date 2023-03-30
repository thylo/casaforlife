<?php

$url = $block->url();

  $url_parts = parse_url($url);
  if ($url_parts['host'] === 'youtu.be') {
      $video_id = ltrim($url_parts['path'], '/');
  } elseif ($url_parts['host'] === 'www.youtube.com' && isset($url_parts['query'])) {
      parse_str($url_parts['query'], $query_vars);
      if (isset($query_vars['v'])) {
          $video_id = $query_vars['v'];
      }
  }

  if (isset($video_id)) {
    $embedUrl = 'https://www.youtube.com/embed/' . $video_id;
  } else {
    $original_url = $url;
  }

?>

<?php if ($block->url()->isNotEmpty()): ?>
<figure class="c-article__video">
  <div class="o-fluidvideo">
    <iframe allow="autoplay; fullscreen" allowfullscreen src="<?= $embedUrl ?>"></iframe>
  </div>
  <?php if ($block->caption()->isNotEmpty()): ?>
    <figcaption><?= $block->caption() ?></figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
<?php
