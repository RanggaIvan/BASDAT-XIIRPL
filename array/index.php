<?php

// array adalah tipe data yang berisi beberapa tipe data ( String maupun Integer )
// Keynya diawali dengan angka 0 dst

// Array Asosiatif / Satu Dimension
// Keynya berubah menjadi tipe data string

$siswa = [
    //  Keynya bisa Int / String
    1 => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi',
];

// echo "siapa yang paling ganteng? {$siswa['1']}";

// Array Multidimension 
// ada Array di dalam Array

$togel = [
    [1,2,3,4,5],
    [6,7,8,9,22],
    [12,15,13,14,51],
    [19,21,31,47,35]
];

// cara memanggil Array
// echo $togel[2][3];

// Array Push
// Array Push berguna untuk menerima 2 Parameter, Parameter pertama : untuk Target, Paramater kedua untuk Nilai yang akan dimasukkan

$sayur = ['bayam','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// Cara pertama untuk menambahkan Item
array_push($buah, 'timun');

// Cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];
?>