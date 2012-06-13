-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.45
-- รุ่นของ PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `timebank`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `comments`
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
-- dump ตาราง `comments`
-- 

INSERT INTO `comments` VALUES (1, 2, 3, 0, '127.0.0.1', 'Add comment', '2011-11-22 01:41:20');
INSERT INTO `comments` VALUES (2, 2, 3, 0, '127.0.0.1', 'wefaewf', '2011-11-22 01:47:59');
INSERT INTO `comments` VALUES (3, 2, 3, 0, '127.0.0.1', 'สาดดดด', '2011-11-22 01:53:35');
INSERT INTO `comments` VALUES (4, 2, 3, 8, '127.0.0.1', 'กากมาแล้ว', '2011-11-22 01:56:11');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `contactusforms`
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
-- dump ตาราง `contactusforms`
-- 

INSERT INTO `contactusforms` VALUES (1, 'aa', 'bb', 'xinexo@gmail.com', 'asdf', 'tp[occcccccccc', 'อยากได้ๆๆๆ', '2012-06-05 11:39:50');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `emailcomingsoons`
-- 

CREATE TABLE `emailcomingsoons` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(256) collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- 
-- dump ตาราง `emailcomingsoons`
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
-- โครงสร้างตาราง `events`
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
  `organization_id` int(11) default NULL,
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
-- dump ตาราง `events`
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
-- โครงสร้างตาราง `helps`
-- 

CREATE TABLE `helps` (
  `id` int(11) NOT NULL auto_increment,
  `topic` varchar(255) collate utf8_unicode_ci NOT NULL,
  `message` text collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `helps`
-- 

INSERT INTO `helps` VALUES (1, 'ไม่ทราบว่าอยากบริจาคเงินกับทางเว็บไซต์ต้องทำอย่างไร ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2012-06-05 12:18:10');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `inboxes`
-- 

CREATE TABLE `inboxes` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `is_removed` tinyint(1) NOT NULL default '0',
  `is_read` tinyint(1) NOT NULL default '0',
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `message` text collate utf8_unicode_ci NOT NULL,
  `send_status` int(11) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `inboxes`
-- 

INSERT INTO `inboxes` VALUES (1, 0, 3, 1, 0, 'ทดสอบ1', 'messageสำหรับทดสอบ1', 0, '2012-06-11 10:03:47');
INSERT INTO `inboxes` VALUES (2, 0, 3, 0, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-06-11 10:04:11');
INSERT INTO `inboxes` VALUES (3, 0, 3, 1, 0, 'ทดสอ3', 'messageสำหรับทดสอบ3', 0, '2012-06-11 10:04:11');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `locations`
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
-- dump ตาราง `locations`
-- 

INSERT INTO `locations` VALUES (1, 'กรุงเทพ', NULL, NULL, NULL, '2011-11-17 20:42:34');
INSERT INTO `locations` VALUES (2, 'นครราชสีมา', NULL, NULL, NULL, '2011-11-17 20:42:34');
INSERT INTO `locations` VALUES (3, 'เชียงใหม่', NULL, NULL, NULL, '2011-11-17 20:42:44');
INSERT INTO `locations` VALUES (4, 'ภูเก็ต', NULL, NULL, NULL, '2011-11-17 20:42:44');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `occupations`
-- 

CREATE TABLE `occupations` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci,
  `description` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `occupations`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `organizations`
-- 

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL auto_increment,
  `search_temp` varchar(255) collate utf8_unicode_ci NOT NULL,
  `user_id` int(11) default NULL,
  `noti_volunteerregister` tinyint(1) NOT NULL default '1',
  `noti_eventalmostend` tinyint(1) NOT NULL default '1',
  `noti_eventend` tinyint(1) NOT NULL default '1',
  `name` mediumtext collate utf8_unicode_ci,
  `objective` mediumtext collate utf8_unicode_ci,
  `activity` mediumtext collate utf8_unicode_ci,
  `address` mediumtext collate utf8_unicode_ci,
  `district` mediumtext collate utf8_unicode_ci NOT NULL,
  `province` mediumtext collate utf8_unicode_ci NOT NULL,
  `postcode` tinytext collate utf8_unicode_ci NOT NULL,
  `homephone` tinytext collate utf8_unicode_ci NOT NULL,
  `fax` tinytext collate utf8_unicode_ci NOT NULL,
  `contactperson` tinytext collate utf8_unicode_ci NOT NULL,
  `facebook` tinytext collate utf8_unicode_ci NOT NULL,
  `twitter` tinytext collate utf8_unicode_ci NOT NULL,
  `website` mediumtext collate utf8_unicode_ci,
  `logo` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `organizations`
-- 

INSERT INTO `organizations` VALUES (1, '', 3, 1, 1, 1, 'new company', 'new company', 'new company', 'new company', '', '', '', '', '', '', '', '', 'http://zanroo.com', NULL, '2011-11-15 21:35:05');
INSERT INTO `organizations` VALUES (2, '', 8, 1, 1, 1, 'com3com2', 'asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', '', '', '', '', '', '', '', '', '', NULL, '2011-11-18 14:40:55');
INSERT INTO `organizations` VALUES (3, '', 2, 0, 1, 0, 'ชื่ออออออออออออ', 'ดดดดดดดดดดดดดดดดวัตถุประสงค์', 'ลักษณะ', 'ที่อยู่', 'เขต', 'จังหวัด', 'ไปรษณีย์', 'บ้าน', 'โทรสาร', 'บ้าน', 'facebook.com/jitarsa', 'twitter.com/jitarsa', 'http://www.jitarsa.orgg', '4ec7092217c96thai.png', '2012-06-11 09:48:35');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `skills`
-- 

CREATE TABLE `skills` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(100) collate utf8_unicode_ci NOT NULL,
  `description` mediumtext collate utf8_unicode_ci NOT NULL,
  `moreinfo` tinyint(1) NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `skills`
-- 

INSERT INTO `skills` VALUES (10000, 'ความสามารถพิเศษ', 'Special Skill', 0, '2012-06-11 13:07:15');
INSERT INTO `skills` VALUES (10100, 'ทักษะทั่วไป', '', 0, '2012-06-11 13:08:24');
INSERT INTO `skills` VALUES (10101, 'การขับขี่พาหนะ', 'จักรยานยนต์, รถยนต์', 0, '2012-06-11 16:25:01');
INSERT INTO `skills` VALUES (10102, 'ว่ายน้ำ', '', 0, '2012-06-11 13:12:56');
INSERT INTO `skills` VALUES (10200, 'การใช้ภาษา', 'สื่อสารได้, อ่านเขียนได้, แปลได้', 0, '2012-06-11 16:24:03');
INSERT INTO `skills` VALUES (10201, 'อังกฤษ', '', 0, '2012-06-11 16:23:08');
INSERT INTO `skills` VALUES (10202, 'จีน', '', 0, '2012-06-11 16:23:43');
INSERT INTO `skills` VALUES (10203, 'เยอรมัน', '', 0, '2012-06-11 16:24:26');
INSERT INTO `skills` VALUES (10204, 'ญี่ปุ่น', '', 0, '2012-06-11 16:24:28');
INSERT INTO `skills` VALUES (10205, 'ฝรั่งเศส', '', 0, '2012-06-11 16:24:31');
INSERT INTO `skills` VALUES (10299, 'อื่นๆ', 'ให้ระบุ', 1, '2012-06-11 13:22:23');
INSERT INTO `skills` VALUES (10300, 'งานดูแล', '', 0, '2012-06-11 13:22:23');
INSERT INTO `skills` VALUES (10301, 'ทำอาหาร', '', 0, '2012-06-11 13:23:18');
INSERT INTO `skills` VALUES (10302, 'เลี้ยงเด็ก', '', 0, '2012-06-11 13:23:18');
INSERT INTO `skills` VALUES (10303, 'ดูแลคนชรา', '', 0, '2012-06-11 13:23:20');
INSERT INTO `skills` VALUES (10304, 'เย็บปักถักร้อย', '', 0, '2012-06-11 13:23:20');
INSERT INTO `skills` VALUES (10400, 'นันทนาการ', '', 0, '2012-06-11 13:26:26');
INSERT INTO `skills` VALUES (10401, 'เล่นดนตรี', 'ระบุชนิดเครื่องดนตรี', 1, '2012-06-11 13:26:26');
INSERT INTO `skills` VALUES (10402, 'สอนกีฬา', 'ระบุชนิดกีฬา', 1, '2012-06-11 13:27:52');
INSERT INTO `skills` VALUES (10403, 'วาดภาพ', 'ภาพเหมือน/การ์ตูน/ฯลฯ', 1, '2012-06-11 13:27:52');
INSERT INTO `skills` VALUES (10404, 'เต้นรำ', '', 0, '2012-06-11 13:27:54');
INSERT INTO `skills` VALUES (10405, 'ร้องเพลง', '', 0, '2012-06-11 13:27:54');
INSERT INTO `skills` VALUES (20000, 'ทักษะวิชาชีพ', 'Professional Skill', 0, '2012-06-11 13:30:27');
INSERT INTO `skills` VALUES (20100, 'งานช่างเทคนิค', '', 0, '2012-06-11 13:30:27');
INSERT INTO `skills` VALUES (20101, 'ช่างอิเลคทรอนิคส์', '', 0, '2012-06-11 13:31:13');
INSERT INTO `skills` VALUES (20102, 'ช่างไฟฟ้า', '', 0, '2012-06-11 13:31:13');
INSERT INTO `skills` VALUES (20103, 'ช่างไม้', '', 0, '2012-06-11 13:31:35');
INSERT INTO `skills` VALUES (20104, 'ช่างปูน', '', 0, '2012-06-11 13:31:35');
INSERT INTO `skills` VALUES (20105, 'ช่างโลหะ', '', 0, '2012-06-11 13:32:10');
INSERT INTO `skills` VALUES (20106, 'ช่างประปา', '', 0, '2012-06-11 13:32:10');
INSERT INTO `skills` VALUES (20107, 'ช่างสี', '', 0, '2012-06-11 13:33:45');
INSERT INTO `skills` VALUES (20200, 'วิทยาศาสตร์และเทคโนโลยี', '', 0, '2012-06-11 13:33:45');
INSERT INTO `skills` VALUES (20201, 'วิทยาศาสตร์', 'ระบุสาขา', 1, '2012-06-11 13:34:12');
INSERT INTO `skills` VALUES (20202, 'คอมพิวเตอร์และไอที', 'ระบุสาขา', 1, '2012-06-11 13:36:00');
INSERT INTO `skills` VALUES (20203, 'วิศวกรรม', 'ระบุสาขา', 1, '2012-06-11 13:36:06');
INSERT INTO `skills` VALUES (20204, 'สถาปัตยกรรม', 'ระบุสาขา', 1, '2012-06-11 13:36:11');
INSERT INTO `skills` VALUES (20300, 'สุขภาพ', '', 0, '2012-06-11 13:37:02');
INSERT INTO `skills` VALUES (20301, 'แพทย์', 'ระบุสาขา', 1, '2012-06-11 13:37:02');
INSERT INTO `skills` VALUES (20302, 'พยาบาล', 'ระบุสาขา', 1, '2012-06-11 13:37:26');
INSERT INTO `skills` VALUES (20303, 'ทันตแพทย์', '', 0, '2012-06-11 13:37:26');
INSERT INTO `skills` VALUES (20304, 'เทคนิคการแพทย์', '', 0, '2012-06-11 13:38:14');
INSERT INTO `skills` VALUES (20305, 'จิตวิทยา', '', 0, '2012-06-11 13:38:14');
INSERT INTO `skills` VALUES (20306, 'เภสัชศาสตร์', '', 0, '2012-06-11 13:38:44');
INSERT INTO `skills` VALUES (20307, 'สาธารณสุข', '', 0, '2012-06-11 13:38:44');
INSERT INTO `skills` VALUES (20308, 'สัตวแพทย์', '', 0, '2012-06-11 13:39:32');
INSERT INTO `skills` VALUES (20400, 'สังคมศาตร์และมนุษย์ศาสตร์', '', 0, '2012-06-11 13:39:32');
INSERT INTO `skills` VALUES (20401, 'กฎหมาย', '', 0, '2012-06-11 13:39:48');
INSERT INTO `skills` VALUES (20402, 'ประวัติศาสตร์', '', 0, '2012-06-11 13:39:48');
INSERT INTO `skills` VALUES (20403, 'เศรษฐศาสตร์', '', 0, '2012-06-11 13:40:27');
INSERT INTO `skills` VALUES (20404, 'บรรณารักษ์', '', 0, '2012-06-11 13:40:27');
INSERT INTO `skills` VALUES (20405, 'สังคมสงเคราะห์', '', 0, '2012-06-11 13:41:16');
INSERT INTO `skills` VALUES (20499, 'อื่นๆ', 'ระบุสาขา', 1, '2012-06-11 13:41:16');
INSERT INTO `skills` VALUES (20500, 'บริหารธุรกิจ', '', 0, '2012-06-11 13:42:27');
INSERT INTO `skills` VALUES (20501, 'การบัญชี', '', 0, '2012-06-11 13:42:27');
INSERT INTO `skills` VALUES (20502, 'การเงิน', '', 0, '2012-06-11 13:42:41');
INSERT INTO `skills` VALUES (20503, 'การตลาด', '', 0, '2012-06-11 13:42:41');
INSERT INTO `skills` VALUES (20504, 'การบริหารจัดการ', '', 0, '2012-06-11 13:45:07');
INSERT INTO `skills` VALUES (20600, 'ศิลปวัฒนธรรม', '', 0, '2012-06-11 13:45:07');
INSERT INTO `skills` VALUES (20601, 'การละคร', '', 0, '2012-06-11 13:45:37');
INSERT INTO `skills` VALUES (20602, 'วรรณศิลป์', '', 0, '2012-06-11 13:45:37');
INSERT INTO `skills` VALUES (20603, 'โบราณคดี', '', 0, '2012-06-11 13:46:29');
INSERT INTO `skills` VALUES (20604, 'ภาพยนตร์', '', 0, '2012-06-11 13:46:29');
INSERT INTO `skills` VALUES (20605, 'โทรทัศน์/วิทยุ', '', 0, '2012-06-11 13:47:01');
INSERT INTO `skills` VALUES (20606, 'การโฆษณาและประชาสัมพันธ์', '', 0, '2012-06-11 13:47:01');
INSERT INTO `skills` VALUES (20607, 'วารสารศาสตร์', '', 0, '2012-06-11 13:47:28');
INSERT INTO `skills` VALUES (20608, 'จิตรกรรมและประติมากรรม', '', 0, '2012-06-11 13:47:28');
INSERT INTO `skills` VALUES (20609, 'ออกแบบและตกแต่งภายใน', '', 0, '2012-06-11 13:48:21');
INSERT INTO `skills` VALUES (20700, 'การศึกษา', '', 0, '2012-06-11 13:48:21');
INSERT INTO `skills` VALUES (20701, 'งานสอน', 'ระบุสาขา', 1, '2012-06-11 13:49:19');
INSERT INTO `skills` VALUES (20702, 'งานประเมิน', 'ระบุสาขา', 1, '2012-06-11 13:49:19');
INSERT INTO `skills` VALUES (20703, 'งานวิจัย', 'ระบุสาขา', 1, '2012-06-11 13:49:47');
INSERT INTO `skills` VALUES (20800, 'สิ่งแวดล้อมและการเกษตร', '', 0, '2012-06-11 13:49:47');
INSERT INTO `skills` VALUES (20801, 'สิ่งแวดล้อม', 'ระบุสาขา', 1, '2012-06-11 13:50:36');
INSERT INTO `skills` VALUES (20802, 'การเกษตร', 'ระบุสาขา', 1, '2012-06-11 13:50:36');
INSERT INTO `skills` VALUES (20803, 'สัตวบาล', '', 0, '2012-06-11 13:51:06');
INSERT INTO `skills` VALUES (20804, 'การประมง', '', 0, '2012-06-11 13:51:06');
INSERT INTO `skills` VALUES (20805, 'วนศาสตร์', '', 0, '2012-06-11 13:51:32');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users`
-- 

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(127) NOT NULL,
  `password` varchar(64) NOT NULL,
  `displayname` text NOT NULL,
  `nickname` text NOT NULL,
  `role` int(11) NOT NULL,
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
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `users`
-- 

INSERT INTO `users` VALUES (1, 'volunteer@jitarsa.org', '029e4aa7146dceb2b9adda3ce9d9bfaa', 'volunteer nakrub', '', 0, '', '', '0000-00-00', '', '', '', '', '', '2012-06-10 21:35:10', '', '');
INSERT INTO `users` VALUES (2, 'org@jitarsa.org', '741a8f387c2c3f39ba241937a47c1e0d', 'org nakrub', '', 1, '', '', '0000-00-00', '', '', '', '', '', '2012-06-10 22:50:44', '', '');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users_events`
-- 

CREATE TABLE `users_events` (
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `users_events`
-- 

INSERT INTO `users_events` VALUES (3, 8, 2, '2011-11-22 22:22:24');
INSERT INTO `users_events` VALUES (0, 0, 3, '2011-11-22 22:12:22');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users_locations`
-- 

CREATE TABLE `users_locations` (
  `user_id` int(11) NOT NULL default '0',
  `location_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `users_locations`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users_occupations`
-- 

CREATE TABLE `users_occupations` (
  `user_id` int(11) NOT NULL default '0',
  `occupation_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`occupation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `users_occupations`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users_skills`
-- 

CREATE TABLE `users_skills` (
  `user_id` int(11) NOT NULL default '0',
  `skill_id` int(11) NOT NULL default '0',
  `info` text collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `users_skills`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user_timebanks`
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
-- dump ตาราง `user_timebanks`
-- 

INSERT INTO `user_timebanks` VALUES (1, 8, 1, 12, '2011-11-22 23:16:47');
INSERT INTO `user_timebanks` VALUES (2, 8, 1, 12, '2011-11-22 23:16:55');
INSERT INTO `user_timebanks` VALUES (3, 8, 1, 5, '2011-11-22 23:22:44');
INSERT INTO `user_timebanks` VALUES (4, 8, 1, 122, '2011-11-22 23:25:50');
