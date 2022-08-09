/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 80025
 Source Host           : localhost:3306
 Source Schema         : grade

 Target Server Type    : MySQL
 Target Server Version : 80025
 File Encoding         : 65001

 Date: 09/08/2022 10:44:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tp_access
-- ----------------------------
DROP TABLE IF EXISTS `tp_access`;
CREATE TABLE `tp_access`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint UNSIGNED NOT NULL,
  `role_id` mediumint UNSIGNED NOT NULL,
  `details` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_access
-- ----------------------------
INSERT INTO `tp_access` VALUES (1, 19, 2, NULL);
INSERT INTO `tp_access` VALUES (2, 20, 4, NULL);
INSERT INTO `tp_access` VALUES (3, 21, 5, NULL);
INSERT INTO `tp_access` VALUES (4, 24, 1, NULL);
INSERT INTO `tp_access` VALUES (5, 25, 3, NULL);
INSERT INTO `tp_access` VALUES (6, 19, 3, NULL);
INSERT INTO `tp_access` VALUES (7, 21, 4, NULL);
INSERT INTO `tp_access` VALUES (8, 19, 1, NULL);

-- ----------------------------
-- Table structure for tp_book
-- ----------------------------
DROP TABLE IF EXISTS `tp_book`;
CREATE TABLE `tp_book`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint UNSIGNED NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_book
-- ----------------------------
INSERT INTO `tp_book` VALUES (1, 19, '《莎士比亚》');
INSERT INTO `tp_book` VALUES (2, 20, '《悲惨世界》');
INSERT INTO `tp_book` VALUES (3, 21, '《西游记》');
INSERT INTO `tp_book` VALUES (4, 24, '《红楼梦》');
INSERT INTO `tp_book` VALUES (5, 25, '《圣经》');
INSERT INTO `tp_book` VALUES (6, 26, '《三个代表》');
INSERT INTO `tp_book` VALUES (7, 27, '《国富论》');
INSERT INTO `tp_book` VALUES (8, 29, '《道德情操论》');
INSERT INTO `tp_book` VALUES (9, 79, '《资本论》');

-- ----------------------------
-- Table structure for tp_one
-- ----------------------------
DROP TABLE IF EXISTS `tp_one`;
CREATE TABLE `tp_one`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `user` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '学生名',
  `math` tinyint UNSIGNED NOT NULL COMMENT '数学成绩',
  `chinese` tinyint NOT NULL,
  `english` tinyint NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_one
-- ----------------------------
INSERT INTO `tp_one` VALUES (1, '张三', 158, 85, 95, '2016-07-23 09:15:30');
INSERT INTO `tp_one` VALUES (2, '李四', 28, 95, 89, '2016-07-23 09:15:50');
INSERT INTO `tp_one` VALUES (3, '王五', 95, 92, 95, '2016-07-23 09:16:02');
INSERT INTO `tp_one` VALUES (4, '马七', 84, 87, 94, '2016-07-23 09:16:16');
INSERT INTO `tp_one` VALUES (25, '赵八', 88, 88, 78, '2017-03-02 02:45:34');

-- ----------------------------
-- Table structure for tp_profile
-- ----------------------------
DROP TABLE IF EXISTS `tp_profile`;
CREATE TABLE `tp_profile`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint NOT NULL,
  `hobby` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_profile
-- ----------------------------
INSERT INTO `tp_profile` VALUES (1, 19, '喜欢大姐姐', 1);
INSERT INTO `tp_profile` VALUES (2, 20, '特爱吃肉', 0);
INSERT INTO `tp_profile` VALUES (3, 21, '朽木露琪亚', -1);
INSERT INTO `tp_profile` VALUES (4, 24, '暗恋小红', 2);
INSERT INTO `tp_profile` VALUES (5, 25, '毕迪丽', 1);
INSERT INTO `tp_profile` VALUES (6, 26, '特兰克斯', -1);
INSERT INTO `tp_profile` VALUES (7, 27, '琦玉爷爷', 1);
INSERT INTO `tp_profile` VALUES (8, 29, '有空就修行', 1);
INSERT INTO `tp_profile` VALUES (9, 79, '会长大人', 0);
INSERT INTO `tp_profile` VALUES (37, 19, '不喜欢吃青椒', 1);

-- ----------------------------
-- Table structure for tp_role
-- ----------------------------
DROP TABLE IF EXISTS `tp_role`;
CREATE TABLE `tp_role`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_role
-- ----------------------------
INSERT INTO `tp_role` VALUES (1, '超级管理员');
INSERT INTO `tp_role` VALUES (2, '评论审核专员');
INSERT INTO `tp_role` VALUES (3, '图片监察员');
INSERT INTO `tp_role` VALUES (4, '帐户处理专员');
INSERT INTO `tp_role` VALUES (5, '广告投放专员');

-- ----------------------------
-- Table structure for tp_two
-- ----------------------------
DROP TABLE IF EXISTS `tp_two`;
CREATE TABLE `tp_two`  (
  `uid` mediumint UNSIGNED NOT NULL,
  `gender` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '男',
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_two
-- ----------------------------
INSERT INTO `tp_two` VALUES (1, '男');
INSERT INTO `tp_two` VALUES (2, '女');
INSERT INTO `tp_two` VALUES (3, '男');
INSERT INTO `tp_two` VALUES (4, '男');
INSERT INTO `tp_two` VALUES (25, '女');

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '男',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` decimal(8, 2) UNSIGNED NOT NULL DEFAULT 0.00,
  `details` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uid` smallint NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT 0 COMMENT '状态',
  `list` json NULL,
  `delete_time` datetime NULL DEFAULT NULL,
  `create_time` datetime NOT NULL DEFAULT '1997-01-01 01:01:01' COMMENT '创建时间',
  `update_time` datetime NOT NULL DEFAULT '1997-01-01 01:01:01' COMMENT '修改时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 302 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES (19, '蜡笔小新', '123', '男', 'xiaoxin@163.com', 60.00, '123', 1001, -1, NULL, NULL, '2016-06-27 16:45:26', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (20, '路飞', '123', '男', 'lufei@163.com', 70.00, '123', 1002, 0, NULL, NULL, '2016-06-27 16:55:56', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (21, '黑崎一护', '456', '男', 'yihu@163.com', 80.00, '123', 1003, 1, NULL, NULL, '2016-07-27 17:22:16', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (24, '小明', '123', '男', 'xiaoming@163.com', 90.00, '123', 1004, 2, NULL, NULL, '2016-08-27 23:50:52', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (25, '孙悟饭', '123', '男', 'wufan@163.com', 100.00, '123', 1005, -1, NULL, NULL, '2016-08-28 18:02:53', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (26, '孙悟天', '123', '男', 'wutian@163.com', 110.00, '123', NULL, 0, NULL, NULL, '2016-09-28 22:07:38', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (27, '樱桃小丸子', '123', '女', 'yingtao@163.com', 77.00, '123', 1007, 1, NULL, NULL, '2016-10-29 10:53:58', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (29, '孙悟空', '123', '男', 'wukong@163.com', 100.00, '123', 1008, 2, NULL, NULL, '2018-12-11 10:09:36', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (76, '李白', '123', '男', 'UPPER(EMAIL)', 52.00, '123', 1011, 0, NULL, NULL, '2019-10-28 10:00:39', '2019-12-25 13:28:04');
INSERT INTO `tp_user` VALUES (79, '辉夜', '123', '女', 'HUIYE@163.COM', 91.00, '123', 1009, -3, NULL, NULL, '2019-09-20 22:01:42', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (301, '李黑', '123', '男', 'LIBAI@163.COM', 102.00, '123', 2022, 3, NULL, NULL, '1997-01-01 01:01:01', '2020-01-16 17:19:08');
INSERT INTO `tp_user` VALUES (302, '漩涡鸣人', 'aabbcc', '男', NULL, 0.00, '打架', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (303, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (304, '漩涡鸣人', 'aabbcc', '男', NULL, 0.00, '打架', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (305, '漩涡鸣人', 'aabbcc', '男', NULL, 0.00, '拉面', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (306, '漩涡鸣人', 'aabbcc', '男', NULL, 0.00, '冰棍', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (307, '漩涡鸣人', 'aabbcc', '男', NULL, 0.00, '拉面', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (308, '漩涡鸣人', 'aabbcc', '男', NULL, 0.00, '冰棍', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (309, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (310, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (311, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (312, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (313, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (314, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (315, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (316, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (317, '猪突猛进', '2323221', '男', NULL, 0.00, '123123', NULL, 0, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');
INSERT INTO `tp_user` VALUES (318, '李煌', '2323221', '男', 'WW@CC.COM', 4.00, '123123', NULL, -8, NULL, NULL, '1997-01-01 01:01:01', '1997-01-01 01:01:01');

SET FOREIGN_KEY_CHECKS = 1;
