<html>
<head>
    <title>Edit Data Buku</title>
</head>
<body>
<div class="container">
        <h1>Edit Data Buku</h1>

        <?php
            include '../koneksi.php';
            $id_buku = $_GET['id_buku'];
            $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
            // Data yang sudah di cocokan dengan id_buku , di MELEDAK menggunakan fetch array sehingga bisa di taro satu satu di formnya
            while($meledak = mysqli_fetch_array($data)){

        ?>

        <form action="proses_update.php" method="post">
            <!-- ID Buku -->
            <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku']; ?>">
            <!-- ID Buku -->
            <label>ID Katalog</label>
            <input type="number" name="id_katalog" value="<?php echo $meledak['id_katalog']; ?>">
            <br>
            <label>Judul Buku</label>
            <input type="text" name="judul_buku"  value="<?php echo $meledak['judul_buku']; ?>">
            <br>
            <label>Pengarang</label>
            <input type="text" name="pengarang"  value="<?php echo $meledak['pengarang']; ?>">
            <br>
            <label>Tahun Terbit</label>
            <input type="date" name="thn_terbit"  value="<?php echo $meledak['thn_terbit']; ?>">
            <br>
            <label>Penerbit</label>
            <input type="text" name="penerbit"  value="<?php echo $meledak['penerbit']; ?>">
            <br>
            <button>Ubah</button>
            <br>
        </form>
        <?php
            }
        ?>
    </div>
</body>
</html>