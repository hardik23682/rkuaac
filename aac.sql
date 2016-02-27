-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2016 at 09:33 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aac`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_aac_review`
--

DROP TABLE IF EXISTS `application_aac_review`;
CREATE TABLE IF NOT EXISTS `application_aac_review` (
  `application_id` tinyint(3) unsigned NOT NULL,
  `review_status` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `application_review` text COLLATE latin1_general_ci NOT NULL,
  `application_status` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_director_review`
--

DROP TABLE IF EXISTS `application_director_review`;
CREATE TABLE IF NOT EXISTS `application_director_review` (
  `application_id` tinyint(3) unsigned NOT NULL,
  `faculty_id` tinyint(3) unsigned NOT NULL,
  `review_status` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `application_review` text COLLATE latin1_general_ci NOT NULL,
  `application_status` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_faculty`
--

DROP TABLE IF EXISTS `application_faculty`;
CREATE TABLE IF NOT EXISTS `application_faculty` (
  `application_id` tinyint(3) unsigned NOT NULL,
  `faculty_id` tinyint(3) unsigned NOT NULL,
  `sub_experience` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

DROP TABLE IF EXISTS `application_master`;
CREATE TABLE IF NOT EXISTS `application_master` (
  `application_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `faculty_id` tinyint(3) unsigned NOT NULL,
  `application_date` date NOT NULL,
  `academic_year` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `course_code` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `branch_id` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `specialization` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `semester` tinyint(3) unsigned NOT NULL,
  `no_of_student` int(10) unsigned NOT NULL,
  `proposed_for_component` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `total_weightage_component` int(10) unsigned NOT NULL,
  `no_of_component` tinyint(3) unsigned NOT NULL,
  `advantages` text COLLATE latin1_general_ci NOT NULL,
  `disadvantages` text COLLATE latin1_general_ci NOT NULL,
  `final_status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `application_peer_review`
--

DROP TABLE IF EXISTS `application_peer_review`;
CREATE TABLE IF NOT EXISTS `application_peer_review` (
  `application_id` tinyint(3) unsigned NOT NULL,
  `faculty_id` tinyint(3) unsigned NOT NULL,
  `review_status` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `application_review` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assessment_method`
--

DROP TABLE IF EXISTS `assessment_method`;
CREATE TABLE IF NOT EXISTS `assessment_method` (
  `method_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `method_name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`method_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

DROP TABLE IF EXISTS `branch_master`;
CREATE TABLE IF NOT EXISTS `branch_master` (
  `branch_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `component_master`
--

DROP TABLE IF EXISTS `component_master`;
CREATE TABLE IF NOT EXISTS `component_master` (
  `compo_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `application_id` tinyint(3) unsigned NOT NULL,
  `component_type` tinyint(3) unsigned NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `academic_regulation_compilance` tinyint(1) NOT NULL,
  `sec1_why` text COLLATE latin1_general_ci NOT NULL,
  `sec1_who` text COLLATE latin1_general_ci NOT NULL,
  `sec1_when` text COLLATE latin1_general_ci NOT NULL,
  `sec1_where` text COLLATE latin1_general_ci NOT NULL,
  `sec1_what` text COLLATE latin1_general_ci NOT NULL,
  `sec2_resources` text COLLATE latin1_general_ci NOT NULL,
  `sec2_staff` text COLLATE latin1_general_ci NOT NULL,
  `sec2_budget` text COLLATE latin1_general_ci NOT NULL,
  `sec3_clo_mapping` varchar(22) COLLATE latin1_general_ci NOT NULL,
  `sec3_clo_link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sec4_bloom_cog` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `sec4_bloom_aff` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `sec4_bloom_psy` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `sec4_bloom_link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sec5_student_fami` tinyint(1) NOT NULL,
  `sec5_student_link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sec5_faculty_fami` tinyint(1) NOT NULL,
  `sec5_faculty_link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sec5_content_fami` tinyint(1) NOT NULL,
  `sec5_content_link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sec5_schedule_des` text COLLATE latin1_general_ci NOT NULL,
  `sec5_schedule_link` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`compo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

DROP TABLE IF EXISTS `course_master`;
CREATE TABLE IF NOT EXISTS `course_master` (
  `course_code` varchar(15) NOT NULL,
  `course_name` varchar(35) NOT NULL,
  `program_id` tinyint(3) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

DROP TABLE IF EXISTS `department_master`;
CREATE TABLE IF NOT EXISTS `department_master` (
  `department_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `department_name` varchar(30) NOT NULL,
  `school_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

DROP TABLE IF EXISTS `faculty_master`;
CREATE TABLE IF NOT EXISTS `faculty_master` (
  `faculty_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(30) NOT NULL,
  `school_id` tinyint(3) unsigned NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `total_experience_y` tinyint(3) unsigned NOT NULL,
  `total_experience_m` tinyint(3) unsigned NOT NULL,
  `password` varchar(35) NOT NULL,
  `is_approved` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`faculty_id`, `faculty_name`, `school_id`, `email_id`, `mobile_no`, `total_experience_y`, `total_experience_m`, `password`, `is_approved`) VALUES
(1, 'Hardik Mehta', 1, 'hardik.mehta@rku.ac.in', '9427157507', 7, 6, '8e55ecef6a2e2b363e7f56fe00d6cd64', 1);

-- --------------------------------------------------------

--
-- Table structure for table `program_master`
--

DROP TABLE IF EXISTS `program_master`;
CREATE TABLE IF NOT EXISTS `program_master` (
  `program_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `program_name` varchar(30) NOT NULL,
  `school_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reference_master`
--

DROP TABLE IF EXISTS `reference_master`;
CREATE TABLE IF NOT EXISTS `reference_master` (
  `application_id` tinyint(3) unsigned NOT NULL,
  `reference_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ref_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ref_website` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ref_faculty` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ref_outcome` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`reference_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school_master`
--

DROP TABLE IF EXISTS `school_master`;
CREATE TABLE IF NOT EXISTS `school_master` (
  `school_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `school_name` varchar(30) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
