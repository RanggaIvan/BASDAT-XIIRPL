<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/777c091496.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h1>Selamat Datang Di Bukon</h1>

        <!-- Cek halaman apakah sudah login atau belum -->
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <!-- end -->
        
        <h4>Welcome <?php
            include '../koneksi.php';
            $email = $_SESSION['email'];
            $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
            foreach($anggota as $nama){
                echo $nama['nama'];
            }
        ?> anda telah login</h4>

    <div class="table">
        <h1>Data Buku</h1>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>ID Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>

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