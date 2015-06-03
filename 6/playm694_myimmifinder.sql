-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 09:20 PM
-- Server version: 5.6.22
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `playm694_myimmifinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE IF NOT EXISTS `apartments` (
  `apartid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`apartid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attire`
--

CREATE TABLE IF NOT EXISTS `attire` (
  `attireid` int(11) NOT NULL AUTO_INCREMENT,
  `clothing_male` varchar(255) NOT NULL,
  `clothing_female` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`attireid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `attire`
--

INSERT INTO `attire` (`attireid`, `clothing_male`, `clothing_female`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, 'uttareeyam,pancha,jubba,lungi', 'saree,half saree, parikini', '1', '2015-05-04 17:39:43', 1, 1),
(2, '', '', '1', '2015-05-04 17:39:43', 2, 1),
(3, '', '', '1', '2015-05-04 20:27:11', 19, 3),
(4, '', '', '1', '2015-05-04 20:27:11', 20, 3),
(5, '', '', '1', '2015-05-05 23:35:25', 3, 1),
(6, '', '', '1', '2015-05-05 23:35:25', 4, 1),
(7, '', '', '1', '2015-05-05 23:38:23', 5, 1),
(8, '', '', '1', '2015-05-05 23:38:23', 6, 1),
(9, '', '', '1', '2015-05-05 23:38:23', 7, 1),
(10, '', '', '1', '2015-05-05 23:38:23', 8, 1),
(11, '', '', '1', '2015-05-05 23:38:23', 9, 1),
(12, '', '', '1', '2015-05-05 23:38:23', 10, 1),
(13, '', '', '1', '2015-05-05 23:38:23', 11, 1),
(14, '', '', '1', '2015-05-05 23:38:23', 12, 1),
(15, '', '', '1', '2015-05-05 23:38:23', 13, 1),
(16, '', '', '1', '2015-05-05 23:38:23', 14, 1),
(17, '', '', '1', '2015-05-05 23:38:23', 15, 1),
(18, '', '', '1', '2015-05-05 23:38:23', 16, 1),
(19, '', '', '1', '2015-05-05 23:38:23', 17, 1),
(20, '', '', '1', '2015-05-05 23:38:23', 18, 1),
(21, '', '', '1', '2015-05-06 00:00:46', 21, 1),
(22, '', '', '1', '2015-05-06 00:00:46', 22, 1),
(23, '', '', '1', '2015-05-06 00:00:46', 23, 1),
(24, '', '', '1', '2015-05-06 00:00:46', 24, 1),
(25, '', '', '1', '2015-05-06 00:00:46', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `name`, `enabled`, `entered`) VALUES
(1, 'India', 1, '2015-04-28 01:23:12'),
(2, 'Australia', 1, '2015-04-27 15:31:34'),
(3, 'America', 1, '2015-04-27 15:31:34'),
(4, 'Japan', 1, '2015-04-27 15:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `country_comparison`
--

CREATE TABLE IF NOT EXISTS `country_comparison` (
  `countryid` int(10) NOT NULL AUTO_INCREMENT,
  `continent` varchar(20) NOT NULL,
  `motto` varchar(20) NOT NULL,
  `primary_language` varchar(20) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `capital_city` varchar(20) NOT NULL,
  `largest_city` varchar(20) NOT NULL,
  `national_anthem` varchar(100) NOT NULL,
  `most_popular_cities` text NOT NULL,
  `voting_age` int(10) NOT NULL,
  `age_of_consent` varchar(20) NOT NULL,
  `drinking_age` varchar(10) NOT NULL,
  `givernment_type` varchar(200) NOT NULL,
  `chief_executive_first` varchar(30) NOT NULL,
  `chief_executive_second` varchar(30) NOT NULL,
  `legislature_size` varchar(20) NOT NULL,
  `last_legislative_election` varchar(50) NOT NULL,
  `gdp` varchar(50) NOT NULL,
  `gdp_growth_rate` varchar(10) NOT NULL,
  `gdp_per_capita_growth` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`countryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `country_comparison`
--

INSERT INTO `country_comparison` (`countryid`, `continent`, `motto`, `primary_language`, `currency`, `capital_city`, `largest_city`, `national_anthem`, `most_popular_cities`, `voting_age`, `age_of_consent`, `drinking_age`, `givernment_type`, `chief_executive_first`, `chief_executive_second`, `legislature_size`, `last_legislative_election`, `gdp`, `gdp_growth_rate`, `gdp_per_capita_growth`, `enabled`, `entered`) VALUES
(1, 'Asia', 'Truth Alone Triumphs', 'Hindi', 'Indian Rupee', 'New Delhi', 'New Delhi', 'Jana Gana Mana', 'New delhi, Mumbai, Bombay, Calcutta, Madras, Hyderabad', 18, '', '', 'Federal Republic', 'Pranab Mukherjee', 'Narendra Modi', '790', '', '1.82 Trillion', '3.20', '', 1, '2015-05-01 21:57:48'),
(2, 'Australia', 'Advance Australia', 'English', 'Australian Dollar', 'Canberra', 'Sydney', 'Advance Australia Fair', 'Sydney, Melbourne, Brisbane, Perth, Adelaide, Gold Coast, Newcastle', 18, '', '', 'Commanwealth', 'Quentin Alice Louise Bryce', 'Tonny Abbott', '150', '', '1.52 Trillion', '3.70', '', 1, '2015-05-01 21:57:54'),
(3, 'Oceania', '', 'English', 'US Dollar', 'Pago Pago', 'Pago Pago', '"Amerika Samoa" (American Samoa)', '', 18, '', '18', 'Unincorporated Territory', 'Tufuga Efi', 'Tuilaepa Aiono Sailele Maliele', '', '', '462 Million', '3.00', '8000', 1, '2015-05-01 21:56:24'),
(4, 'Asia', '', 'Japanese', 'Yen', 'Tokyo', 'Tokyo', '"Kimigayo" (The Emperor"s Reign)', 'Tokyo, Nagoya, Kobe, Kawasaki, Hiroshima, Saitama, Kitakyushu, Sakai, Sagamihara, Hamamatsu', 20, '13', '20', 'Constitutional Monarchy, Parliamentary Government', 'Akihito', 'Shinzo Abe', '772', '2010', '5.88 Trillion', '2.00', '35900', 1, '2015-05-01 21:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `energycharge`
--

CREATE TABLE IF NOT EXISTS `energycharge` (
  `ecid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`ecid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE IF NOT EXISTS `entertainment` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`eid`, `name`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, '2.46', '1', '2015-05-04 17:01:02', 1, 1),
(2, '3.96', '1', '2015-05-04 17:01:18', 2, 1),
(3, '10.92', '1', '2015-05-04 17:00:26', 19, 3),
(4, '14.97', '1', '2015-05-04 17:00:41', 20, 3),
(5, '3.57', '1', '2015-05-05 23:14:49', 3, 1),
(6, '3.17', '1', '2015-05-05 23:14:49', 4, 1),
(7, '3.96', '1', '2015-05-05 23:18:27', 5, 1),
(8, '3.96', '1', '2015-05-05 23:18:27', 6, 1),
(9, '5.94', '1', '2015-05-05 23:18:27', 7, 1),
(10, '3.96', '1', '2015-05-05 23:18:27', 8, 1),
(11, '3.96', '1', '2015-05-05 23:18:27', 9, 1),
(12, '4.46', '1', '2015-05-05 23:18:27', 10, 1),
(13, '4.95', '1', '2015-05-05 23:18:27', 11, 1),
(14, '2.97', '1', '2015-05-05 23:18:27', 12, 1),
(15, '2.97', '1', '2015-05-05 23:18:27', 13, 1),
(16, '3.96', '1', '2015-05-05 23:18:27', 14, 1),
(17, '1.49', '1', '2015-05-05 23:18:27', 15, 1),
(18, '', '1', '2015-05-05 23:18:27', 16, 1),
(19, '3.93', '1', '2015-05-05 23:18:27', 17, 1),
(20, '4.91', '1', '2015-05-05 23:18:27', 18, 1),
(21, '12.32', '1', '2015-05-05 23:52:12', 21, 1),
(22, '10.76', '1', '2015-05-05 23:52:12', 22, 1),
(23, '16.22', '1', '2015-05-05 23:52:12', 23, 1),
(24, '11.23', '1', '2015-05-05 23:52:12', 24, 1),
(25, '13.72', '1', '2015-05-05 23:52:12', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fitness_and_tennis`
--

CREATE TABLE IF NOT EXISTS `fitness_and_tennis` (
  `ftid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`ftid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `fitness_and_tennis`
--

INSERT INTO `fitness_and_tennis` (`ftid`, `name`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, '24.57', '1', '2015-05-04 16:41:30', 1, 1),
(2, '23.77', '1', '2015-05-04 16:41:30', 2, 1),
(3, '40.54', '1', '2015-05-04 16:44:29', 19, 3),
(4, '84.21', '1', '2015-05-04 16:44:29', 20, 3),
(5, '24.76', '1', '2015-05-05 23:00:54', 3, 1),
(6, '19.81', '1', '2015-05-05 23:00:54', 4, 1),
(7, '59.42', '1', '2015-05-05 23:06:26', 5, 1),
(8, '39.61', '1', '2015-05-05 23:06:26', 6, 1),
(9, '53.76', '1', '2015-05-05 23:06:26', 7, 1),
(10, '29.71', '1', '2015-05-05 23:06:26', 8, 1),
(11, '19.81', '1', '2015-05-05 23:06:26', 9, 1),
(12, '13.86', '1', '2015-05-05 23:06:26', 10, 1),
(13, '49.52', '1', '2015-05-05 23:06:26', 11, 1),
(14, '14.71', '1', '2015-05-05 23:06:26', 12, 1),
(15, '17.33', '1', '2015-05-05 23:06:26', 13, 1),
(16, '23.11', '1', '2015-05-05 23:06:26', 14, 1),
(17, '24.76', '1', '2015-05-05 23:06:26', 15, 1),
(18, '29.49', '1', '2015-05-05 23:06:26', 16, 1),
(19, '13.76', '1', '2015-05-05 23:06:26', 17, 1),
(20, '19.29', '1', '2015-05-05 23:06:26', 18, 1),
(21, '47.23', '1', '2015-05-05 23:47:50', 21, 1),
(22, '37.43', '1', '2015-05-05 23:47:50', 22, 1),
(23, '53.49', '1', '2015-05-05 23:47:50', 23, 1),
(24, '38.05', '1', '2015-05-05 23:47:50', 24, 1),
(25, '31.19', '1', '2015-05-05 23:47:50', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countryid` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=447 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `countryid`, `state`, `food`, `type`, `quantity`, `price`) VALUES
(1, 1, '1', 'Meal', '', '', 1.18),
(2, 1, '1', 'McMeal at McDonalds', '', '', 3.93),
(3, 1, '1', 'Domestic Beer', '', '', 1.92),
(4, 1, '1', 'Cappuccino (regular)', '', '', 1.39),
(5, 1, '1', 'Coke/Pepsi', '', '0.33 liter bottle', 0.52),
(6, 1, '1', 'Water (0.33)', '', '0.33 liter bottle', 0.23),
(7, 1, '1', 'Milk (regular)', '', '1 liter', 0.89),
(8, 1, '1', 'Loaf of Fresh White Bread', '', '500g', 0.47),
(9, 1, '1', 'Rice (white)', '', '1kg', 0.84),
(10, 1, '1', 'Eggs', '', '12', 0.94),
(11, 1, '1', 'Local Cheese', '', '1kg', 6.88),
(12, 1, '1', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4.18),
(13, 1, '1', 'Apples', '', '1kg', 1.57),
(14, 1, '1', 'Oranges', '', '1kg', 1.47),
(15, 1, '1', 'Tomato', '', '1kg', 0.52),
(16, 1, '1', 'Potato', '', '1kg', 0.53),
(17, 1, '1', 'Lettuce', '', '1 head', 0.69),
(18, 1, '1', 'Water (1.5)', '', '1.5 liter bottle', 0.48),
(21, 1, '2', 'Meal', '', '', 2.18),
(22, 1, '2', 'McMeal at McDonalds', '', '', 3.86),
(23, 1, '2', 'Domestic Beer', '', '', 1.54),
(24, 1, '2', 'Cappuccino (regular)', '', '', 1.45),
(25, 1, '2', 'Coke/Pepsi', '', '0.33 liter bottle', 0.51),
(26, 1, '2', 'Water (0.33)', '', '0.33 liter bottle', 0.21),
(27, 1, '2', 'Milk (regular)', '', '1 liter', 0.88),
(28, 1, '2', 'Loaf of Fresh White Bread', '', '500g', 0.59),
(29, 1, '2', 'Rice (white)', '', '1kg', 0.7),
(30, 1, '2', 'Eggs', '', '12', 1.19),
(31, 1, '2', 'Local Cheese', '', '1kg', 6.46),
(32, 1, '2', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.4),
(33, 1, '2', 'Apples', '', '1kg', 2.91),
(34, 1, '2', 'Oranges', '', '1kg', 1.35),
(35, 1, '2', 'Tomato', '', '1kg', 0.71),
(36, 1, '2', 'Potato', '', '1kg', 0.35),
(37, 1, '2', 'Lettuce', '', '1 head', 0.64),
(38, 1, '2', 'Water (1.5)', '', '1.5 liter bottle', 0.56),
(41, 3, '19', 'Meal', '', '', 14.97),
(42, 3, '19', 'McMeal at McDonalds', '', '', 8.11),
(43, 3, '19', 'Domestic Beer', '', '', 3.43),
(44, 3, '19', 'Cappuccino (regular)', '', '', 4.1),
(45, 3, '19', 'Coke/Pepsi', '', '0.33 liter bottle', 1.71),
(46, 3, '19', 'Water (0.33)', '', '0.33 liter bottle', 1.32),
(47, 3, '19', 'Milk (regular)', '', '1 liter', 1.33),
(48, 3, '19', 'Loaf of Fresh White Bread', '', '500g', 2.51),
(49, 3, '19', 'Rice (white)', '', '1kg', 2.38),
(50, 3, '19', 'Eggs', '', '12', 3.4),
(51, 3, '19', 'Local Cheese', '', '1kg', 11.14),
(52, 3, '19', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 11.31),
(53, 3, '19', 'Apples', '', '1kg', 3.51),
(54, 3, '19', 'Oranges', '', '1kg', 4.15),
(55, 3, '19', 'Tomato', '', '1kg', 3.78),
(56, 3, '19', 'Potato', '', '1kg', 3.04),
(57, 3, '19', 'Lettuce', '', '1 head', 1.83),
(58, 3, '19', 'Water (1.5)', '', '1.5 liter bottle', 1.9),
(61, 3, '20', 'Meal', '', '', 14.97),
(62, 3, '20', 'McMeal at McDonalds', '', '', 9.98),
(63, 3, '20', 'Domestic Beer', '', '', 6.24),
(64, 3, '20', 'Cappuccino (regular)', '', '', 4.91),
(65, 3, '20', 'Coke/Pepsi', '', '0.33 liter bottle', 2.52),
(66, 3, '20', 'Water (0.33)', '', '0.33 liter bottle', 2.1),
(67, 3, '20', 'Milk (regular)', '', '1 liter', 1.25),
(68, 3, '20', 'Loaf of Fresh White Bread', '', '500g', 4.18),
(69, 3, '20', 'Rice (white)', '', '1kg', 6.83),
(70, 3, '20', 'Eggs', '', '12', 4.03),
(71, 3, '20', 'Local Cheese', '', '1kg', 11.87),
(72, 3, '20', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 10.4),
(73, 3, '20', 'Apples', '', '1kg', 7.92),
(74, 3, '20', 'Oranges', '', '1kg', 7.03),
(75, 3, '20', 'Tomato', '', '1kg', 8.51),
(76, 3, '20', 'Potato', '', '1kg', 3.25),
(77, 3, '20', 'Lettuce', '', '1 head', 2.78),
(78, 3, '20', 'Water (1.5)', '', '1.5 liter bottle', 2.71),
(79, 1, '3', 'Meal', '', '', 3.47),
(80, 1, '3', 'McMeal at McDonalds', '', '', 3.47),
(81, 1, '3', 'Domestic Beer', '', '', 1.58),
(82, 1, '3', 'Cappuccino (regular)', '', '', 1.09),
(83, 1, '3', 'Coke/Pepsi', '', '0.33 liter bottle', 0.45),
(84, 1, '3', 'Water (0.33)', '', '0.33 liter bottle', 0.23),
(85, 1, '3', 'Milk (regular)', '', '1 liter', 0.74),
(86, 1, '3', 'Loaf of Fresh White Bread', '', '500g', 0.45),
(87, 1, '3', 'Rice (white)', '', '1kg', 0.82),
(88, 1, '3', 'Eggs', '', '12', 0.99),
(89, 1, '3', 'Local Cheese', '', '1kg', 3.47),
(90, 1, '3', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.81),
(91, 1, '3', 'Apples', '', '1kg', 2.13),
(92, 1, '3', 'Oranges', '', '1kg', 1.19),
(93, 1, '3', 'Tomato', '', '1kg', 0.64),
(94, 1, '3', 'Potato', '', '1kg', 0.46),
(95, 1, '3', 'Lettuce', '', '1 head', 0.69),
(96, 1, '3', 'Water (1.5)', '', '1.5 liter bottle', 0.51),
(97, 1, '4', 'Meal', '', '', 3.17),
(98, 1, '4', 'McMeal at McDonalds', '', '', 4.75),
(99, 1, '4', 'Domestic Beer', '', '', 2.12),
(100, 1, '4', 'Cappuccino (regular)', '', '', 2.44),
(101, 1, '4', 'Coke/Pepsi', '', '0.33 liter bottle', 0.59),
(102, 1, '4', 'Water (0.33)', '', '0.33 liter bottle', 0.19),
(103, 1, '4', 'Milk (regular)', '', '1 liter', 0.74),
(104, 1, '4', 'Loaf of Fresh White Bread', '', '500g', 0.5),
(105, 1, '4', 'Rice (white)', '', '1kg', 1.07),
(106, 1, '4', 'Eggs', '', '12', 1.12),
(107, 1, '4', 'Local Cheese', '', '1kg', 4.49),
(108, 1, '4', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.17),
(109, 1, '4', 'Apples', '', '1kg', 2.41),
(110, 1, '4', 'Oranges', '', '1kg', 1.12),
(111, 1, '4', 'Tomato', '', '1kg', 1),
(112, 1, '4', 'Potato', '', '1kg', 0.33),
(113, 1, '4', 'Lettuce', '', '1 head', 0.46),
(114, 1, '4', 'Water (1.5)', '', '1.5 liter bottle', 0.43),
(115, 1, '5', 'Meal', '', '', 2.97),
(116, 1, '5', 'McMeal at McDonalds', '', '', 9.9),
(117, 1, '5', 'Domestic Beer', '', '', 1.09),
(118, 1, '5', 'Cappuccino (regular)', '', '', 1.27),
(119, 1, '5', 'Coke/Pepsi', '', '0.33 liter bottle', 0.48),
(120, 1, '5', 'Water (0.33)', '', '0.33 liter bottle', 0.29),
(121, 1, '5', 'Milk (regular)', '', '1 liter', 0.9),
(122, 1, '5', 'Loaf of Fresh White Bread', '', '500g', 0.47),
(123, 1, '5', 'Rice (white)', '', '1kg', 0.93),
(124, 1, '5', 'Eggs', '', '12', 0.96),
(125, 1, '5', 'Local Cheese', '', '1kg', 6.93),
(126, 1, '5', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.17),
(127, 1, '5', 'Apples', '', '1kg', 2.31),
(128, 1, '5', 'Oranges', '', '1kg', 1.39),
(129, 1, '5', 'Tomato', '', '1kg', 0.7),
(130, 1, '5', 'Potato', '', '1kg', 0.76),
(131, 1, '5', 'Lettuce', '', '1 head', 1.98),
(132, 1, '5', 'Water (1.5)', '', '1.5 liter bottle', 0.54),
(133, 1, '6', 'Meal', '', '', 4.95),
(134, 1, '6', 'McMeal at McDonalds', '', '', 2.97),
(135, 1, '6', 'Domestic Beer', '', '', 0),
(136, 1, '6', 'Cappuccino (regular)', '', '', 1.49),
(137, 1, '6', 'Coke/Pepsi', '', '0.33 liter bottle', 0.44),
(138, 1, '6', 'Water (0.33)', '', '0.33 liter bottle', 0.26),
(139, 1, '6', 'Milk (regular)', '', '1 liter', 0.75),
(140, 1, '6', 'Loaf of Fresh White Bread', '', '500g', 0.47),
(141, 1, '6', 'Rice (white)', '', '1kg', 0.77),
(142, 1, '6', 'Eggs', '', '12', 0.94),
(143, 1, '6', 'Local Cheese', '', '1kg', 4.95),
(147, 1, '6', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 9.66),
(148, 1, '6', 'Apples', '', '1kg', 2.44),
(149, 1, '6', 'Oranges', '', '1kg', 1.78),
(150, 1, '6', 'Tomato', '', '1kg', 0.69),
(151, 1, '6', 'Potato', '', '1kg', 0.51),
(152, 1, '6', 'Lettuce', '', '1 head', 0.4),
(153, 1, '6', 'Water (1.5)', '', '1.5 liter bottle', 0.53),
(154, 1, '7', 'Meal', '', '', 4.95),
(155, 1, '7', 'McMeal at McDonalds', '', '', 4.95),
(156, 1, '7', 'Domestic Beer', '', '', 1.98),
(157, 1, '7', 'Cappuccino (regular)', '', '', 1.88),
(158, 1, '7', 'Coke/Pepsi', '', '0.33 liter bottle', 0.47),
(159, 1, '7', 'Water (0.33)', '', '0.33 liter bottle', 0.28),
(160, 1, '7', 'Milk (regular)', '', '1 liter', 0.87),
(161, 1, '7', 'Loaf of Fresh White Bread', '', '500g', 0.45),
(167, 1, '7', 'Rice (white)', '', '1kg', 1.64),
(168, 1, '7', 'Eggs', '', '12', 1.28),
(169, 1, '7', 'Local Cheese', '', '1kg', 4.93),
(170, 1, '7', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 5.13),
(171, 1, '7', 'Apples', '', '1kg', 3.05),
(172, 1, '7', 'Oranges', '', '1kg', 1.25),
(173, 1, '7', 'Tomato', '', '1kg', 0.82),
(174, 1, '7', 'Potato', '', '1kg', 0.55),
(175, 1, '7', 'Lettuce', '', '1 head', 0.95),
(176, 1, '7', 'Water (1.5)', '', '1.5 liter bottle', 0.55),
(177, 1, '8', 'Meal', '', '', 3.47),
(178, 1, '8', 'McMeal at McDonalds', '', '', 5.94),
(179, 1, '8', 'Domestic Beer', '', '', 1.58),
(180, 1, '8', 'Cappuccino (regular)', '', '', 1.39),
(181, 1, '8', 'Coke/Pepsi', '', '0.33 liter bottle', 0.59),
(182, 1, '8', 'Water (0.33)', '', '0.33 liter bottle', 0.4),
(183, 1, '8', 'Milk (regular)', '', '1 liter', 0.83),
(184, 1, '8', 'Loaf of Fresh White Bread', '', '500g', 0.79),
(185, 1, '8', 'Rice (white)', '', '1kg', 1.98),
(186, 1, '8', 'Eggs', '', '12', 1.43),
(187, 1, '8', 'Local Cheese', '', '1kg', 6.93),
(188, 1, '8', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 7.92),
(189, 1, '8', 'Apples', '', '1kg', 1.39),
(190, 1, '8', 'Oranges', '', '1kg', 1.19),
(191, 1, '8', 'Tomato', '', '1kg', 1.39),
(192, 1, '8', 'Potato', '', '1kg', 0.79),
(193, 1, '8', 'Lettuce', '', '1 head', 1.58),
(194, 1, '8', 'Water (1.5)', '', '1.5 liter bottle', 0.59),
(195, 1, '9', 'Meal', '', '', 3.96),
(196, 1, '9', 'McMeal at McDonalds', '', '', 2.33),
(197, 1, '9', 'Domestic Beer', '', '', 2.57),
(198, 1, '9', 'Cappuccino (regular)', '', '', 1.39),
(199, 1, '9', 'Coke/Pepsi', '', '0.33 liter bottle', 0.59),
(200, 1, '9', 'Water (0.33)', '', '0.33 liter bottle', 0.25),
(201, 1, '9', 'Milk (regular)', '', '1 liter', 0.63),
(202, 1, '9', 'Loaf of Fresh White Bread', '', '500g', 0.5),
(203, 1, '9', 'Rice (white)', '', '1kg', 0.69),
(204, 1, '9', 'Eggs', '', '12', 0.91),
(205, 1, '9', 'Local Cheese', '', '1kg', 3.37),
(206, 1, '9', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4.16),
(207, 1, '9', 'Apples', '', '1kg', 0.99),
(208, 1, '9', 'Oranges', '', '1kg', 1.31),
(209, 1, '9', 'Tomato', '', '1kg', 0.5),
(210, 1, '9', 'Potato', '', '1kg', 0.42),
(211, 1, '9', 'Lettuce', '', '1 head', 0.54),
(212, 1, '9', 'Water (1.5)', '', '1.5 liter bottle', 0.48),
(213, 1, '10', 'Meal', '', '', 2.97),
(214, 1, '10', 'McMeal at McDonalds', '', '', 3.96),
(215, 1, '10', 'Domestic Beer', '', '', 1.63),
(216, 1, '10', 'Cappuccino (regular)', '', '', 1.24),
(217, 1, '10', 'Coke/Pepsi', '', '0.33 liter bottle', 0.64),
(218, 1, '10', 'Water (0.33)', '', '0.33 liter bottle', 0.3),
(219, 1, '10', 'Milk (regular)', '', '1 liter', 0.75),
(220, 1, '10', 'Loaf of Fresh White Bread', '', '500g', 0.56),
(221, 1, '10', 'Rice (white)', '', '1kg', 0.79),
(222, 1, '10', 'Eggs', '', '12', 0.97),
(223, 1, '10', 'Local Cheese', '', '1kg', 5.41),
(224, 1, '10', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.76),
(225, 1, '10', 'Apples', '', '1kg', 1.98),
(226, 1, '10', 'Oranges', '', '1kg', 1.25),
(227, 1, '10', 'Tomato', '', '1kg', 1.06),
(228, 1, '10', 'Potato', '', '1kg', 0.46),
(229, 1, '10', 'Lettuce', '', '1 head', 0.3),
(230, 1, '10', 'Water (1.5)', '', '1.5 liter bottle', 0.45),
(231, 1, '11', 'Meal', '', '', 1.68),
(232, 1, '11', 'McMeal at McDonalds', '', '', 7.43),
(233, 1, '11', 'Domestic Beer', '', '', 1.49),
(234, 1, '11', 'Cappuccino (regular)', '', '', 0.63),
(235, 1, '11', 'Coke/Pepsi', '', '0.33 liter bottle', 0.35),
(236, 1, '11', 'Water (0.33)', '', '0.33 liter bottle', 0.3),
(237, 1, '11', 'Milk (regular)', '', '1 liter', 0.79),
(238, 1, '11', 'Loaf of Fresh White Bread', '', '500g', 0.63),
(239, 1, '11', 'Rice (white)', '', '1kg', 0.88),
(240, 1, '11', 'Eggs', '', '12', 1.06),
(241, 1, '11', 'Local Cheese', '', '1kg', 3.96),
(242, 1, '11', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4.95),
(243, 1, '11', 'Apples', '', '1kg', 2.48),
(244, 1, '11', 'Oranges', '', '1kg', 2.31),
(245, 1, '11', 'Tomato', '', '1kg', 0.99),
(246, 1, '11', 'Potato', '', '1kg', 0.89),
(247, 1, '11', 'Lettuce', '', '1 head', 0.5),
(248, 1, '11', 'Water (1.5)', '', '1.5 liter bottle', 0.5),
(249, 1, '12', 'Meal', '', '', 0.99),
(250, 1, '12', 'McMeal at McDonalds', '', '', 3.96),
(251, 1, '12', 'Domestic Beer', '', '', 1.58),
(252, 1, '12', 'Cappuccino (regular)', '', '', 1.09),
(253, 1, '12', 'Coke/Pepsi', '', '0.33 liter bottle', 0.52),
(254, 1, '12', 'Water (0.33)', '', '0.33 liter bottle', 0.27),
(255, 1, '12', 'Milk (regular)', '', '1 liter', 0.79),
(256, 1, '12', 'Loaf of Fresh White Bread', '', '500g', 0.56),
(257, 1, '12', 'Rice (white)', '', '1kg', 0.68),
(258, 1, '12', 'Eggs', '', '12', 1.1),
(259, 1, '12', 'Local Cheese', '', '1kg', 7.88),
(260, 1, '12', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.2),
(261, 1, '12', 'Apples', '', '1kg', 2.19),
(262, 1, '12', 'Oranges', '', '1kg', 1.39),
(263, 1, '12', 'Tomato', '', '1kg', 0.62),
(264, 1, '12', 'Potato', '', '1kg', 0.61),
(265, 1, '12', 'Lettuce', '', '1 head', 0.63),
(266, 1, '12', 'Water (1.5)', '', '1.5 liter bottle', 0.57),
(267, 1, '13', 'Meal', '', '', 3.96),
(268, 1, '13', 'McMeal at McDonalds', '', '', 2.97),
(269, 1, '13', 'Domestic Beer', '', '', 1.98),
(270, 1, '13', 'Cappuccino (regular)', '', '', 1.22),
(271, 1, '13', 'Coke/Pepsi', '', '0.33 liter bottle', 0.37),
(272, 1, '13', 'Water (0.33)', '', '0.33 liter bottle', 0.26),
(273, 1, '13', 'Milk (regular)', '', '1 liter', 0.81),
(274, 1, '13', 'Loaf of Fresh White Bread', '', '500g', 0.63),
(275, 1, '13', 'Rice (white)', '', '1kg', 1.17),
(276, 1, '13', 'Eggs', '', '12', 1.14),
(277, 1, '13', 'Local Cheese', '', '1kg', 4.83),
(278, 1, '13', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4),
(279, 1, '13', 'Apples', '', '1kg', 2.29),
(280, 1, '13', 'Oranges', '', '1kg', 1.31),
(281, 1, '13', 'Tomato', '', '1kg', 0.71),
(282, 1, '13', 'Potato', '', '1kg', 0.5),
(283, 1, '13', 'Lettuce', '', '1 head', 0.85),
(284, 1, '13', 'Water (1.5)', '', '1.5 liter bottle', 0.51),
(285, 1, '13', 'Meal', '', '', 2.97),
(286, 1, '13', 'McMeal at McDonalds', '', '', 3.47),
(287, 1, '13', 'Domestic Beer', '', '', 1.98),
(288, 1, '13', 'Cappuccino (regular)', '', '', 1.49),
(289, 1, '13', 'Coke/Pepsi', '', '0.33 liter bottle', 0.58),
(290, 1, '13', 'Water (0.33)', '', '0.33 liter bottle', 0.31),
(291, 1, '13', 'Milk (regular)', '', '1 liter', 0.92),
(292, 1, '13', 'Loaf of Fresh White Bread', '', '500g', 0.56),
(293, 1, '13', 'Rice (white)', '', '1kg', 1.05),
(294, 1, '13', 'Eggs', '', '12', 1.12),
(295, 1, '13', 'Local Cheese', '', '1kg', 5.64),
(296, 1, '13', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.66),
(297, 1, '13', 'Apples', '', '1kg', 3.46),
(298, 1, '13', 'Oranges', '', '1kg', 1.65),
(299, 1, '13', 'Tomato', '', '1kg', 0.64),
(300, 1, '13', 'Potato', '', '1kg', 0.51),
(301, 1, '13', 'Lettuce', '', '1 head', 0.58),
(302, 1, '13', 'Water (1.5)', '', '1.5 liter bottle', 0.54),
(303, 1, '14', 'Meal', '', '', 1.98),
(304, 1, '14', 'McMeal at McDonalds', '', '', 5.94),
(305, 1, '14', 'Domestic Beer', '', '', 1.19),
(306, 1, '14', 'Cappuccino (regular)', '', '', 1.24),
(307, 1, '14', 'Coke/Pepsi', '', '0.33 liter bottle', 0.55),
(308, 1, '14', 'Water (0.33)', '', '0.33 liter bottle', 0.2),
(309, 1, '14', 'Milk (regular)', '', '1 liter', 0.79),
(310, 1, '14', 'Loaf of Fresh White Bread', '', '500g', 0.4),
(311, 1, '14', 'Rice (white)', '', '1kg', 0.65),
(312, 1, '14', 'Eggs', '', '12', 1.2),
(313, 1, '14', 'Local Cheese', '', '1kg', 3.96),
(314, 1, '14', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.96),
(315, 1, '14', 'Apples', '', '1kg', 2.84),
(316, 1, '14', 'Oranges', '', '1kg', 0.92),
(317, 1, '14', 'Tomato', '', '1kg', 0.63),
(318, 1, '14', 'Potato', '', '1kg', 0.46),
(319, 1, '14', 'Lettuce', '', '1 head', 0.5),
(320, 1, '14', 'Water (1.5)', '', '1.5 liter bottle', 0.51),
(321, 1, '15', 'Meal', '', '', 2.48),
(322, 1, '15', 'McMeal at McDonalds', '', '', 3.96),
(323, 1, '15', 'Domestic Beer', '', '', 1.78),
(324, 1, '15', 'Cappuccino (regular)', '', '', 1.39),
(325, 1, '15', 'Coke/Pepsi', '', '0.33 liter bottle', 0.33),
(326, 1, '15', 'Water (0.33)', '', '0.33 liter bottle', 0.3),
(327, 1, '15', 'Milk (regular)', '', '1 liter', 0.93),
(328, 1, '15', 'Loaf of Fresh White Bread', '', '500g', 0.5),
(329, 1, '15', 'Rice (white)', '', '1kg', 0.94),
(330, 1, '15', 'Eggs', '', '12', 1.06),
(331, 1, '15', 'Local Cheese', '', '1kg', 4.72),
(332, 1, '15', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4.59),
(333, 1, '15', 'Apples', '', '1kg', 1.8),
(334, 1, '15', 'Oranges', '', '1kg', 1.06),
(335, 1, '15', 'Tomato', '', '1kg', 0.86),
(336, 1, '15', 'Potato', '', '1kg', 0.5),
(337, 1, '15', 'Lettuce', '', '1 head', 0.79),
(338, 1, '15', 'Water (1.5)', '', '1.5 liter bottle', 0.48),
(339, 1, '16', 'Meal', '', '', 2.48),
(340, 1, '16', 'McMeal at McDonalds', '', '', 2.97),
(341, 1, '16', 'Domestic Beer', '', '', 1.58),
(342, 1, '16', 'Cappuccino (regular)', '', '', 1.41),
(343, 1, '16', 'Coke/Pepsi', '', '0.33 liter bottle', 0.5),
(344, 1, '16', 'Water (0.33)', '', '0.33 liter bottle', 0.25),
(345, 1, '16', 'Milk (regular)', '', '1 liter', 0.74),
(346, 1, '16', 'Loaf of Fresh White Bread', '', '500g', 0.46),
(347, 1, '16', 'Rice (white)', '', '1kg', 1.02),
(348, 1, '16', 'Eggs', '', '12', 1.1),
(349, 1, '16', 'Local Cheese', '', '1kg', 7.51),
(350, 1, '16', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4.73),
(351, 1, '16', 'Apples', '', '1kg', 2.18),
(352, 1, '16', 'Oranges', '', '1kg', 1),
(353, 1, '16', 'Tomato', '', '1kg', 0.68),
(354, 1, '16', 'Potato', '', '1kg', 0.41),
(355, 1, '16', 'Lettuce', '', '1 head', 0.64),
(356, 1, '16', 'Water (1.5)', '', '1.5 liter bottle', 0.45),
(357, 1, '17', 'Meal', '', '', 1.47),
(358, 1, '17', 'McMeal at McDonalds', '', '', 3.93),
(359, 1, '17', 'Domestic Beer', '', '', 1.97),
(360, 1, '17', 'Cappuccino (regular)', '', '', 1.53),
(361, 1, '17', 'Coke/Pepsi', '', '0.33 liter bottle', 0.47),
(362, 1, '17', 'Water (0.33)', '', '0.33 liter bottle', 0.27),
(363, 1, '17', 'Milk (regular)', '', '1 liter', 0.76),
(364, 1, '17', 'Loaf of Fresh White Bread', '', '500g', 0.51),
(365, 1, '17', 'Rice (white)', '', '1kg', 0.97),
(366, 1, '17', 'Eggs', '', '12', 0.95),
(367, 1, '17', 'Local Cheese', '', '1kg', 5.05),
(368, 1, '17', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.64),
(369, 1, '17', 'Apples', '', '1kg', 3.1),
(370, 1, '17', 'Oranges', '', '1kg', 1.67),
(371, 1, '17', 'Tomato', '', '1kg', 0.47),
(372, 1, '17', 'Potato', '', '1kg', 0.6),
(373, 1, '17', 'Lettuce', '', '1 head', 0.65),
(374, 1, '17', 'Water (1.5)', '', '1.5 liter bottle', 0.52),
(375, 1, '18', 'Meal', '', '', 1.98),
(376, 1, '18', 'McMeal at McDonalds', '', '', 3.96),
(377, 1, '18', 'Domestic Beer', '', '', 1.78),
(378, 1, '18', 'Cappuccino (regular)', '', '', 1.42),
(379, 1, '18', 'Coke/Pepsi', '', '0.33 liter bottle', 0.46),
(380, 1, '18', 'Water (0.33)', '', '0.33 liter bottle', 0.3),
(381, 1, '18', 'Milk (regular)', '', '1 liter', 0.86),
(382, 1, '18', 'Loaf of Fresh White Bread', '', '500g', 0.54),
(383, 1, '18', 'Rice (white)', '', '1kg', 0.91),
(384, 1, '18', 'Eggs', '', '12', 0.94),
(385, 1, '18', 'Local Cheese', '', '1kg', 5.16),
(386, 1, '18', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.67),
(387, 1, '18', 'Apples', '', '1kg', 2.87),
(388, 1, '18', 'Oranges', '', '1kg', 1.62),
(389, 1, '18', 'Tomato', '', '1kg', 0.58),
(390, 1, '18', 'Potato', '', '1kg', 0.5),
(391, 1, '18', 'Lettuce', '', '1 head', 0.68),
(392, 1, '18', 'Water (1.5)', '', '1.5 liter bottle', 0.56),
(393, 1, '19', 'Meal', '', '', 13),
(394, 1, '19', 'McMeal at McDonalds', '', '', 13.74),
(395, 1, '19', 'Domestic Beer', '', '', 3.54),
(396, 1, '19', 'Cappuccino (regular)', '', '', 3.64),
(397, 1, '19', 'Coke/Pepsi', '', '0.33 liter bottle', 0.63),
(398, 1, '19', 'Water (0.33)', '', '0.33 liter bottle', 0.35),
(399, 1, '19', 'Milk (regular)', '', '1 liter', 0.86),
(400, 1, '19', 'Loaf of Fresh White Bread', '', '500g', 0.69),
(401, 1, '19', 'Rice (white)', '', '1kg', 2.95),
(402, 1, '19', 'Eggs', '', '12', 1.18),
(403, 1, '19', 'Local Cheese', '', '1kg', 15.73),
(404, 1, '19', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 7.86),
(405, 1, '19', 'Apples', '', '1kg', 2.36),
(406, 1, '19', 'Oranges', '', '1kg', 1.57),
(407, 1, '19', 'Tomato', '', '1kg', 0.98),
(408, 1, '19', 'Potato', '', '1kg', 0.79),
(409, 1, '19', 'Lettuce', '', '1 head', 0.35),
(410, 1, '19', 'Water (1.5)', '', '1.5 liter bottle', 0.88),
(411, 1, '20', 'Meal', '', '', 6.09),
(412, 1, '20', 'McMeal at McDonalds', '', '', 3.15),
(413, 1, '20', 'Domestic Beer', '', '', 1.67),
(414, 1, '20', 'Cappuccino (regular)', '', '', 1.79),
(415, 1, '20', 'Coke/Pepsi', '', '0.33 liter bottle', 0.29),
(416, 1, '20', 'Water (0.33)', '', '0.33 liter bottle', 0.29),
(417, 1, '20', 'Milk (regular)', '', '1 liter', 0.9),
(418, 1, '20', 'Loaf of Fresh White Bread', '', '500g', 0.4),
(419, 1, '20', 'Rice (white)', '', '1kg', 0.92),
(420, 1, '20', 'Eggs', '', '12', 0.92),
(421, 1, '20', 'Local Cheese', '', '1kg', 6.96),
(422, 1, '20', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.74),
(423, 1, '20', 'Apples', '', '1kg', 2.04),
(424, 1, '20', 'Oranges', '', '1kg', 1.18),
(425, 1, '20', 'Tomato', '', '1kg', 0.72),
(426, 1, '20', 'Potato', '', '1kg', 0.45),
(427, 1, '20', 'Lettuce', '', '1 head', 1.21),
(428, 1, '20', 'Water (1.5)', '', '1.5 liter bottle', 0.54),
(429, 1, '21', 'Meal', '', '', 2.36),
(430, 1, '21', 'McMeal at McDonalds', '', '', 4.18),
(431, 1, '21', 'Domestic Beer', '', '', 1.57),
(432, 1, '21', 'Cappuccino (regular)', '', '', 1.54),
(433, 1, '21', 'Coke/Pepsi', '', '0.33 liter bottle', 0.37),
(434, 1, '21', 'Water (0.33)', '', '0.33 liter bottle', 0.24),
(435, 1, '21', 'Milk (regular)', '', '1 liter', 0.72),
(436, 1, '21', 'Loaf of Fresh White Bread', '', '500g', 0.38),
(437, 1, '21', 'Rice (white)', '', '1kg', 0.76),
(438, 1, '21', 'Eggs', '', '12', 1.1),
(439, 1, '21', 'Local Cheese', '', '1kg', 4.39),
(440, 1, '21', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.58),
(441, 1, '21', 'Apples', '', '1kg', 2.65),
(442, 1, '21', 'Oranges', '', '1kg', 1.5),
(443, 1, '21', 'Tomato', '', '1kg', 0.6),
(444, 1, '21', 'Potato', '', '1kg', 0.39),
(445, 1, '21', 'Lettuce', '', '1 head', 0.41),
(446, 1, '21', 'Water (1.5)', '', '1.5 liter bottle', 0.49);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `gameid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameid`, `name`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, '5.57', '1', '2015-05-04 16:56:46', 1, 1),
(2, '26.74', '1', '2015-05-04 16:57:08', 2, 1),
(3, '12.48', '1', '2015-05-04 16:57:36', 19, 3),
(4, '15.59', '1', '2015-05-04 16:58:00', 20, 3),
(5, '19.81', '1', '2015-05-05 23:08:31', 3, 1),
(6, '9.9', '1', '2015-05-05 23:08:31', 4, 1),
(7, '7.43', '1', '2015-05-05 23:13:04', 5, 1),
(8, '12.38', '1', '2015-05-05 23:13:04', 6, 1),
(9, '8.91', '1', '2015-05-05 23:13:04', 7, 1),
(10, '3.96', '1', '2015-05-05 23:13:04', 8, 1),
(11, '6.8', '1', '2015-05-05 23:13:04', 9, 1),
(12, '6.93', '1', '2015-05-05 23:13:04', 10, 1),
(13, '3.47', '1', '2015-05-05 23:13:04', 11, 1),
(14, '7.92', '1', '2015-05-05 23:13:04', 12, 1),
(15, '15.52', '1', '2015-05-05 23:13:04', 13, 1),
(16, '6.49', '1', '2015-05-05 23:13:04', 14, 1),
(17, '5.94', '1', '2015-05-05 23:13:04', 15, 1),
(18, '9.83', '1', '2015-05-05 23:13:04', 16, 1),
(19, '6.39', '1', '2015-05-05 23:13:04', 17, 1),
(20, '9.83', '1', '2015-05-05 23:13:04', 18, 1),
(21, '12.48', '1', '2015-05-05 23:49:42', 21, 1),
(22, '13.48', '1', '2015-05-05 23:49:42', 22, 1),
(23, '17.71', '1', '2015-05-05 23:49:42', 23, 1),
(24, '12.48', '1', '2015-05-05 23:49:42', 24, 1),
(25, '28.07', '1', '2015-05-05 23:49:42', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lookup_state`
--

CREATE TABLE IF NOT EXISTS `lookup_state` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `enabled` tinyint(4) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `lookup_state`
--

INSERT INTO `lookup_state` (`sid`, `name`, `enabled`, `entered`, `cid`) VALUES
(1, 'Andhra Pradesh', 1, '2015-05-03 12:50:16', 1),
(2, 'Assam', 1, '2015-05-02 14:41:14', 1),
(3, 'Bihar', 1, '2015-05-02 14:52:52', 1),
(4, 'Chhattisgarh', 1, '2015-05-02 14:52:52', 1),
(5, 'Goa', 1, '2015-05-02 14:52:52', 1),
(6, 'Gujrat', 1, '2015-05-02 14:52:52', 1),
(7, 'Haryana', 1, '2015-05-02 14:52:52', 1),
(8, 'Himachal Pradesh', 1, '2015-05-02 14:52:52', 1),
(9, 'Jammu and Kashmir', 1, '2015-05-02 14:52:52', 1),
(10, 'Jharkhand', 1, '2015-05-02 14:52:52', 1),
(11, 'Karnataka', 1, '2015-05-02 14:52:52', 1),
(12, 'Kerala', 1, '2015-05-02 14:52:52', 1),
(13, 'Madhya Pradesh', 1, '2015-05-02 14:52:52', 1),
(14, 'Maharashtra', 1, '2015-05-02 14:52:52', 1),
(15, 'Manipur', 1, '2015-05-02 14:52:52', 1),
(16, 'Uttar Pradesh', 1, '2015-05-02 14:52:52', 1),
(17, 'Uttarakhand', 1, '2015-05-02 14:52:52', 1),
(18, 'West Bengal', 1, '2015-05-02 14:52:52', 1),
(19, 'Alabama', 1, '2015-05-04 00:43:05', 3),
(20, 'Alaska', 1, '2015-05-04 00:43:09', 3),
(21, 'Arizona', 1, '2015-05-04 00:43:27', 3),
(22, 'Arkansas', 1, '2015-05-04 00:43:37', 3),
(23, 'California', 1, '2015-05-04 00:43:40', 3),
(24, 'Colorado', 1, '2015-05-04 00:43:59', 3),
(25, 'Connecticut', 1, '2015-05-04 00:44:04', 3),
(26, 'Florida', 1, '2015-05-02 15:14:33', 2),
(27, 'Hawaii', 1, '2015-05-02 15:14:33', 2),
(28, 'Illinois', 1, '2015-05-02 15:14:33', 2),
(29, 'Iowa', 1, '2015-05-02 15:14:33', 2),
(30, 'Kansas', 1, '2015-05-02 15:14:33', 2),
(31, 'Kentucky', 1, '2015-05-02 15:14:33', 2),
(32, 'Maryland', 1, '2015-05-02 15:14:33', 2),
(33, ' Massachusetts', 1, '2015-05-02 15:14:33', 2),
(34, 'Michigan', 1, '2015-05-02 15:14:33', 2),
(35, 'Minnesota', 1, '2015-05-02 15:14:33', 2),
(36, 'Mississippi', 1, '2015-05-02 15:14:33', 2),
(37, 'Missouri', 1, '2015-05-02 15:14:33', 2),
(38, 'Nebraska', 1, '2015-05-02 15:14:33', 2),
(39, 'Nevada', 1, '2015-05-02 15:14:33', 2),
(40, 'New Jersey', 1, '2015-05-02 15:14:33', 2),
(41, 'New York', 1, '2015-05-02 15:14:33', 2),
(42, 'North Carolina', 1, '2015-05-02 15:14:33', 2),
(43, 'North Dakota', 1, '2015-05-02 15:14:33', 2),
(44, 'Ohio', 1, '2015-05-02 15:14:33', 2),
(45, 'Oklahoma', 1, '2015-05-02 15:14:33', 2),
(46, 'Oregon', 1, '2015-05-02 15:14:33', 2),
(47, 'Pennsylvania', 1, '2015-05-02 15:14:33', 2),
(48, 'Rhode Island', 1, '2015-05-02 15:14:33', 2),
(49, 'Tennessee', 1, '2015-05-02 15:14:33', 2),
(50, 'Texas', 1, '2015-05-02 15:14:33', 2),
(51, 'Utah', 1, '2015-05-02 15:14:33', 2),
(52, 'Vermont', 1, '2015-05-02 15:14:33', 2),
(53, 'Virginia', 1, '2015-05-02 15:14:33', 2),
(54, 'Washington', 1, '2015-05-02 15:14:33', 2),
(55, 'Wisconsin', 1, '2015-05-02 15:14:33', 2);

-- --------------------------------------------------------

--
-- Table structure for table `residencerent`
--

CREATE TABLE IF NOT EXISTS `residencerent` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rent_inside` float NOT NULL,
  `rent_outside` float NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `residencerent`
--

INSERT INTO `residencerent` (`rid`, `rent_inside`, `rent_outside`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, 148.84, 88.46, '1', '2015-05-04 17:23:30', 1, 1),
(2, 132.71, 83.19, '1', '2015-05-04 17:23:42', 2, 1),
(3, 1060.38, 874.5, '1', '2015-05-04 17:21:19', 19, 3),
(4, 1521.95, 115.26, '1', '2015-05-04 17:21:04', 20, 3),
(5, 118.84, 67.34, '1', '2015-05-05 23:26:33', 3, 1),
(6, 69.32, 43.58, '1', '2015-05-05 23:26:33', 4, 1),
(7, 184.86, 145.25, '1', '2015-05-05 23:34:17', 5, 1),
(8, 108.94, 79.23, '1', '2015-05-05 23:34:17', 6, 1),
(9, 321.31, 226.79, '1', '2015-05-05 23:34:17', 7, 1),
(10, 118.84, 59.42, '1', '2015-05-05 23:34:17', 8, 1),
(11, 198.07, 102.34, '1', '2015-05-05 23:34:17', 9, 1),
(12, 112.24, 69.32, '1', '2015-05-05 23:34:17', 10, 1),
(13, 247.59, 54.47, '1', '2015-05-05 23:34:17', 11, 1),
(14, 183.21, 124.5, '1', '2015-05-05 23:34:17', 12, 1),
(15, 141.48, 91.11, '1', '2015-05-05 23:34:17', 13, 1),
(16, 249.24, 169.52, '1', '2015-05-05 23:34:17', 14, 1),
(17, 59.42, 44.57, '1', '2015-05-05 23:34:17', 15, 1),
(18, 98.29, 58.98, '1', '2015-05-05 23:34:17', 16, 1),
(19, 131.06, 117.95, '1', '2015-05-05 23:34:17', 17, 1),
(20, 216.93, 117.95, '1', '2015-05-05 23:34:17', 18, 1),
(21, 1060.38, 897.16, '1', '2015-05-05 23:58:34', 21, 1),
(22, 854.79, 666.16, '1', '2015-05-05 23:58:34', 22, 1),
(23, 2010.68, 1442.94, '1', '2015-05-05 23:58:34', 23, 1),
(24, 844.56, 762.53, '1', '2015-05-05 23:58:34', 24, 1),
(25, 1559.38, 966.81, '1', '2015-05-05 23:58:34', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `salaryid` int(11) NOT NULL AUTO_INCREMENT,
  `salaryrange` float NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`salaryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salaryid`, `salaryrange`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, 403, '1', '2015-05-04 17:31:57', 1, 1),
(2, 415.94, '1', '2015-05-04 17:32:11', 2, 1),
(3, 3040.94, '1', '2015-05-04 17:32:50', 19, 3),
(4, 4815.71, '1', '2015-05-04 17:32:54', 20, 3),
(5, 567.8, '1', '2015-05-05 23:20:25', 3, 1),
(6, 290.5, '1', '2015-05-05 23:20:25', 4, 1),
(7, 377.98, '1', '2015-05-05 23:24:13', 5, 1),
(8, 726.25, '1', '2015-05-05 23:24:13', 6, 1),
(9, 1056.37, '1', '2015-05-05 23:24:13', 7, 1),
(10, 396.14, '1', '2015-05-05 23:24:13', 8, 1),
(11, 445.66, '1', '2015-05-05 23:24:13', 9, 1),
(12, 495.17, '1', '2015-05-05 23:24:13', 10, 1),
(13, 330.11, '1', '2015-05-05 23:24:13', 11, 1),
(14, 505.08, '1', '2015-05-05 23:24:13', 12, 1),
(15, 346.62, '1', '2015-05-05 23:24:13', 13, 1),
(16, 700.28, '1', '2015-05-05 23:24:13', 14, 1),
(17, 217.88, '1', '2015-05-05 23:24:13', 15, 1),
(18, 688.05, '1', '2015-05-05 23:24:13', 16, 1),
(19, 386.62, '1', '2015-05-05 23:24:13', 17, 1),
(20, 576.15, '1', '2015-05-05 23:24:13', 18, 1),
(21, 3760.52, '1', '2015-05-05 23:54:40', 21, 1),
(22, 2345.3, '1', '2015-05-05 23:54:40', 22, 1),
(23, 3768.33, '1', '2015-05-05 23:54:40', 23, 1),
(24, 3288.12, '1', '2015-05-05 23:54:40', 24, 1),
(25, 4595.48, '1', '2015-05-05 23:54:40', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tariff_and_mobile`
--

CREATE TABLE IF NOT EXISTS `tariff_and_mobile` (
  `tmid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`tmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tariff_and_mobile`
--

INSERT INTO `tariff_and_mobile` (`tmid`, `name`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, '15.48', '1', '2015-05-04 16:32:55', 1, 1),
(2, '22.78', '1', '2015-05-04 16:32:55', 2, 1),
(3, '54.04', '1', '2015-05-04 16:39:29', 19, 3),
(4, '87.64', '1', '2015-05-04 16:39:29', 20, 3),
(5, '14.86', '1', '2015-05-05 22:51:38', 3, 1),
(6, '22.28', '1', '2015-05-05 22:51:38', 4, 1),
(7, '32.48', '1', '2015-05-05 22:58:01', 5, 1),
(8, '29.71', '1', '2015-05-05 22:58:01', 6, 1),
(9, '42.91', '1', '2015-05-05 22:58:01', 7, 1),
(10, '49.52', '1', '2015-05-05 22:58:01', 8, 1),
(11, '34.66', '1', '2015-05-05 22:58:01', 9, 1),
(12, '36.97', '1', '2015-05-05 22:58:01', 10, 1),
(13, '42.58', '1', '2015-05-05 22:58:01', 11, 1),
(14, '24.46', '1', '2015-05-05 22:58:01', 12, 1),
(15, '26.08', '1', '2015-05-05 22:58:01', 13, 1),
(16, '28.7', '1', '2015-05-05 22:58:01', 14, 1),
(17, '31.03', '1', '2015-05-05 22:58:01', 15, 1),
(18, '17.69', '1', '2015-05-05 22:58:01', 16, 1),
(19, '19.33', '1', '2015-05-05 22:58:01', 17, 1),
(20, '22.17', '1', '2015-05-05 22:58:01', 18, 1),
(21, '69.65', '1', '2015-05-05 23:44:56', 21, 1),
(22, '68.61', '1', '2015-05-05 23:44:56', 22, 1),
(23, '51.4', '1', '2015-05-05 23:44:56', 23, 1),
(24, '64.37', '1', '2015-05-05 23:44:56', 24, 1),
(25, '40.67', '1', '2015-05-05 23:44:56', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tobacco`
--

CREATE TABLE IF NOT EXISTS `tobacco` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tobacco`
--

INSERT INTO `tobacco` (`tid`, `name`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, '1.18', '1', '2015-05-04 20:33:37', 1, 1),
(2, '1.98', '1', '2015-05-04 20:33:37', 2, 1),
(3, '5.93', '1', '2015-05-04 20:35:10', 19, 3),
(4, '12.16', '1', '2015-05-04 20:35:10', 20, 3),
(5, '3.57', '1', '2015-05-06 00:19:19', 3, 1),
(6, '1.98', '1', '2015-05-06 00:19:19', 4, 1),
(7, '2.97', '1', '2015-05-06 00:24:00', 5, 1),
(8, '1.54', '1', '2015-05-06 00:24:00', 6, 1),
(9, '3.76', '1', '2015-05-06 00:24:00', 7, 1),
(10, '3.17', '1', '2015-05-06 00:24:00', 8, 1),
(11, '2.57', '1', '2015-05-06 00:24:00', 9, 1),
(12, '5.94', '1', '2015-05-06 00:24:00', 10, 1),
(13, '2.97', '1', '2015-05-06 00:24:00', 11, 1),
(14, '2.97', '1', '2015-05-06 00:24:00', 12, 1),
(15, '2.87', '1', '2015-05-06 00:24:00', 13, 1),
(16, '3.66', '1', '2015-05-06 00:24:00', 14, 1),
(17, '1.78', '1', '2015-05-06 00:24:00', 15, 1),
(18, '4.32', '1', '2015-05-06 00:24:00', 16, 1),
(19, '2.36', '1', '2015-05-06 00:24:00', 17, 1),
(20, '2.95', '1', '2015-05-06 00:24:00', 18, 1),
(21, '8.73', '1', '2015-05-06 00:24:17', 21, 1),
(22, '6.86', '1', '2015-05-06 00:24:17', 22, 1),
(23, '7.16', '1', '2015-05-06 00:24:17', 23, 1),
(24, '8.08', '1', '2015-05-06 00:24:17', 24, 1),
(25, '10.6', '1', '2015-05-06 00:24:17', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE IF NOT EXISTS `transportation` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enabled` varchar(255) NOT NULL,
  `entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`tid`, `name`, `enabled`, `entered`, `sid`, `cid`) VALUES
(1, '0.20', '1', '2015-05-04 20:36:59', 1, 1),
(2, '0.30', '1', '2015-05-04 20:37:04', 2, 1),
(3, '', '1', '2015-05-04 20:36:18', 19, 3),
(4, '2.18', '1', '2015-05-04 20:36:41', 20, 3),
(5, '0.24', '1', '2015-05-06 00:25:38', 3, 1),
(6, '0.3', '1', '2015-05-06 00:25:38', 4, 1),
(7, '0.42', '1', '2015-05-06 00:30:37', 5, 1),
(8, '0.5', '1', '2015-05-06 00:30:37', 6, 1),
(9, '0.5', '1', '2015-05-06 00:30:37', 7, 1),
(10, '0.4', '1', '2015-05-06 00:30:37', 8, 1),
(11, '0.3', '1', '2015-05-06 00:30:37', 9, 1),
(12, '0.59', '1', '2015-05-06 00:30:37', 10, 1),
(13, '0.4', '1', '2015-05-06 00:30:37', 11, 1),
(14, '0.2', '1', '2015-05-06 00:30:37', 12, 1),
(15, '0.2', '1', '2015-05-06 00:30:37', 13, 1),
(16, '0.3', '1', '2015-05-06 00:30:37', 14, 1),
(17, '0.32', '1', '2015-05-06 00:30:37', 15, 1),
(18, '1.2', '1', '2015-05-06 00:30:37', 16, 1),
(19, '0.2', '1', '2015-05-06 00:30:37', 17, 1),
(20, '0.2', '1', '2015-05-06 00:30:37', 18, 1),
(21, '2.65', '1', '2015-05-06 00:30:52', 21, 1),
(22, '1.68', '1', '2015-05-06 00:30:52', 22, 1),
(23, '2.18', '1', '2015-05-06 00:30:52', 23, 1),
(24, '2.18', '1', '2015-05-06 00:30:52', 24, 1),
(25, '2.5', '1', '2015-05-06 00:30:52', 25, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
