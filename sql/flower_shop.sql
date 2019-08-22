-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 03:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mm_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mm_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `gender`) VALUES
(8, 'jojoshe21@gmail.com', '123456@', 'wejdan', 'alshareif', 'jeddah', '0656565656', 'Female'),
(9, 'dodi@gmail.com', '1112223', 'dodi', 'ash', 'jeddah heraa', '00432342233', 'Male'),
(10, 'manal@gmail.com', '121212', 'manal', 'saud', 'jedah', '9877657654', 'Female'),
(11, 'aishaxj@hotmail.com', '123456', 'aisha', 'mutip', 'jeddah ', '0556060183', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `code` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `name`, `price`) VALUES
('A1', 'Daisy Daydreams', 150),
('A10', 'Pink Roses', 120),
('A2', 'Clips Flower', 15),
('A3', 'JLO\'s Flower', 20),
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
('C6', 'I\'m sorry Flower', 160),
('C7', 'Get Well Flower', 200),
('C8', 'Mother\'s Day Flower', 300);

-- --------------------------------------------------------

--
-- Table structure for table `review_congratulationsflower`
--

CREATE TABLE `review_congratulationsflower` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_congratulationsflower`
--

INSERT INTO `review_congratulationsflower` (`id`, `reviews`, `date`) VALUES
(1, 'beautiful ...', 'Dec 20,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_daisydaydreams`
--

CREATE TABLE `review_daisydaydreams` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_fantasyfound`
--

CREATE TABLE `review_fantasyfound` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_fantasyfound`
--

INSERT INTO `review_fantasyfound` (`id`, `reviews`, `date`) VALUES
(1, 'Great service and the flowers are always amazing. My Mum in Scotland is always so happy. Its a great way for me to show my love......Thank you', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_getwellflower`
--

CREATE TABLE `review_getwellflower` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_getwellflower`
--

INSERT INTO `review_getwellflower` (`id`, `reviews`, `date`) VALUES
(1, 'so amazing ', 'Dec 20,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_gloriousrose`
--

CREATE TABLE `review_gloriousrose` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_gloriousrose`
--

INSERT INTO `review_gloriousrose` (`id`, `reviews`, `date`) VALUES
(1, 'niceeee..', 'Dec 13,16'),
(2, 'Needed flowers for my best friend and found your online service excellent,easy and quick to order. Thank you and I&#039;ll definitely use again', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_imsorryflower`
--

CREATE TABLE `review_imsorryflower` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_imsorryflower`
--

INSERT INTO `review_imsorryflower` (`id`, `reviews`, `date`) VALUES
(1, 'nice', 'Dec 20,16'),
(2, 'love it ', 'Dec 20,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_lavenderphalaenopsis`
--

CREATE TABLE `review_lavenderphalaenopsis` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_lavenderphalaenopsis`
--

INSERT INTO `review_lavenderphalaenopsis` (`id`, `reviews`, `date`) VALUES
(1, 'Easy website to use which is a + these days. The flowers are all amazing it took me ages to make a choice. Will be coming back again.', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_loveflower`
--

CREATE TABLE `review_loveflower` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_loveflower`
--

INSERT INTO `review_loveflower` (`id`, `reviews`, `date`) VALUES
(2, 'Who doesn&#039;t love a gift !\r\n\r\n\r\n\r\nGive it to someone that you want to make him/her happy', 'Dec 13,16'),
(20, 'a beautiful gift', 'Dec 13,16'),
(21, 'what a lovely site so colourfull i could have bought it all so inviting will be buying again soon', 'Dec 13,16'),
(22, 'what a lovely site so colourfull i could have bought it all so inviting will be buying again soon', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_moondance`
--

CREATE TABLE `review_moondance` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_moondance`
--

INSERT INTO `review_moondance` (`id`, `reviews`, `date`) VALUES
(1, 'Bookmark this site for all your flowers.. beautiful choices and reasonable price.\r\nEase of ordering from start to finish..\r\n', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_mothersdayflower`
--

CREATE TABLE `review_mothersdayflower` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_mothersdayflower`
--

INSERT INTO `review_mothersdayflower` (`id`, `reviews`, `date`) VALUES
(1, 'nice and simple color', 'Dec 20,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_paintedskies`
--

CREATE TABLE `review_paintedskies` (
  `id` int(100) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_paintedskies`
--

INSERT INTO `review_paintedskies` (`id`, `reviews`, `date`) VALUES
(7, 'that is a simple and good gift..', 'Dec 13,16'),
(9, 'the best gift', 'Dec 13,16'),
(10, 'Good site , easy to use, good choice of delivery dates, bouquets etc and good prices.', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_paradisefound`
--

CREATE TABLE `review_paradisefound` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_paradisefound`
--

INSERT INTO `review_paradisefound` (`id`, `reviews`, `date`) VALUES
(1, 'spacial one , i  really loved to buy it ', 'Dec 13,16'),
(2, 'I have ordered from this site before and the service is fantastic, the flowers are lovely just as pictured', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_purpleperfection`
--

CREATE TABLE `review_purpleperfection` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_purpleperfection`
--

INSERT INTO `review_purpleperfection` (`id`, `reviews`, `date`) VALUES
(1, 'woooooow , it is amazing  ', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_summercelebration`
--

CREATE TABLE `review_summercelebration` (
  `id` int(100) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_summercelebration`
--

INSERT INTO `review_summercelebration` (`id`, `reviews`, `date`) VALUES
(1, 'i really love these colors of flowers.', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_sunset`
--

CREATE TABLE `review_sunset` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_sunset`
--

INSERT INTO `review_sunset` (`id`, `reviews`, `date`) VALUES
(1, 'Give a spectacular surprise to someone special in any special day of her/him !', 'Dec 13,16'),
(5, 'i really love it', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `review_whitecallas`
--

CREATE TABLE `review_whitecallas` (
  `id` int(11) NOT NULL,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_whitecallas`
--

INSERT INTO `review_whitecallas` (`id`, `reviews`, `date`) VALUES
(1, 'good and special shape', 'Dec 13,16');

-- --------------------------------------------------------

--
-- Table structure for table `select`
--

CREATE TABLE `select` (
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `select`
--

INSERT INTO `select` (`name`, `description`, `image`) VALUES
('Classic Rose', 'Beautiful in color, exquisite in fragrance, and ever so dignified, the rose is one of the most coveted flowers found in chic bouquets, or carefully tended flower gardens. Breathtaking in bud form, as a blossom gently opening, or in full bloom, it is a flower that calls attention to itself and beckons you to pause and quietly reflect upon its elegance.', './images/g2.jpg'),
('Classic Purple', 'Nothing is as thrilling as the surprise offering of the arrangement of flowers. Roses, clearly, conjure the feeling of romance, love, and mystery.', './images/g11.jpg'),
('Choco Rose', 'What could be sweeter than one dozen beautiful ProFlowers Red Roses and a 16 piece set of Artisan Salted Caramels? Our radiant red roses couldn\'t be more beautiful and our incredible, mouthwatering caramels are simply divine! The end result is a heavenly two day combination of colors and flavors.', './images/g5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mm_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `review_congratulationsflower`
--
ALTER TABLE `review_congratulationsflower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_daisydaydreams`
--
ALTER TABLE `review_daisydaydreams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_fantasyfound`
--
ALTER TABLE `review_fantasyfound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_getwellflower`
--
ALTER TABLE `review_getwellflower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_gloriousrose`
--
ALTER TABLE `review_gloriousrose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_imsorryflower`
--
ALTER TABLE `review_imsorryflower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_lavenderphalaenopsis`
--
ALTER TABLE `review_lavenderphalaenopsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_loveflower`
--
ALTER TABLE `review_loveflower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_moondance`
--
ALTER TABLE `review_moondance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_mothersdayflower`
--
ALTER TABLE `review_mothersdayflower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_paintedskies`
--
ALTER TABLE `review_paintedskies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_paradisefound`
--
ALTER TABLE `review_paradisefound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_purpleperfection`
--
ALTER TABLE `review_purpleperfection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_summercelebration`
--
ALTER TABLE `review_summercelebration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_sunset`
--
ALTER TABLE `review_sunset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_whitecallas`
--
ALTER TABLE `review_whitecallas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `review_congratulationsflower`
--
ALTER TABLE `review_congratulationsflower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_daisydaydreams`
--
ALTER TABLE `review_daisydaydreams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review_fantasyfound`
--
ALTER TABLE `review_fantasyfound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_getwellflower`
--
ALTER TABLE `review_getwellflower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_gloriousrose`
--
ALTER TABLE `review_gloriousrose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `review_imsorryflower`
--
ALTER TABLE `review_imsorryflower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `review_lavenderphalaenopsis`
--
ALTER TABLE `review_lavenderphalaenopsis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_loveflower`
--
ALTER TABLE `review_loveflower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `review_moondance`
--
ALTER TABLE `review_moondance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_mothersdayflower`
--
ALTER TABLE `review_mothersdayflower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_paintedskies`
--
ALTER TABLE `review_paintedskies`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `review_paradisefound`
--
ALTER TABLE `review_paradisefound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `review_purpleperfection`
--
ALTER TABLE `review_purpleperfection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_summercelebration`
--
ALTER TABLE `review_summercelebration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review_sunset`
--
ALTER TABLE `review_sunset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review_whitecallas`
--
ALTER TABLE `review_whitecallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
