<?php 

$deck = [];

$cardvalues = array(
    "A" => 11,
    "2" => 2,
    "3" => 3,
    "4" => 4,
    "5" => 5,
    "6" => 6,
    "7" => 7,
    "8" => 8,
    "9" => 9,
    "10" => 10,
    "J" => 10,
    "Q" => 10,
    "K" => 10
);

$suits = array("club", "diamond", "heart", "spade");

foreach($suits as $suit) {
    $cardnames = array_keys($cardvalues);
    foreach($cardvalues as $cardname => $cardvalue) {
        $card = $suit . " " . $cardname;
        $deck[$card] = $cardvalue;
    }
}

echo $deck["club 7"];

// class Blackjack {



// }



?>