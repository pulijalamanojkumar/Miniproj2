-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 02:12 PM
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
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `chaaya`
--

CREATE TABLE `chaaya` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commu`
--

CREATE TABLE `commu` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geethi`
--

CREATE TABLE `geethi` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geethi`
--

INSERT INTO `geethi` (`fullname`, `email`, `phone`) VALUES
('manju', 'krrishsai648@gmail.com', '2147483647'),
('sss', 'mlal9@outlook.com', '7777777777');

-- --------------------------------------------------------

--
-- Table structure for table `kreeda`
--

CREATE TABLE `kreeda` (
  `fullname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kreeda`
--

INSERT INTO `kreeda` (`fullname`, `email`, `phone`) VALUES
('ddd', 'aa@gmail.com', 4444454545),
('ddd', 'krraishsai648@gmail.com', 6301845189),
('manjuww', 'krrisssdhsai648@gmail.com', 6301844189),
('ddd', 'lirap85757@tlhao86.com', 7777777777),
('manju', 'mlal9@outlook.com', 6301845126),
('jick', 'uu@gmail.com', 7647657284);

-- --------------------------------------------------------

--
-- Table structure for table `lasya`
--

CREATE TABLE `lasya` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lasya`
--

INSERT INTO `lasya` (`fullname`, `email`, `phone`) VALUES
('manju', 'mlal9@outlook.com', '7777777777');

-- --------------------------------------------------------

--
-- Table structure for table `srujana`
--

CREATE TABLE `srujana` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srujana`
--

INSERT INTO `srujana` (`fullname`, `email`, `phone`) VALUES
('aa', 'mlal9@outlook.com', '6301845189');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chaaya`
--
ALTER TABLE `chaaya`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `commu`
--
ALTER TABLE `commu`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `geethi`
--
ALTER TABLE `geethi`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `kreeda`
--
ALTER TABLE `kreeda`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `lasya`
--
ALTER TABLE `lasya`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `srujana`
--
ALTER TABLE `srujana`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
