<html>
<head>
    <title>Hasil</title>
    <style>
        div{

            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 10px 10px 0px #D1D1D1;
            width: 350px;
            margin: 10px;
            border: none;
            font-size: 14pt;
            border-radius: 5px;
            padding: 10px; 
            margin: auto;
        }
    </style>
</head>
<body>
    <div>
    <?php
$nama = @$_POST['nama'];
$rpl = @$_POST['rpl'];
$akl = @$_POST['akl'];
$bdp = @$_POST['bdp'];
$ayah = @$_POST['ayah'];
$ibu = @$_POST['ibu'];
$alamat = @$_POST['alamat'];

echo "Nama dan Jurusan : $nama - $rpl $akl $bdp<br>";
echo "Nama Ayah : $ayah<br>";
echo "Nama Ibu : $ibu<br>";
echo "Alamat : $alamat<br>";

$files = $_FILES;
$folder_upload = "./assets/uploads";

if (!is_dir($folder_upload)){
    mkdir($folder_upload, 0777, $rekursif = true);
}
$fileFoto = (object) @$_FILES['foto'];

$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

if ($uploadFotoSukses) {
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "Foto : <a href = '{$link}'>{$fileFoto->name}</a>";
    echo "<br>";
}

if ($fileFoto->size > 1000 * 2000){
    die("File tidak boleh lebih dari 2MB");
}
if(isset($_POST['hitung'])){
    $bil1    =$_POST['bil1'];
    $bil2    =$_POST['bil2'];
    $operasi=$_POST['operasi'];

    switch ($operasi) {
        case 'tambah':
        $hasil = $bil1+$bil2;
        break;
        case 'kurang':
        $hasil = $bil1-$bil2;
        break;
        case 'kali':
        $hasil = $bil1*$bil2;
        break;
        case 'bagi':
        $hasil = $bil1/$bil2;
        break; 
    }
}
if(isset($_POST['hitung'])){
         echo "Hasil : $hasil";
    }
    else{
    ?>
        <input type="text" value="0" class="hasil"/>
    <?php
    }

?>
<br>
<button>
    <a href="form.php">Kembali</a>
</button>
    </div>
</body>
</html>