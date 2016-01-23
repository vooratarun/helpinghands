-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 10:20 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_hh`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `sno` int(50) NOT NULL AUTO_INCREMENT,
  `subject` varchar(1500) NOT NULL,
  `posted` varchar(50) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `posted_date` varchar(50) NOT NULL,
  `posted_time` varchar(50) NOT NULL,
  `fulldate` varchar(50) NOT NULL,
  `visibility` int(2) NOT NULL DEFAULT '1',
  `posted_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrmessages`
--

CREATE TABLE IF NOT EXISTS `hrmessages` (
  `sno` int(50) NOT NULL AUTO_INCREMENT,
  `Userid` varchar(7) NOT NULL,
  `msgto` varchar(50) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `visibility` int(2) NOT NULL DEFAULT '1',
  `response` varchar(1500) NOT NULL,
  `reply_status` int(2) NOT NULL DEFAULT '0',
  `postedtime` varchar(50) NOT NULL,
  `postedip` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hrs`
--

CREATE TABLE IF NOT EXISTS `hrs` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(7) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogin` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hrs`
--

INSERT INTO `hrs` (`sno`, `idnumber`, `password`, `lastlogin`) VALUES
(1, 'N130950', 'N130950', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `sno` int(50) NOT NULL AUTO_INCREMENT,
  `subject` varchar(1500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `posted` varchar(50) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `posted_date` varchar(50) NOT NULL,
  `posted_time` varchar(50) NOT NULL,
  `fulldate` varchar(50) NOT NULL,
  `visibility` int(2) NOT NULL DEFAULT '1',
  `posted_ip` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE IF NOT EXISTS `suggestions` (
  `sno` int(50) NOT NULL AUTO_INCREMENT,
  `Userid` varchar(7) NOT NULL,
  `sugto` varchar(50) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `visibility` int(2) NOT NULL DEFAULT '1',
  `postedtime` varchar(50) NOT NULL,
  `postedip` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `visits` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
