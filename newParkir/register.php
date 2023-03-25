<?php
    session_start();
    require 'functions.php';

    if( isset($_POST["register"])){
        if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["cpass"])){
            if($_POST["pass"] == $_POST["cpass"]){
                if(tambahAkun($_POST)>0){
                    header("Location: login.php");
                } else {
                    header("Location: register.php");
                }
            } else {
                $sama = false;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="css/stylederick.css">
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light border-bottom border-dark">
            <a class="navbar-brand" href="login.php">E-Parkir Sun Plaza</a>
        </nav>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body col-12 p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="img/park2.png" alt="" width="1200px" height="550px">
                    </div>
                    <div class="col-lg-12">
                        <div class="m-3">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control form-control-user" id="fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control form-control-user" id="lname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="username" name="username" class="form-control form-control-user" id="username"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="pass" class="form-label">Password</label>
                                        <input type="password" name="pass" class="form-control form-control-user"
                                            id="pass" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="cpass" class="form-label">Confirm Password</label>
                                        <input type="password" name="cpass" class="form-control form-control-user"
                                            id="cpass" placeholder="Confirm Password">
                                    </div>
                                    <div class="fw-900 text-center">
                                        <?php 
                                            if(isset($sama)){
                                            echo "<p class= 'text-danger text-center'>Password tidak sama!</p>";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">Register</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>