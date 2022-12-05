<?php 
    $nama = @$_POST['nama'];
    $checkIn = @$_POST['cek'];
    $kontak = @$_POST['kontak'];
    $tipe = @$_POST['tipe'];
    $kamar = @$_POST['kamar'];
    $bf = @$_POST['breakfast'];
    $files = $_FILES;
    $folder_upload = "./assets/uploads";
    
    if(!is_dir($folder_upload)){
        mkdir($folder_upload, 0777, $rekursif = true);
    }
    
    $fileFoto = (object) @$_FILES['foto'];

    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );
    
    $totalBf = 50000 * $bf;
    $totalKmr = $tipe * $kamar;
    $totalAll = $totalKmr + $totalBf;


    echo "Nama Pemesanan Kamar : {$nama} <br>";
    echo "Tanggal Check In : {$checkIn} <br>";
    echo "No Handphone : {$kontak} <br>";
    echo "Harga Kamar ". number_format($totalKmr,0,',','.') ." <br>";
    echo "Breakfast Untuk {$bf} Orang, Jadi harganya ". number_format($totalBf,0,',','.') ."<br>";
    echo "Total Harga ". number_format($totalAll,0,',','.') ."<br>";
    if($uploadFotoSukses){
        $link = "{$folder_upload}/{$fileFoto->name}";
        echo "Contoh kamar yang di pesan : <a href='{$link}'>{$fileFoto->name}</a>";
        echo "<br>";
    }
?>