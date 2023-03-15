<?php
    include "../../../koneksi.php";

    if(isset($_POST['tomboltambah'])){
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
        $foto = upload_file();

                    if(!$foto){
                        return false;
                    }

                    mysqli_query($sambung,
                    "INSERT INTO tbl_member (username,password,nama,nik,tgl_lahir,jenis_kelamin,pekerjaan,
                    alamat,email,no_hp,profil)
                    values ('$username','$password','$nama','$nik','$tgl_lahir','$jenis_kelamin','$pekerjaan',
                    '$alamat','$email','$no_hp','$foto')");
    }

    function upload_file(){
        $namafile = $_FILES['foto']['name'];
        $ukuranfile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpname = $_FILES['foto']['tmp_name'];

        $extensifileValid = ['png', 'jpg', 'jpeg'];
        $extensifile = explode('.', $namafile);
        $extensifile = strtolower(end($extensifile));

        if (!in_array($extensifile, $extensifileValid)) {
            echo "<script>
                    alert('Format File Tidak Valid');
                    document.location.href = '../../index.php?page=membertambah';
                </script>";
                die();
        }

        if($ukuranfile >2048000) {
            echo "<script>
                    alert('Ukuran File Max 2MB');
                    document.location.href = '../../index.php?page=membertambah';
                </script>";
                die();
        }


        //pindahkan ke folder local
        move_uploaded_file($tmpname,'gambar/'. $namafile);
        return $namafile;
    }
    

    header("location:../../index.php?page=member");
                
?>