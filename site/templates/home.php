<?php snippet('header') ?>

<div class="l-container">

  <?php snippet('hero') ?>

  <?php if ($photographyPage = page('photography')): ?>
  <ul class="l-grid">
    <?php foreach ($photographyPage->children()->listed() as $album): ?>
    <li>
      <a href="<?= $album->url() ?>">
        <figure>
          <?php
      /*
      The `cover()` method defined in the `album.php`
      page model can be used everywhere across the site
      for this type of page
      We can automatically resize images to a useful
      size with Kirby's built-in image manipulation API
      */
          ?>
          <?php if ($cover = $album->cover()): ?>
          <?= $cover->resize(1024, 1024) ?>
            <?php endif ?>
            <figcaption>
              <span>
                <span class="example-name">
                  <?= $album->title()->esc() ?>
                </span>
              </span>
            </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>

</div>

<?php snippet('footer') ?>