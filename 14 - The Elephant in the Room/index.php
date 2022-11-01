<?php
require(__DIR__ . '/randomFunction.php');
require "shirtInfo.php";
?>

<link rel="stylesheet" href="style.css">

<body>
    <header>
        <h1>Ten great football shirts</h1>
    </header>
    <br>

    <section class="shirtContainer">
        <a href=""><img src="<?php echo getRandomShirt($shirts); ?>" width="10rem" height="10rem" /></a>
    </section>

    <section class="buttonContainer">
        <button type="button" onClick="refreshPage()">Get another one</button>
    </section>

    <div>
        <?php foreach ($articles as $article) : ?>
            <?php
            $title = $article['title'];
            $img = $article['img'];
            $infoText = $article['infotext'];
            $alt = $article['alt'];
            $source = $article['source'];
            ?>

            <article>
                <h2><?= ucwords("$title"); ?></h2>
                <img src="<?= $img; ?>" alt="<?= $alt; ?>">
                <p class="infoText"><?= "$infoText"; ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</body>

<script>
    function refreshPage() {
        if (true) {
            return window.location.reload();
        }
    }
</script>