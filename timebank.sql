-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2012 at 10:15 PM
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `type`, `event_id`, `user_id`, `ip`, `comment`, `timestamp`, `organization_id`) VALUES
(3, 2, 1, 0, '::1', 'qweqe', '2012-08-05 17:44:26', 3),
(4, 2, 1, 0, '::1', 'asdfasd', '2012-08-05 17:49:18', 3);

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
  `almostsignupend_noti` BOOL NOT NULL DEFAULT  '0',
  `almoststart_noti` BOOL NOT NULL DEFAULT  '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `search_temp`, `signup_begin_date`, `signup_end_date`, `volunteer_begin_date`, `volunteer_end_date`, `signup_begin_time`, `signup_end_time`, `volunteer_begin_time`, `volunteer_end_time`, `organization_id`, `location_id`, `location_name`, `location_district`, `location_province`, `location_postcode`, `status`, `name`, `phone`, `contractor_name`, `project_name`, `volunteer_need_count`, `time_cost`, `detail`, `travel_detail`, `inquiry_detail`, `is_need_expense`, `expense_detail`, `image`, `skills`, `languates`, `technical`, `days`, `timestamp`, `tags`, `message`, `volunteer_joined`) VALUES
(7, '2345234/523452345//<p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; else<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; // open events<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''1'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum = 0;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun = 0;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events_pass = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; foreach($events_pass as $event)<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum +=&nbsp; $event-&gt;time_cost * $event-&gt;volunteer_joined;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun += $event-&gt;volunteer_need_count;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp;</p>/23452345', '2012-08-01', '2012-08-16', '2012-08-06', '2012-08-25', '00:00:00', '23:59:59', '01:00:00', '21:00:00', 3, NULL, '23452345', '3452345', '17', '234523', 1, 'ปุ่ม "create" สมัครสมาชิกองค์กร /organization/create', NULL, NULL, '523452345', 1, 138820, '<p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; else<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; // open events<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''1'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum = 0;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun = 0;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events_pass = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; foreach($events_pass as $event)<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum +=&nbsp; $event-&gt;time_cost * $event-&gt;volunteer_joined;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun += $event-&gt;volunteer_need_count;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp;</p>', '<p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; else<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; // open events<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''1'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum = 0;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun = 0;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events_pass = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; foreach($events_pass as $event)<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum +=&nbsp; $event-&gt;time_cost * $event-&gt;volunteer_joined;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun += $event-&gt;volunteer_need_count;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp;</p>', '<p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; else<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; // open events<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events = $organization-&gt;events-&gt;where(''event.status'', ''='', ''1'')-&gt;find_all();&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum = 0;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun = 0;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $events_pass = $organization-&gt;events-&gt;where(''event.status'', ''='', ''0'')-&gt;find_all();&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; foreach($events_pass as $event)<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $hours_sum +=&nbsp; $event-&gt;time_cost * $event-&gt;volunteer_joined;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $total_valun += $event-&gt;volunteer_need_count;<br />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp;</p>', 0, '', NULL, ' 1101|1102|2101|2102|2103|2104|2105|2106|2107|', '', '', '', '2012-08-07 19:50:37', 'งานอาสาทั่วไป, งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ', '', 23);

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `topic`, `message`, `created`) VALUES
(1, 'ไม่ทราบว่าอยากบริจาคเงินกับทางเว็บไซต์ต้องทำอย่างไร ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2012-06-05 05:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `event_id`, `description`, `image`, `timestamp`) VALUES
(10, 1, '', '501ebfc128794DSC_3143.jpg', '2012-08-05 18:47:30');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `user_id`, `organization_id`, `is_removed`, `is_read`, `title`, `message`, `send_status`, `created`) VALUES
(1, 0, 3, 1, 0, 'ทดสอบ1', 'messageสำหรับทดสอบ1', 0, '2012-06-11 03:03:47'),
(2, 0, 3, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-06-11 03:04:11'),
(3, 0, 3, 1, 0, 'ทดสอ3', 'messageสำหรับทดสอบ3', 0, '2012-06-11 03:04:11');

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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `pic` text NOT NULL,
  `video` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `topic`, `message`, `pic`, `video`, `created`) VALUES
(1, 'ข่าวล่ามาไว', 'เย้ๆๆๆๆๆๆๆๆๆๆๆ', '', '', '2012-06-17 12:24:41');

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
  `fax` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `contactperson` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `twitter` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `website` mediumtext COLLATE utf8_unicode_ci,
  `logo` mediumtext COLLATE utf8_unicode_ci,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `search_temp`, `user_id`, `verified`, `noti_volunteerregister`, `noti_eventalmostend`, `noti_eventend`, `name`, `objective`, `activity`, `address`, `district`, `province`, `postcode`, `homephone`, `fax`, `contactperson`, `facebook`, `twitter`, `website`, `logo`, `timestamp`) VALUES
(3, '', 2, 1, 0, 1, 0, 'ชื่ออออออออออออ', '<p>ดดดดดดดดดดดดดดดดวัตถุประสงค์dfasdf</p>', '<p>qssd</p>', 'zzzzzzz', 'เขต', 'zzzzzzz', 'ไปรษณีย์', '1231231231313', 'โทรสาร', 'บ้าน', 'facebook.com/jitarsa', 'twitter.com/jitarsa', 'http://www.jitarsa.orgg', '501eb200f2adaDSC_3143.jpg', '2012-08-05 17:48:49'),
(4, '', 3, 1, 1, 1, 1, '123124124124', '1231412314124214', '1231412314124214123141231412421412314123141242141231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', NULL, '2012-08-08 17:57:47'),
(5, '', 12, 1, 1, 1, 1, 'ธนาคารจิตอาสา', 'เราเชื่อว่าสังคมไทยจะเป็นสังคมอุดมไปด้วยความรักความสุข มีความมั่นคง และพัฒนาก้าวหน้าต่อไปได้ เพราะทุกคนร่วมสร้างสังคมนี้ขึ้นมา ไม่จำกัดว่าเป็นวัยไหนหรืออยู่ในหน้าที่การงานใด เราต่างมีความมุ่งมั่นตั้งใจเพื่อสร้างประเทศไทย เราไม่นิ่งเฉยดูดาย แต่จะลุกขึ้นยื่นมือมาช่วยเหลือกัน ทุกๆ คนบนผืนแผ่นดินไทยสามารถเป็นอาสาสมัครผู้อุทิศกำลังความสามารถและเวลาอันมีค่าของตนให้แก่ประโยชน์ส่วนรวม', 'ธนาคารจิตอาสามีภากิจ 3 ส่วนหลัก ได้แก่1. ระบบธนาคารเวลา (Time Bank)Time Bank เป็นระบบสนับสนุนการทำงานอาสา ที่เข้าถึงได้ทาง Internet ให้อาสาสมัครได้แสดงความตั้งใจจะใช้เวลาเพื่อทำงานอาสา โดยรวบรวมสถิติการใช้เวลา ยังมีระบบคัดเลือกและแนะนำงาน (matching) ให้ค้นหางานอาสาที่เหมาะกับตนเอง ตรงกับความสนใจ ความถนัด ทักษะ ความสามารถ หรือความสะดวก ไม่เฉพาะแต่ในสถานการณ์ภัยพิบัติเท่านั้น แต่ยังรวมถึงงานอาสาสมัครเพื่อสังคมทุกประเภทที่มีอยู่แล้วในประเทศไทยด้วย2. การปฐมนิเทศและการอบรม (Orientation and Training)การปฐมนิเทศและการอบรมอาสาเป็นกระบวนการเตรียมพร้อมอาสาสมัครก่อนลงไปทำงานอาสา เพื่อให้อาสาได้เกิดประสบการณ์ที่ดี ได้เรียนรู้ และพัฒนาตนเองอย่างรอบด้านทั้งทางกาย ทางใจ และทางสังคม นอกจากนี้การจัดอบรมให้กับองค์กรที่รับอาสาเข้าไปทำงานก็เป็นสิ่งสำคัญเช่นกัน เพราะการจัดกิจกรรมเพื่อให้เกิดประโยชน์สูงสุดกับอาสานั้นจำเป็นต้องมีทั้งความเข้าใจและทักษะ รวมถึงมีการจัดทำคู่มือรวบรวมองค์ความรู้เรื่องการปฐมนิเทศและการอบรมด้วย3. อาสาสัมพันธ์ (Volunteer Relation Managaement: VRM)งานอาสาสัมพันธ์เป็นการสร้างความต่อเนื่องในการมีกิจกรรมความร่วมมือและสื่อสาระะหว่างอาสาสมัครและองค์กรที่จัดกิจกรรม นอกจากจะเป็นช่องทางในการสื่อสาร งานอาสาสัมพันธ์ยังช่วยให้กำลังใจ เปิดโอกาสการแลกเปลี่ยนประสบการณ์ และความประทับใจ จากการทำงาน ตลอดจนสามารถพัฒนาเป็นชุมชนเครือข่ายความร่วมมือตามประเด็นความสนใจ หรือตามพื้นที่ต่อไป', '10 ซ.3 ถ.พหลโยธิน สามเสนใน', 'พญาไท', 'กรุงเทพมหานคร', '10400', '02-617-1797', '02-617-1796', 'ธีรัช', 'www.facebook.com/JitArsaBank', '@JitArsaBank', 'www.JitArsaBank.com', '5017428dd707bAW-logoJitArsaThai_cropped.jpg', '2012-08-01 06:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `recommend_event`
--

CREATE TABLE `recommend_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `recommend_event`
--

INSERT INTO `recommend_event` (`id`, `event_id`, `timestamp`) VALUES
(1, 7, '2012-08-08 20:12:26'),
(2, 0, '2012-08-08 20:12:26'),
(3, 0, '2012-08-08 20:12:26');

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
  `pic` text NOT NULL,
  `video` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `topic`, `date_message`, `message`, `main_pic`, `pic`, `video`, `created`) VALUES
(1, 'การออกแบบกระบวนการและจัดกิจกรรมอาสาสมัครเพื่อส่งเสริมสุขภาวะทางปัญญาสำหรับพี่เลี้ยงอาสาสมัคร', '<p><b>รุ่นที่ 1</b></p>\r\n<p>แรกพบ 28 พฤษภาคม 2555</p>\r\n<p> ครั้งที่ 1 วันที่ 13-15 มิถุนายน 2555</p>\r\n<p>	ครั้งที่ 2 วันที่ 10-13 กรกฏาคม 2555</p>\r\n<p>	ครั้งที่ 3 วันที่ 15-17 สิงหาคม 2555</p>\r\n	\r\n<p><b>รุ่นที่ 2</b></p>\r\n<p>	แรกพบ 24 กรกฏาคม 2555</p>\r\n<p> ครั้งที่ 1 วันที่ 29-31 สิงหาคม 2555</p>\r\n<p>	ครั้งที่ 2 วันที่ 18-21 กันยายน 2555</p>\r\n<p>	ครั้งที่ 3 วันที่ 17-19 ตุลาคม 2555</p>', '<p>หลักสูตรฝึกอบรมต่อเนื่องสำหรับพี่เลี้ยงและผู้ดูแลกิจกรรมขององค์กรอาสาสมัคร เพื่อส่งเสริมศักยภาพการออกแบบกระบวนการและจัดกิจกรรม ให้เกิดการเรียนรู้ เข้าใจ และพัฒนาจิตใจ ทั้งในอาสาสมัครและผู้ดูแล เนื้อหาหลักสูตรแบ่งออกเป็น 3 ส่วนหลักตามการอบรม 3 ครั้ง ได้แก่ ความเข้าใจในตนเองและการสะท้อนตนเอง (Self Reflection) การสื่อสารเพื่องานอาสา (Dialogue & Non-Violent Communication) และการเห็นความเชื่อมโยงของปัญหา (Systems Thinking)</p>\r\n<p>รูปแบบการอบรมเป็นการแลกเปลี่ยนเรียนรู้อย่างมีส่วนร่วมและการทดลองมีประสบการณ์ด้วยตนเอง เพื่อให้เกิดความเข้าใจอย่างลึกซึ้ง และผสมผสานกับบทเรียนจากการทำงานที่มีลักษณะเฉพาะของแต่ละองค์กร ธนาคารจิตอาสาจัดการอบรม 2 รุ่น รุ่นละประมาณ 20 คน</p>', 'main_1.jpg', '1_1.jpg,1_2.jpg,1_3.jpg,1_4.jpg,1_5.jpg,1_6.jpg,1_7.jpg,1_8.jpg,1_9.jpg,1_10.jpg,1_11.jpg,1_12.jpg,1_13.jpg,1_14.jpg,1_15.jpg,1_16.jpg,1_17.jpg,1_18.jpg,1_19.jpg,1_20.jpg,1_21.jpg,1_22.jpg,1_23.jpg,1_24.jpg,1_25.jpg,1_26.jpg', '', '2012-07-28 03:46:00'),
(2, 'Volunteer+ ครั้งที่ 1 : การถอดบทเรียนด้วย KM เพื่องานอาสา', '30 เมษายน 2555', 'การอบรมว่าด้วยแนวคิดวิธีการถอดบทเรียน เพื่อต่อยอดความรู้และประสบการณ์ พัฒนางาน และองค์กรด้วยการจัดการความรู้ (KM -- Knowledge Management) ดร.ประพนธ์ ผาสุขยืด ผู้อำนวยการสถาบันส่งเสริมการจัดการความรู้เพื่อสังคม (สคส.) เป็นผู้มาให้คำแนะนำ ถ่ายทอดความรู้ และชี้ให้เห็นถึงความสำคัญของการถอดบทเรียน เทคนิควิธีการจัดกระบวนการ และการจัดการความรู้ เพื่อประยุกต์ใช้เพื่อให้เกิดประโยชน์ต่องานอาสาอย่างแท้จริง', 'main_2.jpg', '2_1.jpg,2_2.jpg,2_3.jpg,2_4.jpg,2_5.jpg,2_6.jpg,2_7.jpg,2_8.jpg,2_9.jpg,2_10.jpg,2_11.jpg,2_12.jpg,2_13.jpg', '', '2012-07-28 04:22:39'),
(3, 'Volunteer+ ครั้งที่ 2 : Basic Facebook เพื่องานอาสา', '10 พฤษภาคม 2555', 'ปัจจุบัน Facebook ได้กลายเป็นช่องทางการสื่อสารส่งข่าวที่รวดเร็ว โดยเฉพาะงานอาสาในช่วงภัยพิบัติ และการประชาสัมพันธ์กิจกรรมดีๆ ให้เข้าถึงคนหมู่มาก ธนาคารจิตอาสาจึงจัดอบรมให้ความรู้พื้นฐานการใช้งาน Facebook แก่บุคลากรองค์กรอาสา เพื่อเพิ่มพูนทักษะและความถนัดในการใช้สื่อ online ให้มากยิ่งขึ้น', 'main_3.jpg', '3_1.jpg,3_2.jpg,3_4.jpg,3_5.jpg,3_6.jpg,3_7.jpg,3_8.jpg,3_9.jpg,3_10.jpg,3_11.jpg,3_12.jpg,3_13.jpg,3_14.jpg,3_15.jpg', '', '2012-07-28 04:27:48'),
(4, 'Volunteer+ ครั้งที่ 3 : Social Media เพื่องานอาสา', '11 พฤษภาคม 2555', '<p>สงสัยไหม Facebook แบบไหนใครๆ ถึงอยากติดตาม?</p>\r\n<p>ในการอบรมครั้งนี้คุณธนบูรณ์ สมบูรณ์ ผู้ร่วมก่อตั้ง "อาสาสมัครฟื้นฟูประเทศไทย (สยามอาสา)" ซึ่งมีบทบาทอย่างมากในการกระจายข่าวอาสาสมัครบน โลกออนไลน์ในช่วงมหาอุทกภัยของประเทศไทยในปี 2554  ได้มาแบ่งปันประสบการณ์การใช้ Facebook และ Twitter ซึ่งเป็น Social Media ที่ทรงพลังในการสื่อสารทุกวันนี้ เพื่อติดต่อสื่อสาร และรักษาความสัมพันธ์กับอาสาสมัครบนโลกออนไลน์ ว่าทำอย่างไรที่จะทำให้ผู้คนอยากติดตามข่าวสารขององค์กร ทำอย่างไรให้ประชาสัมพันธ์ตรงกลุ่มเป้าหมาย รูปภาพที่นำเสนอควรเป็นแบบไหน จะดูแลกลุ่มเป้าหมายที่ติดตามองค์กรของเราอย่างไร</p>\r\n<p>ผลจากการอบรมครั้งนี้พบว่า หลายองค์กรได้ปรับใช้กับ Page ที่มีอยู่ ทำให้มีจำนวนผู้ติดตามเพิ่มขึ้นอีกมาก รวมทั้งการเข้ามา comment และ share เนื้อหาก็เพิ่มขึ้นด้วย</p>', 'main_4.jpg', '4_1.jpg,4_2.jpg,4_3.jpg,4_4.jpg,4_5.jpg,4_6.jpg,4_7.jpg,4_8.jpg', '', '2012-07-28 04:38:56'),
(5, 'Volunteer+ ครั้งที่ 4 : สุนทรียสนทนาในงานอาสา', '1 มิถุนายน 2555', '<p>ทำไมงานที่ทำแต่สิ่งดีๆ เพื่อสร้างสรรค์สังคม จึงต้องมีการทะเลาะกัน 	พูดคุยกันไม่รู้เรื่องในองค์กร ด้วยทั้งๆ ที่ทุกคนก็คิดดี ทำดีกันทั้งนั้น</p>\r\n<p>การอบรมครั้งนี้ อ.ณัฐฬส วังวิญญู ผู้อำนวยการสถาบันขวัญแผ่นดิน เป็นผู้มาจัดกระบวนการเรียนรู้และฝึกปฏิบัติการสื่อสารกับคนในองค์กร อย่างเข้าอกเข้าใจ ราวกับเราต่างได้เข้าไปนั่งในใจของกัน และสามารถนำความรู้นี้ไปใช้ดูแลอาสาสมัครที่มาร่วมงานกับองค์กร</p>', 'main_5.jpg', '5_1.jpg,5_2.jpg,5_3.jpg,5_4.jpg,5_5.jpg,5_6.jpg,5_7.jpg,5_8.jpg,5_9.jpg,5_10.jpg,5_11.jpg,5_12.jpg,5_13.jpg,5_14.jpg,5_15.jpg,5_16.jpg,5_17.jpg,5_18.jpg,5_19.jpg,5_20.jpg', '', '2012-07-28 04:43:46'),
(6, 'Volunteer+ ครั้งที่ 5 : โยคะภาวนากับงานจิตอาสา', '29 มิถุนายน 2555', '<p>งานอาสาที่เป็นการช่วยเหลือผู้อื่นนั้นเป็นงานที่ท้าทาย และใช้พลังทั้งทางกายและใจมาก ผู้ดูแลกิจกรรมอาสาควรได้มีแนวทางสำหรับการสร้างสมดุลการเรียนรู้ให้แก่อาสาสมัคร โดยผสมผสานภารกิจทางสังคมเข้ากับการเรียนรู้กายเรียนรู้ใจตนเอง เพื่อให้เกิดการพัฒนาและเรียนรู้ชีวิตอย่างเป็นองค์รวม </p>\r\n<p>อ.ธนวัชร์ เกตน์วิมุต หรือ ครูดล จากเครือข่ายชีวิตสิกขา เป็นผู้มาแบ่งปัน และถ่ายทอดถึงการเรียนรู้ที่เป็นหัวใจของการฝึกโยคะ โดยผสมผสานการภาวนาและการเจริญสติในกระบวนการกิจกรรมอาสาสมัครที่หลากหลาย  </p>', 'main_6.jpg', '6_1.jpg,6_2.jpg,6_3.jpg,6_4.jpg,6_5.jpg,6_6.jpg,6_7.jpg,6_8.jpg,6_9.jpg', '', '2012-07-28 04:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `password` varchar(64) NOT NULL,
  `displayname` text NOT NULL,
  `noti_eventrecommended` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventapproved` tinyint(1) NOT NULL DEFAULT '1',
  `noti_almosteventdate` tinyint(1) NOT NULL DEFAULT '1',
  `noti_eventthank` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_eventapproved` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_almosteventdate` tinyint(1) NOT NULL DEFAULT '1',
  `noti_sms_news` tinyint(1) NOT NULL DEFAULT '1',
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sex` char(1) NOT NULL,
  `website` text NOT NULL,
  `skills` text NOT NULL,
  `interest_tags` text NOT NULL,
  `location` text NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `displayname`, `noti_eventrecommended`, `noti_eventapproved`, `noti_almosteventdate`, `noti_eventthank`, `noti_sms_eventapproved`, `noti_sms_almosteventdate`, `noti_sms_news`, `nickname`, `role`, `first_name`, `last_name`, `birthday`, `phone`, `address`, `profile_image`, `quote`, `description`, `created`, `sex`, `website`, `skills`, `interest_tags`, `location`, `province`) VALUES
(1, 'volunteer@jitarsa.org', '029e4aa7146dceb2b9adda3ce9d9bfaa', 'volunteer nakrub', 1, 1, 1, 1, 1, 1, 1, 'nickname', 0, 'first_name', 'last_name', '1857-06-06', '12356', 'adfa', '50216d46cb0e4DSC_3074.jpg', '', '', '2012-08-07 19:32:23', '', '13123', '1101|1102|1201|2303|2304|2305|2306|2307|2803|2804|2805|', 'ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, ประสานงานและบริหารจัดการ, เด็กและเยาวชน, สตรี, ผู้สูงอายุและครอบครัว, ผู้พิการ, ไอที และคอมพิวเตอร์กราฟฟิค, สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด, สุนัข แมว และสัตว์เลี้ยง, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ', '12312', '1'),
(2, 'org@jitarsa.org', '741a8f387c2c3f39ba241937a47c1e0d', 'org nakrub', 1, 1, 1, 1, 1, 1, 1, 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '2012-06-27 18:58:29', '', '', '', '', '', ''),
(10, 'nooock@gmail.com', '0f3ee822972d620fb337c02f6f3873ad', 'Noock', 1, 1, 1, 1, 1, 1, 1, 'Noock', 0, 'Teerut', 'Piriyapunyaporn', '0000-00-00', '0840034536', '', '50165a166d381Noock.jpg', '', '', '2012-07-31 04:33:40', '', '', '1101|1102|2101|2103|', 'หัตถกรรมและงานฝีมือ, ', '', '0'),
(9, 'xinexo@gmail.com', 'abd2fc0c38db5c80f81bb864929579e6', 'xinexo', 1, 1, 1, 1, 1, 1, 1, '', 0, '', '', '0000-00-00', '', '', '', '', '', '2012-07-29 07:56:45', '', '', '', '', '', ''),
(11, 'nonarav@gmail.com', 'b0bbcfb119e56170285fab36ad273911', 'ต้นเด้อ', 1, 1, 1, 1, 1, 1, 1, 'ต้น', 0, 'วรานนท์', 'ทองแกม', '0000-00-00', '0891130030', '', '501600a0056fepig-4.jpg', '', '', '2012-07-30 03:35:55', 'm', '', '2202T=photoshop|', 'งานอาสาทั่วไป, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ไอที และคอมพิวเตอร์กราฟฟิค, ', '', '0'),
(12, 'jitarsabank@gmail.com', '9530d321cf6607fafc56f7ef1e7aa7f4', '', 1, 1, 1, 1, 1, 1, 1, '', 1, '', '', '0000-00-00', '', '', '', '', '', '2012-07-31 02:22:06', '', '', '', '', '', ''),
(15, 'naioom.th@gmail.com', '57bb86f05643fbbb898f78228eed4d56', 'nai0om', 1, 1, 1, 1, 1, 1, 1, '', 0, 'ืnai0om', 'naja', '0000-00-00', '12312414124', '', '', '', '', '2012-08-06 17:55:21', '', '', '', '', '', '');

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

--
-- Dumping data for table `users_events`
--

INSERT INTO `users_events` (`user_id`, `event_id`, `status`, `timestamp`, `time_approve`) VALUES
(1, 7, 1, '2012-08-07 20:00:26', 0);

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
-- Table structure for table `user_timebanks`
--

CREATE TABLE `user_timebanks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `hour` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_timebanks`
--

INSERT INTO `user_timebanks` (`id`, `user_id`, `status`, `hour`, `timestamp`, `description`) VALUES
(6, 1, 1, 1111, '2012-08-07 18:35:36', ''),
(5, 1, 1, 1111, '2012-08-07 18:35:35', ''),
(4, 1, 1, 1111, '2012-08-07 18:35:33', ''),
(3, 1, 1, 1111, '2012-08-07 18:35:27', ''),
(2, 1, 1, 1999, '2012-08-07 18:34:34', ''),
(1, 1, 2, -138820, '2012-08-07 18:26:08', 'ได้รับจากงานอาสา ปุ่ม "create" สมัครสมาชิกองค์กร /organization/create'),
(7, 1, 1, 1231, '2012-08-07 18:35:40', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
