<?php
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneCode = $_POST['phoneCode'];
    $phone = $_POST['phone'];

    if(!empty($nama) || !empty($password) || !empty($gender)|| !empty($email)|| !empty($phoneCode) || !empty($phone)){
        $koneksi = new mysqli("localhost", "root", "", "test");

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errorno(). ')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT email FROM register WHERE email = ? Limit 1"; //? agar td passing valuenya, krn kalo pass valuenya, maka bs injection2 gitu 
            $INSERT = "INSERT Into register (nama, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";

            $stmt = $koneksi->prepare($SELECT); //pass, query didalamnya ke sql
            $stmt-> bind_param("s", $email);
            $stmt-> execute(); // exusi code atas
            $stmt-> bind_result($email);  
            $stmt-> store_result();
            $rnum = $stmt->num_rows; 

            if($rnum==0){
                $stmt->close();

                $stmt = $koneksi->prepare($INSERT);
                $stmt->bind_param("ssssii", $nama, $password, $gender, $email, $phoneCode, $phone);
                $stmt->execute();
                echo "New record inserted successfully!";
            } else {
                echo "Someone already register using this email.";
            }
            $stmt->close();
            $koneksi->close();
        }


    } else {
        echo "All field are required";
        die();
    }
?>