-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 02:15 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `admin table`
--

CREATE TABLE IF NOT EXISTS `admin table` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin table`
--

INSERT INTO `admin table` (`id`, `username`, `password`) VALUES
(1, 'gurneet', 'password'),
(2, 'saggu', 'gurneet');

-- --------------------------------------------------------

--
-- Table structure for table `business contacts`
--

CREATE TABLE IF NOT EXISTS `business contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contactno` int(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `business contacts`
--

INSERT INTO `business contacts` (`id`, `name`, `address`, `contactno`, `email`, `image`) VALUES
(1, 'Bill gates', ' 1835 73rd Ave NE, Medina, Washington', 50245945, 'billg@microsoft.com', 'billgates.jpg'),
(2, 'Carlos Slim', 'Mexico City', 397972939, 'cslim@hotmail.com', 'slim.jpg'),
(3, 'Mukesh Ambani', 'Mumbai, India', 1384922289, 'mambani@gmail.com', 'ambani.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
