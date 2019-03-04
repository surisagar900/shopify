-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 11:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6354298_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(11, 'shagun', 'shagunkalara65@gmail.com', 'aarti1974', 8054508900, 'CHANDIGARH', 'Girls hostel number 7, Panjab university'),
(12, 'sagar suri', 'surisagar900@gmail.com', '123', 9625564220, 'una', 'una'),
(13, 'Alisha', 'alisha.shiv0933@gmail.com', 'santokhgarh15', 9882690933, 'UNA himachal pradesh', 'house no. 95 ward no. 6 V. P. O santokhgarh'),
(14, 'Dnrjfehf', 'nfhrhthfhf@hrgf.in', '12345678', 4567899900, 'Jdcbcdjcr', 'hehfjr'),
(15, 'monty', 'fjdbjbj@fjgdjg.in', 'montykangra', 9625564220, 'una', 'ward no 5, pull wala bazar near old post office'),
(16, 'parv Khanna', 'parv@gmail.com', 'parvkhanna', 9625564220, 'una', 'ward no 5, pull wala bazar near old post office'),
(17, 'ron', 'paraskangra14@gmail.com', '12345678', 9876543210, 'KARNAL', 'hno.10/30'),
(18, 'Yukti', 'yukti@g.co', 'yuktiqwerty', 1234567890, 'Ff', 'Ffg'),
(19, 'danish chaddha', 'danish@gmail.com', 'sagarsuri', 9418416603, 'firozpur', '#8, mochi bazar'),
(20, 'Sangeeta', 's@g.in', 'sagarsuri', 1234567809, 'F', 'F'),
(21, 'rqa', 'ro@gmail.com', 'roshan@123', 8888889999, 'jhh', 'jjjjjhhhhh'),
(22, 'Aman', 'amannim20@gmail.com', '123456788', 9988844125, 'Nsnsnsn', 'Hsjsjsns'),
(23, 'ritik', 'ritik@gmail.com', '123456789', 9418416603, 'chd', 'chd'),
(24, 'qwert', 'ggg@gmail.com', '1234567890', 8888889999, 'jhh', 'jjjjjhhhhh'),
(25, 'sagar', 'saurav.sharma8080@gmail.com', 'sagarsuri', 9625564220, 'chd', 'chd'),
(26, 'piyush', 'piyushgupta1234@gmail.com', 'maakichu', 9876543210, 'chandigarh', 'punjab unv hostel 8'),
(27, 'mr.duvedi@yahoo.com', 'duvedi.77@gmail.com', 'sagarsuri', 96325564220, ',lfssv', 'mfoskmo');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `items_id` int(10) DEFAULT NULL,
  `status` enum('added to cart','confirmed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `items_id`, `status`) VALUES
(41, 13, 6, 'added to cart'),
(47, 16, 1, 'added to cart'),
(52, 17, 1, 'added to cart'),
(53, 17, 2, 'added to cart'),
(58, 19, 1, 'added to cart'),
(59, 19, 8, 'added to cart'),
(62, 21, 2, 'added to cart'),
(66, 24, 2, 'added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `items_id` (`items_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
