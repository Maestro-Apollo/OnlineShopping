-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 06:25 AM
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
-- Database: `practise`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro_table`
--

CREATE TABLE `pro_table` (
  `id` int(15) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `place` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_table`
--

INSERT INTO `pro_table` (`id`, `product_name`, `price`, `place`) VALUES
(2, 'Banana', '20', 'Narsingdi'),
(3, 'Guava', '50', 'Barishal'),
(4, 'Cherry', '200', 'China'),
(5, 'Pine Apple', '30', 'Narsingdi'),
(6, 'Apple', '120', 'Canada'),
(7, 'Apple', '120', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(10, 'Apple', 'f8.jpg', 120.00),
(12, 'Banana', 'f1.jpg', 200.00),
(13, 'Berry', 'f9.jpg', 300.00),
(14, 'gok', 'f7.jpg', 56.00),
(15, 'tyo', 'f2.jpg', 120.00),
(18, 'you', 'f3.jpg', 569.00),
(19, 'you', 'f3.jpg', 569.00),
(24, 'Orange', 'f6.jpg', 120.00),
(25, 'jui', 'f1.jpg', 568.00),
(26, 'jol', 'f9.jpg', 567.00),
(27, 'tea', 'f1.jpg', 123.00),
(29, 'ice', 'f2.jpg', 1234.00),
(31, 'Kola', 'f1.jpg', 123.00),
(32, 'Dragon', 'f18.jpg', 1200.00);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(15) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `age` int(12) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `fullname`, `age`, `email`, `password`, `created`) VALUES
(3, 'Shuvra', 21, 'suvra@gmail.com', 'suvra', '12/7/19'),
(4, 'Anik', 20, 'anik@gmail.com', 'anik', '20/07/19'),
(5, 'Rafi', 22, 'Rafi@gmail.com', 'rafi', '2019-07-13 14:32:22'),
(7, 'Mredula', 23, 'mre@gmail.com', 'mre', '2019-07-30 12:03:59'),
(8, 'Bilu', 45, 'Bilu@gmail.com', 'bilu', '2019-07-30 12:36:16'),
(9, 'moumitu', 23, 'moumitu@gmail.com', 'mou', '2019-07-30 14:42:19'),
(10, 'Mahafid', 23, 'mahafid@gmail.com', 'mahafid', '2019-09-03 17:47:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro_table`
--
ALTER TABLE `pro_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro_table`
--
ALTER TABLE `pro_table`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
