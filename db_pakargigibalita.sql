-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 10:14 PM
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
  `nohp` varchar(50) DEFAULT NULL,
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
  `lainnya` varchar(100) NOT NULL,
  `hasil` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama`, `umur`, `nohp`, `karies`, `ekonomi`, `manis`, `imigrasi`, `perawatan_khusus`, `minum_flour`, `bercak_putih`, `lubang_tambal`, `sikat_gigi`, `susu_gula`, `topikal_fLouride`, `memeriksa_gigi`, `karang_gigi`, `bercak_coklat`, `gigi_gelap`, `gigi_keropos`, `bau_mulut`, `liur_sedikit`, `mulut_asam`, `lainnya`, `hasil`, `created`) VALUES


(1, 'Azzarine Insyirah Allya Harahap', 4, NULL, 2, 1, 3, 3, 1, 2, 1, 1, 3, 1, 3, 3, 1, 0, 1, 0, 0, 0, 0, '', 1.92857, '2022-05-15 08:18:31'),
(2, 'Azrael', 2, NULL, 2, 1, 2, 2, 1, 3, 1, 1, 1, 1, 3, 1, 1, 1, 0, 0, 0, 0, 0, '', 1.57627, '2022-05-15 08:24:39'),
(3, 'Catalina Aira', 3, NULL, 3, 2, 2, 1, 1, 3, 1, 1, 3, 2, 3, 3, 1, 0, 1, 0, 0, 0, 0, '', 1.97436, '2022-05-21 06:05:30'),
(4, 'Gracella Simanungkalit', 4, NULL, 3, 1, 2, 1, 1, 3, 1, 1, 2, 1, 3, 3, 1, 0, 0, 0, 0, 1, 0, '', 1.87179, '2022-05-21 06:06:30'),
(5, 'Afnan Rasyid Bahar ', 2, NULL, 1, 3, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 1, 0, '', 1.73418, '2022-05-21 06:07:54'),
(6, 'Adyatama Benedictus Limbong', 1, NULL, 3, 1, 1, 2, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 1, 0, 0, '', 1.92308, '2022-05-21 06:09:06'),
(7, 'Joan', 2, NULL, 1, 1, 1, 1, 1, 3, 1, 1, 1, 1, 3, 2, 1, 0, 0, 0, 1, 0, 0, '', 1.45946, '2022-05-21 06:10:35'),
(8, 'Akhtar', 1, NULL, 2, 1, 1, 1, 1, 3, 1, 1, 2, 1, 3, 3, 1, 0, 0, 0, 0, 1, 0, '', 1.61765, '2022-05-21 06:11:44'),
(9, 'Khanza aulia', 5, NULL, 3, 1, 2, 1, 1, 3, 1, 1, 1, 1, 3, 3, 1, 0, 0, 1, 0, 0, 0, '', 1.77273, '2022-05-21 06:12:44'),
(10, 'Daffa', 3, NULL, 3, 2, 1, 1, 1, 3, 1, 2, 1, 1, 3, 3, 2, 0, 1, 1, 1, 0, 0, '', 1.89474, '2022-05-21 06:14:01'),
(11, 'Abqaru', 4, NULL, 3, 1, 2, 1, 1, 3, 2, 2, 1, 1, 3, 3, 2, 0, 1, 0, 0, 0, 0, '', 1.89474, '2022-05-21 06:15:13'),
(12, 'Abqari Shakeil Abid Makareem', 3, NULL, 2, 1, 2, 1, 1, 3, 1, 1, 1, 1, 2, 2, 1, 1, 0, 0, 0, 0, 0, '', 1.61765, '2022-05-21 06:16:02'),
(13, 'Cecilia', 5, NULL, 1, 1, 1, 2, 2, 2, 1, 1, 3, 1, 3, 1, 1, 0, 0, 0, 0, 0, 1, '', 1.36364, '2022-05-21 06:54:43'),
(14, 'Azril afkar zaidan', 2, NULL, 1, 1, 3, 1, 1, 2, 1, 1, 2, 1, 3, 3, 1, 1, 0, 0, 0, 0, 0, '', 1.31818, '2022-05-21 07:07:11'),
(15, 'Reiza Zaviyar Farizki', 3, NULL, 2, 2, 2, 1, 1, 3, 1, 1, 1, 1, 3, 3, 1, 1, 0, 0, 0, 0, 0, '', 1.66667, '2022-05-21 07:17:43'),
(16, 'Nafisha Aquina Azzahra', 4, NULL, 1, 1, 1, 3, 1, 3, 1, 1, 2, 1, 3, 3, 2, 0, 0, 1, 0, 0, 0, '', 1.75, '2022-05-21 07:18:45'),
(17, 'Hosea', 1, NULL, 1, 1, 1, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 1, 0, '', 1.61765, '2022-05-21 07:19:36'),
(18, 'Glafinly', 5, NULL, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 3, 2, 1, 0, 0, 0, 1, 0, 0, '', 1, '2022-05-21 07:20:30'),
(19, 'Jenica Zandroto', 4, NULL, 3, 2, 2, 1, 1, 3, 1, 1, 1, 1, 3, 2, 2, 0, 0, 0, 1, 0, 0, '', 1.97674, '2022-05-21 07:22:08'),
(20, 'Jemima lase', 4, NULL, 2, 1, 1, 1, 1, 3, 1, 2, 3, 1, 3, 3, 2, 0, 0, 1, 0, 0, 0, '', 1.8, '2022-05-21 07:24:08'),
(21, 'Tito Rafael Jayson Daeli', 2, NULL, 2, 2, 2, 1, 1, 3, 2, 1, 3, 1, 3, 3, 1, 1, 0, 0, 0, 0, 0, '', 1.8, '2022-05-21 07:25:42'),
(22, 'Shannon Sirai', 4, NULL, 3, 2, 1, 1, 1, 3, 1, 1, 1, 1, 3, 3, 1, 0, 0, 0, 0, 1, 0, '', 1.81928, '2022-05-21 07:27:02'),
(23, 'Sheena Zilvania Laoli', 4, NULL, 3, 2, 2, 1, 1, 1, 2, 1, 3, 1, 3, 3, 1, 1, 0, 0, 0, 0, 0, '', 1.72414, '2022-05-21 07:31:30'),
(24, 'Phutkri Taryssa L. Waruwu', 4, NULL, 2, 2, 2, 1, 1, 3, 2, 1, 1, 1, 3, 3, 1, 0, 0, 1, 0, 0, 0, '', 1.77419, '2022-05-21 07:32:39'),
(25, 'Baim', 2, NULL, 3, 3, 3, 3, 1, 3, 2, 1, 2, 2, 3, 3, 2, 0, 0, 1, 0, 0, 0, '', 2.27273, '2022-05-21 08:29:22'),
(26, 'Evano Lase', 4, NULL, 2, 1, 1, 2, 1, 3, 3, 2, 1, 1, 3, 2, 3, 0, 1, 0, 0, 0, 0, '', 1.89474, '2022-05-21 07:33:52'),
(27, 'Sakha Arkan ', 2, NULL, 2, 1, 1, 2, 1, 2, 1, 1, 2, 1, 3, 2, 1, 0, 1, 0, 0, 0, 0, '', 1.36364, '2022-05-21 07:35:07'),
(28, 'Tabita Hadasa', 5, NULL, 2, 1, 3, 1, 1, 2, 1, 2, 1, 1, 3, 3, 1, 1, 0, 0, 0, 0, 0, '', 1.42857, '2022-05-21 07:40:31'),
(29, 'Shahzad Kafeel Baihaqina', 3, NULL, 1, 1, 2, 1, 1, 3, 2, 1, 1, 1, 2, 1, 1, 1, 0, 0, 0, 0, 0, '', 1.6, '2022-05-21 07:42:06'),
(30, 'Khaira Zhavya Iswanto', 2, NULL, 2, 1, 1, 1, 1, 2, 2, 1, 2, 1, 3, 3, 1, 0, 0, 1, 0, 0, 0, '', 1.33333, '2022-05-21 07:42:56'),
(31, 'Kenneth Poirier', 1, NULL, 2, 2, 1, 1, 1, 3, 1, 1, 3, 1, 3, 2, 1, 0, 0, 0, 0, 1, 0, '', 1.66667, '2022-05-21 07:44:03'),
(32, 'Grazio Bona Tambunan', 3, NULL, 2, 1, 2, 3, 1, 3, 1, 1, 1, 1, 3, 2, 1, 0, 0, 0, 0, 0, 0, '', 1.69565, '2022-05-21 07:45:44'),
(33, 'Putri Napitupulu', 4, NULL, 1, 3, 1, 2, 1, 3, 1, 1, 1, 1, 3, 3, 1, 0, 0, 0, 0, 0, 0, '', 1.69565, '2022-05-21 07:46:45'),
(34, 'Alceo Boli Nazara', 4, NULL, 2, 3, 1, 1, 1, 3, 1, 1, 3, 1, 3, 1, 2, 1, 0, 0, 0, 0, 0, '', 1.69565, '2022-05-21 07:50:04'),
(35, 'Ersya Delania Nazara', 3, NULL, 2, 3, 1, 1, 1, 3, 2, 1, 3, 1, 3, 1, 2, 1, 0, 0, 0, 0, 0, '', 1.89474, '2022-05-21 07:55:36'),
(36, 'Ahzarel Keenan Tambunan ', 5, NULL, 2, 1, 2, 2, 1, 3, 1, 3, 1, 1, 3, 2, 1, 1, 0, 1, 0, 0, 0, '', 1.89474, '2022-05-21 07:57:21'),
(37, 'Vionetta', 2, NULL, 3, 2, 2, 1, 1, 3, 1, 1, 2, 1, 3, 3, 1, 1, 0, 0, 0, 0, 0, '', 1.87179, '2022-05-21 08:07:08'),
(38, 'Nisaka Ivana Gabriela Simanjuntak', 2, NULL, 2, 2, 1, 2, 1, 3, 1, 1, 2, 1, 3, 3, 1, 0, 0, 0, 0, 0, 1, '', 1.61765, '2022-05-21 08:08:08'),
(39, 'Naira Salsalina Putri', 5, NULL, 1, 1, 2, 1, 1, 2, 1, 1, 1, 1, 1, 2, 2, 0, 0, 0, 0, 0, 0, '', 1.25926, '2022-05-21 08:09:18'),
(40, 'Gidion Ginting', 4, NULL, 3, 1, 1, 2, 1, 3, 1, 1, 2, 1, 3, 1, 1, 0, 0, 0, 0, 0, 1, '', 1.65753, '2022-05-21 08:10:45'),
(41, 'Angeli', 3, NULL, 3, 3, 3, 1, 1, 3, 2, 2, 2, 2, 3, 3, 2, 0, 0, 1, 0, 0, 0, '', 2.2, '2022-05-21 08:11:59'),
(42, 'Aulia', 3, NULL, 2, 2, 3, 1, 1, 3, 1, 1, 2, 1, 3, 3, 1, 0, 0, 0, 1, 0, 0, '', 1.72414, '2022-05-21 08:12:52'),
(43, 'Adriel', 2, NULL, 2, 2, 3, 1, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 1, 0, 0, '', 1.66667, '2022-05-21 08:16:09'),
(44, 'Cia Ginting', 2, NULL, 3, 1, 1, 2, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 0, 0, 1, '', 1.92308, '2022-05-21 08:17:04'),
(45, 'Mika', 2, NULL, 3, 2, 3, 2, 1, 3, 1, 1, 3, 1, 3, 3, 1, 0, 0, 0, 1, 0, 0, '', 1.875, '2022-05-21 08:17:45'),
(46, 'Dito', 4, NULL, 2, 3, 3, 1, 2, 3, 2, 2, 3, 1, 3, 3, 2, 0, 0, 1, 0, 0, 0, '', 2.16667, '2022-05-21 08:18:28'),
(47, 'Agifah', 3, NULL, 2, 2, 2, 1, 1, 3, 2, 2, 2, 1, 3, 3, 2, 0, 0, 1, 0, 1, 0, '', 1.90625, '2022-05-21 08:19:31'),
(48, 'Sihop', 2, NULL, 2, 2, 1, 3, 1, 2, 1, 1, 2, 1, 3, 3, 1, 0, 0, 0, 0, 1, 0, '', 1.81928, '2022-05-21 08:21:32'),
(49, 'Critian marpaung', 3, NULL, 2, 2, 2, 3, 1, 2, 2, 2, 2, 1, 3, 2, 2, 0, 0, 1, 0, 0, 0, '', 2.16667, '2022-05-21 08:24:13'),
(50, 'Rama', 3, NULL, 2, 2, 3, 1, 1, 3, 2, 1, 2, 2, 3, 3, 2, 0, 0, 1, 0, 0, 0, '', 1.8, '2022-05-21 08:25:41');



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
(1, 'admin', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
