/*
Navicat MySQL Data Transfer

Source Server         : conn
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : jxcdb

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-06-04 17:47:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for backsales
-- ----------------------------
DROP TABLE IF EXISTS `backsales`;
CREATE TABLE `backsales` (
  `BSA_id` varchar(30) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `RequestDate` date NOT NULL,
  `ReviewEmp` varchar(30) DEFAULT NULL,
  `ReviewState` int(11) DEFAULT NULL,
  `BackReason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`BSA_id`),
  KEY `FK_Customer` (`Customer_id`),
  KEY `FK_reviewEmp` (`ReviewEmp`),
  CONSTRAINT `FK_Customer` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`),
  CONSTRAINT `FK_reviewEmp` FOREIGN KEY (`ReviewEmp`) REFERENCES `employee` (`EmpLoginName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of backsales
-- ----------------------------
INSERT INTO `backsales` VALUES ('THHS8e738373584748', '18392', '2018-04-04', 'rose', '1', '今天周二');
INSERT INTO `backsales` VALUES ('THSIO393474923283738', '18392', '2018-04-08', null, null, '哈哈哈');

-- ----------------------------
-- Table structure for backsalesdetail
-- ----------------------------
DROP TABLE IF EXISTS `backsalesdetail`;
CREATE TABLE `backsalesdetail` (
  `BSAD_id` int(11) NOT NULL AUTO_INCREMENT,
  `bs` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Productunitid` int(11) NOT NULL,
  `price` double(10,2) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`BSAD_id`),
  KEY `FK_BackSales` (`bs`),
  KEY `FK_product` (`Product_id`),
  KEY `FK_productUnit_s` (`Productunitid`),
  CONSTRAINT `FK_BackSales` FOREIGN KEY (`bs`) REFERENCES `backsales` (`BSA_id`),
  CONSTRAINT `FK_product` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_productUnit_s` FOREIGN KEY (`Productunitid`) REFERENCES `productunit` (`ProductUnit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of backsalesdetail
-- ----------------------------
INSERT INTO `backsalesdetail` VALUES ('1', 'THHS8e738373584748', 'CPS-10001', '1', null, '2');
INSERT INTO `backsalesdetail` VALUES ('2', 'THHS8e738373584748', 'CPS-10003', '2', null, '2');

-- ----------------------------
-- Table structure for backstock
-- ----------------------------
DROP TABLE IF EXISTS `backstock`;
CREATE TABLE `backstock` (
  `BST_id` varchar(30) NOT NULL,
  `Employee_id` int(11) NOT NULL,
  `Supplier_id` int(11) NOT NULL,
  `ManagerReviewState` varchar(0) DEFAULT NULL,
  `ManagerReviewEmp` varchar(0) DEFAULT NULL,
  `BackStockDate` date DEFAULT NULL,
  `BackStockReason` varchar(0) DEFAULT NULL,
  PRIMARY KEY (`BST_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of backstock
-- ----------------------------

-- ----------------------------
-- Table structure for backstockdetail
-- ----------------------------
DROP TABLE IF EXISTS `backstockdetail`;
CREATE TABLE `backstockdetail` (
  `BSTD_id` int(11) NOT NULL AUTO_INCREMENT,
  `BST_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Count` varchar(0) DEFAULT NULL,
  PRIMARY KEY (`BSTD_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of backstockdetail
-- ----------------------------

-- ----------------------------
-- Table structure for check
-- ----------------------------
DROP TABLE IF EXISTS `check`;
CREATE TABLE `check` (
  `c_id` varchar(50) NOT NULL,
  `c_state` int(10) DEFAULT NULL,
  `c_creater` varchar(40) DEFAULT NULL,
  `c_createDate` datetime DEFAULT NULL,
  `c_reviewEmp` varchar(30) DEFAULT NULL,
  `c_reviewDate` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of check
-- ----------------------------
INSERT INTO `check` VALUES ('Check060108580391540', '2', 'wade', '2018-06-01 08:58:59', 'wade', '2018-05-31 09:12:05');
INSERT INTO `check` VALUES ('Check060108590092636', '3', 'Jordan', '2018-06-01 09:00:15', 'wade', '2018-06-01 09:51:35');
INSERT INTO `check` VALUES ('Check060109570072797', '2', 'jinying', '2018-06-01 13:46:44', 'wade', '2018-06-01 15:05:47');
INSERT INTO `check` VALUES ('CheckMZXZ052812200549327', '2', 'jinying', '2018-05-28 12:20:54', 'wade', '2018-06-01 09:12:11');
INSERT INTO `check` VALUES ('CheckQJMO053002380514018', '2', 'james', '2018-05-30 14:38:51', 'jinying', '2018-06-01 09:12:13');

-- ----------------------------
-- Table structure for checkdetail
-- ----------------------------
DROP TABLE IF EXISTS `checkdetail`;
CREATE TABLE `checkdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` varchar(50) DEFAULT NULL,
  `Product_id` varchar(50) DEFAULT NULL,
  `Pro_count` int(10) DEFAULT NULL,
  `Pro_checkcount` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of checkdetail
-- ----------------------------
INSERT INTO `checkdetail` VALUES ('46', 'CheckMZXZ052812200549327', 'CPS-10001', '0', '2');
INSERT INTO `checkdetail` VALUES ('47', 'CheckMZXZ052812200549327', 'CPS-10002', '0', '2');
INSERT INTO `checkdetail` VALUES ('48', 'CheckUpdateGIEA052909130541078', 'CPS-10001', '1', '2');
INSERT INTO `checkdetail` VALUES ('49', 'CheckUpdateGIEA052909130541078', 'CPS-10002', '2', '2');
INSERT INTO `checkdetail` VALUES ('50', 'CheckQJMO053002380514018', 'CPS-10001', '0', '5');
INSERT INTO `checkdetail` VALUES ('51', 'CheckQJMO053002380514018', 'CPS-10002', '0', '5');
INSERT INTO `checkdetail` VALUES ('52', 'CheckQJMO053002380514018', 'CPS-10003', '0', '5');
INSERT INTO `checkdetail` VALUES ('53', 'CheckQJMO053002380514018', 'CPS-10004', '0', '5');
INSERT INTO `checkdetail` VALUES ('54', 'CheckQJMO053002380514018', 'CPS-10018', '0', '5');
INSERT INTO `checkdetail` VALUES ('55', 'CheckUpdateYDOQ053003330113150', 'CPS-10001', '1', '5');
INSERT INTO `checkdetail` VALUES ('56', 'CheckUpdateYDOQ053003330113150', 'CPS-10002', '1', '5');
INSERT INTO `checkdetail` VALUES ('57', 'CheckUpdateYDOQ053003330113150', 'CPS-10003', '5', '5');
INSERT INTO `checkdetail` VALUES ('58', 'CheckUpdateYDOQ053003330113150', 'CPS-10004', '5', '5');
INSERT INTO `checkdetail` VALUES ('59', 'CheckUpdateYDOQ053003330113150', 'CPS-10018', '5', '5');
INSERT INTO `checkdetail` VALUES ('60', 'Check060108580391540', 'CPS-10003', '0', '22');
INSERT INTO `checkdetail` VALUES ('61', 'Check060108580391540', 'CPS-10004', '0', '12');
INSERT INTO `checkdetail` VALUES ('64', 'Check060108590092636', 'CPS-10003', '22', '22');
INSERT INTO `checkdetail` VALUES ('65', 'Check060108590092636', 'CPS-10004', '12', '12');
INSERT INTO `checkdetail` VALUES ('76', 'Check060109570072797', 'CPS-10003', '11', '22');
INSERT INTO `checkdetail` VALUES ('77', 'Check060109570072797', 'CPS-10004', '12', '12');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cus_name` varchar(50) NOT NULL,
  `Cus_address` varchar(100) NOT NULL,
  `Cus_phone` varchar(50) NOT NULL,
  `PostalCode` varchar(50) DEFAULT NULL,
  `Cus_contact` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18393 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('18392', '哈哈哈', '徐州市', '2938372', '221000', '战汉');

-- ----------------------------
-- Table structure for customerpayment
-- ----------------------------
DROP TABLE IF EXISTS `customerpayment`;
CREATE TABLE `customerpayment` (
  `CP_id` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_id` int(11) NOT NULL,
  `SalesOrder_id` varchar(30) NOT NULL,
  `FPaymentAmount` varchar(0) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `FPaymentTime` date DEFAULT NULL,
  `FPaymentStatus` varchar(0) DEFAULT NULL,
  `LPaymentAmount` varchar(0) DEFAULT NULL,
  `LPaymentTime` date DEFAULT NULL,
  `LPaymentStatus` varchar(0) DEFAULT NULL,
  PRIMARY KEY (`CP_id`),
  KEY `FK_FK_CPayment_SalesOrder` (`SalesOrder_id`),
  KEY `FK_FK_Payment_Customer` (`Customer_id`),
  CONSTRAINT `FK_FK_CPayment_SalesOrder` FOREIGN KEY (`SalesOrder_id`) REFERENCES `salesorder` (`SO_id`),
  CONSTRAINT `FK_FK_Payment_Customer` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customerpayment
-- ----------------------------

-- ----------------------------
-- Table structure for damagedrequest
-- ----------------------------
DROP TABLE IF EXISTS `damagedrequest`;
CREATE TABLE `damagedrequest` (
  `DamagedRequest_id` varchar(30) NOT NULL,
  `RequestEmpId` varchar(30) NOT NULL,
  `RequestTime` datetime NOT NULL,
  `DamagedStoreHouse` int(11) NOT NULL,
  `DeptReviewStatus` int(11) DEFAULT NULL,
  `DeptReviewEmp` varchar(30) DEFAULT NULL,
  `DeptReviewTime` datetime DEFAULT NULL,
  `DeptReviewReason` varchar(255) DEFAULT NULL,
  `DamagedReason` varchar(255) NOT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `OrderStatus` int(8) DEFAULT '1',
  PRIMARY KEY (`DamagedRequest_id`),
  KEY `FK_RequestEmp_Emp` (`RequestEmpId`),
  KEY `FK_DamagedStore_Store` (`DamagedStoreHouse`),
  KEY `FK_DeptReStatus` (`DeptReviewStatus`),
  KEY `FK_DeptReEmp_Emp` (`DeptReviewEmp`),
  CONSTRAINT `FK_DamagedStore_Store` FOREIGN KEY (`DamagedStoreHouse`) REFERENCES `storehouse` (`StoreHouse_id`),
  CONSTRAINT `FK_DeptReEmp_Emp` FOREIGN KEY (`DeptReviewEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_DeptReStatus` FOREIGN KEY (`DeptReviewStatus`) REFERENCES `reviewstatus` (`RS_id`),
  CONSTRAINT `FK_RequestEmp_Emp` FOREIGN KEY (`RequestEmpId`) REFERENCES `employee` (`EmpLoginName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of damagedrequest
-- ----------------------------
INSERT INTO `damagedrequest` VALUES ('BS053110320125820', 'wade', '2018-05-31 22:32:12', '1', '1', null, null, null, '阿斯蒂芬', '似懂非懂', '1');
INSERT INTO `damagedrequest` VALUES ('BS053110560571257', 'wade', '2018-05-31 22:57:13', '3', '1', null, null, null, '阿斯顿', '阿斯顿', '1');
INSERT INTO `damagedrequest` VALUES ('BS053110580288570', 'wade', '2018-05-31 22:58:34', '1', '1', null, null, null, '阿斯顿', '阿斯顿', '1');
INSERT INTO `damagedrequest` VALUES ('BS053111120145443', 'wade', '2018-05-31 23:12:59', '2', '2', 'wade', '2018-06-01 07:11:43', '今天周二', '爱上大声地说地方就跟你开始的咖啡色抵抗力放假收付款了关键是的角色地离开过就死掉了卡缴费刷卡龙卷风速度快了飞机是的深咖啡你速度快了凤凰将速度快放寒假刷卡单交话费扩散到合肥速度快恢复速度快解放速度快解放华', '阿斯顿阿三', '7');
INSERT INTO `damagedrequest` VALUES ('BS060101330049599', 'liangwei', '2018-06-01 13:33:28', '3', '1', null, null, null, 'asdsadas', 'asdsadsad', '3');
INSERT INTO `damagedrequest` VALUES ('BS060102520161162', 'wade', '2018-06-01 14:53:14', '1', '2', 'wade', '2018-06-01 14:53:53', '阿飞', '实打实', '大声地', '9');
INSERT INTO `damagedrequest` VALUES ('BSAVYZ053002520494425', 'wade', '2018-05-30 14:52:50', '3', '1', null, null, null, 'ouvubervnvovwevsceew', 'rewjmcmweiojmewoi', '1');
INSERT INTO `damagedrequest` VALUES ('BSGPFQ052805420027859', 'wade', '2018-05-28 05:42:03', '2', '1', null, null, null, 'sdf', 'sdf', '1');
INSERT INTO `damagedrequest` VALUES ('BSKPOR052805410024926', 'wade', '2018-05-28 05:41:02', '4', '1', null, null, null, 'asdf ', 'sdf ', '1');
INSERT INTO `damagedrequest` VALUES ('BSLBWE052810250437033', 'wade', '2018-05-28 10:25:44', '2', '1', null, null, null, 'sad', 'asd', '1');
INSERT INTO `damagedrequest` VALUES ('BSLRDJ052805400287608', 'wade', '2018-05-28 05:40:28', '4', '1', null, null, null, '11', '11', '3');
INSERT INTO `damagedrequest` VALUES ('BSUYEN052804280408071', 'wade', '2018-05-28 04:28:40', '1', '1', null, null, null, '2222222', '1111111111111', '1');
INSERT INTO `damagedrequest` VALUES ('BSWOEK052805420478653', 'wade', '2018-05-28 05:42:47', '2', '2', 'wade', '2018-05-31 23:58:30', '实得分', 'sdf', 'sdf', '9');
INSERT INTO `damagedrequest` VALUES ('BSXOFR052805410385366', 'wade', '2018-05-28 05:41:39', '2', '2', 'wade', '2018-05-28 05:46:48', 'asdf', 'qq', 'qq', '9');

-- ----------------------------
-- Table structure for damagedrequestdetail
-- ----------------------------
DROP TABLE IF EXISTS `damagedrequestdetail`;
CREATE TABLE `damagedrequestdetail` (
  `DRD_id` int(8) NOT NULL AUTO_INCREMENT,
  `DamaagedRequest_id` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Count` int(8) NOT NULL,
  `ProductUnit_id` int(8) NOT NULL,
  PRIMARY KEY (`DRD_id`),
  KEY `FK_DamagedId_Damaged` (`DamaagedRequest_id`),
  KEY `FK_Product_Product` (`Product_id`),
  KEY `FK_Unit_Unit` (`ProductUnit_id`),
  CONSTRAINT `FK_DamagedId_Damaged` FOREIGN KEY (`DamaagedRequest_id`) REFERENCES `damagedrequest` (`DamagedRequest_id`),
  CONSTRAINT `FK_Product_Product` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_Unit_Unit` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of damagedrequestdetail
-- ----------------------------
INSERT INTO `damagedrequestdetail` VALUES ('17', 'BSUYEN052804280408071', 'CPS-10003', '11', '3');
INSERT INTO `damagedrequestdetail` VALUES ('22', 'BSLRDJ052805400287608', 'CPS-10001', '2', '1');
INSERT INTO `damagedrequestdetail` VALUES ('23', 'BSKPOR052805410024926', 'CPS-10001', '3', '1');
INSERT INTO `damagedrequestdetail` VALUES ('24', 'BSXOFR052805410385366', 'CPS-10001', '1', '5');
INSERT INTO `damagedrequestdetail` VALUES ('26', 'BSGPFQ052805420027859', 'CPS-10001', '1', '5');
INSERT INTO `damagedrequestdetail` VALUES ('27', 'BSWOEK052805420478653', 'CPS-10001', '2', '5');
INSERT INTO `damagedrequestdetail` VALUES ('29', 'BSLBWE052810250437033', 'CPS-10001', '1', '5');
INSERT INTO `damagedrequestdetail` VALUES ('30', 'BSAVYZ053002520494425', 'CPS-10018', '1', '4');
INSERT INTO `damagedrequestdetail` VALUES ('31', 'BS053110320125820', 'CPS-10003', '2', '3');
INSERT INTO `damagedrequestdetail` VALUES ('32', 'BS053110320125820', 'CPS-10004', '2', '4');
INSERT INTO `damagedrequestdetail` VALUES ('33', 'BS053111120145443', 'CPS-10001', '2', '5');
INSERT INTO `damagedrequestdetail` VALUES ('34', 'BS060101330049599', 'CPS-10018', '1', '4');
INSERT INTO `damagedrequestdetail` VALUES ('35', 'BS060102520161162', 'CPS-10003', '1', '3');

-- ----------------------------
-- Table structure for dept
-- ----------------------------
DROP TABLE IF EXISTS `dept`;
CREATE TABLE `dept` (
  `DeptId` int(11) NOT NULL AUTO_INCREMENT,
  `DeptName` varchar(20) NOT NULL,
  `DeptDes` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`DeptId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dept
-- ----------------------------
INSERT INTO `dept` VALUES ('1', '财务部', '分发工资 做账');
INSERT INTO `dept` VALUES ('2', '仓库管理部', '管理仓库');
INSERT INTO `dept` VALUES ('3', '销售部', '跑业务 拉客户');
INSERT INTO `dept` VALUES ('4', '采购部', '和供应商洽谈 采购货物');
INSERT INTO `dept` VALUES ('5', '董事', '拥有最高权限');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `EmpLoginName` varchar(30) NOT NULL,
  `EmpLoginPwd` varchar(60) NOT NULL,
  `EmpName` varchar(30) NOT NULL,
  `DeptId` int(11) NOT NULL,
  `JoinDate` date NOT NULL,
  `Gender` varchar(2) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`EmpLoginName`),
  KEY `FK_FK_EMP_DEPT` (`DeptId`),
  CONSTRAINT `FK_FK_EMP_DEPT` FOREIGN KEY (`DeptId`) REFERENCES `dept` (`DeptId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('james', '202cb962ac59075b964b07152d234b70', '詹姆斯', '4', '2010-02-01', '男', '1994-06-14', '江苏省南京市', '17683728192', 'abc@163.com');
INSERT INTO `employee` VALUES ('jinying', '202cb962ac59075b964b07152d234b70', '煞笔', '1', '2018-04-09', '男', '2018-04-09', '阿双方打底衫', '23847636', '454dfd');
INSERT INTO `employee` VALUES ('Jordan', '202cb962ac59075b964b07152d234b70', '乔丹', '4', '2018-04-02', '女', '2015-11-11', '美国洛杉矶', '19383734', '837344593@qq.com');
INSERT INTO `employee` VALUES ('liangwei', '202cb962ac59075b964b07152d234b70', '梁玮', '2', '2018-06-08', '男', '2018-06-02', '美国洛杉矶', '19383734', '837344593@qq.com');
INSERT INTO `employee` VALUES ('liuchang', '202cb962ac59075b964b07152d234b70', '刘畅', '1', '2018-06-02', '男', '2018-06-02', '123', '19383734', '525491994@qq.com');
INSERT INTO `employee` VALUES ('lixiaoqing', '202cb962ac59075b964b07152d234b70', '李晓擎', '2', '2018-06-02', '男', '2018-06-02', '美国洛杉矶', '19383734', '525491994@qq.com');
INSERT INTO `employee` VALUES ('rose', '202cb962ac59075b964b07152d234b70', '罗斯', '3', '2015-03-04', '男', '1991-06-04', '徐州泉山区', '19787283921', '5241593@qq.com');
INSERT INTO `employee` VALUES ('wade', '202cb962ac59075b964b07152d234b70', '哓擎', '3', '2016-10-26', '男', '1996-04-16', '江苏省徐州市', '18796284434', 'lxq413@126.com');
INSERT INTO `employee` VALUES ('地说道', '6c5f39d2bdeb2cc27b3f932a6e84e7da', '123', '3', '2018-05-01', '女', '2018-05-02', '美国洛杉矶', '19383734撒阿斯顿', '亲亲温情');

-- ----------------------------
-- Table structure for employeerole
-- ----------------------------
DROP TABLE IF EXISTS `employeerole`;
CREATE TABLE `employeerole` (
  `EmployeeRoleId` int(11) NOT NULL AUTO_INCREMENT,
  `RoleId` int(11) NOT NULL,
  `EmpLoginName` varchar(30) NOT NULL,
  PRIMARY KEY (`EmployeeRoleId`),
  KEY `FK_Role` (`RoleId`),
  KEY `FK_Emp` (`EmpLoginName`),
  CONSTRAINT `FK_Emp` FOREIGN KEY (`EmpLoginName`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_Role` FOREIGN KEY (`RoleId`) REFERENCES `role` (`RoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employeerole
-- ----------------------------
INSERT INTO `employeerole` VALUES ('9', '2', 'wade');
INSERT INTO `employeerole` VALUES ('10', '3', 'wade');
INSERT INTO `employeerole` VALUES ('11', '4', 'wade');
INSERT INTO `employeerole` VALUES ('12', '5', 'wade');
INSERT INTO `employeerole` VALUES ('13', '6', 'wade');
INSERT INTO `employeerole` VALUES ('15', '8', 'wade');
INSERT INTO `employeerole` VALUES ('16', '9', 'wade');
INSERT INTO `employeerole` VALUES ('20', '4', 'james');
INSERT INTO `employeerole` VALUES ('21', '5', 'james');
INSERT INTO `employeerole` VALUES ('22', '5', 'jinying');
INSERT INTO `employeerole` VALUES ('23', '5', 'liangwei');
INSERT INTO `employeerole` VALUES ('24', '5', 'lixiaoqing');
INSERT INTO `employeerole` VALUES ('25', '5', 'liuchang');

-- ----------------------------
-- Table structure for enterstock
-- ----------------------------
DROP TABLE IF EXISTS `enterstock`;
CREATE TABLE `enterstock` (
  `EnterStock_id` varchar(30) NOT NULL,
  `StoreHouse_id` int(11) NOT NULL,
  `Employee_id` varchar(30) NOT NULL,
  `EnterDate` datetime NOT NULL,
  `EnterStockType_id` int(11) NOT NULL,
  `UpstreamNo` varchar(30) DEFAULT NULL,
  `ReviewEmp` varchar(30) DEFAULT NULL,
  `ReviewDate` datetime DEFAULT NULL,
  `ReviewStatus` int(11) DEFAULT NULL,
  `ReviewReason` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EnterStock_id`),
  KEY `FK_FK_EnterStoreEmp_Emp` (`Employee_id`),
  KEY `FK_FK_EnterStore_Store` (`StoreHouse_id`),
  KEY `FK_FK_EnterStore_Type` (`EnterStockType_id`),
  KEY `FK_ReviewEmp_Emp` (`ReviewEmp`),
  KEY `FK_ReviewStatus` (`ReviewStatus`),
  CONSTRAINT `FK_FK_EnterStoreEmp_Emp` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_EnterStore_Store` FOREIGN KEY (`StoreHouse_id`) REFERENCES `storehouse` (`StoreHouse_id`),
  CONSTRAINT `FK_FK_EnterStore_Type` FOREIGN KEY (`EnterStockType_id`) REFERENCES `enterstocktype` (`EST_id`),
  CONSTRAINT `FK_ReviewEmp_Emp` FOREIGN KEY (`ReviewEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_ReviewStatus` FOREIGN KEY (`ReviewStatus`) REFERENCES `reviewstatus` (`RS_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enterstock
-- ----------------------------
INSERT INTO `enterstock` VALUES ('RK060102210035413', '1', 'james', '2018-06-01 14:21:40', '1', 'CG060102150435342', 'wade', '2018-06-01 14:22:17', '2', 'sdfd', '今天周二');
INSERT INTO `enterstock` VALUES ('RK060106470096542', '1', 'jinying', '2018-06-01 00:00:00', '1', 'CG060106420425730', 'wade', '2018-06-01 06:50:10', '2', '对方的', '今天周二');
INSERT INTO `enterstock` VALUES ('RK060106500439956', '1', 'james', '2018-06-01 06:50:44', '1', 'CGKLBP053002280091276', 'wade', '2018-06-01 07:08:03', '2', '是的', '地方官');
INSERT INTO `enterstock` VALUES ('RK060107070217220', '1', 'james', '2018-06-01 07:07:47', '1', 'CGKLBP053002280091276', 'wade', '2018-06-01 07:07:56', '2', '阿三', '今天周二');
INSERT INTO `enterstock` VALUES ('RKAYQL052801000409211', '1', 'james', '2018-05-28 00:00:00', '1', 'CGKYBL052810180424632', 'wade', '2018-05-28 13:00:51', '2', 'sdf', 'dfd');
INSERT INTO `enterstock` VALUES ('RKCRZL052810420412341', '1', 'james', '2018-05-28 00:00:00', '1', 'CGUFLR052810190568925', 'wade', '2018-05-28 10:43:02', '2', 'df', 'df');
INSERT INTO `enterstock` VALUES ('RKGACL052811030461511', '1', 'james', '2018-05-28 00:00:00', '3', 'DBPRPU052810390537246', 'wade', '2018-06-01 07:08:09', '2', '刚发的', '');
INSERT INTO `enterstock` VALUES ('RKGLLY053002320378072', '2', 'james', '2018-05-30 00:00:00', '1', 'CGCOJQ053002310265704', 'wade', '2018-05-30 14:33:45', '2', 'gg', 'Georgia');
INSERT INTO `enterstock` VALUES ('RKNACU052810320314194', '1', 'james', '2018-05-28 00:00:00', '1', 'CGRCTQ041910080064518', null, null, '1', null, '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈');
INSERT INTO `enterstock` VALUES ('RKXDKT052810320584401', '1', 'james', '2018-05-28 00:00:00', '2', 'THHS8e738373584748', 'wade', '2018-06-01 07:08:14', '2', '是的', '实得分');

-- ----------------------------
-- Table structure for enterstockdetail
-- ----------------------------
DROP TABLE IF EXISTS `enterstockdetail`;
CREATE TABLE `enterstockdetail` (
  `SP_id` int(11) NOT NULL AUTO_INCREMENT,
  `EnterStock_id` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Product_count` int(11) NOT NULL,
  `Product_price` decimal(10,0) NOT NULL,
  `ProductUnit_id` int(11) NOT NULL,
  `ShouldCount` int(11) NOT NULL,
  PRIMARY KEY (`SP_id`),
  KEY `FK_EnterStoreDetail_Product` (`Product_id`),
  KEY `FK_EnterStore_EnterStoreDetail` (`EnterStock_id`),
  KEY `FK_ProductUnit_Unit` (`ProductUnit_id`),
  CONSTRAINT `FK_EnterStoreDetail_Product` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_EnterStore_EnterStoreDetail` FOREIGN KEY (`EnterStock_id`) REFERENCES `enterstock` (`EnterStock_id`),
  CONSTRAINT `FK_ProductUnit_Unit` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enterstockdetail
-- ----------------------------
INSERT INTO `enterstockdetail` VALUES ('1', 'RKNACU052810320314194', 'CPS-10004', '1', '0', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('2', 'RKNACU052810320314194', 'CPS-10002', '2', '0', '6', '2');
INSERT INTO `enterstockdetail` VALUES ('3', 'RKNACU052810320314194', 'CPS-10003', '3', '0', '6', '3');
INSERT INTO `enterstockdetail` VALUES ('4', 'RKNACU052810320314194', 'CPS-10034', '4', '0', '4', '4');
INSERT INTO `enterstockdetail` VALUES ('5', 'RKNACU052810320314194', 'CPS-11084', '5', '0', '2', '5');
INSERT INTO `enterstockdetail` VALUES ('6', 'RKXDKT052810320584401', 'CPS-10001', '2', '0', '1', '2');
INSERT INTO `enterstockdetail` VALUES ('7', 'RKXDKT052810320584401', 'CPS-10003', '2', '0', '2', '2');
INSERT INTO `enterstockdetail` VALUES ('13', 'RKCRZL052810420412341', 'CPS-10001', '1', '123', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('17', 'RKGACL052811030461511', 'CPS-10001', '1', '0', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('18', 'RKGACL052811030461511', 'CPS-10002', '1', '0', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('19', 'RKGACL052811030461511', 'CPS-10003', '1', '0', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('20', 'RKAYQL052801000409211', 'CPS-10002', '1', '66', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('21', 'RKGLLY053002320378072', 'CPS-10001', '1', '3', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('22', 'RK060106470096542', 'CPS-10001', '1', '2', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('23', 'RK060106470096542', 'CPS-10002', '1', '2', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('24', 'RK060106470096542', 'CPS-10003', '1', '3', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('25', 'RK060106500439956', 'CPS-10001', '1', '45', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('26', 'RK060107070217220', 'CPS-10001', '1', '45', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('27', 'RK060102210035413', 'CPS-10001', '1', '1', '1', '1');
INSERT INTO `enterstockdetail` VALUES ('28', 'RK060102210035413', 'CPS-10002', '1', '1', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('29', 'RK060102210035413', 'CPS-10003', '1', '2', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('30', 'RK060102210035413', 'CPS-10004', '1', '3', '6', '1');
INSERT INTO `enterstockdetail` VALUES ('31', 'RK060102210035413', 'CPS-10018', '1', '4', '6', '1');

-- ----------------------------
-- Table structure for enterstocktype
-- ----------------------------
DROP TABLE IF EXISTS `enterstocktype`;
CREATE TABLE `enterstocktype` (
  `EST_id` int(11) NOT NULL AUTO_INCREMENT,
  `EST_name` varchar(20) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`EST_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enterstocktype
-- ----------------------------
INSERT INTO `enterstocktype` VALUES ('1', '采购入库', '从供应商进货入库');
INSERT INTO `enterstocktype` VALUES ('2', '退货入库', '客户退货');
INSERT INTO `enterstocktype` VALUES ('3', '调拨入库', '调拨入得');

-- ----------------------------
-- Table structure for leavestock
-- ----------------------------
DROP TABLE IF EXISTS `leavestock`;
CREATE TABLE `leavestock` (
  `LS_id` varchar(30) NOT NULL,
  `Employee_id` varchar(30) NOT NULL,
  `StoreHouse_id` int(11) NOT NULL,
  `LeaveStock_time` date NOT NULL,
  `LeaveStockType_id` int(11) NOT NULL,
  `UpstreamNo` varchar(30) NOT NULL,
  `ReviewEmp` varchar(50) DEFAULT NULL,
  `ReviewDate` datetime DEFAULT NULL,
  `ReviewStatus` int(11) DEFAULT NULL,
  `ReviewReason` varchar(300) DEFAULT NULL,
  `Remark` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`LS_id`),
  KEY `FK_FK_LeaveStoreEmp_Emp` (`Employee_id`),
  KEY `FK_FK_LeaveStore_Store` (`StoreHouse_id`),
  KEY `FK_FK_OutStore_OutStoreType` (`LeaveStockType_id`),
  CONSTRAINT `FK_FK_LeaveStoreEmp_Emp` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_LeaveStore_Store` FOREIGN KEY (`StoreHouse_id`) REFERENCES `storehouse` (`StoreHouse_id`),
  CONSTRAINT `FK_FK_OutStore_OutStoreType` FOREIGN KEY (`LeaveStockType_id`) REFERENCES `leavestocktype` (`LST_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of leavestock
-- ----------------------------
INSERT INTO `leavestock` VALUES ('qq', 'wade', '1', '2018-05-30', '5', 'wfdsf', null, null, '1', null, 'sdfsdf');

-- ----------------------------
-- Table structure for leavestockdetail
-- ----------------------------
DROP TABLE IF EXISTS `leavestockdetail`;
CREATE TABLE `leavestockdetail` (
  `LSD_id` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveStock_id` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Product_count` int(11) NOT NULL,
  `Product_price` decimal(10,0) NOT NULL,
  `ProductUnit_id` int(11) NOT NULL,
  `ShouidCount` int(11) NOT NULL,
  PRIMARY KEY (`LSD_id`),
  KEY `FK_LeaveStoreDetail_Product` (`Product_id`),
  KEY `FK_LeaveStore_LeaveStoreDetail` (`LeaveStock_id`),
  KEY `FK_ProductUnit_PUnit` (`ProductUnit_id`),
  CONSTRAINT `FK_LeaveStoreDetail_Product` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_LeaveStore_LeaveStoreDetail` FOREIGN KEY (`LeaveStock_id`) REFERENCES `leavestock` (`LS_id`),
  CONSTRAINT `FK_ProductUnit_PUnit` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of leavestockdetail
-- ----------------------------
INSERT INTO `leavestockdetail` VALUES ('2', 'qq', 'CPS-10001', '11', '111', '1', '11');
INSERT INTO `leavestockdetail` VALUES ('3', 'qq', 'CPS-10001', '11', '1111', '1', '11');
INSERT INTO `leavestockdetail` VALUES ('4', 'qq', 'CPS-10001', '11', '111111', '1', '11');
INSERT INTO `leavestockdetail` VALUES ('5', 'qq', 'CPS-10004', '11', '11', '3', '12');

-- ----------------------------
-- Table structure for leavestocktype
-- ----------------------------
DROP TABLE IF EXISTS `leavestocktype`;
CREATE TABLE `leavestocktype` (
  `LST_id` int(11) NOT NULL AUTO_INCREMENT,
  `LST_name` varchar(20) NOT NULL,
  `LST_des` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`LST_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of leavestocktype
-- ----------------------------
INSERT INTO `leavestocktype` VALUES ('3', '报损出库', '货物报损');
INSERT INTO `leavestocktype` VALUES ('5', '调拨出库', '调拨');

-- ----------------------------
-- Table structure for permission
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `Permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `PermissionDesc` varchar(255) NOT NULL,
  `PermissionUrl` varchar(255) NOT NULL,
  `IsNavi` int(11) NOT NULL,
  `PermissionCode` varchar(255) NOT NULL,
  PRIMARY KEY (`Permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of permission
-- ----------------------------
INSERT INTO `permission` VALUES ('1', '采购单', '/gopurchase', '1', 'purchase:list');
INSERT INTO `permission` VALUES ('2', '添加采购单', '/goPurchaseRequest', '0', 'purchase:add');
INSERT INTO `permission` VALUES ('3', '修改采购单', '/goPurchaseUpdate', '0', 'purchase:update');
INSERT INTO `permission` VALUES ('4', '部门审核采购单', '/deptReview', '0', 'purchase:deptreview');
INSERT INTO `permission` VALUES ('5', '财务审核采购单', '/finalReview', '0', 'purchase:finalreview');
INSERT INTO `permission` VALUES ('6', '删除采购单', '/deletePurchases', '0', 'purchase:delete');
INSERT INTO `permission` VALUES ('7', '查看角色', '/goRole', '0', 'role:list');
INSERT INTO `permission` VALUES ('8', '添加角色', '/goRoleAdd', '0', 'role:add');
INSERT INTO `permission` VALUES ('9', '删除角色', '/goRoleDelete', '0', 'role:delete');
INSERT INTO `permission` VALUES ('10', '修改角色', '/goRoleUpdate', '0', 'role:update');
INSERT INTO `permission` VALUES ('11', '查看员工', '/goEmployee', '0', 'employee:list');
INSERT INTO `permission` VALUES ('12', '添加员工', '/goEmployeeAdd', '0', 'employee:add');
INSERT INTO `permission` VALUES ('13', '修改员工', '/goEmployeeUpdate', '0', 'employee:update');
INSERT INTO `permission` VALUES ('14', '删除员工', '/goEmployeeDelete', '0', 'employee:delete');
INSERT INTO `permission` VALUES ('15', '销售单', '/gosales', '1', 'sales:list');
INSERT INTO `permission` VALUES ('16', '新增销售单', '/goSalesAdd', '0', 'sales:add');
INSERT INTO `permission` VALUES ('17', '修改销售单', '/goSalesUpdate', '0', 'sales:update');
INSERT INTO `permission` VALUES ('18', '删除销售单', '/goSalesDelete', '0', 'sales:delete');
INSERT INTO `permission` VALUES ('19', '审核销售单', '/goSalesReview', '0', 'sales:review');
INSERT INTO `permission` VALUES ('20', '报损单', '/godamaged', '1', 'damaged:list');
INSERT INTO `permission` VALUES ('21', '新增报损单', '/goDamagedAdd', '0', 'damaged:add');
INSERT INTO `permission` VALUES ('22', '修改报损单', '/goDamagedUpdate', '0', 'damaged:update');
INSERT INTO `permission` VALUES ('23', '删除报损单', '/goDamagedDelete', '0', 'damaged:delete');
INSERT INTO `permission` VALUES ('24', '审核报损单', '/goDamagedReview', '0', 'damaged:review');
INSERT INTO `permission` VALUES ('25', '入库单', '/goenterstock', '1', 'enterstock:list');
INSERT INTO `permission` VALUES ('26', '新增入库单', '/goEnterStockAdd', '0', 'enterstock:add');
INSERT INTO `permission` VALUES ('27', '修改入库单', '/goEnterStockUpdate', '0', 'enterstock:update');
INSERT INTO `permission` VALUES ('28', '删除入库单', '/goEnterStockDelete', '0', 'enterstock:delete');
INSERT INTO `permission` VALUES ('29', '审核入库单', '/goEnterStockReview', '0', 'enterstock:review');
INSERT INTO `permission` VALUES ('30', '调拨单', '/gorequisition', '1', 'requisition:review');
INSERT INTO `permission` VALUES ('31', '新增调拨单', '/goRequisitionAdd', '0', 'requisition:add');
INSERT INTO `permission` VALUES ('32', '修改调拨单', '/goRequisitionUpdate', '0', 'requisition:update');
INSERT INTO `permission` VALUES ('33', '删除调拨单', '/goRequisitionDelete', '0', 'requisition:delete');
INSERT INTO `permission` VALUES ('34', '审核调拨单', '/goRequisitionReview', '0', 'requisition:review');
INSERT INTO `permission` VALUES ('35', '资源管理', '/gopermission', '0', 'permission:list');
INSERT INTO `permission` VALUES ('36', '新增资源', '/gopermissionAdd', '0', 'permission:add');
INSERT INTO `permission` VALUES ('37', '修改资源', '/gopermissionUpdate', '0', 'permission:update');
INSERT INTO `permission` VALUES ('38', '删除资源', '/gopermissionDelete', '0', 'permission:delete');
INSERT INTO `permission` VALUES ('39', '库存信息', '/goStockPile', '1', 'stockpile:list');
INSERT INTO `permission` VALUES ('40', '财务管理', '/goFinance', '0', 'finance:list');
INSERT INTO `permission` VALUES ('41', '盘点管理', '/goCheck', '1', 'check:list');
INSERT INTO `permission` VALUES ('42', '新增盘点', '/goCheckAdd', '0', 'check:add');
INSERT INTO `permission` VALUES ('43', '修改盘点', '/goCheckUpdate', '0', 'check:update');
INSERT INTO `permission` VALUES ('44', '删除盘点', '/goCheckDelete', '0', 'check:delete');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `Product_id` varchar(30) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `ProductType_id` int(11) NOT NULL,
  `ProductUnit_id` int(11) NOT NULL,
  `Employee_id` varchar(30) NOT NULL,
  `CreateDate` date NOT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `FK_FK_PRO_PROUNIT` (`ProductUnit_id`),
  KEY `FK_PRO_PROTYPE` (`ProductType_id`),
  KEY `FK_Pro_Emp` (`Employee_id`),
  CONSTRAINT `FK_FK_PRO_PROUNIT` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`),
  CONSTRAINT `FK_PRO_PROTYPE` FOREIGN KEY (`ProductType_id`) REFERENCES `producttype` (`ProductType_id`),
  CONSTRAINT `FK_Pro_Emp` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`EmpLoginName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('CPS-10001', '旋转叶片', '1', '1', 'wade', '2016-03-10');
INSERT INTO `product` VALUES ('CPS-10002', '螺栓12mm', '4', '6', 'rose', '2010-02-09');
INSERT INTO `product` VALUES ('CPS-10003', '螺栓13mm', '4', '6', 'rose', '2010-02-09');
INSERT INTO `product` VALUES ('CPS-10004', '螺帽12mm', '4', '6', 'james', '2018-01-30');
INSERT INTO `product` VALUES ('CPS-10018', '螺帽13mm', '4', '6', 'wade', '2018-03-22');
INSERT INTO `product` VALUES ('CPS-10034', '滑轮轴承', '8', '4', 'rose', '2018-03-20');
INSERT INTO `product` VALUES ('CPS-11084', '固定叶片', '3', '2', 'rose', '2018-03-20');
INSERT INTO `product` VALUES ('CPS-21908', '压力框架', '2', '2', 'rose', '2018-03-15');

-- ----------------------------
-- Table structure for producttype
-- ----------------------------
DROP TABLE IF EXISTS `producttype`;
CREATE TABLE `producttype` (
  `ProductType_id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductType_name` varchar(50) NOT NULL,
  `Remark` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ProductType_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producttype
-- ----------------------------
INSERT INTO `producttype` VALUES ('1', '分离器', null);
INSERT INTO `producttype` VALUES ('2', '磨盘部', '啊啊啊');
INSERT INTO `producttype` VALUES ('3', '加压装置', null);
INSERT INTO `producttype` VALUES ('4', '中架体部', null);
INSERT INTO `producttype` VALUES ('5', '喷嘴环部', null);
INSERT INTO `producttype` VALUES ('6', '轴套', null);
INSERT INTO `producttype` VALUES ('7', '轮胎', null);
INSERT INTO `producttype` VALUES ('8', '轴承', null);

-- ----------------------------
-- Table structure for productunit
-- ----------------------------
DROP TABLE IF EXISTS `productunit`;
CREATE TABLE `productunit` (
  `ProductUnit_id` int(11) NOT NULL AUTO_INCREMENT,
  `PU_name` varchar(30) NOT NULL,
  `PU_des` varchar(200) DEFAULT NULL,
  `Employee_id` varchar(30) NOT NULL,
  `CreateTime` date NOT NULL,
  PRIMARY KEY (`ProductUnit_id`),
  KEY `FK_ProductUnit_Emp` (`Employee_id`),
  CONSTRAINT `FK_ProductUnit_Emp` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`EmpLoginName`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productunit
-- ----------------------------
INSERT INTO `productunit` VALUES ('1', '架', '啊啊啊', 'wade', '2010-02-02');
INSERT INTO `productunit` VALUES ('2', '台', '阿斯顿飞洒地方；林肯郡', 'wade', '2010-02-02');
INSERT INTO `productunit` VALUES ('3', '个', '不不不', 'james', '2010-02-02');
INSERT INTO `productunit` VALUES ('4', '包', '吃吃吃', 'wade', '2010-02-02');
INSERT INTO `productunit` VALUES ('5', '捆', '对对对', 'wade', '2010-02-02');
INSERT INTO `productunit` VALUES ('6', '箱', '啊啊啊', 'rose', '2010-02-02');

-- ----------------------------
-- Table structure for purchasepaymentslip
-- ----------------------------
DROP TABLE IF EXISTS `purchasepaymentslip`;
CREATE TABLE `purchasepaymentslip` (
  `PPS_id` varchar(30) NOT NULL,
  `PRD_id` varchar(30) NOT NULL,
  `Supplier_id` varchar(30) NOT NULL,
  `FEmployee_id` varchar(30) DEFAULT NULL,
  `FPayment_time` date DEFAULT NULL,
  `FPayment_amount` decimal(10,0) DEFAULT NULL,
  `FPayment_status` varchar(30) DEFAULT NULL,
  `FReviewEmp_id` varchar(30) DEFAULT NULL,
  `FReviewTime` date DEFAULT NULL,
  `FReviewStatus` int(11) DEFAULT NULL,
  `LEmployee_id` varchar(30) DEFAULT NULL,
  `LPayment_time` date DEFAULT NULL,
  `LPayment_amount` decimal(10,0) DEFAULT NULL,
  `LPayment_status` varchar(30) DEFAULT NULL,
  `LReviewEmp_id` varchar(30) DEFAULT NULL,
  `LReviewTime` date DEFAULT NULL,
  `LReviewStatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`PPS_id`),
  KEY `FK_FK_PurchasePamentFirstReview` (`FReviewStatus`),
  KEY `FK_FK_PurchasePayFirstReviewEmp_Emp` (`FReviewEmp_id`),
  KEY `FK_FK_PurchasePaymentFirstPay` (`FEmployee_id`),
  KEY `FK_FK_PurchasePaymentLastPay` (`LEmployee_id`),
  KEY `FK_FK_PurchasePaymentLastReviewStatus` (`LReviewStatus`),
  KEY `FK_FK_PurchasePaymentLastReview_Emp` (`LReviewEmp_id`),
  KEY `FK_FK_PurchasePayment_PurchaseRequisition` (`PRD_id`),
  KEY `FK_FK_PurchasePayment_Supplier` (`Supplier_id`),
  CONSTRAINT `FK_FK_PurchasePamentFirstReview` FOREIGN KEY (`FReviewStatus`) REFERENCES `reviewstatus` (`RS_id`),
  CONSTRAINT `FK_FK_PurchasePayFirstReviewEmp_Emp` FOREIGN KEY (`FReviewEmp_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_PurchasePaymentFirstPay` FOREIGN KEY (`FEmployee_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_PurchasePaymentLastPay` FOREIGN KEY (`LEmployee_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_PurchasePaymentLastReviewStatus` FOREIGN KEY (`LReviewStatus`) REFERENCES `reviewstatus` (`RS_id`),
  CONSTRAINT `FK_FK_PurchasePaymentLastReview_Emp` FOREIGN KEY (`LReviewEmp_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_PurchasePayment_PurchaseRequisition` FOREIGN KEY (`PRD_id`) REFERENCES `purchaserequest` (`PurchaseRequest_id`),
  CONSTRAINT `FK_FK_PurchasePayment_Supplier` FOREIGN KEY (`Supplier_id`) REFERENCES `supplier` (`Supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of purchasepaymentslip
-- ----------------------------

-- ----------------------------
-- Table structure for purchaserequest
-- ----------------------------
DROP TABLE IF EXISTS `purchaserequest`;
CREATE TABLE `purchaserequest` (
  `PurchaseRequest_id` varchar(30) NOT NULL,
  `RequestEmpId` varchar(30) NOT NULL,
  `RequestTime` datetime NOT NULL,
  `Supplier_id` varchar(30) NOT NULL,
  `SuppContact` varchar(30) DEFAULT NULL,
  `SuppPhone` varchar(30) DEFAULT NULL,
  `DeptReviewStatus` int(11) DEFAULT NULL,
  `DeptReviewTime` datetime DEFAULT NULL,
  `DeptReviewEmp` varchar(30) DEFAULT NULL,
  `DeptReviewReason` varchar(255) DEFAULT NULL,
  `FinancialAuditStatus` int(11) DEFAULT NULL,
  `FinancialAuditTime` datetime DEFAULT NULL,
  `FinancialAuditEmp` varchar(30) DEFAULT NULL,
  `FinancialAuditReason` varchar(255) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `OrderStatus` int(8) DEFAULT NULL,
  PRIMARY KEY (`PurchaseRequest_id`),
  KEY `FK_DEPTREVIEW_EMP` (`DeptReviewEmp`),
  KEY `FK_FK_AUDITREVIEW_EMP` (`FinancialAuditEmp`),
  KEY `FK_FK_AUDIT_REVIEW` (`FinancialAuditStatus`),
  KEY `FK_FK_DEPTREVIEW_REVIEW` (`DeptReviewStatus`),
  KEY `FK_FK_REQUEST_EMP` (`RequestEmpId`),
  KEY `FK_PURCHASE_SUPP` (`Supplier_id`),
  CONSTRAINT `FK_DEPTREVIEW_EMP` FOREIGN KEY (`DeptReviewEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_AUDITREVIEW_EMP` FOREIGN KEY (`FinancialAuditEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_AUDIT_REVIEW` FOREIGN KEY (`FinancialAuditStatus`) REFERENCES `reviewstatus` (`RS_id`),
  CONSTRAINT `FK_FK_DEPTREVIEW_REVIEW` FOREIGN KEY (`DeptReviewStatus`) REFERENCES `reviewstatus` (`RS_id`),
  CONSTRAINT `FK_FK_REQUEST_EMP` FOREIGN KEY (`RequestEmpId`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_PURCHASE_SUPP` FOREIGN KEY (`Supplier_id`) REFERENCES `supplier` (`Supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of purchaserequest
-- ----------------------------
INSERT INTO `purchaserequest` VALUES ('CG053109200329401', 'wade', '2018-05-31 00:00:00', 'GHS10001', '张三', '18796284456', '1', null, null, null, '1', null, null, null, '今天周二', '1');
INSERT INTO `purchaserequest` VALUES ('CG053111320564135', 'wade', '2018-05-31 00:00:00', 'GHS10001', '李四', '18796284456', '1', null, null, null, '1', null, null, null, '实得分', '1');
INSERT INTO `purchaserequest` VALUES ('CG053111400381130', 'wade', '2018-05-31 11:40:57', 'GHS10001', '李四', '18796284456', '1', null, null, null, '1', null, null, null, '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '1');
INSERT INTO `purchaserequest` VALUES ('CG053111410212849', 'wade', '2018-05-31 11:41:36', 'GHS10001', '李四11111111111', '18796284456', '1', null, null, null, '1', null, null, null, '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '1');
INSERT INTO `purchaserequest` VALUES ('CG060102150435342', 'wade', '2018-06-01 14:16:37', 'GHS10001', '张三', '18796284456', '2', '2018-06-01 14:18:09', 'wade', 'jitiandf', '2', '2018-06-01 14:20:18', 'wade', 'sdfsdf', '实得分', '7');
INSERT INTO `purchaserequest` VALUES ('CG060106420425730', 'Jordan', '2018-06-01 06:43:38', 'GHS10902', 'jj', '18796284456', '2', '2018-06-01 06:46:30', 'wade', '通过', '2', '2018-06-01 06:46:42', 'wade', '通过', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '7');
INSERT INTO `purchaserequest` VALUES ('CGCOJQ053002310265704', 'wade', '2018-05-30 00:00:00', 'GHS10902', '张三', '18796284456', '2', '2018-05-30 14:31:59', 'wade', 'g', '2', '2018-05-30 14:32:04', 'wade', ' r', '今天周二', '7');
INSERT INTO `purchaserequest` VALUES ('CGGDOQ052803390319248', 'wade', '2018-05-28 00:00:00', 'GHS10001', '张三', '18796284456', '1', null, null, null, '1', null, null, null, '', '3');
INSERT INTO `purchaserequest` VALUES ('CGKLBP053002280091276', 'wade', '2018-05-30 00:00:00', 'GHS10902', '张三', '18796284456', '2', '2018-05-30 14:30:00', 'wade', 'uu', '2', '2018-05-30 14:30:10', 'wade', 'khj', '`12', '7');
INSERT INTO `purchaserequest` VALUES ('CGKYBL052810180424632', 'wade', '2018-05-28 00:00:00', 'GHS10902', '张三', '18796284456', '2', '2018-05-28 12:59:50', 'wade', 'dfd', '2', '2018-05-28 12:59:57', 'wade', 'dfdf', '实得分', '7');
INSERT INTO `purchaserequest` VALUES ('CGMXIZ032708500014915', 'rose', '2018-03-27 00:00:00', 'GHS10902', '李刚', '186936283621', '2', '2018-04-02 00:00:00', 'wade', '阿斯顿发大水', '2', '2018-04-02 00:00:00', 'wade', '今天周二', '915adsfdsf爱的色放发的第三方', '7');
INSERT INTO `purchaserequest` VALUES ('CGQMKR052809530374409', 'james', '2018-05-28 00:00:00', 'GHS10902', '张三', '18796284456', '1', null, null, null, '1', null, null, null, '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '1');
INSERT INTO `purchaserequest` VALUES ('CGRCTQ041910080064518', 'jinying', '2018-04-19 00:00:00', 'GHS10001', '张三', '18796284456', '2', '2018-05-07 00:00:00', 'wade', 'sdf', '2', '2018-05-07 00:00:00', 'wade', 'asdf', '今天周二', '6');
INSERT INTO `purchaserequest` VALUES ('CGSDFDF129383483', 'wade', '2016-09-08 00:00:00', 'GHS10001', '张三今天周二123', '1592383492', '2', '2018-05-26 15:26:56', 'wade', '第三方', '1', null, null, null, '明天周三三水水水水水水水水水水水水水', '3');
INSERT INTO `purchaserequest` VALUES ('CGTTIG052810160429184', 'wade', '2018-05-28 00:00:00', 'GHS10001', '张三', '18796284456', '1', null, null, null, '1', null, null, null, '实得分', '1');
INSERT INTO `purchaserequest` VALUES ('CGUFLR052810190568925', '地说道', '2018-05-28 00:00:00', 'GHS10001', '张三', '18796284456', '2', '2018-05-28 10:42:09', 'wade', 'asdf', '2', '2018-05-28 10:42:19', 'wade', 'sdf', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '7');
INSERT INTO `purchaserequest` VALUES ('CGVHMC040302380319951', 'wade', '2018-04-03 00:00:00', 'GHS10001', '的地方过分', '2343543', '2', '2018-05-26 15:26:46', 'wade', 'dfs', '1', null, null, null, '地方', '3');
INSERT INTO `purchaserequest` VALUES ('CGYBNI052812580594832', 'wade', '2018-05-28 00:00:00', 'GHS10001', 'dsaf ', 'dfd', '1', null, null, null, '1', null, null, null, '', '1');
INSERT INTO `purchaserequest` VALUES ('CGZZNZ033012140135319', 'wade', '2018-03-30 00:00:00', 'GHS10001', '靳颖', '1542156456', '2', '2018-04-02 00:00:00', 'wade', '今天周二', '2', '2018-04-02 00:00:00', 'wade', '哈哈哈', '今天卡将地方；看桑德菲杰倒扣分', '6');

-- ----------------------------
-- Table structure for purchaserequestdetail
-- ----------------------------
DROP TABLE IF EXISTS `purchaserequestdetail`;
CREATE TABLE `purchaserequestdetail` (
  `PRD_id` int(11) NOT NULL AUTO_INCREMENT,
  `PurchaseRequest_id` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Count` int(11) NOT NULL,
  `ProductUnit_id` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`PRD_id`),
  KEY `FK_FK_PurchaseRequest_PurchaseRequestDetail` (`PurchaseRequest_id`),
  KEY `FK_FK_REQUESTDETAIL_PRO` (`Product_id`),
  KEY `FK_PurchaseDetail_ProductUnit` (`ProductUnit_id`),
  CONSTRAINT `FK_FK_PurchaseRequest_PurchaseRequestDetail` FOREIGN KEY (`PurchaseRequest_id`) REFERENCES `purchaserequest` (`PurchaseRequest_id`),
  CONSTRAINT `FK_FK_REQUESTDETAIL_PRO` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_PurchaseDetail_ProductUnit` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of purchaserequestdetail
-- ----------------------------
INSERT INTO `purchaserequestdetail` VALUES ('6', 'CGMXIZ032708500014915', 'CPS-10004', '2', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('7', 'CGMXIZ032708500014915', 'CPS-10002', '2', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('9', 'CGMXIZ032708500014915', 'CPS-10034', '5', '4', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('10', 'CGMXIZ032708500014915', 'CPS-11084', '3', '2', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('17', 'CGZZNZ033012140135319', 'CPS-10004', '3', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('18', 'CGZZNZ033012140135319', 'CPS-10002', '1', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('19', 'CGZZNZ033012140135319', 'CPS-10003', '4', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('20', 'CGZZNZ033012140135319', 'CPS-10034', '4', '4', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('21', 'CGZZNZ033012140135319', 'CPS-11084', '4', '2', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('54', 'CGSDFDF129383483', 'CPS-10003', '1', '6', '12.00');
INSERT INTO `purchaserequestdetail` VALUES ('55', 'CGSDFDF129383483', 'CPS-10002', '3', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('56', 'CGSDFDF129383483', 'CPS-11084', '2', '2', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('57', 'CGSDFDF129383483', 'CPS-10001', '3', '1', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('66', 'CGVHMC040302380319951', 'CPS-10004', '2', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('67', 'CGVHMC040302380319951', 'CPS-10002', '3', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('68', 'CGVHMC040302380319951', 'CPS-10003', '4', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('69', 'CGVHMC040302380319951', 'CPS-10034', '4', '4', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('70', 'CGVHMC040302380319951', 'CPS-11084', '4', '2', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('83', 'CGRCTQ041910080064518', 'CPS-10004', '1', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('84', 'CGRCTQ041910080064518', 'CPS-10002', '2', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('85', 'CGRCTQ041910080064518', 'CPS-10003', '3', '6', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('86', 'CGRCTQ041910080064518', 'CPS-10034', '4', '4', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('87', 'CGRCTQ041910080064518', 'CPS-11084', '5', '2', '0.00');
INSERT INTO `purchaserequestdetail` VALUES ('88', 'CGGDOQ052803390319248', 'CPS-10004', '1', '6', '2.00');
INSERT INTO `purchaserequestdetail` VALUES ('89', 'CGGDOQ052803390319248', 'CPS-10002', '1', '6', '2.00');
INSERT INTO `purchaserequestdetail` VALUES ('90', 'CGGDOQ052803390319248', 'CPS-10003', '1', '6', '2.00');
INSERT INTO `purchaserequestdetail` VALUES ('91', 'CGQMKR052809530374409', 'CPS-10001', '11', '1', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('92', 'CGQMKR052809530374409', 'CPS-10002', '11', '6', '122121.00');
INSERT INTO `purchaserequestdetail` VALUES ('93', 'CGQMKR052809530374409', 'CPS-10003', '13', '6', '123134.00');
INSERT INTO `purchaserequestdetail` VALUES ('94', 'CGQMKR052809530374409', 'CPS-10004', '10', '6', '453453.00');
INSERT INTO `purchaserequestdetail` VALUES ('95', 'CGQMKR052809530374409', 'CPS-10018', '17', '6', '345675.00');
INSERT INTO `purchaserequestdetail` VALUES ('96', 'CGTTIG052810160429184', 'CPS-10001', '1', '1', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('97', 'CGKYBL052810180424632', 'CPS-10002', '1', '6', '66.00');
INSERT INTO `purchaserequestdetail` VALUES ('98', 'CGUFLR052810190568925', 'CPS-10001', '1', '1', '123.00');
INSERT INTO `purchaserequestdetail` VALUES ('99', 'CGYBNI052812580594832', 'CPS-10001', '3', '1', '5.00');
INSERT INTO `purchaserequestdetail` VALUES ('100', 'CGYBNI052812580594832', 'CPS-10002', '3', '6', '8.00');
INSERT INTO `purchaserequestdetail` VALUES ('101', 'CGKLBP053002280091276', 'CPS-10001', '1', '1', '45.00');
INSERT INTO `purchaserequestdetail` VALUES ('102', 'CGCOJQ053002310265704', 'CPS-10001', '1', '1', '3.00');
INSERT INTO `purchaserequestdetail` VALUES ('103', 'CG053109200329401', 'CPS-10001', '1', '1', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('104', 'CG053109200329401', 'CPS-10002', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('105', 'CG053109200329401', 'CPS-10003', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('106', 'CG053109200329401', 'CPS-10004', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('107', 'CG053109200329401', 'CPS-10018', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('108', 'CG053111320564135', 'CPS-10034', '1', '4', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('109', 'CG053111320564135', 'CPS-11084', '1', '2', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('110', 'CG053111320564135', 'CPS-21908', '1', '2', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('111', 'CG053111400381130', 'CPS-10001', '1', '1', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('112', 'CG053111400381130', 'CPS-10002', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('113', 'CG053111400381130', 'CPS-10003', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('114', 'CG053111400381130', 'CPS-10004', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('115', 'CG053111400381130', 'CPS-10018', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('122', 'CG060106420425730', 'CPS-10001', '1', '1', '2.00');
INSERT INTO `purchaserequestdetail` VALUES ('123', 'CG060106420425730', 'CPS-10002', '1', '6', '2.00');
INSERT INTO `purchaserequestdetail` VALUES ('124', 'CG060106420425730', 'CPS-10003', '1', '6', '3.00');
INSERT INTO `purchaserequestdetail` VALUES ('125', 'CG053111410212849', 'CPS-10034', '1', '4', '22.00');
INSERT INTO `purchaserequestdetail` VALUES ('126', 'CG053111410212849', 'CPS-11084', '1', '2', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('127', 'CG053111410212849', 'CPS-21908', '1', '2', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('128', 'CG060102150435342', 'CPS-10001', '1', '1', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('129', 'CG060102150435342', 'CPS-10002', '1', '6', '1.00');
INSERT INTO `purchaserequestdetail` VALUES ('130', 'CG060102150435342', 'CPS-10003', '1', '6', '2.00');
INSERT INTO `purchaserequestdetail` VALUES ('131', 'CG060102150435342', 'CPS-10004', '1', '6', '3.00');
INSERT INTO `purchaserequestdetail` VALUES ('132', 'CG060102150435342', 'CPS-10018', '1', '6', '4.00');

-- ----------------------------
-- Table structure for requisition
-- ----------------------------
DROP TABLE IF EXISTS `requisition`;
CREATE TABLE `requisition` (
  `Requisition_id` varchar(30) NOT NULL,
  `RequestEmp` varchar(30) NOT NULL,
  `RequestTime` datetime NOT NULL,
  `ReviewEmp` varchar(30) DEFAULT NULL,
  `ReviewTime` datetime DEFAULT NULL,
  `ReviewStatus` int(11) DEFAULT NULL,
  `OutboundStoreHouse` int(11) DEFAULT NULL,
  `OutboundStoreHouseTime` datetime DEFAULT NULL,
  `OutboundEmp` varchar(30) DEFAULT NULL,
  `StorageStoreHouse` int(11) DEFAULT NULL,
  `StorageStoreHouseTime` datetime DEFAULT NULL,
  `StorageStoreHouseEmp` varchar(30) DEFAULT NULL,
  `Reason` varchar(255) DEFAULT NULL,
  `OrderStatus` int(8) DEFAULT '1',
  `AllocateReason` varchar(50) NOT NULL,
  PRIMARY KEY (`Requisition_id`),
  KEY `FK_FK_RequisitionEmp_Emp` (`RequestEmp`),
  KEY `FK_FK_RequisitionEnterEmp_Emp` (`StorageStoreHouseEmp`),
  KEY `FK_FK_RequisitionEnter_Store` (`StorageStoreHouse`),
  KEY `FK_FK_RequisitionLeaveEmp_Emp` (`OutboundEmp`),
  KEY `FK_FK_RequisitionLeave_Store` (`OutboundStoreHouse`),
  KEY `FK_FK_RequisitionReview_Emp` (`ReviewEmp`),
  KEY `FK_FK_RequisitionReview_ReviewStatus` (`ReviewStatus`),
  CONSTRAINT `FK_FK_RequisitionEmp_Emp` FOREIGN KEY (`RequestEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_RequisitionEnterEmp_Emp` FOREIGN KEY (`StorageStoreHouseEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_RequisitionEnter_Store` FOREIGN KEY (`StorageStoreHouse`) REFERENCES `storehouse` (`StoreHouse_id`),
  CONSTRAINT `FK_FK_RequisitionLeaveEmp_Emp` FOREIGN KEY (`OutboundEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_RequisitionLeave_Store` FOREIGN KEY (`OutboundStoreHouse`) REFERENCES `storehouse` (`StoreHouse_id`),
  CONSTRAINT `FK_FK_RequisitionReview_Emp` FOREIGN KEY (`ReviewEmp`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_RequisitionReview_ReviewStatus` FOREIGN KEY (`ReviewStatus`) REFERENCES `reviewstatus` (`RS_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of requisition
-- ----------------------------
INSERT INTO `requisition` VALUES ('DB060102390495366', 'jinying', '2018-06-01 14:45:47', 'jinying', '2018-06-01 14:46:01', '2', '1', null, null, '3', null, null, '请问企鹅', '4', '低洼萨达');
INSERT INTO `requisition` VALUES ('DB060106540308973', 'wade', '2018-06-01 06:56:11', 'wade', '2018-06-01 06:56:29', '2', '4', null, null, '3', null, null, '可以通过', '4', '周三仓库少货');
INSERT INTO `requisition` VALUES ('DBBZZH053111090499258', 'wade', '2018-05-31 23:10:06', null, null, '1', '1', null, null, '4', null, null, null, '2', '为深入的法国红酒股份的飒飒法国红酒阿萨德法国和几个号发的撒SFGHJASDFGHASDFGHJGDF');
INSERT INTO `requisition` VALUES ('DBDGWL053111030325733', 'wade', '2017-05-05 00:00:00', null, null, '1', '1', null, null, '4', null, null, null, '3', '他就是傻');
INSERT INTO `requisition` VALUES ('DBDLPG060104130421629', 'wade', '2018-06-01 05:27:01', null, null, '1', '1', null, null, '2', null, null, null, '1', '是事实是很少爱的风格会尽快发多少的法国红酒和规范的撒的复合机房顶上是大富豪国际规范的撒的风格和较高的');
INSERT INTO `requisition` VALUES ('DBFHDA060103270298462', 'wade', '2018-06-01 03:34:10', null, null, '1', '1', null, null, '2', null, null, null, '2', '更换基金和规范v撒大大大按时大大阿斯达阿斯达的阿萨大的阿斯达撒阿萨大的阿萨达四大阿萨达阿萨大的阿萨大');
INSERT INTO `requisition` VALUES ('DBFUQH053111020475485', 'wade', '2018-05-31 23:03:10', null, null, '1', '1', null, null, '2', null, null, null, '3', '算得上');
INSERT INTO `requisition` VALUES ('DBGQCT060102470264773', 'wade', '2018-06-01 03:26:47', null, null, '1', '2', null, null, '3', null, null, null, '1', '李晓擎就是一个大傻逼');
INSERT INTO `requisition` VALUES ('DBJCBU060103320441576', 'wade', '2018-06-01 03:33:34', null, null, '1', '1', null, null, '3', null, null, null, '1', '按时到岗阿萨达');
INSERT INTO `requisition` VALUES ('DBMFME060101220015505', 'wade', '2018-06-01 01:23:01', null, null, '1', '1', null, null, '2', null, null, null, '3', '是真心付出过女');
INSERT INTO `requisition` VALUES ('DBOAJU053111020094558', 'wade', '2018-05-31 23:02:24', null, null, '1', '1', null, null, '2', null, null, null, '2', '士大夫似的');
INSERT INTO `requisition` VALUES ('DBPRPU052810390537246', 'wade', '2018-05-28 00:00:00', 'wade', '2018-05-28 00:00:00', '2', '1', null, null, '1', null, null, '666', '4', 'asaaasdadaasdadasd');
INSERT INTO `requisition` VALUES ('DBUHSN060102240097491', 'wade', '2018-06-01 02:24:53', null, null, '1', '1', null, null, '2', null, null, null, '3', '按时哇');
INSERT INTO `requisition` VALUES ('DBYJMY060106110464586', 'wade', '2018-06-01 06:58:58', null, null, '1', '4', null, null, '3', null, null, null, '1', '我很调皮哈哈');

-- ----------------------------
-- Table structure for requisitiondetail
-- ----------------------------
DROP TABLE IF EXISTS `requisitiondetail`;
CREATE TABLE `requisitiondetail` (
  `RE_id` int(11) NOT NULL AUTO_INCREMENT,
  `Requisition_id` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Count` int(11) NOT NULL,
  `ProductUnitId` int(11) NOT NULL,
  PRIMARY KEY (`RE_id`),
  KEY `FK_FK_Requisition_Pro` (`Product_id`),
  KEY `FK_FK_Requisition_RequDetail` (`Requisition_id`),
  KEY `FK_ProductUnit` (`ProductUnitId`),
  CONSTRAINT `FK_FK_Requisition_Pro` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_FK_Requisition_RequDetail` FOREIGN KEY (`Requisition_id`) REFERENCES `requisition` (`Requisition_id`),
  CONSTRAINT `FK_ProductUnit` FOREIGN KEY (`ProductUnitId`) REFERENCES `productunit` (`ProductUnit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of requisitiondetail
-- ----------------------------
INSERT INTO `requisitiondetail` VALUES ('181', 'DBPRPU052810390537246', 'CPS-10001', '1', '1');
INSERT INTO `requisitiondetail` VALUES ('182', 'DBPRPU052810390537246', 'CPS-10002', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('183', 'DBPRPU052810390537246', 'CPS-10003', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('184', 'DBOAJU053111020094558', 'CPS-10001', '1', '1');
INSERT INTO `requisitiondetail` VALUES ('185', 'DBOAJU053111020094558', 'CPS-10002', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('186', 'DBOAJU053111020094558', 'CPS-10003', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('187', 'DBFUQH053111020475485', 'CPS-10001', '1', '1');
INSERT INTO `requisitiondetail` VALUES ('188', 'DBFUQH053111020475485', 'CPS-10002', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('189', 'DBDGWL053111030325733', 'CPS-10001', '1', '1');
INSERT INTO `requisitiondetail` VALUES ('190', 'DBDGWL053111030325733', 'CPS-10002', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('191', 'DBBZZH053111090499258', 'CPS-10001', '1', '1');
INSERT INTO `requisitiondetail` VALUES ('192', 'DBMFME060101220015505', 'CPS-10003', '1', '3');
INSERT INTO `requisitiondetail` VALUES ('194', 'DBUHSN060102240097491', 'CPS-10003', '1', '3');
INSERT INTO `requisitiondetail` VALUES ('195', 'DBUHSN060102240097491', 'CPS-10001', '2', '1');
INSERT INTO `requisitiondetail` VALUES ('197', 'DBGQCT060102470264773', 'CPS-10001', '1', '5');
INSERT INTO `requisitiondetail` VALUES ('198', 'DBFHDA060103270298462', 'CPS-10003', '1', '3');
INSERT INTO `requisitiondetail` VALUES ('199', 'DBJCBU060103320441576', 'CPS-10003', '1', '3');
INSERT INTO `requisitiondetail` VALUES ('201', 'DBDLPG060104130421629', 'CPS-10004', '1', '4');
INSERT INTO `requisitiondetail` VALUES ('202', 'DBDLPG060104130421629', 'CPS-10003', '2', '3');
INSERT INTO `requisitiondetail` VALUES ('205', 'DB060106540308973', 'CPS-10001', '33', '1');
INSERT INTO `requisitiondetail` VALUES ('206', 'DB060106540308973', 'CPS-10003', '1', '6');
INSERT INTO `requisitiondetail` VALUES ('207', 'DBYJMY060106110464586', 'CPS-10001', '23', '1');
INSERT INTO `requisitiondetail` VALUES ('209', 'DB060102390495366', 'CPS-10003', '1', '3');

-- ----------------------------
-- Table structure for reviewstatus
-- ----------------------------
DROP TABLE IF EXISTS `reviewstatus`;
CREATE TABLE `reviewstatus` (
  `RS_id` int(11) NOT NULL AUTO_INCREMENT,
  `RS_name` varchar(20) NOT NULL,
  PRIMARY KEY (`RS_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reviewstatus
-- ----------------------------
INSERT INTO `reviewstatus` VALUES ('1', '未审核');
INSERT INTO `reviewstatus` VALUES ('2', '审核通过');
INSERT INTO `reviewstatus` VALUES ('3', '审核拒绝');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `RoleId` int(11) NOT NULL AUTO_INCREMENT,
  `RoleName` varchar(50) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `RoleCode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('2', '采购部经理', '权限比采购员高 可以审核采购申请', 'purchaserMan');
INSERT INTO `role` VALUES ('3', '销售员', '销售货物', 'sales');
INSERT INTO `role` VALUES ('4', '销售经理', '可以审核销售单', 'salesMan');
INSERT INTO `role` VALUES ('5', '仓库管理员', '管理仓库', 'warehouse');
INSERT INTO `role` VALUES ('6', '采购员', '可以申请采购进货', 'purchaser');
INSERT INTO `role` VALUES ('8', '人事', '人员信息的增删改', 'hr');
INSERT INTO `role` VALUES ('9', '仓管经理', '审核调拨单 删除之类的权限', 'warehouseMan');

-- ----------------------------
-- Table structure for rolepermission
-- ----------------------------
DROP TABLE IF EXISTS `rolepermission`;
CREATE TABLE `rolepermission` (
  `Role_Permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `RoleId` int(11) NOT NULL,
  `PermissionId` int(11) NOT NULL,
  PRIMARY KEY (`Role_Permission_id`),
  KEY `FK_RolePermission_Role` (`RoleId`),
  KEY `FK_RolePermission_Permission` (`PermissionId`),
  CONSTRAINT `FK_RolePermission_Permission` FOREIGN KEY (`PermissionId`) REFERENCES `permission` (`Permission_id`),
  CONSTRAINT `FK_RolePermission_Role` FOREIGN KEY (`RoleId`) REFERENCES `role` (`RoleId`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rolepermission
-- ----------------------------
INSERT INTO `rolepermission` VALUES ('14', '6', '1');
INSERT INTO `rolepermission` VALUES ('15', '6', '2');
INSERT INTO `rolepermission` VALUES ('16', '6', '3');
INSERT INTO `rolepermission` VALUES ('102', '5', '20');
INSERT INTO `rolepermission` VALUES ('103', '5', '21');
INSERT INTO `rolepermission` VALUES ('104', '5', '22');
INSERT INTO `rolepermission` VALUES ('105', '5', '25');
INSERT INTO `rolepermission` VALUES ('106', '5', '26');
INSERT INTO `rolepermission` VALUES ('107', '5', '27');
INSERT INTO `rolepermission` VALUES ('108', '5', '30');
INSERT INTO `rolepermission` VALUES ('109', '5', '31');
INSERT INTO `rolepermission` VALUES ('110', '5', '32');
INSERT INTO `rolepermission` VALUES ('111', '5', '39');
INSERT INTO `rolepermission` VALUES ('112', '5', '41');
INSERT INTO `rolepermission` VALUES ('113', '5', '42');
INSERT INTO `rolepermission` VALUES ('114', '5', '43');
INSERT INTO `rolepermission` VALUES ('119', '3', '15');
INSERT INTO `rolepermission` VALUES ('120', '3', '16');
INSERT INTO `rolepermission` VALUES ('121', '3', '17');
INSERT INTO `rolepermission` VALUES ('122', '3', '18');
INSERT INTO `rolepermission` VALUES ('123', '4', '15');
INSERT INTO `rolepermission` VALUES ('124', '4', '16');
INSERT INTO `rolepermission` VALUES ('125', '4', '17');
INSERT INTO `rolepermission` VALUES ('126', '4', '18');
INSERT INTO `rolepermission` VALUES ('127', '4', '19');
INSERT INTO `rolepermission` VALUES ('131', '2', '1');
INSERT INTO `rolepermission` VALUES ('132', '2', '2');
INSERT INTO `rolepermission` VALUES ('133', '2', '3');
INSERT INTO `rolepermission` VALUES ('134', '2', '4');
INSERT INTO `rolepermission` VALUES ('135', '9', '20');
INSERT INTO `rolepermission` VALUES ('136', '9', '21');
INSERT INTO `rolepermission` VALUES ('137', '9', '22');
INSERT INTO `rolepermission` VALUES ('138', '9', '23');
INSERT INTO `rolepermission` VALUES ('139', '9', '24');
INSERT INTO `rolepermission` VALUES ('140', '9', '25');
INSERT INTO `rolepermission` VALUES ('141', '9', '26');
INSERT INTO `rolepermission` VALUES ('142', '9', '27');
INSERT INTO `rolepermission` VALUES ('143', '9', '28');
INSERT INTO `rolepermission` VALUES ('144', '9', '29');
INSERT INTO `rolepermission` VALUES ('145', '9', '30');
INSERT INTO `rolepermission` VALUES ('146', '9', '31');
INSERT INTO `rolepermission` VALUES ('147', '9', '32');
INSERT INTO `rolepermission` VALUES ('148', '9', '33');
INSERT INTO `rolepermission` VALUES ('149', '9', '34');
INSERT INTO `rolepermission` VALUES ('150', '9', '39');
INSERT INTO `rolepermission` VALUES ('151', '8', '5');
INSERT INTO `rolepermission` VALUES ('152', '8', '7');
INSERT INTO `rolepermission` VALUES ('153', '8', '8');
INSERT INTO `rolepermission` VALUES ('154', '8', '9');
INSERT INTO `rolepermission` VALUES ('155', '8', '10');
INSERT INTO `rolepermission` VALUES ('156', '8', '11');
INSERT INTO `rolepermission` VALUES ('157', '8', '12');
INSERT INTO `rolepermission` VALUES ('158', '8', '13');
INSERT INTO `rolepermission` VALUES ('159', '8', '14');
INSERT INTO `rolepermission` VALUES ('160', '8', '35');
INSERT INTO `rolepermission` VALUES ('161', '8', '36');
INSERT INTO `rolepermission` VALUES ('162', '8', '37');
INSERT INTO `rolepermission` VALUES ('163', '8', '38');
INSERT INTO `rolepermission` VALUES ('164', '8', '40');
INSERT INTO `rolepermission` VALUES ('165', '8', '41');
INSERT INTO `rolepermission` VALUES ('166', '8', '42');
INSERT INTO `rolepermission` VALUES ('167', '8', '43');
INSERT INTO `rolepermission` VALUES ('168', '8', '44');

-- ----------------------------
-- Table structure for salesorder
-- ----------------------------
DROP TABLE IF EXISTS `salesorder`;
CREATE TABLE `salesorder` (
  `SO_id` varchar(30) NOT NULL,
  `Employee_id` varchar(30) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Sales_time` date NOT NULL,
  `Sales_price` decimal(10,0) NOT NULL,
  `ReviewEmp_id` varchar(30) DEFAULT NULL,
  `ReviewDate` date DEFAULT NULL,
  `ReviewStatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`SO_id`),
  KEY `FK_FK_SalesOrderReivew_Emp` (`ReviewEmp_id`),
  KEY `FK_FK_SalesOrderReview_ReviewStatus` (`ReviewStatus`),
  KEY `FK_FK_SalesOrder_Customer` (`Customer_id`),
  KEY `FK_FK_SalesOrder_Emp` (`Employee_id`),
  CONSTRAINT `FK_FK_SalesOrderReivew_Emp` FOREIGN KEY (`ReviewEmp_id`) REFERENCES `employee` (`EmpLoginName`),
  CONSTRAINT `FK_FK_SalesOrderReview_ReviewStatus` FOREIGN KEY (`ReviewStatus`) REFERENCES `reviewstatus` (`RS_id`),
  CONSTRAINT `FK_FK_SalesOrder_Customer` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`),
  CONSTRAINT `FK_FK_SalesOrder_Emp` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`EmpLoginName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of salesorder
-- ----------------------------

-- ----------------------------
-- Table structure for salesorderdetail
-- ----------------------------
DROP TABLE IF EXISTS `salesorderdetail`;
CREATE TABLE `salesorderdetail` (
  `SOD_id` int(11) NOT NULL AUTO_INCREMENT,
  `SalesOrder_id` varchar(30) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Count` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `ProductUnit_id` int(11) NOT NULL,
  PRIMARY KEY (`SOD_id`),
  KEY `FK_SalesOrderDetail_Product` (`Product_id`),
  KEY `FK_SalesOrder_SOD` (`SalesOrder_id`),
  KEY `FK_ProductUnit_ProductUnitId` (`ProductUnit_id`),
  CONSTRAINT `FK_ProductUnit_ProductUnitId` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`),
  CONSTRAINT `FK_SalesOrderDetail_Product` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_SalesOrder_SOD` FOREIGN KEY (`SalesOrder_id`) REFERENCES `salesorder` (`SO_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of salesorderdetail
-- ----------------------------

-- ----------------------------
-- Table structure for stockpile
-- ----------------------------
DROP TABLE IF EXISTS `stockpile`;
CREATE TABLE `stockpile` (
  `SP_id` int(11) NOT NULL AUTO_INCREMENT,
  `StoreHouse_id` int(11) NOT NULL,
  `Product_id` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `ProsPecification` varchar(30) DEFAULT NULL,
  `ProductUnit_id` int(11) DEFAULT NULL,
  `CostPrice` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`SP_id`),
  KEY `FK_FK_StockPile_ProductUnit` (`ProductUnit_id`),
  KEY `FK_FK_Stock_Product` (`Product_id`),
  KEY `FK_FK_StoreHouse_Stock` (`StoreHouse_id`),
  CONSTRAINT `FK_FK_StockPile_ProductUnit` FOREIGN KEY (`ProductUnit_id`) REFERENCES `productunit` (`ProductUnit_id`),
  CONSTRAINT `FK_FK_Stock_Product` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  CONSTRAINT `FK_FK_StoreHouse_Stock` FOREIGN KEY (`StoreHouse_id`) REFERENCES `storehouse` (`StoreHouse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stockpile
-- ----------------------------
INSERT INTO `stockpile` VALUES ('1', '1', 'CPS-10003', '23', '2018-06-01', '3', '10');
INSERT INTO `stockpile` VALUES ('2', '1', 'CPS-10004', '13', '2018-06-01', '4', '32');
INSERT INTO `stockpile` VALUES ('3', '3', 'CPS-10018', '2', '2017-3-4', '4', '23');
INSERT INTO `stockpile` VALUES ('6', '2', 'CPS-10001', '118', '2018-05-30', '5', '122');
INSERT INTO `stockpile` VALUES ('7', '4', 'CPS-10001', '1222', '2018-05-26', '1', '12');
INSERT INTO `stockpile` VALUES ('8', '1', 'CPS-10002', '38', '2018-06-01', '1', '14');
INSERT INTO `stockpile` VALUES ('9', '4', 'CPS-10003', '4', '2018-05-26', '6', '12');
INSERT INTO `stockpile` VALUES ('10', '4', 'CPS-10004', '1', '2018-05-26', '6', '2');
INSERT INTO `stockpile` VALUES ('11', '4', 'CPS-10002', '1', '2018-05-26', '6', '10');
INSERT INTO `stockpile` VALUES ('12', '4', 'CPS-10034', '1', '2018-05-26', '4', '3');
INSERT INTO `stockpile` VALUES ('13', '1', 'CPS-10001', '10', '2018-06-01', '1', '22');
INSERT INTO `stockpile` VALUES ('14', '1', 'CPS-10018', '1', '2018-06-01', '6', '4');

-- ----------------------------
-- Table structure for storehouse
-- ----------------------------
DROP TABLE IF EXISTS `storehouse`;
CREATE TABLE `storehouse` (
  `StoreHouse_id` int(11) NOT NULL AUTO_INCREMENT,
  `SH_address` varchar(200) NOT NULL,
  `SH_phone` varchar(20) NOT NULL,
  `Employee_id` varchar(30) NOT NULL,
  `CreateDate` date NOT NULL,
  `SH_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`StoreHouse_id`),
  KEY `FK_FK_StoreHouseEmp_Emp` (`Employee_id`),
  CONSTRAINT `FK_FK_StoreHouseEmp_Emp` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`EmpLoginName`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of storehouse
-- ----------------------------
INSERT INTO `storehouse` VALUES ('1', '徐州沛县', '15837283928', 'wade', '2018-04-03', '时光仓库');
INSERT INTO `storehouse` VALUES ('2', '泉山区', '39484729', 'rose', '2018-04-06', '周二库');
INSERT INTO `storehouse` VALUES ('3', '云龙区', '29473628181', 'wade', '2018-04-03', '周三库');
INSERT INTO `storehouse` VALUES ('4', '哈哈哈', '28473629132', 'james', '2018-04-01', '周天');

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `Supplier_id` varchar(30) NOT NULL,
  `Supp_name` varchar(50) NOT NULL,
  `Supp_address` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `PostalCode` varchar(50) NOT NULL,
  `Supp_contact` varchar(50) NOT NULL,
  `SuppContactPho` varchar(50) NOT NULL,
  `SuppBank` varchar(50) NOT NULL,
  `SuppBankNum` varchar(50) NOT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('GHS10001', '张三供货商', '徐州市泉山区', '18678927383', '221000', '李思思', '1987693827', '建设银行', '62102879838217328389', '主要售卖建材');
INSERT INTO `supplier` VALUES ('GHS10902', '徐州建材公司', '沛县', '13762892827', '221001', '李刚', '1983739928', '工商银行', '68397383928393727388', '售卖水泥钢材等等');

-- ----------------------------
-- Procedure structure for proc_getCountByEmpLoginName
-- ----------------------------
DROP PROCEDURE IF EXISTS `proc_getCountByEmpLoginName`;
DELIMITER ;;
CREATE DEFINER=`skip-grants user`@`skip-grants host` PROCEDURE `proc_getCountByEmpLoginName`(in emploginname VARCHAR(30))
BEGIN
SET @currentNum = 0;
	SET @empCount =0;
	SELECT COUNT(1) INTO @currentNum FROM backsales WHERE reviewEmp=emploginname;
  SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM backstock WHERE employee_id=emploginname OR managerreviewemp=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM damagedrequest WHERE requestempid=emploginname OR deptreviewemp=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM employeerole WHERE EmpLoginName=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM enterstock WHERE employee_id=emploginname OR reviewemp=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM leavestock WHERE employee_id=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM product WHERE employee_id=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM purchasepaymentslip WHERE femployee_id=emploginname OR freviewemp_id=emploginname OR lemployee_id=emploginname OR lreviewemp_id=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM purchaserequest WHERE requestempId=emploginname OR deptreviewemp=emploginname OR financialauditemp=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM requisition WHERE requestemp=emploginname OR reviewemp=emploginname OR outboundemp=emploginname OR storagestorehouseemp=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM salesorder WHERE employee_id=emploginname OR reviewemp_id=emploginname;
	SET @empCount=@empCount+@currentNum;
	SELECT COUNT(1) INTO @currentNum FROM storehouse WHERE employee_id=emploginname;
	SET @empCount=@empCount+@currentNum;
	select @empCount;
END
;;
DELIMITER ;
