<?php

# FUNCTION = Block of code that can be repeatedly called

/*
    Camel Case = myFuncion() -> functions and variables (Symphony)
    Lower Case = my_function() -> functions and variables (code ignitor)
    Pscal Case = MyFunction() -> used for classes
*/

// Create Simple function
function simpleFunction(){
    echo 'Hello World';
}

// Run Simple Function
simpleFunction();

echo "<br>";

// function With Param and a default value
function sayHello($name = 'World'){
    echo "Hello $name <br>";
}

sayHello('Joe');
sayHello('Bob');
sayHello();

// Return Value
function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(2,3);

// By Reference
$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

echo "<br>";

addFive($myNum);
echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";

?>