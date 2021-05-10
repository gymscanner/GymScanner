-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2021 at 03:57 PM
-- Server version: 5.7.32-35-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wa7ash23_kuweit`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(20, '156', 'upload/avatar/1611292116.png', '2021-01-21 20:04:23', '2021-01-22 04:08:36'),
(21, '163', 'upload/avatar/1615998695.png', '2021-03-17 15:31:35', '2021-03-17 15:31:35'),
(23, '201', 'upload/avatar/1617103480.png', '2021-03-30 04:59:02', '2021-03-30 09:24:40'),
(24, '288', 'upload/avatar/1619080315.png', '2021-04-22 06:31:55', '2021-04-22 06:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `bank_number`, `swift_code`, `holder_name`, `user_id`, `remember_token`, `created_at`, `updated_at`, `iban`) VALUES
(1, 'wer', '234234', 'wer2', 'erw', '166', NULL, '2021-03-18 20:39:01', '2021-03-18 20:39:01', '234'),
(2, 'aaa', '111', '111', 'sss', '165', NULL, '2021-03-27 05:15:20', '2021-03-27 05:15:20', 'sss'),
(3, 'The Commercial Bank', '123456789', 'COMCFWFW', 'Nasser Al Kandari', '164', NULL, '2021-03-29 06:23:32', '2021-03-29 06:23:32', '0000000000156789452645'),
(5, 'SSS', '000000000000000', '000', 'Arfa Memon', '282', NULL, '2021-04-22 01:16:44', '2021-04-22 01:16:44', '0000'),
(6, 'SSS', '0000000000000000', '000', 'Arfa Memon', '282', NULL, '2021-04-22 04:03:16', '2021-04-22 04:03:16', '0000'),
(7, 'WWW', '5453154', '1021', 'Walkie-talkie', '282', NULL, '2021-04-22 05:38:17', '2021-04-22 05:38:17', '3254'),
(8, 'asf', 'asf', 'asf', 'asfsa', '286', NULL, '2021-04-22 05:57:01', '2021-04-22 05:57:01', 'asf'),
(9, 'asf', 'saf', 'asf', 'saf', '286', NULL, '2021-04-22 05:59:00', '2021-04-22 05:59:00', 'safasf'),
(10, 'YTS', '5412231', '0159', 'LMS', '282', NULL, '2021-04-22 06:07:54', '2021-04-22 06:07:54', '9510');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `description`, `image_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(50, '125', NULL, '1611092365603910318.jpg', NULL, '2021-01-19 20:40:19', '2021-01-19 20:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `bbanks`
--

CREATE TABLE `bbanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bbanks`
--

INSERT INTO `bbanks` (`id`, `bank_name`, `bank_number`, `swift_code`, `holder_name`, `user_id`, `remember_token`, `created_at`, `updated_at`, `iban`) VALUES
(28, 'Commercial Bank', '11357896', 'COMBKWKW', 'Randy Ali', '156', NULL, '2021-01-21 10:38:00', '2021-01-21 10:38:00', '000000000000157896456'),
(29, 'wer', '25423', '4345', 'erw', '204', NULL, '2021-03-20 11:55:58', '2021-03-20 11:55:58', '345'),
(30, 'ss', '11', '22', 'aa', '201', NULL, '2021-03-27 03:24:32', '2021-03-27 03:24:32', 'dd'),
(31, 'AMP', '984645135351', '5497', 'AIM', '288', NULL, '2021-04-22 06:41:18', '2021-04-22 06:41:18', '6315'),
(32, 'ASD', '9645315348', '987', 'POL', '288', NULL, '2021-04-22 06:44:03', '2021-04-22 06:44:03', '446'),
(33, 'dsf', 'fsd', 'fds', 'fds', '296', NULL, '2021-04-22 08:33:41', '2021-04-22 08:33:41', 'dfs');

-- --------------------------------------------------------

--
-- Table structure for table `brands_images`
--

CREATE TABLE `brands_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands_images`
--

INSERT INTO `brands_images` (`id`, `user_id`, `image_path`, `created_at`, `updated_at`) VALUES
(7, 282, '1619435907377final banner youtopian.jpg', '2021-04-26 09:18:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands_info`
--

CREATE TABLE `brands_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `select_country` enum('global','selected') NOT NULL,
  `countries` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands_info`
--

INSERT INTO `brands_info` (`id`, `user_id`, `about`, `select_country`, `countries`, `created_at`, `updated_at`) VALUES
(1, 282, 'asfasf', 'selected', '[\"AE\",\"AF\",\"AG\"]', '2021-04-26 06:25:19', '2021-04-27 05:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `brands_social_data`
--

CREATE TABLE `brands_social_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `certificate_date` date DEFAULT NULL,
  `type` enum('youtube','certificate','name','image') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands_social_data`
--

INSERT INTO `brands_social_data` (`id`, `user_id`, `name`, `certificate_date`, `type`, `created_at`, `updated_at`) VALUES
(1, 282, 'https://www.youtube.com/embed/-2G2NLKCQG8', NULL, 'youtube', '2021-04-26 06:19:03', NULL),
(3, 282, 'https://www.youtube.com/embed/-2G2NLKCQG8', NULL, 'youtube', '2021-04-26 00:45:19', NULL),
(8, 282, '300px-x-300px-Android.png', NULL, 'image', '2021-04-27 07:46:02', NULL),
(9, 282, 'certificate1', '2021-04-29', 'certificate', '2021-04-27 08:17:13', NULL),
(10, 282, 'Name', NULL, 'name', '2021-04-27 08:25:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci,
  `contact` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `phone_number_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number_country` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weightlift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yoga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pilates` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mma` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bodybuilding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bootcamp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMS` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gym` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gymnastics` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KickBoxing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MartialArts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PersonalFitness` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Spinning` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boxing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crosstraing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `week_date` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `all_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `country`, `address`, `email`, `website`, `contact`, `message`, `phone_number_code`, `phone_number_country`, `phone_number`, `weightlift`, `yoga`, `pilates`, `mma`, `Bodybuilding`, `Bootcamp`, `EMS`, `Gym`, `Gymnastics`, `KickBoxing`, `MartialArts`, `PersonalFitness`, `Spinning`, `boxing`, `karate`, `crosstraing`, `mon_from`, `mon_to`, `tue_from`, `tue_to`, `wed_from`, `wed_to`, `thu_from`, `thu_to`, `fri_from`, `fri_to`, `sat_from`, `sat_to`, `sun_from`, `sun_to`, `week_date`, `facebook`, `twitter`, `instagram`, `youtube`, `all_check`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, '156', 'Caru Gym', 'not', 'Manama, Street 4', 'sales@foodimporters.me', 'www.foodimporters.me', 'Cera Caru', 'we are the best gym in bahrain', '', '', '66993234', NULL, NULL, NULL, NULL, 'Bodybuilding', NULL, 'EMS', 'Gym', NULL, NULL, NULL, NULL, NULL, 'Boxing', 'Karate', 'Crosstraing', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', NULL, NULL, 'www.instagram.com/carugym', NULL, 'all', NULL, '2021-01-21 09:31:01', '2021-01-21 19:54:21'),
(21, '205', 'sss', 'ad', 'sss', 'shahzaibqureshi7890@gmail.com', NULL, 'aaaa', 'sss', '61', 'AU', '11133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karate', NULL, '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', 'sss', 'ss', 'sss', 's', 'all', NULL, '2021-03-30 04:13:32', '2021-04-14 06:45:54'),
(22, '143', 'abc', 'ai', 'address', 'apeksha@gmail.com', 'https://www.mozywuval.ws', '12312', 'asfas', '994', 'Azerbaijan', '124312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 03:16:27', '2021-04-17 03:16:27'),
(23, '288', 'Arfa Memon', 'pk', 'Plot# C-13, 2nd Floor, Main Qasimabad Road, Hyderabad', 'hafsamemon@outlook.com', 'http://gbsinn.com/', 'Arfa Memon', 'Abc-Xyz', '92', 'Pakistan', '03332632466', NULL, 'Yoga', NULL, NULL, NULL, NULL, NULL, NULL, 'Gymnastics', 'KickBoxing', 'MartialArts', 'PersonalFitness', NULL, NULL, 'Karate', NULL, '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', NULL, NULL, NULL, NULL, 'all', NULL, '2021-04-22 06:54:41', '2021-04-22 06:54:41'),
(24, '296', 'sdf', 'cy', 'address', 'zeechashk@gmail.com', 'p', '12312', 'sadsadsad', '213', 'Algeria', '11133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 08:34:26', '2021-04-22 08:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `description`, `document_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, '156', NULL, '1611229115686Security Invoice Apache.pdf', NULL, '2021-01-21 10:38:34', '2021-01-21 10:38:34'),
(19, '166', NULL, '1616184716163Screenshot_4.png', NULL, '2021-03-19 19:12:35', '2021-03-19 19:12:35'),
(20, '204', NULL, '1616244932746HIREORJAM_Webapp document.pdf', NULL, '2021-03-20 11:56:16', '2021-03-20 11:56:16'),
(21, '164', NULL, '1617007277659highline brochure.pdf', NULL, '2021-03-29 06:41:19', '2021-03-29 06:41:19'),
(22, '201', NULL, '1617167879836How-can-education-improve-the-sustainable-development-of-the-world.jpg', NULL, '2021-03-31 03:18:02', '2021-03-31 03:18:02'),
(31, '296', NULL, '16190875929642gym.PNG', NULL, '2021-04-22 08:33:15', '2021-04-22 08:33:15'),
(32, '288', NULL, '1619149040605600x600.jpg', NULL, '2021-04-23 01:37:19', '2021-04-23 01:37:19'),
(39, '165', NULL, '1619396121093download (1).jfif', NULL, '2021-04-25 22:24:58', '2021-04-25 22:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `user_id`, `price`, `service`, `perk`, `duration`, `app`, `remember_token`, `created_at`, `updated_at`) VALUES
(36, '156', 'US$ 50', 'Women\'s Only Class', '- Free Wifi\r\n- Valet Parking', '1 Month', 'computer', NULL, '2021-01-21 10:29:39', '2021-01-21 10:29:39'),
(37, '156', 'US$ 100', 'Men\'s MMA', 'Free Nutrition', '2 months', 'app', NULL, '2021-01-21 10:32:15', '2021-01-21 10:32:15'),
(38, '156', '250', 'Men\'s Championship MMA', 'Free Locker', '5 months', 'computer', NULL, '2021-01-21 10:32:51', '2021-01-21 10:32:51'),
(39, '156', '350', 'Kids classes', 'Free Valet\r\nFree Wifi\r\nFree food', '12 months', 'computer', NULL, '2021-01-21 10:36:42', '2021-01-21 10:36:42'),
(40, '201', '214', 'SADFGSDF', 'SDG', 'Fa', 'computer', NULL, '2021-03-26 05:27:08', '2021-03-31 05:15:33'),
(41, '204', '43', '345', '345', '345', 'computer', NULL, '2021-04-09 13:05:40', '2021-04-09 13:05:40'),
(42, '288', 'Monthly', 'Any', 'None', '1 Month', 'computer', NULL, '2021-04-22 06:38:27', '2021-04-22 06:38:27'),
(43, '288', 'PKR 3500', 'All', 'None', 'Bi-Monthly', 'computer', NULL, '2021-04-22 06:42:03', '2021-04-22 06:42:03'),
(44, '296', 'sdf', 'dsf', 'dfs', 'dsf', 'app', NULL, '2021-04-22 08:33:29', '2021-04-22 08:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_11_042256_create_avatars_table', 2),
(5, '2020_12_11_073251_create_companies_table', 3),
(6, '2020_12_11_124523_create_banners_table', 4),
(7, '2020_12_11_135916_create_youtubes_table', 5),
(8, '2020_12_11_145707_create_offers_table', 6),
(9, '2020_12_11_151721_create_accounts_table', 7),
(10, '2020_12_12_025615_create_descriptions_table', 8),
(11, '2020_12_13_092322_create_memberships_table', 9),
(12, '2020_12_14_192110_create_personal_avatars_table', 10),
(13, '2020_12_14_192723_create_trainers_table', 11),
(14, '2020_12_14_210801_create_personal__memberships_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_to` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `show_to`, `name`, `value`, `is_active`, `datetime`) VALUES
(11, 201, 0, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-03-31 13:00:36'),
(12, 164, 0, 'UPDATE_PROFILE', 'has been updated profile', 1, '2021-04-09 08:27:13'),
(13, 204, 0, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-09 15:05:40'),
(14, 165, 0, 'UPDATE_PROFILE', 'has been updated profile', 1, '2021-04-13 11:16:42'),
(15, 165, 0, 'UPDATE_PROFILE', 'has been updated profile', 1, '2021-04-13 11:24:45'),
(16, 165, 0, 'UPDATE_PROFILE', 'has been updated profile', 1, '2021-04-14 02:29:15'),
(17, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 03:51:03'),
(18, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 04:43:01'),
(19, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 04:44:22'),
(20, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 04:55:46'),
(21, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 04:56:16'),
(22, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 04:58:35'),
(23, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 04:58:44'),
(24, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:00:37'),
(25, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:00:53'),
(26, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:12:24'),
(27, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:16:01'),
(28, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:16:40'),
(29, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:29:24'),
(30, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:32:15'),
(31, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:35:51'),
(32, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:40:39'),
(33, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:40:47'),
(34, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:41:50'),
(35, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:42:06'),
(36, 165, 0, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-14 05:42:24'),
(37, 165, 0, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-14 05:45:23'),
(38, 165, 0, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-14 05:46:30'),
(39, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:46:39'),
(40, 165, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 05:49:06'),
(41, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 05:59:58'),
(42, 201, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 06:02:01'),
(43, 201, 0, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-14 06:02:14'),
(44, 201, 0, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-14 06:07:24'),
(45, 164, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 09:30:46'),
(46, 164, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-14 09:40:14'),
(47, 165, 0, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-16 03:12:41'),
(48, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 0, '2021-04-16 04:43:07'),
(49, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 0, '2021-04-16 05:14:53'),
(50, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 0, '2021-04-16 05:14:53'),
(51, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 0, '2021-04-16 05:14:53'),
(54, 201, 165, 'APPROVED_PROFILE', 'Your account is live', 1, '2021-04-16 06:17:11'),
(55, 164, 60, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-16 06:51:31'),
(56, 164, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-16 06:51:31'),
(57, 165, 60, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-17 04:54:47'),
(58, 165, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-17 04:54:47'),
(59, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:44:43'),
(60, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:44:43'),
(61, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:45:33'),
(62, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:45:33'),
(63, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:46:51'),
(64, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:46:51'),
(65, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:47:43'),
(66, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:47:43'),
(67, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:48:03'),
(68, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:48:03'),
(69, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:54:58'),
(70, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:54:58'),
(71, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 07:55:26'),
(72, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 07:55:26'),
(73, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 08:03:36'),
(74, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 08:03:36'),
(75, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 08:21:49'),
(76, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 08:21:49'),
(77, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 08:22:50'),
(78, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 08:22:50'),
(79, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 08:23:34'),
(80, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 08:23:34'),
(81, 165, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-21 08:25:47'),
(82, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-21 08:25:47'),
(83, 282, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 02:34:53'),
(84, 282, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 03:15:16'),
(85, 282, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 05:39:48'),
(86, 282, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 05:43:12'),
(87, 282, 201, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-22 05:44:46'),
(88, 282, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 05:46:15'),
(89, 286, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 06:28:24'),
(90, 286, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 06:29:48'),
(91, 286, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 06:43:47'),
(92, 286, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 06:43:56'),
(93, 286, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 06:56:55'),
(94, 286, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 06:57:04'),
(95, 282, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 07:32:02'),
(96, 282, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 07:37:27'),
(97, 282, 201, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 07:42:05'),
(98, 282, 282, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-22 07:42:05'),
(99, 282, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 08:03:28'),
(100, 282, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 08:04:59'),
(101, 288, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 08:35:56'),
(102, 288, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 08:38:27'),
(103, 288, 201, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 08:42:03'),
(104, 288, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 08:48:58'),
(105, 288, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 08:54:41'),
(106, 288, 201, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 08:55:00'),
(107, 296, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 10:33:29'),
(108, 296, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-22 10:33:29'),
(109, 296, 60, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 10:34:26'),
(110, 296, 289, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-22 10:34:26'),
(111, 296, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 11:08:03'),
(112, 296, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 11:08:03'),
(113, 296, 296, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-22 11:08:03'),
(114, 296, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 11:08:08'),
(115, 296, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 11:08:08'),
(116, 296, 296, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-22 11:08:08'),
(117, 296, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 11:10:03'),
(118, 296, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-22 11:10:03'),
(119, 296, 296, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-22 11:10:03'),
(120, 165, 60, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-23 03:14:35'),
(121, 165, 289, 'UPDATE_PROFILE', 'has updated profile', 1, '2021-04-23 03:14:35'),
(122, 165, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-24 16:41:23'),
(123, 165, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-24 16:41:23'),
(124, 282, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 04:18:47'),
(125, 282, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 04:18:47'),
(126, 282, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 04:19:20'),
(127, 282, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 04:19:20'),
(128, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 04:21:44'),
(129, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 04:21:44'),
(130, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 04:21:44'),
(131, 282, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 05:27:37'),
(132, 282, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 05:27:37'),
(133, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:18:26'),
(134, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:18:26'),
(135, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:18:26'),
(136, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:34:37'),
(137, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:34:37'),
(138, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:34:37'),
(139, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:35:56'),
(140, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:35:56'),
(141, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:35:56'),
(142, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:41:03'),
(143, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:41:03'),
(144, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:41:03'),
(145, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:42:24'),
(146, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:42:24'),
(147, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:42:24'),
(148, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:42:50'),
(149, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:42:50'),
(150, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:42:50'),
(151, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:43:26'),
(152, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:43:26'),
(153, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:43:26'),
(154, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:52:49'),
(155, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 06:52:49'),
(156, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 06:52:49'),
(157, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:01:18'),
(158, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:01:18'),
(159, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:01:18'),
(160, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:02:50'),
(161, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:02:50'),
(162, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:02:50'),
(163, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:08:49'),
(164, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:08:49'),
(165, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:08:49'),
(166, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:09:32'),
(167, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:09:32'),
(168, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:09:32'),
(169, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:12:33'),
(170, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:12:33'),
(171, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:12:33'),
(172, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:26:39'),
(173, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:26:39'),
(174, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:26:39'),
(175, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:28:25'),
(176, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:28:25'),
(177, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:28:25'),
(178, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:30:15'),
(179, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:30:15'),
(180, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:30:15'),
(181, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:31:13'),
(182, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:31:13'),
(183, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:31:13'),
(184, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:32:40'),
(185, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:32:40'),
(186, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:32:40'),
(187, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:33:37'),
(188, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:33:37'),
(189, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:33:37'),
(190, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:35:31'),
(191, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:35:31'),
(192, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:35:31'),
(193, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:40:25'),
(194, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:40:25'),
(195, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:40:25'),
(196, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:41:51'),
(197, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:41:51'),
(198, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:41:51'),
(199, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:44:08'),
(200, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:44:08'),
(201, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:44:08'),
(202, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:44:41'),
(203, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:44:41'),
(204, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:44:41'),
(205, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:45:13'),
(206, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:45:13'),
(207, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:45:13'),
(208, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:46:05'),
(209, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:46:05'),
(210, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:46:05'),
(211, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:56:04'),
(212, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:56:04'),
(213, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:56:04'),
(214, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:57:19'),
(215, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 07:57:19'),
(216, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 07:57:19'),
(217, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 08:00:29'),
(218, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 08:00:29'),
(219, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 08:00:29'),
(220, 165, 60, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 08:18:20'),
(221, 165, 289, 'COMPLETE_PROFILE', 'has completed profile', 1, '2021-04-26 08:18:20'),
(222, 165, 165, 'COMPLETE_PROFILE', 'Your request was successfully submitted', 1, '2021-04-26 08:18:20'),
(223, 282, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:00:57'),
(224, 282, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:00:57'),
(225, 282, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:01:35'),
(226, 282, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:01:35'),
(227, 282, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 09:28:40'),
(228, 282, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 09:28:40'),
(229, 282, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 09:34:59'),
(230, 282, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 09:34:59'),
(231, 165, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:47:21'),
(232, 165, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:47:21'),
(233, 165, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:47:44'),
(234, 165, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:47:44'),
(235, 165, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 09:57:41'),
(236, 165, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-26 09:57:41'),
(237, 165, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:59:18'),
(238, 165, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-26 09:59:18'),
(239, 282, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-27 10:34:50'),
(240, 282, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-27 10:34:50'),
(241, 282, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-27 10:37:17'),
(242, 282, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-27 10:37:17'),
(243, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-27 14:07:41'),
(244, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-27 14:07:41'),
(245, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-27 14:35:30'),
(246, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-27 14:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user1@gmail.com', '$2y$10$yweYYZaaxr4TVX9uavySVe.qTXk73t8djcNNmcQUzMnkWlOiiI/de', '2020-12-20 12:45:40'),
('petroyanarsenii@outlook.com', '$2y$10$P7nPn/LmJqoMzbxlJ7y/DOz5W/b435UwqF.iK2MnSbdniBeHEyLwC', '2020-12-21 12:47:37'),
('admin@admin.com', '$2y$10$MRzD5r7kFEsd4M.r0dEen.m0aOCiD46E2OeAwvdfQC1C5HUW4/y.i', '2020-12-24 20:12:02'),
('admin@gmail.com', '$2y$10$EDC0uJ7LtY2pshrQ4uja8.6wxNGaKtWO.kBAPKWKENu6uMrniJRIO', '2020-12-31 06:18:00'),
('randyali80@gmail.com', '$2y$10$YY/ozcSKAfsbWydl8DEhHeBMLb5rYBkeHDqQYj4jGOIh./iH34efO', '2021-03-17 14:05:09'),
('info@wa7ash.com', '$2y$10$WlNqtu/wkovBowsDfEcnLu7HPvgjTEyj5uED6u2GNBmk7hNH4noe2', '2021-04-16 15:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_avatars`
--

CREATE TABLE `personal_avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_avatars`
--

INSERT INTO `personal_avatars` (`id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '13', 'upload/avatar/1608310967.jpg', '2020-12-14 17:25:17', '2020-12-18 16:02:47'),
(2, '35', 'upload/avatar/1608301603.psd', '2020-12-18 13:26:06', '2020-12-18 13:26:43'),
(3, '12', 'upload/avatar/1608316859.jpg', '2020-12-18 14:33:54', '2020-12-18 17:40:59'),
(4, '43', 'upload/avatar/1608428022.jpg', '2020-12-20 00:33:42', '2020-12-20 00:33:42'),
(5, '46', 'upload/avatar/1608428753.jpg', '2020-12-20 00:45:53', '2020-12-20 00:45:53'),
(6, '165', 'upload/avatar/1618463446.png', '2021-03-31 03:09:58', '2021-04-15 03:10:46'),
(7, '164', 'upload/avatar/1618393081.jpg', '2021-04-14 07:26:24', '2021-04-14 07:38:01'),
(8, '282', 'upload/avatar/1619069690.png', '2021-04-22 00:33:06', '2021-04-22 03:34:50'),
(9, '286', 'upload/avatar/1619073023.png', '2021-04-22 04:30:23', '2021-04-22 04:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal__memberships`
--

CREATE TABLE `personal__memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` enum('featured','none') COLLATE utf8mb4_unicode_ci NOT NULL,
  `app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal__memberships`
--

INSERT INTO `personal__memberships` (`id`, `user_id`, `price`, `currency`, `service`, `perk`, `duration`, `discount`, `featured`, `app`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, '12', NULL, '', NULL, '[\"\"]', NULL, NULL, 'none', 'computer', NULL, '2020-12-16 20:12:10', '2020-12-16 20:12:10'),
(10, '12', NULL, '', NULL, '[\"\"]', NULL, NULL, 'featured', 'computer', NULL, '2020-12-16 20:12:12', '2020-12-16 20:12:12'),
(11, '12', NULL, '', NULL, '[\"\"]', NULL, NULL, 'featured', 'computer', NULL, '2020-12-16 20:12:16', '2020-12-16 20:12:16'),
(15, '54', '3 months', '', '25', '[\"\"]', '150', NULL, 'featured', 'computer', NULL, '2020-12-23 20:55:59', '2020-12-23 20:55:59'),
(17, '166', '5', '', '567', '[\"\"]', '567', NULL, 'featured', 'app', NULL, '2021-03-18 20:38:44', '2021-03-18 20:38:44'),
(19, '165', 'safa', 'USD $', 'safsa111', '[\"\"]', 'sdafas', NULL, 'none', 'app', NULL, '2021-03-31 05:27:04', '2021-04-26 07:47:44'),
(23, '282', 'Monthly1', 'USD $', 'PKR 3001', '[\"testing\\r\",\"testing\\r\",\"testing\"]', 'PKR 15001', '1', 'none', 'app', NULL, '2021-04-22 01:15:16', '2021-04-27 08:37:17'),
(24, '282', 'Monthly', '', 'PKR 300', '[\"\"]', 'PKR 1500', NULL, 'featured', 'computer', NULL, '2021-04-22 03:43:12', '2021-04-22 03:43:12'),
(25, '282', 'Tri-monthly', '', 'PKR 400', '[\"\"]', 'PKR 4200', NULL, 'featured', 'computer', NULL, '2021-04-22 03:46:15', '2021-04-22 03:46:15'),
(26, '286', 'asf', '', 'asf', '[\"\"]', 'asf', NULL, 'featured', 'app', NULL, '2021-04-22 04:43:47', '2021-04-22 04:43:47'),
(27, '286', 'asfa', '', 'asf', '[\"\"]', 'asf', NULL, 'featured', 'app', NULL, '2021-04-22 04:43:56', '2021-04-22 04:43:56'),
(28, '286', '213', '', 'asfas', '[\"\"]', 'asfas', NULL, 'featured', 'app', NULL, '2021-04-22 04:56:55', '2021-04-22 04:56:55'),
(29, '286', 'asf', '', 'asfas', '[\"\"]', 'asf', NULL, 'featured', 'computer', NULL, '2021-04-22 04:57:04', '2021-04-22 04:57:04'),
(30, '282', 'Bi-Monthly', '', 'PKR 300', '[\"\"]', 'PKR 2800', NULL, 'featured', 'computer', NULL, '2021-04-22 05:37:27', '2021-04-22 05:37:27'),
(31, '282', 'Weekly', '', 'PKR 0', '[\"\"]', 'PKR 300', NULL, 'featured', 'computer', NULL, '2021-04-22 06:04:59', '2021-04-22 06:04:59'),
(32, '165', NULL, '', NULL, '[\"\"]', NULL, NULL, 'featured', 'computer', NULL, '2021-04-24 14:41:23', '2021-04-24 14:41:23'),
(33, '282', '3', 'EURO €', '1', '[\"\"]', '2', '4', 'featured', 'app', NULL, '2021-04-26 02:19:20', '2021-04-26 07:01:35'),
(34, '282', 'asfasf', 'EURO €', 'asf', '[\"\"]', 'asfas', NULL, 'none', 'computer', NULL, '2021-04-26 07:28:40', '2021-04-26 07:28:40'),
(35, '282', 'qwrwqrq', 'USD $', 'wqrqw', '[\"dasfdsa\\r\",\"f\\r\",\"asf\\r\",\"asf\\r\",\"as\"]', 'wqrqwr', NULL, 'none', 'computer', NULL, '2021-04-26 07:34:59', '2021-04-26 07:34:59'),
(36, '165', '100', 'USD $', '16 SESSION', '[\"dummy line 1\\r\",\"dummy line 2\\r\",\"dummy line 3\\r\",\"dummy line 4\"]', '90 Days', '10', 'none', 'computer', NULL, '2021-04-26 07:57:41', '2021-04-26 07:59:18'),
(37, '164', '75', 'USD $', '8 Sessions', '[\"\"]', '14days', '10', 'none', 'computer', NULL, '2021-04-27 12:07:41', '2021-04-27 12:07:41'),
(38, '164', '50', 'USD $', '12', '[\"1\"]', '30', '10', 'none', 'computer', NULL, '2021-04-27 12:35:30', '2021-04-27 12:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `touristpasses`
--

CREATE TABLE `touristpasses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `touristpasses`
--

INSERT INTO `touristpasses` (`id`, `user_id`, `price`, `facility`, `duration`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, '156', 'US$ 10', 'Full Access', '1 day', NULL, '2021-01-21 10:37:23', '2021-01-21 10:37:23'),
(14, '201', '124', '1241', '12412', NULL, '2021-03-26 06:05:12', '2021-03-26 06:05:12'),
(15, '288', 'PKR 500', 'Any 3 services', '1 day', NULL, '2021-04-22 06:40:53', '2021-04-22 06:40:53'),
(16, '288', 'PKR 2000', 'Full Access', '2 days', NULL, '2021-04-22 06:42:47', '2021-04-22 06:42:47'),
(17, '296', 'dsf', 'fsd', 'sdf', NULL, '2021-04-22 08:33:35', '2021-04-22 08:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number_country` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nutrition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boxing` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yoga` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meditation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pilates` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stretching` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ballet` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `user_id`, `company_name`, `country`, `email`, `website`, `contact`, `telephone`, `phone_number_code`, `phone_number_country`, `phone_number`, `gender`, `session`, `personal_training`, `group_training`, `nutrition`, `one_training`, `boxing`, `yoga`, `meditation`, `pilates`, `stretching`, `ballet`, `facebook`, `instagram`, `twitter`, `youtube`, `youtube_link`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '165', 'adilghani', 'pk', 'adilghani@hotmail.com', NULL, NULL, NULL, '92', 'Pakistan', '3332952879', NULL, 'session', NULL, 'group_training', NULL, 'one_training', NULL, 'yoga', NULL, NULL, 'stretching', 'ballet', 'https://www.facebook.com/gbsinn/', 'https://www.facebook.com/gbsinn/', 'https://www.facebook.com/gbsinn/', NULL, NULL, NULL, '2021-03-18 06:04:27', '2021-04-23 01:14:35'),
(2, '164', 'Viktoria', 'ao', 'info@wa7ash.com', NULL, NULL, NULL, '355', 'Albania', '123456789', NULL, 'session', 'personal_training', 'group_training', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/gymscanner', 'https://www.instagram.com/iamwa7ash', 'https://www.twitter.com/gymscanner', NULL, NULL, NULL, '2021-03-29 06:21:37', '2021-04-16 04:51:31'),
(3, '286', 'fardeen', 'pk', 'fardeenkhan7337@gmail.com', 'website', NULL, NULL, '92', 'Pakistan', '3333333333', NULL, 'session', 'personal_training', 'group_training', 'nutrition', 'one_training', 'boxing', 'yoga', 'meditation', 'pilates', 'stretching', 'ballet', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 04:29:48', '2021-04-22 04:29:48'),
(4, '282', 'Arfa Memon', 'pk', 'arfamemon1997@gmail.com', 'http://gbsinn.com/', NULL, NULL, '92', 'Pakistan', '03332632466', NULL, 'session', NULL, NULL, 'nutrition', NULL, NULL, NULL, 'meditation', NULL, 'stretching', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 05:32:02', '2021-04-22 05:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `external_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `external_id`, `name`, `last_name`, `website`, `email`, `verify_code`, `email_verified_at`, `country`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(60, 'i-100060', 'Randy', 'Ali', 'admin.com', 'randyali80@gmail.com', '212550', '2021-01-16 09:52:35', 'kw', '$2y$10$8wTb64cCVMDxkEpsoT84rO5Mac1MBSh1U/m.ZitX8XPUzkgXekEQe', 1, 'MpPRpSVnDD9ujJtLmu7OoBDveTORiQIk60HGA5ZZ3p9PItN3nEf60PKJhUC7', '2020-12-23 18:54:51', '2021-04-27 11:11:47'),
(125, 'i-100125', 'Sireen', 'Ali', NULL, 'orders@sirinas.com', NULL, NULL, 'dz', '$2y$10$BC2CcbA2OaXiqn/OWuNGNuIwjyjQCtZUWDfC.FuPeXA4r6CpWw9VO', 2, NULL, '2021-01-19 09:49:37', '2021-01-19 09:49:37'),
(128, 'i-100128', 'ravi', 'kumar', 'https://www.mozywuval.ws', 'ravi@peninftech.com', NULL, '2021-01-20 06:30:31', 'hm', '$2y$10$tUOuMLCPqCyAPHVIzRF5zOwy9T/1bnKj2Ot7tK7O.JJ7stPKlqZ7K', 2, NULL, '2021-01-20 06:28:49', '2021-01-20 06:30:31'),
(138, 'i-100138', 'bharti', 'jain', 'https://www.mozywuval.ws', 'bharti@peninftech.com', NULL, '2021-01-21 03:00:50', 'not', '$2y$10$haH7idKnNGOaUDjXsBCWXOVb6fi3l2fcrLG2moBGlvAg7ScDqcTQm', 2, NULL, '2021-01-21 02:58:46', '2021-01-21 03:00:50'),
(139, 'i-100139', 'Ravinn', 'kr', 'dgsd', 'engg.ravi434@gmail.com', NULL, NULL, 'at', '$2y$10$KHPV1Oxzf0awAAur7d7Rl.2VTzy27D0VMOLJSV05Ov0/V3QTwg/We', 2, NULL, '2021-01-21 03:04:38', '2021-01-21 03:04:38'),
(140, 'i-100140', 'gulab', 'kumar', 'https://www.mozywuval.ws', 'gulab@peninftech.com', NULL, NULL, 'in', '$2y$10$dwFOdN5OPput4Q7S7aOr/ermaRM/xBORMHFzqpNrqqfabrHNo2GK6', 2, NULL, '2021-01-21 03:10:26', '2021-01-21 03:10:26'),
(141, 'i-100141', 'dimpy', 'shah', 'https://www.mozywuval.ws', 'dimpy_shah@gmail.com', NULL, NULL, 'not', '$2y$10$GjTsl6iLzhk8kr0NmiIHWeXHrIS.1XlTuVulU6EzphSKb9uq2to9K', 2, NULL, '2021-01-21 04:03:27', '2021-01-21 04:03:27'),
(142, 'i-100142', 'dimpy', 'jain', 'https://www.mozywuval.ws', 'dimpyshah76@gmail.com', NULL, NULL, 'al', '$2y$10$VNu8Lku8aXzyE21der0iweA33pbptBoZ6CIlUK/qXGxzD7YyVKwnS', 2, NULL, '2021-01-21 04:06:07', '2021-01-21 04:06:07'),
(143, 'i-100143', 'apeksha', 'kumari', 'https://www.mozywuval.ws', 'apeksha@gmail.com', NULL, NULL, 'not', '$2y$10$A6KHiQvhKQKloEEF6AL1tOx4moCqNaavfnx68ZTp008Xq4PhxkzjO', 2, NULL, '2021-01-21 04:15:50', '2021-01-21 04:15:50'),
(144, 'i-100144', 'fg', 'zxc', 'https://www.mozywuval.ws', 'gmgori3@gmail.com', NULL, '2021-01-21 04:44:25', 'not', '$2y$10$7LsPMb2QxmGj.F0rdg1tjueOge3mg.KY96lquyMeQcDxy89/kPKX.', 2, NULL, '2021-01-21 04:26:46', '2021-01-21 04:44:25'),
(148, 'i-100148', 'bharti', 'jian', 'https://www.mozywuval.ws', 'jainbhartikol@gmail.com', NULL, NULL, 'ad', '$2y$10$I4AXyc3Qvaw2TETm2F37ue7KIUcAGX35plSYzf7v8JvsOBgvGQ/sa', 2, NULL, '2021-01-21 05:35:06', '2021-01-21 05:35:06'),
(156, 'i-100156', 'Cera', 'Caru', NULL, 'sales@foodimporters.me', NULL, '2021-01-21 08:33:49', 'bd', '$2y$10$x8MOp2bMkBikJ5Sz4zW0muUXGr1Q9/iUvZhxyYTvrnv2H4aD/c00O', 2, 'Y2VfLi9dhpISYFAahHDzPxjC2dlZWOwmKCZTgVGsBjgAjyknPy6U3uQSoQ5Z', '2021-01-21 08:29:02', '2021-03-17 18:34:31'),
(158, 'i-100158', 'admin', 'admin', NULL, 'petrosyanarsenii@outlook.com', NULL, '2021-01-21 08:47:41', 'not', '$2y$10$F1Z0cu7fg.mO6CX.ljtIUegITRpuoXXpppfXmmU57Oki0mpAGzXQu', 2, NULL, '2021-01-21 08:47:19', '2021-01-21 08:47:41'),
(162, 'i-100162', 'example', 'milos', NULL, 'bigboss0333@outlook.com', NULL, '2021-04-01 16:45:54', 'not', '$2y$10$iEh.6YqxdBLn0AIUwFlfCuFt4M01ZdM0BCAcl/jUZ8vTJNmiqPvXW', 2, NULL, '2021-01-28 17:04:37', '2021-04-01 16:45:54'),
(163, 'i-100163', 'nemanja', 'jovanovic', 'https://vendor.gymscanner.com/', 'jovanovic.nemanja.1029@gmail.com', NULL, '2021-03-17 15:29:59', 'rs', '$2y$10$T0ABdp3p8XFrDQOjUWsCaejhwQeajE33HcNNMw6Zh7xXLXpgb8ARu', 2, 'Y1Z1CKR4AhjYXzPxDYjXt8mus4iye7R8RioRoOzWkpR7BnUbIaaNqvR00clW', '2021-03-17 14:19:54', '2021-03-20 18:32:36'),
(164, 'i-100164', 'Randy', 'Ali', NULL, 'info@wa7ash.com', NULL, NULL, 'ro', '$2y$10$IW2PApUiAOu8GtGjPAjRCeOxPJhpphazwjb2CqlQSdZo.7QFhwjvW', 3, NULL, '2021-03-17 19:34:49', '2021-03-17 19:34:49'),
(165, 'i-100165', 'Adil', 'Ghani', 'www.gbsinn.com', 'adilghani@hotmail.com', NULL, '2021-03-18 05:18:51', 'pk', '$2y$10$XcAHw4qg.PKHdCVOtWpURuI6/x5TkOm9FqGCU3XF/ey1eUEsBa/lC', 3, NULL, '2021-03-18 05:16:55', '2021-03-18 05:18:51'),
(166, 'i-100166', 'qwe', 'qwe', NULL, 'zimenkoilya2@outlook.com', NULL, '2021-03-18 20:41:23', 'ar', '$2y$10$6JceVN8VzVKIUd5ozvQZBeJ2IdpHETZNVy1EKXQhFJ5Cqpjzl8k1u', 3, NULL, '2021-03-18 20:35:03', '2021-03-18 20:41:23'),
(167, 'i-100167', 'sda', 'asda', 'asda', 'qwe@sdf.sdoi', NULL, NULL, 'not', '$2y$10$EGoP.jYsQleZquiHUZzgx.rnAqSDSN0dHbzJRcZSD.bNb9uBZqIZK', 2, NULL, '2021-03-18 20:40:14', '2021-03-18 20:40:14'),
(168, 'i-100168', 'qweqwe@qwe.qwe', 'qwe', 'asda', 'qweqwe@qwe.qwe', NULL, NULL, 'ad', '$2y$10$ZFkWGTQ3IWtkSF/ca/14RuOHulyhhdKsoNYyuIf22kRmpkoh/ntdG', 2, NULL, '2021-03-18 20:40:46', '2021-03-18 20:40:46'),
(207, 'i-100207', 'Dimas', 'Ariyanto', 'dimashttps://dimasariyanto12.github.io/', 'dimasariyanto890@gmail.com', NULL, '2021-04-16 22:46:21', 'id', '$2y$10$X3xrUHX8UDr0cL6dY7oue.DHtUTO1BK8EcTYiQcvVyaozRlPwOzrq', 2, NULL, '2021-04-16 22:45:59', '2021-04-16 22:46:21'),
(208, 'i-100208', 'Imran', 'Iman', NULL, 'imranislamimon@gmail.com', NULL, '2021-04-18 15:44:12', 'bd', '$2y$10$vlxG5UmLsMEgxkGBLW8yKeiIP5ad0c1JltuDdk3173JcIXY0SkY8.', 2, 'pif1hksvF5XJRfogVA2klspy152aug1OKcc8mFU6wf5nR47qEA3YYat04oVX', '2021-04-18 15:43:28', '2021-04-23 19:35:22'),
(281, 'i-100281', 'Radwan', 'Ali', NULL, 'radwan007@hotmail.com', NULL, '2021-04-21 14:23:09', 'au', '$2y$10$foZN/NwfI3o/XMJuTfnEyu1yb8xLqje.W7GtxBMJplBskmVp484qG', 2, NULL, '2021-04-21 14:22:10', '2021-04-21 14:23:09'),
(282, 'i-100282', 'Arfa', 'Memon', NULL, 'arfamemon1997@gmail.com', NULL, '2021-04-22 00:21:33', 'pk', '$2y$10$0fjhg/r.fGf1kV5eq.A.teUX./VWJ9MMYy6pvAlYxKlLdUEvqW2Xu', 3, 'BD06pDIoU3uHAFLNw0W6zPFuAtDg0tmgGykw8lTR2OGdDijvYZaiuB2p0SCg', '2021-04-22 00:20:53', '2021-04-23 01:25:45'),
(287, 'i-100287', 'shahzaib', 'qureshi', 'ss', 'shahzaibqureshi7890@gmail.com', NULL, '2021-04-22 02:42:01', 'not', '$2y$10$AtUfyY7cF2ixlgbM3YXl6ubaokCT1dU.73CcBuhNkvgYfr8.CXtFG', 2, NULL, '2021-04-22 02:40:53', '2021-04-22 02:42:01'),
(288, 'i-100288', 'Arfa', 'Memon', 'http://gbsinn.com/', 'hafsamemon@outlook.com', NULL, '2021-04-22 06:31:07', 'pk', '$2y$10$gJpfbEA74IKxAOIpQBuz/eihQ2c9gMYnPitF7jIswQ6jJGQkE4VK2', 2, 'pLwDMkpGpPfnPdILE8nvXE7lnmFM6wRMmDrZia3FidXINdQS0LT2XYKf1WRq', '2021-04-22 06:27:11', '2021-04-23 01:42:28'),
(289, 'i-100289', 'fardeen', 'fardeen', 'p', 'zeechashk@gmail.com', '148773', NULL, 'al', '$2y$10$kRMSdqsy8yVqPh4uzYvKoO5VcdO4/iT7esouFmxGAXjdk.xu7c086', 1, NULL, '2021-04-22 07:04:19', '2021-04-23 01:13:00'),
(296, 'i-100296', 'aaa', 'fardeen', 'p', 'fardeenkhan7337@gmail.com', NULL, '2021-04-22 08:30:28', 'az', '$2y$10$oyjzvezQby8ZJ1qC8NAmVentowBwMZQ0zP8x6.FlncFf/CVvC3bya', 2, 'uhsdUpE9PgwGfQP2C10VTrObdNPjXJm0BEHic3KjapkzZzYPCdkIdUfuxkwh', '2021-04-22 08:29:31', '2021-04-22 09:05:43'),
(297, 'i-100297', 'Ali', 'Shan', 'www.alishansolangi.com', 'alishansolangi.as@gmail.com', NULL, '2021-04-26 04:05:46', 'pk', '$2y$10$toIa5uRqHbQhOC0ZY/b2r.BI4Z4jQipivXWfysjceD35qwMQYhf8u', 2, NULL, '2021-04-26 04:05:08', '2021-04-26 04:05:46'),
(298, 'i-100298', 'a', 'asd', 'sdf', 'adilgha1ni@hotmail.com1', NULL, NULL, 'az', '$2y$10$yWP76fPs1Ku09MPSDN3.Qep4BN/DOCd9lEAlKJiIegb1G/dHU5Eii', 2, NULL, '2021-04-26 04:07:31', '2021-04-26 04:07:31'),
(299, 'i-100299', 'Carissa', 'Estrada', 'https://www.hymihovy.us', 'notazozyx@mailinator.com', NULL, NULL, 'kh', '$2y$10$fJCGArmAITXQKg5xhX4Q2.u.cOGzj0VzVvy.9cp7aIF6d6Xv8CZvm', 2, NULL, '2021-04-26 04:08:24', '2021-04-26 04:08:24'),
(300, 'i-100300', 'Marah', 'Mcpherson', 'https://www.dewopeqyqavusug.com', 'pozonecu@mailinator.com', NULL, NULL, 'vn', '$2y$10$eonYgrelXbuh93TtaSw8ium94cXN4qlmFmXqp30dC527wZQf/efmi', 3, NULL, '2021-04-26 04:10:43', '2021-04-26 04:10:43'),
(301, 'i-100301', 'asd', 'asd', 'asd', 'asdasd@asd.com', NULL, NULL, 'ax', '$2y$10$5tcIDRXysmDKZEH/kCMwC.rzmx5gpVMx.j/DBYdfZZooMTaweus2.', 2, NULL, '2021-04-26 05:59:00', '2021-04-26 05:59:00'),
(302, 'i-100302', 'asd', 'asd', 'asd', 'asd@asd.com', NULL, NULL, 'au', '$2y$10$V6NCc.OBsSbH94PKGguDV.XOxQ7jCMo5W/SNTHKIwQwP0jaxF4WvK', 2, NULL, '2021-04-26 06:17:14', '2021-04-26 06:17:14'),
(303, 'i-100303', 'adil', 'ghani', NULL, 'iamadilghani@gmail.com', NULL, '2021-04-27 13:18:58', 'pk', '$2y$10$XYJPLc2AUmMpmXpQyAaEQOCltiu6YDk6w2RNJRNJ84QKNLQ4O.vk2', 3, NULL, '2021-04-27 13:18:32', '2021-04-27 13:18:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbanks`
--
ALTER TABLE `bbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands_images`
--
ALTER TABLE `brands_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands_info`
--
ALTER TABLE `brands_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands_social_data`
--
ALTER TABLE `brands_social_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_avatars`
--
ALTER TABLE `personal_avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal__memberships`
--
ALTER TABLE `personal__memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `touristpasses`
--
ALTER TABLE `touristpasses`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `bbanks`
--
ALTER TABLE `bbanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `brands_images`
--
ALTER TABLE `brands_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands_info`
--
ALTER TABLE `brands_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands_social_data`
--
ALTER TABLE `brands_social_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `personal_avatars`
--
ALTER TABLE `personal_avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal__memberships`
--
ALTER TABLE `personal__memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `touristpasses`
--
ALTER TABLE `touristpasses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
