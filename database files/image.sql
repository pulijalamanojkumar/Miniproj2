-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 02:11 PM
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
-- Database: `image`
--

-- --------------------------------------------------------

--
-- Table structure for table `chaayaimg`
--

CREATE TABLE `chaayaimg` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chaayaimg`
--

INSERT INTO `chaayaimg` (`id`, `image`) VALUES
(3, 'WhatsApp Image 2021-04-13 at 1.51.28 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `commuimg`
--

CREATE TABLE `commuimg` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geethiimg`
--

CREATE TABLE `geethiimg` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geethiimg`
--

INSERT INTO `geethiimg` (`id`, `image`) VALUES
(1, 'WhatsApp Image 2021-04-13 at 1.51.28 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kreedaimg`
--

CREATE TABLE `kreedaimg` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kreedaimg`
--

INSERT INTO `kreedaimg` (`id`, `image`) VALUES
(3, 'WhatsApp Image 2021-04-13 at 2.14.48 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lasyaimg`
--

CREATE TABLE `lasyaimg` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `srujanaimg`
--

CREATE TABLE `srujanaimg` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srujanaimg`
--

INSERT INTO `srujanaimg` (`id`, `image`) VALUES
(1, 'WhatsApp Image 2021-04-12 at 5.39.47 PM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chaayaimg`
--
ALTER TABLE `chaayaimg`
  ADD PRIMARY KEY (`image`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `commuimg`
--
ALTER TABLE `commuimg`
  ADD PRIMARY KEY (`image`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `geethiimg`
--
ALTER TABLE `geethiimg`
  ADD PRIMARY KEY (`image`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kreedaimg`
--
ALTER TABLE `kreedaimg`
  ADD PRIMARY KEY (`image`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lasyaimg`
--
ALTER TABLE `lasyaimg`
  ADD PRIMARY KEY (`image`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `srujanaimg`
--
ALTER TABLE `srujanaimg`
  ADD PRIMARY KEY (`image`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chaayaimg`
--
ALTER TABLE `chaayaimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commuimg`
--
ALTER TABLE `commuimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geethiimg`
--
ALTER TABLE `geethiimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kreedaimg`
--
ALTER TABLE `kreedaimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lasyaimg`
--
ALTER TABLE `lasyaimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `srujanaimg`
--
ALTER TABLE `srujanaimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
