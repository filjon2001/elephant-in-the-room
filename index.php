<?php
require __DIR__ . "/header.php";
require __DIR__ . "/randomFunction.php";

$shirt = getRandomShirt($shirts);
?>
<!-- Making a variable out of function in randomFunction.php -->

<section class="shirtContainer">
    <a href="shirtInfo.php?shirtIndex=<?= $shirtIndex ?>">
        <!-- Connecting small icon to shirtInfo-page -->
        <img src="<?php echo $shirt; ?>" width="10rem" height="10rem" />
    </a>
</section> <!-- Import small shirt icons from variable -->

<section class="buttonContainer">
    <button type="button" onClick="refreshPage()">Get another one</button>
</section> <!-- Creating button -->

<script>
    function refreshPage() {
        if (true) {
            return window.location.reload();
        }
    }
</script> <!-- Reloads page when button is clicked -->