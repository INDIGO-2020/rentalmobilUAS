<?php
include "config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_tmp_anggaaf = $_POST['nik_ktp_tmp_anggaaf'];
$nik_ktp_anggaaf = $_POST['nik_ktp_anggaaf'];
$nama_anggaaf = $_POST['nama_anggaaf'];
$no_hp_anggaaf = $_POST['no_hp_anggaaf'];
$alamat_anggaaf = $_POST['alamat_anggaaf'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_pelanggan_anggaaf SET
nik_ktp_anggaaf='$nik_ktp_anggaaf',
nama_anggaaf='$nama_anggaaf',
no_hp_anggaaf='$no_hp_anggaaf',
alamat_anggaaf='$alamat_anggaaf'
WHERE nik_ktp_anggaaf='$nik_ktp_tmp_anggaaf'
");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
