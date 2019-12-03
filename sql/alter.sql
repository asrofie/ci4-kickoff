-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- Creation date				 2019-08-01 15:33:00
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table so_data.so_client
CREATE TABLE IF NOT EXISTS `so_client` (
  `so_client_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `register_date` timestamp NULL DEFAULT NULL,
  `expired_date` timestamp NULL DEFAULT NULL,
  `is_deleted` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `created_date` timestamp NULL DEFAULT NULL,
  `created_by` int(10) unsigned NOT NULL DEFAULT 1,
  `updated_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  PRIMARY KEY (`so_client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table so_data.so_client: ~0 rows (approximately)
/*!40000 ALTER TABLE `so_client` DISABLE KEYS */;
INSERT INTO `so_client` (`so_client_id`, `email`, `password`, `name`, `register_date`, `expired_date`, `is_deleted`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
	(1, 'demo@siomah.id', '123', 'Demo Siomah', '2019-08-01 15:29:31', '2020-08-01 15:29:33', 'N', '2019-08-01 15:29:38', 1, '2019-08-01 15:29:41', 1);
/*!40000 ALTER TABLE `so_client` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
