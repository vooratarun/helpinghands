-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2014 at 06:53 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `money_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `contributor` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`contributor`, `money`) VALUES
('On the occasion of BLOOD DONATION CAMP conducted by HELPING HANDS, NUZVID ROTARY CLUB donated to Helping Hands.', 10000),
('ROTARY CLUB district governor donated to HELPING HANDS', 10000),
('KMK Catering donating to Helping Hands every Month Rs.1000/-', 1000),
(' Sri S.N.V. Subbha Rao donation to Helping Hands. ', 50000),
('Ms M.Lalitha kumari With Id no N130784 (PUC-1,M-3) Donation to Helping Hands', 500);

-- --------------------------------------------------------

--
-- Table structure for table `dropbox`
--

CREATE TABLE IF NOT EXISTS `dropbox` (
  `date` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropbox`
--

INSERT INTO `dropbox` (`date`, `money`) VALUES
('FirstTime', 5211),
('SecondTime', 3847),
('29-01-2014', 2642);

-- --------------------------------------------------------

--
-- Table structure for table `engg-1`
--

CREATE TABLE IF NOT EXISTS `engg-1` (
  `class` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engg-1`
--

INSERT INTO `engg-1` (`class`, `money`) VALUES
('CT-3', 1701),
('CT-2', 1394),
('CT-1', 1776),
('CS-4', 1266),
('CS-3', 1522),
('CS-2', 1923),
('CS-1', 1396),
('CF-2', 1572),
('CF-1', 1153),
('CG-4', 1116),
('CG-3', 1072),
('CG-2', 1451),
('CG-1', 1645),
('CF-3', 976);

-- --------------------------------------------------------

--
-- Table structure for table `engg-2`
--

CREATE TABLE IF NOT EXISTS `engg-2` (
  `class` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engg-2`
--

INSERT INTO `engg-2` (`class`, `money`) VALUES
('CSE-1', 1774),
('CSE-2', 1949),
('CSE-3', 1541),
('ECE-1', 1444),
('ECE-2', 2444),
('ECE-3', 1539),
('MECH-1', 914),
('MECH-2', 1228),
('MECH-3', 1329),
('CIVIL-1', 1618),
('CIVIL-2', 2059),
('CIVIL-3', 1720),
('MME-1', 1848),
('MME-2', 2669),
('CHEM-1', 2395);

-- --------------------------------------------------------

--
-- Table structure for table `engg-3`
--

CREATE TABLE IF NOT EXISTS `engg-3` (
  `class` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engg-3`
--

INSERT INTO `engg-3` (`class`, `money`) VALUES
('CSE-1', 718),
('CSE-2', 1075),
('CSE-3', 723),
('CSE-4', 741),
('CSE-5', 576),
('CSE-6', 717),
('ECE-1', 989),
('ECE-2', 963),
('ECE-3', 665),
('ECE-4', 794),
('ECE-5', 595),
('ECE-6', 978),
('MECH-1', 835),
('MECH-2', 905),
('MECH-3', 673),
('MECH-4', 1026),
('MECH-5', 667),
('CIVIL-1', 779),
('CIVIL-2', 919),
('CIVIL-3', 1042),
('CIVIL-4', 844),
('CIVIL-5', 1298),
('MME-1', 649),
('MME-2', 591),
('MME-3', 777),
('MME-4', 730),
('CHEM-1', 1336),
('CHEM-2', 914);

-- --------------------------------------------------------

--
-- Table structure for table `engg-4`
--

CREATE TABLE IF NOT EXISTS `engg-4` (
  `class` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engg-4`
--

INSERT INTO `engg-4` (`class`, `money`) VALUES
('CSE-1', 154),
('CSE-2', 74),
('CSE-3', 55),
('CSE-4', 170),
('CSE-5', 0),
('CSE-6', 60),
('ECE-1', 0),
('ECE-2', 164),
('ECE-3', 80),
('ECE-4', 252),
('ECE-5', 86),
('ECE-6', 157),
('MECH-1', 0),
('MECH-2', 45),
('MECH-3', 220),
('MECH-4', 158),
('MECH-5', 12),
('MECH-6', 127),
('CIVIL-1', 642),
('CIVIL-2', 412),
('CIVIL-3', 0),
('CIVIL-4', 109),
('CIVIL-5', 292),
('CIVIL-6', 222),
('MME-1', 167),
('MME-2', 209),
('MME-3', 148),
('MME-4', 159),
('CHEM-1', 467),
('CHEM-2', 507),
('CHEM-3', 459);

-- --------------------------------------------------------

--
-- Table structure for table `puc-1`
--

CREATE TABLE IF NOT EXISTS `puc-1` (
  `class` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puc-1`
--

INSERT INTO `puc-1` (`class`, `money`) VALUES
('LAMDA-1', 1857),
('LAMDA-2', 1887),
('LAMDA-3', 1646),
('LAMDA-4', 1683),
('LAMDA-5', 1503),
('LAMDA-6', 1359),
('LAMDA-7', 1540),
('LAMDA-8', 2538),
('LAMDA-9', 2425),
('LAMDA-10', 3222),
('LAMDA-11', 2407),
('LAMDA-12', 2852),
('MUE-1', 4783),
('MUE-2', 2439),
('MUE-3', 1894),
('MUE-4', 1490),
('MUE-5', 1046),
('OMEGA-10', 2105),
('OMEGA-11', 3053),
('OMEGA-12', 2776);

-- --------------------------------------------------------

--
-- Table structure for table `puc-2`
--

CREATE TABLE IF NOT EXISTS `puc-2` (
  `class` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puc-2`
--

INSERT INTO `puc-2` (`class`, `money`) VALUES
('OMEGA-1', 1768),
('KAPPA-1', 948),
('OMEGA-2', 1497),
('OMEGA-3', 2274),
('OMEGA-4', 2888),
('OMEGA-5', 2162),
('OMEGA-6', 1769),
('OMEGA-7', 1589),
('OMEGA-8', 2022),
('KAPPA-2', 1293),
('KAPPA-3', 2573),
('KAPPA-4', 1371),
('KAPPA-5', 1491),
('KAPPA-6', 2109),
('KAPPA-7', 1891),
('KAPPA-8', 2832),
('KAPPA-9', 2412),
('KAPPA-10', 1731),
('KAPPA-11', 2301),
('KAPPA-12', 3263);

-- --------------------------------------------------------

--
-- Table structure for table `roughbooks`
--

CREATE TABLE IF NOT EXISTS `roughbooks` (
  `date` text NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roughbooks`
--

INSERT INTO `roughbooks` (`date`, `money`) VALUES
('11-05-2011', 202000),
('05-05-2012', 82699),
('20-10-2012', 30975);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
