-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 02:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `golongan`, `nama_barang`, `kode_barang`) VALUES
(3, 'Jaringan', 'Pipa', '321654'),
(4, 'Bangunan', 'Kantor Pusat', '9871611'),
(5, 'GUDANG(aksesoris,pipa)', 'Pipa 2Inch', '9874547'),
(6, 'RUMAH TANGGA', 'Dispenser', '9875647'),
(7, 'TANAH', 'IPA Bengkuring', '8547414'),
(8, 'PERALATAN DAN MESIN', 'Mobil', '854796'),
(9, 'ASET TETAP LAINYA', 'Genset 2000VA', '9687457'),
(10, 'JALAN,IRIGASI DAN JARINGAN', 'Pondasi Keliling', '974581'),
(12, 'KONSTRUKSI DALAM PENGERJAAN', 'Instalasi Pengolahan Air Sei Kapih', '741487'),
(13, 'ASET TETAP LAINYA', 'Solar Cell', '987474'),
(14, 'GUDANG(aksesoris,pipa)', 'Elbow', '2Inch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
