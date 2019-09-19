<?php

# LOOPS
/*
  - For
  - While
  - Do... While
  - Foreach
*/

// FOR LOOP
for ($i=0; $i <= 10 ; $i++) {
  // code...
  echo 'Number'.$i;
  echo '<br>';
}

echo '<br>';


// WHILE LOOP
$a = 0;
while ($a < 10) {
  // code...
  echo $a;
  echo '<br>';
  $a++;
}

echo '<br>';


//DO,,,WHILE -> always runs at least once
$i = 0;
do{
  // code...
  echo $i;
  echo '<br>';
  $i++;
} while($i < 10);

echo '<br>';


//FOREACH LOOP is for arrays
$people = array('Brad', 'Jose', 'William');

foreach($people as $person) {
  echo $person;
  echo '<br>';
}

echo '<br>';

$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

foreach ($people as $person => $email) {
  // code...
  echo $person.': '.$email;
  echo '<br>';
}

echo '<br>';

 ?>
