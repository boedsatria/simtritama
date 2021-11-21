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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama_media` varchar(128) NOT NULL,
  `email_media` varchar(128) NOT NULL,
  `telepon_media` varchar(32) NOT NULL,
  `photo_media` varchar(128) NOT NULL,
  `kategori_media` int(11) NOT NULL,
  `type_media` int(11) NOT NULL,
  `wilayah_media` int(11) NOT NULL,
  `alamat_media` text NOT NULL,
  `titik_media` text NOT NULL,
  `desc_media` text NOT NULL,
  `parent_media` int(11) NOT NULL,
  `status_media` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `nama_media`, `email_media`, `telepon_media`, `photo_media`, `kategori_media`, `type_media`, `wilayah_media`, `alamat_media`, `titik_media`, `desc_media`, `parent_media`, `status_media`) VALUES
(1, 'Transcorp', 'admin@transcorp.id', '0922323', 'transcorp_16374874768877.png', 1, 1, 1, 'Jl. Mampang Prapatan', 'https://goo.gl/maps/MNg1YRcjudgp4eXVA', '', 0, 1),
(2, 'Trans TV', 'transtv@transcorp.id', '2323232', 'trans_tv_16374960839393.png', 1, 1, 1, 'Jalan Kapten Tendean Kav 12-14A, Mampang Prapatan, Jakarta Selatan, Indonesia', '', '', 0, 1),
(3, 'MNC Group', 'info@mnc.tv', '232323232', 'mnc_group_16374962775097.png', 1, 1, 1, 'Gedung MNC Tower Lt. Dasar, Jalan Kebon Sirih No. 17-19, Kebon Sirih, Menteng, RT.15/RW.7, Kb. Sirih, Menteng, Kota Jakarta Pusat', '', '', 1, 1),
(4, 'PT Perkasa Ads', '232@asdad.asd', '35435354354', '', 3, 2, 2, 'Jl. Padjadjaran Bogor', '', '', 0, 1),
(5, 'Octorion', 'octorion@gmail.com', '092323', '', 2, 3, 3, 'Jl. A. Yani No. 13', '', '', 1, 1),
(6, 'MRA', 'mra@gmail.com', '2323232', '', 2, 5, 1, 'Jl. Tendean', '', '', 1, 1),
(7, 'Bekasi TV', 'bekasi@gmail.com', '2223233232', '', 1, 4, 3, '', '', '', 1, 1),
(8, 'Radio Kejayaan', 'rkj@gmail.com', '33535353', '', 2, 5, 1, 'Jl. Jakarta', '', '', 1, 1),
(9, 'i-radio', 'iradio@gmail.com', '23232', '', 2, 5, 1, 'Kemang', '', '', 1, 1),
(10, 'hardrock fm', 'hrfm@gmail.com', '3353535353', '', 2, 5, 1, 'Jl. Sejahtera', '', '', 1, 1),
(11, 'Elgangga', 'elgangga@gmail.com', '5334434223', 'elgangga_16374992029751.png', 2, 5, 3, 'Jl. Serma Marjuki No.30, RT.005/RW.002, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141', 'https://g.page/Elgangga?share', '', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
