<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
?>
<?= console_log($page->children()->listed()->data()); ?>



<?php snippet('header') ?>


<div class="o-container">

<?php
$listedElements = $page->children()->listed();
?>

<?php if($listedElements->count()): ?>
    <ul>
<?php endif; ?>

    <?php foreach ($listedElements as $article): ?>

    <li>
    <h4><?= $article->title() ?></h4> 
    <p><?= $article->subheadline() ?></p>
    <img class="o-fluidimage" src="<?= $article->cover()->toFile()->url() ?>">  
    </li>

    <?php endforeach; ?>

<?php if($listedElements->count()): ?>
</ul>
<?php endif; ?>

</div>


<?php snippet('footer') ?>