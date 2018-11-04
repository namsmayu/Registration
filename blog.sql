-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 12:44 PM
-- Server version: 5.6.25-log
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blogtype` text NOT NULL,
  `topic` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blogtext` varchar(2000) NOT NULL,
  `photo` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogtype`, `topic`, `title`, `blogtext`, `photo`, `tags`, `name`, `email`, `mobile`, `city`, `state`) VALUES
('text', 'education', 'My First Blog', '', '', 'test', 'Namrata', 'xyz@gmail.com', '07405295048', 'australia', 'australia'),
('text', 'education', 'My First Blog', '', '', 'test', 'Namrata', 'nams_ashok@hotmail.com', '07405295048', 'australia', 'australia'),
('text', 'education', 'My First Blog', 'Test', '01bf9b0642e34bbf0a8fa0efdc7556712ce74c15e1.jpg', 'test', 'Namrata Londhe', 'xyz@gmail.com', '07405295048', 'usa', 'usa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
