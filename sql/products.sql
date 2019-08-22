-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 03:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `code` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `name`, `price`) VALUES
('A1', 'Daisy Daydreams', 150),
('A10', 'Pink Roses', 120),
('A2', 'Clips Flower', 15),
('A3', 'JLO''s Flower', 20),
('A4', 'Pink Flower', 30),
('A5', 'Flower Ring', 25),
('A6', 'Stain Flower', 5),
('A7', 'Bridl Haie Comb', 10),
('A8', 'Classic Purple', 150),
('A9', 'Classic Rose', 200),
('B1', 'Ted Rose', 200),
('B2', 'Choco Rose', 300),
('B3', 'Red Gift', 100),
('B4', 'Christmas', 150),
('B5', 'Pets Rose', 200),
('B6', 'Heart Roses', 350),
('B7', 'Birthady Roses', 200),
('B8', 'Valentine Paloons', 210),
('B9', 'Malasiya', 150),
('C1', 'Rainbow Rose', 300),
('C2', 'lily Rose', 305),
('C3', 'Black Roses', 400),
('C4', 'Blue Rose', 300),
('C5', 'Congratulations Flower', 250),
('C6', 'I''m sorry Flower', 160),
('C7', 'Get Well Flower', 200),
('C8', 'Mother''s Day Flower', 300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
