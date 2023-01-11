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
        if ($_SESSION['status'] != 'login') {
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <!-- end -->

        <h4>Welcome <?php
                    include '../koneksi.php';
                    $email = $_SESSION['email'];
                    $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
                    foreach ($anggota as $nama) {
                        echo $nama['nama'];
                    }
                    ?> anda telah login</h4>

        <button><a href="update_anggota.php?id_anggota=<?php echo $nama['id_anggota'] ?>">Customize</a></button>

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
                    <th>Harga</th>
                    <th>Aksi</th>

                    <?php
                    include '../koneksi.php';
                    $buku = mysqli_query($koneksi, "select * from buku");
                    foreach ($buku as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['id_buku'] . "</td>";
                        echo "<td>" . $row['id_katalog'] . "</td>";
                        echo "<td>" . $row['judul_buku'] . "</td>";
                        echo "<td>" . $row['pengarang'] . "</td>";
                        echo "<td>" . $row['thn_terbit'] . "</td>";
                        echo "<td>" . $row['penerbit'] . "</td>";
                        echo "<td>" . $row['harga'] . "</td>";
                    ?>
                        <td>
                            <a href="keranjang.php?id_buku=<?php echo $row['id_buku']; ?>">
                                Add to
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                        </td>
                    <?php
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
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