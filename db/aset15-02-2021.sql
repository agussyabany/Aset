-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 10:42 AM
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
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_div` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kode_div` varchar(50) NOT NULL,
  `nama_div` varchar(100) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_div`, `id_departemen`, `kode_div`, `nama_div`, `role`) VALUES
(3, 2, '789456', 'GUDANG CENDANA', 2),
(6, 10, '639456', 'Pembelian', 2),
(7, 0, '963456', 'HUMAS', 2),
(8, 6, '969471', 'Rekening', 2),
(9, 10, '125644987', 'Bangunan Dan Kantor', 2),
(10, 10, '978546132', 'Pembelian Dan Pengadaan', 2),
(11, 10, '93697814', 'Humas', 2),
(12, 9, '475698', 'Kepegawaian', 2),
(13, 10, '987471', 'Informasi Dan Teknologi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `role` varchar(50) NOT NULL,
  `divDep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`role`, `divDep`) VALUES
('1', 'KEUANGAN'),
('1', 'PENGENDALIAN KEHILANGAN AIR'),
('1', 'HUBUNGAN PELANGGAN'),
('1', 'PRODUKSI'),
('1', 'DISTRIBUSI'),
('1', 'SATUAN PENGAWAS INTERBNAL'),
('1', 'BIDANG UMUM'),
('2', 'GUDAN CENDANA'),
('2', 'PEMBELIAN'),
('2', 'HUMAS'),
('2', 'REKENING'),
('2', 'BANGUNAN KANTOR'),
('2', 'PEMBELIAN DAN PENGADAAN'),
('2', 'KEPGAWAIAN');

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

-- --------------------------------------------------------

--
-- Table structure for table `master_departemen`
--

CREATE TABLE `master_departemen` (
  `id_departemen` int(11) NOT NULL,
  `kode_departemen` varchar(50) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_departemen`
--

INSERT INTO `master_departemen` (`id_departemen`, `kode_departemen`, `nama_departemen`, `role`) VALUES
(2, '321654789', 'KEUANGAN', 1),
(4, '321987654', 'PENGENDALIAN KEHILANGAN AIR', 1),
(6, '654789321', 'HUBUNGAN PELANGGAN', 1),
(7, '417852963', 'PRODUKSI', 1),
(8, '321897654', 'DISTRIBUSI', 1),
(9, '963852741', 'SATUAN PENGAWAS INTERNAL', 1),
(10, '321654789', 'BIDANG UMUM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruang` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_div` int(11) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruang`, `id_departemen`, `id_div`, `ruang`) VALUES
(1, 2, 3, 'Ruang Asmen Gudang'),
(3, 10, 10, 'Gudang penyimpanan Barang'),
(4, 6, 8, 'Ruang Menejer Hublang'),
(5, 9, 12, 'Ruang Berkas');

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `id_sdm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `status` enum('aktiv','tidak aktiv') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm`
--

INSERT INTO `sdm` (`id_sdm`, `nama`, `jabatan`, `bagian`, `status`) VALUES
(1, 'Ahwan', '2', '', 'aktiv');

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
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_div`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `master_departemen`
--
ALTER TABLE `master_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruang`),
  ADD KEY `id_departemen` (`id_departemen`),
  ADD KEY `id_div` (`id_div`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`id_sdm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_div` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `master_departemen`
--
ALTER TABLE `master_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sdm`
--
ALTER TABLE `sdm`
  MODIFY `id_sdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
