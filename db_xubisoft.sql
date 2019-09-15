-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 12:52 PM
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
(1, 'We Provide\r\nSolutions that\r\nBrings Joy', NULL, '1.png', NULL, '2019-09-07 03:16:35', '2019-09-10 22:51:16'),
(3, 'test', 'twat', '3.png', '2019-09-10 22:42:55', '2019-09-10 01:42:48', '2019-09-10 22:42:55'),
(4, 'test', NULL, '4.png', '2019-09-14 05:58:07', '2019-09-10 02:41:21', '2019-09-14 05:58:07'),
(5, 'test', 'test', '5.png', '2019-09-10 22:42:43', '2019-09-10 22:18:18', '2019-09-10 22:42:43'),
(6, 'gug', 'UGGU', '6.png', '2019-09-10 22:42:38', '2019-09-10 22:24:58', '2019-09-10 22:42:38'),
(7, 'EFR', 'R3434', '7.png', '2019-09-10 22:42:33', '2019-09-10 22:25:57', '2019-09-10 22:42:33'),
(8, 'htyhyh', 'uyuu7', '8.png', '2019-09-10 22:39:36', '2019-09-10 22:26:40', '2019-09-10 22:39:36'),
(9, 'grhrtt', 'trytr', '9.png', '2019-09-10 22:40:00', '2019-09-10 22:27:31', '2019-09-10 22:40:00'),
(10, 'tret45t5', '5665', '10.png', '2019-09-10 22:40:05', '2019-09-10 22:28:49', '2019-09-10 22:40:05'),
(11, 'wrr24', '34343', '11.png', '2019-09-10 22:42:23', '2019-09-10 22:29:18', '2019-09-10 22:42:23'),
(12, 'rtrw4wr', '444545454', '12.png', '2019-09-10 22:42:28', '2019-09-10 22:29:43', '2019-09-10 22:42:28');

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
(1, 'Web', '2019-09-15 06:09:32', '2019-09-15 07:03:49'),
(2, 'Apps', '2019-09-15 06:09:40', '2019-09-15 07:04:15'),
(3, 'Graphics', '2019-09-15 06:09:48', '2019-09-15 07:04:31'),
(4, 'Domain', '2019-09-15 06:58:26', '2019-09-15 07:04:51'),
(5, 'Career', '2019-09-15 08:03:09', NULL),
(6, 'Clipping Path', '2019-09-15 08:04:31', NULL);

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
(1, 'Custom Software', '1', '1.png', 'custom-software', '2019-09-15 06:42:27', '2019-09-15 06:42:27'),
(2, 'Web Design & Development', '1', '2.png', 'web-design-development', '2019-09-15 07:05:59', '2019-09-15 07:06:00'),
(3, 'Apps Development', '2', '3.png', 'apps-development', '2019-09-15 08:02:07', '2019-09-15 08:02:07'),
(4, 'Graphics Development', '3', '4.png', 'graphics-solution', '2019-09-15 08:02:52', '2019-09-15 08:02:52'),
(5, 'Career Development', '5', '5.png', 'career-development', '2019-09-15 08:03:35', '2019-09-15 08:03:36'),
(6, 'Domain & Hosting', '4', '6.png', 'domain-hosting', '2019-09-15 08:04:09', '2019-09-15 08:04:09'),
(7, 'Clipping Path Services', '6', '7.png', 'clipping-path-services', '2019-09-15 08:04:58', '2019-09-15 08:04:58');

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
(1, 'obayedul', 'obayedul@gmail.com', 'Test Subject', 'bhvg v', 1, '2019-09-14 06:12:55', NULL);

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
(17, '2019_09_05_120858_create_services_table', 2),
(19, '2019_09_05_202034_create_banners_table', 2),
(31, '2019_09_07_135909_create_infos_table', 3),
(36, '2019_09_12_071828_create_addresses_table', 5),
(41, '2019_09_14_081255_create_ceos_table', 6),
(42, '2019_09_05_164358_create_contacts_table', 7),
(43, '2019_09_14_095603_create_portfolios_table', 7),
(44, '2019_09_14_111118_create_cache_table', 7),
(50, '2019_09_15_095951_create_categories_table', 8),
(51, '2019_09_15_095344_create_company_services_table', 9);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ceos`
--
ALTER TABLE `ceos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
