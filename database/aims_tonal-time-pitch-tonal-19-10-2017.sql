-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 06:05 AM
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
('734406cfd59b3093c5e365e17eec8119509813ac', '127.0.0.1', 1508255433, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235353232303b456d706c6f79656549447c733a313a2232223b456d706c6f796565464e616d657c733a333a22646576223b456d706c6f7965654c4e616d657c733a343a2274657374223b456d706c6f796565526f6c657c733a353a2261646d696e223b),
('28c984443e935f0854e96aa0c8446ba4dfad180e', '127.0.0.1', 1508255578, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383235353537383b456d706c6f79656549447c733a313a2232223b456d706c6f796565464e616d657c733a333a22646576223b456d706c6f7965654c4e616d657c733a343a2274657374223b456d706c6f796565526f6c657c733a353a2261646d696e223b),
('0125873271308c725bb48c56a928b93f36e5d24a', '127.0.0.1', 1508261231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383236313231383b456d706c6f79656549447c733a313a2232223b456d706c6f796565464e616d657c733a333a22646576223b456d706c6f7965654c4e616d657c733a343a2274657374223b456d706c6f796565526f6c657c733a353a2261646d696e223b);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pitch_certile_scores`
--

INSERT INTO `pitch_certile_scores` (`id`, `age`, `gender`, `score`, `certile`) VALUES
(1, '15-20', 'Male', '1-5', 34);

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
(2, '3', '1-3', 1);

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
(1, '25-50', 'Female', '1-10', 3),
(2, '10-24', 'Male', '3-6', 3);

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
-- Table structure for table `tonal_certile_scores`
--

CREATE TABLE IF NOT EXISTS `tonal_certile_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(8) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `score` varchar(8) NOT NULL,
  `certile` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tonal_certile_scores`
--

INSERT INTO `tonal_certile_scores` (`id`, `age`, `gender`, `score`, `certile`) VALUES
(1, '15-40', 'Female', '0-10', 55),
(2, '5-9', 'Female', '2-6', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tonal_questions`
--

CREATE TABLE IF NOT EXISTS `tonal_questions` (
  `id` int(11) NOT NULL,
  `questioncode` varchar(15) NOT NULL,
  `serial_number` varchar(15) NOT NULL,
  `questionname` varchar(100) DEFAULT NULL,
  `questiondesc` varchar(255) DEFAULT NULL,
  `optionscount` int(2) NOT NULL,
  `optioncolor` varchar(15) NOT NULL DEFAULT 'green',
  `questionlevel` int(2) NOT NULL,
  `audiopath` varchar(255) NOT NULL,
  `audiofilename` varchar(100) NOT NULL,
  `answer` int(2) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `addeddate` datetime DEFAULT NULL,
  `includeinscoring` tinyint(1) DEFAULT '1',
  `show_or_hide` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tonal_questions`
--

INSERT INTO `tonal_questions` (`id`, `questioncode`, `serial_number`, `questionname`, `questiondesc`, `optionscount`, `optioncolor`, `questionlevel`, `audiopath`, `audiofilename`, `answer`, `active`, `addeddate`, `includeinscoring`, `show_or_hide`) VALUES
(105, 'Test Item 1', '1', NULL, NULL, 3, 'blue', 3, 'uploads/20160825/20160825181821.wav', '20160825181821.wav', 2, 1, '2016-08-25 18:08:21', 1, 1),
(106, 'Test Item 2', '2', NULL, NULL, 3, 'blue', 3, 'uploads/20160825/20160825181845.wav', '20160825181845.wav', 3, 1, '2016-08-25 18:08:45', 1, 1),
(107, 'Test Item 3', '3', NULL, NULL, 3, 'green', 3, 'uploads/20160825/20160825181900.wav', '20160825181900.wav', 3, 1, '2016-08-25 18:08:00', 1, 1),
(108, 'Test Item 4', '4', NULL, NULL, 3, 'blue', 3, 'uploads/20160825/20160825181914.wav', '20160825181914.wav', 3, 1, '2016-08-25 18:08:14', 1, 1),
(109, 'Test Item 5', '5', NULL, NULL, 3, 'green', 3, 'uploads/20160825/20160825182016.wav', '20160825182016.wav', 3, 1, '2016-08-25 18:08:16', 1, 1),
(110, 'Test Item 6', '6', NULL, NULL, 4, 'blue', 4, 'uploads/20160825/20160825182153.wav', '20160825182153.wav', 2, 1, '2016-08-25 18:08:53', 1, 1),
(111, 'Test Item 7', '7', NULL, NULL, 4, 'green', 4, 'uploads/20160825/20160825182213.wav', '20160825182213.wav', 4, 1, '2016-08-25 18:08:13', 1, 1),
(112, 'Test Item 8', '8', NULL, NULL, 4, 'blue', 4, 'uploads/20160825/20160825182236.wav', '20160825182236.wav', 3, 1, '2016-08-25 18:08:36', 1, 1),
(113, 'Test Item 9', '9', NULL, NULL, 4, 'green', 4, 'uploads/20160825/20160825182254.wav', '20160825182254.wav', 2, 1, '2016-08-25 18:08:54', 1, 1),
(114, 'Test Item 10', '10', NULL, NULL, 4, 'blue', 4, 'uploads/20160825/20160825182328.wav', '20160825182328.wav', 1, 1, '2016-08-25 18:08:28', 1, 1),
(115, 'Test Item 11', '11', NULL, NULL, 4, 'green', 4, 'uploads/20160825/20160825182400.wav', '20160825182400.wav', 2, 1, '2016-08-25 18:08:00', 1, 1),
(116, 'Test Item 12', '12', NULL, NULL, 4, 'blue', 4, 'uploads/20160825/20160825182906.wav', '20160825182906.wav', 4, 1, '2016-08-25 18:08:06', 1, 1),
(117, 'Test Item 13', '13', NULL, NULL, 4, 'green', 4, 'uploads/20160825/20160825182918.wav', '20160825182918.wav', 3, 1, '2016-08-25 18:08:18', 1, 1),
(118, 'Test Item 14', '14', NULL, NULL, 4, 'blue', 4, 'uploads/20160825/20160825182935.wav', '20160825182935.wav', 2, 1, '2016-08-25 18:08:35', 1, 1),
(119, 'Test Item 15', '15', NULL, NULL, 4, 'green', 4, 'uploads/20160825/20160825182952.wav', '20160825182952.wav', 4, 1, '2016-08-25 18:08:52', 1, 1),
(120, 'Test Item 16', '16', NULL, NULL, 5, 'blue', 5, 'uploads/20160825/20160825183018.wav', '20160825183018.wav', 5, 1, '2016-08-25 18:08:18', 1, 1),
(121, 'Test Item 17', '17', NULL, NULL, 5, 'green', 5, 'uploads/20160825/20160825183031.wav', '20160825183031.wav', 5, 1, '2016-08-25 18:08:31', 1, 1),
(122, 'Test Item 18', '18', NULL, NULL, 5, 'blue', 5, 'uploads/20160825/20160825183049.wav', '20160825183049.wav', 4, 1, '2016-08-25 18:08:49', 1, 1),
(123, 'Test Item 19', '19', NULL, NULL, 5, 'green', 5, 'uploads/20160825/20160825183106.wav', '20160825183106.wav', 3, 1, '2016-08-25 18:08:06', 1, 1),
(124, 'Test Item 20', '20', NULL, NULL, 5, 'blue', 5, 'uploads/20160825/20160825183148.wav', '20160825183148.wav', 3, 1, '2016-08-25 18:08:48', 1, 1),
(125, 'Test Item 21', '21', NULL, NULL, 5, 'green', 5, 'uploads/20160825/20160825183237.wav', '20160825183237.wav', 5, 1, '2016-08-25 18:08:37', 1, 1),
(126, 'Test Item 22', '22', NULL, NULL, 5, 'blue', 5, 'uploads/20160825/20160825183252.wav', '20160825183252.wav', 5, 1, '2016-08-25 18:08:52', 1, 1),
(127, 'Test Item 23', '23', NULL, NULL, 5, 'green', 5, 'uploads/20160825/20160825183331.wav', '20160825183331.wav', 2, 1, '2016-08-25 18:08:31', 1, 1),
(128, 'Test Item 24', '25', NULL, NULL, 5, 'blue', 5, 'uploads/20160825/20160825183402.wav', '20160825183402.wav', 4, 1, '2016-08-25 18:08:02', 1, 1),
(129, 'Test Item 25', '26', NULL, NULL, 5, 'green', 5, 'uploads/20160825/20160825183426.wav', '20160825183426.wav', 3, 1, '2016-08-25 18:08:26', 1, 1),
(130, 'Test Item 26', '26', NULL, NULL, 6, 'blue', 6, 'uploads/20160825/20160825183449.wav', '20160825183449.wav', 5, 1, '2016-08-25 18:08:49', 1, 1),
(131, 'Test Item 27', '27', NULL, NULL, 6, 'green', 6, 'uploads/20160825/20160825183507.wav', '20160825183507.wav', 5, 1, '2016-08-25 18:08:07', 1, 1),
(132, 'Test Item 28', '28', NULL, NULL, 6, 'blue', 6, 'uploads/20160825/20160825183521.wav', '20160825183521.wav', 1, 1, '2016-08-25 18:08:21', 1, 1),
(133, 'Test Item 29', '29', NULL, NULL, 6, 'green', 6, 'uploads/20160825/20160825183550.wav', '20160825183550.wav', 2, 1, '2016-08-25 18:08:50', 1, 1),
(134, 'Test Item 30', '30', NULL, NULL, 6, 'blue', 6, 'uploads/20160825/20160825183603.wav', '20160825183603.wav', 1, 1, '2016-08-25 18:08:03', 1, 1),
(135, 'Test Item 31', '31', NULL, NULL, 6, 'green', 6, 'uploads/20160825/20160825183641.wav', '20160825183641.wav', 6, 1, '2016-08-25 18:08:41', 1, 1),
(136, 'Test Item 32', '32', NULL, NULL, 6, 'blue', 6, 'uploads/20160825/20160825183705.wav', '20160825183705.wav', 3, 1, '2016-08-25 18:08:05', 1, 1),
(137, 'Test Item 33', '33', NULL, NULL, 6, 'green', 6, 'uploads/20160825/20160825183732.wav', '20160825183732.wav', 6, 1, '2016-08-25 18:08:32', 1, 1),
(138, 'Test Item 34', '34', NULL, NULL, 6, 'blue', 6, 'uploads/20160825/20160825183745.wav', '20160825183745.wav', 4, 1, '2016-08-25 18:08:45', 1, 1),
(139, 'Test Item 35', '35', NULL, NULL, 6, 'green', 6, 'uploads/20160825/20160825183806.wav', '20160825183806.wav', 2, 1, '2016-08-25 18:08:06', 1, 1),
(140, 'Test Item 36', '36', NULL, NULL, 6, 'blue', 6, 'uploads/20170324/20170324043101.wav', '20170324043101.wav', 6, 1, '2017-03-24 04:03:01', 0, 1),
(141, 'Test Item 37', '37', NULL, NULL, 6, 'green', 6, 'uploads/20170324/20170324043202.wav', '20170324043202.wav', 4, 1, '2017-03-24 04:03:02', 0, 1),
(142, 'Test Item 38', '38', NULL, NULL, 6, 'blue', 6, 'uploads/20170324/20170324043317.wav', '20170324043317.wav', 3, 1, '2017-03-24 04:03:17', 0, 1),
(143, 'Test Item 39', '39', NULL, NULL, 6, 'green', 6, 'uploads/20170324/20170324043425.wav', '20170324043425.wav', 4, 1, '2017-03-24 04:03:25', 0, 1),
(144, 'Test Item 40', '40', NULL, NULL, 6, 'blue', 6, 'uploads/20170324/20170324043608.wav', '20170324043608.wav', 4, 1, '2017-03-24 04:03:08', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tonal_questions_order`
--

CREATE TABLE IF NOT EXISTS `tonal_questions_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_order` varchar(8000) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tonal_questions_order`
--

INSERT INTO `tonal_questions_order` (`id`, `question_order`, `type`) VALUES
(1, 'a:1:{s:4:"test";a:40:{i:0;s:3:"106";i:1;s:3:"105";i:2;s:3:"107";i:3;s:3:"108";i:4;s:3:"109";i:5;s:3:"110";i:6;s:3:"111";i:7;s:3:"112";i:8;s:3:"113";i:9;s:3:"114";i:10;s:3:"115";i:11;s:3:"116";i:12;s:3:"117";i:13;s:3:"118";i:14;s:3:"119";i:15;s:3:"120";i:16;s:3:"121";i:17;s:3:"122";i:18;s:3:"123";i:19;s:3:"124";i:20;s:3:"125";i:21;s:3:"126";i:22;s:3:"127";i:23;s:3:"128";i:24;s:3:"129";i:25;s:3:"130";i:26;s:3:"131";i:27;s:3:"132";i:28;s:3:"133";i:29;s:3:"134";i:30;s:3:"135";i:31;s:3:"136";i:32;s:3:"137";i:33;s:3:"138";i:34;s:3:"139";i:35;s:3:"140";i:36;s:3:"141";i:37;s:3:"142";i:38;s:3:"143";i:39;s:3:"144";}}', 'questions');

-- --------------------------------------------------------

--
-- Table structure for table `tonal_subscores`
--

CREATE TABLE IF NOT EXISTS `tonal_subscores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(7) NOT NULL,
  `score_range` varchar(15) NOT NULL,
  `subscore_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tonal_subscores`
--

INSERT INTO `tonal_subscores` (`id`, `questions`, `score_range`, `subscore_status`) VALUES
(1, '4', '1-3', 1),
(2, '3', '1-3', 1),
(3, '2', '1-4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tonal_subscore_checkbox`
--

CREATE TABLE IF NOT EXISTS `tonal_subscore_checkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscore_check` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tonal_subscore_checkbox`
--

INSERT INTO `tonal_subscore_checkbox` (`id`, `subscore_check`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tonal_user_answers`
--

CREATE TABLE IF NOT EXISTS `tonal_user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `optionid` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tonal_user_answers_ibfk_1` (`userid`),
  KEY `tonal_user_answers_ibfk_2` (`questionid`)
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

--
-- Constraints for table `time_user_answers`
--
ALTER TABLE `time_user_answers`
  ADD CONSTRAINT `time_user_answers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `time_user_answers_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `time_questions` (`id`);

--
-- Constraints for table `tonal_user_answers`
--
ALTER TABLE `tonal_user_answers`
  ADD CONSTRAINT `tonal_user_answers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tonal_user_answers_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `tonal_questions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
