<?php
    require "connect.php";
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
    <h1><center>Daftar Detail Booking</center></h1>
    <p><center>Berikut adalah data detail booking yang disajikan dalam bentuk table</center></p>

    <center>
        <table border="1">
            <tr>
                <th>ID Booking</th>
                <th>ID Pengguna</th>
                <th>ID Slot</th>
                <th>No Plat</th>
                <th>Tanggal</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Biaya</th>
                <th>Metode Bayar</th>
                <th>Status Booking</th>
            </tr>

            <?php
                $query = "SELECT * FROM booking";
                $result = query($query);
                
                if( mysqli_affected_rows($koneksi) > 0 ):
                    foreach($result as $row): 
            ?>
                        <tr>
                            <td><?php echo $row["id_booking"]; ?></td>
                            <td><?php echo $row["id_pengguna"]; ?></td>
                            <td><?php echo $row["id_slot"]; ?></td>
                            <td><?php echo $row["no_plat"]; ?></td>
                            <td><?php echo $row["tanggal"]; ?></td>
                            <td><?php echo $row["waktu_masuk"]; ?></td>
                            <td><?php echo $row["waktu_keluar"]; ?></td>
                            <td><?php echo $row["biaya"]; ?></td>
                            <td><?php echo $row["metode_bayar"]; ?></td>
                            <td><?php echo $row["status_booking"]; ?></td>
                        </tr>
                    <?php
                        endforeach;
                endif;
                    ?>
        </table>
    </center>

    <?php
        echo "
                panji
                ". 
                    for($i=0; $i<10; $i++): 
            ."          <p>aaaaa</p>
                        
            " 
                    endfor; . "
        ";
    ?>
</body>
</html>