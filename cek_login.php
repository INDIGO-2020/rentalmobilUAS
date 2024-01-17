<?php
session_start();
include "config/koneksi.php";
$username = $_POST['username_anggaaf']; //username: angga
$password = md5($_POST['password_anggaaf']); //password: angga
$cari = mysqli_query($koneksi, "SELECT * FROM tbl_user_anggaaf WHERE username_anggaaf='$username'
AND password_anggaaf='$password'");
$data = mysqli_fetch_array($cari);
if (!empty($data['username_anggaaf'])) {
    $_SESSION['username_anggaaf'] = $data['username_anggaaf'];
    $_SESSION['password_anggaaf'] = $data['password_anggaaf'];
    $_SESSION['nama_lengkap_anggaaf'] = $data['nama_lengkap_anggaaf'];
    $_SESSION['level_anggaaf'] = $data['level_anggaaf'];
    echo "<script>alert('Berhasil Login');
    window.location='tampil_mobil.php';</script>";
} else {
    echo "<script>alert('Coba Lagi!!'); window.location='login.php';</script>";
}
