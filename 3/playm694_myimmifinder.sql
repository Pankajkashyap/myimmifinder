-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2015 at 08:50 PM
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
  `gdp` varchar(10) NOT NULL,
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
(1, 'Asia', 'Truth Alone Triumphs', 'Hindi', 'Indian Rupee', 'New Delhi', 'New Delhi', 'Jana Gana Mana', 'New delhi,Mumbai,Bombay,Calcutta,Madras,Hyderabad,', 18, '', '', 'Federal Republic', 'Pranab Mukherjee', 'Narendra Modi', '790', '', '1.82 Trill', '3.20', '', 1, '2015-04-27 15:36:35'),
(2, 'Australia', 'Advance Australia', 'English', 'Australian Dollar', 'Canberra', 'Sydney', 'Advance Australia Fair', 'Sydney,Melbourne,Brisbane,Perth,Adelaide,Gold Coast,Newcastle', 18, '', '', 'Commanwealth', 'Quentin Alice Louise Bryce', 'Tonny Abbott', '150', '', '1.52 Trill', '3.70', '', 1, '2015-04-27 15:36:35'),
(3, 'Oceania', '', 'English', 'US Dollar', 'Pago Pago', 'Pago Pago', '"Amerika Samoa" (American Samoa)', '', 18, '', '18', 'Unincorporated Territory', 'Tufuga Efi', 'Tuilaepa Aiono Sailele Maliele', '', '', '462 Millio', '3.00', '8000', 1, '2015-04-29 02:46:24'),
(4, 'Asia', '', 'Japanese', 'Yen', 'Tokyo', 'Tokyo', '"Kimigayo" (The Emperor"s Reign)', '    Tokyo,\r\n    Nagoya,\r\n    Kobe,\r\n    Kawasaki,\r\n    Hiroshima,\r\n    Saitama,\r\n    Kitakyushu,\r\n    Sakai,\r\n    Sagamihara,\r\n    Hamamatsu', 20, '13', '20', 'Constitutional Monarchy, Parliamentary Government', 'Akihito', 'Shinzo Abe', '772', '2010', '5.88 Trill', '2.00', '35900', 1, '2015-04-29 22:48:10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `countryid`, `state`, `food`, `type`, `quantity`, `price`) VALUES
(1, 1, 'Andhra Pradesh', 'Meal', '', '', 1.18),
(2, 1, 'Andhra Pradesh', 'McMeal at McDonalds', '', '', 3.93),
(3, 1, 'Andhra Pradesh', 'Domestic Beer', '', '', 1.92),
(4, 1, 'Andhra Pradesh', 'Cappuccino (regular)', '', '', 1.39),
(5, 1, 'Andhra Pradesh', 'Coke/Pepsi', '', '0.33 liter bottle', 0.52),
(6, 1, 'Andhra Pradesh', 'Water', '', '0.33 liter bottle', 0.23),
(7, 1, 'Andhra Pradesh', 'Milk (regular)', '', '1 liter', 0.89),
(8, 1, 'Andhra Pradesh', 'Loaf of Fresh White Bread', '', '500g', 0.47),
(9, 1, 'Andhra Pradesh', 'Rice (white)', '', '1kg', 0.84),
(10, 1, 'Andhra Pradesh', 'Eggs', '', '12', 0.94),
(11, 1, 'Andhra Pradesh', 'Local Cheese', '', '1kg', 6.88),
(12, 1, 'Andhra Pradesh', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 4.18),
(13, 1, 'Andhra Pradesh', 'Apples', '', '1kg', 1.57),
(14, 1, 'Andhra Pradesh', 'Oranges', '', '1kg', 1.47),
(15, 1, 'Andhra Pradesh', 'Tomato', '', '1kg', 0.52),
(16, 1, 'Andhra Pradesh', 'Potato', '', '1kg', 0.53),
(17, 1, 'Andhra Pradesh', 'Lettuce', '', '1 head', 0.69),
(18, 1, 'Andhra Pradesh', 'Water', '', '1.5 liter bottle', 0.48),
(19, 1, 'Andhra Pradesh', 'Pack of Cigarettes (Marlboro)', '', '', 1.18),
(20, 1, 'Andhra Pradesh', 'One-way Ticket (Local Transport)', '', '', 0.2),
(21, 1, 'Assam', 'Meal', '', '', 2.18),
(22, 1, 'Assam', 'McMeal at McDonalds', '', '', 3.86),
(23, 1, 'Assam', 'Domestic Beer', '', '', 1.54),
(24, 1, 'Assam', 'Cappuccino (regular)', '', '', 1.45),
(25, 1, 'Assam', 'Coke/Pepsi', '', '0.33 liter bottle', 0.51),
(26, 1, 'Assam', 'Water', '', '0.33 liter bottle', 0.21),
(27, 1, 'Assam', 'Milk (regular)', '', '1 liter', 0.88),
(28, 1, 'Assam', 'Loaf of Fresh White Bread', '', '500g', 0.59),
(29, 1, 'Assam', 'Rice (white)', '', '1kg', 0.7),
(30, 1, 'Assam', 'Eggs', '', '12', 1.19),
(31, 1, 'Assam', 'Local Cheese', '', '1kg', 6.46),
(32, 1, 'Assam', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 3.4),
(33, 1, 'Assam', 'Apples', '', '1kg', 2.91),
(34, 1, 'Assam', 'Oranges', '', '1kg', 1.35),
(35, 1, 'Assam', 'Tomato', '', '1kg', 0.71),
(36, 1, 'Assam', 'Potato', '', '1kg', 0.35),
(37, 1, 'Assam', 'Lettuce', '', '1 head', 0.64),
(38, 1, 'Assam', 'Water', '', '1.5 liter bottle', 0.56),
(39, 1, 'Assam', 'Pack of Cigarettes (Marlboro)', '', '', 1.98),
(40, 1, 'Assam', 'One-way Ticket (Local Transport)', '', '', 0.3),
(41, 3, 'Alabama', 'Meal', '', '', 14.97),
(42, 3, 'Alabama', 'McMeal at McDonalds', '', '', 8.11),
(43, 3, 'Alabama', 'Domestic Beer', '', '', 3.43),
(44, 3, 'Alabama', 'Cappuccino (regular)', '', '', 4.1),
(45, 3, 'Alabama', 'Coke/Pepsi', '', '0.33 liter bottle', 1.71),
(46, 3, 'Alabama', 'Water', '', '0.33 liter bottle', 1.32),
(47, 3, 'Alabama', 'Milk (regular)', '', '1 liter', 1.33),
(48, 3, 'Alabama', 'Loaf of Fresh White Bread', '', '500g', 2.51),
(49, 3, 'Alabama', 'Rice (white)', '', '1kg', 2.38),
(50, 3, 'Alabama', 'Eggs', '', '12', 3.4),
(51, 3, 'Alabama', 'Local Cheese', '', '1kg', 11.14),
(52, 3, 'Alabama', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 11.31),
(53, 3, 'Alabama', 'Apples', '', '1kg', 3.51),
(54, 3, 'Alabama', 'Oranges', '', '1kg', 4.15),
(55, 3, 'Alabama', 'Tomato', '', '1kg', 3.78),
(56, 3, 'Alabama', 'Potato', '', '1kg', 3.04),
(57, 3, 'Alabama', 'Lettuce', '', '1 head', 1.83),
(58, 3, 'Alabama', 'Water', '', '1.5 liter bottle', 1.9),
(59, 3, 'Alabama', 'Pack of Cigarettes (Marlboro)', '', '', 5.93),
(60, 3, 'Alabama', 'One-way Ticket (Local Transport)', '', '', 0),
(61, 3, 'Alaska', 'Meal', '', '', 14.97),
(62, 3, 'Alaska', 'McMeal at McDonalds', '', '', 9.98),
(63, 3, 'Alaska', 'Domestic Beer', '', '', 6.24),
(64, 3, 'Alaska', 'Cappuccino (regular)', '', '', 4.91),
(65, 3, 'Alaska', 'Coke/Pepsi', '', '0.33 liter bottle', 2.52),
(66, 3, 'Alaska', 'Water', '', '0.33 liter bottle', 2.1),
(67, 3, 'Alaska', 'Milk (regular)', '', '1 liter', 1.25),
(68, 3, 'Alaska', 'Loaf of Fresh White Bread', '', '500g', 4.18),
(69, 3, 'Alaska', 'Rice (white)', '', '1kg', 6.83),
(70, 3, 'Alaska', 'Eggs', '', '12', 4.03),
(71, 3, 'Alaska', 'Local Cheese', '', '1kg', 11.87),
(72, 3, 'Alaska', 'Chicken Breasts (Boneless, Skinless)', '', '1kg', 10.4),
(73, 3, 'Alaska', 'Apples', '', '1kg', 7.92),
(74, 3, 'Alaska', 'Oranges', '', '1kg', 7.03),
(75, 3, 'Alaska', 'Tomato', '', '1kg', 8.51),
(76, 3, 'Alaska', 'Potato', '', '1kg', 3.25),
(77, 3, 'Alaska', 'Lettuce', '', '1 head', 2.78),
(78, 3, 'Alaska', 'Water', '', '1.5 liter bottle', 2.71),
(79, 3, 'Alaska', 'Pack of Cigarettes (Marlboro)', '', '', 12.16),
(80, 3, 'Alaska', 'One-way Ticket (Local Transport)', '', '', 2.18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
