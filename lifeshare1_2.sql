-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 05:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeshare1.2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptor`
--

CREATE TABLE `acceptor` (
  `name` varchar(20) NOT NULL,
  `userNameA` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `id` int(11) NOT NULL,
  `hospitalID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptor`
--

INSERT INTO `acceptor` (`name`, `userNameA`, `email`, `password`, `phone`, `id`, `hospitalID`) VALUES
('islam', 'alien', 'islam@owl.com', '12345', 102546, 1, 0),
('ahmed', 'kkk', '123', '123', 123, 2, 2),
('mo', 'moo', '123', '123', 12345, 3, 2),
('ha', 'hahaha', '123456', '123456', 123456, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donner`
--

CREATE TABLE `donner` (
  `name` varchar(20) NOT NULL,
  `userNameD` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `bloodType` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donner`
--

INSERT INTO `donner` (`name`, `userNameD`, `email`, `password`, `phone`, `bloodType`, `id`) VALUES
('islam', 'alien', 'islam@owl.com', '12345', 123546, 'ab-', 1),
('ahmed', 'ahmed', '12345', '12345', 12345, 'o', 2),
('zzz', 'zzz', 'zzzz', '1234', 1234, 'A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `id` int(11) NOT NULL,
  `cost` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`name`, `address`, `phone`, `id`, `cost`) VALUES
('maadi', '9,maadi', 7792452, 1, 10),
('helwan', '8,helwan', 6654782, 2, 8),
('cairo', 'newCairo', 22354868, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `userNameA` varchar(20) NOT NULL,
  `hospitalName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bloodType` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `donorID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`userNameA`, `hospitalName`, `address`, `bloodType`, `phone`, `donorID`) VALUES
('alien', 'maadi', '9,maadi', 'o+', 125463, NULL),
('moo', 'helwan', '8,helwan', 'loa', 12345, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptor`
--
ALTER TABLE `acceptor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donner`
--
ALTER TABLE `donner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD KEY `donorID` (`donorID`),
  ADD KEY `userNameA` (`userNameA`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptor`
--
ALTER TABLE `acceptor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donner`
--
ALTER TABLE `donner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
