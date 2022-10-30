<link rel="stylesheet" href="style.css">

<body>
    <header>
        <h1>Ten good football shirts</h1>
    </header>
</body>

<?php
require "randomFunction.php";
require "shirtInfo.php";
?>

<div class="button">
    <button type="button" onClick="refreshPage()">Get another one</button>
</div>

<script>
    function refreshPage() {
        window.location.reload();
    }
</script>