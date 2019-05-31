-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 04:06 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tatshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` decimal(7,2) NOT NULL DEFAULT '0.00',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'tatsitholo@gmail.com', '0.00', '2019-05-26 11:34:11', '2019-05-26 11:34:11'),
(2, 'tatsithfolo@gmail.com', '0.00', '2019-05-26 11:37:36', '2019-05-26 11:37:36'),
(3, 'park@gmail.com', '0.00', '2019-05-26 11:40:46', '2019-05-26 11:40:46'),
(4, 'walker@gmail.com', '0.00', '2019-05-26 12:59:45', '2019-05-26 12:59:45'),
(5, 'walker1@gmail.com', '170.03', '2019-05-26 13:07:50', '2019-05-31 01:57:21'),
(6, 'walker2@gmail.com', '0.00', '2019-05-26 13:11:16', '2019-05-26 13:11:16'),
(7, 'tatsithol3@gmail.com', '0.00', '2019-05-26 13:12:17', '2019-05-26 13:12:17'),
(8, 'gost@gmail.com', '0.00', '2019-05-26 13:16:18', '2019-05-26 13:16:18'),
(9, 'fffff@gmail.com', '0.00', '2019-05-26 13:22:34', '2019-05-26 13:22:34'),
(10, 'page@gmail.com', '0.00', '2019-05-26 13:38:18', '2019-05-26 13:38:18'),
(11, 'grid@gmail.com', '0.00', '2019-05-26 13:43:11', '2019-05-26 13:43:11'),
(12, 'fadzie@gmail.com', '200.00', '2019-05-27 17:39:23', '2019-05-28 02:57:15'),
(13, 'gatsi@gmail.com', '0.00', '2019-05-27 18:43:23', '2019-05-27 18:43:23'),
(14, 'ddddd@gmail.com', '200.00', '2019-05-27 21:07:56', '2019-05-29 11:26:16'),
(15, 'humae@gmail.com', '200.00', '2019-05-28 06:05:00', '2019-05-28 06:16:52'),
(16, 'wild@gmail.com', '200.00', '2019-05-29 03:11:29', '2019-05-29 03:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `acc_trans`
--

CREATE TABLE `acc_trans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `balance` decimal(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acc_trans`
--

INSERT INTO `acc_trans` (`id`, `user_id`, `transaction`, `amount`, `balance`, `created_at`, `updated_at`) VALUES
(1, 35, '2', '159.99', '290.01', NULL, NULL),
(2, 35, '2', '159.99', '290.01', '2019-05-31 05:13:26', '2019-05-31 05:13:26'),
(3, 35, '2', '159.99', '290.01', '2019-05-31 05:15:34', '2019-05-31 05:15:34'),
(4, 35, '2', '159.99', '290.01', '2019-05-31 05:27:00', '2019-05-31 05:27:00'),
(5, 35, '1', '159.99', '130.02', '2019-05-31 05:29:15', '2019-05-31 05:29:15'),
(6, 35, '1', '25.00', '205.02', '2019-05-31 06:01:26', '2019-05-31 06:01:26'),
(7, 35, '2', '159.99', '45.03', '2019-05-31 06:04:48', '2019-05-31 06:04:48'),
(8, 35, '1', '25.00', '70.03', '2019-05-31 08:27:00', '2019-05-31 08:27:00'),
(9, 35, '1', '100.00', '170.03', '2019-05-31 08:57:21', '2019-05-31 08:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `reason_id` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`reason_id`, `reason`) VALUES
(1, 'Increase traffic'),
(2, 'Increase Sales'),
(3, 'Sales targets'),
(4, 'Stronger Client Relationships'),
(5, 'Monetize Inventory'),
(6, 'Clearance Sale');

-- --------------------------------------------------------

--
-- Table structure for table `discount_trans`
--

CREATE TABLE `discount_trans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `Reason_id` int(11) NOT NULL,
  `expiry` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_05_21_193123_create_products_table', 1),
(4, '2019_05_22_134301_product_discounts', 2),
(5, '2019_05_22_150812_create_purchase_table', 2),
(6, '2019_05_22_151500_create_acc_trans_table', 2),
(7, '2019_05_22_152225_create_account_table', 2),
(8, '2019_05_22_152818_create_purch_trans_table', 2),
(9, '2019_05_22_154018_create_discount_trans_table', 2),
(10, '2019_05_22_154644_create_discount_table', 3),
(11, '2019_05_22_170513_create_discount_status_table', 4),
(12, '2019_05_23_020439_create_account_table', 5),
(13, '2019_05_25_130249_pricediscounts_table', 6),
(14, '2019_05_25_132731_pricediscounts_table', 7),
(15, '2019_05_25_133256_rollback', 8),
(16, '2019_05_25_133702_pricediscounts_table', 8);

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
-- Table structure for table `pricediscounts`
--

CREATE TABLE `pricediscounts` (
  `dstatus_id` int(11) NOT NULL,
  `price_min` int(11) NOT NULL,
  `price_max` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `pricediscounts`
--

INSERT INTO `pricediscounts` (`dstatus_id`, `price_min`, `price_max`, `percentage`) VALUES
(1, 50, 100, 0),
(2, 112, 150, 25),
(3, 200, 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `productdiscounts`
--

CREATE TABLE `productdiscounts` (
  `prodi_id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `purchase_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Apple iPhone X', 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.', 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1', '983.00', NULL, NULL),
(4, 'LG V10 H900', 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).', 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1', '159.99', NULL, NULL),
(7, 'Samsung Galaxy S9', 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.', 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1', '57.00', NULL, NULL),
(9, 'Google Pixel 2 XL', 'New condition\n• No returns, but backed by eBay Money back guarantee', 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1', '78.00', NULL, NULL),
(10, 'LG V10 H900', 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).', 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1', '159.99', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pur_id` bigint(20) UNSIGNED NOT NULL,
  `trans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purch_trans`
--

CREATE TABLE `purch_trans` (
  `purch_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `discount` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `balance_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
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
(11, 'Tatenda Sithole', 'tatsithol@gmail.com', NULL, '$2y$10$eY9lO54j6Unl0GeEdI30jO24Px08EXAcNX6oebPg8lvZKCJf5ohdm', NULL, '2019-05-24 20:26:27', '2019-05-24 20:26:27'),
(12, 'Tatenda Sithole', 'tatl@gmail.com', NULL, '$2y$10$oiYS3uKVrEgmJJQiNmeClurAO9E38UmA/aAQuN2YiK7hyelMvukrm', NULL, '2019-05-24 20:30:54', '2019-05-24 20:30:54'),
(13, 'Tatenda Sithole', 'tat@gmail.com', NULL, '$2y$10$3yQsbEqyN6hoFV3vyEPYXOSJaA33ZN.5PLSPpSgA7vZvGaAhwDaXS', NULL, '2019-05-24 20:37:00', '2019-05-24 20:37:00'),
(14, 'Tate', 'tatemba@gmail.com', NULL, '$2y$10$9CwP/eEKJEHqPw1hN0bXg.JQi2xTECzjxoIw9wPyRB4DH3/lv75Ue', NULL, '2019-05-24 20:56:01', '2019-05-24 20:56:01'),
(15, 'Tate', 'tamba@gmail.com', NULL, '$2y$10$fllF3uRgcqdjBr9Llf0PNeaSPLgqnsirGAbQkO4GxxSjBkq5Kr5be', NULL, '2019-05-24 21:28:12', '2019-05-24 21:28:12'),
(16, 'frog', 'frog@gmail.com', NULL, '$2y$10$a2sCiZUH5Dp.tHXu5pLi5u7JFWhjHS4mmOWOHvS//ya/7838cYzRK', NULL, '2019-05-24 21:33:44', '2019-05-24 21:33:44'),
(17, 'tenda', 'tapiwa@gmail.com', NULL, '$2y$10$9CWj4C1tC.1y4MF3Z42D5uksBUh5fQNIMsZ03GkKOPFNIg.6VrXWa', NULL, '2019-05-25 22:00:11', '2019-05-25 22:00:11'),
(18, 'tenda', 'tapiwa1@gmail.com', NULL, '$2y$10$R.PjsnKmdzkVDyziE3yNRu2oqG/7oKVHewaq5HIOLAHwiz76SkRny', NULL, '2019-05-25 22:02:10', '2019-05-25 22:02:10'),
(19, 'tenda', 'tapiwa2@gmail.com', NULL, '$2y$10$V/8fu0XSMK94BwI6kR0WpOYqEu6VuYO0FrkR8RfiObOFsTHNfAmHS', NULL, '2019-05-25 22:06:13', '2019-05-25 22:06:13'),
(20, 'peter', 'petz@gmail.com', NULL, '$2y$10$9hpMdqEUR/uxgRaR88xjce5IUiUTTBvndGsgp/VJs3qOi1leonic6', NULL, '2019-05-25 22:30:35', '2019-05-25 22:30:35'),
(21, 'peter', 'petz2@gmail.com', NULL, '$2y$10$YQIyPHa234LHxTDxLYRfdOXput/m/xUFOwed.QwdIJzduAXb7mZA6', NULL, '2019-05-25 22:32:16', '2019-05-25 22:32:16'),
(22, 'clint', 'vlint@gmail.com', NULL, '$2y$10$fXQbGPRsdUdON.PSJjPFUu24hgqntNMYuaYbsFvpV.7WETwy8N5ve', NULL, '2019-05-26 17:56:49', '2019-05-26 17:56:49'),
(23, 'clint', 'vlintw@gmail.com', NULL, '$2y$10$uyB.zmi9jvp4kqRB9S7aAOpVXH03p18aIHV27sBMoqncrsysTZF.C', NULL, '2019-05-26 18:09:32', '2019-05-26 18:09:32'),
(24, 'clinto', 'vlintaw@gmail.com', NULL, '$2y$10$GiIuBF3r2KRHJAFhmUV68uQygZuLWBfUwRZ.bD9vdt89vFNyu5M.G', NULL, '2019-05-26 18:12:49', '2019-05-26 18:12:49'),
(25, 'clinto', 'vlintraw@gmail.com', NULL, '$2y$10$yNcmbW9PdlO.YYx2dPkU5OCajvbpCFGiGR9CJSMB.u9tRrwfbuQXq', NULL, '2019-05-26 18:14:15', '2019-05-26 18:14:15'),
(26, 'clinto', 'vliw@gmail.com', NULL, '$2y$10$2ZdN2TJxw96joIq28mqa9OhiEk6TbCfh/drDPHUZY4Db.2l593CLW', NULL, '2019-05-26 18:16:42', '2019-05-26 18:16:42'),
(27, 'clinto', 'vliwo@gmail.com', NULL, '$2y$10$lKm80Qe6vRY6i73u2h1n5OBHBmCMBAQQPJG04C7hbhAT7vSoK1Gli', NULL, '2019-05-26 18:23:39', '2019-05-26 18:23:39'),
(28, 'clintob', 'bevliwo@gmail.com', NULL, '$2y$10$HOFu3SKaHxfxcIdGBpcRqueNU8jSmSft6O8f3ktmeDyw6QbjLOYAK', NULL, '2019-05-26 18:25:04', '2019-05-26 18:25:04'),
(29, 'Tatenda Sithole', 'tatsitholr@gmail.com', NULL, '$2y$10$a9dbJRDldOlr6hLGGRyYQ.5WHH0lw71WI0FzSk6xKk/MWlIomkcpi', NULL, '2019-05-26 18:29:00', '2019-05-26 18:29:00'),
(30, 'Tatenda Sithole', 'tatsitholllo@gmail.com', NULL, '$2y$10$ZCs7fFudk8jj8jkWFwQFbu1ma7MgWH3Xor/aho3c87Mj9cKr6UVsu', NULL, '2019-05-26 18:30:10', '2019-05-26 18:30:10'),
(31, 'Tatenda Sithole', 'tatsitholo@gmail.com', NULL, '$2y$10$0rwzMnJF2M/MrH9TptzEIeRkmrGd5q9WWjFvcbMzYUSE2ARZ6xDIu', NULL, '2019-05-26 18:34:11', '2019-05-26 18:34:11'),
(32, 'Tatenda Sithole', 'tatsithfolo@gmail.com', NULL, '$2y$10$BAgL.dZP1drQ3lEuEOZ9HeXeQ2F7hqWqNN18pcLpvKhVIdx5JHxyK', NULL, '2019-05-26 18:37:36', '2019-05-26 18:37:36'),
(33, 'Peter Pan', 'park@gmail.com', NULL, '$2y$10$w3c2QoVrUBzViX4t39OjCeMSKtuedWvCpvDFOyLbv1aIjyNYMa1Yu', NULL, '2019-05-26 18:40:46', '2019-05-26 18:40:46'),
(34, 'walker', 'walker@gmail.com', NULL, '$2y$10$yo339DvKZ2Oe/5QmNKu3b.TvRm0MnLGi83FEAom85n1qzBanFXFR2', NULL, '2019-05-26 19:59:45', '2019-05-26 19:59:45'),
(35, 'walker', 'walker1@gmail.com', NULL, '$2y$10$8aGB3FdBM2pb0g75bXXNMOxb32/ei4il8iAnNBhN1R.HT6TWWSDwq', NULL, '2019-05-26 20:07:50', '2019-05-26 20:07:50'),
(36, 'walker', 'walker2@gmail.com', NULL, '$2y$10$84pqVOB/8atnsvubPQnr0.u7IwZZ6KqWB7FSkw9e/UkUJvW0ebC.y', NULL, '2019-05-26 20:11:16', '2019-05-26 20:11:16'),
(37, 'tenda', 'tatsithol3@gmail.com', NULL, '$2y$10$ziCEh/Hp3GK9cmcfG2ggvOmj19DqPFecuKcNSqg8EJvV4l6lPxy.W', NULL, '2019-05-26 20:12:17', '2019-05-26 20:12:17'),
(38, 'gost', 'gost@gmail.com', NULL, '$2y$10$b1KWpo5BFFFCoiuLXz3nmeguFzUTgOOT3kI8weNcd7raUwKSfvAoW', NULL, '2019-05-26 20:16:18', '2019-05-26 20:16:18'),
(39, 'ffffffff', 'fffff@gmail.com', NULL, '$2y$10$4Cs3pzfGFOEkFcUBHgW/eO1e6aJzRX64XM1W881qdtvZZV.Tdhm.i', NULL, '2019-05-26 20:22:34', '2019-05-26 20:22:34'),
(40, 'page', 'page@gmail.com', NULL, '$2y$10$PS2Ut/h4mvACy0PcjSR6geWf2smSf0w4i0RzmQZoyEbRfse7zBsk.', NULL, '2019-05-26 20:38:18', '2019-05-26 20:38:18'),
(41, 'grid', 'grid@gmail.com', NULL, '$2y$10$uRsKMJNbG0XQXRRq0o3To.U5eyjfdskDpD9GD02JkQz/5uD0X/yOG', NULL, '2019-05-26 20:43:11', '2019-05-26 20:43:11'),
(42, 'fadzi', 'fadzie@gmail.com', NULL, '$2y$10$yf/FwmdpKGtZlH6yFupZHuLJVPR.kH89gCulpAgEJQNDAAOTyXHcG', NULL, '2019-05-28 00:39:23', '2019-05-28 00:39:23'),
(43, 'tebza', 'gatsi@gmail.com', NULL, '$2y$10$u2u8rdw/yJZYbxqJj.rn9OLkRJG5YGvuoUNJQXiHiHipSMfp7zPAC', NULL, '2019-05-28 01:43:23', '2019-05-28 01:43:23'),
(44, 'dddd', 'ddddd@gmail.com', NULL, '$2y$10$XycDzTOmdfgxNrVyjO5hPO..CSYnQKWbtuNoVZxSnJiN3PXQQ4F6.', 'T51HqwApYj1mY4Fv5qRmY1kZxls7mvzfBVCIbdTWMSeIBsjypiJbLO8QP2wW', '2019-05-28 04:07:55', '2019-05-28 04:07:55'),
(45, 'huma', 'huma@gmail.com', NULL, '$2y$10$Fgj/k6pJ5iWRpjK1Av4LruHLJohlRL6bzO8WcHcvVKs2AYOxNpZBK', NULL, '2019-05-28 13:01:21', '2019-05-28 13:01:21'),
(46, 'huma', 'humae@gmail.com', NULL, '$2y$10$2cPiHBqfTb.r8hRSgdKcoOAc78Xy6scEuINuHjredLIDpzd0xzSwG', NULL, '2019-05-28 13:05:00', '2019-05-28 13:05:00'),
(47, 'wild', 'wild@gmail.com', NULL, '$2y$10$tgoRwYjz1eoXDKtTdjRYAeLAZZT8kwXIhJmBWiu0xXVmPsCXKdN7a', NULL, '2019-05-29 10:11:29', '2019-05-29 10:11:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_trans`
--
ALTER TABLE `acc_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_trans`
--
ALTER TABLE `discount_trans`
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
-- Indexes for table `productdiscounts`
--
ALTER TABLE `productdiscounts`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `purch_trans`
--
ALTER TABLE `purch_trans`
  ADD PRIMARY KEY (`purch_id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `acc_trans`
--
ALTER TABLE `acc_trans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `discount_trans`
--
ALTER TABLE `discount_trans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productdiscounts`
--
ALTER TABLE `productdiscounts`
  MODIFY `prodi_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pur_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purch_trans`
--
ALTER TABLE `purch_trans`
  MODIFY `purch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
