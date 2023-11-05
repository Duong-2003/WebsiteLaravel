-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 03:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table_student_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_02_093950_create_users_table', 1),
(3, '2023_11_03_122329_create_products_table', 2),
(4, '2023_11_03_124301_create_categories_table', 3),
(5, '2023_11_03_124310_create_orders_table', 3),
(6, '2023_11_03_124940_create_products_table', 4),
(7, '2023_11_03_125039_create_order_items_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` enum('pending','completed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dươngg', 'admin@gmail.com', NULL, '$2y$12$U3oGnZOqCLZirlonR/ELyOjGfs.UBvtsMnr1mBzHc22p1fL/3iNx2', NULL, '2023-11-02 09:57:46', '2023-11-02 09:57:46'),
(2, 'Vở', 'Admin1@gmail.com', NULL, '$2y$12$w5n/TfplXxJNZ7oW5wnSw.fEUmuz68PRuao0yvlAicq6wIGQF4G2O', 'TYOHMYKjREc8PLuQZNnoOBJTpUimL7vbk1Bp1vnX4Laqc4ifUIYt8cvUbSpw', '2023-11-02 04:06:23', '2023-11-02 04:06:23'),
(3, 'Sách giáo khoa', 'Admin2@gmail.com', NULL, '$2y$12$UAIcPhd6JWtiFfwO5HRhI.VIs/B/OZ5KAHlFf3S5fWqBJHhP/26JO', NULL, '2023-11-02 05:26:09', '2023-11-02 05:26:09'),
(4, 'admin', 'Admin3@gmail.com', NULL, '$2y$12$pf/4aUXgJa0F6gV9gGoyLu/TY8NtzOXBJdhdYH6EnBjN403cFfiq2', NULL, '2023-11-02 07:36:28', '2023-11-02 07:36:28'),
(6, 'Dươnggg', 'admin4@gmail.com', NULL, '$2y$12$jlBDPKSEO0bEU6aXhGq9Luuig9/gYP/p467CWZH.3WM0ohoo.KH.e', NULL, '2023-11-03 09:36:14', '2023-11-03 09:36:14'),
(7, 'admin1', 'admin5@gmail.com', NULL, '$2y$12$WmSOo6Uv7N3AMIfWb3C9VO7PG.FKuWekQdM01C3EqsSMfzvfBjevS', NULL, '2023-11-03 09:38:49', '2023-11-03 09:38:49'),
(9, 'admin1', 'admin6@gmail.com', NULL, '$2y$12$6uDK7cedsk2dvFh.Ld.THeBeTA3jM4nrWeBx8ikAlkd.xwSa2EiUi', NULL, '2023-11-03 09:39:47', '2023-11-03 09:39:47'),
(10, 'Dươnggg', 'anhtustyle31200331@gmail.com', NULL, '$2y$12$MFjqQd8SqgpmtKNnXEM3Cubc/aaEKk/qcjcm.MvxZ27muNfCL3yXa', NULL, '2023-11-05 06:27:22', '2023-11-05 06:27:22'),
(11, 'Dươnggg', 'anhtustyle3331200331@gmail.com', NULL, '$2y$12$fiNMn.gQJXlLxS6vrAVyFuzYnX4VDZrqw0fS5P9i0w7DvlGrYwhBq', NULL, '2023-11-05 06:27:35', '2023-11-05 06:27:35'),
(12, 'abc', 'Admin2000@gmail.com', NULL, '$2y$12$bGcJ23pm2gT1UdPxFUwQIuhVL8BnPPMdaELTKkX4ygmlELL4YEStq', NULL, '2023-11-05 06:28:05', '2023-11-05 06:28:05'),
(15, 'admin10', 'Admin20000@gmail.com', NULL, '$2y$12$Y.szYnPuut8gzCzrFMQTV.PSkk.5plGjuttvQPRBw2hyQq4Fp/bzy', NULL, '2023-11-05 06:32:54', '2023-11-05 06:32:54'),
(17, 'Vở', 'Admin2000000@gmail.com', NULL, '$2y$12$9ORoske0A7NIXzg3wRfXoOZnS9hkCMZzavFcpaFcs12U2bxBFHJ5W', NULL, '2023-11-05 06:54:17', '2023-11-05 06:54:17'),
(18, 'Vở', 'Admin20000000@gmail.com', NULL, '$2y$12$H7mcaykzwRdKWaEIZNODYu0cwGIU6tYW34p48mKhRpKoH41iiFNy2', NULL, '2023-11-05 06:55:47', '2023-11-05 06:55:47'),
(19, 'Sách giáo khoa', 'Admin122@gmail.com', NULL, '$2y$12$VPob2bTcCB3lPSw.IPFHyOA2wrfz.1yZfvbljfmvQSP22eh8RhOPK', NULL, '2023-11-05 06:56:38', '2023-11-05 06:56:38'),
(20, 'Sách giáo khoa', 'Admin1222@gmail.com', NULL, '$2y$12$8/nD/LANw6TbDdFTyndAKO0BrFUKf436m.EkN2l7s0Y2gZbeUmxRu', NULL, '2023-11-05 06:57:10', '2023-11-05 06:57:10'),
(21, 'Dươnggg', 'admin3333@gmail.com', NULL, '$2y$12$33MGsMJjm06iT9XUIdHzneIy8hvSVYWC7AKBE6sHaec7tU3XsBng.', NULL, '2023-11-05 07:01:20', '2023-11-05 07:01:20'),
(22, 'Dươnggg', 'admin33333@gmail.com', NULL, '$2y$12$K3mltd9COs/1SvwFjx6D.OymuN33TqTbiarh2HiAzb0SqfOBE/D/W', NULL, '2023-11-05 07:03:04', '2023-11-05 07:03:04'),
(24, 'Dươnggg', 'admin33333444@gmail.com', NULL, '$2y$12$UTbbSEFJ7zzWP1gRynKcEexfHZrs940XguqtsuenyMPy7AkCpTg7y', NULL, '2023-11-05 07:03:20', '2023-11-05 07:03:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
