<?php
include "../../../koneksi.php";
$username     = $_POST['username'];
$nama     = $_POST['nama'];
$tgl_transaksi = date('Y-m-d', strtotime($_POST['tgl_transaksi']));
$jml_transaksi = $_POST['jml_transaksi'];

if (empty($_POST['jml_transaksi'])) {
    ?>
    <script language="JavaScript">
        alert('Masukkan Jumlah Transaksi!');
        document.location='../../index.php?page=pinjam'
    </script>
    <?php
}
else {
    $query_input=mysqli_query($sambung,"INSERT INTO tbl_pinjaman (username,nama,tgl_transaksi,jml_transaksi)
    VALUES ('$username','$nama','$tgl_transaksi','$jml_transaksi')");

    $query_update=mysqli_query($sambung,"UPDATE tbl_member SET pinjaman=pinjaman + $jml_transaksi
    WHERE username='$username'");
    if ($query_update){
        ?>
         <script language="JavaScript">
        alert('Data Peminjaman Berhasil Diinput');
        document.location='../../index.php?page=pinjam'
        </script>
    <?php
    }
    else {
        echo "Peminjaman Gagal Diinput, Silahkan diulangi";
    }
    }
    ?>