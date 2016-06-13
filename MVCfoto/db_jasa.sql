/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_jasa

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-06-20 00:09:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `berita`
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_post` date NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('1', 'PROMO', 'New Promo Buat bulan ini yuk, Gratis cetak buat foto personal broi', '2013-06-02', '1');
INSERT INTO `berita` VALUES ('3', 'FREE', 'Foto Baby Free Cetak ukuran 4r dengan harga 150Ribu saja, hanya sampai akhir Bulan', '2013-05-23', '1');
INSERT INTO `berita` VALUES ('5', 'saya', 'halooo', '0000-00-00', '1');
INSERT INTO `berita` VALUES ('6', 'Halo ndes', 'perhatian ini berita baru loo', '0000-00-00', '1');
INSERT INTO `berita` VALUES ('7', 'hai', 'berita baru di awal bulan', '2013-06-05', '1');
INSERT INTO `berita` VALUES ('8', 'hari jumat', 'laporan harus di stempel rek,.. cek keren ngono lo rek, onok tok e ', '2013-06-14', '1');

-- ----------------------------
-- Table structure for `booking`
-- ----------------------------
DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `no_booking` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `paket` varchar(15) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal_booking` date NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`no_booking`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of booking
-- ----------------------------
INSERT INTO `booking` VALUES ('1', '0', '0', '0', '0', '0', '0', '0000-00-00', 'pending');
INSERT INTO `booking` VALUES ('2', 'arta dian wicaksana', 'arta dirumah', '2147483647', 'artadianw@gmail.com', 'profil', 'malang', '0000-00-00', 'verifikasi');
INSERT INTO `booking` VALUES ('3', 'iyan', 'sumbersari', '90909090', 'hoody_woody@ymail.com', 'Potrait', 'free', '2013-06-20', null);
INSERT INTO `booking` VALUES ('4', 'artadian w', 'malang keras', '12345', 'hoody_woody@ymail.com', 'Prewedding', '', '2013-06-21', null);
INSERT INTO `booking` VALUES ('5', 'berlian', 'sumbersari', '90909090', 'glaceon87@gmail.com', 'year book', 'free', '2013-06-20', null);
INSERT INTO `booking` VALUES ('6', 'ryo cahoy', 'darjo', '2147483647', 'hoody_woody@ymail.com', 'Prewedding', '', '2013-06-21', null);
INSERT INTO `booking` VALUES ('7', 'ryo cahoy', 'darjo', '12345', 'diantiaritrifena@yahoo.co.id', 'Prewedding', '', '2013-06-23', 'pending');

-- ----------------------------
-- Table structure for `gallery`
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_post` date NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_gallery`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES ('3', 'cerita', 'depan1.JPG', '2013-06-02', null, '1');
INSERT INTO `gallery` VALUES ('4', 'MIE', 'mie.jpg', '2013-06-05', null, '1');
INSERT INTO `gallery` VALUES ('5', 'Jadul', 'IMG_6533.jpg', '2013-06-19', null, '1');
INSERT INTO `gallery` VALUES ('6', 'baju', 'Backup_of_RWT.jpg', '2013-06-19', null, '1');
INSERT INTO `gallery` VALUES ('7', 'saya', 'IMG_6517.jpg', '2013-06-19', null, '1');
INSERT INTO `gallery` VALUES ('8', 'saya', 'bebby2.jpg', '2013-06-19', 'personal', '1');
INSERT INTO `gallery` VALUES ('9', 'hari jumat', 'bebby.jpg', '2013-06-19', 'Prewedding', '1');
INSERT INTO `gallery` VALUES ('10', 'baju', 'Errea_93-147.png', '2013-06-19', 'personal', '1');
INSERT INTO `gallery` VALUES ('11', 'on stage', 'IMG_4136.jpg', '2013-06-19', 'liputan', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'arta', '1234', 'admin');
