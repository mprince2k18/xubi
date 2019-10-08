-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 10:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xubisoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `map`, `phone`, `mobile`, `email1`, `email2`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'HOUSE-19, ROAD-4, SECTOR-4, UTTARA, DHAKA-1230', 'https://goo.gl/maps/QJyb48gb1RVkqV3Q8', '+880258955125', '+8801611609372', 'contact@xubisoft.com', 'info@xubisoft.com', 'https://www.facebook.com/Xubisoft/', 'https://twitter.com/@xubisoft/', 'https://www.linkedin.com/xubisoft/', NULL, 'https://www.youtube.com/channel/UCx1l705n1sCGeDEn0cn9LBQ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_headline` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `header_headline`, `header_message`, `header_banner`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'We Provide Solutions that Brings Joy', NULL, '1.png', NULL, '2019-09-07 03:16:35', '2019-09-22 11:01:48'),
(3, 'test', 'twat', '3.png', '2019-09-10 22:42:55', '2019-09-10 01:42:48', '2019-09-10 22:42:55'),
(4, 'test', NULL, '4.png', '2019-09-14 05:58:07', '2019-09-10 02:41:21', '2019-09-14 05:58:07'),
(5, 'test', 'test', '5.png', '2019-09-10 22:42:43', '2019-09-10 22:18:18', '2019-09-10 22:42:43'),
(6, 'gug', 'UGGU', '6.png', '2019-09-10 22:42:38', '2019-09-10 22:24:58', '2019-09-10 22:42:38'),
(7, 'EFR', 'R3434', '7.png', '2019-09-10 22:42:33', '2019-09-10 22:25:57', '2019-09-10 22:42:33'),
(8, 'htyhyh', 'uyuu7', '8.png', '2019-09-10 22:39:36', '2019-09-10 22:26:40', '2019-09-10 22:39:36'),
(9, 'grhrtt', 'trytr', '9.png', '2019-09-10 22:40:00', '2019-09-10 22:27:31', '2019-09-10 22:40:00'),
(10, 'tret45t5', '5665', '10.png', '2019-09-10 22:40:05', '2019-09-10 22:28:49', '2019-09-10 22:40:05'),
(11, 'wrr24', '34343', '11.png', '2019-09-10 22:42:23', '2019-09-10 22:29:18', '2019-09-10 22:42:23'),
(12, 'rtrw4wr', '444545454', '12.png', '2019-09-10 22:42:28', '2019-09-10 22:29:43', '2019-09-10 22:42:28'),
(13, '<p>sdsds</p>', NULL, '13.png', '2019-09-22 11:01:15', '2019-09-22 10:45:51', '2019-09-22 11:01:15'),
(14, '<p>test</p>', NULL, '14.png', '2019-09-22 11:01:07', '2019-09-22 10:55:33', '2019-09-22 11:01:07'),
(15, '<p>tftf</p>', NULL, '15.png', '2019-09-22 11:00:59', '2019-09-22 10:56:14', '2019-09-22 11:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `service_category_name`, `created_at`, `updated_at`) VALUES
(1, 'Web Design & Development', '2019-09-15 06:09:32', '2019-10-05 06:39:35'),
(2, 'Apps Development', '2019-09-15 06:09:40', '2019-10-05 06:39:50'),
(3, 'Graphics Solution', '2019-09-15 06:09:48', '2019-10-05 06:40:05'),
(4, 'Domain And Hosting', '2019-09-15 06:58:26', '2019-10-05 06:40:36'),
(5, 'Career Development', '2019-09-15 08:03:09', '2019-10-05 06:40:21'),
(6, 'Clipping Path Service', '2019-09-15 08:04:31', '2019-10-05 06:40:49'),
(7, 'Custom Software Development', '2019-10-05 06:40:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ceos`
--

CREATE TABLE `ceos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ceo_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ceos`
--

INSERT INTO `ceos` (`id`, `ceo_message`, `ceo_name`, `ceo_position`, `ceo_photo`, `created_at`, `updated_at`) VALUES
(1, 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence', 'Fahad Hasan', 'Managing Director & CEO', '1.png', '2019-09-14 03:46:55', '2019-09-14 03:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_description`, `client_photo`, `created_at`, `updated_at`) VALUES
(1, 'BASIS', NULL, '1.jpg', '2019-10-07 06:30:54', '2019-10-07 06:30:54'),
(2, 'BACCO', NULL, '2.jpg', '2019-10-07 06:31:33', '2019-10-07 06:31:33'),
(3, 'ACER', NULL, '3.png', '2019-10-07 06:32:49', '2019-10-07 06:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

CREATE TABLE `company_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_services`
--

INSERT INTO `company_services` (`id`, `service_name`, `service_category_id`, `service_photo`, `slug_name`, `created_at`, `updated_at`) VALUES
(1, 'Web Design & Development', '1', '1.png', 'web-design-development', '2019-09-16 10:03:24', '2019-09-16 10:03:25'),
(2, 'Apps Development', '2', '2.png', 'apps-development', '2019-09-16 10:39:35', '2019-09-16 10:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'obayedul', 'obayedul@gmail.com', 'Test Subject', 'bhvg v', 1, '2019-09-14 06:12:55', NULL),
(2, 'Test Name', 'mprince2k16@gmail.com', 'Test Subject', 'asdfghjkl', 2, '2019-09-16 04:13:12', NULL),
(3, 'Mohammad Prince', 'mprince2k16@gmail.com', 'Test Subject', 'asdfghjkl', 2, '2019-09-18 11:26:11', NULL),
(4, 'Teemo', 'test@gmail.com', 'Test Subject', 'qwerty', 2, '2019-09-18 11:26:47', NULL),
(5, 'Mohammad Prince', 'mprince2k16@gmail.com', 'sadasd', 'wadasdas', 2, '2019-09-22 11:40:45', NULL),
(6, 'Mohammad Prince', 'mprince2k16@gmail.com', 'rerer', 'fsef', 2, '2019-09-22 11:56:58', NULL),
(7, 'test', 'test@gmail.com', 'Test Subject', 'test', 2, '2019-09-23 02:57:16', NULL),
(8, 'Mohammad Prince', 'mprince2k16@gmail.com', 'gdddddfg', 'dfggg', 2, '2019-09-25 11:24:06', NULL),
(9, 'Mohammad Prince', 'mprince2k16@gmail.com', 'gdddddfg', 'dfggg', 2, '2019-09-25 11:24:06', NULL);

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
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Info_headline` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Info_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Info_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `Info_headline`, `Info_message`, `Info_banner`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Web Design & Development', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.', '1.png', NULL, '2019-09-10 23:47:39', '2019-09-10 23:47:40'),
(2, 'Apps Development', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.', '2.png', NULL, '2019-09-10 23:47:50', '2019-09-10 23:47:50'),
(3, 'Software Development', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.', '3.png', NULL, '2019-09-10 23:48:00', '2019-09-10 23:48:00'),
(4, 'Domain & Hosting', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.', '4.png', NULL, '2019-09-10 23:48:11', '2019-09-10 23:48:11'),
(5, 'Clipping Path Service', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.', '5.png', NULL, '2019-09-10 23:48:24', '2019-09-10 23:48:24'),
(6, 'Brand Identity', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.', '6.png', NULL, '2019-09-10 23:48:37', '2019-09-10 23:48:37');

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
(16, '2019_09_05_082731_create_frontends_table', 2),
(19, '2019_09_05_202034_create_banners_table', 2),
(31, '2019_09_07_135909_create_infos_table', 3),
(36, '2019_09_12_071828_create_addresses_table', 5),
(41, '2019_09_14_081255_create_ceos_table', 6),
(42, '2019_09_05_164358_create_contacts_table', 7),
(44, '2019_09_14_111118_create_cache_table', 7),
(50, '2019_09_15_095951_create_categories_table', 8),
(54, '2019_09_16_115856_create_products_table', 10),
(56, '2019_09_15_095344_create_company_services_table', 11),
(61, '2019_09_17_113930_create_teams_table', 12),
(68, '2019_09_14_095603_create_portfolios_table', 13),
(78, '2019_09_23_130800_create_clients_table', 15),
(79, '2019_09_29_130535_create_abouts_table', 16),
(112, '2019_09_05_120858_create_services_table', 17),
(121, '2019_10_03_163006_create_product_pages_table', 18),
(124, '2019_10_07_124613_create_trainings_table', 19);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_photo`, `slug_name`, `created_at`, `updated_at`) VALUES
(1, 'ERP Software', '1.png', 'erp-software', '2019-09-16 06:31:15', '2019-09-16 06:31:15'),
(2, 'POS Software', '2.png', 'pos-software', '2019-09-16 07:00:15', '2019-09-16 07:00:16'),
(3, 'HR & Payroll Software', '3.png', 'hr-&-payroll-software', '2019-09-16 07:00:53', '2019-09-16 07:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_pages`
--

CREATE TABLE `product_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_watermark_single` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_product_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_about_product` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_process_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_items_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_items_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_items_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_details_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_banner_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_details_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_banner_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_details_3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_banner_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_details_4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_banner_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_details_5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_process_banner_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_pages`
--

INSERT INTO `product_pages` (`id`, `title`, `sub_title`, `title_watermark_single`, `product_category_id`, `title_banner`, `about_product_title`, `details_about_product`, `product_process_banner`, `product_process_details`, `product_process_items_1`, `product_process_items_2`, `product_process_items_3`, `product_process_1`, `product_process_details_1`, `product_process_banner_1`, `product_process_2`, `product_process_details_2`, `product_process_banner_2`, `product_process_3`, `product_process_details_3`, `product_process_banner_3`, `product_process_4`, `product_process_details_4`, `product_process_banner_4`, `product_process_5`, `product_process_details_5`, `product_process_banner_5`, `created_at`, `updated_at`) VALUES
(1, 'FundPress', 'A powerful platform for flexible communication', 'F', '1', 'title_banner_.1.jpg', 'FundPress', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'product_info_.1.jpg', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'product_process_banner_1_.1.jpg', 'A powerful platform for flexible communication', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'product_process_banner_2_.1.jpg', 'A powerful platform for flexible communication', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'product_process_banner_3_.1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-06 11:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_watermark_single` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_watermark_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_service_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_about_service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_info_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_info_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_info_items_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_info_items_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_info_items_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_details_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_banner_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_details_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_banner_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_details_3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_banner_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_details_4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_banner_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_details_5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_process_banner_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sub_title`, `title_watermark_single`, `service_category_id`, `title_banner`, `title_watermark_full`, `about_service_title`, `details_about_service`, `service_info_banner`, `service_info_details`, `service_info_items_1`, `service_info_items_2`, `service_info_items_3`, `service_process_1`, `service_process_details_1`, `service_process_banner_1`, `service_process_2`, `service_process_details_2`, `service_process_banner_2`, `service_process_3`, `service_process_details_3`, `service_process_banner_3`, `service_process_4`, `service_process_details_4`, `service_process_banner_4`, `service_process_5`, `service_process_details_5`, `service_process_banner_5`, `created_at`, `updated_at`) VALUES
(1, 'FundPress', 'A powerful platform for flexible communication', 'F', '1', '1.jpg', 'FundPress', 'Client', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', '1.jpg', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'Adding functionality to an innovative Business', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', '1.jpg', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', '1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-05 08:32:25', '2019-10-05 08:32:26'),
(2, 'FundPress', 'A powerful platform for flexible communication', 'F', '2', '2.jpg', 'FundPress', 'Client', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', '2.jpg', 'A powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communicationA powerful platform for flexible communication', 'Adding functionality to an innovative Business', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', '2.jpg', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', '2.jpg', 'A powerful platform for flexible communication', 'A powerful platform for flexible communication', '2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-05 08:33:19', '2019-10-05 08:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `team_photo`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Teemo', 'COO', '1.jpg', 'teemo', '2019-09-17 09:10:37', '2019-09-17 09:10:25', '2019-09-17 09:10:37'),
(2, 'Fahad Hasan', 'CEO', '2.png', 'mohammad-prince', NULL, '2019-09-18 10:26:40', '2019-09-22 09:30:13'),
(3, 'Teemo', 'CEO', '3.jpg', 'teemo', NULL, '2019-09-18 11:29:12', '2019-09-18 11:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'BPO', '1.jpg', '2019-10-08 04:41:33', '2019-10-08 04:41:33'),
(2, 'SEIP', '2.jpg', '2019-10-08 04:50:18', '2019-10-08 04:50:18'),
(3, 'PCS', '3.jpg', '2019-10-08 06:46:32', '2019-10-08 06:46:33'),
(4, 'WEB', '4.jpg', '2019-10-08 06:46:55', '2019-10-08 06:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Prince', 'Mprince2k16@gmail.com', NULL, '$2y$10$sgm57479S7Q8rZWJsq6M9u.2yFrR294irEXqT8DPgEhBYbOAQiEnW', 'ig3bvOKNMzafKo5f99comehKWhRLqQLQy0b8ojnEnXYonHL27Q5CicudS4pJ', '2019-09-05 02:22:17', '2019-09-05 02:22:17'),
(2, 'tesets', 'linkinprince@gmail.com', NULL, '$2y$10$i3t8XlXO.TSII/BH1KcYY.OUcLP/RjX.MCM99ompRQbNVCZ.IqTym', NULL, '2019-09-15 08:48:11', '2019-09-15 08:48:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_service_category_name_unique` (`service_category_name`);

--
-- Indexes for table `ceos`
--
ALTER TABLE `ceos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_services`
--
ALTER TABLE `company_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_pages`
--
ALTER TABLE `product_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_pages_product_category_id_unique` (`product_category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_service_category_id_unique` (`service_category_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ceos`
--
ALTER TABLE `ceos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_pages`
--
ALTER TABLE `product_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
