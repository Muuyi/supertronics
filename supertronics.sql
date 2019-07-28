-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2019 at 11:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supertronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `date`) VALUES
(1, 'andrew', 'andrew', '2019-06-24 05:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Television sets'),
(2, 'Mobile phones'),
(3, 'Microwaves'),
(4, 'Fridges'),
(5, 'jkjdsjkds');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `category`, `name`, `price`, `image`, `description`, `date_added`) VALUES
(1, 'Television sets', 'Samsung', 500, 'tv2.jpeg', '', '2019-06-24 06:41:37'),
(2, 'Mobile phones', 'Iphone', 100000, 'iphone1.jpeg', 'Iphone 7x, 7\" 5GB RAM', '2019-06-24 06:59:35'),
(3, 'Fridges', 'Smart fridge', 6000000, 'fridge.jpeg', 'New smart fridge on the market', '2019-06-24 07:11:44'),
(4, 'Mobile phones', 'Samsung S10', 1200000, 's10.jpeg', '7\" RAM 32GB, ', '2019-06-24 07:15:40'),
(5, 'Microwaves', 'Microwaves', 90000, 'oven2.jpeg', 'Expensive, safksaldk asdkfsdjfsdlk', '2019-06-24 07:17:38'),
(6, 'Fridges', 'ksjds sdfjksjkf', 2147483647, 'fridge2.jpeg', 'jksdjhadc kajdskjvakjvjk ', '2019-06-24 09:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `elec_id` varchar(255) NOT NULL,
  `status` enum('pending','cleared') NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `location`, `email`, `elec_id`, `status`, `order_date`) VALUES
(1, '', 0, '', '', '', 'pending', '2019-06-24 07:09:55'),
(2, 'dsjkkj kdjadjk', 2147483647, 'jfkjfdkjfdjkfjdk', 'kjsjkdsj@gmail.com', '', 'pending', '2019-06-24 08:24:33'),
(4, '', 0, '', '', '', 'pending', '2019-06-24 08:45:29'),
(5, 'jdsjdskjf skfkjsjkd', 2147483647, 'jksjkdskjd', 'sjkdskj@gmail.com', '', 'pending', '2019-06-24 08:46:43'),
(7, 'dskjjs kdsjkjdsf', 2147483647, 'skjfjadjfkaskj', 'kjjsjkkj@gmail.com', '6', 'pending', '2019-06-24 09:01:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
