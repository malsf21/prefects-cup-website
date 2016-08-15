-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2016 at 10:22 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prefectscup`
--
CREATE DATABASE IF NOT EXISTS `prefectscup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prefectscup`;

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE IF NOT EXISTS `standings` (
  `date` text NOT NULL,
  `bremner` int(11) NOT NULL,
  `howard` int(11) NOT NULL,
  `jackson` int(11) NOT NULL,
  `martland` int(11) NOT NULL,
  `mchugh` int(11) NOT NULL,
  `mowbray` int(11) NOT NULL,
  `orr` int(11) NOT NULL,
  `scadding` int(11) NOT NULL,
  `seaton` int(11) NOT NULL,
  `wedd` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping sample data for table `standings`
--

INSERT INTO `standings` (`date`, `bremner`, `howard`, `jackson`, `martland`, `mchugh`, `mowbray`, `orr`, `scadding`, `seaton`, `wedd`, `id`) VALUES
('0000-00-00', 312, 272, 187, 253, 138, 187, 292, 235, 260, 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `name` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
