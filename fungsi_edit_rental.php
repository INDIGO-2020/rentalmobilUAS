<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_tmp_anggaaf = $_POST['no_tmp_trx_anggaaf'];
$no_trx_anggaaf = $_POST['no_trx_anggaaf'];
$nik_ktp_anggaaf = $_POST['nik_ktp_anggaaf'];
$no_plat_anggaaf = $_POST['no_plat_anggaaf'];
$tgl_rental_anggaaf = $_POST['tgl_rental_anggaaf'];
$jam_rental_anggaaf = $_POST['jam_rental_anggaaf'];
$harga_anggaaf = $_POST['harga_anggaaf'];
$lama_anggaaf = $_POST['lama_anggaaf'];
$total_anggaaf = $_POST['total_anggaaf'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_rental_anggaaf SET
no_trx_anggaaf='$no_trx_anggaaf',
nik_ktp_anggaaf='$nik_ktp_anggaaf',
no_plat_anggaaf='$no_plat_anggaaf',
tgl_rental_anggaaf='$tgl_rental_anggaaf',
jam_rental_anggaaf='$jam_rental_anggaaf',
harga_anggaaf='$harga_anggaaf',
lama_anggaaf='$lama_anggaaf',
total_anggaaf='$total_anggaaf'
WHERE no_trx_anggaaf='$no_trx_tmp_anggaaf'
");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
