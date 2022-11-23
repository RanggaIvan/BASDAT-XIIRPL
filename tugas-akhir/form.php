<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <h1>Formulir Pendaftaran</h1>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Nama</label><br>
            <input type="text" name="nama">
        </div>
        <div>
        <label>Jurusan</label><br>
      <p><input type='checkbox' name='rpl' value="RPL(Rekayasa Perangkat Lunak)">RPL(Rekayasa Perangkat Lunak)</p>
      <p><input type='checkbox' name='akl' value="AKL(Akutansi Keuangan dan Lemabaga)">AKL(Akutansi Keuangan dan Lemabaga)</p>
      <p><input type='checkbox' name='bdp' value="BDP(Bisnis Daring dan Pemasaran)">BDP(Bisnis Daring dan Pemasaran)</p>
        </div>
        <div>
            <label>Nama Ayah</label><br>
            <input type="text" name="ayah">
        </div>
        <div>
            <label>Nama Ibu</label><br>
            <input type="text" name="ibu">
        </div>
        <div>
            <label>Alamat</label><br>
            <input type="text" name="alamat">
        </div>
        <div>
            <label>Upload foto</label><br>
            <input type="file" name="foto"><br>
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
</body>
</html>