<?php
require "header.php";
require "randomFunction.php";
?>

<section class="shirtContainer">
    <a href=""><img src="<?php echo getRandomShirt($shirts); ?>" width="10rem" height="10rem" /></a>
</section>

<section class="buttonContainer">
    <button type="button" onClick="refreshPage()">Get another one</button>
</section>

<?php
require "shirtInfo.php";
?>

<script>
    function refreshPage() {
        if (true) {
            return window.location.reload();
        }
    }
</script>