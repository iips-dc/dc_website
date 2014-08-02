-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2014 at 02:57 PM
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
-- Table structure for table `moocs`
--

CREATE TABLE IF NOT EXISTS `moocs` (
  `course_id` varchar(15) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `provider_name` varchar(30) NOT NULL,
  `link` varchar(40) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moocs`
--

INSERT INTO `moocs` (`course_id`, `course_name`, `starting_date`, `provider_name`, `link`) VALUES
('101', 'dhewkh', '0000-00-00', 'qlwejdqkdj', 'oewijdjldj23lkdj`'),
('1111', 'dfdf', '0000-00-00', 'saas', 'asas'),
('Garg', 'garg', '0000-00-00', 'fgg', 'fgf'),
('pulkit', 'k', '0000-00-00', '', ''),
('rahul', 'rahul', '0000-00-00', 'aijsa', 'sdas'),
('rahyff', 'fghf', '0000-00-00', 'fgfh', 'ghfgh'),
('ref', '', '0000-00-00', 'fdfsf', 'sdfsdf'),
('satal', 'hg', '0000-00-00', 'ghg', 'ghg'),
('ttttt', 'mghbvn  ', '0000-00-00', 'ttt', 'ttt'),
('wqeqe', '', '0000-00-00', 'eqweqwe', 'qeqeeqwe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
