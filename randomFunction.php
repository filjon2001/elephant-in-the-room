<?php

declare(strict_types=1);

require __DIR__ . "/arrays.php";

function getRandomShirt(array $shirts): string
{
    global $shirtIndex;
    $shirtIndex = array_rand($shirts);
    return $shirts[$shirtIndex];
}
