-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jun 2017 pada 11.41
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `no_hp_admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '089601651519'),
(2, 'nukepangestu', '6c2bfbd89d74ef47595fe6328a142427', 'nukepangestu14@gmall.com', '082240205900');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_terbaru`
--

CREATE TABLE `berita_terbaru` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tgl_berita` date NOT NULL,
  `jenis_berita` varchar(50) NOT NULL,
  `ket_berita` text NOT NULL,
  `cp_berita` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_terbaru`
--

INSERT INTO `berita_terbaru` (`id_berita`, `judul_berita`, `tgl_berita`, `jenis_berita`, `ket_berita`, `cp_berita`, `id_admin`) VALUES
(3, 'Tahun Ini Boyolali Kuliahkan 30 Pelajar Ke Luar Negeri', '2017-05-23', 'berita Politik', 'Sebanyak 30 pelajar Boyolali akan dibiayai kuliahnya ke luar negeri tahun ini oleh Pemkab Boyolali. Mereka terdiri dari 20 pelajar dengan jenjang pendidikan S1 dan 10 orang dengan jenjang pendidikan S2. Proses seleksi untuk pelajar yang akan dikirimkan untuk kuliah S1 di Nanjing University, Tiongkok, tahun ini sudah selesai dilakukan oleh panitia seleksi. Saat ini menurut Kepala Dinas Pendidikan dan Kebudayaan (Disdikbud) Boyolali, Darmanto, para pelajar yang terpilih tinggal menunggu teknis pemberangkatan. Disebutkan Darmanto, animo pelajar Boyolali untuk kuliah ke luar negeri cukup tinggi. Setidaknya terdapat 60 pelajar yang ikut seleksi. Mereka kemudian diuji, mulai dari seleksi administrative, akademik, hingga wawasan kebangsaan. Pengiriman mahasiswa ke Tiongkok tersebut menurut Darmanto, menyusul pengiriman 10 siswa ke universitas yang sama tahun kemarin. “Dari 60 peserta, sudah terseleksi 20 orang yang saat ini tinggal teknis pemberangkatan,” ungkap Darmanto, Selasa (23/5). Selain beasiswa jenjang pendidikan S1, tahun ini Pemkab Boyolali menurut Darmanto juga memberikan beasiswa untuk jenjang pendidikan S2 dengan tujuan Universitas di London, Inggris. Beasiswa ini diberikan bagi warga Boyolali yang sudah menyandang gelar pendidikan S1. Sedangkan jurusan yang dipilih yakni jurusan Akuntansi dan Manajemen. Untuk seleksi beasiswa S2 ini, menurut Darmanto saat ini tengah proses persiapan. Menurut dia, beasiswa ini diperuntukkan secara bebas bagi warga Boyolali, baik PNS maupun umum. Sementara itu untuk alokasi anggaran beasiswa kuliah ke luar negeri tahun ini, menurut Darmanto dialokasikan anggaran senilai Rp 10,6 miliar. Nantinya meski mereka tidak ada ikatan apapun dengan Pemkab Boyolali, namun mereka diminta untuk serius dalam menimba ilmu di luar negeri. “Tidak ada ikatan dinas, hanya saja mereka wajib membuat laporan pertanggungjawaban setelah lulus,” imbuh Darmanto.', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `nama_event` varchar(150) NOT NULL,
  `tgl_event` date NOT NULL,
  `lokasi_event` varchar(100) NOT NULL,
  `ket_event` text NOT NULL,
  `waktu_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenis_event` varchar(35) NOT NULL,
  `cp_event` varchar(15) NOT NULL,
  `daerah_event` varchar(150) NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tgl_event`, `lokasi_event`, `ket_event`, `waktu_event`, `jenis_event`, `cp_event`, `daerah_event`, `id_admin`) VALUES
(4, 'Peringati Hari Tari Sedunia', '2017-05-28', 'Alun-alun Kabupaten Boyolali', ' Sebanyak 1.728 penari ikut meramaikan event bertemakan “Bojalali Ekspresi Gerak Boyolali” itu. Tak hanya penari lokal, dalam kegiatan tersebut juga terdapat sejumlah penari mancanegara yang turut ambil bagian. Mereka di antaranya dari China, Jerman, Timor Leste, Singapura, serta sejumlah penari dari kota-kota sekitar Boyolali. Kegiatan Boyolali menari 24 jam nonstop tersebut diselenggarakan Disdikbud bekerjasama dengan Ketholeng Institute dan Ireng Putih Production. Kegiatan menari tersebut diawali dengan tari kolosal jaran kepang, yang dipentaskan oleh 500 pelajar SMP dan SMA Boyolali dengan lokasi Pendapa Alit rumah dinas (Rumdin) bupati mulai pukul 07.00 WIB. Kegiatan menari tersebut berlangsung hingga pukul 12.00 WIB dengan disambung tari-tarian yang dipentaskan siswa PAUD, TK, dan SD. Selepas itu, kegiatan menari dilanjutkan ke Gelanggang Anuraga, yang dipentaskan oleh para pelajar SMP dan SMA di Boyolali. Petang harinya, kegiatan menari itu kembali bergeser ke kawasan Simpang Lima Siaga yang berlangsung hingga tengah malam.', '0000-00-00 00:00:00', 'Event Tari', '', 'Kabupaten Boyolali', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_berita`
--

CREATE TABLE `gambar_berita` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_berita` int(5) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_berita`
--

INSERT INTO `gambar_berita` (`id_gambar`, `gambar`, `tgl_upload`, `id_berita`, `token`) VALUES
(24, 'BEASISWA.jpg', '2017-05-24 01:54:49', 3, '0.3521839590539675'),
(25, 'BEASISWA.jpg', '2017-06-01 13:15:31', 3, '0.608694088250419');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_event`
--

CREATE TABLE `gambar_event` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_event` int(5) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_event`
--

INSERT INTO `gambar_event` (`id_gambar`, `gambar`, `tgl_upload`, `id_event`, `token`) VALUES
(9, 'Hari-Tari-Jensud-Solo-3.jpg', '2017-05-24 01:49:12', 4, '0.15532512245143304'),
(10, 'PERINGATI-HARI-TARI-SEDUNIA-BOYOLALI-MENARI-24-JAM-DIGELAR-2.jpg', '2017-05-24 01:49:12', 4, '0.6372971222716257'),
(11, 'tari-massal_20160429_172727.jpg', '2017-05-24 01:49:12', 4, '0.05186641764969613'),
(12, 'tari-massal_20160429_172727.jpg', '2017-06-01 13:15:14', 4, '0.9835990279415572');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_penginapan`
--

CREATE TABLE `gambar_penginapan` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_penginapan` int(5) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_penginapan`
--

INSERT INTO `gambar_penginapan` (`id_gambar`, `gambar`, `tgl_upload`, `id_penginapan`, `token`) VALUES
(3, 'boyolaliindah.jpg', '2017-05-24 01:42:12', 1, '0.5362940711537175'),
(4, 'hotelpondokasri.jpg', '2017-05-24 01:42:24', 2, '0.4768578053662118'),
(5, 'pondok_indah_boyolali.jpg', '2017-05-24 01:43:45', 3, '0.41079702282243546'),
(6, 'pondok_indah_boyolali.jpg', '2017-06-01 13:14:28', 3, '0.04854208355113043'),
(7, 'hotelpondokasri.jpg', '2017-06-01 13:14:41', 2, '0.8220305154991479'),
(8, 'boyolaliindah.jpg', '2017-06-01 13:14:51', 1, '0.6368026102495298');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_wisata`
--

CREATE TABLE `gambar_wisata` (
  `id_gambar` int(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_wisata` int(5) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar_wisata`
--

INSERT INTO `gambar_wisata` (`id_gambar`, `gambar`, `tgl_upload`, `id_wisata`, `token`) VALUES
(1, 'tweet7.JPG', '2017-05-14 08:57:15', 5, '0.3021180133243613'),
(2, '6.jpg', '2017-05-14 08:58:27', 3, '0.4529448435595018'),
(3, '11.jpg', '2017-05-24 01:27:07', 1, '0.5608781504248882'),
(4, '2.jpg', '2017-05-24 01:27:07', 1, '0.5930720452866396'),
(5, '41.jpg', '2017-05-24 01:27:08', 1, '0.5209403831516076'),
(6, '3.jpg', '2017-05-24 01:27:08', 1, '0.32839534947290594'),
(7, '9367.jpg', '2017-05-24 01:30:34', 3, '0.6011271832211551'),
(8, '9370.jpg', '2017-05-24 01:30:34', 3, '0.01762911000863221'),
(9, '9371.jpg', '2017-05-24 01:30:34', 3, '0.09661462442670354'),
(10, '06_-Amigo-Sukoharjo.jpg', '2017-05-24 01:32:14', 4, '0.5070616151759396'),
(11, '07_-Amigo-Boyolali-Lama.jpg', '2017-05-24 01:32:14', 4, '0.36787209929822884'),
(12, '11.jpg', '2017-06-01 13:12:15', 5, '0.0748239085430229'),
(13, '41.jpg', '2017-06-01 13:12:57', 1, '0.36701532344171317'),
(14, '9367.jpg', '2017-06-01 13:13:32', 3, '0.14973418269600824'),
(15, '9370.jpg', '2017-06-01 13:13:32', 3, '0.6253820611682973'),
(16, '9371.jpg', '2017-06-01 13:13:32', 3, '0.87538536551106');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_berita`
--

CREATE TABLE `komentar_berita` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_berita` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_event`
--

CREATE TABLE `komentar_event` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_event` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_penginapan`
--

CREATE TABLE `komentar_penginapan` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_penginapan` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_wisata`
--

CREATE TABLE `komentar_wisata` (
  `id_komentar` int(10) NOT NULL,
  `id_user` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_wisata` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(5) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `alamat_penginapan` varchar(150) NOT NULL,
  `daerah_penginapan` varchar(150) NOT NULL,
  `ket_penginapan` text NOT NULL,
  `harga_penginapan` int(10) NOT NULL,
  `long_penginapan` varchar(100) NOT NULL,
  `lat_penginapan` varchar(100) NOT NULL,
  `cp_penginapan` varchar(15) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `alamat_penginapan`, `daerah_penginapan`, `ket_penginapan`, `harga_penginapan`, `long_penginapan`, `lat_penginapan`, `cp_penginapan`, `id_admin`, `id_user`) VALUES
(1, 'Hotel Boyolali Indah', 'Jl. Solo - Boyolali RT01/RW09', 'Kabupaten Boyolali', 'Hotel yang menyediakan 12 kamar dengan kisaran harga antara Rp. 110.000 sampai dengan Rp. 500.000', 110000, '', '', '0276325660', 1, 1),
(2, 'Penginapan Pondok Asri', 'Jl. Perintis Kemerdekaan No. 9', 'Kabupaten Boyolali', 'Hotel yang menyediakan 16 kamar dengan tarif Rp 60.000 sampai dengan Rp 250.000', 150000, '', '', '0276323760', 1, 1),
(3, 'Penginapan Pondok Indah', 'Jl. Merapi No.27, Pulisen, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah', 'Pulisen', 'Menyediakan 26 jumlah kamar dengan fasilitas sesuai dengan harga yang tersedia. Nyaman, bersih dan juga dekat dengan jalur transportasi umum.', 165000, '', '', '0276321497', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_wisata` int(5) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat_wisata` varchar(250) NOT NULL,
  `kategori_wisata` varchar(50) NOT NULL,
  `lat_wisata` varchar(100) NOT NULL,
  `long_wisata` varchar(100) NOT NULL,
  `ket_wisata` text NOT NULL,
  `harga_wisata` int(10) NOT NULL,
  `notelp_wisata` varchar(15) NOT NULL,
  `tanggal_post` date NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `kategori_wisata`, `lat_wisata`, `long_wisata`, `ket_wisata`, `harga_wisata`, `notelp_wisata`, `tanggal_post`, `id_admin`) VALUES
(1, 'Gunung Merbabu', 'Jl. Merbabu No.136 Kabupaten Boyolali, Jawa Tengah', 'Wisata Alam', '', '', 'Gunung Merbabu adalah gunung api yang bertipe Strato (lihat Gunung Berapi) yang terletak secara geografis pada 7,5° LS dan 110,4° BT. Secara administratif gunung ini berada di wilayah Kabupaten Magelang di lereng sebelah barat dan Kabupaten Boyolali di lereng sebelah timur dan selatan, Kabupaten Semarang di lereng sebelah utara, Provinsi Jawa Tengah.  Gunung Merbabu dikenal melalui naskah-naskah masa pra-Islam sebagai Gunung Damalung atau Gunung Pam(a)rihan. Di lerengnya pernah terdapat pertapaan terkenal dan pernah disinggahi oleh Bujangga Manik pada abad ke-15. Menurut etimologi, "merbabu" berasal dari gabungan kata "meru" (gunung) dan "abu" (abu). Nama ini baru muncul pada catatan-catatan Belanda.  Gunung ini pernah meletus pada tahun 1560 dan 1797. Dilaporkan juga pada tahun 1570 pernah meletus, akan tetapi belum dilakukan konfirmasi dan penelitian lebih lanjut. Puncak gunung Merbabu berada pada ketinggian 3.145 meter di atas permukaan air laut.  Gunung Merbabu mempunyai kawasan Hutan Dipterokarp Bukit, Hutan Dipterokarp Atas, Hutan Montane, dan hutan Ericaceous atau hutan gunung.', 10000, '02763293341', '0000-00-00', 1),
(3, 'Ini Baru Steak', 'Jl. Pandanaran No. 301, Banaran, Kabupaten Boyolali', 'Wisata Kuliner', '', '', 'Merupakan tempat wisata kuliner yang menyediakan berbagai menu steak dan dessert.', 2000, '02763280035', '0000-00-00', 1),
(4, 'Amigo Boyolali', 'Jl. Pandanaran No. 105A, Kabupaten Boyoalali', 'Wisata Belanja', '', '', 'Amigo Group adalah toko retail fashion and shoes yang terletak di karesidenan Surakarta dan DIY. Ada 9 toko yang tersebar di kabupaten Klaten, Sukoharjo, Boyolali, Gunung Kidul dan Karanganyar.', 2000, ' 087834888324', '0000-00-00', 1),
(5, 'Gunung Merapi', 'Selo Boyolali', 'Wisata Alam', '-63829.2321', '3297313', 'wisata gunung merapi', 100000, '08939244', '2017-05-23', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `email`, `domisili`, `asal_daerah`, `no_hp_user`, `jk`, `nama_lengkap`) VALUES
(20, 'ajengpursita', '43317d3fd0d3344a7152250b9fd0dc2f', 'User', 'pursitasariajeng2@gmail.com', 'Bandung', 'Bekasi', '082240206708', 'Perempuan', 'Ajeng Pursitasari'),
(21, 'ivo', '20e04899c46cd16355f0f2ca77fa83b9', 'User', 'ivo@gmail.com', 'Bandung', 'Cirebon', '081222287583', 'Perempuan', 'Ivo Auliannisa S S'),
(22, 'sanah', '138d3ab7fedb3af29c9fa9dca7bcf8da', 'user', 'sanahsiz@gmail.com', 'Bandung', 'Jambi', '082374123515', 'Perempuan', 'Nurhasanah'),
(23, 'dimaspp', '2d1f04d16999e6831a24401efedda1d2', 'User', 'dimaspp@gmail.com', 'Bandung', 'Bekasi', '082240207809', 'Laki-Laki', 'Dimas Putra Pamungkas');

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
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita_terbaru`
--
ALTER TABLE `berita_terbaru`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gambar_berita`
--
ALTER TABLE `gambar_berita`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `gambar_event`
--
ALTER TABLE `gambar_event`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gambar_penginapan`
--
ALTER TABLE `gambar_penginapan`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gambar_wisata`
--
ALTER TABLE `gambar_wisata`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
-- AUTO_INCREMENT for table `komentar_penginapan`
--
ALTER TABLE `komentar_penginapan`
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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita_terbaru`
--
ALTER TABLE `berita_terbaru`
  ADD CONSTRAINT `berita_terbaru_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `gambar_berita`
--
ALTER TABLE `gambar_berita`
  ADD CONSTRAINT `gambar_berita_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita_terbaru` (`id_berita`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `gambar_event`
--
ALTER TABLE `gambar_event`
  ADD CONSTRAINT `gambar_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `gambar_penginapan`
--
ALTER TABLE `gambar_penginapan`
  ADD CONSTRAINT `gambar_penginapan_ibfk_1` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `gambar_wisata`
--
ALTER TABLE `gambar_wisata`
  ADD CONSTRAINT `gambar_wisata_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tempat_wisata` (`id_wisata`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `komentar_berita`
--
ALTER TABLE `komentar_berita`
  ADD CONSTRAINT `komentar_berita_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita_terbaru` (`id_berita`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `komentar_event`
--
ALTER TABLE `komentar_event`
  ADD CONSTRAINT `komentar_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `komentar_penginapan`
--
ALTER TABLE `komentar_penginapan`
  ADD CONSTRAINT `komentar_penginapan_ibfk_1` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `komentar_wisata`
--
ALTER TABLE `komentar_wisata`
  ADD CONSTRAINT `komentar_wisata_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tempat_wisata` (`id_wisata`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `penginapan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `tempat_wisata_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
