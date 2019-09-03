<?php require 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="page">

<form action="profile.php" method="POST">
    <input type="hidden" name="submmitted" value="true">
    <label for="search-id">Search id:
        <input id="search-id" type="text" name="search">
    </label>
    <input type="submit" value="Get profile!" name="submitted">
</form>

<!-- connect to the database -->
<?PHP if(isset($_POST['submitted'])): ?>
    <?PHP
        $conn = openConnection();

        $search = $_POST['search'];
        $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));
        // Select data from the database
        $sql = "SELECT * FROM hopper_2 WHERE id = $search"; 
        // Save selected data in variable
        $result = $conn->query($sql) or die('error getting data');
    ?>

        <?php while($profile = $result->fetch_assoc()): ?>
            <?php
            echo "data: $mime"."$result['$data']";
            ?>

            <img src="./<?php $profile['avatar']; ?>" alt="profile picture <?php echo $profile['username']; ?>">
            <h2><?php echo $profile['first_name']." ".$profile['last_name']; ?></h2>
            <p><?php echo $profile['username']; ?></>
 

        <?php endwhile; ?>


<?php endif; ?>





    
    







</div>

<!-- Close connection to database -->
   <?php closeConnection($conn); ?>
</body>
</html>