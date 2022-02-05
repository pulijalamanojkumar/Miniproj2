-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 03:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clubach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chaaya`
--

CREATE TABLE `chaaya` (
  `id` int(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commu`
--

CREATE TABLE `commu` (
  `id` int(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geethi`
--

CREATE TABLE `geethi` (
  `id` int(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kreeda`
--

CREATE TABLE `kreeda` (
  `id` int(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kreeda`
--

INSERT INTO `kreeda` (`id`, `description`, `image`) VALUES
(20, 'apple park', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lasya`
--

CREATE TABLE `lasya` (
  `id` int(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `srujana`
--

CREATE TABLE `srujana` (
  `id` int(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srujana`
--

INSERT INTO `srujana` (`id`, `description`, `image`) VALUES
(1, 'apple park', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chaaya`
--
ALTER TABLE `chaaya`
  ADD PRIMARY KEY (`description`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `commu`
--
ALTER TABLE `commu`
  ADD PRIMARY KEY (`description`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `geethi`
--
ALTER TABLE `geethi`
  ADD PRIMARY KEY (`description`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kreeda`
--
ALTER TABLE `kreeda`
  ADD PRIMARY KEY (`description`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lasya`
--
ALTER TABLE `lasya`
  ADD PRIMARY KEY (`description`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `srujana`
--
ALTER TABLE `srujana`
  ADD PRIMARY KEY (`description`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chaaya`
--
ALTER TABLE `chaaya`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commu`
--
ALTER TABLE `commu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geethi`
--
ALTER TABLE `geethi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kreeda`
--
ALTER TABLE `kreeda`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lasya`
--
ALTER TABLE `lasya`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `srujana`
--
ALTER TABLE `srujana`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
