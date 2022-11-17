<?php
// function kalimat / Class
function kalimat($nama, $jumlah, $angka){
    echo "<h3> saat aku menggunakan [$nama] </h3>";
    echo "<h3> aku gunakan [$jumlah] satu lembar </h3>";
    echo "<h3> [$jumlah] harganya [$angka] </h3>";
};

// menghitung Count
kalimat('tisu','satu lembar','2000');

// variabel untuk Count
$a = ['saat', 'aku', 'menggunakan','tisu'];
$b = ['aku', 'gunakan', 'jumlah','satu', 'lembar', 'satu', 'lembar'];
$c = ['jumlah', 'harganya', '2000'];

// biar muncul
$kalimat1 = count($a);
$kalimat2 = count($b);
$kalimat3 = count($c);

echo "ini adalah Jumlah Count dari kalimat diatas :";
echo "<br />";

// Operasi
var_dump($kalimat1);
echo "<br />";
var_dump($kalimat2);
echo "<br />";
var_dump($kalimat3);
echo "<br />";

?>