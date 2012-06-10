-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 10, 2012 at 09:04 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `timebank`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `activities`
-- 

CREATE TABLE `activities` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci NOT NULL,
  `description` mediumtext collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `activities`
-- 

INSERT INTO `activities` VALUES (1, 'pack sand', 'pack description', '2011-11-22 21:10:35');
INSERT INTO `activities` VALUES (2, 'pack sand', 'pack description', '2011-11-22 21:11:03');
INSERT INTO `activities` VALUES (3, 'pack sand', 'pack description', '2011-11-22 21:11:11');
INSERT INTO `activities` VALUES (4, 'pack sand', 'pack description', '2011-11-22 21:14:25');
INSERT INTO `activities` VALUES (5, 'pack sand', 'pack description', '2011-11-22 21:15:36');
INSERT INTO `activities` VALUES (6, 'pack sand', 'pack description', '2011-11-22 21:17:36');

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `type` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(100) collate utf8_unicode_ci NOT NULL,
  `comment` text collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `comments`
-- 

INSERT INTO `comments` VALUES (1, 2, 3, 0, '127.0.0.1', 'Add comment', '2011-11-22 01:41:20');
INSERT INTO `comments` VALUES (2, 2, 3, 0, '127.0.0.1', 'wefaewf', '2011-11-22 01:47:59');
INSERT INTO `comments` VALUES (3, 2, 3, 0, '127.0.0.1', 'สาดดดด', '2011-11-22 01:53:35');
INSERT INTO `comments` VALUES (4, 2, 3, 8, '127.0.0.1', 'กากมาแล้ว', '2011-11-22 01:56:11');

-- --------------------------------------------------------

-- 
-- Table structure for table `companies`
-- 

CREATE TABLE `companies` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `company_type_id` int(11) default NULL,
  `name` mediumtext collate utf8_unicode_ci,
  `objective` mediumtext collate utf8_unicode_ci,
  `detail` mediumtext collate utf8_unicode_ci,
  `address` mediumtext collate utf8_unicode_ci,
  `website` mediumtext collate utf8_unicode_ci,
  `logo` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `companies`
-- 

INSERT INTO `companies` VALUES (1, 3, 1, 'new company', 'new company', 'new company', 'new company', 'http://zanroo.com', NULL, '2011-11-15 21:35:05');
INSERT INTO `companies` VALUES (2, 8, 1, 'com3com2', 'asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', '', NULL, '2011-11-18 14:40:55');
INSERT INTO `companies` VALUES (3, 12, 1, 'comname2', 'comobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหด', 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', 'ferewrew', 'http://www.zanroo.com', '4ec7092217c96thai.png', '2012-05-19 22:43:23');

-- --------------------------------------------------------

-- 
-- Table structure for table `company_types`
-- 

CREATE TABLE `company_types` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci,
  `description` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `company_types`
-- 

INSERT INTO `company_types` VALUES (1, 'มะง่วง', 'มากกก', '2011-11-15 21:33:28');

-- --------------------------------------------------------

-- 
-- Table structure for table `contactusforms`
-- 

CREATE TABLE `contactusforms` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `surname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phoneno` varchar(100) collate utf8_unicode_ci NOT NULL,
  `topic` varchar(255) collate utf8_unicode_ci NOT NULL,
  `message` text collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `contactusforms`
-- 

INSERT INTO `contactusforms` VALUES (1, 'aa', 'bb', 'xinexo@gmail.com', 'asdf', 'tp[occcccccccc', 'อยากได้ๆๆๆ', '2012-06-05 11:39:50');

-- --------------------------------------------------------

-- 
-- Table structure for table `emailcomingsoons`
-- 

CREATE TABLE `emailcomingsoons` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(256) collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `emailcomingsoons`
-- 

INSERT INTO `emailcomingsoons` VALUES (1, 'test@test.com', '2012-05-15 18:13:48');
INSERT INTO `emailcomingsoons` VALUES (2, 'tum@tum.com', '2012-05-15 18:13:56');
INSERT INTO `emailcomingsoons` VALUES (3, 'test@test.com', '2012-05-15 18:15:40');
INSERT INTO `emailcomingsoons` VALUES (4, 'test@test.com', '2012-05-15 18:15:46');
INSERT INTO `emailcomingsoons` VALUES (5, 'test@test.com', '2012-05-15 18:16:33');
INSERT INTO `emailcomingsoons` VALUES (6, 'test@test.com', '2012-05-15 18:18:59');
INSERT INTO `emailcomingsoons` VALUES (7, 'aa@aa.com', '2012-05-15 18:19:49');
INSERT INTO `emailcomingsoons` VALUES (8, 'team@shoppingsija.com', '2012-05-15 18:24:27');
INSERT INTO `emailcomingsoons` VALUES (9, 'xinexo@gmail.com', '2012-05-15 18:26:03');

-- --------------------------------------------------------

-- 
-- Table structure for table `events`
-- 

CREATE TABLE `events` (
  `id` int(11) NOT NULL auto_increment,
  `search_temp` text collate utf8_unicode_ci NOT NULL,
  `signup_begin_date` date default NULL,
  `signup_end_date` date default NULL,
  `volunteer_begin_date` date NOT NULL,
  `volunteer_end_date` date NOT NULL,
  `signup_begin_time` time NOT NULL,
  `signup_end_time` time NOT NULL,
  `volunteer_begin_time` time NOT NULL,
  `volunteer_end_time` time NOT NULL,
  `company_id` int(11) default NULL,
  `location_id` int(11) default NULL,
  `location_name` text collate utf8_unicode_ci NOT NULL,
  `location_district` text collate utf8_unicode_ci NOT NULL,
  `location_province` text collate utf8_unicode_ci NOT NULL,
  `location_postcode` text collate utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL default '1',
  `name` text collate utf8_unicode_ci NOT NULL,
  `phone` mediumtext collate utf8_unicode_ci,
  `contractor_name` mediumtext collate utf8_unicode_ci,
  `project_name` mediumtext collate utf8_unicode_ci NOT NULL,
  `volunteer_need_count` int(11) default NULL,
  `time_cost` int(11) default NULL,
  `detail` mediumtext collate utf8_unicode_ci,
  `travel_detail` text collate utf8_unicode_ci NOT NULL,
  `inquiry_detail` text collate utf8_unicode_ci NOT NULL,
  `is_need_expense` tinyint(1) NOT NULL default '0',
  `expense_detail` text collate utf8_unicode_ci NOT NULL,
  `pic_1` mediumtext collate utf8_unicode_ci,
  `skills` text collate utf8_unicode_ci NOT NULL,
  `languates` text collate utf8_unicode_ci NOT NULL,
  `technical` text collate utf8_unicode_ci NOT NULL,
  `days` text collate utf8_unicode_ci NOT NULL,
  `pic_2` mediumtext collate utf8_unicode_ci,
  `pic_3` mediumtext collate utf8_unicode_ci,
  `pic_4` mediumtext collate utf8_unicode_ci,
  `pic_5` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `tags` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

-- 
-- Dumping data for table `events`
-- 

INSERT INTO `events` VALUES (21, 'ccccccccc/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'ccccccccc', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (20, 'bbbbbbbbb/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'bbbbbbbbb', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (19, 'aaaaaaaaaa/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'aaaaaaaaaa', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (18, 'bzxcb/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'bzxcb', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (12, '', '2012-03-11', '2012-03-12', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123', '123123', '--จังหวัด--', '123123', 1, '12312', NULL, NULL, '123123', 12, 12, '1231111111111111111', '11111111111111', '111111111111111', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', 'abc');
INSERT INTO `events` VALUES (17, 'bzxcb/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'bzxcb', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (14, '', '2012-03-11', '2012-03-12', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123', '123123', '--จังหวัด--', '123123', 1, '12312', NULL, NULL, '123123', 12, 11, '1231111111111111111', '11111111111111', '111111111111111', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', 'งานอาสาทั่วไป, ศาสนาและปฏิบัติธรรม, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, ผู้สูงอายุและครอบครัว, ผู้พิการ, ');
INSERT INTO `events` VALUES (15, '', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdasd', '2012-03-11T10:00:00', 'นครนายก', '2012-03-11T10:00:00', 1, '123123', NULL, NULL, '1231231', 123, 15, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', 'สิ่งแวดล้อมและการเกษตร, ประสานงานและบริหารจัดการ, ผู้พิการ, กฎหมาย, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (16, '', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '16', '2012-03-11T10:00:00', 1, '12312', NULL, NULL, '124', 12, 4, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , , , ประสานงานและบริหารจัดการ, , สตรี, , ผู้พิการ, , , , , , , ');
INSERT INTO `events` VALUES (22, 'ddddddd/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'ddddddd', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (23, 'eeeeeeee/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'eeeeeeee', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (24, 'fffffffff/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'fffffffff', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (25, 'gggggggggg/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 0, 'gggggggggg', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (26, 'hhhhhhhhhhh/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'hhhhhhhhhhh', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (27, 'iiiiiiiiiiiiii/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'iiiiiiiiiiiiii', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (28, 'jjjjjjjjj/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 0, 'jjjjjjjjj', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (29, 'kkkkkkkkkk/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 1, 'kkkkkkkkkk', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (30, 'lllllllllllll/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '0', '123213123', 0, 'lllllllllllll', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (31, 'nnnnnnnnnnnn/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'nnnnnnnnnnnn', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (32, 'oooooooooooo/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'oooooooooooo', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (33, 'pppppppppppp/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'pppppppppppp', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', กู้ภัยและฟื้นฟูจากภัยพิบัติ, , ศาสนาและปฏิบัติธรรม, , อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , , , , ');
INSERT INTO `events` VALUES (34, 'qqqqqqqqqqq/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'qqqqqqqqqqq', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , , , , , , , , , , , , , การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (35, 'sssssssss/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'sssssssss', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , , , , , , , , , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (36, 'ttttttttttt/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'ttttttttttt', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , , , , , , , , , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (37, 'uuuuuuuuuu/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 1, 'uuuuuuuuuu', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , , , , , สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (38, 'vvvvvvvv/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'vvvvvvvv', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , , , , , สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (39, 'wwwwwwwwww/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'wwwwwwwwww', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (40, 'xxxxxxxxxxx/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'xxxxxxxxxxx', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , กฎหมาย, , , ');
INSERT INTO `events` VALUES (41, 'yyyyyyyyy/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'yyyyyyyyy', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , , , , สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , กฎหมาย, , , ');
INSERT INTO `events` VALUES (42, 'zzzzzzzzzzzz/xczxcbz//2012-03-11T10:00:00/123123123', '2012-03-11', '2012-03-11', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, '123123123', '123123', '1', '123213123', 0, 'zzzzzzzzzzzz', NULL, NULL, 'xczxcbz', 1231, 0, '2012-03-11T10:00:00', '2012-03-11T10:00:00', '2012-03-11T10:00:00', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 00:49:44', ', , , ศาสนาและปฏิบัติธรรม, , , สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, , , สตรี, , , , , , กฎหมาย, , , ');
INSERT INTO `events` VALUES (43, 'xvzxcvzxcvzxcv/zxcvzxcv//  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;/adsfasdfasdf', '2012-03-11', '2012-03-12', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'adsfasdfasdf', 'asdfasdfasdf', '1', 'asdfasdfasfdasdfasdfsf', 1, 'xvzxcvzxcvzxcv', NULL, NULL, 'zxcvzxcv', 33, 0, '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 01:41:10', ', งานอาสาทั่วไป, , หัตถกรรมและงานฝีมือ, , , , สิ่งแวดล้อมและการเกษตร, , , เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, , , , , กฎหมาย, สุขภาพและสาธารณสุข, , ');
INSERT INTO `events` VALUES (44, 'xvzxcvzxcvzxcv/zxcvzxcv//  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;/adsfasdfasdf', '2012-03-11', '2012-03-12', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'adsfasdfasdf', 'asdfasdfasdf', '1', 'asdfasdfasfdasdfasdfsf', 1, 'xvzxcvzxcvzxcv', NULL, NULL, 'zxcvzxcv', 33, 0, '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 01:46:46', ', งานอาสาทั่วไป, , หัตถกรรมและงานฝีมือ, , , , สิ่งแวดล้อมและการเกษตร, , , เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, , , , , กฎหมาย, สุขภาพและสาธารณสุข, , ');
INSERT INTO `events` VALUES (45, 'xxxxxxx/zxcvzxcv//  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;/adsfasdfasdf', '2012-03-11', '2012-03-12', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'adsfasdfasdf', 'asdfasdfasdf', '1', 'asdfasdfasfdasdfasdfsf', 1, 'xxxxxxx', NULL, NULL, 'zxcvzxcv', 33, 0, '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 01:48:27', ', งานอาสาทั่วไป, , หัตถกรรมและงานฝีมือ, , , , สิ่งแวดล้อมและการเกษตร, , , เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, , , , , กฎหมาย, สุขภาพและสาธารณสุข, , ');
INSERT INTO `events` VALUES (46, 'xxxxxxx/zxcvzxcv//  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;/adsfasdfasdf', '2012-03-11', '2012-03-12', '2012-03-11', '2012-03-11', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'adsfasdfasdf', 'asdfasdfasdf', '1', 'asdfasdfasfdasdfasdfsf', 1, 'xxxxxxx', NULL, NULL, 'zxcvzxcv', 33, 0, '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', '  &lt;div id=&quot;main&quot; role=&quot;main&quot;&gt;\n		&lt;div id=&quot;sitemap&quot;&gt;\n			&lt;li&gt;หน้าแรก&lt;/li&gt;\n			&lt;li&gt;ธนาคารจิตอาสา&lt;/li&gt;\n			&lt;li&gt;สร้างงานอาสาใหม่&lt;/li&gt;\n		&lt;/div&gt;\n		&lt;ul&gt;&lt;li&gt;สมัครสมาชิก&lt;/li&gt;&lt;li&gt;เข้าสู่ระบบ&lt;/li&gt;&lt;/ul&gt;\n		\n		&lt;div id=&quot;content&quot;&gt;\n			&lt;h2&gt;ขณะนี้งานอาสาของคุณได้ขึ้นเวบไซต์เรียบร้อยแล้ว คุณสามารถดูงานอาสาของคุณได้ &lt;a href=&quot;&quot;&gt;ที่นี่&lt;/a&gt;&lt;/h2&gt;\n			&lt;h3&gt;หากงานอาสาของคุณ ใกล้ปิดรับสมัคร ระบบจะแจ้งกลับที่อีเมล์และกล่องแจ้งเตือน ในหน้าหลักสมาชิกของคุณ &lt;span style=&quot;color:#a90402;text-decoration:underline;&quot;&gt;และอย่าลืม&lt;/span&gt; เข้ามาเลือกอาสาสมัคร (Approve) ตามจำนวนที่คุณต้องการด้วย&lt;/h3&gt;\n		&lt;/div&gt;\n		\n  &lt;/div&gt;', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-08 01:52:11', ', งานอาสาทั่วไป, , หัตถกรรมและงานฝีมือ, , , , สิ่งแวดล้อมและการเกษตร, , , เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, , , , , กฎหมาย, สุขภาพและสาธารณสุข, , ');
INSERT INTO `events` VALUES (47, 'asdf/asdf//sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf/sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', '1', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 1, 'asdf', NULL, NULL, 'asdf', 123, 0, 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 0, '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-09 17:52:23', ', , , , , , , , , , , , , , , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, , , , , , , , ');
INSERT INTO `events` VALUES (48, 'asdf/asdf//sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf/sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', '1', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 1, 'asdf', NULL, NULL, 'asdf', 123, 0, 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 0, '', NULL, '', '', '', ', , , , , , , , , , , , , , , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, , ', NULL, NULL, NULL, NULL, '2012-06-09 17:53:30', ', , , , , , , , , , , , , , , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (49, 'asdf/asdf//sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf/sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', '1', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 1, 'asdf', NULL, NULL, 'asdf', 123, 0, 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 'sdfsfddsfsdfsfddsfsdfsfddsfsdfsfddsf', 0, '', NULL, '', '', '', 'จันทร์, , , พฤหัสบดี, , , , ', NULL, NULL, NULL, NULL, '2012-06-09 17:54:23', ', , , , , , , , , , , , , , , , , , สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (50, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 123, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, , ช่างปูน, ', 'อังคาร, พุธ, ศุกร์, เสาร์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:16:10', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (51, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 123, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, , ช่างปูน, ', 'อังคาร, พุธ, ศุกร์, เสาร์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:19:16', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (52, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 123, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, , ช่างปูน, ', 'อังคาร, พุธ, ศุกร์, เสาร์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:19:43', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (53, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 123, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, , ช่างปูน, ', 'อังคาร, พุธ, ศุกร์, เสาร์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:23:19', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (54, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 32, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, '', '', '', 'อังคาร, พุธ, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:27:59', 'ไอที_และคอมพิวเตอร์กราฟฟิค, สุนัข_แมว_และสัตว์เลี้ยง, ');
INSERT INTO `events` VALUES (55, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 32, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'การขับขี่พาหนะ_(จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, , ช่างประปา, , ช่างปูน, ', 'อังคาร, พุธ, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:28:42', 'ไอที_และคอมพิวเตอร์กราฟฟิค, สุนัข_แมว_และสัตว์เลี้ยง, ');
INSERT INTO `events` VALUES (56, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, , ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:36:44', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (57, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:39:40', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (58, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:41:13', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (59, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:46:27', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (60, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:46:30', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (61, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:46:56', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (62, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:47:52', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (63, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 232, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:48:00', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (64, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'ว่ายน้ำ, ', 'จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'จันทร์, อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:49:08', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (65, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, '', 'เยอรมัน, ญี่ปุ่น, ', 'ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'อังคาร, พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:49:12', 'หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (66, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, '', 'ญี่ปุ่น, ', 'ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:49:18', 'ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (67, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, '', 'ญี่ปุ่น, ', 'ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:52:12', 'ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (68, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, '', 'ญี่ปุ่น, ', 'ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', 'พฤหัสบดี, ศุกร์, เสาร์, อาทิตย์, ', NULL, NULL, NULL, NULL, '2012-06-09 18:55:43', 'ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (69, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-09 18:57:19', 'สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (70, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, '', '', '', '', NULL, NULL, NULL, NULL, '2012-06-09 18:57:34', 'ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (71, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd//asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 3, NULL, 'asdfadsfasd', 'asdfadsfasd', '0', 'asdfadsfasd', 1, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, NULL, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 34, 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', 0, 'asdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasdasdfadsfasd', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'อังกฤษ, จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างอิเล็กทรอนิคส์, ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', '', NULL, NULL, NULL, NULL, '2012-06-09 18:58:51', 'ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (72, 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน/ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน//ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน/asdfadsfasd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '24:00:00', '00:00:00', '24:00:00', 3, NULL, 'asdfadsfasd', 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', '1', 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', 1, 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', NULL, NULL, 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', 123, 48, 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', 'ชื่องานอาสา ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน', 0, '', NULL, 'ว่ายน้ำ, ', 'จีน, เยอรมัน, ญี่ปุ่น, ', 'ช่างโลหะ, ช่างไฟฟ้า, ช่างประปา, ช่างไม้ ช่างสี, ช่างปูน, ', '', NULL, NULL, NULL, NULL, '2012-06-10 19:56:56', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');

-- --------------------------------------------------------

-- 
-- Table structure for table `helps`
-- 

CREATE TABLE `helps` (
  `id` int(11) NOT NULL auto_increment,
  `topic` varchar(255) collate utf8_unicode_ci NOT NULL,
  `message` text collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `helps`
-- 

INSERT INTO `helps` VALUES (1, 'ไม่ทราบว่าอยากบริจาคเงินกับทางเว็บไซต์ต้องทำอย่างไร ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2012-06-05 12:18:10');

-- --------------------------------------------------------

-- 
-- Table structure for table `locations`
-- 

CREATE TABLE `locations` (
  `id` int(11) NOT NULL auto_increment,
  `province` mediumtext collate utf8_unicode_ci,
  `district` mediumtext collate utf8_unicode_ci,
  `latitude` double default NULL,
  `longitude` double default NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `locations`
-- 

INSERT INTO `locations` VALUES (1, 'กรุงเทพ', NULL, NULL, NULL, '2011-11-17 20:42:34');
INSERT INTO `locations` VALUES (2, 'นครราชสีมา', NULL, NULL, NULL, '2011-11-17 20:42:34');
INSERT INTO `locations` VALUES (3, 'เชียงใหม่', NULL, NULL, NULL, '2011-11-17 20:42:44');
INSERT INTO `locations` VALUES (4, 'ภูเก็ต', NULL, NULL, NULL, '2011-11-17 20:42:44');

-- --------------------------------------------------------

-- 
-- Table structure for table `occupations`
-- 

CREATE TABLE `occupations` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci,
  `description` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `occupations`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `roles`
-- 

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `roles`
-- 

INSERT INTO `roles` VALUES (1, 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `roles` VALUES (2, 'admin', 'Administrative user, has access to everything.');
INSERT INTO `roles` VALUES (3, 'company', 'Company account, has access to create event and edit company info');

-- --------------------------------------------------------

-- 
-- Table structure for table `roles_users`
-- 

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `roles_users`
-- 

INSERT INTO `roles_users` VALUES (1, 1);
INSERT INTO `roles_users` VALUES (2, 1);
INSERT INTO `roles_users` VALUES (3, 1);
INSERT INTO `roles_users` VALUES (4, 1);
INSERT INTO `roles_users` VALUES (5, 1);
INSERT INTO `roles_users` VALUES (6, 3);
INSERT INTO `roles_users` VALUES (7, 3);
INSERT INTO `roles_users` VALUES (8, 1);
INSERT INTO `roles_users` VALUES (8, 2);
INSERT INTO `roles_users` VALUES (8, 3);
INSERT INTO `roles_users` VALUES (9, 3);
INSERT INTO `roles_users` VALUES (10, 1);
INSERT INTO `roles_users` VALUES (10, 3);
INSERT INTO `roles_users` VALUES (11, 1);
INSERT INTO `roles_users` VALUES (11, 3);
INSERT INTO `roles_users` VALUES (12, 1);
INSERT INTO `roles_users` VALUES (12, 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `skills`
-- 

CREATE TABLE `skills` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(100) collate utf8_unicode_ci NOT NULL,
  `description` mediumtext collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `skills`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL default '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL default '0',
  `last_login` int(10) unsigned default NULL,
  `nickname` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `birthday` date NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `profile_image` text NOT NULL,
  `quote` text NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `sex` char(1) NOT NULL,
  `website` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'xinexo@gmail.com', 'nongtum', 'e5851f42ce72252a4128014028921086917349a4e39633f8a16eaa9f910cd2b2', 1, 1321097714, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (2, 'xinexo@gmails.com', 'autumn', '2b6d678710e375762de7e2c97c4263ef4409eea5d54631bf3f4ac72313a4562b', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (3, 'xinexo@yahoo.com', 'nongmay', '11e8ef6433a4bf1267257d9a944252e01541f27bf3ebdc0e08f9c2c08e63ee20', 9, 1321517706, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (4, 'a@b.com', 'asdf', 'b30c9474902607d01c76cc47aec9fbdbb5f5f7da70711ff902621df55d9a18d8', 1, 1321511993, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (5, 'x@x.com', 'dsfadsf', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (6, 'lnw@lnw.com', 'com', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (7, 'com@com2.com', 'company', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (8, 'com3@com.com', 'com3', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 10, 1322102789, 'lnw', 'first', 'last', '2011-11-17', '121212', 'address', '4eca8b076063a1app_page.png', 'quote', 'description', '2011-11-24 09:46:29', '', '');
INSERT INTO `users` VALUES (9, 'com4@com.com', 'com4', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00', '', '');
INSERT INTO `users` VALUES (10, 'tum@tum.com', 'tum', 'aa13a3b87cb902baa173a33865b268c1a2943ce2f1481c548a50eaf903078aa0', 2, 1337182188, '', '', '', '0000-00-00', '', '', '', '', '', '2012-05-16 22:29:48', '', '');
INSERT INTO `users` VALUES (11, 'tum@tmmm.com', 'tumnaja', 'aa13a3b87cb902baa173a33865b268c1a2943ce2f1481c548a50eaf903078aa0', 1, 1337339199, '', '', '', '0000-00-00', '', '', '', '', '', '2012-05-18 18:06:39', '', '');
INSERT INTO `users` VALUES (12, 'user@name.com', 'username', '2618af841fa649acdbb657af9bab4c045989a920728fe6d83dd03211a18b60f6', 17, 1339332632, '', '', '', '0000-00-00', '', '', '', '', '', '2012-06-10 19:50:32', '', '');
INSERT INTO `users` VALUES (13, 'xxx@xxx.com', 'someone', '72426db907029d4d6beca11499605c584249beb20ced4885b6f9b155e38327b5', 1, 1338394301, 'ฮ่วย', 'ใครเอ่ย', 'บ้านรวย', '1979-05-22', '0891130030', '1117 ลาดพร้าว71 กรุงเทพ', '', '', '', '2012-05-30 23:13:54', 'f', 'https://www.facebook.com/');

-- --------------------------------------------------------

-- 
-- Table structure for table `users_activities`
-- 

CREATE TABLE `users_activities` (
  `user_id` int(11) NOT NULL default '0',
  `activity_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `test` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`user_id`,`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `users_activities`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users_events`
-- 

CREATE TABLE `users_events` (
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `users_events`
-- 

INSERT INTO `users_events` VALUES (3, 8, 2, '2011-11-22 22:22:24');
INSERT INTO `users_events` VALUES (0, 0, 3, '2011-11-22 22:12:22');

-- --------------------------------------------------------

-- 
-- Table structure for table `users_locations`
-- 

CREATE TABLE `users_locations` (
  `user_id` int(11) NOT NULL default '0',
  `location_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `users_locations`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users_occupations`
-- 

CREATE TABLE `users_occupations` (
  `user_id` int(11) NOT NULL default '0',
  `occupation_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`occupation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `users_occupations`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `users_skills`
-- 

CREATE TABLE `users_skills` (
  `user_id` int(11) NOT NULL default '0',
  `skill_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `users_skills`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user_timebanks`
-- 

CREATE TABLE `user_timebanks` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `status` int(11) default NULL,
  `hour` int(11) NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `user_timebanks`
-- 

INSERT INTO `user_timebanks` VALUES (1, 8, 1, 12, '2011-11-22 23:16:47');
INSERT INTO `user_timebanks` VALUES (2, 8, 1, 12, '2011-11-22 23:16:55');
INSERT INTO `user_timebanks` VALUES (3, 8, 1, 5, '2011-11-22 23:22:44');
INSERT INTO `user_timebanks` VALUES (4, 8, 1, 122, '2011-11-22 23:25:50');

-- --------------------------------------------------------

-- 
-- Table structure for table `user_tokens`
-- 

CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `user_tokens`
-- 

INSERT INTO `user_tokens` VALUES (1, 8, 'e0ce124ea238c9131da145270845a7e59909abd1', '75b36edce2e988b45d5101ed6f375f4a5950f7fd', '', 0, 1322746156);
INSERT INTO `user_tokens` VALUES (2, 8, 'e0ce124ea238c9131da145270845a7e59909abd1', '021dc1307855bdfdd2600d286f5e51456758bc0a', '', 0, 1322746276);
INSERT INTO `user_tokens` VALUES (3, 10, '480450a02972ac1a7ac3ac0324afc9f6045bca51', '86019671fd0380be2958beab8017b099bb483b7e', '', 0, 1338285987);
INSERT INTO `user_tokens` VALUES (4, 12, 'dba0d6492600f97f28531a1e52bc6fd0db02d0c0', 'ae731e1b76892b6d0c51487f93c310affa445296', '', 0, 1338642368);
INSERT INTO `user_tokens` VALUES (5, 12, '67acfb37e415e05ec3cfa0f23e3f124803d8e2b5', '36ad9e3569c3da23d621c53b4050ebe2720cbc03', '', 0, 1340040511);
INSERT INTO `user_tokens` VALUES (6, 12, 'bc8694a19416f4ca3106fd74d6c05bf58f6dadec', '3ff8a5ee87c3e9419cbfa6fd0454ae5feb02feeb', '', 0, 1340212156);
