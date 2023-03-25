<?php
session_start();
require 'functions.php';


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

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
    
       
        $hsl = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password' LIMIT 1");
        
        $jmlhRow = mysqli_affected_rows($koneksi);
        $row = mysqli_fetch_assoc($hsl);

        if($row["username"] == $username && $row["password"] == $password){ 
            if($jmlhRow > 0){
                $_SESSION['user'] = $row['username'];
                $_SESSION['type'] = $row['type'];

                if($row['type'] == 1){
                    header("location: admin222.php");
                } else if($row['type'] == 0) {
                    header("location: home.php");
                }
                
            }
        } else {
            $cek = false;
        }
    }
?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Booking Parkir Sun Plaza</title>
        
        <meta name="description" content="">
        <meta name="author" content="">

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
                                            <!-- action="<?php// echo $_SERVER['PHP_SELF']; ?>"  -->
                                            <form method="post" class="user needs-validation" novalidate>
                                                <div class="form-group">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" name="username" class="form-control form-control-user" required id="username" placeholder="Username">
                                                    <div class="valid-feedback">Please input the username</div>
                                                    <div class="invalid-feedback">Please input the username</div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" name="password" class="form-control form-control-user" required id="password"  placeholder="Password">
                                                    <div class="valid-feedback">Please input the username</div>
                                                    <div class="invalid-feedback">Please input the password</div>
                                                    <?php
                                                        if(isset($cek)){
                                                            echo "<p class= 'fw-bold text-danger' >Username atau Password salah</p>";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                                        <label class="custom-control-label" for="customCheck">Remember
                                                            Me</label>
                                                    </div>
                                                </div>
                                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
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