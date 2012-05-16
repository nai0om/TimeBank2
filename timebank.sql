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
-- โครงสร้างตาราง `activities`
-- 

CREATE TABLE `activities` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci NOT NULL,
  `description` mediumtext collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `activities`
-- 

INSERT INTO `activities` VALUES (1, 'pack sand', 'pack description', '2011-11-22 21:10:35');
INSERT INTO `activities` VALUES (2, 'pack sand', 'pack description', '2011-11-22 21:11:03');
INSERT INTO `activities` VALUES (3, 'pack sand', 'pack description', '2011-11-22 21:11:11');
INSERT INTO `activities` VALUES (4, 'pack sand', 'pack description', '2011-11-22 21:14:25');
INSERT INTO `activities` VALUES (5, 'pack sand', 'pack description', '2011-11-22 21:15:36');
INSERT INTO `activities` VALUES (6, 'pack sand', 'pack description', '2011-11-22 21:17:36');

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
-- โครงสร้างตาราง `companies`
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
-- dump ตาราง `companies`
-- 

INSERT INTO `companies` VALUES (1, 3, 1, 'new company', 'new company', 'new company', 'new company', 'http://zanroo.com', NULL, '2011-11-15 21:35:05');
INSERT INTO `companies` VALUES (2, 8, 1, 'com3com2', 'asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', '', NULL, '2011-11-18 14:40:55');
INSERT INTO `companies` VALUES (3, 8, 1, 'comname2', 'comobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหดcomobjดกดกฟหด', 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', 'ferewrew', 'http://www.zanroo.com', '4ec7092217c96thai.png', '2011-11-19 08:40:50');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `company_types`
-- 

CREATE TABLE `company_types` (
  `id` int(11) NOT NULL auto_increment,
  `name` mediumtext collate utf8_unicode_ci,
  `description` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `company_types`
-- 

INSERT INTO `company_types` VALUES (1, 'มะง่วง', 'มากกก', '2011-11-15 21:33:28');

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
  `temp` text collate utf8_unicode_ci NOT NULL,
  `signup_begin_date` date default NULL,
  `signup_end_date` date default NULL,
  `volunteer_begin_date` date NOT NULL,
  `volunteer_end_date` date NOT NULL,
  `company_id` int(11) default NULL,
  `location_id` int(11) default NULL,
  `location_name` text collate utf8_unicode_ci NOT NULL,
  `location_district` text collate utf8_unicode_ci NOT NULL,
  `location_province` text collate utf8_unicode_ci NOT NULL,
  `location_postcode` text collate utf8_unicode_ci NOT NULL,
  `status` int(11) default NULL,
  `name` text collate utf8_unicode_ci NOT NULL,
  `phone` mediumtext collate utf8_unicode_ci,
  `contractor_name` mediumtext collate utf8_unicode_ci,
  `project_name` mediumtext collate utf8_unicode_ci NOT NULL,
  `user_need_count` int(11) default NULL,
  `time_cost` int(11) default NULL,
  `detail` mediumtext collate utf8_unicode_ci,
  `travel_detail` text collate utf8_unicode_ci NOT NULL,
  `inquiry_detail` text collate utf8_unicode_ci NOT NULL,
  `pic_1` mediumtext collate utf8_unicode_ci,
  `pic_2` mediumtext collate utf8_unicode_ci,
  `pic_3` mediumtext collate utf8_unicode_ci,
  `pic_4` mediumtext collate utf8_unicode_ci,
  `pic_5` mediumtext collate utf8_unicode_ci,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- dump ตาราง `events`
-- 

INSERT INTO `events` VALUES (1, '', '2011-11-16', '0000-00-00', '0000-00-00', '0000-00-00', 2, 3, '', '', '', '', 1, 'fasdf', '434324', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:14:35');
INSERT INTO `events` VALUES (2, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:32:10');
INSERT INTO `events` VALUES (3, '', '2011-11-17', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '434324', 'adsf', '', 10, 20, 'asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:40:42');
INSERT INTO `events` VALUES (4, '', '2011-11-17', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '434324', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:41:23');
INSERT INTO `events` VALUES (5, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:42:02');
INSERT INTO `events` VALUES (6, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:42:46');
INSERT INTO `events` VALUES (7, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:45:26');
INSERT INTO `events` VALUES (8, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:46:33');
INSERT INTO `events` VALUES (9, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:47:52');
INSERT INTO `events` VALUES (10, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:48:09');
INSERT INTO `events` VALUES (11, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:48:37');
INSERT INTO `events` VALUES (12, '', '2011-11-17', '2011-11-17', '0000-00-00', '0000-00-00', NULL, NULL, '', '', '', '', NULL, '', NULL, NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:49:31');
INSERT INTO `events` VALUES (13, '', '2011-11-17', '0000-00-00', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:49:51');
INSERT INTO `events` VALUES (14, '', '2011-11-17', '2011-11-17', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:50:15');
INSERT INTO `events` VALUES (15, '', '2011-11-17', '2011-11-17', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:51:42');
INSERT INTO `events` VALUES (16, '', '2011-11-17', '2011-11-17', '0000-00-00', '0000-00-00', 2, 1, '', '', '', '', 1, 'comname', '323232', 'adsf', '', 10, 20, 'fdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfdsfds', '', '', NULL, NULL, NULL, NULL, NULL, '2011-11-17 22:51:58');
INSERT INTO `events` VALUES (17, '', '2011-11-16', '2011-11-19', '0000-00-00', '0000-00-00', 2, 2, '', '', '', '', 2, 'comname', '32323123', 'ดหกดหกดหก', '', 10, 40, 'ดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหกดหก', '', '', '4ec71cc8e2096IMG00665-20111009-1411.jpg', '4ec71db4e965athai.png', NULL, NULL, '4ec71dd364babIMG00666-20111009-1411.jpg', '2011-11-19 10:09:07');

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
-- โครงสร้างตาราง `roles`
-- 

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `roles`
-- 

INSERT INTO `roles` VALUES (1, 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `roles` VALUES (2, 'admin', 'Administrative user, has access to everything.');
INSERT INTO `roles` VALUES (3, 'company', 'Company account, has access to create event and edit company info');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `roles_users`
-- 

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `roles_users`
-- 

INSERT INTO `roles_users` VALUES (1, 1);
INSERT INTO `roles_users` VALUES (2, 1);
INSERT INTO `roles_users` VALUES (3, 1);
INSERT INTO `roles_users` VALUES (4, 1);
INSERT INTO `roles_users` VALUES (5, 1);
INSERT INTO `roles_users` VALUES (8, 1);
INSERT INTO `roles_users` VALUES (10, 1);
INSERT INTO `roles_users` VALUES (8, 2);
INSERT INTO `roles_users` VALUES (6, 3);
INSERT INTO `roles_users` VALUES (7, 3);
INSERT INTO `roles_users` VALUES (8, 3);
INSERT INTO `roles_users` VALUES (9, 3);
INSERT INTO `roles_users` VALUES (10, 3);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `skills`
-- 

CREATE TABLE `skills` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(100) collate utf8_unicode_ci NOT NULL,
  `description` mediumtext collate utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `skills`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users`
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
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- dump ตาราง `users`
-- 

INSERT INTO `users` VALUES (1, 'xinexo@gmail.com', 'nongtum', 'e5851f42ce72252a4128014028921086917349a4e39633f8a16eaa9f910cd2b2', 1, 1321097714, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (2, 'xinexo@gmails.com', 'autumn', '2b6d678710e375762de7e2c97c4263ef4409eea5d54631bf3f4ac72313a4562b', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (3, 'xinexo@yahoo.com', 'nongmay', '11e8ef6433a4bf1267257d9a944252e01541f27bf3ebdc0e08f9c2c08e63ee20', 9, 1321517706, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (4, 'a@b.com', 'asdf', 'b30c9474902607d01c76cc47aec9fbdbb5f5f7da70711ff902621df55d9a18d8', 1, 1321511993, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (5, 'x@x.com', 'dsfadsf', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (6, 'lnw@lnw.com', 'com', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (7, 'com@com2.com', 'company', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (8, 'com3@com.com', 'com3', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 10, 1322102789, 'lnw', 'first', 'last', '2011-11-17', '121212', 'address', '4eca8b076063a1app_page.png', 'quote', 'description', '2011-11-24 09:46:29');
INSERT INTO `users` VALUES (9, 'com4@com.com', 'com4', 'b71921bbd45546671b747d4135387efb7c99c55612774f7cb85ca6d134873516', 0, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (10, 'tum@tum.com', 'tum', 'aa13a3b87cb902baa173a33865b268c1a2943ce2f1481c548a50eaf903078aa0', 2, 1337182188, '', '', '', '0000-00-00', '', '', '', '', '', '2012-05-16 22:29:48');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users_activities`
-- 

CREATE TABLE `users_activities` (
  `user_id` int(11) NOT NULL default '0',
  `activity_id` int(11) NOT NULL default '0',
  `timestamp` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `test` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`user_id`,`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `users_activities`
-- 


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

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user_tokens`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `user_tokens`
-- 

INSERT INTO `user_tokens` VALUES (1, 8, 'e0ce124ea238c9131da145270845a7e59909abd1', '75b36edce2e988b45d5101ed6f375f4a5950f7fd', '', 0, 1322746156);
INSERT INTO `user_tokens` VALUES (2, 8, 'e0ce124ea238c9131da145270845a7e59909abd1', '021dc1307855bdfdd2600d286f5e51456758bc0a', '', 0, 1322746276);
INSERT INTO `user_tokens` VALUES (3, 10, '480450a02972ac1a7ac3ac0324afc9f6045bca51', '86019671fd0380be2958beab8017b099bb483b7e', '', 0, 1338285987);

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `roles_users`
-- 
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

-- 
-- Constraints for table `user_tokens`
-- 
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
