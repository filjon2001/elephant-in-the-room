<?php
require __DIR__ . "/header.php";
require __DIR__ . "/randomFunction.php";

$shirt = getRandomShirt($shirts);
?>

<section class="shirtContainer">
    <a href="shirtInfo.php?shirtIndex=<?= $shirtIndex ?>"><img src="<?php echo $shirt; ?>" width="10rem" height="10rem" /></a>
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