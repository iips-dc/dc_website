-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2014 at 03:50 PM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DC_DATABASE`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACHIEVEMENTS`
--

CREATE TABLE IF NOT EXISTS `ACHIEVEMENTS` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `achievement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ALUMNI`
--

CREATE TABLE IF NOT EXISTS `ALUMNI` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `s_no` (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ALUMNI_STATUS`
--

CREATE TABLE IF NOT EXISTS `ALUMNI_STATUS` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ASSIGNMENT`
--

CREATE TABLE IF NOT EXISTS `ASSIGNMENT` (
  `assignment_id` varchar(15) NOT NULL,
  `assigned_by` varchar(30) NOT NULL,
  `assigned_to` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `deadline` date NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table ` ATTENDENCE`
--

CREATE TABLE IF NOT EXISTS ` ATTENDENCE` (
  `s_no` int(2) NOT NULL AUTO_INCREMENT,
  `organizer_id` varchar(15) NOT NULL,
  `organizer_name` varchar(15) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `organizer_id` (`organizer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `DC_MEMBER_MASTER`
--

CREATE TABLE IF NOT EXISTS `DC_MEMBER_MASTER` (
  `member_id` varchar(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `DC_MEMBER_REGULAR`
--

CREATE TABLE IF NOT EXISTS `DC_MEMBER_REGULAR` (
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
-- Table structure for table `DOCUMENTATION`
--

CREATE TABLE IF NOT EXISTS `DOCUMENTATION` (
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
-- Table structure for table `EVENTS`
--

CREATE TABLE IF NOT EXISTS `EVENTS` (
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
-- Table structure for table `HOSTING_DOMAIN`
--

CREATE TABLE IF NOT EXISTS `HOSTING_DOMAIN` (
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
-- Table structure for table `ISSUED_RESOURCE_TO`
--

CREATE TABLE IF NOT EXISTS `ISSUED_RESOURCE_TO` (
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
-- Table structure for table `LEAVE`
--

CREATE TABLE IF NOT EXISTS `LEAVE` (
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
-- Table structure for table `MOOCS`
--

CREATE TABLE IF NOT EXISTS `MOOCS` (
  `course_id` varchar(15) NOT NULL,
  `provider_name` varchar(30) NOT NULL,
  `link` varchar(40) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ORGANIZER`
--

CREATE TABLE IF NOT EXISTS `ORGANIZER` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `organizer_id` varchar(15) NOT NULL,
  `member_id` varchar(15) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `PROBLEM_SOLVED_BY`
--

CREATE TABLE IF NOT EXISTS `PROBLEM_SOLVED_BY` (
  `problem_id` varchar(15) NOT NULL,
  `problem_solved_by` varchar(30) NOT NULL,
  PRIMARY KEY (`problem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PROJECTS`
--

CREATE TABLE IF NOT EXISTS `PROJECTS` (
  `project_id` varchar(10) NOT NULL,
  `project_name` varchar(20) NOT NULL,
  `project_type` varchar(20) NOT NULL,
  `project_leader` varchar(30) NOT NULL,
  `team_id` varchar(10) NOT NULL,
  `dc_page_link` varchar(30) NOT NULL,
  `github_page_link` varchar(30) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PROJECT_REVIEW`
--

CREATE TABLE IF NOT EXISTS `PROJECT_REVIEW` (
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
-- Table structure for table `PROJECT_STATUS`
--

CREATE TABLE IF NOT EXISTS `PROJECT_STATUS` (
  `status_id` varchar(15) NOT NULL,
  `project_id` varchar(15) NOT NULL,
  `status_name` varchar(30) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RESOURCE`
--

CREATE TABLE IF NOT EXISTS `RESOURCE` (
  `resource_id` varchar(15) NOT NULL,
  `resource_name` varchar(30) NOT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RESPONSIBILITY_DURATION`
--

CREATE TABLE IF NOT EXISTS `RESPONSIBILITY_DURATION` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `assigned_duty` varchar(30) NOT NULL,
  `resigned_duty` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `RESULT`
--

CREATE TABLE IF NOT EXISTS `RESULT` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `test_type` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ROLES_AND_RESPONSIBILITY`
--

CREATE TABLE IF NOT EXISTS `ROLES_AND_RESPONSIBILITY` (
  `s_no` int(3) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(15) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `SYSTEM_INFORMATION`
--

CREATE TABLE IF NOT EXISTS `SYSTEM_INFORMATION` (
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
-- Table structure for table `TEAM_MEMBERS`
--

CREATE TABLE IF NOT EXISTS `TEAM_MEMBERS` (
  `s_no` int(2) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(15) NOT NULL,
  `member_id` varchar(15) NOT NULL,
  `designation` varchar(20) NOT NULL,
  PRIMARY KEY (`s_no`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TECHNICAL_AND_MOTIVATIONAL`
--

CREATE TABLE IF NOT EXISTS `TECHNICAL_AND_MOTIVATIONAL` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TECHNICAL_ASSISTANCE`
--

CREATE TABLE IF NOT EXISTS `TECHNICAL_ASSISTANCE` (
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
-- Constraints for table `ACHIEVEMENTS`
--
ALTER TABLE `ACHIEVEMENTS`
  ADD CONSTRAINT `ACHIEVEMENTS_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table ` ATTENDENCE`
--
ALTER TABLE ` ATTENDENCE`
  ADD CONSTRAINT ` ATTENDENCE_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `DC_MEMBER_REGULAR`
--
ALTER TABLE `DC_MEMBER_REGULAR`
  ADD CONSTRAINT `DC_MEMBER_REGULAR_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `DOCUMENTATION`
--
ALTER TABLE `DOCUMENTATION`
  ADD CONSTRAINT `DOCUMENTATION_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `PROJECTS` (`project_id`);

--
-- Constraints for table `EVENTS`
--
ALTER TABLE `EVENTS`
  ADD CONSTRAINT `EVENTS_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `ISSUED_RESOURCE_TO`
--
ALTER TABLE `ISSUED_RESOURCE_TO`
  ADD CONSTRAINT `ISSUED_RESOURCE_TO_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `RESOURCE` (`resource_id`);

--
-- Constraints for table `LEAVE`
--
ALTER TABLE `LEAVE`
  ADD CONSTRAINT `LEAVE_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `ORGANIZER`
--
ALTER TABLE `ORGANIZER`
  ADD CONSTRAINT `ORGANIZER_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `PROBLEM_SOLVED_BY`
--
ALTER TABLE `PROBLEM_SOLVED_BY`
  ADD CONSTRAINT `PROBLEM_SOLVED_BY_ibfk_1` FOREIGN KEY (`problem_id`) REFERENCES `TECHNICAL_ASSISTANCE` (`problem_id`);

--
-- Constraints for table `PROJECT_REVIEW`
--
ALTER TABLE `PROJECT_REVIEW`
  ADD CONSTRAINT `PROJECT_REVIEW_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `PROJECTS` (`project_id`);

--
-- Constraints for table `PROJECT_STATUS`
--
ALTER TABLE `PROJECT_STATUS`
  ADD CONSTRAINT `PROJECT_STATUS_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `PROJECTS` (`project_id`);

--
-- Constraints for table `RESPONSIBILITY_DURATION`
--
ALTER TABLE `RESPONSIBILITY_DURATION`
  ADD CONSTRAINT `RESPONSIBILITY_DURATION_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `RESULT`
--
ALTER TABLE `RESULT`
  ADD CONSTRAINT `RESULT_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `ROLES_AND_RESPONSIBILITY`
--
ALTER TABLE `ROLES_AND_RESPONSIBILITY`
  ADD CONSTRAINT `ROLES_AND_RESPONSIBILITY_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

--
-- Constraints for table `TEAM_MEMBERS`
--
ALTER TABLE `TEAM_MEMBERS`
  ADD CONSTRAINT `TEAM_MEMBERS_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `DC_MEMBER_MASTER` (`member_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
