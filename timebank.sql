-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 18, 2012 at 11:16 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `timebank`
-- 

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `comments`
-- 

INSERT INTO `comments` VALUES (6, 2, 1, 1, '127.0.0.1', 'น่าไปจัง', '2012-06-28 02:03:35');
INSERT INTO `comments` VALUES (5, 2, 1, 3, '127.0.0.1', 'สวดยวดไปเลย จุบูจุบู ', '2012-06-28 01:56:20');

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
  `image` mediumtext collate utf8_unicode_ci,
  `skills` text collate utf8_unicode_ci NOT NULL,
  `languates` text collate utf8_unicode_ci NOT NULL,
  `technical` text collate utf8_unicode_ci NOT NULL,
  `days` text collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `tags` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `events`
-- 

INSERT INTO `events` VALUES (1, 'สร้างงานอาสาใหม่/ในโครงการ//รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา /สถานที่', '2012-06-03', '2012-06-13', '2012-06-03', '2012-06-30', '00:00:00', '23:59:59', '00:00:00', '23:59:59', 3, NULL, 'สถานที่', 'สถานที่', '1', '10000', 1, 'สร้างงานอาสาใหม่', NULL, NULL, 'ในโครงการ', 423, 672, 'รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา ', 'รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา ', 'รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา ', 0, '', '4feb56e804234Thai_Health.jpg', '', '', '', '', '2012-06-28 01:54:33', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');
INSERT INTO `events` VALUES (2, 'asfasf/asfasfasf//aradasdasdad/fsdfsf', '2012-07-02', '2012-07-05', '2012-07-15', '2012-07-19', '00:00:00', '23:59:59', '00:00:00', '23:59:59', 3, NULL, 'fsdfsf', 'sdfsfsd', '4', 'fsdfsf', 1, 'asfasf', NULL, NULL, 'asfasfasf', 32, 120, 'aradasdasdad', 'afafafadgadgdagadg', 'agdagadgagadgag', 0, 'gsdfgdgdfg', NULL, 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์), ว่ายน้ำ, ', 'เยอรมัน, ', '', '', '2012-07-16 22:31:05', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ, อาหารและโภชนาการ, ');
INSERT INTO `events` VALUES (3, 'xxxxxxxxx/xxxxxxx//asdfasfdasdfasdfaasdfsafd/dsfasd', '2012-07-09', '2012-07-27', '2012-07-01', '2012-07-21', '00:00:00', '23:59:59', '00:00:00', '23:59:59', 3, NULL, 'dsfasd', 'asdfasd', '1', 'fasdfsf', 1, 'xxxxxxxxx', NULL, NULL, 'xxxxxxx', 323, 504, 'asdfasfdasdfasdfaasdfsafd', 'asfdasdfsdfasfdasdfasfd', 'asdfasfdasfdasfdasfdafdasdfasfd', 0, '', NULL, ' 2405|2406|2701T=qweqw|2702T=eqweqw|2703T=eqweqwe|2801T=qweqew|2802T=qweqe|', '', '', '', '2012-07-18 22:01:02', '');

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
-- Table structure for table `images`
-- 

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL auto_increment,
  `event_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `images`
-- 

INSERT INTO `images` VALUES (1, 1, 'เขียนคำบรรยายที่นี่', '4feb59d36ea9820090817000711-XA9VN.jpg', '2012-06-28 02:06:59');
INSERT INTO `images` VALUES (2, 1, 'เขียนคำบรรยายที่นี่', '4feb59d9946ddc98232.jpg', '2012-06-28 02:07:05');
INSERT INTO `images` VALUES (3, 1, 'เขียนคำบรรยายที่นี่', '4feb59df325bdiq08d9bff91fe369a9c8d69c0186092bb7.jpg', '2012-06-28 02:07:11');

-- --------------------------------------------------------

-- 
-- Table structure for table `inboxes`
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
-- Dumping data for table `inboxes`
-- 

INSERT INTO `inboxes` VALUES (1, 0, 3, 1, 0, 'ทดสอบ1', 'messageสำหรับทดสอบ1', 0, '2012-06-11 10:03:47');
INSERT INTO `inboxes` VALUES (2, 0, 3, 0, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-06-11 10:04:11');
INSERT INTO `inboxes` VALUES (3, 0, 3, 1, 0, 'ทดสอ3', 'messageสำหรับทดสอบ3', 0, '2012-06-11 10:04:11');

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
-- Table structure for table `news`
-- 

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `pic` text NOT NULL,
  `video` text NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `news`
-- 

INSERT INTO `news` VALUES (1, 'ข่าวล่ามาไว', 'เย้ๆๆๆๆๆๆๆๆๆๆๆ', '', '', '2012-06-17 19:24:41');

-- --------------------------------------------------------

-- 
-- Table structure for table `organizations`
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
-- Dumping data for table `organizations`
-- 

INSERT INTO `organizations` VALUES (3, '', 2, 0, 1, 0, 'ชื่ออออออออออออ', 'ดดดดดดดดดดดดดดดดวัตถุประสงค์', 'ลักษณะ', 'ที่อยู่', 'เขต', 'จังหวัด', 'ไปรษณีย์', 'บ้าน', 'โทรสาร', 'บ้าน', 'facebook.com/jitarsa', 'twitter.com/jitarsa', 'http://www.jitarsa.orgg', '4ec7092217c96thai.png', '2012-06-11 09:48:35');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
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
  `skills` text NOT NULL,
  `interest_tags` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'volunteer@jitarsa.org', '029e4aa7146dceb2b9adda3ce9d9bfaa', 'volunteer nakrub', 'nickname', 0, 'first_name', 'last_name', '2012-06-06', '123124124', 'adfa', '4feb58e974ea1volunteer-hands.jpg', '', '', '2012-07-16 21:19:31', '', '13123', '2303|2304|2305|2306|2307|', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ');
INSERT INTO `users` VALUES (2, 'org@jitarsa.org', '741a8f387c2c3f39ba241937a47c1e0d', 'org nakrub', 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '2012-06-28 01:58:29', '', '', '', '');

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
INSERT INTO `users_events` VALUES (1, 1, 0, '2012-06-28 02:03:39');
INSERT INTO `users_events` VALUES (1, 2, 0, '2012-07-16 22:31:27');

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
  `info` text collate utf8_unicode_ci NOT NULL,
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
INSERT INTO `user_timebanks` VALUES (1, 1, 1, 23, '2012-07-02 22:05:25');
INSERT INTO `user_timebanks` VALUES (2, 1, 1, 2, '2012-07-16 21:35:00');
INSERT INTO `user_timebanks` VALUES (3, 1, 1, 2222, '2012-07-16 21:35:05');
