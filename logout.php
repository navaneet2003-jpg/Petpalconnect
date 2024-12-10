<?php
include "connection.php";
/*session_start(); // Start the session
//session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to a login page or any other page after logout
header("Location: login.html");

exit();*/


    // Start the session
    session_start();

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();


    // Redirect to the login page
    header("Location: login.html");
    session_abort();


    exit();

?>
