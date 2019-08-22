<?php 

# CREATE THE CARDS DECK

// Array in which the cards and values will be stored
$deck = [];

// Array with the card values
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

// Array with the suits names
$suits = array("club", "diamond", "heart", "spade");

// loop that creates the card deck and saves it in the $deck
foreach($suits as $suit) {

    // gets the key and value from $cardsvalues
    foreach($cardvalues as $cardname => $cardvalue) {

        // This concatenates $suit-value and $cardname-key
        $card = $suit . " " . $cardname;
        // Add the created card-key and cardvalue to the deck-array
        $deck[$card] = $cardvalue;
    }
}


# BLACKJACK PLAYERS

// Constructor to create the players
class Blackjack {
    
    public function hit() {
        echo "new cards please";
        global $deck;
        
    }

    public function stand() {
        echo "no card for me, I skip this one";
    }

    public function surrender() {
        echo "whoops I lost";
    }

}

$player1 = new Blackjack;
$dealer = new Blackjack;

echo $player1->hit();

?>