-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 09:39 AM
-- Server version: 8.0.27
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuptd`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `jabatan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `nip`, `nik`, `gol`, `jabatan`, `jam`) VALUES
(1, 'NURSANTI SALEH, SE', '165/817/02', 'BKD/I/2016', 'TK', 'Administrasi Umum dan Kepegawaian', '21:08:00'),
(3, 'ANDI HASAN, SE', '33/817', 'BKD/I/2016', 'TK', 'Sopir Armada Truk No. 01 BSP', '07:03:00'),
(4, 'RAHMAT R', '181/817/07', 'BKD/2016', 'TK', 'Kru BSF Maggot Pacerakkang', '23:00:00'),
(32, 'MOMANG ', '133/817', 'BKD/I/2016', 'TK', 'Sopir Armada Truk No 3 Pacerakkang', '05:35:00'),
(33, 'RINI KADAR, SE', '187/817/02', 'BKD/I/2016', 'TK', 'Pelayanan penjemputan UPT.Bank Sampah', '06:36:00'),
(36, 'ZULFIKAR RAHMAN', '817/367', 'BKPSDMD/I/2018', 'TK', 'Kru Penimbangan', '15:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'rajan', '$2y$10$Z8PIVtDui6jMPaHjRrrhKeYlrIZ2cRNn4vgIDcQxvLib7L7XKF9B2', 'admin'),
(5, 'admin', '$2y$10$Zh6wBYwRqswuaaoblrl8OObTxr5S9RVY6qi65DI1a5IhRhZ1QVCLS', 'admin'),
(6, 'user', '$2y$10$yDduEeKGeQSWexIGGJoFPunq4EGVpTIrL5M9EVGXpvoDMXSnkk1eK', 'karyawan'),
(7, 'admin', '$2y$10$dTLFENxDmnaO.t8ObCblBOobMGdqq6BrFa2yXRofgLXgleEXagqfi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
