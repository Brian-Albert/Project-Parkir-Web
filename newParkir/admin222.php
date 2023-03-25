<?php
    session_start();
    require 'functions.php';

    if(isset($_SESSION['user'])){
        $user = false;   
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
    <p>Welcome back, <?php echo $_SESSION['user']; ?></p>
    
    <p><?php echo $user . "ww"; ?></p>
</body>
</html>