-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3300
-- Généré le : dim. 19 fév. 2023 à 14:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfa_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`, `updated_at`) VALUES
(118, '2', '6', '5', '2022-10-22 07:07:22', '2022-10-27 10:15:41');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descrip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, 'vetement homme', 'vetement', 'la simplicité fait le baute', 0, 1, '1667906950.png', 'féminins & masculin', 'hôte qualité', 'matière en cotons', '2022-08-03 12:53:27', '2022-11-08 10:29:10'),
(3, 'mode enfant', 'mode  enfant', 'conforte bal & fashion model for your Childe', 0, 1, '1659538716.jpg', 'fashion look', 'conforte bal & fashion model for your Childe', '3 années jusqu\'à 15  ânes', '2022-08-03 12:58:36', '2022-08-03 12:58:36'),
(4, 'Cigarette Electronique', 'Electronique', 'best qualité & marketé', 0, 1, '1659539076.jpeg', 'tous c est qui est électronique', 'tous c est qui est électronique', 'tous c est qui est électronique', '2022-08-03 13:04:36', '2022-08-03 13:04:36'),
(5, 'Chaussures', 'chaussures', 'Une chaussure de qualité détient une semelle de propreté en cuir, qui a les meilleures propriétés d\'absorption et de désorption de la sueur. Une chaussure de qualité est également assemblée selon certaines techniques de soudure (cousu blake, cousu goodyear, cousu norvégien, cousu sandalette,…).', 0, 1, '1659539307.webp', 'Une chaussure de qualité détient une semelle de propreté en cuir, qui a les meilleures propriétés d\'absorption et de désorption de la sueur.', 'Une chaussure de qualité détient une semelle de propreté en cuir, qui a les meilleures propriétés d\'absorption et de désorption de la sueur.', 'Une chaussure de qualité est également assemblée selon certaines techniques de soudure (cousu blake, cousu goodyear, cousu norvégien, cousu sandalette,…).', '2022-08-03 13:08:27', '2022-08-03 13:08:27'),
(9, 'saber', 'FGH', 'azedfghjklm', 0, 1, '1667899130.jpg', 'sdfghjk,;', 'edrtyuiop', 'sdfghjk;zertyhjkl', '2022-11-08 08:18:50', '2022-11-08 08:18:50');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_07_22_195457_create_categories_table', 1),
(5, '2022_07_30_115807_create_products_table', 1),
(6, '2022_08_03_120550_create_carts_table', 1),
(7, '2022_08_04_200350_create_order_items_table', 2),
(8, '2022_08_08_083714_create_orders_table', 2),
(9, '2022_08_08_102105_create_order_items_table', 3),
(10, '2022_08_09_190553_create_wishlists_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `messege` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trancking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `address1`, `address2`, `phone`, `city`, `state`, `country`, `pincode`, `total_price`, `status`, `messege`, `trancking_no`, `created_at`, `updated_at`) VALUES
(24, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '50', 1, NULL, 'sharma1310', '2022-08-09 13:59:47', '2022-08-09 14:27:23'),
(25, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '50', 1, NULL, 'sharma6742', '2022-08-09 14:00:48', '2022-08-10 09:07:36'),
(26, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '30', 1, NULL, 'sharma2144', '2022-08-09 14:28:15', '2022-08-09 14:28:52'),
(27, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '2570', 1, NULL, 'sharma5515', '2022-08-09 14:30:59', '2022-08-09 14:38:39'),
(28, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '0', 1, NULL, 'sharma1414', '2022-08-09 14:37:50', '2022-09-21 11:29:22'),
(29, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '30', 1, NULL, 'sharma9227', '2022-08-09 14:38:08', '2022-09-21 11:45:13'),
(30, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '10', 1, NULL, 'sharma2882', '2022-08-10 08:51:55', '2022-08-11 12:25:30'),
(31, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '0', 0, NULL, 'sharma7086', '2022-08-10 09:03:22', '2022-08-10 09:03:22'),
(32, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '2040', 1, NULL, 'sharma6094', '2022-08-10 13:23:45', '2022-10-02 07:10:02'),
(33, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '50', 0, NULL, 'sharma5957', '2022-08-11 08:32:17', '2022-08-11 08:32:17'),
(34, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '2629', 0, NULL, 'sharma2463', '2022-08-11 08:39:12', '2022-08-11 08:39:12'),
(35, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '89', 1, NULL, 'sharma9120', '2022-08-11 09:48:24', '2022-09-26 15:19:41'),
(36, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '10', 1, NULL, 'sharma3654', '2022-08-11 09:49:35', '2022-08-11 09:53:06'),
(37, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '50', 1, NULL, 'sharma7903', '2022-08-11 12:19:10', '2022-08-11 12:22:44'),
(38, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '2620', 0, NULL, 'sharma7195', '2022-08-11 12:27:47', '2022-08-11 12:27:47'),
(39, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '3000', 0, NULL, 'sharma2475', '2022-09-21 11:38:55', '2022-09-21 11:38:55'),
(40, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '3089', 1, NULL, 'sharma7617', '2022-09-26 16:03:48', '2022-09-26 16:05:06'),
(41, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '99', 1, NULL, 'sharma7347', '2022-10-17 20:50:28', '2022-10-17 20:55:28'),
(42, '2', 'Rahma', 'mgannem', 'mganemrahma@hotmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '456672', '10', 1, NULL, 'sharma7790', '2022-10-22 07:08:51', '2022-10-22 07:11:03'),
(43, '2', 'Rahma', 'mgannem', 'mganemrahma@hotmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '123456789', '10', 1, NULL, 'sharma7294', '2022-10-22 07:09:09', '2022-10-27 10:22:10'),
(44, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '30', 0, NULL, 'sharma7283', '2022-10-22 15:01:27', '2022-10-22 15:01:27'),
(45, '2', 'Rahma', 'mgannem', 'mganemrahma@hotmail.com', 'moknin', 'moknin', '24543654', 'tunisi', 'yes', 'tunis', '23456', '10', 0, NULL, 'sharma5979', '2022-10-27 10:16:51', '2022-10-27 10:16:51'),
(46, '2', 'rahma', 'mgannem', 'mganemrahma@hotmail.com', 'moknin', 'moknin', '24543654', 'tunisi', 'yes', 'tunis', '23456', '10', 0, NULL, 'sharma1592', '2022-10-27 10:17:07', '2022-10-27 10:17:07'),
(47, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '111', 1, NULL, 'sharma6961', '2022-10-29 20:09:54', '2022-10-29 20:14:06'),
(48, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '111', 0, NULL, 'sharma2604', '2022-11-06 10:32:47', '2022-11-06 10:32:47'),
(49, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '29', 0, NULL, 'sharma9573', '2022-11-06 11:40:32', '2022-11-06 11:40:32'),
(50, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '52', 1, NULL, 'sharma8935', '2022-11-07 12:07:00', '2022-11-07 12:10:38'),
(51, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '0', 0, NULL, 'sharma7553', '2022-11-08 06:26:16', '2022-11-08 06:26:16'),
(52, '1', 'saber', 'mgannem', 'sabermgannem275222@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'no', 'tunis', '287662', '10', 1, NULL, 'sharma6826', '2022-11-08 08:15:21', '2022-11-08 08:16:37'),
(53, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '50', 1, NULL, 'sharma6382', '2022-11-08 10:26:37', '2022-11-08 10:31:25'),
(54, '4', 'hazem', 'mgannem', 'hazemmgannem@gmail.com', 'moknin', 'moknin', '28126752', 'monastir', 'yes', 'tunis', '456672', '89', 0, NULL, 'sharma7458', '2022-11-09 19:00:09', '2022-11-09 19:00:09');

-- --------------------------------------------------------

--
-- Structure de la table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(19, '24', '4', '3', '50', '2022-08-09 13:59:47', '2022-08-09 13:59:47'),
(20, '25', '4', '5', '50', '2022-08-09 14:00:48', '2022-08-09 14:00:48'),
(21, '26', '9', '1', '30', '2022-08-09 14:28:15', '2022-08-09 14:28:15'),
(22, '27', '3', '1', '2570', '2022-08-09 14:30:59', '2022-08-09 14:30:59'),
(23, '29', '9', '1', '30', '2022-08-09 14:38:08', '2022-08-09 14:38:08'),
(24, '30', '6', '1', '10', '2022-08-10 08:51:55', '2022-08-10 08:51:55'),
(25, '32', '9', '1', '30', '2022-08-10 13:23:45', '2022-08-10 13:23:45'),
(26, '32', '6', '1', '10', '2022-08-10 13:23:45', '2022-08-10 13:23:45'),
(27, '32', '2', '2', '2000', '2022-08-10 13:23:45', '2022-08-10 13:23:45'),
(28, '33', '4', '1', '50', '2022-08-11 08:32:17', '2022-08-11 08:32:17'),
(29, '34', '3', '1', '2570', '2022-08-11 08:39:12', '2022-08-11 08:39:12'),
(30, '34', '9', '1', '30', '2022-08-11 08:39:12', '2022-08-11 08:39:12'),
(31, '34', '8', '1', '29', '2022-08-11 08:39:12', '2022-08-11 08:39:12'),
(32, '35', '10', '10', '89', '2022-08-11 09:48:24', '2022-08-11 09:48:24'),
(33, '36', '6', '1', '10', '2022-08-11 09:49:35', '2022-08-11 09:49:35'),
(34, '37', '4', '2', '50', '2022-08-11 12:19:10', '2022-08-11 12:19:10'),
(35, '38', '4', '1', '50', '2022-08-11 12:27:47', '2022-08-11 12:27:47'),
(36, '38', '3', '1', '2570', '2022-08-11 12:27:47', '2022-08-11 12:27:47'),
(37, '39', '2', '2', '3000', '2022-09-21 11:38:55', '2022-09-21 11:38:55'),
(38, '40', '10', '10', '89', '2022-09-26 16:03:48', '2022-09-26 16:03:48'),
(39, '40', '2', '1', '3000', '2022-09-26 16:03:48', '2022-09-26 16:03:48'),
(40, '41', '6', '5', '10', '2022-10-17 20:50:28', '2022-10-17 20:50:28'),
(41, '41', '10', '4', '89', '2022-10-17 20:50:28', '2022-10-17 20:50:28'),
(42, '42', '6', '3', '10', '2022-10-22 07:08:51', '2022-10-22 07:08:51'),
(43, '43', '6', '3', '10', '2022-10-22 07:09:09', '2022-10-22 07:09:09'),
(44, '44', '9', '1', '30', '2022-10-22 15:01:27', '2022-10-22 15:01:27'),
(45, '45', '6', '5', '10', '2022-10-27 10:16:51', '2022-10-27 10:16:51'),
(46, '46', '6', '5', '10', '2022-10-27 10:17:07', '2022-10-27 10:17:07'),
(47, '47', '10', '3', '89', '2022-10-29 20:09:54', '2022-10-29 20:09:54'),
(48, '47', '7', '1', '22', '2022-10-29 20:09:54', '2022-10-29 20:09:54'),
(49, '48', '7', '3', '22', '2022-11-06 10:32:47', '2022-11-06 10:32:47'),
(50, '48', '10', '1', '89', '2022-11-06 10:32:47', '2022-11-06 10:32:47'),
(51, '49', '8', '1', '29', '2022-11-06 11:40:32', '2022-11-06 11:40:32'),
(52, '50', '9', '1', '30', '2022-11-07 12:07:00', '2022-11-07 12:07:00'),
(53, '50', '7', '1', '22', '2022-11-07 12:07:00', '2022-11-07 12:07:00'),
(54, '52', '6', '6', '10', '2022-11-08 08:15:21', '2022-11-08 08:15:21'),
(55, '53', '4', '1', '50', '2022-11-08 10:26:37', '2022-11-08 10:26:37'),
(56, '54', '10', '10', '89', '2022-11-09 19:00:09', '2022-11-09 19:00:09');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `Small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(3, 1, 'PC PORTABLE GAMER MSI GF63 THIN I5 11È GÉN 12GO GTX 1650', 'MSI', 'Écran 15.6\" FULL HD IPS, 144 Hz - Processeur: Intel Core i5-11400H (2.70 GHz up to 4.50 GHz Turbo max, 12 Mo de mémoire cache, Hexa-Core) - Système d\'exploitation: FreeDos - Mémoire RAM: 12 Go - Disque dur: 512 Go SSD - Carte graphique: NVIDIA GeForce GTX 1650 (4 Go de mémoire dédiée GDDR6) avec Wi-Fi, Bluetooth, 1 x Type-C USB 3.2 Gen 1, 3 x Type-A USB 3.2 Gen 1, 1 x RJ45, 1 x HDMI, 1 x Entrée micro, 1 x Sortie casque - Clavier Rétroéclairé Rouge - Couleur: Noir - Garantie: 2 ans', 'Écran 15.6\" FULL HD IPS, 144 Hz - Processeur: Intel Core i5-11400H (2.70 GHz up to 4.50 GHz Turbo max, 12 Mo de mémoire cache, Hexa-Core) - Système d\'exploitation: FreeDos - Mémoire RAM: 12 Go - Disque dur: 512 Go SSD - Carte graphique: NVIDIA GeForce GTX 1650 (4 Go de mémoire dédiée GDDR6) avec Wi-Fi, Bluetooth, 1 x Type-C USB 3.2 Gen 1, 3 x Type-A USB 3.2 Gen 1, 1 x RJ45, 1 x HDMI, 1 x Entrée micro, 1 x Sortie casque - Clavier Rétroéclairé Rouge - Couleur: Noir - Garantie: 2 ans', '2579', '2570', '1659539883.jpg', '0', '7', 0, 1, 'Le PC Portable MSI GF63 Thin intègre un processeur Intel Core de 11ème génération', 'Le PC Portable MSI GF63 Thin intègre un processeur Intel Core de 11ème génération proposent des performances améliorées , avec notamment une nouvelle architecture innovante, des améliorations de performances basées sur l\'IA et des flux plus élevés, cette génération de processeurs offre la puissance dont vous avez besoin pour jouer dans les meilleures conditions.', 'Le PC Portable MSI GF63 Thin intègre un processeur Intel Core de 11ème génération proposent des performances améliorées , avec notamment une nouvelle architecture innovante, des améliorations de performances basées sur l\'IA et des flux plus élevés, cette génération de processeurs offre la puissance dont vous avez besoin pour jouer dans les meilleures conditions.', '2022-08-03 13:18:03', '2022-08-11 12:27:47'),
(4, 5, 'Icshoes+ Chaussures', 'chaussure', 'Matériel: Cuir Perforé\r\nCouleur: Noir\r\nSemelle: TR et PU Légère- Tige Cuir\r\nThème: Classic\r\nChaussure: Pour Homme\r\nLégères et confortables.\r\nFermeture: Lacet', 'Matériel: Cuir Perforé\r\nCouleur: Noir\r\nSemelle: TR et PU Légère- Tige Cuir\r\nThème: Classic\r\nChaussure: Pour Homme\r\nLégères et confortables.\r\nFermeture: Lacet', '55', '50', '1659540083.jpg', '12', '1', 0, 1, 'SKU: WH804FS0SFWHSNAFAMZ Gamme de', 'Modèle: LC 037 Poids (kg): 0.1 Couleur: Noir Matériau principal: Cuir Perforé', 'produits: Chaussures pour homme', '2022-08-03 13:21:23', '2022-11-08 10:26:37'),
(5, 5, 'Icshoes+ Boots - Lacets - Cuir - Matt - Marron F20', 'chaussure', 'Les bottines sont des pièces essentielles pour la saison automne-hiver. Ces paires de chaussures noires en cuir lisse sont facilent à porter grâce à leur style lacet. Aussi super confortable au niveau de la cheville  au top du bottine autour du pied.', 'Ces bottines ont un bout rond confortable et surtout leur semelles 100% T.R souple avec un talon carré. Indispensables pour allonger vos jambes et affiner votre silhouette, elles se portent aussi bien au bureau qu’à un dîner entre amis.', '80', '69', '1659540238.jpg', '100', '0', 0, 1, 'Genre: Pour Homme Materiel : Cuir Matt', 'Hauteur de la semelle : Talon 2.5 cm/ Plateau 1 cm', 'Couleur: Marron Matt\r\nSemelle: 100% T.R Souple', '2022-08-03 13:23:58', '2022-08-03 13:23:58'),
(6, 2, 'Black Haze Débardeur Femme Sally Blanc Essential', 'Sally Blanc Essential', 'Aussi agréable que joli, ce débardeur se suffit à lui-même. En jersey côtelé pour plus de confort.', 'Haut sans manches stylé.', '13', '10', '1659540363.jpg', '68', '1', 0, 1, 'Haut sans manches stylé.', 'Haut sans manches stylé.', 'Haut sans manches stylé.', '2022-08-03 13:26:03', '2022-11-08 08:15:21'),
(7, 2, 'Black Haze Short CARBON - Gris', 'Short', 'Les shorts en molleton pour hommes sont parfaits pour différents types de tenues d\'été ou simplement pour se prélasser à l\'intérieur toute l\'année. Grâce à la matière polaire intérieure, à la taille élastique et aux poches supplémentaires, le short est extrêmement confortable et pratique.', 'Les shorts en molleton pour hommes sont parfaits pour différents types de tenues d\'été ou simplement pour se prélasser à l\'intérieur toute l\'année. Grâce à la matière polaire intérieure, à la taille élastique et aux poches supplémentaires, le short est extrêmement confortable et pratique.', '29', '22', '1659540481.jpg', '2', '2', 0, 1, '100% cotton Grey Heather est composé à 52% de coton filé à l\'anneau et à 48% de polyester', '100% cotton\r\nGrey Heather est composé à 52% de coton filé à l\'anneau et à 48% de polyester', '100% cotton\r\nGrey Heather est composé à 52% de coton filé à l\'anneau et à 48% de polyester', '2022-08-03 13:28:01', '2022-11-07 12:07:00'),
(8, 2, 'Pantalon large - Imprimé', 'Pantalon', 'Cet article contient de la viscose issue d\'une production responsable. Une belle matière douce et fluide. Une coupe taille haute . Une allure cool chic. On flashe toutes pour ce pantalon large, ultra-agréable à porter et facile à styliser le jour ou le soir.', 'Cet article contient de la viscose issue d\'une production responsable. Une belle matière douce et fluide. Une coupe taille haute . Une allure cool chic. On flashe toutes pour ce pantalon large, ultra-agréable à porter et facile à styliser le jour ou le soir.', '40', '29', '1659540615.jpg', '188', '2', 0, 1, 'PANTALON', 'Pantalon ample', 'Tissu fluide \r\nTaille haute\r\nFermeture zippée\r\nDeux poches latérales\r\nDoublure\r\nLe mannequin porte la taille M', '2022-08-03 13:30:15', '2022-11-06 11:40:32'),
(9, 2, 'T-shirt', 't-shirt', 'Pack T-shirt et Short imprimé géométrique- Coton - Noir', 'Confortable, doux et polyvalent, le short de couleur Noir avec des bandes élastiques à la taille présente des détails en chevron dans leur conception une découpe au-dessus des genoux pour une grande liberté de mouvement. Associé à un t-shirt pour un style décontracté-habillé, ou porté pour une séance de sport, le short jogging homme est indéniablement pratique et agréable', '38', '30', '1659540772.jpg', '23', '3', 0, 1, 'Confortable, doux et polyvalent, le short de couleur Noir avec des bandes élastiques à la taille présente des détails en chevron dans leur conception une découpe au-dessus des genoux pour une grande liberté de mouvement. Associé à un t-shirt pour un style décontracté-habillé,', 'ou porté pour une séance de sport, le short jogging homme est indéniablement pratique et agréable', 'Confortable, doux et polyvalent, le short de couleur Noir avec des bandes élastiques à la taille présente des détails en chevron dans leur conception une découpe au-dessus des genoux pour une grande liberté de mouvement. Associé à un t-shirt pour un style décontracté-habillé,', '2022-08-03 13:32:52', '2022-11-07 12:07:00'),
(10, 3, 'vêtement bebe', 'bebe', 'good qualite', 'matiere en cotons', '100', '89', '1659540973.jpg', '2', '1', 0, 1, 'Confortable, doux et polyvalent, le short de couleur Noir avec des bandes élastiques à la taille présente des détails en chevron dans leur conception une découpe au-dessus des genoux pour une grande liberté de mouvement. Associé à un t-shirt pour un style décontracté-habillé,', 'Confortable, doux et polyvalent, le short de couleur Noir avec des bandes élastiques à la taille présente des détails en chevron dans leur conception une découpe au-dessus des genoux pour une grande liberté de mouvement. Associé à un t-shirt pour un style décontracté-habillé,', 'Confortable, doux et polyvalent, le short de couleur Noir avec des bandes élastiques à la taille présente des détails en chevron dans leur conception une découpe au-dessus des genoux pour une grande liberté de mouvement. Associé à un t-shirt pour un style décontracté-habillé,', '2022-08-03 13:36:13', '2022-11-09 19:00:09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saber', 'sabermgannem275222@gmail.com', NULL, '$2y$10$Owj9iUqSlPEG4MNg8fBmZOBrtY07w1/cfotIlwopBw2cePocqerwm', 'mgannem', '28126752', 'moknin', 'moknin', 'monastir', 'no', 'tunis', '287662', 1, NULL, '2022-08-03 12:35:58', '2022-08-08 08:22:35'),
(2, 'Rahma', 'mganemrahma@hotmail.com', NULL, '$2y$10$fRl/ddCsuDgrpfWqL3/FAulywoC1fYAWCr5klBRcMHo8ZkEpN0YMS', '', '', '', '', '', '', '', '', 1, NULL, '2022-08-04 13:48:39', '2022-08-04 13:48:39'),
(4, 'hazem', 'hazemmgannem@gmail.com', NULL, '$2y$10$sp8A/ZPP22FEvCSb6RkhC.VjE5Yw.mwjEUtsqhtif/xvlA8SS2IA.', 'mgannem', '28126752', 'moknin', 'moknin', 'monastir', 'yes', 'tunis', '456672', 0, NULL, '2022-08-04 13:55:10', '2022-08-08 10:40:45'),
(5, 'amel', 'amal275222@gmail.com', NULL, '$2y$10$/AZUn8E91g86cpt0r9loae0q7m8WhNWG685ze.TtIGZSMzyZ0YBA6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-11-06 10:53:46', '2022-11-06 10:53:46'),
(6, 'aya', 'aya123@gmail.com', NULL, '$2y$10$PIEwF6wzxBuj3B0kCDvSQecIfy2L9rWtsZeapYvAHutHbbHBOGQjW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-11-06 11:00:56', '2022-11-06 11:00:56');

-- --------------------------------------------------------

--
-- Structure de la table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `prod_id`, `created_at`, `updated_at`) VALUES
(20, '2', '6', '2022-10-22 07:09:21', '2022-10-22 07:09:21'),
(21, '4', '7', '2022-11-07 12:05:14', '2022-11-07 12:05:14'),
(22, '4', '10', '2022-11-08 06:25:56', '2022-11-08 06:25:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
