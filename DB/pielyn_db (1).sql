-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 05:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
(1, 'hendwrick', 'Gonzales', 'dricks', 'aea6789ed57d02c1b5a2dd2f35c3eb63');

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
(108, '02', 222, '1 Liter Redhorse', 'Redhorse', 'Alcoholic', 100, 89, 30),
(114, '01', 111, '6 Pack Yakult', 'Yakult', 'Drinks', 100, 35, 20),
(115, '03', 333, '6 oz C-2', 'C2', 'Drinks', 300, 18, 30),
(116, '04', 444, '1 Pack Malboro', 'Malboro', 'Cigarette', 20, 100, 5),
(117, '05', 555, 'Small Piatos', 'Oishi', 'Chips', 50, 15, 10),
(118, '06', 666, '1 Pack Nes-cafe', 'nes-cafe', 'Drinks', 100, 8, 20),
(119, '07', 777, 'Small Nova', 'Oishi', 'Chips', 100, 15, 20),
(120, '08', 888, '12 oz Absolute', 'Absolute', 'Drinks', 100, 10, 20),
(121, '09', 999, '12 oz San-Mig', 'San Miguel', 'Alcoholic', 50, 32, 25),
(122, '10', 1010, '1 Rim Winston Red', 'Malboro', 'Cigarette', 10, 100, 5),
(123, '11', 21321, '1 Pack Max candy', 'Jack n Jill', 'Candy', 10, 45, 5),
(124, '11', 32122, 'Large Piattos Cheese', 'Oishi', 'Chips', 50, 28, 10);

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
  ADD PRIMARY KEY (`product_id`);

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
