-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2012 at 03:47 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timebank_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsmses`
--

CREATE TABLE `adminsmses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `send_time` datetime NOT NULL,
  `sent_time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `adminsmses`
--

INSERT INTO `adminsmses` (`id`, `message`, `send_time`, `sent_time`, `status`) VALUES
(8, 'ส้งอีกๆๆ', '0000-00-00 00:00:00', '2012-11-14 02:02:29', 1),
(9, 'asdfas', '2012-11-07 01:30:00', '2012-11-14 02:47:08', 1),
(10, 'asdfasd', '0000-00-00 00:00:00', '2012-11-14 02:47:12', 1),
(11, 'asfdasdf', '2012-11-29 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'vvvv', '0000-00-00 00:00:00', '2012-11-14 02:47:52', 1),
(13, 'asdfasdfasdf', '0000-00-00 00:00:00', '2012-11-14 02:48:06', 1),
(14, 'asdfasdf', '2012-11-21 00:00:00', '0000-00-00 00:00:00', 0),
(15, 'adf', '2012-11-01 00:00:00', '2012-11-14 02:48:06', 1),
(16, '﻿ ­\n\n    ใช้บริการธนาคารจิตอาสา\n    ฝึกอบรมและความรู้\n    ข่าวแวดวง\n    สนับสนุนธนาคารจิตอาสา\n    เกี่ยวกับเรา\n\n    สวัสดีครับ :-) volunteer nakrub1\n    ข้อความเตือน (0)\n    ตั้งค่าบัญชีผู้ใช้\n    ออกจากระบบ\n\nหน้าหลัก admin | ส่ง sms | สมาชิกอาสา | สมาชิกองกร | งานอาสา | ฝีกอบรม | ความรู้ | ข่าว | ช่วยเหลือ (help) - | - ระบบแนะนำงานอาสา (Matching)\n\nส่งข่าวสารทาง SMS ให้ อาสาสมัคร\nจำนวนทั้งหมด : 0 ตัวอักษร\nหากข้อความเป็นอังกฤษล้วน 160 char = 1 message หากมีภาษาไทยบนด้วย 70 char = 1 message\nเลือกวันเวลา :\nหากเลือกเวลาก่อน ปัจจุบันระบบจะทำการส่งทั้นที่\n\nid		ข้อความ		กำหนดส่ง 	status 	ส่งแล้วเวลา 	ตัวเลือก\n15 	adf 	2012-11-01 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n14 	asdfasdf 	2012-11-21 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n13 	asdfasdfasdf 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n12 	vvvv 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:52 	ลบ\n11 	asfdasdf 	2012-11-29 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n10 	asdfasd 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:12 	ลบ\n9 	asdfas 	2012-11-07 01:30:00 	ส่งแล้ว 	2012-11-14 02:47:08 	ลบ\n8 	ส้งอีกๆๆ 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:02:29 	ลบ\n\n    เงื่อนไขและข้อตกลงการใช้บริการ\n    นโยบายความเป็นส่วนตัว\n    ติดต่อธนาคารจิตอาสา\n\nนโยบายลิขสิทธิ์ สำหรับข้อมูลต่างๆ บน website และ mobile app\n\nสัญญาอนุญาตของครีเอทีฟคอมมอนส์ ผลงานนี้ โดย ธนาคารจิตอาสา ใช้ สัญญาอนุญาตของครีเอทีฟคอมมอนส์.....แบบ แสดงที่มา-ไม่ใช้เพื่อการค้า 3.0 ต้นฉบับ.\n', '0000-00-00 00:00:00', '2012-11-19 23:17:10', 1),
(17, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '0000-00-00 00:00:00', '2012-11-19 23:17:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `organization_id` int(11) NOT NULL,
  `recommend` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `contactusforms`
--

CREATE TABLE `contactusforms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactusforms`
--

INSERT INTO `contactusforms` (`id`, `name`, `surname`, `email`, `phoneno`, `topic`, `message`, `created`) VALUES
(1, 'aa', 'bb', 'xinexo@gmail.com', 'asdf', 'tp[occcccccccc', 'อยากได้ๆๆๆ', '2012-06-05 04:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `emailcomingsoons`
--

CREATE TABLE `emailcomingsoons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `emailcomingsoons`
--

INSERT INTO `emailcomingsoons` (`id`, `email`, `created`) VALUES
(1, 'test@test.com', '2012-05-15 11:13:48'),
(2, 'tum@tum.com', '2012-05-15 11:13:56'),
(3, 'test@test.com', '2012-05-15 11:15:40'),
(4, 'test@test.com', '2012-05-15 11:15:46'),
(5, 'test@test.com', '2012-05-15 11:16:33'),
(6, 'test@test.com', '2012-05-15 11:18:59'),
(7, 'aa@aa.com', '2012-05-15 11:19:49'),
(8, 'team@shoppingsija.com', '2012-05-15 11:24:27'),
(9, 'xinexo@gmail.com', '2012-05-15 11:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search_temp` text COLLATE utf8_unicode_ci NOT NULL,
  `signup_begin_date` date DEFAULT NULL,
  `signup_end_date` date DEFAULT NULL,
  `volunteer_begin_date` date NOT NULL,
  `volunteer_end_date` date NOT NULL,
  `signup_begin_time` time NOT NULL,
  `signup_end_time` time NOT NULL,
  `volunteer_begin_time` time NOT NULL,
  `volunteer_end_time` time NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `location_name` text COLLATE utf8_unicode_ci NOT NULL,
  `location_district` text COLLATE utf8_unicode_ci NOT NULL,
  `location_province` text COLLATE utf8_unicode_ci NOT NULL,
  `location_postcode` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` mediumtext COLLATE utf8_unicode_ci,
  `contractor_name` mediumtext COLLATE utf8_unicode_ci,
  `project_name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `volunteer_need_count` int(11) DEFAULT NULL,
  `time_cost` int(11) DEFAULT NULL,
  `detail` mediumtext COLLATE utf8_unicode_ci,
  `travel_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `inquiry_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `is_need_expense` tinyint(1) NOT NULL DEFAULT '0',
  `expense_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci,
  `skills` text COLLATE utf8_unicode_ci NOT NULL,
  `languates` text COLLATE utf8_unicode_ci NOT NULL,
  `technical` text COLLATE utf8_unicode_ci NOT NULL,
  `days` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `volunteer_joined` int(11) NOT NULL,
  `recommend` int(1) NOT NULL,
  `almostsignupend_noti` tinyint(4) NOT NULL,
  `almoststart_noti` tinyint(4) NOT NULL,
  `eventclose_noti` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `search_temp`, `signup_begin_date`, `signup_end_date`, `volunteer_begin_date`, `volunteer_end_date`, `signup_begin_time`, `signup_end_time`, `volunteer_begin_time`, `volunteer_end_time`, `organization_id`, `location_id`, `location_name`, `location_district`, `location_province`, `location_postcode`, `status`, `name`, `phone`, `contractor_name`, `project_name`, `volunteer_need_count`, `time_cost`, `detail`, `travel_detail`, `inquiry_detail`, `is_need_expense`, `expense_detail`, `image`, `skills`, `languates`, `technical`, `days`, `timestamp`, `tags`, `message`, `volunteer_joined`, `recommend`, `almostsignupend_noti`, `almoststart_noti`, `eventclose_noti`) VALUES
(59, 'ธนาคารจิตอาสา/asdadad/asdada//adsfasdfasdfasd/asdfaasdfa', NULL, '2012-11-01', '2012-11-22', '2012-11-29', '00:00:00', '00:00:00', '00:00:00', '23:59:59', 5, NULL, 'asdfaasdfa', 'asdfasdf', '2', '12345', 1, 'asdadad', NULL, NULL, 'asdada', 123, 192, '<p>adsfasdfasdfasd</p>', '<p>fasdfasdfasdf</p>', '<p>asdfasdfasdfasdf</p>', 0, '', '50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png', ' ', '', '', '', '2012-11-21 18:21:01', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ, ', '', 0, 0, 0, 0, 0),
(61, 'ธนาคารจิตอาสา/asdadad/asdada//adsfasdfasdfasd/asdfaasdfa', NULL, '2012-11-08', '2012-11-20', '2012-11-30', '00:00:00', '00:00:00', '00:00:00', '23:59:59', 5, NULL, 'asdfaasdfa', 'asdfasdf', '2', '12345', 1, 'asdadad', NULL, NULL, 'asdada', 123, 264, '<p>adsfasdfasdfasd</p>', '<p>fasdfasdfasdf</p>', '<p>asdfasdfasdfasdf</p>', 0, '', '50abc3be32d0fScreen_Shot_2555-09-23_at_11.04.57_AM.png', ' ', '', '', '', '2012-11-20 18:08:16', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ, ', '', 0, 0, 0, 0, 0),
(62, 'ธนาคารจิตอาสา/asdfasdf/asfasdf//asdfasdf/asdfasdf', NULL, '2012-11-01', '2012-11-15', '2012-11-30', '00:00:00', '00:00:00', '00:00:00', '23:59:59', 5, NULL, 'asdfasdf', 'asfasdf', '1', '12345', 1, 'asdfasdf', NULL, NULL, 'asfasdf', 23, 384, '<p>asdfasdf</p>', '<p>fasdfasd</p>', '<p>fasdfasd</p>', 0, '', '50ad23da58b57Screen_Shot_2555-09-23_at_11.15.42_AM.png', ' ', '', '', '', '2012-11-21 18:56:27', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ, ', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `topic`, `message`, `timestamp`) VALUES
(5, 'ช่วยหน่อยๆๆๆๆๆ', '<ul>\n<li>ฟหดฟหกดฟห</li>\n<li>หกดห</li>\n<li>หกด</li>\n<li>ห</li>\n<li>กด<br />ตอบๆๆๆๆ</li>\n<li>หกด</li>\n<li>ฟห</li>\n</ul>', '2012-09-17 16:34:46'),
(3, '1231231312', '123123123123\r\n123123123123123123123123123123\r\n123123\r\n123123\r\n123123\r\n123123\r\n123123123123\r\n123123\r\n123123', '2012-09-17 15:53:26'),
(4, 'ทั่วไปๅๅๅ', '<p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequConsectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequConsectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequ</p>', '2012-09-17 15:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
  `highlight` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `event_id`, `description`, `image`, `highlight`, `timestamp`) VALUES
(11, 8, 'asdsad', '5052cacbb53f2WP_000452.jpg', 0, '2012-09-14 06:14:44'),
(10, 1, '', '501ebfc128794DSC_3143.jpg', 0, '2012-08-05 18:47:30'),
(13, 12, 'เขียนคำบรรยายที่นี่asdfasdfsa', '505e2495c7ca0DSC02690.JPG', 0, '2012-09-22 20:50:31'),
(14, 12, 'aaaaaaa', '505e24a16e059DSC02744.JPG', 0, '2012-09-22 20:50:42'),
(15, 12, 'เขียนคำบรรยายที่นี่xxxx', '505e24ab4fe53DSC02817.JPG', 0, '2012-09-22 20:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `is_removed` tinyint(1) NOT NULL DEFAULT '0',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `send_status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `user_id`, `organization_id`, `is_removed`, `is_read`, `title`, `message`, `send_status`, `created`) VALUES
(87, 0, 5, 0, 0, 'มีอาสามาสมัครเข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<a href="/TimeBank/event/approve/54">ดูรายชื่ออาสา</a>', 0, '2012-11-19 16:33:09'),
(86, 1, 0, 0, 0, 'คุณได้รับการตอบรับให้เข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<a href="/TimeBank/event/view/54">ดูรายละเอียดเพิ่มเติม</a>', 0, '2012-11-19 16:24:13'),
(85, 0, 5, 0, 0, 'มีอาสามาสมัครเข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<a href="/TimeBank/event/approve/54">ดูรายชื่ออาสา</a>', 0, '2012-11-19 16:23:41'),
(84, 11, 0, 0, 0, 'มีงานอาสาที่เหมาะกับคุณ', '<a href="/TimeBank/event/view/54">สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a> | ', 0, '2012-11-19 16:18:21'),
(82, 10, 0, 0, 0, 'มีงานอาสาที่เหมาะกับคุณ', '<a href="/TimeBank/event/view/54">สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a> | ', 0, '2012-11-19 16:18:21'),
(83, 9, 0, 0, 0, 'มีงานอาสาที่เหมาะกับคุณ', '<a href="/TimeBank/event/view/54">สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a> | ', 0, '2012-11-19 16:18:21'),
(80, 1, 0, 0, 1, 'คุณได้รับการตอบรับให้เข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<a href="/TimeBank/event/view/54">ดูรายละเอียดเพิ่มเติม</a>', 0, '2012-11-19 15:47:38'),
(81, 0, 5, 0, 0, 'งานอาสา ชื่องานอาสา * ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน กำลังจะสิ้นสุดการรับสมัคร อย่าลืมเข้าไปตอบรับอาสานะครับ', '<a href="/TimeBank/event/approve/55">ตอบรับอาสา</a>', 0, '2012-11-19 16:16:09'),
(79, 0, 5, 0, 0, 'มีอาสามาสมัครเข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<a href="/TimeBank/event/approve/54">ดูรายชื่ออาสา</a>', 0, '2012-11-19 15:46:02'),
(78, 0, 5, 0, 0, 'มีอาสาฝากข้อความไว้ใน "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<a href="/TimeBank/event/view/54#34">ดูข้อความ</a>', 0, '2012-11-14 17:59:26'),
(77, 0, 5, 0, 0, 'มีอาสาฝากข้อความไว้ใน "สาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่"', '<a href="/TimeBank/event/view/53#33">ดูข้อความ</a>', 0, '2012-11-14 17:56:56'),
(76, 1, 0, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:57:54'),
(75, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:55:08'),
(74, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:55:08'),
(73, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:55:07'),
(72, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:55:07'),
(71, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:54:53'),
(70, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:54:53'),
(69, 0, 5, 0, 1, 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<a href="/TimeBank/event/view/54">เขียนคำขอบคุณให้อาสา / โพสต์รูป / ปิดงาน ได้ที่นี่</a>', 0, '2012-11-04 17:51:00'),
(68, 0, 5, 0, 1, 'งานอาสา สาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ กำลังจะสิ้นสุดการรับสมัคร อย่าลืมเข้าไปตอบรับอาสานะครับ', '<a href="/TimeBank/event/approve/53">ตอบรับอาสา</a>', 0, '2012-11-04 17:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `content`, `video`, `timestamp`) VALUES
(2, 'คู่มือจิตอาสา', '<p>ภาคี เครือข่ายจิตอาสา เครือข่ายพุทธิกา สสส. และ สช. ร่วมแบ่งปัน "คู่มือจิตอาสา" สำหรับทั้งอาสาสมัครและ องค์กรที่บริหารจัดการอาสาสมัคร</p>\n<p>เป็นแนวทางง่ายๆ ที่ช่วยให้การออกมาทำความดีร่วมกันเกิดประโยชน์สูงสุดทั้งผู้ให้และผู้รับ ช่วยให้อาสาสมัคร ทำงานโดยมี "จิตอาสา" เกิดผลดีทั้งต่องานและต่อการเรียนรู้ ฝึกฝน ขัดเกลาตนเอง</p>\n<p>มีสองเวอร์ชัน คือ</p>\n<p><a href="../media/upload/download/volunteer_2011_guidline.pdf">1. Volunteer 2011 Guideline: สำหรับแผ่นพับขนาดเอสี่ สองหน้า (หน้าหลัง พับครึ่ง)</a></p>\n<p><a href="../media/upload/download/volunteer_2011_guidline_poster.pdf">2. Volunteer 2011 Guideline Poster: สำหรับโปสเตอร์ขนาดเอสี่ สองหน้าต่อกัน</a></p>\n<p>สามารถผลิตเพิ่มและใช้ได้ตามสะดวก</p>\n<p>ยินดีรับคำแนะนำเพื่อการพัฒนาเอกสารให้รับใช้สังคมได้ดีที่สุด โดยส่งมาที่ JitArsaBank (เครื่องหมาย @) gmail.com</p>', '', '2012-09-12 15:20:38'),
(3, 'คู่มือจิตอาสา', '<p>ภาคี เครือข่ายจิตอาสา เครือข่ายพุทธิกา สสส. และ สช. ร่วมแบ่งปัน "คู่มือจิตอาสา" สำหรับทั้งอาสาสมัครและ องค์กรที่บริหารจัดการอาสาสมัคร</p>\n<p>เป็นแนวทางง่ายๆ ที่ช่วยให้การออกมาทำความดีร่วมกันเกิดประโยชน์สูงสุดทั้งผู้ให้และผู้รับ ช่วยให้อาสาสมัคร ทำงานโดยมี "จิตอาสา" เกิดผลดีทั้งต่องานและต่อการเรียนรู้ ฝึกฝน ขัดเกลาตนเอง</p>\n<p>มีสองเวอร์ชัน คือ</p>\n<p><a href="../media/upload/download/volunteer_2011_guidline.pdf">1. Volunteer 2011 Guideline: สำหรับแผ่นพับขนาดเอสี่ สองหน้า (หน้าหลัง พับครึ่ง)</a></p>\n<p><a href="../media/upload/download/volunteer_2011_guidline_poster.pdf">2. Volunteer 2011 Guideline Poster: สำหรับโปสเตอร์ขนาดเอสี่ สองหน้าต่อกัน</a></p>\n<p>สามารถผลิตเพิ่มและใช้ได้ตามสะดวก</p>\n<p>ยินดีรับคำแนะนำเพื่อการพัฒนาเอกสารให้รับใช้สังคมได้ดีที่สุด โดยส่งมาที่ JitArsaBank (เครื่องหมาย @) gmail.com</p>', '<iframe width="420" height="315" src="http://www.youtube.com/embed/XphuDvRjY7c" frameborder="0" allowfullscreen></iframe>', '2012-10-27 17:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `event_id` int(11) NOT NULL,
  `link_type` tinyint(2) NOT NULL,
  `data` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`user_id`,`event_id`,`link_type`,`data`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`user_id`, `event_id`, `link_type`, `data`, `rate`, `end_date`) VALUES
(0, 55, 0, '0', 0, '2012-11-01'),
(0, 56, 0, '0', 0, '2012-11-01'),
(0, 57, 0, '0', 0, '2012-11-14'),
(0, 58, 0, '0', 0, '2012-11-11'),
(0, 59, 0, '0', 0, '2012-11-01'),
(0, 60, 0, '0', 0, '2012-11-20'),
(0, 61, 0, '0', 0, '2012-11-08'),
(0, 62, 0, '0', 0, '2012-11-01'),
(1, 59, 1, '1', 0.4, '2012-11-01'),
(1, 61, 1, '1', 0.4, '2012-11-08'),
(1, 62, 1, '1', 0.4, '2012-11-01'),
(1, 62, 6, '1', 1, '2012-11-01'),
(10, 55, 5, '1102', 0.05, '2012-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` mediumtext COLLATE utf8_unicode_ci,
  `district` mediumtext COLLATE utf8_unicode_ci,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `province`, `district`, `latitude`, `longitude`, `timestamp`) VALUES
(1, 'กรุงเทพ', NULL, NULL, NULL, '2011-11-17 13:42:34'),
(2, 'นครราชสีมา', NULL, NULL, NULL, '2011-11-17 13:42:34'),
(3, 'เชียงใหม่', NULL, NULL, NULL, '2011-11-17 13:42:44'),
(4, 'ภูเก็ต', NULL, NULL, NULL, '2011-11-17 13:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `mailqueues`
--

CREATE TABLE `mailqueues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `to` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `sent` tinyint(1) NOT NULL,
  `sending` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `retried` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=403 ;

--
-- Dumping data for table `mailqueues`
--

INSERT INTO `mailqueues` (`id`, `from`, `to`, `subject`, `body`, `sent`, `sending`, `retried`, `created`) VALUES
(402, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'มีอาสามาสมัครเข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร เข้าสมัครเข้าร่วมกิจรรม สร้างงานอาสาใหม่สร้างงานอาสาใหม่<br>\n\n									<a href="http://www.jitarsabank.com/event/approve/54">ตอบรับอาสาสมัคร</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-19 16:33:09'),
(401, 'JitArsa Bank <JitArsaBank@gmail.com>', 'volunteer@jitarsa.org', 'คุณได้รับการตอบรับให้เข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc;text-decoration:underline; }</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ volunteer nakrub1</p>\n\n									<p><a>ธนาคารจิตอาสา</a> ได้ตอบรับการเข้าร่วมงาน <br>\n\n									<a>สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a> ที่คุณได้สมัครไว้เรียบร้อยแล้ว</p>\n\n									 <table class="top" width="505" border="0" cellspacing="0" cellpadding="0">\n\n										<tr>\n\n											<td valign="top" height="13">\n\n												<img src="http://www.jitarsabank.com/media/upload/email/843_box_header.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td align="center" valign="top" bgcolor="#ffffff">\n\n												 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n													<tr>\n\n														<td valign="top">\n\n															<p>คุณสามารถดูรายชื่ออาสาสมัครได้ที่เข้าร่วมกิจกรรมนี้ได้ที่นี่</p>\n\n															<p><a href="http://www.jitarsabank.com/event/view/54?mode=2"><img src="http://www.jitarsabank.com/media/upload/email/843_list.png"><a></p>\n\n														</td>\n\n													</tr>\n\n												 </table>\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td valign="top" height="15">\n\n												<img src="http://www.jitarsabank.com/media/upload/email/843_box_footer.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n									</table>\n\n									<p></p>\n									<p>อย่าลืมเตรียมใจ เตรียมกายให้พร้อม<br>\n									และขอให้มีความสุขกับกิจกรรมนะครับ</p>\n									\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-19 16:24:13'),
(400, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'มีอาสามาสมัครเข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร เข้าสมัครเข้าร่วมกิจรรม สร้างงานอาสาใหม่สร้างงานอาสาใหม่<br>\n\n									<a href="http://www.jitarsabank.com/event/approve/54">ตอบรับอาสาสมัคร</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-19 16:23:41'),
(399, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'งานอาสา ชื่องานอาสา * ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน กำลังจะสิ้นสุดการรับสมัคร อย่าลืมเข้าไปตอบรับอาสานะครับ', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">งานอาสาของคุณใกล้ถึงเวลาปิดรับสมัครแล้ว <span style="color:#da7101">อย่าลืมตอบรับ (approve) อาสาเข้าร่วมกิจกรรมนะครับ</span><br>\n\n									<a href="http://www.jitarsabank.com/event/view/55">ชื่องานอาสา * ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ <br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-19 16:16:09'),
(398, 'JitArsa Bank <JitArsaBank@gmail.com>', 'volunteer@jitarsa.org', 'คุณได้รับการตอบรับให้เข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc;text-decoration:underline; }</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ volunteer nakrub1</p>\n\n									<p><a>ธนาคารจิตอาสา</a> ได้ตอบรับการเข้าร่วมงาน <br>\n\n									<a>สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a> ที่คุณได้สมัครไว้เรียบร้อยแล้ว</p>\n\n									 <table class="top" width="505" border="0" cellspacing="0" cellpadding="0">\n\n										<tr>\n\n											<td valign="top" height="13">\n\n												<img src="http://www.jitarsabank.com/media/upload/email/843_box_header.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td align="center" valign="top" bgcolor="#ffffff">\n\n												 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n													<tr>\n\n														<td valign="top">\n\n															<p>คุณสามารถดูรายชื่ออาสาสมัครได้ที่เข้าร่วมกิจกรรมนี้ได้ที่นี่</p>\n\n															<p><a href="http://www.jitarsabank.com/event/view/54?mode=2"><img src="http://www.jitarsabank.com/media/upload/email/843_list.png"><a></p>\n\n														</td>\n\n													</tr>\n\n												 </table>\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td valign="top" height="15">\n\n												<img src="http://www.jitarsabank.com/media/upload/email/843_box_footer.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n									</table>\n\n									<p></p>\n									<p>อย่าลืมเตรียมใจ เตรียมกายให้พร้อม<br>\n									และขอให้มีความสุขกับกิจกรรมนะครับ</p>\n									\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-19 15:47:38'),
(397, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'มีอาสามาสมัครเข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร เข้าสมัครเข้าร่วมกิจรรม สร้างงานอาสาใหม่สร้างงานอาสาใหม่<br>\n\n									<a href="http://www.jitarsabank.com/event/approve/54">ตอบรับอาสาสมัคร</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-19 15:46:02'),
(396, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'มีอาสาฝากข้อความไว้ใน "สร้างงานอาสาใหม่สร้างงานอาสาใหม่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                            <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n                            <p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร comment กิจรรม....\n\n                            <a href="http://www.jitarsabank.com/event/view/54#34">สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a> \n                            </br />		\n                            <strong>ข้อความ : </strong> ลองๆๆๆๆ \nงกๆๆๆ                            </p>								 \n\n                            <br clear="left">\n\n                            <br clear="left">\n\n                            <p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-14 17:59:26'),
(394, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'งานอาสา "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" ได้สิ้นสุดแล้วครับ ', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดี ธนาคารจิตอาสา</p>\n\n									<p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">งานอาสาของท่านได้สิ้นสุดลงแล้ว คุณสามารถเขียนคำขอบคุณอาสาที่มาร่วมงาน โพสต์รูปกิจกรรม และปิดงานได้ที่<br>\n\n									<a href="http://www.jitarsabank.com/event/view/54">สร้างงานอาสาใหม่สร้างงานอาสาใหม่</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n									<p>อาสาจะได้รับการเชิญชวนผ่านระบบแจ้งเตือนให้เข้ามาอ่านคำขอบคุณ \n									<br>ดูภาพกิจกรรมและแบ่งปันประสบการณ์หลังคุณ "ปิดงาน" แล้ว</p>\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-04 17:57:54'),
(395, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'มีอาสาฝากข้อความไว้ใน "สาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://www.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                            <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n                            <p><img src="http://www.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร comment กิจรรม....\n\n                            <a href="http://www.jitarsabank.com/event/view/53#33">สาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่</a> \n                            </br />		\n                            <strong>ข้อความ : </strong> เมพๆๆๆๆ                            </p>								 \n\n                            <br clear="left">\n\n                            <br clear="left">\n\n                            <p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-11-14 17:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `pic` text NOT NULL,
  `pic_thm` text NOT NULL,
  `video` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `topic`, `message`, `pic`, `pic_thm`, `video`, `timestamp`) VALUES
(12, 'สร้างง ข่าวสร้างง ข่าวสร้างง ข่าวสร้างง ข่าว', '<h2>สร้างง ข่าว</h2>\n<h2>สร้างง ข่าว</h2>\n<h2>สร้างง ข่าว</h2>\n<h2>สร้างง ข่าว</h2>\n<h2>สร้างง ข่าว</h2>', 'DSC02680.JPG', 'DSC02690.JPG', 'สร้างง ข่าวสร้างง ข่าวสร้างง ข่าวสร้างง ข่าว', '2012-09-22 20:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `newsimages`
--

CREATE TABLE `newsimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `newsimages`
--

INSERT INTO `newsimages` (`id`, `news_id`, `image`, `timestamp`) VALUES
(20, 11, '5050a02ecd73eWP_000453.jpg', '2012-09-12 14:46:07'),
(21, 12, '505e1f551f4a9DSC02721.JPG', '2012-09-22 20:28:05'),
(22, 12, '505e1f56031edDSC02744.JPG', '2012-09-22 20:28:06'),
(23, 12, '505e1f56ddcbeDSC02803.JPG', '2012-09-22 20:28:07'),
(24, 12, '505e1f57c6104DSC02817.JPG', '2012-09-22 20:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search_temp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `noti_volunteerregister` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventvolunteercomment` tinyint(1) NOT NULL DEFAULT '1',
  `noti_volunteercancel` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventalmostend` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventend` tinyint(1) NOT NULL DEFAULT '1',
  `name` mediumtext COLLATE utf8_unicode_ci,
  `objective` mediumtext COLLATE utf8_unicode_ci,
  `activity` mediumtext COLLATE utf8_unicode_ci,
  `address` mediumtext COLLATE utf8_unicode_ci,
  `district` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `province` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `postcode` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `homephone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `mobilephone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `fax` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `contactperson` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `twitter` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `website` mediumtext COLLATE utf8_unicode_ci,
  `logo` mediumtext COLLATE utf8_unicode_ci,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `search_temp`, `user_id`, `verified`, `noti_volunteerregister`, `noti_eventvolunteercomment`, `noti_volunteercancel`, `noti_eventalmostend`, `noti_eventend`, `name`, `objective`, `activity`, `address`, `district`, `province`, `postcode`, `homephone`, `mobilephone`, `fax`, `contactperson`, `facebook`, `twitter`, `website`, `logo`, `timestamp`) VALUES
(5, '', 2, 1, 1, 1, 1, 1, 1, 'ธนาคารจิตอาสา', '<p>เราเชื่อว่าสังคมไทยจะเป็นสังคมอุดมไปด้วยความรักความสุข มีความมั่นคง และพัฒนาก้าวหน้าต่อไปได้ เพราะทุกคนร่วมสร้างสังคมนี้ขึ้นมา ไม่จำกัดว่าเป็นวัยไหนหรืออยู่ในหน้าที่การงานใด เราต่างมีความมุ่งมั่นตั้งใจเพื่อสร้างประเทศไทย เราไม่นิ่งเฉยดูดาย แต่จะลุกขึ้นยื่นมือมาช่วยเหลือกัน ทุกๆ คนบนผืนแผ่นดินไทยสามารถเป็นอาสาสมัครผู้อุทิศกำลังความสามารถและเวลาอันมีค่าของตนให้แก่ประโยชน์ส่วนรวม</p>', '<p>ธนาคารจิตอาสามีภากิจ 3 ส่วนหลัก ได้แก่1. ระบบธนาคารเวลา (Time Bank)Time Bank เป็นระบบสนับสนุนการทำงานอาสา ที่เข้าถึงได้ทาง Internet ให้อาสาสมัครได้แสดงความตั้งใจจะใช้เวลาเพื่อทำงานอาสา โดยรวบรวมสถิติการใช้เวลา ยังมีระบบคัดเลือกและแนะนำงาน (matching) ให้ค้นหางานอาสาที่เหมาะกับตนเอง ตรงกับความสนใจ ความถนัด ทักษะ ความสามารถ หรือความสะดวก ไม่เฉพาะแต่ในสถานการณ์ภัยพิบัติเท่านั้น แต่ยังรวมถึงงานอาสาสมัครเพื่อสังคมทุกประเภทที่มีอยู่แล้วในประเทศไทยด้วย2. การปฐมนิเทศและการอบรม (Orientation and Training)การปฐมนิเทศและการอบรมอาสาเป็นกระบวนการเตรียมพร้อมอาสาสมัครก่อนลงไปทำงานอาสา เพื่อให้อาสาได้เกิดประสบการณ์ที่ดี ได้เรียนรู้ และพัฒนาตนเองอย่างรอบด้านทั้งทางกาย ทางใจ และทางสังคม นอกจากนี้การจัดอบรมให้กับองค์กรที่รับอาสาเข้าไปทำงานก็เป็นสิ่งสำคัญเช่นกัน เพราะการจัดกิจกรรมเพื่อให้เกิดประโยชน์สูงสุดกับอาสานั้นจำเป็นต้องมีทั้งความเข้าใจและทักษะ รวมถึงมีการจัดทำคู่มือรวบรวมองค์ความรู้เรื่องการปฐมนิเทศและการอบรมด้วย3. อาสาสัมพันธ์ (Volunteer Relation Managaement: VRM)งานอาสาสัมพันธ์เป็นการสร้างความต่อเนื่องในการมีกิจกรรมความร่วมมือและสื่อสาระะหว่างอาสาสมัครและองค์กรที่จัดกิจกรรม นอกจากจะเป็นช่องทางในการสื่อสาร งานอาสาสัมพันธ์ยังช่วยให้กำลังใจ เปิดโอกาสการแลกเปลี่ยนประสบการณ์ และความประทับใจ จากการทำงาน ตลอดจนสามารถพัฒนาเป็นชุมชนเครือข่ายความร่วมมือตามประเด็นความสนใจ หรือตามพื้นที่ต่อไป</p>', '10 ซ.3 ถ.พหลโยธิน สามเสนใน', 'พญาไท', 'กรุงเทพมหานคร', '10400', '02-617-1797', '', '02-617-1796', 'ธีรัช', 'www.facebook.com/JitArsaBank', 'JitArsaBank', 'www.JitArsaBank.com', '5055719a08127WP_000452.jpg', '2012-11-04 17:57:37'),
(6, '', NULL, 0, 1, 1, 1, 1, 1, 'asdasd', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '2012-09-19 17:06:33'),
(7, '', 20, 1, 1, 1, 1, 1, 1, 'naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.thgmail.com', 'naioom.th@gmail.com', NULL, '2012-09-20 14:21:57'),
(8, '', 21, 1, 1, 1, 1, 1, 1, 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.thgmail.com', 'naioom.th@gmail.com', NULL, '2012-09-27 18:05:49'),
(9, '', 22, 1, 1, 1, 1, 1, 1, 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.thgmail.com', 'naioom.th@gmail.com', NULL, '2012-09-27 18:06:05'),
(10, '', 23, 1, 1, 1, 1, 1, 1, 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.thgmail.com', 'naioom.th@gmail.com', NULL, '2012-09-27 18:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `alias`, `link`, `image`) VALUES
(3, 'Thaihealth.or.th | สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.)', 'http://www.thaihealth.or.th/', '50b61f5bf0501thaihealth.png'),
(4, 'มูลนิธิอาสาสมัครเพื่อสังคม', 'http://thaivolunteer.org', '50b6225a0e6dethaivolunteer.png'),
(5, 'VolunteerSpirit | เครือข่ายจิตอาสา', 'http://www.volunteerspirit.org/', '50b6227fb5e6dvolunteerspirit.png'),
(6, 'เครือข่ายพุทธิกา : เพื่อพระพุทธศาสนาและสังคม', 'http://www.budnet.org/', '50b622b0c58e4logo_budthika.png'),
(7, 'อาสาสมัครฟื้นฟูประเทศไทย', 'https://www.facebook.com/SiamArsa', '50b622db405c7siamarsa.png');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `user_id` tinyint(11) NOT NULL,
  `event_id` tinyint(11) NOT NULL,
  `rate` double NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`user_id`, `event_id`, `rate`, `timestamp`) VALUES
(9, 54, -0.29, '2012-11-19 16:18:21'),
(10, 54, -0.24, '2012-11-19 16:18:21'),
(11, 54, -0.29, '2012-11-19 16:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `smsqueues`
--

CREATE TABLE `smsqueues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `note` text NOT NULL,
  `sent` tinyint(1) NOT NULL DEFAULT '0',
  `return_status` text NOT NULL,
  `sending` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `smsqueues`
--

INSERT INTO `smsqueues` (`id`, `phone`, `message`, `note`, `sent`, `return_status`, `sending`) VALUES
(7, '1234123', 'ส้งอีกๆๆ', '1', 0, '', 0),
(8, '0840034536', 'ส้งอีกๆๆ', '10', 0, '', 0),
(9, '0891130030', 'ส้งอีกๆๆ', '11', 0, '', 0),
(10, '1234123', 'asdfas', '1', 0, '', 0),
(11, '0840034536', 'asdfas', '10', 0, '', 0),
(12, '0891130030', 'asdfas', '11', 0, '', 0),
(13, '1234123', 'asdfasd', '1', 0, '', 0),
(14, '0840034536', 'asdfasd', '10', 0, '', 0),
(15, '0891130030', 'asdfasd', '11', 0, '', 0),
(16, '1234123', 'vvvv', '1', 0, '', 0),
(17, '0840034536', 'vvvv', '10', 0, '', 0),
(18, '0891130030', 'vvvv', '11', 0, '', 0),
(19, '1234123', 'asdfasdfasdf', '1', 0, '', 0),
(20, '0840034536', 'asdfasdfasdf', '10', 0, '', 0),
(21, '0891130030', 'asdfasdfasdf', '11', 0, '', 0),
(22, '1234123', 'adf', '1', 0, '', 0),
(23, '0840034536', 'adf', '10', 0, '', 0),
(24, '0891130030', 'adf', '11', 0, '', 0),
(25, '1234123', 'คุณได้รับการตอบรับให้เข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" http://www.jitarsabank.com/event/view/54', '1', 0, '', 0),
(26, '1234123', '﻿ ­\n\n    ใช้บริการธนาคารจิตอาสา\n    ฝึกอบรมและความรู้\n    ข่าวแวดวง\n    สนับสนุนธนาคารจิตอาสา\n    เกี่ยวกับเรา\n\n    สวัสดีครับ :-) volunteer nakrub1\n    ข้อความเตือน (0)\n    ตั้งค่าบัญชีผู้ใช้\n    ออกจากระบบ\n\nหน้าหลัก admin | ส่ง sms | สมาชิกอาสา | สมาชิกองกร | งานอาสา | ฝีกอบรม | ความรู้ | ข่าว | ช่วยเหลือ (help) - | - ระบบแนะนำงานอาสา (Matching)\n\nส่งข่าวสารทาง SMS ให้ อาสาสมัคร\nจำนวนทั้งหมด : 0 ตัวอักษร\nหากข้อความเป็นอังกฤษล้วน 160 char = 1 message หากมีภาษาไทยบนด้วย 70 char = 1 message\nเลือกวันเวลา :\nหากเลือกเวลาก่อน ปัจจุบันระบบจะทำการส่งทั้นที่\n\nid		ข้อความ		กำหนดส่ง 	status 	ส่งแล้วเวลา 	ตัวเลือก\n15 	adf 	2012-11-01 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n14 	asdfasdf 	2012-11-21 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n13 	asdfasdfasdf 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n12 	vvvv 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:52 	ลบ\n11 	asfdasdf 	2012-11-29 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n10 	asdfasd 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:12 	ลบ\n9 	asdfas 	2012-11-07 01:30:00 	ส่งแล้ว 	2012-11-14 02:47:08 	ลบ\n8 	ส้งอีกๆๆ 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:02:29 	ลบ\n\n    เงื่อนไขและข้อตกลงการใช้บริการ\n    นโยบายความเป็นส่วนตัว\n    ติดต่อธนาคารจิตอาสา\n\nนโยบายลิขสิทธิ์ สำหรับข้อมูลต่างๆ บน website และ mobile app\n\nสัญญาอนุญาตของครีเอทีฟคอมมอนส์ ผลงานนี้ โดย ธนาคารจิตอาสา ใช้ สัญญาอนุญาตของครีเอทีฟคอมมอนส์.....แบบ แสดงที่มา-ไม่ใช้เพื่อการค้า 3.0 ต้นฉบับ.\n', '1', 0, '', 0),
(27, '0840034536', '﻿ ­\n\n    ใช้บริการธนาคารจิตอาสา\n    ฝึกอบรมและความรู้\n    ข่าวแวดวง\n    สนับสนุนธนาคารจิตอาสา\n    เกี่ยวกับเรา\n\n    สวัสดีครับ :-) volunteer nakrub1\n    ข้อความเตือน (0)\n    ตั้งค่าบัญชีผู้ใช้\n    ออกจากระบบ\n\nหน้าหลัก admin | ส่ง sms | สมาชิกอาสา | สมาชิกองกร | งานอาสา | ฝีกอบรม | ความรู้ | ข่าว | ช่วยเหลือ (help) - | - ระบบแนะนำงานอาสา (Matching)\n\nส่งข่าวสารทาง SMS ให้ อาสาสมัคร\nจำนวนทั้งหมด : 0 ตัวอักษร\nหากข้อความเป็นอังกฤษล้วน 160 char = 1 message หากมีภาษาไทยบนด้วย 70 char = 1 message\nเลือกวันเวลา :\nหากเลือกเวลาก่อน ปัจจุบันระบบจะทำการส่งทั้นที่\n\nid		ข้อความ		กำหนดส่ง 	status 	ส่งแล้วเวลา 	ตัวเลือก\n15 	adf 	2012-11-01 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n14 	asdfasdf 	2012-11-21 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n13 	asdfasdfasdf 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n12 	vvvv 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:52 	ลบ\n11 	asfdasdf 	2012-11-29 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n10 	asdfasd 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:12 	ลบ\n9 	asdfas 	2012-11-07 01:30:00 	ส่งแล้ว 	2012-11-14 02:47:08 	ลบ\n8 	ส้งอีกๆๆ 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:02:29 	ลบ\n\n    เงื่อนไขและข้อตกลงการใช้บริการ\n    นโยบายความเป็นส่วนตัว\n    ติดต่อธนาคารจิตอาสา\n\nนโยบายลิขสิทธิ์ สำหรับข้อมูลต่างๆ บน website และ mobile app\n\nสัญญาอนุญาตของครีเอทีฟคอมมอนส์ ผลงานนี้ โดย ธนาคารจิตอาสา ใช้ สัญญาอนุญาตของครีเอทีฟคอมมอนส์.....แบบ แสดงที่มา-ไม่ใช้เพื่อการค้า 3.0 ต้นฉบับ.\n', '10', 0, '', 0),
(28, '0891130030', '﻿ ­\n\n    ใช้บริการธนาคารจิตอาสา\n    ฝึกอบรมและความรู้\n    ข่าวแวดวง\n    สนับสนุนธนาคารจิตอาสา\n    เกี่ยวกับเรา\n\n    สวัสดีครับ :-) volunteer nakrub1\n    ข้อความเตือน (0)\n    ตั้งค่าบัญชีผู้ใช้\n    ออกจากระบบ\n\nหน้าหลัก admin | ส่ง sms | สมาชิกอาสา | สมาชิกองกร | งานอาสา | ฝีกอบรม | ความรู้ | ข่าว | ช่วยเหลือ (help) - | - ระบบแนะนำงานอาสา (Matching)\n\nส่งข่าวสารทาง SMS ให้ อาสาสมัคร\nจำนวนทั้งหมด : 0 ตัวอักษร\nหากข้อความเป็นอังกฤษล้วน 160 char = 1 message หากมีภาษาไทยบนด้วย 70 char = 1 message\nเลือกวันเวลา :\nหากเลือกเวลาก่อน ปัจจุบันระบบจะทำการส่งทั้นที่\n\nid		ข้อความ		กำหนดส่ง 	status 	ส่งแล้วเวลา 	ตัวเลือก\n15 	adf 	2012-11-01 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n14 	asdfasdf 	2012-11-21 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n13 	asdfasdfasdf 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:48:06 	ลบ\n12 	vvvv 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:52 	ลบ\n11 	asfdasdf 	2012-11-29 00:00:00 	- 	0000-00-00 00:00:00 	ลบ\n10 	asdfasd 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:47:12 	ลบ\n9 	asdfas 	2012-11-07 01:30:00 	ส่งแล้ว 	2012-11-14 02:47:08 	ลบ\n8 	ส้งอีกๆๆ 	0000-00-00 00:00:00 	ส่งแล้ว 	2012-11-14 02:02:29 	ลบ\n\n    เงื่อนไขและข้อตกลงการใช้บริการ\n    นโยบายความเป็นส่วนตัว\n    ติดต่อธนาคารจิตอาสา\n\nนโยบายลิขสิทธิ์ สำหรับข้อมูลต่างๆ บน website และ mobile app\n\nสัญญาอนุญาตของครีเอทีฟคอมมอนส์ ผลงานนี้ โดย ธนาคารจิตอาสา ใช้ สัญญาอนุญาตของครีเอทีฟคอมมอนส์.....แบบ แสดงที่มา-ไม่ใช้เพื่อการค้า 3.0 ต้นฉบับ.\n', '11', 0, '', 0),
(29, '1234123', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 0, '', 0),
(30, '0840034536', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '10', 0, '', 0),
(31, '0891130030', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '11', 0, '', 0),
(32, '1234123', 'คุณได้รับการตอบรับให้เข้าร่วม "สร้างงานอาสาใหม่สร้างงานอาสาใหม่" http://www.jitarsabank.com/event/view/54', '1', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=110 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(105, 'xxx'),
(106, 'โรงเรียน'),
(107, 'โรงเรียน เทพ'),
(108, 'โรงเรียน เทพ'),
(109, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `trainingimages`
--

CREATE TABLE `trainingimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `training_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `trainingimages`
--

INSERT INTO `trainingimages` (`id`, `training_id`, `image`, `timestamp`) VALUES
(45, 58, '50509fa561c16click_504d6f5b8e368.jpg', '2012-09-12 14:43:49'),
(46, 58, '505b65a08c467DSC02680.JPG', '2012-09-20 18:51:13'),
(47, 58, '505b65a1bae2cDSC02690.JPG', '2012-09-20 18:51:14'),
(48, 58, '505b65a2b35feDSC02721.JPG', '2012-09-20 18:51:15'),
(49, 58, '505b65a38b764DSC02744.JPG', '2012-09-20 18:51:16'),
(50, 58, '505b65a464ac6DSC02776.JPG', '2012-09-20 18:51:17'),
(51, 58, '505b65a53d967DSC02791.JPG', '2012-09-20 18:51:18'),
(52, 58, '505b65a616f10DSC02796.JPG', '2012-09-20 18:51:18'),
(53, 58, '505b65a6e34c8DSC02803.JPG', '2012-09-20 18:51:19'),
(54, 58, '505b65a7bb3b8DSC02808.JPG', '2012-09-20 18:51:20'),
(55, 58, '505b65a894f3bDSC02817.JPG', '2012-09-20 18:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `date_message` text NOT NULL,
  `message` text NOT NULL,
  `main_pic` tinytext NOT NULL,
  `thm_pic` text NOT NULL,
  `pic` text NOT NULL,
  `video` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `topic`, `date_message`, `message`, `main_pic`, `thm_pic`, `pic`, `video`, `timestamp`) VALUES
(1, 'การออกแบบกระบวนการและจัดกิจกรรมอาสาสมัครเพื่อส่งเสริมสุขภาวะทางปัญญาสำหรับพี่เลี้ยงอาสาสมัคร', '<p><b>รุ่นที่ 1</b></p>\r\n<p>แรกพบ 28 พฤษภาคม 2555</p>\r\n<p> ครั้งที่ 1 วันที่ 13-15 มิถุนายน 2555</p>\r\n<p>	ครั้งที่ 2 วันที่ 10-13 กรกฏาคม 2555</p>\r\n<p>	ครั้งที่ 3 วันที่ 15-17 สิงหาคม 2555</p>\r\n	\r\n<p><b>รุ่นที่ 2</b></p>\r\n<p>	แรกพบ 24 กรกฏาคม 2555</p>\r\n<p> ครั้งที่ 1 วันที่ 29-31 สิงหาคม 2555</p>\r\n<p>	ครั้งที่ 2 วันที่ 18-21 กันยายน 2555</p>\r\n<p>	ครั้งที่ 3 วันที่ 17-19 ตุลาคม 2555</p>', '<p>หลักสูตรฝึกอบรมต่อเนื่องสำหรับพี่เลี้ยงและผู้ดูแลกิจกรรมขององค์กรอาสาสมัคร เพื่อส่งเสริมศักยภาพการออกแบบกระบวนการและจัดกิจกรรม ให้เกิดการเรียนรู้ เข้าใจ และพัฒนาจิตใจ ทั้งในอาสาสมัครและผู้ดูแล เนื้อหาหลักสูตรแบ่งออกเป็น 3 ส่วนหลักตามการอบรม 3 ครั้ง ได้แก่ ความเข้าใจในตนเองและการสะท้อนตนเอง (Self Reflection) การสื่อสารเพื่องานอาสา (Dialogue & Non-Violent Communication) และการเห็นความเชื่อมโยงของปัญหา (Systems Thinking)</p>\r\n<p>รูปแบบการอบรมเป็นการแลกเปลี่ยนเรียนรู้อย่างมีส่วนร่วมและการทดลองมีประสบการณ์ด้วยตนเอง เพื่อให้เกิดความเข้าใจอย่างลึกซึ้ง และผสมผสานกับบทเรียนจากการทำงานที่มีลักษณะเฉพาะของแต่ละองค์กร ธนาคารจิตอาสาจัดการอบรม 2 รุ่น รุ่นละประมาณ 20 คน</p>', 'main_1.jpg', '', '1_1.jpg,1_2.jpg,1_3.jpg,1_4.jpg,1_5.jpg,1_6.jpg,1_7.jpg,1_8.jpg,1_9.jpg,1_10.jpg,1_11.jpg,1_12.jpg,1_13.jpg,1_14.jpg,1_15.jpg,1_16.jpg,1_17.jpg,1_18.jpg,1_19.jpg,1_20.jpg,1_21.jpg,1_22.jpg,1_23.jpg,1_24.jpg,1_25.jpg,1_26.jpg', '', '2012-07-28 03:46:00'),
(2, 'Volunteer+ ครั้งที่ 1 : การถอดบทเรียนด้วย KM เพื่องานอาสา', '30 เมษายน 2555', 'การอบรมว่าด้วยแนวคิดวิธีการถอดบทเรียน เพื่อต่อยอดความรู้และประสบการณ์ พัฒนางาน และองค์กรด้วยการจัดการความรู้ (KM -- Knowledge Management) ดร.ประพนธ์ ผาสุขยืด ผู้อำนวยการสถาบันส่งเสริมการจัดการความรู้เพื่อสังคม (สคส.) เป็นผู้มาให้คำแนะนำ ถ่ายทอดความรู้ และชี้ให้เห็นถึงความสำคัญของการถอดบทเรียน เทคนิควิธีการจัดกระบวนการ และการจัดการความรู้ เพื่อประยุกต์ใช้เพื่อให้เกิดประโยชน์ต่องานอาสาอย่างแท้จริง', 'main_2.jpg', '', '2_1.jpg,2_2.jpg,2_3.jpg,2_4.jpg,2_5.jpg,2_6.jpg,2_7.jpg,2_8.jpg,2_9.jpg,2_10.jpg,2_11.jpg,2_12.jpg,2_13.jpg', '', '2012-07-28 04:22:39'),
(3, 'Volunteer+ ครั้งที่ 2 : Basic Facebook เพื่องานอาสา', '10 พฤษภาคม 2555', 'ปัจจุบัน Facebook ได้กลายเป็นช่องทางการสื่อสารส่งข่าวที่รวดเร็ว โดยเฉพาะงานอาสาในช่วงภัยพิบัติ และการประชาสัมพันธ์กิจกรรมดีๆ ให้เข้าถึงคนหมู่มาก ธนาคารจิตอาสาจึงจัดอบรมให้ความรู้พื้นฐานการใช้งาน Facebook แก่บุคลากรองค์กรอาสา เพื่อเพิ่มพูนทักษะและความถนัดในการใช้สื่อ online ให้มากยิ่งขึ้น', 'main_3.jpg', '', '3_1.jpg,3_2.jpg,3_4.jpg,3_5.jpg,3_6.jpg,3_7.jpg,3_8.jpg,3_9.jpg,3_10.jpg,3_11.jpg,3_12.jpg,3_13.jpg,3_14.jpg,3_15.jpg', '', '2012-07-28 04:27:48'),
(4, 'Volunteer+ ครั้งที่ 3 : Social Media เพื่องานอาสา', '11 พฤษภาคม 2555', '<p>สงสัยไหม Facebook แบบไหนใครๆ ถึงอยากติดตาม?</p>\r\n<p>ในการอบรมครั้งนี้คุณธนบูรณ์ สมบูรณ์ ผู้ร่วมก่อตั้ง "อาสาสมัครฟื้นฟูประเทศไทย (สยามอาสา)" ซึ่งมีบทบาทอย่างมากในการกระจายข่าวอาสาสมัครบน โลกออนไลน์ในช่วงมหาอุทกภัยของประเทศไทยในปี 2554  ได้มาแบ่งปันประสบการณ์การใช้ Facebook และ Twitter ซึ่งเป็น Social Media ที่ทรงพลังในการสื่อสารทุกวันนี้ เพื่อติดต่อสื่อสาร และรักษาความสัมพันธ์กับอาสาสมัครบนโลกออนไลน์ ว่าทำอย่างไรที่จะทำให้ผู้คนอยากติดตามข่าวสารขององค์กร ทำอย่างไรให้ประชาสัมพันธ์ตรงกลุ่มเป้าหมาย รูปภาพที่นำเสนอควรเป็นแบบไหน จะดูแลกลุ่มเป้าหมายที่ติดตามองค์กรของเราอย่างไร</p>\r\n<p>ผลจากการอบรมครั้งนี้พบว่า หลายองค์กรได้ปรับใช้กับ Page ที่มีอยู่ ทำให้มีจำนวนผู้ติดตามเพิ่มขึ้นอีกมาก รวมทั้งการเข้ามา comment และ share เนื้อหาก็เพิ่มขึ้นด้วย</p>', 'main_4.jpg', '', '4_1.jpg,4_2.jpg,4_3.jpg,4_4.jpg,4_5.jpg,4_6.jpg,4_7.jpg,4_8.jpg', '', '2012-07-28 04:38:56'),
(5, 'Volunteer+ ครั้งที่ 4 : สุนทรียสนทนาในงานอาสา', '1 มิถุนายน 2555', '<p>ทำไมงานที่ทำแต่สิ่งดีๆ เพื่อสร้างสรรค์สังคม จึงต้องมีการทะเลาะกัน 	พูดคุยกันไม่รู้เรื่องในองค์กร ด้วยทั้งๆ ที่ทุกคนก็คิดดี ทำดีกันทั้งนั้น</p>\r\n<p>การอบรมครั้งนี้ อ.ณัฐฬส วังวิญญู ผู้อำนวยการสถาบันขวัญแผ่นดิน เป็นผู้มาจัดกระบวนการเรียนรู้และฝึกปฏิบัติการสื่อสารกับคนในองค์กร อย่างเข้าอกเข้าใจ ราวกับเราต่างได้เข้าไปนั่งในใจของกัน และสามารถนำความรู้นี้ไปใช้ดูแลอาสาสมัครที่มาร่วมงานกับองค์กร</p>', 'main_5.jpg', '', '5_1.jpg,5_2.jpg,5_3.jpg,5_4.jpg,5_5.jpg,5_6.jpg,5_7.jpg,5_8.jpg,5_9.jpg,5_10.jpg,5_11.jpg,5_12.jpg,5_13.jpg,5_14.jpg,5_15.jpg,5_16.jpg,5_17.jpg,5_18.jpg,5_19.jpg,5_20.jpg', '', '2012-07-28 04:43:46'),
(6, 'Volunteer+ ครั้งที่ 5 : โยคะภาวนากับงานจิตอาสา', '29 มิถุนายน 2555', '<p>งานอาสาที่เป็นการช่วยเหลือผู้อื่นนั้นเป็นงานที่ท้าทาย และใช้พลังทั้งทางกายและใจมาก ผู้ดูแลกิจกรรมอาสาควรได้มีแนวทางสำหรับการสร้างสมดุลการเรียนรู้ให้แก่อาสาสมัคร โดยผสมผสานภารกิจทางสังคมเข้ากับการเรียนรู้กายเรียนรู้ใจตนเอง เพื่อให้เกิดการพัฒนาและเรียนรู้ชีวิตอย่างเป็นองค์รวม </p>\r\n<p>อ.ธนวัชร์ เกตน์วิมุต หรือ ครูดล จากเครือข่ายชีวิตสิกขา เป็นผู้มาแบ่งปัน และถ่ายทอดถึงการเรียนรู้ที่เป็นหัวใจของการฝึกโยคะ โดยผสมผสานการภาวนาและการเจริญสติในกระบวนการกิจกรรมอาสาสมัครที่หลากหลาย  </p>', 'main_6.jpg', '', '6_1.jpg,6_2.jpg,6_3.jpg,6_4.jpg,6_5.jpg,6_6.jpg,6_7.jpg,6_8.jpg,6_9.jpg', '', '2012-07-28 04:49:41'),
(58, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000452.jpg', 'click_504d6f5b8e368.jpg', '', '<iframe width="560" height="315" src="http://www.youtube.com/embed/D1IS-MhAh28" frameborder="0" allowfullscreen></iframe>', '2012-09-11 19:20:40'),
(52, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000453.jpg', 'a100_504d6b07d5f17.jpg', 'WP_000453.jpg,WP_000452.jpg,click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:25:10'),
(42, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', '504f7d86da408WP_000452.jpg', '504f7d87122beWP_000454.jpg', 'click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:05:59'),
(43, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000452.jpg', 'WP_000454.jpg', 'WP_000454.jpg,WP_000452.jpg,', '', '2012-09-11 18:14:59'),
(44, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000452.jpg', 'WP_000454.jpg', 'WP_000453.jpg,', '', '2012-09-11 18:20:18'),
(45, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000452.jpg', 'WP_000454.jpg', 'WP_000454.jpg,WP_000453.jpg,WP_000452.jpg,click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:20:42'),
(46, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000452.jpg', 'WP_000454.jpg', 'a100_504d6b07d5f17.jpg,click_504d6f5b8e368.jpg,WP_000452.jpg,WP_000453.jpg,WP_000454.jpg,', '', '2012-09-11 18:21:16'),
(47, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000452.jpg', 'WP_000454.jpg', 'WP_000454.jpg,WP_000453.jpg,WP_000452.jpg,click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:21:58'),
(48, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000453.jpg', 'a100_504d6b07d5f17.jpg', 'click_504d6f5b8e368.jpg,', '', '2012-09-11 18:23:25'),
(49, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000453.jpg', 'a100_504d6b07d5f17.jpg', 'click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:23:40'),
(50, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000453.jpg', 'a100_504d6b07d5f17.jpg', 'WP_000452.jpg,click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:24:13'),
(51, 'qwerqwersaf', '<p>qwerqwerqwer</p>', '<p>qwerqwerqwerq</p>', 'WP_000453.jpg', 'a100_504d6b07d5f17.jpg', 'WP_000452.jpg,click_504d6f5b8e368.jpg,a100_504d6b07d5f17.jpg,', '', '2012-09-11 18:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `password` varchar(64) NOT NULL,
  `displayname` text NOT NULL,
  `noti_event_matched` tinyint(1) NOT NULL,
  `noti_eventrecommended` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventcomment` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventapproved` tinyint(1) NOT NULL DEFAULT '1',
  `noti_almosteventdate` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventthank` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_eventapproved` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_almosteventdate` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_news` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_event_matched` tinyint(1) NOT NULL DEFAULT '1',
  `nickname` text NOT NULL,
  `role` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `birthday` date NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `profile_image` text NOT NULL,
  `quote` text NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` char(1) NOT NULL,
  `website` text NOT NULL,
  `skills` text NOT NULL,
  `interest_tags` text NOT NULL,
  `location` text NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `displayname`, `noti_event_matched`, `noti_eventrecommended`, `noti_eventcomment`, `noti_eventapproved`, `noti_almosteventdate`, `noti_eventthank`, `noti_sms_eventapproved`, `noti_sms_almosteventdate`, `noti_sms_news`, `noti_sms_event_matched`, `nickname`, `role`, `first_name`, `last_name`, `birthday`, `phone`, `address`, `postcode`, `profile_image`, `quote`, `description`, `created`, `sex`, `website`, `skills`, `interest_tags`, `location`, `province`) VALUES
(1, 'volunteer@jitarsa.org', 'b88f902b96b6f9e0adea1d48a91c02ea', 'volunteer nakrub1', 2, 0, 1, 1, 1, 1, 1, 1, 1, 2, '', 2, '1241234', '12341234', '1857-08-01', '1234123', 'adfa', '', '50216d46cb0e4DSC_3074.jpg', '', '', '2012-10-31 18:14:25', 'f', '', '11011|0001T=งามใส่|3000T=เมพ|X12001|S1200112|S1200122|S1200132|X12002|S1200211|S1200221|S1200231|X12003|S1200321|S1200331|X12005TT=กากมากๆเลยภาษานี้|S12005TT13=กากมากๆเลยภาษานี้|S12005TT23=กากมากๆเลยภาษานี้|S12005TT33=กากมากๆเลยภาษานี้|', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ,หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย,ศาสนาและปฏิบัติธรรม,', '12312', '1'),
(21, 'naioom@gmail.com', '478ca443c5864cc688d8d43866728a3f', '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 1, '', '', '0000-00-00', '', '', '', '', '', '', '2012-09-23 14:56:29', '', '', '', '', '', ''),
(22, 'nai@gmail.com', '09cde01066b716b8ad3f92ca3562b0bd', '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 1, '', '', '0000-00-00', '', '', '', '', '', '', '2012-09-23 14:57:21', '', '', '', '', '', ''),
(23, 'na@gmail.com', '004a2a084a2d47ce5c81db5e97a07ce8', '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 1, '', '', '0000-00-00', '', '', '', '', '', '', '2012-09-23 14:57:42', '', '', '', '', '', ''),
(2, 'org@jitarsa.org', 'efdc15444a9fba50a653b540557a1155', 'org nakrub', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '', '2012-09-20 19:37:51', '', '', '', '', '', ''),
(10, 'nooock@gmail.com', '0f3ee822972d620fb337c02f6f3873ad', 'Noock', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Noock', 0, 'Teerut', 'Piriyapunyaporn', '0000-00-00', '0840034536', '', '', '50165a166d381Noock.jpg', '', '', '2012-07-31 04:33:40', '', '', '1101|1102|2101|2103|', 'หัตถกรรมและงานฝีมือ, ', '', '0'),
(9, 'xinexo@gmail.com', 'abd2fc0c38db5c80f81bb864929579e6', 'xinexo', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '2012-07-29 07:56:45', '', '', '', '', '', ''),
(11, 'nonarav@gmail.com', 'b0bbcfb119e56170285fab36ad273911', 'ต้นเด้อ', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'ต้น', 0, 'วรานนท์', 'ทองแกม', '0000-00-00', '0891130030', '', '', '501600a0056fepig-4.jpg', '', '', '2012-07-30 03:35:55', 'm', '', '2202T=photoshop|', 'งานอาสาทั่วไป, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ไอที และคอมพิวเตอร์กราฟฟิค, ', '', '0'),
(12, 'jitarsabank@gmail.com', '9530d321cf6607fafc56f7ef1e7aa7f4', '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 1, '', '', '0000-00-00', '', '', '', '', '', '', '2012-07-31 02:22:06', '', '', '', '', '', ''),
(20, 'naioom.th@gmail.com', 'ba7af2383826d9ec48843a3d04cf7c94', '', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', 1, '', '', '0000-00-00', '', '', '', '', '', '', '2012-09-20 14:33:06', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_events`
--

CREATE TABLE `users_events` (
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_approve` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_locations`
--

CREATE TABLE `users_locations` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `location_id` int(11) NOT NULL DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_occupations`
--

CREATE TABLE `users_occupations` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `occupation_id` int(11) NOT NULL DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`occupation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_skills`
--

CREATE TABLE `users_skills` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `skill_id` int(11) NOT NULL DEFAULT '0',
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_tags`
--

CREATE TABLE `users_tags` (
  `tag_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tag_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tags`
--

INSERT INTO `users_tags` (`tag_id`, `user_id`, `timestamp`) VALUES
(105, 1, '2012-10-30 17:24:08'),
(106, 1, '2012-10-30 17:24:08'),
(108, 1, '2012-10-30 17:24:08'),
(109, 1, '2012-10-30 17:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_timebanks`
--

CREATE TABLE `user_timebanks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `hour` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_timebanks`
--

INSERT INTO `user_timebanks` (`id`, `user_id`, `status`, `hour`, `timestamp`, `description`) VALUES
(1, 1, 1, 13, '2012-09-12 18:13:34', 'manalue add'),
(2, 1, 1, 31, '2012-09-12 18:12:28', ''),
(3, 27, 1, 12, '2012-10-30 16:53:53', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
