<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Check In</label>
            <input type="date" name="cek">
        </div>
        <div>
            <label>No Kontak</label>
            <input type="text" name="kontak" placeholder="Masukkan No Handphone">
        </div>
        <div>
            <label>Tipe Kamar</label>
            <select name="tipe">
                <option value="">Pilih tipe kamar</option>
                <option value="1700000">Standar(1.7 Jt)</option>
                <option value="2500000">Superior(2.5 Jt)</option>
            </select>
        </div>
        <div>
            <label>Berapa kamar</label>
            <input type="number" name="kamar" placeholder="ingin check in berapa kamar">
        </div>
        <div>
            <label>Breakfast ( 50rb )</label>
            <input type="number" name="breakfast" placeholder="Breakfast untuk berapa orang">
        </div>
        <div>
            <label>Contoh Kamar</label>
            <input type="file" name="foto">
        </div>
        <button>Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>