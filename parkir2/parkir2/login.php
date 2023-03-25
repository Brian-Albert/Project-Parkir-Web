<?php
// session_start();
// require 'functions.php';


// //cek login terdaftar apa tidak
// if(isset($_POST['login'])){
//     $nama = $_POST['nama'];
//     $password = $_POST['password'];
    
// //cek database
//     $cekdatabase = mysqli_query($koneksi,"Select * from login where nama='$nama' and password='$password'");
//     //hitung jumlah data
//     $hitung = mysqli_num_rows($cekdatabase);
//     if($hitung>0){
//         $_SESSION['log']='True';
//         header('location:home.html');
//     }
//     else{
//         header('location:login.php');
//     };
    
// };

// if(!isset($_SESSION['log'])){

// } else {
//     header('location:home.html');
// }
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Parkir Sun Plaza</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylederick.css">
        <link href="css/styles.css" rel="stylesheet" />

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light border-bottom border-dark">
            <a class="navbar-brand" href="login.php">E-Parkir Sun Plaza</a>
        </nav>
        
        <form action=""></form>
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="img/park.png" alt="Parking Image" width="610px" height="610px">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                        <label class="form-label" for="exampleInputEmail" >Email</label>
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputPassword">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        
        <section class="mid">
            <div class="login">
                <h1 class="text-center mb-4 ">Login</h1>
                <form class="needs-validaiton">
                    <div class="form-group mb-3 was-validated">
                        <label class="form-label" for="email" >Email</label>
                        <input class="form-control" type="email" name="email" id="email" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Mohon mengisi email Anda
                        </div> 
                    </div>
                    <div class="form-group mb-3 was-validated">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Mohon mengisi password Anda
                        </div> 
                    </div>
                    <div class="sign-up mb-3">
                        <p>No Account? <a href="sign-up.php">Sign Up</a></p>
                    </div>
                    
                        <a href="home.html" class="btn btn-success w-100 mb-1">Login</a>
                        <!-- <button class="btn btn-success w-100 mb-1" name="login" >Login</button> -->
                </form>
            </div>
        </section>
        


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>
</html>