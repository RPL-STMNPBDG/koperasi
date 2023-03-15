<?php
include "../../../koneksi.php";
$config['rewrite_short_tags']=FALSE;
$username     = $_POST['username'];
$nama     = $_POST['nama'];
$tgl_tabungan = date('Y-m-d', strtotime($_POST['tgl_tabungan']));
$jml_tabungan = $_POST['jml_tabungan'];

if (empty($_POST['jml_tabungan'])) {
    ?>
    <script language="JavaScript">
        alert('Masukkan Jumlah Tabungan!');
        document.location='../../index.php?page=tabung'
    </script>
    <?php
}
else {
    $query_input= mysqli_query($sambung,"INSERT INTO tbl_tabungan (username,nama,tgl_tabungan,jml_tabungan)
    VALUES ('$username','$nama','$tgl_tabungan','$jml_tabungan')");

    $query_update=mysqli_query($sambung,"UPDATE tbl_member SET tabungan=tabungan + $jml_tabungan
    WHERE username='$username'");
    if ($query_update){
        ?>
         <script language="JavaScript">
        alert('Data Tabungan Berhasil Diinput');
        document.location='../../index.php?page=tabung'
        </script>
    <?php
    }
    else {
        echo "Tabungan Gagal Diinput, Silahkan diulangi";
    }
    }
    ?>