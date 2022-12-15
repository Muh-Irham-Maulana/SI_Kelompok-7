-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for rumahkucingneko_db
CREATE DATABASE IF NOT EXISTS `rumahkucingneko_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rumahkucingneko_db`;

-- Dumping structure for table rumahkucingneko_db.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table rumahkucingneko_db.customers: ~15 rows (approximately)
INSERT INTO `customers` (`id`, `name`, `address`, `email`, `phone_number`) VALUES
	(1, 'Atira Septiara', '	Kos Wildha, Jl.STPP Gowa, Bontomarannu, Gowa, Sulawesi Selatan', 'atirasepti@gmail.com', '082398922922'),
	(2, 'Azzahra Beladina', '	Kos Wildha, Jl.STPP Gowa, Bontomarannu, Gowa, Sulawesi Selatan', '	azzhrabeladina@gmail.com', '081340977993'),
	(3, 'Husnul Khatimah', '	Jl.Bontobila IV No.9 Manggala, Makassar', '	husnulkhatimahsy@gmail.com', '081953116851'),
	(4, 'Rofino Valentino', '	Jl.Sahabat VII, Tamalanrea', '	rofino.dv11@gmail.com', '	082337605662'),
	(5, 'Sitti Zakiyah', '	Perumahan Anging Mamiri, Blok D4 No.14', '	zakiyah.nurkhalisa@gmail.com', '081543203699'),
	(6, 'Asmaul Husna', '	Perumahan Nirwana Pettarani', '	asmawatianti@gmail.com', '085326663627'),
	(7, 'Arika Rani', '	Jl.Pelita Raya Blok A22 No.13', '	arikaranids@gmail.com', '085249617564'),
	(8, 'Dimas Pratama', 'Perumahan DL Sitorus, Sidomulyo, Deli Serdang, Medan, Sumatera Utara', '	dimaspratama23@gmail.com', '0895329974543'),
	(9, 'Nurumayyah Fathurrachmah', 'BTN Graha Kalegowa, Pallangga, Gowa, Sulawesi Selatan', 'fnurumayyah@gmail.com', '0895806151236'),
	(10, 'Tri Indah Wahyuningsih', 'Jl. Arsitektur 4, Bangkala, Manggala, Makassar, Sulawesi Selatan', 'triindahh@gmail.com', '087700917976'),
	(11, 'Anggi Herlindia', '	Perumahan DL Sitorus, Sidomulyo, Deli Serdang, Medan, Sumatera Utara', '	anggihr@gmail.com', '082366083493'),
	(12, 'Muhammad Mifzal', 'Ciputra Citraland D1/14, Jl. Tun Abdul Razak, Somba Opu, Gowa, Sulawesi Selatan', 'muhmifzal12@gmail.com', '081244933173'),
	(13, 'Wa Ode Dian', 'Pondok Putri Sari, Jl. Muhajirin 3, Tamalate, Sulawesi Selatan', 'waodeDian@gmail.com', '087877190851'),
	(14, 'Muh Irham Maulana', '	BTN Kumala Permai, Jl. Muhammad Tahir, Tamalate, Sulawesi Selatan', 'mmim20d@student.unhas.ac.id', '085241120007'),
	(15, 'Eshan Rayyan Altair', 'BTN Graha Kalegowa, Pallangga, Gowa, Sulawesi Selatan', 'meshanrayyan08@gmail.com', '081267357853');

-- Dumping structure for table rumahkucingneko_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salary` int(19) NOT NULL DEFAULT 0,
  `join_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table rumahkucingneko_db.employees: ~7 rows (approximately)
INSERT INTO `employees` (`id`, `name`, `designation`, `phone_number`, `email`, `salary`, `join_date`) VALUES
	(1, 'Taufiq', 'Cashier', '085955279392', 'taufiq@gmail.com', 2200000, '2020-02-22'),
	(2, 'Indah Ningsi', 'Staff Grooming', '087700917976', 'indahningsi15@gmail.com', 2500000, '2020-04-25'),
	(3, 'Padel', 'Staff Grooming', '085245671871', 'realpadel09@gmail.com', 3500000, '2020-02-15'),
	(4, 'Amelia Putri', 'Staff Grooming', '081356782356', 'ameliaputri111@gmail.com', 2500000, '2020-03-11'),
	(5, 'Mikayla', 'Cats Feeding', '081287695048', 'themikayla2302@gmail.com', 3500000, '2021-03-25'),
	(6, 'Hartono', 'Cats Feeding', '082376584327', 'hartonoo567@gmail.com', 3500000, '2021-05-22'),
	(7, 'Hartini', 'Media Social Admin', '085376584328', 'hartini567@gmail.com', 1400000, '2021-05-25');

-- Dumping structure for table rumahkucingneko_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rumahkucingneko_db.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table rumahkucingneko_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rumahkucingneko_db.migrations: ~4 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Dumping structure for table rumahkucingneko_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rumahkucingneko_db.password_resets: ~0 rows (approximately)

-- Dumping structure for table rumahkucingneko_db.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rumahkucingneko_db.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table rumahkucingneko_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table rumahkucingneko_db.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Test User', 'test@example.com', '2022-12-11 00:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SJfmajW7re', '2022-12-11 00:40:55', '2022-12-11 00:40:55');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
