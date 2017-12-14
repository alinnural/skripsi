-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 06:44 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simuraa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_pakan`
--

CREATE TABLE IF NOT EXISTS `bahan_pakan` (
  `id_bahan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bahan` varchar(30) NOT NULL,
  `jenis_sumber` varchar(15) NOT NULL,
  `harga_bahan_default` float NOT NULL,
  `min_bahan_default` float NOT NULL,
  `max_bahan_default` float NOT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `bahan_pakan`
--

INSERT INTO `bahan_pakan` (`id_bahan`, `nama_bahan`, `jenis_sumber`, `harga_bahan_default`, `min_bahan_default`, `max_bahan_default`) VALUES
(1, 'Jagung Lokal', 'Energi', 3800, 25, 50),
(2, 'Jagung Import', 'Energi', 4000, 25, 50),
(3, 'Dedak Halus', 'Energi', 2300, 0, 15),
(4, 'Bekatul', 'Energi', 2200, 0, 15),
(5, 'Pollard', 'Energi', 2500, 0, 6),
(6, 'Gaplek', 'Energi', 3000, 0, 10),
(7, 'Sorgum', 'Energi', 3000, 0, 15),
(8, 'Bungkil Kedelai', 'Protein', 7500, 5, 40),
(9, 'Biji Kedelai', 'Protein', 5000, 0, 20),
(10, 'Corn Gluten Feed (CGF)', 'Protein', 3500, 0, 7),
(11, 'Corn Gluten Meal (CGM)', 'Protein', 7000, 0, 7),
(12, 'Bungkil Kacang Tanah', 'Protein', 6000, 0, 5),
(13, 'Bungkil Kapuk', 'Protein', 2000, 0, 3),
(14, 'Bungkil Kelapa', 'Protein', 2500, 0, 5),
(15, 'Bungkil Kelapa Sawit', 'Protein', 2800, 0, 10),
(16, 'Meat Bone Meal (MBM)', 'Protein', 7000, 0, 7),
(17, 'Tepung Ikan', 'Protein', 7500, 0, 8),
(18, 'Tepung Cacing', 'Protein', 4000, 0, 15),
(19, 'Tepung Darah', 'Protein', 5000, 0, 3),
(20, 'Manure Ayam', 'Protein', 1000, 0, 5),
(21, 'Minyak Ikan', 'Energi', 10000, 0, 2),
(22, 'CPO', 'Energi', 5000, 1, 4),
(23, 'Molases', 'Energi', 2000, 0, 5),
(24, 'Garam', 'Mineral', 1500, 0.25, 0.5),
(25, 'Tepung Keong', 'Protein', 2500, 0, 8),
(26, 'Kapur', 'Mineral', 500, 0, 2),
(27, 'CaCO3', 'Mineral', 750, 0, 2),
(28, 'DCP', 'Mineral', 20000, 0, 1),
(29, 'MCP', 'Mineral', 15000, 0, 1),
(30, 'L-Lysin', 'A. Amino', 50000, 0, 0.3),
(31, 'DL-Methionine', 'A. Amino', 70000, 0, 0.3),
(32, 'Premix', 'Premix', 30000, 0.1, 0.25),
(33, 'Premix Boiler', 'Premix', 40000, 0.1, 0.25),
(34, 'Premix Layer', 'Premix', 50000, 0.1, 0.25);

-- --------------------------------------------------------

--
-- Table structure for table `bahan_pakan_custom`
--

CREATE TABLE IF NOT EXISTS `bahan_pakan_custom` (
  `id_forsum` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `harga_bahan_custom` float NOT NULL,
  `min_bahan_custom` float NOT NULL,
  `max_bahan_custom` float NOT NULL,
  PRIMARY KEY (`id_forsum`,`id_bahan`),
  KEY `id_user` (`id_forsum`),
  KEY `id_bahan` (`id_bahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_pakan_custom`
--

INSERT INTO `bahan_pakan_custom` (`id_forsum`, `id_bahan`, `harga_bahan_custom`, `min_bahan_custom`, `max_bahan_custom`) VALUES
(1, 1, 3800, 25, 50),
(1, 3, 2300, 0, 15),
(1, 5, 2500, 0, 6),
(1, 8, 7500, 5, 40),
(1, 11, 7000, 0, 7),
(1, 16, 7000, 0, 7),
(1, 17, 7500, 0, 8),
(1, 22, 5000, 1, 4),
(1, 27, 750, 0, 2),
(1, 28, 20000, 0, 1),
(2, 1, 3800, 25, 50),
(2, 3, 2300, 0, 15),
(2, 5, 2500, 0, 6),
(2, 8, 7500, 5, 40),
(2, 11, 7000, 0, 7),
(2, 16, 7000, 0, 7),
(2, 17, 7500, 0, 8),
(2, 22, 5000, 1, 4),
(2, 27, 750, 0, 2),
(2, 28, 20000, 0, 1),
(6, 1, 3800, 25, 40),
(6, 3, 2300, 0, 15),
(6, 5, 2500, 0, 6),
(6, 8, 7500, 5, 40),
(6, 11, 7000, 0, 7),
(6, 16, 7000, 0, 7),
(6, 17, 7500, 0, 8),
(6, 22, 5000, 1, 4),
(6, 27, 750, 0, 2),
(6, 28, 20000, 0, 1),
(6, 30, 50000, 0.1, 0.3),
(6, 31, 70000, 0.1, 0.3),
(25, 1, 3800, 25, 50),
(25, 3, 2300, 0, 15),
(25, 5, 2500, 0, 6),
(25, 8, 7500, 5, 40),
(25, 11, 7000, 0, 7),
(25, 16, 7000, 0, 7),
(25, 17, 7500, 0, 8),
(25, 22, 5000, 1, 4),
(25, 27, 750, 0, 2),
(25, 28, 20000, 0, 1),
(26, 1, 3800, 25, 50),
(26, 3, 2300, 0, 15),
(26, 5, 2500, 0, 6),
(26, 8, 7500, 5, 40),
(26, 11, 7000, 0, 7),
(26, 16, 7000, 0, 7),
(26, 17, 7500, 0, 8),
(26, 22, 5000, 1, 4),
(26, 27, 750, 0, 2),
(26, 28, 20000, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forsum`
--

CREATE TABLE IF NOT EXISTS `forsum` (
  `id_forsum` int(11) NOT NULL AUTO_INCREMENT,
  `nama_forsum` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_unggas` int(11) NOT NULL,
  PRIMARY KEY (`id_forsum`),
  KEY `id_unggas` (`id_unggas`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `forsum`
--

INSERT INTO `forsum` (`id_forsum`, `nama_forsum`, `id_user`, `id_unggas`) VALUES
(1, 'Acceptance Test 1', 12, 11),
(2, 'Acceptance Test 2', 12, 12),
(4, 'Acceptance Test 3', 12, 13),
(5, 'Acceptance Test 4', 12, 14),
(6, 'Acceptance Test 5', 12, 15),
(25, 'Ayam saya', 12, 11),
(26, 'Unggas kedua saya', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `nutrien`
--

CREATE TABLE IF NOT EXISTS `nutrien` (
  `id_nutrien` int(11) NOT NULL,
  `nama_nutrien` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nutrien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrien`
--

INSERT INTO `nutrien` (`id_nutrien`, `nama_nutrien`) VALUES
(1, 'Bahan Kering'),
(2, 'Abu'),
(3, 'Protein Kasar'),
(4, 'Lemak Kasar'),
(5, 'Serat Kasar'),
(6, 'BetaN'),
(7, 'Energi Metabolisme'),
(8, 'Kalsium'),
(9, 'Phospor Total'),
(10, 'Phospor Tersedia'),
(11, 'Lysin'),
(12, 'Methionin');

-- --------------------------------------------------------

--
-- Table structure for table `nutrien_bahan`
--

CREATE TABLE IF NOT EXISTS `nutrien_bahan` (
  `id_bahan` int(11) NOT NULL,
  `id_nutrien` int(11) NOT NULL,
  `komposisi_nutrien` float NOT NULL,
  PRIMARY KEY (`id_bahan`,`id_nutrien`),
  KEY `id_nutrien` (`id_nutrien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrien_bahan`
--

INSERT INTO `nutrien_bahan` (`id_bahan`, `id_nutrien`, `komposisi_nutrien`) VALUES
(1, 1, 87),
(1, 2, 1.76),
(1, 3, 8),
(1, 4, 3.8),
(1, 5, 2.2),
(1, 6, 84.24),
(1, 7, 3300),
(1, 8, 0.02),
(1, 9, 0.28),
(1, 10, 0.09),
(1, 11, 0.2278),
(1, 12, 0.169),
(2, 1, 88),
(2, 2, 1.76),
(2, 3, 8),
(2, 4, 3.8),
(2, 5, 2.2),
(2, 6, 84.24),
(2, 7, 3350),
(2, 8, 0.02),
(2, 9, 0.28),
(2, 10, 0.09),
(2, 11, 0.2278),
(2, 12, 0.169),
(3, 1, 89.7),
(3, 2, 7.88),
(3, 3, 11.32),
(3, 4, 13),
(3, 5, 8),
(3, 6, 59.8),
(3, 7, 2900),
(3, 8, 0.07),
(3, 9, 1.5),
(3, 10, 0.5),
(3, 11, 0.4246),
(3, 12, 0.264),
(4, 1, 88.3),
(4, 2, 1.17),
(4, 3, 8.9),
(4, 4, 1),
(4, 5, 0.81),
(4, 6, 88.12),
(4, 7, 3100),
(4, 8, 0.09),
(4, 9, 0.08),
(4, 10, 0.03),
(4, 11, 0.3375),
(4, 12, 3.08),
(5, 1, 87.4),
(5, 2, 4),
(5, 3, 12.68),
(5, 4, 4),
(5, 5, 15),
(5, 6, 65.32),
(5, 7, 2800),
(5, 8, 0.14),
(5, 9, 1.15),
(5, 10, 0.2),
(5, 11, 0.5231),
(5, 12, 0.2),
(6, 1, 87),
(6, 2, 2.5),
(6, 3, 2.5),
(6, 4, 0.7),
(6, 5, 4.6),
(6, 6, 89.7),
(6, 7, 2900),
(6, 8, 0.15),
(6, 9, 0.1),
(6, 10, 0.03),
(6, 11, 0.1),
(6, 12, 0.04),
(7, 1, 87),
(7, 2, 3),
(7, 3, 8.8),
(7, 4, 2.9),
(7, 5, 2.3),
(7, 6, 83),
(7, 7, 3288),
(7, 8, 0.04),
(7, 9, 0.3),
(7, 10, 0.05),
(7, 11, 0.21),
(7, 12, 0.16),
(8, 1, 87),
(8, 2, 7),
(8, 3, 42),
(8, 4, 1.9),
(8, 5, 7),
(8, 6, 42.1),
(8, 7, 2290),
(8, 8, 0.27),
(8, 9, 0.56),
(8, 10, 0.19),
(8, 11, 2.607),
(8, 12, 0.609),
(9, 1, 88.8),
(9, 2, 5.8),
(9, 3, 39.6),
(9, 4, 21.3),
(9, 5, 6.3),
(9, 6, 27),
(9, 7, 3500),
(9, 8, 3.3),
(9, 9, 6.1),
(9, 10, 0.5),
(9, 11, 6.2),
(9, 12, 1.4),
(10, 1, 88.3),
(10, 2, 6.9),
(10, 3, 21.7),
(10, 4, 3.4),
(10, 5, 8.3),
(10, 6, 59.7),
(10, 7, 2079),
(10, 8, 1.6),
(10, 9, 10.2),
(10, 10, 7.65),
(10, 11, 2.9),
(10, 12, 1.7),
(11, 1, 90),
(11, 2, 2.68),
(11, 3, 64),
(11, 4, 2.91),
(11, 5, 0.8),
(11, 6, 29.55),
(11, 7, 3720),
(11, 8, 0.05),
(11, 9, 0.5),
(11, 10, 0.17),
(11, 11, 0.9813),
(11, 12, 1.381),
(12, 1, 92.1),
(12, 2, 7.37),
(12, 3, 43),
(12, 4, 1.21),
(12, 5, 17.4),
(12, 6, 31.02),
(12, 7, 2650),
(12, 8, 0.16),
(12, 9, 0.56),
(12, 10, 0.06),
(12, 11, 1.4591),
(12, 12, 0.454),
(13, 1, 93),
(13, 2, 3),
(13, 3, 40.9),
(13, 4, 2.9),
(13, 5, 2.3),
(13, 6, 50.9),
(13, 7, 3288),
(13, 8, 0.2),
(13, 9, 1.05),
(13, 10, 0.1),
(13, 11, 1.59),
(13, 12, 0.55),
(14, 1, 87),
(14, 2, 6.65),
(14, 3, 18),
(14, 4, 6),
(14, 5, 17.33),
(14, 6, 52.02),
(14, 7, 2800),
(14, 8, 0.07),
(14, 9, 0.47),
(14, 10, 0.15),
(14, 11, 0.6253),
(14, 12, 0.237),
(15, 1, 91.2),
(15, 2, 4.7),
(15, 3, 16.7),
(15, 4, 9.2),
(15, 5, 19.8),
(15, 6, 49.6),
(15, 7, 2650),
(15, 8, 2.8),
(15, 9, 6),
(15, 10, 0.5),
(15, 11, 2.9),
(15, 12, 1.8),
(16, 1, 92.1),
(16, 2, 6.88),
(16, 3, 43),
(16, 4, 10.93),
(16, 5, 2.46),
(16, 6, 36.73),
(16, 7, 2375),
(16, 8, 9.78),
(16, 9, 4.5),
(16, 10, 3.15),
(16, 11, 2.0787),
(16, 12, 0.541),
(17, 1, 91.9),
(17, 2, 26),
(17, 3, 55),
(17, 4, 7.52),
(17, 5, 0.7),
(17, 6, 10.78),
(17, 7, 2830),
(17, 8, 7.19),
(17, 9, 2.88),
(17, 10, 2.016),
(17, 11, 3.9475),
(17, 12, 1.461),
(18, 1, 90.8),
(18, 2, 9.4),
(18, 3, 61),
(18, 4, 8.6),
(18, 5, 3.2),
(18, 6, 17.8),
(18, 7, 3900),
(18, 8, 5.4),
(18, 9, 10.2),
(18, 10, 2),
(18, 11, 7.4),
(18, 12, 4),
(19, 1, 99),
(19, 2, 4),
(19, 3, 81.1),
(19, 4, 1.6),
(19, 5, 0.5),
(19, 6, 13.3),
(19, 7, 2830),
(19, 8, 0.55),
(19, 9, 0.42),
(19, 10, 0.05),
(19, 11, 7.05),
(19, 12, 0.53),
(20, 1, 91.9),
(20, 2, 11.2),
(20, 3, 22.9),
(20, 4, 2.4),
(20, 5, 41.6),
(20, 6, 21.9),
(20, 7, 1.4),
(20, 8, 0),
(20, 9, 0),
(20, 10, 0),
(20, 11, 4.3),
(20, 12, 1),
(21, 1, 99),
(21, 2, 0.5),
(21, 3, 0),
(21, 4, 99),
(21, 5, 0),
(21, 6, 0),
(21, 7, 8700),
(21, 8, 0),
(21, 9, 0),
(21, 10, 0),
(21, 11, 0),
(21, 12, 0),
(22, 1, 99),
(22, 2, 0.5),
(22, 3, 0),
(22, 4, 99),
(22, 5, 0),
(22, 6, 0),
(22, 7, 7500),
(22, 8, 0),
(22, 9, 0),
(22, 10, 0),
(22, 11, 0),
(22, 12, 0),
(23, 1, 70.9),
(23, 2, 4),
(23, 3, 4),
(23, 4, 0.1),
(23, 5, 1),
(23, 6, 90.9),
(23, 7, 2280),
(23, 8, 0.8),
(23, 9, 0),
(23, 10, 0),
(23, 11, 0),
(23, 12, 0),
(24, 1, 99.6),
(24, 2, 0),
(24, 3, 0),
(24, 4, 0),
(24, 5, 0),
(24, 6, 0),
(24, 7, 0),
(24, 8, 0),
(24, 9, 0),
(24, 10, 0),
(24, 11, 0),
(24, 12, 0),
(25, 1, 90.8),
(25, 2, 21.7),
(25, 3, 50.5),
(25, 4, 4.2),
(25, 5, 8.8),
(25, 6, 14.8),
(25, 7, 1980),
(25, 8, 8.3),
(25, 9, 5.6),
(25, 10, 2.8),
(25, 11, 4.6),
(25, 12, 1.6),
(26, 1, 99),
(26, 2, 0),
(26, 3, 0),
(26, 4, 0),
(26, 5, 0),
(26, 6, 0),
(26, 7, 0),
(26, 8, 38),
(26, 9, 0),
(26, 10, 0),
(26, 11, 0),
(26, 12, 0),
(27, 1, 99),
(27, 2, 0),
(27, 3, 0),
(27, 4, 0),
(27, 5, 0),
(27, 6, 0),
(27, 7, 0),
(27, 8, 40),
(27, 9, 0),
(27, 10, 0),
(27, 11, 0),
(27, 12, 0),
(28, 1, 93.5),
(28, 2, 0),
(28, 3, 0),
(28, 4, 0),
(28, 5, 0),
(28, 6, 0),
(28, 7, 0),
(28, 8, 22.72),
(28, 9, 17.68),
(28, 10, 13.26),
(28, 11, 0),
(28, 12, 0),
(29, 1, 93.5),
(29, 2, 0),
(29, 3, 0),
(29, 4, 0),
(29, 5, 0),
(29, 6, 0),
(29, 7, 0),
(29, 8, 16),
(29, 9, 12),
(29, 10, 9),
(29, 11, 0),
(29, 12, 0),
(30, 1, 98),
(30, 2, 0),
(30, 3, 95.8),
(30, 4, 0),
(30, 5, 0),
(30, 6, 3.7),
(30, 7, 3990),
(30, 8, 0),
(30, 9, 0),
(30, 10, 0),
(30, 11, 78.5),
(30, 12, 0),
(31, 1, 99),
(31, 2, 0.2),
(31, 3, 58),
(31, 4, 0),
(31, 5, 0),
(31, 6, 41.8),
(31, 7, 5020),
(31, 8, 0),
(31, 9, 0),
(31, 10, 0),
(31, 11, 0),
(31, 12, 99),
(32, 1, 99),
(32, 2, 0),
(32, 3, 0),
(32, 4, 0),
(32, 5, 0),
(32, 6, 0),
(32, 7, 0),
(32, 8, 0),
(32, 9, 0),
(32, 10, 0),
(32, 11, 0),
(32, 12, 0),
(33, 1, 99),
(33, 2, 0),
(33, 3, 0),
(33, 4, 0),
(33, 5, 0),
(33, 6, 0),
(33, 7, 0),
(33, 8, 0),
(33, 9, 0),
(33, 10, 0),
(33, 11, 0),
(33, 12, 0),
(34, 1, 99),
(34, 2, 0),
(34, 3, 0),
(34, 4, 0),
(34, 5, 0),
(34, 6, 0),
(34, 7, 0),
(34, 8, 0),
(34, 9, 0),
(34, 10, 0),
(34, 11, 0),
(34, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nutrien_unggas`
--

CREATE TABLE IF NOT EXISTS `nutrien_unggas` (
  `id_unggas` int(11) NOT NULL,
  `id_nutrien` int(11) NOT NULL,
  `min_nutrien` float NOT NULL,
  `max_nutrien` float NOT NULL,
  PRIMARY KEY (`id_unggas`,`id_nutrien`),
  KEY `id_nutrien` (`id_nutrien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrien_unggas`
--

INSERT INTO `nutrien_unggas` (`id_unggas`, `id_nutrien`, `min_nutrien`, `max_nutrien`) VALUES
(1, 1, 87, 100),
(1, 2, 0, 100),
(1, 3, 22, 23),
(1, 4, 0, 100),
(1, 5, 0, 4),
(1, 6, 0, 100),
(1, 7, 3000, 3200),
(1, 8, 0.9, 1.5),
(1, 9, 0, 100),
(1, 10, 0.5, 0.6),
(1, 11, 1.1, 1.3),
(1, 12, 0.5, 0.7),
(2, 1, 87, 100),
(2, 2, 0, 100),
(2, 3, 18, 20),
(2, 4, 0, 100),
(2, 5, 0, 4),
(2, 6, 0, 100),
(2, 7, 3200, 3300),
(2, 8, 0.9, 1.5),
(2, 9, 0, 100),
(2, 10, 0.5, 0.6),
(2, 11, 0.85, 1),
(2, 12, 0.3, 0.45),
(3, 1, 87, 100),
(3, 2, 0, 100),
(3, 3, 17, 18),
(3, 4, 0, 100),
(3, 5, 0, 5),
(3, 6, 0, 100),
(3, 7, 2800, 3000),
(3, 8, 0.9, 1.2),
(3, 9, 0, 100),
(3, 10, 0.4, 0.55),
(3, 11, 0.8, 1),
(3, 12, 0.28, 0.35),
(4, 1, 87, 100),
(4, 2, 0, 100),
(4, 3, 15, 17),
(4, 4, 0, 100),
(4, 5, 0, 5),
(4, 6, 0, 100),
(4, 7, 2800, 3000),
(4, 8, 0.8, 1.1),
(4, 9, 0, 100),
(4, 10, 0.45, 0.55),
(4, 11, 0.6, 0.8),
(4, 12, 0.23, 0.32),
(5, 1, 87, 100),
(5, 2, 0, 100),
(5, 3, 14, 15),
(5, 4, 0, 100),
(5, 5, 0, 5),
(5, 6, 0, 100),
(5, 7, 2800, 3000),
(5, 8, 0.8, 1.1),
(5, 9, 0, 100),
(5, 10, 0.3, 0.45),
(5, 11, 0.45, 0.6),
(5, 12, 0.2, 0.3),
(6, 1, 87, 100),
(6, 2, 0, 100),
(6, 3, 16, 17),
(6, 4, 0, 100),
(6, 5, 0, 5),
(6, 6, 0, 100),
(6, 7, 2800, 3000),
(6, 8, 1.8, 2.5),
(6, 9, 0, 100),
(6, 10, 0.35, 0.45),
(6, 11, 0.5, 0.65),
(6, 12, 0.21, 0.35),
(7, 1, 87, 100),
(7, 2, 0, 100),
(7, 3, 18, 19),
(7, 4, 0, 100),
(7, 5, 0, 6),
(7, 6, 0, 100),
(7, 7, 2700, 2800),
(7, 8, 0.9, 1.1),
(7, 9, 0, 100),
(7, 10, 0.4, 0.5),
(7, 11, 0.6, 0.7),
(7, 12, 0.25, 0.35),
(8, 1, 87, 100),
(8, 2, 0, 100),
(8, 3, 15, 17),
(8, 4, 0, 100),
(8, 5, 0, 6),
(8, 6, 0, 100),
(8, 7, 2800, 2900),
(8, 8, 0.9, 1.1),
(8, 9, 0, 100),
(8, 10, 0.4, 0.5),
(8, 11, 0.6, 0.7),
(8, 12, 0.25, 0.35),
(11, 1, 86, 100),
(11, 2, 0, 100),
(11, 3, 20, 23),
(11, 4, 0, 100),
(11, 5, 0, 100),
(11, 6, 0, 100),
(11, 7, 3000, 3200),
(11, 8, 0, 100),
(11, 9, 0.6, 1),
(11, 10, 0, 100),
(11, 11, 0, 100),
(11, 12, 0, 100),
(12, 1, 86, 100),
(12, 2, 0, 100),
(12, 3, 20, 23),
(12, 4, 0, 100),
(12, 5, 0, 4),
(12, 6, 0, 100),
(12, 7, 3000, 3200),
(12, 8, 0.9, 1.5),
(12, 9, 0.6, 1),
(12, 10, 0, 100),
(12, 11, 0, 100),
(12, 12, 0, 100),
(13, 1, 86, 100),
(13, 2, 0, 100),
(13, 3, 20, 23),
(13, 4, 0, 100),
(13, 5, 0, 4),
(13, 6, 0, 100),
(13, 7, 3000, 3200),
(13, 8, 0.9, 1.5),
(13, 9, 0.6, 1),
(13, 10, 0, 100),
(13, 11, 0.5, 1.3),
(13, 12, 0.3, 0.7),
(14, 1, 86, 100),
(14, 2, 0, 100),
(14, 3, 20, 23),
(14, 4, 5, 8.5),
(14, 5, 0, 4),
(14, 6, 0, 100),
(14, 7, 3000, 3200),
(14, 8, 0.9, 1.5),
(14, 9, 0.6, 1),
(14, 10, 0.4, 0.5),
(14, 11, 0.5, 1.3),
(14, 12, 0.3, 0.7),
(15, 1, 86, 100),
(15, 2, 0, 4.9),
(15, 3, 20, 23),
(15, 4, 5, 8.5),
(15, 5, 0, 4),
(15, 6, 0, 57),
(15, 7, 3000, 3200),
(15, 8, 0.9, 1.5),
(15, 9, 0.6, 1),
(15, 10, 0.4, 0.5),
(15, 11, 0.5, 1.3),
(15, 12, 0.3, 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `unggas`
--

CREATE TABLE IF NOT EXISTS `unggas` (
  `id_unggas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_unggas` varchar(30) NOT NULL,
  PRIMARY KEY (`id_unggas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `unggas`
--

INSERT INTO `unggas` (`id_unggas`, `nama_unggas`) VALUES
(1, 'Broiler Starter'),
(2, 'Broiler Finisher'),
(3, 'Layer (0-6 Minggu)'),
(4, 'Layer (6-12 Minggu)'),
(5, 'Layer (12-18 Minggu)'),
(6, 'Layer (>18 Minggu)'),
(7, 'Ayam Kampung (0-3 Minggu)'),
(8, 'Ayam Kampung (3-8 Minggu)'),
(11, 'Unggas 1'),
(12, 'Unggas 2'),
(13, 'Unggas 3'),
(14, 'Unggas 4'),
(15, 'Unggas 5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat_rumah` varchar(200) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat_rumah`, `nomor_telepon`, `perusahaan`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'Admin', 'Taman Yasmin', '08567890000', 'PT SiMURAA'),
(2, 'user2', '2', 'user2@gmail.com', 'User Dua', 'Taman Cimanggu Bogor', '08123456789', 'PT Ayam Nusantara'),
(12, 'Diardian', '12345', 'diardian_feb12m@apps.ipb.ac.id', 'Diardian Febiani', 'Dramaga IPB', '087766554433', 'PT Unggas Nusantara');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_pakan_custom`
--
ALTER TABLE `bahan_pakan_custom`
  ADD CONSTRAINT `bahan_pakan_custom_ibfk_1` FOREIGN KEY (`id_forsum`) REFERENCES `forsum` (`id_forsum`),
  ADD CONSTRAINT `bahan_pakan_custom_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `bahan_pakan` (`id_bahan`);

--
-- Constraints for table `forsum`
--
ALTER TABLE `forsum`
  ADD CONSTRAINT `forsum_ibfk_1` FOREIGN KEY (`id_unggas`) REFERENCES `unggas` (`id_unggas`),
  ADD CONSTRAINT `forsum_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `nutrien_bahan`
--
ALTER TABLE `nutrien_bahan`
  ADD CONSTRAINT `nutrien_bahan_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `bahan_pakan` (`id_bahan`),
  ADD CONSTRAINT `nutrien_bahan_ibfk_2` FOREIGN KEY (`id_nutrien`) REFERENCES `nutrien` (`id_nutrien`);

--
-- Constraints for table `nutrien_unggas`
--
ALTER TABLE `nutrien_unggas`
  ADD CONSTRAINT `nutrien_unggas_ibfk_1` FOREIGN KEY (`id_unggas`) REFERENCES `unggas` (`id_unggas`),
  ADD CONSTRAINT `nutrien_unggas_ibfk_2` FOREIGN KEY (`id_nutrien`) REFERENCES `nutrien` (`id_nutrien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
