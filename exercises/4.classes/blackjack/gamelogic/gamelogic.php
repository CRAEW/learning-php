<?php
session_start(); // Start the session
include 'gamelogic/carddeck.php';
include 'gamelogic/blackjack.php';

// Create new players
$player = new Blackjack();
$dealer = new Blackjack();

$playerwins = $_SESSION['playerwins'];
$dealerwins = $_SESSION['dealerwins'];

// Put hand and score arrays into session
$player->hand = $_SESSION['playerhand'];
$player->score = $_SESSION['playerscore'];

$dealer->hand = $_SESSION['dealerhand'];
$dealer->score = $_SESSION['dealerscore'];


// If array hand is empty then start game
if((!isset($_SESSION['playerhand'])) AND (!isset($_SESSION['dealerhand']))){
  start_game();
  check_loser();
};

// Makes the sum of the score-values
$dealer->add_score();
$player->add_score();



  // Execute function hit() when hit-button is clicked
  if (isset($_GET["hit"])) {
    // Set active player
    $active_player = $_SESSION['activeplayer'];
    $_SESSION['activeplayer'] = $active_player;

    $_SESSION['dealerwins'] = $dealerwins;
    $_SESSION['playerwins'] = $playerwins;
    
    if($active_player === 3 || $dealerwins === 1 || $playerwins === 1) {
      echo "Start a new game.";
      echo "<br>";
    } elseif ($active_player === 0) {
      // Check if player has > 21
      $x = $player->totalscore;
      if($x >= 21) {
        check_winner();
      } else {
        $player->hit();
        check_loser();
      }
    }
  }

  // Turn goes to Dealer when STAND btn is clicked
  if (isset($_GET["stand"])) {
    $active_player = $_SESSION['activeplayer'];
    $_SESSION['activeplayer'] = $active_player;

    $_SESSION['dealerwins'] = $dealerwins;
    $_SESSION['playerwins'] = $playerwins;
    
    if($active_player === 3 || $dealerwins === 1 || $playerwins === 1){
      echo "Start a new game.";
      echo "<br>";
    } elseif ($active_player === 0) {
      $active_player = 1; // start dealer turn
      $_SESSION['activeplayer'] = $active_player;
      // check if player has 21
      $x = $player->totalscore;
      if (($x > 21) or ($x === 21)) {
          check_winner();
      } else {
          // Dealers gets hit after stand is clicked
          $dealer->stand();
          // Check winner
          echo 'checking';
          echo '<br>';
          check_winner();
      }
    }
  }

  // Surrender button - Dealer wins
  if (isset($_GET["surrender"])){

    if($active_player === 3 || $dealerwins === 1 || $playerwins === 1) {
      echo "Start a new game.";
      echo "<br>";
    } else {
      $active_player = 3; // nobody's turn - end of game
      $_SESSION['activeplayer'] = $active_player;

      $dealerwins = 1;
      $_SESSION['dealerwins'] = $dealerwins;
      echo "Player surrendered. Dealer won!";
      echo "<br>";
    }
    
  }



// Start new GAME - destroy session
if (isset($_GET["newgame"])){
  session_destroy();
  header("location: game.php");
}

// Store the current session values in the hand and score
$_SESSION['playerhand'] = $player->hand;
$_SESSION['playerscore'] = $player->score;

$_SESSION['dealerhand'] = $dealer->hand;
$_SESSION['dealerscore'] = $dealer->score;

$_SESSION['activeplayer'] = $active_player;

$_SESSION['dealerwins'] = $dealerwins;
$_SESSION['playerwins'] = $playerwins;

echo "<br>";
echo "Active Player: $active_player";
echo "<br>";
echo "Dealer wins: $dealerwins";
echo "<br>";
echo "Player wins: $playerwins";

?>