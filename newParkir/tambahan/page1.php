<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: home2.php");
        exit();
    } 

    $username = $_SESSION['username'];
    $url = "page2.php?username=". $username;
    echo "Hello $username, do you want to go to <a href='$url'>page2</a>?";
?>