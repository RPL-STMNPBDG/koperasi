<?php
    include "../koneksi.php";
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
        $hasil = mysqli_query($sambung,"SELECT * FROM tbl_member WHERE username='$username'");
        $data = mysqli_fetch_array($hasil);
        $username = $data['username'];
        $nama = $data['nama'];
    }
    else {
        die ("Error. Tidak ada Username yang dipilih silahkan cek kembali");
    }

    //cek pinjaman
    $query= mysqli_query($sambung,"SELECT pinjaman FROM tbl_member WHERE username='$username'");
    $data=mysqli_fetch_array($query);
    $pinjaman=$data['pinjaman'];
    if ($pinjaman == 0) {
        ?>
        <script language="JavaScript">
            alert('Maaf, member ini tidak memiliki pinjaman!');
            document.location = 'index.php?page=pinjam';
        </script>
    <?php
    } else {
?>
<h3 class="header-fitur">
    <center>Input Pembayaran Koperasi</center>
</h3>
<form action="halaman/pinjam/input_bayar_aksi.php" method="post" name="forinput">
        <table align="center" class="table-form">
        <tr>
            <td><input type="button" value="Batalkan" onclick=location.href="index.php?page=tabung" class="button"></td>
            <td></td>
        </tr>
        
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" maxlength="20" value="<?=$username?>" disabled="disabled">
                <input name="username" type="hidden" value="<?=$username?>"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" maxlength="20" value="<?=$nama?>" disabled="disabled">
                <input name="nama" type="hidden" value="<?=$nama?>"></td>
        </tr>

        <tr>
            <td>Tanggal Bayar</td>
            <td><input type="date" name="tgl_bayar"></td>
        </tr>

        <tr>
            <td>Jumlah Bayar</td>
            <td><input type="text" name="jml_bayar" maxlength="10"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="tombolbayar" value="Bayar" class="button"></td>
        </tr>
        </table>
    </form>
    <?php
    }
    ?>