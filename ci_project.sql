-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.19 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table ci_project.tb_karyawan
CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ci_project.tb_karyawan: ~4 rows (lebih kurang)
DELETE FROM `tb_karyawan`;
/*!40000 ALTER TABLE `tb_karyawan` DISABLE KEYS */;
INSERT INTO `tb_karyawan` (`id`, `name`, `alamat`, `email`, `flag`) VALUES
	(1, 'Christian Rosandhy', 'Jl Bedugul no 49', 'me@tianrosandhy.com', 1),
	(2, 'Onyol Gunawan', 'Jl Baturiti no 35', 'me@onyol.com', 1),
	(3, 'Semvag Vochonk', 'Jl Sesetan no 29', 'me@semvag.com', 1),
	(4, 'Ray Michele', 'Jl Sampoerna no 141', 'me@ray.com', 0),
	(5, 'Hehehe', 'Ishssss', 'tian@malah.com', 1);
/*!40000 ALTER TABLE `tb_karyawan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
