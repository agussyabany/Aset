-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2021 pada 03.19
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_div` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kode_div` varchar(50) NOT NULL,
  `nama_div` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_div`, `id_departemen`, `kode_div`, `nama_div`) VALUES
(3, 2, '789456', 'GUDANG CENDANA'),
(6, 10, '639456', 'Pembelian'),
(7, 0, '963456', 'HUMAS'),
(8, 6, '969471', 'Rekening'),
(9, 10, '125644987', 'Bangunan Dan Kantor'),
(10, 10, '978546132', 'Pembelian Dan Pengadaan'),
(11, 10, '93697814', 'Humas'),
(12, 9, '475698', 'Kepegawaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_barang`
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
-- Struktur dari tabel `master_departemen`
--

CREATE TABLE `master_departemen` (
  `id_departemen` int(11) NOT NULL,
  `kode_departemen` varchar(50) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_departemen`
--

INSERT INTO `master_departemen` (`id_departemen`, `kode_departemen`, `nama_departemen`) VALUES
(2, '321654789', 'KEUANGAN'),
(4, '321987654', 'PENGENDALIAN KEHILANGAN AIR'),
(6, '654789321', 'HUBUNGAN PELANGGAN'),
(7, '417852963', 'PRODUKSI'),
(8, '321897654', 'DISTRIBUSI'),
(9, '963852741', 'SATUAN PENGAWAS INTERNAL'),
(10, '321654789', 'BIDANG UMUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruang` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_div` int(11) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruang`, `id_departemen`, `id_div`, `ruang`) VALUES
(1, 2, 3, 'Ruang Asmen Gudang'),
(3, 10, 10, 'Gudang penyimpanan Barang'),
(4, 6, 8, 'Ruang Menejer Hublang'),
(5, 9, 12, 'Ruang Berkas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `user_name`, `password`, `level`) VALUES
('2b9070f9-592a-11eb-87d5-5f3d16b85a98', 'Muhammad Agus Syabany', 'agus', '0525885565bb6a150db63f19bf42f11bd2db4702', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_div`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `master_departemen`
--
ALTER TABLE `master_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruang`),
  ADD KEY `id_departemen` (`id_departemen`),
  ADD KEY `id_div` (`id_div`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_div` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `master_departemen`
--
ALTER TABLE `master_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
