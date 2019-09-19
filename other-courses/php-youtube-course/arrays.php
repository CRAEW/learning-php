<?php
# Array - variable that holds multple values
/*
    - Indexed
    - Associative
    - Multi-dimensional
*/

// Indexed
$people = array('Wendy', 'Bart', 'Nathan');
echo $people[1] . '<br>';
echo '<br>';

$ids = array(23, 55, 12);
echo $ids[2] . '<br>';
echo '<br>';

$cars = ['Honda', 'Toyota', 'Volvo'];
echo $cars[1] . '<br>';
$cars[3] = 'Tesla';
echo $cars[3] . '<br>';
$cars[] = 'BMW'; // adds to last one
echo $cars[4] . '<br>';
echo '<br>';

echo count($cars) . '<br>';
print_r($cars);
echo '<br>';
var_dump($cars);
echo '<br>';

// Associative Arrays
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
echo '<br>' . $people['Brad'] . '<br>';
$ids = [ 22 => 'Brad', 44 => 'Jose', 63 => 'William'];
echo $ids['22'] . '<br>';
echo '<br>';

$people['Jill'] = 42;
echo '<br>' . $people['Jill'] . '<br>';
print_r($people);
echo '<br>';
var_dump($people);
echo '<br>';
echo '<br>';

// Multidimensional Arrays
$cars = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 20),
  array('Ford', 23, 12)
);
echo $cars[1][0];



 ?>
