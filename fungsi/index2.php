<?php
// Function itu ada 2, ada yang mengembalikan Nilai dan ada yang tidak
// Array yang bernilai 3 Nilai

$a = ['merah', 'kuning', 'hijau'];

// Fungsi dari is_null itu mengembalikan nilai bernilai true or false
$fungsi_is_null = is_null($a);

// fungsi dari is_array itu mengembalikan apakah array atau tidak
$fungsi_is_array= is_array($a);

// fungsi dari Count
$panjang = count($a);

// fungsi mengenkripsi karakter MD5
$enkripsi = md5('Sebenarnya aku masih sayang sama kamu');

// fungsi var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br />";
var_dump($fungsi_is_array);
echo "<br />";
var_dump($panjang);
echo "<br />";
var_dump($enkripsi);

?>