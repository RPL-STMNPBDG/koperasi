<!DOCTYPE html>
<html>
    <head>
        <title>Web Koperasi Simpan Pinjam</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>

    <body>
        <div class="container">
            <div class="login">
                <form method="post" action="login_aksi.php" name="formlogin">
                    <h1>Login</h1>
                    <hr>
                    <p>Koperasi Simpan Pinjam</p>
                    <label>Username</label>
                    <input type="text" name="nama" placeholder="Masukan Username Anda">
                    <label>Password</label>
                    <input type="password" name="katakunci" placeholder="Masukan Password Anda">
                    <input class="button" type="submit" name="tombollogin" value="LOGIN">
                    <p class="status">
                        <?php
                            if(isset($_GET['pesan']))
                            {
                                if($_GET['pesan']=='gagal')
                                {
                                    echo "Gagal Login, username atau password salah";
                                }
                                else
                                if($_GET['pesan']=='logout')
                                {
                                    echo "Anda sudah logout";
                                }
                                if($_GET['pesan']=='belum_login')
                                {
                                    echo "Anda harus login dahulu untuk mengakses halaman admin";
                                }
                            }
                        ?>
                </p>
                </form>
            </div>
            <div class="sisi">
                <img src="image/koperasi.png">
            </div>
            
        </div>
    </body>
</html>