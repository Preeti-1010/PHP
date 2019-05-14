-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2019 at 02:01 PM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `calc`
--

DROP TABLE IF EXISTS `calc`;
CREATE TABLE IF NOT EXISTS `calc` (
  `c_id` int(12) NOT NULL AUTO_INCREMENT,
  `have_website` varchar(255) NOT NULL,
  `have_landing` varchar(255) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `zipcode` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `budget` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calc`
--

INSERT INTO `calc` (`c_id`, `have_website`, `have_landing`, `com_name`, `state`, `name`, `phone`, `business_type`, `zipcode`, `email`, `budget`) VALUES
(1, '', '', 'wedw', 'KY', 'efffrr', 574545, 'k', 5745, 'fr@frgv.hh', '$899 to $999'),
(2, '', '', 'wedw', 'KY', 'efffrr', 574545, 'k', 5745, 'fr@frgv.hh', '$899 to $999'),
(3, '', '', 'wedw', 'KY', 'efffrr', 574545, 'k', 5745, 'fr@frgv.hh', '$899 to $999'),
(4, '', '', 'wedw', 'KY', 'efffrr', 574545, 'k', 5745, 'fr@frgv.hh', '$899 to $999'),
(5, '', '', 'foxtraut', 'IN', 'Preeti Pandey', 1234567890, 'IT ', 1234, 'preeti@123.com', '$399 to $699'),
(6, '', '', 'yhu5tyiui', 'KY', 'efffrr', 1234567890, 'iuyu', 556, 'fr@frgv.hh', '$899 to $999'),
(7, 'no', 'yes', 'Qtrinagle', 'IN', 'Preeti Pandey', 1234567890, 'IT Service', 12345, 'preeti@123.com', '$699 to $899'),
(8, 'yes', 'yes', 'ujyutyu', 'KY', 'efffrr', 574545, 'iokipo', 5745, 'fr@frgv.hh', '$199 to $399'),
(9, 'yes', 'yes', 'jkhj', 'KY', 'efffrr', 1234567890, 'iokipo', 556, 'fr@frgv.hh', '$99 to $199'),
(10, 'yes', 'yes', 'jkhj', 'LA', 'Preeti Pandey', 1234567890, 'iokipo', 5745, 'fr@frgv.hh', '$899 to $999'),
(11, 'yes', 'yes', 'jkhj', 'LA', 'Preeti Pandey', 1234567890, 'iokipo', 5745, 'fr@frgv.hh', '$899 to $999'),
(12, 'yes', 'yes', 'foxtraut', 'AK', 'Preeti Pandey', 1234567890, 'IT Service', 5745, 'preeti@123.com', '$99 to $199'),
(13, 'yes', 'no', 'ikpoi', 'LA', 'Preeti Pandey', 1234567890, 'k', 5656, 'preeti@123.com', '$999 & above'),
(14, '', '', 'ujyutyu', 'IN', 'Preeti Pandey', 574545, 'k', 5745, 'fr@frgv.hh', '$999 & above'),
(15, '', '', 'ujyutyu', 'IN', 'Preeti Pandey', 574545, 'k', 5745, 'fr@frgv.hh', '$999 & above'),
(16, '', '', 'b', 'AL', 'Preeti Pandey', 1234567890, 'IT Service', 5745, 'fr@frgv.hh', '$99 to $199'),
(17, 'no', 'yes', 'foxtraut', 'ME', 'Preeti Pandey', 1234567890, 'IT Service', 5656, 'preeti@123.com', '$999 & above'),
(18, 'no', 'yes', 'foxtraut', 'ME', 'Preeti Pandey', 1234567890, 'IT Service', 5656, 'preeti@123.com', '$999 & above'),
(19, 'no', 'yes', 'foxtraut', 'ME', 'Preeti Pandey', 1234567890, 'IT Service', 5656, 'preeti@123.com', '$999 & above'),
(20, 'no', 'yes', 'foxtraut', 'ME', 'Preeti Pandey', 1234567890, 'IT Service', 5656, 'preeti@123.com', '$999 & above'),
(21, 'no', 'yes', 'foxtraut', 'IN', 'Preeti Pandey', 1234567890, 'IT Service', 5656, 'preeti@123.com', '$999 & above'),
(22, '', '', 'fox', 'IA', 'pooja', 1234567890, 'IT Service', 5745, 'pooja@123.com', '$899 to $999'),
(23, '', '', 'foxtraut', 'ID', 'Preeti Pandey', 1234567890, 'IT Service', 5745, 'preeti@gmail.com', '$99 to $199');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `p_id` int(12) NOT NULL AUTO_INCREMENT,
  `pkg_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `pkg_name`, `description`) VALUES
(101, 'PPC Package ', ''),
(102, 'SEO Package', ''),
(103, 'SMO Package', ''),
(104, 'SMM Package', ''),
(105, ' All In One Package ', '');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `plan_id` int(12) NOT NULL AUTO_INCREMENT,
  `p_id` int(12) NOT NULL,
  `pkg_plan` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `p_id`, `pkg_plan`, `price`, `description`) VALUES
(1, 104, 'PPC Starter Plans', 97, '54t54t'),
(2, 104, 'PPC Growth Planwewe', 0, 'fserfgrger'),
(3, 101, 'SEO Starter plan', 0, ''),
(4, 101, 'SEO Value Plan', 0, ''),
(5, 101, 'SEO Silver Plan', 0, ''),
(7, 101, 'SEO Platinium Plan', 97, 'hifjbrfmre'),
(11, 102, 'jjjjhtrgrg', 78678657, ''),
(9, 101, 'SEO Gold Plans', 11233, 'ssdcsdfdff134rgrfgrdtghyhythythrhgvfdge35465765ret4'),
(12, 103, 'Akash Chauhan', 5465, 'rtgrttrgr55454');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `s_id` int(12) NOT NULL AUTO_INCREMENT,
  `plan_id` int(20) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `plan_id`, `country_name`, `price`, `plan_name`) VALUES
(1, 101, ' {', 65756, '101'),
(2, 101, ' {', 65756, '101'),
(3, 101, ' [{', 789, '101'),
(4, 101, ' [{', 789, '101'),
(5, 101, ' [{', 789, '101'),
(6, 101, ' [{', 789, '101'),
(7, 101, ' [{', 789, '101'),
(8, 104, ' [{', 100, '101'),
(9, 104, ' [{', 100, '101'),
(10, 101, ' [{', 12334, '101'),
(11, 104, ' [{', 65756, '101'),
(12, 102, ' [{', 11233, '101');

-- --------------------------------------------------------

--
-- Table structure for table `statedata`
--

DROP TABLE IF EXISTS `statedata`;
CREATE TABLE IF NOT EXISTS `statedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(12) NOT NULL,
  `abbr` varchar(2) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statedata`
--

INSERT INTO `statedata` (`id`, `p_id`, `abbr`, `name`, `price`) VALUES
(1, 103, 'AL', 'Alabama', 678),
(2, 0, 'AK', 'Alaska', 0),
(3, 0, 'AZ', 'Arizona', 0),
(4, 0, 'AR', 'Arkansas', 0),
(5, 0, 'CA', 'California', 0),
(6, 0, 'CO', 'Colorado', 0),
(7, 0, 'CT', 'Connecticut', 0),
(8, 0, 'DE', 'Delaware', 0),
(9, 102, 'DC', 'District of Columbia', 0),
(10, 0, 'FL', 'Florida', 0),
(11, 0, 'GA', 'Georgia', 0),
(12, 0, 'HI', 'Hawaii', 0),
(13, 0, 'ID', 'Idaho', 0),
(14, 0, 'IL', 'Illinois', 0),
(15, 0, 'IN', 'Indiana', 0),
(16, 0, 'IA', 'Iowa', 0),
(17, 0, 'KS', 'Kansas', 0),
(18, 0, 'KY', 'Kentucky', 0),
(19, 0, 'LA', 'Louisiana', 0),
(20, 0, 'ME', 'Maine', 0),
(21, 0, 'MD', 'Maryland', 0),
(22, 0, 'MA', 'Massachusetts', 0),
(23, 0, 'MI', 'Michigan', 0),
(24, 0, 'MN', 'Minnesota', 0),
(25, 0, 'MS', 'Mississippi', 0),
(26, 0, 'MO', 'Missouri', 0),
(27, 0, 'MT', 'Montana', 0),
(28, 0, 'NE', 'Nebraska', 0),
(29, 0, 'NV', 'Nevada', 0),
(30, 0, 'NH', 'New Hampshire', 0),
(31, 0, 'NJ', 'New Jersey', 0),
(32, 0, 'NM', 'New Mexico', 0),
(33, 0, 'NY', 'New York', 0),
(34, 0, 'NC', 'North Carolina', 0),
(35, 0, 'ND', 'North Dakota', 0),
(36, 0, 'OH', 'Ohio', 0),
(37, 0, 'OK', 'Oklahoma', 0),
(38, 0, 'OR', 'Oregon', 0),
(39, 0, 'PA', 'Pennsylvania', 0),
(40, 0, 'RI', 'Rhode Island', 0),
(41, 0, 'SC', 'South Carolina', 0),
(42, 0, 'SD', 'South Dakota', 0),
(43, 0, 'TN', 'Tennessee', 0),
(44, 0, 'TX', 'Texas', 0),
(45, 0, 'UT', 'Utah', 0),
(46, 0, 'VT', 'Vermont', 0),
(47, 0, 'VA', 'Virginia', 0),
(48, 0, 'WA', 'Washington', 0),
(49, 0, 'WV', 'West Virginia', 0),
(50, 0, 'WI', 'Wisconsin', 0),
(51, 0, 'WY', 'Wyoming', 0);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(12) NOT NULL,
  `abbr` varchar(2) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(50) NOT NULL,
  `plans` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `p_id`, `abbr`, `name`, `price`, `plans`) VALUES
(1, 103, 'AL', 'Alabama', 345, ''),
(2, 0, 'AK', 'Alaska', 0, ''),
(3, 0, 'AZ', 'Arizona', 0, ''),
(4, 0, 'AR', 'Arkansas', 0, ''),
(5, 0, 'CA', 'California', 0, ''),
(6, 0, 'CO', 'Colorado', 0, ''),
(7, 0, 'CT', 'Connecticut', 0, ''),
(8, 0, 'DE', 'Delaware', 0, ''),
(9, 102, 'DC', 'District of Columbia', 0, ''),
(10, 0, 'FL', 'Florida', 0, ''),
(11, 0, 'GA', 'Georgia', 0, ''),
(12, 0, 'HI', 'Hawaii', 0, ''),
(13, 0, 'ID', 'Idaho', 0, ''),
(14, 0, 'IL', 'Illinois', 0, ''),
(15, 0, 'IN', 'Indiana', 0, ''),
(16, 0, 'IA', 'Iowa', 0, ''),
(17, 0, 'KS', 'Kansas', 0, ''),
(18, 0, 'KY', 'Kentucky', 0, ''),
(19, 0, 'LA', 'Louisiana', 0, ''),
(20, 0, 'ME', 'Maine', 0, ''),
(21, 0, 'MD', 'Maryland', 0, ''),
(22, 0, 'MA', 'Massachusetts', 0, ''),
(23, 0, 'MI', 'Michigan', 0, ''),
(24, 0, 'MN', 'Minnesota', 0, ''),
(25, 0, 'MS', 'Mississippi', 0, ''),
(26, 0, 'MO', 'Missouri', 0, ''),
(27, 0, 'MT', 'Montana', 0, ''),
(28, 0, 'NE', 'Nebraska', 0, ''),
(29, 0, 'NV', 'Nevada', 0, ''),
(30, 0, 'NH', 'New Hampshire', 0, ''),
(31, 0, 'NJ', 'New Jersey', 0, ''),
(32, 0, 'NM', 'New Mexico', 0, ''),
(33, 0, 'NY', 'New York', 0, ''),
(34, 0, 'NC', 'North Carolina', 0, ''),
(35, 0, 'ND', 'North Dakota', 0, ''),
(36, 0, 'OH', 'Ohio', 0, ''),
(37, 0, 'OK', 'Oklahoma', 0, ''),
(38, 0, 'OR', 'Oregon', 0, ''),
(39, 0, 'PA', 'Pennsylvania', 0, ''),
(40, 0, 'RI', 'Rhode Island', 0, ''),
(41, 0, 'SC', 'South Carolina', 0, ''),
(42, 0, 'SD', 'South Dakota', 0, ''),
(43, 0, 'TN', 'Tennessee', 0, ''),
(44, 0, 'TX', 'Texas', 0, ''),
(45, 0, 'UT', 'Utah', 0, ''),
(46, 0, 'VT', 'Vermont', 0, ''),
(47, 0, 'VA', 'Virginia', 0, ''),
(48, 0, 'WA', 'Washington', 0, ''),
(49, 0, 'WV', 'West Virginia', 0, ''),
(50, 0, 'WI', 'Wisconsin', 0, ''),
(51, 0, 'WY', 'Wyoming', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
