-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for project_rekweb
CREATE DATABASE IF NOT EXISTS `project_rekweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `project_rekweb`;

-- Dumping structure for table project_rekweb.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table project_rekweb.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `username`, `password`, `email`) VALUES
	(2, 'andrias', '1234', 'andrias@gmail.com'),
	(3, 'felix', '123', 'felix@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table project_rekweb.contactus
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `pesan` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table project_rekweb.contactus: ~3 rows (approximately)
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
REPLACE INTO `contactus` (`id`, `nama`, `email`, `alamat`, `pesan`) VALUES
	(3, 'andrias', 'andriasdaniswara.adaja@facebook.com', 'asas', 'adadadwrrwr'),
	(4, 'andrias', 'andriasdaniswara.adaja@facebook.com', 'bandung', 'website gamutu');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;

-- Dumping structure for table project_rekweb.materi
CREATE TABLE IF NOT EXISTS `materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(128) NOT NULL,
  `video` varchar(255) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  `submateri` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table project_rekweb.materi: ~17 rows (approximately)
/*!40000 ALTER TABLE `materi` DISABLE KEYS */;
REPLACE INTO `materi` (`id`, `nama_mapel`, `video`, `deskripsi`, `submateri`) VALUES
	(1, 'Fikih', 'Fixed.mp4', 'dalam bab ini kita akan mempelajari konsep fikih dan ibadah dalam islam', 'Konsep Fikih dan Ibadah dalam Islam'),
	(2, 'Fikih', 'video1.mp4', 'dalam bab ini kita akan mempelajari tentang pengurusan jenazah', 'Pengurusan Jenazah'),
	(3, 'Fikih', 'video2.mp4', 'dalam bab ini kita akan mempelajari tentang kurban dan akikah', 'Kurban dan Akikah'),
	(4, 'Fikih', 'video3.mp4', 'dalam bab ini kita akan mempelajari tentang ketentuan zakat di dalam agama islam', 'ketentuan zakat dalam islam'),
	(5, 'Mengaji', 'video4.mp4', 'dalam bab ini siswa diharapkan dapat memahami iqra 1', 'Iqra 1'),
	(6, 'Mengaji', 'video5.mp4', 'dalam bab ini siswa diharapkan dapat memahami iqra 6', 'Iqra 6'),
	(7, 'Mengaji', 'video6.mp4', 'setelah pengguna memahami iqra di materi kali ini kita akan masuk ke al-quran', 'Al-Quran Juz 1'),
	(8, 'Kelas_Sholat', 'video7.mp4', 'bab ini merupakan intro', 'Intro'),
	(9, 'Kelas_Sholat', 'video8.mp4', 'di bab ini kita akan memahas tentang sholat 5 waktu', 'Sholat 5 Waktu'),
	(10, 'Kelas_Sholat', 'video8.mp4', 'dalam bab ini kita akan mempelajari tentang sholat Jumat', 'Sholat Jumat'),
	(11, 'Kelas_Sholat', 'video9.mp4', 'dalam bab ini kita akan mempelajajri tentang sholat tahajud', 'Sholat Tahajud'),
	(12, 'Kelas_Sholat', 'video10.mp4', 'dalam bab ini kita akan mempelajari tentang sholat dhuha', 'Sholat Dhuha'),
	(13, 'Tajwid', 'video11.mp4', 'dalam bab ini kita akan membahas tentang tajwid idzhar', 'Idzhar'),
	(14, 'Tajwid', 'video12.mp4', 'dalam bab ini kita akan membahas tentang tajwid idgham', 'Idgham'),
	(15, 'Tajwid', 'video20.mp4', 'dalam bab ini kita akan membahas tajwid ikhfa', 'Ikhfa'),
	(16, 'Aqidah', 'video19.mp4', 'dalam bab ini kita akan membahas tentang Aqidah', 'Aqidah'),
	(17, 'Aqidah', 'video18.mp4', 'dalam bab ini kita akan membahas entang "apakah aqidah dan akhlak itu berkaitan?"', 'Aqidah Dan Akhlak');
/*!40000 ALTER TABLE `materi` ENABLE KEYS */;

-- Dumping structure for table project_rekweb.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table project_rekweb.user: ~8 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `nama`, `password`, `email`, `image`) VALUES
	(1, 'andrias', 'awww', 'andriasdaniswara.admaja@facebook.com', 'andrias.png'),
	(3, 'andrias', 'okiokioy', 'Hafizh@gmail.com', 'hafizh.jpg'),
	(5, 'felix', '12345', 'Hafizh@gmail.com', ''),
	(6, 'Felix', '12345', 'felix@gmail.com', NULL),
	(7, 'Yasser Khaled', 'YASSER', 'yasser@gmailcom', 'hafizh.jpg'),
	(8, 'ICAL', '$2y$10$rFR9Hg7d3UCTsgKnnptTNukQ6RxDGkMmL5CbiYdzCQ1AQXYrsc20O', 'ical@gmail.com', ''),
	(9, 'Oki Kurniawan', '$2y$10$S8PRKyYXLgbtoJFSPyfyYuuIkQsd8JGXtYqV69bJjm5/IugQB74dy', 'oki@gmail.com', ''),
	(10, 'faraaz', '$2y$10$kRuzTX.Uc3h7rmApLxJN5uquCPA81RQwM/jRGRtoB1wgySvx/nxbu', 'faraz@gmail.com', ''),
	(11, 'dias', '$2y$10$jmxEO4vtZS0p2C1.bjh/RermOaqpEfuDkm73NBUgVlPkWAG6R.Iee', 'dias@gmail.com', '');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
