<?php

    session_start();
    include "connection.php";
    $Em=$_GET["email"];
    $Pwd=$_GET["pwd"];
    $_SESSION["id"]=$Em;
    $_SESSION["p"]=$Pwd;

    $sql="SELECT * FROM users_db WHERE email='".$Em."'AND password='".$Pwd."';";
    $res=$conn->query($sql);

    if($res->num_rows>0){
        echo "Sucessful login ";
        header('Location: mainPage.html');
  exit;
    }


  else {
    echo "Incorrect login credentials";
    header('Location: login.html');
    exit;

  }
   $conn->close();

?>