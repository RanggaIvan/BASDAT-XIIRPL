<?php
// cek button sudah terpencet atau belum
if($_POST['submit'] == 'submit'){
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
}

// Validasi data kosong
if(empty($_POST['nama'])||empty($_POST['no_telp'])||empty($_POST['alamat'])||empty($_POST['email'])){
    ?>
    <!-- Warning -->
    <script lang="JavaScript">
        alert('Data harus di lengkapi yahh');
        document.location='tambah.php';
    </script>
<?php
}else{
    include 'koneksi.php';
}

// Fungsi input ke tablenya yah
$input = "insert into anggota values ('','$nama','$no_telp','$alamat','$email','')";

$query_input = mysqli_query($koneksi,$input);

// Jika data masuk atau tidak
if($query_input){
    // Jika Sukses
    ?>
    <script lang="JavaScript">
        alert('Berhasil!');
    </script>
    <?php
}else{
    //Jika Gagal
    echo "Input data tidak berhasil silahkan isi kembali yah";
}

?>