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

?>