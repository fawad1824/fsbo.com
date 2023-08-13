-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 09:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `property_kindid` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `contactuser_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `desciption` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL DEFAULT '0',
  `appointment_id` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `property_id`, `user_id`, `contactuser_id`, `date`, `time`, `price`, `phone`, `email`, `desciption`, `booking_id`, `appointment_id`, `created_at`, `updated_at`, `status`) VALUES
(5, '1', '3', '3', '2013-05-16', '22:50', '557', '48', 'roxusozobi@mailinator.com', 'Omnis dolor est quas', '1', '0', '2023-07-28 14:07:50', '2023-07-28 18:44:19', 3),
(8, '2', '3', '3', '2023-07-28', '11:42', '444444', '444444', 'fawad@fmail.con', 'fffff', '1', '0', '2023-07-29 01:42:50', '2023-07-29 01:42:50', 1),
(10, '2', '1', '3', '2023-07-28', '11:44', '3333', '88888', 'admin@gmail.com', '33333', '1', '0', '2023-07-29 01:44:30', '2023-07-29 01:44:30', 1),
(11, '2', '1', '3', '2023-07-28', '11:55', NULL, '876786876', 'admin@gmail.com', 'hhjjhkjh', '0', '1', '2023-07-29 01:55:12', '2023-07-29 01:55:12', 1),
(14, '2', '8', '3', '2023-08-11', '23:45', '7777', '19', 'mumocokeny@yopmail.com', 'hhhh', '1', '0', '2023-08-12 13:45:04', '2023-08-12 13:45:04', 1),
(15, '2', '8', '3', '2023-08-11', '23:48', NULL, '19', 'mumocokeny@yopmail.com', 'jjjj', '0', '1', '2023-08-12 13:48:46', '2023-08-12 13:48:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('d70ba5d7-38fd-49a2-ace1-bb67b898c99a', 3, 1, 'hi', NULL, 0, '2023-07-28 18:57:28', '2023-07-28 18:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Aidan Lambert', 'diwenib@mailinator.com', 'Voluptates aliquid n', 'Eu eu adipisicing re', '2023-07-23 15:11:04', '2023-07-23 15:11:04');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `prop_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `prop_id`, `created_at`, `updated_at`) VALUES
(1, '1690133531.about.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(2, '1690133531.building.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(3, '1690133531.carousel-1.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(4, '1690133531.carousel-2.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(5, '1690133531.header.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(6, '1690133531.lahore 1.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(7, '1690133531.lahore 2.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(8, '1690133531.lahore 3.jpg', '1', '2023-07-24 00:32:11', '2023-07-24 00:32:11'),
(9, '1690553529.about.jpg', '2', '2023-07-28 21:12:09', '2023-07-28 21:12:09'),
(10, '1690553529.building.jpg', '2', '2023-07-28 21:12:09', '2023-07-28 21:12:09'),
(11, '1690553529.call-to-action.jpg', '2', '2023-07-28 21:12:09', '2023-07-28 21:12:09'),
(12, '1690553529.carousel-1.jpg', '2', '2023-07-28 21:12:09', '2023-07-28 21:12:09'),
(13, '1690553529.carousel-2.jpg', '2', '2023-07-28 21:12:09', '2023-07-28 21:12:09'),
(14, '1690553529.header.jpg', '2', '2023-07-28 21:12:09', '2023-07-28 21:12:09'),
(15, '1690553566.lahore 5.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46'),
(16, '1690553566.lahore 6.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46'),
(17, '1690553566.lahore 7.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46'),
(18, '1690553566.lahore 8.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46'),
(19, '1690553566.lahore 9.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46'),
(20, '1690553566.lahore 10.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46'),
(21, '1690553566.office.jpg', '3', '2023-07-28 21:12:46', '2023-07-28 21:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `likeproperty`
--

CREATE TABLE `likeproperty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `is_like` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likeproperty`
--

INSERT INTO `likeproperty` (`id`, `user_id`, `property_id`, `is_like`, `created_at`, `updated_at`) VALUES
(7, '4', '2', '1', '2023-07-29 01:23:42', '2023-07-29 01:26:43');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_03_999999_add_active_status_to_users', 1),
(6, '2023_07_03_999999_add_avatar_to_users', 1),
(7, '2023_07_03_999999_add_dark_mode_to_users', 1),
(8, '2023_07_03_999999_add_messenger_color_to_users', 1),
(9, '2023_07_03_999999_create_chatify_favorites_table', 1),
(10, '2023_07_03_999999_create_chatify_messages_table', 1),
(11, '2023_07_06_152215_create_propertytype_table', 1),
(12, '2023_07_06_160715_create_properties_table', 1),
(13, '2023_07_08_064033_create_propertieskinds_table', 1),
(14, '2023_07_08_070509_create_galleries_table', 1),
(15, '2023_07_08_074640_create_booking_table', 1),
(16, '2023_07_15_173210_create_amenities_table', 1),
(17, '2023_07_21_175930_create_sectors_table', 1),
(18, '2023_07_23_075722_create_contact_table', 2),
(19, '2023_07_23_190937_create_likeproperty_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `ptype2` varchar(255) NOT NULL,
  `areaname` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `sizeM` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sectors` varchar(255) DEFAULT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `type`, `ptype`, `ptype2`, `areaname`, `size`, `sizeM`, `price`, `bedrooms`, `bathrooms`, `name`, `condition`, `desc`, `image`, `user_id`, `status`, `sectors`, `feature`, `created_at`, `updated_at`) VALUES
(1, 'rent', '1', '11', 'Dana Herman', 'Julie Lowe', 'marla', 'Ayanna Higgins', '6', '8', 'Marsden Vaughan', 'Need Major work', 'Unde hic est illum', '1690133531.jpg', '3', '3', '1', NULL, '2023-07-24 00:32:11', '2023-07-28 18:44:19'),
(2, 'rent', '1', '9', '23 street sialkot', 'no', 'sqlft', '1000', '1', '1', 'jalal house', 'Brand New', 'shskskhhshshjs', '1690553529.jpg', '3', '0', '1', NULL, '2023-07-28 21:12:09', '2023-07-29 01:07:18'),
(3, 'sell', '1', '9', 'kjjkljk', 'jkkhjjhs', 'sqlft', 'kjjkjkll', '1', '1', 'jkjljk', 'Brand New', 'jjjljj', '1690553566.jpg', '3', '10', '1', NULL, '2023-07-28 21:12:46', '2023-07-28 21:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `propertieskinds`
--

CREATE TABLE `propertieskinds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_heading` varchar(255) DEFAULT '0',
  `headingname` varchar(255) DEFAULT '0',
  `is_headingid` varchar(255) DEFAULT '0',
  `is_propertykind` varchar(255) DEFAULT '0',
  `is_propertyfeature` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertieskinds`
--

INSERT INTO `propertieskinds` (`id`, `name`, `is_heading`, `headingname`, `is_headingid`, `is_propertykind`, `is_propertyfeature`, `created_at`, `updated_at`) VALUES
(1, 'Residential', '1', '0', '0', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(2, 'Plot', '1', '0', '0', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(3, 'Commerical', '1', '0', '0', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(4, 'Primary Features', '1', '0', '0', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(5, 'Utilities', '1', '0', '0', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(6, 'Communication', '1', '0', '0', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(7, 'Landmark Nearby', '1', '0', '0', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(8, 'Secondary Features', '1', '0', '0', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(9, 'Home', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(10, 'Float', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(11, 'Lower Portion', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(12, 'Upper Portion', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(13, 'Room', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(14, 'Farm House', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(15, 'Guest House', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(16, 'Pent House', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(17, 'Annexe', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(18, 'Hostel', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(19, 'Hostel Suites', '0', 'Residential', '1', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(20, 'Residential Plot', '0', 'Plot', '2', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(21, 'Commercial Plot', '0', 'Plot', '2', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(22, 'Agricultural Land', '0', 'Plot', '2', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(23, 'Plot File', '0', 'Plot', '2', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(24, 'Industrial Land', '0', 'Plot', '2', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(25, 'FarmHoue Plot', '0', 'Plot', '2', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(26, 'Office', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(27, 'Shop', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(28, 'WareHouse', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(29, 'Buildings', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(30, 'Hall', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(31, 'Plaza', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(32, 'Gym', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(33, 'Theatre', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(34, 'Land', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(35, 'Food Court', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(36, 'Factory', '0', 'Commerical', '3', '1', '0', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(37, 'Built Year', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(38, 'Central heating', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(39, 'Central cooling', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(40, 'Elevator/lift', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(41, 'Public parking', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(42, 'Underground parking', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(43, 'CCTV cameria', '0', 'Primary Features', '4', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(44, 'Sewarage', '0', 'Utilities', '5', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(45, 'Electricity', '0', 'Utilities', '5', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(46, 'Water supply', '0', 'Utilities', '5', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(47, 'Gas', '0', 'Utilities', '5', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(48, 'Security', '0', 'Utilities', '5', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(49, 'internet Access', '0', 'Communication', '6', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(50, 'Satelittle or cable TV', '0', 'Communication', '6', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(51, 'School', '0', 'Landmark Nearby', '7', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(52, 'Hospitals', '0', 'Landmark Nearby', '7', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(53, 'Mosque', '0', 'Landmark Nearby', '7', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(54, 'Restaurant', '0', 'Landmark Nearby', '7', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(55, 'Backup Generator', '0', 'Secondary Features', '8', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(56, 'Maintanance', '0', 'Secondary Features', '8', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(57, 'Number of floors', '0', 'Secondary Features', '8', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(58, 'facing', '0', 'Secondary Features', '8', '0', '1', '2023-07-23 14:52:54', '2023-07-23 14:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `propertytype`
--

CREATE TABLE `propertytype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertytype`
--

INSERT INTO `propertytype` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'user/img/icon-apartment.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(2, 'Villa', 'user/img/icon-villa.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(3, 'Home', 'user/img/icon-house.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(4, 'Office', 'user/img/icon-housing.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(5, 'Building', 'user/img/icon-building.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(6, 'Townhouse', 'user/img/icon-neighborhood.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(7, 'Shop', 'user/img/icon-condominium.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54'),
(8, 'Garage', 'user/img/icon-luxury.png', '2023-07-23 14:52:54', '2023-07-23 14:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sectors` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `sectors`, `created_at`, `updated_at`) VALUES
(1, 'sector1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) DEFAULT '2',
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `address`, `phone`, `status`, `remember_token`, `created_at`, `updated_at`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-07-23 14:52:55', '$2y$10$Z18KvgpZLWTLMSHjbRgspuMSufjSAPsa.z9XQJUrFQ7q.xaDgcMba', '1', '122 street sialkot', '1234566', '2', 'wyR3W6E3SbvnP3rlbma1XapPcszM6113naFC3tJmNfNQjPIyx8AzPguxFk1y', '2023-07-23 14:52:55', '2023-07-23 14:52:55', 0, 'avatar.png', 0, NULL),
(2, 'Agent', 'agent@gmail.com', '2023-07-23 14:52:55', '$2y$10$nx1o8CtMwoYLhxQgHI9mJuirb9uHeEyLazFhiyS1L7RT53arzWwbC', '2', '122 street sialkot', '1234566', '2', 'znj7tX6HyU', '2023-07-23 14:52:55', '2023-07-23 14:52:55', 0, 'avatar.png', 0, NULL),
(3, 'Dealer', 'mumocokeny1@yopmail.com', '2023-07-23 14:52:55', '$2y$10$Myh4Pwz765/gAbnFV5VYs.5R0vMgNvbO4kiJXyNtLQdiO2pQ9ZDze', '3', '122 street sialkot', '1234566', '2', 'slUMCV7BmbOLOITv05emwe9EU7uHFn7dU5CtQr5BI8IbmEo07aFsE0qDzgDR', '2023-07-23 14:52:55', '2023-07-23 14:52:55', 0, 'avatar.png', 0, NULL),
(4, 'user', 'user@gmail.com', '2023-07-23 14:52:55', '$2y$10$.wA17EmH.52ZGt99qhHliev2WAPdpZgARTNJkKxF3yGc/32uIeNZG', '4', '122 street sialkot', '1234566', '2', 'y8I1dROck2F4uESxzi9bCHBM4DuTPaLbWkLwbu5HKbmXXNeKpJLiDUekMlbu', '2023-07-23 14:52:55', '2023-07-23 14:52:55', 0, 'avatar.png', 0, NULL),
(7, 'fawad', 'fawad1824@gmail.com', NULL, '$2y$10$3mom5VcTwNRNSKpKLGlK8.mUAe5OyGJSXuAEnTvXGIjwC9YUBOLEO', '4', 'fawad1824@gmail.com', '998998', '2', NULL, '2023-08-12 12:30:21', '2023-08-12 13:00:23', 0, 'avatar.png', 0, NULL),
(8, 'Deanna Austin', 'mumocokeny@yopmail.com', NULL, '$2y$10$p.WtrNFma3.ftCeGDHuz1./juqaXGlOAEkF5Ntx1dJtBEUSJGyDFi', '4', 'Aliquam quia obcaeca', '19', '2', NULL, '2023-08-12 13:07:47', '2023-08-12 13:07:47', 0, 'avatar.png', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likeproperty`
--
ALTER TABLE `likeproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertieskinds`
--
ALTER TABLE `propertieskinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertytype`
--
ALTER TABLE `propertytype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `likeproperty`
--
ALTER TABLE `likeproperty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propertieskinds`
--
ALTER TABLE `propertieskinds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `propertytype`
--
ALTER TABLE `propertytype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
