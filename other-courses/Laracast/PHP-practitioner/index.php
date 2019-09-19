<?php

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

//die(var_dump($person));

$task =[
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Wendy',
    'completed' => false
];

require 'functions.php';



require 'index.view.php';