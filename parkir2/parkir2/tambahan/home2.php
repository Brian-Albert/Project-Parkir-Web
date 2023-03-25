<?php
    session_start();

    // session_destroy();
    // unset($_SESSION['username']);

    if(isset($_SESSION['username'])){ //if someone already insert his name, we will just redirect hom to page 1
        $url = "page1.php";
        header("location:" . $url);
        exit();
    } else if(isset($_POST['username'])){
        $username = $_POST['username'];
        // echo $username;
        // $url = "page1.php?username=" . $username;
        $_SESSION['username'] = $username; // di session ini akan adata data di dalam username variable

        $url = "page1.php";
        header("location:" . $url);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
            <form action="home2.php" method="post">
                <input type="text" name="username" placeholder="nama">
                <input type="submit" value="save">
            </form>
    </body>
</html>