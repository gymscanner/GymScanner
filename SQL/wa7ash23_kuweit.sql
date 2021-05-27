-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 05:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `user_id` int(11) DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(20, 156, 'upload/avatar/1611292116.png', '2021-01-21 20:04:23', '2021-01-22 04:08:36'),
(21, 163, 'upload/avatar/1615998695.png', '2021-03-17 15:31:35', '2021-03-17 15:31:35'),
(23, 201, 'upload/avatar/1617103480.png', '2021-03-30 04:59:02', '2021-03-30 09:24:40'),
(24, 288, 'upload/avatar/1619080315.png', '2021-04-22 06:31:55', '2021-04-22 06:31:55'),
(25, 304, 'upload/avatar/1620241763.png', '2021-05-05 17:09:23', '2021-05-05 17:09:23');

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
  `user_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `bank_number`, `swift_code`, `holder_name`, `user_id`, `remember_token`, `created_at`, `updated_at`, `iban`) VALUES
(1, 'wer', '234234', 'wer2', 'erw', 166, NULL, '2021-03-18 20:39:01', '2021-03-18 20:39:01', '234'),
(2, 'aaa', '111', '111', 'sss', 165, NULL, '2021-03-27 05:15:20', '2021-03-27 05:15:20', 'sss'),
(3, 'The Commercial Bank', '123456789', 'COMCFWFW', 'Nasser Al Kandari', 164, NULL, '2021-03-29 06:23:32', '2021-03-29 06:23:32', '0000000000156789452645'),
(5, 'SSS', '000000000000000', '000', 'Arfa Memon', 282, NULL, '2021-04-22 01:16:44', '2021-04-22 01:16:44', '0000'),
(6, 'SSS', '0000000000000000', '000', 'Arfa Memon', 282, NULL, '2021-04-22 04:03:16', '2021-04-22 04:03:16', '0000'),
(7, 'WWW', '5453154', '1021', 'Walkie-talkie', 282, NULL, '2021-04-22 05:38:17', '2021-04-22 05:38:17', '3254'),
(8, 'asf', 'asf', 'asf', 'asfsa', 286, NULL, '2021-04-22 05:57:01', '2021-04-22 05:57:01', 'asf'),
(9, 'asf', 'saf', 'asf', 'saf', 286, NULL, '2021-04-22 05:59:00', '2021-04-22 05:59:00', 'safasf'),
(10, 'YTS', '5412231', '0159', 'LMS', 282, NULL, '2021-04-22 06:07:54', '2021-04-22 06:07:54', '9510');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
(50, 125, NULL, '1611092365603910318.jpg', NULL, '2021-01-19 20:40:19', '2021-01-19 20:40:19');

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
  `user_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bbanks`
--

INSERT INTO `bbanks` (`id`, `bank_name`, `bank_number`, `swift_code`, `holder_name`, `user_id`, `remember_token`, `created_at`, `updated_at`, `iban`) VALUES
(28, 'Commercial Bank', '11357896', 'COMBKWKW', 'Randy Ali', 156, NULL, '2021-01-21 10:38:00', '2021-01-21 10:38:00', '000000000000157896456'),
(29, 'wer', '25423', '4345', 'erw', 204, NULL, '2021-03-20 11:55:58', '2021-03-20 11:55:58', '345'),
(30, 'ss', '11', '22', 'aa', 201, NULL, '2021-03-27 03:24:32', '2021-03-27 03:24:32', 'dd'),
(31, 'AMP', '984645135351', '5497', 'AIM', 288, NULL, '2021-04-22 06:41:18', '2021-04-22 06:41:18', '6315'),
(32, 'ASD', '9645315348', '987', 'POL', 288, NULL, '2021-04-22 06:44:03', '2021-04-22 06:44:03', '446'),
(33, 'dsf', 'fsd', 'fds', 'fds', 296, NULL, '2021-04-22 08:33:41', '2021-04-22 08:33:41', 'dfs'),
(35, '123', '123', '123', '123', 163, NULL, '2021-05-24 15:43:56', '2021-05-24 15:43:56', '123');

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
(7, 282, '1619435907377final banner youtopian.jpg', '2021-04-26 09:18:26', NULL),
(13, 304, '16213422015056YLpl0Km3mEI0gBHdcDbAa6veIttKkn66mPLbi5p.jpeg', '2021-05-18 10:50:01', NULL),
(14, 304, '1621342254697depositphotos_44759197-stock-illustration-software-engineering-scribble.jpg', '2021-05-18 10:50:55', NULL),
(15, 304, '1621342258019E8a0ozxAUKiHJHP60LM6nkwwuvhfNe5588zT9Wlh.png', '2021-05-18 10:50:58', NULL),
(16, 304, '1621342263841VkX5wcNSfE1xGgyMF4zOQQ2HcMn6g5GjHAQArHnB.png', '2021-05-18 10:51:04', NULL),
(18, 163, '1621972329592download.jpg', '2021-05-25 05:52:10', NULL),
(19, 163, '1621972329593download.png', '2021-05-25 05:52:10', NULL),
(21, 163, '1621972329594feature-TDG.png', '2021-05-25 05:52:12', NULL),
(22, 163, '1621972329595images.jpg', '2021-05-25 05:52:12', NULL),
(23, 163, '1621972329596imgpsh_fullsize_anim.jpg', '2021-05-25 05:52:14', NULL),
(24, 163, '1621972329597logo_308x121.png', '2021-05-25 05:52:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands_info`
--

CREATE TABLE `brands_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `select_country` enum('global','selected') DEFAULT NULL,
  `countries` varchar(255) DEFAULT NULL,
  `google_location` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands_info`
--

INSERT INTO `brands_info` (`id`, `user_id`, `about`, `select_country`, `countries`, `google_location`, `created_at`, `updated_at`) VALUES
(1, 282, 'asfasf', 'selected', '[\"AE\",\"AF\",\"AG\"]', NULL, '2021-04-26 06:25:19', '2021-04-27 05:35:21'),
(2, 304, 'that\'s me.', NULL, 'null', 'https:// vendor.gymscanner.com/google_kuwait_location/randy', '2021-05-17 23:32:28', NULL);

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
(10, 282, 'Name', NULL, 'name', '2021-04-27 08:25:24', NULL),
(15, 304, 'Monster Gym', NULL, 'name', '2021-05-13 05:33:04', NULL),
(17, 304, 'download.jpg', NULL, 'image', '2021-05-18 10:49:13', NULL),
(18, 304, 'https://tdguae.com/uploads/Hzt5mIzoPGTviGPGjznX4Dk3Dddqcwr8ebYswk2b.mp4', NULL, 'youtube', '2021-05-18 10:50:41', NULL),
(19, 144, 'https://tdguae.com/uploads/Hzt5mIzoPGTviGPGjznX4Dk3Dddqcwr8ebYswk2b.mp4', NULL, 'youtube', '2021-05-18 23:42:57', NULL),
(20, 163, 'https:://www.youtube.com/embed/nSX4GjnmGlU', NULL, 'youtube', '2021-05-19 05:38:46', '2021-05-20 12:02:42'),
(21, 164, 'https://www.youtube.com/watch?v=nSX4GjnmGlU', NULL, 'youtube', '2021-05-19 06:43:53', NULL),
(22, 163, 'download.jpg', NULL, 'image', '2021-05-25 05:51:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `week_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `country`, `address`, `email`, `website`, `contact`, `message`, `phone_number_code`, `phone_number_country`, `phone_number`, `weightlift`, `yoga`, `pilates`, `mma`, `Bodybuilding`, `Bootcamp`, `EMS`, `Gym`, `Gymnastics`, `KickBoxing`, `MartialArts`, `PersonalFitness`, `Spinning`, `boxing`, `karate`, `crosstraing`, `mon_from`, `mon_to`, `tue_from`, `tue_to`, `wed_from`, `wed_to`, `thu_from`, `thu_to`, `fri_from`, `fri_to`, `sat_from`, `sat_to`, `sun_from`, `sun_to`, `week_date`, `facebook`, `twitter`, `instagram`, `youtube`, `all_check`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 156, 'Caru Gym', 'not', 'Manama, Street 4', 'sales@foodimporters.me', 'www.foodimporters.me', 'Cera Caru', 'we are the best gym in bahrain', '', '', '66993234', NULL, NULL, NULL, NULL, 'Bodybuilding', NULL, 'EMS', 'Gym', NULL, NULL, NULL, NULL, NULL, 'Boxing', 'Karate', 'Crosstraing', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', NULL, NULL, 'www.instagram.com/carugym', NULL, 'all', NULL, '2021-01-21 09:31:01', '2021-01-21 19:54:21'),
(21, 205, 'sss', 'ad', 'sss', 'shahzaibqureshi7890@gmail.com', NULL, 'aaaa', 'sss', '61', 'AU', '11133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Karate', NULL, '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', 'sss', 'ss', 'sss', 's', 'all', NULL, '2021-03-30 04:13:32', '2021-04-14 06:45:54'),
(22, 143, 'abc', 'ai', 'address', 'apeksha@gmail.com', 'https://www.mozywuval.ws', '12312', 'asfas', '994', 'Azerbaijan', '124312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 03:16:27', '2021-04-17 03:16:27'),
(23, 288, 'Arfa Memon', 'pk', 'Plot# C-13, 2nd Floor, Main Qasimabad Road, Hyderabad', 'hafsamemon@outlook.com', 'http://gbsinn.com/', 'Arfa Memon', 'Abc-Xyz', '92', 'Pakistan', '03332632466', NULL, 'Yoga', NULL, NULL, NULL, NULL, NULL, NULL, 'Gymnastics', 'KickBoxing', 'MartialArts', 'PersonalFitness', NULL, NULL, 'Karate', NULL, '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', NULL, NULL, NULL, NULL, 'all', NULL, '2021-04-22 06:54:41', '2021-04-22 06:54:41'),
(24, 296, 'sdf', 'cy', 'address', 'zeechashk@gmail.com', 'p', '12312', 'sadsadsad', '213', 'Algeria', '11133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', 'from', 'to', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 08:34:26', '2021-04-22 08:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` int(11) DEFAULT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
(18, 156, NULL, '1611229115686Security Invoice Apache.pdf', NULL, '2021-01-21 10:38:34', '2021-01-21 10:38:34'),
(19, 166, NULL, '1616184716163Screenshot_4.png', NULL, '2021-03-19 19:12:35', '2021-03-19 19:12:35'),
(20, 204, NULL, '1616244932746HIREORJAM_Webapp document.pdf', NULL, '2021-03-20 11:56:16', '2021-03-20 11:56:16'),
(21, 164, NULL, '1617007277659highline brochure.pdf', NULL, '2021-03-29 06:41:19', '2021-03-29 06:41:19'),
(22, 201, NULL, '1617167879836How-can-education-improve-the-sustainable-development-of-the-world.jpg', NULL, '2021-03-31 03:18:02', '2021-03-31 03:18:02'),
(31, 296, NULL, '16190875929642gym.PNG', NULL, '2021-04-22 08:33:15', '2021-04-22 08:33:15'),
(32, 288, NULL, '1619149040605600x600.jpg', NULL, '2021-04-23 01:37:19', '2021-04-23 01:37:19'),
(39, 165, NULL, '1619396121093download (1).jfif', NULL, '2021-04-25 22:24:58', '2021-04-25 22:24:58');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` enum('featured','none') COLLATE utf8mb4_unicode_ci NOT NULL,
  `app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `user_id`, `price`, `currency`, `service`, `perk`, `duration`, `discount`, `featured`, `app`, `remember_token`, `created_at`, `updated_at`) VALUES
(49, 304, '200', 'US $', 'Regular Membership', '[\"2 weeks free\\r\",\"Full Access\"]', '1 Month', NULL, 'none', 'computer', NULL, '2021-05-05 17:40:12', '2021-05-05 17:40:12');

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
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
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
(246, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-27 14:35:30'),
(247, 303, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-28 07:29:19'),
(248, 303, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-28 07:29:19'),
(249, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-29 17:53:45'),
(250, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-29 17:53:45'),
(251, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 17:13:15'),
(252, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 17:13:15'),
(253, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 17:15:40'),
(254, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 17:15:40'),
(255, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 17:40:09'),
(256, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 17:40:09'),
(257, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 18:58:36'),
(258, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 18:58:36'),
(259, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 18:58:51'),
(260, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 18:58:51'),
(261, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 18:59:46'),
(262, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 18:59:46'),
(263, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 19:02:33'),
(264, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 19:02:33'),
(265, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 20:25:39'),
(266, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-04-30 20:25:39'),
(267, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 20:26:32'),
(268, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 20:26:32'),
(269, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 20:33:14'),
(270, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-04-30 20:33:14'),
(271, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-01 05:28:30'),
(272, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-01 05:28:30'),
(273, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-05-01 05:28:52'),
(274, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-05-01 05:28:52'),
(275, 282, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-02 12:19:00'),
(276, 282, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-02 12:19:00'),
(277, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-04 19:39:48'),
(278, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-04 19:39:48'),
(279, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-04 19:46:47'),
(280, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-04 19:46:47'),
(281, 164, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-05-04 19:47:27'),
(282, 164, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-05-04 19:47:27'),
(283, 164, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-05 15:39:49'),
(284, 164, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-05 15:39:49'),
(285, 304, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-05 15:54:15'),
(286, 304, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-05 15:54:15'),
(287, 304, 60, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-05-05 15:55:10'),
(288, 304, 289, 'UPDATE_MEMBERSHIP', 'has updated a membership plan', 1, '2021-05-05 15:55:10'),
(289, 304, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-05 19:40:12'),
(290, 304, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-05 19:40:12'),
(291, 300, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-19 13:12:14'),
(292, 300, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-19 13:12:14'),
(293, 163, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-19 20:36:59'),
(294, 163, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-19 20:36:59'),
(295, 163, 60, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-24 17:37:07'),
(296, 163, 289, 'NEW_MEMBERSHIP', 'has submitted new membership plan', 1, '2021-05-24 17:37:07');

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
  `user_id` int(11) DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_avatars`
--

INSERT INTO `personal_avatars` (`id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 13, 'upload/avatar/1608310967.jpg', '2020-12-14 17:25:17', '2020-12-18 16:02:47'),
(2, 35, 'upload/avatar/1608301603.psd', '2020-12-18 13:26:06', '2020-12-18 13:26:43'),
(3, 12, 'upload/avatar/1608316859.jpg', '2020-12-18 14:33:54', '2020-12-18 17:40:59'),
(4, 43, 'upload/avatar/1608428022.jpg', '2020-12-20 00:33:42', '2020-12-20 00:33:42'),
(5, 46, 'upload/avatar/1608428753.jpg', '2020-12-20 00:45:53', '2020-12-20 00:45:53'),
(6, 165, 'upload/avatar/1618463446.png', '2021-03-31 03:09:58', '2021-04-15 03:10:46'),
(7, 164, 'upload/avatar/1618393081.jpg', '2021-04-14 07:26:24', '2021-04-14 07:38:01'),
(8, 282, 'upload/avatar/1619069690.png', '2021-04-22 00:33:06', '2021-04-22 03:34:50'),
(9, 286, 'upload/avatar/1619073023.png', '2021-04-22 04:30:23', '2021-04-22 04:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal__memberships`
--

CREATE TABLE `personal__memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
(53, 164, '150', 'KWD', '58 sessions', '[\"online booking\\r\",\"belgrade\"]', '40 days', '12', 'featured', 'app', NULL, '2021-05-04 17:46:47', '2021-05-04 17:47:27'),
(54, 164, '56', 'EURO €', '45 sessions', '[\"Nemanja\\r\",\"Serbia\"]', '25 days', '5', 'none', 'computer', NULL, '2021-05-05 13:39:49', '2021-05-05 13:39:49'),
(55, 300, '530', 'US $', '120 Sessions', '[\"2 Sessions Free\",\"Romania\",\"Germany\"]', '25 days', '15', 'featured', 'computer', NULL, '2021-05-19 11:12:14', '2021-05-19 11:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `touristpasses`
--

CREATE TABLE `touristpasses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
(13, 156, 'US$ 10', 'Full Access', '1 day', NULL, '2021-01-21 10:37:23', '2021-01-21 10:37:23'),
(14, 201, '124', '1241', '12412', NULL, '2021-03-26 06:05:12', '2021-03-26 06:05:12'),
(15, 288, 'PKR 500', 'Any 3 services', '1 day', NULL, '2021-04-22 06:40:53', '2021-04-22 06:40:53'),
(16, 288, 'PKR 2000', 'Full Access', '2 days', NULL, '2021-04-22 06:42:47', '2021-04-22 06:42:47'),
(17, 296, 'dsf', 'fsd', 'sdf', NULL, '2021-04-22 08:33:35', '2021-04-22 08:33:35'),
(20, 144, '156Euro(€)', 'Full access\r\nCar Park', '2 days', NULL, '2021-05-19 12:33:33', '2021-05-19 12:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number_code` int(11) DEFAULT NULL,
  `phone_number_country` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
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
(1, 165, 'adilghani', 'pk', 'adilghani@hotmail.com', NULL, NULL, NULL, 92, 'Pakistan', 2147483647, NULL, 'session', NULL, 'group_training', NULL, 'one_training', NULL, 'yoga', NULL, NULL, 'stretching', 'ballet', 'https://www.facebook.com/gbsinn/', 'https://www.facebook.com/gbsinn/', 'https://www.facebook.com/gbsinn/', NULL, NULL, NULL, '2021-03-18 06:04:27', '2021-04-23 01:14:35'),
(2, 164, 'Viktoria', 'ao', 'info@wa7ash.com', NULL, NULL, NULL, 355, 'Albania', 123456789, NULL, 'session', 'personal_training', 'group_training', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/gymscanner', 'https://www.instagram.com/iamwa7ash', 'https://www.twitter.com/gymscanner', NULL, NULL, NULL, '2021-03-29 06:21:37', '2021-04-16 04:51:31'),
(3, 286, 'fardeen', 'pk', 'fardeenkhan7337@gmail.com', 'website', NULL, NULL, 92, 'Pakistan', 2147483647, NULL, 'session', 'personal_training', 'group_training', 'nutrition', 'one_training', 'boxing', 'yoga', 'meditation', 'pilates', 'stretching', 'ballet', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 04:29:48', '2021-04-22 04:29:48'),
(4, 282, 'Arfa Memon', 'pk', 'arfamemon1997@gmail.com', 'http://gbsinn.com/', NULL, NULL, 92, 'Pakistan', 2147483647, NULL, 'session', NULL, NULL, 'nutrition', NULL, NULL, NULL, 'meditation', NULL, 'stretching', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-22 05:32:02', '2021-04-22 05:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `external_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_code` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(1) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `external_id`, `name`, `last_name`, `website`, `email`, `verify_code`, `email_verified_at`, `country`, `password`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(60, 'i-100060', 'Randy', 'Ali', 'admin.com', 'r@gmail.com', 212550, '2021-01-16 09:52:35', 'kw', '$2y$10$TWDkP003yJTG/KzA5r2m7e9N2lEjHwExfy/UNoKZUAf3UTCCV0E82', 1, 1, 'MpPRpSVnDD9ujJtLmu7OoBDveTORiQIk60HGA5ZZ3p9PItN3nEf60PKJhUC7', '2020-12-23 18:54:51', '2021-04-27 11:11:47'),
(125, 'i-100125', 'Sireen', 'Ali', NULL, 'orders@sirinas.com', NULL, NULL, 'dz', '$2y$10$BC2CcbA2OaXiqn/OWuNGNuIwjyjQCtZUWDfC.FuPeXA4r6CpWw9VO', 2, 1, NULL, '2021-01-19 09:49:37', '2021-01-19 09:49:37'),
(128, 'i-100128', 'ravi', 'kumar', 'https://www.mozywuval.ws', 'ravi@peninftech.com', NULL, '2021-01-20 06:30:31', 'hm', '$2y$10$tUOuMLCPqCyAPHVIzRF5zOwy9T/1bnKj2Ot7tK7O.JJ7stPKlqZ7K', 2, 1, NULL, '2021-01-20 06:28:49', '2021-01-20 06:30:31'),
(138, 'i-100138', 'bharti', 'jain', 'https://www.mozywuval.ws', 'bharti@peninftech.com', NULL, '2021-01-21 03:00:50', 'not', '$2y$10$haH7idKnNGOaUDjXsBCWXOVb6fi3l2fcrLG2moBGlvAg7ScDqcTQm', 2, 1, NULL, '2021-01-21 02:58:46', '2021-01-21 03:00:50'),
(139, 'i-100139', 'Ravinn', 'kr', 'dgsd', 'engg.ravi434@gmail.com', NULL, NULL, 'at', '$2y$10$KHPV1Oxzf0awAAur7d7Rl.2VTzy27D0VMOLJSV05Ov0/V3QTwg/We', 2, 1, NULL, '2021-01-21 03:04:38', '2021-01-21 03:04:38'),
(140, 'i-100140', 'gulab', 'kumar', 'https://www.mozywuval.ws', 'gulab@peninftech.com', NULL, NULL, 'in', '$2y$10$dwFOdN5OPput4Q7S7aOr/ermaRM/xBORMHFzqpNrqqfabrHNo2GK6', 2, 1, NULL, '2021-01-21 03:10:26', '2021-01-21 03:10:26'),
(141, 'i-100141', 'dimpy', 'shah', 'https://www.mozywuval.ws', 'dimpy_shah@gmail.com', NULL, NULL, 'not', '$2y$10$GjTsl6iLzhk8kr0NmiIHWeXHrIS.1XlTuVulU6EzphSKb9uq2to9K', 2, 1, NULL, '2021-01-21 04:03:27', '2021-01-21 04:03:27'),
(142, 'i-100142', 'dimpy', 'jain', 'https://www.mozywuval.ws', 'dimpyshah76@gmail.com', NULL, NULL, 'al', '$2y$10$VNu8Lku8aXzyE21der0iweA33pbptBoZ6CIlUK/qXGxzD7YyVKwnS', 2, 1, NULL, '2021-01-21 04:06:07', '2021-01-21 04:06:07'),
(143, 'i-100143', 'apeksha', 'kumari', 'https://www.mozywuval.ws', 'apeksha@gmail.com', NULL, NULL, 'not', '$2y$10$A6KHiQvhKQKloEEF6AL1tOx4moCqNaavfnx68ZTp008Xq4PhxkzjO', 2, 1, NULL, '2021-01-21 04:15:50', '2021-01-21 04:15:50'),
(144, 'i-100144', 'fg', 'zxc', 'https://www.mozywuval.ws', 'gmgori3@gmail.com', NULL, '2021-01-21 04:44:25', 'not', '$2y$10$TWDkP003yJTG/KzA5r2m7e9N2lEjHwExfy/UNoKZUAf3UTCCV0E82', 2, 1, NULL, '2021-01-21 04:26:46', '2021-01-21 04:44:25'),
(148, 'i-100148', 'bharti', 'jian', 'https://www.mozywuval.ws', 'jainbhartikol@gmail.com', NULL, NULL, 'ad', '$2y$10$I4AXyc3Qvaw2TETm2F37ue7KIUcAGX35plSYzf7v8JvsOBgvGQ/sa', 2, 1, NULL, '2021-01-21 05:35:06', '2021-01-21 05:35:06'),
(156, 'i-100156', 'Cera', 'Caru', NULL, 'sales@foodimporters.me', NULL, '2021-01-21 08:33:49', 'bd', '$2y$10$x8MOp2bMkBikJ5Sz4zW0muUXGr1Q9/iUvZhxyYTvrnv2H4aD/c00O', 2, 1, 'Y2VfLi9dhpISYFAahHDzPxjC2dlZWOwmKCZTgVGsBjgAjyknPy6U3uQSoQ5Z', '2021-01-21 08:29:02', '2021-03-17 18:34:31'),
(158, 'i-100158', 'admin', 'admin', NULL, 'petrosyanarsenii@outlook.com', NULL, '2021-01-21 08:47:41', 'not', '$2y$10$F1Z0cu7fg.mO6CX.ljtIUegITRpuoXXpppfXmmU57Oki0mpAGzXQu', 2, 1, NULL, '2021-01-21 08:47:19', '2021-01-21 08:47:41'),
(162, 'i-100162', 'example', 'milos', NULL, 'bigboss0333@outlook.com', NULL, '2021-04-01 16:45:54', 'not', '$2y$10$iEh.6YqxdBLn0AIUwFlfCuFt4M01ZdM0BCAcl/jUZ8vTJNmiqPvXW', 2, 1, NULL, '2021-01-28 17:04:37', '2021-04-01 16:45:54'),
(163, 'i-100163', 'nemanja', 'jovanovic', 'https://vendor.gymscanner.com/', 'jovanovic.nemanja.1029@gmail.com', NULL, '2021-03-17 15:29:59', 'rs', '$2y$10$TWDkP003yJTG/KzA5r2m7e9N2lEjHwExfy/UNoKZUAf3UTCCV0E82', 2, 1, 'J11P0syCFsD9giY4np22e7it0UcmTJ5oFxL8ziep7CwOAXdJ4HEZOpoNkKxE', '2021-03-17 14:19:54', '2021-03-20 18:32:36'),
(164, 'i-100164', 'Randy', 'Ali', NULL, 'info@wa7ash.com', NULL, NULL, 'ro', '$2y$10$IW2PApUiAOu8GtGjPAjRCeOxPJhpphazwjb2CqlQSdZo.7QFhwjvW', 3, 1, NULL, '2021-03-17 19:34:49', '2021-03-17 19:34:49'),
(165, 'i-100165', 'Adil', 'Ghani', 'www.gbsinn.com', 'adilghani@hotmail.com', NULL, '2021-03-18 05:18:51', 'pk', '$2y$10$XcAHw4qg.PKHdCVOtWpURuI6/x5TkOm9FqGCU3XF/ey1eUEsBa/lC', 3, 1, NULL, '2021-03-18 05:16:55', '2021-03-18 05:18:51'),
(166, 'i-100166', 'qwe', 'qwe', NULL, 'zimenkoilya2@outlook.com', NULL, '2021-03-18 20:41:23', 'ar', '$2y$10$6JceVN8VzVKIUd5ozvQZBeJ2IdpHETZNVy1EKXQhFJ5Cqpjzl8k1u', 3, 1, NULL, '2021-03-18 20:35:03', '2021-03-18 20:41:23'),
(167, 'i-100167', 'sda', 'asda', 'asda', 'qwe@sdf.sdoi', NULL, NULL, 'not', '$2y$10$EGoP.jYsQleZquiHUZzgx.rnAqSDSN0dHbzJRcZSD.bNb9uBZqIZK', 2, 1, NULL, '2021-03-18 20:40:14', '2021-03-18 20:40:14'),
(168, 'i-100168', 'qweqwe@qwe.qwe', 'qwe', 'asda', 'qweqwe@qwe.qwe', NULL, NULL, 'ad', '$2y$10$ZFkWGTQ3IWtkSF/ca/14RuOHulyhhdKsoNYyuIf22kRmpkoh/ntdG', 2, 1, NULL, '2021-03-18 20:40:46', '2021-03-18 20:40:46'),
(207, 'i-100207', 'Dimas', 'Ariyanto', 'dimashttps://dimasariyanto12.github.io/', 'dimasariyanto890@gmail.com', NULL, '2021-04-16 22:46:21', 'id', '$2y$10$X3xrUHX8UDr0cL6dY7oue.DHtUTO1BK8EcTYiQcvVyaozRlPwOzrq', 2, 1, NULL, '2021-04-16 22:45:59', '2021-04-16 22:46:21'),
(208, 'i-100208', 'Imran', 'Iman', NULL, 'imranislamimon@gmail.com', NULL, '2021-04-18 15:44:12', 'bd', '$2y$10$vlxG5UmLsMEgxkGBLW8yKeiIP5ad0c1JltuDdk3173JcIXY0SkY8.', 2, 1, 'pif1hksvF5XJRfogVA2klspy152aug1OKcc8mFU6wf5nR47qEA3YYat04oVX', '2021-04-18 15:43:28', '2021-04-23 19:35:22'),
(281, 'i-100281', 'Radwan', 'Ali', NULL, 'radwan007@hotmail.com', NULL, '2021-04-21 14:23:09', 'au', '$2y$10$foZN/NwfI3o/XMJuTfnEyu1yb8xLqje.W7GtxBMJplBskmVp484qG', 2, 1, NULL, '2021-04-21 14:22:10', '2021-04-21 14:23:09'),
(282, 'i-100282', 'Arfa', 'Memon', NULL, 'arfamemon1997@gmail.com', NULL, '2021-04-22 00:21:33', 'pk', '$2y$10$0fjhg/r.fGf1kV5eq.A.teUX./VWJ9MMYy6pvAlYxKlLdUEvqW2Xu', 3, 1, 'H6kpEUJXLEiJbiZX7J6U2RMagIThsRBkFAo8bMEzOYmGwlngjSmaOmVJ5XmL', '2021-04-22 00:20:53', '2021-04-23 01:25:45'),
(287, 'i-100287', 'shahzaib', 'qureshi', 'ss', 'shahzaibqureshi7890@gmail.com', NULL, '2021-04-22 02:42:01', 'not', '$2y$10$AtUfyY7cF2ixlgbM3YXl6ubaokCT1dU.73CcBuhNkvgYfr8.CXtFG', 2, 1, NULL, '2021-04-22 02:40:53', '2021-04-22 02:42:01'),
(288, 'i-100288', 'Arfa', 'Memon', 'http://gbsinn.com/', 'hafsamemon@outlook.com', NULL, '2021-04-22 06:31:07', 'pk', '$2y$10$gJpfbEA74IKxAOIpQBuz/eihQ2c9gMYnPitF7jIswQ6jJGQkE4VK2', 2, 1, 'pLwDMkpGpPfnPdILE8nvXE7lnmFM6wRMmDrZia3FidXINdQS0LT2XYKf1WRq', '2021-04-22 06:27:11', '2021-04-23 01:42:28'),
(289, 'i-100289', 'fardeen', 'fardeen', 'p', 'zeechashk@gmail.com', 614812, NULL, 'al', '$2y$10$kRMSdqsy8yVqPh4uzYvKoO5VcdO4/iT7esouFmxGAXjdk.xu7c086', 1, 1, NULL, '2021-04-22 07:04:19', '2021-05-01 01:29:44'),
(296, 'i-100296', 'aaa', 'fardeen', 'p', 'fardeenkhan7337@gmail.com', NULL, '2021-04-22 08:30:28', 'az', '$2y$10$oyjzvezQby8ZJ1qC8NAmVentowBwMZQ0zP8x6.FlncFf/CVvC3bya', 2, 1, 'uhsdUpE9PgwGfQP2C10VTrObdNPjXJm0BEHic3KjapkzZzYPCdkIdUfuxkwh', '2021-04-22 08:29:31', '2021-04-22 09:05:43'),
(297, 'i-100297', 'Ali', 'Shan', 'www.alishansolangi.com', 'alishansolangi.as@gmail.com', NULL, '2021-04-26 04:05:46', 'pk', '$2y$10$toIa5uRqHbQhOC0ZY/b2r.BI4Z4jQipivXWfysjceD35qwMQYhf8u', 2, 1, NULL, '2021-04-26 04:05:08', '2021-04-26 04:05:46'),
(298, 'i-100298', 'a', 'asd', 'sdf', 'adilgha1ni@hotmail.com1', NULL, NULL, 'az', '$2y$10$yWP76fPs1Ku09MPSDN3.Qep4BN/DOCd9lEAlKJiIegb1G/dHU5Eii', 2, 1, NULL, '2021-04-26 04:07:31', '2021-04-26 04:07:31'),
(299, 'i-100299', 'Carissa', 'Estrada', 'https://www.hymihovy.us', 'notazozyx@mailinator.com', NULL, NULL, 'kh', '$2y$10$fJCGArmAITXQKg5xhX4Q2.u.cOGzj0VzVvy.9cp7aIF6d6Xv8CZvm', 2, 1, NULL, '2021-04-26 04:08:24', '2021-04-26 04:08:24'),
(300, 'i-100300', 'Marah', 'Mcpherson', 'https://www.dewopeqyqavusug.com', 'pu@gmail.com', NULL, NULL, 'vn', '$2y$10$TWDkP003yJTG/KzA5r2m7e9N2lEjHwExfy/UNoKZUAf3UTCCV0E82', 3, 2, NULL, '2021-04-26 04:10:43', '2021-05-19 11:15:37'),
(301, 'i-100301', 'asd', 'asd', 'asd', 'asdasd@asd.com', NULL, NULL, 'ax', '$2y$10$5tcIDRXysmDKZEH/kCMwC.rzmx5gpVMx.j/DBYdfZZooMTaweus2.', 2, 1, NULL, '2021-04-26 05:59:00', '2021-04-26 05:59:00'),
(302, 'i-100302', 'asd', 'asd', 'asd', 'asd@asd.com', NULL, NULL, 'au', '$2y$10$V6NCc.OBsSbH94PKGguDV.XOxQ7jCMo5W/SNTHKIwQwP0jaxF4WvK', 2, 1, NULL, '2021-04-26 06:17:14', '2021-04-26 06:17:14'),
(303, 'i-100303', 'adil', 'ghani', NULL, 'iamadilghani@gmail.com', NULL, '2021-04-27 13:18:58', 'pk', '$2y$10$XYJPLc2AUmMpmXpQyAaEQOCltiu6YDk6w2RNJRNJ84QKNLQ4O.vk2', 3, 1, NULL, '2021-04-27 13:18:32', '2021-04-27 13:18:58'),
(305, 'i-100305', 'Muntaser', 'Ali', NULL, 'info@foodimporters.com', 16666, NULL, 'ar', '$2y$10$TWDkP003yJTG/KzA5r2m7e9N2lEjHwExfy/UNoKZUAf3UTCCV0E82', 2, 1, NULL, '2021-04-30 15:18:13', '2021-04-30 15:18:13'),
(306, 'i-100306', 'Test', 'Test', 'https://madchef.com.bd', 'test@test.com', NULL, NULL, 'az', '$2y$10$TWDkP003yJTG/KzA5r2m7e9N2lEjHwExfy/UNoKZUAf3UTCCV0E82', 2, 1, NULL, '2021-05-12 06:13:35', '2021-05-12 06:13:35');

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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `brands_images`
--
ALTER TABLE `brands_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `brands_info`
--
ALTER TABLE `brands_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands_social_data`
--
ALTER TABLE `brands_social_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `personal_avatars`
--
ALTER TABLE `personal_avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal__memberships`
--
ALTER TABLE `personal__memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `touristpasses`
--
ALTER TABLE `touristpasses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
