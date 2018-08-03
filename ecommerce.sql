-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 04:55 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
`id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_reg` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `fullname`, `email`, `gender`, `address`, `date_reg`) VALUES
(20, 'Ecommerce', 'ecommerce@yahoo.com', 'Female', 'Brgy Sagkahan Tacloban City', '2017-11-08 04:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
`id` int(11) NOT NULL,
  `main_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `add_details` varchar(255) NOT NULL,
  `item_dir` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `main_id`, `product_name`, `product_desc`, `price`, `stock`, `add_details`, `item_dir`) VALUES
(1, 1, 'Powder1', 'Desc', '450', 10, 'Some Details', 'powder/powder1.jpg'),
(2, 1, 'Powder2', 'Desc', '500', 10, 'Some Details', 'powder/powder2.jpg'),
(3, 1, 'Powder 3', 'Desc', '1000', 10, 'hjhjh', 'powder/powder3.jpg'),
(4, 1, 'Powder 4', 'Some Desc', '1200', 10, 'Details', 'powder/powder4.jpg'),
(5, 1, 'Powder 5', 'Some Desc', '1000', 10, 'Some Details', 'powder/powder5.jpg'),
(6, 1, 'Powder 6', 'Some Desc', '1200', 10, 'Some Details', 'powder/powder6.jpg'),
(7, 1, 'Powder 7', 'Some Desc', '300', 10, 'Some Details', 'powder/powder7.jpg'),
(8, 1, 'Powder 8', 'Some Desc', '800', 10, 'Some Details', 'powder/powder8.jpg'),
(9, 2, 'Suspension 1', 'Some Desc', '4000', 10, 'Some Details', 'suspension/susp1.jpg'),
(10, 2, 'Suspension 2', 'Some Desc', '4050', 10, 'Some Details', 'suspension/susp2.jpg'),
(11, 2, 'Suspension 3', 'Some Desc', '2000', 10, 'Some Details', 'suspension/susp3.jpg'),
(12, 2, 'Suspension 4', 'Some Desc', '2100', 10, 'Some Details', 'suspension/susp4.jpg'),
(13, 2, 'Suspension 7', 'Some Desc', '3600', 10, 'Some Details', 'suspension/susp7.jpg'),
(14, 2, 'Suspension 8', 'Some Desc', '3900', 10, 'Some Details', 'suspension/susp8.jpg'),
(15, 2, 'Suspension 7', 'Some Desc', '200', 10, 'Some Details', 'suspension/susp5.jpg'),
(16, 2, 'Suspension 8', 'Some Desc', '2300', 10, 'Some Details', 'suspension/susp6.jpg'),
(17, 3, 'Sticks 1', 'Some Desc', '120', 10, 'Some Details', 'sticks/stick1.jpg'),
(18, 3, 'Sticks 2', 'Some Desc', '150', 10, 'Some Details', 'sticks/stick2.jpg'),
(19, 3, 'Sticks 3', 'Some Desc', '560', 10, 'Some Details', 'sticks/stick3.jpg'),
(20, 3, 'Sticks 3', 'Some Desc', '5600', 10, 'Some Details', 'sticks/stick4.jpg'),
(21, 3, 'Sticks 4', 'Some Desc', '230', 10, 'Some Details', 'sticks/stick5.jpg'),
(22, 3, 'Sticks 4', 'Some Desc', '430', 10, 'Some Details', 'sticks/stick6.jpg'),
(23, 3, 'Stick 7', 'Some Desc', '220', 10, 'Some Details', 'sticks/stick7.jpg'),
(24, 3, 'Stick 7', 'Some Desc', '270', 10, 'Some Details', 'sticks/stick8.jpg'),
(25, 4, 'Lotion 1', 'Some Desc', '670', 10, 'Some Details', 'lotion/lotion1.jpg'),
(26, 4, 'Lotion 2', 'Some Desc', '679', 10, 'Some Details', 'lotion/lotion2.jpg'),
(27, 4, 'Lotion 3', 'Some Desc', '600', 10, 'Some Details', 'lotion/lotion3.jpg'),
(28, 4, 'Lotion 4', 'Some Desc', '500', 10, 'Some Details', 'lotion/lotion4.jpg'),
(29, 4, 'Lotion 5', 'Some Desc', '3500', 10, 'Some Details', 'lotion/lotion5.jpg'),
(30, 4, 'Lotion 6', 'Some Desc', '3600', 10, 'Some Details', 'lotion/lotion6.jpg'),
(31, 4, 'Lotion 7', 'Some Desc', '300', 10, 'Some Details', 'lotion/lotion7.jpg'),
(32, 4, 'Lotion 8', 'Some Desc', '500', 10, 'Some Details', 'lotion/lotion8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
`id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date_reg` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `product_id`, `customer_id`, `qty`, `total_price`, `status`, `date_reg`) VALUES
(25, 1, 1, 4, '1800', 'Pending', '2017-11-08 04:34:45'),
(26, 2, 1, 4, '2000', 'Pending', '2017-11-08 04:34:45'),
(27, 1, 1, 4, '1800', 'Pending', '2017-11-08 04:34:55'),
(28, 2, 1, 1, '500', 'Pending', '2017-11-08 04:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
