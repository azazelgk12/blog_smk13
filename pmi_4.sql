/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : 127.0.0.1:3306
 Source Schema         : pmi_4

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 08/10/2018 20:22:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(10) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (0, 'tri', 'tri', 'tri', '');

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nm_agenda` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` datetime(0) NOT NULL,
  `deskripsi` datetime(0) NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_admin` int(10) NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `update_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_admin`(`id_admin`) USING BTREE,
  CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for informasi
-- ----------------------------
DROP TABLE IF EXISTS `informasi`;
CREATE TABLE `informasi`  (
  `id_info` int(10) NOT NULL,
  `judul_info` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` varchar(2550) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_adm` int(10) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_info`) USING BTREE,
  INDEX `id_adm`(`id_adm`) USING BTREE,
  CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for jadwal_mobil_unit
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_mobil_unit`;
CREATE TABLE `jadwal_mobil_unit`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `waktu` time(0) NOT NULL,
  `id_kdd` int(10) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_tempat` int(10) NOT NULL,
  `target` int(10) NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `update_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `a`(`id_kdd`) USING BTREE,
  INDEX `b`(`id_tempat`) USING BTREE,
  CONSTRAINT `a` FOREIGN KEY (`id_kdd`) REFERENCES `kdd` (`id_kdd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `b` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jadwal_mobil_unit
-- ----------------------------
INSERT INTO `jadwal_mobil_unit` VALUES (11, '2018-09-13', '10:33:18', 0, 'jalan caringin', 0, 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for kdd
-- ----------------------------
DROP TABLE IF EXISTS `kdd`;
CREATE TABLE `kdd`  (
  `id_kdd` int(10) NOT NULL,
  `nm_kdd` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kdd`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kdd
-- ----------------------------
INSERT INTO `kdd` VALUES (0, 'yogya');

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak`  (
  `id_kontak` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NULL DEFAULT NULL,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no.telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pos` decimal(25, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kontak`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `kontak_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for sosme
-- ----------------------------
DROP TABLE IF EXISTS `sosme`;
CREATE TABLE `sosme`  (
  `id_sosmed` int(10) NOT NULL,
  `nama_sosmed` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_sosmed`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for stok_darah
-- ----------------------------
DROP TABLE IF EXISTS `stok_darah`;
CREATE TABLE `stok_darah`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `golongandarah` enum('A','B','AB','O') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rhesus` enum('-','+') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `wb` int(11) NOT NULL,
  `tc` int(11) NOT NULL,
  `prc` int(11) NOT NULL,
  `ffp` int(11) NOT NULL,
  `ahf` int(11) NOT NULL,
  `bc` int(11) NOT NULL,
  `lp` int(11) NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of stok_darah
-- ----------------------------
INSERT INTO `stok_darah` VALUES (1, 'A', '+', 0, 7, 4, 0, 1, 1, 1, 1, NULL, '2018-09-24 03:08:18');
INSERT INTO `stok_darah` VALUES (2, 'B', '+', 0, 101, 9, 0, 0, 0, 0, 0, NULL, '2018-10-01 01:52:16');
INSERT INTO `stok_darah` VALUES (11, 'AB', '+', 9, 8, 0, 0, 0, 0, 0, 0, NULL, '2018-09-24 02:07:34');
INSERT INTO `stok_darah` VALUES (12, 'O', '+', 2, 9, 3, 3, 3, 3, 3, 3, NULL, '2018-10-01 12:31:35');
INSERT INTO `stok_darah` VALUES (13, 'A', '-', 8, 0, 0, 0, 0, 0, 0, 0, NULL, '2018-09-23 00:20:44');
INSERT INTO `stok_darah` VALUES (14, 'B', '-', 7, 0, 0, 0, 0, 0, 0, 0, NULL, '2018-09-23 00:20:58');
INSERT INTO `stok_darah` VALUES (15, 'AB', '-', 7, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '2018-09-23 02:08:25');
INSERT INTO `stok_darah` VALUES (16, 'O', '-', 7, 8, 3, 3, 3, 3, 3, 0, NULL, '2018-10-01 12:31:52');

-- ----------------------------
-- Table structure for tempat
-- ----------------------------
DROP TABLE IF EXISTS `tempat`;
CREATE TABLE `tempat`  (
  `id_tempat` int(10) NOT NULL,
  `nm_tempat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_tempat`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tempat
-- ----------------------------
INSERT INTO `tempat` VALUES (0, 'gedungsate');

SET FOREIGN_KEY_CHECKS = 1;
