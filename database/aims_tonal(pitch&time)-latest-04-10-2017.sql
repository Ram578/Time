-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 08:49 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aims_tonal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('d9539a2a40cc655404a88ba85f6b4266667b315d', '127.0.0.1', 1507099008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373039383932333b),
('43ace5e1bb61ff4f39c8a6ca06377487fe2d3720', '127.0.0.1', 1507098950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373039383935303b),
('8ed8a14989002b44fefcb8a3402f0bd8195bcd3d', '127.0.0.1', 1507098950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530373039383935303b);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `avathar` varchar(100) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `role` varchar(5) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `username`, `passwd`, `avathar`, `addeddate`, `role`, `active`) VALUES
(1, 'aims', 'admin', 'aimadmin', '534bd18ed33f9386e42a3f33cad6dcc3', NULL, '2016-08-20 00:00:00', '', 1),
(2, 'dev', 'test', 'devtest', '90578217a199f05f32833d8ced80fb2e', 'NULL', '2016-08-20 00:00:00', 'admin', 1),
(3, 'test', 'dev', 'testdev', '90578217a199f05f32833d8ced80fb2e', 'NULL', '2016-08-20 00:00:00', 'staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pitch_certile_scores`
--

CREATE TABLE IF NOT EXISTS `pitch_certile_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(8) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `score` varchar(8) NOT NULL,
  `certile` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pitch_certile_scores`
--

INSERT INTO `pitch_certile_scores` (`id`, `age`, `gender`, `score`, `certile`) VALUES
(1, '15-20', 'male', '1-5', 34),
(2, '21-30', 'female', '5-10', 34);

-- --------------------------------------------------------

--
-- Table structure for table `pitch_questions`
--

CREATE TABLE IF NOT EXISTS `pitch_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questioncode` varchar(15) NOT NULL,
  `serial_number` varchar(15) NOT NULL,
  `questionname` varchar(100) DEFAULT NULL,
  `questiondesc` varchar(255) DEFAULT NULL,
  `questiontype` varchar(8) NOT NULL,
  `audiopath` varchar(255) NOT NULL,
  `audiofilename` varchar(100) NOT NULL,
  `answer` int(2) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `addeddate` datetime DEFAULT NULL,
  `includeinscoring` tinyint(1) DEFAULT '1',
  `show_or_hide` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `questioncode` (`questioncode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pitch_questions`
--

INSERT INTO `pitch_questions` (`id`, `questioncode`, `serial_number`, `questionname`, `questiondesc`, `questiontype`, `audiopath`, `audiofilename`, `answer`, `active`, `addeddate`, `includeinscoring`, `show_or_hide`) VALUES
(1, 'Practice Item1', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122644.mp3', '20170812122644.mp3', 2, 1, '2017-08-12 12:08:44', 1, 1),
(2, 'Practice Item2', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122708.mp3', '20170812122708.mp3', 1, 1, '2017-08-12 12:08:08', 1, 1),
(3, 'Example 1', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122730.mp3', '20170812122730.mp3', 2, 1, '2017-08-12 12:08:30', 1, 1),
(4, 'Example 2', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122750.mp3', '20170812122750.mp3', 2, 1, '2017-08-12 12:08:50', 1, 1),
(5, 'Practice Item 1', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122834.mp3', '20170812122834.mp3', 1, 1, '2017-08-12 12:08:34', 1, 1),
(6, 'Practice Item 2', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122902.mp3', '20170812122902.mp3', 2, 1, '2017-08-12 12:08:02', 1, 1),
(7, 'Practice Item 3', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122942.mp3', '20170812122942.mp3', 2, 1, '2017-08-12 12:08:42', 1, 1),
(8, 'Item Code 1', '2', NULL, NULL, 'test', 'uploads/20170812/20170812124738.wav', '20170812124738.wav', 2, 1, '2017-08-12 12:08:38', 1, 1),
(9, 'Item Code 2', '1', NULL, NULL, 'test', 'uploads/20170812/20170812124754.wav', '20170812124754.wav', 2, 1, '2017-08-12 12:08:54', 1, 1),
(10, 'Item Code 3', '2a', NULL, NULL, 'test', 'uploads/20170817/20170817083934.wav', '20170817083934.wav', 1, 1, '2017-08-17 08:08:34', 1, 1),
(11, 'Item Code 4', '3', NULL, NULL, 'test', 'uploads/20170818/20170818145409.wav', '20170818145409.wav', 2, 1, '2017-08-18 14:08:09', 1, 1),
(12, 'Item Code 5', '4', NULL, NULL, 'test', 'uploads/20170819/20170819035916.wav', '20170819035916.wav', 1, 1, '2017-08-19 03:08:16', 1, 1),
(13, 'Item Code 6', '5', NULL, NULL, 'test', 'uploads/20170819/20170819035941.wav', '20170819035941.wav', 2, 1, '2017-08-19 03:08:41', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pitch_questions_order`
--

CREATE TABLE IF NOT EXISTS `pitch_questions_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_order` varchar(8000) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pitch_questions_order`
--

INSERT INTO `pitch_questions_order` (`id`, `question_order`, `type`) VALUES
(1, 'a:1:{s:4:"test";a:6:{i:0;s:2:"10";i:1;s:1:"8";i:2;i:11;i:3;s:1:"9";i:4;i:12;i:5;i:13;}}', 'questions');

-- --------------------------------------------------------

--
-- Table structure for table `pitch_subscores`
--

CREATE TABLE IF NOT EXISTS `pitch_subscores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(7) NOT NULL,
  `score_range` varchar(15) NOT NULL,
  `subscore_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pitch_subscores`
--

INSERT INTO `pitch_subscores` (`id`, `questions`, `score_range`, `subscore_status`) VALUES
(1, '4', '1-3', 1),
(2, '4', '1-3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pitch_subscore_checkbox`
--

CREATE TABLE IF NOT EXISTS `pitch_subscore_checkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscore_check` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pitch_subscore_checkbox`
--

INSERT INTO `pitch_subscore_checkbox` (`id`, `subscore_check`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pitch_user_answers`
--

CREATE TABLE IF NOT EXISTS `pitch_user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `optionid` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `questionid` (`questionid`),
  KEY `optionid` (`optionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `time_certile_scores`
--

CREATE TABLE IF NOT EXISTS `time_certile_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(8) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `score` varchar(8) NOT NULL,
  `certile` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `time_certile_scores`
--

INSERT INTO `time_certile_scores` (`id`, `age`, `gender`, `score`, `certile`) VALUES
(1, '25-50', 'female', '1-10', 3),
(2, '10-24', 'male', '3-6', 3);

-- --------------------------------------------------------

--
-- Table structure for table `time_questions`
--

CREATE TABLE IF NOT EXISTS `time_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questioncode` varchar(15) NOT NULL,
  `serial_number` varchar(15) NOT NULL,
  `questionname` varchar(100) DEFAULT NULL,
  `questiondesc` varchar(255) DEFAULT NULL,
  `questiontype` varchar(8) NOT NULL,
  `audiopath` varchar(255) NOT NULL,
  `audiofilename` varchar(100) NOT NULL,
  `answer` int(2) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `addeddate` datetime DEFAULT NULL,
  `includeinscoring` tinyint(1) DEFAULT '1',
  `show_or_hide` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `questioncode` (`questioncode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `time_questions`
--

INSERT INTO `time_questions` (`id`, `questioncode`, `serial_number`, `questionname`, `questiondesc`, `questiontype`, `audiopath`, `audiofilename`, `answer`, `active`, `addeddate`, `includeinscoring`, `show_or_hide`) VALUES
(1, 'Practice Item1', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122644.mp3', '20170812122644.mp3', 2, 1, '2017-08-12 12:08:44', 1, 1),
(2, 'Practice Item2', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122708.mp3', '20170812122708.mp3', 1, 1, '2017-08-12 12:08:08', 1, 1),
(3, 'Example 1', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122730.mp3', '20170812122730.mp3', 2, 1, '2017-08-12 12:08:30', 1, 1),
(4, 'Example 2', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122750.mp3', '20170812122750.mp3', 2, 1, '2017-08-12 12:08:50', 1, 1),
(5, 'Practice Item 1', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122834.mp3', '20170812122834.mp3', 1, 1, '2017-08-12 12:08:34', 1, 1),
(6, 'Practice Item 2', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122902.mp3', '20170812122902.mp3', 2, 1, '2017-08-12 12:08:02', 1, 1),
(7, 'Practice Item 3', '', NULL, NULL, 'practice', 'uploads/20170812/20170812122942.mp3', '20170812122942.mp3', 2, 1, '2017-08-12 12:08:42', 1, 1),
(8, 'Item Code 1', '2', NULL, NULL, 'test', 'uploads/20170812/20170812124738.wav', '20170812124738.wav', 2, 1, '2017-08-12 12:08:38', 1, 1),
(9, 'Item Code 2', '1', NULL, NULL, 'test', 'uploads/20170812/20170812124754.wav', '20170812124754.wav', 2, 1, '2017-08-12 12:08:54', 1, 1),
(10, 'Item Code 3', '2a', NULL, NULL, 'test', 'uploads/20170817/20170817083934.wav', '20170817083934.wav', 1, 1, '2017-08-17 08:08:34', 1, 1),
(11, 'Item Code 4', '3', NULL, NULL, 'test', 'uploads/20170818/20170818145409.wav', '20170818145409.wav', 2, 1, '2017-08-18 14:08:09', 1, 1),
(12, 'Item Code 5', '4', NULL, NULL, 'test', 'uploads/20170819/20170819035916.wav', '20170819035916.wav', 1, 1, '2017-08-19 03:08:16', 1, 1),
(13, 'Item Code 6', '5', NULL, NULL, 'test', 'uploads/20170819/20170819035941.wav', '20170819035941.wav', 2, 1, '2017-08-19 03:08:41', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_questions_order`
--

CREATE TABLE IF NOT EXISTS `time_questions_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_order` varchar(8000) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `time_questions_order`
--

INSERT INTO `time_questions_order` (`id`, `question_order`, `type`) VALUES
(1, 'a:1:{s:4:"test";a:6:{i:0;s:2:"10";i:1;s:1:"8";i:2;i:11;i:3;s:1:"9";i:4;i:12;i:5;i:13;}}', 'questions');

-- --------------------------------------------------------

--
-- Table structure for table `time_subscores`
--

CREATE TABLE IF NOT EXISTS `time_subscores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(7) NOT NULL,
  `score_range` varchar(15) NOT NULL,
  `subscore_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `time_subscores`
--

INSERT INTO `time_subscores` (`id`, `questions`, `score_range`, `subscore_status`) VALUES
(1, '4', '1-3', 1),
(2, '5', '4-2', 1),
(3, '4', '1-3', 1),
(4, '7', '2-6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `time_subscore_checkbox`
--

CREATE TABLE IF NOT EXISTS `time_subscore_checkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscore_check` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `time_subscore_checkbox`
--

INSERT INTO `time_subscore_checkbox` (`id`, `subscore_check`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_user_answers`
--

CREATE TABLE IF NOT EXISTS `time_user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `optionid` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `questionid` (`questionid`),
  KEY `optionid` (`optionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` varchar(6) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `filenumber` varchar(30) NOT NULL,
  `addeddate` datetime NOT NULL,
  `pitch_completed_date` datetime NOT NULL,
  `time_completed_date` datetime NOT NULL,
  `tonal_completed_date` datetime NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `pitch_status` tinyint(1) NOT NULL,
  `time_status` tinyint(1) NOT NULL,
  `tonal_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filenumber` (`filenumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pitch_user_answers`
--
ALTER TABLE `pitch_user_answers`
  ADD CONSTRAINT `pitch_user_answers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pitch_user_answers_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `pitch_questions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
