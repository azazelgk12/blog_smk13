/*
 Navicat Premium Data Transfer

 Source Server         : local_mysql
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : pmi_4

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 10/10/2018 13:00:16
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
  `Password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'admin', 'admin', '');

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
  `id_admin` int(10) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_info`) USING BTREE,
  INDEX `id_adm`(`id_admin`) USING BTREE,
  CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for jadwal_mobil_unit
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_mobil_unit`;
CREATE TABLE `jadwal_mobil_unit`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `waktu` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kdd` int(10) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_tempat` int(10) NOT NULL,
  `target` int(10) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `a`(`id_kdd`) USING BTREE,
  INDEX `b`(`id_tempat`) USING BTREE,
  CONSTRAINT `a` FOREIGN KEY (`id_kdd`) REFERENCES `kdd` (`id_kdd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `b` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jadwal_mobil_unit
-- ----------------------------
INSERT INTO `jadwal_mobil_unit` VALUES (4, '2018-10-04', '09:00', 0, 'jl caringin', 0, 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `jadwal_mobil_unit` VALUES (13, '2018-10-10', '00:12', 0, 'ksdjfksj', 0, 134, '2018-10-10 12:59:00', '2018-10-10 05:59:00');

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
INSERT INTO `kdd` VALUES (0, 'borma');

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
  `wb` int(10) NOT NULL,
  `tc` int(10) NOT NULL,
  `prc` int(10) NOT NULL,
  `ahf` int(10) NOT NULL,
  `ffp` int(10) NOT NULL,
  `bc` int(10) NOT NULL,
  `lp` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of stok_darah
-- ----------------------------
INSERT INTO `stok_darah` VALUES (1, 'A', '+', 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL);
INSERT INTO `stok_darah` VALUES (2, 'B', '+', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
INSERT INTO `stok_darah` VALUES (3, 'AB', '+', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
INSERT INTO `stok_darah` VALUES (4, 'O', '+', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
INSERT INTO `stok_darah` VALUES (5, 'A', '-', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
INSERT INTO `stok_darah` VALUES (6, 'B', '-', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
INSERT INTO `stok_darah` VALUES (7, 'AB', '-', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);
INSERT INTO `stok_darah` VALUES (8, 'O', '-', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);

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
INSERT INTO `tempat` VALUES (0, 'pasar');

SET FOREIGN_KEY_CHECKS = 1;
