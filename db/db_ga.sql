-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_ga.ga
CREATE TABLE IF NOT EXISTS `ga` (
  `resource_id` int(11) NOT NULL,
  `positive_guys` int(11) NOT NULL DEFAULT '0',
  `google_analitycs` int(11) NOT NULL DEFAULT '0',
  KEY `FK_ga_resources` (`resource_id`),
  CONSTRAINT `FK_ga_resources` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_ga.ga: ~3 rows (approximately)
/*!40000 ALTER TABLE `ga` DISABLE KEYS */;
REPLACE INTO `ga` (`resource_id`, `positive_guys`, `google_analitycs`) VALUES
	(3, 3000, 360),
	(2, 2000, 100),
	(1, 1050, 150);
/*!40000 ALTER TABLE `ga` ENABLE KEYS */;

-- Dumping structure for table db_ga.resources
CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table db_ga.resources: ~3 rows (approximately)
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;
REPLACE INTO `resources` (`id`, `name`) VALUES
	(1, 'ebay.com'),
	(2, 'amazon.com'),
	(3, 'yahoo.com');
/*!40000 ALTER TABLE `resources` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
