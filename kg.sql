-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 08:21 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users1`
--

CREATE TABLE `tbl_users1` (
  `userid` int(11) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `Pic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users1`
--

INSERT INTO `tbl_users1` (`userid`, `title`, `description`, `Pic`) VALUES
(83, 'Ø­Ø§Ø³Ø¨', 'Ø¯Ø±Ø§Ø³Ø© Ù…Ø§Ø¯Ø© Ø§Ù„Ø­Ø§Ø³Ø¨ Ù„Ù„Ø±Ø¨Ù„ÙˆÙ…', '825553.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users1`
--
ALTER TABLE `tbl_users1`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users1`
--
ALTER TABLE `tbl_users1`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
