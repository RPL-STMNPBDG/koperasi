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
?>
<h3 class="header-fitur">
    <center>Input Peminjaman Koperasi</center>
</h3>
<form action="halaman/pinjam/input_pinjam_aksi.php" method="post" name="forinputpinjam">
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
            <td>Tanggal Transaksi</td>
            <td><input type="date" name="tgl_transaksi"></td>
        </tr>

        <tr>
            <td>Jumlah Pinjaman</td>
            <td><input type="text" name="jml_transaksi" maxlength="10"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="tombolambil" value="Pinjam" class="button"></td>
        </tr>
        </table>
    </form>