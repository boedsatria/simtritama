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
-- Table structure for table `coa_akun`
--

CREATE TABLE `coa_akun` (
  `id_coa` int(11) NOT NULL,
  `no_coa` varchar(64) NOT NULL,
  `nama_coa` varchar(128) NOT NULL,
  `parent_coa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coa_akun`
--

INSERT INTO `coa_akun` (`id_coa`, `no_coa`, `nama_coa`, `parent_coa`) VALUES
(1, '1000', 'HARTA', 1),
(2, '1101', 'Kas (Petty Cash)', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coa_akun`
--
ALTER TABLE `coa_akun`
  ADD PRIMARY KEY (`id_coa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coa_akun`
--
ALTER TABLE `coa_akun`
  MODIFY `id_coa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
