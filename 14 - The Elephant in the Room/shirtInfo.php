<?php
require "arrays.php"
?>

<link rel="stylesheet" href="style.css">
<div class="presentation">
    <?php foreach ($articles as $article) : ?>
        <?php
        $title = $article['title'];
        $img = $article['img'];
        $infoText = $article['infotext'];
        $alt = $article['alt'];
        $source = $article['source'];
        ?>

        <article class="gridContainer">
            <h2 class="articleHeading"><?= ucwords("$title"); ?></h2>
            <img src="<?= $img; ?>" class="inActionImg" alt="<?= $alt; ?>">
            <p class="infoText"><?= "$infoText"; ?></p>
            <footer>Source: <?= "$source"; ?></footer>
        </article>
    <?php endforeach;
    ?>
</div>