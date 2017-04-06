-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 08:53 AM
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
(4, 'angga', '3d54aec411d6708d96adeb1e929b5e2a', 'anggaras@admin.comia', '086001200'),
(6, 'kurnia', '8244ad8e8322b34107ae3c0e8172951f', 'kurniamega@admin.com', '081312999433');

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
  `gambar_berita` varchar(200) NOT NULL,
  `cp_berita` int(15) NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_terbaru`
--

INSERT INTO `berita_terbaru` (`id_berita`, `judul_berita`, `tgl_berita`, `jenis_berita`, `ket_berita`, `gambar_berita`, `cp_berita`, `id_admin`) VALUES
(1, 'Rossi Jadi Pembalap Tertua di MotoGP', '2017-04-02', 'berita Politik', 'menarik', 'belum ada', 2147483647, 1),
(3, 'Bandung Tempat Sejuta Jenis Makanan', '2017-04-06', 'berita Kuliner', 'enak banget', 'belum ada', 2147483647, 1),
(4, 'aadad', '0000-00-00', 'berita Politik', 'adad', 'ad', 131, 1),
(5, 'sdads', '0000-00-00', 'berita Politik', '124eds', 'sfsdfds', 24423423, 1),
(6, 'sdsfsdf', '0000-00-00', 'berita Politik', 'dfsdf', 'sfsd', 2342, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `nama_event` varchar(150) NOT NULL,
  `tgl_event` date NOT NULL,
  `lokasi_event` varchar(100) NOT NULL,
  `gambar_event` varchar(200) NOT NULL,
  `ket_event` varchar(200) NOT NULL,
  `waktu_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenis_event` varchar(35) NOT NULL,
  `cp_event` varchar(15) NOT NULL,
  `daerah_event` varchar(150) NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tgl_event`, `lokasi_event`, `gambar_event`, `ket_event`, `waktu_event`, `jenis_event`, `cp_event`, `daerah_event`, `id_admin`) VALUES
(1, 'Konser Justin Bieber', '2017-04-29', 'Bandung', 'belum ada', 'rame banget', '0000-00-00 00:00:00', 'Konser Musik', '081312777744', 'Lapangan Gasibu', 1),
(2, 'adadad', '2017-04-21', 'aas', 'adad', 'adad', '0000-00-00 00:00:00', 'dada', '13131', 'fsdfdsf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_berita` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_event`
--

CREATE TABLE `komentar_event` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_event` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_wisata`
--

CREATE TABLE `komentar_wisata` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_wisata` int(5) NOT NULL
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
  `foto_penginapan` varchar(200) NOT NULL,
  `cp_penginapan` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `alamat_penginapan`, `daerah_penginapan`, `ket_penginapan`, `harga_penginapan`, `long_penginapan`, `lat_penginapan`, `foto_penginapan`, `cp_penginapan`, `id_admin`, `id_user`) VALUES
(1, 'Hotel Lingga', 'Bandung Jawa Barat', 'Jalan Soekarno Hatta', 'Nyaman dan bersih', 1000000, '10000', '9292929', 'belum ada', '081312777463', 1, 1),
(2, 'adada', 'adad', 'adad', 'adad', 13131, '1313', '1313', '1313', '131313', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_wisata` int(5) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat_wisata` varchar(250) NOT NULL,
  `kategori_wisata` varchar(50) NOT NULL,
  `gambar_wisata` varchar(200) NOT NULL,
  `lat_wisata` varchar(100) NOT NULL,
  `long_wisata` varchar(100) NOT NULL,
  `ket_wisata` varchar(300) NOT NULL,
  `harga_wisata` int(10) NOT NULL,
  `notelp_wisata` varchar(15) NOT NULL,
  `tanggal_post` date NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `kategori_wisata`, `gambar_wisata`, `lat_wisata`, `long_wisata`, `ket_wisata`, `harga_wisata`, `notelp_wisata`, `tanggal_post`, `id_admin`) VALUES
(1, 'situ panjalu', 'ciamis jawa barat', 'Wisata Alam', 'gambar 1', '1000', '00001', 'danau', 100000, '081312777444', '0000-00-00', 1),
(3, 'situ patenggang', 'bandung', 'Wisata Alam', 'apa aja', '1213', '1212', 'bagus', 10000, '08138882121', '0000-00-00', 1),
(4, 'saung mang engking', 'bandung jawa barat', 'Wisata Kuliner', 'belum ada gambar', '121212', '121212', 'enak banget makanannya', 10000, '0811213312', '0000-00-00', 1);

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
(17, 'ben', '7fe4771c008a22eb763df47d19e2c6aa', 'member', 'benjema@member.com', 'madrid', 'madrid', '081312888312', 'Laki-Laki', 'benjema'),
(18, 'kemal', 'ce76d254d71c00b771b8b2013d0a1485', 'member', 'kemal@member.com', 'bandung', 'ciamis', '081312888444', 'Laki-Laki', 'kemal');

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
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `komentar_event`
--
ALTER TABLE `komentar_event`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_wisata` (`id_wisata`);

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
  ADD KEY `id_admin` (`id_admin`);

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
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `berita_terbaru`
--
ALTER TABLE `berita_terbaru`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komentar_event`
--
ALTER TABLE `komentar_event`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_wisata` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
