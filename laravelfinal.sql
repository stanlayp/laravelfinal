-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 04:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `asrama_id` bigint(20) UNSIGNED NOT NULL,
  `kamar_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `kehadiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `tanggal`, `asrama_id`, `kamar_id`, `mahasiswa_id`, `kehadiran`, `created_at`, `updated_at`) VALUES
(1, '2022-04-22', 1, 1, 1, '1', '2022-04-21 19:30:44', '2022-04-21 21:31:45'),
(2, '2022-04-22', 1, 1, 10, '1', '2022-04-22 00:04:28', '2022-04-22 00:04:28'),
(3, '2022-04-22', 1, 2, 9, '0', '2022-04-22 00:05:29', '2022-04-22 00:05:29'),
(4, '2022-04-22', 1, 2, 2, '0', '2022-04-22 00:06:01', '2022-04-22 00:06:01'),
(5, '2022-04-22', 1, 2, 3, '1', '2022-04-22 00:06:40', '2022-04-22 00:06:40'),
(6, '2022-04-25', 1, 4, 8, '1', '2022-04-25 02:04:38', '2022-04-25 02:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asramas`
--

CREATE TABLE `asramas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asramas`
--

INSERT INTO `asramas` (`id`, `nama`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Joseph', '1', '2022-04-21 18:57:21', '2022-04-21 18:57:21'),
(2, 'Samuel', '1', '2022-04-21 18:57:36', '2022-04-21 18:57:36'),
(3, 'Daniel', '1', '2022-04-21 18:57:50', '2022-04-21 18:58:06'),
(4, 'Naomi', '0', '2022-04-21 18:58:23', '2022-04-21 18:58:23'),
(5, 'Ruth', '0', '2022-04-21 18:58:39', '2022-04-21 18:58:39'),
(6, 'Ester', '0', '2022-04-21 18:58:53', '2022-04-21 18:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamars`
--

CREATE TABLE `kamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokmr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlhpng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamars`
--

INSERT INTO `kamars` (`id`, `lantai`, `nokmr`, `jmlhpng`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2', '2022-04-21 19:02:16', '2022-04-21 23:44:53'),
(2, '1', '2', '3', '2022-04-21 19:02:50', '2022-04-21 23:45:18'),
(4, '1', '3', '2', '2022-04-21 23:45:57', '2022-04-21 23:47:50'),
(5, '1', '5', '2', '2022-04-21 23:46:53', '2022-04-21 23:46:53'),
(6, '1', '6', '1', '2022-04-21 23:47:24', '2022-04-21 23:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namadpn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namablkng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `namadpn`, `namablkng`, `nohp`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, '2081008', 'Stanlay', 'Simbolon', '081888777669', 'Teknik Informatika', '2022-04-21 18:59:45', '2022-04-21 19:00:04'),
(2, '2081089', 'Monkey', 'Luffy', '089977665544', 'Filsafat', '2022-04-21 19:01:49', '2022-04-21 19:01:49'),
(3, '02786629', 'Renggoku', 'kyojuro', '0899112233', 'Akuntansi', '2022-04-21 23:48:56', '2022-04-22 00:02:00'),
(4, '7529062', 'Roronoa', 'Zoro', '089977665544', 'Keperawatan', '2022-04-21 23:53:46', '2022-04-21 23:53:46'),
(5, '75269465', 'Hinata', 'Shoyo', '0811227766', 'Sastra Inggris', '2022-04-21 23:56:38', '2022-04-21 23:56:38'),
(6, '9296929', 'Jonathan', 'Joestar', '08119997772', 'Biologi', '2022-04-21 23:57:36', '2022-04-21 23:57:36'),
(7, '79279269', 'Eren', 'Yeager', '087667554221', 'Matematika', '2022-04-21 23:59:31', '2022-04-21 23:59:31'),
(8, '6289276', 'Light', 'Yagami', '0812233445', 'Sistem Informasi', '2022-04-22 00:00:46', '2022-04-22 00:00:46'),
(9, '8675299', 'Gon', 'Friz', '0834422441', 'Management', '2022-04-22 00:01:43', '2022-04-22 00:01:43'),
(10, '02894893', 'Sakuragi', 'Hanamichi', '0855664433', 'Akuntansi', '2022-04-22 00:03:24', '2022-04-22 00:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2022_04_06_142716_create_admins_table', 1),
(11, '2022_04_07_061329_create_admins_table', 2),
(47, '2014_10_12_000000_create_users_table', 3),
(48, '2014_10_12_100000_create_password_resets_table', 3),
(49, '2019_08_19_000000_create_failed_jobs_table', 3),
(50, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(51, '2022_04_07_082128_create_admins_table', 3),
(52, '2022_04_07_092702_create_asramas_table', 3),
(53, '2022_04_07_104630_create_kamars_table', 3),
(54, '2022_04_07_121528_create_mahasiswas_table', 3),
(55, '2022_04_07_130917_create_absensis_table', 3),
(56, '2022_04_21_171858_add_asrama_id_to_absensis_table', 3),
(57, '2022_04_22_031633_add_kamar_id_to_absensis_table', 4),
(58, '2022_04_22_040632_add_mahasiswa_id_to_absensis_table', 5),
(59, '2022_04_24_014651_add_level_to_users_table', 6),
(60, '2022_04_24_034315_add_is_admin_to_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Stanlay', '2081008@unai.edu', NULL, '$2y$10$2rPNrYHddcOYiMj/h7/FDu0d4F37WRPsLru6z0gW2AAAaUZ2tDKrC', NULL, '2022-04-21 18:56:41', '2022-04-21 18:56:41', 1),
(3, 'John', 'john@unai.edu', NULL, '$2y$10$0oPRkQuJ6EQM0rpNDn/cR.Yk96Z4OW8.XtjqWPR2IOXceQI5cmVrq', NULL, '2022-04-23 21:03:04', '2022-04-23 21:03:04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asramas`
--
ALTER TABLE `asramas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asramas`
--
ALTER TABLE `asramas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
