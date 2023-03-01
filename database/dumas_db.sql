-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 03:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_baru`
--

CREATE TABLE `tb_baru` (
  `id_baru` int(11) NOT NULL,
  `no_dumas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` text NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id_disposisi` int(11) DEFAULT NULL,
  `no_dumas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` text NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `level` enum('Subbid Paminal','Subbid Provos','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dumas`
--

CREATE TABLE `tb_dumas` (
  `id_dumas` int(11) NOT NULL,
  `no_dumas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` text NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `keputusan` enum('Proses Lidik','Selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hapus`
--

CREATE TABLE `tb_hapus` (
  `id_hapus` int(11) NOT NULL,
  `no_dumas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` text NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `no_dumas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` text NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `keputusan` enum('Selesai','Sesuai Dengan Keputusan Hukuman','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Sekretaris','','') NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_kantor` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_kantor`, `alamat`) VALUES
(1, 'BIDANG PROFESI DAN PENGAMANAN', 'Jl. S. Parman No.16, Antasan Besar Kalimantan Selatan Kode Pos 70123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_baru`
--
ALTER TABLE `tb_baru`
  ADD PRIMARY KEY (`id_baru`);

--
-- Indexes for table `tb_dumas`
--
ALTER TABLE `tb_dumas`
  ADD PRIMARY KEY (`id_dumas`);

--
-- Indexes for table `tb_hapus`
--
ALTER TABLE `tb_hapus`
  ADD PRIMARY KEY (`id_hapus`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baru`
--
ALTER TABLE `tb_baru`
  MODIFY `id_baru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_dumas`
--
ALTER TABLE `tb_dumas`
  MODIFY `id_dumas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hapus`
--
ALTER TABLE `tb_hapus`
  MODIFY `id_hapus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
