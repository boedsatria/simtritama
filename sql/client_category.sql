-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2021 at 05:55 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `simtritama`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_category`
--

CREATE TABLE `client_category` (
  `id_client_category` int(11) NOT NULL,
  `nama_client_category` varchar(128) NOT NULL,
  `status_client_category` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_category`
--

INSERT INTO `client_category` (`id_client_category`, `nama_client_category`, `status_client_category`) VALUES
(1, 'Kementerian', 1),
(2, 'Lembaga', 1),
(3, 'Swasta', 1),
(4, 'BUMN', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_category`
--
ALTER TABLE `client_category`
  ADD PRIMARY KEY (`id_client_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_category`
--
ALTER TABLE `client_category`
  MODIFY `id_client_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
