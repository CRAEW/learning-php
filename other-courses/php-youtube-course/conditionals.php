<?php
# CONDITIONALS

/*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
*/

$num = 5;

if($num == 5){
    echo '5 passed <br>';
} elseif($num == 6){
    echo '6 passed <br>';
} else {
    echo 'did not pass <br>';
}

if($num === 5){
    echo '5 passed<br>';
}

$num = '5';

if($num == 5){
    echo '5 passed<br>';
}

if($num === 5){
    echo '5 passed<br>';
} else {
    echo 'did not pass <br>';
}


# NESTING IF

$num = 6;

if($num > 4){
    if($num < 10){
        echo "$num passed<br>";
    }
}


# LOGICAL OPERATORS
/*
    and &&
    or ||
    xor
*/

if($num > 4 AND $num < 10){
    echo "$num passed<br>";
}

if($num > 2 OR $num < 10){
    echo "$num passed<br>";
}

// exclusive OR -> only one of these can be true
if($num > 2 XOR $num < 10){
    echo "$num passed<br>";
} else {
    echo "$num did not pass<br>";
}

# SWITCH

$favColor = 'red';

switch($favColor){
    case 'red':
        echo 'Your favorite is red';
        break;
    case 'blue':
        echo 'Your favorite is red';
        break;
    case 'green':
        echo 'Your favorite is red';
        break;
    default:
        echo 'Your favorite is something else';
}




?>