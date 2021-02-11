-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 03:45 PM
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
(3, 'Jaringan', 'Pipa', '321654');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `user_name`, `password`, `level`) VALUES
('2b9070f9-592a-11eb-87d5-5f3d16b85a98', 'Muhammad Agus Syabany', 'agus', '0525885565bb6a150db63f19bf42f11bd2db4702', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
