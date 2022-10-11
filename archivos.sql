-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 03:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archivos`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>Test</p>', '2021-09-29 15:57:34', '2021-09-29 15:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `shop_id`, `content`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Test-Logo.svg/783px-Test-Logo.svg.png&quot; style=&quot;height:359px; width:783px&quot; /&gt;&lt;/p&gt;', 1, 0, '2021-09-30 11:14:21', '2021-09-30 05:45:39'),
(2, 1, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://upload.wikimedia.org/wikipedia/en/9/95/Test_image.jpg&quot; style=&quot;height:300px; width:400px&quot; /&gt;&lt;/p&gt;', 0, 0, '2021-09-30 11:17:20', '2021-09-30 05:55:27'),
(3, 1, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Test-Logo.svg/783px-Test-Logo.svg.png&quot; style=&quot;height:359px; width:783px&quot; /&gt;&lt;/p&gt;', 1, 0, '2021-09-30 11:18:02', '2021-09-30 05:49:21'),
(4, 1, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;https://testandwow.getolympus.com/webfile/show/579/testandwow-badge.png&quot; style=&quot;height:145px; width:348px&quot; /&gt;&lt;/p&gt;', 1, 0, '2021-09-30 11:19:54', '2021-09-30 05:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banner_id` int(11) NOT NULL,
  `banner_image` varchar(200) NOT NULL,
  `image_order` int(11) NOT NULL,
  `is_deleted` tinyint(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_image`, `image_order`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '67b4fb6f6dbf3aa128ab46140c54ac62.jpg', 4, 0, '2021-09-28 11:52:23', '2021-09-28 13:09:08'),
(4, 'd7aed2bbf9de2bb127ba3ddc7ee599e7.png', 1, 0, '2021-09-28 12:57:49', '2021-09-28 12:57:49'),
(5, '86b6e625bd5465f1ddb35eac4e22d0de.png', 2, 0, '2021-09-28 12:57:49', '2021-09-28 12:57:49'),
(6, 'e3b2e4ec3910134912a5af54e220f549.png', 3, 0, '2021-09-28 12:57:49', '2021-09-28 12:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `shop_id`, `name`, `parent_id`, `description`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test', 0, 'Test Desc', 0, 0, '2021-10-01 00:35:40', '2021-10-01 01:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'Bhopal'),
(2, 1, 'Indore'),
(3, 2, 'Mumbai'),
(4, 2, 'Pune'),
(5, 3, 'Sydney'),
(6, 4, 'Hobart'),
(7, 5, 'Surat'),
(8, 5, 'Ahemdabad');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `address`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'Test@gmail.com', 'Laxmi\r\nchowk,hinjawadi,pune', '6568768645', '2021-09-29 16:56:16', '2021-09-29 11:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`) VALUES
(1, 'India'),
(2, 'Australia');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'test question 1', 'test answer 1', 0, '2021-09-29 17:01:44', '2021-09-29 12:20:07'),
(2, 'Test1', 'another test question and another answer', 0, '2021-09-29 17:22:24', '2021-09-29 17:22:24'),
(3, 'Another Question', 'Another Answer', 1, '2021-09-29 17:24:39', '2021-09-29 17:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `frame`
--

CREATE TABLE `frame` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `frameTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameImage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','InActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `framedata`
--

CREATE TABLE `framedata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `frameName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameDoctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameProfile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameMobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameClinic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameCity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framePincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameState` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameBooking` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameContact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framePayment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameMorningtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameEveningtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frameCard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','InActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, '2014_10_12_000000_create_frame_table', 1),
(16, '2014_10_12_000000_create_framedata_table', 1),
(17, '2014_10_12_000000_create_pdffileupload_table', 1),
(18, '2014_10_12_000000_create_webcme_table', 1),
(19, '2014_10_12_000000_create_webinar_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(22, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(23, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(24, '2016_06_01_000004_create_oauth_clients_table', 1),
(25, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2021_09_28_042229_create_categories', 1),
(28, '2021_09_28_042248_create_option_groups', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `msg_title` varchar(100) NOT NULL,
  `msg_description` varchar(255) NOT NULL,
  `user_type` enum('seller','buyer','all') NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `msg_title`, `msg_description`, `user_type`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Test Notification', 'Enter Notification Message Description', 'seller', 0, 0, '2021-10-01 12:53:14', '2021-10-01 12:53:14'),
(2, 'New Notification', 'Enter Notification Message Description', 'seller', 0, 0, '2021-10-01 12:56:45', '2021-10-01 12:56:45'),
(3, 'Push Notifications', 'Enter Notification Message Description', 'seller', 0, 0, '2021-10-01 12:57:21', '2021-10-01 12:57:21'),
(4, 'Push Notifications', 'Enter Notification Message Description', 'seller', 0, 0, '2021-10-01 13:03:11', '2021-10-01 13:03:11'),
(5, 'Push Notifications', 'Enter Notification Message Description', 'seller', 0, 0, '2021-10-01 13:05:15', '2021-10-01 13:05:15'),
(6, 'Push Notifications', 'Enter Notification Message Description', 'seller', 0, 0, '2021-10-01 13:09:29', '2021-10-01 13:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` enum('flat','percentage') NOT NULL,
  `offer_value` float NOT NULL,
  `offer_startdate` date NOT NULL,
  `offer_expirydate` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `name`, `description`, `type`, `offer_value`, `offer_startdate`, `offer_expirydate`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'This just a test offer.', 'percentage', 10, '2021-09-27', '2021-10-01', 1, 0, '2021-09-29 11:48:24', '2021-09-29 06:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(10) UNSIGNED NOT NULL,
  `option_group_id` int(11) NOT NULL,
  `option_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_group_id`, `option_name`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'red', 1, 0, '2021-09-28 09:25:46', '2021-09-28 09:25:51'),
(2, 1, 'green', 1, 0, '2021-09-28 09:25:55', '2021-09-28 09:25:59'),
(3, 2, 'S', 0, 0, '2021-09-28 09:25:40', '2021-09-28 09:25:40'),
(4, 2, 'M', 1, 0, '2021-09-28 09:25:40', '2021-09-28 09:25:40'),
(5, 1, 'black', 1, 0, '2021-09-28 05:26:07', '2021-09-28 05:26:07'),
(6, 2, 'L', 1, 1, '2021-09-28 05:26:55', '2021-09-28 05:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `option_groups`
--

CREATE TABLE `option_groups` (
  `option_group_id` int(11) NOT NULL,
  `option_group_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_groups`
--

INSERT INTO `option_groups` (`option_group_id`, `option_group_name`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'color', 1, 0, '2021-09-28 09:22:51', '2021-09-28 09:22:51'),
(2, 'size', 0, 0, '2021-09-28 09:22:51', '2021-09-28 09:22:51'),
(3, 'Example', 1, 1, '2021-09-28 04:36:15', '2021-09-28 04:54:53'),
(4, 'test', 1, 1, '2021-09-28 07:26:16', '2021-09-28 07:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdffileupload`
--

CREATE TABLE `pdffileupload` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','InActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` int(11) NOT NULL,
  `policy` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `policy`, `created_at`, `updated_at`) VALUES
(1, '<p>This is privacy policy.</p>', '2021-09-29 16:06:02', '2021-09-29 10:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `SKU` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `weight` float NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `long_desc` varchar(250) NOT NULL,
  `thumb` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `SKU`, `title`, `price`, `quantity`, `weight`, `short_desc`, `long_desc`, `thumb`, `category_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(3, '123', 'Mens Shirt', 12, 100, 12, 'Test Data', 'Test Description', 'c8fa4e85f64a7dbbe2c1de6ebb611dd5.jpg', 1, 1, 0, '2021-09-29 05:53:17', '2021-09-30 06:59:00'),
(4, '123', 'Example', 200, 100, 1, 'Enter Short Description', 'Enter Long Description', 'db4e486e4bafdfc770b67689d449105f.png', 3, 1, 0, '2021-09-30 06:20:27', '2021-09-30 06:54:35'),
(5, '12', 'shirt', 200, 10, 10, 'Enter Short Description', 'Enter Long Description', 'cb66b594702d31a24f122ea00cdbdcc8.jfif', 0, 1, 0, '2021-09-30 11:01:26', '2021-09-30 11:01:26'),
(6, '123', 'Coat', 200, 2, 1, 'Enter Short Description', 'Enter Long Description', 'f00ae1007c14b1de126fc4b1b22345ea.png', 0, 0, 0, '2021-09-30 11:51:12', '2021-09-30 11:51:12'),
(7, '12', 'Coat', 200, 10, 1, 'Enter Short Description', 'Enter Long Description', '073d83e7494ae7280ee8d0284b43935e.png', 3, 1, 0, '2021-09-30 11:51:55', '2021-09-30 11:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 3, 'c1d89b1940c2789a98cc1c34c9de03f2.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, '71311acebaa4e6776009646f33477377.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'c164e8980e8e9d22c4524fd093cd64ac.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, '3699bda011c01d6e3872e3a583ed39b4.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, '2ad42a30408ae414f7bb948b45cc797a.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 3, 'de6fd7069db94a8670d113785aab8e60.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, '1adb45f2bcbcb320a07f55c88cf999d5.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 'e310ca9a9d79328987cf6bfd1a83882d.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 3, '3e680253dc11692f3e85ececf59891ee.jfif', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 'ccd7560c0ca2d59feba617e9ddc4c3e9.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 'a9d75c10fbea0d8979e985e92ce24909.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 'ded4982026f57e7a1e121b54dac1500d.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, '7f622d0296191f2aeafcb9040620c8cf.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 3, '251c337083a63929b1e7c67b0965b071.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 3, '59625cd6ebd3650725b3f204fa3a2864.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 5, 'f74bb8e311f6ec2ce0a7285533e0b7a7.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 5, 'cb66b594702d31a24f122ea00cdbdcc8.jfif', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 6, 'e2e6d9f99f11ea8c37d5784e67d7d127.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 6, '72ce8db416513e1981452e448f8657f5.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 7, '9a51fefb87aa6b3350e4e3652f12d242.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 7, '2982833207175f2683b5a0665db195d3.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 7, '5705911ca285dfdf04e953fa6cc80f37.png', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

CREATE TABLE `product_options` (
  `product_option_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_options`
--

INSERT INTO `product_options` (`product_option_id`, `option_id`, `product_id`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 8, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 7, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 5, 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 5, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 3, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 5, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 3, 6, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, 7, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_description` varchar(200) NOT NULL,
  `shop_image` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_description`, `shop_image`, `user_id`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test shop', '92fbedf0651df500bffc5d398946a1e1', 2, 0, 0, '2021-09-29 14:53:32', '2021-09-30 06:45:27'),
(2, 'Electronics', 'Enter Shop Description', '8121d112790cb984a07d967ef9963107.png', 1, 1, 0, '2021-09-30 06:26:09', '2021-09-30 06:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'Madhya Pradesh'),
(2, 1, 'Maharashtra'),
(3, 2, 'New South Wales '),
(4, 2, 'Tasmania '),
(5, 1, 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>this is terms and conditions.</p>', '2021-09-29 16:16:04', '2021-09-29 10:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `verification_code` varchar(200) NOT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `device_type` enum('android','ios','web') NOT NULL,
  `device_token` varchar(100) NOT NULL,
  `user_type` enum('seller','buyer','admin') NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone_no`, `address`, `city`, `state`, `country`, `zipcode`, `profile_image`, `verification_code`, `is_verified`, `device_type`, `device_token`, `user_type`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '$2y$10$USY.LaXm/uJhbhZHPEHct.N.TGUyn3OyGLzl3bnnROj6G7WAOBLE6', '700079830', 'Laxmi\r\nchowk,hinjawadi,Bhopal', '1', '1', '1', '845684', 'd677f07ee2c69d552c9adfd2c721b6a9.png', '', 0, 'android', 'exKz8c_9Skl5qtcNASyzAu:APA91bGSMrVt2eHWGh82yXKFP6nJ8zMMnREuveCP0e4t_btGALch1jAS2aKm4kUlDHuz4PxAotW-P', 'admin', 0, 0, '2021-09-27 09:41:30', '2021-10-01 07:54:54'),
(2, 'example', 'Surati', 'roshni@gmail.com', '$2y$10$r5ZZ2Mv9f3WAp/OG54g8l.RUUVYa1k5cWbARNS5wj7m0wztkisPzy', '09768664675', 'Surat,Gujarat,India', '7', '5', '1', '347564', '816b2ae89526c9659e70fdcb570f0da8.png', '', 0, 'android', '', 'seller', 1, 0, '2021-09-29 09:59:17', '2021-09-30 23:57:22'),
(3, 'Test', 'User', 'TestUser@g.com', '$2y$10$nay5nIV9VKMSFhH40TW6oeiHqf6hE/oA7UfdBnWlp5nVZ38jUG9Ni', '09768664675', 'Enter Address', '5', '3', '2', '347564', '94ad5a9f87f7ee4d75d286367d152812.png', '', 0, 'android', '', 'seller', 0, 0, '2021-09-30 23:16:21', '2021-09-30 23:16:21'),
(4, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$rz40dJjFtPVAjStpfJqxmOl9o0bldYRSL7DNofrY30ctewbYsP.Zi', '09768664675', 'Enter Address', '7', '5', '1', '347564', 'ac4cd07fec1376ed801fb6ae0fb97649.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 02:25:28', '2021-10-01 02:25:28'),
(5, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$yZvD0NJOcG0PIZYF3/pqdOHwlWXGH2AGcaQ6LUjQNvIsosiZ/7uAq', '09768664675', 'Enter Address', '7', '5', '1', '347564', '2d1f5a8ba85c8190df9f45cc75c48938.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 02:26:09', '2021-10-01 02:26:09'),
(6, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$kkWgKj/Po8qzAn.1b9hNmOpdFLAYmS2Sj70b3cNZx2TuqHtzPdJCq', '09768664675', 'Enter Address', '7', '5', '1', '347564', 'da66565631426bcdf4880c47cb656c0f.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 02:27:13', '2021-10-01 02:27:13'),
(7, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$TBRHxMyuWB0Y7wxevWi1EeVtQmGIyjkVnwD5ntUpEUULU4JRTBX2G', '09768664675', 'Enter Address', '7', '5', '1', '347564', 'f7962229f7652e6622ee1de1321955d2.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 02:27:29', '2021-10-01 02:27:29'),
(8, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$XpLEt655Yd6KmbE9fkUBuei7//Y/yhoH/qe8YCd6/KzmF826e2vKO', '09768664675', 'Enter Address', '7', '5', '1', '347564', '601bf43b37f8b5f7d495b93cfdeba170.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 02:28:21', '2021-10-01 02:28:21'),
(9, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$AxnJD2WOcYjRr1dJrZ.i2OcwAboGDDW46F.YNFIVf9Ytbr2op9woO', '09768664675', 'Enter Address', '7', '5', '1', '347564', '6197d0af09602cbcc6cacceddce969c4.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 02:28:59', '2021-10-01 02:28:59'),
(10, 'example', 'test', 'roshni.surati@sapphiresolutions.net', '$2y$10$Ctni3sOAhf4zA7t/L9hfeOq5eGCkYP9kYyWr4eaColv8IkiK0Tvfq', '09768664675', 'Enter Address', '7', '5', '1', '657848', '12cd8c8bd3b68744a51ee6ae2c23a7d9.png', '', 0, 'android', '', 'seller', 0, 0, '2021-10-01 03:06:03', '2021-10-01 03:06:03'),
(14, 'example', 'test', 'kamtagautam285@gmail.com', '$2y$10$kybq6w5roMIE/Bg1pXwZIOV8iLfpTU5II0M95G649zRhRumKTpY56', '09768664675', 'Enter Address', '8', '5', '1', '347564', 'bc79d9dc97f65a3cab248d9f7790ff41.png', '\n$2y$10$VjeVu7KveXeLJF2tdlbpze0XwJPUDw7.LghDPQGVT4uqquqbx39bq', 0, 'android', '', 'seller', 0, 0, '2021-10-01 04:29:35', '2021-10-01 07:44:32'),
(15, 'example', 'test', 'genolim461@decorbuz.com', '$2y$10$W/hEs21MdNkRRX5lDdjI9eHO8mh4jeS0kcvx/AaUSzqd4A2chqLeW', '09768664675', 'Enter Address', '7', '5', '1', '347564', '3b3e88f1203c13ddb24223b540f86517.png', '$2y$10$WdvLqWFZyd.JMx372kggtevCFHcY8vHwthW/L3.pajRsptRHdd51m', 0, 'android', '', 'seller', 0, 0, '2021-10-01 04:36:09', '2021-10-01 04:36:09'),
(16, 'example', 'test', 'kamtagautam285@gmail.com', '$2y$10$kybq6w5roMIE/Bg1pXwZIOV8iLfpTU5II0M95G649zRhRumKTpY56', '09768664675', 'Enter Address', '3', '2', '1', '347564', '5444f1b9589ca18428f680848abd6d7e.png', '$2y$10$HsUaaUD0QCFCDiQl2a/daujMFmhqWAXVLDX9QHceJU8olmZH6g7pq', 0, 'android', '', 'seller', 0, 0, '2021-10-01 04:38:32', '2021-10-01 07:44:32'),
(17, 'example', 'test', 'kamtagautam285@gmail.com', '$2y$10$kybq6w5roMIE/Bg1pXwZIOV8iLfpTU5II0M95G649zRhRumKTpY56', '09768664675', 'Enter Address', '8', '5', '1', '347564', '30f6ed23036bd16ac7fb430cc7480efb.png', '$2y$10$/FqEsKPxBe.eiaJ3SgfOKOEzZKQcBg/FvxWxOk0fXZHG9AtKnY0Z6', 0, 'android', '', 'seller', 0, 0, '2021-10-01 04:42:57', '2021-10-01 07:44:32'),
(18, 'example', 'test', 'kamtagautam285@gmail.com', '$2y$10$kybq6w5roMIE/Bg1pXwZIOV8iLfpTU5II0M95G649zRhRumKTpY56', '09768664675', 'Enter Address', '8', '5', '1', '347564', '76e9e8a17240d3cd09a17ac652ec066b.png', '$2y$10$h0o.dHE3obNC6uMR7tkaFuoPGLBva4coj3.GcbAbfY908dLSaFZtq', 1, 'android', '', 'admin', 1, 0, '2021-10-01 04:43:33', '2021-10-01 07:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `webcme`
--

CREATE TABLE `webcme` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `webcmeTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webcmeDate` date DEFAULT NULL,
  `webcmeUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webcmevideourl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','InActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `webinarTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webinarsubTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webinarDate` date DEFAULT NULL,
  `webinarUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webinarvideourl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webinarImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webinarImage1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','InActive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frame`
--
ALTER TABLE `frame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `framedata`
--
ALTER TABLE `framedata`
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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `option_groups`
--
ALTER TABLE `option_groups`
  ADD PRIMARY KEY (`option_group_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pdffileupload`
--
ALTER TABLE `pdffileupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`product_option_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webcme`
--
ALTER TABLE `webcme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `frame`
--
ALTER TABLE `frame`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `framedata`
--
ALTER TABLE `framedata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `option_groups`
--
ALTER TABLE `option_groups`
  MODIFY `option_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pdffileupload`
--
ALTER TABLE `pdffileupload`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_options`
--
ALTER TABLE `product_options`
  MODIFY `product_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `webcme`
--
ALTER TABLE `webcme`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
