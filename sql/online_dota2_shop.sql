-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 09:40 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_dota2_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `prodid` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `prodid`, `price`, `quantity`, `total_price`) VALUES
(31, 32, 30, 1500, 4, 6000),
(33, 32, 31, 1500, 1, 1500),
(34, 32, 44, 1, 1, 1),
(35, 33, 29, 1500, 2, 3000),
(36, 33, 41, 1000000, 1, 1000000),
(37, 34, 30, 1500, 1, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodid` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(7) NOT NULL,
  `default_or_not` int(1) NOT NULL,
  `file` text NOT NULL,
  `space_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodid`, `name`, `description`, `price`, `default_or_not`, `file`, `space_count`) VALUES
(28, 'space', 'space', 1, 1, '', 1),
(29, 'Manifold Paradox', 'PA Arcana', 1500, 1, '''img/gif/pa.gif''', 0),
(30, 'Demon Eater', 'SF Arcana', 1500, 1, '''img/gif/sf.gif''', 0),
(31, 'Bladeform Legacy', 'Juggernaut Arcana', 1500, 1, '''img/gif/jugg.gif''', 0),
(32, 'Blades of Voth Domosh', 'LC Arcana', 1500, 1, '''img/gif/lc.gif''', 0),
(33, 'Great Sage Reckoning', 'MK Arcana', 1500, 1, '''img/gif/mk.gif''', 0),
(34, 'Tempest Helm of the Thundergod', 'ZEUS Arcana', 1500, 1, '''img/gif/zeus.gif''', 0),
(35, 'space2', 'space2', 1, 0, '', 1),
(40, 'Frost Avalance', 'CM Arcana', 1500, 1, '''img/gif/cm.gif''', 0),
(41, 'Mens Papa Wash', 'He will make u happy for he rest of your life', 1000000, 1, '''img/gif/io.jpg''', 0),
(42, 'poreber', 'ulul walang poreber', 0, 0, '', 0),
(43, 'utak', 'di mo kelangan kaya binenta na namin dito', 1000000, 0, '', 0),
(44, 'patatas', 'mas galit pa sayu wala na ngang ginawa p.s. pamigay na yung presyo', 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `midname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `mobilenum` text NOT NULL,
  `address` text NOT NULL,
  `userlevel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `midname`, `lastname`, `email`, `uname`, `pw`, `mobilenum`, `address`, `userlevel`) VALUES
(1, 'laurence', 'lacanilao', 'payad', 'c3_14k@yahoo.com', 'meepotatoes', 'laurence14', '09155371064', 'malolos', 1),
(21, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 1),
(34, 'aeron', 'toledo', 'tarroza', 'aeronman322@gmail.com', 'aeronzxcqwe', 'aeronzxcqwe', '09774479042', 'pungo calumpit bulacan', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
