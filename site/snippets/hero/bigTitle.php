

<?php $bigTitle = str_replace("(((","<span>", $text) ?>
<?php $newBigTitle = str_replace(")))","</span>", $bigTitle) ?>

<h1 class="c-herobanner__title c-pagetitle">
            <?= $newBigTitle ?>
</h1>