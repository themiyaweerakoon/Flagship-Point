-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2020 at 06:21 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flagship_point`
--
CREATE DATABASE IF NOT EXISTS `flagship_point` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `flagship_point`;

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE IF NOT EXISTS `register_user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`fname`, `lname`, `contactno`, `email`, `username`, `password`) VALUES
('Themiya', 'Weerakoon', 761111111, 'Themiya@gmail.com', 'themi_123', 'Tt12345678');

-- --------------------------------------------------------

--
-- Table structure for table `review_log`
--

CREATE TABLE IF NOT EXISTS `review_log` (
  `review` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `reviewid` int(11) NOT NULL AUTO_INCREMENT,
  `cusname` varchar(50) NOT NULL,
  PRIMARY KEY (`reviewid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `review_log`
--

INSERT INTO `review_log` (`review`, `date`, `reviewid`, `cusname`) VALUES
('Nice', '2020-04-22', 27, 'Themiya'),
('Nice', '2020-04-22', 28, 'Themiya');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`) VALUES
('themi_123', 'Tt12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
