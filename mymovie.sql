-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 02:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymovie`
--
CREATE DATABASE IF NOT EXISTS `mymovie` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mymovie`;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `MovieName` varchar(50) NOT NULL,
  `LeadActor` varchar(50) NOT NULL,
  `LeadActress` varchar(50) NOT NULL,
  `YearOfRelease` varchar(20) NOT NULL,
  `Director` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`MovieName`, `LeadActor`, `LeadActress`, `YearOfRelease`, `Director`) VALUES
('Army of Thieves', 'Stuart Martin', 'Ruby O.Fee ', '29 October 2021', 'Matthias Schweighöfer'),
('Heat', 'Robert De Niro', 'Ashley Judd', '15 December 1995', 'Michael Mann'),
('Dostana', 'Abhishek Bachan', 'Priyanka Chopra', '14 November 2008', 'Tarun Mansukhani'),
('Lakshya', 'Hrithik Roshan', 'Preity Zinta', '18 June 2004', 'Farhan Akthar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
