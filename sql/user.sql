-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 03:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(32) NOT NULL,
  `email_user` varchar(32) NOT NULL,
  `nip_user` varchar(32) DEFAULT NULL,
  `password_user` varchar(128) DEFAULT NULL,
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
(1, 'Administrator', 'admin@simtritama.id', '1234', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'boed.jpg', '081289489911', 1, '2021-10-26 11:50:19', 1),
(2, 'Heru Purwanto', 'admin2@simtritama.id', '5678', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'heru.jpg', '082117474055', 1, '2021-10-26 11:50:19', 1),
(3, 'Helmi HC Rizky', 'admin3@simtritama.id', '3456', '$2y$10$S1StlDAZ5vbEYa7jINEeJubwhT22KpJwOtRzYqV7rtmYWK7yd5Mdi', 'helmi.jpg', '081283252877', 1, '2021-10-26 11:50:19', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
