<?php
session_start();
if (empty($_SESSION['username_anggaaf']) and empty($_SESSION['password_anggaaf'])) {
echo "<script>alert('Anda tidak memiliki akses'); window.location =
'login.php'</script>";
} else {

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>UAS PI : Tampil Pelanggan</title>

<!-- ================= Favicon ================== -->
<!-- Standard -->
<link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
<!-- Retina iPad Touch Icon-->
<link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
<!-- Retina iPhone Touch Icon-->
<link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
<!-- Standard iPad Touch Icon-->
<link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
<!-- Standard iPhone Touch Icon-->
<link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

<!-- Styles -->
<link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/lib/themify-icons.css" rel="stylesheet">
<link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
<link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/lib/unix.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php include "menu.php"; ?>


<div class="header">
<div class="pull-left">
<div class="logo"><a href="tampil_pelanggan.php">
<img src="assets/images/(AM) Mana Void Build.png" width="10%" alt="" />
<span>RENTAL MOBIL AAF</span></a></div>
<div class="hamburger sidebar-toggle">
<span class="line"></span>
<span class="line"></span>
<span class="line"></span>
</div>
</div>

<div class="pull-right p-r-15">
<ul>
<li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/Hardwell-2.jpg" alt="" /> <span
class="user-avatar"> ANGGA AF <i class="ti-angle-down f-s-10"></i></span>
<div class="drop-down dropdown-profile">
<div class="dropdown-content-body">
<ul>
    <li><a href="logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
</ul>
</div>
</div>
</li>
</ul>
</div>
</div>

<div class="content-wrap">
<div class="main">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8 p-r-0 title-margin-right">
<div class="page-header">
<div class="page-title">
    <h1>HALAMAN DATA PELANGGAN</h1>
</div>
</div>
</div>
<!-- /# column -->
<div class="col-lg-4 p-l-0 title-margin-left">
<div class="page-header">
<div class="page-title">
    <ol class="breadcrumb text-right">
        <li><a href="tampil_pelanggan.php">Dashboard</a></li>
    </ol>
</div>
</div>
</div>
<!-- /# column -->
</div>
<!-- /# row -->
<div id="main-content">
<div class="row">
<!-- /# column -->
<div class="col-lg-12">
<div class="card alert">
    <div class="card-header">
    </div>
    <a href="tambah_pelanggan.php" type="button" class="btn btn-rounded btn-success">Tambah Data</a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Pelanggan</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                include "config/koneksi.php";
                $i = 0;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_anggaaf");
                while ($data = mysqli_fetch_array($tampil)) {
                    $i++;
                ?>
                        <tr>
                            <td>
                            <?= $i ?></td>
                            <td><?= $data['nik_ktp_anggaaf'] ?></td>
                            <td><?= $data['nama_anggaaf'] ?></td>
                            <td><?= $data['no_hp_anggaaf'] ?></td>
                            <td><?= $data['alamat_anggaaf'] ?></td>
                            <td>
                            <a href="edit_pelanggan.php?nik_ktp_anggaaf=<?= $data['nik_ktp_anggaaf'] ?>" class='btn btn-rounded btn-primary'>Edit</a>
                            <a href="delete_pelanggan.php?nik_ktp_anggaaf=<?= $data['nik_ktp_anggaaf'] ?>" class='btn btn-rounded btn-danger' onclick="return confirm('Hapus data ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>
<!-- /# row -->
<div class="register-link m-t-15 text-center">
<p>CV. RENTAL MOBIL ANGGAAF</p>
</div>

</div>
</div>
</div>
</div>






<div id="search">
<button type="button" class="close">×</button>
<form>
<input type="search" value="" placeholder="type keyword(s) here" />
<button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/scripts.js"></script>
<!-- scripit init-->





</body>
<?php } ?>

</html>