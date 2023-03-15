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

    //cek tabungan
    $query= mysqli_query($sambung,"SELECT tabungan FROM tbl_member WHERE username='$username'");
    $data=mysqli_fetch_array($query);
    $tabungan=$data['tabungan'];
    if ($tabungan == 0) {
        ?>
        <script language="JavaScript">
            alert('Maaf, member ini tidak memiliki tabungan!');
            document.location = 'index.php?page=tabung';
        </script>
    <?php
    } else {
        ?>
        <h3 class="header-fitur">
    <center>Input Pengambilan Tabungan Koperasi</center>
</h3>
        <form action="halaman/tabung/ambil_tabungan_aksi.php" method="post" class="">
        <table class="table-form">
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
            <td>Tanggal Ambil</td>
            <td><input type="date" name="tgl_ambil"></td>
        </tr>

        <tr>
            <td>Jumlah Ambil</td>
            <td><input type="text" name="jml_ambil" maxlength="10"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="tombolambil" value="Ambil" class="button"></td>
        </tr>
    </table>
    </form>
    <?php
    }
    ?>