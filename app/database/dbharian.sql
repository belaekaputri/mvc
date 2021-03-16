-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2021 at 05:25 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbharian`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_harian`
--

CREATE TABLE IF NOT EXISTS `daftar_harian` (
  `id` int(12) NOT NULL auto_increment,
  `jadwal` varchar(250) NOT NULL,
  `status` varchar(35) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `daftar_harian`
--

INSERT INTO `daftar_harian` (`id`, `jadwal`, `status`) VALUES
(52, 'BELAJAR', 'BELUM SELESAI');
