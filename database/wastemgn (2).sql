-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 06:52 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wastemgn`
--

-- --------------------------------------------------------

--
-- Table structure for table `drycomplaint`
--

CREATE TABLE `drycomplaint` (
  `Id` int(20) NOT NULL COMMENT '1',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `wastage` varchar(30) NOT NULL,
  `drycount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drycomplaint`
--

INSERT INTO `drycomplaint` (`Id`, `firstname`, `lastname`, `phone_number`, `gender`, `area`, `wastage`, `drycount`) VALUES
(1, 'UZMA', 'BHAT', '7298939142', 'female', 'trikuta nagar', 'aaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `drycount`
--

CREATE TABLE `drycount` (
  `num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drycount`
--

INSERT INTO `drycount` (`num`) VALUES
('2');

-- --------------------------------------------------------

--
-- Table structure for table `dryrecycledb`
--

CREATE TABLE `dryrecycledb` (
  `itemrecycled` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dryrecycledb`
--

INSERT INTO `dryrecycledb` (`itemrecycled`, `date`) VALUES
('metals', '2018-05-03'),
('paper', '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback1`
--

CREATE TABLE `feedback1` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wetcomplaint`
--

CREATE TABLE `wetcomplaint` (
  `Id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `wastage` varchar(30) NOT NULL,
  `wetcount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wetcomplaint`
--

INSERT INTO `wetcomplaint` (`Id`, `firstname`, `lastname`, `phone_number`, `gender`, `area`, `wastage`, `wetcount`) VALUES
(1526534866, 'haree', 'syed', '9876543211', 'female', 'trikuta nagar', 'bad ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wetcount`
--

CREATE TABLE `wetcount` (
  `num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wetcount`
--

INSERT INTO `wetcount` (`num`) VALUES
('1');

-- --------------------------------------------------------

--
-- Table structure for table `wetrecycledb`
--

CREATE TABLE `wetrecycledb` (
  `itemrecycled` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wetrecycledb`
--

INSERT INTO `wetrecycledb` (`itemrecycled`, `date`) VALUES
('plastic', '2018-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drycomplaint`
--
ALTER TABLE `drycomplaint`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `wetcomplaint`
--
ALTER TABLE `wetcomplaint`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drycomplaint`
--
ALTER TABLE `drycomplaint`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wetcomplaint`
--
ALTER TABLE `wetcomplaint`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1526534867;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
