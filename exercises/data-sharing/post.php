<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data sharing</title>
  </head>
  <body>

    <h1>Data sharing</h1>

    <form action="transfer.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <label for="username">Username: </label>
        <input id="username" type="text" name="username">

        <label for="firstname">First name: </label>
        <input id="firstname" type="text" name="firstname">

        <label for="lastname">Last name: </label>
        <input id="lastname" type="text" name="lastname">

        <label for="birthdate">Birth date: </label>
        <input id="birthdate" type="date" name="birthdate">

        <label for="email">E-mail: </label>
        <input id="email" type="email" name="email">

        <label for="photo">Upload a photo: </label>
        <input id="photo" type="file" name="photo">


        <input type="submit" name="submit" value="submit">
      </fieldset>
    </form>



  </body>
</html>


<!-- Extra exercise:
POST.php
- voornaam
- familienaam
- birthdate + make usr 10yrs older
- e-mail address + delete @ and domain

TRANSFER.php
Send info to transfer.php and display with echo like a card -->
