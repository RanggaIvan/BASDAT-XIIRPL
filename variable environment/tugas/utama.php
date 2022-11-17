<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " saya adalah siswa XII RPL";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = "";
    function lokal(){
        $skil = " saya bisa coding dan desain";
        echo $skil;
    }
    lokal();
    echo $skil;

?>