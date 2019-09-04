<?php 

    require 'connection.php';

    // // Open the connection to the database
    $conn = openConnection();

    
    // set variables to connect input values to the database

    $avatar = $_POST['avatar'];


    // Submit data to the database when button is clicked
    if(isset($_POST['submit'])) {
        $sql = "UPDATE hopper_2 SET avatar='$avatar' WHERE id=3";

        if ($conn->query($sql) === TRUE) {
            echo "Update successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    closeConnection($conn);
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL UPDATE Form</title>
</head>

<body>

    <form action="" method="POST">

        <fieldset>

            <div>
                <label for="avatar">Avatar: </label>
                <input id ="avatar" type="url" name="avatar" required>
            </div>

            <div>
                <input id ="submit" type="submit" name="submit">
            </div>


        </fieldset>


    </form>

</body>

</html>