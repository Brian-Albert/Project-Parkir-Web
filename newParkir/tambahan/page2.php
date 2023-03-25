<?php
    // if(!isset($_GET['username'])){
    //     header("location: home.php");
    //     exit();
    // } 

    // $username = $_GET['username'];
    // $url = "page1.php?username=". $username;
    // echo "Hello $username, do you want to go to <a href='$url'>page1</a>?";


    session_start();
    if(!isset($_SESSION['username'])){
        header("location: home2.php");
        exit();
    } 

    $username = $_SESSION['username'];
    $url = "page1.php?username=". $username;
    echo "Hello $username, do you want to go to <a href='$url'>page1</a>?";
?>