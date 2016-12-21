-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2016 at 02:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `politeknik_kampar`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `Id_daftar` varchar(8) NOT NULL,
  `User_id` varchar(30) NOT NULL,
  `User_psw` varchar(30) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Kelamin` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `Foto` int(11) NOT NULL,
  `Profil` text NOT NULL,
  `Tgl_daftar` datetime NOT NULL,
  PRIMARY KEY (`Id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`Id_daftar`, `User_id`, `User_psw`, `Nama`, `Kelamin`, `Alamat`, `Email`, `Telepon`, `Foto`, `Profil`, `Tgl_daftar`) VALUES
('ridho ga', '01', '123456', 'ridho ganda rahardi', 'p', ' \r\n	bangkinang		', 'ridho2015.tif@poltek-kampar.ac', '081233344444', 0, '', '2016-12-19 08:30:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
