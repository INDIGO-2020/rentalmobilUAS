<?php
session_start();
if (empty($_SESSION['username_anggaaf']) and empty($_SESSION['password_anggaaf'])) {
    echo "<script>alert('AKSES DITOLAK'); window.location =
'login.php'</script>";
} else {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UAS PI : Tambah Mobil</title>

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
                <div class="logo"><a href="tambah_mobil.php">
                    <img src="assets/images/(AM) Mana Void Build.png" width= "10%" alt="" />
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
                                    <h1>HALAMAN TAMBAH DATA MOBIL</h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="tampil_mobil.php">Dashboard</a></li>
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
                                        <h4>Tambah Data Mobil </h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="basic-form">
                                        <form method="POST" action="fungsi_tambah_mobil.php">
                                                <div class="form-group">
                                                    <label for="no_plat_anggaaf" class="form-label">Plat Nomor</label>
                                                    <input type="text" name="no_plat_anggaaf" class="form-control"
                                                        id="no_plat_anggaaf" placeholder="Masukan No Plat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_mobil_anggaaf" class="form-label">Nama Mobil</label>
                                                    <input type="text" name="nama_mobil_anggaaf" class="form-control"
                                                        id="nama_mobil_anggaaf" placeholder="Masukan Nama Mobil" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="brand_mobil_anggaaf" class="form-label">Brand Mobil</label>
                                                    <input type="text" name="brand_mobil_anggaaf" class="form-control"
                                                        id="brand_mobil_anggaaf" placeholder="Masukan Nama Brand Mobil"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tipe_transmisi_anggaaf" class="form-label">Tipe Transmisi
                                                        :</label>
                                                    <select for="tipe_transmisi_anggaaf" name="tipe_transmisi_anggaaf"
                                                        class="form-control" id="tipe_transmisi_anggaaf" required>
                                                        <option value=""> -- Pilih Tipe Transmisi --</option>
                                                        <option value="Matic"> Matic</option>
                                                        <option value="Manual"> Manual</option>
                                                    </select>
                                                </div>
                                                <a href="tampil_mobil.php" class="btn btn-rounded btn-danger">Kembali</a>
                                                <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                        <!-- /# row -->


                    </div>
                </div>
            </div>
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