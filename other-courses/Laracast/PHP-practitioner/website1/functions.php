<?php
// dd = die and dump

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function myAge($age) {
 if($age >= 21) {
        echo "Your age is $age. The minimum age to enter is 21.You can enter the club.";
    } else {
        echo "Your age is $age. The minimum age to enter is 21. You are not old enough to enter this club.";
    }
}


?>