<?php

/* $arrlength = count($articles);

for ($x = 0; $x < $arrlength; $x++) {
    echo $articles[$x];
    echo "<br>";
}
 */

$players = array(
    'Thierry Henry' => 2005,
    'Socrates' => 1986,
    'David Beckham' => 2000,
    'Gabriel Batistuta' => 1998,
    'Zinedine Zidane' => 1998,
    'Jesper Blomqvist' => 1995,
    'Glenn Hysén' => 1991,
    'Hugo Sanchez' => 1986,
    'Pelé' => 1977,
    'Paolo Di Canio' => 2000
);

foreach ($players as $player => $year) {
    echo strval("$player, $year.");
    echo "<br>";
}
