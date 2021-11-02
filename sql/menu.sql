-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 07:50 AM
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
  `role_menu` int(11) NOT NULL,
  `status_menu` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `slug_menu`, `icon_menu`, `parent_menu`, `index_menu`, `role_menu`, `status_menu`) VALUES
(1, 'Dashboard', 'dashboard', 'home', 0, 1, 0, 1),
(2, 'divider', 'divider', '', 0, 2, 0, 1),
(3, 'Master Data', '#', 'edit', 0, 3, 0, 1),
(4, 'Data Client', 'masterdata/data_client', 'activity', 3, 1, 0, 1),
(5, 'P I C', '#', 'user', 0, 5, 2, 1),
(6, 'Data Project', 'pic/data_project', 'activity', 5, 1, 2, 1),
(7, 'E-Faktur', 'pic/e_faktur', 'activity', 5, 2, 2, 1),
(8, 'Media Order / Production Order', 'pic/media_order', 'activity', 5, 3, 2, 1),
(9, 'File Upload', 'pic/file_upload', 'activity', 5, 4, 2, 1),
(10, 'Validasi / Laporan', 'pic/validasi_laporan', 'activity', 5, 5, 2, 1),
(11, 'Finance', '#', 'dollar-sign', 0, 7, 3, 1),
(12, 'Diagram Monitoring', 'finance/diagram_monitoring', 'activity', 11, 1, 3, 1),
(13, 'Buku Besar', 'finance/buku_besar', 'activity', 11, 2, 3, 1),
(14, 'Petty Cash', 'finance/petty_cash', 'activity', 11, 3, 3, 1),
(15, 'Aset dan Penyusutan', 'finance/aset_dan_penyusutan', 'activity', 11, 4, 3, 1),
(16, 'General Ledger', 'finance/general_ledger', 'activity', 11, 5, 3, 1),
(17, 'Cetak Laporan Keuangan', 'finance/cetak_laporan_keuangan', 'activity', 11, 6, 3, 1),
(18, 'Produksi', '#', 'truck', 0, 9, 4, 1),
(19, 'Job Order', 'produksi/job_order', 'activity', 18, 1, 4, 1),
(20, 'Pengajuan', 'produksi/pengajuan', 'activity', 18, 2, 4, 1),
(21, 'Pembayaran / Tagihan', 'produksi/pembayaran_tagihan', 'activity', 18, 3, 4, 1),
(22, 'Placement', '#', 'video', 0, 11, 5, 1),
(23, 'Job Order', 'placement/job_order', 'activity', 22, 1, 5, 1),
(24, 'Pengajuan dan LogProof', 'placement/pengajuan_dan_logproof', 'activity', 22, 2, 5, 1),
(25, 'Pembayaran / Tagihan', 'placement/pembayaran_tagihan', 'activity', 22, 3, 5, 1),
(26, 'divider', 'divider', '', 0, 4, 0, 1),
(27, 'divider', 'divider', '', 0, 6, 0, 1),
(28, 'divider', 'divider', '', 0, 8, 0, 1),
(29, 'divider', 'divider', '', 0, 10, 0, 1),
(30, 'Data User', 'masterdata/data_user', 'activity', 3, 2, 1, 1),
(31, 'Data Media', 'masterdata/data_media', 'activity', 3, 3, 1, 1);

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
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
COMMIT;
