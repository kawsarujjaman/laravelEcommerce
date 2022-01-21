-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 03:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `phone`, `address`, `product_title`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'user', '451414', 'k', 'Headphone', '3', '2312', '2022-01-18 11:52:13', '2022-01-18 11:52:13'),
(2, 'user', '451414', 'k', 'Eken e9 camera', '1', '32', '2022-01-18 11:53:11', '2022-01-18 11:53:11'),
(5, 'user', '451414', 'k', 'Eken camera', '3', '231', '2022-01-19 19:13:05', '2022-01-19 19:13:05'),
(6, 'user', '451414', 'k', 'Eken camera Update version', '2', '231', '2022-01-19 19:16:58', '2022-01-19 19:16:58'),
(7, 'user', '451414', 'k', 'Eken camera h917', '2', '231', '2022-01-19 19:18:48', '2022-01-19 19:18:48'),
(8, 'user', '451414', 'k', 'Eken camera Update version', '2', '231', '2022-01-19 19:19:35', '2022-01-19 19:19:35'),
(9, 'user', '451414', 'k', 'Eken camera', '1', '231', '2022-01-19 19:20:22', '2022-01-19 19:20:22'),
(10, 'user', '451414', 'k', 'HP AIO 200 G4 Core i3 10th Gen All in One PC', '2', '55000', '2022-01-20 19:19:41', '2022-01-20 19:19:41');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_16_093655_create_sessions_table', 1),
(7, '2022_01_17_164957_create_products_table', 2),
(8, '2022_01_18_173656_create_carts_table', 3),
(9, '2022_01_21_024205_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `qty`, `productImage`, `created_at`, `updated_at`) VALUES
(2, 'Eken e9 camera', '32', '312', '33', '1642440239.jpg', '2022-01-17 11:23:59', '2022-01-18 09:43:18'),
(3, 'Eken camera', '231', 'Eken Action camera', '30', '1642440417.jpg', '2022-01-17 11:26:57', '2022-01-17 11:26:57'),
(5, 'Beat earbuds', '150', 'Beat earbuds', '30', '1642440506.jpg', '2022-01-17 11:28:26', '2022-01-17 11:28:26'),
(9, 'Headphone', '2312', 'Headphone', '123', '1642441693.jpg', '2022-01-17 11:48:13', '2022-01-17 11:48:13'),
(11, 'Eken camera Update version', '231', 'Eken Action camera', '30', '1642496232.jpg', '2022-01-18 02:57:12', '2022-01-18 02:57:12'),
(12, 'Eken camera Update version', '231', 'Eken Action camera', '30', '1642496249.jpg', '2022-01-18 02:57:29', '2022-01-18 02:57:29'),
(13, 'Eken camera Update', '231', 'Eken Action camera', '30', '1642496407.jpg', '2022-01-18 02:57:58', '2022-01-18 03:00:07'),
(14, 'Eken camera h917', '231', 'Eken Action camera', '30', '1642496351.jpg', '2022-01-18 02:59:11', '2022-01-18 03:00:40'),
(15, 'HP AIO 200 G4 Core i3 10th Gen All in One PC', '55000', 'Basic Information Processor	Intel Core i3-10110U Processor (4M Cache, 2.10 GHz up to 4.10 GHz) RAM	4GB DDR4 2666 MHz', '50', '1642727627.jpg', '2022-01-20 19:13:47', '2022-01-20 19:13:47'),
(16, 'Dell Inspiron 15 3501 Core i3 11th Gen 15.6″ FHD Laptop with Windows 10', '47000', 'Model: Dell Inspiron 15 3501 Intel Core i3-1115G4 Processor (6M Cache, 3.00 GHz up to 4.10 GHz) 4GB DDR4 3200MHz RAM 1TB HDD 15.6″ FHD(1920×1080) Display', '10', '1642727687.jpg', '2022-01-20 19:14:47', '2022-01-20 19:14:47'),
(17, 'HP 15s-du3528TU Core i3 11th Gen 15.6″ FHD Laptop', '51000', 'Model: 15s-du3528TU Intel Core i3-1115G4 Processor (6M Cache, 3.00 GHz up to 4.10 GHz) 4GB DDR4 2666 (2 x 4GB) RAM 1TB 5400RPM SATA HDD 15.6″ FHD (1920 x 1080) IPS Display', '30', '1642727810.jpg', '2022-01-20 19:16:50', '2022-01-20 19:16:50'),
(18, 'Dell Inspiron 15 3505 Ryzen 3 3250U 15.6″ FHD Laptop', '42000', 'Features  Model: Inspiron 15 3505 AMD Ryzen 3 3250U processor(2.6 Ghz up to 3.5 Ghz) 4GB DDR4 3200MHz RAM 1TB HDD 6″ FHD (1920×1080) Display', '5', '1642727887.jpg', '2022-01-20 19:18:07', '2022-01-20 19:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2dMrOjpj2LiLAuLi4JGwcAiwl0O6X9qHJkwKEkqT', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidVZZc0xDUnJReGs2ZXcxZmJoQjFlWUpuUllDMmdnQ3BVZWtXdzE0UCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHpHVHdmMUd3NU84dzMzOFZsaUdUVC4wRWZyZnY3c0tKdE5mSmdRNVNIQkdXdXhlQzNxVldlIjt9', 1642732805),
('z6aa6f9hkiu4un2M1tcUwVaryau4iU1wvCD2rrqX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEJtMUJ1QWdQak5aQXJydHg1RnBORWdEOUdFZDZrUXpmcEZiWVcwNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1642727363);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userType`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Md Kawsarujjaman', 'contact@kawsarujjaman.com', '0', '01717186831', 'rty', NULL, '$2y$10$IfJ4DhdEnUEeBV9SfW5p3e3WVYAoqF5TS0n7o1Di.cuwGsF8hzoqC', NULL, NULL, 'kCur59nNpSo7HBtHBf8jxKrr0WnxbFz8DAyT8N6MMsYUxX0KUPtg2Dj73bo8', NULL, NULL, '2022-01-16 10:37:21', '2022-01-16 10:37:21'),
(2, 'admin', 'kaws01717@gmail.com', '1', '0171841184851', 'dkas', NULL, '$2y$10$6ZL73uGmoyUkQcE8kkY89uiGXozZbJQq74bDRd9pksa3zLVVU/SUC', '', NULL, NULL, NULL, NULL, '2022-01-16 10:38:22', '2022-01-16 11:13:07'),
(3, 'user', 'info@kawsarujjaman.com', '0', '451414', 'k', NULL, '$2y$10$zGTwf1Gw5O8w338VliGTT.0Efrfv7sKJtNfJgQ5SHBGWuxeC3qVWe', NULL, NULL, NULL, NULL, NULL, '2022-01-16 11:11:03', '2022-01-16 11:11:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
