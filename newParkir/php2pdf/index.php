<?php
    require 'connect.php';
    $select = "SELECT * FROM mahasiswa";

    $query = mysqli_query($koneksi, $select);
?>

<form  method="POST" action="get_pdf_id.php" target="_blank">
    <input type="text" name="id1">
    <button type="submit" name="pdf" id="pdf" value="PDF">PDF</button>
</form>

<table border="1">
    <tr>
        <th>id</th>
        <th>nim</th>
        <th>nama</th>
        <th>email</th>
        <th>jurusan</th>
        <th>gambar</th>
    </tr>


<?php
    while($row = mysqli_fetch_assoc($query)){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['jurusan']; ?></td>
        <td><?php echo $row['gambar']; ?></td>
    </tr>
<?php
    }
?>
</table>

<form method="post" action="pdf.php" target="_blank">
    <button type="submit" name="pdf_creater" value="PDF">PDF</button>
</form>

<a href="pdf.php">Cetak</a>
