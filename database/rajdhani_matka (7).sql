-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajdhani_matka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(3, 'rajdhani@gmail.com', '$2y$12$2TR1dqL0ST4CQOm4bu8v1.3DDYIY6Y5RHsIz9XRsDgtUaIVOEKUby', '2024-07-09 02:59:42', '2024-07-09 02:59:42'),
(4, 'rupsanetwork@gmail.com', '$2y$12$1fUJHgacuGUd3Hj2wUnIDO7RQ50ncHl9DTbyu88forMWKhyOAlzKO', NULL, '2024-08-12 00:45:18'),
(5, 'rupsaauto@gmail.com', '$2y$12$VDEZQAWgLa4xvmpjdAEhnuRKO1Trn5MmOqOF1IN6IJXmZfnsDqcZW', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bid_histories`
--

CREATE TABLE `bid_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marketname` varchar(255) NOT NULL,
  `gamename` varchar(255) NOT NULL,
  `digit` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `win` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid_histories`
--

INSERT INTO `bid_histories` (`id`, `marketname`, `gamename`, `digit`, `amount`, `date`, `session`, `username`, `contact`, `email`, `win`, `created_at`, `updated_at`) VALUES
(77, 'boro bazar', 'JODI DIGIT', 6, 100.00, '2024-11-25', 'close', 'Demo Demo', '1234567891', 'demo@gmail.com', '0', NULL, NULL),
(78, 'DELHI NIGHT', 'SINGLE PANNA', 10, 1000.00, '2024-11-25', 'open', 'Demo Demo', '1234567891', 'demo@gmail.com', '0', NULL, NULL),
(79, 'FARIDABAD', 'Right Digit', 19, 1000.00, '2024-11-26', 'N/A', 'Demo Demo', '1234567891', 'demo@gmail.com', '1', NULL, NULL),
(81, 'New Market', 'Right Digit', 7, 500.00, '2024-11-26', 'N/A', 'Demo Demo', '1234567891', 'demo@gmail.com', '1', NULL, NULL),
(82, 'KARNATAKA DAY', 'HALF SANGAM', 8, 1000.00, '2024-11-26', 'close', 'Demo Demo', '1234567891', 'demo@gmail.com', '0', NULL, NULL),
(83, 'New Starline Market 1', 'Triple Panna', 11, 1000.00, '2024-11-28', 'close', 'Demo Demo', '1234567891', 'demo@gmail.com', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_request`
--

CREATE TABLE `deposit_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deposit_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT '0',
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposit_request`
--

INSERT INTO `deposit_request` (`id`, `deposit_id`, `name`, `number`, `amount`, `balance`, `payment_status`, `payment_method`, `created_at`, `updated_at`) VALUES
(4, '65977368', 'Demo Demo', '1234567891', '2000', '852', '0', '1', '2024-10-15 18:30:00', NULL),
(5, '87399350', 'Test Test', '1234567892', '500', '250', '0', '0', '2024-10-15 18:30:00', NULL),
(6, '52634647', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(7, '84149264', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(8, '31294370', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(9, '56503280', 'Test Test', '1234567892', '3000', '250', '1', '1', '2024-10-15 18:30:00', NULL),
(10, '72464816', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(11, '55150924', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(12, '62399535', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(13, '41249025', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(14, '98737892', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(15, '44482534', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(16, '57341154', 'Test Test', '1234567892', '3000', '250', '1', '1', '2024-10-15 18:30:00', NULL),
(17, '20678107', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(18, '29596234', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(19, '86492974', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(20, '11442808', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(21, '80305968', 'Test Test', '1234567892', '3000', '250', '0', '1', '2024-10-15 18:30:00', NULL),
(22, '26131342', 'Test Test', '1234567892', '5000', '250', '1', '2', '2024-10-15 18:30:00', NULL),
(23, '68376889', 'Test Test', '1234567892', '10000', '250', '0', '0', '2024-10-15 18:30:00', NULL),
(24, '94754945', 'Test Test', '1234567892', '10000', '250', '0', '0', '2024-10-15 18:30:00', NULL),
(25, '18973405', 'Demo Demo', '1234567891', '600', '852', '1', '1', '2024-10-16 18:30:00', NULL),
(26, '72951255', 'Demo Demo', '1234567891', '2000', '852', '0', '2', '2024-10-16 18:30:00', NULL),
(27, '81384534', 'Demo Demo', '1234567891', '10000', '852', '0', '2', '2024-10-16 18:30:00', NULL),
(28, '72517323', 'Demo Demo', '1234567891', '2000', '852', '0', '2', '2024-10-17 18:30:00', NULL),
(29, '65666283', 'Demo Demo', '1234567891', '2000', '852', '1', '2', '2024-10-17 18:30:00', '2024-11-30 04:35:55'),
(30, '18023404', 'Demo Demo', '1234567891', '10000', '852', '1', '1', '2024-10-17 18:30:00', '2024-10-20 10:29:20'),
(31, '41971153', 'Demo Demo', '1234567891', '5300', '6000', '1', '1', '2024-10-19 18:30:00', '2024-10-20 10:47:56'),
(32, '54055934', 'Demo Demo', '1234567891', '2000', '6000', '0', '1', '2024-11-11 18:30:00', NULL),
(33, '88315110', 'Demo Demo', '1234567891', '5000', '500', '0', '1', '2024-11-24 18:30:00', NULL),
(34, '87191873', 'Test Test', '1234567892', '10000', '250', '0', '1', '2024-11-29 18:30:00', NULL),
(35, '27036815', 'Test Test', '1234567892', '500', '250', '0', '0', '2024-11-29 18:30:00', NULL),
(36, '52259406', 'Demo Demo', '1234567891', '500', '14300', '0', '1', '2024-12-01 18:30:00', NULL),
(37, '72626726', 'Demo Demo', '1234567891', '1000', '14300', '0', '1', '2024-12-01 18:30:00', NULL),
(38, '41839048', 'Demo Demo', '1234567891', '1000', '14300', '0', '1', '2024-12-01 18:30:00', NULL),
(39, '46614881', 'Demo Demo', '1234567891', '5000', '14300', '0', '0', '2024-12-01 18:30:00', NULL),
(40, '47476624', 'Demo Demo', '1234567891', '5000', '14300', '0', '0', '2024-12-01 18:30:00', NULL),
(41, '71382689', 'Demo Demo', '1234567891', '500', '14300', '0', '1', '2024-12-01 18:30:00', NULL),
(42, '92689220', 'Demo Demo', '1234567891', '5000', '14300', '0', '1', '2024-12-01 18:30:00', NULL),
(43, '90416148', 'Demo Demo', '1234567891', '10000', '14300', '0', '2', '2024-12-01 18:30:00', NULL),
(44, '64265885', 'Demo Demo', '1234567891', '2000', '14300', '0', '1', '2024-12-01 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `full_sangam`
--

CREATE TABLE `full_sangam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `market_name` varchar(100) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `open_pana` varchar(255) NOT NULL,
  `close_pana` varchar(255) NOT NULL,
  `points` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `full_sangam`
--

INSERT INTO `full_sangam` (`id`, `date`, `market_name`, `game_name`, `username`, `contact`, `email`, `open_pana`, `close_pana`, `points`, `created_at`, `updated_at`) VALUES
(2, '2024/10/12', 'sdfdcfs', 'scdcs', 'sfcsc', 'cscw', 'zdcscfw', '555', '451', '', '2024-10-01 10:32:06', '2024-10-01 10:32:06'),
(3, '2024/10/12', 'sdfdcfs', 'scdcs', 'sfcsc', 'cscw', 'zdcscfw', '555', '451', '', '2024-10-01 10:33:45', '2024-10-01 10:33:45'),
(4, '2024/10/12', 'any', 'full sangam', 'test', '987456321', 'test@gmail.com', '555', '451', '', '2024-10-01 10:39:44', '2024-10-01 10:39:44'),
(5, '2024/10/12', 'any', 'full sangam', 'test', '987456321', 'test@gmail.com', '555', '451', '100', '2024-10-01 11:24:59', '2024-10-01 11:24:59'),
(6, '2024/10/12', 'any', 'full sangam', 'test', '987456321', 'test@gmail.com', '555', '451', '100', '2024-10-01 16:02:24', '2024-10-01 16:02:24'),
(7, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '500', '10', '2024-10-01 16:18:23', '2024-10-01 16:18:23'),
(8, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '500', '10', '2024-10-01 16:18:29', '2024-10-01 16:18:29'),
(9, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '500', '10', '2024-10-01 16:18:49', '2024-10-01 16:18:49'),
(10, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '800', '10', '2024-10-01 16:22:13', '2024-10-01 16:22:13'),
(11, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '580', '10', '2024-10-01 16:25:35', '2024-10-01 16:25:35'),
(12, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '580', '10', '2024-10-01 16:26:04', '2024-10-01 16:26:04'),
(13, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '580', '10', '2024-10-01 16:26:08', '2024-10-01 16:26:08'),
(14, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '580', '10', '2024-10-01 16:26:26', '2024-10-01 16:26:26'),
(15, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '500', '580', '10', '2024-10-01 16:27:03', '2024-10-01 16:27:03'),
(16, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '588', '856', '40', '2024-10-01 16:30:08', '2024-10-01 16:30:08'),
(17, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '580', '250', '10', '2024-10-01 16:34:36', '2024-10-01 16:34:36'),
(18, '2024/10/01', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '231', '255', '50', '2024-10-01 16:37:34', '2024-10-01 16:37:34'),
(19, '2024/10/02', 'KARNATAKA DAY', 'Full Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', '252', '125', '10', '2024-10-02 09:33:18', '2024-10-02 09:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `gali_disawar`
--

CREATE TABLE `gali_disawar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gali_disawar`
--

INSERT INTO `gali_disawar` (`id`, `name`, `time`, `result`, `status`, `created_at`, `updated_at`) VALUES
(11, 'DESAWAR', '16:00', '**', '1', NULL, NULL),
(12, 'FARIDABAD', '18:00', '**', '1', NULL, NULL),
(13, 'GAZIYABAD', '20:30', '12', '0', NULL, NULL),
(16, 'New Market', '22:14', '**', '1', NULL, NULL),
(17, 'Develop Disawar', '15:34', '31', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `game_types`
--

CREATE TABLE `game_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_types`
--

INSERT INTO `game_types` (`id`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(4, 'SINGLE DIGIT', '10_90', '2024-08-16 09:14:54', '2024-08-16 09:14:54'),
(5, 'JODI DIGIT', '10_900', '2024-08-16 09:15:24', '2024-08-16 09:15:24'),
(6, 'SINGLE PANNA', '10-1400', '2024-08-16 09:16:01', '2024-08-16 09:16:01'),
(7, 'DOUBLE PANNA', '10-2800', '2024-08-16 09:24:04', '2024-08-16 09:24:04'),
(8, 'TRIPLE PANNA', '10-7000', '2024-08-16 09:24:43', '2024-08-16 09:24:43'),
(9, 'HALF SANGAM', '10-10000', '2024-08-16 09:25:40', '2024-08-16 09:25:40'),
(10, 'FULL SANGAM', '10-100000', '2024-08-16 09:26:15', '2024-08-16 09:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `half_sangam`
--

CREATE TABLE `half_sangam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `market_name` varchar(100) DEFAULT NULL,
  `game_name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `open_digits` varchar(255) DEFAULT NULL,
  `close_digits` varchar(255) DEFAULT NULL,
  `open_pana` varchar(255) DEFAULT NULL,
  `close_pana` varchar(255) DEFAULT NULL,
  `points` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `half_sangam`
--

INSERT INTO `half_sangam` (`id`, `date`, `market_name`, `game_name`, `username`, `contact`, `email`, `session`, `open_digits`, `close_digits`, `open_pana`, `close_pana`, `points`, `created_at`, `updated_at`) VALUES
(2, '2024/10/12', 'any', 'full sangam', 'test', '987456321', 'test@gmail.com', 'open', '555', '34', '3', '451', '100', '2024-10-01 18:45:56', '2024-10-01 18:45:56'),
(3, '2024/10/12', 'any', 'full sangam', 'test', '987456321', 'test@gmail.com', 'open', '555', 'null', 'null', '451', '100', '2024-10-01 18:46:58', '2024-10-01 18:46:58'),
(4, '2024/10/02', 'KARNATAKA DAY', 'Half Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', 'Open', '2', NULL, NULL, '111', '10', '2024-10-02 09:27:58', '2024-10-02 09:27:58'),
(5, '2024/10/02', 'KARNATAKA DAY', 'Half Sangam', 'Raja Akhtar', '8392087411', 'touhidaktar98@gmail.com', 'Close', 'null', '1', '222', 'null', '10', '2024-10-02 09:28:21', '2024-10-02 09:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `close_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `result` varchar(100) DEFAULT NULL,
  `open_pana` varchar(255) DEFAULT NULL,
  `open_result` varchar(255) DEFAULT NULL,
  `close_pana` varchar(255) DEFAULT NULL,
  `close_result` varchar(255) DEFAULT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL,
  `sunday` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `name`, `url`, `start_time`, `close_time`, `status`, `result`, `open_pana`, `open_result`, `close_pana`, `close_result`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `created_at`, `updated_at`) VALUES
(40, 'SRIDEVI MORNING', 'https://ludo.com', '09:30', '10:30', '0', '123456', '111', '11', '59', '600', '1', '1', '1', '1', '1', '1', '0', '2024-08-22 11:43:21', '2024-11-25 04:58:35'),
(41, 'SRIDEVI', 'https://ludo.com', '11:35', '12:35', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '0', '2024-08-22 11:45:41', '2024-08-22 11:45:58'),
(42, 'SRIDEVI DAY', 'https://ludo.com', '13:30', '14:30', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 11:47:27', '2024-08-22 11:47:27'),
(43, 'SRIDEVI NIGHT', 'https://ludo.com', '19:30', '20:30', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 11:48:49', '2024-08-22 11:48:49'),
(44, 'KALYAN MORNING', 'https://ludo.com', '11:00', '12:00', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 11:53:06', '2024-08-22 11:53:06'),
(45, 'KALYAN', 'https://ludo.com', '16:05', '18:05', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '0', '2024-08-22 11:54:41', '2024-10-02 16:35:59'),
(46, 'KALYAN NIGHT', 'https://ludo.com', '21:20', '23:20', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 11:56:24', '2024-08-22 11:56:24'),
(47, 'MILAN MORNING', 'https://ludo.com', '10:15', '11:15', '1', NULL, '121', '44', '**', '***', '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 11:58:12', '2024-09-27 01:47:27'),
(48, 'MILAN DAY', 'https://ludo.com', '15:00', '17:00', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 11:59:28', '2024-08-22 11:59:28'),
(49, 'MILAN NIGHT', 'https://ludo.com', '21:00', '23:00', '1', NULL, '555', '55', '66', '666', '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:00:28', '2024-09-27 01:49:36'),
(50, 'MADHUR MORNING', 'https://ludo.com', '11:30', '12:30', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:02:45', '2024-08-22 12:02:45'),
(51, 'MADHUR DAY', 'https://ludo.com', '13:30', '14:30', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:04:09', '2024-08-22 12:04:09'),
(52, 'MADHUR NIGHT', 'https://ludo.com', '20:30', '22:30', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:05:17', '2024-08-22 12:05:17'),
(53, 'SUPREME MORNING', 'https://ludo.com', '11:15', '12:15', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:08:11', '2024-08-22 12:08:11'),
(54, 'SUPREME DAY', 'https://ludo.com', '15:35', '17:35', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:09:26', '2024-08-22 12:09:26'),
(55, 'SUPREME NIGHT', 'https://ludo.com', '20:45', '22:45', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:10:39', '2024-08-22 12:10:39'),
(56, 'TIME BAZAR MORNING', 'https://ludo.com', '11:10', '12:10', '0', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:12:53', '2024-08-22 12:12:53'),
(57, 'TIME BAZAR', 'https://ludo.com', '13:00', '14:00', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:13:51', '2024-08-22 12:13:51'),
(58, 'TIME BAZAR DAY', 'https://ludo.com', '15:00', '17:00', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 12:15:03', '2024-08-22 12:15:03'),
(59, 'RAJDHANI MARKET DAY', 'https://ludo.com', '15:10', '17:10', '0', NULL, NULL, NULL, NULL, NULL, 'Choose Monday', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:39:48', '2024-08-22 13:39:48'),
(60, 'RAJDHANI NIGHT', 'https://ludo.com', '21:35', '23:45', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:41:02', '2024-08-22 13:41:02'),
(61, 'MAHADEVI MORNING', 'https://ludo.com', '11:45', '12:45', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:42:11', '2024-08-22 13:42:11'),
(62, 'MAHADEVI NIGHT', 'https://ludo.com', '19:50', '20:50', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:43:10', '2024-08-22 13:43:10'),
(63, 'DELHI DAY', 'https://ludo.com', '15:30', '17:30', '0', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:44:11', '2024-08-22 13:44:11'),
(64, 'DELHI NIGHT', 'https://ludo.com', '21:20', '23:20', '1', NULL, '222', '22', '44', '444', '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:45:03', '2024-09-26 05:34:24'),
(65, 'KARNATAKA DAY', 'https://ludo.com', '10:00', '23:00', '1', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', 'Choose Sunday', '2024-08-22 13:46:37', '2024-08-22 13:46:37'),
(66, 'Demo 24', 'https://www.instagram.com/reel/C5BryT2shfr/?igsh=MWhxMm5od2N6dWE1dQ==', '02:31', '03:33', '0', '73733', NULL, NULL, NULL, NULL, '1', '0', '1', '0', '1', '0', '1', '2024-10-05 11:28:16', '2024-10-05 11:28:16'),
(67, 'ssss', 'https://www.instagram.com/reel/C3AXKVNJMJw/?igsh=Y21jYndvN2J6NXE4', '14:37', '17:40', '1', 'efefew', NULL, NULL, NULL, NULL, '0', '1', '0', '1', '0', '1', '0', '2024-10-06 00:34:23', '2024-10-06 00:34:23'),
(68, 'boro bazar', 'https://www.instagram.com/reel/C5BryT2shfr/?igsh=MWhxMm5od2N6dWE1dQ==', '15:41', '16:42', '1', 'erfrr', NULL, NULL, NULL, NULL, '1', '0', '1', '0', '1', '0', '1', '2024-10-08 00:37:40', '2024-11-25 02:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_26_094825_create_markets_table', 2),
(5, '2024_06_27_103438_create_results_table', 3),
(6, '2024_06_28_073859_create_personal_access_tokens_table', 4),
(7, '2024_06_28_074713_create_winning_history_table', 4),
(8, '2024_06_28_080104_create_bid_history_table', 4),
(9, '2024_07_09_075416_create_admins_table', 5),
(17, '2024_07_09_103804_create_game_types_table', 6),
(18, '2024_07_10_064735_create_bid_histories_table', 7),
(19, '2024_07_16_114738_create_withdraw_table', 7),
(20, '2024_07_18_094431_create_deposit_request_table', 7),
(21, '2024_07_26_105156_create_winninghistory_table', 7),
(22, '2024_08_12_073636_create_starline_games_table', 8),
(23, '2024_08_12_112131_create_gali_disawar_table', 9),
(24, '2024_09_25_102326_create_upi_table', 10),
(25, '2024_09_25_102925_create_upi_table', 11),
(26, '2024_09_26_100528_add_result_to_market_table', 12),
(27, '2024_09_26_101227_add_columns_to_markets_table', 13),
(28, '2024_09_27_082051_create_half_sangam_table', 14),
(29, '2024_09_27_082633_create_full_sangam_table', 14),
(30, '2024_10_01_064326_add_result_to_results_table', 15),
(31, '2024_10_01_064558_add_result_to_results_table', 16),
(32, '2024_11_28_124526_create_starline_game_types_table', 17),
(33, '2024_11_29_152428_create_user+notice_table', 18),
(34, '2024_11_29_152524_create_user_notice_table', 18),
(35, '2024_12_01_064011_create_number_details_table', 19),
(36, '2024_12_02_105424_create_qr_code_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `number_details`
--

CREATE TABLE `number_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `number_details`
--

INSERT INTO `number_details` (`id`, `contact`, `whatsapp`) VALUES
(1, '6367223825', '6367223825');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'API Token', '01783ac65f6bdeecafea8055324ad792ca53784d736808a96dc35c4de8d0e77e', '[\"*\"]', NULL, NULL, '2024-07-08 03:54:40', '2024-07-08 03:54:40'),
(2, 'App\\Models\\User', 2, 'API Token', '49dd180693141ab4a863bb1542efc6c75e38b25c571f66a4e10450875685107a', '[\"*\"]', NULL, NULL, '2024-07-09 00:54:43', '2024-07-09 00:54:43'),
(3, 'App\\Models\\User', 15, 'API Token', 'e4adf56e6650acedcd374992c592283a61d6f301fefee1a3d1cbefc69b40582b', '[\"*\"]', NULL, NULL, '2024-08-14 07:43:23', '2024-08-14 07:43:23'),
(4, 'App\\Models\\User', 15, 'API Token', 'fc08eaa5dfc507562e0802ffa82e87cb7036459e7fc3cc059bd21cae68c98476', '[\"*\"]', NULL, NULL, '2024-08-14 09:52:19', '2024-08-14 09:52:19'),
(5, 'App\\Models\\User', 15, 'API Token', '79723409aa3f032649a0c33a3a5538970cef1cd7f55b49b7c6629aa57d373fef', '[\"*\"]', NULL, NULL, '2024-08-14 10:47:00', '2024-08-14 10:47:00'),
(6, 'App\\Models\\User', 10, 'API Token', 'cd35dca0e84bb9c9064150fd7eaea3dfb53422869b03e8ad845860a3a986d01f', '[\"*\"]', NULL, NULL, '2024-08-14 10:47:57', '2024-08-14 10:47:57'),
(7, 'App\\Models\\User', 16, 'API Token', 'cdf4893104307e049951bd37f9e1d1a968f32e8d1a40fa1b60150aabd175ae15', '[\"*\"]', NULL, NULL, '2024-08-14 10:52:06', '2024-08-14 10:52:06'),
(8, 'App\\Models\\User', 15, 'API Token', 'b7e5687834a94f3bbd3a89bc1824132327f12f34f85449f0e4d5f3e5858370df', '[\"*\"]', NULL, NULL, '2024-08-14 11:27:36', '2024-08-14 11:27:36'),
(9, 'App\\Models\\User', 15, 'API Token', 'f7e458a9cd692c5e9fc0aad9a642bc2411a6bf75af1d3d7ef053ac2edd21bdf3', '[\"*\"]', NULL, NULL, '2024-08-14 11:27:36', '2024-08-14 11:27:36'),
(10, 'App\\Models\\User', 16, 'API Token', 'eb238705082805a743924c6e521a69bd1bb248839a7eb18a37799957ab6cd19e', '[\"*\"]', NULL, NULL, '2024-08-14 11:35:38', '2024-08-14 11:35:38'),
(11, 'App\\Models\\User', 16, 'API Token', '0736aab185e4ea00e26f0c05cb3b3449fa60de1d2298314fd608a5459b2cf297', '[\"*\"]', NULL, NULL, '2024-08-14 11:35:38', '2024-08-14 11:35:38'),
(12, 'App\\Models\\User', 15, 'API Token', '79e42d10d51357a5d455b84b82938ea47532c7ed03b66043c98535e47cc1044f', '[\"*\"]', NULL, NULL, '2024-08-14 11:36:01', '2024-08-14 11:36:01'),
(13, 'App\\Models\\User', 15, 'API Token', '504fc45b8421c3312991eecafb3f2a27194fcb89e54163e93044ec90714fd321', '[\"*\"]', NULL, NULL, '2024-08-14 16:32:43', '2024-08-14 16:32:43'),
(14, 'App\\Models\\User', 15, 'API Token', 'b3951ca1207495a3162222468ddd95fb280096d60d64d1242bdc26ee8f7270f8', '[\"*\"]', NULL, NULL, '2024-08-14 16:36:27', '2024-08-14 16:36:27'),
(15, 'App\\Models\\User', 15, 'API Token', '6da61f94610fbb9b7c6f53a46b5bc791432ba55722af59f258b945c4e7c20780', '[\"*\"]', NULL, NULL, '2024-08-14 16:47:18', '2024-08-14 16:47:18'),
(16, 'App\\Models\\User', 19, 'API Token', '534b8aea077637b06c2f2b7d7443609db644ccf057c67bf3b7c002973adb38b8', '[\"*\"]', NULL, NULL, '2024-08-14 16:48:55', '2024-08-14 16:48:55'),
(17, 'App\\Models\\User', 15, 'API Token', '4c494d6c142361599f14345da6da1b928b105bac99d76574fca528091be9b5dd', '[\"*\"]', NULL, NULL, '2024-08-14 16:54:06', '2024-08-14 16:54:06'),
(18, 'App\\Models\\User', 21, 'API Token', '17822d81247496353ffbfff9c40098aa5c8726bd30ea53aa6e0485a5f5915512', '[\"*\"]', NULL, NULL, '2024-08-16 10:35:37', '2024-08-16 10:35:37'),
(19, 'App\\Models\\User', 26, 'API Token', '9fdec6535313b206b6f0c5a3922cce621cb9a049e5093d2ce324eed1c5e556ae', '[\"*\"]', NULL, NULL, '2024-08-16 11:49:33', '2024-08-16 11:49:33'),
(20, 'App\\Models\\User', 25, 'API Token', '896fce5ab0fe2cdf352f6f6e55d752dee34b0c49ce5064bdd1267afdfd698ddc', '[\"*\"]', NULL, NULL, '2024-08-18 10:33:31', '2024-08-18 10:33:31'),
(21, 'App\\Models\\User', 24, 'API Token', 'e0086f841c700c6f802e65891ecb7d32f8028b09c0f4f8a5f2319c7d306b63ad', '[\"*\"]', NULL, NULL, '2024-08-19 06:20:08', '2024-08-19 06:20:08'),
(22, 'App\\Models\\User', 25, 'API Token', 'd96cf4c8a2de9e2de6ba1b22df6bab8dbaa6c3f0b9268076f89ed4ce1e3a5913', '[\"*\"]', NULL, NULL, '2024-08-20 07:13:24', '2024-08-20 07:13:24'),
(23, 'App\\Models\\User', 25, 'API Token', '8eae3cf88a7b33c5acf3a5f2fa08143ebaf1f56805b9f56e82ea773d4ab7be75', '[\"*\"]', NULL, NULL, '2024-08-20 07:18:02', '2024-08-20 07:18:02'),
(24, 'App\\Models\\User', 15, 'API Token', '196f4b1c06a64aa30aa59b7066bdf7130ec5ee7916f354bd889ebd1bb29b505e', '[\"*\"]', NULL, NULL, '2024-09-05 11:17:28', '2024-09-05 11:17:28'),
(25, 'App\\Models\\User', 30, 'API Token', '9f090fba57313a0f6a1d7c8d5722a087b405a709123acf25688cfe56837c5dfb', '[\"*\"]', NULL, NULL, '2024-09-06 13:48:40', '2024-09-06 13:48:40'),
(26, 'App\\Models\\User', 32, 'API Token', '4ba0c710035080d414ba542c9091b38cdac548b3ea07304aec583d18227df529', '[\"*\"]', NULL, NULL, '2024-09-08 05:18:56', '2024-09-08 05:18:56'),
(27, 'App\\Models\\User', 32, 'API Token', 'edb3799dbc740ed15811e922b537e3e8e0803c7989c29ce4f9dea6bd514ed58b', '[\"*\"]', NULL, NULL, '2024-09-08 05:30:32', '2024-09-08 05:30:32'),
(28, 'App\\Models\\User', 32, 'API Token', '2851272b022fdfa1b9425b935a789b28c609ba4d5cbd9376b0072a0a0cd53669', '[\"*\"]', NULL, NULL, '2024-09-08 05:47:10', '2024-09-08 05:47:10'),
(29, 'App\\Models\\User', 38, 'API Token', 'b4592e3a1ce1d74fbf82548c1346b9f21917122dd2298a087e0a215477bf71f3', '[\"*\"]', NULL, NULL, '2024-09-16 04:19:49', '2024-09-16 04:19:49'),
(30, 'App\\Models\\User', 39, 'API Token', '600ad51a14986c00dc7eaed7418bbd75b79c0e31016600a6e54ecbc922830c56', '[\"*\"]', NULL, NULL, '2024-09-20 07:10:18', '2024-09-20 07:10:18'),
(31, 'App\\Models\\User', 39, 'API Token', 'c9da6e35e1c07f4456c30a23661ecdac35236ac3be8e47dde7c77da2f6c5f8ec', '[\"*\"]', NULL, NULL, '2024-09-20 07:13:44', '2024-09-20 07:13:44'),
(32, 'App\\Models\\User', 32, 'API Token', 'b7ff79bb8c608593e782f77945deacb23e5e48e52efa658a7aae4ad00e7ba940', '[\"*\"]', NULL, NULL, '2024-09-20 07:15:54', '2024-09-20 07:15:54'),
(33, 'App\\Models\\User', 40, 'API Token', 'c377522e4313a52d2ec55010975b23428be227a28a9ae8c09dd22bfe62f965ad', '[\"*\"]', NULL, NULL, '2024-09-21 06:01:05', '2024-09-21 06:01:05'),
(34, 'App\\Models\\User', 42, 'API Token', '75487cc5d4536ebaf3b1c88e791b4399c3efd7a4c3b88cc03ad4d3534907552c', '[\"*\"]', NULL, NULL, '2024-09-22 05:34:34', '2024-09-22 05:34:34'),
(35, 'App\\Models\\User', 42, 'API Token', '1e25f11d3b8eb3acf17a2b878421e2f09f436ce62be1437af4e8d12a0d1da1a2', '[\"*\"]', NULL, NULL, '2024-09-22 07:42:01', '2024-09-22 07:42:01'),
(36, 'App\\Models\\User', 41, 'API Token', '33337036c7ade92f7bd8c5a71235b0717f60447af83ddd20b781555fd5474681', '[\"*\"]', NULL, NULL, '2024-09-23 04:21:45', '2024-09-23 04:21:45'),
(37, 'App\\Models\\User', 47, 'API Token', '8c85a1d2d80aad00137373698a70c71bd298e287523fe64feb4698d81babf338', '[\"*\"]', NULL, NULL, '2024-10-01 17:54:58', '2024-10-01 17:54:58'),
(38, 'App\\Models\\User', 47, 'API Token', '289783b405feda40b0aee01d859d53cd6034c691e18416c0962205c334e65357', '[\"*\"]', NULL, NULL, '2024-10-01 18:28:00', '2024-10-01 18:28:00'),
(39, 'App\\Models\\User', 47, 'API Token', '69fdfc990b01dd1fad178a5508352a720761ea2a8678dcc6bdbd3cb3af07fe6b', '[\"*\"]', NULL, NULL, '2024-10-02 09:42:55', '2024-10-02 09:42:55'),
(40, 'App\\Models\\User', 48, 'API Token', '1e8f6e272ab1f8b39975a99aaf9238b6dc539bfb9a7bd1c306b06edf6d596435', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:25', '2024-10-02 16:25:25'),
(41, 'App\\Models\\User', 48, 'API Token', 'f33d174c7b1c9769564b9b6c82ddffbb3fa2db1cdfab12722071cbb813ce6505', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:25', '2024-10-02 16:25:25'),
(42, 'App\\Models\\User', 48, 'API Token', '42d746602c75abb04ed263348fd3ef8a354178d2fdc3438cdbf7e2227394d596', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:25', '2024-10-02 16:25:25'),
(43, 'App\\Models\\User', 48, 'API Token', '0decd83226179db56f69425469bfdd79e66f3e1b791fe89f095721f773ae3859', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:25', '2024-10-02 16:25:25'),
(44, 'App\\Models\\User', 48, 'API Token', '8108b43f14b3bfa816409e2d3e13ee46b614bde40c058cbe1d571fc8c775b4dd', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:25', '2024-10-02 16:25:25'),
(45, 'App\\Models\\User', 48, 'API Token', 'bff4a5dab3507a58ca72bba5fea311c42f081f2ea3bcdf61aeda7e06db635a1b', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:26', '2024-10-02 16:25:26'),
(46, 'App\\Models\\User', 48, 'API Token', '801cfc620866eb6b358319b9d16724d3f3806fcb53a7b0f970982d087c6eb0d3', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:27', '2024-10-02 16:25:27'),
(47, 'App\\Models\\User', 48, 'API Token', 'f5a8cd28ad632c7f24a376decee47540709e83ccc0b31e55b77b7d95ae207de2', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:27', '2024-10-02 16:25:27'),
(48, 'App\\Models\\User', 48, 'API Token', '3f90147dca50a91df4619863dfaf855ad566127547448cef0be1f88e984a4a1d', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:27', '2024-10-02 16:25:27'),
(49, 'App\\Models\\User', 48, 'API Token', '567d43e9a7dcf81f36784557129a1cd2ff8076b3877e5dc57ec7bd29cf6bc1ca', '[\"*\"]', NULL, NULL, '2024-10-02 16:25:27', '2024-10-02 16:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code`
--

CREATE TABLE `qr_code` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qr` varchar(255) NOT NULL,
  `upi_id` varchar(255) NOT NULL,
  `upi_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qr_code`
--

INSERT INTO `qr_code` (`id`, `qr`, `upi_id`, `upi_number`, `created_at`, `updated_at`) VALUES
(1, 'demo.jpg', '', '', NULL, NULL),
(2, '1733153939.jpg', '555887835500@ybl', '1236547890', '2024-12-02 06:31:46', '2024-12-02 06:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `market` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `open_pana` varchar(255) DEFAULT NULL,
  `open_result` varchar(255) DEFAULT NULL,
  `close_pana` varchar(255) DEFAULT NULL,
  `close_result` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `market`, `date`, `session`, `open_pana`, `open_result`, `close_pana`, `close_result`, `created_at`, `updated_at`) VALUES
(32, '67', '2024-11-15', '1', '999', '9', '999', '9', '2024-11-25 01:25:47', '2024-11-25 01:25:47'),
(33, '68', '2024-11-15', '1', '456', '2', NULL, NULL, '2024-11-25 01:51:48', '2024-11-25 07:21:42'),
(34, '63', '2024-11-23', '0', '222', '2', '333', '3', '2024-11-25 01:55:37', '2024-11-25 01:58:56'),
(35, '64', '2024-11-15', '1', '666', '6', '777', '7', '2024-11-25 04:55:51', '2024-11-25 04:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9VWgGd1ghfTfJ0dxoug99pskuntOCz2eRCTRcdHG', 50, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiTkxWVFh4czFYT2xmWjd0QWo2M2lhN1RmeEs3aGpOTWdaY2RkcEZ1aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3dpdGhkcmF3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTA7czo4OiJ1c2VydHlwZSI7czo0OiJ1c2VyIjtzOjc6ImJhbGFuY2UiO2k6MTQzMDA7czo0OiJuYW1lIjtzOjk6IkRlbW8gRGVtbyI7czo1OiJlbWFpbCI7czoyMDoiaW5kZGV2aWw0N0BnbWFpbC5jb20iO3M6NzoiY29udGFjdCI7czoxMDoiMTIzNDU2Nzg5MSI7fQ==', 1734537612),
('bVg0lw6ZEmK35uKHospyzAzXl0QyADIWsBDngq3B', 49, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiNzllbHNGWnQwWEh5bkpGbWgwdUFJUnJSR0tYZmlJTk9Mdm9nQ1NhZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9xci11cGRhdGUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0OTtzOjg6InVzZXJ0eXBlIjtzOjU6ImFkbWluIjtzOjc6ImJhbGFuY2UiO2k6MDtzOjQ6Im5hbWUiO3M6MTY6IlNvdXZpayBNdWtoZXJqZWUiO3M6NToiZW1haWwiO3M6MTU6ImFkbWluQGdtYWlsLmNvbSI7czo3OiJjb250YWN0IjtzOjEwOiIxMjM0NTY3ODkwIjt9', 1733154562);

-- --------------------------------------------------------

--
-- Table structure for table `starline_games`
--

CREATE TABLE `starline_games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `open_pana` varchar(255) NOT NULL,
  `open_result` varchar(255) NOT NULL,
  `close_pana` varchar(255) NOT NULL,
  `close_result` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `starline_games`
--

INSERT INTO `starline_games` (`id`, `name`, `time`, `open_pana`, `open_result`, `close_pana`, `close_result`, `status`, `created_at`, `updated_at`) VALUES
(10, 'New Starline Market', '20:06', '***', '*', '***', '*', '1', NULL, NULL),
(11, 'New Starline Market 1', '18:07', '212', '6', '333', '3', '1', NULL, NULL),
(12, 'Another Starline', '21:14', '***', '*', '***', '*', '0', NULL, NULL),
(13, 'Develop Starline', '14:48', '666', '6', '111', '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `starline_game_types`
--

CREATE TABLE `starline_game_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `starline_game_types`
--

INSERT INTO `starline_game_types` (`id`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Single Digit', '10-100', NULL, NULL),
(3, 'Triple Digit', '111-999', NULL, NULL),
(4, 'Jodi Digit', '10-90', NULL, NULL),
(5, 'Triple Panna', '10 - 7000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upi`
--

CREATE TABLE `upi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phonepay` varchar(255) DEFAULT NULL,
  `paytm` varchar(255) DEFAULT NULL,
  `googlepay` varchar(255) DEFAULT NULL,
  `scanner` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upi`
--

INSERT INTO `upi` (`id`, `phonepay`, `paytm`, `googlepay`, `scanner`, `created_at`, `updated_at`) VALUES
(1, '54757545', '786876587', NULL, 'uploads/upi/1727262533.jpg', NULL, '2024-09-25 06:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `demop` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `balance`, `password`, `demop`, `usertype`, `created_at`, `updated_at`) VALUES
(49, 'Souvik Mukherjee', '1234567890', 'admin@gmail.com', 0, '$2y$12$.E5laThKG.JoeMdDD2Gz0.oWabQyuo19OJSuMrvLKat5FRD6p3hw2', 'Souvik@#123', 'admin', '2024-10-07 02:35:23', '2024-10-07 02:35:23'),
(50, 'Demo Demo', '1234567891', 'inddevil47@gmail.com', 14300, '$2y$12$sRB8NXRMbzlXQkVeRHq2s.Nzg5PiNYGYaAna5hC9l23G4ZnnsA/iG', 'Souvik@#123', 'user', '2024-10-07 04:43:48', '2024-10-07 04:43:48'),
(51, 'Test Test', '1234567892', 'test@gmail.com', 250, '$2y$12$XpHdMLEI5jcNysJYj.WAO.IfcXBmbiwR9kyFODVTARWLmcz1p5Y/O', 'Souvik@#123', 'user', '2024-10-07 07:37:20', '2024-10-07 07:37:20'),
(52, 'New Test', '1234567893', 'newtest@gmail.com', 0, '$2y$12$XJjz0D4xTudNF7ZSmzArZeSVoVKriYXs0/2PSKIopTyX7Q/i7txNG', 'Souvik@#123', 'user', '2024-10-07 07:38:49', '2024-10-07 07:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_notice`
--

CREATE TABLE `user_notice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_notice`
--

INSERT INTO `user_notice` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'rvrv rkjrkj brkjefb kjbrkb rbkjb kjrbf rkjrjf erfr eer', 'Filler text is text that shares some characteristics of a real written text, but is random or otherwise generated.', '2024-11-29 18:30:00', NULL),
(2, 'This is another notice title 2', 'Filler text is text that shares लोरेम इप्सम एक छद्म-लैटिन पाठ है जिसका उपयोग मुद्रण और टाइपसेटिंग उद्योगों में किया जाता है। 1500 के दशक के बाद से, जब एक अज्ञात प्रिंटर ने एक प्रकार की नमूना पुस्तक बनाने के लिए एक गैली टाइप किया, लोरेम इप्सम उद्योग का मानक डमी टेक्स्ट रहा है। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी परिवर्तन हुआ है, जो अनिवार्य रूप से अपरिवर्तित है। इसने 1960 के दशक में लोरेम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रियता हासिल की, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ, जिसमें लोरेम इप्सम संस्करण शामिल हैं। some characteristics of a real written text, but is random or otherwise generated.', '2024-11-29 18:30:00', NULL),
(3, 'This is another notice title 3', 'Filler text is text that shares लोरेम इप्सम एक छद्म-लैटिन पाठ है जिसका उपयोग मुद्रण और टाइपसेटिंग उद्योगों में किया जाता है। 1500 के दशक के बाद से, जब एक अज्ञात प्रिंटर ने एक प्रकार की नमूना पुस्तक बनाने के लिए एक गैली टाइप किया, लोरेम इप्सम उद्योग का मानक डमी टेक्स्ट रहा है। यह न केवल पांच शताब्दियों तक जीवित रहा है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में भी परिवर्तन हुआ है, जो अनिवार्य रूप से अपरिवर्तित है। इसने 1960 के दशक में लोरेम इप्सम पैसेज वाले लेट्रासेट शीट्स के रिलीज के साथ लोकप्रियता हासिल की, और हाल ही में एल्डस पेजमेकर जैसे डेस्कटॉप प्रकाशन सॉफ्टवेयर के साथ, जिसमें लोरेम इप्सम संस्करण शामिल हैं। some characteristics of a real written text, but is random or otherwise generated.', '2024-11-29 18:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `winninghistory`
--

CREATE TABLE `winninghistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `market` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `open_pana` varchar(255) NOT NULL,
  `open_result` varchar(255) NOT NULL,
  `close_pana` varchar(255) NOT NULL,
  `close_result` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `upi_number` varchar(255) DEFAULT NULL,
  `accounts_holder_name` varchar(255) DEFAULT NULL,
  `account` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `approval_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `name`, `number`, `balance`, `points`, `payment_method`, `upi_number`, `accounts_holder_name`, `account`, `ifsc_code`, `bank_name`, `branch`, `approval_date`, `status`, `created_at`, `updated_at`) VALUES
(26, 'Demo Demo', '1234567891', '852', '1000', '1', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-10-18 18:30:00', NULL),
(27, 'Demo Demo', '1234567891', '852', '2000', '2', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2024-10-18 18:30:00', NULL),
(28, 'Demo Demo', '1234567891', '852', '3000', '4', NULL, 'Souvik Mukherjee', '12345678911', 'SBI12345', 'State Bank Of India', 'Kolkata', NULL, '0', '2024-10-18 18:30:00', NULL),
(29, 'Demo Demo', '1234567891', '852', '2000', '2', '2572578278', NULL, NULL, NULL, NULL, NULL, NULL, '0', '2024-10-18 18:30:00', NULL),
(30, 'Demo Demo', '1234567891', '6000', '6000', '3', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2024-10-18 18:30:00', NULL),
(31, 'Demo Demo', '1234567891', '6000', '5000', '4', NULL, 'Soumen Sarkar', '123456789321', 'PNB00812', 'Punjab National Bank', 'Krishnanagar', '2024-10-20', '1', '2024-10-18 18:30:00', '2024-10-20 02:41:34'),
(33, 'Demo Demo', '1234567891', '6000', '5000', '1', '1234567892', NULL, NULL, NULL, NULL, NULL, '2024-11-27', '1', '2024-11-11 18:30:00', '2024-11-27 01:00:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`username`);

--
-- Indexes for table `bid_histories`
--
ALTER TABLE `bid_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `deposit_request`
--
ALTER TABLE `deposit_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `full_sangam`
--
ALTER TABLE `full_sangam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gali_disawar`
--
ALTER TABLE `gali_disawar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_types`
--
ALTER TABLE `game_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `half_sangam`
--
ALTER TABLE `half_sangam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number_details`
--
ALTER TABLE `number_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qr_code`
--
ALTER TABLE `qr_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `starline_games`
--
ALTER TABLE `starline_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starline_game_types`
--
ALTER TABLE `starline_game_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upi`
--
ALTER TABLE `upi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`contact`);

--
-- Indexes for table `user_notice`
--
ALTER TABLE `user_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winninghistory`
--
ALTER TABLE `winninghistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bid_histories`
--
ALTER TABLE `bid_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `deposit_request`
--
ALTER TABLE `deposit_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `full_sangam`
--
ALTER TABLE `full_sangam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gali_disawar`
--
ALTER TABLE `gali_disawar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `game_types`
--
ALTER TABLE `game_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `half_sangam`
--
ALTER TABLE `half_sangam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `number_details`
--
ALTER TABLE `number_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `qr_code`
--
ALTER TABLE `qr_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `starline_games`
--
ALTER TABLE `starline_games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `starline_game_types`
--
ALTER TABLE `starline_game_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upi`
--
ALTER TABLE `upi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user_notice`
--
ALTER TABLE `user_notice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `winninghistory`
--
ALTER TABLE `winninghistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
