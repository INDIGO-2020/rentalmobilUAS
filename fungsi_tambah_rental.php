<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_anggaaf = $_POST['no_trx_anggaaf'];
$nik_ktp_anggaaf = $_POST['nik_ktp_anggaaf'];
$no_plat_anggaaf = $_POST['no_plat_anggaaf'];
$tgl_rental_anggaaf = $_POST['tgl_rental_anggaaf'];
$jam_rental_anggaaf = $_POST['jam_rental_anggaaf'];
$harga_anggaaf = $_POST['harga_anggaaf'];
$lama_anggaaf = $_POST['lama_anggaaf'];
$total_bayar_anggaaf = $_POST['total_bayar_anggaaf'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_rental_anggaaf
(no_trx_anggaaf, nik_ktp_anggaaf,
no_plat_anggaaf, tgl_rental_anggaaf,
jam_rental_anggaaf, harga_anggaaf,
lama_anggaaf, total_anggaaf
) VALUES (
    '$_POST[no_trx_anggaaf]', '$_POST[nik_ktp_anggaaf]',
    '$_POST[no_plat_anggaaf]', '$_POST[tgl_rental_anggaaf]',
    '$_POST[jam_rental_anggaaf]', '$_POST[harga_anggaaf]',
    '$_POST[lama_anggaaf]', '$_POST[total_anggaaf]')");
if ($insert) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
