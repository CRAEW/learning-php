<?php
# SHOW RESULT IN BROWSER
echo 'Hello World! with echo<br>'; // faster than print, no value returned
print 'Hello World! with print, returns value 1<br>'; // returns 1 as value

# VARIABLES
/*
    - prefix $
    - start with underscore or letters
    - letters, numbers, underscores
    - case sensitive
*/
$output = 'Hello World! in a variable<br>';
echo $output;

# DATA TYPES
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
echo $sum . '<br>';

$float1 = 4.4;
$bool1 = true;

$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 . ' ' . $string2 . "! with string concatenation<br>";
echo $greeting;

$greeting2 = '$string1 $string2 <br>';
echo $greeting2;

$greeting3 = "$string1 $string2 <br>";
echo $greeting3;

$string3 = 'They\'re here <br>';
echo $string3;

$string4 = "They're here <br>";
echo $string4;

# CONSTANTS
define('GREETING', 'Hello Everyone', true); // add true to make it case insensitive
echo GREETING;


?>
