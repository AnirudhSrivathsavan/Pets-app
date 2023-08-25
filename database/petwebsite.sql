-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 09:12 PM
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
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `Number` int(11) NOT NULL,
  `Animal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placedata`
--

CREATE TABLE `placedata` (
  `Name` varchar(30) NOT NULL COMMENT 'Non nullable',
  `Id` int(10) UNSIGNED NOT NULL COMMENT 'for indexing purpose',
  `Address` varchar(100) NOT NULL COMMENT 'Contains address of service',
  `Zip code` mediumint(8) UNSIGNED DEFAULT NULL,
  `Byline` varchar(100) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `imgpath` varchar(100) DEFAULT NULL COMMENT 'img stored in ./images',
  `Avail` varchar(100) DEFAULT NULL,
  `Service` int(11) NOT NULL,
  `Animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Number` int(11) NOT NULL,
  `Service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Number`, `Service`) VALUES
(1, 'Veterinarian'),
(2, 'Breeder'),
(3, 'Rescue'),
(4, 'Shelter'),
(5, 'Groomer'),
(6, 'Foster'),
(7, 'Animal Control');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `placedata`
--
ALTER TABLE `placedata`
  ADD PRIMARY KEY (`Id`,`Address`,`Byline`),
  ADD UNIQUE KEY `id` (`Id`,`Byline`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placedata`
--
ALTER TABLE `placedata`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'for indexing purpose';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
