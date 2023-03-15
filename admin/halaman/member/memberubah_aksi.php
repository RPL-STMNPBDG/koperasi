<?php
    //koneksi dengan database
    include '../../../koneksi.php';

        //menangkap data yang dikirim dari form dengan methode post
        $username     = $_POST['username'];
        $password      = $_POST['password'];
        $nama  = $_POST['nama'];
        $nik   = $_POST['nik'];
        $tgl_lahir   = date('Y-m-d', strtotime($_POST['tgl_lahir']));
        $jenis_kelamin   = $_POST['jenis_kelamin'];
        $pekerjaan   = $_POST['pekerjaan'];
        $alamat   = $_POST['alamat'];
        $email   = $_POST['email'];
        $no_hp   = $_POST['no_hp'];
        $fotolama = $_POST['fotolama'];

        $tmpname = $_FILES['foto']['tmp_name'];
        $namafile = $_FILES['foto']['name'];

        if($namafile){
            unlink('gambar/'.$fotolama);

            move_uploaded_file($tmpname,'gambar/'.$namafile);

            mysqli_query($sambung,"UPDATE tbl_member SET nama='$nama',nik='$nik',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',pekerjaan='$pekerjaan',alamat='$alamat', email='$email',no_hp='$no_hp',profil='$namafile' WHERE username='$username'");
        }else{
            mysqli_query($sambung,"UPDATE tbl_member SET nama='$nama',nik='$nik',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',pekerjaan='$pekerjaan',alamat='$alamat', email='$email',no_hp='$no_hp' WHERE username='$username'");
        }
        
        
        //mengalihkan ke halaman daftar member
        header("location:../../index.php?page=member");
?>