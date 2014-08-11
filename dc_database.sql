-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2014 at 11:38 PM
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
-- Table structure for table `daily_log`
--

CREATE TABLE IF NOT EXISTS `daily_log` (
  `date` date NOT NULL,
  `log` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `daily_log`
--

INSERT INTO `daily_log` (`date`, `log`, `link`, `s_no`, `member_id`) VALUES
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 1, 'it-2k11-25'),
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 2, 'it-2k11-25'),
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 3, 'it-2k11-25'),
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 4, 'it-2k11-25'),
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 5, 'it-2k11-25'),
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 6, 'it-2k11-25'),
('2014-04-18', 'hello today I am on Leave', 'www.google.com', 7, 'it-2k11-25'),
('0000-00-00', 'hello today I am on Leave', 'www.google.com', 8, 'it-2k11-25'),
('0000-00-00', 'hello today I am on Leave', 'www.google.com', 9, 'it-2k11-25'),
('2014-04-16', 'hello today I am on Leave', 'www.google.com', 10, 'it-2k11-25'),
('2014-04-03', 'hello today I am on Leave', 'www.google.com', 13, 'it-2k11-25'),
('2014-04-19', 'hello', 'www.google.com', 14, 'it-2k11-32'),
('2014-04-22', 'k', '', 15, 'it-2k11-25'),
('2014-04-16', 'hello today I am on Leave', 'ekfm;lmelme', 16, 'it-2k11-25'),
('2014-04-09', 'ek;j;ef;', 'sjdhjlsdhj', 17, 'it-2k11-32'),
('2014-05-01', 'hello today I am on Leave', 'k', 20, 'it-2k11-25'),
('2014-04-17', 'pppppppp', 'kkkk', 21, 'it-2k11-25'),
('2014-04-12', 'k', 'k', 23, 'it-2k11-32'),
('2014-04-02', 'hello today I am on Leave', 'www.google.com', 29, 'it-2k11-25'),
('2014-04-12', 'k', 'mf', 30, 'it-2k11-25'),
('2014-04-16', 'hello today I am on Leave', '', 38, 'it-2k11-25'),
('2014-05-24', 'hello today I am on Leave', 'www.google.com', 39, 'it-2k11-25'),
('2014-04-01', 'hello today I am on Leave', 'www.google.com', 40, 'it-2k11-25'),
('2014-04-05', 'hello today I am on Leave', 'www.google.com', 41, 'it-2k11-25'),
('2014-06-06', 'hello today I am on Leave', 'www.google.com', 42, 'it-2k11-25'),
('2014-06-06', 'hello today I am on Leave', 'www.google.com', 43, 'it-2k11-25'),
('2014-04-01', 'k', 'k', 44, 'it-2k11-25'),
('2014-04-05', 'k', 'k', 45, 'it-2k11-32'),
('0000-00-00', 'k', '', 46, 'it-2k11-25'),
('2014-04-05', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '', 50, 'it-2k11-25'),
('0000-00-00', 'aaaaaaaaaaaaaaaaaaaa', '', 51, 'it-2k11-25');

-- --------------------------------------------------------

--
-- Table structure for table `dc_member_master`
--

CREATE TABLE IF NOT EXISTS `dc_member_master` (
  `member_id` varchar(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
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
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dc_member_master`
--

INSERT INTO `dc_member_master` (`member_id`, `first_name`, `mid_name`, `last_name`, `date_of_birth`, `gender`, `blood_group`, `local_address`, `parmanent_address`, `father_name`, `mother_name`, `guardian_name`, `course_name`, `github_id`, `linkedin_id`, `sem_of_joining`, `email`) VALUES
('it-2k11-25', 'Pulkit      ', '', 'vaishnav', '1993-12-05', 'ma', '  ', 'localaddress', '   village: runija, dist: ujjain   ', 'kishandas vaishnav      ', 'mahima vaishnav      ', '  ', '   m.tech.', '   pulkitvaishnav   ', '   pulkit   ', '        si', 'pulkitvaishnav35@gmail.com'),
('it-2k11-32', 'kjjlj', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'sachintanwar69@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `entrance`
--

CREATE TABLE IF NOT EXISTS `entrance` (
  `s_no` int(11) NOT NULL,
  `date_of_joining` date NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `area_of_intrest` varchar(100) NOT NULL,
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
  `why_choose` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrance`
--

INSERT INTO `entrance` (`s_no`, `date_of_joining`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `blood_group`, `area_of_intrest`, `basic_skills`, `current_address`, `permanent_address`, `country_code`, `std_code`, `mobile_no`, `student_email`, `github_id`, `fathers_name`, `fathers_contact`, `fathers_email`, `guardian_name`, `guardian_contact`, `school_name`, `percentage_10th`, `percentage_12th`, `course`, `semester`, `cgpa`, `online_courses`, `project_name`, `project_type`, `project_duration`, `project_desc`, `reference_catg`, `reference`, `why_choose`) VALUES
(122234, '0000-00-00', 'j', 'hardy', 'January', '0000-00-00', '1950', 'Male', 'b', 'cricket, football', 'html,css', 'dhar', 'indore', '91', '0731', '895932', 'sachin@gmail.com', 'kfhdkhkh@kjhfkjh', 'jhfl', '68768', 'jg@jhgjg', 'gjgjhgjh', '', 'fgkfkjhfkj', '23', '34', 'mtech', '6', '56', 'ndkjlshhfkl', 'jdnskj', '0000-00-00 00:00:00', 'lkjlkjlkjljlkjlkj', 'Friend', 'kjkjhkjfhkj', 'hfjkdkfhkjhkj'),
(122234, '0000-00-00', 'j', 'hardy', 'January', '0000-00-00', '1950', 'Male', 'b', 'cricket, football', 'html,css', 'dhar', 'indore', '91', '0731', '895932', 'sachin@gmail.com', 'kfhdkhkh@kjhfkjh', 'jhfl', '68768', 'jg@jhgjg', 'gjgjhgjh', '', 'fgkfkjhfkj', '23', '34', 'mtech', '6', '56', 'ndkjlshhfkl', 'jdnskj', '0000-00-00 00:00:00', 'lkjlkjlkjljlkjlkj', 'Friend', 'kjkjhkjfhkj', 'hfjkdkfhkjhkj'),
(122234, '0000-00-00', 'j', 'hardy', 'January', '0000-00-00', '1950', 'Male', 'b', 'cricket, football', 'html,css', 'dhar', 'indore', '91', '0731', '895932', 'sachin@gmail.com', 'kfhdkhkh@kjhfkjh', 'jhfl', '68768', 'jg@jhgjg', 'gjgjhgjh', '', 'fgkfkjhfkj', '23', '34', 'mtech', '6', '56', 'ndkjlshhfkl', 'jdnskj', '0000-00-00 00:00:00', 'lkjlkjlkjljlkjlkj', 'Friend', 'kjkjhkjfhkj', 'hfjkdkfhkjhkj'),
(122234, '0000-00-00', 'j', 'hardy', 'January', '0000-00-00', '1950', 'Male', 'b', 'cricket, football', 'html,css', 'dhar', 'indore', '91', '0731', '895932', 'sachin@gmail.com', 'kfhdkhkh@kjhfkjh', 'jhfl', '68768', 'jg@jhgjg', 'gjgjhgjh', '', 'fgkfkjhfkj', '23', '34', 'mtech', '6', '56', 'ndkjlshhfkl', 'jdnskj', '0000-00-00 00:00:00', 'lkjlkjlkjljlkjlkj', 'Friend', 'kjkjhkjfhkj', 'hfjkdkfhkjhkj'),
(122234, '0000-00-00', 'j', 'hardy', 'January', '0000-00-00', '1950', 'Male', 'b', 'cricket, football', 'html,css', 'dhar', 'indore', '91', '0731', '895932', 'sachin@gmail.com', 'kfhdkhkh@kjhfkjh', 'jhfl', '68768', 'jg@jhgjg', 'gjgjhgjh', '', 'fgkfkjhfkj', '23', '34', 'mtech', '6', '56', 'ndkjlshhfkl', 'jdnskj', '0000-00-00 00:00:00', 'lkjlkjlkjljlkjlkj', 'Friend', 'kjkjhkjfhkj', 'hfjkdkfhkjhkj'),
(0, '0000-00-00', '', '', 'January', '0000-00-00', '1950', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 'Friend', '', 'hero'),
(0, '0000-00-00', 'clhk', 'dnsn', 'January', '0000-00-00', '1950', 'Male', '', 'kwnd;knd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', 'Friend', '', ''),
(0, '0000-00-00', '$midname', '$lastname', '$month', '0000-00-00', '$year', '$gender', '$bloodgroup', '$interest', '$skills', '$currentaddress', '$permanent', '$countryco', '$stdcode', '$studmobile', '$studemail', '$github', '$fathername', '$fathermobile', '$fatheremail', '$guardianna', '$guardianmobile', '$schoolnam', '$tenthper', '$twealthper', '$course', '$semester', '$cgpa', '$onlinecour', '$projectname', '0000-00-00 00:00:00', '$projectdescr', '$knowdc', '$referencename', '$whychoose'),
(4, '0000-00-00', 'ddd', 'ffff', 'January', '0000-00-00', '1950', 'Male', '', 'ssssss', '', 'jjjjj', '', '656356', '21.313', '213132132', 'pu@gmail.com', 'hh@email', 'jjlhl', '', 'pu@gmail.com', '546565', '21323232', 'ddd', '74', '47', 'm.tech', '6', '7.22', '', '', '0000-00-00 00:00:00', '', 'Friend', '', ''),
(1, '0000-00-00', 'ddd', 'ffff', 'January', '0000-00-00', '1950', 'Male', '', 'ssssss', '', 'jjjjj', '', '656356', '21.313', '213132132', 'pu@gmail.com', 'hh@email', 'jjlhl', '', 'pu@gmail.com', '546565', '21323232', 'ddd', '74', '47', 'm.tech', '6', '7.22', '', '', '0000-00-00 00:00:00', '', 'Friend', '', '');

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
-- Table structure for table `knowledge_center`
--

CREATE TABLE IF NOT EXISTS `knowledge_center` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(150) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `knowledge_center`
--

INSERT INTO `knowledge_center` (`s_no`, `title`, `date`, `link`, `description`) VALUES
(44, 'Angular Js', '2014-07-05', 'xyz', '#google #yahoo'),
(45, 'bootstrap', '2014-07-05', 'abc', '#html_library'),
(46, 'Ruby', '2014-07-05', 'pqr', '#Ruby is a #programming_language'),
(47, 'Ajax', '2014-07-06', 'http://www.w3schools.com/ajax/default.ASP', 'Asynchronous javascript and XML'),
(48, 'Ajax', '2014-07-06', 'http://www.w3schools.com/ajax/default.ASP', 'Asynchronous javascript and XML'),
(49, 'Ajax', '2014-07-06', 'http://www.w3schools.com/ajax/default.ASP', 'Asynchronous javascript and XML');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_center_tags`
--

CREATE TABLE IF NOT EXISTS `knowledge_center_tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `tags` varchar(50) NOT NULL,
  PRIMARY KEY (`tag_id`,`title`),
  KEY `s_no` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `knowledge_center_tags`
--

INSERT INTO `knowledge_center_tags` (`tag_id`, `title`, `tags`) VALUES
(59, 'Angular Js', '#google'),
(60, 'Angular Js', '#yahoo'),
(61, 'bootstrap', '#html_library'),
(62, 'bootstrap', ''),
(63, 'Ruby', '#Ruby'),
(64, 'Ruby', '#programming_language'),
(65, 'Ajax', ''),
(66, 'Ajax', ''),
(67, 'Ajax', ''),
(68, 'Ajax', ''),
(69, 'Ajax', ''),
(70, 'Ajax', '');

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
  `project_id` varchar(10) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `project_type` varchar(20) NOT NULL,
  `Project Description` text NOT NULL,
  `project_leader` varchar(30) NOT NULL,
  `team_members` varchar(100) NOT NULL,
  `team_id` varchar(10) NOT NULL,
  `dc_page_link` varchar(30) NOT NULL,
  `github_page_link` varchar(30) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_type`, `Project Description`, `project_leader`, `team_members`, `team_id`, `dc_page_link`, `github_page_link`) VALUES
('p01', 'IIPS-Website', 'Inhouse', 'The current new website of IIPS . The aim is to keep the site usable, decentralized, and mobile responsive with different kinds of institutional services for the different kinds of users of the IIPS. ', 'Ankit Kulkarni', 'Ankit Kulkarni, Chitrank Dixit', '', 'iips.redirect.me', ''),
('p02', 'DC_Website', 'Inhouse', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_review`
--

CREATE TABLE IF NOT EXISTS `project_review` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(15) NOT NULL,
  `review_date` date NOT NULL,
  `team_id` varchar(15) NOT NULL,
  `link_of_review` varchar(50) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily_log`
--
ALTER TABLE `daily_log`
  ADD CONSTRAINT `daily_log_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `dc_member_master` (`member_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
