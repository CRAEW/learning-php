# BlackJack analyse

## Core

* Boek kaarten
* 21 behalen
* spelen en dealer
* 3 knoppen voor actie (hit-stand-surrender)
* totaal score speler
* subtotaal speler en dealer
* New game button
* Exit game button
* winning rounds
* display events in gameLog (subtotaal, hit, ...)

## Landing page

* spelregels
* input veld voor naam te kiezen
* start-knop


## Game logic

* speler speelt eerst
* dealer 1 kaart zichtbaar en 1 kaart verborgen
* speler 2 kaarten verborgen voor dealer
* extra kaarten zichtbaar
* dealer mag niet minder dan score 15 hebben, vanaf 17 moet hij stoppen
* ACE = 1 of 11
* ACE + 10 = 11 of 21
* J-K-Q = 10

# Break game into blocks

## Front-end

* HTML
* CSS

## Back-end

* A - boek kaarten array if NEW GAME

* F - start game function
    * RESET() all scores, deck, players
    * Creates cards deck
    * Creates player en dealer
    * HIT() - already deals 2 cards to each player & dealer
        * only 1 dealer card is shown


* Cl - player-classe/object
    * F - HIT
        * CONDITIONAL STATEMENT - other card from DECK if already dealt
    * F - STAND
        * CONDITIONAL STATEMENT - change turn if STAND
    * F - SURRENDER = exit game


* F - play-game function
    * HIT() 
    * STAND() = next players turn (dealer)
    * SURRENDER() = exit game - dealer wins
    * CHECKWINNER()
        * = play card -> score += subtotal 


* F - NEW GAME
    * newround()
    * zet winner-score ook terug op 0


* F - NEW ROUND
    * doesn't reset winner-score
    * adds +1 to WINNER-score
    

* F - Check winner
    * check winner if 21 elke keer er gedealed wordt
        * check score 21 = win or dealer wins if 21
        * >21 = BUSTED        
        * <21 HIT AGAIN or STAND
    * If winner
        * show show txt you won
        * disable buttons hit-stand-surrender
        * only new game or new round possible


* F - EXIT GAME function
    * End session
    * reset all to zero

* F - Game log
 * displays game log in html

## ROLVERDELING

### Mago
* Play Game F
* Game log F

## Caro
* Classe Blackjack

## Senne
* Start game
* (Check winner)


## Wendy = de baas!
* make repo
* new game
* new round
* exit game
* (check winner)