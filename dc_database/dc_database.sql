-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 06:05 PM
-- Server version: 5.5.38
-- PHP Version: 5.4.33-2+deb.sury.org~precise+1

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
-- Table structure for table `dc_members`
--

CREATE TABLE IF NOT EXISTS `dc_members` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `members_email` varchar(250) NOT NULL,
  `duty` varchar(150) NOT NULL,
  PRIMARY KEY (`s_no`),
  UNIQUE KEY `members_email` (`members_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `dc_members`
--

INSERT INTO `dc_members` (`s_no`, `members_email`, `duty`) VALUES
(1, 'shaligram.prajapat@gmail.com', 'Incharge'),
(2, 'ankit.kul1890@gmail.com', 'co-ordinator'),
(3, 'akhan.iipsmca@gmail.com', 'co-ordinator'),
(14, 'akanksha.ashi94@gmail.com', 'co-ordinator'),
(15, 'rahul.sagore@gmail.com', 'co-ordinator'),
(16, 'nitesh.mishra143@gmail.com', 'co-ordinator'),
(17, 'raikwar.sunny23@gmail.com', 'co-ordinator'),
(18, 'komal.rathore40@gmail.com', 'co-ordinator'),
(19, 'bediyadaviips@gmail.com', 'co-ordinator'),
(24, 'pulkitvaishnav35@gmail.com', ''),
(25, 'akshay29051994@gmail.com', '');

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
-- Table structure for table `dc_member_social`
--

CREATE TABLE IF NOT EXISTS `dc_member_social` (
  `facebook` varchar(200) NOT NULL,
  `googleplus` varchar(200) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `blog` varchar(200) NOT NULL,
  `github` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `facebook` (`facebook`),
  UNIQUE KEY `github` (`github`)
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
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_of_event` varchar(20) NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` int(2) NOT NULL,
  `material_link` varchar(200) NOT NULL,
  `summary_link` varchar(200) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `type_of_event` (`type_of_event`),
  KEY `type_of_event_2` (`type_of_event`),
  KEY `organizer_id` (`organizer_id`),
  KEY `topic` (`topic`),
  KEY `topic_2` (`topic`),
  KEY `topic_3` (`topic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `type_of_event`, `organizer_id`, `topic`, `venue`, `date`, `time`, `duration`, `material_link`, `summary_link`) VALUES
(1, 'presentation ', 90, 'jquery', 'development centre ', '2014-07-02', '19:19:35', 0, '', ''),
(2, 'Presentation', 5, 'rgwrr', 'rrwtw', '2014-08-07', '00:00:00', 0, '', ''),
(3, ''''';l;''l', 0, ';l'';l'';l', 'l''l'';l', '0000-00-00', '00:00:00', 0, ';l'';l'';', 'l'';l'';'),
(4, ''''';l;''l', 1, '', 'l''l'';l', '2014-08-06', '00:00:00', 50, ';l'';l'';', 'l'';l'';'),
(5, 'Seminar', 5, 'lje;wjr', 'indore', '2014-08-07', '00:00:10', 50, '2014-08-29', 'jlrklrlkrj'),
(6, '', 5, '', '', '0000-00-00', '00:00:00', 0, '', ''),
(7, 'OutHousing', 6, 'java', 'indore', '2014-08-28', '00:00:10', 50, 'elkjljkl', 'jlrklrlkrj'),
(8, 'OutHousing', 6, '', '', '0000-00-00', '00:00:00', 0, '', '');

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
  `description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `knowledge_center`
--

INSERT INTO `knowledge_center` (`s_no`, `title`, `date`, `link`, `description`) VALUES
(1, 'a', '2014-07-01', 'c', 'efef'),
(2, 'b', '2014-07-02', 'cee', 'eecfef'),
(3, 'Ajax', '2014-07-10', 'b', 'efewfewf'),
(4, 'Ajax2', '2014-07-10', 'efwefwe', 'dsvscs'),
(5, 'Jquery', '2014-07-10', 'e.fnewk.nk;', 'jsdf;eljf'),
(6, 'Jquery', '2014-07-10', 'e.fnewk.nk;', 'jsdf;eljf'),
(7, 'Ajax3', '2014-07-10', 'dkfj', 'f;lweflwe;j'),
(8, 'Ajax', '2014-07-10', 'dwqdw', 'wqwqfqwf'),
(9, 'wwqdqw', '2014-07-10', 'efeqfeq', 'eqfeqfeq'),
(10, 'wdkwql', '2014-07-10', 'eql;qewjf', ';efl;qej'),
(11, 'Ajax5', '2014-07-10', ',dkqnwa,', 'lkjefk;jqe`'),
(12, 'wqdqwq', '2014-07-10', 'qwefqwf', 'wqefqef'),
(13, 'java ', '2014-07-10', 'kwdk;j', 'kekfek'),
(14, 'ajax', '2014-07-10', 'wdwd', 'wdqwd'),
(15, 'bootstrap', '2014-07-10', 'wefwekj', 'jer;keqj'),
(16, '"goog"le', '2014-07-10', 'qadqwdqw', 'dqwdwqdwq'),
(17, 'gooo', '2014-07-10', 'ejk;qej', 'jq;jq;'),
(18, 'zzzzzzzz', '2014-07-10', 'ewfn', 'fwfekjfewjwe'),
(19, 'awllw', '2014-07-10', 'kw;lwjj', ';jwqljqd'),
(20, 'OOOOO', '2014-07-10', 'WKDWDK', 'K;WDL;DK'),
(21, '"a"', '2014-07-10', 'dwdwd', 'wdwdw'),
(22, 'Ajax', '2014-07-10', 'g', 'jef;lje'),
(23, 'eeeee', '2014-07-10', 'aalaa', 'elef;kta'),
(24, 'Ajax', '2014-07-10', 'pe;fje;lj', 'poj;lgjrgm'),
(25, 'Ajax', '2014-07-10', 'dwqdw', 'wqdwq'),
(26, 'java', '2014-07-10', ';jgsg;lj', 'jf;wejfwe;lm'),
(27, 'java', '2014-07-10', ';jgsg;lj', 'jf;wejfwe;lm'),
(28, 'Jquery', '2014-07-10', 'qejfqef', 'ndlkndnwknew'),
(29, 'java', '2014-07-10', 'hfelhfe', 'heflhfelhf'),
(30, 'Ajax', '2014-07-10', 'lfekafeqkf', 'hlhfhf'),
(31, 'Ajax', '2014-07-10', 'lmfefm', ';jef;j'),
(32, 'javascript', '2014-07-10', 'kejfekjf', 'lfel;h'),
(33, 'Jquery', '2014-07-10', 'lkjkjf', 'jkfdkjf;kjm'),
(34, 'huge', '2014-07-10', 'lkjdkj', ''),
(35, 'Ajax', '2014-07-10', 'wqdwl;', 'kjw;djw'),
(36, 'aajjjaaxx', '2014-07-10', 'wkdjw;kj', 'kjwd;qwj'),
(37, '"a"', '2014-07-10', ';eklfelk', 'kfekfe;wk'),
(38, 'Ajax', '2014-07-10', 'b', 'as'),
(39, 'a ', '2014-07-10', 'b', 'c'),
(40, 'asus', '2014-07-10', 'jdkjk', 'jdljdwj'),
(41, '"a"', '2014-07-10', 'wdj;wjdj', 'kjwdjdklj'),
(42, 'Angular Js', '2014-07-10', 'xyz', 'q'),
(43, 'bootstrap', '2014-07-10', 'dwqwdww', 'wwdwd'),
(44, 'bootstrap', '2014-07-10', 'dwqwdww', 'wwdwd'),
(45, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(46, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(47, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(48, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(49, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(50, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(51, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(52, 'knockout', '2014-07-10', 'dskljdkj', 'kdkfj;'),
(53, 'aaaaaaaaaaaaaa', '2014-07-15', 'bb', 'cccccc'),
(54, '', '0000-00-00', '', ''),
(55, 'dgdsdh''gwtw''''gerre', '0000-00-00', '', ''),
(56, 'dgdsdh''gwtw''gh''''''''fgj''j''jj''jfj''jfj''jgj''fj''''''gerre', '0000-00-00', '', ''),
(57, 'dgdsdh''gwt''''''''ghgf''''''''''''''''''''''''''''''''''''w''gh''''''''fgj''j''jj''jfj''jfj''jgj''fj''''''gerre', '0000-00-00', '', ''),
(58, '""eegedede" ''efefefdef''', '2014-07-02', '''sxgrsgr'' "gdgdeg"', '''gsgxdgxr'' "esgsdgsx"'),
(59, 'pulkit', '2014-07-15', 'vaishnav', 'software developer at development center iips davv indore'),
(60, 'rahul', '2014-07-15', 'satal ', 'from bankhedi'),
(61, 'rahul', '2014-07-15', 'satal ', 'from bankhedi'),
(62, 'rahul', '2014-07-15', 'satal ', 'from bankhedi'),
(63, 'rahul', '2014-07-15', 'satal ', 'from bankhedi'),
(64, 'wqkdjkwj', '2014-07-15', 'kjlkejfkl', 'kdjlkqj'),
(65, 'wqkdjkwj', '2014-07-15', 'kjlkejfkl', 'kdjlkqj'),
(66, 'pulkit', '2014-07-15', 'vaishnav', 'from ujjain'),
(67, 'pulkit', '2014-07-15', 'vaishnav', 'from ujjain'),
(68, 'Angular Js', '2014-07-15', 'wqqw;ke;``', ';kwjd;wdj'),
(69, 'Angular Js', '2014-07-15', 'wqqw;ke;``', ';kwjd;wdj'),
(70, 'pulkit', '2014-07-15', 'kishandas', 'vaishnav'),
(71, 'pulkit', '2014-07-15', 'kishandas', 'vaishnav'),
(72, 'Ajax', '2014-07-25', 'msdlsdl;sdl;', 'sjd;sldj efjekwfj efwjf;ejf'),
(73, 'Veerjaara', '2014-07-25', 'by karan joahar', 'shahrujhas sdklj slkj akljs'),
(74, 'awaara', '2014-07-25', 'of shammi kapoor', 'hai apna dil to awaara '),
(75, 'Veerjaara', '2014-07-25', 'by karan joahar', 'shahrujhas sdklj slkj akljs');

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
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(30) NOT NULL,
  `date_of_starting` date NOT NULL,
  `link` varchar(40) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `project_description` text NOT NULL,
  `project_leader` varchar(30) NOT NULL,
  `team_id` varchar(10) NOT NULL,
  `project_status` varchar(200) NOT NULL,
  `dc_page_link` varchar(30) NOT NULL,
  `github_page_link` varchar(30) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_type`, `project_description`, `project_leader`, `team_id`, `project_status`, `dc_page_link`, `github_page_link`) VALUES
('', '', '', '', '', '', '', '', ''),
('p01', 'IIPS-Website', 'Inhouse', 'The current new website of IIPS . The aim is to keep the site usable, decentralized, and mobile responsive with different kinds of institutional services for the different kinds of users of the IIPS. ', 'Ankit Kulkarni', '', '', 'iips.redirect.me', ''),
('p02', 'DC_Website', 'Inhouse', '', '', '', '', '', ''),
('ssssss', 'aaaaaaaa', 'sssssss', 'ssssssssss', '', 'swssssssss', 'sssssssssss', '', 'sssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `project_review`
--

CREATE TABLE IF NOT EXISTS `project_review` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(15) NOT NULL,
  `project_name` varchar(150) NOT NULL,
  `project_status` varchar(150) NOT NULL,
  `review_date` date NOT NULL,
  `review_by` varchar(150) NOT NULL,
  `link_of_review` varchar(50) NOT NULL,
  `review` varchar(200) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `project_review`
--

INSERT INTO `project_review` (`s_no`, `project_id`, `project_name`, `project_status`, `review_date`, `review_by`, `link_of_review`, `review`) VALUES
(1, 'pro-1', 'astra', 'pending', '2014-08-06', 'EFKLJELKWJWE', 'LFKSJKLFJ', 'LKDJFKLSJKL'),
(2, '', '', '', '0000-00-00', 'review_by', '', ''),
(3, '', '', '', '0000-00-00', 'review_by', '', 'jdsflkdsjfklds'),
(4, '', '', '', '0000-00-00', 'review_by', '', ''),
(5, '', '', '', '0000-00-00', 'review_by', '', ''),
(6, 'aa', 'bbCC', 'cc', '2014-08-22', 'review_by', '', 'ff'),
(7, 'r;grwklgj', 'heehfwejh', 'qjqejheqjkh', '2014-08-08', 'review_by', '', 'hwjhwejk');

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
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `tags` varchar(30) NOT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `s_id`, `tags`) VALUES
(1, 4, 'a'),
(2, 4, 'b'),
(4, 10, 'as'),
(5, 10, 'asus'),
(6, 3, 'p'),
(7, 3, 'q'),
(12, 40, 'tag1'),
(13, 40, 'tag2'),
(14, 40, 'tag3'),
(15, 68, ';qjfq;lj'),
(16, 68, 'e;fe;l'),
(17, 68, ''),
(18, 70, 'runija'),
(19, 70, 'ujjain'),
(20, 70, ''),
(21, 70, 'runija'),
(22, 70, 'ujjain'),
(24, 73, 'veer'),
(25, 73, 'jaaara'),
(26, 74, 'tum'),
(27, 74, 'ho'),
(28, 74, 'hum'),
(29, 74, 'hai'),
(30, 73, 'veer'),
(31, 73, 'jaaara');

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

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `knowledge_center` (`s_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
