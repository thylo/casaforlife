<?php if (page()->mapDisplay()): ?>

    <?php if (page()->mapTitle()->isNotEmpty()): ?>
        <h2 class="c-smalltitle"><?= page()->mapTitle() ?></h2>
    <?php endif ?>
    
  <div class="js-map c-map-container"></div>
<?php endif ?>