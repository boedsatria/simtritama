-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 13, 2021 at 07:44 PM
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
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(64) NOT NULL,
  `kategori_client` int(11) NOT NULL,
  `wilayah_client` int(11) NOT NULL,
  `alamat_client` text NOT NULL,
  `desc_client` text,
  `npwp_client` varchar(64) NOT NULL,
  `no_rek_client` varchar(64) NOT NULL,
  `nama_rek_client` varchar(64) NOT NULL,
  `bank_client` varchar(64) NOT NULL,
  `pic_client` varchar(64) NOT NULL,
  `photo_client` varchar(128) DEFAULT NULL,
  `parent_client` int(11) NOT NULL DEFAULT '0',
  `created_client` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_client` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `kategori_client`, `wilayah_client`, `alamat_client`, `desc_client`, `npwp_client`, `no_rek_client`, `nama_rek_client`, `bank_client`, `pic_client`, `photo_client`, `parent_client`, `created_client`, `status_client`) VALUES
(1, 'Kementerian Agama', 1, 1, 'Jalan Lapangan Banteng Barat No. 3 – 4 Jakarta 10710', NULL, '1234', '5678', 'Mastuki', 'Bank BRI', 'Bapak Yaqut', 'kementerian_agama_16368312819253.png', 0, '2021-11-14 02:21:22', 1),
(2, 'LIPI', 2, 1, 'Jl. Jend. Gatot Subroto 10, Jakarta 12710', NULL, '4321', '8765', 'Lembaga Ilmu Pengetahuan Indonesia', 'Bank BRI', 'Bapak Handoko', 'lipi_16368317791040.png', 1, '2021-11-14 02:29:39', 1),
(3, 'Satria Media Teknologi', 3, 3, 'Jl. Raya Pasar Kecapi No. 54', NULL, '9999', '1111', 'Sametek', 'Bank BRI', 'Budi Hartono', 'satria_media_teknologi_16368320595365.png', 1, '2021-11-14 02:34:19', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
