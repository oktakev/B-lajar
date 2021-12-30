-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 06:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `is_read` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jawaban_siswa` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Daily test'),
(2, 'weekly test'),
(3, 'monthly test');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'Kelas 1 SD'),
(2, 'Kelas 2 SD'),
(3, 'Kelas 3 SD'),
(4, 'Kelas 4 SD'),
(5, 'Kelas 5 SD'),
(6, 'Kelas 6 SD');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_video`
--

CREATE TABLE `komentar_video` (
  `id_komentar_video` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `isi_materi` varchar(255) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `gambar`, `tanggal_upload`, `isi_materi`, `pdf`, `id_kelas`, `id_guru`) VALUES
(2, 'Learning Describing People', '1.jpg', '2019-01-17 06:18:50', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas tentang materi bahasa inggris describing people and object bagi murid SD Kelas 6 Penting sekali bagi kalian untuk mempelajari materi ini.', '1.jpg', 6, 2),
(3, 'Learning Family', '2.jpg', '2019-01-17 06:20:17', 'Hello people! How are you today? Pada kesempatan ini kami akan membahas materi My Family atau dalam bahasa indonesianya adalah keluargaku. Keluarga dalam bahasa inggris disebut Family.', 'family.pdf', 2, 2),
(4, 'Learning Weather', '3.jpg', '2019-01-17 06:22:59', 'Hello guys, how are you today? Pada kesempatan kali ini kami akan membahas berbagai jenis musim atau dalam bahasa inggrisnya adalah Season. Di Indonesia sendiri terdapat 2 musim.', 'cuaca.pdf', 5, 2),
(5, 'Learning Time', '4.jpg', '2019-01-17 06:25:43', 'Hello everyone, how are you today? Hari ini kami akan membahas tentang materi Jam dan Waktu dalam bahasa inggris. Di dalam kehidupan sehari-hari kita pasti tidak pernah lepas dari yang namanya waktu', 'time.pdf', 2, 3),
(6, 'Learning Greeting', '5.jpg', '2019-01-17 06:30:05', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas tentang materi greetings dan partings untuk (kelas 1 SD). Greetings and partings merupakan materi yang sangat awal untuk dipelajari.', 'greeting.pdf', 1, 3),
(7, 'Learning Vegetables', '6.jpg', '2019-01-17 06:31:34', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas materi sayuran (Vegetables) dalam bahasa inggris. Materi vegetables ini adalah bagian dari vocabulary bahasa inggris yang paling dasar atau basic', 'vegetables.pdf', 3, 3),
(8, 'Learning Transportation', '7.jpg', '2019-01-17 06:32:27', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas materi Transportation atau dalam bahasa indonesianya adalah transportasi/kendaraan.', 'kendaraan.pdf', 2, 3),
(9, 'Learning Food', '8.jpg', '2019-01-17 06:34:31', 'Hello para Jagoan Bahasa Inggris, bertemu lagi dengan kami disini. Pada kesempatan kali ini kami akan membahas Materi Foods and Drinks yang berarti makanan dan minuman. Hmmm, yummy! eitsss, tapi jangan lapar dulu.', 'food.pdf', 2, 1),
(11, 'Learning Body', '9.jpg', '2019-01-17 06:36:35', 'Hello para Jagoan Bahasa Inggris, How are you today? Pada kesempatan kali ini kami akan memberikan materi tentang Part of Body atau Bagian-Bagian Tubuh dalam bahasa Inggris.', 'Part of Body.pdf', 1, 1),
(12, 'Learning Directions', '10.jpg', '2019-01-17 06:37:52', 'Hello everyone? How are you today? Pada kesempatan kali ini kami akan memberikan penjelasan tentang memberi petunjuk arah dan lokasi dalam bahasa inggris dalam kehidupan sehari hari.', 'Direction and Location.pdf', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `jawaban_benar` varchar(100) NOT NULL,
  `id_ujian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `waktu_ujian` date NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `lama_ujian` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `retype_password` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `nama`, `username`, `password`, `retype_password`, `status`) VALUES
(7, 'unknown', 'myadmin', 'myadmin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_guru`
--

CREATE TABLE `user_guru` (
  `id_guru` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `usia` int(50) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `retype_password` varchar(50) NOT NULL,
  `is_read` int(1) NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_siswa`
--

CREATE TABLE `user_siswa` (
  `id_siswa` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `retype_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(100) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `tanggal_upload`, `gambar`, `deskripsi`, `src`, `id_kelas`, `id_guru`) VALUES
(1, 'Learning Describing People', '2019-01-17 06:41:19', 'V1.jpg', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas tentang materi bahasa inggris describing people and object bagi murid SD Kelas 6 Penting sekali bagi kalian untuk mempelajari materi ini.', 'Describing People.mp4', 2, 3),
(2, 'Learning Family', '2019-01-17 06:42:38', 'V2.jpg', 'Hello people! How are you today? Pada kesempatan ini kami akan membahas materi My Family atau dalam bahasa indonesianya adalah keluargaku. Keluarga dalam bahasa inggris disebut Family.', 'my family.MP4', 2, 3),
(4, 'Learning Weather', '2019-01-17 06:45:07', 'V3.jpg', 'Hello guys, how are you today? Pada kesempatan kali ini kami akan membahas berbagai jenis musim atau dalam bahasa inggrisnya adalah Season. Di Indonesia, kita hanya mempunyai dua musim.', 'Kids vocabulary - Weather - Hows the weather - Learn English for kids - English educational video.mp4', 5, 3),
(6, 'Learning Time', '2019-01-17 06:46:51', 'V4.jpg', 'Hello everyone, how are you today? Hari ini kami akan membahas tentang materi Jam dan Waktu dalam bahasa inggris. Di dalam kehidupan sehari-hari kita pasti tidak pernah lepas dari yang namanya waktu.', 'time.mp4', 2, 2),
(7, 'Learning Greeting', '2019-01-17 06:48:12', 'V5.jpg', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas tentang materi greetings dan partings untuk (kelas 1 SD). Greetings and partings merupakan materi yang sangat awal untuk dipelajari.', 'greeting.mp4', 1, 2),
(8, 'Learning Vegetables', '2019-01-17 06:49:59', 'V6.jpg', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas materi sayuran (Vegetables) dalam bahasa inggris. Materi vegetables ini adalah bagian dari vocabulary bahasa inggris paling dasar.', 'Fruits & Vegetables .mp4', 3, 2),
(9, 'Learning Transportation', '2019-01-17 06:54:27', 'V7.jpg', 'Hello everyone, how are you today? Pada kesempatan kali ini kami akan membahas materi Transportation atau dalam bahasa indonesianya adalah transportasi/kendaraan.', 'Transport vehicles name and sound - Kids Learning.mp4', 2, 1),
(10, 'Learning Food', '2019-01-17 06:57:46', 'V8.jpg', 'Hello para Jagoan Bahasa Inggris, bertemu lagi dengan kami disini. Pada kesempatan kali ini kami akan membahas Materi Foods and Drinks yang berarti makanan dan minuman. Hmmm, yummy! eitsss, tapi jangan lapar dulu.', 'Learn Food for Kids  What Is It Game for Kids  Maple Leaf Learning.mp4', 2, 1),
(11, 'Learning Part of Body', '2019-01-17 06:59:28', 'V9.jpg', 'Hello para Jagoan Bahasa Inggris, How are you today? Pada kesempatan kali ini kami akan memberikan materi tentang Part of Body atau Bagian-Bagian Tubuh dalam bahasa Inggris.Ya mengenal Part of Body.', 'Body - parts of the body .mp4', 1, 1),
(12, 'Learning Directions', '2019-01-17 07:01:19', 'v10.jpg', 'Hello everyone? How are you today? Pada kesempatan kali ini kami akan memberikan penjelasan tentang memberi petunjuk arah dan lokasi dalam bahasa inggris dalam kehidupan sehari hari', 'directions.mp4', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal` (`id_soal`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `komentar_video`
--
ALTER TABLE `komentar_video`
  ADD PRIMARY KEY (`id_komentar_video`),
  ADD KEY `id_materi` (`id_video`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_ujian` (`id_ujian`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `user_guru`
--
ALTER TABLE `user_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `user_siswa`
--
ALTER TABLE `user_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar_video`
--
ALTER TABLE `komentar_video`
  MODIFY `id_komentar_video` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_guru`
--
ALTER TABLE `user_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_siswa`
--
ALTER TABLE `user_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_soal`) REFERENCES `soal` (`id_soal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `user_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar_video`
--
ALTER TABLE `komentar_video`
  ADD CONSTRAINT `komentar_video_ibfk_1` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_ujian`) REFERENCES `ujian` (`id_ujian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ujian_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
