-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 04:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakargigibalita`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `umur` int(11) NOT NULL,
  `karies` int(11) NOT NULL,
  `ekonomi` int(11) NOT NULL,
  `manis` int(11) NOT NULL,
  `imigrasi` int(11) NOT NULL,
  `perawatan_khusus` int(11) NOT NULL,
  `minum_flour` int(11) NOT NULL,
  `bercak_putih` int(11) NOT NULL,
  `lubang_tambal` int(11) NOT NULL,
  `sikat_gigi` int(11) NOT NULL,
  `susu_gula` int(11) NOT NULL,
  `topikal_fLouride` int(11) NOT NULL,
  `memeriksa_gigi` int(11) NOT NULL,
  `karang_gigi` int(11) NOT NULL,
  `bercak_coklat` int(11) NOT NULL DEFAULT 0,
  `gigi_gelap` int(11) NOT NULL DEFAULT 0,
  `gigi_keropos` int(11) NOT NULL DEFAULT 0,
  `bau_mulut` int(11) NOT NULL DEFAULT 0,
  `liur_sedikit` int(11) NOT NULL DEFAULT 0,
  `mulut_asam` int(11) NOT NULL DEFAULT 0,
  `hasil` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama`, `umur`, `karies`, `ekonomi`, `manis`, `imigrasi`, `perawatan_khusus`, `minum_flour`, `bercak_putih`, `lubang_tambal`, `sikat_gigi`, `susu_gula`, `topikal_fLouride`, `memeriksa_gigi`, `karang_gigi`, `bercak_coklat`, `gigi_gelap`, `gigi_keropos`, `bau_mulut`, `liur_sedikit`, `mulut_asam`, `hasil`, `created`) VALUES
(1, 'Asa', 12, 1, 1, 1, 1, 2, 2, 1, 1, 3, 1, 3, 2, 1, 0, 0, 0, 0, 0, 0, 1.4, '2022-04-15 20:11:57'),
(5, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(6, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(7, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(8, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(9, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(10, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(11, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(12, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(13, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(14, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(15, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(16, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(17, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(18, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(19, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(20, 'Ike', 6, 1, 3, 1, 3, 1, 1, 1, 3, 3, 3, 1, 3, 1, 0, 0, 0, 0, 0, 0, 1.75, '2022-04-15 13:14:40'),
(21, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:53:53'),
(22, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:54:16'),
(23, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:54:25'),
(24, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:54:30'),
(25, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:54:36'),
(26, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:54:43'),
(27, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:54:52'),
(28, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:55:05'),
(29, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:55:11'),
(30, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:55:15'),
(31, 'Usop', 12, 1, 1, 1, 1, 1, 3, 3, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.92308, '2022-04-15 21:58:59'),
(32, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 21:59:35'),
(33, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 21:59:46'),
(34, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:00:17'),
(35, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:00:24'),
(56, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:17:37'),
(57, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:18:01'),
(58, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:24:40'),
(59, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:24:47'),
(60, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:25:04'),
(61, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:25:24'),
(62, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:25:27'),
(63, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:25:37'),
(64, 'Ayam', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:26:02'),
(65, 'Yudha1', 6, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.66667, '2022-04-15 22:32:20'),
(66, 'Yudha2', 12, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 3, 0, 0, 0, 0, 0, 0, 1.5625, '2022-04-15 22:33:08'),
(67, 'nazwa', 16, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.72414, '2022-04-16 06:24:52'),
(68, 'hih', 3, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.72414, '2022-04-16 07:12:32'),
(69, 'l/k', 4, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.72414, '2022-04-16 07:16:56'),
(70, 'fg', 3, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 1, 0, 0, 0, 1.61765, '2022-04-16 07:24:14'),
(71, 'yuba', 23, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, 1.72414, '2022-04-16 07:25:36'),
(73, 'kuntul', 4, 3, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 1, 1, 1, 1, 1, 0, 1.875, '2022-04-16 07:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'superadmin', 'nimdarepus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
