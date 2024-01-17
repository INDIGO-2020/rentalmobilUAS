<?php
session_start();
if (empty($_SESSION['username_anggaaf']) and empty($_SESSION['password_anggaaf'])) {
    echo "<script>alert('Akses DITOLAK'); window.location =
'login.php'</script>";
} else {

?>

    <!DOCTYPE html>
    <html lang="en" class="dark">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UAS PI : Edit Rental</title>

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
                <div class="logo"><a href="edit_rental.php"><img src="assets/images/(AM) Mana Void Build.png" width="10%" alt="" /><span>RENTAL MOBIL FAUZI</span></a></div>
                <div class="hamburger sidebar-toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="pull-right p-r-15">
                <ul>
                    <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/Hardwell-2.jpg" alt="" /> <span class="user-avatar"> ANGGA AF <i class="ti-angle-down f-s-10"></i></span>
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
                                    <h1>HALAMAN EDIT DATA RENTAL</h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="edit_rental.php">Dashboard</a></li>
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
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form method="POST" action="fungsi_edit_rental.php">
                                                <?php
                                                include "config/koneksi.php";
                                                $no_trx_anggaaf = $_GET['no_trx_anggaaf'];
                                                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_rental_anggaaf WHERE no_trx_anggaaf='$no_trx_anggaaf'");
                                                $data = mysqli_fetch_array($tampil);
                                                ?>
                                                <div class="form-group">
                                                    <label for="no_trx_anggaaf" class="form-label">No Transaksi :</label>
                                                    <input type="hidden" name="no_tmp_trx_anggaaf" value="<?= $data['no_trx_anggaaf'] ?>" class="form-control" id="no_tmp_trx_anggaaf">
                                                    <input type="text" name="no_trx_anggaaf" value="<?= $data['no_trx_anggaaf'] ?>" class="form-control" id="no_trx_anggaaf" placeholder="Masukan No Transaksi" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik_ktp_anggaaf" class="form-label">NIK KTP :</label>
                                                    <input type="number" name="nik_ktp_anggaaf" value="<?= $data['nik_ktp_anggaaf'] ?>" class="form-control" id="nik_ktp_anggaaf" placeholder="Masukan NIK KTP" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_plat_anggaaf" class="form-label">No Plat :</label>
                                                    <input type="text" name="no_plat_anggaaf" value="<?= $data['no_plat_anggaaf'] ?>" class="form-control" id="no_plat_anggaaf" placeholder="Masukan No Plat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_rental_anggaaf" class="form-label">Tanggal Rental :</label>
                                                    <input type="date" name="tgl_rental_anggaaf" value="<?= $data['tgl_rental_anggaaf'] ?>" class="form-control" id="tgl_rental_anggaaf" placeholder="Masukan Tanggal Rental" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jam_rental_anggaaf" class="form-label">Jam Rental :</label>
                                                    <input type="time" name="jam_rental_anggaaf" value="<?= $data['jam_rental_anggaaf'] ?>" class="form-control" id="jam_rental_anggaaf" placeholder="Masukan Jam Rental" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_anggaaf" class="form-label">Harga :</label>
                                                    <input type="text" name="harga_anggaaf" value="<?= $data['harga_anggaaf'] ?>" class="form-control" id="harga_anggaaf" placeholder="Masukan Harga" required oninput="hitungTotalBayar()">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lama_anggaaf" class="form-label">Lama Rental :</label>
                                                    <input type="text" name="lama_anggaaf" value="<?= $data['lama_anggaaf'] ?>" class="form-control" id="lama_anggaaf" placeholder="Masukan Lama Rental" required oninput="hitungTotalBayar()">
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_anggaaf" class="form-label">Total Bayar :</label>
                                                    <input type="text" name="total_anggaaf" value="<?= $data['total_anggaaf'] ?>" class="form-control" id="total_anggaaf" placeholder="Masukan Total Bayar" required readonly>
                                                </div>
                                                <a href="tampil_rental.php" class="btn btn-rounded btn-danger">Kembali</a> <button type="submit" class="btn btn-rounded btn-primary">Perbaharui</button>
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
    <script>
    // Fungsi untuk menghitung total pembayaran
    function hitungTotalBayar() {
        // Ambil nilai lama dan harga
        var lama = document.getElementById('lama_anggaaf').value;
        var harga = document.getElementById('harga_anggaaf').value;

        // Validasi untuk memastikan lama dan harga memiliki nilai numerik
        if (!isNaN(lama) && !isNaN(harga)) {
            // Hitung total pembayaran
            var totalBayar = lama * harga;

            // Tampilkan hasil pada input total_anggaaf
            document.getElementById('total_anggaaf').value = totalBayar;
        } else {
            // Handle jika input lama atau harga bukan angka
            alert('Masukkan nilai numerik untuk Lama dan Harga.');
        }
    }

    // Tambahkan event listener pada input lama_anggaaf
    document.getElementById('lama_anggaaf').addEventListener('input', hitungTotalBayar);
</script>

<?php } ?>

    </html>