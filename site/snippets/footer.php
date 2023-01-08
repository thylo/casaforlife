</main>
<footer id="footermenu" class="c-sitefooter">
  <div class="l-container">
    <div class="c-sitefooter__content">
      <nav class="c-sitefooter__nav u-padding-large">
        <ul class="o-list-bare u-margin-none">
          <?= snippet('nav') ?>
        </ul>
      </nav>

      <nav class="c-sitefooter__info">
        <div class="c-footerinfo">
          <?= snippet('contactIcons') ?>
          <a class="c-ctalink c-ctalink--white-stroke" href="<?=page('contact')->url() ?>#nous-soutenir">Nous soutenir</a>
        </div>
      </nav>
    </div>
  </div>
</footer>
<?= vite()->js() ?>
</body>

</html>