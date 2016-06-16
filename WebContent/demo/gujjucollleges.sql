-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2013 at 01:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gujjucollleges`
--

-- --------------------------------------------------------

--
-- Table structure for table `clg_contact`
--

CREATE TABLE IF NOT EXISTS `clg_contact` (
  `CLG_ID` varchar(12) NOT NULL,
  `CCD_ID` varchar(15) NOT NULL,
  `CCD_CLG_EMAIL` varchar(45) DEFAULT NULL,
  `CCD_CLG_PHONE` varchar(15) DEFAULT NULL,
  `CCD_CLG_PERS` varchar(50) DEFAULT NULL,
  `CCD_PERS_MONO` varchar(15) DEFAULT NULL,
  `CCD_CLG_WEB` varchar(45) NOT NULL,
  PRIMARY KEY (`CCD_ID`),
  KEY `CCD_ID` (`CCD_ID`),
  KEY `CLG_ID` (`CLG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_contact`
--

INSERT INTO `clg_contact` (`CLG_ID`, `CCD_ID`, `CCD_CLG_EMAIL`, `CCD_CLG_PHONE`, `CCD_CLG_PERS`, `CCD_PERS_MONO`, `CCD_CLG_WEB`) VALUES
('1', '1', 'charusat@ac.in', '02685555', 'Anikt Desai', '9898989898', 'www.charusat.ac.in'),
('2', '2', 'ddu@gmai.com', '026812345', 'Pinal ', '999999999', 'www.ddu.in'),
('3', '3', 'gcet@gmail.com', '026912345', 'Jaimin', '9812345678', 'www.gcet.in');

-- --------------------------------------------------------

--
-- Table structure for table `clg_dept_mstr`
--

CREATE TABLE IF NOT EXISTS `clg_dept_mstr` (
  `CLG_ID` varchar(12) NOT NULL,
  `DEPT_ID` varchar(12) NOT NULL,
  `DEPT_NAME` varchar(50) DEFAULT NULL,
  `DEPT_GOV` tinyint(1) DEFAULT NULL,
  `DEPT_NO_STD` int(6) NOT NULL,
  `DEPT_CUT_MARK` int(6) NOT NULL,
  `DEPT_STD_PLACE` int(6) DEFAULT NULL,
  `DEPT_SEQ_NO` int(7) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`DEPT_SEQ_NO`),
  KEY `DEPT_ID` (`DEPT_ID`),
  KEY `CLG_ID_2` (`CLG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='COLLEGE DEPARTMENT MASTER' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `clg_dept_mstr`
--

INSERT INTO `clg_dept_mstr` (`CLG_ID`, `DEPT_ID`, `DEPT_NAME`, `DEPT_GOV`, `DEPT_NO_STD`, `DEPT_CUT_MARK`, `DEPT_STD_PLACE`, `DEPT_SEQ_NO`) VALUES
('1', 'IT', 'INFO TECH', 0, 120, 65, 32, 1),
('2', 'IT', 'INFO TECH', 0, 120, 65, 32, 2),
('3', 'IT', 'INFO', 0, 120, 56, 40, 3),
('1', 'CE', 'COMPUTER', 0, 120, 67, 45, 4),
('2', 'CE', 'COMPUTER', 1, 120, 65, 34, 6),
('3', 'ce', 'COMPUTER', 0, 120, 87, 50, 7);

-- --------------------------------------------------------

--
-- Table structure for table `clg_location_mstr`
--

CREATE TABLE IF NOT EXISTS `clg_location_mstr` (
  `CLG_ID` varchar(15) NOT NULL,
  `LOC_ID` varchar(15) NOT NULL,
  `LOC_COUNTRY` varchar(20) NOT NULL,
  `LOC_STATE` varchar(20) NOT NULL,
  `LOC_CITY` varchar(20) NOT NULL,
  `LOC_TALUKA` varchar(20) NOT NULL,
  `LOC_VILLAGE` varchar(20) DEFAULT NULL,
  `LOC_PIN_NO` int(6) DEFAULT NULL,
  PRIMARY KEY (`LOC_ID`),
  KEY `CLG_ID` (`CLG_ID`),
  KEY `CLG_ID_2` (`CLG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_location_mstr`
--

INSERT INTO `clg_location_mstr` (`CLG_ID`, `LOC_ID`, `LOC_COUNTRY`, `LOC_STATE`, `LOC_CITY`, `LOC_TALUKA`, `LOC_VILLAGE`, `LOC_PIN_NO`) VALUES
('1', '1', 'india', 'gujarat', 'anand', 'anand', 'changa', 388001),
('2', '2', 'india', 'gujarat', 'nadiad', 'nadiad', 'nadiad', 387001),
('3', '3', 'india', 'gujarat', 'anand', 'anand', 'vidhyanagar', 387002);

-- --------------------------------------------------------

--
-- Table structure for table `clg_mstr`
--

CREATE TABLE IF NOT EXISTS `clg_mstr` (
  `CLG_ID` varchar(12) NOT NULL,
  `CLG_NAME` varchar(80) NOT NULL,
  `AICTE` tinyint(4) NOT NULL,
  `UGC` tinyint(4) NOT NULL,
  `FOUN_YEAR` date NOT NULL,
  `NO_STD_PLACED` int(5) DEFAULT NULL,
  `TOTAL_STD` int(7) NOT NULL,
  `NEAR_RAIL_STN` varchar(45) DEFAULT NULL,
  `NEAR_AIR_STN` varchar(45) DEFAULT NULL,
  `DIS_RAIL` int(5) DEFAULT NULL,
  `NEAR_BUS_STN` varchar(50) DEFAULT NULL,
  `DIS_BUS` int(4) DEFAULT NULL,
  `DIS_AIR` int(5) DEFAULT NULL,
  `CLG_TYPE` varchar(15) NOT NULL,
  `FEES` int(7) NOT NULL,
  `logo` varchar(200) NOT NULL,
  PRIMARY KEY (`CLG_ID`),
  UNIQUE KEY `CLG_NAME` (`CLG_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_mstr`
--

INSERT INTO `clg_mstr` (`CLG_ID`, `CLG_NAME`, `AICTE`, `UGC`, `FOUN_YEAR`, `NO_STD_PLACED`, `TOTAL_STD`, `NEAR_RAIL_STN`, `NEAR_AIR_STN`, `DIS_RAIL`, `NEAR_BUS_STN`, `DIS_BUS`, `DIS_AIR`, `CLG_TYPE`, `FEES`, `logo`) VALUES
('1', 'CHARUSAT', 1, 1, '2005-10-14', 200, 3000, 'nadiad', 'ahmdabad', 15, 'nadiad', 15, 55, 'Self Finanace', 70000, 'charusat.jpg'),
('2', 'ddu', 0, 1, '1996-10-16', 300, 3000, 'nadiad', 'ahmdabad', 2, 'nadiad', 2, 45, 'Government', 1500, 'adit.jpg'),
('3', 'GCET', 1, 1, '1997-10-17', 200, 3000, 'anand', 'ahmdabad', 8, 'anand', 8, 65, 'self finance', 70000, 'gcet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clg_plcmnt_mstr`
--

CREATE TABLE IF NOT EXISTS `clg_plcmnt_mstr` (
  `CLG_ID` varchar(12) NOT NULL,
  `DEPT_ID` varchar(12) NOT NULL,
  `CPM_ID` varchar(12) NOT NULL,
  `CPM_NO_COM_VI` int(6) NOT NULL,
  `CPM_NO_PLACED` int(6) NOT NULL,
  `CPM_HIGHEST_P` int(6) DEFAULT NULL,
  `CPM_LOWEST_P` int(6) DEFAULT NULL,
  PRIMARY KEY (`CPM_ID`),
  KEY `DEPT_ID` (`DEPT_ID`),
  KEY `CLG_ID` (`CLG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='COLLEGE PLACEMENT MASTER';

--
-- Dumping data for table `clg_plcmnt_mstr`
--

INSERT INTO `clg_plcmnt_mstr` (`CLG_ID`, `DEPT_ID`, `CPM_ID`, `CPM_NO_COM_VI`, `CPM_NO_PLACED`, `CPM_HIGHEST_P`, `CPM_LOWEST_P`) VALUES
('1', 'IT', 'D101', 30, 100, 30000, 30000),
('2', 'CE', 'D102', 45, 76, 40000, 40000),
('1', 'CE', 'D103', 50, 59, 50000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_mstr`
--

CREATE TABLE IF NOT EXISTS `hostel_mstr` (
  `HOM_ID` varchar(20) NOT NULL,
  `CLG_ID` varchar(20) NOT NULL,
  `HOM_NAME` varchar(100) NOT NULL,
  `HOM_FEES` int(20) NOT NULL,
  `HOM_WEBSITE` varchar(100) DEFAULT NULL,
  `HOM_PHOTO` varchar(100) DEFAULT NULL,
  `HOM_CELL` int(20) DEFAULT NULL,
  PRIMARY KEY (`HOM_ID`),
  KEY `CLG_ID` (`CLG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='HOSTEL MASTER';

--
-- Dumping data for table `hostel_mstr`
--

INSERT INTO `hostel_mstr` (`HOM_ID`, `CLG_ID`, `HOM_NAME`, `HOM_FEES`, `HOM_WEBSITE`, `HOM_PHOTO`, `HOM_CELL`) VALUES
('H101', '1', 'ON', 40000, 'www.on.com', NULL, 2147483647),
('h102', '2', 'nisarg', 600000, 'www.nisang.com', NULL, 1234555),
('H103', '3', 'CHANGA', 299999, NULL, NULL, 1234566);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `username`) VALUES
(32, 'gujjuadminsecretkey', 'gcadmin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clg_contact`
--
ALTER TABLE `clg_contact`
  ADD CONSTRAINT `clg_contact_ibfk_2` FOREIGN KEY (`CLG_ID`) REFERENCES `clg_mstr` (`CLG_ID`);

--
-- Constraints for table `clg_dept_mstr`
--
ALTER TABLE `clg_dept_mstr`
  ADD CONSTRAINT `clg_dept_mstr_ibfk_1` FOREIGN KEY (`CLG_ID`) REFERENCES `clg_mstr` (`CLG_ID`);

--
-- Constraints for table `clg_location_mstr`
--
ALTER TABLE `clg_location_mstr`
  ADD CONSTRAINT `clg_location_mstr_ibfk_1` FOREIGN KEY (`CLG_ID`) REFERENCES `clg_mstr` (`CLG_ID`);

--
-- Constraints for table `clg_plcmnt_mstr`
--
ALTER TABLE `clg_plcmnt_mstr`
  ADD CONSTRAINT `clg_plcmnt_mstr_ibfk_1` FOREIGN KEY (`CLG_ID`) REFERENCES `clg_mstr` (`CLG_ID`),
  ADD CONSTRAINT `clg_plcmnt_mstr_ibfk_2` FOREIGN KEY (`DEPT_ID`) REFERENCES `clg_dept_mstr` (`DEPT_ID`);

--
-- Constraints for table `hostel_mstr`
--
ALTER TABLE `hostel_mstr`
  ADD CONSTRAINT `hostel_mstr_ibfk_1` FOREIGN KEY (`CLG_ID`) REFERENCES `clg_mstr` (`CLG_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
