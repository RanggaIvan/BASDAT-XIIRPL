<?php

// penggunaan Array mengunakan For dan Foreach
// For perulangan yang akan diulang sesuai set yang kita atur

// variabel angka memiliki Nilai pertama = 0 dan diakhiri kurang dari atau sama dengan 10, dihitung Increment
// for ($angka = 0; $angka <=10; $angka++){
//     echo "angkanya adalah : $angka <br>";
// }

// Foreach  String, Char
// foreach mengulang sesuai nilai yang mau diambil (key)
// $warna = array("merah", "hijau", "biru", "kuning");

// foreach ($warna as $variasi) {
//     echo "berwarna : $variasi <br>";
// }

// Tugas Menerapkan For dan Foreach menggunakan PHP
$days = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

?>

<html>
    <head>
        <title> Latihan menggunakan For dan Foreach</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        for ($hari =0; $hari < count ($days); $hari++){
            ?>
            <div class="box">
                <?php echo $days[$hari];?>
            </div>
            <?php } ?>
            <div class="clear">
                <?php foreach($days as $hari_hari) { ?>
                    <div class="box2">
                        <?php echo $hari_hari; ?>
                    </div>
            </div>
            <?php } ?>
    </body>
</html>