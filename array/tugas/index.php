<?php

   // variabel Siswa denggan 10 Data ( Teman Favorit )
   $siswa = array("hasan","erlangga","adi","zidan","erlana","fajar","putra","putra","iqbal","pratama");
   echo "Siapa Teman Favoritmu ?";
   echo "<br />";
   print_r ($siswa);
   echo "<hr />";

// menambahkan 2 Teman Favorit dengan Array Push
   array_push($siswa, "fayi","nazhif");
   echo "Siapa 2 Teman Favoritmu yang Baru ?";
   echo "<br />";
   echo $siswa[10];
   echo "<br />";
   echo $siswa[11];
   echo "<hr />";

//    perintah Operasi menampilkan semua Data
   echo "Siapa semua Teman Favoritmu ?";
   echo "<br />";
   print_r ($siswa);
?>