-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 03:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(32) NOT NULL,
  `slug_menu` varchar(32) NOT NULL,
  `icon_menu` varchar(32) NOT NULL,
  `parent_menu` int(11) NOT NULL,
  `index_menu` int(11) NOT NULL,
  `status_menu` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `slug_menu`, `icon_menu`, `parent_menu`, `index_menu`, `status_menu`) VALUES
(1, 'Dashboard', 'dashboard', 'home', 0, 1, 1),
(2, 'divider', 'divider', '', 0, 2, 1),
(3, 'Master Data', '#', 'edit', 0, 3, 1),
(4, 'Data Direktorat', 'master_data/data_direktorat', 'activity', 3, 1, 1),
(5, 'P I C', '#', 'user', 0, 4, 1),
(6, 'Data Project', 'data_project', 'activity', 5, 1, 1),
(7, 'E-Faktur', 'e_faktur', 'activity', 5, 2, 1),
(8, 'Media Order / Production Order', 'media_order', 'activity', 5, 3, 1),
(9, 'File Upload', 'file_upload', 'activity', 5, 4, 1),
(10, 'Validasi / Laporan', 'validasi_laporan', 'activity', 5, 5, 1),
(11, 'Finance', '#', 'dollar-sign', 0, 5, 1),
(12, 'Diagram Monitoring', 'diagram_monitoring', 'activity', 11, 1, 1),
(13, 'Buku Besar', 'buku_besar', 'activity', 11, 2, 1),
(14, 'Petty Cash', 'petty_cash', 'activity', 11, 3, 1),
(15, 'Aset dan Penyusutan', 'aset_dan_penyusutan', 'activity', 11, 4, 1),
(16, 'General Ledger', 'general_ledger', 'activity', 11, 5, 1),
(17, 'Cetak Laporan Keuangan', 'cetak_laporan_keuangan', 'activity', 11, 6, 1),
(18, 'Produksi', '#', 'truck', 0, 6, 1),
(19, 'Job Order', 'job_order', 'activity', 18, 1, 1),
(20, 'Pengajuan', 'pengajuan', 'activity', 18, 2, 1),
(21, 'Pembayaran / Tagihan', 'pembayaran_tagihan', 'activity', 18, 3, 1),
(22, 'Placement', '#', 'video', 0, 7, 1),
(23, 'Job Order', 'job_order', 'activity', 22, 1, 1),
(24, 'Pengajuan dan LogProof', 'pengajuan_dan_logproof', 'activity', 22, 2, 1),
(25, 'Pembayaran / Tagihan', 'pembayaran_tagihan', 'activity', 22, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
