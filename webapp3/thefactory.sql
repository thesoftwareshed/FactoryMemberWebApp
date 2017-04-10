-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 11:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thefactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Username` varchar(255) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Credit` int(11) NOT NULL DEFAULT '0',
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `FMember` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Username`, `FName`, `LName`, `Email`, `PhoneNo`, `Password`, `Credit`, `Admin`, `FMember`) VALUES
('admin', '', '', '', '', 'admin', 0, 0, 0),
('Jacob', 'Admin', 'Admin', 'Admin', 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 0, 0, 0),
('test', 'test', 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 0, 0, 0),
('test2', 'test2', 'test2', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 0, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
