-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2014 at 04:38 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpinghand`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddetails`
--

CREATE TABLE IF NOT EXISTS `blooddetails` (
  `ID` varchar(7) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `bg` varchar(20) DEFAULT NULL,
  `mob` int(10) DEFAULT NULL,
  `pmob` int(10) DEFAULT NULL,
  `willing` varchar(3) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
