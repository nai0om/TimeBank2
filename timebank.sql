-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2012 at 04:51 PM
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
  `recommend` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `type`, `event_id`, `user_id`, `ip`, `comment`, `timestamp`, `organization_id`, `recommend`) VALUES
(3, 2, 10, 1, '::1', 'qweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqeqweqe', '2012-08-05 17:44:26', 3, 1),
(4, 2, 10, 1, '::1', 'asdfasd', '2012-08-05 17:49:18', 3, 1),
(8, 2, 10, 1, '::1', 'asdfasdfas', '2012-08-09 16:45:46', 3, 1),
(10, 2, 12, 0, '::1', 'asdfasdf', '2012-09-18 19:18:48', 5, 0),
(11, 2, 11, 0, '::1', 'asdfasdf', '2012-09-20 14:22:17', 7, 0),
(12, 2, 12, 0, '::1', 'asdfasf', '2012-09-20 14:22:45', 7, 0);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `search_temp`, `signup_begin_date`, `signup_end_date`, `volunteer_begin_date`, `volunteer_end_date`, `signup_begin_time`, `signup_end_time`, `volunteer_begin_time`, `volunteer_end_time`, `organization_id`, `location_id`, `location_name`, `location_district`, `location_province`, `location_postcode`, `status`, `name`, `phone`, `contractor_name`, `project_name`, `volunteer_need_count`, `time_cost`, `detail`, `travel_detail`, `inquiry_detail`, `is_need_expense`, `expense_detail`, `image`, `skills`, `languates`, `technical`, `days`, `timestamp`, `tags`, `message`, `volunteer_joined`, `recommend`) VALUES
(10, 'asdfasdfasdf/asdfasdfasdfasdfasdf//<ol>\n<li>asdfasdfasdfasdfasdf</li>\n</ol>\n<p>asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</p>/asdfasdfasdfasdfasdf', NULL, '2012-09-28', '2012-08-02', '2012-09-29', '00:00:00', '00:00:00', '00:00:00', '23:59:59', 5, NULL, 'asdfasdfasdfasdfasdf', 'asdfasdfasdfasdfasdf', '19', 'asdfasdfasdfasdfasdf', 0, 'asdfasdfasdf', NULL, NULL, 'asdfasdfasdfasdfasdf', 12, 192, '<ol>\n<li>asdfasdfasdfasdfasdf</li>\n</ol>\n<p>asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</p>', '<p>asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</p>', '<p>asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</p>', 0, '', '5052a9b40c58aWP_000453.jpg', ' ', '', '', 'อังคาร, ', '2012-09-16 19:34:33', 'ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ', 'สวัสดีจ้า', 0, 0),
(11, ' asdfasdf/sdfasdfasdfas//<p>sdfsadfasdfasdfasdfadf</p>/asdasdfasdfsa', NULL, '2012-09-29', '2012-09-29', '2012-11-08', '00:00:00', '00:00:00', '00:00:00', '23:59:59', 5, NULL, 'asdasdfasdfsa', 'fasdfasdf12', '2', '3123211', 1, ' asdfasdf', NULL, NULL, 'sdfasdfasdfas', 23, 984, '<p>sdfsadfasdfasdfasdfadf</p>', '<p>sdfasdfasdfadsf</p>', '<p>asdfasdfasdfa</p>', 0, '<p>asdfasdf</p>', '5052d887694b2AlbumArt_{18F1C30A-581C-4F55-BDED-29D1722BA155}_Large.jpg', ' 11011|11012|1102|12031|12051T= |12042|', '', '', '', '2012-09-20 18:44:35', 'ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, อาหารและโภชนาการ, สิ่งแวดล้อมและการเกษตร, ก่อสร้างและงานช่างเทคนิค, กฎหมาย, สุขภาพและสาธารณสุข, การศึกษาและฝึกอบรม, ', 'asdfasdfasdf', 0, 1),
(12, '143123412/34123412341//<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>/1234123413241234123', NULL, '2012-09-29', '2012-10-23', '2012-10-26', '00:00:00', '00:00:00', '00:00:00', '23:59:59', 5, NULL, '1234123413241234123', '123412', '2', '1234123', 1, '143123412', NULL, NULL, '34123412341', 12, 648, '<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>', '<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>', '<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>\n<p>13242w</p>', 0, '', '5058c43390579WP_000452.jpg', ' 1403|', '', '', '', '2012-09-22 10:00:44', '', '', 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `event_id`, `description`, `image`, `highlight`, `timestamp`) VALUES
(11, 8, 'asdsad', '5052cacbb53f2WP_000452.jpg', 0, '2012-09-14 06:14:44'),
(10, 1, '', '501ebfc128794DSC_3143.jpg', 0, '2012-08-05 18:47:30');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `user_id`, `organization_id`, `is_removed`, `is_read`, `title`, `message`, `send_status`, `created`) VALUES
(1, 19, 0, 1, 0, 'ทดสอบ99xxxx', 'messageสำหรับทดสอบ1', 0, '2012-06-11 03:03:47'),
(2, 0, 3, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-06-11 03:04:11'),
(3, 0, 3, 1, 0, 'ทดสอ3', 'messageสำหรับทดสอบ3', 0, '2012-06-11 03:04:11'),
(4, 0, 0, 1, 0, 'ทดสอ3', 'messageสำหรับทดสอบ3', 0, '2012-09-15 12:30:44'),
(5, 0, 0, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-09-15 12:31:15'),
(6, 0, 0, 1, 0, 'ทดสอบ2123', 'messageสำหรับทดสอบ2', 0, '2012-09-15 12:31:53'),
(7, 0, 0, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-09-15 12:32:26'),
(8, 0, 0, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-09-15 12:33:11'),
(9, 0, 0, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-09-15 12:33:53'),
(10, 0, 0, 1, 0, 'ทดสอบ99', 'messageสำหรับทดสอบ1', 0, '2012-09-15 12:38:58'),
(11, 0, 5, 1, 0, 'งานอาสาของคุณเสร็จสิ้นแล้ว: กรุณาเขียนคำขอบคุณ-โพสต์รูป-ปิดงาน "asdfasdfasdf"', 'งานอาสาของคุณเสร็จสิ้นแล้ว: กรุณาเขียนคำขอบคุณ-โพสต์รูป-ปิดงาน "asdfasdfasdf"', 0, '2012-09-16 19:38:55'),
(12, 0, 5, 0, 0, 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', 0, '2012-09-20 15:05:36'),
(13, 0, 5, 0, 0, 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', 0, '2012-09-20 15:18:38'),
(14, 0, 5, 0, 0, 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', 0, '2012-09-20 15:19:07'),
(15, 1, 0, 0, 0, 'คุณได้รับการตอบรับให้เข้าร่วม "143123412"', 'คุณได้รับการตอบรับให้เข้าร่วม "143123412"', 0, '2012-09-20 15:21:37'),
(16, 1, 0, 0, 0, 'คุณได้รับการตอบรับให้เข้าร่วม "143123412"', 'คุณได้รับการตอบรับให้เข้าร่วม "143123412"', 0, '2012-09-20 18:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `content`, `timestamp`) VALUES
(2, 'คู่มือจิตอาสา', '<p>ภาคี เครือข่ายจิตอาสา เครือข่ายพุทธิกา สสส. และ สช. ร่วมแบ่งปัน "คู่มือจิตอาสา" สำหรับทั้งอาสาสมัครและ องค์กรที่บริหารจัดการอาสาสมัคร</p>\n<p>เป็นแนวทางง่ายๆ ที่ช่วยให้การออกมาทำความดีร่วมกันเกิดประโยชน์สูงสุดทั้งผู้ให้และผู้รับ ช่วยให้อาสาสมัคร ทำงานโดยมี "จิตอาสา" เกิดผลดีทั้งต่องานและต่อการเรียนรู้ ฝึกฝน ขัดเกลาตนเอง</p>\n<p>มีสองเวอร์ชัน คือ</p>\n<p><a href="../media/upload/download/volunteer_2011_guidline.pdf">1. Volunteer 2011 Guideline: สำหรับแผ่นพับขนาดเอสี่ สองหน้า (หน้าหลัง พับครึ่ง)</a></p>\n<p><a href="../media/upload/download/volunteer_2011_guidline_poster.pdf">2. Volunteer 2011 Guideline Poster: สำหรับโปสเตอร์ขนาดเอสี่ สองหน้าต่อกัน</a></p>\n<p>สามารถผลิตเพิ่มและใช้ได้ตามสะดวก</p>\n<p>ยินดีรับคำแนะนำเพื่อการพัฒนาเอกสารให้รับใช้สังคมได้ดีที่สุด โดยส่งมาที่ JitArsaBank (เครื่องหมาย @) gmail.com</p>', '2012-09-12 15:20:38'),
(3, 'คู่มือจิตอาสา', '<p>ภาคี เครือข่ายจิตอาสา เครือข่ายพุทธิกา สสส. และ สช. ร่วมแบ่งปัน "คู่มือจิตอาสา" สำหรับทั้งอาสาสมัครและ องค์กรที่บริหารจัดการอาสาสมัคร</p>\n<p>เป็นแนวทางง่ายๆ ที่ช่วยให้การออกมาทำความดีร่วมกันเกิดประโยชน์สูงสุดทั้งผู้ให้และผู้รับ ช่วยให้อาสาสมัคร ทำงานโดยมี "จิตอาสา" เกิดผลดีทั้งต่องานและต่อการเรียนรู้ ฝึกฝน ขัดเกลาตนเอง</p>\n<p>มีสองเวอร์ชัน คือ</p>\n<p><a href="../media/upload/download/volunteer_2011_guidline.pdf">1. Volunteer 2011 Guideline: สำหรับแผ่นพับขนาดเอสี่ สองหน้า (หน้าหลัง พับครึ่ง)</a></p>\n<p><a href="../media/upload/download/volunteer_2011_guidline_poster.pdf">2. Volunteer 2011 Guideline Poster: สำหรับโปสเตอร์ขนาดเอสี่ สองหน้าต่อกัน</a></p>\n<p>สามารถผลิตเพิ่มและใช้ได้ตามสะดวก</p>\n<p>ยินดีรับคำแนะนำเพื่อการพัฒนาเอกสารให้รับใช้สังคมได้ดีที่สุด โดยส่งมาที่ JitArsaBank (เครื่องหมาย @) gmail.com</p>', '2012-09-12 15:25:29');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=350 ;

--
-- Dumping data for table `mailqueues`
--

INSERT INTO `mailqueues` (`id`, `from`, `to`, `subject`, `body`, `sent`, `sending`, `retried`, `created`) VALUES
(343, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.org', 'งานอาสาของคุณเสร็จสิ้นแล้ว: กรุณาเขียนคำขอบคุณ-โพสต์รูป-ปิดงาน "asdfasdfasdf"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดี ธนาคารจิตอาสา</p>\n\n									<p><img src="http://preview.jitarsabank.com/media/upload/email/bullet.png">งานอาสาของท่านได้สิ้นสุดลงแล้ว คุณสามารถเขียนคำขอบคุณอาสาที่มาร่วมงาน โพสต์รูปกิจกรรม และปิดงานได้ที่<br>\n\n									<a href="http://preview.jitarsabank.com/event/view/10">asdfasdfasdf</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n									<p>อาสาจะได้รับการเชิญชวนผ่านระบบแจ้งเตือนให้เข้ามาอ่านคำขอบคุณ \n									<br>ดูภาพกิจกรรมและแบ่งปันประสบการณ์หลังคุณ "ปิดงาน" แล้ว</p>\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-16 19:38:55'),
(344, 'JitArsa Bank <JitArsaBank@gmail.com>', 'naioom.th@gmail.com', 'ยินดีต้อนรับสู่ธนาคารจิตอาสา (สำหรับองค์กร)', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc;text-decoration:underline; }</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ </p>\n\n									<p>ขอบคุณที่ร่วมลงทะเบียนสมัครสมาชิกองค์กรอาสากับเรา: </p>\n\n									 <table class="top" width="505" border="0" cellspacing="0" cellpadding="0">\n\n										<tr>\n\n											<td valign="top" height="13">\n\n												<img src="http://preview.jitarsabank.com/media/upload/email/843_box_header.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td align="center" valign="top" bgcolor="#ffffff">\n\n												 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n													<tr>\n\n														<td valign="center" rowspan="3">\n\n															<img src="http://preview.jitarsabank.com/media/upload/email/73_icon.jpg">\n\n														</td>\n\n														<td valign="top">\n\n															<p style="margin:0;padding:0;color:#da7101">ชื่อองค์กร / หน่วยงาน:</p>\n\n														</td>\n\n														<td valign="top">\n\n															<p style="margin:0;padding:0;">naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com</p>\n\n														</td>\n\n													</tr>\n\n													<tr>\n\n														<td valign="top">\n\n															<p style="margin:0;padding:0;color:#da7101">ชื่อผู้ใช้ (อีเมล): </p>		\n\n														</td>\n\n														<td valign="top">\n\n															<p style="margin:0;padding:0;">naioom.th@gmail.com</p>\n\n														</td>\n\n													</tr>\n\n													<tr>\n\n														<td valign="top">\n\n															<p style="margin:0;padding:0;color:#da7101">รหัสผ่าน: </p>		\n\n														</td>\n\n														<td valign="top">\n\n															<p style="margin:0;padding:0;">123456</p>\n\n														</td>\n\n													</tr>\n\n												 </table>\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td valign="top" height="15">\n\n												<img src="http://preview.jitarsabank.com/media/upload/email/843_box_footer.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td valign="top">\n												<br clear="left">\n\n												<!--p>กรุณาคลิกลิงค์ด้านล่าง เพื่อยืนยันการเป็นสมาชิกของคุณที่นี่ก่อนเข้าสู่ระบบ: <br>\n												<a>http://www.hostname.com/confirm.php</a></p-->\n                                               \n												<p><a href="http://preview.jitarsabank.com/">คลิกที่นี่... เพื่อเข้าใช้ระบบธนาคารจิตอาสา</a></p>\n											</td>\n\n										</tr>\n\n									</table>\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br><a href="http://preview.jitarsabank.com/">ธนาคารจิตอาสา</a></p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-20 14:18:28'),
(345, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.com', 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://preview.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร เข้าสมัครเข้าร่วมกิจรรม....<br>\n\n									<a href="http://preview.jitarsabank.com/event/approve/12">143123412</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-20 15:05:36'),
(346, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.com', 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://preview.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร เข้าสมัครเข้าร่วมกิจรรม....<br>\n\n									<a href="http://preview.jitarsabank.com/event/approve/12">143123412</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-20 15:18:38'),
(347, 'JitArsa Bank <JitArsaBank@gmail.com>', 'org@jitarsa.com', 'มี "อาสา" สมัครเข้ามาร่วมกิจกรรมของคุณ "143123412"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc; text-decoration:underline;}</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ ธนาคารจิตอาสา</p>\n\n									<p><img src="http://preview.jitarsabank.com/media/upload/email/bullet.png">มีอาสาสมัคร เข้าสมัครเข้าร่วมกิจรรม....<br>\n\n									<a href="http://preview.jitarsabank.com/event/approve/12">143123412</a></p>								 \n\n									<br clear="left">\n\n									<br clear="left">\n\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-20 15:19:07'),
(348, 'JitArsa Bank <JitArsaBank@gmail.com>', 'volunteer@jitarsa.com', 'คุณได้รับการตอบรับให้เข้าร่วม "143123412"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc;text-decoration:underline; }</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ volunteer nakrub</p>\n\n									<p><a>ธนาคารจิตอาสา</a> ได้ตอบรับการเข้าร่วมงาน <br>\n\n									<a>143123412</a> ที่คุณได้สมัครไว้เรียบร้อยแล้ว</p>\n\n									 <table class="top" width="505" border="0" cellspacing="0" cellpadding="0">\n\n										<tr>\n\n											<td valign="top" height="13">\n\n												<img src="http://preview.jitarsabank.com/media/upload/email/843_box_header.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td align="center" valign="top" bgcolor="#ffffff">\n\n												 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n													<tr>\n\n														<td valign="top">\n\n															<p>คุณสามารถดูรายชื่ออาสาสมัครได้ที่เข้าร่วมกิจกรรมนี้ได้ที่...</p>\n\n															<p><a href="http://preview.jitarsabank.com/event/view/12?mode=2"><img src="http://preview.jitarsabank.com/media/upload/email/843_list.png"><a></p>\n\n														</td>\n\n													</tr>\n\n												 </table>\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td valign="top" height="15">\n\n												<img src="http://preview.jitarsabank.com/media/upload/email/843_box_footer.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n									</table>\n\n									<p></p>\n									<p>อย่าลืมเตรียมใจ เตรียมกายให้พร้อม<br>\n									และขอให้มีความสุขกับกิจกรรมนะครับ</p>\n									\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-20 15:21:37'),
(349, 'JitArsa Bank <JitArsaBank@gmail.com>', 'volunteer@jitarsa.com', 'คุณได้รับการตอบรับให้เข้าร่วม "143123412"', '<style type="text/css">h1 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 38px; color: #212121 !important; margin: 0; padding: 0 0 0 15px; font-style: italic; }\n\nh2 { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; color: #212121 !important; margin: 0 0 7px 0; }\n\np { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; line-height: 21px; color: #212121; margin: 0 0 12px 0; }\n\na{ font-family:Verdana, Arial, Helvetica, sans-serif;color:#0099cc;text-decoration:underline; }</style></head>\n\n<body style="margin:0; padding:0;">\n\n<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">\n\n    <tr>\n\n        <td valign="top" align="center">\n\n            <table width="565" border="0" cellpadding="0" cellspacing="0" align="center" style="">\n\n                <tr>\n\n                    <td align="center" valign="top" style="padding-top:10px;">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="header">\n\n                                    <img src="http://preview.jitarsabank.com/media/upload/email/header.jpg" style="display:block;float:none;">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n                <tr>\n\n                    <td align="center" valign="top" bgcolor="#e7daca">\n\n						 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" class="header">\n\n                                    <p>สวัสดีครับ volunteer nakrub</p>\n\n									<p><a>ธนาคารจิตอาสา</a> ได้ตอบรับการเข้าร่วมงาน <br>\n\n									<a>143123412</a> ที่คุณได้สมัครไว้เรียบร้อยแล้ว</p>\n\n									 <table class="top" width="505" border="0" cellspacing="0" cellpadding="0">\n\n										<tr>\n\n											<td valign="top" height="13">\n\n												<img src="http://preview.jitarsabank.com/media/upload/email/843_box_header.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td align="center" valign="top" bgcolor="#ffffff">\n\n												 <table class="top" width="90%" border="0" cellspacing="0" cellpadding="0">\n\n													<tr>\n\n														<td valign="top">\n\n															<p>คุณสามารถดูรายชื่ออาสาสมัครได้ที่เข้าร่วมกิจกรรมนี้ได้ที่...</p>\n\n															<p><a href="http://preview.jitarsabank.com/event/view/12?mode=2"><img src="http://preview.jitarsabank.com/media/upload/email/843_list.png"><a></p>\n\n														</td>\n\n													</tr>\n\n												 </table>\n\n											</td>\n\n										</tr>\n\n										<tr>\n\n											<td valign="top" height="15">\n\n												<img src="http://preview.jitarsabank.com/media/upload/email/843_box_footer.png" style="display:block;float:none;">\n\n											</td>\n\n										</tr>\n\n									</table>\n\n									<p></p>\n									<p>อย่าลืมเตรียมใจ เตรียมกายให้พร้อม<br>\n									และขอให้มีความสุขกับกิจกรรมนะครับ</p>\n									\n									<p>ขอบคุณครับ<br>ธนาคารจิตอาสา</p>\n\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n				<tr>\n\n                    <td align="center" valign="top">\n\n                        <table class="top" width="100%" border="0" cellspacing="0" cellpadding="0">\n\n                            <tr>\n\n                                <td valign="top" height="121" class="footer">\n\n                                </td>\n\n                            </tr>\n\n                        </table>\n\n                    </td>\n\n                </tr>\n\n            </table>\n\n        </td>\n\n    </tr>\n\n</table>\n\n</body>', 0, '0', 0, '2012-09-20 18:13:40');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `newsimages`
--

INSERT INTO `newsimages` (`id`, `news_id`, `image`, `timestamp`) VALUES
(20, 11, '5050a02ecd73eWP_000453.jpg', '2012-09-12 14:46:07');

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
  `mobilephone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `fax` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `contactperson` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `twitter` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `website` mediumtext COLLATE utf8_unicode_ci,
  `logo` mediumtext COLLATE utf8_unicode_ci,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `search_temp`, `user_id`, `verified`, `noti_volunteerregister`, `noti_eventalmostend`, `noti_eventend`, `name`, `objective`, `activity`, `address`, `district`, `province`, `postcode`, `homephone`, `mobilephone`, `fax`, `contactperson`, `facebook`, `twitter`, `website`, `logo`, `timestamp`) VALUES
(5, '', 2, 1, 1, 1, 1, 'ธนาคารจิตอาสา', '<p>เราเชื่อว่าสังคมไทยจะเป็นสังคมอุดมไปด้วยความรักความสุข มีความมั่นคง และพัฒนาก้าวหน้าต่อไปได้ เพราะทุกคนร่วมสร้างสังคมนี้ขึ้นมา ไม่จำกัดว่าเป็นวัยไหนหรืออยู่ในหน้าที่การงานใด เราต่างมีความมุ่งมั่นตั้งใจเพื่อสร้างประเทศไทย เราไม่นิ่งเฉยดูดาย แต่จะลุกขึ้นยื่นมือมาช่วยเหลือกัน ทุกๆ คนบนผืนแผ่นดินไทยสามารถเป็นอาสาสมัครผู้อุทิศกำลังความสามารถและเวลาอันมีค่าของตนให้แก่ประโยชน์ส่วนรวม</p>', '<p>ธนาคารจิตอาสามีภากิจ 3 ส่วนหลัก ได้แก่1. ระบบธนาคารเวลา (Time Bank)Time Bank เป็นระบบสนับสนุนการทำงานอาสา ที่เข้าถึงได้ทาง Internet ให้อาสาสมัครได้แสดงความตั้งใจจะใช้เวลาเพื่อทำงานอาสา โดยรวบรวมสถิติการใช้เวลา ยังมีระบบคัดเลือกและแนะนำงาน (matching) ให้ค้นหางานอาสาที่เหมาะกับตนเอง ตรงกับความสนใจ ความถนัด ทักษะ ความสามารถ หรือความสะดวก ไม่เฉพาะแต่ในสถานการณ์ภัยพิบัติเท่านั้น แต่ยังรวมถึงงานอาสาสมัครเพื่อสังคมทุกประเภทที่มีอยู่แล้วในประเทศไทยด้วย2. การปฐมนิเทศและการอบรม (Orientation and Training)การปฐมนิเทศและการอบรมอาสาเป็นกระบวนการเตรียมพร้อมอาสาสมัครก่อนลงไปทำงานอาสา เพื่อให้อาสาได้เกิดประสบการณ์ที่ดี ได้เรียนรู้ และพัฒนาตนเองอย่างรอบด้านทั้งทางกาย ทางใจ และทางสังคม นอกจากนี้การจัดอบรมให้กับองค์กรที่รับอาสาเข้าไปทำงานก็เป็นสิ่งสำคัญเช่นกัน เพราะการจัดกิจกรรมเพื่อให้เกิดประโยชน์สูงสุดกับอาสานั้นจำเป็นต้องมีทั้งความเข้าใจและทักษะ รวมถึงมีการจัดทำคู่มือรวบรวมองค์ความรู้เรื่องการปฐมนิเทศและการอบรมด้วย3. อาสาสัมพันธ์ (Volunteer Relation Managaement: VRM)งานอาสาสัมพันธ์เป็นการสร้างความต่อเนื่องในการมีกิจกรรมความร่วมมือและสื่อสาระะหว่างอาสาสมัครและองค์กรที่จัดกิจกรรม นอกจากจะเป็นช่องทางในการสื่อสาร งานอาสาสัมพันธ์ยังช่วยให้กำลังใจ เปิดโอกาสการแลกเปลี่ยนประสบการณ์ และความประทับใจ จากการทำงาน ตลอดจนสามารถพัฒนาเป็นชุมชนเครือข่ายความร่วมมือตามประเด็นความสนใจ หรือตามพื้นที่ต่อไป</p>', '10 ซ.3 ถ.พหลโยธิน สามเสนใน', 'พญาไท', 'กรุงเทพมหานคร', '10400', '02-617-1797', '', '02-617-1796', 'ธีรัช', 'www.facebook.com/JitArsaBank', 'JitArsaBank', 'www.JitArsaBank.com', '5055719a08127WP_000452.jpg', '2012-09-19 17:10:29'),
(6, '', NULL, 0, 1, 1, 1, 'asdasd', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '2012-09-19 17:06:33'),
(7, '', 20, 1, 1, 1, 1, 'naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.comnaioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.comnaioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.th@gmail.com', 'naioom.thgmail.com', 'naioom.th@gmail.com', NULL, '2012-09-20 14:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(8, 'งงงงง'),
(9, 'ทำมไร'),
(10, 'วัด'),
(11, '8'),
(12, 'เออว่ะ'),
(13, 'เวพ');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `displayname`, `noti_eventrecommended`, `noti_eventapproved`, `noti_almosteventdate`, `noti_eventthank`, `noti_sms_eventapproved`, `noti_sms_almosteventdate`, `noti_sms_news`, `nickname`, `role`, `first_name`, `last_name`, `birthday`, `phone`, `address`, `profile_image`, `quote`, `description`, `created`, `sex`, `website`, `skills`, `interest_tags`, `location`, `province`) VALUES
(1, 'volunteer@jitarsa.org', 'b88f902b96b6f9e0adea1d48a91c02ea', 'volunteer nakrub1', 1, 1, 1, 1, 1, 1, 1, '', 2, '', '', '1857-08-01', '', 'adfa', '50216d46cb0e4DSC_3074.jpg', '', '', '2012-09-22 10:24:08', 'f', '', '1102|2303|2304|2305|2306|2307|2803|2804|2805|', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ,หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย,อาหารและโภชนาการ,ก่อสร้างและงานช่างเทคนิค', '12312', '1'),
(2, 'org@jitarsa.org', 'efdc15444a9fba50a653b540557a1155', 'org nakrub', 1, 1, 1, 1, 1, 1, 1, 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '2012-09-20 19:37:51', '', '', '', '', '', ''),
(10, 'nooock@gmail.com', '0f3ee822972d620fb337c02f6f3873ad', 'Noock', 1, 1, 1, 1, 1, 1, 1, 'Noock', 0, 'Teerut', 'Piriyapunyaporn', '0000-00-00', '0840034536', '', '50165a166d381Noock.jpg', '', '', '2012-07-31 04:33:40', '', '', '1101|1102|2101|2103|', 'หัตถกรรมและงานฝีมือ, ', '', '0'),
(9, 'xinexo@gmail.com', 'abd2fc0c38db5c80f81bb864929579e6', 'xinexo', 1, 1, 1, 1, 1, 1, 1, '', 0, '', '', '0000-00-00', '', '', '', '', '', '2012-07-29 07:56:45', '', '', '', '', '', ''),
(11, 'nonarav@gmail.com', 'b0bbcfb119e56170285fab36ad273911', 'ต้นเด้อ', 1, 1, 1, 1, 1, 1, 1, 'ต้น', 0, 'วรานนท์', 'ทองแกม', '0000-00-00', '0891130030', '', '501600a0056fepig-4.jpg', '', '', '2012-07-30 03:35:55', 'm', '', '2202T=photoshop|', 'งานอาสาทั่วไป, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ไอที และคอมพิวเตอร์กราฟฟิค, ', '', '0'),
(12, 'jitarsabank@gmail.com', '9530d321cf6607fafc56f7ef1e7aa7f4', '', 1, 1, 1, 1, 1, 1, 1, '', 1, '', '', '0000-00-00', '', '', '', '', '', '2012-07-31 02:22:06', '', '', '', '', '', ''),
(19, 'org2@jitarsa.org', '7039439900bbb4bd76f69985d3fd9210', 'asdfasdfasdfasdf', 1, 1, 1, 1, 1, 1, 1, '', 0, '', '', '0000-00-00', '', 'sdfgsgsdfg', '', '', '', '2012-09-12 17:13:29', '', '', '', '', '', ''),
(20, 'naioom.th@gmail.com', 'ba7af2383826d9ec48843a3d04cf7c94', '', 1, 1, 1, 1, 1, 1, 1, '', 1, '', '', '0000-00-00', '', '', '', '', '', '2012-09-20 14:33:06', '', '', '', '', '', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_timebanks`
--

INSERT INTO `user_timebanks` (`id`, `user_id`, `status`, `hour`, `timestamp`, `description`) VALUES
(1, 1, 1, 13, '2012-09-12 18:13:34', 'manalue add'),
(2, 1, 1, 31, '2012-09-12 18:12:28', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
