<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan metode post</title>
</head>
<body>
    <h1>Mnggunakan Metode POST</h1>
    <form method="POST">
        <!--passing data di dalam body request tanpa menampilkan secara url-->
        <div>
            <label>Email</label><br>
            <input type="email" name="email">
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <button>Login</button>
        </div>
        <?php

        $email = @$_POST['email'];
        $password = @$_POST['password'];

        echo "email  = {$email} <br>";
        echo "passwordnya = {$password}";
        ?>
    </form>
</body>
</html>