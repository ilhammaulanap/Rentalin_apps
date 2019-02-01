-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 08:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(26) NOT NULL,
  `email` int(30) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` enum('pria','wanita','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `nama`, `jenis_kelamin`) VALUES
(0, 'admin', 'adminrentalin', 1, 'admin', 'pria');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `judul_iklan` varchar(30) NOT NULL,
  `type_mobil` enum('penumpang','angkut barang','','') NOT NULL,
  `merk` varchar(20) NOT NULL,
  `transmisi` enum('automatic','manual','','') NOT NULL,
  `tahun_mobil` varchar(5) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(10) NOT NULL,
  `status_iklan` enum('aktif','nonaktif','moderasi') NOT NULL,
  `verifikasi_iklan` enum('iklan ditolak','iklan disetujui','dalam proses','') NOT NULL,
  `tgl_iklan` date NOT NULL,
  `photo1` longtext,
  `photo2` longtext,
  `photo3` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `id_user`, `id_admin`, `judul_iklan`, `type_mobil`, `merk`, `transmisi`, `tahun_mobil`, `no_telp`, `alamat`, `deskripsi`, `harga`, `status_iklan`, `verifikasi_iklan`, `tgl_iklan`, `photo1`, `photo2`, `photo3`) VALUES
(2, 1, 1, 'Honda Mobilio', 'penumpang', 'Honda', 'automatic', '2010', '08783287322', 'jl.peta dunia no.420', 'dfsfdsfdsfsd', 200000, 'aktif', 'iklan disetujui', '2018-12-27', 'mobilio.jpg', 'mobilio.jpg', 'mobilio.jpg'),
(14, 1, 14, 'Toyota Avanza', 'penumpang', 'Toyota', 'automatic', '2991', '086687678687', 'jl.jalan jalan', 'dfafasfd', 0, 'aktif', '', '2019-01-20', '04.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `isi_pesan`
--

CREATE TABLE `isi_pesan` (
  `id_isi` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_pesan` longtext NOT NULL,
  `tgl_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `status` enum('Baca','Baru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` longtext,
  `Nama` varchar(32) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_tel` varchar(13) DEFAULT NULL,
  `photo_user` longtext NOT NULL,
  `jenis_user` enum('Pelapak','penyewa','','') DEFAULT NULL,
  `tgl_daftar` date NOT NULL,
  `verifikasi` enum('Terverifikasi','Belum Terverifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_user`
--

INSERT INTO `profile_user` (`id_user`, `username`, `email`, `password`, `Nama`, `tgl_lahir`, `alamat`, `no_tel`, `photo_user`, `jenis_user`, `tgl_daftar`, `verifikasi`) VALUES
(1, 'admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin euy', '2019-01-31', 'jl.peta dunia no.420', '0898889', 'user (3).png', 'Pelapak', '0000-00-00', 'Terverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `isi_pesan`
--
ALTER TABLE `isi_pesan`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `isi_pesan`
--
ALTER TABLE `isi_pesan`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
