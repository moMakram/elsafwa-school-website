-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2014 at 06:03 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `safwa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE IF NOT EXISTS `active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`id`, `name`) VALUES
(2, 'بيسبول'),
(3, 'كره القدم'),
(4, 'كره الطائره');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE IF NOT EXISTS `attend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `one` varchar(5) NOT NULL,
  `two` varchar(5) NOT NULL,
  `three` varchar(5) NOT NULL,
  `four` varchar(5) NOT NULL,
  `five` varchar(5) NOT NULL,
  `six` varchar(5) NOT NULL,
  `seven` varchar(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  `class` varchar(40) NOT NULL,
  `idstu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`id`, `name`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `date`, `class`, `idstu`) VALUES
(1, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 9),
(2, 'ffffffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 10),
(3, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 12),
(4, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 13),
(5, 'ffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 15),
(6, 'fffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 16),
(7, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 21),
(8, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 23),
(9, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 24),
(10, 'ff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 26),
(11, 'xx', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 28),
(12, 'ففف', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 29),
(13, '444', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 30),
(14, 'mm', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 31),
(15, 'محمد مكرم', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 33),
(16, 'قفيل', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 34),
(17, 'rrr', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 35),
(18, 'gggg', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 36),
(19, 'tyt', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 37),
(20, 'ffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 38),
(21, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 9),
(22, 'ffffffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 10),
(23, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 12),
(24, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 13),
(25, 'ffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 15),
(26, 'fffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 16),
(27, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 21),
(28, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 23),
(29, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 24),
(30, 'ff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 26),
(31, 'xx', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 28),
(32, 'ففف', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 29),
(33, '444', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 30),
(34, 'mm', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 31),
(35, 'محمد مكرم', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 33),
(36, 'قفيل', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 34),
(37, 'rrr', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 35),
(38, 'gggg', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 36),
(39, 'tyt', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 37),
(40, 'ffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 38),
(41, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 9),
(42, 'ffffffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 10),
(43, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 12),
(44, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 13),
(45, 'ffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 15),
(46, 'fffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 16),
(47, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 21),
(48, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 23),
(49, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 24),
(50, 'ff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 26),
(51, 'xx', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 28),
(52, 'ففف', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 29),
(53, '444', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 30),
(54, 'mm', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 31),
(55, 'محمد مكرم', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 33),
(56, 'قفيل', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 34),
(57, 'rrr', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 35),
(58, 'gggg', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 36),
(59, 'tyt', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 37),
(60, 'ffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '444', '', 38),
(81, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 9),
(82, 'ffffffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 10),
(83, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 12),
(84, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 13),
(85, 'ffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 15),
(86, 'fffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 16),
(87, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 21),
(88, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 23),
(89, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 24),
(90, 'ff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 26),
(91, 'xx', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 28),
(92, 'ففف', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 29),
(93, '444', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 30),
(94, 'mm', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 31),
(95, 'محمد مكرم', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 33),
(96, 'قفيل', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 34),
(97, 'rrr', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 35),
(98, 'gggg', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 36),
(99, 'tyt', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 37),
(100, 'ffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '9-4-2013', '444', 38),
(101, 'ffffffffffffff', 'حضور', 'حضور', '', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-209', '3', 10),
(102, ' ', 'حضور', '', '', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-209', '3', 11),
(103, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-209', '3', 12),
(104, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-209', '3', 13),
(105, 'ffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 15),
(106, 'fffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 16),
(107, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 21),
(108, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 23),
(109, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 24),
(110, 'ff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 26),
(111, 'xx', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 28),
(112, 'ففف', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 29),
(113, '444', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 30),
(114, 'mm', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 31),
(115, 'محمد مكرم', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 33),
(116, 'قفيل', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 34),
(117, 'rrr', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 35),
(118, 'gggg', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 36),
(119, 'tyt', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 37),
(120, 'ffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 38),
(121, 'لالالا', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 39),
(122, 'vvv', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 40),
(123, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 41),
(124, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 42),
(125, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 43),
(126, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 44),
(127, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 45),
(128, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 47),
(129, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 48),
(130, 'mohamed', 'حضور', 'حضور', '', '', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 49),
(131, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 50),
(132, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 51),
(133, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-6-2014', '444', 52),
(134, 'ffffffffffffff', 'حضور', 'حضور', '', '', '', 'حضور', 'حضور', '2-2-2014', '3', 10),
(135, ' ', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '3', 11),
(136, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '3', 12),
(137, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '3', 13),
(138, 'ffffffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 15),
(139, 'fffffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 16),
(140, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 21),
(141, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 23),
(142, '', 'حضور', 'حضور', 'حضور', '', '', '', 'حضور', '2-2-2014', '444', 24),
(143, 'ff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 26),
(144, 'xx', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 28),
(145, 'ففف', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 29),
(146, '444', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 30),
(147, 'mm', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 31),
(148, 'محمد مكرم', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 33),
(149, 'قفيل', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 34),
(150, 'rrr', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 35),
(151, 'gggg', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 36),
(152, 'tyt', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 37),
(153, 'ffff', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 38),
(154, 'لالالا', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 39),
(155, 'vvv', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 40),
(156, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 41),
(157, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 42),
(158, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 43),
(159, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 44),
(160, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 45),
(161, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 47),
(162, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 48),
(163, 'mohamed', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 49),
(164, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 50),
(165, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 51),
(166, '', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', 'حضور', '2-2-2014', '444', 52);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classname`) VALUES
(1, ' 444'),
(4, '3');

-- --------------------------------------------------------

--
-- Table structure for table `good`
--

CREATE TABLE IF NOT EXISTS `good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(10000) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `good`
--

INSERT INTO `good` (`id`, `descr`, `file`) VALUES
(1, '<p style="text-align: center;"><span style="font-size: large;"><strong>مدرسه الصفوه</strong></span></p>\r\n<p style="text-align: center;"><span style="font-size: large;"><strong>حاصله على العديد من الجوائز والاوسمه الهامه</strong></span></p>\r\n<p style="text-align: center;"><span style="font-size: large;"><strong>وتخرج منها العديد من الطلبه المتفوقين الذين ساعدوا على نهوض الوطن</strong></span></p>', 'Kas2usb.By.FOUADY.rar');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `name`) VALUES
(2, ' االثالث'),
(4, 'لغه فرنسيه');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(1500) NOT NULL,
  `typee` varchar(10) NOT NULL,
  `ordere` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `descr`, `typee`, `ordere`) VALUES
(3, 'cds', 'يظهر', 0),
(5, 'vvv', 'لا يظهر', 2),
(6, 'mak', 'يظهر', 5),
(7, 'ddd', '', 2),
(8, 'dddd', '', 4),
(9, 'vvvv', 'يظهر', 3),
(10, 'الموقع تحت الانشاء', 'يظهر', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(400) NOT NULL,
  `descr` varchar(1500) NOT NULL,
  `place` varchar(70) NOT NULL,
  `ordere` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `file`, `descr`, `place`, `ordere`) VALUES
(2, '002.jpg', 'rrr', 'الصفحه الرئيسية', 2),
(3, '003.jpg', 'uyt', 'الصفحه الرئيسية', 4),
(4, '004.jpg', 'gfds', 'الصفحه الرئيسية', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pictactive`
--

CREATE TABLE IF NOT EXISTS `pictactive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(900) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `idactive` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pictactive`
--

INSERT INTO `pictactive` (`id`, `descr`, `file`, `idactive`) VALUES
(2, 'hhhhhhh', '4.jpg', 2),
(4, 'it will', 'cover2.jpg', 2),
(5, 'djkkssa', '4.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `prev`
--

CREATE TABLE IF NOT EXISTS `prev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `lastnews` int(11) NOT NULL,
  `updatenews` int(11) NOT NULL,
  `addphoto` int(11) NOT NULL,
  `updatephoto` int(11) NOT NULL,
  `quesvisit` int(11) NOT NULL,
  `addvideo` int(11) NOT NULL,
  `updatevideo` int(11) NOT NULL,
  `addgood` int(11) NOT NULL,
  `updategood` int(11) NOT NULL,
  `addstudent` int(11) NOT NULL,
  `updatestudent` int(11) NOT NULL,
  `addmaterial` int(11) NOT NULL,
  `updatematerial` int(11) NOT NULL,
  `addsection` int(11) NOT NULL,
  `updatesection` int(11) NOT NULL,
  `inquery` int(11) NOT NULL,
  `addclass` int(11) NOT NULL,
  `updateclass` int(11) NOT NULL,
  `addsheet` int(11) NOT NULL,
  `updatesheet` int(11) NOT NULL,
  `addyear` int(11) NOT NULL,
  `updateyear` int(11) NOT NULL,
  `addterm` int(11) NOT NULL,
  `updateterm` int(11) NOT NULL,
  `addtype` int(11) NOT NULL,
  `updatetype` int(11) NOT NULL,
  `addattend` int(11) NOT NULL,
  `updateattend` int(11) NOT NULL,
  `addactive` int(11) NOT NULL,
  `updateactive` int(11) NOT NULL,
  `pictactive` int(11) NOT NULL,
  `updatepictactive` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prev`
--

INSERT INTO `prev` (`id`, `username`, `password`, `lastnews`, `updatenews`, `addphoto`, `updatephoto`, `quesvisit`, `addvideo`, `updatevideo`, `addgood`, `updategood`, `addstudent`, `updatestudent`, `addmaterial`, `updatematerial`, `addsection`, `updatesection`, `inquery`, `addclass`, `updateclass`, `addsheet`, `updatesheet`, `addyear`, `updateyear`, `addterm`, `updateterm`, `addtype`, `updatetype`, `addattend`, `updateattend`, `addactive`, `updateactive`, `pictactive`, `updatepictactive`) VALUES
(2, ' makr', ' 10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'mkm', '5', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'mohamed', '7', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prevsheet`
--

CREATE TABLE IF NOT EXISTS `prevsheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matname` varchar(70) NOT NULL,
  `idte` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prevsheet`
--

INSERT INTO `prevsheet` (`id`, `matname`, `idte`) VALUES
(3, 'لغه فرنسيه', 4),
(4, 'علوم', 5),
(5, 'فيزياء', 5);

-- --------------------------------------------------------

--
-- Table structure for table `quesstu`
--

CREATE TABLE IF NOT EXISTS `quesstu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `ques` varchar(1500) NOT NULL,
  `ans` varchar(1500) NOT NULL,
  `typee` varchar(10) NOT NULL,
  `idstu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `quesstu`
--

INSERT INTO `quesstu` (`id`, `name`, `ques`, `ans`, `typee`, `idstu`) VALUES
(1, 'mohamed', '		   هل انت جاد\r\n	\r\n	', '		\r\n	\r\n	', 'يظهر', 0),
(4, 'mohamed', '					uuuuuuuuuuuuuu\r\n	\r\n	\r\n	\r\n	\r\n	', '					\r\n	hhhhhhhhhhhh\r\n	\r\n	\r\n	\r\n	', 'يظهر', 49),
(5, 'mohamed', '	   we are\r\n	', '	\r\n	', 'لا يظهر', 49),
(6, 'mohamed', '   dddd', '', 'لا يظهر', 49),
(7, 'mohamed', '	   ddddddd\r\n	', '	\r\n	', 'يظهر', 49),
(8, 'mohamed', '   ggggggggg', '', 'لا يظهر', 49),
(9, 'mohamed', '   بببببببب', '', 'لا يظهر', 49),
(10, 'mohamed', '   هنا القاهره', '', 'لا يظهر', 49),
(11, 'mohamed', '   gnv ', '', 'لا يظهر', 49);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `ques` varchar(3000) NOT NULL,
  `ans` varchar(3000) NOT NULL,
  `typee` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `ques`, `ans`, `typee`) VALUES
(1, '   mohamed', '	   ماذا يحدث عندما يختلط الزيت بالماء\r\n	', '	نعم هذا لن يحدث\r\n	', 'يظهر'),
(3, '   mkm', '   ffffffffff', '', 'لا يظهر');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `secname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `secname`) VALUES
(1, 'الالمانيه'),
(2, 'الفرنسيه');

-- --------------------------------------------------------

--
-- Table structure for table `sheet`
--

CREATE TABLE IF NOT EXISTS `sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `section` varchar(30) NOT NULL,
  `descr` varchar(70) NOT NULL,
  `file` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sheet`
--

INSERT INTO `sheet` (`id`, `material`, `year`, `term`, `section`, `descr`, `file`) VALUES
(1, 'علم نفس', '2014', 'الثانى', 'الالمانيه', 'هذا مهم جدا', ''),
(2, 'فيزياء', '2015', 'الاول', 'الالمانيه', 'هذا مهم جدا', 'gallery2_files_2.rar'),
(3, '-----', '', '', '-----', '', ''),
(4, '-----', '', '', '-----', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `password`, `class`, `year`, `section`, `term`) VALUES
(10, 'ffffffffffffff', '', '', '3', '', '', ''),
(11, ' ', ' ', ' fffffبببببببببببب', '3', ' ', ' ', ' '),
(12, '', '', 'ddddddd', '3', '', '', ''),
(13, '', '', '', '3', 'ffffff', '', ''),
(14, '', '', '', 'dddddd', '', '', ''),
(15, 'ffffffffff', '', '', '444', '', '', ''),
(16, 'fffffff', '', '', '444', '', '', ''),
(21, '', '', '', '444', '', '', ''),
(23, '', '', '', '444', '', '', ''),
(24, '', '', '', '444', '', '', ''),
(26, 'ff', '', '', '444', '', '', ''),
(28, 'xx', '', '', '444', '', '', ''),
(29, 'ففف', '', '', '444', '', '', ''),
(30, '444', '', '', '444', '', '', ''),
(31, 'mm', 'm', '4', '444', '', '', ''),
(33, 'محمد مكرم', '', '', '444', '', '', ''),
(34, 'قفيل', '', '', '444', '', '', ''),
(35, 'rrr', '', '', '444', '', '', ''),
(36, 'gggg', '', '', '444', '', '', ''),
(37, 'tyt', '', '', '444', '', '', ''),
(38, 'ffff', '', '', '444', '', '', ''),
(39, 'لالالا', '', '', '444', '', '', ''),
(40, 'vvv', '', '', '444', '', '', ''),
(41, '', '', '', '444', '', '', ''),
(42, '', '', '', '444', '', '', ''),
(43, '', '', '', '444', '', '', ''),
(44, '', '', '', '444', '', '', ''),
(45, '', '', '', '444', '', '', ''),
(47, '', '', '', '444', '', '', ''),
(48, '', '', '', '444', '', '', ''),
(49, 'mohamed', 'm', '3', '444', '', '', ''),
(50, '', '', '', '444', '', '', ''),
(51, '', '', '', '444', '', '', ''),
(52, '', '', '', '444', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `name`) VALUES
(1, 'الاول'),
(2, 'الثالث');

-- --------------------------------------------------------

--
-- Table structure for table `termmat`
--

CREATE TABLE IF NOT EXISTS `termmat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `term` varchar(20) NOT NULL,
  `material` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `termmat`
--

INSERT INTO `termmat` (`id`, `section`, `year`, `term`, `material`) VALUES
(5, 'الفرنسيه', ' 2014', 'الاول', 'فيزياء'),
(6, 'الفرنسيه', ' 2014', 'الاول', 'لغه فرنسيه'),
(7, 'الفرنسيه', '2020', 'الرابع', 'علم نفس'),
(8, 'الفرنسيه', '2020', 'الرابع', 'لغه فرنسيه'),
(9, 'الالمانيه', '2014', 'الاول', 'علم نفس'),
(10, 'الالمانيه', '2014', 'الاول', 'لغه فرنسيه');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(300) NOT NULL,
  `descr` varchar(1500) NOT NULL,
  `ordere` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `file`, `descr`, `ordere`) VALUES
(1, 'egypt2.mp4', 'gggg', 1),
(2, 'egypt5.mp4', 'fggggg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `name`) VALUES
(1, 2015),
(3, 2013);
