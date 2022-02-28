-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 07:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simtritama`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan_akun`
--

CREATE TABLE `golongan_akun` (
  `id_gol_akun` int(11) NOT NULL,
  `nama_gol_akun` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan_akun`
--

INSERT INTO `golongan_akun` (`id_gol_akun`, `nama_gol_akun`) VALUES
(1, 'Aktiva'),
(2, 'Kewajiban'),
(3, 'Modal'),
(4, 'Pendapatan'),
(5, 'Beban 1'),
(6, 'Beban 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan_akun`
--
ALTER TABLE `golongan_akun`
  ADD PRIMARY KEY (`id_gol_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golongan_akun`
--
ALTER TABLE `golongan_akun`
  MODIFY `id_gol_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
