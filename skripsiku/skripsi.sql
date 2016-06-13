/*
MySQL Data Transfer
Source Host: localhost
Source Database: skripsi
Target Host: localhost
Target Database: skripsi
Date: 12/29/2015 10:46:45 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for bobot_prioritas
-- ----------------------------
CREATE TABLE `bobot_prioritas` (
  `id_bobot` int(2) NOT NULL AUTO_INCREMENT,
  `skala_kerusakan` double NOT NULL,
  `jumlah_siswa` double NOT NULL,
  `jumlah_kelas` double NOT NULL,
  `prestasi_akademik` double NOT NULL,
  `prestasi_non_akademik` double NOT NULL,
  `tahun_bantuan` double NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for data_sekolah
-- ----------------------------
CREATE TABLE `data_sekolah` (
  `id_sekolah` int(2) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(35) NOT NULL,
  `skala` int(1) NOT NULL,
  `siswa` int(1) NOT NULL,
  `kelas` int(1) NOT NULL,
  `akademik` int(1) NOT NULL,
  `nonakademik` int(1) NOT NULL,
  `bantuanakhir` int(1) NOT NULL,
  `jumlahkelas` int(3) DEFAULT NULL,
  `jumlahrombel` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for matriks_kriteria
-- ----------------------------
CREATE TABLE `matriks_kriteria` (
  `id_kriteria` int(2) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(20) NOT NULL,
  `skala1` double NOT NULL,
  `skala2` double NOT NULL,
  `skala3` double NOT NULL,
  `skala4` double NOT NULL,
  `skala5` double NOT NULL,
  `skala6` double NOT NULL,
  `siswa1` double NOT NULL,
  `siswa2` double NOT NULL,
  `siswa3` double NOT NULL,
  `siswa4` double NOT NULL,
  `siswa5` double NOT NULL,
  `siswa6` double NOT NULL,
  `kelas1` double NOT NULL,
  `kelas2` double NOT NULL,
  `kelas3` double NOT NULL,
  `kelas4` double NOT NULL,
  `kelas5` double NOT NULL,
  `kelas6` double NOT NULL,
  `akademik1` double NOT NULL,
  `akademik2` double NOT NULL,
  `akademik3` double NOT NULL,
  `akademik4` double NOT NULL,
  `akademik5` double NOT NULL,
  `akademik6` double NOT NULL,
  `nonakademik1` double NOT NULL,
  `nonakademik2` double NOT NULL,
  `nonakademik3` double NOT NULL,
  `nonakademik4` double NOT NULL,
  `nonakademik5` double NOT NULL,
  `nonakademik6` double NOT NULL,
  `bantuan1` double NOT NULL,
  `bantuan2` double NOT NULL,
  `bantuan3` double NOT NULL,
  `bantuan4` double NOT NULL,
  `bantuan5` double NOT NULL,
  `bantuan6` double NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for user
-- ----------------------------
CREATE TABLE `user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nama` varchar(60) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `bobot_prioritas` VALUES ('1', '0.2729', '0.1053', '0.2606', '0.1389', '0.0967', '0.1255');
INSERT INTO `bobot_prioritas` VALUES ('2', '0.247', '0.1176', '0.2389', '0.1407', '0.098', '0.1577');
INSERT INTO `data_sekolah` VALUES ('5', 'S5', '3', '4', '5', '1', '1', '4', '9', '12');
INSERT INTO `data_sekolah` VALUES ('6', 'S6', '1', '2', '5', '1', '1', '5', '6', '8');
INSERT INTO `data_sekolah` VALUES ('7', 'S7', '3', '2', '3', '1', '3', '4', '6', '6');
INSERT INTO `data_sekolah` VALUES ('10', 'S10', '3', '3', '5', '3', '1', '5', '5', '6');
INSERT INTO `data_sekolah` VALUES ('15', 'S14', '3', '2', '3', '1', '1', '1', '5', '6');
INSERT INTO `data_sekolah` VALUES ('17', 'S17', '1', '3', '5', '1', '3', '3', '6', '8');
INSERT INTO `data_sekolah` VALUES ('21', 'S21', '3', '1', '3', '1', '1', '5', '6', '6');
INSERT INTO `data_sekolah` VALUES ('25', 'S25', '3', '3', '3', '1', '3', '3', '6', '6');
INSERT INTO `data_sekolah` VALUES ('30', 'S30', '5', '2', '3', '3', '1', '5', '6', '6');
INSERT INTO `data_sekolah` VALUES ('32', 'S32', '1', '4', '5', '1', '1', '2', '4', '6');
INSERT INTO `matriks_kriteria` VALUES ('10', 'test1', '1', '3', '3', '0.33333333333333', '0.33333333333333', '3', '3', '0.33333333333333', '0.5', '0.33333333333333', '0.5', '0.33333333333333', '0.33333333333333', '0.33333333333333', '1', '1', '0.5', '1', '0.33333333333333', '0.33333333333333', '1', '0.33333333333333', '0.33333333333333', '1', '0.33333333333333', '2', '2', '3', '1', '1', '0.33333333333333', '1', '1', '1', '1', '1');
INSERT INTO `matriks_kriteria` VALUES ('14', 'test2', '1', '0.33333333333333', '0.33333333333333', '0.33333333333333', '0.33333333333333', '0.33333333333333', '3', '1', '0.5', '1', '0.33333333333333', '0.33333333333333', '3', '2', '1', '1', '0.2', '1', '3', '1', '1', '1', '1', '1', '3', '3', '5', '1', '1', '0.33333333333333', '3', '3', '1', '1', '3', '1');
INSERT INTO `matriks_kriteria` VALUES ('15', 'Default', '1', '0.33333333333333', '2', '0.33333333333333', '0.33333333333333', '0.33333333333333', '3', '1', '3.003003003003', '2', '1', '0.5', '0.5', '0.333', '1', '0.5', '0.5', '1', '3', '0.5', '2', '1', '1', '0.5', '3', '1', '2', '1', '1', '2', '3', '2', '1', '2', '0.5', '1');
INSERT INTO `matriks_kriteria` VALUES ('16', 'test3', '1', '0.5', '2', '0.33333333333333', '0.33333333333333', '0.33333333333333', '2', '1', '3.003003003003', '2', '1', '0.5', '0.5', '0.333', '1', '0.33333333333333', '0.33333333333333', '0.33333333333333', '3', '0.5', '3', '1', '1', '0.5', '3', '1', '3', '1', '1', '2', '3', '2', '3', '0.5', '0.5', '1');
INSERT INTO `matriks_kriteria` VALUES ('17', 'Percobaan', '1', '0.5', '2', '0.5', '0.33333333333333', '0.33333333333333', '2', '1', '3.003003003003', '2', '1', '0.5', '0.5', '0.333', '1', '1', '0.5', '1', '2', '0.5', '1', '1', '1', '2', '3', '1', '2', '1', '1', '2', '3', '2', '1', '0.5', '0.5', '1');
INSERT INTO `user` VALUES ('1', 'admin', 'admin', 'Arta Dian Wicaksana');
