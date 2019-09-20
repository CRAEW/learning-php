<?php

require 'classes.php';
require 'functions.php';

$greeting = 'Hello, ';
$name = 'Wendy Van Craen';

// echo "Hello, {$name}";
// echo 'Hello, ' . $name;
// echo "Hello, $name";
// echo $greeting . ' ' . $name;
// echo "$greeting, $name";
// echo "{$greeting}, {$name}";


$names = [
    'Wendy',
    'Jessy',
    'Nathan'
];

$animals = [
    'Cat',
    'Tiger',
    'Lion',
    'Panther',
    'Lynx'
];

$animals[] = 'elephant';

$person = [
    'age' => 37,
    'hair' => 'brown',
    'career' => 'web developer apprentice'
];

$person['name'] = 'Wendy';
unset($person['age']);

$taskarray = [
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Wendy',
    'completed' => false
];


$tasklist = [
    new Tasks('Go to the store'),
    new Tasks('Finish my screencast'),
    new Tasks('Clean my room')
];

$tasklist[0]->complete();



require 'variables.view.php';

?>