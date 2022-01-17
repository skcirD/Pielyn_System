-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 12:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pielyn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `users_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `users_role`) VALUES
(1, 'Hendwrick', 'Gonzales', 'dricks', '89fc342c2313f7bf38068a9eff33f7a5', 'Admin'),
(2, 'Cristian', 'Sarabia', 'ychan', 'bba17248d463149a9863e683c3c1a1df', 'Cashier'),
(3, 'Rachelyn', 'Macaraig', 'rj123', '57703b9f43d44d89c6a7e7e1d6c772aa', 'cashier'),
(4, 'asd', 'asd', 'account', 'e268443e43d93dab7ebef303bbe9642f', 'cashier');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(52, 'Redhorse'),
(76, 'Bonakid'),
(77, 'Absolute'),
(78, 'Oishi'),
(79, 'C2'),
(80, 'San Miguel'),
(82, 'Redhorse'),
(83, 'Yakult'),
(89, 'nes-cafe'),
(91, 'Malboro'),
(92, 'Jack n Jill');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL,
  `transno` varchar(50) DEFAULT NULL,
  `pcode` varchar(50) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` decimal(18,2) DEFAULT NULL,
  `sdate` varchar(50) DEFAULT NULL,
  `voidby` varchar(50) DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `transno` varchar(50) DEFAULT NULL,
  `pcode` varchar(50) DEFAULT NULL,
  `pdesc` varchar(255) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `disc` decimal(18,2) DEFAULT NULL,
  `total` decimal(18,2) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `cashier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `transno`, `pcode`, `pdesc`, `price`, `qty`, `disc`, `total`, `sdate`, `status`, `cashier`) VALUES
(238, '202111011001', '2', '1 Liter Redhorse', '89.00', 3, NULL, '178.00', '2021-11-01', 'Pending', 'Hendwrick'),
(239, '202111011002', '2', '1 Liter Redhorse', '89.00', 1, NULL, '89.00', '2021-11-01', 'Pending', 'Hendwrick'),
(240, '202111011003', '1', '6 Pack Yakult', '35.00', 2, NULL, '35.00', '2021-11-01', 'Pending', 'Hendwrick'),
(244, '202111011004', '2', '1 Liter Redhorse', '89.00', 5, NULL, '445.00', '2021-11-01', 'Sold', 'Hendwrick'),
(245, '202111011004', '4', '1 Pack Malboro', '100.00', 13, NULL, '1300.00', '2021-11-01', 'Sold', 'Hendwrick'),
(246, '202111011004', '5', 'Small Piatos', '15.00', 3, NULL, '45.00', '2021-11-01', 'Sold', 'Hendwrick'),
(249, '202111011005', '5', 'Small Piatos', '15.00', 98, NULL, '1470.00', '2021-11-01', 'Sold', 'Hendwrick'),
(250, '202111011006', '1', '6 Pack Yakult', '35.00', 3, NULL, '105.00', '2021-11-01', 'Sold', 'Hendwrick'),
(254, '202111011007', '2', '1 Liter Redhorse', '89.00', 7, NULL, '7743.00', '2021-11-01', 'Pending', 'Hendwrick');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'hendwrick', 'sarabia', 'ychan', 'ychan123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'Alcoholic'),
(4, 'Beverages'),
(5, 'Cigarette'),
(17, 'bread'),
(20, 'Non-Food'),
(21, 'Drinks'),
(22, 'Chips'),
(23, 'Candy');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `pcode` varchar(100) NOT NULL,
  `barcode` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `re_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `pcode`, `barcode`, `description`, `brand`, `category`, `quantity`, `price`, `re_order`) VALUES
(108, '2', 222, '1 Liter Redhorse', 'Redhorse', 'Alcoholic', 87, 89, 30),
(114, '1', 111, '6 Pack Yakult', 'Yakult', 'Drinks', 93, 35, 20),
(115, '3', 333, '6 oz C-2', 'C2', 'Drinks', 97, 18, 30),
(116, '4', 444, '1 Pack Malboro', 'Malboro', 'Cigarette', 86, 100, 5),
(117, '5', 555, 'Small Piatos', 'Oishi', 'Chips', 100, 15, 10),
(118, '6', 666, '1 Pack Nes-cafe', 'nes-cafe', 'Drinks', 100, 8, 20),
(119, '7', 777, 'Small Nova', 'Oishi', 'Chips', 100, 15, 20),
(120, '8', 888, '12 oz Absolute', 'Absolute', 'Drinks', 5, 10, 20),
(121, '9', 999, '12 oz San-Mig', 'San Miguel', 'Alcoholic', 100, 32, 25),
(122, '10', 1010, '1 Rim Winston Red', 'Malboro', 'Cigarette', 100, 100, 5),
(124, '12', 32122, 'Large Piattos Cheese', 'Oishi', 'Chips', 100, 28, 10);

-- --------------------------------------------------------

--
-- Table structure for table `vat`
--

CREATE TABLE `vat` (
  `vat` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
