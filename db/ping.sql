-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 09:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ping`
--

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` int(4) NOT NULL,
  `host` varchar(30) NOT NULL,
  `port` int(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `host`, `port`, `created`, `modified`) VALUES
(0, '127.0.0.1', 80, '2016-05-12 17:40:43', '2016-05-12 23:10:43'),
(0, '127.0.0.1', 80, '2016-05-12 17:42:26', '2016-05-12 23:12:26'),
(0, '127.0.0.1', 80, '2016-05-12 17:43:48', '2016-05-12 23:13:48'),
(0, 'df', 0, '2016-05-12 17:44:15', '2016-05-12 23:14:15'),
(0, 'df', 0, '2016-05-12 17:45:28', '2016-05-12 23:15:28'),
(0, 'df', 0, '2016-05-12 17:45:52', '2016-05-12 23:15:52'),
(0, 'df', 0, '2016-05-12 17:46:13', '2016-05-12 23:16:13'),
(0, '127.0.0.1', 80, '2016-05-12 17:50:16', '2016-05-12 23:20:16'),
(0, '127.0.0.1', 80, '2016-05-12 17:50:53', '2016-05-12 23:20:53'),
(0, 'www.google.com', 80, '2016-05-12 18:15:29', '2016-05-12 23:45:29'),
(0, '200.1.1.0', 80, '2016-05-12 18:52:49', '2016-05-13 00:22:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
