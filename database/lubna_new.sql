-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2010 at 11:16 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lubna`
--

-- --------------------------------------------------------

--
-- Table structure for table `custcom`
--

CREATE TABLE IF NOT EXISTS `custcom` (
  `serial` int(10) NOT NULL AUTO_INCREMENT,
  `refno` varchar(10) NOT NULL,
  `comname` varchar(20) NOT NULL,
  `commail` varchar(60) NOT NULL,
  `comphn` varchar(20) NOT NULL,
  `comemail` varchar(20) NOT NULL,
  `contactperson` varchar(20) NOT NULL,
  `personphn` varchar(20) NOT NULL,
  `personemail` varchar(20) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `custcom`
--

INSERT INTO `custcom` (`serial`, `refno`, `comname`, `commail`, `comphn`, `comemail`, `contactperson`, `personphn`, `personemail`) VALUES
(4, 'comd/001', 'sunrise enter prise', 'Dhanmondi,dhaka,BD.', '79', 'sunep@yahoo.com', 'momin', '01918010101', 'mominhuz@sun.com');

-- --------------------------------------------------------

--
-- Table structure for table `custind`
--

CREATE TABLE IF NOT EXISTS `custind` (
  `serial` int(10) NOT NULL AUTO_INCREMENT,
  `refno` varchar(10) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `custmail` varchar(60) NOT NULL,
  `custmob` varchar(11) NOT NULL,
  `custland` varchar(11) NOT NULL,
  `custemail` varchar(20) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `custind`
--

INSERT INTO `custind` (`serial`, `refno`, `custname`, `custmail`, `custmob`, `custland`, `custemail`) VALUES
(6, 'ab/001', 'ab vai', 'ab, Dhaka.', '1212', '1212', 'ab@gmail.com'),
(9, 'nsu062', 'Ariful Haque', 'Dhaka.', '01715786186', '9142153', 'alexrider2007@yahoo.'),
(10, 'AB/001', 'Dhaka', 'Dhanmondi', '01711111111', '023474645', 'dhaka@gmail.com'),
(12, 'gol/090', 'goltu090', 'Dhaka-1290', '190', '190', 'ho90@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_no` int(11) NOT NULL AUTO_INCREMENT,
  `custinfo` varchar(20) NOT NULL,
  `goods` varchar(20) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `grandtot` varchar(10) NOT NULL,
  PRIMARY KEY (`invoice_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `custinfo`, `goods`, `unitprice`, `quantity`, `grandtot`) VALUES
(17, 'goltu090', 'Bug Scare', '1021', '10', '10210'),
(16, 'goltu090', 'Bug Scare', '102', '10', '1020'),
(15, 'Ariful Haque', 'Pest Repeller', '100', '10', '1000'),
(14, 'eid7', 'Bug Scare', '9', '90', '810'),
(13, 'goltu090', 'Bug Scare', '120', '12', '1440'),
(12, 'Dhaka', 'Pest Repeller', '12', '12', '144'),
(93, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(92, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(91, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(23, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(24, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(25, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(26, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(27, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(28, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(29, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(30, 'Ariful Haque', 'Bug Scare', '81', '8', '648'),
(31, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(32, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(33, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(34, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(35, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(36, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(37, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(38, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(39, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(40, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(41, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(42, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(43, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(44, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(45, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(46, 'Ariful Haque', 'Pest Repeller', '819', '8', '6552'),
(48, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(49, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(50, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(51, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(52, 'Ariful Haque', 'Pest Repeller', '10', '10', '100'),
(54, 'rights', 'Select the Item', '829', '10', '8290'),
(55, 'Ariful Haque', 'Pest Repeller', '5000', '3', '15000'),
(56, 'Ariful Haque', 'Pest Repeller', '50001', '3', '150003'),
(57, 'Ariful Haque', 'Pest Repeller', '74.5', '10', '745'),
(58, 'Ariful Haque', 'Pest Repeller', '74.5', '10', '745'),
(59, 'Ariful Haque', 'Pest Repeller', '393', '10', '3930'),
(60, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(61, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(62, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(63, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(64, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(65, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(66, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(67, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(68, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(69, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(70, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(71, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(72, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(73, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(74, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(75, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(76, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(77, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(78, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(79, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(80, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(81, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(82, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(83, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(84, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(85, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(86, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(87, 'Ariful Haque', 'Pest Repeller', '2820', '10', '28200'),
(88, 'ab vai', 'Pest Repeller', '2828', '10', '28280'),
(90, 'ab vai', 'Pest Repeller', '100', '10', '1000'),
(94, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(95, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(96, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(97, 'Ariful Haque', 'Pest Repeller', '100', '12', '1200'),
(98, 'Ariful Haque', 'Bug Scare', '200', '10', '2000'),
(99, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(100, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(101, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(102, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(103, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(104, 'Dhaka', 'Pest Repeller', '90', '1000', '90000'),
(105, 'Ariful Haque', 'Pest Repeller', '50', '200', '10000'),
(106, 'Ariful Haque', 'Bug Scare', '100', '200', '20000'),
(107, 'Dhaka', 'Pest Repeller', '100', '100000', '10000000'),
(108, 'Dhaka', 'Pest Repeller', '100', '100000', '10000000');

-- --------------------------------------------------------

--
-- Table structure for table `product_reference`
--

CREATE TABLE IF NOT EXISTS `product_reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(50) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_reference`
--

INSERT INTO `product_reference` (`id`, `ref_no`, `product`, `date`, `status`) VALUES
(1, '1233', 'Pest Repeller', '2010-11-04', 'not delivered'),
(2, '1255', 'Pest Repeller', '2010-11-04', 'Not Given'),
(3, '1288', 'Pest Repeller', '2010-11-04', 'Not Given'),
(4, '1988', 'Pest Repeller', '2010-11-04', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `prodtype` varchar(10) NOT NULL,
  `unitprice` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `lcno` varchar(10) NOT NULL,
  `withdrawn` varchar(10) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `issuedate` varchar(25) NOT NULL,
  `arivaldate` varchar(25) NOT NULL,
  `tax` varchar(10) DEFAULT NULL,
  `vat` varchar(10) DEFAULT NULL,
  `ait` varchar(10) DEFAULT NULL,
  `ad` varchar(10) DEFAULT NULL,
  `printing` varchar(10) DEFAULT NULL,
  `sundry` varchar(10) DEFAULT NULL,
  `totexp` varchar(15) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`serial`, `prodtype`, `unitprice`, `quantity`, `lcno`, `withdrawn`, `bank`, `issuedate`, `arivaldate`, `tax`, `vat`, `ait`, `ad`, `printing`, `sundry`, `totexp`) VALUES
(33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Pest Repel', '282', '228', 'sks', '', 'djd', '12-Oct-2010', '26-Oct-2010', '33', '8', '28', '118', '67', '69', '68558'),
(18, 'Bug Scare', '383', '228', '220/aja', '', 'one', '21-Oct-2010', '27-Oct-2010', '383', '2828', '2727', '2727', '2828', '1181', '102927'),
(21, 'Bug Scare', '37', '28', 'al', '1919', 'one', '15-Oct-2010', '30-Oct-2010', '181881', '191919', '2929', '9292', '9292', '2929', '401197'),
(22, 'Bug Scare', '37', '28', 'al', '1919', 'one', '15-Oct-2010', '30-Oct-2010', '181881', '191919', '2929', '9292', '9292', '2929', '401197'),
(24, 'Bug Scare', '23123', '31212', '', '12312', 'one', '4-Oct-2010', '26-Oct-2010', '213312', '32212312', '232', '33', '33', '33', '754153343');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('a', '1');
