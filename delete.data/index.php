<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
</table>

<h1>Menampilkan Data Buku</h1>
<table border="1">
<tr>
    <th>ID Buku</th>
    <th>Katalog</th>
    <th>Judul Buku</th>
    <th>Pengarang</th>
    <th>Penerbit</th>
    <th>Aksi</th>
</tr>
<!-- Menampilkan Data Buku -->
<?php
include 'koneksi.php';
$buku = mysqli_query($koneksi, "select * from buku");
foreach($buku as $row){
    echo "<tr>";
    echo "<td>".$id_buku = $row['id_buku']."</td>";
    echo "<td>".$katalog = $row['id_katalog']."</td>";
    echo "<td>".$judul = $row['judul_buku']."</td>";
    echo "<td>".$pengarang = $row['pengarang']."</td>";
    echo "<td>".$penerbit = $row['penerbit']."</td>";
    ?>
    <td>
         <a href="proses.php?id_buku=<?php echo $row['id_buku'];?>">HAPUS</a>
    </td>

    <?php
    echo "</tr>";
}
?>
</table>

</body>
</html>