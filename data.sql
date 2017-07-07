/*
Navicat MySQL Data Transfer

Source Server         : zx
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : data

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2017-07-04 14:03:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');
INSERT INTO `admin` VALUES ('2', 'qaz', '987456');
INSERT INTO `admin` VALUES ('10', '333', '333');
INSERT INTO `admin` VALUES ('11', 'zxc', 'zxc');
INSERT INTO `admin` VALUES ('12', 'qsc', 'qsc');
INSERT INTO `admin` VALUES ('15', '369', '369');
INSERT INTO `admin` VALUES ('16', 'poi', '123456');

-- ----------------------------
-- Table structure for `bis_base_info`
-- ----------------------------
DROP TABLE IF EXISTS `bis_base_info`;
CREATE TABLE `bis_base_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `licence_logo` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  `bank_user` varchar(50) NOT NULL DEFAULT '',
  `faren` varchar(20) NOT NULL DEFAULT '',
  `faren_tel` varchar(20) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bis_base_info
-- ----------------------------
INSERT INTO `bis_base_info` VALUES ('14', 'fgdg', '1084581212@qq.com', '/think/public/upload\\20170626\\258645bc9f3e4f61b486bf60f5ba2296.jpg', '/think/public/upload\\20170626\\453e869727019b9dc1f501171bc8c948.jpg', '', '1', '1', '3212341412', '0.00', 'sfdj', 'sfds', 'fsds', 'sfds', '0', '0', '1498488189', '1498488189');
INSERT INTO `bis_base_info` VALUES ('15', 'fgdg', '1084581212@qq.com', '/think/public/upload\\20170626\\258645bc9f3e4f61b486bf60f5ba2296.jpg', '/think/public/upload\\20170626\\453e869727019b9dc1f501171bc8c948.jpg', '', '1', '1', '3212341412', '0.00', 'sfdj', 'sfds', 'fsds', 'sfds', '0', '0', '1498488234', '1498488234');
INSERT INTO `bis_base_info` VALUES ('16', '皮包公司', '1084581212@qq.com', '/think/public/upload\\20170626\\b878de4bca1af5f191d2c9e82654d613.jpg', '/think/public/upload\\20170626\\82fdc36fcf4b42d3d1ce62982e885d30.jpg', '<p>路上看到解放路看到</p>', '1', '1,2', '143243242', '0.00', '连开三家分店', '是的', '士大夫', '123424', '0', '0', '1498489835', '1498489835');

-- ----------------------------
-- Table structure for `bis_totle_info`
-- ----------------------------
DROP TABLE IF EXISTS `bis_totle_info`;
CREATE TABLE `bis_totle_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_id` int(11) unsigned NOT NULL DEFAULT '0',
  `open_time` int(11) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `is_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `api_address` varchar(255) NOT NULL DEFAULT '',
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `category_id` int(11) unsigned NOT NULL DEFAULT '0',
  `category_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `bis_id` (`bis_id`),
  KEY `category_id` (`category_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bis_totle_info
-- ----------------------------
INSERT INTO `bis_totle_info` VALUES ('7', '皮包公司', '/think/public/upload\\20170626\\b878de4bca1af5f191d2c9e82654d613.jpg', '', '143243252345', '是来看风景的', '', '', '7', '0', '<p>士大夫</p>', '1', '成都青羊区南桥视窗', '0', '1,2', '3', '3,6', '', '0', '1498489835', '1498489835');

-- ----------------------------
-- Table structure for `bis_user`
-- ----------------------------
DROP TABLE IF EXISTS `bis_user`;
CREATE TABLE `bis_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bis_user
-- ----------------------------
INSERT INTO `bis_user` VALUES ('7', 'xiayin', 'f67ce42a6382a91ac61cb6db5adecddd', '169', '', '0', '1', '0', '1', '1498489835', '1498489835');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `listorder` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `update_time` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('2', '0', '哈哈镜', '0', '1', '1497452464', '1497452464');
INSERT INTO `category` VALUES ('3', '0', '服装', '0', '1', '1497496995', '1497496995');
INSERT INTO `category` VALUES ('4', '3', '衣服', '0', '1', '1497497881', '1497497881');
INSERT INTO `category` VALUES ('5', '0', '爱迪', '80', '1', '1499128187', '1497508128');
INSERT INTO `category` VALUES ('6', '2', '达大厦', '0', '1', '1497508140', '1497508140');
INSERT INTO `category` VALUES ('7', '2', '大声道', '0', '1', '1497508150', '1497508150');
INSERT INTO `category` VALUES ('8', '0', '天气', '100', '0', '1498635783', '1497508161');
INSERT INTO `category` VALUES ('9', '3', '裤子', '0', '1', '1497514709', '1497508225');
INSERT INTO `category` VALUES ('11', '0', '水果', '10', '1', '1498471393', '1497859567');
INSERT INTO `category` VALUES ('12', '0', '面包', '30', '1', '1499128194', '1497859585');
INSERT INTO `category` VALUES ('13', '11', '草莓', '0', '1', '1497859621', '1497859621');
INSERT INTO `category` VALUES ('14', '12', '虎皮卷', '0', '1', '1497859673', '1497859673');
INSERT INTO `category` VALUES ('15', '12', '果糕', '0', '1', '1498471309', '1498471309');
INSERT INTO `category` VALUES ('16', '0', '为', '0', '-1', '1498552842', '1498534551');
INSERT INTO `category` VALUES ('17', '0', '并vhj', '40', '1', '1499128202', '1498534558');
INSERT INTO `category` VALUES ('18', '8', '龙卷风', '0', '1', '1498553113', '1498553113');
INSERT INTO `category` VALUES ('19', '0', '吧', '0', '-1', '1498553158', '1498553151');
INSERT INTO `category` VALUES ('20', '0', 'nfkd', '0', '-1', '1498612360', '1498612329');
INSERT INTO `category` VALUES ('21', '12', '水果卷', '0', '1', '1498612530', '1498612530');
INSERT INTO `category` VALUES ('22', '12', '蛋卷', '0', '1', '1498612541', '1498612541');
INSERT INTO `category` VALUES ('23', '12', '披萨', '0', '1', '1498612568', '1498612568');
INSERT INTO `category` VALUES ('24', '3', '上衣', '0', '1', '1498612867', '1498612867');
INSERT INTO `category` VALUES ('25', '3', '下装', '0', '1', '1498612881', '1498612881');
INSERT INTO `category` VALUES ('26', '3', '裙子', '0', '1', '1498612898', '1498612898');

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  KEY `parent_id` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '北京', 'beijing1', '0', '0', '0', '1', '1474013959', '0');
INSERT INTO `city` VALUES ('2', '北京', 'beijing', '1', '0', '0', '1', '1474014007', '0');
INSERT INTO `city` VALUES ('4', '江西', 'jiangxi', '0', '0', '0', '1', '1474014162', '0');
INSERT INTO `city` VALUES ('5', '南昌', 'nanchang', '4', '1', '0', '1', '1474014181', '0');
INSERT INTO `city` VALUES ('6', '上饶', 'shangrao', '4', '0', '0', '1', '1474014193', '0');
INSERT INTO `city` VALUES ('7', '抚州', 'fuzhou', '4', '0', '0', '1', '1474014204', '0');
INSERT INTO `city` VALUES ('8', '景德镇', 'jdz', '4', '0', '0', '1', '1474014220', '0');
INSERT INTO `city` VALUES ('9', '九江', 'jiujiang', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('10', '赣州', 'ganzhou', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('11', '萍乡', 'pingxiang', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('12', '宜春', 'yichun', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('13', '吉安', 'jian', '4', '0', '0', '1', '0', '0');
INSERT INTO `city` VALUES ('14', '成都', 'chengdu', '0', '0', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for `featured`
-- ----------------------------
DROP TABLE IF EXISTS `featured`;
CREATE TABLE `featured` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of featured
-- ----------------------------
INSERT INTO `featured` VALUES ('1', '1', '好吃', '/app/public/upload\\20170623\\c2d4755dcee13d7cb9776ab276e98ebc.jpg', 'app/public/index.php/', '好吃', '0', '1', '1498183918', '1498186740');

-- ----------------------------
-- Table structure for `recommend`
-- ----------------------------
DROP TABLE IF EXISTS `recommend`;
CREATE TABLE `recommend` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '',
  `image_path` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of recommend
-- ----------------------------
INSERT INTO `recommend` VALUES ('1', '1', '好吃', '/app/public/upload\\20170623\\c2d4755dcee13d7cb9776ab276e98ebc.jpg', 'app/public/index.php/', '好吃', '0', '1', '1498183918', '1498186740');
INSERT INTO `recommend` VALUES ('2', '1', 'fdvgdsfbs', '/app/public/upload\\20170630\\812607e5b7823cd5f71db33223029bb7.jpg', 'bsdfbs', 'ffdsb', '0', '0', '1498801951', '1498801951');
INSERT INTO `recommend` VALUES ('3', '1', 'jn tmfhyj', '/app/public/upload\\20170630\\b54b512d1a2be82fa333b72e47338a40.jpg', 'bsdfbs', 'tjmunt', '0', '0', '1498815371', '1498815371');
INSERT INTO `recommend` VALUES ('4', '2', '程序上的', '/app/public/upload\\20170630\\f6b7e04e947a3eb15bc3843659dab68e.jpg', 'vhet', 'vegrt', '0', '0', '1498815393', '1498815393');
INSERT INTO `recommend` VALUES ('5', '1', '你是第几', '/think/public/upload\\20170704\\e6505bcfc763efe84ae324ce146b6b9f.jpg', 'gtbnsdbh', 'sbnsfbf', '0', '0', '1499136044', '1499136044');
INSERT INTO `recommend` VALUES ('6', '1', 'bshb n', '/think/public/upload\\20170704\\528055e82dfeaeaeb8ade6f5e0eeb8dc.jpg', 'sdf ', 'dfsv对吧', '0', '0', '1499139877', '1499139877');
