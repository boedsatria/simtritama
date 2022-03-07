-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2022 at 12:51 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4814692_simtritama`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(128) NOT NULL,
  `kategori_client` int(11) NOT NULL,
  `wilayah_client` int(11) NOT NULL,
  `alamat_client` text NOT NULL,
  `telepon_client` varchar(32) DEFAULT NULL,
  `desc_client` text DEFAULT NULL,
  `npwp_client` varchar(64) NOT NULL,
  `no_rek_client` varchar(64) NOT NULL,
  `nama_rek_client` varchar(64) NOT NULL,
  `bank_client` varchar(64) NOT NULL,
  `pic_client` varchar(64) NOT NULL,
  `photo_client` varchar(128) DEFAULT NULL,
  `parent_client` int(11) NOT NULL DEFAULT 0,
  `created_client` datetime NOT NULL DEFAULT current_timestamp(),
  `status_client` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `kategori_client`, `wilayah_client`, `alamat_client`, `telepon_client`, `desc_client`, `npwp_client`, `no_rek_client`, `nama_rek_client`, `bank_client`, `pic_client`, `photo_client`, `parent_client`, `created_client`, `status_client`) VALUES
(1, 'Kementerian Agama', 1, 1, 'Jalan Lapangan Banteng Barat No. 3 – 4 Jakarta 10710', '123455', NULL, '1234', '5678', 'Mastuki', 'Bank BRI', 'Bapak Yaqut', 'kementerian_agama_16368312819253.png', 0, '2021-11-14 02:21:22', 1),
(2, 'LIPI', 2, 1, 'Jl. Jend. Gatot Subroto 10, Jakarta 12710', '2131232', NULL, '4321', '8765', 'Lembaga Ilmu Pengetahuan Indonesia', 'Bank BRI', 'Bapak Handoko', 'lipi_16368317791040.png', 1, '2021-11-14 02:29:39', 1),
(3, 'Satria Media Teknologi', 3, 3, 'Jl. Raya Pasar Kecapi No. 54', '021 8347 6554', NULL, '9999', '1111', 'Sametek', 'Bank BRI', 'Budi Hartono', 'satria_media_teknologi_16368320595365.png', 1, '2021-11-14 02:34:19', 1),
(4, 'Bank BRI', 4, 1, 'Gd. BRI', '021993322', NULL, '99887766', '9876', 'Bank BRI', 'Bank BRI', 'Shinta', 'bank_bri_16369567734695.png', 1, '2021-11-15 13:12:53', 1),
(5, 'Divisi Intuition I Bank BRI', 4, 1, 'Jl. Jenderal Sudirman Kav.44-46. Jakarta 10210', '343434', NULL, '6565656', '232323', 'Divisi Intitution I', 'Bank BRI', 'Ali Tarigan', 'divisi_intuition_i_bank_bri_16369570654887.jpg', 1, '2021-11-15 13:17:45', 1),
(6, 'coba', 3, 3, '123', '123', NULL, '1234', '123', '123', '123', 'sapa kek', NULL, 1, '2021-12-14 23:46:31', 1),
(7, 'BASARNAS', 2, 1, 'Jl. Angkasa No. 23 ', '02114343', NULL, '12345', '12345', 'Bendahara', 'Bank BRI Mandirix', 'Mr. heru', 'basarnas_16395648456714.png', 1, '2021-12-15 17:40:46', 1),
(8, 'Direktorat KSKK', 1, 1, 'Jl. Lapangan Banteng', '', NULL, '00.146.124.3-075.000', '01010', 'DITJEN PENDIDIKAN ISLAM DITJEN PENDIDIKAN ISLAM KEMENTERIAN', 'bank', 'Bruri', NULL, 1, '2022-02-03 14:58:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_category`
--

CREATE TABLE `client_category` (
  `id_client_category` int(11) NOT NULL,
  `nama_client_category` varchar(128) NOT NULL,
  `status_client_category` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_category`
--

INSERT INTO `client_category` (`id_client_category`, `nama_client_category`, `status_client_category`) VALUES
(1, 'Kementerian', 1),
(2, 'Lembaga', 1),
(3, 'Swasta', 1),
(4, 'BUMN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coa_akun`
--

CREATE TABLE `coa_akun` (
  `id_coa` int(11) NOT NULL,
  `no_coa` varchar(64) NOT NULL,
  `nama_coa` varchar(128) NOT NULL,
  `area_coa` int(11) NOT NULL,
  `parent_coa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coa_akun`
--

INSERT INTO `coa_akun` (`id_coa`, `no_coa`, `nama_coa`, `area_coa`, `parent_coa`) VALUES
(1, '1000', 'HARTA', 0, 1),
(2, '1101', 'Kas (Petty cash)', 1, 1),
(3, '1102', 'BRI', 0, 1),
(4, '1103', 'Piutang Usaha', 0, 1),
(5, '1104', 'Piutang Karyawan', 0, 1),
(6, '1105', 'BCA', 0, 1),
(7, '1106', 'Inventaris', 0, 1),
(8, '1107', 'Akum. Penyusutan Inventaris', 0, 1),
(9, '1108', 'Petty Cash DKI Jakarta', 1, 1),
(10, '1109', 'Petty Cash Banten', 1, 1),
(11, '1110', 'Petty Cash Jawa Barat', 1, 1),
(12, '1111', 'Petty Cash Jawa Tengah', 1, 1),
(13, '1112', 'Petty Cash D.I. Yogyakarta', 1, 1),
(14, '1113', 'Petty Cash Jawa Timur', 1, 1),
(15, '1114', 'Petty Cash Bali', 1, 1),
(16, '1115', 'Petty Cash Sulawesi Selatan', 1, 1),
(17, '1116', 'Petty Cash Sulawesi Tenggara', 1, 1),
(18, '1117', 'Petty Cash Sumatera Barat', 1, 1),
(19, '1118', 'Petty Cash Bangka Belitung', 1, 1),
(20, '1120', 'BCA BMT', 0, 1),
(21, '2000', 'KEWAJIBAN', 0, 2),
(22, '2101', 'Hutang Usaha', 0, 2),
(23, '2102', 'Hutang Gaji - Owner', 0, 2),
(24, '2103', 'Hutang Gaji - Karyawan', 0, 2),
(25, '2104', 'Hutang Perawatan Inventaris', 0, 2),
(26, '2105', 'Hutang Perawatan Perlengkapan', 0, 2),
(27, '2106', 'Hutang Listrik, Air, Telepon, Keamanan, Internet', 0, 2),
(28, '2107', 'Hutang Konsumsi Rumah Tangga', 0, 2),
(29, '2108', 'Hutang Tunjangan Transportasi', 0, 2),
(30, '2109', 'Hutang Tunjangan Kesehatan', 0, 2),
(31, '2110', 'Hutang Tunjangan Kehadiran', 0, 2),
(32, '2111', 'Hutang Pemegang Saham', 0, 2),
(33, '3000', 'MODAL', 0, 3),
(34, '3101', 'Modal', 0, 3),
(35, '3102', 'Prive', 0, 3),
(36, '3103', 'Laba Ditahan', 0, 3),
(37, '3104', 'Laba Tahun Berjalan', 0, 3),
(38, '3105', 'Dana Investor', 0, 3),
(39, '4000', 'PENDAPATAN', 0, 4),
(40, '4101', 'Pendapatan', 0, 4),
(41, '4102', 'Potongan Pendapatan', 0, 4),
(42, '5000', 'Beban Lain-lain', 0, 5),
(43, '5001', 'Pengeluaran kode M', 0, 5),
(44, '5002', 'Pengeluaran kode B', 0, 5),
(45, '5003', 'Pengeluaran bu In', 0, 5),
(46, '5004', 'Pengeluaran JB', 0, 5),
(47, '5005', 'Pengeluaran L', 0, 5),
(48, '6000', 'Beban Usaha', 0, 6),
(49, '6101', 'Beban Gaji - Owner', 0, 6),
(50, '6102', 'Beban Gaji - Karyawan', 0, 6),
(51, '6103', 'Beban Transportasi', 0, 6),
(52, '6104', 'Beban Sewa', 0, 6),
(53, '6105', 'Beban Perawatan Inventaris', 0, 6),
(54, '6106', 'Beban Perawatan Perlengkapan', 0, 6),
(55, '6107', 'Beban Listrik, Air, Telepon, Keamanan, Internet', 0, 6),
(56, '6108', 'Konsumsi Rumah Tangga', 0, 6),
(57, '6109', 'Perlengkapan', 0, 6),
(58, '6110', 'Biaya Placement', 0, 6),
(59, '6111', 'Biaya Produksi', 0, 6),
(60, '6112', 'Sumbangan', 0, 6),
(61, '6113', 'Biaya Keselamatan Kerja dan lainnya', 0, 6),
(62, '6114', 'Sewa Dibayar Dimuka', 0, 6),
(63, '6115', 'Uang Muka Pembelian', 0, 6),
(64, '6116', 'Tunjangan Transportasi', 0, 6),
(65, '6117', 'Tunjangan Kesehatan', 0, 6),
(66, '6118', 'Tunjangan Kehadiran', 0, 6),
(67, '6119', 'Operasional', 0, 6),
(68, '6120', 'Beban Pajak', 0, 6),
(69, '6121', 'Konsumsi Direksi', 0, 6),
(70, '6122', 'Beban Research & Development', 0, 6),
(71, '6123', 'Biaya Renovasi', 0, 6),
(72, '6124', 'Biaya Materai', 0, 6),
(73, '6125', 'Biaya Admin Bank', 0, 6),
(74, '6126', 'Biaya Pengiriman', 0, 6),
(75, '6127', 'Biaya Pemasangan dan Pembongkaran LED', 0, 6),
(76, '6128', 'Biaya THR', 0, 6),
(77, '6129', 'Biaya Selisih Kurs', 0, 6),
(78, '7000', 'Entertainment', 0, 6),
(79, '8000', 'Profit Sharing', 0, 6),
(80, '9000', 'Reward Karyawan', 0, 6);

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

-- --------------------------------------------------------

--
-- Table structure for table `kbli`
--

CREATE TABLE `kbli` (
  `id_kbli` int(11) NOT NULL,
  `kode_kbli` varchar(16) NOT NULL,
  `nama_kbli` varchar(255) NOT NULL,
  `desc_kbli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kbli`
--

INSERT INTO `kbli` (`id_kbli`, `kode_kbli`, `nama_kbli`, `desc_kbli`) VALUES
(1, '62019', 'Aktivitas Pemrograman Komputer Lainnya', 'Kelompok ini mencakup konsultasi yang berkaitan dengan analisis, desain dan pemrograman dari sistem yang siap pakai lainnya (selain yang sudah dicakup di kelompok 62011 dan 62015). Kegiatan ini biasanya menyangkut analisis kebutuhan pengguna komputer dan permasalahannya, pemecahan permasalahan, dan membuat perangkat lunak berkaitan dengan pemecahan masalah tersebut. Termasuk pula penulisan program sederhana sesuai kebutuhan pengguna komputer. Perancangan struktur dan isi dari, dan/atau penulisan kode komputer yang diperlukan untuk membuat dan mengimplementasikan, seperti piranti lunak sistem (pemutakhiran dan perbaikan), piranti lunak aplikasi (pemutakhiran dan perbaikan), basis data dan laman web. Termasuk penyesuaian perangkat lunak, misalnya modifikasi dan penyesuaian konfigurasi aplikasi yang sudah ada sehingga berfungsi dalam lingkungan sistem informasi klien. Kegiatan penyesuaian perangkat lunak sejenis yang dilaksanakan sebagai bagian yang tak terpisahkan dari penjualan perangkat lunak dimasukkan dalam subgolongan 47413.'),
(2, '59111', 'Aktivitas Produksi Film, Video dan Program Televisi Oleh Pemerintah', 'Kelompok ini mencakup usaha pembuatan dan produksi gambar bergerak, film, video, animasi, program televisi atau iklan bergerak televisi yang dikelola oleh pemerintah atas dasar balas jasa juga usaha pembuatan film untuk televisi dan jasa pengiriman film dan agen pembukuan film. Kelompok ini tidak mecakup aktivitas duplikasi film dan reproduksi audio/video dari master copies (18202) dan animasi pascaproduksi (5912).'),
(3, '59112', 'Aktivitas Produksi Film, Video dan Program Televisi Oleh Swasta', 'Kelompok ini mencakup usaha pembuatan dan produksi gambar bergerak, film, video, animasi, program televisi atau iklan bergerak televisi yang dikelola oleh swasta atas dasar balas jasa juga usaha pembuatan film untuk televisi dan jasa pengiriman film dan agen pembukuan film. Kelompok ini tidak mecakup aktivitas duplikasi film dan reproduksi audio/video dari master copies (18202) dan animasi pascaproduksi (5912).'),
(4, '336', 'coba', 'ini hanya coba');

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
  `status_media` tinyint(1) NOT NULL DEFAULT 1
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
(11, 'Elgangga', 'elgangga@gmail.com', '5334434223', 'elgangga_16374992029751.png', 2, 5, 3, 'Jl. Serma Marjuki No.30, RT.005/RW.002, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141', 'https://g.page/Elgangga?share', '', 1, 1),
(12, 'MNC TV', 'mnc@gmail.com', '08211', 'mnc_tv_16395655027942.png', 1, 1, 1, 'Jl. Raya Perjuangan No. 1, Kebon Jeruk, Jakarta, Indonesia', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_category`
--

CREATE TABLE `media_category` (
  `id_media_category` int(11) NOT NULL,
  `nama_media_category` varchar(128) NOT NULL,
  `status_media_category` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_category`
--

INSERT INTO `media_category` (`id_media_category`, `nama_media_category`, `status_media_category`) VALUES
(1, 'Media Televisi', 1),
(2, 'Media Digital', 1),
(3, 'Media Luar Ruang', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `slug_menu` varchar(128) NOT NULL,
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
(3, 'Masterdata', 'masterdata', 'edit', 0, 3, 0, 1),
(4, 'Data Client', 'list_client', 'activity', 3, 1, 0, 1),
(5, 'P I C', 'pic', 'user', 0, 5, 2, 1),
(6, 'Data Project', 'list_project', 'activity', 5, 1, 2, 1),
(7, 'E-Faktur', 'e_faktur', 'activity', 5, 2, 2, 1),
(8, 'Media Order / Production Order', 'media_order', 'activity', 5, 3, 2, 1),
(9, 'File Upload', 'file_upload', 'activity', 5, 4, 2, 1),
(10, 'Validasi / Laporan', 'validasi_laporan', 'activity', 5, 5, 2, 1),
(11, 'Finance', 'finance', 'dollar-sign', 0, 7, 3, 1),
(12, 'Diagram Monitoring', 'diagram_monitoring', 'activity', 11, 1, 3, 1),
(13, 'Buku Besar', 'buku_besar', 'activity', 11, 2, 3, 1),
(14, 'Petty Cash', 'petty_cash', 'activity', 11, 3, 3, 1),
(15, 'Aset dan Penyusutan', 'aset_dan_penyusutan', 'activity', 11, 4, 3, 1),
(16, 'Aset dan Penyusutan', 'aset_dan_penyusutan', 'activity', 11, 5, 3, 1),
(17, 'General Ledger', 'general_ledger', 'activity', 11, 6, 3, 1),
(18, 'Cetak Laporan Keuangan', 'cetak_laporan_keuangan', 'activity', 11, 7, 3, 1),
(19, 'Produksi', 'produksi', 'truck', 0, 9, 4, 1),
(20, 'Job Order', 'job_order', 'activity', 18, 1, 4, 1),
(21, 'Pengajuan', 'pengajuan', 'activity', 18, 2, 4, 1),
(22, 'Pembayaran / Tagihan', 'pembayaran_tagihan', 'activity', 18, 3, 4, 1),
(23, 'Placement', 'placement', 'video', 0, 11, 5, 1),
(24, 'Job Order', 'job_order', 'activity', 22, 1, 5, 1),
(25, 'Pengajuan dan LogProof', 'pengajuan_dan_logproof', 'activity', 22, 2, 5, 1),
(26, 'Pembayaran / Tagihan', 'pembayaran_tagihan', 'activity', 22, 3, 5, 1),
(27, 'divider', 'divider', '', 0, 4, 0, 1),
(28, 'divider', 'divider', '', 0, 6, 0, 1),
(29, 'divider', 'divider', '', 0, 8, 0, 1),
(30, 'divider', 'divider', '', 0, 10, 0, 1),
(31, 'Data User', 'list_user', 'activity', 3, 2, 1, 1),
(32, 'Data Media', 'list_media', 'activity', 3, 3, 1, 1),
(33, 'Data Perusahaan Penyelenggara', 'list_penyelenggara', 'activity', 3, 4, 1, 1),
(34, 'Media Televisi', 'media_televisi', 'zap', 31, 1, 1, 1),
(35, 'Media Digital', 'media_digital', 'zap', 31, 2, 1, 1),
(36, 'Media Luar Ruang', 'media_luar_ruang', 'zap', 31, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggara`
--

CREATE TABLE `penyelenggara` (
  `id_penyelenggara` int(11) NOT NULL,
  `nama_penyelenggara` varchar(128) NOT NULL,
  `telepon_penyelenggara` varchar(32) NOT NULL,
  `email_penyelenggara` varchar(128) NOT NULL,
  `alamat_penyelenggara` text NOT NULL,
  `kbli_penyelenggara` text NOT NULL,
  `photo_penyelenggara` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penyelenggara`
--

INSERT INTO `penyelenggara` (`id_penyelenggara`, `nama_penyelenggara`, `telepon_penyelenggara`, `email_penyelenggara`, `alamat_penyelenggara`, `kbli_penyelenggara`, `photo_penyelenggara`) VALUES
(1, 'Satria Media Teknologi', '081289489911', 'hello@satriacorp.id', 'Jl. Raya Pasar Kecapi No. 34', '62019', 'satria_media_teknologi_16385104485903.png'),
(2, 'Seratus Tiga Delapan', '', '', 'Tb Simatupang', '62019,59111', NULL),
(3, 'PT Pepeng', '', '', 'Kp. Sawah', '59112', NULL),
(4, 'Quadrata', '(+62)21-82746462', 'info@quadrata.co.id', 'Jl. Kavlingdpa No.17, RT.003/RW.012, Jatimekar, Kec. Jatiasih, Kota Bks, Jawa Barat 17422', '59111, 59112, 62019', 'quadrata_16385079397749.jpeg'),
(5, 'PT Purwanto Senantiasa Sejahtera', '093434', 'admin@purwanto.com', 'Green Savana', '59111, 59112', NULL),
(6, 'PT Bina PErtiwi', '08642', 'bina@gmail.com', 'alamat', '62019, 59111, 59112, 336', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petty_cash`
--

CREATE TABLE `petty_cash` (
  `id_pc` int(11) NOT NULL,
  `nama_pc` varchar(128) NOT NULL,
  `masuk_pc` decimal(11,2) NOT NULL,
  `keluar_pc` decimal(11,2) NOT NULL,
  `pa_pc` int(11) NOT NULL,
  `file_pc` varchar(128) NOT NULL,
  `wilayah_pc` int(11) NOT NULL,
  `creator_pc` int(11) NOT NULL,
  `tanggal_pc` datetime NOT NULL,
  `date_create_pc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petty_cash`
--

INSERT INTO `petty_cash` (`id_pc`, `nama_pc`, `masuk_pc`, `keluar_pc`, `pa_pc`, `file_pc`, `wilayah_pc`, `creator_pc`, `tanggal_pc`, `date_create_pc`) VALUES
(1, 'Beli bensin', 200000.00, 0.00, 2, 'pettycash_16460498597121.png', 1101, 0, '2022-02-28 00:00:00', '2022-02-28 19:04:20'),
(2, 'test heru', 1000.00, 0.00, 2, 'pettycash_16460506622747.png', 1110, 0, '2022-02-28 00:00:00', '2022-02-28 19:17:42'),
(3, 'test heru', 1000.00, 0.00, 2, 'pettycash_16460554306498.jpg', 5000, 0, '2022-02-28 00:00:00', '2022-02-28 20:37:10'),
(4, 'test heru', 1000.00, 0.00, 4, 'pettycash_16460555971267.png', 1101, 0, '2022-02-28 00:00:00', '2022-02-28 20:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_category`
--

CREATE TABLE `produksi_category` (
  `id_pc` int(11) NOT NULL,
  `nama_pc` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produksi_category`
--

INSERT INTO `produksi_category` (`id_pc`, `nama_pc`) VALUES
(1, 'Video Shooting'),
(2, 'Video Mapping'),
(3, 'Video Animasi 2D'),
(4, 'Video Animasi 3D'),
(5, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `no_project` varchar(64) NOT NULL,
  `nama_project` varchar(128) NOT NULL,
  `desc_project` text NOT NULL,
  `client_project` int(11) NOT NULL,
  `pelaksana_project` int(11) NOT NULL,
  `jenis_project` int(11) NOT NULL,
  `no_spk_project` varchar(64) NOT NULL,
  `tgl_spk_project` date NOT NULL,
  `file_spk_project` varchar(128) NOT NULL,
  `no_spmk_project` varchar(64) NOT NULL,
  `tgl_spmk_project` date NOT NULL,
  `file_spmk_project` varchar(128) NOT NULL,
  `no_bast_project` varchar(64) NOT NULL,
  `tgl_bast_project` date NOT NULL,
  `file_bast_project` varchar(128) NOT NULL,
  `no_bap_project` varchar(64) NOT NULL,
  `tgl_bap_project` date NOT NULL,
  `file_bap_project` varchar(128) NOT NULL,
  `durasi_project` decimal(11,2) NOT NULL,
  `mulai_project` datetime NOT NULL,
  `selesai_project` datetime NOT NULL,
  `nilai_project` decimal(16,2) NOT NULL,
  `anggaran_produksi_project` decimal(16,2) NOT NULL,
  `anggaran_placement_project` decimal(16,2) NOT NULL,
  `sp2d_project` decimal(16,2) NOT NULL,
  `tgl_pencairan_project` date NOT NULL,
  `created_project` datetime NOT NULL DEFAULT current_timestamp(),
  `status_project` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `no_project`, `nama_project`, `desc_project`, `client_project`, `pelaksana_project`, `jenis_project`, `no_spk_project`, `tgl_spk_project`, `file_spk_project`, `no_spmk_project`, `tgl_spmk_project`, `file_spmk_project`, `no_bast_project`, `tgl_bast_project`, `file_bast_project`, `no_bap_project`, `tgl_bap_project`, `file_bap_project`, `durasi_project`, `mulai_project`, `selesai_project`, `nilai_project`, `anggaran_produksi_project`, `anggaran_placement_project`, `sp2d_project`, `tgl_pencairan_project`, `created_project`, `status_project`) VALUES
(2, 'GLO207122021', 'Contoh Kegiatan 1x', 'Deskripsi kegiatan 1x', 0, 0, 3, '', '2021-12-01', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.00, 0.00, 0.00, 0.00, '0000-00-00', '2021-12-07 18:53:01', 1),
(3, 'GLO307122021', 'Placement', 'apakek', 0, 0, 2, '', '2021-12-03', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.00, 0.00, 0.00, 0.00, '0000-00-00', '2021-12-07 19:02:07', 1),
(4, 'GLO427012022', 'pro an pla xxxs', 'asasdsdad dgfdgfdgs', 6, 5, 3, '1122331', '2022-12-01', 'pro_an_pla_xxxs_16393091518336.pdf', '1231', '2022-12-12', 'pro_an_pla_xxxs_16393091518396.pdf', '56781', '2022-12-12', 'pro_an_pla_xxxs_16393091518443.pdf', '9081', '0000-00-00', 'pro_an_pla_xxxs_16393091518492.pdf', 30.00, '2022-12-01 00:00:00', '2022-01-31 00:00:00', 500000000.00, 0.00, 0.00, 490000000.00, '2022-12-25', '2021-12-07 20:30:13', 1),
(5, 'GLO503022022', 'Advertorial Keselamatan Kerja', 'video publikasi prosedur keselamatan kerja ketinggian', 1, 6, 3, '001/depag/12/2021', '2022-12-01', 'advertorial_keselamatan_kerja_16395682906677.pdf', '001b/depag/12/2021', '2022-12-03', 'advertorial_keselamatan_kerja_16395682906767.pdf', '001/bast/depag/12/2021', '2022-12-15', 'advertorial_keselamatan_kerja_16395682906886.pdf', '001/bap/depag/12/2021', '0000-00-00', 'advertorial_keselamatan_kerja_16395682906998.pdf', 12.00, '2022-12-01 00:00:00', '2022-12-12 00:00:00', 178000000.00, 0.00, 0.00, 15858181818.00, '2022-12-26', '2021-12-15 18:00:53', 1),
(6, 'GLO628122021', 'Coba Kegiatan baru', 'Ya kegiatan baru di input', 0, 0, 3, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.00, 0.00, 0.00, 0.00, '0000-00-00', '2021-12-28 11:38:06', 1),
(7, 'GLO727012022', 'test', 'coba desc test', 4, 5, 3, '123', '2022-01-27', '', '123', '2022-01-27', '', '123', '2022-01-27', '', '123', '0000-00-00', '', 0.00, '2022-01-27 00:00:00', '2022-01-27 00:00:00', 200.00, 0.00, 0.00, 17818.00, '2022-01-27', '2022-01-27 13:46:55', 1),
(9, 'GLO927012022', 'Coba', 'Ger', 0, 0, 3, '111', '2022-01-27', '', '2', '2022-01-27', '', '3', '2022-01-27', '', '4', '0000-00-00', '', 0.00, '2022-01-27 00:00:00', '2022-01-27 00:00:00', 200000000.00, 0.00, 0.00, 178181818.18, '2022-01-27', '2022-01-27 19:49:16', 1),
(10, 'GLO1003022022', 'honda', 'dfvdfvd', 1, 6, 3, '001', '2022-02-03', '', '001', '2022-02-03', '', '111', '2022-02-03', '', '111', '0000-00-00', '', 0.00, '2022-02-03 00:00:00', '2022-02-03 00:00:00', 0.00, 0.00, 0.00, 0.00, '2022-02-03', '2022-02-03 14:09:31', 1),
(11, 'GLO1103022022', 'coba project 3 feb 22', 'coba by her', 7, 1, 3, '001', '2022-02-03', '', '001', '2022-02-04', '', '001', '2022-03-30', '', '001', '0000-00-00', '', 0.00, '2022-02-03 00:00:00', '2022-03-30 00:00:00', 300000000.00, 0.00, 0.00, 267272727.27, '2022-04-10', '2022-02-03 14:28:30', 1),
(12, 'GLO1203022022', 'percobaan 1', 'dzgnsfgndfhndh', 0, 0, 3, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 0.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.00, 0.00, 0.00, 0.00, '0000-00-00', '2022-02-03 14:35:58', 1),
(13, 'GLO1303022022', 'Produksi dan penayangan ILM KSKK', 'Produksi dan Penayangan Iklan Layanan Masyarakat KSKK di TV Nasional Inews TV', 1, 1, 3, '720.B/DJ.I/Dt.I.IV/Ks.01.7/05/2021', '2022-02-03', '', '720.B/DJ.I/Dt.I.IV/Ks.01.7/05/2021', '2022-02-03', '', '720.B/DJ.I/Dt.I.IV/Ks.01.7/05/2021', '2022-02-10', '', '720.B/DJ.I/Dt.I.IV/Ks.01.7/05/2021', '0000-00-00', '', 0.00, '2022-02-03 00:00:00', '2022-02-10 00:00:00', 199000000.00, 0.00, 0.00, 177290909.09, '2022-02-10', '2022-02-03 14:37:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_placement`
--

CREATE TABLE `project_placement` (
  `id_pm` int(11) NOT NULL,
  `parent_pm` int(11) NOT NULL,
  `judul_pm` varchar(255) NOT NULL,
  `kategory_pm` int(11) NOT NULL,
  `jenis_pm` int(11) NOT NULL,
  `wilayah_pm` int(11) NOT NULL,
  `spot_pm` varchar(128) NOT NULL,
  `cost_pm` decimal(16,2) NOT NULL,
  `discount_pm` decimal(16,2) NOT NULL,
  `desc_pm` text NOT NULL,
  `materi_pm` varchar(128) NOT NULL,
  `status_pm` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_placement`
--

INSERT INTO `project_placement` (`id_pm`, `parent_pm`, `judul_pm`, `kategory_pm`, `jenis_pm`, `wilayah_pm`, `spot_pm`, `cost_pm`, `discount_pm`, `desc_pm`, `materi_pm`, `status_pm`) VALUES
(3, 5, 'VERSI 1', 1, 1, 2, '', 0.00, 0.00, '', '', 1),
(4, 10, '111', 1, 1, 2, '', 0.00, 0.00, '', '', 1),
(5, 11, '111', 1, 1, 1, '', 0.00, 0.00, '', '', 1),
(6, 13, 'Penayangan ILM KSKK di TV Nasional Inews TV', 1, 1, 3, '', 0.00, 0.00, 'Penayangan ILM KSKK Versi 1 di TV Nasional Inews TV', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_produksi`
--

CREATE TABLE `project_produksi` (
  `id_pp` int(11) NOT NULL,
  `parent_pp` int(11) NOT NULL,
  `judul_pp` varchar(255) NOT NULL,
  `kategori_pp` int(11) NOT NULL,
  `deadline_pp` datetime NOT NULL,
  `desc_pp` text NOT NULL,
  `status_pp` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_produksi`
--

INSERT INTO `project_produksi` (`id_pp`, `parent_pp`, `judul_pp`, `kategori_pp`, `deadline_pp`, `desc_pp`, `status_pp`) VALUES
(6, 7, 'Keselamatan Kerja dalam ruang', 0, '2022-02-02 14:49:50', 'Video Shooting Taleng Lucky Bayu Purnomo di Ruang Assembly PT Astra', 1),
(13, 7, 'Video Versi Dua', 1, '2022-02-28 00:00:00', 'Shoting pepeng vs helmi', 1),
(14, 5, 'Pembuatan Video ILM', 1, '2022-02-10 00:00:00', 'Shooting di Westin', 1),
(15, 10, '1', 3, '2022-02-23 00:00:00', 'ddd', 1),
(16, 11, '1', 1, '2022-02-03 00:00:00', 'ccc', 1),
(17, 13, 'KSKK Versi 1', 1, '2022-02-03 00:00:00', 'Pembuatan Iklan Layanan Masyarakat KSKK Versi 1 durasi 1 menit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Super Admin'),
(2, 'PIC'),
(3, 'Finance'),
(4, 'Produksi'),
(5, 'Placement');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `nip_user` varchar(32) NOT NULL,
  `password_user` varchar(128) NOT NULL,
  `photo_user` varchar(128) DEFAULT NULL,
  `telepon_user` varchar(32) DEFAULT NULL,
  `role_user` int(11) NOT NULL DEFAULT 4,
  `created_user` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_user` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `nip_user`, `password_user`, `photo_user`, `telepon_user`, `role_user`, `created_user`, `status_user`) VALUES
(1, 'Budi Satria', 'admin@simtritama.id', 'SUP1112021', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'boed.jpg', '081289489911', 1, '2021-10-26 11:50:19', 2),
(2, 'Heru Purwanto', 'admin2@simtritama.id', '5678', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'heru.jpg', '082117474055', 1, '2021-10-26 11:50:19', 1),
(3, 'Helmi HC Rizky', 'admin3@simtritama.id', '3456', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'helmi.jpg', '081283252877', 3, '2021-10-26 11:50:19', 1),
(4, 'Mahfudz', 'mahfudz@btm.com', '41111', '$2y$10$4U55a6GApZZUUEifisYX9eQgGOtQDyakP6DIR.VIKQwDzBKo9TWoW', 'mahmudz_16366065222760.jpeg', '081288334455', 2, '2021-11-11 04:55:22', 1),
(5, 'Putri', 'putri@bmt.com', 'ANCE51111', '$2y$10$h./weqIHAfBHV/wiM7A8AOqPRC0yFM3rHX1P8bzJ97WYzumgYdIpi', 'putri_16366494254633.jpg', '08123322112233', 3, '2021-11-11 16:50:25', 1),
(6, 'Arik Pepeng', 'peps@gmail.com', 'ROD6112021', '$2y$10$Q9V7oKWhgHbWyXk/hdqS0eC/z2cTI5e6GI8uYflYx32YWPzIHzRYK', 'arikpepeng_16366997831032.png', '0819223344', 4, '2021-11-12 06:49:43', 1),
(7, 'Akbars', 'akbar2@gmail.com', 'PLA7112021', '$2y$10$SPa15NjI2Tu9ZLSTTG.DmO6mXoq2DqP473wREOYG98YjF3A2y0gNO', 'akbars_16367266656731.jpeg', '08179966557', 5, '2021-11-12 06:52:58', 1),
(8, 'trial', 'trial@satriacorp.id', 'PIC8022022', '$2y$10$sZ86aM4iH1re35Pzty4TO.bq/cfGBZ76woSSl6lGxeZbQl5rXEZgm', NULL, '', 2, '2022-02-03 07:20:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(64) NOT NULL,
  `desc_wilayah` text NOT NULL,
  `parent_wilayah` int(11) NOT NULL,
  `status_wilayah` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`, `desc_wilayah`, `parent_wilayah`, `status_wilayah`) VALUES
(1, 'DKI Jakarta', '', 0, 1),
(2, 'Jawa Barat', '', 0, 1),
(3, 'Bekasi', '', 2, 1),
(4, 'Bogor', '', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `client_category`
--
ALTER TABLE `client_category`
  ADD PRIMARY KEY (`id_client_category`);

--
-- Indexes for table `coa_akun`
--
ALTER TABLE `coa_akun`
  ADD PRIMARY KEY (`id_coa`);

--
-- Indexes for table `golongan_akun`
--
ALTER TABLE `golongan_akun`
  ADD PRIMARY KEY (`id_gol_akun`);

--
-- Indexes for table `kbli`
--
ALTER TABLE `kbli`
  ADD PRIMARY KEY (`id_kbli`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `media_category`
--
ALTER TABLE `media_category`
  ADD PRIMARY KEY (`id_media_category`);

--
-- Indexes for table `media_type`
--
ALTER TABLE `media_type`
  ADD PRIMARY KEY (`id_media_type`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  ADD PRIMARY KEY (`id_penyelenggara`);

--
-- Indexes for table `petty_cash`
--
ALTER TABLE `petty_cash`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indexes for table `produksi_category`
--
ALTER TABLE `produksi_category`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `project_placement`
--
ALTER TABLE `project_placement`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indexes for table `project_produksi`
--
ALTER TABLE `project_produksi`
  ADD PRIMARY KEY (`id_pp`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_category`
--
ALTER TABLE `client_category`
  MODIFY `id_client_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coa_akun`
--
ALTER TABLE `coa_akun`
  MODIFY `id_coa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `golongan_akun`
--
ALTER TABLE `golongan_akun`
  MODIFY `id_gol_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kbli`
--
ALTER TABLE `kbli`
  MODIFY `id_kbli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media_category`
--
ALTER TABLE `media_category`
  MODIFY `id_media_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media_type`
--
ALTER TABLE `media_type`
  MODIFY `id_media_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petty_cash`
--
ALTER TABLE `petty_cash`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produksi_category`
--
ALTER TABLE `produksi_category`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_placement`
--
ALTER TABLE `project_placement`
  MODIFY `id_pm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_produksi`
--
ALTER TABLE `project_produksi`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
