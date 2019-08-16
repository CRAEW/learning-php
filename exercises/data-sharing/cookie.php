<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>

    <h1>Remember the cookie!</h1>
    <p>Write a message in the text area and reload the page.</p>

    <form id="cookieform" action="" method="get">
      <textarea id="message" name="message" rows="8" cols="80"></textarea>
      <input id="cookieBtn" type="submit" name="createCookie" value="createCookie">
    </form>

    <?php

    if(!isset($_COOKIE['message'])) {
      echo "Cookie named " . $_COOKIE['message'] . " is not set!";
    } else {
      echo "Cookie " . $_COOKIE['message'] . " is set! <br>";
      echo "The message is: " . $_COOKIE['message'];
    }

     ?>



    <script>

    let cookieBtn = document.getElementById('cookieform');
    cookieBtn.addEventListener('click', setCookie);

      function setCookie("message", cvalue) {
        cvalue = document.getElementById('message').value;
        document.cookie = "message" + escape(cvalue) + ";";
      }


    </script>

  </body>
</html>
