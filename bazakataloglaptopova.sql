/*
 Navicat MySQL Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : bazakataloglaptopova

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 02/06/2019 23:17:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `forename` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`admin_id`) USING BTREE,
  UNIQUE INDEX `uq_admin_email`(`email`) USING BTREE,
  UNIQUE INDEX `uq_admin_username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'nikola', 'ristovski', '34231', 'nikrikpik@gmail.com', 'razgar', '$2y$10$PtpCaqL9X92eivq2d1GgWekhOqxVveNpYcKF/r9jsiVrXpkYNBJMm', '2019-04-25 22:07:50');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE,
  UNIQUE INDEX `uq_category_name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (2, 'Brz');
INSERT INTO `category` VALUES (1, 'dostupan');
INSERT INTO `category` VALUES (3, 'Primecen');

-- ----------------------------
-- Table structure for cpu
-- ----------------------------
DROP TABLE IF EXISTS `cpu`;
CREATE TABLE `cpu`  (
  `cpu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `manufacturer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `frequency` double(10, 2) UNSIGNED NOT NULL,
  `core_count` int(4) UNSIGNED NOT NULL,
  PRIMARY KEY (`cpu_id`) USING BTREE,
  UNIQUE INDEX `uq_cpu_model`(`model`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cpu
-- ----------------------------
INSERT INTO `cpu` VALUES (1, 'AMD', 'Rayzyon', 4.20, 8);
INSERT INTO `cpu` VALUES (2, 'INTELL', 'i5', 3.90, 6);
INSERT INTO `cpu` VALUES (3, 'AMD', 'GP++', 3.80, 4);

-- ----------------------------
-- Table structure for display
-- ----------------------------
DROP TABLE IF EXISTS `display`;
CREATE TABLE `display`  (
  `display_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `screen_size` double(3, 1) UNSIGNED NOT NULL,
  `resolution` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_touchscreen` smallint(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`display_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of display
-- ----------------------------
INSERT INTO `display` VALUES (1, 18.0, '800x600', 0);
INSERT INTO `display` VALUES (2, 22.0, '1024x960', 0);

-- ----------------------------
-- Table structure for gpu
-- ----------------------------
DROP TABLE IF EXISTS `gpu`;
CREATE TABLE `gpu`  (
  `gpu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('integrated','external') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video_memory` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`gpu_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gpu
-- ----------------------------
INSERT INTO `gpu` VALUES (1, 'integrated', 'RADEON', 4);
INSERT INTO `gpu` VALUES (2, 'external', 'NVIDIA', 12);

-- ----------------------------
-- Table structure for laptop
-- ----------------------------
DROP TABLE IF EXISTS `laptop`;
CREATE TABLE `laptop`  (
  `laptop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10, 2) UNSIGNED NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `operating_system` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyboard_layout` enum('US','UK','YU') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_numpad` smallint(1) UNSIGNED NOT NULL,
  `is_deleted` smallint(1) UNSIGNED NOT NULL,
  `cpu_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `display_id` int(10) UNSIGNED NOT NULL,
  `gpu_id` int(10) UNSIGNED NOT NULL,
  `ram_capacity` int(10) UNSIGNED NOT NULL,
  `ram_type` enum('DDR2','DDR3','DDR4') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`laptop_id`) USING BTREE,
  INDEX `fk_laptop_cpu_id`(`cpu_id`) USING BTREE,
  INDEX `fk_laptop_category_id`(`category_id`) USING BTREE,
  INDEX `fk_laptop_display_id`(`display_id`) USING BTREE,
  INDEX `fk_laptop_gpu_id`(`gpu_id`) USING BTREE,
  CONSTRAINT `fk_laptop_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_laptop_cpu_id` FOREIGN KEY (`cpu_id`) REFERENCES `cpu` (`cpu_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_laptop_display_id` FOREIGN KEY (`display_id`) REFERENCES `display` (`display_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_laptop_gpu_id` FOREIGN KEY (`gpu_id`) REFERENCES `gpu` (`gpu_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of laptop
-- ----------------------------
INSERT INTO `laptop` VALUES (1, 'Omorika', 24000.00, 'omorika.png', 'WINDOWS', 'US', 0, 0, 1, 1, 1, 1, 4, 'DDR3', 'IBM', '2019-04-25 22:15:06');
INSERT INTO `laptop` VALUES (2, 'Uposljen', 72000.00, 'uposljen.png', 'windows XP', 'UK', 1, 0, 2, 1, 2, 2, 8, 'DDR4', 'AMD', '2019-04-25 22:23:42');
INSERT INTO `laptop` VALUES (3, 'Svete na dlanu', 42000.00, 'svetnadlanu.png', 'MAC OS X', 'UK', 1, 0, 1, 2, 1, 1, 8, 'DDR3', 'AMD', '2019-04-25 23:56:51');
INSERT INTO `laptop` VALUES (4, 'aaa', 0.00, 'aa.pnh', 'win 10', 'US', 1, 0, 1, 3, 2, 1, 12, 'DDR3', 'qaaaa', '2019-04-26 00:08:08');

-- ----------------------------
-- Table structure for port
-- ----------------------------
DROP TABLE IF EXISTS `port`;
CREATE TABLE `port`  (
  `port_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `laptop_id` int(10) UNSIGNED NOT NULL,
  `type` enum('HDMI','Video Port','VGA','DVI','USB C') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`port_id`) USING BTREE,
  INDEX `fk_laptop_port_laptop_id`(`laptop_id`) USING BTREE,
  CONSTRAINT `fk_port_laptop_id` FOREIGN KEY (`laptop_id`) REFERENCES `laptop` (`laptop_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of port
-- ----------------------------
INSERT INTO `port` VALUES (1, 1, 'HDMI');
INSERT INTO `port` VALUES (2, 1, 'Video Port');
INSERT INTO `port` VALUES (3, 3, 'VGA');
INSERT INTO `port` VALUES (4, 3, 'USB C');
INSERT INTO `port` VALUES (5, 1, 'Video Port');
INSERT INTO `port` VALUES (6, 1, 'Video Port');
INSERT INTO `port` VALUES (7, 1, 'DVI');
INSERT INTO `port` VALUES (8, 1, 'DVI');

-- ----------------------------
-- Table structure for storage
-- ----------------------------
DROP TABLE IF EXISTS `storage`;
CREATE TABLE `storage`  (
  `storage_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `laptop_id` int(10) UNSIGNED NOT NULL,
  `type` enum('SSD','HDD') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`storage_id`) USING BTREE,
  INDEX `fk_laptop_storage_laptop_id`(`laptop_id`) USING BTREE,
  CONSTRAINT `fk_storage_laptop_id` FOREIGN KEY (`laptop_id`) REFERENCES `laptop` (`laptop_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of storage
-- ----------------------------
INSERT INTO `storage` VALUES (1, 1, 'SSD', 240);
INSERT INTO `storage` VALUES (2, 1, 'HDD', 120);
INSERT INTO `storage` VALUES (3, 2, 'SSD', 1000);

SET FOREIGN_KEY_CHECKS = 1;
