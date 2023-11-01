-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-07 09:41:49
-- 服务器版本： 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_address`
--

CREATE TABLE `tb_address` (
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `def` enum('0','1') NOT NULL DEFAULT '0',
  `area` varchar(120) NOT NULL,
  `faddress` varchar(120) NOT NULL,
  `zcode` int(11) DEFAULT NULL,
  `gname` varchar(60) NOT NULL,
  `gphone` bigint(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_address`
--

INSERT INTO `tb_address` (`aid`, `uid`, `def`, `area`, `faddress`, `zcode`, `gname`, `gphone`) VALUES
(22, 11, '0', '内蒙古 乌海市 海南区', 'dfas dfsaf', 0, 'aa', 1231545646),
(9, 2, '0', '重庆市 南岸区', '重庆市南岸区海棠溪街道', 400074, '王五', 15213025555),
(8, 2, '1', '广东省 深圳市 南山区', '广东省深圳市南山区XX路XX小区XXXX号', 400074, '张三', 15213023333),
(23, 11, '0', '广东省', ' dfasff', 0, 'dfasfd', 12345678974),
(24, 4, '1', '广东省', 'fdsafdfds', 0, '1111aa', 12345678911),
(25, 13, '0', '广东省 韶关市 浈江区', 'fff', 0, 'sadas', 12345678911),
(20, 2, '0', '河北省 秦皇岛市 青龙县', '河北省秦皇岛市青龙县XX村', 0, '王十一', 13252111158);

-- --------------------------------------------------------

--
-- 表的结构 `tb_assess`
--

CREATE TABLE `tb_assess` (
  `asid` int(30) NOT NULL,
  `uid` int(30) NOT NULL DEFAULT '1',
  `gid` int(30) NOT NULL DEFAULT '1',
  `ascontent` text NOT NULL,
  `astime` int(30) NOT NULL DEFAULT '1480348800',
  `asimg` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_assess`
--

INSERT INTO `tb_assess` (`asid`, `uid`, `gid`, `ascontent`, `astime`, `asimg`) VALUES
(1, 1, 2, 'tertreterwert', 1480348800, ''),
(2, 2, 1, 'tertwertertretrwt', 1480348800, ''),
(3, 4, 3, 'dfgshghgfdsgsdfsd', 1480348800, ''),
(4, 1, 1, 'fsdfdsfsd', 1480348800, ''),
(5, 1, 1, '4546465', 1480348800, ''),
(6, 1, 1, '465465464654456', 0, ''),
(7, 1, 1, 'sasdsdsad', 1480694400, ''),
(8, 1, 1, '45464884651313', 1480694400, ''),
(9, 0, 0, '45646466546132131ddgdsfgfd', 1480694400, '');

-- --------------------------------------------------------

--
-- 表的结构 `tb_attname`
--

CREATE TABLE `tb_attname` (
  `atnid` int(11) NOT NULL,
  `atnname` varchar(30) NOT NULL,
  `gcid` int(11) NOT NULL,
  `gcnamefix` varchar(60) NOT NULL,
  `iscolor` enum('true','false') NOT NULL,
  `iscrux` enum('true','false') NOT NULL,
  `issale` enum('true','false') NOT NULL,
  `ismust` enum('true','false') NOT NULL,
  `issearch` enum('true','false') NOT NULL,
  `isenum` enum('true','false') NOT NULL,
  `isinto` enum('true','false') NOT NULL,
  `atntime` int(11) NOT NULL,
  `atnsortid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_attname`
--

INSERT INTO `tb_attname` (`atnid`, `atnname`, `gcid`, `gcnamefix`, `iscolor`, `iscrux`, `issale`, `ismust`, `issearch`, `isenum`, `isinto`, `atntime`, `atnsortid`) VALUES
(4, '尺码', 7, '羽绒服/女装', 'false', 'false', 'true', 'true', 'true', 'true', 'false', 0, 0),
(3, '颜色', 7, '羽绒服/女装', 'true', 'false', 'true', 'true', 'true', 'true', 'false', 0, 0),
(5, '口味', 14, '零食/食品', 'false', 'false', 'true', 'true', 'true', 'true', 'false', 0, 0),
(6, '薄厚', 7, '羽绒服/女装', 'false', 'false', 'false', 'false', 'true', 'true', 'false', 0, 0),
(7, '适用对象', 7, '羽绒服/女装', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 0, 0),
(9, '容量', 14, '零食/食品', 'false', 'false', 'true', 'false', 'true', 'false', 'false', 0, 0),
(10, '包装', 14, '零食/食品', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_attvalue`
--

CREATE TABLE `tb_attvalue` (
  `atvid` int(11) NOT NULL,
  `atvname` varchar(60) NOT NULL,
  `gcid` int(11) NOT NULL,
  `atvsortid` int(11) DEFAULT NULL,
  `atnid` int(11) NOT NULL,
  `atvtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_attvalue`
--

INSERT INTO `tb_attvalue` (`atvid`, `atvname`, `gcid`, `atvsortid`, `atnid`, `atvtime`) VALUES
(1, 'M', 7, 1, 4, 0),
(2, 'L', 7, 0, 4, 0),
(3, 'XL', 7, 0, 4, 0),
(4, '红色', 7, 0, 3, 0),
(5, '蓝色', 7, 0, 3, 0),
(6, '黄色', 7, 0, 3, 0),
(7, '黑色', 7, 0, 3, 0),
(8, '孜然味', 14, 0, 5, 0),
(9, '麻辣味', 14, 0, 5, 0),
(10, '烤肉味', 14, 0, 5, 0),
(11, '加绒', 7, 0, 6, 0),
(12, '超薄', 7, 0, 6, 0),
(13, '加厚', 7, 0, 6, 0),
(14, '青少年', 7, 0, 7, 0),
(15, '中年', 7, 0, 7, 0),
(16, '老年', 7, 0, 7, 0),
(20, '300g', 14, 0, 9, 0),
(21, '500g', 14, 0, 9, 0),
(22, '750g', 14, 0, 9, 0),
(23, '精装', 14, 0, 10, 0),
(24, '简装', 14, 0, 10, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_baseattr`
--

CREATE TABLE `tb_baseattr` (
  `baid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `atnid` int(11) NOT NULL,
  `atvid` int(11) NOT NULL,
  `issku` int(11) NOT NULL,
  `skuid` int(11) NOT NULL,
  `baseattrtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_baseattr`
--

INSERT INTO `tb_baseattr` (`baid`, `gid`, `atnid`, `atvid`, `issku`, `skuid`, `baseattrtime`) VALUES
(1, 1, 3, 4, 1, 1, 1480766562),
(2, 1, 4, 2, 1, 1, 1480766562),
(3, 1, 3, 4, 1, 2, 1480766562),
(4, 1, 4, 3, 1, 2, 1480766562),
(5, 1, 3, 5, 1, 3, 1480766562),
(6, 1, 4, 2, 1, 3, 1480766562),
(7, 1, 3, 5, 1, 4, 1480766562),
(8, 1, 4, 3, 1, 4, 1480766562),
(9, 1, 6, 0, 0, 0, 1480766562),
(10, 1, 7, 0, 0, 0, 1480766562),
(11, 1, 8, 0, 0, 0, 1480766562),
(12, 2, 5, 8, 1, 5, 1480768576),
(13, 3, 5, 8, 1, 6, 1480768589),
(14, 4, 5, 8, 1, 7, 1480768752),
(15, 4, 9, 20, 1, 7, 1480768752),
(16, 4, 5, 8, 1, 8, 1480768752),
(17, 4, 9, 21, 1, 8, 1480768752),
(18, 4, 5, 9, 1, 9, 1480768752),
(19, 4, 9, 20, 1, 9, 1480768752),
(20, 4, 5, 9, 1, 10, 1480768752),
(21, 4, 9, 21, 1, 10, 1480768752),
(22, 5, 5, 8, 1, 11, 1480768759),
(23, 5, 9, 20, 1, 11, 1480768759),
(24, 5, 5, 8, 1, 12, 1480768759),
(25, 5, 9, 21, 1, 12, 1480768759),
(26, 5, 5, 9, 1, 13, 1480768759),
(27, 5, 9, 20, 1, 13, 1480768759),
(28, 5, 5, 9, 1, 14, 1480768759),
(29, 5, 9, 21, 1, 14, 1480768759),
(30, 6, 5, 8, 1, 15, 1480802178),
(31, 6, 9, 20, 1, 15, 1480802178),
(32, 6, 5, 8, 1, 16, 1480802178),
(33, 6, 9, 21, 1, 16, 1480802178),
(34, 6, 5, 8, 1, 17, 1480802178),
(35, 6, 9, 22, 1, 17, 1480802178),
(36, 6, 5, 9, 1, 18, 1480802178),
(37, 6, 9, 20, 1, 18, 1480802178),
(38, 6, 5, 9, 1, 19, 1480802178),
(39, 6, 9, 21, 1, 19, 1480802178),
(40, 6, 5, 9, 1, 20, 1480802178),
(41, 6, 9, 22, 1, 20, 1480802178),
(42, 6, 5, 10, 1, 21, 1480802178),
(43, 6, 9, 20, 1, 21, 1480802178),
(44, 6, 5, 10, 1, 22, 1480802178),
(45, 6, 9, 21, 1, 22, 1480802178),
(46, 6, 5, 10, 1, 23, 1480802178),
(47, 6, 9, 22, 1, 23, 1480802178),
(48, 6, 1, 0, 0, 0, 1480802178),
(49, 7, 5, 8, 1, 24, 1480802220),
(50, 7, 9, 21, 1, 24, 1480802220),
(51, 7, 1, 0, 0, 0, 1480802220),
(52, 8, 5, 8, 1, 25, 1480802251),
(53, 8, 9, 21, 1, 25, 1480802251),
(54, 8, 1, 0, 0, 0, 1480802251),
(55, 9, 3, 4, 1, 26, 1480824723),
(56, 9, 4, 2, 1, 26, 1480824723),
(57, 9, 3, 4, 1, 27, 1480824723),
(58, 9, 4, 3, 1, 27, 1480824723),
(59, 9, 6, 0, 0, 0, 1480824723),
(60, 9, 7, 0, 0, 0, 1480824723),
(61, 9, 8, 0, 0, 0, 1480824723),
(62, 10, 3, 4, 1, 28, 1480824727),
(63, 10, 4, 2, 1, 28, 1480824727),
(64, 10, 3, 4, 1, 29, 1480824727),
(65, 10, 4, 3, 1, 29, 1480824727),
(66, 10, 6, 0, 0, 0, 1480824727),
(67, 10, 7, 0, 0, 0, 1480824727),
(68, 10, 8, 0, 0, 0, 1480824727),
(69, 11, 3, 4, 1, 30, 1480824728),
(70, 11, 4, 2, 1, 30, 1480824728),
(71, 11, 3, 4, 1, 31, 1480824728),
(72, 11, 4, 3, 1, 31, 1480824728),
(73, 11, 6, 0, 0, 0, 1480824728),
(74, 11, 7, 0, 0, 0, 1480824728),
(75, 11, 8, 0, 0, 0, 1480824728),
(76, 12, 3, 4, 1, 32, 1480824739),
(77, 12, 4, 2, 1, 32, 1480824739),
(78, 12, 3, 4, 1, 33, 1480824739),
(79, 12, 4, 3, 1, 33, 1480824739),
(80, 12, 6, 0, 0, 0, 1480824739),
(81, 12, 7, 0, 0, 0, 1480824739),
(82, 12, 8, 0, 0, 0, 1480824739),
(83, 13, 3, 4, 1, 34, 1480824793),
(84, 13, 4, 2, 1, 34, 1480824793),
(85, 13, 3, 4, 1, 35, 1480824793),
(86, 13, 4, 3, 1, 35, 1480824793),
(87, 13, 6, 0, 0, 0, 1480824793),
(88, 13, 7, 0, 0, 0, 1480824793),
(89, 13, 8, 0, 0, 0, 1480824793),
(90, 14, 3, 4, 1, 36, 1480824950),
(91, 14, 4, 2, 1, 36, 1480824950),
(92, 14, 3, 4, 1, 37, 1480824950),
(93, 14, 4, 3, 1, 37, 1480824950),
(94, 14, 6, 0, 0, 0, 1480824950),
(95, 14, 7, 0, 0, 0, 1480824950),
(96, 14, 8, 0, 0, 0, 1480824950),
(97, 15, 3, 4, 1, 38, 1480825008),
(98, 15, 4, 2, 1, 38, 1480825008),
(99, 15, 6, 0, 0, 0, 1480825008),
(100, 15, 7, 0, 0, 0, 1480825008),
(101, 15, 8, 0, 0, 0, 1480825008),
(102, 16, 3, 4, 1, 39, 1480825025),
(103, 16, 4, 2, 1, 39, 1480825025),
(104, 16, 6, 0, 0, 0, 1480825025),
(105, 16, 7, 0, 0, 0, 1480825025),
(106, 16, 8, 0, 0, 0, 1480825025),
(107, 17, 3, 4, 1, 40, 1480825184),
(108, 17, 4, 2, 1, 40, 1480825184),
(109, 17, 6, 0, 0, 0, 1480825184),
(110, 17, 7, 0, 0, 0, 1480825184),
(111, 18, 3, 4, 1, 41, 1480825248),
(112, 18, 4, 2, 1, 41, 1480825248),
(113, 18, 3, 4, 1, 42, 1480825248),
(114, 18, 4, 3, 1, 42, 1480825248),
(115, 18, 6, 0, 0, 0, 1480825248),
(116, 18, 7, 0, 0, 0, 1480825248),
(117, 18, 8, 0, 0, 0, 1480825248),
(118, 19, 3, 4, 1, 43, 1480825250),
(119, 19, 4, 2, 1, 43, 1480825250),
(120, 19, 3, 4, 1, 44, 1480825250),
(121, 19, 4, 3, 1, 44, 1480825250),
(122, 19, 6, 0, 0, 0, 1480825250),
(123, 19, 7, 0, 0, 0, 1480825250),
(124, 19, 8, 0, 0, 0, 1480825250),
(125, 20, 3, 4, 1, 45, 1480825310),
(126, 20, 4, 1, 1, 45, 1480825310),
(127, 20, 3, 4, 1, 46, 1480825310),
(128, 20, 4, 2, 1, 46, 1480825310),
(129, 20, 3, 4, 1, 47, 1480825310),
(130, 20, 4, 3, 1, 47, 1480825310),
(131, 20, 3, 5, 1, 48, 1480825310),
(132, 20, 4, 1, 1, 48, 1480825310),
(133, 20, 3, 5, 1, 49, 1480825310),
(134, 20, 4, 2, 1, 49, 1480825310),
(135, 20, 3, 5, 1, 50, 1480825310),
(136, 20, 4, 3, 1, 50, 1480825310),
(137, 20, 3, 6, 1, 51, 1480825310),
(138, 20, 4, 1, 1, 51, 1480825310),
(139, 20, 3, 6, 1, 52, 1480825310),
(140, 20, 4, 2, 1, 52, 1480825310),
(141, 20, 3, 6, 1, 53, 1480825310),
(142, 20, 4, 3, 1, 53, 1480825310),
(143, 20, 3, 7, 1, 54, 1480825310),
(144, 20, 4, 1, 1, 54, 1480825310),
(145, 20, 3, 7, 1, 55, 1480825310),
(146, 20, 4, 2, 1, 55, 1480825310),
(147, 20, 3, 7, 1, 56, 1480825310),
(148, 20, 4, 3, 1, 56, 1480825310),
(149, 20, 6, 0, 0, 0, 1480825310),
(150, 20, 7, 0, 0, 0, 1480825310),
(151, 21, 5, 8, 1, 57, 1480828994),
(152, 21, 9, 21, 1, 57, 1480828994),
(153, 21, 1, 0, 0, 0, 1480828994),
(154, 22, 3, 4, 1, 58, 1480830720),
(155, 22, 4, 2, 1, 58, 1480830720),
(156, 22, 3, 5, 1, 59, 1480830720),
(157, 22, 4, 2, 1, 59, 1480830720),
(158, 22, 6, 0, 0, 0, 1480830720),
(159, 22, 7, 0, 0, 0, 1480830720),
(160, 23, 3, 4, 1, 60, 1480832992),
(161, 23, 4, 1, 1, 60, 1480832992),
(162, 23, 3, 4, 1, 61, 1480832992),
(163, 23, 4, 2, 1, 61, 1480832992),
(164, 23, 3, 5, 1, 62, 1480832992),
(165, 23, 4, 1, 1, 62, 1480832992),
(166, 23, 3, 5, 1, 63, 1480832992),
(167, 23, 4, 2, 1, 63, 1480832992),
(168, 23, 6, 0, 0, 0, 1480832992),
(169, 23, 7, 0, 0, 0, 1480832992);

-- --------------------------------------------------------

--
-- 表的结构 `tb_brand`
--

CREATE TABLE `tb_brand` (
  `brid` int(11) NOT NULL,
  `brname` varchar(30) NOT NULL,
  `gcid` int(11) NOT NULL,
  `brlogo` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_brand`
--

INSERT INTO `tb_brand` (`brid`, `brname`, `gcid`, `brlogo`) VALUES
(1, '森马', 7, ''),
(2, '美特斯邦威', 7, ''),
(3, '李宁', 8, ''),
(4, '阿迪', 8, ''),
(5, '膨化食品', 14, ''),
(6, '耐克', 7, ''),
(11, 'nike', 7, ''),
(8, '口袋食品', 14, ''),
(9, '4654654', 11, '2016-12-04/5843ad917b109.jpg'),
(10, '南极人', 9, '2016-12-04/5843ae82a53ba.jpg'),
(13, 'eeeee', 10, '2016-12-04/5843b96044fbc.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `tb_cart`
--

CREATE TABLE `tb_cart` (
  `caid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `gnum` int(11) DEFAULT '1',
  `skustr` varchar(60) CHARACTER SET utf8 NOT NULL,
  `skuprice` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `tb_cart`
--

INSERT INTO `tb_cart` (`caid`, `uid`, `gid`, `gnum`, `skustr`, `skuprice`) VALUES
(71, 2, 1, 4, '3:5;4:3', 270),
(70, 3, 1, 1, '3:5;4:3', 270),
(67, 3, 1, 2, '3:5;4:3', 270);

-- --------------------------------------------------------

--
-- 表的结构 `tb_collect`
--

CREATE TABLE `tb_collect` (
  `clid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_config`
--

CREATE TABLE `tb_config` (
  `webid` int(11) NOT NULL,
  `webname` char(30) NOT NULL,
  `webkey` varchar(60) NOT NULL,
  `webright` varchar(60) NOT NULL,
  `weblogo` varchar(100) NOT NULL,
  `webswitch` enum('开','关') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_config`
--

INSERT INTO `tb_config` (`webid`, `webname`, `webkey`, `webright`, `weblogo`, `webswitch`) VALUES
(1, 'Black Pearl', '黑珍珠', '黑珍珠号已注册', 'conf/584153c06195f.jpg', '开');

-- --------------------------------------------------------

--
-- 表的结构 `tb_flink`
--

CREATE TABLE `tb_flink` (
  `fid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `furl` varchar(60) NOT NULL,
  `ftel` varchar(20) NOT NULL,
  `flogo` varchar(60) NOT NULL,
  `isonline` tinyint(5) NOT NULL DEFAULT '0',
  `starttime` int(11) NOT NULL DEFAULT '1479120001',
  `endtime` int(11) NOT NULL DEFAULT '1479900999'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_flink`
--

INSERT INTO `tb_flink` (`fid`, `fname`, `furl`, `ftel`, `flogo`, `isonline`, `starttime`, `endtime`) VALUES
(10, '支付宝宝', '78956456456', '45', '2016-11-24/5836e2dc09a25.jpg', 1, 1480348800, 1482336000),
(11, '微信', 'gfh132', 'ghd465', '2016-11-24/5836e82b0f33a.jpg', 1, 1480348800, 1482940800),
(12, '百度', '456', '789', '2016-11-25/5837d8dd525c5.jpg', 0, 1480348800, 1480435200),
(15, 'hhhhhhhhhh', 'hhhhhhh', 'hhhhhh', '2016-12-04/5843b2c45b5e7.jpg', 1, 1480003200, 1484928000),
(14, '微博', '55465', '7987', '2016-12-02/58416443672af.jpg', 0, 1479052800, 1484150400),
(16, 'fsds', 'fsfsddsfs', 'dsfdsfdsf', '2016-12-04/5843b98a4e860.jpg', 0, 1479120001, 1479900999);

-- --------------------------------------------------------

--
-- 表的结构 `tb_goods`
--

CREATE TABLE `tb_goods` (
  `gid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `gname` varchar(150) NOT NULL,
  `ghuohao` int(11) DEFAULT NULL,
  `gcid` int(11) NOT NULL,
  `brid` int(11) NOT NULL,
  `listprice` decimal(11,2) NOT NULL,
  `gaddtime` int(11) DEFAULT NULL,
  `gtotal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_goods`
--

INSERT INTO `tb_goods` (`gid`, `uid`, `gname`, `ghuohao`, `gcid`, `brid`, `listprice`, `gaddtime`, `gtotal`) VALUES
(1, 1, '冬季超保暖羽绒服', 56975, 7, 1, '256.00', 1480766562, 0),
(2, 2, '薯条', 88679, 14, 8, '10.00', 1480768576, 0),
(3, 2, '薯条', 88679, 14, 8, '10.00', 1480768589, 0),
(4, 2, '薯条', 2454, 14, 8, '10.00', 1480768752, 0),
(5, 2, '薯条', 2454, 14, 8, '10.00', 1480768759, 0),
(6, 2, '日本进口*Meiji明治 Fran香甜草莓味夹心黄油饼干棒45g 9根入1059', 5465, 14, 8, '33.00', 1480802178, 0),
(7, 2, '日本进口*Calbee卡乐比北海道产黄油味香脆波浪纹薯片72g 9724', 8866, 14, 8, '22.00', 1480802220, 0),
(8, 2, '日本进口休闲零食*Calbee卡乐比香浓蜂蜜黄油味坚脆薯片63g 9013', 555, 14, 8, '101.00', 1480802251, 0),
(9, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480824723, 0),
(10, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480824727, 0),
(11, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480824728, 0),
(12, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480824739, 0),
(13, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480824793, 0),
(14, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480824950, 0),
(15, 1, '不想写得羽绒服', 1213, 7, 1, '55.00', 1480825008, 0),
(16, 1, '不想写得羽绒服', 1213, 7, 1, '55.00', 1480825025, 0),
(17, 1, '不想写的羽绒服', 111, 7, 2, '111.00', 1480825184, 0),
(18, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480825248, 0),
(19, 1, '冬季保暖羽绒服', 4444, 7, 1, '222.00', 1480825250, 0),
(20, 1, '可以添加的羽绒服', 222, 7, 2, '111.00', 1480825310, 0),
(21, 2, '三德子牌辣条', 444, 14, 8, '500.00', 1480828994, 0),
(22, 1, '呵呵羽绒服', 15689, 7, 2, '12.00', 1480830720, 0),
(23, 2, '冬季加绒加厚三德子牌羽绒服', 88888, 7, 2, '111.00', 1480832992, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_goodsclass`
--

CREATE TABLE `tb_goodsclass` (
  `gcid` int(11) NOT NULL,
  `gcname` varchar(30) NOT NULL,
  `ispclass` int(11) NOT NULL,
  `pcid` int(11) NOT NULL,
  `groupid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_goodsclass`
--

INSERT INTO `tb_goodsclass` (`gcid`, `gcname`, `ispclass`, `pcid`, `groupid`) VALUES
(1, '女装', 1, 0, 1),
(2, '男装', 1, 0, 1),
(3, '内衣', 1, 0, 1),
(4, '鞋靴', 1, 0, 2),
(5, '箱包', 1, 0, 2),
(6, '配件', 1, 0, 2),
(7, '羽绒服', 0, 1, NULL),
(8, '棉衣', 0, 1, NULL),
(9, ' 棉裤', 0, 1, NULL),
(10, '羽绒服', 0, 2, NULL),
(11, '棉衣', 0, 2, NULL),
(12, '棉裤', 0, 2, NULL),
(13, '食品', 1, 0, 3),
(14, '零食', 0, 13, NULL),
(15, '棉裤', 0, 2, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tb_img`
--

CREATE TABLE `tb_img` (
  `iid` int(11) NOT NULL,
  `iimg` varchar(50) NOT NULL,
  `iname` varchar(60) NOT NULL,
  `iinfo` text NOT NULL,
  `ilink` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_img`
--

INSERT INTO `tb_img` (`iid`, `iimg`, `iname`, `iinfo`, `ilink`) VALUES
(1, '2016-11/583d6fc93c80a.png', '次轮播图1', '第一张', 'https://alimarket.tmall.com/markets/alimama/mingdian'),
(2, '2016-11/583d703f1dad8.png', '次轮播图2', '第二张', 'https://content.tmall.com/wow/pegasus/subject/1/725677994/59'),
(3, '2016-11/583d711b93fdb.png', '次轮播图3', '第三张', 'https://xiangpiaopiao.tmall.com'),
(4, '2016-11/583d717443afb.png', '次轮播图4', '第四张', 'https://www.tmall.com/?from=zebra:offline'),
(5, '2016-11/583d71ab63f34.png', '次轮播图5', '第五张', 'https://www.tmall.com/?from=zebra:offline'),
(6, '2016-11/583d72137d15e.png', '次轮播图6', '第六张', 'https://pages.tmall.com/wow/jz/act/zhuangxiutuangou'),
(7, '2016-11/583d724a30b36.png', '次轮播图7', '第七张', 'https://www.tmall.com/?from=zebra:offline'),
(8, '2016-11/583d72cb13402.png', '次轮播图8', '第八张', 'https://alimarket.tmall.com/markets/alimama/mingdian'),
(9, '2016-11/583d72fb70749.png', '次轮播图9', '第九张', 'https://alimarket.tmall.com/markets/alimama/mingdian'),
(10, '2016-11/583d733434b37.png', '次轮播图10', '第十张', 'https://alimarket.tmall.com/markets/alimama/mingdian');

-- --------------------------------------------------------

--
-- 表的结构 `tb_imgs`
--

CREATE TABLE `tb_imgs` (
  `imid` int(11) NOT NULL,
  `impic` varchar(100) NOT NULL,
  `imname` varchar(30) NOT NULL,
  `iminfo` varchar(100) NOT NULL,
  `imlink` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_imgs`
--

INSERT INTO `tb_imgs` (`imid`, `impic`, `imname`, `iminfo`, `imlink`) VALUES
(1, '2016-12-02/58414edf690c2.png', '主轮播图1', '第一张', 'https://alimarket.tmall.com/markets/alimama/mingdian'),
(2, '2016-11-29/583d6c1a68774.png', '主轮播图2', '第二张', 'https://alimarket.tmall.com/markets/alimama/mingdian'),
(3, '2016-11-29/583d6e812175b.png', '主轮播图3', '第三张', 'https://www.taobao.com/markets/youjia/ylhaodian'),
(4, '2016-11-29/583d6edabb8b2.png', '主轮播图4', '第四张', 'https://qiang.taobao.com/brand.html'),
(5, '2016-11-29/583d78869c32d.png', '主轮播图5', '第五张', 'https://alimarket.tmall.com/markets/alimama/mingdian');

-- --------------------------------------------------------

--
-- 表的结构 `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ordertime` int(11) NOT NULL,
  `listprice` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `skuid` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `status`, `aid`, `gid`, `uid`, `ordertime`, `listprice`, `count`, `skuid`, `totalprice`) VALUES
(1, 0, 8, 1, 2, 1480804526, 240, 3, 1, 720),
(2, 0, 8, 1, 2, 1480812507, 250, 4, 2, 1000),
(3, 1, 8, 1, 2, 1480812797, 240, 1, 1, 240),
(4, 0, 8, 1, 2, 1480825516, 111, 3, 1, 333),
(5, 1, 8, 1, 2, 1480827967, 270, 1, 4, 270),
(6, 0, 24, 1, 4, 1480830107, 250, 6, 2, 1500),
(7, 1, 24, 1, 4, 1480830139, 250, 1, 2, 250),
(8, 1, 9, 1, 2, 1480833191, 12, 3, 1, 36),
(9, 1, 25, 1, 13, 1480834186, 270, 2, 4, 540);

-- --------------------------------------------------------

--
-- 表的结构 `tb_permission`
--

CREATE TABLE `tb_permission` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `purl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_permission`
--

INSERT INTO `tb_permission` (`pid`, `pname`, `purl`) VALUES
(1, '修改网站配置', 'admin/config/index'),
(2, '添加用户', 'admin/user/add'),
(3, '修改用户', 'admin/user/update'),
(4, '删除用户', 'admin/user/delete'),
(5, '查找用户', 'admin/user/find'),
(8, '添加商品', '/admin/');

-- --------------------------------------------------------

--
-- 表的结构 `tb_picture`
--

CREATE TABLE `tb_picture` (
  `pid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `purl` varchar(120) NOT NULL,
  `ismain` enum('0','1') NOT NULL,
  `pplace` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_picture`
--

INSERT INTO `tb_picture` (`pid`, `gid`, `purl`, `ismain`, `pplace`) VALUES
(1, 1, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(2, 6, 'images/TB2xriQdEOO.eBjSZFLXXcxmXXa_!!73080899.jpg_160x160xz.jpg', '1', '0'),
(3, 7, 'images/TB2n7brcNuI.eBjy0FdXXXgbVXa_!!73080899.jpg_160x160xz.jpg', '1', '0'),
(4, 8, 'images/TB24Gm8cH1K.eBjSsphXXcJOXXa_!!73080899.jpg_160x160xz.jpg', '1', '0'),
(5, 5, 'images/TB2cFgesXXXXXa3XXXXXXXXXXXX_!!0-saturn_solar.jpg', '1', '0'),
(6, 4, 'images/TB2cFgesXXXXXa3XXXXXXXXXXXX_!!0-saturn_solar.jpg', '1', '0'),
(7, 3, 'images/TB2cFgesXXXXXa3XXXXXXXXXXXX_!!0-saturn_solar.jpg', '1', '0'),
(8, 2, 'images/TB2cFgesXXXXXa3XXXXXXXXXXXX_!!0-saturn_solar.jpg', '1', '0'),
(9, 9, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(10, 10, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(11, 11, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(12, 12, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(13, 13, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(14, 14, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(15, 15, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(16, 16, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(17, 17, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(18, 18, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(19, 19, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', ''),
(20, 20, 'images/TB22eNLXYQc61BjSZFrXXcnOpXa_!!0-saturn_solar.jpg', '1', '');

-- --------------------------------------------------------

--
-- 表的结构 `tb_role`
--

CREATE TABLE `tb_role` (
  `rid` int(11) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `pids` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_role`
--

INSERT INTO `tb_role` (`rid`, `rname`, `pids`) VALUES
(1, '超级管理员', '1,2,3,4,5'),
(2, '用户管理员', '2,3,4,5');

-- --------------------------------------------------------

--
-- 表的结构 `tb_sku`
--

CREATE TABLE `tb_sku` (
  `skuid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `skustr` varchar(60) NOT NULL,
  `skuname` varchar(100) NOT NULL,
  `skuprice` int(11) NOT NULL,
  `skucount` int(11) NOT NULL,
  `skuaddtime` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_sku`
--

INSERT INTO `tb_sku` (`skuid`, `gid`, `skustr`, `skuname`, `skuprice`, `skucount`, `skuaddtime`) VALUES
(1, 1, '3:4;4:2', '颜色:红色;尺码:L', 240, 100, 1480766562),
(2, 1, '3:4;4:3', '颜色:红色;尺码:XL', 250, 90, 1480766562),
(3, 1, '3:5;4:2', '颜色:蓝色;尺码:L', 260, 110, 1480766562),
(4, 1, '3:5;4:3', '颜色:蓝色;尺码:XL', 270, 120, 1480766562),
(5, 2, '5:8', '口味:孜然味', 10, 88, 1480768576),
(6, 3, '5:8', '口味:孜然味', 10, 88, 1480768589),
(7, 4, '5:8;9:20', '口味:孜然味;容量:300g', 8, 10, 1480768752),
(8, 4, '5:8;9:21', '口味:孜然味;容量:500g', 8, 10, 1480768752),
(9, 4, '5:9;9:20', '口味:麻辣味;容量:300g', 8, 10, 1480768752),
(10, 4, '5:9;9:21', '口味:麻辣味;容量:500g', 8, 10, 1480768752),
(11, 5, '5:8;9:20', '口味:孜然味;容量:300g', 8, 10, 1480768759),
(12, 5, '5:8;9:21', '口味:孜然味;容量:500g', 8, 10, 1480768759),
(13, 5, '5:9;9:20', '口味:麻辣味;容量:300g', 8, 10, 1480768759),
(14, 5, '5:9;9:21', '口味:麻辣味;容量:500g', 8, 10, 1480768759),
(15, 6, '5:8;9:20', '口味:孜然味;容量:300g', 11, 22, 1480802178),
(16, 6, '5:8;9:21', '口味:孜然味;容量:500g', 11, 22, 1480802178),
(17, 6, '5:8;9:22', '口味:孜然味;容量:750g', 11, 22, 1480802178),
(18, 6, '5:9;9:20', '口味:麻辣味;容量:300g', 11, 22, 1480802178),
(19, 6, '5:9;9:21', '口味:麻辣味;容量:500g', 11, 22, 1480802178),
(20, 6, '5:9;9:22', '口味:麻辣味;容量:750g', 11, 22, 1480802178),
(21, 6, '5:10;9:20', '口味:烤肉味;容量:300g', 141, 22, 1480802178),
(22, 6, '5:10;9:21', '口味:烤肉味;容量:500g', 11, 22, 1480802178),
(23, 6, '5:10;9:22', '口味:烤肉味;容量:750g', 11, 22, 1480802178),
(24, 7, '5:8;9:21', '口味:孜然味;容量:500g', 111, 333, 1480802220),
(25, 8, '5:8;9:21', '口味:孜然味;容量:500g', 11, 5555, 1480802251),
(26, 9, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480824723),
(27, 9, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480824723),
(28, 10, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480824727),
(29, 10, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480824727),
(30, 11, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480824728),
(31, 11, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480824728),
(32, 12, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480824739),
(33, 12, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480824739),
(34, 13, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480824793),
(35, 13, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480824793),
(36, 14, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480824950),
(37, 14, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480824950),
(38, 15, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480825008),
(39, 16, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480825025),
(40, 17, '3:4;4:2', '颜色:红色;尺码:L', 111, 11, 1480825184),
(41, 18, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480825248),
(42, 18, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480825248),
(43, 19, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480825250),
(44, 19, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480825250),
(45, 20, '3:4;4:1', '颜色:红色;尺码:M', 111, 111, 1480825310),
(46, 20, '3:4;4:2', '颜色:红色;尺码:L', 111, 111, 1480825310),
(47, 20, '3:4;4:3', '颜色:红色;尺码:XL', 111, 111, 1480825310),
(48, 20, '3:5;4:1', '颜色:蓝色;尺码:M', 111, 111, 1480825310),
(49, 20, '3:5;4:2', '颜色:蓝色;尺码:L', 111, 111, 1480825310),
(50, 20, '3:5;4:3', '颜色:蓝色;尺码:XL', 111, 111, 1480825310),
(51, 20, '3:6;4:1', '颜色:黄色;尺码:M', 111, 111, 1480825310),
(52, 20, '3:6;4:2', '颜色:黄色;尺码:L', 111, 111, 1480825310),
(53, 20, '3:6;4:3', '颜色:黄色;尺码:XL', 111, 111, 1480825310),
(54, 20, '3:7;4:1', '颜色:黑色;尺码:M', 111, 111, 1480825310),
(55, 20, '3:7;4:2', '颜色:黑色;尺码:L', 111, 111, 1480825310),
(56, 20, '3:7;4:3', '颜色:黑色;尺码:XL', 111, 111, 1480825310),
(57, 21, '5:8;9:21', '口味:孜然味;容量:500g', 111, 111, 1480828994),
(58, 22, '3:4;4:2', '颜色:红色;尺码:L', 120, 25, 1480830720),
(59, 22, '3:5;4:2', '颜色:蓝色;尺码:L', 130, 25, 1480830720),
(60, 23, '3:4;4:1', '颜色:红色;尺码:M', 11, 111, 1480832992),
(61, 23, '3:4;4:2', '颜色:红色;尺码:L', 12, 111, 1480832992),
(62, 23, '3:5;4:1', '颜色:蓝色;尺码:M', 13, 222, 1480832992),
(63, 23, '3:5;4:2', '颜色:蓝色;尺码:L', 14, 333, 1480832992);

-- --------------------------------------------------------

--
-- 表的结构 `tb_store`
--

CREATE TABLE `tb_store` (
  `sid` int(11) NOT NULL,
  `sname` varchar(120) NOT NULL,
  `slogo` varchar(120) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_store`
--

INSERT INTO `tb_store` (`sid`, `sname`, `slogo`, `uid`) VALUES
(1, '零食店', 'images/TB1d43hIFXXXXbyaXXXSutbFXXX.jpg_50x50.jpg ', 2),
(2, '女装店', 'images/T1Y9BHFe0aXXb1upjX.jpg_50x50.jpg', 1),
(3, '男装店', '12123', 3);

-- --------------------------------------------------------

--
-- 表的结构 `tb_userinfo`
--

CREATE TABLE `tb_userinfo` (
  `uiid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `sex` enum('0','1') NOT NULL,
  `tname` varchar(30) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `astro` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_userinfo`
--

INSERT INTO `tb_userinfo` (`uiid`, `uid`, `petname`, `sex`, `tname`, `year`, `month`, `day`, `astro`) VALUES
(2, 2, '张三', '0', '嗯呢', 2015, 11, 18, '天蝎座'),
(3, 4, 'ss', '0', 'sss', 1956, 11, 17, '天蝎座'),
(4, 13, 'das', '0', 'aaa', 1957, 1, 18, '摩羯座');

-- --------------------------------------------------------

--
-- 表的结构 `tb_users`
--

CREATE TABLE `tb_users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upwd` varchar(32) NOT NULL,
  `uemail` varchar(30) DEFAULT NULL,
  `uphone` bigint(20) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `head` varchar(120) DEFAULT 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png',
  `isseller` int(11) NOT NULL DEFAULT '0',
  `isAdmin` enum('1','0') NOT NULL DEFAULT '0',
  `rids` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_users`
--

INSERT INTO `tb_users` (`uid`, `uname`, `upwd`, `uemail`, `uphone`, `addtime`, `head`, `isseller`, `isAdmin`, `rids`) VALUES
(1, 'kami', '1ebaa39e25577ef3c148684e789f2ee3', '2578864904@qq.com', 18301302704, 1480064129, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '1', '2'),
(2, 'z', 'fbade9e36a3f36d3d676c1b808451dd7', NULL, 15213029797, 1480064155, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '1', '1'),
(3, 'aa', '4297f44b13955235245b2497399d7a93', 'ghjhkj@gj', 12345567445, 1480696112, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '0', '2'),
(4, 'Joker', '8ece208eed48bff374405206d2cbcc1d', '18875084378@163.com', 18875084378, 1480321146, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '1', '1'),
(5, 'z15213021234', 'fbade9e36a3f36d3d676c1b808451dd7', NULL, 15213021234, 1480608988, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '0', '1'),
(10, 'z5465', 'fbade9e36a3f36d3d676c1b808451dd7', NULL, 13255555555, 1480828047, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '0', ''),
(11, 'ddfas', 'fbade9e36a3f36d3d676c1b808451dd7', NULL, 15213045555, 1480828170, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '0', ''),
(12, 'zzzadda', 'fbade9e36a3f36d3d676c1b808451dd7', NULL, 18210264116, 1480830409, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '0', ''),
(13, 'zasas', 'fbade9e36a3f36d3d676c1b808451dd7', NULL, 18633388682, 1480833954, 'images/TB1yeWeIFXXXXX5XFXXuAZJYXXX-210-210.png', 0, '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_address`
--
ALTER TABLE `tb_address`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tb_assess`
--
ALTER TABLE `tb_assess`
  ADD PRIMARY KEY (`asid`);

--
-- Indexes for table `tb_attname`
--
ALTER TABLE `tb_attname`
  ADD PRIMARY KEY (`atnid`);

--
-- Indexes for table `tb_attvalue`
--
ALTER TABLE `tb_attvalue`
  ADD PRIMARY KEY (`atvid`);

--
-- Indexes for table `tb_baseattr`
--
ALTER TABLE `tb_baseattr`
  ADD PRIMARY KEY (`baid`);

--
-- Indexes for table `tb_brand`
--
ALTER TABLE `tb_brand`
  ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`caid`);

--
-- Indexes for table `tb_collect`
--
ALTER TABLE `tb_collect`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `tb_config`
--
ALTER TABLE `tb_config`
  ADD PRIMARY KEY (`webid`);

--
-- Indexes for table `tb_flink`
--
ALTER TABLE `tb_flink`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `flurl` (`furl`);

--
-- Indexes for table `tb_goods`
--
ALTER TABLE `tb_goods`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `tb_goodsclass`
--
ALTER TABLE `tb_goodsclass`
  ADD PRIMARY KEY (`gcid`);

--
-- Indexes for table `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`iid`),
  ADD UNIQUE KEY `iname` (`iname`);

--
-- Indexes for table `tb_imgs`
--
ALTER TABLE `tb_imgs`
  ADD PRIMARY KEY (`imid`),
  ADD UNIQUE KEY `imname` (`imname`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_permission`
--
ALTER TABLE `tb_permission`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tb_picture`
--
ALTER TABLE `tb_picture`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tb_sku`
--
ALTER TABLE `tb_sku`
  ADD PRIMARY KEY (`skuid`);

--
-- Indexes for table `tb_store`
--
ALTER TABLE `tb_store`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  ADD PRIMARY KEY (`uiid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `uphone` (`uphone`),
  ADD UNIQUE KEY `uemail` (`uemail`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_address`
--
ALTER TABLE `tb_address`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- 使用表AUTO_INCREMENT `tb_assess`
--
ALTER TABLE `tb_assess`
  MODIFY `asid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `tb_attname`
--
ALTER TABLE `tb_attname`
  MODIFY `atnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `tb_attvalue`
--
ALTER TABLE `tb_attvalue`
  MODIFY `atvid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 使用表AUTO_INCREMENT `tb_baseattr`
--
ALTER TABLE `tb_baseattr`
  MODIFY `baid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- 使用表AUTO_INCREMENT `tb_brand`
--
ALTER TABLE `tb_brand`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `caid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- 使用表AUTO_INCREMENT `tb_collect`
--
ALTER TABLE `tb_collect`
  MODIFY `clid` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tb_flink`
--
ALTER TABLE `tb_flink`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `tb_goods`
--
ALTER TABLE `tb_goods`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- 使用表AUTO_INCREMENT `tb_goodsclass`
--
ALTER TABLE `tb_goodsclass`
  MODIFY `gcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `tb_img`
--
ALTER TABLE `tb_img`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `tb_imgs`
--
ALTER TABLE `tb_imgs`
  MODIFY `imid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `tb_permission`
--
ALTER TABLE `tb_permission`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `tb_picture`
--
ALTER TABLE `tb_picture`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `tb_sku`
--
ALTER TABLE `tb_sku`
  MODIFY `skuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- 使用表AUTO_INCREMENT `tb_store`
--
ALTER TABLE `tb_store`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  MODIFY `uiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
