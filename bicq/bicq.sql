-- phpMyAdmin SQL Dump
-- version 2.11.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2009 年 04 月 25 日 08:20
-- 服务器版本: 5.0.18
-- PHP 版本: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `bicq_fastreplay`
--

CREATE TABLE IF NOT EXISTS `bicq_fastreplay` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `owner` int(10) NOT NULL,
  `title` char(128) collate utf8_unicode_ci NOT NULL,
  `classid` int(8) NOT NULL,
  `priority` int(8) NOT NULL,
  `url` char(255) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `views` int(12) NOT NULL,
  `editline` int(10) NOT NULL default '0',
  `dateline` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_fastreplay`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_friends`
--

CREATE TABLE IF NOT EXISTS `bicq_friends` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `uid` int(10) NOT NULL,
  `fid` int(10) NOT NULL,
  `gid` int(3) NOT NULL default '0',
  `dtime` int(10) NOT NULL default '0',
  `bz_name` char(15) collate utf8_unicode_ci default '',
  `bz_tel` char(32) collate utf8_unicode_ci NOT NULL,
  `bz_email` char(128) collate utf8_unicode_ci NOT NULL,
  `bz_address` char(128) collate utf8_unicode_ci NOT NULL,
  `bz_zipcode` char(6) collate utf8_unicode_ci NOT NULL,
  `bz_mobile` char(32) collate utf8_unicode_ci NOT NULL,
  `bz_content` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `bicq_friends`
--

INSERT INTO `bicq_friends` (`id`, `uid`, `fid`, `gid`, `dtime`, `bz_name`, `bz_tel`, `bz_email`, `bz_address`, `bz_zipcode`, `bz_mobile`, `bz_content`) VALUES
(1, 10000, 10000, 0, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `bicq_groups`
--

CREATE TABLE IF NOT EXISTS `bicq_groups` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `gid` int(10) NOT NULL,
  `name` char(18) collate utf8_unicode_ci NOT NULL,
  `zadmin` int(10) NOT NULL,
  `identify` int(1) NOT NULL default '1',
  `public` text collate utf8_unicode_ci NOT NULL,
  `zexplain` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `gid` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `bicq_groups`
--

INSERT INTO `bicq_groups` (`id`, `gid`, `name`, `zadmin`, `identify`, `public`, `zexplain`) VALUES
(1, 10000, '讨论组一', 10000, 1, '', ''),
(2, 10001, '讨论组二', 10000, 1, '', ''),
(3, 10002, '测试讨论组', 10001, 1, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `bicq_group_list`
--

CREATE TABLE IF NOT EXISTS `bicq_group_list` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `g_id` int(10) NOT NULL default '0',
  `u_id` int(10) NOT NULL default '0',
  `admin` int(1) NOT NULL default '0',
  `tread` int(10) NOT NULL default '0',
  `msgidentify` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `g_id` (`g_id`),
  KEY `u_id` (`u_id`),
  KEY `tread` (`tread`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- 导出表中的数据 `bicq_group_list`
--

INSERT INTO `bicq_group_list` (`id`, `g_id`, `u_id`, `admin`, `tread`, `msgidentify`) VALUES
(1, 10000, 10000, 1, 0, 1),
(3, 10000, 10001, 0, 0, 1),
(4, 10000, 10002, 0, 0, 1),
(5, 10000, 10003, 0, 0, 1),
(10, 10000, 10004, 0, 0, 1),
(12, 10001, 10000, 0, 0, 1),
(14, 10002, 10001, 0, 0, 1),
(15, 10002, 10000, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bicq_group_messages`
--

CREATE TABLE IF NOT EXISTS `bicq_group_messages` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `mf` int(10) NOT NULL,
  `mt` int(10) NOT NULL,
  `messages` text collate utf8_unicode_ci NOT NULL,
  `mtime` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_group_messages`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_group_message_id`
--

CREATE TABLE IF NOT EXISTS `bicq_group_message_id` (
  `mf` int(10) NOT NULL,
  `mt` int(10) NOT NULL,
  `mid` int(12) NOT NULL,
  `mtime` int(10) NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `bicq_group_message_id`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_icons`
--

CREATE TABLE IF NOT EXISTS `bicq_icons` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `uid` int(10) NOT NULL default '0',
  `title` char(40) NOT NULL,
  `icon` int(10) NOT NULL,
  `link` char(255) NOT NULL,
  `flag` int(2) NOT NULL default '0',
  `width` int(4) NOT NULL default '0',
  `height` int(4) NOT NULL default '0',
  `modline` int(10) unsigned NOT NULL default '0',
  `dateline` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_icons`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_mailset`
--

CREATE TABLE IF NOT EXISTS `bicq_mailset` (
  `id` mediumint(12) NOT NULL auto_increment,
  `name` char(64) collate utf8_unicode_ci NOT NULL,
  `value` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `bicq_mailset`
--

INSERT INTO `bicq_mailset` (`id`, `name`, `value`) VALUES
(1, 'port', '25'),
(2, 'server', 'mail.boka.cn'),
(3, 'username', 'wangxb@boka.cn'),
(4, 'password', ''),
(5, 'charset', 'utf-8'),
(6, 'timelag', '8'),
(7, 'from', 'wangxb@boka.cn'),
(8, 'name', 'BICQ SYSTEM'),
(9, 'getpwd', '找回BICQ账号密码	<MAIL_USER> ，		    您好！		这封信是由 BICQ 发送的。		您收到这封邮件，是因为在我们的BICQ网站进行了“找回密码”操作。如果您并	没有访问过我们的网站，或没有进行上述操作，请忽略这封邮件。您不需要退订	或进行其他进一步的操作。		----------------------------------------------------------------------	找回密码说明	----------------------------------------------------------------------		您的BICQ号码：<BICQ_UID>	您的登陆名：<BICQ_USER>	您的新密码：<BICQ_NEW_PWD>		您只需点击下面的链接即可修改为新的密码：		<MAIL_URL>		(如果上面不是链接形式，请将地址手工粘贴到浏览器地址栏再访问)			此链接在您进行找回密码操作开始算起，3日之内有效。		感谢您的访问，祝您使用愉快！				此致		北京博卡先锋软件开发有限公司.	http://www.boka.cn/				本邮件为系统自动发出，请勿回复。		感谢您使用BICQ，有任何问题您都可以登录 http://www.bicq.org/ 与我们的客服中心联系！	'),
(10, 'leavemsg', '来自 BICQ游客<BICQ_USER> 的留言。			消息来源：<MAIL_FROM>	消息时间：<MAIL_TIME>	发送者：游客<BICQ_USER>	E-Mail：<MAIL_USER>	消息内容：	<MAIL_BODY>	');

-- --------------------------------------------------------

--
-- 表的结构 `bicq_members`
--

CREATE TABLE IF NOT EXISTS `bicq_members` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `uid` int(10) NOT NULL,
  `username` char(24) collate utf8_unicode_ci NOT NULL,
  `password` char(32) collate utf8_unicode_ci NOT NULL,
  `petname` char(18) collate utf8_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL default '1',
  `age` int(3) NOT NULL default '0',
  `face` int(3) NOT NULL default '1',
  `ip1` tinyint(3) unsigned default NULL,
  `ip2` tinyint(3) unsigned default NULL,
  `ip3` tinyint(3) unsigned default NULL,
  `ip4` tinyint(3) unsigned default NULL,
  `nation` char(30) collate utf8_unicode_ci default NULL,
  `province` char(30) collate utf8_unicode_ci default NULL,
  `city` char(30) collate utf8_unicode_ci default NULL,
  `zshow` char(40) collate utf8_unicode_ci default NULL,
  `zphoto` char(40) collate utf8_unicode_ci default NULL,
  `email` char(128) collate utf8_unicode_ci default NULL,
  `address` char(128) collate utf8_unicode_ci default NULL,
  `zipcode` char(6) collate utf8_unicode_ci default NULL,
  `tel` char(32) collate utf8_unicode_ci default NULL,
  `mobile` char(32) collate utf8_unicode_ci default NULL,
  `zallow` int(1) NOT NULL default '1',
  `uname` char(15) collate utf8_unicode_ci default NULL,
  `school` char(45) collate utf8_unicode_ci default NULL,
  `work` char(24) collate utf8_unicode_ci default NULL,
  `website` char(255) collate utf8_unicode_ci default NULL,
  `introduce` text collate utf8_unicode_ci,
  `czs` int(2) NOT NULL default '0',
  `blood` int(2) NOT NULL default '0',
  `horoscope` int(2) NOT NULL default '0',
  `sallow` int(1) NOT NULL default '1',
  `pwdrecover` char(32) collate utf8_unicode_ci default NULL,
  `pwdrcvtime` int(10) NOT NULL default '0',
  `pwdkey` char(32) collate utf8_unicode_ci default NULL,
  `rtime` int(10) NOT NULL default '0',
  `groupid` int(1) NOT NULL default '1',
  `totaltime` int(10) NOT NULL default '0',
  `lastactivity` int(10) NOT NULL default '0',
  `publictime` int(10) NOT NULL default '0',
  `temp` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- 导出表中的数据 `bicq_members`
--

INSERT INTO `bicq_members` (`id`, `uid`, `username`, `password`, `petname`, `sex`, `age`, `face`, `ip1`, `ip2`, `ip3`, `ip4`, `nation`, `province`, `city`, `zshow`, `zphoto`, `email`, `address`, `zipcode`, `tel`, `mobile`, `zallow`, `uname`, `school`, `work`, `website`, `introduce`, `czs`, `blood`, `horoscope`, `sallow`, `pwdrecover`, `pwdrcvtime`, `pwdkey`, `rtime`, `groupid`, `totaltime`, `lastactivity`, `publictime`, `temp`) VALUES
(1, 10000, '10000', 'c4ca4238a0b923820dcc509a6f75849b', '10000', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 5, 0, 0, 0, 0),
(2, 10001, '10001', 'c4ca4238a0b923820dcc509a6f75849b', '10001', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 2, '', 0, '', 0, 1, 0, 0, 0, 0),
(3, 10002, '10002', 'c4ca4238a0b923820dcc509a6f75849b', '10002', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(4, 10003, '10003', 'c4ca4238a0b923820dcc509a6f75849b', '10003', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(5, 10004, '10004', 'c4ca4238a0b923820dcc509a6f75849b', '10004', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(6, 10005, '10005', 'c4ca4238a0b923820dcc509a6f75849b', '10005', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(7, 10006, '10006', 'c4ca4238a0b923820dcc509a6f75849b', '10006', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(8, 10007, '10007', 'c4ca4238a0b923820dcc509a6f75849b', '10007', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(9, 10008, '10008', 'c4ca4238a0b923820dcc509a6f75849b', '10008', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(10, 10009, '10009', 'c4ca4238a0b923820dcc509a6f75849b', '10009', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0),
(11, 10010, '10010', 'c4ca4238a0b923820dcc509a6f75849b', '10010', 1, 0, 1, NULL, NULL, NULL, NULL, '中华人民共和国', '北京', '北京市', NULL, NULL, '', '', '', '', '', 1, '', '', '', '', '', 0, 0, 0, 1, '', 0, '', 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bicq_messages`
--

CREATE TABLE IF NOT EXISTS `bicq_messages` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `mf` int(10) NOT NULL,
  `mt` int(10) NOT NULL,
  `messages` text collate utf8_unicode_ci NOT NULL,
  `mtime` int(10) NOT NULL,
  `md5` char(32) collate utf8_unicode_ci NOT NULL,
  `user` text collate utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_messages`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_message_id`
--

CREATE TABLE IF NOT EXISTS `bicq_message_id` (
  `mf` int(10) NOT NULL,
  `mt` int(10) NOT NULL,
  `mid` int(12) NOT NULL,
  `type` int(1) NOT NULL default '0',
  `mtime` int(10) NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `bicq_message_id`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_register_ip`
--

CREATE TABLE IF NOT EXISTS `bicq_register_ip` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `ip1` int(3) NOT NULL,
  `ip2` int(3) NOT NULL,
  `ip3` int(3) NOT NULL,
  `ip4` int(3) NOT NULL,
  `dateline` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_register_ip`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_sessions`
--

CREATE TABLE IF NOT EXISTS `bicq_sessions` (
  `ip1` int(3) NOT NULL,
  `ip2` int(3) NOT NULL,
  `ip3` int(3) NOT NULL,
  `ip4` int(3) NOT NULL,
  `skey` char(8) collate utf8_unicode_ci NOT NULL,
  `uid` int(10) NOT NULL,
  `username` char(24) collate utf8_unicode_ci NOT NULL,
  `petname` char(18) collate utf8_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL default '1',
  `age` int(3) NOT NULL default '0',
  `face` int(3) NOT NULL default '1',
  `province` char(30) collate utf8_unicode_ci NOT NULL,
  `zshow` char(40) collate utf8_unicode_ci NOT NULL,
  `sallow` int(1) NOT NULL default '1',
  `status` int(1) NOT NULL default '1',
  `newmsg` int(5) NOT NULL default '0',
  `groupid` int(1) NOT NULL default '1',
  `lastactivity` int(10) NOT NULL default '0',
  `publictime` int(10) NOT NULL default '0',
  `temp` int(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`),
  KEY `status` (`status`),
  KEY `temp` (`temp`),
  KEY `lastactivity` (`lastactivity`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 导出表中的数据 `bicq_sessions`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_settings`
--

CREATE TABLE IF NOT EXISTS `bicq_settings` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `name` char(64) collate utf8_unicode_ci NOT NULL,
  `value` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `bicq_settings`
--

INSERT INTO `bicq_settings` (`id`, `name`, `value`) VALUES
(1, 'installdate', '0'),
(2, 'members', '6'),
(3, 'ifverify', '0'),
(4, 'ifregister', '0'),
(5, 'ifshowip', '1'),
(6, 'show_size', '150'),
(7, 'photo_size', '300'),
(8, 'file_size', '0'),
(9, 'registerdenied', '20000|20001|30000-40000|'),
(10, 'messagemaxlen', '8192'),
(11, 'iptimer', '0'),
(13, 'expiry', '60'),
(14, 'refresh', '5'),
(15, 'sn', 'BK05200F2F0D0896437BD371FD33DC33177A8A7F'),
(16, 'adurl', 'http://localhost/bicq/images/ad.gif'),
(17, 'website', 'http://www.bicq.org/'),
(18, 'lastin', '10021'),
(19, 'ifguests', '1'),
(20, 'ifajax', '0'),
(21, 'home_url', 'http://localhost/bicq/'),
(22, 'ajax_url', 'http://192.168.0.120/bicq_proxy.php'),
(24, 'ajax_key', 'i am the key'),
(25, 'ifgverify', '0'),
(26, 'title', 'BICQ V2.0.0');

-- --------------------------------------------------------

--
-- 表的结构 `bicq_sgroup`
--

CREATE TABLE IF NOT EXISTS `bicq_sgroup` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `gid` int(10) unsigned NOT NULL default '1',
  `uid` int(10) unsigned NOT NULL,
  `name` char(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_sgroup`
--


-- --------------------------------------------------------

--
-- 表的结构 `bicq_smsset`
--

CREATE TABLE IF NOT EXISTS `bicq_smsset` (
  `id` mediumint(12) unsigned NOT NULL auto_increment,
  `name` char(64) collate utf8_unicode_ci NOT NULL,
  `value` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `bicq_smsset`
--

