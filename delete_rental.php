<?php
include "config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$no_plat_anggaaf = $_GET['no_trx_anggaaf'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_rental_anggaaf WHERE
no_trx_anggaaf='$_GET[no_trx_anggaaf]'");
if ($delete) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
}
