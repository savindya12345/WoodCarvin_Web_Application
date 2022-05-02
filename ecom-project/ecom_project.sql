-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 02:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2022_04_27_191057_create_users_table', 1),
(3, '2022_04_29_055932_create_products_table', 2),
(4, '2022_04_30_134126_create_cart_table', 3),
(5, '2022_05_01_125836_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pending', 'cash', 'pending', 'sarasavi kj jashjh', NULL, NULL),
(2, 2, 1, 'pending', 'cash', 'pending', 'sarasavi kj jashjh', NULL, NULL),
(3, 4, 1, 'pending', 'cash', 'pending', 'sarasavi kj jashjh', NULL, NULL),
(4, 1, 1, 'pending', 'cash', 'pending', 'sarasavi kj jashjh', NULL, NULL),
(5, 2, 1, 'pending', 'cash', 'pending', 'sarasavi kj jashjh', NULL, NULL),
(6, 4, 1, 'pending', 'cash', 'pending', 'sarasavi kj jashjh', NULL, NULL),
(7, 3, 1, 'pending', 'cash', 'pending', 'dd', NULL, NULL),
(8, 4, 2, 'pending', 'cash', 'pending', 'anuradhapura', NULL, NULL),
(9, 3, 2, 'pending', 'cash', 'pending', 'anu', NULL, NULL),
(10, 17, 5, 'pending', 'cash', 'pending', 'Anuradhapura', NULL, NULL),
(11, 7, 5, 'pending', 'cash', 'pending', 'Mathara', NULL, NULL);

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
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Category`, `Description`, `Price`, `gallary`, `created_at`, `updated_at`) VALUES
(1, 'Pendent 01', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1000', 'img/pendent 1.jpg', NULL, NULL),
(2, 'Ring 01', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/ring 1.jpg', NULL, NULL),
(3, 'Key Tag 01', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '1250', 'img/keytag 1.jpg', NULL, NULL),
(4, 'Braslet 01 ', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/braslet 1.jpg', NULL, NULL),
(5, 'Ring 02', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/ring 2.jpg', NULL, NULL),
(6, 'Pendent 02', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1750', 'img/pendent 2.jpg', NULL, NULL),
(7, 'Keytag 02', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/keytag 2.jpg', NULL, NULL),
(8, 'Braslet 02', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/braslet 2.jpg', NULL, NULL),
(9, 'Keytag 03', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/keytag 3.jpg', NULL, NULL),
(10, 'Ring 03', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/ring 3.jpg', NULL, NULL),
(11, 'Braslet 03', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/braslet 3.jpg', NULL, NULL),
(12, 'Pendent 03', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1750', 'img/pendent 3.jpg', NULL, NULL),
(13, 'Ring 04', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/ring 4.jpg', NULL, NULL),
(14, 'Pendent 04', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1700', 'img/pendent 4.jpg', NULL, NULL),
(15, 'Keytag 04', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/keytag 4.jpg', NULL, NULL),
(16, 'Braslet 04', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/braslet 4.jpg', NULL, NULL),
(17, 'Keytag 05', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/keytag 5.jpg', NULL, NULL),
(18, 'Ring 05', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1100', 'img/ring 5.jpg', NULL, NULL),
(19, 'Braslet 05', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1200', 'img/braslet 5.jpg', NULL, NULL),
(20, 'Pendent 05', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1450', 'img/pendent 5.jpg', NULL, NULL),
(21, 'Ring 06', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/ring 6.jpg', NULL, NULL),
(22, 'Pendent 06', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1700', 'img/pendent 6.jpg', NULL, NULL),
(23, 'Keytag 06', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/keytag 6.jpg', NULL, NULL),
(24, 'Braslet 06', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1150', 'img/braslet 6.jpg', NULL, NULL),
(25, 'Keytag 07', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '1000', 'img/keytag 7.jpg', NULL, NULL),
(26, 'Ring 07', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1300', 'img/ring 7.jpg', NULL, NULL),
(27, 'Pendent 07', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1450', 'img/pendent 7.jpg', NULL, NULL),
(28, 'Braslet 07', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1200', 'img/braslet 7.jpg', NULL, NULL),
(29, 'Ring 08', 'Ring', 'Rosewood Turquoise Wooden Ring Bentwood', '1500', 'img/ring 8.jpg', NULL, NULL),
(30, 'Pendent 08', 'Pendent', 'Rosewood Turquoise Wooden Ring Bentwood', '1700', 'img/pendent 8.jpg', NULL, NULL),
(31, 'Keytag 08', 'Keytag', 'Rosewood Turquoise Wooden Ring Bentwood', '2000', 'img/keytag 8.jpg', NULL, NULL),
(32, 'Braslet 08', 'Braslet', 'Rosewood Turquoise Wooden Ring Bentwood', '1150', 'img/braslet 8.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'anil', 'anil@gmail.com', '$2y$10$8O1nrskWM7VosQSurceaYOhb16z.94hf/TTPkM/oRXdIbMPfyNqxK', NULL, NULL),
(2, 'Sunil Perera', 'sunil@gmail.com', '$2y$10$m7n02/G08j7CcZ8Vj0BU7.CeRYztXJdeY3UQUVSQnfgrgOXXwOdVC', NULL, NULL),
(3, 'saman', 'saman@gmail.com', '$2y$10$k3nKeVIaI33r8NgkMwi3wOKx2Q0MixjyyXRfi56hh1TRNz4Jfk7Wq', '2022-05-01 13:56:53', '2022-05-01 13:56:53'),
(4, 'samani', 'samani@gmail.com', '$2y$10$aMrTveZ0krW4r7T/cHDtrOVzlSMFqtIp//jM/hLD.mCF5S6xVLtF2', '2022-05-01 13:59:23', '2022-05-01 13:59:23'),
(5, 'sameera', 'sameera@gmail.com', '$2y$10$.rPFc7SOjBMPji5ED9xgd.QL1juQmIWOrVYfSqIuaX5AmQ6TA0lRO', '2022-05-01 22:34:20', '2022-05-01 22:34:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
