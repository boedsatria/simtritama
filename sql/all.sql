-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 15, 2021 at 06:16 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

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
  `nama_client` varchar(128) NOT NULL,
  `kategori_client` int(11) NOT NULL,
  `wilayah_client` int(11) NOT NULL,
  `alamat_client` text NOT NULL,
  `telepon_client` varchar(32) DEFAULT NULL,
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

INSERT INTO `client` (`id_client`, `nama_client`, `kategori_client`, `wilayah_client`, `alamat_client`, `telepon_client`, `desc_client`, `npwp_client`, `no_rek_client`, `nama_rek_client`, `bank_client`, `pic_client`, `photo_client`, `parent_client`, `created_client`, `status_client`) VALUES
(1, 'Kementerian Agama', 1, 1, 'Jalan Lapangan Banteng Barat No. 3 – 4 Jakarta 10710', '123455', NULL, '1234', '5678', 'Mastuki', 'Bank BRI', 'Bapak Yaqut', 'kementerian_agama_16368312819253.png', 0, '2021-11-14 02:21:22', 1),
(2, 'LIPI', 2, 1, 'Jl. Jend. Gatot Subroto 10, Jakarta 12710', '2131232', NULL, '4321', '8765', 'Lembaga Ilmu Pengetahuan Indonesia', 'Bank BRI', 'Bapak Handoko', 'lipi_16368317791040.png', 1, '2021-11-14 02:29:39', 1),
(3, 'Satria Media Teknologi', 3, 3, 'Jl. Raya Pasar Kecapi No. 54', '021 8347 6554', NULL, '9999', '1111', 'Sametek', 'Bank BRI', 'Budi Hartono', 'satria_media_teknologi_16368320595365.png', 1, '2021-11-14 02:34:19', 1),
(4, 'Bank BRI', 4, 1, 'Gd. BRI', '021993322', NULL, '99887766', '9876', 'Bank BRI', 'Bank BRI', 'Shinta', 'bank_bri_16369567734695.png', 1, '2021-11-15 13:12:53', 1),
(5, 'Divisi Intuition I Bank BRI', 4, 1, 'Jl. Jenderal Sudirman Kav.44-46. Jakarta 10210', '343434', NULL, '6565656', '232323', 'Divisi Intitution I', 'Bank BRI', 'Ali Tarigan', 'divisi_intuition_i_bank_bri_16369570654887.jpg', 1, '2021-11-15 13:17:45', 1),
(6, 'coba', 3, 3, '123', '123', NULL, '1234', '123', '123', '123', 'sapa kek', NULL, 1, '2021-12-14 23:46:31', 1);

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
(3, '59112', 'Aktivitas Produksi Film, Video dan Program Televisi Oleh Swasta', 'Kelompok ini mencakup usaha pembuatan dan produksi gambar bergerak, film, video, animasi, program televisi atau iklan bergerak televisi yang dikelola oleh swasta atas dasar balas jasa juga usaha pembuatan film untuk televisi dan jasa pengiriman film dan agen pembukuan film. Kelompok ini tidak mecakup aktivitas duplikasi film dan reproduksi audio/video dari master copies (18202) dan animasi pascaproduksi (5912).');

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
(31, 'Data Media', 'list_media', 'activity', 3, 3, 1, 1),
(32, 'Data Perusahaan Penyelenggara', 'list_penyelenggara', 'activity', 3, 4, 1, 1),
(33, 'Media Televisi', 'media_televisi', 'zap', 31, 1, 1, 1),
(34, 'Media Digital', 'media_digital', 'zap', 31, 2, 1, 1),
(35, 'Media Luar Ruang', 'media_luar_ruang', 'zap', 31, 3, 1, 1);

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
(5, 'PT Purwanto Senantiasa Sejahtera', '093434', 'admin@purwanto.com', 'Green Savana', '59111, 59112', NULL);

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
  `sp2d_project` decimal(16,2) NOT NULL,
  `tgl_pencairan_project` date NOT NULL,
  `created_project` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_project` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `no_project`, `nama_project`, `desc_project`, `client_project`, `pelaksana_project`, `jenis_project`, `no_spk_project`, `tgl_spk_project`, `file_spk_project`, `no_spmk_project`, `tgl_spmk_project`, `file_spmk_project`, `no_bast_project`, `tgl_bast_project`, `file_bast_project`, `no_bap_project`, `tgl_bap_project`, `file_bap_project`, `durasi_project`, `mulai_project`, `selesai_project`, `nilai_project`, `sp2d_project`, `tgl_pencairan_project`, `created_project`, `status_project`) VALUES
(2, 'GLO207122021', 'Contoh Kegiatan 1x', 'Deskripsi kegiatan 1x', 0, 0, 3, '', '2021-12-01', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '0.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0.00', '0.00', '0000-00-00', '2021-12-07 18:53:01', 1),
(3, 'GLO307122021', 'Placement', 'apakek', 0, 0, 2, '', '2021-12-03', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '0.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0.00', '0.00', '0000-00-00', '2021-12-07 19:02:07', 1),
(4, 'GLO414122021', 'pro an pla xxxs', 'asasdsdad dgfdgfdgs', 3, 0, 3, '1122331', '2021-12-01', 'pro_an_pla_xxxs_16393091518336.pdf', '1231', '2021-12-12', 'pro_an_pla_xxxs_16393091518396.pdf', '56781', '2021-12-12', 'pro_an_pla_xxxs_16393091518443.pdf', '9081', '0000-00-00', 'pro_an_pla_xxxs_16393091518492.pdf', '30.00', '2021-12-01 00:00:00', '2021-01-31 00:00:00', '500000000.00', '490000000.00', '2021-12-25', '2021-12-07 20:30:13', 1);

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
  `cost_pm` decimal(16,2) NOT NULL,
  `desc_pm` text NOT NULL,
  `status_pm` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_produksi`
--

CREATE TABLE `project_produksi` (
  `id_pp` int(11) NOT NULL,
  `parent_pp` int(11) NOT NULL,
  `judul_pp` varchar(255) NOT NULL,
  `kategory_pp` int(11) NOT NULL,
  `talent_pp` varchar(255) NOT NULL,
  `venue_pp` text NOT NULL,
  `cost_pp` decimal(16,2) NOT NULL,
  `desc_pp` text NOT NULL,
  `status_pp` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_produksi`
--

INSERT INTO `project_produksi` (`id_pp`, `parent_pp`, `judul_pp`, `kategory_pp`, `talent_pp`, `venue_pp`, `cost_pp`, `desc_pp`, `status_pp`) VALUES
(1, 1, 'asasda', 2, 'adasd', 'adasd', '500.00', 'adadsd', 1),
(2, 1, 'qeww', 2, 'wqerq', 'qweqwe', '500.00', 'qwewqe', 1);

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
  `role_user` int(11) NOT NULL DEFAULT '4',
  `created_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_user` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `nip_user`, `password_user`, `photo_user`, `telepon_user`, `role_user`, `created_user`, `status_user`) VALUES
(1, 'Budi Satria', 'admin@simtritama.id', 'SUP1112021', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'boed.jpg', '081289489911', 1, '2021-10-26 11:50:19', 2),
(2, 'Heru Purwanto', 'admin2@simtritama.id', '5678', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'heru.jpg', '082117474055', 1, '2021-10-26 11:50:19', 1),
(3, 'Helmi HC Rizky', 'admin3@simtritama.id', '3456', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'helmi.jpg', '081283252877', 1, '2021-10-26 11:50:19', 1),
(4, 'Mahfudz', 'mahfudz@btm.com', '41111', '$2y$10$4U55a6GApZZUUEifisYX9eQgGOtQDyakP6DIR.VIKQwDzBKo9TWoW', 'mahmudz_16366065222760.jpeg', '081288334455', 2, '2021-11-11 04:55:22', 1),
(5, 'Putri', 'putri@bmt.com', 'ANCE51111', '$2y$10$h./weqIHAfBHV/wiM7A8AOqPRC0yFM3rHX1P8bzJ97WYzumgYdIpi', 'putri_16366494254633.jpg', '08123322112233', 3, '2021-11-11 16:50:25', 1),
(6, 'Arik Pepeng', 'peps@gmail.com', 'ROD6112021', '$2y$10$Q9V7oKWhgHbWyXk/hdqS0eC/z2cTI5e6GI8uYflYx32YWPzIHzRYK', 'arikpepeng_16366997831032.png', '0819223344', 4, '2021-11-12 06:49:43', 1),
(7, 'Akbars', 'akbar2@gmail.com', 'PLA7112021', '$2y$10$SPa15NjI2Tu9ZLSTTG.DmO6mXoq2DqP473wREOYG98YjF3A2y0gNO', 'akbars_16367266656731.jpeg', '08179966557', 5, '2021-11-12 06:52:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(64) NOT NULL,
  `desc_wilayah` text NOT NULL,
  `parent_wilayah` int(11) NOT NULL,
  `status_wilayah` tinyint(1) NOT NULL DEFAULT '1'
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
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_category`
--
ALTER TABLE `client_category`
  MODIFY `id_client_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kbli`
--
ALTER TABLE `kbli`
  MODIFY `id_kbli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_placement`
--
ALTER TABLE `project_placement`
  MODIFY `id_pm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_produksi`
--
ALTER TABLE `project_produksi`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
