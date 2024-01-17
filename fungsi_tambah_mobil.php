<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_anggaaf = $_POST['no_plat_anggaaf'];
$nama_mobil_anggaaf = $_POST['nama_mobil_anggaaf'];
$brand_mobil_anggaaf = $_POST['brand_mobil_anggaaf'];
$tipe_transmisi_anggaaf = $_POST['tipe_transmisi_anggaaf'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_mobil_anggaaf (
    no_plat_anggaaf, nama_mobil_anggaaf, brand_mobil_anggaaf, tipe_transmisi_anggaaf
    ) VALUES (
        '$_POST[no_plat_anggaaf]', '$_POST[nama_mobil_anggaaf]',
        '$_POST[brand_mobil_anggaaf]', '$_POST[tipe_transmisi_anggaaf]')");
if ($insert) {
    //Jika proses delete berhasil
    header("location:tampil_mobil.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_mobil.php'>Coba Lagi</a>";
}
