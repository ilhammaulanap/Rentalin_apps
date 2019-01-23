-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 12:58 PM
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
  `status_iklan` enum('aktif','nonaktif','','') NOT NULL,
  `verifikasi_iklan` enum('iklan ditolak','iklan disetujui','','') NOT NULL,
  `tgl_iklan` date NOT NULL,
  `photo1` longtext,
  `photo2` longtext,
  `photo3` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `id_user`, `id_admin`, `judul_iklan`, `type_mobil`, `merk`, `transmisi`, `tahun_mobil`, `no_telp`, `alamat`, `deskripsi`, `harga`, `status_iklan`, `verifikasi_iklan`, `tgl_iklan`, `photo1`, `photo2`, `photo3`) VALUES
(1, 1, 1, 'Jazz', 'penumpang', 'Honda', 'automatic', '2010', '0999934', 'dsffsf', 'honda jaznya ban', 200000, 'aktif', 'iklan disetujui', '2018-12-27', '1060577_15-nissan-silvia-s15-hd-wallpapers_4272x2848_h.jpg', 'jazz.jpg', '13-kawasaki-zx6r-111.jpg'),
(2, 1, 1, 'mobilio', 'penumpang', 'Honda', 'automatic', '2010', '332423432', 'jl.peta dunia no.420', 'dfsfdsfdsfsd', 200000, 'aktif', 'iklan disetujui', '2018-12-27', 'mobilio.jpg', 'mobilio.jpg', 'mobilio.jpg'),
(6, 2, 1, 'sdsdgs', 'penumpang', 'sdadad', '', '2991', '86687678687', 'kjhjkhjkhjk', 'dsadadakhdfjkgajkjkgsfjguqiegqfkgkjadsgkfjgajkgfjkuqgjkabjfgyuewgkfbdsjfjhgjfbqjhejhfbvhj', 122313, 'aktif', 'iklan disetujui', '2018-12-17', 'bmw-r9t-rear-m0-1920x1080.jpg', 'value-17', 'value-18'),
(7, 2, 1, 'adfadsdad', 'penumpang', 'sdadad', '', '2991', '86687678687', 'kjhjkhjkhjk', 'dsadadakhdfjkgajkjkgsfjguqiegqfkgkjadsgkfjgajkgfjkuqgjkabjfgyuewgkfbdsjfjhgjfbqjhejhfbvhj', 122313, 'aktif', 'iklan disetujui', '2018-12-17', '1060577_15-nissan-silvia-s15-hd-wallpapers_4272x2848_h.jpg', 'car (1).png', 'bmw-r-ninet.jpg'),
(8, 0, 1, 'mobilio', 'penumpang', 'honda', '', '2011', '089898988', 'jl.peta dunia no.420', 'kdkdskjfkds', 500000, 'aktif', 'iklan disetujui', '2018-12-17', 'Honda_City_(sixth_generation)_front.JPG', '04.jpg', '7ea56a922c4a0d53d7a1ae0719781188.jpg'),
(10, 11, 1, 'avanza', 'penumpang', 'toyota', 'manual', '2011', '86687678687', 'jl.peta dunia no.420', 'dsadadakh', 500000, 'aktif', 'iklan disetujui', '2018-12-17', '04.jpg', '', ''),
(11, 11, 1, 'mini cooper', 'penumpang', 'mini', 'automatic', '2011', '08976354271', 'jl.peta dunia no.420', 'kdkdskjfkds', 1000000, 'aktif', 'iklan disetujui', '2019-01-04', 'download.jpeg', '', ''),
(13, 1, 1, 'kawan', 'angkut barang', 'kjjkkjhkj', 'automatic', '2011', '08976354271', 'kjhkjhk', 'fsdfsf', 1000000, 'aktif', '', '2019-01-20', '1060577_15-nissan-silvia-s15-hd-wallpapers_4272x2848_h.jpg', '', ''),
(14, 1, 1, 'Supra', 'penumpang', 'adsad', 'automatic', '2991', '86687678687', 'kjhkjhk', 'dfafasfd', 1000000, 'aktif', '', '2019-01-20', 'bmw-r9t-rear-m0-1920x1080.jpg', '', ''),
(15, 1, 1, 'adfadsdad', 'penumpang', 'sasa', 'automatic', '1996', '121313', 'fafsaf', 'dasdad', 500000, 'aktif', 'iklan disetujui', '2019-01-20', '0365aa83d441d195ce2bdc37db6a48c7.jpg', '', ''),
(16, 1, 1, 'beemwe', 'penumpang', 'kjjkjk', 'automatic', '2991', '08976354271', 'Jl.yang benar', 'adasdad', 122313, 'aktif', 'iklan disetujui', '2019-01-20', '1060577_15-nissan-silvia-s15-hd-wallpapers_4272x2848_h.jpg', '', ''),
(17, 1, 1, 'Supra', 'penumpang', 'asdsad', 'automatic', '2991', '121313', 'jl.jalan jalan', 'adsda', 1000000, 'aktif', 'iklan disetujui', '2019-01-20', '20160609115020_DSC_2453.jpg', '', ''),
(18, 1, 1, 'mama', 'penumpang', 'toyota', 'automatic', 'asdad', '86687678687', 'Jl.yang benar', 'asdasdad', 500000, 'aktif', 'iklan disetujui', '2019-01-20', '44-1.jpg', '', ''),
(19, 1, 1, 'asdad', 'penumpang', 'asd', 'automatic', '2991', '08976354271', 'kjhkjhk', 'asdsd', 122313, 'aktif', 'iklan disetujui', '2019-01-20', '13-kawasaki-zx6r-111.jpg', '', ''),
(20, 1, 1, 'yoooo', 'penumpang', 'sasa', 'automatic', 'asdad', '86687678687', 'jl.peta dunia no.420', 'asasdasdad', 1000000, 'aktif', 'iklan disetujui', '2019-01-21', 'kisspng-wheel-car-spoke-rim-tire-moto-vector-5b37e9562b3269.2337093115303908701769.png', '', ''),
(21, 1, 1, 'aaaa', 'penumpang', 'kjjkkjhkj', 'automatic', 'asdad', '08976354271', 'jl.jalan jalan', 'sdadadad', 1000000, 'aktif', 'iklan disetujui', '2019-01-21', '13-kawasaki-zx6r-111.jpg', '44632.jpg', '44629.jpg');

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

--
-- Dumping data for table `isi_pesan`
--

INSERT INTO `isi_pesan` (`id_isi`, `id_pesan`, `id_user`, `isi_pesan`, `tgl_pesan`) VALUES
(34, 31, 1, 'add', '2019-01-08 22:04:33'),
(35, 31, 1, 'adas', '2019-01-08 22:08:13'),
(36, 33, 1, 'fsf', '2019-01-08 22:08:29'),
(37, 31, 2, 'dd', '2019-01-08 22:09:11'),
(38, 34, 2, 'adds', '2019-01-08 22:09:27'),
(39, 34, 2, 'ersfe', '2019-01-08 22:27:11'),
(40, 32, 2, 'sgd', '2019-01-08 22:27:41'),
(41, 32, 2, 'jhgjhg', '2019-01-08 22:28:43');

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

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user1`, `id_user2`, `tgl_pesan`, `status`) VALUES
(32, 1, 2, '2019-01-08 22:08:13', 'Baca'),
(33, 1, 11, '2019-01-08 22:08:29', 'Baru'),
(34, 2, 2, '2019-01-08 22:09:27', 'Baca');

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
(1, 'admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin euy', '2019-01-31', 'jl.peta dunia no.420', '0898889', 'user (3).png', 'Pelapak', '0000-00-00', 'Terverifikasi'),
(2, 'ilham', 'ilhampratama0508@gmail.com', 'd677e7933c6096aff7078724da268899d8fca27f', 'ilham', NULL, '', NULL, 'john.jpg', NULL, '0000-00-00', 'Terverifikasi'),
(3, 'maulana', 'maulana@haha.com', '8364a7f67a6f6b7ffeac865ac5bbffe19a2f8e4d', 'maulana', NULL, '', NULL, 'no_photo.jpg', NULL, '0000-00-00', 'Terverifikasi'),
(4, 'Ilhamm', 'ilhammaulanpratama@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Qqqqqq', NULL, '', NULL, 'no_photo.jpg', NULL, '0000-00-00', 'Terverifikasi'),
(5, 'KLKLK', 'lklkl@klk.cpo', '57c3dd950b3072ca042bd3f85e67c7bd1cf8a03f', 'LKLK', NULL, '', NULL, '', NULL, '0000-00-00', 'Terverifikasi'),
(6, 'uuuu', 'jkjkjkj', 'e3f10b139492bb24516699d94afab5e8546e6880', 'kjhkhj', NULL, '', NULL, '', NULL, '2019-01-02', ''),
(7, 'qqqq', 'kjkjk', 'e7e45b88730d680cafa3edc996ba6cf79c758012', 'kjjkjk', NULL, '', NULL, '', NULL, '2019-01-02', 'Belum Terverifikasi'),
(8, 'koko', 'koko@gmail.com', 'dcd7c6ef54d01e3e3a4cc96508ff0bca57a3b771', 'Koko', NULL, '', NULL, '', 'Pelapak', '2019-01-04', 'Belum Terverifikasi'),
(9, 'kiki', 'kiki@kiki.ki', '95752f86c99f1055feba64e03924cb71f0c08315', 'kiki', NULL, '', NULL, '', NULL, '2019-01-04', 'Belum Terverifikasi'),
(10, 'kuku', 'kuku@kuku.ku', '1f972efb80c2ef14f00a5e412700e2ab4e16bf5d', 'kuku', NULL, '', NULL, '', 'penyewa', '2019-01-04', 'Belum Terverifikasi'),
(11, 'kaka', 'kaka@kaka.ka', '513d74946327c04cb6f0b0190b460dd9821db726', 'kaka', NULL, '', NULL, '', 'Pelapak', '2019-01-04', 'Belum Terverifikasi'),
(12, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', NULL, '', NULL, '', '', '2019-01-08', 'Belum Terverifikasi'),
(13, 'pmp', 'pmp@pmp.com', '41156facf59beff4abb429e9cdc4b02a25deb7e3', 'pmp', NULL, '', NULL, '', 'penyewa', '2019-01-08', 'Belum Terverifikasi'),
(14, 'wing', 'wing@w.com', 'bd6658dc079b66a2294520d850705b9aa350119d', 'wing', NULL, '', NULL, '', '', '2019-01-08', 'Belum Terverifikasi'),
(15, 'lompat', 'lompat@lompat.com', 'f2cbe59cab0646fdb54f202baaf5f66922942e30', 'lompat', NULL, '', NULL, '', 'penyewa', '2019-01-10', 'Belum Terverifikasi'),
(16, 'tama', 'tama', '47bd6d68a38160b7c077b0ec86219e5aab739fa7', 'tama', NULL, '', NULL, '', 'penyewa', '2019-01-20', 'Belum Terverifikasi'),
(17, 'yogi', 'yog@y.ci', 'de821a3f3382cfca3998a94342130f762505b738', 'yogi', NULL, '', NULL, '', 'Pelapak', '2019-01-23', 'Belum Terverifikasi');

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
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
