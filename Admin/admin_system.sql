-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2014 at 09:25 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trainingcamt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_system`
--

CREATE TABLE IF NOT EXISTS `admin_system` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(15) NOT NULL,
  `myname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_system`
--

INSERT INTO `admin_system` (`id`, `user_name`, `user_pass`, `myname`) VALUES
(1, 'admin1', 'admin1', 'Worrasete'),
(2, 'admin2', 'admin2', 'Ronaldo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
