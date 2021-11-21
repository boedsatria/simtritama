-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2021 at 05:58 PM
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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
