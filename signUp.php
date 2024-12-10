<?php
    include "connection.php";

    session_start();


    $FNAME=$_GET["fname"];
    $LNAME=$_GET["lname"];
    $DATE=$_GET["dob"];
    $EMAIL=$_GET["mail"];
    $MNUM=$_GET["number"];
    $PWD=$_GET["pwd"];
    
    $SQL="INSERT INTO users_db VALUES('".$FNAME."','".$LNAME."','".$DATE."','".$EMAIL."',".$MNUM.",'".$PWD."')";
    
    if($conn->query($SQL)) {
        echo "Inserted";
        header('Location: login.html');
    }
    else
        echo "Failed".error();

    
    $conn->close();
?>