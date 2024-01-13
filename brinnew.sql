-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2024 at 02:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brinnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `data_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `voltage` float NOT NULL,
  `amperage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`data_id`, `username`, `timestamp`, `voltage`, `amperage`) VALUES
(1, 'AimLesson', '2023-11-11 19:00:20', 30, 4),
(2, 'AimLesson', '2023-11-11 19:27:37', 20, 4),
(7, 'putri', '2023-11-29 08:39:03', 40, 10),
(8, 'putri', '2023-11-29 08:39:11', 60, 9),
(9, 'budi', '2023-11-29 09:35:58', 20, 8),
(10, 'budi', '2023-11-29 09:36:05', 35, 10),
(11, 'ayu', '2023-12-20 09:58:49', 40, 50),
(12, 'ayu', '2023-12-20 09:58:57', 10, 20),
(13, 'asti', '2024-01-03 16:24:02', 20, 40),
(14, 'asti', '2024-01-03 16:24:10', 11, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `name`, `contact`, `instansi`, `email`, `tanggallahir`) VALUES
(1, 'AimLesson', '2206', 'Gerson Manuel', '123', 'BRIN', NULL, NULL),
(4, 'putri', '2206', 'putri', '1234', 'Masyarakat Umum', NULL, NULL),
(5, 'budi', 'budi', 'budi', '000', 'Masyarakat Umum', NULL, NULL),
(7, 'ayu', '1108', 'ayu', '12345', 'Pemerintah Non BRIN', 'ayuningtyas@gmail.com', '2023-12-20'),
(8, 'asti', '1108', 'asti', '123', 'Swasta', 'asti@gmail.com', '2024-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
