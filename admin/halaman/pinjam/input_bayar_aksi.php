<?php
include "../../../koneksi.php";
$username     = $_POST['username'];
$nama     = $_POST['nama'];
$tgl_bayar = date('Y-m-d', strtotime($_POST['tgl_bayar']));
$jml_bayar = $_POST['jml_bayar'];

if (empty($_POST['jml_bayar'])) {
    ?>
    <script language="JavaScript">
        alert('Masukkan Jumlah Bayar!');
        document.location='../../index.php?page=pinjam'
    </script>
    <?php
}
else {
    $query_input= mysqli_query($sambung,"INSERT INTO tbl_bayar (username,nama,tgl_bayar,jml_bayar)
    VALUES ('$username','$nama','$tgl_bayar','$jml_bayar')");

    $query_update= mysqli_query($sambung,"UPDATE tbl_member SET pinjaman=pinjaman - $jml_bayar
    WHERE username='$username'");
    if ($query_update){
        ?>
         <script language="JavaScript">
        alert('Data Pembayaran Tabungan Berhasil Diinput');
        document.location='../../index.php?page=pinjam'
        </script>
    <?php
    }
    else {
        echo "Pembayaran Gagal Diinput, Silahkan diulangi";
    }
    }
    ?>