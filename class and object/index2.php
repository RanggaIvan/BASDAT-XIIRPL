<?php

// Cara mengakses Class dan Object

use mobil as GlobalMobil;

class mobil{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    // membyuat fungsi / operasi berjalan ( maju dan mundur )
    function jalan_maju(){
        return "Vrooommm Majuu";
    }
    function jalan_mundur(){
        return "Vrooommm ciiittt mundur";
    }
}

// instansiasi ( menginstalkan variabel yang menghubungkan dari class keluar class )
// $mobil_keren = Objek
$mobil_keren = new mobil();

// set property ( mengiisi Property dengan mengakses diluar class )
$mobil_keren->merk="Ferrari";
$mobil_keren->roda="Hitam";
$mobil_keren->kecepatan="300KmH";

// Tampilan Propertinya
echo $mobil_keren->merk;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;
echo "<br />";

//Tampilkan Function
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();
?>