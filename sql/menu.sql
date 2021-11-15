-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 15, 2021 at 07:19 PM
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(32) NOT NULL,
  `slug_menu` varchar(128) NOT NULL,
  `icon_menu` varchar(32) NOT NULL,
  `parent_menu` int(11) NOT NULL,
  `index_menu` int(11) NOT NULL,
  `role_menu` int(11) NOT NULL,
  `status_menu` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `slug_menu`, `icon_menu`, `parent_menu`, `index_menu`, `role_menu`, `status_menu`) VALUES
(1, 'Dashboard', 'dashboard', 'home', 0, 1, 0, 1),
(2, 'divider', 'divider', '', 0, 2, 0, 1),
(3, 'Masterdata', 'masterdata', 'edit', 0, 3, 0, 1),
(4, 'Data Client', 'list_client', 'activity', 3, 1, 0, 1),
(5, 'P I C', 'pic', 'user', 0, 5, 2, 1),
(6, 'Data Project', 'data_project', 'activity', 5, 1, 2, 1),
(7, 'E-Faktur', 'e_faktur', 'activity', 5, 2, 2, 1),
(8, 'Media Order / Production Order', 'media_order', 'activity', 5, 3, 2, 1),
(9, 'File Upload', 'file_upload', 'activity', 5, 4, 2, 1),
(10, 'Validasi / Laporan', 'validasi_laporan', 'activity', 5, 5, 2, 1),
(11, 'Finance', 'finance', 'dollar-sign', 0, 7, 3, 1),
(12, 'Diagram Monitoring', 'diagram_monitoring', 'activity', 11, 1, 3, 1),
(13, 'Buku Besar', 'buku_besar', 'activity', 11, 2, 3, 1),
(14, 'Petty Cash', 'petty_cash', 'activity', 11, 3, 3, 1),
(15, 'Aset dan Penyusutan', 'aset_dan_penyusutan', 'activity', 11, 4, 3, 1),
(16, 'General Ledger', 'general_ledger', 'activity', 11, 5, 3, 1),
(17, 'Cetak Laporan Keuangan', 'cetak_laporan_keuangan', 'activity', 11, 6, 3, 1),
(18, 'Produksi', 'produksi', 'truck', 0, 9, 4, 1),
(19, 'Job Order', 'job_order', 'activity', 18, 1, 4, 1),
(20, 'Pengajuan', 'pengajuan', 'activity', 18, 2, 4, 1),
(21, 'Pembayaran / Tagihan', 'pembayaran_tagihan', 'activity', 18, 3, 4, 1),
(22, 'Placement', 'placement', 'video', 0, 11, 5, 1),
(23, 'Job Order', 'job_order', 'activity', 22, 1, 5, 1),
(24, 'Pengajuan dan LogProof', 'pengajuan_dan_logproof', 'activity', 22, 2, 5, 1),
(25, 'Pembayaran / Tagihan', 'pembayaran_tagihan', 'activity', 22, 3, 5, 1),
(26, 'divider', 'divider', '', 0, 4, 0, 1),
(27, 'divider', 'divider', '', 0, 6, 0, 1),
(28, 'divider', 'divider', '', 0, 8, 0, 1),
(29, 'divider', 'divider', '', 0, 10, 0, 1),
(30, 'Data User', 'list_user', 'activity', 3, 2, 1, 1),
(31, 'Data Media', 'data_media', 'activity', 3, 3, 1, 1),
(32, 'Data Perusahaan Penyelenggara', 'data_penyelenggara', 'activity', 3, 4, 1, 1),
(33, 'Media Televisi', 'media_televisi', 'zap', 31, 1, 1, 1),
(34, 'Media Digital', 'media_digital', 'zap', 31, 2, 1, 1);

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
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;
