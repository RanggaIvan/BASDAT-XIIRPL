<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get and Post</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label><br>
            <input type="text" name="nama" placeholder="masukkan nama">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email" placeholder="masukkan email">
        </div>
        <div>
            <button>Submit</button>
        </div>
        <?php
        //@ berfungsi untuk mengubah nilai menjadi null jika form tidak di isi
            $nama = @$_GET['nama'];
            $email = @$_GET['email'];

            echo "Nama  : {$nama} <br>";
            echo "Email : {$email}";
        ?>
    </form>
</body>
</html>