-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2021 at 05:57 PM
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
-- Table structure for table `media_type`
--

CREATE TABLE `media_type` (
  `id_media_type` int(11) NOT NULL,
  `nama_media_type` varchar(128) NOT NULL,
  `desc_media_type` text NOT NULL,
  `parent_media_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_type`
--

INSERT INTO `media_type` (`id_media_type`, `nama_media_type`, `desc_media_type`, `parent_media_type`) VALUES
(1, 'TV Nasional', '', 1),
(2, 'Billboard', '', 3),
(3, 'Portal', '', 2),
(4, 'TV Lokal', '', 1),
(5, 'Radio Nasional', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media_type`
--
ALTER TABLE `media_type`
  ADD PRIMARY KEY (`id_media_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media_type`
--
ALTER TABLE `media_type`
  MODIFY `id_media_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
