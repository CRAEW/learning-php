<?php

function openConnection() {
    
//  Try to figure out what these should be for you
 $dbhost    = "136.144.221.129";                // Variable links to your server
 $dbuser    = "genk";                // Variable links to username
 $dbpass    = "{)+O^O@iw!].zmjT";       // Variable links to userpassword
 $db        = "becode_genk";                // Variable links to Database

//  $dbhost    = "wendywebsite";                // Variable links to your server
//  $dbuser    = "root";                // Variable links to username
//  $dbpass    = "09wendy82";       // Variable links to userpassword
//  $db        = "becode_genk";                // Variable links to Database


 
 // Try to understand what happens here

/* 
    Create a new connection to the database.
    And check the connection. If it fails return an error.
*/
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed: %s\n". $conn->error);
 
 // Why we do this here
 return $conn; // Returns the values from the database if the connection is established.

}



// And why would we do this here ?
/*
    The connection to the DB will automatically close. 
*/
function closeConnection($conn) {
    $conn->close();
}



?>