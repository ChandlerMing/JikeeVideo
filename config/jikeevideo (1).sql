-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-07-09 16:11:46
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `jikeevideo`
--

-- --------------------------------------------------------

--
-- 表的结构 `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `cid` int(11) NOT NULL COMMENT '评论编号',
  `commentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '评论时间',
  `commentText` varchar(100) NOT NULL COMMENT '评论内容',
  `vid` int(11) NOT NULL COMMENT '视频编号',
  `uid` int(11) NOT NULL COMMENT '用户编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_comment`
--

INSERT INTO `tbl_comment` (`cid`, `commentTime`, `commentText`, `vid`, `uid`) VALUES
(1, '2020-07-05 13:26:09', '该用户因为违规发言，评论已经被折叠', 1, 1),
(2, '2020-07-05 13:26:25', '评论测试', 1, 1),
(3, '2020-07-06 02:56:55', '测试测试', 2, 1),
(4, '2020-07-06 03:00:23', '测试\r\n', 2, 1),
(5, '2020-07-06 03:03:27', '测试', 2, 1),
(6, '2020-07-06 03:03:48', '测试', 2, 1),
(7, '2020-07-06 03:04:16', '测试', 2, 1),
(8, '2020-07-06 03:05:01', '毕导干货满满\r\n', 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_like`
--

CREATE TABLE `tbl_like` (
  `lid` int(11) NOT NULL COMMENT '点赞编号',
  `vid` int(11) NOT NULL COMMENT '视频编号',
  `userIP` varchar(40) NOT NULL COMMENT 'IP 地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_like`
--

INSERT INTO `tbl_like` (`lid`, `vid`, `userIP`) VALUES
(12, 8, '127.0.0.1'),
(13, 3, '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `userName` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `avatar` varchar(50) NOT NULL DEFAULT 'Logo.png' COMMENT '头像',
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `gender` smallint(6) NOT NULL DEFAULT '1' COMMENT '性别',
  `power` smallint(6) NOT NULL DEFAULT '0' COMMENT '用户权限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `userName`, `password`, `email`, `avatar`, `regtime`, `gender`, `power`) VALUES
(1, 'zqm', 'e10adc3949ba59abbe56e057f20f883e', 'zqm@163.com', 'Logo.png', '2020-07-04 06:51:00', 1, 0),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@163.com', 'Logo.png', '2020-07-05 05:02:47', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_user_favourite`
--

CREATE TABLE `tbl_user_favourite` (
  `fid` int(11) NOT NULL COMMENT '收藏编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `vid` int(11) NOT NULL COMMENT '视频编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_user_favourite`
--

INSERT INTO `tbl_user_favourite` (`fid`, `uid`, `vid`) VALUES
(1, 1, 1),
(5, 1, 8),
(6, 1, 3),
(7, 1, 6),
(8, 1, 4),
(9, 1, 7),
(10, 1, 5),
(11, 2, 6);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_video`
--

CREATE TABLE `tbl_video` (
  `vid` int(11) NOT NULL COMMENT '视频编号',
  `videoName` varchar(50) NOT NULL COMMENT '视频名称',
  `videoTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上线时间',
  `videoUrl` varchar(100) NOT NULL COMMENT '视频路径'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_video`
--

INSERT INTO `tbl_video` (`vid`, `videoName`, `videoTime`, `videoUrl`) VALUES
(1, 'Bootstrap4.x 精品教程', '2020-07-05 07:36:34', './videos/1.mp4'),
(2, '由浅入深学安全', '2020-07-05 07:45:38', './videos/2.mp4'),
(3, '毕导高考学习经验分享', '2020-07-05 14:49:32', './videos/3.mp4'),
(4, '紧急救援', '2020-07-06 01:41:47', './videos/4.mp4'),
(5, '惊奇队长', '2020-07-06 01:49:05', './videos/5.mp4'),
(6, '玩具总动员', '2020-07-06 01:49:05', './videos/6.mp4'),
(7, '叶问', '2020-07-06 01:49:05', './videos/7.mp4'),
(8, '阿拉丁神灯', '2020-07-08 08:40:09', '/videos/20200708164008101.mp4');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_video_desc`
--

CREATE TABLE `tbl_video_desc` (
  `vid` int(11) NOT NULL COMMENT '视频编号',
  `coverUrl` varchar(100) NOT NULL COMMENT '封面路径',
  `videoDesc` varchar(200) NOT NULL DEFAULT '暂无视频简介' COMMENT '视频简介',
  `likeCount` int(11) NOT NULL DEFAULT '0' COMMENT '点赞数量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_video_desc`
--

INSERT INTO `tbl_video_desc` (`vid`, `coverUrl`, `videoDesc`, `likeCount`) VALUES
(1, '/img/1.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 0),
(2, './img/2.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 0),
(3, './img/3.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 1),
(4, './img/4.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 0),
(5, './img/5.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 0),
(6, './img/6.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 0),
(7, './img/7.jpg', '暂无视频简介?不，这是一个测试视频，当然需要有简介。', 0),
(8, '/img/20200708164008395.jpg', '阿拉丁哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_video_learn`
--

CREATE TABLE `tbl_video_learn` (
  `vid` int(11) NOT NULL COMMENT '视频编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_video_learn`
--

INSERT INTO `tbl_video_learn` (`vid`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_video_movie`
--

CREATE TABLE `tbl_video_movie` (
  `vid` int(11) NOT NULL COMMENT '视频编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_video_movie`
--

INSERT INTO `tbl_video_movie` (`vid`) VALUES
(4),
(5),
(6),
(7),
(8);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_video_other`
--

CREATE TABLE `tbl_video_other` (
  `vid` int(11) NOT NULL COMMENT '视频编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_video_serial`
--

CREATE TABLE `tbl_video_serial` (
  `vid` int(11) NOT NULL COMMENT '视频编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转储表的索引
--

--
-- 表的索引 `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`cid`);

--
-- 表的索引 `tbl_like`
--
ALTER TABLE `tbl_like`
  ADD PRIMARY KEY (`lid`);

--
-- 表的索引 `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- 表的索引 `tbl_user_favourite`
--
ALTER TABLE `tbl_user_favourite`
  ADD PRIMARY KEY (`fid`);

--
-- 表的索引 `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`vid`);

--
-- 表的索引 `tbl_video_desc`
--
ALTER TABLE `tbl_video_desc`
  ADD PRIMARY KEY (`vid`);

--
-- 表的索引 `tbl_video_learn`
--
ALTER TABLE `tbl_video_learn`
  ADD PRIMARY KEY (`vid`);

--
-- 表的索引 `tbl_video_movie`
--
ALTER TABLE `tbl_video_movie`
  ADD PRIMARY KEY (`vid`);

--
-- 表的索引 `tbl_video_other`
--
ALTER TABLE `tbl_video_other`
  ADD PRIMARY KEY (`vid`);

--
-- 表的索引 `tbl_video_serial`
--
ALTER TABLE `tbl_video_serial`
  ADD PRIMARY KEY (`vid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论编号', AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `tbl_like`
--
ALTER TABLE `tbl_like`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT COMMENT '点赞编号', AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `tbl_user_favourite`
--
ALTER TABLE `tbl_user_favourite`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT COMMENT '收藏编号', AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频编号', AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `tbl_video_desc`
--
ALTER TABLE `tbl_video_desc`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频编号', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
