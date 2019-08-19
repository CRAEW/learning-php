<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transfered Data</title>
  </head>
  <body>

    <h1>Welcome, <?php echo $_POST['username'];?></h1>

    <h2>Your information</h2>
    <p>First name: <?php echo $_POST['firstname'];?></p>
    <p>Last name: <?php echo $_POST['lastname'];?></p>
    <p>Age: <?php calc_age_extra10();?></p>
    <p>E-mail: <?php rm_mail_domaine();?></p>
    <p>Profile picture: <?php profile_picture();?></p>
    <img src="uploads/<?php echo $_FILES['photo']['name'];?>" alt="<?php echo $_POST['photo'];?>">

  </body>
</html>

<?php
// A function to add 10 years to the birthdate and return age
function calc_age_extra10() {
  $dateOfBirth = $_POST['birthdate'];
  $today = date('Y-m-d', strtotime('+10 years'));

  $diff = date_diff(date_create($dateOfBirth), date_create($today));

  echo $diff->format('%y');
}

// Deletes the @domaine.com from the e-mail
function rm_mail_domaine() {
  $email = $_POST['email'];
  $pos = strpos($email, '@');
  $no_domaine = substr($email, 0, strpos($email, '@'));
  echo $no_domaine;
}

// Saves image to folder /uploads
function profile_picture() {
  // variables
  $target_dir = 'uploads/';
  $target_file = $target_dir . basename($_FILES['photo']['name']);
  $file_name = $_FILES['photo']['name'];
  $file_tmp = $_FILES['photo']['tmp_name'];

  $uploadOk = 1;

  // checks extention of file
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["photo"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          echo "Success";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Move image to directory
  if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
    echo "File is valid, and was successfully uploaded.\n";
  } else {
     echo "Upload failed";
  }
}


// <!-- Powerful Function to get two date difference.
//
// //////////////////////////////////////////////////////////////////////
// //PARA: Date Should In YYYY-MM-DD Format
// //////////////////////////////////////////////////////////////////////
// function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
// {
//     $datetime1 = date_create($date_1);
//     $datetime2 = date_create($date_2);
//
//     $interval = date_diff($datetime1, $datetime2);
//
//     return $interval->format($differenceFormat);
//
// }
// //RESULT FORMAT:
// // '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'
// =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
//
// // '%y Year %m Month %d Day'
// =>  1 Year 3 Month 14 Days
//
// // '%m Month %d Day'
// =>  3 Month 14 Day
//
// // '%d Day %h Hours'
// =>  14 Day 11 Hours
//
// // '%d Day'
// =>  14 Days
//
// // '%h Hours %i Minute %s Seconds'
// =>  11 Hours 49 Minute 36 Seconds
//
// // '%i Minute %s Seconds'
// =>  49 Minute 36 Seconds
//
// // '%h Hours
// =>  11 Hours
//
// // '%a Days
// =>  468 Days -->
