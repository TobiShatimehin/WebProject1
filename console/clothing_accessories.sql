-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 09:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webassignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothing_accessories`
--

CREATE TABLE `clothing_accessories` (
  `itemcode_id` int(6) NOT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `product_type` varchar(50) DEFAULT NULL,
  `price` int(2) DEFAULT NULL,
  `colour` varchar(10) DEFAULT NULL,
  `size_small` int(2) DEFAULT NULL,
  `size_medium` int(2) DEFAULT NULL,
  `size_large` int(2) DEFAULT NULL,
  `one_size` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothing_accessories`
--

INSERT INTO `clothing_accessories` (`itemcode_id`, `brand`, `product_type`, `price`, `colour`, `size_small`, `size_medium`, `size_large`, `one_size`) VALUES
(210, 'New Era', 'New Era 9FORTY MLB New York Yankees Mesh Cap', 20, 'Green', 1, 2, 3, 4),
(220, 'Cabrini', 'Carbrini St Mirren FC 2016/17 Away Shirt', 35, 'Black', 3, 2, 9, 0),
(230, 'Jordan', 'Jordan Flight Longsleeve T-Shirt', 35, 'Orange', 3, 5, 0, 0),
(240, 'Mckenzie', 'Mckenzie Alonzo Gloves', 5, 'Grey', 2, 4, 0, 0),
(250, 'Ellesse', 'Ellesse Papaver T-Shirt', 25, 'Purple', 1, 2, 3, 0),
(260, 'Reebok', 'Reebok UFC Conor McGregor Jersey', 40, 'White', 5, 5, 1, 0),
(270, 'Converse', 'Converse Backpack', 15, 'Blue', 1, 2, 3, 0),
(280, 'Adidas', 'adidas Camouflage 3 Stripe T-Shirt', 15, 'Camo', 8, 7, 5, 0),
(290, 'Nike', 'Nike Hyperwarm Field Player Gloves', 20, 'Black', 0, 0, 0, 4),
(300, 'Nike SB', 'Nike SB Embarca Backpack', 20, 'Black', 1, 3, 2, 0),
(310, 'Nike', 'Nike Foundation Fleece Full Zip Hoody', 45, 'Green', 3, 1, 4, 0),
(320, 'Calvin Klein', 'Calvin Klein 3 Pack Boxer Shorts', 30, 'Black', 1, 4, 6, 0),
(330, 'Fred Perry', 'Fred Perry Bomber Tape Track Top', 75, 'Red', 2, 5, 9, 0),
(340, 'Under Armour', 'Under Armour Storm Rival Fleece Hoody', 60, 'Black', 1, 4, 8, 0),
(350, 'Converse', 'Converse Tri-Panel Colour Block Bubble Jacket', 85, 'Blue', 1, 8, 6, 0),
(360, 'Adidas', 'Adidas 3 pack crew socks', 15, 'white', 0, 0, 0, 8),
(370, 'Emporio Armani', 'Emporio Armani EA7 Eagle Beanie Hat', 55, 'Black', 0, 0, 0, 6),
(380, 'Ellesse', 'Ellesse Esta Shoulder Bag', 20, 'Green', 2, 6, 4, 0),
(390, 'Arena', 'Arena Nose Clip Pro', 5, 'Blue', 0, 0, 0, 5),
(400, 'Lacoste', 'Lacoste Colour Block T-Shirt', 40, 'Green', 1, 6, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothing_accessories`
--
ALTER TABLE `clothing_accessories`
  ADD PRIMARY KEY (`itemcode_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothing_accessories`
--
ALTER TABLE `clothing_accessories`
  MODIFY `itemcode_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
