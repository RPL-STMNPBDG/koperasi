<div class="konten">
<?php
    $page = (isset($_GET['page']))? $_GET['page'] : "home";
    switch ($page) {
    case 'home':
    include "halaman/home.php";
    break;
    case 'fitur':
    include "halaman/fitur.php";
    break;
    case 'kontak':
    include "halaman/kontak.php";
    break;
    case 'member':
    include "halaman/member/member.php";
    break;
    case 'tabung':
    include "halaman/tabung/tabung.php";
    break;
    case 'pinjam':
    include "halaman/pinjam/pinjam.php";
    break;
    case 'membertambah':
    include "halaman/member/membertambah.php";
    break;
    case 'memberubah':
    include "halaman/member/memberubah.php";
    break;
    case 'memberdetail':
    include "halaman/member/memberdetail.php";
    break;
    case 'inputtabung':
    include "halaman/tabung/input_tabungan.php";
    break;
    case 'ambiltabung':
    include "halaman/tabung/ambil_tabungan.php";
    break;
    case 'inputpinjam':
    include "halaman/pinjam/input_pinjam.php";
    break;
    case 'inputbayar':
    include "halaman/pinjam/input_bayar.php";
    break;    
    default :
    include "halaman/error.php";
            }
            ?>
</div>