-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 05 月 20 日 14:05
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `logistics2`
--
CREATE DATABASE IF NOT EXISTS `logistics2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `logistics2`;

-- --------------------------------------------------------

--
-- 表的结构 `log_comprehensive`
--

CREATE TABLE IF NOT EXISTS `log_comprehensive` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `cost` float DEFAULT NULL COMMENT '计算期物流成本总额',
  `income` float DEFAULT NULL COMMENT '计算期销售收入',
  `support` float DEFAULT NULL COMMENT '认同公司绿色物流的零售商',
  `sum` float DEFAULT NULL COMMENT '公司零售商总数',
  `other` varchar(100) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='综合指标表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `log_com_comprehensive`
--

CREATE TABLE IF NOT EXISTS `log_com_comprehensive` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `auth` float DEFAULT NULL COMMENT '环境管理体系认证情况',
  `money` float DEFAULT NULL COMMENT '物流费用率',
  `talent` float DEFAULT NULL COMMENT '人才保障',
  `identification` float DEFAULT NULL COMMENT '客户绿色物流认同率',
  `other` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='综合指标评价表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `log_com_comprehensive`
--

INSERT INTO `log_com_comprehensive` (`id`, `year`, `quarter`, `place`, `time`, `auth`, `money`, `talent`, `identification`, `other`) VALUES
(1, 2014, 1, '娄底市', NULL, 1, 0.00612444, 1, 0.6, NULL),
(2, 2014, 2, '娄底市', NULL, 1, 0.012007, 1, 0.6, NULL),
(3, 2014, 3, '娄底市', NULL, 1, 0.0105777, 1, 0.6, NULL),
(4, 2014, 4, '娄底市', NULL, 1, 0.0145883, 1, 0.6, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `log_com_sorting`
--

CREATE TABLE IF NOT EXISTS `log_com_sorting` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `damage_s` float DEFAULT NULL COMMENT '分拣环节卷烟破损率',
  `electric_s` float DEFAULT NULL COMMENT '分拣环节单位电能消耗',
  `mistake` float DEFAULT NULL COMMENT '分拣差错率',
  `operation` float DEFAULT NULL COMMENT '平均作业效率',
  `average_sort` float DEFAULT NULL COMMENT '人均分拣效率',
  `effective_op` float DEFAULT NULL COMMENT '分拣设备有效作业率',
  `box_qualified` float DEFAULT NULL COMMENT '纸箱合格率',
  `dm` float DEFAULT NULL COMMENT '分拣车间噪声水平',
  `PE_re` float DEFAULT NULL COMMENT 'PE膜回收率',
  `box_re` float DEFAULT NULL COMMENT '纸箱回收率',
  `other` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='卷烟绿色分拣评价表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `log_com_sorting`
--

INSERT INTO `log_com_sorting` (`id`, `year`, `quarter`, `place`, `time`, `damage_s`, `electric_s`, `mistake`, `operation`, `average_sort`, `effective_op`, `box_qualified`, `dm`, `PE_re`, `box_re`, `other`) VALUES
(1, 2014, 1, '娄底市', NULL, 0.00002076, 0.501172, 0, 89.7895, 3.45344, 0.935308, 0.893564, 70, 0, 0.856774, NULL),
(2, 2014, 2, '娄底市', NULL, 0.00001036, 0.59444, 0, 75.7015, 2.9116, 0.788558, 0.850437, 70, 0, 1.12302, NULL),
(3, 2014, 3, '娄底市', NULL, 0.00000845, 0.538946, 0, 83.4963, 3.21139, 0.869753, 0.87863, 70, 0, 1.04842, NULL),
(4, 2014, 4, '娄底市', NULL, 0.00000958, 0.591383, 0, 76.0929, 2.92665, 0.792634, 0.813314, 70, 0, 1.15963, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `log_com_transportation`
--

CREATE TABLE IF NOT EXISTS `log_com_transportation` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `oil` float DEFAULT NULL COMMENT '单箱油耗量',
  `damage` float DEFAULT NULL COMMENT '配送环节卷烟破损率',
  `accurate` float DEFAULT NULL COMMENT '送货准确率',
  `load` float DEFAULT NULL COMMENT '车辆装载率',
  `GPS_use` float DEFAULT NULL COMMENT '配送车辆GPS使用率',
  `oil_hundred` float DEFAULT NULL COMMENT '运输车辆百公里油耗',
  `other` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='卷烟绿色配送运输评价表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `log_com_transportation`
--

INSERT INTO `log_com_transportation` (`id`, `year`, `quarter`, `place`, `time`, `oil`, `damage`, `accurate`, `load`, `GPS_use`, `oil_hundred`, `other`) VALUES
(1, 2014, 1, '娄底市', NULL, 0.72501, 0, 1, 0.223357, 100, 15.6882, NULL),
(2, 2014, 2, '娄底市', NULL, 0.870084, 0, 1, 0.188312, 100, 16.2209, NULL),
(3, 2014, 3, '娄底市', NULL, 0.867206, 0, 1, 0.207702, 100, 15.1737, NULL),
(4, 2014, 4, '娄底市', NULL, 0.710753, 0, 1, 0.189286, 100, 15.4672, '\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `log_com_warehousing`
--

CREATE TABLE IF NOT EXISTS `log_com_warehousing` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `damage_w` float DEFAULT NULL COMMENT '仓储环节卷烟破损率',
  `use` float DEFAULT NULL COMMENT '仓库利用率',
  `electric_w` float DEFAULT NULL COMMENT '仓储环节单位电能消耗',
  `other` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='卷烟绿色仓储评价表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `log_com_warehousing`
--

INSERT INTO `log_com_warehousing` (`id`, `year`, `quarter`, `place`, `time`, `damage_w`, `use`, `electric_w`, `other`) VALUES
(1, 2014, 1, '娄底市', NULL, 0, 1.25148, 0.281909, NULL),
(2, 2014, 2, '娄底市', NULL, 0, 0.532206, 0.334372, NULL),
(3, 2014, 3, '娄底市', NULL, 0, 0.719513, 0.303157, NULL),
(4, 2014, 4, '娄底市', NULL, 0, 0.848886, 0.332653, NULL),
(13, 2010, 1, '长沙市', '2015-05-20 03:09:57', 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `log_sorting`
--

CREATE TABLE IF NOT EXISTS `log_sorting` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `damage_s` float DEFAULT NULL COMMENT '计算期分拣破损量',
  `total_s` float DEFAULT NULL COMMENT '计算期总作业量',
  `mistake_s` float DEFAULT NULL COMMENT '计算期分拣差错量',
  `hours` float DEFAULT NULL COMMENT '分拣时间',
  `people` float DEFAULT NULL COMMENT '人数',
  `efficiency` float DEFAULT NULL COMMENT '设备额定效率',
  `pass` float DEFAULT NULL COMMENT '纸箱当季合格数',
  `PE_re` float DEFAULT NULL COMMENT 'PE膜回收量',
  `PE_use` float DEFAULT NULL COMMENT 'PE膜使用量',
  `box_re` float DEFAULT NULL COMMENT '纸箱实际回收量',
  `plan` float DEFAULT NULL COMMENT '计划调拨量',
  `power_s` float DEFAULT NULL COMMENT '分拣环节耗电量',
  `other` varchar(100) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='卷烟绿色分拣表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `log_transportation`
--

CREATE TABLE IF NOT EXISTS `log_transportation` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `oil` float DEFAULT NULL COMMENT '计算期油耗',
  `send` float DEFAULT NULL COMMENT '计算期送货量',
  `mistake_t` float DEFAULT NULL COMMENT '计算期送货破损量',
  `total_t` float DEFAULT NULL COMMENT '计算期总作业量',
  `accurate` float DEFAULT NULL COMMENT '计算期送货准确量',
  `volume` float DEFAULT NULL COMMENT '车辆容积',
  `mile` float DEFAULT NULL COMMENT '行驶公里数',
  `sum_volume` float DEFAULT NULL COMMENT '运输卷烟总体积',
  `other` varchar(100) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='卷烟绿色配送运输表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `log_user`
--

CREATE TABLE IF NOT EXISTS `log_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `username` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `password` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `regdate` datetime NOT NULL COMMENT '注册时间',
  `other` varchar(100) DEFAULT NULL COMMENT '其他信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `log_user`
--

INSERT INTO `log_user` (`id`, `username`, `password`, `regdate`, `other`) VALUES
(1, '1064794756@qq.com', '96e79218965eb72c92a549dd5a330112', '0000-00-00 00:00:00', NULL),
(2, '1064794756@qq.com', '96e79218965eb72c92a549dd5a330112', '2000-10-29 00:00:00', NULL),
(3, '1064794716@qq.com', '111111', '2015-04-24 02:38:53', NULL),
(4, '106479471d6@qq.com', '96e79218965eb72c92a5', '2015-04-24 02:45:31', NULL),
(5, '106479716@qq.com', '96e79218965eb72c92a5', '2015-04-24 02:51:45', NULL),
(6, '1@qq.com', '96e79218965eb72c92a549dd5a330112', '2015-04-24 03:03:37', NULL),
(7, '2@qq.com', '96e79218965eb72c92a549dd5a330112', '2015-04-25 08:59:50', NULL),
(8, 'WJDKFF@163.com', 'e3ceb5881a0a1fdaad01296d7554868d', '2015-04-25 12:00:53', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `log_warehousing`
--

CREATE TABLE IF NOT EXISTS `log_warehousing` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `quarter` int(1) DEFAULT NULL COMMENT '季度',
  `place` varchar(100) DEFAULT NULL COMMENT '地点',
  `time` datetime DEFAULT NULL COMMENT '入库时间',
  `damage_w` float DEFAULT NULL COMMENT '计算期仓储破损量',
  `total_w` float DEFAULT NULL COMMENT '计算期总作业量',
  `space` float DEFAULT NULL COMMENT '仓储利用空间',
  `volume` float DEFAULT NULL COMMENT '仓储容积',
  `power` float DEFAULT NULL COMMENT '仓储环节耗电量',
  `other` varchar(100) DEFAULT NULL COMMENT '其他',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='卷烟绿色仓储表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `log_warehousing`
--

INSERT INTO `log_warehousing` (`id`, `year`, `quarter`, `place`, `time`, `damage_w`, `total_w`, `space`, `volume`, `power`, `other`) VALUES
(1, 2010, 1, '长沙市', '2015-05-20 03:09:57', 1, 1, 1, 1, 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
