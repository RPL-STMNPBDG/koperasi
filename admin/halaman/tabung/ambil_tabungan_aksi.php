<?php
include "../../../koneksi.php";
$username     = $_POST['username'];
$nama     = $_POST['nama'];
$tgl_ambil = date('Y-m-d', strtotime($_POST['tgl_ambil']));
$jml_ambil = $_POST['jml_ambil'];

if (empty($_POST['jml_ambil'])) {
    ?>
    <script language="JavaScript">
        alert('Masukkan Jumlah Pengambilan!');
        document.location='../../index.php?page=tabung'
    </script>
    <?php
}
else {
    $query_input=mysqli_query($sambung,"INSERT INTO ambil_tabungan (username,nama,tgl_ambil,jml_ambil)
    VALUES ('$username','$nama','$tgl_ambil','$jml_ambil')");

    $query_update=mysqli_query($sambung,"UPDATE tbl_member SET tabungan=tabungan - $jml_ambil
    WHERE username='$username'");
    if ($query_update){
        ?>
         <script language="JavaScript">
        alert('Data Pengembalian Tabungan Berhasil Diinput');
        document.location='../../index.php?page=tabung'
        </script>
    <?php
    }
    else {
        echo "Pengembalian Gagal Diinput, Silahkan diulangi";
    }
    }
    ?>