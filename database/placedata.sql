-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 09:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `placedata`
--

CREATE TABLE `placedata` (
  `Name` varchar(30) NOT NULL COMMENT 'Non nullable',
  `id` int(10) UNSIGNED NOT NULL COMMENT 'for indexing purpose',
  `Address` varchar(100) NOT NULL COMMENT 'Contains address of service',
  `Byline` varchar(100) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `imgpath` varchar(100) DEFAULT NULL COMMENT 'img stored in ./images',
  `Avail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placedata`
--
ALTER TABLE `placedata`
  ADD PRIMARY KEY (`id`,`Address`,`Byline`),
  ADD UNIQUE KEY `id` (`id`,`Byline`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placedata`
--
ALTER TABLE `placedata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'for indexing purpose';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
