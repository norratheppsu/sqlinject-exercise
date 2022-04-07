-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 04:42 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.4.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `q0users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `q0users` VALUES 
('admin', 'my_random_pass_is_sadkfj'),
('user', 'user'),
('hint', 'hint'),
('flag', '{ctf:0ed36f05d5896a915adb1e108da01e25}');

CREATE TABLE IF NOT EXISTS `q1users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `q1users` VALUES 
('aaa', 'password'),
('admin', 'extreme_long_password'),
('user', 'user'),
('hint', 'hint'),
('flag', '{ctf:bc404b729ad77542a9442db4960ca56f}');

CREATE TABLE IF NOT EXISTS `q2users` (
`username` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `q2users` VALUES 
('admin',MD5('a_random_password_sdjfidsa')),
('michael',MD5('2Y5kBwiFZ')),
('sarah',MD5('apple_juice')),
('user',MD5('user')),
('hint', MD5('hint')),
('norrathep','ed901cfb4e37beb63f7a1a27724a419a');


CREATE TABLE IF NOT EXISTS `q3users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `gpa` float DEFAULT 0.0,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `q3users` VALUES 
('John',MD5('test'), '3.9'),
('admin',MD5('a_random_password'),'0.0'),
('norrathep','7c375f2426ba54f05a86e0f3d32f96cc', '4.0'),
('hint', MD5('hint'), 3.1),
('user',MD5('user'),'0.0');


CREATE TABLE IF NOT EXISTS `q4users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `q4users` VALUES 
('admin','25fa'),
('hint', 'ee2f'),
('user','ee11');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
