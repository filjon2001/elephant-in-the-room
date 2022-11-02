<?php

declare(strict_types=1);

require "arrays.php";

function getRandomShirt(array $shirts): string
{

    return $shirts[array_rand($shirts)];

    // $randomShirt = array_rand($shirts);
    // $randomImage = $shirts[$randomShirt];

    // return $randomImage;
}
