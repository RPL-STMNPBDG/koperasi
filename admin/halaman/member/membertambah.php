<h3 class="header-fitur">
    <center>Input Data Member Koperasi</center>
</h3>
<form action="halaman/member/membertambah_aksi.php" method="post" enctype="multipart/form-data" align="center">
    <table align="center" class="table-form">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" maxlength="20" placeholder="Masukan Username"></td>
        </tr>
        
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" maxlength="20" placeholder="Masukan Password"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" maxlength="45" placeholder="Masukan Nama Member"></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" placeholder="Masukan NIK"></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tgl_lahir">
            </td>
        </tr>
        
        <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-Laki" checked> Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan</td>
        </tr>

        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" maxlength="20" placeholder="Masukkan Pekerjaan"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" maxlength="100" placeholder="Masukan Alamat"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email" maxlength="40" placeholder="Masukan Email"></td>
        </tr>

        <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="no_hp" maxlength="20" placeholder="Masukan Username"></td>
        </tr>

        <tr>
                <td>Foto Profil</td>
                <td><input type="file" name="foto"></td>
            </tr>
        <tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>