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
        
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        $anggota = mysqli_query($koneksi, "select * from anggota");

        //jumlahkan data yang ada di table
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);
        
        ?>
        <!-- end -->
        
        <h4>Welcome <?php echo $_SESSION['admin']?> anda telah login</h4>
        <hr>
    <div class="table">
        <h1>Data Buku</h1>
        <a href="sandbox.php">Sandbox</a>
        <h3>TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku; ?></h3>
        <h1> Total Semua Harga Buku :
                <?php
                $db = mysqli_query($koneksi, "SELECT * FROM buku;");
                while ($r = mysqli_fetch_array($db)) {
                    $harga[] = $r['harga'];
                }
                $totalHarga = array_sum($harga);
                echo "Rp. " . number_format($totalHarga) . " ,-";

                ?>
            </h1>
        <button><a href="add.php">Tambah Buku</a></button>
        <button><a href="cetak_buku.php">Cetak</a></button>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>ID Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
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
                echo "<td>".$row['harga']."</td>";
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
    <div class="table">
        <center>
        <h1>Data Anggota</h1>
        <h3>TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_anggota; ?></h3>
        <button><a href="add_anggota.php">Tambah Anggota</a></button>
        <button><a href="cetak_anggota.php">Cetak</a></button>
        </center>
    <table>
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>No_telp</th>
            <th>alamat</th>
            <th>Email</th>
            <th>Password</th>

            <?php
            include '../koneksi.php';
            $anggota = mysqli_query($koneksi, "select * from anggota");
            foreach($anggota as $rou){
                echo "<tr>";
                echo "<td>".$rou['id_anggota']."</td>";
                echo "<td>".$rou['nama']."</td>";
                echo "<td>".$rou['no_telp']."</td>";
                echo "<td>".$rou['alamat']."</td>";
                echo "<td>".$rou['email']."</td>";
                echo "<td>".$rou['password']."</td>";
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