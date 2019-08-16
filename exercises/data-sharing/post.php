<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data sharing</title>
  </head>
  <body>

    <h1>Data sharing</h1>

    <form action="" method="post">
      <label for="username">Username: </label>
      <input id="username" type="text" name="username">
      <input type="submit" name="submit" value="submit">
    </form>

    <p>Welcome <?php echo $_POST['username'];?></p>

  </body>
</html>
