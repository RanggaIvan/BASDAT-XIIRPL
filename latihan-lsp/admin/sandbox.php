<html>
    <head>
        <title>SANDBOX</title>
    </head>
    <body>
        <h1>Welcome to sandbox</h1>
        <h3>Let's Experiments</h3>

        <!-- forsearching -->
        <form action="sandbox.php" method="get">
            <label>Cari</label>
            <input type="text" name="cari">
            <input type="submit" value="search">
        </form>
        <!-- forsearching -->

        <?php
         include '../koneksi.php';
         if(isset($_GET['cari'])){
             $cari = $_GET['cari'];
             echo "Hasil pencarian : ".$cari;
         }
        ?>

         <table>
             <tr>
                 <th>No</th>
                 <th>Nama</th>
            </tr>
            
            <?php
        include '../koneksi.php';
        //Hasil pencarian muncul disini
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "select * from anggota where nama like '%".$cari."%'");
        }else{
            $data = mysqli_query($koneksi, "select * from anggota");
        }
        $no = 1;    
        while($meledak = mysqli_fetch_array($data)){
        //Hasil pencarian muncul disini
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $meledak['nama']; ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>