-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2025 pada 15.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_property`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blok`
--

CREATE TABLE `blok` (
  `id_blok` bigint(20) UNSIGNED NOT NULL,
  `blok` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blok`
--

INSERT INTO `blok` (`id_blok`, `blok`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'A1', NULL, '2024-09-30 21:47:49', '2024-10-13 22:01:01'),
(2, 'A2', NULL, '2024-09-30 21:47:53', '2024-10-11 00:33:23'),
(3, 'A3', NULL, '2024-09-30 21:47:58', '2024-10-11 00:33:30'),
(5, 'A5', NULL, '2024-10-11 00:33:49', '2024-10-11 00:33:49'),
(6, 'A6', NULL, '2024-10-11 00:33:56', '2024-10-11 00:33:56'),
(7, 'A7', NULL, '2024-10-11 00:34:04', '2024-10-11 00:34:04'),
(8, 'A8', NULL, '2024-10-11 00:34:19', '2024-10-11 00:34:19'),
(9, 'A9', NULL, '2024-10-11 00:34:27', '2024-10-11 00:34:27'),
(10, 'A10', NULL, '2024-10-11 00:34:35', '2024-10-11 00:34:35'),
(11, 'A11', NULL, '2024-10-11 00:34:49', '2024-10-11 00:34:49'),
(12, 'A12', NULL, '2024-10-11 00:35:02', '2024-10-11 00:35:02'),
(15, 'A15', NULL, '2024-10-11 00:35:41', '2024-10-11 00:35:41'),
(18, 'A17', NULL, '2024-10-11 00:36:02', '2024-10-11 00:36:02'),
(19, 'A18', NULL, '2024-10-11 00:36:14', '2024-10-11 00:36:14'),
(20, 'A19', NULL, '2024-10-11 00:36:20', '2024-10-11 00:36:20'),
(21, 'A20', NULL, '2024-10-11 00:36:27', '2024-10-11 00:36:27'),
(22, 'A21', NULL, '2024-10-11 00:36:50', '2024-10-11 00:36:50'),
(23, 'A22', NULL, '2024-10-11 00:37:06', '2024-10-11 00:37:06'),
(24, 'A23', NULL, '2024-10-11 00:37:15', '2024-10-11 00:37:15'),
(26, 'A25', NULL, '2024-10-11 00:46:52', '2024-10-11 00:46:52'),
(27, 'A26', NULL, '2024-10-11 00:47:05', '2024-10-11 00:47:05'),
(28, 'A27', NULL, '2024-10-11 00:47:18', '2024-10-11 00:47:18'),
(29, 'A28', NULL, '2024-10-11 00:47:28', '2024-10-11 00:47:28'),
(31, 'A29', NULL, '2024-10-11 00:47:40', '2024-10-11 00:47:40'),
(32, 'A30', NULL, '2024-10-11 00:47:51', '2024-10-11 00:47:51'),
(33, 'B1', NULL, '2024-10-11 00:48:25', '2024-10-11 00:48:25'),
(34, 'B2', NULL, '2024-10-11 00:48:30', '2024-10-11 00:48:30'),
(35, 'B3', NULL, '2024-10-11 00:48:35', '2024-10-11 00:48:35'),
(37, 'B5', NULL, '2024-10-11 00:48:52', '2024-10-11 00:48:52'),
(38, 'B6', NULL, '2024-10-11 00:48:58', '2024-10-11 00:48:58'),
(39, 'B7', NULL, '2024-10-11 00:49:03', '2024-10-11 00:49:03'),
(40, 'B8', NULL, '2024-10-11 00:49:09', '2024-10-11 00:49:09'),
(41, 'B9', NULL, '2024-10-11 00:49:17', '2024-10-11 00:49:17'),
(42, 'B10', NULL, '2024-10-11 01:29:55', '2024-10-11 01:29:55'),
(43, 'B11', NULL, '2024-10-11 01:30:06', '2024-10-11 01:30:06'),
(44, 'B12', NULL, '2024-10-11 01:30:13', '2024-10-11 01:30:13'),
(47, 'B15', NULL, '2024-10-11 01:31:07', '2024-10-11 01:31:07'),
(48, 'B16', NULL, '2024-10-11 01:31:18', '2024-10-11 01:31:18'),
(49, 'B17', NULL, '2024-10-11 01:31:34', '2024-10-11 01:31:34'),
(50, 'B18', NULL, '2024-10-11 01:31:39', '2024-10-11 01:31:39'),
(51, 'B19', NULL, '2024-10-11 01:31:44', '2024-10-11 01:31:44'),
(52, 'B20', NULL, '2024-10-11 01:31:52', '2024-10-11 01:31:52'),
(53, 'B21', NULL, '2024-10-11 01:33:25', '2024-10-11 01:33:25'),
(54, 'C1', NULL, '2024-10-11 01:33:26', '2024-10-13 21:16:16'),
(55, 'C2', NULL, '2024-10-13 21:16:32', '2024-10-13 21:16:32'),
(56, 'C3', NULL, '2024-10-13 21:16:39', '2024-10-13 21:16:39'),
(58, 'C5', NULL, '2024-10-13 21:17:57', '2024-10-13 21:17:57'),
(59, 'C6', NULL, '2024-10-13 21:18:05', '2024-10-13 21:18:05'),
(60, 'C7', NULL, '2024-10-13 21:18:14', '2024-10-13 21:18:36'),
(61, 'C8', NULL, '2024-10-13 21:18:27', '2024-10-13 21:18:27'),
(62, 'C9', NULL, '2024-10-13 21:18:43', '2024-10-13 21:18:43'),
(63, 'C10', NULL, '2024-10-13 21:18:51', '2024-10-13 21:18:51'),
(64, 'C11', NULL, '2024-10-13 21:19:01', '2024-10-13 21:19:01'),
(65, 'C12', NULL, '2024-10-13 21:19:13', '2024-10-13 21:19:13'),
(66, 'C15', NULL, '2024-10-13 21:19:18', '2024-10-13 21:20:21'),
(67, 'C16', NULL, '2024-10-13 21:19:24', '2024-10-13 21:19:41'),
(68, 'C17', NULL, '2024-10-13 21:19:29', '2024-10-13 21:19:49'),
(69, 'C18', NULL, '2024-10-13 21:20:00', '2024-10-13 21:20:00'),
(70, 'C19', NULL, '2024-10-13 21:20:42', '2024-10-13 21:20:42'),
(71, 'C20', NULL, '2024-10-13 21:20:51', '2024-10-13 21:20:51'),
(72, 'C21', NULL, '2024-10-13 21:21:00', '2024-10-13 21:21:00'),
(73, 'C22', NULL, '2024-10-13 21:21:05', '2024-10-13 21:21:05'),
(74, 'D1', NULL, '2024-10-13 21:23:34', '2024-10-13 21:23:34'),
(75, 'D2', NULL, '2024-10-13 21:24:38', '2024-10-13 21:24:38'),
(76, 'D3', NULL, '2024-10-13 21:24:44', '2024-10-13 21:24:44'),
(78, 'D5', NULL, '2024-10-13 21:24:55', '2024-10-13 21:24:55'),
(79, 'D6', NULL, '2024-10-13 21:25:01', '2024-10-13 21:25:01'),
(80, 'D7', NULL, '2024-10-13 21:25:07', '2024-10-13 21:25:07'),
(81, 'D8', NULL, '2024-10-13 21:25:14', '2024-10-13 21:25:14'),
(82, 'D9', NULL, '2024-10-13 21:25:20', '2024-10-13 21:25:20'),
(83, 'D10', NULL, '2024-10-13 21:25:26', '2024-10-13 21:25:26'),
(84, 'D11', NULL, '2024-10-13 21:25:40', '2024-10-13 21:25:40'),
(85, 'D12', NULL, '2024-10-13 21:25:46', '2024-10-13 21:25:46'),
(86, 'D15', NULL, '2024-10-13 21:25:52', '2024-10-13 21:25:52'),
(87, 'D16', NULL, '2024-10-13 21:25:58', '2024-10-13 21:25:58'),
(88, 'D17', NULL, '2024-10-13 21:26:04', '2024-10-13 21:26:04'),
(89, 'D18', NULL, '2024-10-13 21:26:10', '2024-10-13 21:26:10'),
(90, 'D19', NULL, '2024-10-13 21:26:15', '2024-10-13 21:26:15'),
(91, 'D20', NULL, '2024-10-13 21:26:20', '2024-10-13 21:26:20'),
(92, 'D21', NULL, '2024-10-13 21:26:33', '2024-10-13 21:26:41'),
(93, 'D22', NULL, '2024-10-13 21:26:50', '2024-10-13 21:26:50'),
(94, 'D23', NULL, '2024-10-13 21:26:56', '2024-10-13 21:26:56'),
(95, 'E1', NULL, '2024-10-13 21:27:04', '2024-10-13 21:27:30'),
(96, 'E2', NULL, '2024-10-13 21:28:00', '2024-10-13 21:28:00'),
(97, 'E3', NULL, '2024-10-13 21:28:08', '2024-10-13 21:28:08'),
(99, 'E5', NULL, '2024-10-13 21:28:24', '2024-10-13 21:28:24'),
(100, 'E6', NULL, '2024-10-13 21:28:30', '2024-10-13 21:28:30'),
(101, 'E7', NULL, '2024-10-13 21:28:36', '2024-10-13 21:28:36'),
(102, 'E8', NULL, '2024-10-13 21:28:42', '2024-10-13 21:28:42'),
(103, 'E9', NULL, '2024-10-13 21:28:47', '2024-10-13 21:28:47'),
(104, 'E10', NULL, '2024-10-13 21:28:52', '2024-10-13 21:28:52'),
(105, 'E11', NULL, '2024-10-13 21:29:04', '2024-10-13 21:29:16'),
(106, 'E12', NULL, '2024-10-13 21:29:22', '2024-10-13 21:29:22'),
(107, 'E15', NULL, '2024-10-13 21:29:32', '2024-10-13 21:29:53'),
(108, 'E16', NULL, '2024-10-13 21:29:41', '2024-10-13 21:30:03'),
(109, 'E17', NULL, '2024-10-13 21:30:18', '2024-10-13 21:30:18'),
(110, 'E18', NULL, '2024-10-13 21:30:27', '2024-10-13 21:30:27'),
(111, 'E19', NULL, '2024-10-13 21:30:42', '2024-10-13 21:30:51'),
(112, 'E20', NULL, '2024-10-13 21:30:57', '2024-10-13 21:30:57'),
(113, 'E21', NULL, '2024-10-13 21:31:03', '2024-10-13 21:31:03'),
(114, 'E22', NULL, '2024-10-13 21:31:11', '2024-10-13 21:31:11'),
(115, 'E23', NULL, '2024-10-13 21:31:16', '2024-10-13 21:31:16'),
(116, 'E24', NULL, '2024-10-13 21:31:21', '2024-10-13 21:31:21'),
(118, 'F1', NULL, '2024-10-13 21:31:56', '2024-10-13 21:31:56'),
(119, 'F2', NULL, '2024-10-13 21:32:03', '2024-10-13 21:32:03'),
(120, 'F3', NULL, '2024-10-13 21:34:21', '2024-10-13 21:34:21'),
(121, 'F5', NULL, '2024-10-13 21:34:28', '2024-10-13 21:34:28'),
(122, 'F6', NULL, '2024-10-13 21:34:35', '2024-10-13 21:34:35'),
(123, 'F7', NULL, '2024-10-13 21:34:40', '2024-10-13 21:34:40'),
(124, 'F8', NULL, '2024-10-13 21:34:47', '2024-10-13 21:34:47'),
(125, 'F9', NULL, '2024-10-13 21:34:52', '2024-10-13 21:34:52'),
(126, 'F10', NULL, '2024-10-13 21:34:58', '2024-10-13 21:34:58'),
(127, 'F11', NULL, '2024-10-13 21:35:03', '2024-10-13 21:35:03'),
(128, 'F12', NULL, '2024-10-13 21:35:10', '2024-10-13 21:35:10'),
(129, 'F15', NULL, '2024-10-13 21:35:21', '2024-10-13 21:35:21'),
(130, 'F16', NULL, '2024-10-13 21:35:28', '2024-10-13 21:35:28'),
(131, 'G1', NULL, '2024-10-13 21:36:16', '2024-10-13 21:36:16'),
(132, 'G2', NULL, '2024-10-13 21:36:20', '2024-10-13 21:36:20'),
(133, 'G3', NULL, '2024-10-13 21:36:25', '2024-10-13 21:36:25'),
(134, 'G5', NULL, '2024-10-13 21:36:31', '2024-10-13 21:36:31'),
(135, 'G6', NULL, '2024-10-13 21:36:37', '2024-10-13 21:36:37'),
(136, 'G7', NULL, '2024-10-13 21:36:41', '2024-10-13 21:36:41'),
(137, 'G8', NULL, '2024-10-13 21:36:46', '2024-10-13 21:36:46'),
(138, 'H1', NULL, '2024-10-13 21:36:59', '2024-10-13 21:36:59'),
(139, 'H2', NULL, '2024-10-13 21:37:06', '2024-10-13 21:37:06'),
(140, 'H3', NULL, '2024-10-13 21:37:12', '2024-10-13 21:37:12'),
(141, 'H5', NULL, '2024-10-13 21:37:17', '2024-10-13 21:37:17'),
(142, 'H6', NULL, '2024-10-13 21:37:31', '2024-10-13 21:37:31'),
(143, 'H6', NULL, '2024-10-13 21:37:32', '2024-10-13 21:37:32'),
(144, 'H7', NULL, '2024-10-13 21:37:38', '2024-10-13 21:37:38'),
(145, 'H8', NULL, '2024-10-13 21:37:43', '2024-10-13 21:37:43'),
(146, 'H9', NULL, '2024-10-13 21:37:48', '2024-10-13 21:37:48'),
(147, 'H10', NULL, '2024-10-13 21:37:53', '2024-10-13 21:37:53'),
(148, 'H11', NULL, '2024-10-13 21:37:59', '2024-10-13 21:37:59'),
(149, 'H12', NULL, '2024-10-13 21:38:03', '2024-10-13 21:38:03'),
(150, 'H15', NULL, '2024-10-13 21:38:08', '2024-10-13 21:38:08'),
(151, 'H16', NULL, '2024-10-13 21:38:13', '2024-10-13 21:38:13'),
(152, 'H17', NULL, '2024-10-13 21:38:27', '2024-10-13 21:38:27'),
(153, 'H18', NULL, '2024-10-13 21:38:32', '2024-10-13 21:38:32'),
(154, 'H19', NULL, '2024-10-13 21:38:37', '2024-10-13 21:38:37'),
(155, 'H20', NULL, '2024-10-13 21:38:42', '2024-10-13 21:38:42'),
(156, 'H21', NULL, '2024-10-13 21:38:48', '2024-10-13 21:38:48'),
(157, 'I1', NULL, '2024-10-13 21:39:09', '2024-10-13 21:39:09'),
(158, 'I2', NULL, '2024-10-13 21:39:14', '2024-10-13 21:39:14'),
(159, 'I3', NULL, '2024-10-13 21:39:19', '2024-10-13 21:39:19'),
(160, 'I5', NULL, '2024-10-13 21:39:25', '2024-10-13 21:39:25'),
(161, 'I7', NULL, '2024-10-13 21:39:30', '2024-10-13 21:39:30'),
(162, 'I8', NULL, '2024-10-13 21:39:38', '2024-10-13 21:39:38'),
(163, 'I9', NULL, '2024-10-13 21:39:45', '2024-10-13 21:39:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` bigint(20) UNSIGNED NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `no_tlp`, `email`, `alamat`, `instagram`, `facebook`, `created_at`, `updated_at`) VALUES
(1, '+62 896-5360-9139', 'tatagriyasuci8@gmail.com', 'Jl. Pesantren No.6, Jurang Manggu Timur, Pondok Aren, South Tangerang City, Banten - 15222', 'https://www.instagram.com/greenbintaroindah.cluster?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', 'https://www.facebook.com/Clustersiaphuni?mibextid=ZbWKwL', '2024-10-01 03:20:30', '2024-10-23 19:40:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailunit`
--

CREATE TABLE `detailunit` (
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `kamar_tidur` int(11) NOT NULL,
  `kamar_mandi` int(11) NOT NULL,
  `ruang_tamu` varchar(255) NOT NULL,
  `balkon` varchar(255) NOT NULL,
  `carport` varchar(255) NOT NULL,
  `dapur` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_bangunan` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detailunit`
--

INSERT INTO `detailunit` (`id_unit`, `kamar_tidur`, `kamar_mandi`, `ruang_tamu`, `balkon`, `carport`, `dapur`, `luas_tanah`, `luas_bangunan`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '1', '1', '2', '1', '82 Meter', '90 Meter', NULL, '2024-10-01 06:42:55', '2024-11-06 17:34:42'),
(2, 3, 2, '1', '0', '2', '1', '63 Meter', '90 Meter', NULL, '2024-10-05 03:18:19', '2024-10-29 04:45:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `interior`
--

CREATE TABLE `interior` (
  `id_interior` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `img_interior1` varchar(255) DEFAULT NULL,
  `img_interior2` varchar(255) DEFAULT NULL,
  `img_interior3` varchar(255) DEFAULT NULL,
  `img_interior4` varchar(255) DEFAULT NULL,
  `img_interior5` varchar(255) DEFAULT NULL,
  `img_interior6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `interior`
--

INSERT INTO `interior` (`id_interior`, `type`, `img_interior1`, `img_interior2`, `img_interior3`, `img_interior4`, `img_interior5`, `img_interior6`, `created_at`, `updated_at`) VALUES
(1, '70/90', 'images/JfssP6Q6yOMf3vKtdiNyz9bTR5SwuKP1Hu04iYmC.jpg', 'images/spUp3G3JzQwsCVI6daJRLVwQri83AipwdGSYv3Si.jpg', 'images/Xj4Btn6uMfjpRk69eihxkAYsiMJnul6Xi7tsHutz.jpg', 'images/qlXFl3BCyPI4zlQBPQIBqeg45GJENkhzsyuXf1LH.jpg', 'images/cRtrxaTYziYB6Eyk87KPO7KvGJ2sSPJSJrEz0fVP.jpg', 'images/6ypMHu64x772K70UCDcPitRaPEQexMENbDc2dnID.jpg', '2024-10-19 18:52:58', '2024-10-19 22:10:46'),
(4, '52/81', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-23 06:52:59', '2024-10-23 06:52:59'),
(5, '5/50', 'images/JRYOLCUN5YSn9eyA9JVrO9g8nI0HAPz3GHAG0Err.jpg', 'images/jq2YwtiDb8hVCDqlpIWe8iQORzRJPNcEn8QQBNtn.jpg', 'images/dicwIw1D1ZF0Mnzo9ptNSY7lmI9B7MTtFnLDY8nE.jpg', 'images/TxVVif4p2VizczKgG0fZxlf6qVMdkT1HDh4w4zbs.jpg', 'images/EE03PuSe0mRtgXtmZi51Sn7K98AiZIfr0pXKUQln.jpg', 'images/XAIZdIYfjuPKieXuZU6rtTfqE7qBbC0cvM0Km46m.jpg', '2024-11-06 17:36:17', '2024-11-06 17:36:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_30_041519_create_rumah_table', 1),
(6, '2024_09_30_041556_create_blok_table', 1),
(7, '2024_10_01_042754_create_question_table', 1),
(8, '2024_10_01_061913_create_contact_table', 2),
(9, '2024_10_01_131822_create_detailunit_table', 3),
(10, '2024_10_15_132552_create_promo_table', 4),
(11, '2024_10_19_130628_create_interior_table', 5),
(12, '2024_10_20_011308_create_interior_table', 6),
(13, '2024_10_30_030849_create_report_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perumahan`
--

CREATE TABLE `perumahan` (
  `id_perumahan` bigint(20) UNSIGNED NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_blok` bigint(20) UNSIGNED NOT NULL,
  `harga_rumah` decimal(15,0) NOT NULL,
  `img_rumah` varchar(255) NOT NULL,
  `img_denah` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_interior` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perumahan`
--

INSERT INTO `perumahan` (`id_perumahan`, `id_unit`, `id_blok`, `harga_rumah`, `img_rumah`, `img_denah`, `status`, `id_interior`, `created_at`, `updated_at`) VALUES
(17, 1, 1, 1400000000, 'images/ZPpCx0hLwqtHhDIsbpRGCc4604qW919XBFXLH1Lm.jpg', 'images/t3TOUi5wWgIV04JoMWN6IOI1vfqowAu1T0ep3s1a.jpg', 'enable', 1, '2024-11-14 00:36:10', '2024-11-14 00:36:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `banner`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'images/KsQUA6DfHcKvYy04FibAhwb7luVA1ET58B9eUx6L.jpg', NULL, '2024-10-15 07:35:44', '2024-10-16 06:41:38'),
(3, 'images/LMaFiojfhZpHNwewYiR1IzWCeOqtCZn9vGxqU3od.jpg', NULL, '2024-11-06 17:37:00', '2024-11-06 17:37:00'),
(4, 'images/ovOydsZHqG02voAuarLi7kiY0BSwfRZ3qxmI1zll.jpg', NULL, '2024-11-14 00:41:39', '2024-11-14 00:41:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `question`
--

CREATE TABLE `question` (
  `id_question` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `question`
--

INSERT INTO `question` (`id_question`, `nama`, `email`, `no_tlp`, `text`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 'Fachri', 'fakhriafkar098@gmail.com', '0871-7287-2172', 'Dihalaman belakang ruah apakah ada tamna nya?', NULL, '2024-11-14 00:39:38', '2024-11-14 00:39:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` bigint(20) UNSIGNED NOT NULL,
  `id_perumahan` bigint(20) UNSIGNED NOT NULL,
  `id_blok` bigint(20) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(255) DEFAULT NULL,
  `nik` decimal(25,0) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `jumlah_dp` varchar(255) DEFAULT NULL,
  `sisa_bayar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id_report`, `id_perumahan`, `id_blok`, `nama_pembeli`, `nik`, `alamat`, `no_tlp`, `email`, `tgl_pesan`, `tgl_selesai`, `jumlah_dp`, `sisa_bayar`, `created_at`, `updated_at`) VALUES
(7, 17, 1, 'Fachri', 12345, 'JL. Bersama, Cinangka. Depok', '0871-7287-2172', 'fakhriafkar36@gmail.com', '2024-11-14', '2024-11-14', '1400000000', '0', '2024-11-14 00:37:33', '2024-11-14 00:37:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fakhri', 'admin@gmail.com', '$2y$12$rUWEgKiZgWdFH3vPseZcQOjaJtuc98DEdlkQ9I/J5Bzjff2ciRbcy', 'admin', NULL, '2024-09-30 21:47:35', '2024-10-21 06:20:56'),
(3, 'Moai', 'us@gmail.com', '$2y$12$enHQ73AsUElJkvItF1wRE.HPMxVCwFkLwx3tntk6CeI.Rmu9SlpAi', 'admin', NULL, '2024-10-22 18:53:32', '2024-10-30 21:07:59'),
(4, 'asep surya', 'asep@gmail.com', '$2y$12$LopUpH4zKnSIKrt7zaASee8U4MHx/rWvTypBa0m5ZdQ7vWausanmq', 'admin', NULL, '2024-11-06 17:33:48', '2024-11-06 17:34:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `detailunit`
--
ALTER TABLE `detailunit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`id_interior`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id_perumahan`),
  ADD KEY `id_blok` (`id_blok`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_interior` (`id_interior`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_perumahan` (`id_perumahan`),
  ADD KEY `id_blok` (`id_blok`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blok`
--
ALTER TABLE `blok`
  MODIFY `id_blok` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detailunit`
--
ALTER TABLE `detailunit`
  MODIFY `id_unit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `interior`
--
ALTER TABLE `interior`
  MODIFY `id_interior` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id_perumahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `question`
--
ALTER TABLE `question`
  MODIFY `id_question` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  ADD CONSTRAINT `perumahan_ibfk_1` FOREIGN KEY (`id_blok`) REFERENCES `blok` (`id_blok`),
  ADD CONSTRAINT `perumahan_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `detailunit` (`id_unit`),
  ADD CONSTRAINT `perumahan_ibfk_3` FOREIGN KEY (`id_interior`) REFERENCES `interior` (`id_interior`);

--
-- Ketidakleluasaan untuk tabel `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_perumahan`) REFERENCES `perumahan` (`id_perumahan`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`id_blok`) REFERENCES `blok` (`id_blok`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
