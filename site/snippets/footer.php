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
        <div class=" o-list-bare c-footerinfo">
          <ul class="u-margin-none o-list-bare c-footercontact">
            <?php if(site()->phone()->isNotEmpty()): ?>
              <li class="c-footercontact__item">
                <a href="tel:<?= site()->phone()->value() ?>" title="Phone" class="c-footercontact__link c-linkicon">
                  <svg class="c-linkicon" fill="none" height="100%" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path vector-effect="non-scaling-stroke"
                      d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                  </svg>
                </a>
            </li>
            <?php endif ?>
            <?php if(site()->email()->isNotEmpty()): ?>
              <li class="c-footercontact__item">
                <a href="mailto:<?= site()->email()->value() ?>" title="Mail" class="c-footercontact__link c-linkicon">
                  <svg class="feather feather-mail" fill="none" height="100%" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path vector-effect="non-scaling-stroke"
                      d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline vector-effect="non-scaling-stroke" points="22,6 12,13 2,6" />
                  </svg>
                </a>
              </li>
            <?php endif ?>

            <?php if(site()->address()->isNotEmpty()): ?>
              <li class="c-footercontact__item">
                <a href="<?= site()->address()->value() ?>" target="_blank" title="Adress"
                  class="c-footercontact__link c-linkicon">
                  <svg class="feather feather-map-pin" fill="none" height="100%" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path vector-effect="non-scaling-stroke" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                    <circle vector-effect="non-scaling-stroke" cx="12" cy="10" r="3" />
                  </svg>
                </a>
              </li>
            <?php endif ?>
          </ul>
          <a class="c-ctalink c-ctalink--white-stroke" href="/">Nous soutenir</a>
        </div>
      </nav>
    </div>
  </div>
</footer>
<?= vite()->js() ?>
</body>

</html>