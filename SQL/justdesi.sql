-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2021 at 08:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justdesi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_qty` int(10) NOT NULL,
  `food_price` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `total_price` int(10) DEFAULT NULL,
  UNIQUE KEY `food_id` (`food_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `cart`
--
DROP TRIGGER IF EXISTS `total_price`;
DELIMITER $$
CREATE TRIGGER `total_price` BEFORE INSERT ON `cart` FOR EACH ROW SET NEW.total_price = NEW.food_qty * NEW.food_price
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `update_total_price`;
DELIMITER $$
CREATE TRIGGER `update_total_price` BEFORE UPDATE ON `cart` FOR EACH ROW SET NEW.total_price = NEW.food_qty * NEW.food_price
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'South Indian'),
(2, 'North Indian'),
(3, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `cat_id`, `fname`, `price`) VALUES
(1, 1, 'Masala Dosa', 70),
(2, 1, 'Idli Sambar', 60),
(3, 1, 'Rava Idli', 70),
(4, 1, 'Upma', 50),
(5, 1, 'Rava Dosa', 80),
(6, 1, 'South Indian Thali', 220),
(7, 2, 'Kulcha Curry', 120),
(8, 2, 'Vegetable Biryani', 180),
(9, 2, 'Pulao', 150),
(10, 2, 'Jeera Rice', 120),
(11, 2, 'Aloo Paratha', 80),
(12, 2, 'North Indian Thali', 220),
(13, 3, 'Butter Milk', 50),
(14, 3, 'Plain Lassi', 70),
(15, 3, 'Mango Lassi', 100),
(16, 3, 'Pudina Lime', 100),
(17, 3, 'Soda Lime', 70),
(18, 3, 'Sugarcane Juice', 80);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(20) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `food_id` varchar(10) NOT NULL,
  `food_qty` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `food_id`, `food_qty`, `user_name`, `user_phone`, `user_address`, `timestamp`) VALUES
(1, 'RSTGF601512', '1', '5', 2, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '25:06:2021 12:05:56am'),
(2, 'RSTGF601512', '1', '11', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '25:06:2021 12:05:56am'),
(3, 'RSTGF416354', '2', '15', 1, 'Abhijna', '8765432109', '#164/14, Avalahalli, Bengaluru', '25:06:2021 12:07:01am'),
(4, 'RSTGF467555', '3', '12', 3, 'Arun', '8905673451', '#165/15, Bengaluru', '25:06:2021 12:08:39am'),
(5, 'RSTGF934676', '6', '4', 2, 'Akhila', '9876543235', 'Bangalore-560085', '25:06:2021 12:12:14am'),
(6, 'RSTGF934676', '6', '15', 1, 'Akhila', '9876543235', 'Bangalore-560085', '25:06:2021 12:12:14am'),
(7, 'RSTGF934676', '6', '9', 1, 'Akhila', '9876543235', 'Bangalore-560085', '25:06:2021 12:12:14am'),
(8, 'RSTGF861117', '1', '12', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '01:07:2021 04:50:45pm'),
(9, 'RSTGF407125', '2', '5', 1, 'Abhijna', '8765432109', '#164/14, Avalahalli, Bengaluru', '01:07:2021 05:06:22pm'),
(10, 'RSTGF407125', '2', '4', 2, 'Abhijna', '8765432109', '#164/14, Avalahalli, Bengaluru', '01:07:2021 05:06:22pm'),
(11, 'RSTGF281569', '1', '8', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '02:07:2021 08:54:59pm'),
(12, 'RSTGF281569', '1', '15', 2, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '02:07:2021 08:54:59pm'),
(13, 'RSTGF281569', '1', '1', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '02:07:2021 08:54:59pm'),
(14, 'RSTGF281569', '1', '13', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '02:07:2021 08:54:59pm'),
(15, 'RSTGF281569', '1', '17', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '02:07:2021 08:54:59pm'),
(16, 'RSTGF673747', '4', '6', 1, 'Vani', '7895673452', '#166/16, Bengaluru', '02:07:2021 09:05:52pm'),
(17, 'RSTGF673747', '4', '14', 2, 'Vani', '7895673452', '#166/16, Bengaluru', '02:07:2021 09:05:52pm'),
(18, 'RSTGF673747', '4', '12', 1, 'Vani', '7895673452', '#166/16, Bengaluru', '02:07:2021 09:05:52pm'),
(19, 'RSTGF961014', '5', '2', 2, 'Jaya', '8907896781', '#167/17, Bengaluru', '02:07:2021 09:07:07pm'),
(20, 'RSTGF961014', '5', '9', 1, 'Jaya', '8907896781', '#167/17, Bengaluru', '02:07:2021 09:07:07pm'),
(21, 'RSTGF808235', '7', '10', 1, 'Kshithi', '9998888777', 'Girinagar, Bangalore', '02:07:2021 09:08:11pm'),
(22, 'RSTGF808235', '7', '15', 1, 'Kshithi', '9998888777', 'Girinagar, Bangalore', '02:07:2021 09:08:11pm'),
(23, 'RSTGF533871', '1', '2', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '03:07:2021 12:28:50am'),
(24, 'RSTGF845862', '1', '2', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '03:07:2021 12:32:12am'),
(25, 'RSTGF318073', '4', '13', 1, 'Vani', '7895673452', '#166/16, Bengaluru', '03:07:2021 01:38:19am'),
(26, 'RSTGF931561', '5', '18', 1, 'Jaya', '8907896781', '#167/17, Bengaluru', '03:07:2021 01:44:08am'),
(27, 'RSTGF931561', '5', '7', 1, 'Jaya', '8907896781', '#167/17, Bengaluru', '03:07:2021 01:44:08am'),
(28, 'RSTGF862111', '1', '4', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '03:07:2021 01:49:08am'),
(29, 'RSTGF862111', '1', '2', 1, 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru', '03:07:2021 01:49:08am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `address`) VALUES
(1, 'aditi@gmail.com', 'aditi', 'Aditi', '9876543210', '#163/13, Avalahalli, Bengaluru'),
(2, 'abhijna@gmail.com', 'abhijna', 'Abhijna', '8765432109', '#164/14, Avalahalli, Bengaluru'),
(3, 'arun@gmail.com', 'arun', 'Arun', '8905673451', '#165/15, Bengaluru'),
(4, 'vani@gmail.com', 'vani', 'Vani', '7895673452', '#166/16, Bengaluru'),
(5, 'jaya@gmail.com', 'jaya', 'Jaya', '8907896781', '#167/17, Bengaluru'),
(6, 'akhila@gmail.com', 'akhila', 'Akhila', '9876543235', 'Bangalore-560085'),
(7, 'kshithi@gmail.com', 'kshithi', 'Kshithi', '9998888777', 'Girinagar, Bangalore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
