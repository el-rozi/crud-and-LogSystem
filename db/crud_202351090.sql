-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 04:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_202351090`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `Nim` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `Nim`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(11, 'Muhammad Fakhrur Rozi', '', 'Sunggingan Kudus', 'laki-laki', 'Islam', 'MAS Qudsiyyah'),
(13, 'Muhammad Islahul Khozani', '', 'Mejobo Kudus', 'laki-laki', 'Islam', 'MAS QUDSIYYAH'),
(14, 'Muhammad Imron Rosyadi', '', 'Kajeksan Kudus', 'laki-laki', 'Islam', 'MAS QUDSIYYAH'),
(15, 'Muhammad Faishol Fakhri', '', 'Demangan Kudus', 'laki-laki', 'Islam', 'MTS Qudsiyyah'),
(16, 'Muhammad Bayu Prabowo', '', 'Mejobo Kudus', 'laki-laki', 'Islam', 'Universitas Muri'),
(17, 'Muhammad Rifqi Fahrunnaja', '', 'Purwosari WIjilan', 'laki-laki', 'Islam', 'MA NU TBS'),
(18, 'Dea Fitria Nuril Ulya', '', 'Jepang Kudus', 'perempuan', 'Islam', 'IAIN KUDUS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `password`) VALUES
(1, '202351090@std.umk.ac.id', 'muriakudus'),
(2, '202351082@std.umk.ac.id', 'kudusmuria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
