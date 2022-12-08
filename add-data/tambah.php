<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Menambahkan Data</h1>
    <form action="proses.php" method="post">
        <label>Masukkan Data</label>
        <input type="text" name="nama">
        <br>
        <label>Masukkan No Telp</label>
        <input type="number" name="no_telp">
        <br>
        <label>Masukkan Alamat</label>
        <input type="text" name="alamat">
        <br>
        <label>Masukkan Email</label>
        <input type="text" name="email">
        <br>
        <input type="submit" value="submit">
        <br>
        <input type="reset" value="cancel">
    </form>
</body>
</html>