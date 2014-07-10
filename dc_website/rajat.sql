-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2001 at 07:12 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rajat', 'rajat');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bf` varchar(3) NOT NULL,
  `currentaddress` varchar(60) NOT NULL,
  `permanentaddress` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact` (`contact`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `middlename`, `lastname`, `username`, `password`, `gender`, `contact`, `email`, `bf`, `currentaddress`, `permanentaddress`) VALUES
(1, 'Rupesh', '', 'Sendre', 'rsendre', 'sendre', 'Male', '9907466346', 'rupeshsendre@gmail.com', 'yes', '26, Indrapuri Indore(M.P.)', '26, Indrapuri Indore(M.P.)'),
(2, 'Rahul', 'Singhai', '', 'rsinghai', 'singhai', 'Male', '9826055331', 'rahul.singhai09@gmsil.com', 'Yes', '26, Lokmanaya Nagar Indore(M.P.)', '26, Lokmanaya Nagar Indore(M.P.)');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `answer`) VALUES
(1, 'Excellent'),
(2, 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(200) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `sender`, `receiver`) VALUES
(51, 'rtytyy', '2', ''),
(50, 'Rajat', '1', ''),
(49, 'ergrg', '1', ''),
(48, 'rtytyy', '2', ''),
(47, 'fghfgh', '2', ''),
(46, 'ergrg', '1', ''),
(45, 'ergrg', '1', ''),
(44, 'fggfh', '1', ''),
(43, 'fghfgh', '2', ''),
(42, 'fghfgh', '2', ''),
(41, 'fghfgh', '2', ''),
(40, 'fghfgh', '2', ''),
(13, 'fdgdfh', '', ''),
(14, 'sdgdgsg', '', ''),
(52, 'Garg', '2', ''),
(16, 'sdgsgd', '', ''),
(39, 'fghfgh', '2', ''),
(18, 'asfasffasf', '', ''),
(19, 'sfdf', '', ''),
(38, 'fghfgh', '2', ''),
(37, 'fghfgh', '2', ''),
(36, 'fghfgh', '2', ''),
(35, 'fggfh', '1', ''),
(24, 'Hello mam', '', ''),
(25, 'Hello mam', '', ''),
(34, 'fgsdfgdf', '1', ''),
(27, 'fgn', '', ''),
(33, 'fghfgh', '2', ''),
(29, 'sdf', '', ''),
(30, 'sdf', '', ''),
(32, 'dfh', '2', ''),
(53, 'Garg', '2', ''),
(54, 'Rajat', '1', ''),
(55, 'Rajat', '1', ''),
(56, 'rahul', '1', ''),
(57, 'rahul', '1', ''),
(58, 'Garg', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`) VALUES
(1, 'ewtt'),
(2, 'ewtt');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `tenth` varchar(8) NOT NULL,
  `tenthschool` varchar(50) NOT NULL,
  `twelth` varchar(8) NOT NULL,
  `twelthschool` varchar(50) NOT NULL,
  `course` varchar(6) NOT NULL,
  `sem` varchar(2) NOT NULL,
  `graduation` varchar(8) NOT NULL,
  `college` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`tenth`, `tenthschool`, `twelth`, `twelthschool`, `course`, `sem`, `graduation`, `college`) VALUES
('98%', 'Kendriya Vidhalaya 1', '98', 'Kendriya Vidhalaya 1', 'MCA', '1', '98', 'Kendriya Vidhalaya 1'),
('98%', 'Kendriya Vidhalaya 1', '98', 'Kendriya Vidhalaya 1', 'MCA', '1', '98', 'Kendriya Vidhalaya 1'),
('', '', '', '', 'M.Tech', '3', '', ''),
('', '', '', '', 'MCA', '5', '', ''),
('', '', '', '', 'MCA', '7', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `r`
--

CREATE TABLE IF NOT EXISTS `r` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `studentno` varchar(10) NOT NULL,
  `parentno` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `currentadd` varchar(255) NOT NULL,
  `permanentadd` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `studentno` (`studentno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `r`
--

INSERT INTO `r` (`Id`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `rollno`, `username`, `password`, `dob`, `gender`, `studentno`, `parentno`, `email`, `currentadd`, `permanentadd`) VALUES
(1, 'Rajat', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '0000-00-00', 'Male', '121', '121', '121@gmail.com', '3', '434'),
(2, 'DEv', 'gsd', 'gjg', 'ukhkj', 'guj', 'ghjk', 'ghj', '123', '1875-01-01', 'Male', '', '', '', '', ''),
(5, 'ewf', 'fr', 'erf', 'fe', 'fe', 'fr', 'rf', 'q', '0000-00-00', 'Male', '768', '768', 'jtyjh@fgh.tghbn', 'ytrjhy', 'ytrj'),
(11, 'erwr', 'er', 'ret', 'ret', 'ret', 'rt', 'rt', '6', '0000-00-00', 'Male', '123', '12', 'example@gmail.com', 'wsd', 'wsd'),
(27, 'nf', 'nb', 'bvn', 'vb', 'bvn', 'bnv', 'vbn', 'nm', '0000-00-00', 'Female', '1234567890', '1234567890', 'rahul.sagore@gmail.com', 'gffg', 'gffg'),
(28, 'Rajat', '', 'Garg', 'Kailash', 'qaswzws', 'IC-2k11-62', 'rajat joomla', 'hhhhh', '0000-00-00', 'Male', '9962626262', '4204204204', 'rajatgarg@gmail.com', 'ijadsf;klsa', 'ijadsf;klsa'),
(37, 'hj', 'jh', 'j', 'hj', 'j', 'hj', 'j', 'j', '2014-03-12', 'm', 'm', 'm', 'jdf@lk.com', 'k', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n` varchar(50) NOT NULL,
  `p` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `n`, `p`) VALUES
(1, 'l', 'o'),
(2, 'o', ''),
(3, 'p', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `studentno` varchar(10) NOT NULL,
  `parentno` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `currentadd` varchar(255) NOT NULL,
  `permanentadd` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `studentno` (`studentno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `name`, `middlename`, `lastname`, `fathername`, `mothername`, `rollno`, `username`, `password`, `dob`, `gender`, `studentno`, `parentno`, `email`, `currentadd`, `permanentadd`) VALUES
(1, 'Rajat', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '0000-00-00', 'Male', '121', '121', '121@gmail.com', '3', '434'),
(2, 'DEv', 'gsd', 'gjg', 'ukhkj', 'guj', 'ghjk', 'ghj', '123', '1875-01-01', 'Male', '', '', '', '', ''),
(5, 'ewf', 'fr', 'erf', 'fe', 'fe', 'fr', 'rf', 'q', '0000-00-00', 'Male', '768', '768', 'jtyjh@fgh.tghbn', 'ytrjhy', 'ytrj'),
(11, 'erwr', 'er', 'ret', 'ret', 'ret', 'rt', 'rt', '6', '0000-00-00', 'Male', '123', '12', 'example@gmail.com', 'wsd', 'wsd'),
(27, 'nf', 'nb', 'bvn', 'vb', 'bvn', 'bnv', 'vbn', 'nm', '0000-00-00', 'Female', '1234567890', '1234567890', 'rahul.sagore@gmail.com', 'gffg', 'gffg'),
(28, 'Rajat', '', 'Garg', 'Kailash', 'qaswzws', 'IC-2k11-62', 'rajat joomla', 'hhhhh', '0000-00-00', 'Male', '9962626262', '4204204204', 'rajatgarg@gmail.com', 'ijadsf;klsa', 'ijadsf;klsa'),
(37, 'hj', 'jh', 'j', 'hj', 'j', 'hj', 'j', 'j', '2014-03-12', 'm', 'm', 'm', 'jdf@lk.com', 'k', 'k'),
(42, '$firstname', '$midname', '$lastname', '$fathername', '$mothername', '$rollno', '$username', '$pwd', '0000-00-00', '$gender', '$studentnu', '$guardiann', '$email', '$currentaddress', '$permanentaddress'),
(49, 'thg', 'dfv', 'fgcfch', 'gvbhvg', 'vghvgh', 'vghvghg', 'k', '1', '0000-00-00', 'Male', '1230450', '12121204', 'jnhuigyyuhi@jhiouhj.hbujbh', 'hb jjkbnk', 'hb jjkbnk'),
(50, 'esfesdrtg', '', 'fg', 'fgd', 'f', 'cxv', 'cvx', 'q', '1998-01-08', 'Male', '1231232', '21144', 'RajatGargOfficial@dfxgdfx.gvhvbn', 'vbnbnvn', 'vbnbnvn'),
(56, 'dsf', 'sdg', 'dgs', 'gffd', 'fdg', 'fgfgg', 'kfgfdg', '1', '0000-00-00', 'Male', '1234567895', '4545454555', 'jtyjh@fgh.tghbnfghfg', 'gfhfgh', 'gfhfgh'),
(59, 'qw', 'qw', 'qw', 'qw', 'qw', 'qw', '1', '1', '0000-00-00', 'Male', '12365456', '123546', 'rahul.sagore@gmail.com11', 'hgjgh thgf', 'hgjgh thgf'),
(67, 'Rupesh', 'fasdf', 'Sendre', 'Rasg', 'jkgk', 'reg', 'rgw', 'q', '0000-00-00', 'Male', '1221', '1221', 'gargmahak93@gmail.com', 'dwdwed', 'dwdwed'),
(68, 'byuhuyhiu', '', 'fdhhf', 'fd', 'fdh', 'sdtergette', 'sdsd', 'sdsd', '0000-00-00', 'Male', '535325345', '352353255', 'rahj@jmkl.gbgfrreio', 'dsfd', 'dsfd');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`) VALUES
(1, 'Rajat Garg'),
(2, 'Rahul Sinha'),
(3, 'Rupam Wadia'),
(4, 'Ritika Barethia'),
(5, 'Sweta Rathoe'),
(6, 'Rahul Satal'),
(7, 'Shivshankar Pindoriya'),
(8, 'Priyesh Agarwal'),
(9, 'ruchi jadon'),
(10, 'raunak garud');
