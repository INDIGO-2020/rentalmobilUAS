-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 02:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_anggaaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil_anggaaf`
--

CREATE TABLE `tbl_mobil_anggaaf` (
  `no_plat_anggaaf` varchar(10) NOT NULL,
  `nama_mobil_anggaaf` varchar(25) NOT NULL,
  `brand_mobil_anggaaf` varchar(25) NOT NULL,
  `tipe_transmisi_anggaaf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mobil_anggaaf`
--

INSERT INTO `tbl_mobil_anggaaf` (`no_plat_anggaaf`, `nama_mobil_anggaaf`, `brand_mobil_anggaaf`, `tipe_transmisi_anggaaf`) VALUES
('D 2301 HZ', 'Shizuka', 'Jepang', 'Matic'),
('Z 1123 HA', 'Aqua', 'Air Murni', 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan_anggaaf`
--

CREATE TABLE `tbl_pelanggan_anggaaf` (
  `nik_ktp_anggaaf` varchar(16) NOT NULL,
  `nama_anggaaf` varchar(35) NOT NULL,
  `no_hp_anggaaf` varchar(15) NOT NULL,
  `alamat_anggaaf` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan_anggaaf`
--

INSERT INTO `tbl_pelanggan_anggaaf` (`nik_ktp_anggaaf`, `nama_anggaaf`, `no_hp_anggaaf`, `alamat_anggaaf`) VALUES
('220301028', 'Anggi', '08129382134', 'disini                                       ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_anggaaf`
--

CREATE TABLE `tbl_rental_anggaaf` (
  `no_trx_anggaaf` varchar(20) NOT NULL,
  `nik_ktp_anggaaf` varchar(16) NOT NULL,
  `no_plat_anggaaf` varchar(10) NOT NULL,
  `tgl_rental_anggaaf` date NOT NULL,
  `jam_rental_anggaaf` time NOT NULL,
  `harga_anggaaf` int(11) NOT NULL,
  `lama_anggaaf` int(11) NOT NULL,
  `total_anggaaf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rental_anggaaf`
--

INSERT INTO `tbl_rental_anggaaf` (`no_trx_anggaaf`, `nik_ktp_anggaaf`, `no_plat_anggaaf`, `tgl_rental_anggaaf`, `jam_rental_anggaaf`, `harga_anggaaf`, `lama_anggaaf`, `total_anggaaf`) VALUES
('TRX - 20240115100747', '220301028', 'D 2301 HZ', '2024-01-15', '16:07:00', 250000, 10, 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_anggaaf`
--

CREATE TABLE `tbl_user_anggaaf` (
  `id_user_anggaaf` int(11) NOT NULL,
  `username_anggaaf` varchar(35) NOT NULL,
  `password_anggaaf` varchar(100) NOT NULL,
  `nama_lengkap_anggaaf` varchar(35) NOT NULL,
  `level_anggaaf` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_anggaaf`
--

INSERT INTO `tbl_user_anggaaf` (`id_user_anggaaf`, `username_anggaaf`, `password_anggaaf`, `nama_lengkap_anggaaf`, `level_anggaaf`) VALUES
(1, 'angga', '8479c86c7afcb56631104f5ce5d6de62', 'anggaaf', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mobil_anggaaf`
--
ALTER TABLE `tbl_mobil_anggaaf`
  ADD PRIMARY KEY (`no_plat_anggaaf`);

--
-- Indexes for table `tbl_pelanggan_anggaaf`
--
ALTER TABLE `tbl_pelanggan_anggaaf`
  ADD PRIMARY KEY (`nik_ktp_anggaaf`);

--
-- Indexes for table `tbl_rental_anggaaf`
--
ALTER TABLE `tbl_rental_anggaaf`
  ADD PRIMARY KEY (`no_trx_anggaaf`);

--
-- Indexes for table `tbl_user_anggaaf`
--
ALTER TABLE `tbl_user_anggaaf`
  ADD PRIMARY KEY (`id_user_anggaaf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_anggaaf`
--
ALTER TABLE `tbl_user_anggaaf`
  MODIFY `id_user_anggaaf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
