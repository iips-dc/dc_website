-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 11:36 AM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `achievement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `s_no` (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_status`
--

CREATE TABLE IF NOT EXISTS `alumni_status` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` varchar(15) NOT NULL,
  `assigned_by` varchar(30) NOT NULL,
  `assigned_to` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `deadline` date NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `s_no` int(2) NOT NULL AUTO_INCREMENT,
  `organizer_id` varchar(15) NOT NULL,
  `organizer_name` varchar(15) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `organizer_id` (`organizer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dc_member_master`
--

CREATE TABLE IF NOT EXISTS `dc_member_master` (
  `member_id` varchar(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `mid_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(2) NOT NULL,
  `blood_group` varchar(2) NOT NULL,
  `local_address` varchar(40) NOT NULL,
  `parmanent_address` varchar(40) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `guardian_name` varchar(30) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `github_id` varchar(20) NOT NULL,
  `linkedin_id` varchar(30) NOT NULL,
  `sem_of_joining` varchar(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_member_master`
--

INSERT INTO `dc_member_master` (`member_id`, `first_name`, `mid_name`, `last_name`, `date_of_birth`, `gender`, `blood_group`, `local_address`, `parmanent_address`, `father_name`, `mother_name`, `guardian_name`, `course_name`, `github_id`, `linkedin_id`, `sem_of_joining`) VALUES
('it2k1132', 'sachin', '', 'tanwar', '0000-00-00', 'Fe', '', 'lkjhkjlhkljhlkhhkj', ',mhklhklhklm', 'r tanwar', '', 'nil', '', 'sa@gmail.com', 'linkedin', ''),
('it2k1133', 'sachin', '', 'tanwar', '0000-00-00', 'Ma', '', 'lkjhkjlhkljhlkhhkj', ',mhklhklhklm', 'ls tanwar', 'r tanwar', 'nil', '', 'sa@gmail.com', 'linkedin', ''),
('it2k1134', 'jeff', '', '', '0000-00-00', 'Ma', '', 'fghjfhgfghfghf', 'fdsfgfgfdmom', 'ls tanwar', 'mom', 'fgdgfdgf', '', '', 'linkedin', '6'),
('it2k1135', 'jeff', '', '', '0000-00-00', 'Ma', '', 'fghjfhgfghfghf', 'fdsfgfgfdmom', 'ls tanwar', 'mom', 'fgdgfdgf', '', '', 'sa@gmail.com', '6'),
('it2k1136', 'sachin', '', 'tanwar', '0000-00-00', 'Ma', 'b', 'vnbvnvv', 'bjhjhjgjhgk', 'ls tanwar', 'r tanwar', 'fgdgfdgf', '', 'sa@gmail.com', 'sa@gmail.com', '6'),
('it2k1137', 'sachin', '', 'tanwar', '0000-00-00', 'Ma', 'b', 'vnbvnvv', 'bjhjhjgjhgk', 'ls tanwar', 'r tanwar', 'fgdgfdgf', '', 'sa@gmail.com', 'sa@gmail.com', '6');

-- --------------------------------------------------------

--
-- Table structure for table `dc_member_regular`
--

CREATE TABLE IF NOT EXISTS `dc_member_regular` (
  `member_id` varchar(15) NOT NULL,
  `semester` int(2) NOT NULL,
  `current_position` varchar(20) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `parent_contact_no` varchar(15) DEFAULT NULL,
  `parent_email` varchar(20) DEFAULT NULL,
  `guardian_contact_no` varchar(15) DEFAULT NULL,
  `guardian_email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE IF NOT EXISTS `documentation` (
  `date_of_documentation` date NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `project_id` varchar(10) NOT NULL,
  `spmp_link` varchar(30) NOT NULL,
  `spmp_status` varchar(20) NOT NULL,
  `srs_link` varchar(30) NOT NULL,
  `srs_status` varchar(20) NOT NULL,
  `sdd_link` varchar(30) NOT NULL,
  `sdd_status` varchar(20) NOT NULL,
  `std_link` varchar(30) NOT NULL,
  `std_status` varchar(20) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`date_of_documentation`, `project_name`, `project_id`, `spmp_link`, `spmp_status`, `srs_link`, `srs_status`, `sdd_link`, `sdd_status`, `std_link`, `std_status`) VALUES
('0000-00-00', '', '', '', '', '', '', '', '', '', ''),
('2010-01-02', 'aaaa', 'a4', '', '', '', '', '', '', '', ''),
('0000-00-00', 'asasasasas', 'aaa11', '', '', '', '', '', '', '', ''),
('2014-12-13', 'aahhihihihihhi', 'ahah1', '', '', '', '', '', '', '', ''),
('1212-12-12', 'asdf', 'as', '', '', '', '', '', '', '', ''),
('0000-00-00', 'a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
('0000-00-00', 'dcsite', 'd1', 'nnsndkjfnfd', 'kjnkj', 'nkjnkj', 'nkjnkj', 'nknk', 'knkj', 'nkj', 'knnkj'),
('2014-07-11', 'disco', 'd11', 'spmp', 'spmp', 'srs', 'srs', 'sdd', 'sdd', 'std', 'std'),
('0000-00-00', 'dhen', 'dd1', '', '', '', '', '', '', '', ''),
('2011-11-11', 'gogoagone', 'ggg', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('0000-00-00', 'giveme', 'gm', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', 'aa'),
('2012-12-12', 'havefun', 'hh1', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aa'),
('2010-11-12', 'pppp', 'p', '', '', '', '', '', '', '', ''),
('0000-00-00', 'qaz', 'q', '', '', '', '', '', '', '', ''),
('2012-12-12', 'qwerty', 'qw', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q'),
('0000-00-00', 'xyz', 'x1', 'f', 'b', 'c', 'd', 'e', 'f', 'h', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `entrance`
--

CREATE TABLE IF NOT EXISTS `entrance` (
  `serialno` int(5) NOT NULL AUTO_INCREMENT,
  `date_of_joining` date NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `area_of_interest` varchar(100) NOT NULL,
  `basic_skills` varchar(100) NOT NULL,
  `current_address` varchar(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `std_code` varchar(10) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `github_id` varchar(30) NOT NULL,
  `fathers_name` varchar(30) NOT NULL,
  `fathers_contact` varchar(11) NOT NULL,
  `fathers_email` varchar(30) NOT NULL,
  `guardian_name` varchar(30) NOT NULL,
  `guardian_contact` varchar(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `percentage_10th` varchar(10) NOT NULL,
  `percentage_12th` varchar(11) NOT NULL,
  `course` varchar(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `cgpa` varchar(11) NOT NULL,
  `online_courses` varchar(100) NOT NULL,
  `project_name` varchar(11) NOT NULL,
  `project_type` varchar(20) NOT NULL,
  `project_duration` datetime NOT NULL,
  `project_desc` varchar(50) NOT NULL,
  `reference_catg` varchar(30) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `why_choose` varchar(50) NOT NULL,
  PRIMARY KEY (`serialno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=207 ;

--
-- Dumping data for table `entrance`
--

INSERT INTO `entrance` (`serialno`, `date_of_joining`, `first_name`, `middle_name`, `last_name`, `birthday`, `gender`, `bloodgroup`, `area_of_interest`, `basic_skills`, `current_address`, `permanent_address`, `country_code`, `std_code`, `mobile_no`, `student_email`, `github_id`, `fathers_name`, `fathers_contact`, `fathers_email`, `guardian_name`, `guardian_contact`, `school_name`, `percentage_10th`, `percentage_12th`, `course`, `semester`, `cgpa`, `online_courses`, `project_name`, `project_type`, `project_duration`, `project_desc`, `reference_catg`, `reference`, `why_choose`) VALUES
(165, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(166, '0000-00-00', 'jennifer', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 'Friend', '', ''),
(167, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(168, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(169, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(170, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(171, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(172, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(173, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(174, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(175, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(176, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(177, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(178, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(179, '0000-00-00', '', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', '', '', 'fwdfewfewfe@g', 'sdsdswq@dd', '', '', 'dasdsad@g', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 'Friend', '', ''),
(180, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(181, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(182, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(183, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(184, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(185, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(186, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(187, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(188, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(189, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(190, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(191, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(192, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(193, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(194, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(195, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(196, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(197, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(198, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(199, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(200, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(201, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(202, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(203, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(204, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(205, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', ''),
(206, '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` varchar(10) NOT NULL,
  `type_of_event` varchar(20) NOT NULL,
  `organizer_id` varchar(10) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` time NOT NULL,
  `material_link` varchar(50) NOT NULL,
  `summary_link` varchar(50) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `type_of_event` (`type_of_event`),
  KEY `type_of_event_2` (`type_of_event`),
  KEY `organizer_id` (`organizer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosting_domain`
--

CREATE TABLE IF NOT EXISTS `hosting_domain` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `hosting` varchar(30) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `url` varchar(40) NOT NULL,
  `doe` varchar(30) NOT NULL,
  `dor` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `issued_resource_to`
--

CREATE TABLE IF NOT EXISTS `issued_resource_to` (
  `resource_id` varchar(15) NOT NULL,
  `issue_by` varchar(30) NOT NULL,
  `issue_to` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `submission_date` date NOT NULL,
  `submission_time` date NOT NULL,
  `detail` varchar(50) NOT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `reason` varchar(20) NOT NULL,
  `approved_by` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `moocs`
--

CREATE TABLE IF NOT EXISTS `moocs` (
  `course_id` varchar(15) NOT NULL,
  `provider_name` varchar(30) NOT NULL,
  `link` varchar(40) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE IF NOT EXISTS `organizer` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `organizer_id` varchar(15) NOT NULL,
  `member_id` varchar(15) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `problem_solved_by`
--

CREATE TABLE IF NOT EXISTS `problem_solved_by` (
  `problem_id` varchar(15) NOT NULL,
  `problem_solved_by` varchar(30) NOT NULL,
  PRIMARY KEY (`problem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `date_of_start` date NOT NULL,
  `project_id` varchar(10) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `project_type` varchar(20) NOT NULL,
  `project_leader` varchar(30) NOT NULL,
  `team_members` varchar(100) NOT NULL,
  `project_status` varchar(30) NOT NULL,
  `team_id` varchar(10) NOT NULL,
  `dc_page_link` varchar(30) NOT NULL,
  `github_page_link` varchar(30) NOT NULL,
  `project_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`date_of_start`, `project_id`, `project_name`, `project_type`, `project_leader`, `team_members`, `project_status`, `team_id`, `dc_page_link`, `github_page_link`, `project_desc`) VALUES
('0000-00-00', '', 'dc site', '', '', '', '', '', '', '', ''),
('0000-00-00', '1', 'abc', 'web', 'jeff', 'sachin, pulkit', 'completed', 'a', '', '', ''),
('0000-00-00', '2', 'xyz', 'app', 'jenny', 'jeff, jenny', 'anaylysis', 'b', '', '', ''),
('0000-00-00', '4', 'bbb', 'web', 'dev', 'dev, abhi', 'coding stage', 'd', '', '', ''),
('2014-07-11', 'd12', 'disco', 'inhouse', 'jeff', 'bakka, meda, jeff', 'complete', 'jj1', 'dofoddj.com', 'ffsdhfshfsdfh.com', 'good'),
('0000-00-00', 'ddddd', 'jjjjj', 'noooo', 'me', '', '', '', '', '', ''),
('0000-00-00', 'dsd', 'fddf', 'ffwer', 'fdsff', 'wfwefdsffwewew', 'wwdad', 'fdsfds', 'wwew', 'efdsfdsfds', 'wewqewe'),
('0000-00-00', 'p1', 'jeffsite', 'inhouse', '', '', 'designing', 't1', 'dcsite.com', 'www.github.com', ''),
('0000-00-00', 'p2', 'love and war', 'inhouse', 'me', 'a,b,c', 'complete', 't2', 'love.com', 'love.github', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_review`
--

CREATE TABLE IF NOT EXISTS `project_review` (
  `project_id` varchar(20) NOT NULL,
  `project_name` varchar(25) NOT NULL,
  `review_date` date NOT NULL,
  `link_of_review` varchar(50) NOT NULL,
  `project_status` varchar(30) NOT NULL,
  `review_by` varchar(30) NOT NULL,
  `review` varchar(100) NOT NULL,
  PRIMARY KEY (`project_id`),
  KEY `project_id` (`project_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_review`
--

INSERT INTO `project_review` (`project_id`, `project_name`, `review_date`, `link_of_review`, `project_status`, `review_by`, `review`) VALUES
('', '', '0000-00-00', '', '', '', ''),
('a2', 'dd', '0000-00-00', '', '', '', ''),
('aa', 'jennifer', '0000-00-00', '', 'complete', '', 'good'),
('az', 'kkkkk', '0000-00-00', '', 'llll', '', 'llll'),
('d1', 'dream', '0000-00-00', '', 'complete', '', 'good'),
('d111', 'disco', '2014-07-11', 'link', 'complete', 'me', 'goodjob'),
('dx1', 'dcsite', '0000-00-00', 'www.google.com', 'designing', '', 'very good'),
('jj', 'kk', '0000-00-00', 'nn', 'll', '', 'oo'),
('p1', 'dc', '0000-00-00', '', 'designning', '', 'not up to mark'),
('p5', 'jeff', '0000-00-00', '', 'half', '', 'great'),
('paz', 'nnn', '0000-00-00', 'fffff.fff', 'gone', 'you', 'go to hell'),
('pzz1', 'have fun', '2012-12-12', 'a', 'complete', 'me', 'good'),
('x2', 'dc site', '0000-00-00', 'www.google.com', 'complete', '', 'dsadsdsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE IF NOT EXISTS `project_status` (
  `status_id` varchar(15) NOT NULL,
  `project_id` varchar(15) NOT NULL,
  `status_name` varchar(30) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `resource_id` varchar(15) NOT NULL,
  `resource_name` varchar(30) NOT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `responsibility_duration`
--

CREATE TABLE IF NOT EXISTS `responsibility_duration` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `assigned_duty` varchar(30) NOT NULL,
  `resigned_duty` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `test_type` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles_and_responsibility`
--

CREATE TABLE IF NOT EXISTS `roles_and_responsibility` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `system_information`
--

CREATE TABLE IF NOT EXISTS `system_information` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `system_name` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `ram_type` varchar(20) NOT NULL,
  `hdd_capacity` varchar(20) NOT NULL,
  `moniter_type` varchar(20) NOT NULL,
  `lan` varchar(5) NOT NULL,
  `access` varchar(10) NOT NULL,
  `os_installed` varchar(20) NOT NULL,
  `sw_details` varchar(50) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE IF NOT EXISTS `team_members` (
  `s_no` int(2) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(15) NOT NULL,
  `member_id` varchar(15) NOT NULL,
  `designation` varchar(20) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technical_and_motivational`
--

CREATE TABLE IF NOT EXISTS `technical_and_motivational` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technical_assistance`
--

CREATE TABLE IF NOT EXISTS `technical_assistance` (
  `problem_id` varchar(15) NOT NULL,
  `problem_by` varchar(30) NOT NULL,
  `problem_detail` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `solution` varchar(30) NOT NULL,
  PRIMARY KEY (`problem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
