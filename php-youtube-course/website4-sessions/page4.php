<?php
    session_start();

    // unset only 1 value
    // unset($_SESSION['name']); 

    // destroy complete session
    session_destroy();
?>