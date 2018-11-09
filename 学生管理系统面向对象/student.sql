/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-11-06 11:17:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `sex` enum('男','女') NOT NULL DEFAULT '男',
  `age` tinyint(4) NOT NULL DEFAULT '24',
  `edu` enum('初中','高中','大专','大本','研究生') NOT NULL DEFAULT '大专',
  `salary` float(8,2) unsigned NOT NULL DEFAULT '0.00',
  `bonus` float(6,2) unsigned NOT NULL DEFAULT '0.00',
  `city` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', '周更生', '男', '24', '大专', '5000.00', '200.00', '山东省');
INSERT INTO `student` VALUES ('2', '王小平', '男', '28', '大专', '500.00', '200.00', '陕西省');
INSERT INTO `student` VALUES ('3', '周改娟', '女', '28', '大专', '8000.00', '300.00', '上海市');
INSERT INTO `student` VALUES ('4', '高舸', '男', '25', '高中', '4000.00', '300.00', '山西省');
INSERT INTO `student` VALUES ('5', '杨明', '男', '27', '高中', '6000.00', '1800.00', '山东省');
INSERT INTO `student` VALUES ('6', '孙娟', '女', '24', '大本', '12300.00', '1080.00', '北京市');
INSERT INTO `student` VALUES ('7', '王超', '男', '23', '大本', '2000.00', '30.00', null);
INSERT INTO `student` VALUES ('8', '刘传龙', '男', '24', '高中', '8900.00', '50.00', '河北省');
INSERT INTO `student` VALUES ('9', '王源泉', '男', '30', '研究生', '24000.00', '8000.00', '黑龙江省');
INSERT INTO `student` VALUES ('10', '王晨', '男', '31', '大专', '480.00', '90.00', '江西省');
INSERT INTO `student` VALUES ('11', '曹广阳', '男', '34', '大本', '9500.00', '700.00', '山东省');
INSERT INTO `student` VALUES ('12', '陈产川', '男', '29', '大专', '3000.00', '900.00', '山东省');
INSERT INTO `student` VALUES ('13', '陈立川', '男', '24', '大专', '3000.00', '910.00', '山东省');
INSERT INTO `student` VALUES ('14', '毛永祥', '男', '22', '高中', '2000.00', '900.00', '山东省');
INSERT INTO `student` VALUES ('15', '陈晨', '男', '24', '大本', '2900.00', '900.00', '山东省');
INSERT INTO `student` VALUES ('16', '常江波', '男', '35', '大专', '14000.00', '340.00', '湖南省');
INSERT INTO `student` VALUES ('17', '李铁荣', '男', '35', '大专', '14000.00', '140.00', '湖南省');
INSERT INTO `student` VALUES ('18', '赵金生', '男', '37', '大本', '14000.00', '940.00', '湖南省');
INSERT INTO `student` VALUES ('19', '史月林', '女', '26', '大本', '8900.00', '780.00', '甘肃省');
INSERT INTO `student` VALUES ('20', '杜青青', '女', '23', '大专', '14900.00', '2300.00', '吉林省');
INSERT INTO `student` VALUES ('21', '张帅', '男', '35', '高中', '23000.00', '3400.00', '辽宁省');
INSERT INTO `student` VALUES ('22', '陆枝', '男', '24', '研究生', '2800.00', '700.00', '山东省');
INSERT INTO `student` VALUES ('23', '陆楠', '女', '38', '研究生', '7800.00', '720.00', '北京市');
INSERT INTO `student` VALUES ('24', '李聪', '女', '33', '研究生', '8800.00', '820.00', '安徽省');
INSERT INTO `student` VALUES ('25', '李鬼', '女', '39', '研究生', '18800.00', '1820.00', '安徽省');
INSERT INTO `student` VALUES ('26', '谢媛嫒', '女', '25', '大本', '9400.00', '89.00', '河南省');
INSERT INTO `student` VALUES ('27', '谢嫒仪', '女', '26', '高中', '7000.00', '20.00', '河北省');
INSERT INTO `student` VALUES ('28', '袁国淇', '男', '27', '初中', '6800.00', '80.00', '河北省');
INSERT INTO `student` VALUES ('29', '孙东明', '男', '24', '大专', '58000.00', '2000.00', '陕西省');
INSERT INTO `student` VALUES ('30', '罗弟华', '男', '0', '大专', '38000.00', '1200.00', '江西省');
INSERT INTO `student` VALUES ('31', '韩振国', '男', '24', '大专', '28000.00', '2200.00', '山东省');
INSERT INTO `student` VALUES ('32', '韩佳佳', '女', '29', '大专', '18000.00', '2500.00', '河北省');
INSERT INTO `student` VALUES ('33', '韩立卿', '女', '29', '初中', '30000.00', '3200.00', '河北省');
INSERT INTO `student` VALUES ('34', '韩鹏飞', '男', '24', '大专', '3000.00', '3200.00', '湖南省');
INSERT INTO `student` VALUES ('35', '王开心', '女', '34', '研究生', '8000.00', '300.00', '山东省');
INSERT INTO `student` VALUES ('36', '靳佳佳', '女', '29', '大专', '3700.00', '240.00', '天津市');
INSERT INTO `student` VALUES ('37', '马翔红', '女', '29', '大专', '3000.00', '200.00', '上海市');
INSERT INTO `student` VALUES ('38', '李建平', '男', '29', '高中', '3980.00', '1200.00', '上海市');
INSERT INTO `student` VALUES ('39', '王新劳', '男', '35', '大本', '7800.00', '456.00', '山西省');
INSERT INTO `student` VALUES ('40', '姚新兵', '男', '39', '初中', '6700.00', '300.00', '河南省');
INSERT INTO `student` VALUES ('41', '贾原', '男', '35', '大本', '8970.00', '345.00', '北京市');
INSERT INTO `student` VALUES ('42', '贾似道', '男', '28', '大专', '23400.00', '2400.00', '北京市');
INSERT INTO `student` VALUES ('43', '刘明明', '男', '30', '高中', '5000.00', '200.00', '北京市');
INSERT INTO `student` VALUES ('44', '张三丰', '男', '29', '研究生', '23400.00', '5000.00', null);
INSERT INTO `student` VALUES ('45', '江荣华', '女', '24', '大本', '9878.00', '902.00', '湖北省');
