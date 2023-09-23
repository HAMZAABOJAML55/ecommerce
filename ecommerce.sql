-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2023 at 11:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Voluptatem deleniti sit.', NULL, '2023-09-15 03:42:12'),
(2, 'Dolore ipsa harum.', NULL, NULL),
(3, 'Et eos eveniet.', NULL, NULL),
(4, 'Error ducimus mollitia dolorum.', NULL, NULL),
(5, 'Et culpa.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_04_020715_create_permissions_table', 1),
(6, '2022_02_04_020803_create_roles_table', 1),
(7, '2022_02_04_020910_create_role_user_table', 1),
(8, '2022_02_04_021018_create_permission_role_table', 1),
(9, '2022_04_13_070826_create_categories_table', 1),
(10, '2022_04_13_070920_create_questions_table', 1),
(11, '2022_04_13_071022_create_options_table', 1),
(12, '2022_04_13_072027_create_results_table', 1),
(13, '2022_04_13_072320_create_question_result_table', 1),
(14, '2023_09_14_200932_create_video_taple', 2);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` bigint UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `options_question_id_foreign` (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_text`, `points`, `created_at`, `updated_at`) VALUES
(41, 35, 'option1', 1, '2023-09-15 04:17:54', '2023-09-15 04:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ahmed@gmail.com', '$2y$10$wch3sH5F.xN61ZXTk7TV3OEDoxftqft411NLSaOosBQXL/zwEo3va', '2023-09-10 14:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'user_management_access', NULL, NULL),
(2, 'user_management_create', NULL, NULL),
(3, 'user_management_edit', NULL, NULL),
(4, 'user_management_view', NULL, NULL),
(5, 'user_management_delete', NULL, NULL),
(6, 'permission_access', NULL, NULL),
(7, 'permission_create', NULL, NULL),
(8, 'permission_edit', NULL, NULL),
(9, 'permission_view', NULL, NULL),
(10, 'permission_delete', NULL, NULL),
(11, 'role_access', NULL, NULL),
(12, 'role_create', NULL, NULL),
(13, 'role_edit', NULL, NULL),
(14, 'role_view', NULL, NULL),
(15, 'role_delete', NULL, NULL),
(16, 'user_access', NULL, NULL),
(17, 'user_create', NULL, NULL),
(18, 'user_edit', NULL, NULL),
(19, 'user_view', NULL, NULL),
(20, 'user_delete', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED DEFAULT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL),
(15, 15, 1, NULL, NULL),
(16, 16, 1, NULL, NULL),
(17, 17, 1, NULL, NULL),
(18, 18, 1, NULL, NULL),
(19, 19, 1, NULL, NULL),
(20, 20, 1, NULL, NULL),
(21, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint UNSIGNED NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `photo`, `created_at`, `updated_at`) VALUES
(24, 3, '1694760381.png', '2023-09-15 03:46:21', '2023-09-15 03:46:21'),
(23, 3, '1694760369.png', '2023-09-15 03:46:09', '2023-09-15 03:46:09'),
(22, 2, '1694760353.png', '2023-09-15 03:45:53', '2023-09-15 03:45:53'),
(21, 2, '1694760342.png', '2023-09-15 03:45:42', '2023-09-15 03:45:42'),
(20, 2, '1694760331.png', '2023-09-15 03:45:31', '2023-09-15 03:45:31'),
(19, 1, '1694760293.jpg', '2023-09-15 03:44:53', '2023-09-15 03:44:53'),
(18, 1, '1694760284.jpg', '2023-09-15 03:44:44', '2023-09-15 03:44:44'),
(17, 1, '1694760246.jpg', '2023-09-15 03:44:06', '2023-09-15 03:44:06'),
(16, 1, '1694740967.jpg', '2023-09-14 22:22:47', '2023-09-14 22:22:47'),
(25, 3, '1694760402.png', '2023-09-15 03:46:42', '2023-09-15 03:46:42'),
(26, 3, '1694760432.png', '2023-09-15 03:47:12', '2023-09-15 03:47:12'),
(27, 3, '1694760449.png', '2023-09-15 03:47:29', '2023-09-15 03:47:29'),
(28, 4, '1694760488.png', '2023-09-15 03:48:08', '2023-09-15 03:48:08'),
(29, 4, '1694760531.png', '2023-09-15 03:48:51', '2023-09-15 03:48:51'),
(30, 4, '1694760541.png', '2023-09-15 03:49:01', '2023-09-15 03:49:01'),
(31, 4, '1694760550.png', '2023-09-15 03:49:10', '2023-09-15 03:49:10'),
(32, 5, '1694760620.png', '2023-09-15 03:50:20', '2023-09-15 03:50:20'),
(33, 5, '1694760637.png', '2023-09-15 03:50:37', '2023-09-15 03:50:37'),
(34, 5, '1694760650.png', '2023-09-15 03:50:50', '2023-09-15 03:50:50'),
(35, 1, 'Screenshot (386).png.png', '2023-09-15 04:12:32', '2023-09-15 04:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `question_result`
--

DROP TABLE IF EXISTS `question_result`;
CREATE TABLE IF NOT EXISTS `question_result` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `result_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `option_id` bigint UNSIGNED DEFAULT NULL,
  `points` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_result_result_id_foreign` (`result_id`),
  KEY `question_result_question_id_foreign` (`question_id`),
  KEY `question_result_option_id_foreign` (`option_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_result`
--

INSERT INTO `question_result` (`id`, `result_id`, `question_id`, `option_id`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, NULL, NULL),
(2, 1, 2, 6, 0, NULL, NULL),
(3, 1, 3, 9, 1, NULL, NULL),
(4, 1, 4, 14, 1, NULL, NULL),
(5, 1, 5, 17, 0, NULL, NULL),
(6, 1, 6, 21, 0, NULL, NULL),
(7, 1, 7, 27, 1, NULL, NULL),
(8, 1, 8, 30, 0, NULL, NULL),
(9, 1, 9, 36, 0, NULL, NULL),
(10, 1, 10, 37, 0, NULL, NULL),
(11, 2, 1, 1, 0, NULL, NULL),
(12, 2, 2, 8, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_points` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `results_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `total_points`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2023-09-10 11:24:21', '2023-09-10 11:24:21'),
(2, 2, 1, '2023-09-10 14:51:45', '2023-09-10 14:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'fathi@admin.com', NULL, '$2y$10$SZRTYV5M.Q9zDZSgACh/EuLcqWnnlbMT1q0A6aLqriFiQmhhnkd.K', NULL, NULL, NULL),
(2, 'ahmed', 'ahmed@gmail.com', NULL, '$2y$10$X.hLJ7VXWfXAL4an7B.veem/eM7KGar28vupi2hW7itmoWI7sYr7O', NULL, '2023-09-10 05:21:09', '2023-09-10 05:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `video_taple`
--

DROP TABLE IF EXISTS `video_taple`;
CREATE TABLE IF NOT EXISTS `video_taple` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
