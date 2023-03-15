<h3 class="header-fitur">
    <center>Daftar Member Koperasi</center>
</h3>

<!--awal table-->
<table align="center" class="content-table">
    <!--awal header table-->
    <thead>
    <tr>
        <td align="center">No</td>
        <td>Username</td>
        <td>Nama</td>
        <td>NIK</td>
        <td>No HP</td>
        <td align="center">Aksi</td>
    </tr>
    </thead>
    <!--akhir header table-->

    <?php
        //koneksi ke database melalui koneksi.php
        include "../koneksi.php";

        //menentukan banyak nya data yang akan ditampilkan dalam 1 halaman
        $batas   = 10; 
        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
        $mulai  = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
        
        //ambil data dari tabel tbl_buku
        $ambildata1     = mysqli_query($sambung,"SELECT * FROM tbl_member LIMIT $mulai, $batas");
        $ambildata2     = mysqli_query($sambung,"SELECT * FROM tbl_member");
        $jumlahdata     = mysqli_num_rows($ambildata2);
        $jumlahhalaman  = ceil($jumlahdata / $batas);
        $nomor =$mulai+1;

        while ($tampildata = mysqli_fetch_array($ambildata1)) {
    ?>

        <!--awal menampilkan data dari tabel buku ke halaman web-->
        <tr>
            <td> <?php echo $nomor++?></td>
            <td> <?php echo $tampildata['username'] ?></td>
            <td> <?php echo $tampildata['nama'] ?></td>
            <td> <?php echo $tampildata['nik']?></td>
            <td> <?php echo $tampildata['no_hp']?></td>
            <td align="center">
                <a href="../admin/index.php?page=memberdetail&username=<?php echo $tampildata['username'];?>">Detail</a>
                |
                <a href="../admin/index.php?page=memberubah&username=<?php echo $tampildata['username'];?>">Edit</a>
                |
                <a href="halaman/member/memberhapus.php?username=<?php echo $tampildata['username'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data Member?')">Delete</a></td>
        </tr>
        <!--akhir menampilkan data dari tabel buku ke halaman web-->

    <?php
        }
    ?>
</table>
<!--akhir table-->

<!--awal menentukan banyaknya halaman pagination-->
<?php
    $ambildata2 = mysqli_query($sambung, "select * from tbl_member");
    $jumlahdata = mysqli_num_rows($ambildata2);
    $jumlahhalaman = ceil($jumlahdata/$batas);
?>
<!--akhir menentukan banyaknya halaman pagination-->

<p>

<!--awal navigasi pagination-->
<div align="center" class="pagination">
    <?php 
        for ($i=1; $i<=$jumlahhalaman; $i++) 
        { 
    ?>
        <a href="../admin/index.php?page=member&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php 
        } 
    ?>
</div>

<a href="index.php?page=membertambah"><img src="../image/add-user.png" width="50px" class="img-add-member"></a></button>
<!--akhir navigasi pagination-->