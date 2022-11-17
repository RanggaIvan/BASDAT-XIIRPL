<?php
//variabel lokal hanya bisa di akses dari scope dimana dia di definisikan

$nama = " guanteng bingits";

function halodunia(){
    $nama = "pak saipul"; //variable lokal
    echo $nama;

}

halodunia();
echo $nama;
?>