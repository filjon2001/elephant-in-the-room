<link rel="stylesheet" href="style.css">

<?php
require(__DIR__ . '/randomFunction.php');
// require "shirtInfo.php";
?>

<body>
    <header>
        <h1>Ten good football shirts</h1>
    </header>
    <br>

    <section class="shirtContainer">
        <a href=""><img src="<?php echo getRandomShirt($shirts); ?>" width="10rem" height="10rem" /></a>
    </section>

    <section class="buttonContainer">
        <button type="button" onClick="refreshPage()">Get another one</button>
    </section>
</body>

<script>
    function refreshPage() {
        window.location.reload();
    }
</script>