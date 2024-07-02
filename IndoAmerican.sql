-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 08:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--
CREATE DATABASE IF NOT EXISTS `catering` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `catering`;
-- --------------------------------------------------------

--
-- Table structure for table `catering`
--
--

CREATE TABLE catering (
name VARCHAR(50)  NOT NULL,
email VARCHAR(50) NOT NULL,
phone VARCHAR(50) NOT  NULL primary key,
event_type VARCHAR(50) NOT NULL,
event_date DATE NOT  NULL,
event_time TIME NOT  NULL,
guests INT(6) NOT NULL,
additional_info VARCHAR(200)
);

--
-- Table structure for table `orders`
--
--

CREATE TABLE orders (
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phone VARCHAR(50) NOT NULL,
  delivery_address VARCHAR(50) NOT  NULL
);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
