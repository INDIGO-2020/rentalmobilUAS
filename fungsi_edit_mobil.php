<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_tmp_anggaaf = $_POST['no_plat_tmp_anggaaf'];
$no_plat_anggaaf = $_POST['no_plat_anggaaf'];
$nama_mobil_anggaaf = $_POST['nama_mobil_anggaaf'];
$brand_mobil_anggaaf = $_POST['brand_mobil_anggaaf'];
$tipe_transmisi_anggaaf = $_POST['tipe_transmisi_anggaaf'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_mobil_anggaaf SET
no_plat_anggaaf='$no_plat_anggaaf', nama_mobil_anggaaf='$nama_mobil_anggaaf', 
brand_mobil_anggaaf='$brand_mobil_anggaaf', tipe_transmisi_anggaaf='$tipe_transmisi_anggaaf' WHERE no_plat_anggaaf='$no_plat_tmp_anggaaf'");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_mobil.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
}
