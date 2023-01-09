<?php
            include '../koneksi.php';

            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            //Validasi data kosong
            if(empty($_POST['nama'])||empty($_POST['telp'])||empty($_POST['alamat'])
            ||empty($_POST['email'])||empty($_POST['pass'])){
                ?>
                <script lang="JavaScript">
                    alert('Data harus di lengkapi yahh');
                    document.location='add_anggota.php';
                </script>
            <?php
            }

            $input = mysqli_query($koneksi, "insert into anggota values('','$nama','$telp','$alamat','$email','$pass')");

            if($input){
                ?>
                <script>
                    alert('Data berhasil Ditambahkan!!');
                    window.location = "index.php";
                </script>
                <?php
            }else{
                ?>  
                <script>
                alert('Data Gagal Ditambahkan');
                window.location = "add_anggota.php"
                </script>
                <?php
            }
        ?>