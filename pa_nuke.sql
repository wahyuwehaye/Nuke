-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 02:15 AM
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
(6, 'kurnia', '13677642758b594260372191e227d3c9', 'kurniamega@admin.com', '827312111');

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
  `cp_berita` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_terbaru`
--

INSERT INTO `berita_terbaru` (`id_berita`, `judul_berita`, `tgl_berita`, `jenis_berita`, `ket_berita`, `cp_berita`, `id_admin`) VALUES
(1, 'Rossi Jadi Pembalap Tertua di MotoGP', '2017-04-02', 'berita Politik', 'menarik', '2147483647', 1),
(3, 'Bandung Tempat Sejuta Jenis Makanan', '2017-04-06', 'berita Kuliner', 'enak banget', '2147483647', 1),
(4, 'aadad', '2017-05-01', 'berita Politik', 'adad', '1', 1),
(5, 'sdads', '0000-00-00', 'berita Politik', '124eds', '24423423', 1),
(6, 'sdsfsdf', '0000-00-00', 'berita Politik', 'dfsdf', '2342333', 1),
(7, 'ini berita baru', '2017-04-27', 'berita Kuliner', 'wenak tenan', '2147483647', 1),
(8, 'berita yang paling terbaru', '2017-05-01', 'berita Kuliner', 'qwqerew', '23456789', 1),
(9, 'ronaldo jadi pemain terbaik dunia saat ini', '2017-05-04', 'berita Politik', 'ini berita yang sangat menggembirakan buat gue', '081312555467', 1),
(10, 'indahnya berbagi cerita seru bersamamu', '2017-05-14', 'berita Kuliner', 'fdfsdfsd', '346578', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `nama_event` varchar(150) NOT NULL,
  `tgl_event` date NOT NULL,
  `lokasi_event` varchar(100) NOT NULL,
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

INSERT INTO `event` (`id_event`, `nama_event`, `tgl_event`, `lokasi_event`, `ket_event`, `waktu_event`, `jenis_event`, `cp_event`, `daerah_event`, `id_admin`) VALUES
(1, 'Konser Justin Bieber', '2017-04-29', 'Bandung', 'rame banget bikin merinding dan banyak orang yang suka akan semua ini yakin deh sama gue', '2017-05-01 06:44:03', 'Konser Musik', '081312777744', 'Lapangan Gasibu', 1),
(2, 'adadad', '2017-04-21', 'aas', 'adad', '0000-00-00 00:00:00', 'dada', '13131', 'fsdfdsf', 1),
(3, 'konser dijah yelow', '2017-04-13', 'sdsd', 'sdsd', '0000-00-00 00:00:00', 'cxcx', '2323', 'adsds', 1),
(4, 'tablig akbar', '2017-05-28', 'dayeuhkolot', 'menjadi lebih indah', '0000-00-00 00:00:00', 'ceramah', '0987654321', 'bandung', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_berita`
--

CREATE TABLE `gambar_berita` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_berita` int(5) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_berita`
--

INSERT INTO `gambar_berita` (`id_gambar`, `gambar`, `tgl_upload`, `id_berita`, `token`) VALUES
(21, '3gs2.jpg', '2017-05-13 17:18:49', 9, '0.38389454204463225'),
(22, '4.jpg', '2017-05-14 08:58:51', 10, '0.5810144941655628'),
(23, 'Profil_LSN.jpg', '2017-05-14 08:59:20', 1, '0.06364253875619119');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_event`
--

CREATE TABLE `gambar_event` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_event` int(5) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_event`
--

INSERT INTO `gambar_event` (`id_gambar`, `gambar`, `tgl_upload`, `id_event`, `token`) VALUES
(4, '3gs21.jpg', '2017-05-14 02:10:47', 2, '0.21722310590625504'),
(5, '3gs1.jpg', '2017-05-14 02:11:21', 1, '0.5725341693845367'),
(6, 'IMG-20150918-WA0070.jpg', '2017-05-14 08:59:57', 2, '0.3557245454662197'),
(7, 'Foto_8BesarLigaSantri.jpg', '2017-05-14 09:00:16', 3, '0.06740568018338'),
(8, '1.jpg', '2017-05-14 09:52:08', 4, '0.27657434850597395');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_penginapan`
--

CREATE TABLE `gambar_penginapan` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_penginapan` int(5) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_penginapan`
--

INSERT INTO `gambar_penginapan` (`id_gambar`, `gambar`, `tgl_upload`, `id_penginapan`, `token`) VALUES
(1, 'q10.png', '2017-05-14 09:01:11', 3, '0.3830494399429083'),
(2, 'Said_Aqil.jpg', '2017-05-14 14:07:20', 1, '0.04146705769894843');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_wisata`
--

CREATE TABLE `gambar_wisata` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_wisata` int(5) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_wisata`
--

INSERT INTO `gambar_wisata` (`id_gambar`, `gambar`, `tgl_upload`, `id_wisata`, `token`) VALUES
(1, 'tweet7.JPG', '2017-05-14 08:57:15', 5, '0.3021180133243613'),
(2, '6.jpg', '2017-05-14 08:58:27', 3, '0.4529448435595018');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_berita` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_berita`
--

INSERT INTO `komentar_berita` (`id_komentar`, `id_user`, `komentar`, `tgl_komentar`, `id_berita`, `nama`) VALUES
(1, 5, 'berita yang sangat bagus banget', '2017-04-27 04:45:28', 7, 'saepuloh'),
(3, 0, 'berita yang cukup menegangkan', '2017-04-27 05:54:57', 7, 'admin'),
(4, 0, 'kurang begitu menarik ah', '2017-04-27 05:55:10', 7, 'admin'),
(5, 0, 'ini baru namanya berita atuh', '2017-04-27 05:57:31', 7, 'admin'),
(6, 0, 'ah ini mah udah pernah baca', '2017-04-27 05:59:42', 7, 'kemal'),
(7, 0, 'baru nih beritanya', '2017-04-27 06:00:00', 6, 'kemal'),
(8, 0, 'nunukeke', '2017-04-30 06:28:16', 7, 'nuke'),
(9, 0, 'bagus yah', '2017-05-01 04:38:39', 7, 'nuke'),
(10, 0, 'ini adalah yang terbaik', '2017-05-01 04:39:40', 7, 'saputra'),
(11, 0, 'bagus yah', '2017-05-01 05:21:05', 5, 'drupadi'),
(12, 0, 'ksgksfkdsjvblv djbdsgsfgsfg', '2017-05-14 09:56:44', 9, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_event`
--

CREATE TABLE `komentar_event` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_event` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_event`
--

INSERT INTO `komentar_event` (`id_komentar`, `id_user`, `komentar`, `tgl_komentar`, `id_event`, `nama`) VALUES
(1, 0, 'aku paling suka ini', '2017-04-27 06:14:08', 2, 'kemal'),
(2, 0, 'ini paling seru deh', '2017-05-01 05:26:15', 2, 'reza saputra'),
(3, 0, 'asudahlah', '2017-05-01 06:42:37', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_penginapan`
--

CREATE TABLE `komentar_penginapan` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_penginapan` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_penginapan`
--

INSERT INTO `komentar_penginapan` (`id_komentar`, `id_user`, `komentar`, `tgl_komentar`, `id_penginapan`, `nama`) VALUES
(1, 0, 'ini mah saya udah pernah nyoba nginep disini dan tempatnya emang bagus dan nyaman', '2017-05-01 14:10:53', 1, 'Wahyu Saepuloh'),
(2, 0, 'ini pasti bagus dan nyaman kalo ditempatin', '2017-05-01 14:15:41', 2, 'Drupadi');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_tentang`
--

CREATE TABLE `komentar_tentang` (
  `id_komentar` int(10) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_tentang` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_tentang`
--

INSERT INTO `komentar_tentang` (`id_komentar`, `komentar`, `tgl_komentar`, `id_tentang`, `nama`) VALUES
(1, 'iydwbdskbfds cds,f sdljfldsfldskf dsf', '2017-05-01 15:12:20', 1, 'Wahyu Saepuloh'),
(2, 'inidadmsnfkjds dsjfbds fdksjfsdkf dsf of asfk sdkf sdkf ', '2017-05-01 15:24:48', 1, 'Nuke Kardiansyah'),
(3, 'fskjdfbsk. fasfajskf askf asf asm fiqufbwqf iuewbf view f vid v', '2017-05-01 15:26:15', 3, 'Wahyu Saepuloh'),
(4, 'sfjbsdfkdsb  fkhsdfk dsfqwwiqgrueiurf dilwf q32h 52358y9382r fu3253925y32oi3250y320tnfew', '2017-05-01 15:43:34', 2, 'Wahyu Saepuloh');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_wisata`
--

CREATE TABLE `komentar_wisata` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_wisata` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_wisata`
--

INSERT INTO `komentar_wisata` (`id_komentar`, `id_user`, `komentar`, `tgl_komentar`, `id_wisata`, `nama`) VALUES
(1, 0, 'ini wisata yang sangat bagus deh pokoknya', '2017-05-01 13:18:29', 3, 'Wahyu Saepuloh'),
(2, 0, 'ini mah enak banget deh wisata disini', '2017-05-01 13:19:17', 1, 'Jaenab'),
(3, 0, 'kuliner disini TOP BGT deh, bikin ketagihan dan nambah lagi nih', '2017-05-01 13:20:18', 4, 'Wahyu Saepuloh'),
(4, 0, 'jadi pengen belanja terus disini, lengap dan komplit ada semua disini dan juga murah', '2017-05-01 13:21:14', 5, 'Wahyu Saepuloh');

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
  `cp_penginapan` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `alamat_penginapan`, `daerah_penginapan`, `ket_penginapan`, `harga_penginapan`, `long_penginapan`, `lat_penginapan`, `cp_penginapan`, `id_admin`, `id_user`) VALUES
(1, 'Hotel Lingga', 'Bandung Jawa Barat', 'Jalan Soekarno Hatta', 'Nyaman dan bersih', 1000000, '10000', '9292929', '081312777463', 1, 1),
(2, 'adada', 'adad', 'adad', 'adad', 13131, '1313', '1313', '131313', 1, 1),
(3, 'rumah kosong', 'gdgdff', 'wtertr', 'hfgfhc bfgrgeg', 333333331, '4535', '34534534', '11111', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_wisata` int(5) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat_wisata` varchar(250) NOT NULL,
  `kategori_wisata` varchar(50) NOT NULL,
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

INSERT INTO `tempat_wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `kategori_wisata`, `lat_wisata`, `long_wisata`, `ket_wisata`, `harga_wisata`, `notelp_wisata`, `tanggal_post`, `id_admin`) VALUES
(1, 'situ panjalu', 'ciamis jawa barat', 'Wisata Alam', '1000', '00001', 'danau', 100000, '081312777444', '0000-00-00', 1),
(3, 'situ patenggang', 'bandung', 'Wisata Alam', '1213', '1212', 'bagus', 10000, '08138882121', '0000-00-00', 1),
(4, 'saung mang engking', 'bandung jawa barat', 'Wisata Kuliner', '121212', '121212', 'enak banget makanannya', 10000, '0811213312', '0000-00-00', 1),
(5, 'daskjdsakjdn', 'sadjlndlasndla', 'Wisata Belanja', '', '', 'ksagdksa sjdbaskjd asdbskajd asjdbjaks', 100000001, '08131266663', '0000-00-00', 1);

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
(11, 'nuke', '6c2bfbd89d74ef47595fe6328a142427', 'user', 'nuke@yahoo.com', 'bandung', 'bandung', '081312666473', 'Perempuan', 'nuke'),
(17, 'ben', '7fe4771c008a22eb763df47d19e2c6aa', 'member', 'benjema@member.com', 'madrid', 'madrid', '081312888312', 'Laki-Laki', 'benjema'),
(18, 'kemal', 'ce76d254d71c00b771b8b2013d0a1485', 'member', 'kemal@member.com', 'bandung', 'ciamis', '081312888444', 'Laki-Laki', 'kemal'),
(19, 'dru', '01eb144a9f7fa82afe28627db3035532', 'user', 'dur@a.cs', 'Bandung', 'bandung', '081312555467', 'Perempuan', 'drupadi resi'),
(20, 'a', '0cc175b9c0f1b6a831c399e269772661', 'user', 'a@a', 'as', 'asa', '1', 'Laki-Laki', 'a'),
(21, 'why', '531e70a6745d07a8befbd79e5cc7e4c1', 'user', 'why@w', 'why', 'why', '123', 'Laki-Laki', 'why'),
(22, 'ws', '742523daef59db4b718409f46de05d0c', 'user', 'ws@w', 'ws', 'ws', '123', 'Laki-Laki', 'ws'),
(23, 'apa', 'e03ae33ee8417ce2c9785274217636e0', 'user', 'apa@apa', 'apa', 'apa', '123', 'Laki-Laki', 'apa');

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
-- Indexes for table `gambar_berita`
--
ALTER TABLE `gambar_berita`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `gambar_event`
--
ALTER TABLE `gambar_event`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `gambar_penginapan`
--
ALTER TABLE `gambar_penginapan`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_penginapan` (`id_penginapan`);

--
-- Indexes for table `gambar_wisata`
--
ALTER TABLE `gambar_wisata`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_wisata` (`id_wisata`);

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
-- Indexes for table `komentar_penginapan`
--
ALTER TABLE `komentar_penginapan`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_penginapan` (`id_penginapan`);

--
-- Indexes for table `komentar_tentang`
--
ALTER TABLE `komentar_tentang`
  ADD PRIMARY KEY (`id_komentar`);

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
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gambar_berita`
--
ALTER TABLE `gambar_berita`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `gambar_event`
--
ALTER TABLE `gambar_event`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gambar_penginapan`
--
ALTER TABLE `gambar_penginapan`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gambar_wisata`
--
ALTER TABLE `gambar_wisata`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar_berita`
--
ALTER TABLE `komentar_berita`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `komentar_event`
--
ALTER TABLE `komentar_event`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar_penginapan`
--
ALTER TABLE `komentar_penginapan`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar_tentang`
--
ALTER TABLE `komentar_tentang`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_wisata` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
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
