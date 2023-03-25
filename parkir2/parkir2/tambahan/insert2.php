<?php
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($nama) || !empty($password) || !empty($gender)|| !empty($email)|| !empty($phoneCode) || !empty($phone)){
    $koneksi = new mysqli("localhost", "root", "","test");
    if($koneksi->connect_error){
        // die('Connect Error('. mysqli_connect_errorno(). ')'. mysqli_connect_error());
        die("Failed to connect: ". $koneksi->connect_error);

    } else {
        $SELECT = "SELECT * FROM login WHERE email = ?"; //? agar td passing valuenya, krn kalo pass valuenya, maka bs injection2 gitu 
        $stmt = $koneksi->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute(); // true/ false
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();//if we have more than 1 row, than we can apply the while loop into this statement and we can fetch one by one ($stmt_result) 
            if($data['password'] === $password){
                echo "<h2>Login Successfully</h2>";
            } else {
                echo "<h2>Invalid Email or password</h2>";
            }
        } else {
            echo "<h2>Invalid Email or password</h2>";
        }
    }
}


?>