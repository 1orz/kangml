-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2017-07-24 22:56:08
-- 服务器版本： 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ov`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `alipay`
--

CREATE TABLE `alipay` (
  `id` int(11) NOT NULL,
  `partner` text NOT NULL,
  `alikey` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `alipay`
--

INSERT INTO `alipay` (`id`, `partner`, `alikey`, `url`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `app_feedback`
--

CREATE TABLE `app_feedback` (
  `id` int(11) NOT NULL,
  `line_id` int(11) NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `app_gg`
--

CREATE TABLE `app_gg` (
  `id` int(11) NOT NULL,
  `daili` int(11) DEFAULT '0',
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `time` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `app_gg`
--

INSERT INTO `app_gg` (`id`, `daili`, `name`, `content`, `time`) VALUES
(1, 0, '欢迎使用本产品', '此为演示公告，请管理员在后台【消息管理】处修改或者删除。', '');

-- --------------------------------------------------------

--
-- 表的结构 `app_read`
--

CREATE TABLE `app_read` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `readid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `time` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `auth_config`
--

CREATE TABLE `auth_config` (
  `id` varchar(80) NOT NULL DEFAULT '1',
  `gg` text,
  `ggs` text,
  `dl0` float DEFAULT NULL,
  `dl1` float DEFAULT NULL COMMENT 'vip1',
  `dl2` float DEFAULT NULL COMMENT 'vip2',
  `dl3` float DEFAULT NULL COMMENT 'vip3',
  `dl4` float DEFAULT NULL COMMENT 'vip4',
  `dl5` float DEFAULT NULL COMMENT 'vip5',
  `dls0` float NOT NULL,
  `dls1` float NOT NULL,
  `dls2` float NOT NULL,
  `dls3` float NOT NULL,
  `dls4` float NOT NULL,
  `dls5` float NOT NULL,
  `member_reg` int(2) NOT NULL DEFAULT '0',
  `regok` int(11) DEFAULT NULL,
  `activeok` int(11) DEFAULT NULL,
  `ok` int(11) DEFAULT NULL,
  `shopUrl` text NOT NULL,
  `shopCode` text NOT NULL,
  `daili_cash` float NOT NULL,
  `reg_cash` float NOT NULL,
  `user_cash` float NOT NULL,
  `qian` float NOT NULL,
  `user_endtime` int(11) NOT NULL,
  `wx0` float NOT NULL,
  `wx1` float NOT NULL,
  `wx2` float NOT NULL,
  `wx3` float NOT NULL,
  `wx4` float NOT NULL,
  `wx5` float NOT NULL,
  `kmtype` float NOT NULL DEFAULT '1',
  `down` float DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `auth_config`
--

INSERT INTO `auth_config` (`id`, `gg`, `ggs`, `dl0`, `dl1`, `dl2`, `dl3`, `dl4`, `dl5`, `dls0`, `dls1`, `dls2`, `dls3`, `dls4`, `dls5`, `member_reg`, `regok`, `activeok`, `ok`, `shopUrl`, `shopCode`, `daili_cash`, `reg_cash`, `user_cash`, `qian`, `user_endtime`, `wx0`, `wx1`, `wx2`, `wx3`, `wx4`, `wx5`, `kmtype`, `down`) VALUES
('1', '欢迎使用代理中心！', '欢迎使用会员中心！', 0, 0, 0, 0, 0, 0, 4, 3.5, 31, 2.5, 2, 1.5, 0, 0, 1, 2, 'http://www.917ka.com/Index.html', '建议从数据库插入此支付代码', 10, 20971500, 52428800, 10485800, 1, 16, 14, 12, 10, 8, 6, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `auth_daili`
--

CREATE TABLE `auth_daili` (
  `id` int(255) NOT NULL,
  `tj_rmb` decimal(11,2) NOT NULL,
  `tj_user` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `rmb` decimal(11,2) NOT NULL DEFAULT '0.00',
  `vip` int(11) DEFAULT NULL,
  `kmlist` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `regdate` datetime DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `qq` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `buy` text NOT NULL,
  `buy2` text NOT NULL,
  `income` decimal(11,2) NOT NULL DEFAULT '0.00',
  `adtext` text NOT NULL,
  `adimg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `auth_daili`
--

INSERT INTO `auth_daili` (`id`, `tj_rmb`, `tj_user`, `user`, `pass`, `rmb`, `vip`, `kmlist`, `active`, `regdate`, `name`, `qq`, `tel`, `buy`, `buy2`, `income`, `adtext`, `adimg`) VALUES
(0, '0.00', '', 'kangml', 'dailiness', '0.00', 5, NULL, 1, NULL, '管理员', 'k', 'k', 'http://www.917ka.com/', '', '0.00', '', '\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `auth_fwq`
--

CREATE TABLE `auth_fwq` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `ipport` varchar(64) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `auth_fwq`
--

INSERT INTO `auth_fwq` (`id`, `name`, `ipport`, `time`) VALUES
(1, '本机服务器', 'ip', '2017-07-24 14:26:43');

-- --------------------------------------------------------

--
-- 表的结构 `auth_kms`
--

CREATE TABLE `auth_kms` (
  `id` int(11) NOT NULL,
  `kind` tinyint(1) NOT NULL DEFAULT '1',
  `daili` int(11) NOT NULL DEFAULT '0',
  `km` varchar(64) DEFAULT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `values` decimal(11,2) DEFAULT NULL,
  `money` decimal(11,2) DEFAULT '0.00',
  `isuse` tinyint(1) DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `usetime` datetime DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `kmtype_id` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `auth_log`
--

CREATE TABLE `auth_log` (
  `id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img1` text CHARACTER SET utf8 NOT NULL,
  `tit1` text CHARACTER SET utf8 NOT NULL,
  `info1` text CHARACTER SET utf8 NOT NULL,
  `img2` text CHARACTER SET utf8 NOT NULL,
  `tit2` text CHARACTER SET utf8 NOT NULL,
  `info2` text CHARACTER SET utf8 NOT NULL,
  `img3` text CHARACTER SET utf8 NOT NULL,
  `tit3` text CHARACTER SET utf8 NOT NULL,
  `info3` text CHARACTER SET utf8 NOT NULL,
  `daili` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `banner`
--

INSERT INTO `banner` (`id`, `img1`, `tit1`, `info1`, `img2`, `tit2`, `info2`, `img3`, `tit3`, `info3`, `daili`) VALUES
(1, 'http://i.niupic.com/images/2016/08/05/hn0fQC.jpg', '超实惠流量冲浪新时代', '抵制高价流量，让你使用专用的流量服务，从而价格远远低于运营商，安全快捷！', 'http://i.niupic.com/images/2016/08/08/29uhkR.jpg', '支持IOS6-IOS10系统', '一次安装永久支持续费，VPN连接100M服务器转接', 'http://i.niupic.com/images/2016/10/29/GDIIE8.jpg', '安卓系统完美支持', '操作人性化，流量软件上手很简单，使用仅需简单操作几步', 0);

-- --------------------------------------------------------

--
-- 表的结构 `kmtype`
--

CREATE TABLE `kmtype` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `days` float NOT NULL,
  `maxll` float NOT NULL,
  `dlid` float NOT NULL,
  `km_rmb` decimal(11,2) NOT NULL DEFAULT '0.00',
  `i` float NOT NULL COMMENT '代理充值套餐'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `kmtype`
--

INSERT INTO `kmtype` (`id`, `name`, `days`, `maxll`, `dlid`, `km_rmb`, `i`) VALUES
(1, '超值5G流量特惠', 30, 5242880, 0, '18.80', 0),
(2, '100充值额度', 0, 0, 0, '100.00', 1);

-- --------------------------------------------------------

--
-- 表的结构 `line`
--

CREATE TABLE `line` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `type` text NOT NULL,
  `group` text NOT NULL,
  `show` int(11) NOT NULL,
  `label` text NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `line`
--

INSERT INTO `line` (`id`, `name`, `content`, `type`, `group`, `show`, `label`, `order`, `time`) VALUES
(2, 'UDP线路示例-已开启拦截(支持关闭某个线路拦截)', 'client\ndev tun\nproto udp\nremote  [domain] 53\nresolv-retry infinite\nnobind\npersist-key\npersist-tun\nsetenv IV_GUI_VER \"de.blinkt.openvpn 0.6.17\"\npush route 114.114.114.144 114.114.115.115\nmachine-readable-output\nconnect-retry-max 5\nconnect-retry 5\nresolv-retry 60\nauth-user-pass\nns-cert-type server\ncomp-lzo\nverb 3\n\n## 证书\n<ca>\n[证书]\n</ca>\nkey-direction 1\n<tls-auth>\n[证书]\n</tls-auth>', '转接', '1', 1, '河北省 ', 0, '1486721267'),
(3, 'TCP线路示例-已开启拦截(支持关闭某个线路拦截)', 'client\ndev tun\nproto tcp\nremote [domain] 443\nresolv-retry infinite\nnobind\npersist-key\npersist-tun\nsetenv IV_GUI_VER \"de.blinkt.openvpn 0.6.17\"\npush route 114.114.114.144 114.114.115.115\nmachine-readable-output\nconnect-retry-max 5\nconnect-retry 5\nresolv-retry 60\nauth-user-pass\nns-cert-type server\ncomp-lzo\nverb 3\n\n## 证书\n<ca>\n[证书]\n</ca>\nkey-direction 1\n<tls-auth>\n[证书]\n</tls-auth>', '转接', '1', 1, '河北省', 0, '1486721267');

-- --------------------------------------------------------

--
-- 表的结构 `line_grop`
--

CREATE TABLE `line_grop` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `show` int(11) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `line_grop`
--

INSERT INTO `line_grop` (`id`, `name`, `show`, `order`) VALUES
(1, '中国移动', 1, 3),
(2, '中国电信', 1, 1),
(3, '中国联通', 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `key` text NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `map`
--

INSERT INTO `map` (`id`, `key`, `value`, `type`) VALUES
(1, 'versionCode', '100', 'cfg_sj'),
(2, 'url', 'http://abc.com/a.apk', 'cfg_sj'),
(3, 'content', '测试', 'cfg_sj'),
(4, 'opens', 'success', 'cfg_sj'),
(5, 'spic', '', 'cfg_sj'),
(6, 'reg_type', 'default', 'cfg_app'),
(7, 'content', '测试', 'cfg_app'),
(8, 'max_limit', '100', 'cfg_app'),
(9, 'SMS_T', '3', 'cfg_app'),
(10, 'SMS_L', '100', 'cfg_app'),
(11, 'SMS_I', '0', 'cfg_app'),
(12, 'Auth_Token', 'cee182005162750e23855d63ed92188d', 'cfg_app'),
(13, 'Account_Sid', '3', 'cfg_app'),
(14, 'APP_ID', 'fff126cf55e545439dfd1c16aa63d95a', 'cfg_app'),
(15, 'Template_ID', '29317', 'cfg_app'),
(16, 'APP_NAME', '节流VPN', 'cfg_app'),
(17, 'ca', '<ca>\nneirong\n</ca>', 'cfg_zs'),
(18, 'tls', '<tls-auth>\nneirong\n</tls-auth>', 'cfg_zs'),
(19, 'onoff', '1', 'cfg_zs'),
(21, 'domain', 'ip', 'cfg_zs'),
(22, 'LINE', 'abs', 'cfg_app'),
(23, 'noteoff', '0', 'cfg_app');

-- --------------------------------------------------------

--
-- 表的结构 `openvpn`
--

CREATE TABLE `openvpn` (
  `id` int(11) NOT NULL,
  `iuser` varchar(16) NOT NULL,
  `isent` bigint(128) DEFAULT '0',
  `irecv` bigint(128) DEFAULT '0',
  `maxll` bigint(128) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `i` int(1) NOT NULL,
  `starttime` varchar(30) DEFAULT NULL,
  `endtime` int(11) DEFAULT '0',
  `dlid` int(11) DEFAULT NULL,
  `fwqid` int(11) DEFAULT '1',
  `notes` varchar(255) DEFAULT NULL,
  `tian` float NOT NULL,
  `qian_date` date NOT NULL,
  `qian_num` float NOT NULL,
  `tj_user` text CHARACTER SET utf8 NOT NULL,
  `tj_ok` float NOT NULL,
  `by` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `top`
--

CREATE TABLE `top` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `data` bigint(20) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `website`
--

CREATE TABLE `website` (
  `id` int(2) NOT NULL,
  `logo` text CHARACTER SET utf8 NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `app1` text CHARACTER SET utf8 NOT NULL,
  `app2` text CHARACTER SET utf8 NOT NULL,
  `qq` text CHARACTER SET utf8 NOT NULL,
  `tel` text CHARACTER SET utf8 NOT NULL,
  `ipinfo` text CHARACTER SET utf8 NOT NULL,
  `appleid1` text CHARACTER SET utf8 NOT NULL,
  `appleps1` text CHARACTER SET utf8 NOT NULL,
  `appleid2` text CHARACTER SET utf8 NOT NULL,
  `appleps2` text CHARACTER SET utf8 NOT NULL,
  `appleid3` text CHARACTER SET utf8 NOT NULL,
  `appleps3` text CHARACTER SET utf8 NOT NULL,
  `and_img1` text CHARACTER SET utf8 NOT NULL,
  `and_img2` text CHARACTER SET utf8 NOT NULL,
  `and_img3` text CHARACTER SET utf8 NOT NULL,
  `and_img4` text CHARACTER SET utf8 NOT NULL,
  `jia1` text CHARACTER SET utf8 NOT NULL,
  `jia2` text CHARACTER SET utf8 NOT NULL,
  `jia3` text CHARACTER SET utf8 NOT NULL,
  `jia4` text CHARACTER SET utf8 NOT NULL,
  `seo` text CHARACTER SET utf8 NOT NULL,
  `daili` float NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `website`
--

INSERT INTO `website` (`id`, `logo`, `title`, `app1`, `app2`, `qq`, `tel`, `ipinfo`, `appleid1`, `appleps1`, `appleid2`, `appleps2`, `appleid3`, `appleps3`, `and_img1`, `and_img2`, `and_img3`, `and_img4`, `jia1`, `jia2`, `jia3`, `jia4`, `seo`, `daili`, `name`) VALUES
(0, 'http://i.niupic.com/images/2017/07/12/hSv2IS.jpg', '康师傅VPN站', '/kangml.apk', '/xxx.apk', '123123', '13800138001', '121.41.*.* 浙江省杭州市 阿里巴巴', 'aqytwbee@icloud.com', 'Aa778899', 'zxxzwcwo@icloud.com', 'Aa778899', 'xhxfspgv@icloud.com', 'Aa778899', 'http://i.niupic.com/images/2016/10/29/KLDsKj.jpg', 'http://i.niupic.com/images/2016/10/29/uGGVxJ.jpg', 'http://i.niupic.com/images/2016/10/29/XalRYp.jpg', 'http://i.niupic.com/images/2016/10/29/NxtEVN.jpg', '0', '5', '50', '200', '', 0, 'kangml');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alipay`
--
ALTER TABLE `alipay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_feedback`
--
ALTER TABLE `app_feedback`
  ADD KEY `id` (`id`);

--
-- Indexes for table `app_gg`
--
ALTER TABLE `app_gg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `app_read`
--
ALTER TABLE `app_read`
  ADD KEY `id` (`id`);

--
-- Indexes for table `auth_config`
--
ALTER TABLE `auth_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_daili`
--
ALTER TABLE `auth_daili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_fwq`
--
ALTER TABLE `auth_fwq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_kms`
--
ALTER TABLE `auth_kms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `km` (`km`);

--
-- Indexes for table `auth_log`
--
ALTER TABLE `auth_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kmtype`
--
ALTER TABLE `kmtype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `line`
--
ALTER TABLE `line`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `line_grop`
--
ALTER TABLE `line_grop`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `openvpn`
--
ALTER TABLE `openvpn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iuser` (`iuser`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `alipay`
--
ALTER TABLE `alipay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `app_feedback`
--
ALTER TABLE `app_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `app_gg`
--
ALTER TABLE `app_gg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `app_read`
--
ALTER TABLE `app_read`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `auth_daili`
--
ALTER TABLE `auth_daili`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `auth_fwq`
--
ALTER TABLE `auth_fwq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `auth_kms`
--
ALTER TABLE `auth_kms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `auth_log`
--
ALTER TABLE `auth_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `kmtype`
--
ALTER TABLE `kmtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `line`
--
ALTER TABLE `line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `line_grop`
--
ALTER TABLE `line_grop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- 使用表AUTO_INCREMENT `openvpn`
--
ALTER TABLE `openvpn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `top`
--
ALTER TABLE `top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `website`
--
ALTER TABLE `website`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;