<?php
require __DIR__ . "/arrays.php"
?>

<link rel="stylesheet" href="style.css">
<div class="presentation">
    <?php
    $article = $articles[$_GET["shirtIndex"]]; /* Connecting small icon to the right shirtInfo-page */

    $title = $article['title'];
    $img = $article['img'];
    $infoText = $article['infotext']; /* Creating variables out of array info */
    $alt = $article['alt'];
    $source = $article['source'];
    ?>

    <h2 class="articleHeading"><?= ucwords("$title"); ?></h2>
    <div class="emojis"><?php for ($x = 0; $x <= 52; $x++) {
                            echo "✦✧"; /* Frame made of emojis */
                        } ?></div>
    <article class="gridContainer">
        <img src="<?= $img; ?>" class="inActionImg" alt="<?= $alt; ?>">
        <p class="infoText"><?= "$infoText"; ?></p> <!-- Setting up shirtInfo-page -->
    </article>
    <footer>Source: <?= "$source"; ?></footer>
    <div class="emojis"><?php for ($x = 0; $x <= 52; $x++) {
                            echo "✦✧"; /* Frame made of emojis */
                        } ?></div>
</div>