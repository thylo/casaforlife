


<?php snippet('header') ?>

<div class="l-container">

<?php
$listedElements = $page->children()->listed();
?>

<?php if($listedElements->count()): ?>
    <ul class="l-grid l-grid--2cols@small l-grid--4cols@large">
<?php endif; ?>


<?php foreach ($listedElements as $item): ?>
    <li>
        <?= snippet('actuCard', ['item' => $item]) ?>
    </li>
<?php endforeach; ?>

<?php if($listedElements->count()): ?>
</ul>
<?php endif; ?>

</div>


<?php snippet('footer') ?>