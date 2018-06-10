-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2018 at 01:17 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tank`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_08_063327_create_tanks_table', 1),
(4, '2018_06_08_082442_create_upload_tanks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanks`
--

DROP TABLE IF EXISTS `tanks`;
CREATE TABLE IF NOT EXISTS `tanks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tiers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deamont` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `armory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanks`
--

INSERT INTO `tanks` (`id`, `tiers`, `tanks`, `deamont`, `cash`, `armory`, `tech`, `elite`, `platform`, `price`, `siller_name`, `phone_number`, `country`, `region`, `guarantor`, `metting`, `plans`, `created_at`, `updated_at`) VALUES
(1, 'tier2', 'tank2', 1200, 2500700, '11/11/11/11/11', '11/11/11/11/11/11', '11 day', 'on', '$111', 'Xurshid Ergashev', '901240108', 'italy', 'Кашкадарьинская область', '1', 'yes', 'on', '2018-06-09 19:56:56', '2018-06-09 19:56:56'),
(2, 'tier4s', 'tank2', 1200, 2500700, '22/22/22/22/22', '22/22/22/22/22/22', '11 day', 'on', '$122', 'Xurshid Ergashev', '901240108', 'usa', 'Кашкадарьинская область', '5', 'yes', 'on', '2018-06-09 20:01:07', '2018-06-09 20:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `upload_tanks`
--

DROP TABLE IF EXISTS `upload_tanks`;
CREATE TABLE IF NOT EXISTS `upload_tanks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tank_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_tanks`
--

INSERT INTO `upload_tanks` (`id`, `filename`, `tank_id`, `created_at`, `updated_at`) VALUES
(1, 'images/zTvrs9WsG7bDdVnrhbqR0sP5LyMoKaZdRH9EphJQ.jpeg', 1, '2018-06-09 19:56:57', '2018-06-09 19:56:57'),
(2, 'images/uCja1EKhXs7e1WRsmSVjiHJkllfQX5gCYgJieCvZ.jpeg', 1, '2018-06-09 19:56:57', '2018-06-09 19:56:57'),
(3, 'images/GZgzJTFLrmKlKoRu6bIJWTM2LCbI7USLeE1M4prw.jpeg', 1, '2018-06-09 19:56:57', '2018-06-09 19:56:57'),
(4, 'images/siLitiEnKSxy9atFxNFVi3nY8hBdYIkOSEV2uAtC.jpeg', 1, '2018-06-09 19:56:57', '2018-06-09 19:56:57'),
(5, 'images/GpS7MvZIGHIOYRZhRK6eT7ND098aFXVJ12MF8tBw.jpeg', 2, '2018-06-09 20:01:07', '2018-06-09 20:01:07'),
(6, 'images/kXx2fqZMIhmi6cg2dETCm7zvUtxZ2IE8TSQzZIgZ.jpeg', 2, '2018-06-09 20:01:07', '2018-06-09 20:01:07'),
(7, 'images/18a7XX8suNiHqBmpStjPSiSFHwm98fNqMY1F9CkX.jpeg', 2, '2018-06-09 20:01:07', '2018-06-09 20:01:07'),
(8, 'images/yOCaJDy0uu6XyHDyjTivM6GXgHiz0rvL9taqfK52.jpeg', 2, '2018-06-09 20:01:07', '2018-06-09 20:01:07'),
(9, 'images/Iwix04QPTNqHx2wIum0pbMq4I7liI5kWutKzMWdx.jpeg', 2, '2018-06-09 20:01:07', '2018-06-09 20:01:07'),
(10, 'images/rhYww3xmxSCH6I2IrHdzn2CbAz3G31csjMCLF1Ti.jpeg', 2, '2018-06-09 20:01:07', '2018-06-09 20:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
