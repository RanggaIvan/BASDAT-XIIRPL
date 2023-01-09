<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan Data Buku</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/777c091496.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Halaman Admin</h1>

        <!-- Cek halaman apakah sudah login atau belum -->
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }
        ?>
        <!-- end -->
        
        <h4>Welcome <?php echo $_SESSION['admin']?> anda telah login</h4>
    <div class="table">
        <h1>Data Buku</h1>
        <button><a href="add.php">Tambah Buku</a></button>
        <button><a href="add_anggota.php">Tambah Anggota</a></button>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>ID Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>

            <?php
            include '../koneksi.php';
            $buku = mysqli_query($koneksi, "select * from buku");
            foreach($buku as $row){
                echo "<tr>";
                echo "<td>".$row['id_buku']."</td>";
                echo "<td>".$row['id_katalog']."</td>";
                echo "<td>".$row['judul_buku']."</td>";
                echo "<td>".$row['pengarang']."</td>";
                echo "<td>".$row['thn_terbit']."</td>";
                echo "<td>".$row['penerbit']."</td>";
                ?>
                <td class="aksi">
                    <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku'];?>" class="hapus">
                    <i class="fa-solid fa-trash"></i>HAPUS</a>
                    <a href="update.php?id_buku=<?php echo $row['id_buku'];?>" class="edit">
                    <i class="fa-solid fa-pen-to-square"></i>EDIT</a>
                </td>

                <?php
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    </div>
    </div>
    <br>
    <div class="logout">
    <a href="../logout.php" class="btn">
    <i class="fa-solid fa-right-from-bracket"></i> Logout
    </a>
    </div>
</body>
</html>