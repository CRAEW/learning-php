<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    // echo "Hello, World!";

    $myvar = "this is my variable";
    // echo $myvar;

    $number = 5;
    $number2 = 3;
    $sum = $number + $number2;
    // echo $sum;

    $name = "Wendy";
    // echo "Hello, " . $name;


    $loggedIn = true;

    // if ($loggedIn == true) {
    //   echo "You are logged in";
    // } else {
    //   echo "Plese log in";
    // }

     ?>


     <form action="process.php" method="post">
       <input name="name" type="text">
       <input type="submit" name="" value="">
     </form>


     <?php


     $people = array("Alice", "Bob", "Catherine");
     // print_r($people);

     // echo $people[2];

     // foreach ($people as $person) {
     //   echo $person . ' ';

      $numbers = array(5, 3, 7);
      $sum = 0;
      foreach ($numbers as $number) {
        $sum = $sum + $number;
      }

      echo $sum;

      ?>

  </body>
</html>
