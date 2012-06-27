-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 28, 2012 at 03:12 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `events`
-- 

INSERT INTO `events` VALUES (1, 'สร้างงานอาสาใหม่/ในโครงการ//รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา /สถานที่', '2012-06-03', '2012-06-13', '2012-06-03', '2012-06-30', '00:00:00', '23:59:59', '00:00:00', '23:59:59', 3, NULL, 'สถานที่', 'สถานที่', '1', '10000', 1, 'สร้างงานอาสาใหม่', NULL, NULL, 'ในโครงการ', 423, 672, 'รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา ', 'รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา ', 'รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา รายละเอียดของงานอาสา ', 0, '', '4feb56e804234Thai_Health.jpg', '', '', '', '', '2012-06-28 01:54:33', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ');

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
-- Table structure for table `occupations`
-- 

CREATE TABLE `occupations` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci,
  `description` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `occupations`
-- 

INSERT INTO `occupations` VALUES (1, 'งานอาสาทั่วไป', NULL, '2012-06-22 20:21:11');
INSERT INTO `occupations` VALUES (2, 'กู้ภัยและฟื้นฟูจากภัยพิบัติ', NULL, '2012-06-22 20:21:11');
INSERT INTO `occupations` VALUES (3, 'ประสานงานและบริหารจัดการ', NULL, '2012-06-22 20:22:02');
INSERT INTO `occupations` VALUES (4, 'ไอที และคอมพิวเตอร์กราฟฟิค', NULL, '2012-06-22 20:22:02');
INSERT INTO `occupations` VALUES (5, 'สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด', NULL, '2012-06-22 20:22:19');
INSERT INTO `occupations` VALUES (6, 'สุขภาพและสาธารณสุข', NULL, '2012-06-22 20:22:19');
INSERT INTO `occupations` VALUES (7, 'ก่อสร้างและงานช่างเทคนิค', NULL, '2012-06-22 20:22:30');
INSERT INTO `occupations` VALUES (8, 'กฎหมายและกระบวนการยุติธรรม', NULL, '2012-06-22 20:22:30');
INSERT INTO `occupations` VALUES (9, 'การศึกษาและฝึกอบรม', NULL, '2012-06-22 20:22:42');
INSERT INTO `occupations` VALUES (10, 'สิ่งแวดล้อมและการเกษตร', NULL, '2012-06-22 20:22:42');
INSERT INTO `occupations` VALUES (11, 'ศาสนาและปฏิบัติธรรม', NULL, '2012-06-22 20:22:58');
INSERT INTO `occupations` VALUES (12, 'หัตถกรรมและงานฝีมือ ', NULL, '2012-06-22 20:22:58');
INSERT INTO `occupations` VALUES (13, 'ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ', NULL, '2012-06-22 20:23:12');
INSERT INTO `occupations` VALUES (14, 'อาหารและโภชนาการ', NULL, '2012-06-22 20:23:12');
INSERT INTO `occupations` VALUES (15, 'เด็กและเยาวชน', NULL, '2012-06-22 20:23:22');
INSERT INTO `occupations` VALUES (16, 'สตรี', NULL, '2012-06-22 20:23:22');
INSERT INTO `occupations` VALUES (17, 'ผู้พิการ', NULL, '2012-06-22 20:23:33');
INSERT INTO `occupations` VALUES (18, 'ผู้สูงอายุและครอบครัว', NULL, '2012-06-22 20:23:33');
INSERT INTO `occupations` VALUES (19, 'สุนัข แมว และสัตว์เลี้ยง', NULL, '2012-06-22 20:23:42');

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
-- Table structure for table `skills`
-- 

CREATE TABLE `skills` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(100) collate utf8_unicode_ci NOT NULL,
  `description` mediumtext collate utf8_unicode_ci NOT NULL,
  `moreinfo` tinyint(1) NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20806 ;

-- 
-- Dumping data for table `skills`
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
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'volunteer@jitarsa.org', '029e4aa7146dceb2b9adda3ce9d9bfaa', 'volunteer nakrub', 'nickname', 0, 'first_name', 'last_name', '2012-06-13', '', '', '4feb58e974ea1volunteer-hands.jpg', '', '', '2012-06-28 02:03:05', '', '');
INSERT INTO `users` VALUES (2, 'org@jitarsa.org', '741a8f387c2c3f39ba241937a47c1e0d', 'org nakrub', 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '2012-06-28 01:58:29', '', '');

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
