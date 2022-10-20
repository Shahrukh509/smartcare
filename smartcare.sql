-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 04:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nature_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nature_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Relationships', 'There are four basic types of relationships: family relationships, friendships, acquaintanceships, and romantic relationships. Other more nuanced types of relationships might include work relationships, teacher/student relationships, and community or group relationships', '2022-03-29 06:29:11', '2022-03-29 06:29:11'),
(4, 1, 'Soul', 'Soul is the main lorem ispum.', '2022-03-29 07:58:13', '2022-03-29 07:58:13'),
(5, 2, 'Ditch', 'Hurting anyone always a bad thing', '2022-03-29 07:58:52', '2022-03-29 07:58:52'),
(6, 2, 'Devil', 'lorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum lorem', '2022-03-29 08:40:43', '2022-03-29 08:40:43'),
(7, 2, 'Divorce', 'lorem divorce is bad....', '2022-03-31 09:43:00', '2022-03-31 09:43:00'),
(8, 2, 'Flirt', 'Flirting with anyone can be harmful and can lead to some serious cases. So keep yourself out of such things and lead a happy life', '2022-04-05 04:25:08', '2022-04-05 04:25:08');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2019_08_19_000000_create_failed_jobs_table', 2),
(11, '2022_03_28_122243_create_natures_table', 3),
(12, '2022_03_28_122438_create_categories_table', 4),
(13, '2022_03_28_122524_create_sub_categories_table', 5),
(14, '2022_03_28_150723_create_sub_category_data_table', 6),
(15, '2022_04_01_100035_create_survey_questions_table', 7),
(16, '2022_04_08_093302_create_user_survey_data_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `natures`
--

CREATE TABLE `natures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `natures`
--

INSERT INTO `natures` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'pros', '', '2022-03-29 10:50:20', '2022-03-29 10:50:20'),
(2, 'cons', '', '2022-03-29 10:50:20', '2022-03-29 10:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amar@gmail.com', '$2y$10$PwKdwRINmR.XxntQHraZ2uYUcHXoLsrsIqc/cWOYDTCVaXbmRbFR6', '2022-04-08 02:26:57');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 5, 'auth_token', '505b1855e80daf977ef6e407cb93553555b88362d9898f5c08072da40dde4d6b', '[\"*\"]', NULL, '2022-04-06 03:00:01', '2022-04-06 03:00:01'),
(2, 'App\\Models\\User', 5, 'auth_token', 'ea1f49160e108694c343f9a6ec476681ed9197644e35b550e750b70e46db92ab', '[\"*\"]', NULL, '2022-04-06 03:07:59', '2022-04-06 03:07:59'),
(3, 'App\\Models\\User', 5, 'auth_token', '9c77ff0bb8e73fd021b07752f4aaf84733297daa0e2b6f34bacd30733324dbee', '[\"*\"]', NULL, '2022-04-06 03:11:44', '2022-04-06 03:11:44'),
(4, 'App\\Models\\User', 5, 'auth_token', '1f9068578bc446e9ec0f5c03cbe408d36c88bcd4ebee796bb6d555c81eb86420', '[\"*\"]', NULL, '2022-04-06 03:14:39', '2022-04-06 03:14:39'),
(5, 'App\\Models\\User', 5, 'auth_token', '7b2a41cdd072c648f8cbf1d6765005984df8e9fe01e1fb4781c336088a7e68b7', '[\"*\"]', NULL, '2022-04-06 04:05:23', '2022-04-06 04:05:23'),
(6, 'App\\Models\\User', 6, 'auth_token', 'ad76d19885de9770f07fbb50767df62412166b54c51635d6652d6dc2f983e15f', '[\"*\"]', NULL, '2022-04-06 04:12:06', '2022-04-06 04:12:06'),
(7, 'App\\Models\\User', 6, 'auth_token', '82477bd93b913c27a8414b21993a38d594d9bc0b76c107547f3622b9fedcae77', '[\"*\"]', NULL, '2022-04-06 04:12:36', '2022-04-06 04:12:36'),
(8, 'App\\Models\\User', 6, 'auth_token', '13935b753b745a3ff73d7eb5bb8db294441c9a5dd15525e77e8a8d498aaeb761', '[\"*\"]', NULL, '2022-04-06 04:12:56', '2022-04-06 04:12:56'),
(9, 'App\\Models\\User', 6, 'auth_token', 'aabaf9c13dc4dc5f69f9dec5bba7978da92221dd5363e2d4bc24666312fc957f', '[\"*\"]', NULL, '2022-04-07 01:35:21', '2022-04-07 01:35:21'),
(10, 'App\\Models\\User', 7, 'auth_token', '4b84ec7f70e5a69bc81fb9efcbeababc4bb2d8ca8c382059708a9152705b81c0', '[\"*\"]', NULL, '2022-04-07 02:04:32', '2022-04-07 02:04:32'),
(11, 'App\\Models\\User', 7, 'auth_token', 'e92d21cbc7ac6d67f1556ee188151fcba64be6b0dd36012543a56711b3f41584', '[\"*\"]', NULL, '2022-04-07 02:06:19', '2022-04-07 02:06:19'),
(12, 'App\\Models\\User', 8, 'auth_token', 'fef5db9c858cc7b3542f28353b18595b0357a232539943cbacb1496e7bb7cff7', '[\"*\"]', NULL, '2022-04-08 02:26:06', '2022-04-08 02:26:06'),
(13, 'App\\Models\\User', 8, 'auth_token', '5634e7ba5dd5c3771845a16014b7aa6ddb0ab37885ec8a858e161061b56cec94', '[\"*\"]', NULL, '2022-04-08 02:26:22', '2022-04-08 02:26:22'),
(14, 'App\\Models\\User', 9, 'auth_token', '9ee026861f717f5b5d67e1bbab3273ba79d9b67181bb3705e0ce449655eba411', '[\"*\"]', NULL, '2022-04-08 05:25:09', '2022-04-08 05:25:09'),
(15, 'App\\Models\\User', 9, 'auth_token', '86cac7ec0148071431bba31a41f6d333d3d6fcc748feea97ac74648b2e9e8f60', '[\"*\"]', NULL, '2022-04-08 05:29:24', '2022-04-08 05:29:24'),
(16, 'App\\Models\\User', 9, 'auth_token', '1a07f57af7bacbb69e886bca2b446ee1552e49ddf578d8e115b9d760a7e7ddf2', '[\"*\"]', NULL, '2022-04-08 05:44:19', '2022-04-08 05:44:19'),
(17, 'App\\Models\\User', 9, 'auth_token', '6722e67ad747b6c855f730eb2546496f76b48f615cc53599fb958c34d2ec9eb7', '[\"*\"]', NULL, '2022-04-08 05:46:37', '2022-04-08 05:46:37'),
(18, 'App\\Models\\User', 9, 'auth_token', '89a1217758398af53e5566edd5ffa7db6da46109af012222743a978e891409f6', '[\"*\"]', NULL, '2022-04-08 05:47:06', '2022-04-08 05:47:06'),
(19, 'App\\Models\\User', 9, 'auth_token', 'ee850a0f1625a3aa60c65e1ef5bb3773c14b82be8423cc654ae2edbe738a0f62', '[\"*\"]', NULL, '2022-04-08 06:21:54', '2022-04-08 06:21:54'),
(20, 'App\\Models\\User', 9, 'auth_token', '54ac921e47bc95a919139370d64bdfec6a1bcd5a8d7e52ed3d20f07f72af6630', '[\"*\"]', NULL, '2022-04-08 06:27:50', '2022-04-08 06:27:50'),
(21, 'App\\Models\\User', 10, 'auth_token', '085cfca59a5b1f7bb6c3e8fb3305900b4f0a97a172989dbe051bd51a9163399a', '[\"*\"]', NULL, '2022-04-11 01:30:26', '2022-04-11 01:30:26'),
(22, 'App\\Models\\User', 10, 'auth_token', 'e46a665570d6869f91d4a2c214b42727d019ae54872d728bb8b30691d7acb066', '[\"*\"]', '2022-04-11 02:16:11', '2022-04-11 01:40:18', '2022-04-11 02:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Social Support', 'lorem ispum ispum lorem lorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum lorem', '2022-03-29 08:30:44', '2022-03-29 08:30:44'),
(3, 1, 'Play', 'lorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum loremlorem ispum ispum lorem', '2022-03-29 08:38:05', '2022-04-05 04:01:39'),
(4, 6, 'abcdw', 'lorem ispum ispum loremlorem ispum ispum lorem', '2022-03-29 08:41:13', '2022-03-29 08:41:13'),
(5, 1, 'Stay Away', 'loremispumloremispumloremispumloremispumloremispum', '2022-03-30 08:12:16', '2022-03-30 08:12:16'),
(6, 7, 'Uncontested Divorce', 'In terms of dealing with the court process, the path that normally generates the least amount of stress is an uncontested divorce. That\'s one in which you and your spouse settle up-front all your differences on issues such as custody and visitation (parenting time), child support, alimony, and division of property. You\'ll then incorporate the terms of your settlement in a written \"property settlement agreement\" (sometimes called a \"separation agreement\").  Once your case is settled, you can file for divorce with the court. Courts almost invariably fast-track these types of cases, so you can get divorced in a relatively short period of time. In some states, you many not even have to make a court appearance, but rather can file an affidavit (sworn statement) with the court clerk.', '2022-03-31 09:44:36', '2022-03-31 09:44:36'),
(7, 7, 'Default Divorce', 'A default divorce occurs when you\'ve filed for divorce, and your spouse doesn\'t respond. You\'d likely see this, for example, if your spouse has left for parts unknown and can\'t be found.  Assuming you\'ve complied with the court\'s rules and regulations, a judge can grant the divorce despite the fact your spouse hasn\'t participated in the court proceedings. On its face, this may seem like the ideal situation. No one is there to contest what you\'re asking the court to give you. But be aware that there are pro and cons to a default divorce.', '2022-03-31 09:45:14', '2022-03-31 09:45:14'),
(8, 5, 'anyone', 'anyone lorem ispumanyone lorem ispumanyone lorem ispumanyone lorem ispumanyone lorem ispumanyone lorem ispumanyone lorem ispum', '2022-04-05 03:54:38', '2022-04-05 03:54:38'),
(9, 8, 'Communicative flirting', 'Flirting. Flirting is defined as “messages and behaviors perceived by a recipient as purposefully attempting to gain his or her attention and stimulate his or her interest in the sender, while simultaneously being perceived as intentionally revealing an affiliative desire”', '2022-04-05 04:27:06', '2022-04-05 04:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_data`
--

CREATE TABLE `sub_category_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category_data`
--

INSERT INTO `sub_category_data` (`id`, `sub_category_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 6, 'How do you see this divorce has impacted on society?', 'How do you see this divorce has impacted on society?', '2022-04-01 04:55:36', '2022-04-01 04:55:36'),
(2, 3, 'Play is play vital role in the development and healthy impact on society', 'lorem ispum ispum loremlorem ispum ispum lorem', '2022-04-04 02:54:44', '2022-04-05 04:23:02'),
(3, 9, 'Flirting is bad thing', 'Flirting play bad role in society and leads to some serious issue. One who flirts does not think it\'s seriousness and does so for his/her happiness but should take care about others too', '2022-04-05 04:29:21', '2022-04-05 04:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_cat_data_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`id`, `sub_cat_data_id`, `question`, `option1`, `option2`, `option3`, `option4`, `created_at`, `updated_at`) VALUES
(1, 1, 'Do you think divorce is increasing rapidly?', 'yes', 'no', 'may be', 'i don\'t think so', '2022-04-06 02:00:59', '2022-04-06 02:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 2,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `password`, `user_type`, `user_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shahrukh', 'srkshah1997@gmail.com', NULL, NULL, '$2y$10$eiufh6LyJGH/NJc4C37J5OLM7H0Ui9i0rt8TFpJU87nR0t9z1j0QG', 1, 1, NULL, '2022-03-29 08:33:31', '2022-03-29 08:35:18'),
(2, 'Arsalan Ahmed', 'Arsalan1@gmail.com', NULL, NULL, '$2y$10$2JmPng/jHEDAfo1YDwcpg.6tsnzRjAqvdyA9qv7R.o79Q2uSz7vUm', 2, 1, NULL, '2022-03-29 03:36:15', '2022-03-29 03:36:15'),
(3, 'Ahsan Abid', 'ahsan@gmail.com', NULL, NULL, '$2y$10$2IwRjBO7f5UrSfQli6NAJeBSHxYhXdCInDBH6BkV8yWdihnM7kOpm', 2, 2, NULL, '2022-03-29 03:38:31', '2022-03-29 03:38:31'),
(4, 'Mohit Kumar', 'mohit@gmail.com', NULL, NULL, '$2y$10$Itq2PB/suxfr.f7TtMFHY.Jkv.uBZ.bKdxcyIzDGhLHwvjrO89zYa', 2, 3, NULL, '2022-03-29 03:38:56', '2022-03-29 03:38:56'),
(5, 'abbas', 'abbas@gmail.com', NULL, NULL, '$2y$10$yCy9UgxhX.xtEHPqwwtpK.de6KTB.RXOyuLw6h7JzugE4v052MYBu', 2, 1, NULL, '2022-04-06 03:00:01', '2022-04-06 03:00:01'),
(6, 'zafar', 'zafar@gmail.com', NULL, NULL, '$2y$10$kjHW8GSf4LRzo6KGl5oVOOJcgSpdABvnXJC6Di/38aGgg62Y/Rkda', 2, 1, NULL, '2022-04-06 04:12:06', '2022-04-06 04:12:06'),
(7, 'Shahrukh Siddiqui', 'srkshah1998@gmail.com', NULL, NULL, '$2y$10$8/Kjz/h0R0I4oCchAYC7bOp5i9TUsNhXn9zmt1AofbqUTHPTtfWOS', 2, 1, NULL, '2022-04-07 02:04:32', '2022-04-07 06:58:34'),
(8, 'amar', 'amar@gmail.com', NULL, NULL, '$2y$10$t.ISmtmvu0Bo4z7mSFY0LOB4KzC0bRK5/sJdpBpbEu5OGMMTG7bqC', 2, 1, NULL, '2022-04-08 02:26:06', '2022-04-08 02:26:06'),
(9, 'mohit', 'mohit1@gmail.com', NULL, NULL, '$2y$10$qlyao9xK7DPhsXBDTfSLkeeBQ9eu5z57izAtwUl59ZAN14E1EEmCe', 2, 1, NULL, '2022-04-08 05:25:09', '2022-04-08 05:25:09'),
(10, 'rashid', 'rashid@gmail.com', NULL, 'http://localhost/smartcare/public/user_image/dummy.png', '$2y$10$nbI8SaphgY7nXyvTAf1SY.a3wBMAJGyBiFwbVNKtEHBE/f5/L0ncy', 2, 1, NULL, '2022-04-11 01:30:26', '2022-04-11 02:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_survey_data`
--

CREATE TABLE `user_survey_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `survey_question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_nature_id_foreign` (`nature_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natures`
--
ALTER TABLE `natures`
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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `sub_category_data`
--
ALTER TABLE `sub_category_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_data_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `survey_questions_sub_cat_data_id_foreign` (`sub_cat_data_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_survey_data`
--
ALTER TABLE `user_survey_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_survey_data_user_id_foreign` (`user_id`),
  ADD KEY `user_survey_data_survey_question_id_foreign` (`survey_question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `natures`
--
ALTER TABLE `natures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_category_data`
--
ALTER TABLE `sub_category_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_survey_data`
--
ALTER TABLE `user_survey_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_nature_id_foreign` FOREIGN KEY (`nature_id`) REFERENCES `natures` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_category_data`
--
ALTER TABLE `sub_category_data`
  ADD CONSTRAINT `sub_category_data_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD CONSTRAINT `survey_questions_sub_cat_data_id_foreign` FOREIGN KEY (`sub_cat_data_id`) REFERENCES `sub_category_data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_survey_data`
--
ALTER TABLE `user_survey_data`
  ADD CONSTRAINT `user_survey_data_survey_question_id_foreign` FOREIGN KEY (`survey_question_id`) REFERENCES `survey_questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_survey_data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
