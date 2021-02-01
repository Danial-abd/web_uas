-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_mahasiswa
CREATE DATABASE IF NOT EXISTS `db_mahasiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_mahasiswa`;

-- Dumping structure for table db_mahasiswa.logindb
CREATE TABLE IF NOT EXISTS `logindb` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_mahasiswa.logindb: ~1 rows (approximately)
/*!40000 ALTER TABLE `logindb` DISABLE KEYS */;
INSERT INTO `logindb` (`user_id`, `user`, `username`, `password`) VALUES
	(1, 'Danial', 'admin', 'admin');
/*!40000 ALTER TABLE `logindb` ENABLE KEYS */;

-- Dumping structure for table db_mahasiswa.tbl_mhs
CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `npm` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` text,
  `kode_pos` varchar(5) NOT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_mahasiswa.tbl_mhs: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_mhs` DISABLE KEYS */;
INSERT INTO `tbl_mhs` (`npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kode_pos`) VALUES
	('19630001', 'midu', 'Marab', '2021-02-18', 'P', 'Pinggir jalan', '12390'),
	('19630100', 'Danial', 'Banjarmasin', '2020-02-10', 'L', 'Jl Trans Kalimantan', '12356'),
	('19630111', 'Danial', 'Banjarmasin', '2020-02-10', 'P', 'Jl Trans Kalimantan', '12356');
/*!40000 ALTER TABLE `tbl_mhs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
