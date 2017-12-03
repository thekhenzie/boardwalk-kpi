-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2016 at 12:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--
CREATE DATABASE IF NOT EXISTS `dbtest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbtest`;

-- --------------------------------------------------------

--
-- Table structure for table `dataemployee`
--

CREATE TABLE IF NOT EXISTS `dataemployee` (
  `deId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `deDate` date NOT NULL,
  `deResult` float NOT NULL,
  `deAdded` date NOT NULL,
  PRIMARY KEY (`deId`),
  KEY `kpiId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `dataemployee`
--

INSERT INTO `dataemployee` (`deId`, `userId`, `deDate`, `deResult`, `deAdded`) VALUES
(1, 8, '2016-10-01', 21, '2016-10-23'),
(79, 9, '2016-10-01', 21, '2016-10-25'),
(80, 14, '2016-10-01', 21, '2016-10-25'),
(82, 33, '2016-11-01', 21, '2016-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `datakpi`
--

CREATE TABLE IF NOT EXISTS `datakpi` (
  `dkId` int(11) NOT NULL AUTO_INCREMENT,
  `kpiId` int(11) NOT NULL,
  `dkDate` date NOT NULL,
  `dkA` int(11) NOT NULL,
  `dkB` int(11) NOT NULL,
  `dkC` int(11) NOT NULL,
  `dkD` int(5) NOT NULL,
  `dkResult` float NOT NULL,
  `dkAdded` date NOT NULL,
  PRIMARY KEY (`dkId`),
  KEY `kpiId` (`kpiId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=370 ;

--
-- Dumping data for table `datakpi`
--

INSERT INTO `datakpi` (`dkId`, `kpiId`, `dkDate`, `dkA`, `dkB`, `dkC`, `dkD`, `dkResult`, `dkAdded`) VALUES
(2, 8, '2016-06-01', 0, 0, 0, 0, 2, '2016-06-01'),
(3, 8, '2016-04-01', 0, 0, 0, 0, 21, '2016-04-01'),
(4, 8, '2016-05-01', 0, 0, 0, 0, 22, '2016-05-01'),
(5, 8, '2016-07-01', 0, 0, 0, 0, 21, '2016-07-01'),
(6, 8, '2016-08-01', 0, 0, 0, 0, 12, '2016-08-01'),
(7, 2, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(8, 2, '2016-05-01', 0, 0, 0, 0, -15.66, '2016-05-01'),
(9, 2, '2016-06-01', 0, 0, 0, 0, 2.21, '2016-06-01'),
(10, 2, '2016-07-01', 0, 0, 0, 0, 0, '2016-07-01'),
(11, 2, '2016-08-01', 0, 0, 0, 0, 0, '2016-08-01'),
(12, 20, '2016-05-01', 0, 0, 0, 0, -17.11, '2016-05-01'),
(13, 20, '2016-06-01', 0, 0, 0, 0, 3.67, '2016-06-01'),
(14, 20, '2016-07-01', 0, 0, 0, 0, 0, '2016-07-01'),
(15, 20, '2016-08-01', 0, 0, 0, 0, 0, '2016-08-01'),
(16, 21, '2016-05-01', 0, 0, 0, 0, 53.92, '2016-05-01'),
(17, 21, '2016-06-01', 0, 0, 0, 0, 48.51, '2016-06-01'),
(18, 21, '2016-07-01', 0, 0, 0, 0, 0, '2016-07-01'),
(19, 21, '2016-08-01', 0, 0, 0, 0, 0, '2016-08-01'),
(20, 24, '2016-04-01', 0, 0, 0, 0, 380, '2016-04-01'),
(21, 24, '2016-05-01', 0, 0, 0, 0, 302, '2016-05-01'),
(22, 24, '2016-06-01', 0, 0, 0, 0, 52, '2016-06-01'),
(23, 24, '2016-07-01', 0, 0, 0, 0, 0, '2016-07-01'),
(24, 24, '2016-08-01', 0, 0, 0, 0, 0, '2016-08-01'),
(25, 22, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(26, 22, '2016-05-01', 0, 0, 0, 0, -25.84, '2016-05-01'),
(27, 22, '2016-06-01', 0, 0, 0, 0, 4.12, '2016-06-01'),
(28, 22, '2016-07-01', 0, 0, 0, 0, 0, '2016-07-01'),
(29, 22, '2016-08-01', 0, 0, 0, 0, 0, '2016-08-01'),
(30, 23, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(31, 23, '2016-05-01', 0, 0, 0, 0, 90, '2016-05-01'),
(32, 23, '2016-06-01', 0, 0, 0, 0, 96, '2016-06-01'),
(33, 23, '2016-07-01', 0, 0, 0, 0, 0, '2016-07-01'),
(34, 23, '2016-08-01', 0, 0, 0, 0, 0, '2016-08-01'),
(40, 20, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(41, 21, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(42, 2, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(43, 20, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(44, 21, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(45, 22, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(46, 23, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(47, 24, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(50, 20, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(51, 20, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(54, 21, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(55, 21, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(56, 22, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(57, 22, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(58, 23, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(59, 23, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(60, 24, '2016-01-01', 0, 0, 0, 0, 29, '2016-01-01'),
(61, 24, '2016-02-01', 0, 0, 0, 0, 26, '2016-02-01'),
(62, 24, '2016-10-01', 69, 0, 0, 0, 69, '2016-10-03'),
(78, 20, '2016-10-01', 2, 1, 0, 0, 100, '2016-10-25'),
(80, 22, '2016-10-01', 32, 32, 0, 0, 100, '2016-10-25'),
(81, 23, '2016-10-01', 32, 32, 0, 0, 100, '2016-10-25'),
(82, 28, '2016-11-01', 15, 15, 0, 0, 100, '2016-11-04'),
(83, 29, '2016-11-01', 50, 50, 0, 0, 100, '2016-11-04'),
(84, 34, '2016-11-01', 12, 11, 0, 0, 9.09091, '2016-11-04'),
(85, 35, '2016-11-01', 50, 20, 15, 0, 200, '2016-11-05'),
(86, 7, '2016-05-01', 0, 0, 0, 0, 100, '2016-05-01'),
(87, 7, '2016-06-01', 0, 0, 0, 0, 100, '2016-06-01'),
(88, 7, '2016-07-01', 0, 0, 0, 0, 100, '2016-07-01'),
(89, 7, '2016-08-01', 0, 0, 0, 0, 100, '2016-08-01'),
(90, 19, '2016-05-01', 0, 0, 0, 0, 98, '2016-05-01'),
(91, 19, '2016-06-01', 0, 0, 0, 0, 98, '2016-06-01'),
(92, 19, '2016-07-01', 0, 0, 0, 0, 100, '2016-07-01'),
(93, 19, '2016-08-01', 0, 0, 0, 0, 98, '2016-08-01'),
(94, 36, '2016-05-01', 0, 0, 0, 0, 5, '2016-05-01'),
(95, 36, '2016-06-01', 0, 0, 0, 0, 9, '2016-06-01'),
(96, 36, '2016-07-01', 0, 0, 0, 0, 6, '2016-07-01'),
(97, 36, '2016-08-01', 0, 0, 0, 0, 7, '2016-08-01'),
(98, 36, '2016-09-01', 0, 0, 0, 0, 9, '2016-09-01'),
(99, 37, '2016-05-01', 0, 0, 0, 0, 100, '2016-05-01'),
(100, 37, '2016-06-01', 0, 0, 0, 0, 90, '2016-06-01'),
(101, 37, '2016-07-01', 0, 0, 0, 0, 95, '2016-07-01'),
(102, 37, '2016-08-01', 0, 0, 0, 0, 80, '2016-08-01'),
(103, 37, '2016-09-01', 0, 0, 0, 0, 100, '2016-09-01'),
(104, 39, '2016-05-01', 0, 0, 0, 0, 85, '2016-05-01'),
(105, 39, '2016-06-01', 0, 0, 0, 0, 90, '2016-06-01'),
(106, 40, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(107, 40, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(108, 40, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(109, 40, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(110, 40, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(111, 40, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(112, 40, '2016-01-01', 0, 0, 0, 0, 99.83, '2016-01-01'),
(113, 40, '2016-02-01', 0, 0, 0, 0, 98.83, '2016-02-01'),
(114, 40, '2016-03-01', 0, 0, 0, 0, 78.75, '2016-03-01'),
(115, 40, '2016-04-01', 0, 0, 0, 0, 58.5, '2016-04-01'),
(116, 40, '2016-05-01', 0, 0, 0, 0, 25.45, '2016-05-01'),
(117, 40, '2016-06-01', 0, 0, 0, 0, 21.7, '2016-06-01'),
(118, 41, '2015-07-01', 0, 0, 0, 0, 100, '2015-07-01'),
(119, 41, '2015-08-01', 0, 0, 0, 0, 100, '2015-08-01'),
(120, 41, '2015-09-01', 0, 0, 0, 0, 100, '2015-09-01'),
(121, 41, '2015-10-01', 0, 0, 0, 0, 100, '2015-10-01'),
(122, 41, '2015-11-01', 0, 0, 0, 0, 100, '2015-11-01'),
(123, 41, '2015-12-01', 0, 0, 0, 0, 100, '2015-12-01'),
(124, 41, '2016-01-01', 0, 0, 0, 0, 100, '2016-01-01'),
(125, 41, '2016-02-01', 0, 0, 0, 0, 100, '2016-02-01'),
(126, 41, '2016-03-01', 0, 0, 0, 0, 100, '2016-03-01'),
(127, 41, '2016-04-01', 0, 0, 0, 0, 100, '2016-04-01'),
(128, 41, '2016-05-01', 0, 0, 0, 0, 100, '2016-05-01'),
(129, 41, '2016-06-01', 0, 0, 0, 0, 100, '2016-06-01'),
(130, 10, '2015-07-01', 0, 0, 0, 0, 116.5, '2015-07-01'),
(131, 10, '2015-08-01', 0, 0, 0, 0, 36.85, '2015-08-01'),
(132, 10, '2015-09-01', 0, 0, 0, 0, 105.59, '2015-09-01'),
(133, 10, '2015-10-01', 0, 0, 0, 0, 143.38, '2015-10-01'),
(134, 10, '2015-11-01', 0, 0, 0, 0, 201.1, '2015-11-01'),
(135, 10, '2015-12-01', 0, 0, 0, 0, 219.29, '2015-12-01'),
(136, 10, '2016-01-01', 0, 0, 0, 0, 190.05, '2016-01-01'),
(137, 10, '2016-02-01', 0, 0, 0, 0, 187.12, '2016-02-01'),
(138, 10, '2016-03-01', 0, 0, 0, 0, 100, '2016-03-01'),
(139, 10, '2016-04-01', 0, 0, 0, 0, 21.55, '2016-04-01'),
(140, 10, '2016-05-01', 0, 0, 0, 0, 78.04, '2016-05-01'),
(141, 10, '2016-06-01', 0, 0, 0, 0, 130.63, '2016-06-01'),
(142, 9, '2015-07-01', 0, 0, 0, 0, 95.2, '2015-07-01'),
(143, 9, '2015-08-01', 0, 0, 0, 0, 96.4, '2015-08-01'),
(144, 9, '2015-09-01', 0, 0, 0, 0, 92.5, '2015-09-01'),
(145, 9, '2015-10-01', 0, 0, 0, 0, 84.3, '2015-10-01'),
(146, 9, '2015-11-01', 0, 0, 0, 0, 92.9, '2015-11-01'),
(147, 9, '2015-12-01', 0, 0, 0, 0, 88, '2015-12-01'),
(148, 9, '2016-01-01', 0, 0, 0, 0, 94.7, '2016-01-01'),
(149, 9, '2016-02-01', 0, 0, 0, 0, 87.2, '2016-02-01'),
(150, 9, '2016-03-01', 0, 0, 0, 0, 94.2, '2016-03-01'),
(151, 9, '2016-04-01', 0, 0, 0, 0, 89.6, '2016-04-01'),
(152, 9, '2016-05-01', 0, 0, 0, 0, 94, '2016-05-01'),
(153, 9, '2016-06-01', 0, 0, 0, 0, 96.4, '2016-06-01'),
(154, 12, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(155, 12, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(156, 12, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(157, 12, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(158, 12, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(159, 12, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(160, 12, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(161, 12, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(162, 12, '2016-03-01', 0, 0, 0, 0, 50, '2016-03-01'),
(163, 12, '2016-04-01', 0, 0, 0, 0, 50, '2016-04-01'),
(164, 12, '2016-05-01', 0, 0, 0, 0, 75, '2016-05-01'),
(165, 12, '2016-06-01', 0, 0, 0, 0, 100, '2016-06-01'),
(166, 11, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(167, 11, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(168, 11, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(169, 11, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(170, 11, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(171, 11, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(172, 11, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(173, 11, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(174, 11, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(175, 11, '2016-04-01', 0, 0, 0, 0, 17.33, '2016-04-01'),
(176, 11, '2016-05-01', 0, 0, 0, 0, 21.92, '2016-05-01'),
(177, 11, '2016-06-01', 0, 0, 0, 0, 0, '2016-06-01'),
(178, 42, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(179, 42, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(180, 42, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(181, 42, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(182, 42, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(183, 42, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(184, 42, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(185, 42, '2016-02-01', 0, 0, 0, 0, 46.95, '2016-02-01'),
(186, 42, '2016-03-01', 0, 0, 0, 0, 56.26, '2016-03-01'),
(187, 42, '2016-04-01', 0, 0, 0, 0, 61.8, '2016-04-01'),
(188, 42, '2016-05-01', 0, 0, 0, 0, 72.82, '2016-05-01'),
(189, 42, '2016-06-01', 0, 0, 0, 0, 86.55, '2016-06-01'),
(190, 42, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(191, 42, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(192, 42, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(193, 42, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(194, 42, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(195, 42, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(196, 42, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(197, 42, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(202, 43, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(203, 43, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(204, 43, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(205, 43, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(206, 43, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(207, 43, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(208, 43, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(209, 43, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(210, 43, '2016-03-01', 0, 0, 0, 0, 100, '2016-03-01'),
(211, 43, '2016-04-01', 0, 0, 0, 0, 100, '2016-04-01'),
(212, 43, '2016-05-01', 0, 0, 0, 0, 100, '2016-05-01'),
(213, 43, '2016-06-01', 0, 0, 0, 0, 100, '2016-06-01'),
(214, 43, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(215, 43, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(216, 43, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(217, 43, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(218, 43, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(219, 43, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(220, 43, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(221, 43, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(222, 43, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(223, 43, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(224, 43, '2016-05-01', 0, 0, 0, 0, 0, '2016-05-01'),
(225, 43, '2016-06-01', 0, 0, 0, 0, 64.66, '2016-06-01'),
(226, 13, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(227, 13, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(228, 13, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(229, 13, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(230, 13, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(231, 13, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(232, 13, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(233, 13, '2016-02-01', 0, 0, 0, 0, 16, '2016-02-01'),
(234, 13, '2016-03-01', 0, 0, 0, 0, 15, '2016-03-01'),
(235, 13, '2016-04-01', 0, 0, 0, 0, 7, '2016-04-01'),
(236, 13, '2016-05-01', 0, 0, 0, 0, 5, '2016-05-01'),
(237, 13, '2016-06-01', 0, 0, 0, 0, 6, '2016-06-01'),
(238, 14, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(239, 14, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(240, 14, '2015-09-01', 0, 0, 0, 0, 2.373, '2015-09-01'),
(241, 14, '2015-10-01', 0, 0, 0, 0, 2.586, '2015-10-01'),
(242, 14, '2015-11-01', 0, 0, 0, 0, 2.379, '2015-11-01'),
(243, 14, '2015-12-01', 0, 0, 0, 0, 2.586, '2015-12-01'),
(244, 14, '2016-01-01', 0, 0, 0, 0, 2.378, '2016-01-01'),
(245, 14, '2016-02-01', 0, 0, 0, 0, 2.663, '2016-02-01'),
(246, 14, '2016-03-01', 0, 0, 0, 0, 2.843, '2016-03-01'),
(247, 14, '2016-04-01', 0, 0, 0, 0, 2.674, '2016-04-01'),
(248, 14, '2016-05-01', 0, 0, 0, 0, 2.849, '2016-05-01'),
(249, 14, '2016-06-01', 0, 0, 0, 0, 2.992, '2016-06-01'),
(250, 45, '2015-07-01', 0, 0, 0, 0, 100, '2015-07-01'),
(251, 45, '2015-08-01', 0, 0, 0, 0, 100, '2015-08-01'),
(252, 45, '2015-09-01', 0, 0, 0, 0, 100, '2015-09-01'),
(253, 45, '2015-10-01', 0, 0, 0, 0, 100, '2015-10-01'),
(254, 45, '2015-11-01', 0, 0, 0, 0, 100, '2015-11-01'),
(255, 45, '2015-12-01', 0, 0, 0, 0, 100, '2015-12-01'),
(256, 45, '2016-01-01', 0, 0, 0, 0, 100, '2016-01-01'),
(257, 45, '2016-02-01', 0, 0, 0, 0, 100, '2016-02-01'),
(258, 45, '2016-03-01', 0, 0, 0, 0, 100, '2016-03-01'),
(259, 45, '2016-04-01', 0, 0, 0, 0, 100, '2016-04-01'),
(260, 45, '2016-05-01', 0, 0, 0, 0, 100, '2016-05-01'),
(261, 45, '2016-06-01', 0, 0, 0, 0, 100, '2016-06-01'),
(262, 46, '2015-07-01', 0, 0, 0, 0, 1, '2015-07-01'),
(263, 46, '2015-08-01', 0, 0, 0, 0, 1, '2015-08-01'),
(264, 46, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(265, 46, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(266, 46, '2015-11-01', 0, 0, 0, 0, 2, '2015-11-01'),
(267, 46, '2015-12-01', 0, 0, 0, 0, 2, '2015-12-01'),
(268, 46, '2016-01-01', 0, 0, 0, 0, 2, '2016-01-01'),
(269, 46, '2016-02-01', 0, 0, 0, 0, 2, '2016-02-01'),
(270, 46, '2016-03-01', 0, 0, 0, 0, 1, '2016-03-01'),
(271, 46, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(272, 46, '2016-05-01', 0, 0, 0, 0, 0, '2016-05-01'),
(273, 46, '2016-06-01', 0, 0, 0, 0, 0, '2016-06-01'),
(274, 47, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(275, 47, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(276, 47, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(277, 47, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(278, 47, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(279, 47, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(280, 47, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(281, 47, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(282, 47, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(283, 47, '2016-04-01', 0, 0, 0, 0, 100, '2016-04-01'),
(284, 47, '2016-05-01', 0, 0, 0, 0, 0, '2016-05-01'),
(285, 47, '2016-06-01', 0, 0, 0, 0, 0, '2016-06-01'),
(286, 48, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(287, 48, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(288, 48, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(289, 48, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(290, 48, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(291, 48, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(292, 48, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(293, 48, '2016-02-01', 0, 0, 0, 0, 0.04, '2016-02-01'),
(294, 48, '2016-03-01', 0, 0, 0, 0, 0.04, '2016-03-01'),
(295, 48, '2016-04-01', 0, 0, 0, 0, 0.02, '2016-04-01'),
(296, 48, '2016-05-01', 0, 0, 0, 0, 0.03, '2016-05-01'),
(297, 48, '2016-06-01', 0, 0, 0, 0, 0.03, '2016-06-01'),
(298, 16, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(299, 16, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(300, 16, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(301, 16, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(302, 16, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(303, 16, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(304, 16, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(305, 16, '2016-02-01', 0, 0, 0, 0, 29.54, '2016-02-01'),
(306, 16, '2016-03-01', 0, 0, 0, 0, 39.38, '2016-03-01'),
(307, 16, '2016-04-01', 0, 0, 0, 0, 48.69, '2016-04-01'),
(308, 16, '2016-05-01', 0, 0, 0, 0, 51.18, '2016-05-01'),
(309, 16, '2016-06-01', 0, 0, 0, 0, 90.86, '2016-06-01'),
(310, 15, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(311, 15, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(312, 15, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(313, 15, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(314, 15, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(315, 15, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(316, 15, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(317, 15, '2016-02-01', 0, 0, 0, 0, 6.17, '2016-02-01'),
(318, 15, '2016-03-01', 0, 0, 0, 0, 41.99, '2016-03-01'),
(319, 15, '2016-04-01', 0, 0, 0, 0, 12.49, '2016-04-01'),
(320, 15, '2016-05-01', 0, 0, 0, 0, 35.51, '2016-05-01'),
(321, 15, '2016-06-01', 0, 0, 0, 0, 17.72, '2016-06-01'),
(322, 18, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(323, 18, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(324, 18, '2015-09-01', 0, 0, 0, 0, 911, '2015-09-01'),
(325, 18, '2015-10-01', 0, 0, 0, 0, 1621, '2015-10-01'),
(326, 18, '2015-11-01', 0, 0, 0, 0, 1297, '2015-11-01'),
(327, 18, '2015-12-01', 0, 0, 0, 0, 49, '2015-12-01'),
(328, 18, '2016-01-01', 0, 0, 0, 0, 884, '2016-01-01'),
(329, 18, '2016-02-01', 0, 0, 0, 0, 188, '2016-02-01'),
(330, 18, '2016-03-01', 0, 0, 0, 0, 496, '2016-03-01'),
(331, 18, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(332, 18, '2016-05-01', 0, 0, 0, 0, 120, '2016-05-01'),
(333, 18, '2016-06-01', 0, 0, 0, 0, 479, '2016-06-01'),
(334, 17, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(335, 17, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(336, 17, '2015-09-01', 0, 0, 0, 0, 911, '2015-09-01'),
(337, 17, '2015-10-01', 0, 0, 0, 0, 1621, '2015-10-01'),
(338, 17, '2015-11-01', 0, 0, 0, 0, 1297, '2015-11-01'),
(339, 17, '2015-12-01', 0, 0, 0, 0, 49, '2015-12-01'),
(340, 17, '2016-01-01', 0, 0, 0, 0, 884, '2016-01-01'),
(341, 17, '2016-02-01', 0, 0, 0, 0, 68, '2016-02-01'),
(342, 17, '2016-03-01', 0, 0, 0, 0, 26, '2016-03-01'),
(343, 17, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(344, 17, '2016-05-01', 0, 0, 0, 0, 33, '2016-05-01'),
(345, 17, '2016-06-01', 0, 0, 0, 0, 0, '2016-06-01'),
(346, 50, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(347, 50, '2015-08-01', 0, 0, 0, 0, 0, '2015-08-01'),
(348, 50, '2015-09-01', 0, 0, 0, 0, 0, '2015-09-01'),
(349, 50, '2015-10-01', 0, 0, 0, 0, 0, '2015-10-01'),
(350, 50, '2015-11-01', 0, 0, 0, 0, 0, '2015-11-01'),
(351, 50, '2015-12-01', 0, 0, 0, 0, 0, '2015-12-01'),
(352, 50, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(353, 50, '2016-02-01', 0, 0, 0, 0, 27, '2016-02-01'),
(354, 50, '2016-03-01', 0, 0, 0, 0, 38, '2016-03-01'),
(355, 50, '2016-04-01', 0, 0, 0, 0, 75, '2016-04-01'),
(356, 50, '2016-05-01', 0, 0, 0, 0, 98, '2016-05-01'),
(357, 50, '2016-06-01', 0, 0, 0, 0, 98, '2016-06-01'),
(358, 49, '2015-07-01', 0, 0, 0, 0, 0, '2015-07-01'),
(359, 49, '2015-08-01', 0, 0, 0, 0, 2, '2015-08-01'),
(360, 49, '2015-09-01', 0, 0, 0, 0, 2, '2015-09-01'),
(361, 49, '2015-10-01', 0, 0, 0, 0, 1, '2015-10-01'),
(362, 49, '2015-11-01', 0, 0, 0, 0, 1, '2015-11-01'),
(363, 49, '2015-12-01', 0, 0, 0, 0, 3, '2015-12-01'),
(364, 49, '2016-01-01', 0, 0, 0, 0, 0, '2016-01-01'),
(365, 49, '2016-02-01', 0, 0, 0, 0, 0, '2016-02-01'),
(366, 49, '2016-03-01', 0, 0, 0, 0, 0, '2016-03-01'),
(367, 49, '2016-04-01', 0, 0, 0, 0, 0, '2016-04-01'),
(368, 49, '2016-05-01', 0, 0, 0, 0, 0, '2016-05-01'),
(369, 49, '2016-06-01', 0, 0, 0, 0, 1, '2016-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `deptId` int(2) NOT NULL AUTO_INCREMENT,
  `deptName` varchar(256) NOT NULL,
  `deptDesc` varchar(512) NOT NULL,
  `deptHead` varchar(256) NOT NULL,
  PRIMARY KEY (`deptId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptId`, `deptName`, `deptDesc`, `deptHead`) VALUES
(1, 'Sales', '--Add Description--', 'Manager Manager'),
(2, 'Audit', '--Add Description--', '--Add Department Head-- '),
(3, 'Customer Care', '--Add Description--', '--Add Department Head-- '),
(4, 'Finance', '--Add Description--', '--Add Department Head-- '),
(5, 'Legal', '--Add Description--', '--Add Department Head-- '),
(6, 'Operation', '--Add Description--', '--Add Department Head-- '),
(7, 'Business Development', '--Add Description--', '--Add Department Head-- ');

-- --------------------------------------------------------

--
-- Table structure for table `formula`
--

CREATE TABLE IF NOT EXISTS `formula` (
  `fId` int(5) NOT NULL AUTO_INCREMENT,
  `fName` varchar(255) NOT NULL,
  `fFunction` varchar(255) NOT NULL,
  `fFormula` varchar(255) NOT NULL,
  `fA` varchar(255) NOT NULL,
  `fB` varchar(255) NOT NULL,
  `fC` varchar(255) NOT NULL,
  `fD` varchar(255) NOT NULL,
  `deptId` int(5) NOT NULL,
  PRIMARY KEY (`fId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `formula`
--

INSERT INTO `formula` (`fId`, `fName`, `fFunction`, `fFormula`, `fA`, `fB`, `fC`, `fD`, `deptId`) VALUES
(1, 'Sales Revenue', 'A', '', '$ Gross revenue from sales', '', '', '', 1),
(2, '% Projects on time', 'AB', '', '# Projects on time', '# Projects', '', '', 1),
(3, '% Customer acquisition', 'AB', '', '# New customers acquired in a given time period', '# Customers in a given time period', '', '', 1),
(4, '% Training programs for newly introduced innovations', 'AB', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 1),
(5, ' # New Ideas', 'A', '', '# New ideas submitted by individuals to their team leader', '', '', '', 1),
(6, '# Community awareness campaigns', 'A', '', '# Awareness campaigns organized by non-profit / non-governmental organizations', '', '', '', 1),
(7, '% Sales growth', 'ABB', '', '$ Sales for the current period', '$ Sales for the previous period considered', '', '', 1),
(8, '# Days sales of inventory (DSI)', 'ABp', '', '$ Inventory (value of the goods and materials held in stock at the moment of measurement)', '$ Cost of goods sold (COGS) in a day', '', '', 1),
(9, '% Customer attrition', 'AB', '', '# Customers lost in a given time period', '# Customers', '', '', 1),
(10, '% Financial Reports submitted on time', 'AB', '', '# Correct financial reports submitted on time', '# Financial reports submitted', '', '', 2),
(11, '% Progress reports submitted as planned', 'AB', '', '# Progress reports submitted as planned', '# Progress reports planned for submission', '', '', 2),
(12, '% Training programs for newly introduced innovations', 'AB', '', ' # Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 2),
(13, '% Assignment content adherence', 'AB', '', '# Completed requirements', '# Committed requirements', '', '', 2),
(14, '% Staff adherence to standards ', 'AB', '', '# Completed requirements', '# Committed requirements', '', '', 2),
(15, '% Projects meeting stakeholder expectations', 'AB', '', '# Projects that meet stakeholder expectations', '# Projects', '', '', 2),
(16, '% Project on time', 'AB', '', '# Projects on time', '# Projects', '', '', 2),
(17, '# Stakeholder satisfaction index', 'A', '', '# Index of stakeholder satisfaction\r\nUnstandardized index, based on surveys to consumers, employees, suppliers and shareholders.', '', '', '', 2),
(18, '% Accomplishment on social objectives', 'AB', '', '# Social objectives met', '# Total no. of social objectives', '', '', 2),
(19, '% Audit corrective action plans completed', 'AB', '', '# Corrective action plans which were completed after audits  ', '# Corrective actions planned after audits', '', '', 2),
(20, '# Risk identified', 'A', '', 'no. of risks', '', '', '', 2),
(21, 'Risk exposure', 'ABm', '', '% Probability of risk occurring', '$ Loss if risk occurs', '', '', 2),
(22, '# Alignment program', 'A', '', '# Alignment program', '', '', '', 2),
(23, '% Internal customer satisfaction (ICSAT)', 'AB', '', '# Customers who are satisfied with the services or products received', '# Customers', '', '', 2),
(24, '% Adoption of ISPPIA', 'AB', '', '# Delivered requirements', '#  Committed requirements', '', '', 2),
(25, '# Processes optimized', 'A', '', '# Work processes optimized', '', '', '', 2),
(26, 'Customer service expense per client', 'ABp', '', '$ Customer service spend', '# Customers', '', '', 3),
(27, '% Customer satisfaction', 'AB', '', '# Customers who are satisfied with the services or products received', '# Customers', '', '', 3),
(28, '% Customer attrition', 'AB', '', '# Customers lost in a given time period', '# Customers', '', '', 3),
(29, '# Time to resolve complaints', '', '', '# Time spent solving customer complaint ''i'', in days, where i=1 to n n = # Complaints received ', '', '', '', 3),
(30, '% Customer complaints resolved on the first contact', 'AB', '', '# Customer complaints resolved at first contact', '# Complaints handled', '', '', 3),
(31, '% Training programs for newly introduced innovations', 'AB', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 3),
(32, '%"Good" or "Excellent" rating for agency''s customer service', 'AB', '', '# Customers who rated "good" or "excellent" service levels', '# Customers surveyed', '', '', 3),
(33, '% Net Promoter Score', 'ACBC', '', '# Promoters', '# Detractors', '# Customers', '', 3),
(34, '% Projects on time', 'AB', '', ' # Projects on time', '# Projects', '', '', 3),
(37, '% Return on assets', 'AB', '', '$ Net income', '$ Assets value', '', '', 4),
(38, '% Year on year growth', 'ABA', '', '$ Tax collected for the previous period considered', '$ Tax collected for the current period', '', '', 4),
(39, 'Risk exposure', 'ABm', '', '% Probability of risk occurring', '$ Loss if risk occurs', '', '', 4),
(40, '# Regular risk reviews conducted', 'A', '', '# Regular risk reviews', '', '', '', 4),
(41, '% Training programs for newly introduced innovations', 'AB', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 4),
(42, 'Tax savings', 'A', '', '$ Value of taxes saved', '', '', '', 4),
(43, '# Ideas for new or improved services', 'A', '', '# Ideas for new or improved services', '', '', '', 4),
(44, '# Ideas put forward by individuals to team leaders  ', 'A', '', '# New ideas submitted by individuals to their team leader', '', '', '', 4),
(45, '% Employees that received a minimum accepted level of training', 'AB', '', '# Employees that received a minimum accepted level of training', '# Employees', '', '', 4),
(46, '# Feedback received from employees, partners and customers', 'A', '', '# Feedback suggestions received from employees, partners and customers', '', '', '', 4),
(47, '% Reduction in redundant data sources', 'AB', '', '# Redundant data sources that are eliminated', '# Duplicated sources of information', '', '', 4),
(48, '% Projects on time', 'AB', '', '# Projects on time', '# Projects', '', '', 4),
(49, '# External training programs', 'AB', '', '# External training programs', '# Training programs', '', '', 4),
(50, 'Savings achieved', 'ABs', '', '$ Cost that should have incurred in absence of savings initiative (millions)   ', '$ Actual cost incurred due to savings initiatives (millions)', '', '', 4),
(51, '# Innovation trainings', 'A', '', '# Innovation trainings for the employees', '', '', '', 4),
(52, '% Cash flow forecast error', 'ABB', '', '# External training programs', '# Training programs', '', '', 4),
(53, '% Success rate', 'AB', '', '# financial portals', '#  financial portals that have been converted successfully to "self-service" system', '', '', 4),
(54, 'Cash inflow', 'A', '', '$ Cash inflow', '', '', '', 4),
(55, '% Aging of uncollected bills', 'AB', '', ' $ Bills uncollected in 30, 60, 90, and 120+ day buckets ', '$ Uncollected bills', '', '', 5),
(56, '# Identified contract breaches', 'ABp', '', '# Contract breaches identified', '# Active contracts', '', '', 5),
(57, '% Training programs for newly introduced innovations', 'AB', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 5),
(58, '# Time spent with legal research and writing activities', 'A', '', '# Hours spent for legal research tasks and writing activities', '', '', '', 5),
(59, '% Lawsuits settled before trial', 'AB', '', '# Cases resolved without going to trial ', '# Total cases', '', '', 5),
(60, '% Projects on time', 'AB', '', '# Projects on time', '# Projects', '', '', 5),
(61, 'Cost to Litigate ', 'AB', '', '# Cost per day', '# Cost to litigate', '', '', 5),
(62, 'Cost per lawyer per day', 'A', '', '# Cost per lawyer per day', '', '', '', 5),
(63, 'Total cost to resolve', 'AB', '', '#', '#', '', '', 5),
(64, '% Compliance with BOPP standards', 'AB', '', '# groups that adopted BOPP standards successfully', '#  groups adopting BOPP standards', '', '', 5),
(65, '% CSF reports submitted correct and on time', 'AB', '', '# Correct reports submitted on time# Correct reports submitted on time', '# Total CSF reports ', '', '', 5),
(67, 'Interns', 'A', '', '# No of interns', '', '', '', 5),
(68, 'Inventory reduction', 'A', '', '$ Inventory reductions throughout the supply chain', '', '', '', 6),
(69, '% On time delivery', 'AB', '', '# Items delivered on-time', '# Items delivered', '', '', 6),
(70, '% Training programs for newly introduced innovations', 'AB', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 6),
(71, 'Annual loss expectancy', 'ABm', '', '# Single loss expectancy', '% Annualized rate of occurrence', '', '', 6),
(72, 'Operating cash flow (OCF)', 'ABCa', '', ' $ Earnings before interest and taxes (EBIT)', '$ Depreciation', ' $ Taxes', '', 6),
(73, 'Delivery overhead costs', 'A', '', '$ Overhead costs (fringe benefits, travel) inherent to service delivery', '', '', '', 6),
(74, '# Complaints received', 'A', '', '# Complaints received from customers', '', '', '', 6),
(75, '% Cash collection rate', 'AB', '', '$ Cash collected during the period from borrowers', '$ Cash falling due for the first time during the period under the terms of the original loan contract', '', '', 6),
(76, '% Cost of logistics for shipped orders', 'AB', '', ' $ Cost of logistics for orders shipped', '$ Shipping costs', '', '', 6),
(77, 'Operating cost per vehicle', '', '', '# Operating cost per vehicle ''i'', where i=1 to n\r\nn = # Vehicles', '', '', '', 6),
(78, '% Inventory turnover', 'AB', '', '# Projects on time', '# Projects', '', '', 6),
(79, '% Projects on time', 'AB', '', '# Projects on time', '# Projects', '', '', 6),
(80, 'Savings achieved', 'ABs', '', '$ Cost that should have incurred in absence of savings initiative (millions)', '$ Actual cost incurred due to savings initiatives (millions)', '', '', 6),
(81, 'Surplus inventory', 'ABs', '', ' $ Initial stock', '$ Sold stock', '', '', 6),
(82, 'Revenue from new business operations', 'A', '', '$ Revenues generated from newly launched products or services', '', '', '', 7),
(83, '% Growth from new business operations (% Sales growth)', 'ABB', '', '$ Sales for the current period', '$ Sales for the previous period considered', '', '', 7),
(84, '% Margin', 'AB', '', '$ Unit margin', '$ Unit price', '', '', 7),
(85, '# Grants', 'A', '', '# Kita kits served or granted', '', '', '', 7),
(87, '% Gross profit margin', 'ABAd', '', '$ Revenue (sales)', ' $ Cost of goods sold', '', '', 7),
(88, '# Ideas put forward by individuals to team leaders  ', 'A', '', '# New ideas submitted by individuals to their team leader', '', '', '', 7),
(89, 'Donations', 'A', '', '$ Donations', '', '', '', 7),
(90, '% Improvement of public relationships with business partners', 'AB', '', '# Public relationships improvement with business partners', '# Relationships with business partners', '', '', 7),
(91, '% Return on investment', 'ABB', '', '$ Revenue from investment', '$ Cost of investment', '', '', 7),
(92, '% Training programs for newly introduced innovations', 'AB', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 7),
(93, '# Milestones per project plan', '', '', '# Milestones for project ''i'', where i=1 to n\r\nn = # Projects', '', '', '', 7),
(94, '# Officers on board', 'A', '', '# Officers on board', '', '', '', 7),
(95, '# Sponsors per project', '', '', '# Sponsors for project ''i'', where i=1 to n\r\nn= # Projects managed by the non-profit / non-governmental organization', '', '', '', 7),
(96, '% Success rate', 'AB', '', '# beneficiaries that accomplished the final output of the program', '#  beneficiaries that respond to a call to action', '', '', 7),
(97, '# Proposed strategic initiatives', 'A', '', '# Strategic initiatives proposed', '', '', '', 7),
(98, '% Customer satisfaction with new products and services', 'AB', '', '# Satisfied clients with the new products and services', '# Clients', '', '', 7),
(99, '# Community awareness campaigns', 'A', '', '# Awareness campaigns organized by non-profit / non-governmental organizations', '', '', '', 7),
(100, '% Customer retention', 'ABC', '', ' # Customers at the end of the reporting period', ' # New customers acquired during the reporting period', '# Customers at the beginning of the reporting period ', '% Desertion rate', 7),
(101, '# Ideas for new or improved services', 'A', '', '# Ideas for new or improved services', '', '', '', 7),
(102, '# New customers', 'A', '', '# New customers acquired', '', '', '', 7),
(103, '# New-to-company opportunities in new markets', 'A', '', '# New opportunities identified in new markets due to the innovation process', '', '', '', 7),
(104, '% Projects on time', 'AB', '', '# Projects on time', '# Projects', '', '', 7),
(105, '# Partnerships with other national and international institutions', 'A', '', '# Partnerships', '', '', '', 7),
(106, '% Account expansion', 'AB', '', '$ Revenue from new business or projects with existing accounts', '$ Revenue from these accounts before the new projects', '', '', 7),
(107, '# Benefit cost ratio', 'AB', '', '$ Present value of the expected financial benefits of the project', '$ Present value of the estimated project''s costs ', '', '', 7),
(108, 'Potential revenue', 'A', '', '$ Potential revenue that can be achieved', '', '', '', 7),
(109, 'Activated new business value ', '', '', '$ New business contract ''i'', where i=1 to n \r\nn = # Activated new business contracts', '', '', '', 7),
(110, '% Growth in recruitment', 'ABB', '[(A-B)/B]*100', '% Recruitment from current period', '% Recruitment from previous period', '', '', 1),
(112, '% Growth in PS Retention', 'ABB', '[(A-B)/B]*100', '% PS Retention from current period', '% PS Retention from previous period', '', '', 1),
(113, '% Promoted PS', 'AB', '', '% PS promoted from current period', 'Total PS', '', '', 1),
(114, 'Sales personnel retention rate', 'ABC', '[(A-B)/C]*100', ' # Sales personnel at the end of theperiod', '# Sales personnel acquired during the period', '# Customers at the beginning of the period', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kpis`
--

CREATE TABLE IF NOT EXISTS `kpis` (
  `kpiId` int(90) NOT NULL AUTO_INCREMENT,
  `kpiName` varchar(255) NOT NULL,
  `kpiFunction` varchar(255) NOT NULL,
  `kpiDesc` varchar(255) NOT NULL,
  `kpiFormat` int(50) NOT NULL,
  `kpiTarget` int(50) NOT NULL,
  `kpiType` int(50) NOT NULL,
  `deptId` int(50) NOT NULL,
  PRIMARY KEY (`kpiId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `kpis`
--

INSERT INTO `kpis` (`kpiId`, `kpiName`, `kpiFunction`, `kpiDesc`, `kpiFormat`, `kpiTarget`, `kpiType`, `deptId`) VALUES
(2, '% Growth in Recruitment', '0', '--', 1, 1, 1, 1),
(7, '% Financial Reports submitted on time', '0', '--', 2, 100, 1, 2),
(8, '% Project on time', '0', '--', 2, 100, 1, 2),
(9, '% Customer satisfaction', '0', '--', 2, 100, 1, 3),
(10, 'â‚± Customer service expense per client', '0', '--', 3, 100, 1, 3),
(11, '% Return on assets', '0', '--', 2, 100, 1, 4),
(12, '% Success rate', '0', '--', 2, 100, 1, 4),
(13, 'Cost to Litigate ', '0', '--', 3, 20, 1, 5),
(14, 'Cost per lawyer per day', '0', '--', 3, 2, 1, 5),
(15, 'â‚± Savings achieved', '0', '--', 3, 50, 1, 6),
(16, '% Project on time', '0', '--', 2, 100, 1, 6),
(17, '% Return on investment', '0', '--', 2, 100, 1, 7),
(18, '# Potential revenue', '0', '--', 1, 100, 1, 7),
(19, '# Stakeholder satisfaction index', '0', '--', 2, 100, 1, 2),
(20, '% Growth in PS Retention', '0', '--', 2, 50, 1, 1),
(22, '% Promoted PS', '0', '--', 2, 50, 1, 1),
(23, 'Sales personnel retention rate', '0', '--', 1, 100, 1, 1),
(36, '# Risk Identified', '0', '--', 1, 10, 1, 2),
(37, 'Risk Exposure', '0', '--', 1, 100, 1, 2),
(39, '% Customer complaints resolved on the first contact', '0', '--', 2, 100, 1, 3),
(40, '% Projects on time', '0', '--', 2, 100, 1, 3),
(41, '% Training programs for newly introduced innovations', '0', '--', 2, 100, 1, 3),
(42, '% Projects on time', '0', '--', 2, 100, 1, 4),
(43, '% Training programs for newly introduced innovations', '0', '--', 2, 100, 1, 4),
(44, 'Tax savings', '0', '--', 3, 50, 1, 4),
(45, '% CSF reports submitted correct and on time', '0', '--', 2, 100, 1, 5),
(46, 'Interns', '0', '--', 1, 2, 1, 5),
(47, '% Training programs for newly introduced innovations', '0', '--', 2, 100, 1, 6),
(48, '% Cash collection rate', '0', '--', 2, 100, 1, 6),
(49, '# New-to-company opportunities in new markets', '0', '--', 1, 1, 1, 7),
(50, '% Projects on time', '0', '--', 2, 100, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `mscombi2ddata`
--

CREATE TABLE IF NOT EXISTS `mscombi2ddata` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `value1` int(50) NOT NULL,
  `value2` int(50) NOT NULL,
  `value3` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mscombi2ddata`
--

INSERT INTO `mscombi2ddata` (`id`, `category`, `value1`, `value2`, `value3`) VALUES
(1, 'Jan', 16000, 15000, 4000),
(2, 'Feb', 20000, 16000, 5000),
(3, 'Mar', 18000, 17000, 3000),
(4, 'Apr', 19000, 18000, 4000),
(5, 'May', 15000, 19000, 1000),
(6, 'Jun', 21000, 19000, 7000),
(7, 'Jul', 16000, 19000, 1000),
(8, 'Aug', 20000, 19000, 4000),
(9, 'Sep', 17000, 20000, 1000),
(10, 'Oct', 25000, 21000, 8000),
(11, 'Nov', 19000, 22000, 2000),
(12, 'Dec', 23000, 23000, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `newformula`
--

CREATE TABLE IF NOT EXISTS `newformula` (
  `nfId` int(51) NOT NULL AUTO_INCREMENT,
  `nfName` varchar(255) NOT NULL,
  `nfFunction` varchar(255) NOT NULL,
  `nfFormula` varchar(255) NOT NULL,
  `nfA` varchar(255) NOT NULL,
  `nfB` varchar(255) NOT NULL,
  `nfC` varchar(255) NOT NULL,
  `nfD` varchar(255) NOT NULL,
  `deptId` int(51) NOT NULL,
  PRIMARY KEY (`nfId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `newformula`
--

INSERT INTO `newformula` (`nfId`, `nfName`, `nfFunction`, `nfFormula`, `nfA`, `nfB`, `nfC`, `nfD`, `deptId`) VALUES
(1, '% Growth in recruitment', 'ABB', '[(A-B)/B]*100', 'A=Recruitment from current period', 'B=Recruitment from previous period', '', '', 1),
(2, '% Growth in PS Retention', 'ABB', '[(A-B)/B]*100', 'A=PS Retention from current period', 'B=PS Retention from previous period', '', '', 1),
(3, '% Promoted PS', 'AB', '[A/B]*100', 'A=PS promoted from current period', 'B=Total PS', '', '', 1),
(4, 'Sales personnel retention rate', 'ABC', '[(A-B)/C]*100', 'A = # Sales personnel at the end of the reporting period', 'B = # Sales personnel acquired during the reporting period', 'C = # Customers at the beginning of the reporting period', '', 1),
(5, 'Registered Sharepreneur', 'A', 'A', 'A = # Registered Sharepreneur', '', '', '', 1),
(10, '# Registered Sharementor', 'A', 'A', 'A = # Registered Sharementor', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `reportId` int(90) NOT NULL AUTO_INCREMENT,
  `reportName` varchar(255) NOT NULL,
  `reportStatus` varchar(50) NOT NULL,
  `reportDate` date NOT NULL,
  `reportCreated` date NOT NULL,
  `reportStep` varchar(255) NOT NULL,
  `reportConcern` varchar(255) NOT NULL,
  `reportLevel` varchar(255) NOT NULL,
  `deptId` int(90) NOT NULL,
  PRIMARY KEY (`reportId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reportId`, `reportName`, `reportStatus`, `reportDate`, `reportCreated`, `reportStep`, `reportConcern`, `reportLevel`, `deptId`) VALUES
(28, 'Introduce GME Year-End Achievement', 'Not Started', '2016-09-17', '2016-09-13', '--', 'Final evaluation will be at the end of this FY', 'High', 1),
(29, 'Development of YES Learning Booklet', 'Complete', '2016-09-17', '2016-09-13', '--', 'Frequent follow ups with CMC has been made on this', 'Low', 1),
(30, 'Branch Disbursemnet Monitoring and Auditing', 'On-going', '2016-09-05', '2016-09-13', 'Periodic Monitoring', 'Delayed RCA/SB Liquidation System Approval C/O Finance Group', 'Medium', 2),
(31, 'Branch Operations and Compliance', 'On-going', '2016-10-12', '2016-10-12', 'Periodic Monitoring', 'Understaffing', 'Medium', 2),
(32, 'On boarding training of new employees', 'On-going', '2016-09-14', '2016-09-13', 'Performance monitoring', '--', 'Low', 4),
(33, 'Reduction of files stored at Head Office', 'On-going', '2016-09-16', '2016-09-13', 'Continue weekly cleaning of files', '--', 'Medium', 4),
(34, 'Meeting wih OPG Dept Heads for Strat', 'Complete', '2016-09-12', '2016-09-13', 'Finalization', 'KPIs and Targets', 'Low', 6),
(35, 'Qwerrwew', 'On-going', '2016-09-21', '2016-09-13', 'Wdwdxsd', 'Fwfefq', 'High', 6),
(36, 'Review & Approval of BW Shares Retail Plan', 'Complete', '2016-10-11', '2016-10-11', 'For presentation to EO', '--', 'Medium', 7),
(37, 'Submitted BDG June CSFs', 'Complete', '2016-09-16', '2016-09-13', 'Took effect July', '--', 'Low', 7),
(39, 'Dsa', 'On-going', '2016-10-22', '2016-10-23', '', '', 'Medium', 1),
(40, 'Try', 'On-going', '2016-10-28', '2016-10-25', '', '', 'Low', 1),
(41, 'Ngayon', 'Not Started', '2016-10-28', '2016-10-25', 'Qwe', 'Qwe', 'Low', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userFname` varchar(255) NOT NULL,
  `userLname` varchar(255) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userDate` date NOT NULL,
  `deptId` int(10) NOT NULL,
  `userRole` varchar(255) NOT NULL,
  `userType` int(50) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFname`, `userLname`, `userName`, `Name`, `userEmail`, `userPass`, `userDate`, `deptId`, `userRole`, `userType`) VALUES
(5, 'Harold', 'Daniel', 'khenpogi', 'Harold Daniel', 'haroldbaniqued@yahoo.com', 'khenpogi', '2016-09-03', 2, 'superuser', 0),
(7, 'Melissa', 'Baloloy', 'melissabaloloy', 'Melissa Baloloy', 'melissabaloloy@gmail.com', 'melissabaloloy', '2016-09-03', 2, 'employee', 0),
(8, 'Riza', 'Gison', 'rizagison', 'Riza Gison', 'riza@gmail.com', 'rizagison', '2016-09-01', 1, 'employee', 0),
(9, 'Christian', 'Lopez', 'christianlopez', 'Christian Lopez', 'christianlopez@gmail.com', 'christianlopez', '2016-09-02', 1, 'employee', 0),
(10, 'Jenny', 'Melchor', 'jennymelchor', 'Jenny Melchor', 'jennymelchor@gmail.com', 'jennymelchor', '2016-09-03', 1, 'employee', 0),
(11, 'Admin', 'Admin', 'admin', 'Admin Admin', 'admin@yahoo.com', 'admin', '2016-09-03', 2, 'admin', 0),
(12, 'Alma', 'Cerda', 'almacerda', 'Alma Cerda', 'almacerda@gmail.com', 'almacerda', '2016-09-05', 2, 'employee', 0),
(13, 'Chuchie', 'Esmeria', 'chuchieesmeria', 'Chuchie Esmeria', 'chuchieesmeria@gmail.com', 'chuchieesmeria', '2016-09-06', 2, 'employee', 0),
(14, 'Joanne', 'Rosario', 'joannerosario', 'Joanna Rosario', 'joannerosario@gmail.com', 'joannerosario', '2016-09-07', 3, 'employee', 0),
(15, 'Manilyn', 'Rodriguez', 'manilynrodriguez', 'Manilyn Rodriguez', 'manilynrodriguez@gmail.com', 'manilynrodriguez', '2016-09-08', 3, 'employee', 0),
(16, 'Katrina', 'Amper', 'katrinaamper', 'Katrina Amper', 'katrinaamper@gmail.com', 'katrinaamper', '2016-09-09', 3, 'employee', 0),
(17, 'Madelyn', 'Abarca', 'madelynabarca', 'Madelyn Abarca', 'madelynabarca@gmail.com', 'madelynabarca', '2016-09-12', 4, 'employee', 0),
(18, 'Jerald', 'Abong', 'jeraldabong', 'Jerald Abong', 'jeraldabong@gmail.com', 'jeraldabong', '2016-09-13', 4, 'employee', 0),
(19, 'Dolores', 'Aguilar', 'doloresaguilar', 'Dolores Aguilar', 'doloresaguilar@gmail.com', 'doloresaguilar', '2016-09-14', 4, 'employee', 0),
(20, 'Jean', 'Raymundo', 'jeanraymundo', 'Jean Raymundo', 'jeanraymundo@gmail.com', 'jeanraymundo', '2016-09-14', 5, 'employee', 0),
(21, 'Geizel', 'Verzosa', 'geizelverzosa', 'Geizel Verzosa', 'geizelverzosa@gmail.com', 'geizelverzosa', '2016-09-15', 5, 'employee', 0),
(22, 'Franjelo', 'Sotto', 'franjelosotto', 'Franjelo Sotto', 'franjelosotto@gmail.com', 'franjelosotto', '2016-09-16', 5, 'employee', 0),
(23, 'Rowel', 'Alferez', 'rowelalferez', 'Rowel Alferez', 'rowelalferez@gmail.com', 'rowelalferez', '2016-09-19', 6, 'employee', 0),
(24, 'Allan', 'Balid', 'allanbalid', 'Allan Balid', 'allanbalid@gmail.com', 'allanbalid', '2016-09-20', 6, 'employee', 0),
(25, 'Ramil', 'Corpuz', 'ramilcorpuz', 'Ramil Corpuz', 'ramilcorpuz@gmail.com', 'ramilcorpuz', '2016-09-21', 6, 'employee', 0),
(26, 'Murielle', 'Jardin', 'muriellejardin', 'Murielle Jardin', 'muriellejardin@gmail.com', 'muriellejardin', '2016-09-22', 7, 'employee', 0),
(27, 'Harris', 'Ignacio', 'harrisignacio', 'Harris Ignacio', 'harrisignacio@gmail.com', 'harrisignacio', '2016-09-22', 7, 'employee', 0),
(28, 'Norvin', 'Autor', 'norvinautor', 'Norvin Autor', 'norvinautor@gmail.com', 'norvinautor', '2016-09-23', 7, 'employee', 0),
(29, 'Manager', 'Manager', 'manager', 'Manager Manager', 'manager@yahoo.com', 'manager', '2016-09-23', 2, 'manager', 3),
(30, 'Employee', 'Employee', 'employee', 'Employee', 'employee@ya.co', 'employee', '2016-09-23', 2, 'employee', 0),
(31, 'Working', 'Ba', 'workingba', 'Working Ba', 'awer@yahoo.com', 'workingba', '2016-10-23', 6, 'admin', 0),
(32, 'Superuser', 'Superuser', 'superuser', 'Superuser', 'super@user.com', 'superuser', '2016-10-23', 2, 'superuser', 0),
(33, 'Another', 'Manager', 'anothermanager', 'Another Manager', 'another@manager.com', 'anothermanager', '2016-11-05', 1, 'manager', 2),
(35, 'Third', 'Manager', 'thirdmanager', 'Third manager', 'third@manager.com', 'thirdmanager', '2016-11-05', 3, 'manager', 2),
(36, 'Finance', 'Head', 'financehead', 'Finance Head', 'finance@head.com', 'financehead', '2016-11-05', 4, 'manager', 2),
(43, 'Qwe', 'Wewqe', 'qwewewqe', 'Qwe Wewqe', 'qweqwe@yahoo.com', 'qwewewqe', '2016-11-06', 1, 'manager', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
