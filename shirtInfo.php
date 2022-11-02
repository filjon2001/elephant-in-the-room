<?php
require __DIR__ . "/arrays.php"
?>

<link rel="stylesheet" href="style.css">
<div class="presentation">
    <?php
    $article = $articles[$_GET["shirtIndex"]];

    $title = $article['title'];
    $img = $article['img'];
    $infoText = $article['infotext'];
    $alt = $article['alt'];
    $source = $article['source'];
    ?>

    <h2 class="articleHeading"><?= ucwords("$title"); ?></h2>
    <article class="gridContainer">
        <img src="<?= $img; ?>" class="inActionImg" alt="<?= $alt; ?>">
        <p class="infoText"><?= "$infoText"; ?></p>
    </article>
    <footer>Source: <?= "$source"; ?></footer>
</div>