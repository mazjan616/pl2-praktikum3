/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100419
Source Host           : localhost:3306
Source Database       : kampus

Target Server Type    : MYSQL
Target Server Version : 100419
File Encoding         : 65001

Date: 2021-09-04 10:31:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `nip_dosen` int(10) NOT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nip_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO `dosen` VALUES ('14190001', 'Anggra Triawan');
INSERT INTO `dosen` VALUES ('14190002', 'Julio Warmansyah');
INSERT INTO `dosen` VALUES ('14190003', 'Didik Suwito Pribadi');
INSERT INTO `dosen` VALUES ('14190004', 'Evy Julianti');
INSERT INTO `dosen` VALUES ('14190005', 'Binanda Wicaksana');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `npm` int(10) NOT NULL,
  `nama_mhs` varchar(255) DEFAULT '',
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('14197000', 'Test');
INSERT INTO `mahasiswa` VALUES ('14197023', 'Muhamad Novaldy');
INSERT INTO `mahasiswa` VALUES ('14197024', 'Muhamad Ridwan Nurfauzan');
INSERT INTO `mahasiswa` VALUES ('14197025', 'Muhamad Sahrul');
INSERT INTO `mahasiswa` VALUES ('14197032', 'Rio Bagus Saputra');
INSERT INTO `mahasiswa` VALUES ('14197033', 'Risti Ramadanti');
INSERT INTO `mahasiswa` VALUES ('14197039', 'Wanda Riswanda');
INSERT INTO `mahasiswa` VALUES ('14197040', 'Yadi Ramadhan Tenggara');
INSERT INTO `mahasiswa` VALUES ('14197059', 'Rizki Ibnu Fajrin');

-- ----------------------------
-- Table structure for matkul
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO `matkul` VALUES ('DK301', 'Business Process Design and Management', '3');
INSERT INTO `matkul` VALUES ('DK306', 'Supply Chain Management', '4');
INSERT INTO `matkul` VALUES ('FK307', 'Statistics and Probability', '3');
INSERT INTO `matkul` VALUES ('FK310', 'Management of Science', '4');
INSERT INTO `matkul` VALUES ('GC206', 'Programming Language 2', '4');
INSERT INTO `matkul` VALUES ('GC222', 'Advanced Algorithms', '4');
INSERT INTO `matkul` VALUES ('IS308', 'Computer Application', '3');
INSERT INTO `matkul` VALUES ('IS310', 'User Exprerience/Intro. To HCI', '3');
INSERT INTO `matkul` VALUES ('IS311', 'Data and Information System', '3');
INSERT INTO `matkul` VALUES ('IS312', 'Database Management System', '3');

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id` int(10) NOT NULL,
  `npm` int(10) NOT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(255) DEFAULT NULL,
  `uts` varchar(10) DEFAULT NULL,
  `uas` varchar(10) DEFAULT NULL,
  `quiz` varchar(10) DEFAULT NULL,
  `tugas` varchar(10) DEFAULT NULL,
  `kehadiran` varchar(10) DEFAULT NULL,
  `pertemuan` varchar(10) DEFAULT NULL,
  `absensi` varchar(10) DEFAULT NULL,
  `nilai` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`,`npm`,`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES ('1', '14197024', 'Muhamad Ridwan', 'DK301', 'Business Process Design and Management', '87', '62', '90', '70', '16', '16', null, null, null);
INSERT INTO `nilai` VALUES ('2', '14197033', 'Risti Ramadanti', 'DK301', 'Business Process Design and Management', '77', '86', '80', '70', '16', '16', null, null, '');
INSERT INTO `nilai` VALUES ('3', '14197023', 'Muhamad Novaldy', 'DK301', 'Business Process Design and Management', '70', '77', '90', '75', '16', '16', null, null, '');
INSERT INTO `nilai` VALUES ('4', '14197059', 'Rizki Ibnu Fajrin', 'DK301', 'Business Process Design and Management', '70', '70', '80', '80', '16', '16', null, null, '');
INSERT INTO `nilai` VALUES ('5', '14197039', 'Wanda Riswanda', 'DK301', 'Business Process Design and Management', '80', '80', '80', '70', '16', '16', '', '', '');
INSERT INTO `nilai` VALUES ('6', '14197040', 'Yadi Ramadhan Tenggara', 'DK301', 'Business Process Design and Management', '80', '80', '80', '80', '16', '16', '', '', '');
