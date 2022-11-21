<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Saitifik</title>
</head>
<body>
    <h1>Kalkulator Saintifik Sederhana</h1>
    <form>
        <input type="text" name="ekspresi">
        <div style="margin-top: 10px">
        <button type="button" onclick="location.href = '?'">Clear</button>
        <button type="submit">Submit</button>
        </div>
        <!-- Start count -->
        <?php
        if($_GET):
            $ekspresi = $_GET['ekspresi'];
            $hasil = eval("return {$ekspresi};"); ?>
            <div style = "margin-top:10px">
                Hasil <strong><?php echo $hasil?></strong>
            </div>
            <?php
            endif;
        ?>
        <!-- End count -->
    </form>
</body>
</html>