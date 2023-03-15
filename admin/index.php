<?php
    //mulai session
    session_start();
    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Web Koperasi Simpan Pinjam</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="wrapper">
        <?php
             include "menu.php";
             include "konten.php";
             include "footer.php";
            ?>
        </div>
    </body>
</html>