<?php

# Send info to URL
    if(isset($_GET['name'])){
        // echo $_GET['email'];
        // print_r($_GET);

        /*  HTMLENTITIES
        important when it comes to security
        it prints out the html entities as a string
        so if someone wants submmits a malicious <script> tag in your form, it doesn't harm your website. 
        */
        $name = htmlentities($_GET['name']);
        echo $name;
    }

# Does not send info to URL
    // if(isset($_POST['name'])){
    //     print_r($_POST);
    //     echo htmlentities($_GET['name']);
    //     echo $name;
    // }
   
# Alternate way, not used very much
    //     if(isset($_REQUEST['name'])){
    //     print_r($_REQUEST);
    //     echo htmlentities($_REQUEST['name']);
    //     echo $name;
    // }

# SERVER QUERY STRING VALUE
        // echo $_SERVER['QUERY_STRING'];
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My website</title>
</head>

<body>

    <form method="GET" action="get_post.php">
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <!-- Sending Query string without using form -->
    <ul>
        <li><a href="get_post.php?name=Brad">Brad</a></li>
        <li><a href="get_post.php?name=Steve">Steve</a></li>
    </ul>

    <h1><?php echo "{$name}'s Profile"; ?></h1>
    

</body>

</html>