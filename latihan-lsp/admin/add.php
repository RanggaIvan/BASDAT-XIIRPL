<html>
<head>
    <title>Tambah Data Buku</title>
</head>
<body>
<div class="container">
        <h1>Tambahkan Data Buku</h1>

        <form action="proses.php" method="post">
            <label>ID Katalog</label>
            <input type="number" name="id_katalog">
            <br>
            <label>Judul Buku</label>
            <input type="text" name="judul_buku">
            <br>
            <label>Pengarang</label>
            <input type="text" name="pengarang">
            <br>
            <label>Tahun Terbit</label>
            <input type="date" name="thn_terbit">
            <br>
            <label>Penerbit</label>
            <input type="text" name="penerbit">
            <br>
            <button>Tambahkan</button>
            <br>
        </form>
    </div>
</body>
</html>