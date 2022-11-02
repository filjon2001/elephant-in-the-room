<?php
require "header.php";
require "randomFunction.php";
?>

<section class="shirtContainer">
    <a href="shirtInfo.php"><img src="<?php echo getRandomShirt($shirts); ?>" width="10rem" height="10rem" /></a>
</section>

<section class="buttonContainer">
    <button type="button" onClick="refreshPage()">Get another one</button>
</section>

<script>
    function refreshPage() {
        if (true) {
            return window.location.reload();
        }
    }
</script>