-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 09:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa_nuke`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `no_hp_admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@boyolali.com', '081312555467'),
(2, 'wehaye', 'cf99498437151ff0398a005ade70be12', 'wehaye94@gmail.com', '081312555467'),
(3, 'sunaryo', 'c2e0b70e960def025b658b7928b7f0f6', 'sunaryo@sun.com', '081312777482');

-- --------------------------------------------------------

--
-- Table structure for table `berita_terbaru`
--

CREATE TABLE `berita_terbaru` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tgl_berita` date NOT NULL,
  `jenis_berita` varchar(50) NOT NULL,
  `ket_berita` varchar(200) NOT NULL,
  `gambar_berita` varchar(100) NOT NULL,
  `komentar_berita` varchar(1000) NOT NULL,
  `cp_berita` int(15) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `nama_event` varchar(150) NOT NULL,
  `tgl_event` date NOT NULL,
  `lokasi_event` varchar(100) NOT NULL,
  `gambar_event` varchar(100) NOT NULL,
  `ket_event` varchar(200) NOT NULL,
  `waktu_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenis_event` varchar(35) NOT NULL,
  `cp_event` varchar(15) NOT NULL,
  `komentar_event` varchar(1000) NOT NULL,
  `daerah_event` varchar(150) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(5) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `alamat_penginapan` varchar(150) NOT NULL,
  `daerah_penginapan` varchar(150) NOT NULL,
  `ket_penginapan` varchar(150) NOT NULL,
  `harga_penginapan` int(10) NOT NULL,
  `long_penginapan` varchar(100) NOT NULL,
  `lat_penginapan` varchar(100) NOT NULL,
  `foto_penginapan` varchar(100) NOT NULL,
  `cp_penginapan` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_wisata` int(5) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat_wisata` varchar(250) NOT NULL,
  `kategori_wisata` varchar(50) NOT NULL,
  `gambar_wisata` varchar(100) NOT NULL,
  `lat_wisata` varchar(100) NOT NULL,
  `long_wisata` varchar(100) NOT NULL,
  `ket_wisata` varchar(300) NOT NULL,
  `komentar_wisata` varchar(1000) NOT NULL,
  `harga_wisata` int(10) NOT NULL,
  `notelp_wisata` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `asal_daerah` varchar(200) NOT NULL,
  `no_hp_user` varchar(15) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `email`, `domisili`, `asal_daerah`, `no_hp_user`, `jk`, `nama_lengkap`) VALUES
(3, 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'user', 'budi@budi.com', 'surabaya', 'bandung', '12345678', 'Laki-Laki', 'budi'),
(4, 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 'user', 'alex@rudiat.com', 'bangka', 'blitung', '081312777483', 'Laki-Laki', 'alex'),
(5, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'user', 'wahyu@saepuloh.com', 'bandung', 'ciamis', '0813121222131', 'Laki-Laki', 'wahyu'),
(6, 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', 'user', 'andi@yahoo.com', 'sukabumi', 'bogor', '00912221213', 'Laki-Laki', 'andi'),
(7, 'sarah', '9e9d7a08e048e9d604b79460b54969c3', 'user', 'sarah@008.com', 'kayangan', 'alam hayal', '081123337741', 'Perempuan', 'sarah'),
(8, 'ayu', '29c65f781a1068a41f735e1b092546de', 'user', 'ayu@ayu.com', 'bandung', 'bandung', '081312666473', 'Perempuan', 'ayu'),
(9, 'cinta', 'c3653e4408832e6611f37dcd90544de8', 'user', 'cinta@kamu.com', 'bandung', 'bandung', '081312666473', 'Perempuan', 'cinta'),
(10, 'bella', 'e7e9ec3723447a642f762b2b6a15cfd7', 'user', 'bella@bel.coom', 'ciamis', 'panjalu', '081312777463', 'Perempuan', 'bella'),
(11, 'nuke', '6c2bfbd89d74ef47595fe6328a142427', 'user', 'nuke@yahoo.com', 'bandung', 'bandung', '081312666473', 'Perempuan', 'nuke'),
(12, 'ismi', '67f8ae13ab63364777f9d721bcb5bce3', 'user', 'ismi@is.com', 'bandung', 'bandung', '081312884232', 'Perempuan', 'imsi'),
(13, 'sukma', 'fcfce9432eb70d62ea41d979f1576b00', 'user', 'sukma@suk.com', 'bandung', 'bandung', '081312777463', 'Perempuan', 'sukma'),
(14, 'mimi', 'dde6ecd6406700aa000b213c843a3091', 'user', 'mimi@peri.com', 'kayangan', 'kayangan', '081317778821', 'Perempuan', 'mimi'),
(15, 'sae', 'dabfae3e14243f88c733376f4e6c1a37', 'user', 'saepul@oh.com', 'bandung', 'bandung', '08131266473', 'Laki-Laki', 'saepul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita_terbaru`
--
ALTER TABLE `berita_terbaru`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `berita_terbaru`
--
ALTER TABLE `berita_terbaru`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_wisata` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita_terbaru`
--
ALTER TABLE `berita_terbaru`
  ADD CONSTRAINT `berita_terbaru_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `penginapan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `tempat_wisata_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
