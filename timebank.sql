-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2012 at 01:45 PM
-- Server version: 5.0.51a-community-log
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jitarsaban_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL auto_increment,
  `type` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(100) collate utf8_unicode_ci NOT NULL,
  `comment` text collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contactusforms`
--

CREATE TABLE IF NOT EXISTS `contactusforms` (
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

INSERT INTO `contactusforms` (`id`, `name`, `surname`, `email`, `phoneno`, `topic`, `message`, `created`) VALUES
(1, 'aa', 'bb', 'xinexo@gmail.com', 'asdf', 'tp[occcccccccc', 'อยากได้ๆๆๆ', '2012-06-05 04:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `emailcomingsoons`
--

CREATE TABLE IF NOT EXISTS `emailcomingsoons` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(256) collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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

CREATE TABLE IF NOT EXISTS `events` (
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
  `message` text collate utf8_unicode_ci NOT NULL,
  `volunteer_joined` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `search_temp`, `signup_begin_date`, `signup_end_date`, `volunteer_begin_date`, `volunteer_end_date`, `signup_begin_time`, `signup_end_time`, `volunteer_begin_time`, `volunteer_end_time`, `organization_id`, `location_id`, `location_name`, `location_district`, `location_province`, `location_postcode`, `status`, `name`, `phone`, `contractor_name`, `project_name`, `volunteer_need_count`, `time_cost`, `detail`, `travel_detail`, `inquiry_detail`, `is_need_expense`, `expense_detail`, `image`, `skills`, `languates`, `technical`, `days`, `timestamp`, `tags`, `message`, `volunteer_joined`) VALUES
(1, ' ปลูกใจรักษ์โลก รุ่นที่2/“ปลูกใจ..รักษ์โลก”//<p><strong>ความเป็นมา</strong><br /> โครงการ &ldquo;ปลูกใจ..รักษ์โลก&rdquo; ดำเนินงานโดยมูลนิธิกองทุนไทย ร่วมกับภาคีองค์กรสิ่งแวดล้อม โดยการสนับสนุนของมูลนิธิสยามกัมมาจล เริ่มดำเนินงานเมื่อวันที่ 1 เมษายน 2555 ที่ผ่านมา&nbsp;&nbsp; มีเป้าหมายเพื่อพัฒนาเยาวชน ให้มีความเป็นผู้นำที่เข้มแข็ง เป็นคนรุ่นใหม่ที่มีสำนึกรักษ์สิ่งแวดล้อม และมีสำนึกสาธารณะ&nbsp; ให้เติบโตเป็นพลเมืองที่มีคุณภาพ (Active Citizen) มีบทบาทในการดูแลรักษาสิ่งแวดล้อม และเป็นกำลังสำคัญในการขับเคลื่อนสังคมในอนาคต โดยผ่านการสนับสนุนทุนในการทำกิจกรรมดูแลรักษาสิ่งแวดล้อมให้แก่เยาวชน ให้เยาวชนได้ฝึกฝนหล่อหลอมและเสริมสร้างศักยภาพ จากการลงมือทำกิจกรรมแก้ไขปัญหาสิ่งแวดล้อมอย่างต่อเนื่องการฝึกอบรม และการแลกเปลี่ยนเรียนรู้ระหว่างการดำเนินโครงการ</p>\n<p>&nbsp;</p>\n<p><strong>การสนับสนุนทุนทำกิจกรรมดูแลรักษาสิ่งแวดล้อม ปี 2555</strong><br /> - ปี 2555 โครงการฯ จะสนับสนุนเงินทุนแก่กลุ่มเยาวชนสำหรับทำกิจกรรมดูแลรักษาสิ่งแวดล้อม รุ่นที่ 2&nbsp; จำนวน 10 โครงการ<br /> - เปิดรับสมัครข้อเสนอโครงการจากกลุ่มเยาวชน&nbsp; ที่สนใจทำกิจกรรมดูแลรักษาสิ่งแวดล้อม&nbsp; <br /> - คณะกรรมการโครงการจะพิจารณาคัดเลือกโครงการที่มีความชัดเจน และตรงกับเงื่อนไขการสนับสนุนของโครงการฯมากที่สุด โดยคณะกรรมการพิจารณาโครงการ ประกอบด้วยผู้ทรงคุณวุฒิในงานด้านสิ่งแวดล้อมและด้านการพัฒนาเยาวชน<br /> - โครงการที่ผ่านการพิจารณาคัดเลือกจากคณะกรรมการ จะได้รับทุนสนับสนุนการดำเนินงานโครงการตามความเป็นจริง สูงสุดไม่เกินโครงการละ 30,000 บาท&nbsp;&nbsp; และกลุ่มเยาวชน จะได้รับการพัฒนาศักยภาพจากการเข้าร่วมกิจกรรมต่างๆ ที่ทางโครงการฯ จัดขึ้นตลอดระยะเวลาการดำเนินงานโครงการ</p>\n<p>&nbsp;</p>\n<p><strong>คุณสมบัติของผู้เสนอโครงการ</strong><br /> 1.&nbsp;&nbsp;&nbsp; เป็นกลุ่มเยาวชนในพื้นที่ที่มีปัญหาสิ่งแวดล้อม ที่แกนนำและสมาชิกของกลุ่มมีอายุระหว่าง 15 - 25 ปี&nbsp; และแกนนำของกลุ่มมีไม่น้อยกว่า 3 คน<br /> 2.&nbsp;&nbsp;&nbsp; เป็นกลุ่มเยาวชนที่มีการรวมกลุ่มทำกิจกรรมร่วมกันอย่างชัดเจน&nbsp; และมีแกนนำหรือสมาชิกในกลุ่มมีประสบการณ์ในการทำกิจกรรมด้านสิ่งแวดล้อม<br /> 3.&nbsp;&nbsp;&nbsp; มีที่ปรึกษาหรือพี่เลี้ยงที่พร้อมสนับสนุนการทำงานของกลุ่มเยาวชนอย่างน้อย 1 คน&nbsp; โดยเป็นผู้ใหญ่ในพื้นที่นั้นๆ (เช่น&nbsp; ครู, อาจารย์, พ่อ-แม่-ผู้ปกครอง, ผู้ใหญ่บ้าน, อบต. หรือผู้นำชุมชนอื่นๆ)</p>\n<p>&nbsp;</p>\n<p><strong>เงื่อนไขในการให้ทุนสนับสนุนโครงการ</strong><br /> 1.&nbsp;&nbsp;&nbsp; เป็นโครงการที่ดำเนินงานดูแลรักษาและฟื้นฟูสิ่งแวดล้อมใน 5 ประเด็นปัญหาสิ่งแวดล้อม ได้แก่<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1)&nbsp;&nbsp;&nbsp; ปัญหาการเปลี่ยนแปลงสภาวะภูมิอากาศ (สภาวะโลกร้อน) และมลภาวะทางอากาศ<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของทรัพยากรป่าไม้<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของทรัพยากรทางทะเลและชายฝั่ง<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของแหล่งน้ำ<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของดิน<br /> 2.&nbsp;&nbsp;&nbsp; เป็นโครงการที่มีโจทย์หรือประเด็นปัญหาสิ่งแวดล้อมในการทำโครงการที่ชัดเจน&nbsp; และเป็นโครงการที่มาจากความต้องการในการทำกิจกรรมของเยาวชนอย่างแท้จริง<br /> 3.&nbsp;&nbsp;&nbsp; เป็นโครงการที่มีระยะเวลาในการดำเนินงาน ไม่น้อยกว่า 6 เดือน และไม่เกิน 7 เดือน<br /> 4.&nbsp;&nbsp;&nbsp; เป็นโครงการที่มีการลงมือปฏิบัติการต่อสิ่งแวดล้อม&nbsp; และไม่เป็นโครงการวิจัย<br /> 5.&nbsp;&nbsp;&nbsp; โครงการที่ได้รับทุนสนับสนุน จะต้องส่งตัวแทนเข้าร่วมกิจกรรมฝึกอบรมของโครงการฯ จำนวน 4 คน ประกอบด้วย แกนนำเยาวชน 3 คน และที่ปรึกษา/พี่เลี้ยง 1 คน&nbsp;&nbsp; และตัวแทนทั้ง 4 คนจะต้องเข้าร่วมกิจกรรมต่างๆ เพื่อพัฒนาศักยภาพเยาวชนที่โครงการฯ จัดขึ้นอย่างต่อเนื่อง <br /> 6.&nbsp;&nbsp;&nbsp; กลุ่มเยาวชนจะต้องรายงานผลการดำเนินงานโครงการ ตามช่องทางและระยะเวลาที่ทางโครงการฯ กำหนดไว้&nbsp; ได้แก่ การรายงานทาง Website ของโครงการ&nbsp; และการรายงานเป็นเอกสาร</p>\n<p>&nbsp;</p>\n<p><strong>หลักเกณฑ์ในการพิจารณาคัดเลือกโครงการ</strong><br /> 1.&nbsp;&nbsp;&nbsp; ความมุ่งมั่นและความพร้อมในการทำโครงการของกลุ่มเยาวชน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.1&nbsp;&nbsp;&nbsp; มีการรวมกลุ่มเยาวชนเพื่อร่วมกันทำกิจกรรมที่สร้างสรรค์อย่างชัดเจน&nbsp; แกนนำและสมาชิกของกลุ่มมีความกระตือรือร้น และมีศักยภาพในการเรียนรู้<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.2&nbsp;&nbsp;&nbsp; กลุ่มมีความมุ่งมั่นในการดูแลรักษาสิ่งแวดล้อมให้สามารถใช้ประโยชน์ได้อย่างยั่งยืน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.3&nbsp;&nbsp;&nbsp; แกนนำกลุ่มมีความเป็นผู้นำ สามารถนำเยาวชนทำกิจกรรมโครงการให้บรรลุวัตถุประสงค์ได้<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.4&nbsp;&nbsp;&nbsp; มีแกนนำหรือสมาชิกในกลุ่มที่มีประสบการณ์ในการทำกิจกรรมด้านสิ่งแวดล้อม <br /> 2.&nbsp;&nbsp;&nbsp; ความชัดเจนปัญหาและกิจกรรมของโครงการ<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.1&nbsp;&nbsp;&nbsp; นำเสนอรูปธรรมของปัญหาสิ่งแวดล้อม ที่กลุ่มจะทำกิจกรรมดูแลรักษาหรือฟื้นฟูได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.2&nbsp;&nbsp;&nbsp; นำเสนอพื้นที่ ที่กลุ่มจะทำกิจกรรมดูแลรักษาหรือฟื้นฟูสิ่งแวดล้อมได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.3&nbsp;&nbsp;&nbsp; นำเสนอกิจกรรม ที่กลุ่มจะดำเนินการเพื่อดูแลรักษาหรือฟื้นฟูสิ่งแวดล้อมได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.4&nbsp;&nbsp;&nbsp; มีการมีส่วนร่วมจากชุมชน ในการเข้าร่วมทำกิจกรรมร่วมกับกลุ่มเยาวชน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.5&nbsp;&nbsp;&nbsp; มีความเป็นไปได้ที่จะดำเนินงานโครงการได้สำเร็จ และนำเสนอผลที่คาดว่าจะเกิดขึ้นได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.6&nbsp;&nbsp;&nbsp; มีศักยภาพในการขยายผลหรือต่อยอดการดำเนินงานของโครงการ ให้สามารถทำกิจกรรมดูแลรักษาสิ่งแวดล้อมได้กว้างขวางและต่อเนื่อง</p>\n<p>&nbsp;</p>\n<p><strong>ปฏิทินการดำเนินงาน รุ่นที่ 2</strong><br /> - เปิดรับข้อเสนอโครงการ &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันนี้ &ndash;&nbsp; 15 กันยายน 2555<br /> - วันสุดท้ายที่เปิดรับข้อเสนอโครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 15 กันยายน 2555<br /> - พิจารณากลั่นกรองโครงการที่ตรงตามหลักเกณฑ์&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 16-24 กันยายน&nbsp; 2555<br /> - ประกาศผล โครงการที่ผ่านการกลั่นกรองรอบแรก 15 โครงการ&nbsp;&nbsp;&nbsp; วันที่ 25 กันยายน 2555<br /> - Workshop 1 (พัฒนาโครงการ + เสริมความรู้เรื่องสิ่งแวดล้อม)&nbsp; <br /> &nbsp;จำนวน 15 โครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; วันที่ 5 - 7 ตุลาคม&nbsp; 2555***<br /> - กลุ่มเยาวชนพัฒนาและจัดทำข้อเสนอโครงการฉบับสมบูรณ์&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 8 -19 ตุลาคม&nbsp; 2555<br /> - วันสุดท้ายที่เปิดรับข้อเสนอโครงการฉบับสมบูรณ์&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 19 ตุลาคม 2555<br /> - พิจารณาคัดเลือกโครงการที่ได้รับการสนับสนุน&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 20 &ndash; 26 ตุลาคม 2555 <br /> - ประกาศผลโครงการที่ได้รับการสนับสนุน 10&nbsp; โครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 27 ตุลาคม&nbsp; 2555 <br /> - ทำสัญญารับทุน + เริ่มดำเนินงานโครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 29 ตุลาคม&nbsp; 2555<br /> - กลุ่มเยาวชนดำเนินงานโครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 1 พฤศจิกายน2555&ndash;พฤษภาคม 2556<br /> - สิ้นสุดการดำเนินกิจกรรมของโครงการเยาวชน&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 31 พฤษภาคม&nbsp; 2556</p>\n<p>&nbsp;</p>\n<p><strong>หมายเหตุ&nbsp; </strong>โครงการที่ผ่านการกลั่นกรองรอบแรก รุ่นที่ 2 จำนวน 15&nbsp; โครงการ ต้องส่งตัวแทนเข้าร่วมการ Workshop 1 (พัฒนาโครงการ และเสริมทักษะด้านสิ่งแวดล้อม) จำนวน 4 คน ประกอบด้วย แกนนำเยาวชน 3 คน + ที่ปรึกษา/พี่เลี้ยง 1 คน</p>\n<p>&nbsp;</p>\n<p><strong>การรับสมัครโครงการ</strong><br /> - กลุ่มเยาวชนสามารถส่งใบสมัครเพื่อขอรับทุนสนับสนุนการดำเนินงานโครงการ โดยการแนะนำโครงการ บอกเล่าแรงบันดาลใจในการทำโครงการ และนำเสนอแนวความคิดในการทำกิจกรรม ด้วยวิธีการที่ง่ายและชัดเจนได้หลายรูปแบบ&nbsp; ได้แก่&nbsp; <br /> - นำเสนอด้วยเอกสาร ตามแบบฟอร์มใบสมัครโครงการ พร้อมรูปถ่าย&nbsp; <br /> - นำเสนอด้วย คลิปวีดีโอ หรือสื่ออื่นๆ (ระยะเวลาไม่เกิน 10 นาที) ที่แสดงให้เห็นแกนนำและสมาชิกของกลุ่มเยาวชน, แรงบันดาลใจ, ชุมชน, ปัญหาสิ่งแวดล้อมและพื้นที่ในการทำโครงการ, แนวทางการดำเนินงานและกิจกรรมของโครงการ, ฯลฯ&nbsp; <br /> - นำเสนอด้วยรูปแบบและวิธีการอื่นๆ ที่สามารถสื่อสารข้อมูลของโครงการข้างต้นได้</p>\n<p>&nbsp;</p>\n<p><span style="color: #3366ff;"><span style="font-size: x-large;"><strong>ปิดรับสมัครโครงการ วันที่ 15 กันยายน 2555</strong></span></span></p>\n<p>&nbsp;</p>\n<p><strong>ส่งใบสมัครโครงการ ได้ทั้งทางไปรษณีย์ หรือทางอีเมล์ ได้ที่ </strong><br /> โครงการ &ldquo;ปลูกใจ รักษ์โลก&rdquo;&nbsp;&nbsp; มูลนิธิกองทุนไทย <br /> 2044/23&nbsp; ถนนเพชรบุรีตัดใหม่&nbsp; เขตห้วยขวาง&nbsp; กรุงเทพฯ&nbsp; 10310&nbsp;&nbsp; <br /> โทรสาร 02-718-1850&nbsp;&nbsp;&nbsp; E-mail:&nbsp;&nbsp; EFYD2555@gmail.com&nbsp;&nbsp;</p>\n<p><strong>สอบรายละเอียดเพิ่มเติม ได้ที่</strong><br /> ผู้ประสานงานการกระจายทุน:&nbsp;&nbsp; นางสาวสุภษา ถิ่นจะนะ (เกต)<br /> โทรศัพท์:&nbsp;&nbsp; 02-314-4112-3&nbsp;&nbsp; ต่อ 301, 302 <br /> มือถือ:&nbsp;&nbsp; 085-325-5323 <br /> Website:&nbsp;&nbsp; <a title="www.scbfoundation.com" href="http://www.scbfoundation.com">www.scbfoundation.com</a>, <a title="www.tff.or.th" href="http://www.tff.or.th">www.tff.or.th</a></p>/โครงการ “ปลูกใจ รักษ์โลก”   มูลนิธิกองทุนไทย ', '2012-07-01', '2012-07-30', '2012-07-30', '2012-08-31', '00:00:00', '18:00:00', '00:00:00', '23:59:59', 3, NULL, 'โครงการ “ปลูกใจ รักษ์โลก”   มูลนิธิกองทุนไทย ', 'เขตห้วยขวาง ', '1', '10310   ', 0, ' ปลูกใจรักษ์โลก รุ่นที่2', NULL, NULL, '“ปลูกใจ..รักษ์โลก”', 124, 312, '<p><strong>ความเป็นมา</strong><br /> โครงการ &ldquo;ปลูกใจ..รักษ์โลก&rdquo; ดำเนินงานโดยมูลนิธิกองทุนไทย ร่วมกับภาคีองค์กรสิ่งแวดล้อม โดยการสนับสนุนของมูลนิธิสยามกัมมาจล เริ่มดำเนินงานเมื่อวันที่ 1 เมษายน 2555 ที่ผ่านมา&nbsp;&nbsp; มีเป้าหมายเพื่อพัฒนาเยาวชน ให้มีความเป็นผู้นำที่เข้มแข็ง เป็นคนรุ่นใหม่ที่มีสำนึกรักษ์สิ่งแวดล้อม และมีสำนึกสาธารณะ&nbsp; ให้เติบโตเป็นพลเมืองที่มีคุณภาพ (Active Citizen) มีบทบาทในการดูแลรักษาสิ่งแวดล้อม และเป็นกำลังสำคัญในการขับเคลื่อนสังคมในอนาคต โดยผ่านการสนับสนุนทุนในการทำกิจกรรมดูแลรักษาสิ่งแวดล้อมให้แก่เยาวชน ให้เยาวชนได้ฝึกฝนหล่อหลอมและเสริมสร้างศักยภาพ จากการลงมือทำกิจกรรมแก้ไขปัญหาสิ่งแวดล้อมอย่างต่อเนื่องการฝึกอบรม และการแลกเปลี่ยนเรียนรู้ระหว่างการดำเนินโครงการ</p>\n<p>&nbsp;</p>\n<p><strong>การสนับสนุนทุนทำกิจกรรมดูแลรักษาสิ่งแวดล้อม ปี 2555</strong><br /> - ปี 2555 โครงการฯ จะสนับสนุนเงินทุนแก่กลุ่มเยาวชนสำหรับทำกิจกรรมดูแลรักษาสิ่งแวดล้อม รุ่นที่ 2&nbsp; จำนวน 10 โครงการ<br /> - เปิดรับสมัครข้อเสนอโครงการจากกลุ่มเยาวชน&nbsp; ที่สนใจทำกิจกรรมดูแลรักษาสิ่งแวดล้อม&nbsp; <br /> - คณะกรรมการโครงการจะพิจารณาคัดเลือกโครงการที่มีความชัดเจน และตรงกับเงื่อนไขการสนับสนุนของโครงการฯมากที่สุด โดยคณะกรรมการพิจารณาโครงการ ประกอบด้วยผู้ทรงคุณวุฒิในงานด้านสิ่งแวดล้อมและด้านการพัฒนาเยาวชน<br /> - โครงการที่ผ่านการพิจารณาคัดเลือกจากคณะกรรมการ จะได้รับทุนสนับสนุนการดำเนินงานโครงการตามความเป็นจริง สูงสุดไม่เกินโครงการละ 30,000 บาท&nbsp;&nbsp; และกลุ่มเยาวชน จะได้รับการพัฒนาศักยภาพจากการเข้าร่วมกิจกรรมต่างๆ ที่ทางโครงการฯ จัดขึ้นตลอดระยะเวลาการดำเนินงานโครงการ</p>\n<p>&nbsp;</p>\n<p><strong>คุณสมบัติของผู้เสนอโครงการ</strong><br /> 1.&nbsp;&nbsp;&nbsp; เป็นกลุ่มเยาวชนในพื้นที่ที่มีปัญหาสิ่งแวดล้อม ที่แกนนำและสมาชิกของกลุ่มมีอายุระหว่าง 15 - 25 ปี&nbsp; และแกนนำของกลุ่มมีไม่น้อยกว่า 3 คน<br /> 2.&nbsp;&nbsp;&nbsp; เป็นกลุ่มเยาวชนที่มีการรวมกลุ่มทำกิจกรรมร่วมกันอย่างชัดเจน&nbsp; และมีแกนนำหรือสมาชิกในกลุ่มมีประสบการณ์ในการทำกิจกรรมด้านสิ่งแวดล้อม<br /> 3.&nbsp;&nbsp;&nbsp; มีที่ปรึกษาหรือพี่เลี้ยงที่พร้อมสนับสนุนการทำงานของกลุ่มเยาวชนอย่างน้อย 1 คน&nbsp; โดยเป็นผู้ใหญ่ในพื้นที่นั้นๆ (เช่น&nbsp; ครู, อาจารย์, พ่อ-แม่-ผู้ปกครอง, ผู้ใหญ่บ้าน, อบต. หรือผู้นำชุมชนอื่นๆ)</p>\n<p>&nbsp;</p>\n<p><strong>เงื่อนไขในการให้ทุนสนับสนุนโครงการ</strong><br /> 1.&nbsp;&nbsp;&nbsp; เป็นโครงการที่ดำเนินงานดูแลรักษาและฟื้นฟูสิ่งแวดล้อมใน 5 ประเด็นปัญหาสิ่งแวดล้อม ได้แก่<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1)&nbsp;&nbsp;&nbsp; ปัญหาการเปลี่ยนแปลงสภาวะภูมิอากาศ (สภาวะโลกร้อน) และมลภาวะทางอากาศ<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของทรัพยากรป่าไม้<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของทรัพยากรทางทะเลและชายฝั่ง<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของแหล่งน้ำ<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5)&nbsp;&nbsp;&nbsp; ปัญหาการเสื่อมโทรมของดิน<br /> 2.&nbsp;&nbsp;&nbsp; เป็นโครงการที่มีโจทย์หรือประเด็นปัญหาสิ่งแวดล้อมในการทำโครงการที่ชัดเจน&nbsp; และเป็นโครงการที่มาจากความต้องการในการทำกิจกรรมของเยาวชนอย่างแท้จริง<br /> 3.&nbsp;&nbsp;&nbsp; เป็นโครงการที่มีระยะเวลาในการดำเนินงาน ไม่น้อยกว่า 6 เดือน และไม่เกิน 7 เดือน<br /> 4.&nbsp;&nbsp;&nbsp; เป็นโครงการที่มีการลงมือปฏิบัติการต่อสิ่งแวดล้อม&nbsp; และไม่เป็นโครงการวิจัย<br /> 5.&nbsp;&nbsp;&nbsp; โครงการที่ได้รับทุนสนับสนุน จะต้องส่งตัวแทนเข้าร่วมกิจกรรมฝึกอบรมของโครงการฯ จำนวน 4 คน ประกอบด้วย แกนนำเยาวชน 3 คน และที่ปรึกษา/พี่เลี้ยง 1 คน&nbsp;&nbsp; และตัวแทนทั้ง 4 คนจะต้องเข้าร่วมกิจกรรมต่างๆ เพื่อพัฒนาศักยภาพเยาวชนที่โครงการฯ จัดขึ้นอย่างต่อเนื่อง <br /> 6.&nbsp;&nbsp;&nbsp; กลุ่มเยาวชนจะต้องรายงานผลการดำเนินงานโครงการ ตามช่องทางและระยะเวลาที่ทางโครงการฯ กำหนดไว้&nbsp; ได้แก่ การรายงานทาง Website ของโครงการ&nbsp; และการรายงานเป็นเอกสาร</p>\n<p>&nbsp;</p>\n<p><strong>หลักเกณฑ์ในการพิจารณาคัดเลือกโครงการ</strong><br /> 1.&nbsp;&nbsp;&nbsp; ความมุ่งมั่นและความพร้อมในการทำโครงการของกลุ่มเยาวชน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.1&nbsp;&nbsp;&nbsp; มีการรวมกลุ่มเยาวชนเพื่อร่วมกันทำกิจกรรมที่สร้างสรรค์อย่างชัดเจน&nbsp; แกนนำและสมาชิกของกลุ่มมีความกระตือรือร้น และมีศักยภาพในการเรียนรู้<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.2&nbsp;&nbsp;&nbsp; กลุ่มมีความมุ่งมั่นในการดูแลรักษาสิ่งแวดล้อมให้สามารถใช้ประโยชน์ได้อย่างยั่งยืน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.3&nbsp;&nbsp;&nbsp; แกนนำกลุ่มมีความเป็นผู้นำ สามารถนำเยาวชนทำกิจกรรมโครงการให้บรรลุวัตถุประสงค์ได้<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.4&nbsp;&nbsp;&nbsp; มีแกนนำหรือสมาชิกในกลุ่มที่มีประสบการณ์ในการทำกิจกรรมด้านสิ่งแวดล้อม <br /> 2.&nbsp;&nbsp;&nbsp; ความชัดเจนปัญหาและกิจกรรมของโครงการ<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.1&nbsp;&nbsp;&nbsp; นำเสนอรูปธรรมของปัญหาสิ่งแวดล้อม ที่กลุ่มจะทำกิจกรรมดูแลรักษาหรือฟื้นฟูได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.2&nbsp;&nbsp;&nbsp; นำเสนอพื้นที่ ที่กลุ่มจะทำกิจกรรมดูแลรักษาหรือฟื้นฟูสิ่งแวดล้อมได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.3&nbsp;&nbsp;&nbsp; นำเสนอกิจกรรม ที่กลุ่มจะดำเนินการเพื่อดูแลรักษาหรือฟื้นฟูสิ่งแวดล้อมได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.4&nbsp;&nbsp;&nbsp; มีการมีส่วนร่วมจากชุมชน ในการเข้าร่วมทำกิจกรรมร่วมกับกลุ่มเยาวชน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.5&nbsp;&nbsp;&nbsp; มีความเป็นไปได้ที่จะดำเนินงานโครงการได้สำเร็จ และนำเสนอผลที่คาดว่าจะเกิดขึ้นได้ชัดเจน<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.6&nbsp;&nbsp;&nbsp; มีศักยภาพในการขยายผลหรือต่อยอดการดำเนินงานของโครงการ ให้สามารถทำกิจกรรมดูแลรักษาสิ่งแวดล้อมได้กว้างขวางและต่อเนื่อง</p>\n<p>&nbsp;</p>\n<p><strong>ปฏิทินการดำเนินงาน รุ่นที่ 2</strong><br /> - เปิดรับข้อเสนอโครงการ &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันนี้ &ndash;&nbsp; 15 กันยายน 2555<br /> - วันสุดท้ายที่เปิดรับข้อเสนอโครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 15 กันยายน 2555<br /> - พิจารณากลั่นกรองโครงการที่ตรงตามหลักเกณฑ์&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 16-24 กันยายน&nbsp; 2555<br /> - ประกาศผล โครงการที่ผ่านการกลั่นกรองรอบแรก 15 โครงการ&nbsp;&nbsp;&nbsp; วันที่ 25 กันยายน 2555<br /> - Workshop 1 (พัฒนาโครงการ + เสริมความรู้เรื่องสิ่งแวดล้อม)&nbsp; <br /> &nbsp;จำนวน 15 โครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; วันที่ 5 - 7 ตุลาคม&nbsp; 2555***<br /> - กลุ่มเยาวชนพัฒนาและจัดทำข้อเสนอโครงการฉบับสมบูรณ์&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 8 -19 ตุลาคม&nbsp; 2555<br /> - วันสุดท้ายที่เปิดรับข้อเสนอโครงการฉบับสมบูรณ์&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 19 ตุลาคม 2555<br /> - พิจารณาคัดเลือกโครงการที่ได้รับการสนับสนุน&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 20 &ndash; 26 ตุลาคม 2555 <br /> - ประกาศผลโครงการที่ได้รับการสนับสนุน 10&nbsp; โครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 27 ตุลาคม&nbsp; 2555 <br /> - ทำสัญญารับทุน + เริ่มดำเนินงานโครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 29 ตุลาคม&nbsp; 2555<br /> - กลุ่มเยาวชนดำเนินงานโครงการ&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 1 พฤศจิกายน2555&ndash;พฤษภาคม 2556<br /> - สิ้นสุดการดำเนินกิจกรรมของโครงการเยาวชน&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; วันที่ 31 พฤษภาคม&nbsp; 2556</p>\n<p>&nbsp;</p>\n<p><strong>หมายเหตุ&nbsp; </strong>โครงการที่ผ่านการกลั่นกรองรอบแรก รุ่นที่ 2 จำนวน 15&nbsp; โครงการ ต้องส่งตัวแทนเข้าร่วมการ Workshop 1 (พัฒนาโครงการ และเสริมทักษะด้านสิ่งแวดล้อม) จำนวน 4 คน ประกอบด้วย แกนนำเยาวชน 3 คน + ที่ปรึกษา/พี่เลี้ยง 1 คน</p>\n<p>&nbsp;</p>\n<p><strong>การรับสมัครโครงการ</strong><br /> - กลุ่มเยาวชนสามารถส่งใบสมัครเพื่อขอรับทุนสนับสนุนการดำเนินงานโครงการ โดยการแนะนำโครงการ บอกเล่าแรงบันดาลใจในการทำโครงการ และนำเสนอแนวความคิดในการทำกิจกรรม ด้วยวิธีการที่ง่ายและชัดเจนได้หลายรูปแบบ&nbsp; ได้แก่&nbsp; <br /> - นำเสนอด้วยเอกสาร ตามแบบฟอร์มใบสมัครโครงการ พร้อมรูปถ่าย&nbsp; <br /> - นำเสนอด้วย คลิปวีดีโอ หรือสื่ออื่นๆ (ระยะเวลาไม่เกิน 10 นาที) ที่แสดงให้เห็นแกนนำและสมาชิกของกลุ่มเยาวชน, แรงบันดาลใจ, ชุมชน, ปัญหาสิ่งแวดล้อมและพื้นที่ในการทำโครงการ, แนวทางการดำเนินงานและกิจกรรมของโครงการ, ฯลฯ&nbsp; <br /> - นำเสนอด้วยรูปแบบและวิธีการอื่นๆ ที่สามารถสื่อสารข้อมูลของโครงการข้างต้นได้</p>\n<p>&nbsp;</p>\n<p><span style="color: #3366ff;"><span style="font-size: x-large;"><strong>ปิดรับสมัครโครงการ วันที่ 15 กันยายน 2555</strong></span></span></p>\n<p>&nbsp;</p>\n<p><strong>ส่งใบสมัครโครงการ ได้ทั้งทางไปรษณีย์ หรือทางอีเมล์ ได้ที่ </strong><br /> โครงการ &ldquo;ปลูกใจ รักษ์โลก&rdquo;&nbsp;&nbsp; มูลนิธิกองทุนไทย <br /> 2044/23&nbsp; ถนนเพชรบุรีตัดใหม่&nbsp; เขตห้วยขวาง&nbsp; กรุงเทพฯ&nbsp; 10310&nbsp;&nbsp; <br /> โทรสาร 02-718-1850&nbsp;&nbsp;&nbsp; E-mail:&nbsp;&nbsp; EFYD2555@gmail.com&nbsp;&nbsp;</p>\n<p><strong>สอบรายละเอียดเพิ่มเติม ได้ที่</strong><br /> ผู้ประสานงานการกระจายทุน:&nbsp;&nbsp; นางสาวสุภษา ถิ่นจะนะ (เกต)<br /> โทรศัพท์:&nbsp;&nbsp; 02-314-4112-3&nbsp;&nbsp; ต่อ 301, 302 <br /> มือถือ:&nbsp;&nbsp; 085-325-5323 <br /> Website:&nbsp;&nbsp; <a title="www.scbfoundation.com" href="http://www.scbfoundation.com">www.scbfoundation.com</a>, <a title="www.tff.or.th" href="http://www.tff.or.th">www.tff.or.th</a></p>', '', '', 0, '', '501599a776dc320120725-3-1[1].jpg', ' ', '', '', 'อาทิตย์, พุธ, เสาร์, ', '2012-07-30 16:47:10', 'งานอาสาทั่วไป, ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE IF NOT EXISTS `helps` (
  `id` int(11) NOT NULL auto_increment,
  `topic` varchar(255) collate utf8_unicode_ci NOT NULL,
  `message` text collate utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL auto_increment,
  `event_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `event_id`, `description`, `image`, `timestamp`) VALUES
(1, 1, 'เขียนคำบรรยายที่นี่', '50159bd8a4f8d3s.jpg', '2012-07-29 20:23:52'),
(2, 1, '', '50159c48be71b123213.jpg', '2012-07-29 20:25:44'),
(3, 1, '', '50159c50baf2d124124124.jpg', '2012-07-29 20:25:52'),
(4, 1, '', '50159c5947bbbimage3s.jpg', '2012-07-29 20:26:01'),
(5, 1, '', '50159c617b10eimages.jpg', '2012-07-29 20:26:09'),
(6, 1, '', '50159c68c4ab1images2.jpg', '2012-07-29 20:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE IF NOT EXISTS `inboxes` (
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

INSERT INTO `inboxes` (`id`, `user_id`, `organization_id`, `is_removed`, `is_read`, `title`, `message`, `send_status`, `created`) VALUES
(1, 0, 3, 1, 0, 'ทดสอบ1', 'messageสำหรับทดสอบ1', 0, '2012-06-11 03:03:47'),
(2, 0, 3, 1, 0, 'ทดสอบ2', 'messageสำหรับทดสอบ2', 0, '2012-06-11 03:04:11'),
(3, 0, 3, 1, 0, 'ทดสอ3', 'messageสำหรับทดสอบ3', 0, '2012-06-11 03:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
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

INSERT INTO `locations` (`id`, `province`, `district`, `latitude`, `longitude`, `timestamp`) VALUES
(1, 'กรุงเทพ', NULL, NULL, NULL, '2011-11-17 13:42:34'),
(2, 'นครราชสีมา', NULL, NULL, NULL, '2011-11-17 13:42:34'),
(3, 'เชียงใหม่', NULL, NULL, NULL, '2011-11-17 13:42:44'),
(4, 'ภูเก็ต', NULL, NULL, NULL, '2011-11-17 13:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
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

INSERT INTO `news` (`id`, `topic`, `message`, `pic`, `video`, `created`) VALUES
(1, 'ข่าวล่ามาไว', 'เย้ๆๆๆๆๆๆๆๆๆๆๆ', '', '', '2012-06-17 12:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL auto_increment,
  `search_temp` varchar(255) collate utf8_unicode_ci NOT NULL,
  `user_id` int(11) default NULL,
  `verified` tinyint(1) NOT NULL default '0',
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `search_temp`, `user_id`, `verified`, `noti_volunteerregister`, `noti_eventalmostend`, `noti_eventend`, `name`, `objective`, `activity`, `address`, `district`, `province`, `postcode`, `homephone`, `fax`, `contactperson`, `facebook`, `twitter`, `website`, `logo`, `timestamp`) VALUES
(3, '', 2, 1, 0, 1, 0, 'ชื่ออออออออออออ', 'ดดดดดดดดดดดดดดดดวัตถุประสงค์dfasdf', 'qssd', 'zzzzzzz', 'เขต', 'zzzzzzz', 'ไปรษณีย์', '1231231231313', 'โทรสาร', 'บ้าน', 'facebook.com/jitarsa', 'twitter.com/jitarsa', 'http://www.jitarsa.orgg', '50159885b7219about_01.jpg', '2012-08-01 06:39:09'),
(4, '', 3, 0, 1, 1, 1, '123124124124', '1231412314124214', '1231412314124214123141231412421412314123141242141231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', NULL, '2012-07-21 19:14:25'),
(5, '', 12, 1, 1, 1, 1, 'ธนาคารจิตอาสา', 'เราเชื่อว่าสังคมไทยจะเป็นสังคมอุดมไปด้วยความรักความสุข มีความมั่นคง และพัฒนาก้าวหน้าต่อไปได้ เพราะทุกคนร่วมสร้างสังคมนี้ขึ้นมา ไม่จำกัดว่าเป็นวัยไหนหรืออยู่ในหน้าที่การงานใด เราต่างมีความมุ่งมั่นตั้งใจเพื่อสร้างประเทศไทย เราไม่นิ่งเฉยดูดาย แต่จะลุกขึ้นยื่นมือมาช่วยเหลือกัน ทุกๆ คนบนผืนแผ่นดินไทยสามารถเป็นอาสาสมัครผู้อุทิศกำลังความสามารถและเวลาอันมีค่าของตนให้แก่ประโยชน์ส่วนรวม', 'ธนาคารจิตอาสามีภากิจ 3 ส่วนหลัก ได้แก่1. ระบบธนาคารเวลา (Time Bank)Time Bank เป็นระบบสนับสนุนการทำงานอาสา ที่เข้าถึงได้ทาง Internet ให้อาสาสมัครได้แสดงความตั้งใจจะใช้เวลาเพื่อทำงานอาสา โดยรวบรวมสถิติการใช้เวลา ยังมีระบบคัดเลือกและแนะนำงาน (matching) ให้ค้นหางานอาสาที่เหมาะกับตนเอง ตรงกับความสนใจ ความถนัด ทักษะ ความสามารถ หรือความสะดวก ไม่เฉพาะแต่ในสถานการณ์ภัยพิบัติเท่านั้น แต่ยังรวมถึงงานอาสาสมัครเพื่อสังคมทุกประเภทที่มีอยู่แล้วในประเทศไทยด้วย2. การปฐมนิเทศและการอบรม (Orientation and Training)การปฐมนิเทศและการอบรมอาสาเป็นกระบวนการเตรียมพร้อมอาสาสมัครก่อนลงไปทำงานอาสา เพื่อให้อาสาได้เกิดประสบการณ์ที่ดี ได้เรียนรู้ และพัฒนาตนเองอย่างรอบด้านทั้งทางกาย ทางใจ และทางสังคม นอกจากนี้การจัดอบรมให้กับองค์กรที่รับอาสาเข้าไปทำงานก็เป็นสิ่งสำคัญเช่นกัน เพราะการจัดกิจกรรมเพื่อให้เกิดประโยชน์สูงสุดกับอาสานั้นจำเป็นต้องมีทั้งความเข้าใจและทักษะ รวมถึงมีการจัดทำคู่มือรวบรวมองค์ความรู้เรื่องการปฐมนิเทศและการอบรมด้วย3. อาสาสัมพันธ์ (Volunteer Relation Managaement: VRM)งานอาสาสัมพันธ์เป็นการสร้างความต่อเนื่องในการมีกิจกรรมความร่วมมือและสื่อสาระะหว่างอาสาสมัครและองค์กรที่จัดกิจกรรม นอกจากจะเป็นช่องทางในการสื่อสาร งานอาสาสัมพันธ์ยังช่วยให้กำลังใจ เปิดโอกาสการแลกเปลี่ยนประสบการณ์ และความประทับใจ จากการทำงาน ตลอดจนสามารถพัฒนาเป็นชุมชนเครือข่ายความร่วมมือตามประเด็นความสนใจ หรือตามพื้นที่ต่อไป', '10 ซ.3 ถ.พหลโยธิน สามเสนใน', 'พญาไท', 'กรุงเทพมหานคร', '10400', '02-617-1797', '02-617-1796', 'ธีรัช', 'www.facebook.com/JitArsaBank', '@JitArsaBank', 'www.JitArsaBank.com', '5017428dd707bAW-logoJitArsaThai_cropped.jpg', '2012-08-01 06:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
  `id` int(11) NOT NULL auto_increment,
  `topic` varchar(255) NOT NULL,
  `date_message` text NOT NULL,
  `message` text NOT NULL,
  `main_pic` tinytext NOT NULL,
  `pic` text NOT NULL,
  `video` text NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(127) NOT NULL,
  `password` varchar(64) NOT NULL,
  `displayname` text NOT NULL,
  `noti_eventrecommended` tinyint(1) NOT NULL default '1',
  `noti_eventapproved` tinyint(1) NOT NULL default '1',
  `noti_almosteventdate` tinyint(1) NOT NULL default '1',
  `noti_eventthank` tinyint(1) NOT NULL default '1',
  `noti_sms_eventapproved` tinyint(1) NOT NULL default '1',
  `noti_sms_almosteventdate` tinyint(1) NOT NULL default '1',
  `noti_sms_news` tinyint(1) NOT NULL default '1',
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
  `location` text NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `displayname`, `noti_eventrecommended`, `noti_eventapproved`, `noti_almosteventdate`, `noti_eventthank`, `noti_sms_eventapproved`, `noti_sms_almosteventdate`, `noti_sms_news`, `nickname`, `role`, `first_name`, `last_name`, `birthday`, `phone`, `address`, `profile_image`, `quote`, `description`, `created`, `sex`, `website`, `skills`, `interest_tags`, `location`, `province`) VALUES
(1, 'volunteer@jitarsa.org', '029e4aa7146dceb2b9adda3ce9d9bfaa', 'volunteer nakrub', 1, 1, 1, 1, 1, 1, 1, 'nickname', 0, 'first_name', 'last_name', '2012-06-06', '12356', 'adfa', '4feb58e974ea1volunteer-hands.jpg', '', '', '2012-07-22 09:06:17', '', '13123', '2303|2304|2305|2306|2307|', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ', '12312', '1'),
(2, 'org@jitarsa.org', '741a8f387c2c3f39ba241937a47c1e0d', 'org nakrub', 1, 1, 1, 1, 1, 1, 1, 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '2012-06-27 18:58:29', '', '', '', '', '', ''),
(10, 'nooock@gmail.com', '0f3ee822972d620fb337c02f6f3873ad', 'Noock', 1, 1, 1, 1, 1, 1, 1, 'Noock', 0, 'Teerut', 'Piriyapunyaporn', '0000-00-00', '0840034536', '', '50165a166d381Noock.jpg', '', '', '2012-07-31 04:33:40', '', '', '1101|1102|2101|2103|', 'หัตถกรรมและงานฝีมือ, ', '', '0'),
(9, 'xinexo@gmail.com', 'abd2fc0c38db5c80f81bb864929579e6', 'xinexo', 1, 1, 1, 1, 1, 1, 1, '', 0, '', '', '0000-00-00', '', '', '', '', '', '2012-07-29 07:56:45', '', '', '', '', '', ''),
(11, 'nonarav@gmail.com', 'b0bbcfb119e56170285fab36ad273911', 'ต้นเด้อ', 1, 1, 1, 1, 1, 1, 1, 'ต้น', 0, 'วรานนท์', 'ทองแกม', '0000-00-00', '0891130030', '', '501600a0056fepig-4.jpg', '', '', '2012-07-30 03:35:55', 'm', '', '2202T=photoshop|', 'งานอาสาทั่วไป, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ไอที และคอมพิวเตอร์กราฟฟิค, ', '', '0'),
(12, 'jitarsabank@gmail.com', '9530d321cf6607fafc56f7ef1e7aa7f4', '', 1, 1, 1, 1, 1, 1, 1, '', 1, '', '', '0000-00-00', '', '', '', '', '', '2012-07-31 02:22:06', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_events`
--

CREATE TABLE IF NOT EXISTS `users_events` (
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_events`
--

INSERT INTO `users_events` (`user_id`, `event_id`, `status`, `timestamp`) VALUES
(11, 1, 0, '2012-07-30 03:35:56'),
(10, 1, 0, '2012-07-30 09:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `users_locations`
--

CREATE TABLE IF NOT EXISTS `users_locations` (
  `user_id` int(11) NOT NULL default '0',
  `location_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_occupations`
--

CREATE TABLE IF NOT EXISTS `users_occupations` (
  `user_id` int(11) NOT NULL default '0',
  `occupation_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`occupation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_skills`
--

CREATE TABLE IF NOT EXISTS `users_skills` (
  `user_id` int(11) NOT NULL default '0',
  `skill_id` int(11) NOT NULL default '0',
  `info` text collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_timebanks`
--

CREATE TABLE IF NOT EXISTS `user_timebanks` (
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

INSERT INTO `user_timebanks` (`id`, `user_id`, `status`, `hour`, `timestamp`) VALUES
(1, 8, 1, 12, '2011-11-22 16:16:47'),
(2, 8, 1, 12, '2011-11-22 16:16:55'),
(3, 8, 1, 5, '2011-11-22 16:22:44'),
(4, 8, 1, 122, '2011-11-22 16:25:50'),
(1, 1, 1, 23, '2012-07-02 15:05:25'),
(2, 1, 1, 2, '2012-07-16 14:35:00'),
(3, 1, 1, 2222, '2012-07-16 14:35:05'),
(4, 1, 1, 123, '2012-07-21 19:02:38'),
(5, 1, 1, 1111111, '2012-07-21 19:02:45'),
(2, 11, 1, 5, '2012-07-30 03:35:12'),
(1, 11, 1, 12, '2012-07-30 03:32:47'),
(1, 10, 1, 2147483647, '2012-07-29 16:58:05'),
(1, 9, 1, 11, '2012-07-29 07:56:45'),
(2, 10, 1, -1000000, '2012-08-01 06:30:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
