-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 12:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `no_ktp` varchar(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_baru`
--

INSERT INTO `tb_baru` (`id_baru`, `no_dumas`, `tanggal`, `perihal`, `nama_pelapor`, `no_ktp`, `nama_terlapor`, `pangkat_terlapor`, `asal_dinas`, `uraian`) VALUES
(1, 'B/02/III/2022/Subbagyanduan', '2023-03-03', 'PERSELINGKUHAN', 'DINA', '638262728282', 'DIDI', 'BRIPDA', 'POLRES BANJAR', 'Perselingkuhan oleh BRIPDA DIDI dengan sdri CHIKA di Fave Hotel BJM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `no_dumas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` text NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `level` enum('Subbid Paminal','Subbid Provos','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id_disposisi`, `no_dumas`, `tanggal`, `perihal`, `nama_pelapor`, `no_ktp`, `nama_terlapor`, `pangkat_terlapor`, `asal_dinas`, `uraian`, `level`) VALUES
(3, 'B/02/III/2022/Subbagyanduan', '2022-01-24', 'PERSELINGKUHAN', 'ANDI', '513213131', 'SUCI', 'BRIPDA', 'POLRES ASAM-ASAM', 'Melakukan tindak asusila terhadap anak dibawah umu', 'Subbid Paminal');

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
  `no_ktp` varchar(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `keputusan` enum('Proses Lidik','Selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dumas`
--

INSERT INTO `tb_dumas` (`id_dumas`, `no_dumas`, `tanggal`, `perihal`, `nama_pelapor`, `no_ktp`, `nama_terlapor`, `pangkat_terlapor`, `asal_dinas`, `uraian`, `keputusan`) VALUES
(1, 'B/02/III/2022/Subbagyanduan', '2023-03-02', 'ASUSILA', 'YANTI', '', 'BINTORO', 'BRIPTU', 'POLRES TANAH LAUT', 'MELAKUKAN PELECEHAN TERHADAP ANAK DIBAWAH UMUR', 'Proses Lidik');

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
  `no_ktp` varchar(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hapus`
--

INSERT INTO `tb_hapus` (`id_hapus`, `no_dumas`, `tanggal`, `perihal`, `nama_pelapor`, `no_ktp`, `nama_terlapor`, `pangkat_terlapor`, `asal_dinas`, `uraian`, `ket`) VALUES
(2, 'B/02/III/2022/Subbagyanduan', '2023-03-02', 'JUDI', 'YATI', '637292927228', 'YANTO', 'BRIPTU', 'POLRES HST', 'MELAKUKAN PERJUDIAN SABUNG AYAM', 'PROSES LIDIK DIHENTIKAN');

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
  `no_ktp` varchar(20) NOT NULL,
  `nama_terlapor` varchar(50) NOT NULL,
  `pangkat_terlapor` varchar(50) NOT NULL,
  `asal_dinas` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `keputusan` enum('Selesai','Sesuai Dengan Keputusan Hukuman','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `no_dumas`, `tanggal`, `perihal`, `nama_pelapor`, `no_ktp`, `nama_terlapor`, `pangkat_terlapor`, `asal_dinas`, `uraian`, `keputusan`) VALUES
(4, 'B/02/III/2022/Subbagyanduan', '2023-02-23', 'PERSELINGKUHAN', 'ANDINI', '63625225262', 'BINTORO', 'BRIPDA', 'POLRES BJM SELATAN', 'Perselingkuhan oleh BRIPDA DIDI dengan sdri CHIKA ', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peldum`
--

CREATE TABLE `tb_peldum` (
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `desa` varchar(150) NOT NULL,
  `kec` varchar(150) NOT NULL,
  `kab` varchar(150) NOT NULL,
  `prov` varchar(150) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL
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

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `jabatan`) VALUES
(1, 'Dwigo Hafiz', 'dwigo', '1234', 'Administrator', 'Admin');

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
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

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
-- Indexes for table `tb_peldum`
--
ALTER TABLE `tb_peldum`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

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
  MODIFY `id_baru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_dumas`
--
ALTER TABLE `tb_dumas`
  MODIFY `id_dumas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_hapus`
--
ALTER TABLE `tb_hapus`
  MODIFY `id_hapus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_peldum`
--
ALTER TABLE `tb_peldum`
  MODIFY `nik` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
