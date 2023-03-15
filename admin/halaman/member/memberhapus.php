<?php
    //koneksikan dengan database
    include "../../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $username=$_GET['username'];

    //query untuk menghapus data buku
    mysqli_query($sambung,"delete from tbl_member where username='$username'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:../../index.php?page=member");
?>