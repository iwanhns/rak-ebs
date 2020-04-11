-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 05:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rak_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `name`, `status`) VALUES
(1, 'Loker 1', 'Avaliable'),
(2, 'Loker 2', 'Available'),
(3, 'Loker 3', 'Available'),
(4, 'Loker 4', 'Available'),
(5, 'Loker 5', 'Available'),
(6, 'Loker 6', 'Available'),
(7, 'Loker 7', 'Available'),
(8, 'Loker 8', 'Available'),
(9, 'Loker 9', 'Available'),
(10, 'Loker 10', 'Available'),
(11, 'Loker 11', 'Available'),
(12, 'Loker 12', 'Available'),
(13, 'Loker 13', 'Available'),
(14, 'Loker 14', 'Available'),
(15, 'Loker 15', 'Available'),
(16, 'Loker 16', 'Available'),
(17, 'Loker 17', 'Available'),
(18, 'Loker 18', 'Available'),
(19, 'Loker 19', 'Available'),
(20, 'Loker 20', 'Available'),
(21, 'Loker 21', 'Available'),
(22, 'Loker 22', 'Available'),
(23, 'Loker 23', 'Available'),
(24, 'Loker 24', 'Available'),
(25, 'Loker 25', 'Available'),
(26, 'Loker 26', 'Available'),
(27, 'Loker 27', 'Available'),
(28, 'Loker 28', 'Available'),
(29, 'Loker 29', 'Available'),
(30, 'Loker 30', 'Available'),
(31, 'Loker 31', 'Available'),
(32, 'Loker 32', 'Available'),
(33, 'Loker 33', 'Available'),
(34, 'Loker 34', 'Available'),
(35, 'Loker 35', 'Available'),
(36, 'Loker 36', 'Available'),
(37, 'Loker 37', 'Reserved'),
(38, 'Loker 38', 'Reserved'),
(39, 'Loker 39', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id_tenant` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rental_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `finish_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_loker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id_tenant`, `nim`, `name`, `email`, `rental_date`, `finish_date`, `status`, `id_loker`) VALUES
(1, '0000000000', 'Library EBS', 'library@ebqbs.ac.id', '2020-04-11 15:30:06', '2021-01-01', 'Active', 37),
(2, '0000000000', 'Library EBS', 'library@ebqbs.ac.id', '2020-04-11 14:14:52', '2021-01-01', 'Active', 38),
(3, '0000000000', 'Library EBS', 'library@ebqbs.ac.id', '2020-04-11 15:31:13', '2021-01-01', 'Active', 39),
(4, '3523523', 'sdgsdgsdg', 'sdgsd@dgds.csaf', '2020-04-11 15:26:48', '2020-04-30', 'Expired', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`) VALUES
(1, 'nasrullah@students.esqbs.ac.id', 'esqbs165', 'Nasrullah'),
(2, 'trevy@students.esqbs.ac.id', 'esqbs165', 'Trevy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id_tenant`),
  ADD KEY `id_loker` (`id_loker`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id_tenant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `tenant_ibfk_1` FOREIGN KEY (`id_loker`) REFERENCES `loker` (`id_loker`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
