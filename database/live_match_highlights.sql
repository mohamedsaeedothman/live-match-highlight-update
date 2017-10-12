-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2017 at 03:09 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_match_highlights`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `match_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `belongs_to` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `match_id`, `type`, `content`, `belongs_to`, `created_at`, `updated_at`) VALUES
(347, 8, 0, 'match begining', NULL, '2017-10-11 21:49:58', '2017-10-11 21:49:58'),
(348, 8, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, '2017-10-11 21:53:05', '2017-10-11 21:53:05'),
(349, 8, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, '2017-10-11 21:55:21', '2017-10-11 21:55:21'),
(350, 8, 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2017-10-11 21:55:38', '2017-10-11 21:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_team` int(10) UNSIGNED NOT NULL,
  `second_team` int(10) UNSIGNED NOT NULL,
  `first_team_score` tinyint(4) NOT NULL DEFAULT '0',
  `second_team_score` tinyint(4) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_date` date NOT NULL,
  `match_time` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `first_team`, `second_team`, `first_team_score`, `second_team_score`, `description`, `match_date`, `match_time`, `status`, `created_at`, `updated_at`) VALUES
(7, 2, 1, 0, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-10-12', '02:00:00', 0, '2017-10-11 21:47:39', '2017-10-11 21:47:39'),
(8, 4, 5, 0, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2017-10-11', '01:00:00', 2, '2017-10-11 21:49:13', '2017-10-11 21:55:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2017_10_10_121932_create_teams_table', 2),
(5, '2017_10_10_134054_create_matches_table', 3),
(6, '2017_10_11_033535_add_status_column_to_matchs_table', 4),
(7, '2017_10_11_052117_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'zmalek', '2017-10-10 10:52:01', '2017-10-11 19:50:30'),
(2, 'ahly', '2017-10-10 10:54:22', '2017-10-10 10:54:22'),
(4, 'ismelay', '2017-10-10 11:04:07', '2017-10-10 11:04:07'),
(5, 'masry', '2017-10-10 11:05:36', '2017-10-10 11:05:36'),
(6, 'tersana', '2017-10-10 11:05:44', '2017-10-10 11:05:44'),
(7, 'olemby', '2017-10-10 11:05:51', '2017-10-10 11:05:51'),
(8, 'haras el 7dod', '2017-10-10 11:06:03', '2017-10-10 11:06:03'),
(10, 'El entag el harby', '2017-10-11 19:27:19', '2017-10-11 19:27:19'),
(11, 'tlaa el gesh', '2017-10-11 19:27:41', '2017-10-11 19:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'saeed', 'mohamedsaeedothman@gmail.com', '$2y$10$sNJ8llOFmLfaWuh2Fy.zo.bDXQmz0se/wVbwVbP17rSZ4pbm.50Zi', 1, '431DEnSOdNOuqs8WQaGCd5reveNXmTngcFjNOTcGjUi0IKnHXaFTKgxEC569', '2017-10-08 22:00:00', NULL),
(2, 'amr', 'mohamed', 'amr@gmail.com', '$2y$10$/68mutmpMHzYCaw6gqRz6Onv.wvk/5i1RiL8aA7WSHnEuj/CkrwCO', 2, 'aJl2fddSYDNUceGMedU6Xc1yU3xct2BxojGHiqg70Q1C7HfHjVjW5Sw9KF8o', '2017-10-08 22:00:00', '2017-10-11 19:29:15'),
(3, 'ibrahim', 'hassan', 'ibrahim@gmail.com', '$2y$10$sNJ8llOFmLfaWuh2Fy.zo.bDXQmz0se/wVbwVbP17rSZ4pbm.50Zi', 2, 'GODvlhiu7KooD5csxGmwhma7RIyB0vQhEGLthaMkGbZFByzuAd03TWVbHsQF', '2017-10-08 22:00:00', '2017-10-11 19:29:34'),
(4, 'ahmed', 'saeed', 'ahmed_saeed@gmail.com', '$2y$10$sNJ8llOFmLfaWuh2Fy.zo.bDXQmz0se/wVbwVbP17rSZ4pbm.50Zi', 2, 'GODvlhiu7KooD5csxGmwhma7RIyB0vQhEGLthaMkGbZFByzuAd03TWVbHsQF', '2017-10-08 22:00:00', '2017-10-11 19:29:57'),
(5, 'sameh', 'saeed', 'sameh@gmail.com', '$2y$10$sNJ8llOFmLfaWuh2Fy.zo.bDXQmz0se/wVbwVbP17rSZ4pbm.50Zi', 2, 'GODvlhiu7KooD5csxGmwhma7RIyB0vQhEGLthaMkGbZFByzuAd03TWVbHsQF', '2017-10-08 22:00:00', '2017-10-11 19:30:17'),
(6, 'ahmed', 'twfiq', 'a.twfeq@gmail.com', '$2y$10$LV41AElmztrQtnN/qYvvOOB87R8wRVVw2AY1ypyF9N8JRLR9moNb.', 2, NULL, '2017-10-09 22:53:04', '2017-10-11 19:31:11'),
(7, 'mohamed', 'saeed', 'm.saeed@idco.sa', '$2y$10$IqQaomvAa2EpGSRsalhE3.cz7uZihAvJqZllicomngBaR/XKMIXlO', 2, 'U4ocjScEZRiHpdURAvMyWD0CELzd3aSNS2MjI7YNWVvNKs3HdBLdOLejzqJs', '2017-10-10 02:46:01', '2017-10-11 19:30:54'),
(8, 'mahmoud', 'saeed', 'm.saeed@nilecode.com', '$2y$10$vsDQUq98P/lcwboj4q3ODO28YtCIOBrrJpc4q4T9Yd/3q2H9EhBM6', 2, NULL, '2017-10-10 02:46:17', '2017-10-11 19:30:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_match_id_foreign` (`match_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_first_team_foreign` (`first_team`),
  ADD KEY `matches_second_team_foreign` (`second_team`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_first_team_foreign` FOREIGN KEY (`first_team`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matches_second_team_foreign` FOREIGN KEY (`second_team`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
