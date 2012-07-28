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
-- ฐานข้อมูล: `timebank_test`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `comments`
-- 


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
  `image` mediumtext collate utf8_unicode_ci,
  `skills` text collate utf8_unicode_ci NOT NULL,
  `languates` text collate utf8_unicode_ci NOT NULL,
  `technical` text collate utf8_unicode_ci NOT NULL,
  `days` text collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `tags` text collate utf8_unicode_ci NOT NULL,
  `message` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `events`
-- 


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
-- โครงสร้างตาราง `images`
-- 

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL auto_increment,
  `event_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `images`
-- 


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
-- โครงสร้างตาราง `news`
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
-- dump ตาราง `news`
-- 

INSERT INTO `news` VALUES (1, 'ข่าวล่ามาไว', 'เย้ๆๆๆๆๆๆๆๆๆๆๆ', '', '', '2012-06-17 19:24:41');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- dump ตาราง `organizations`
-- 

INSERT INTO `organizations` VALUES (3, '', 2, 0, 1, 0, 'ชื่ออออออออออออ', 'ดดดดดดดดดดดดดดดดวัตถุประสงค์dfasdf', 'qssd', 'zzzzzzz', 'เขต', 'zzzzzzz', 'ไปรษณีย์', '1231231231313', 'โทรสาร', 'บ้าน', 'facebook.com/jitarsa', 'twitter.com/jitarsa', 'http://www.jitarsa.orgg', '4ec7092217c96thai.png', '2012-07-21 16:26:49');
INSERT INTO `organizations` VALUES (4, '', 3, 1, 1, 1, '123124124124', '1231412314124214', '1231412314124214123141231412421412314123141242141231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', '1231412314124214', NULL, '2012-07-22 02:14:25');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `trainings`
-- 

CREATE TABLE `trainings` (
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
-- dump ตาราง `trainings`
-- 

INSERT INTO `trainings` VALUES (1, 'การออกแบบกระบวนการและจัดกิจกรรมอาสาสมัครเพื่อส่งเสริมสุขภาวะทางปัญญาสำหรับพี่เลี้ยงอาสาสมัคร', '<p><b>รุ่นที่ 1</b></p>\r\n<p>แรกพบ 28 พฤษภาคม 2555</p>\r\n<p> ครั้งที่ 1 วันที่ 13-15 มิถุนายน 2555</p>\r\n<p>	ครั้งที่ 2 วันที่ 10-13 กรกฏาคม 2555</p>\r\n<p>	ครั้งที่ 3 วันที่ 15-17 สิงหาคม 2555</p>\r\n	\r\n<p><b>รุ่นที่ 2</b></p>\r\n<p>	แรกพบ 24 กรกฏาคม 2555</p>\r\n<p> ครั้งที่ 1 วันที่ 29-31 สิงหาคม 2555</p>\r\n<p>	ครั้งที่ 2 วันที่ 18-21 กันยายน 2555</p>\r\n<p>	ครั้งที่ 3 วันที่ 17-19 ตุลาคม 2555</p>', '<p>หลักสูตรฝึกอบรมต่อเนื่องสำหรับพี่เลี้ยงและผู้ดูแลกิจกรรมขององค์กรอาสาสมัคร เพื่อส่งเสริมศักยภาพการออกแบบกระบวนการและจัดกิจกรรม ให้เกิดการเรียนรู้ เข้าใจ และพัฒนาจิตใจ ทั้งในอาสาสมัครและผู้ดูแล เนื้อหาหลักสูตรแบ่งออกเป็น 3 ส่วนหลักตามการอบรม 3 ครั้ง ได้แก่ ความเข้าใจในตนเองและการสะท้อนตนเอง (Self Reflection) การสื่อสารเพื่องานอาสา (Dialogue & Non-Violent Communication) และการเห็นความเชื่อมโยงของปัญหา (Systems Thinking)</p>\r\n<p>รูปแบบการอบรมเป็นการแลกเปลี่ยนเรียนรู้อย่างมีส่วนร่วมและการทดลองมีประสบการณ์ด้วยตนเอง เพื่อให้เกิดความเข้าใจอย่างลึกซึ้ง และผสมผสานกับบทเรียนจากการทำงานที่มีลักษณะเฉพาะของแต่ละองค์กร ธนาคารจิตอาสาจัดการอบรม 2 รุ่น รุ่นละประมาณ 20 คน</p>', 'main_1.jpg', '1_1.jpg,1_2.jpg,1_3.jpg,1_4.jpg,1_5.jpg,1_6.jpg,1_7.jpg,1_8.jpg,1_9.jpg,1_10.jpg,1_11.jpg,1_12.jpg,1_13.jpg,1_14.jpg,1_15.jpg,1_16.jpg,1_17.jpg,1_18.jpg,1_19.jpg,1_20.jpg,1_21.jpg,1_22.jpg,1_23.jpg,1_24.jpg,1_25.jpg,1_26.jpg', '', '2012-07-28 10:46:00');
INSERT INTO `trainings` VALUES (2, 'Volunteer+ ครั้งที่ 1 : การถอดบทเรียนด้วย KM เพื่องานอาสา', '30 เมษายน 2555', 'การอบรมว่าด้วยแนวคิดวิธีการถอดบทเรียน เพื่อต่อยอดความรู้และประสบการณ์ พัฒนางาน และองค์กรด้วยการจัดการความรู้ (KM -- Knowledge Management) ดร.ประพนธ์ ผาสุขยืด ผู้อำนวยการสถาบันส่งเสริมการจัดการความรู้เพื่อสังคม (สคส.) เป็นผู้มาให้คำแนะนำ ถ่ายทอดความรู้ และชี้ให้เห็นถึงความสำคัญของการถอดบทเรียน เทคนิควิธีการจัดกระบวนการ และการจัดการความรู้ เพื่อประยุกต์ใช้เพื่อให้เกิดประโยชน์ต่องานอาสาอย่างแท้จริง', 'main_2.jpg', '2_1.jpg,2_2.jpg,2_3.jpg,2_4.jpg,2_5.jpg,2_6.jpg,2_7.jpg,2_8.jpg,2_9.jpg,2_10.jpg,2_11.jpg,2_12.jpg,2_13.jpg', '', '2012-07-28 11:22:39');
INSERT INTO `trainings` VALUES (3, 'Volunteer+ ครั้งที่ 2 : Basic Facebook เพื่องานอาสา', '10 พฤษภาคม 2555', 'ปัจจุบัน Facebook ได้กลายเป็นช่องทางการสื่อสารส่งข่าวที่รวดเร็ว โดยเฉพาะงานอาสาในช่วงภัยพิบัติ และการประชาสัมพันธ์กิจกรรมดีๆ ให้เข้าถึงคนหมู่มาก ธนาคารจิตอาสาจึงจัดอบรมให้ความรู้พื้นฐานการใช้งาน Facebook แก่บุคลากรองค์กรอาสา เพื่อเพิ่มพูนทักษะและความถนัดในการใช้สื่อ online ให้มากยิ่งขึ้น', 'main_3.jpg', '3_1.jpg,3_2.jpg,3_4.jpg,3_5.jpg,3_6.jpg,3_7.jpg,3_8.jpg,3_9.jpg,3_10.jpg,3_11.jpg,3_12.jpg,3_13.jpg,3_14.jpg,3_15.jpg', '', '2012-07-28 11:27:48');
INSERT INTO `trainings` VALUES (4, 'Volunteer+ ครั้งที่ 3 : Social Media เพื่องานอาสา', '11 พฤษภาคม 2555', '<p>สงสัยไหม Facebook แบบไหนใครๆ ถึงอยากติดตาม?</p>\r\n<p>ในการอบรมครั้งนี้คุณธนบูรณ์ สมบูรณ์ ผู้ร่วมก่อตั้ง "อาสาสมัครฟื้นฟูประเทศไทย (สยามอาสา)" ซึ่งมีบทบาทอย่างมากในการกระจายข่าวอาสาสมัครบน โลกออนไลน์ในช่วงมหาอุทกภัยของประเทศไทยในปี 2554  ได้มาแบ่งปันประสบการณ์การใช้ Facebook และ Twitter ซึ่งเป็น Social Media ที่ทรงพลังในการสื่อสารทุกวันนี้ เพื่อติดต่อสื่อสาร และรักษาความสัมพันธ์กับอาสาสมัครบนโลกออนไลน์ ว่าทำอย่างไรที่จะทำให้ผู้คนอยากติดตามข่าวสารขององค์กร ทำอย่างไรให้ประชาสัมพันธ์ตรงกลุ่มเป้าหมาย รูปภาพที่นำเสนอควรเป็นแบบไหน จะดูแลกลุ่มเป้าหมายที่ติดตามองค์กรของเราอย่างไร</p>\r\n<p>ผลจากการอบรมครั้งนี้พบว่า หลายองค์กรได้ปรับใช้กับ Page ที่มีอยู่ ทำให้มีจำนวนผู้ติดตามเพิ่มขึ้นอีกมาก รวมทั้งการเข้ามา comment และ share เนื้อหาก็เพิ่มขึ้นด้วย</p>', 'main_4.jpg', '4_1.jpg,4_2.jpg,4_3.jpg,4_4.jpg,4_5.jpg,4_6.jpg,4_7.jpg,4_8.jpg', '', '2012-07-28 11:38:56');
INSERT INTO `trainings` VALUES (5, 'Volunteer+ ครั้งที่ 4 : สุนทรียสนทนาในงานอาสา', '1 มิถุนายน 2555', '<p>ทำไมงานที่ทำแต่สิ่งดีๆ เพื่อสร้างสรรค์สังคม จึงต้องมีการทะเลาะกัน 	พูดคุยกันไม่รู้เรื่องในองค์กร ด้วยทั้งๆ ที่ทุกคนก็คิดดี ทำดีกันทั้งนั้น</p>\r\n<p>การอบรมครั้งนี้ อ.ณัฐฬส วังวิญญู ผู้อำนวยการสถาบันขวัญแผ่นดิน เป็นผู้มาจัดกระบวนการเรียนรู้และฝึกปฏิบัติการสื่อสารกับคนในองค์กร อย่างเข้าอกเข้าใจ ราวกับเราต่างได้เข้าไปนั่งในใจของกัน และสามารถนำความรู้นี้ไปใช้ดูแลอาสาสมัครที่มาร่วมงานกับองค์กร</p>', 'main_5.jpg', '5_1.jpg,5_2.jpg,5_3.jpg,5_4.jpg,5_5.jpg,5_6.jpg,5_7.jpg,5_8.jpg,5_9.jpg,5_10.jpg,5_11.jpg,5_12.jpg,5_13.jpg,5_14.jpg,5_15.jpg,5_16.jpg,5_17.jpg,5_18.jpg,5_19.jpg,5_20.jpg', '', '2012-07-28 11:43:46');
INSERT INTO `trainings` VALUES (6, 'Volunteer+ ครั้งที่ 5 : โยคะภาวนากับงานจิตอาสา', '29 มิถุนายน 2555', '<p>งานอาสาที่เป็นการช่วยเหลือผู้อื่นนั้นเป็นงานที่ท้าทาย และใช้พลังทั้งทางกายและใจมาก ผู้ดูแลกิจกรรมอาสาควรได้มีแนวทางสำหรับการสร้างสมดุลการเรียนรู้ให้แก่อาสาสมัคร โดยผสมผสานภารกิจทางสังคมเข้ากับการเรียนรู้กายเรียนรู้ใจตนเอง เพื่อให้เกิดการพัฒนาและเรียนรู้ชีวิตอย่างเป็นองค์รวม </p>\r\n<p>อ.ธนวัชร์ เกตน์วิมุต หรือ ครูดล จากเครือข่ายชีวิตสิกขา เป็นผู้มาแบ่งปัน และถ่ายทอดถึงการเรียนรู้ที่เป็นหัวใจของการฝึกโยคะ โดยผสมผสานการภาวนาและการเจริญสติในกระบวนการกิจกรรมอาสาสมัครที่หลากหลาย  </p>', 'main_6.jpg', '6_1.jpg,6_2.jpg,6_3.jpg,6_4.jpg,6_5.jpg,6_6.jpg,6_7.jpg,6_8.jpg,6_9.jpg', '', '2012-07-28 11:49:41');

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
  `skills` text NOT NULL,
  `interest_tags` text NOT NULL,
  `location` text NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `users`
-- 

INSERT INTO `users` VALUES (1, 'volunteer@jitarsa.org', '029e4aa7146dceb2b9adda3ce9d9bfaa', 'volunteer nakrub', 'nickname', 0, 'first_name', 'last_name', '2012-06-06', '12356', 'adfa', '4feb58e974ea1volunteer-hands.jpg', '', '', '2012-07-22 16:06:17', '', '13123', '2303|2304|2305|2306|2307|', 'งานอาสาทั่วไป, กู้ภัยและฟื้นฟูจากภัยพิบัติ, หัตถกรรมและงานฝีมือ, ศาสนาและปฏิบัติธรรม, ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ, ', '12312', '1');
INSERT INTO `users` VALUES (2, 'org@jitarsa.org', '741a8f387c2c3f39ba241937a47c1e0d', 'org nakrub', 'org ่ฟ', 1, 'organization', 'lnwlnw', '2012-06-28', '', '', '', '', '', '2012-06-28 01:58:29', '', '', '', '', '', '');

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
INSERT INTO `user_timebanks` VALUES (1, 1, 1, 23, '2012-07-02 22:05:25');
INSERT INTO `user_timebanks` VALUES (2, 1, 1, 2, '2012-07-16 21:35:00');
INSERT INTO `user_timebanks` VALUES (3, 1, 1, 2222, '2012-07-16 21:35:05');
INSERT INTO `user_timebanks` VALUES (4, 1, 1, 123, '2012-07-22 02:02:38');
INSERT INTO `user_timebanks` VALUES (5, 1, 1, 1111111, '2012-07-22 02:02:45');
