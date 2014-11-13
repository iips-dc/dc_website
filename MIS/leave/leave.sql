-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2014 at 02:56 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dc_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `leaving_date` date NOT NULL,
  `coming_date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `reason` varchar(50) NOT NULL DEFAULT '-None-',
  `message` varchar(50) NOT NULL DEFAULT '-None-',
  `approve` int(2) NOT NULL COMMENT '0 for not approved ,1 for approved, -1 for rejected ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `name`, `leaving_date`, `coming_date`, `type`, `reason`, `message`, `approve`) VALUES
(112, 'sachin', '2014-08-06', '2014-08-20', 'Sick Leave', 'dfdfsd', 'sdfsdf', 1),
(111, 'sinha', '2014-08-02', '2014-08-02', 'Yahoo', 'ghjhk', 'khk', 1),
(110, 'modi', '2014-08-06', '2014-08-20', 'Sick Leave', 'sdad', 'asdad', 1),
(109, 'PRASHANT', '2014-07-08', '2014-08-01', 'Festival', 'CVCV', 'CVCV', 1),
(84, 'Rajat Garg', '2014-07-31', '2014-07-31', '', 'sdsd', 'asdas', 1),
(108, 'rohit', '2014-08-01', '2014-08-11', 'Recreation Leave', 'Going for tour', 'Keep learning, Keep Sharing', 1),
(85, 'Rajat Garg', '2014-07-31', '2014-07-31', '', 'sdasd', '', 0),
(107, 'rahul satal', '2014-08-01', '2014-08-01', 'google', 'work', 'jhjh', 0),
(106, 'qqqqqqqqq', '2014-08-04', '2014-08-11', 'Yahoo', 'fed', 'sdsd', 0),
(105, 'www', '2014-08-19', '2014-08-26', 'Duck Duck Go', 'zxx', 'zx', 0),
(104, 'qqqqqq', '2014-08-20', '2014-08-19', 'Bing', 'dsfs', 'sdfgssdf', 0),
(102, 'qqqqqq', '2014-08-20', '2014-08-19', 'Bing', 'dsfs', 'sdfgssdf', 0),
(103, 'qqqqqq', '2014-08-20', '2014-08-19', 'Bing', 'dsfs', 'sdfgssdf', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
