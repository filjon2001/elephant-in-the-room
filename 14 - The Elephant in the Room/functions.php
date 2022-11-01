<?php

$articles = [
    'title' => "Arsenal Home Shirt 2005-2006",
    'infotext' => "The 2005–06 season was the 108th season of competitive football played by Arsenal. It was the final season in which home matches were played at the club's Highbury stadium after 93 years; Arsenal intended to move to its new 60,000 capacity Emirates Stadium in time for the following season. The club ended their Premier League campaign in fourth, having pipped local rivals Tottenham Hotspur to the position on the final day. Arsenal became the first London club to reach a UEFA Champions League final, though lost 2–1 to Barcelona in Paris. In the League Cup the club was eliminated in the semi-finals on aggregate score by Wigan Athletic and knocked out of the FA Cup, against Bolton Wanderers in the fourth round.

    Before the season commenced midfielder Patrick Vieira was sold to Juventus; striker Thierry Henry assumed his club captaincy role. Alexander Hleb was purchased from Stuttgart for an undisclosed fee in July 2005; in the winter transfer window Arsenal signed midfielder Abou Diaby, and forwards Emmanuel Adebayor and Theo Walcott.
    
    Arsenal lost to league champions Chelsea in the 2005 FA Community Shield at the Millennium Stadium. An indifferent start in the league saw Arsenal peak in second position after 13 matches, but a run of three consecutive defeats a month later had effectively ruled them out of title contention. On the final day, they beat Wigan Athletic 4–2 at Highbury; Tottenham Hotspur's defeat at West Ham United meant Arsenal secured fourth place. The team's performances in Europe were more striking; they eliminated Real Madrid, Juventus and Villarreal in the knockout stages. In the 2006 UEFA Champions League Final held at the Stade de France in Paris on 17 May 2006, goalkeeper Jens Lehmann was sent off for a professional foul on Barcelona's Samuel Eto'o. Although defender Sol Campbell gave Arsenal a first half lead from a set piece, the team conceded twice in the final 15 minutes to lose the match.
    
    To mark the final season at Highbury, Arsenal held a valedictory campaign titled 'Highbury – The Final Salute'. The club staged several themed matchdays and a redcurrant home kit replaced the common red to honour the shirts worn in 1913.",
    'img' => "<img src=In action/Arsenal Home Shirt 2005-2006 - In action.jpg>",
    'alt' => "Thierry Henry celebrating a goal in Arsenal's shirt",
    'source' => 'Wikipedia',
];

$arrlength = count($articles);

for ($x = 0; $x < $arrlength; $x++) {
    echo $articles[$x];
    echo "<br>";
}

$players = array(
    'Thierry Henry' => 2005,
    'Socrates' => 1986,
    'David Beckham' => 2001,
    'Gabriel Batistuta' => 1998,
    'Zinedine Zidane' => 1998,
    'Jesper Blomqvist' => 1995,
    'Glenn Hysén' => 1991,
    'Hugo Sanchez' => 1986,
    'Pelé' => 1977,
    'Paolo Di Canio' => 2000
);

foreach ($players as $player => $year) {
    echo "$player, $year.";
    echo "<br>";
}
