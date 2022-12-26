

<?php $bigTitle = str_replace("(((","<span>", $text) ?>
<?php $newBigTitle = str_replace(")))","</span>", $bigTitle) ?>

<h2 class="c-smalltitle">
    <?= $newBigTitle ?>
</h2>