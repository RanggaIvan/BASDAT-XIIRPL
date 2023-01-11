<html>
<head>
    <title>Update Anggota</title>
</head>
<body>
<div class="container">
        <h1>CUstomize Profile</h1>

        <?php
            include '../koneksi.php';
            //ambil dari tombol cutomize
            $id = $_GET['id_anggota'];
            //arahkan ke id_angota
            $data = mysqli_query($koneksi, "select * from anggota where id_anggota = '$id'");
            // Data yang sudah di cocokan dengan id_buku , di MELEDAK menggunakan fetch array sehingga bisa di taro satu satu di formnya
            while($meledak = mysqli_fetch_array($data)){

        ?>

        <form action="proses_update.php" method="post">
            <!-- ID Buku -->
            <input type="hidden" name="id" value="<?php echo $meledak['id_anggota']; ?>">
            <!-- ID Buku -->
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $meledak['nama']; ?>">
            <br>
            <label>Telepon</label>
            <input type="text" name="no_telp" value="<?php echo $meledak['no_telp']; ?>">
            <br>
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo $meledak['alamat']; ?>">
            <br>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $meledak['email']; ?>" disabled>
            <br>
            <labe>Password</label>
            <input type="password" name="password" value="<?php echo $meledak['password']; ?>" disabled>
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