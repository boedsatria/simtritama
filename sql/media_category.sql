-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2021 at 05:56 PM
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
-- Table structure for table `media_category`
--

CREATE TABLE `media_category` (
  `id_media_category` int(11) NOT NULL,
  `nama_media_category` varchar(128) NOT NULL,
  `status_media_category` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_category`
--

INSERT INTO `media_category` (`id_media_category`, `nama_media_category`, `status_media_category`) VALUES
(1, 'Media Televisi', 1),
(2, 'Media Digital', 1),
(3, 'Media Luar Ruang', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media_category`
--
ALTER TABLE `media_category`
  ADD PRIMARY KEY (`id_media_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media_category`
--
ALTER TABLE `media_category`
  MODIFY `id_media_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
