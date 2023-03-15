<?php
    include "../koneksi.php";
    $username = $_GET['username'];
    $ambildata = mysqli_query($sambung, "select * from tbl_member where username='$username'");
    while ($tampildata = mysqli_fetch_array($ambildata)) {
?>
<h3 class="header-fitur">
    <center>Detail Member Koperasi</center>
</h3>
<div class="wrapper-detail">
<table class="table-form" align="center">
            <tr>
                <td><input type="button" value="Kembali" onclick=location.href="index.php?page=member" class="button"></td>
                <td></td>
            </tr>
            <tr>
                <td class="form-header">Username</td>
                <td><input type="text" name="username" value="<?php echo $tampildata['username'] ?>"></td>
                <td class="form-header">Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $tampildata['pekerjaan'] ?>"></td>
            </tr>

            <tr>
                <td class="form-header">Nama</td>
                <td><input type="text" name="nama" value="<?php echo $tampildata['nama'] ?>"></td>
                <td class="form-header">Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $tampildata['alamat'] ?>"></td>
            </tr>

            <tr>
                <td class="form-header">NIK</td>
                <td><input type="text" name="nik" value="<?php echo $tampildata['nik'] ?>"></td>
                <td class="form-header">Email</td>
                <td><input type="text" name="email" value="<?php echo $tampildata['email'] ?>"></td>
            </tr>

            <tr>
                <td class="form-header">Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value="<?php echo $tampildata['tgl_lahir'] ?>"></td>
                <td class="form-header">Nomor HP</td>
                <td><input type="text" name="no_hp" value="<?php echo $tampildata['no_hp'] ?>"></td>
            </tr>

            <tr>
                <td class="form-header">Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $tampildata['jenis_kelamin'] ?>"
            </tr>
        </table>
<div class="img-wrapper-detail">
    <img src="<?php echo 'halaman/member/gambar/' . $tampildata['profil']; ?>" height="150px">
</div>
</div>
<?php
}
?>