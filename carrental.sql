-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 04:35 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `commision` float NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `address`, `mobile`, `email`, `commision`, `password`, `category`) VALUES
(1, 'Md. Alal Hossain', '23 Hatir Jheel , Dhaka', '01254365', 'alal@yahoo.com', 5, '123', 'B'),
(2, 'Md. Kamrul Hosen', 'Gulshan 13, Dhaka', '0171256658', 'kamrul@gmail.com', 5, '123', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(8) NOT NULL,
  `uid` int(4) NOT NULL,
  `aid` int(4) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `btime` varchar(20) NOT NULL,
  `rdate` varchar(20) NOT NULL,
  `rtime` varchar(20) NOT NULL,
  `hours` int(11) NOT NULL,
  `rate` float NOT NULL,
  `fine` float NOT NULL,
  `total` float NOT NULL,
  `crate` float NOT NULL,
  `com` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `reg` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `rate` float NOT NULL,
  `year` int(4) NOT NULL,
  `type` varchar(8) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`reg`, `company`, `model`, `rate`, `year`, `type`, `image`, `status`) VALUES
('1111', 'toyota', 'Auris', 800, 2010, 'auto', 'toy5.png', 'booked'),
('2222', 'audi', 'Etron', 700, 2019, 'auto', 'aud2.png', 'avilable'),
('1234567', 'marcetizes', 'Sedan', 900, 2017, 'auto', 'mar2.png', 'avilable'),
('1001', 'marcetizes', 'Wagon', 700, 2018, 'both', 'toy5.png', 'booked'),
('1105', 'porche', 'Spyder', 900, 2018, 'auto', 'por4.png', 'avilable'),
('1009', 'toyota', 'voxy', 900, 2000, 'auto', 'toy1.jpg', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `username`, `password`, `address`, `email`, `mobile`, `position`) VALUES
(1, 'Md Rafi Uz Zaman', 'admin', '123', '525 Rania, Basundhara', 'rafi.kazla@gmail.com', '01515863', 'Sytem Analysist');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `mobile`, `address`, `status`) VALUES
('John Smith', 'smith@yahoo.com', '123', '01715566223', '45 Leeds, UK', 'pending'),
('Stephen Collings', 'stephen@gmail.com', '123', '0171265324', '55, New York City, USA', 'accept'),
('Md. Ashiqur Rahman', 'ashiq123@yahoo.com', '1234', '01615234564', '56 Banani, Dhaka', 'accept');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
