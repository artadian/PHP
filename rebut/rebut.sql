-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2013 at 04:42 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rebut`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal_event` date DEFAULT NULL,
  `judul_event` varchar(50) DEFAULT NULL,
  `isi_event` text,
  `post_by` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `tanggal_event`, `judul_event`, `isi_event`, `post_by`) VALUES
(1, '2013-11-30', 'Konser Dies Natalis', 'konser dies natalis PTIIK dengan guest star Tani Maju', 'Angga'),
(6, '2013-12-03', 'Ayo Makan', 'Kontes Makan tingkat dunia', 'Arta Dian'),
(9, '2013-12-03', 'Cek', 'ini adalah cek biasa', 'Ian Maulana'),
(10, '2013-12-03', 'test 10.01', 'iansfokafaisdoaifnovihroiaw ohcoaiwcnhfaoiw rvhoaicnraoiwrv hoaiwcrnhoair hqoicnhoarw rhrn oa rohaimhaoiwroai aiomcoqfas', 'Angga');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE IF NOT EXISTS `gedung` (
  `id_gedung` int(3) NOT NULL AUTO_INCREMENT,
  `nama_gedung` varchar(50) DEFAULT NULL,
  `harga_gedung` double(10,0) DEFAULT NULL,
  `gambar_gedung` text,
  `informasi_gedung` text,
  PRIMARY KEY (`id_gedung`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `harga_gedung`, `gambar_gedung`, `informasi_gedung`) VALUES
(10, 'GOR Pertamina', 1500000, 'gor1.jpg', 'Gor Pertamina Brawijaya adalah sebuah gelanggang olahraga yang memiliki 3 sisi tribun dan juga lapangan basket di dalamnya. Gedung ini dapat digunakan untuk kegiatan olahraga maupun kegiatan - kegiatan lainnya'),
(14, 'Widyaloka', 850000, 'widyaloka2.jpg', 'Gedung Seminar'),
(12, 'Samantha Krida', 1000000, 'samantha1.jpg', 'Gedung buat konser');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE IF NOT EXISTS `penyewa` (
  `id_sewa` int(15) NOT NULL AUTO_INCREMENT,
  `identitas` bigint(25) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(75) NOT NULL,
  `kepentingan` varchar(50) DEFAULT NULL,
  `gedung` varchar(50) DEFAULT NULL,
  `harga_gedung` int(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_sewa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_sewa`, `identitas`, `nama`, `alamat`, `kepentingan`, `gedung`, `harga_gedung`, `tanggal`) VALUES
(1, 2147483647, 'Ian Maulana', 'Kertorejo 18 Malang', 'Seminar Nasional', 'Widyaloka', NULL, '2013-11-28'),
(2, 2147483647, 'Ian Maulana', 'Kertorejo 18 Malang', 'Seminar Nasional', 'Widyaloka', NULL, '2013-11-30'),
(3, 1150820, 'Ijun', 'Pakis Malang', 'Konser PTIIK', 'Samantha Krida', NULL, '2013-11-29'),
(4, 2147483647, 'Junaedi', 'Kepanjen City', 'Latihan', 'GOR Pertamina', NULL, '2013-12-18'),
(5, 123123, 'Fahmi Rizqogon', 'Malang aja', 'Basket Hore', 'GOR Pertamina', NULL, '2013-12-20'),
(6, 123456789012345, 'Ian', 'Malang aja', '', 'GOR Pertamina', NULL, '2013-12-19'),
(7, 0, '0', '0', '0', '0', NULL, '0000-00-00'),
(8, 115060800111037, 'Maulana Zaky', 'Jl. Kertorejo 18 Malang', 'Latihan Basket', 'GOR Pertamina', NULL, '2013-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `t_notes`
--

CREATE TABLE IF NOT EXISTS `t_notes` (
  `date` date NOT NULL,
  `notes` varchar(30) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_notes`
--

INSERT INTO `t_notes` (`date`, `notes`) VALUES
('2013-12-10', 'nyeburin dana'),
('2013-12-11', 'DEADLINE WEB REBUT'),
('2013-12-12', 'PRESENTASI'),
('2013-12-22', 'GOR PERTAMINA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
