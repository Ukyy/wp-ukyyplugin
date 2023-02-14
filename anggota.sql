-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 06:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_pendaftaran` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_wp` int(11) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `tgl_lahir`, `tgl_pendaftaran`, `email`, `id_wp`, `alamat`, `no_hp`, `kota`, `provinsi`) VALUES
(1, 'lucky permana putra', '0000-00-00', '2023-02-13 11:43:17', 'luckyputraryansyah123@gmail.com', 1, 'sukowidi', '089520824747', 'magetan', 'jawa timur'),
(2, 'lucky permana putra', '0000-00-00', '2023-02-13 12:57:11', 'luckyputraryansyah123@gmail.com', 1, 'sukowidi', '089520824747', 'magetan', ''),
(3, '\' OR 1=1 \'', '0000-00-00', '2023-02-13 12:59:14', 'luckyputraryansyah123@gmail.comuiu', 1, '', '', '', ''),
(4, 'Ukyy', '2006-04-25', '2023-02-13 13:37:24', 'Ukyy@gmail.com', 4, 'Magetann', '089520824747', 'magetan', 'jawa timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
