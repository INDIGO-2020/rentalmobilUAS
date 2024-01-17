<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_anggaaf = $_POST['nik_ktp_anggaaf'];
$nama_anggaaf = $_POST['nama_anggaaf'];
$no_hp_anggaaf = $_POST['no_hp_anggaaf'];
$alamat_anggaaf = $_POST['alamat_anggaaf'];
//Menjalankan kueri insert
$insert = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan_anggaaf (
    nik_ktp_anggaaf, nama_anggaaf, 
    no_hp_anggaaf, alamat_anggaaf
) VALUES (
    '$_POST[nik_ktp_anggaaf]', '$_POST[nama_anggaaf]',
    '$_POST[no_hp_anggaaf]', '$_POST[alamat_anggaaf]')");
if ($insert) {
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
