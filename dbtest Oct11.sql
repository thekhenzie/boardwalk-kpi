-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2016 at 05:26 PM
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
  PRIMARY KEY (`dkId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

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
(63, 22, '0000-00-00', 0, 0, 0, 0, 0, '0000-00-00'),
(64, 2, '0000-00-00', 0, 0, 0, 0, 0, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptId`, `deptName`, `deptDesc`, `deptHead`) VALUES
(1, 'Sales', '--Add Description--', '--Add Department Head-- '),
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
  `fComment` varchar(255) NOT NULL,
  `fFormula` varchar(255) NOT NULL,
  `fA` varchar(255) NOT NULL,
  `fB` varchar(255) NOT NULL,
  `fC` varchar(255) NOT NULL,
  `fD` varchar(255) NOT NULL,
  `deptId` int(5) NOT NULL,
  PRIMARY KEY (`fId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `formula`
--

INSERT INTO `formula` (`fId`, `fName`, `fComment`, `fFormula`, `fA`, `fB`, `fC`, `fD`, `deptId`) VALUES
(1, '$ Sales Revenue', 'sales', 'dkA', '$ Gross revenue from sales', '', '', '', 1),
(2, '% Projects on time', 'project', '(dkA/dkB)*100', '# Projects on time', '# Projects', '', '', 1),
(3, '% Customer acquisition', '', '', '# New customers acquired in a given time period', '# Customers in a given time period', '', '', 1),
(4, '% Training programs for newly introduced innovations', '', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 1),
(5, '# Ideas put forward by individuals to team leaders  ', '', '', '# New ideas submitted by individuals to their team leader', '', '', '', 1),
(6, '# Community awareness campaigns', '', '', '# Awareness campaigns organized by non-profit / non-governmental organizations', '', '', '', 1),
(7, '% Sales growth', '', '', '$ Sales for the current period', '$ Sales for the previous period considered', '', '', 1),
(8, '# Days sales of inventory (DSI)', '', '', '$ Inventory (value of the goods and materials held in stock at the moment of measurement)', '$ Cost of goods sold (COGS) in a day', '', '', 1),
(9, '% Customer attrition', '', '', '# Customers lost in a given time period', '# Customers', '', '', 1),
(10, '% Financial reports submitted correct and on time', '', '', '# Correct financial reports submitted on time', '# Financial reports submitted', '', '', 2),
(11, '% Progress reports submitted as planned', '', '', '# Progress reports submitted as planned', '# Progress reports planned for submission', '', '', 2),
(12, '% Training programs for newly introduced innovations', '', '', ' # Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 2),
(13, '% Assignment content adherence', '', '', '# Completed requirements', '# Committed requirements', '', '', 2),
(14, '% Staff adherence to standards ', '', '', '# Completed requirements', '# Committed requirements', '', '', 2),
(15, '% Projects meeting stakeholder expectations', '', '', '# Projects that meet stakeholder expectations', '# Projects', '', '', 2),
(16, '% Projects on time', '', '', '# Projects on time', '# Projects', '', '', 2),
(17, '# Stakeholder satisfaction index', '', '', '# Index of stakeholder satisfaction\r\nUnstandardized index, based on surveys to consumers, employees, suppliers and shareholders.', '', '', '', 2),
(18, '% Accomplishment on social objectives', '', '', '# Social objectives met', '# Total no. of social objectives', '', '', 2),
(19, '% Audit corrective action plans completed', '', '', '# Corrective action plans which were completed after audits  ', '# Corrective actions planned after audits', '', '', 2),
(20, '# Risk identified', '', '', 'no. of risks', '', '', '', 2),
(21, '$ Risk exposure', '', '', '% Probability of risk occurring', '$ Loss if risk occurs', '', '', 2),
(22, '# Alignment program', '', '', '# Alignment program', '', '', '', 2),
(23, '% Internal customer satisfaction (ICSAT)', '', '', '# Customers who are satisfied with the services or products received', '# Customers', '', '', 2),
(24, '% Adoption of ISPPIA', '', '', '# Delivered requirements', '#  Committed requirements', '', '', 2),
(25, '# Processes optimized', '', '', '# Work processes optimized', '', '', '', 2),
(26, '$ Customer service expense per client', '', '', '$ Customer service spend', '# Customers', '', '', 3),
(27, '% Customer satisfaction', '', '', '# Customers who are satisfied with the services or products received', '# Customers', '', '', 3),
(28, '% Customer attrition', '', '', '# Customers lost in a given time period', '# Customers', '', '', 3),
(29, '# Time to resolve complaints', '', '', '# Time spent solving customer complaint ''i'', in days, where i=1 to n n = # Complaints received ', '', '', '', 3),
(30, '% Customer complaints resolved on the first contact', '', '', '# Customer complaints resolved at first contact', '# Complaints handled', '', '', 3),
(31, '% Training programs for newly introduced innovations', '', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 3),
(32, '%"Good" or "Excellent" rating for agency''s customer service', '', '', '# Customers who rated "good" or "excellent" service levels', '# Customers surveyed', '', '', 3),
(33, '% Net Promoter Score', '', '', '# Promoters', '# Detractors', '# Customers', '', 3),
(34, '% Projects on time', '', '', ' # Projects on time', '# Projects', '', '', 3),
(37, '% Return on assets', '', '', '$ Net income', '$ Assets value', '', '', 4),
(38, '% Year on year growth', '', '', '$ Tax collected for the previous period considered', '$ Tax collected for the current period', '', '', 4),
(39, '$ Risk exposure', '', '', '% Probability of risk occurring', '$ Loss if risk occurs', '', '', 4),
(40, '# Regular risk reviews conducted', '', '', '# Regular risk reviews', '', '', '', 4),
(41, '% Training programs for newly introduced innovations', '', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 4),
(42, '$ Tax collected', '', '', '$ Value of taxes collected', '', '', '', 4),
(43, '# Ideas for new or improved services', '', '', '# Ideas for new or improved services', '', '', '', 4),
(44, '# Ideas put forward by individuals to team leaders  ', '', '', '# New ideas submitted by individuals to their team leader', '', '', '', 4),
(45, '% Employees that received a minimum accepted level of training', '', '', '# Employees that received a minimum accepted level of training', '# Employees', '', '', 4),
(46, '# Feedback received from employees, partners and customers', '', '', '# Feedback suggestions received from employees, partners and customers', '', '', '', 4),
(47, '% Reduction in redundant data sources', '', '', '# Redundant data sources that are eliminated', '# Duplicated sources of information', '', '', 4),
(48, '% Projects on time', '', '', '# Projects on time', '# Projects', '', '', 4),
(49, '# External training programs', '', '', '# External training programs', '# Training programs', '', '', 4),
(50, '$ Savings achieved', '', '', '$ Cost that should have incurred in absence of savings initiative (millions)   ', '$ Actual cost incurred due to savings initiatives (millions)', '', '', 4),
(51, '# Innovation trainings', '', '', '# Innovation trainings for the employees', '', '', '', 4),
(52, '% Cash flow forecast error', '', '', '# External training programs', '# Training programs', '', '', 4),
(53, '% Success rate', '', '', '# financial portals', '#  financial portals that have been converted successfully to "self-service" system', '', '', 4),
(54, '$ Cash inflow', '', '', '$ Cash inflow', '', '', '', 4),
(55, '% Aging of uncollected bills', '', '', ' $ Bills uncollected in 30, 60, 90, and 120+ day buckets ', '$ Uncollected bills', '', '', 5),
(56, '# Identified contract breaches', '', '', '# Contract breaches identified', '# Active contracts', '', '', 5),
(57, '% Training programs for newly introduced innovations', '', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 5),
(58, '# Time spent with legal research and writing activities', '', '', '# Hours spent for legal research tasks and writing activities', '', '', '', 5),
(59, '% Lawsuits settled before trial', '', '', '# Cases resolved without going to trial ', '# Total cases', '', '', 5),
(60, '% Projects on time', '', '', '# Projects on time', '# Projects', '', '', 5),
(61, '$ Cost to litigate ', '', '', '#', '#', '', '', 5),
(62, '$ Cost per lawyer per hour', '', '', '#', '#', '', '', 5),
(63, '$ Total cost to resolve (TCR)', '', '', '#', '#', '', '', 5),
(64, '% Compliance with BOPP standards', '', '', '# groups that adopted BOPP standards successfully', '#  groups adopting BOPP standards', '', '', 5),
(65, '% CSF reports submitted correct and on time', '', '', '# Correct reports submitted on time# Correct reports submitted on time', '# Total CSF reports ', '', '', 5),
(66, '% Retention rate', '', '', '#', '#', '', '', 5),
(67, '# Interns', '', '', '#', '', '', '', 5),
(68, '$ Inventory reduction', '', '', '$ Inventory reductions throughout the supply chain', '', '', '', 6),
(69, '% On time delivery', '', '', '# Items delivered on-time', '# Items delivered', '', '', 6),
(70, '% Training programs for newly introduced innovations', '', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 6),
(71, '$ Annual loss expectancy', '', '', '# Single loss expectancy', '% Annualized rate of occurrence', '', '', 6),
(72, '$ Operating cash flow (OCF)', '', '', ' $ Earnings before interest and taxes (EBIT)', '$ Depreciation', ' $ Taxes', '', 6),
(73, '$ Delivery overhead costs', '', '', '$ Overhead costs (fringe benefits, travel) inherent to service delivery', '', '', '', 6),
(74, '# Complaints received', '', '', '# Complaints received from customers', '', '', '', 6),
(75, '% Cash collection rate', '', '', '$ Cash collected during the period from borrowers', '$ Cash falling due for the first time during the period under the terms of the original loan contract', '', '', 6),
(76, '% Cost of logistics for shipped orders', '', '', ' $ Cost of logistics for orders shipped', '$ Shipping costs', '', '', 6),
(77, '$ Operating cost per vehicle', '', '', '# Operating cost per vehicle ''i'', where i=1 to n\r\nn = # Vehicles', '', '', '', 6),
(78, '% Inventory turnover', '', '', '# Projects on time', '# Projects', '', '', 6),
(79, '% Projects on time', '', '', '# Projects on time', '# Projects', '', '', 6),
(80, '$ Savings achieved', '', '', '$ Cost that should have incurred in absence of savings initiative (millions)', '$ Actual cost incurred due to savings initiatives (millions)', '', '', 6),
(81, '$ Surplus inventory (<P45,000)', '', '', ' $ Initial stock', '$ Sold stock', '', '', 6),
(82, '$ Revenue from new business operations', '', '', '$ Revenues generated from newly launched products or services', '', '', '', 7),
(83, '% Growth from new business operations (% Sales growth)', '', '', '$ Sales for the current period', '$ Sales for the previous period considered', '', '', 7),
(84, '% Margin', '', '', '$ Unit margin', '$ Unit price', '', '', 7),
(85, '# Grants', '', '', '# Kita kits served or granted', '', '', '', 7),
(86, '$ Donations', '', '', '$ Revenues generated from newly launched products or services', '', '', '', 7),
(87, '% Gross profit margin', '', '', '$ Revenue (sales)', ' $ Cost of goods sold', '$ Gross income (A-B)', '', 7),
(88, '# Ideas put forward by individuals to team leaders  ', '', '', '# New ideas submitted by individuals to their team leader', '', '', '', 7),
(89, '$ Donations', '', '', '$ Donations', '', '', '', 7),
(90, '% Improvement of public relationships with business partners', '', '', '# Public relationships improvement with business partners', '# Relationships with business partners', '', '', 7),
(91, '% Return on investment', '', '', '$ Revenue from investment', '$ Cost of investment', '', '', 7),
(92, '% Training programs for newly introduced innovations', '', '', '# Training programs offered for newly introduced innovations in the company', '# Training programs offered by the company', '', '', 7),
(93, '# Milestones per project plan', '', '', '# Milestones for project ''i'', where i=1 to n\r\nn = # Projects', '', '', '', 7),
(94, '# Officers on board', '', '', '# Officers on board', '', '', '', 7),
(95, '# Sponsors per project', '', '', '# Sponsors for project ''i'', where i=1 to n\r\nn= # Projects managed by the non-profit / non-governmental organization', '', '', '', 7),
(96, '% Success rate', '', '', '# beneficiaries that accomplished the final output of the program', '#  beneficiaries that respond to a call to action', '', '', 7),
(97, '# Proposed strategic initiatives', '', '', '# Strategic initiatives proposed', '', '', '', 7),
(98, '% Customer satisfaction with new products and services', '', '', '# Satisfied clients with the new products and services', '# Clients', '', '', 7),
(99, '# Community awareness campaigns', '', '', '# Awareness campaigns organized by non-profit / non-governmental organizations', '', '', '', 7),
(100, '% Customer retention', '', '', ' # Customers at the end of the reporting period', ' # New customers acquired during the reporting period', '# Customers at the beginning of the reporting period ', '% Desertion rate', 7),
(101, '# Ideas for new or improved services', '', '', '# Ideas for new or improved services', '', '', '', 7),
(102, '# New customers', '', '', '# New customers acquired', '', '', '', 7),
(103, '# New-to-company opportunities in new markets', '', '', '# New opportunities identified in new markets due to the innovation process', '', '', '', 7),
(104, '% Projects on time', '', '', '# Projects on time', '# Projects', '', '', 7),
(105, '# Partnerships with other national and international institutions', '', '', '# Partnerships', '', '', '', 7),
(106, '% Account expansion', '', '', '$ Revenue from new business or projects with existing accounts', '$ Revenue from these accounts before the new projects', '', '', 7),
(107, '# Benefit cost ratio', '', '', '$ Present value of the expected financial benefits of the project', '$ Present value of the estimated project''s costs ', '', '', 7),
(108, '$ Potential revenue', '', '', '$ Potential revenue that can be achieved', '', '', '', 7),
(109, '$ Activated new business value (or contracts) (an alternative $ Activated contract renewals)', '', '', '$ New business contract ''i'', where i=1 to n \r\nn = # Activated new business contracts', '', '', '', 7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `kpis`
--

INSERT INTO `kpis` (`kpiId`, `kpiName`, `kpiFunction`, `kpiDesc`, `kpiFormat`, `kpiTarget`, `kpiType`, `deptId`) VALUES
(2, '% Growth in Recruitment', '0', '--', 2, 50, 1, 1),
(7, '% Financial Reports submitted on time', '0', '--', 2, 100, 1, 2),
(8, '% Project on time', '0', '--', 2, 100, 1, 2),
(9, '% Customer satisfaction', '0', '--', 2, 100, 1, 3),
(10, 'â‚± Customer service expense per client', '0', '--', 3, 100, 1, 3),
(11, '% Return on assets', '0', '--', 2, 100, 1, 4),
(12, '% Success rate', '0', '--', 2, 100, 1, 4),
(13, 'â‚± Cost to Litigate', '0', '--', 3, 100, 1, 5),
(14, 'â‚± Cost per lawyer per day', '0', '--', 3, 100, 1, 5),
(15, 'â‚± Savings achieved', '0', '--', 3, 100, 1, 6),
(16, '% Project on time', '0', '--', 2, 100, 1, 6),
(17, '% ROI', '0', '--', 2, 100, 1, 7),
(18, '# Sales plan', '0', '--', 1, 100, 1, 7),
(19, '% Cost reduced', '0', '--', 2, 100, 1, 2),
(20, '% Growth in PS Retention', '0', '--', 2, 0, 2, 1),
(22, '% Promoted PS', '0', '--', 0, 0, 1, 1),
(23, 'Sales personnel retention rate', '0', '--', 0, 0, 1, 1),
(40, 'Xcxc', 'A', 'Xcxcx', 1, 1, 2, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reportId`, `reportName`, `reportStatus`, `reportDate`, `reportCreated`, `reportStep`, `reportConcern`, `reportLevel`, `deptId`) VALUES
(28, 'Introduce GME Year-End Achievement', 'Not Started', '2016-09-17', '2016-09-13', '--', 'Final evaluation will be at the end of this FY', 'High', 1),
(29, 'Development of YES Learning Booklet', 'Complete', '2016-09-17', '2016-09-13', '--', 'Frequent follow ups with CMC has been made on this', 'Low', 1),
(30, 'Branch Disbursemnet Monitoring and Auditing', 'On-going', '2016-09-05', '2016-09-13', 'Periodic Monitoring', 'Delayed RCA/SB Liquidation System Approval C/O Finance Group', 'Medium', 2),
(31, 'Branch Operations and Compliance', 'On-going', '0000-00-00', '2016-09-13', 'Periodic Monitoring', 'Understaffing', 'Medium', 2),
(32, 'On boarding training of new employees', 'On-going', '2016-09-14', '2016-09-13', 'Performance monitoring', '--', 'Low', 4),
(33, 'Reduction of files stored at Head Office', 'On-going', '2016-09-16', '2016-09-13', 'Continue weekly cleaning of files', '--', 'Medium', 4),
(34, 'Meeting wih OPG Dept Heads for Strat', 'Complete', '2016-09-12', '2016-09-13', 'Finalization', 'KPIs and Targets', 'Low', 6),
(35, 'Qwerrwew', 'On-going', '2016-09-21', '2016-09-13', 'Wdwdxsd', 'Fwfefq', 'High', 6),
(36, 'Review & Approval of BW Shares Retail Plan', 'Complete', '2016-09-22', '2016-09-13', 'For presentation to EO', '--', 'Medium', 7),
(37, 'Submitted BDG June CSFs', 'Complete', '2016-09-16', '2016-09-13', 'Took effect July', '--', 'Low', 7),
(38, 'Abayga', 'Not Started', '2016-10-09', '2016-10-06', 'Gopa', 'Lako', 'Medium', 6);

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
  `userType` int(50) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFname`, `userLname`, `userName`, `Name`, `userEmail`, `userPass`, `userDate`, `deptId`, `userType`) VALUES
(5, 'harold', 'daniel', 'khenpogi', 'Harold Daniel', 'haroldbaniqued@yahoo.com', 'khenpogi', '2016-09-03', 2, 2),
(7, 'Melissa', 'Baloloy', 'melissabaloloy', 'Melissa Baloloy', 'melissabaloloy@gmail.com', 'melissabaloloy', '2016-09-03', 2, 0),
(8, 'Riza', 'Gison', 'rizagison', 'Riza Gison', 'riza@gmail.com', 'rizagison', '2016-09-01', 1, 0),
(9, 'Christian', 'Lopez', 'christianlopez', 'Christian Lopez', 'christianlopez@gmail.com', 'christianlopez', '2016-09-02', 1, 0),
(10, 'Jenny', 'Melchor', 'jennymelchor', 'Jenny Melchor', 'jennymelchor@gmail.com', 'jennymelchor', '2016-09-03', 1, 0),
(11, 'Admin', 'Admin', 'admin', 'Admin Admin', 'admin@yahoo.com', 'admin', '2016-09-03', 2, 2),
(12, 'Alma', 'Cerda', 'almacerda', 'Alma Cerda', 'almacerda@gmail.com', 'almacerda', '2016-09-05', 2, 0),
(13, 'Chuchie', 'Esmeria', 'chuchieesmeria', 'Chuchie Esmeria', 'chuchieesmeria@gmail.com', 'chuchieesmeria', '2016-09-06', 2, 0),
(14, 'Joanne', 'Rosario', 'joannerosario', 'Joanna Rosario', 'joannerosario@gmail.com', 'joannerosario', '2016-09-07', 3, 0),
(15, 'Manilyn', 'Rodriguez', 'manilynrodriguez', 'Manilyn Rodriguez', 'manilynrodriguez@gmail.com', 'manilynrodriguez', '2016-09-08', 3, 0),
(16, 'Katrina', 'Amper', 'katrinaamper', 'Katrina Amper', 'katrinaamper@gmail.com', 'katrinaamper', '2016-09-09', 3, 0),
(17, 'Madelyn', 'Abarca', 'madelynabarca', 'Madelyn Abarca', 'madelynabarca@gmail.com', 'madelynabarca', '2016-09-12', 4, 0),
(18, 'Jerald', 'Abong', 'jeraldabong', 'Jerald Abong', 'jeraldabong@gmail.com', 'jeraldabong', '2016-09-13', 4, 0),
(19, 'Dolores', 'Aguilar', 'doloresaguilar', 'Dolores Aguilar', 'doloresaguilar@gmail.com', 'doloresaguilar', '2016-09-14', 4, 0),
(20, 'Jean', 'Raymundo', 'jeanraymundo', 'Jean Raymundo', 'jeanraymundo@gmail.com', 'jeanraymundo', '2016-09-14', 5, 0),
(21, 'Geizel', 'Verzosa', 'geizelverzosa', 'Geizel Verzosa', 'geizelverzosa@gmail.com', 'geizelverzosa', '2016-09-15', 5, 0),
(22, 'Franjelo', 'Sotto', 'franjelosotto', 'Franjelo Sotto', 'franjelosotto@gmail.com', 'franjelosotto', '2016-09-16', 5, 0),
(23, 'Rowel', 'Alferez', 'rowelalferez', 'Rowel Alferez', 'rowelalferez@gmail.com', 'rowelalferez', '2016-09-19', 6, 0),
(24, 'Allan', 'Balid', 'allanbalid', 'Allan Balid', 'allanbalid@gmail.com', 'allanbalid', '2016-09-20', 6, 0),
(25, 'Ramil', 'Corpuz', 'ramilcorpuz', 'Ramil Corpuz', 'ramilcorpuz@gmail.com', 'ramilcorpuz', '2016-09-21', 6, 0),
(26, 'Murielle', 'Jardin', 'muriellejardin', 'Murielle Jardin', 'muriellejardin@gmail.com', 'muriellejardin', '2016-09-22', 7, 0),
(27, 'Harris', 'Ignacio', 'harrisignacio', 'Harris Ignacio', 'harrisignacio@gmail.com', 'harrisignacio', '2016-09-22', 7, 0),
(28, 'Norvin', 'Autor', 'norvinautor', 'Norvin Autor', 'norvinautor@gmail.com', 'norvinautor', '2016-09-23', 7, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
