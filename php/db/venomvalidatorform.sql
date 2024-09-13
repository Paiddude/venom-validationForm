-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 08:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venom-validator`
--

-- --------------------------------------------------------

--
-- Table structure for table `venomvalidatorform`
--

CREATE TABLE `venomvalidatorform` (
  `vn` varchar(255) DEFAULT NULL,
  `iouv` varchar(255) DEFAULT NULL,
  `cwsm` varchar(255) DEFAULT NULL,
  `hcwc` varchar(255) DEFAULT NULL,
  `pdyu` varchar(255) DEFAULT NULL,
  `hlhybrn` varchar(255) DEFAULT NULL,
  `ohmc` varchar(255) DEFAULT NULL,
  `dyapt` varchar(255) DEFAULT NULL,
  `tsaa` varchar(255) DEFAULT NULL,
  `yhms` varchar(255) DEFAULT NULL,
  `hdyo` varchar(255) DEFAULT NULL,
  `hdykm` varchar(255) DEFAULT NULL,
  `dyyys` varchar(255) DEFAULT NULL,
  `ayake` varchar(255) DEFAULT NULL,
  `dyrdton` varchar(255) DEFAULT NULL,
  `dyeic` varchar(255) DEFAULT NULL,
  `yrii` varchar(255) DEFAULT NULL,
  `dyrti` varchar(255) DEFAULT NULL,
  `dyea` varchar(255) DEFAULT NULL,
  `wciyle` varchar(255) DEFAULT NULL,
  `dyhaww` varchar(255) DEFAULT NULL,
  `cyetri` varchar(255) DEFAULT NULL,
  `hmc` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `venomvalidatorform`
--
ALTER TABLE `venomvalidatorform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `venomvalidatorform`
--
ALTER TABLE `venomvalidatorform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
