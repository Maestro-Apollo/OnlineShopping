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
-- Database: `juinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `email`, `password`, `gender`, `img_name`) VALUES
(10, 'joy', 'joy@gmail.com', '12345', 'male', '1564425860_John_Figol-300x300.jpg'),
(11, 'urmi', 'urmi@gmail.com', '12345', 'female', '1564450736_team-540x540-3-300x300.jpg'),
(12, 'umi', 'umi@gmail.com', '12345', 'female', '1564451636_Profile-Pau-300x300.jpg'),
(13, 'ddfgdfg', 'w5@fgg.com', '65646', 'male', '1564460762_Lorenzo-2-300x300.jpg'),
(14, 'Robi', 'robi@gmail.com', '12345', 'male', '1564461344_HR-Consulting-banner-300x300.jpg'),
(17, 'yokai', 'youkai@gmail.com', '12345', 'male', '1564490093_img-doctors-Dery_William_MD_126-300x300.jpg'),
(18, 'Batman', 'bat@gmail.com', '12345', 'male', '1564497832_Einar-300x300.jpg'),
(19, 'Black Man', 'black@gmail.com', '12345', 'male', '1564499860_John_Figol-300x300.jpg'),
(20, 'kaniz fatema', 'kaniz9fatema@gmail.com', 'amiektagadha', 'female', '1564544464_HR-Consulting-banner-300x300.jpg'),
(21, 'Sifat', 'sifat@gmail.com', '12345', 'female', '1564545378_team-540x540-3-300x300.jpg'),
(22, 'Moumitu', 'moumitu@gmail.com', '12345', 'female', '1564552331_team-540x540-3-300x300.jpg'),
(23, 'humayra', 'humu@gmail.com', '1234', 'female', '1564552435_img-doctors-Dery_William_MD_126-300x300.jpg'),
(24, 'oyshi', 'oyshi@gmail.com', '12345', 'female', '1564552630_team-540x540-3-300x300.jpg'),
(25, 'kazi', 'kazi@gmail.com', '12345', 'male', '1564556259_Profile-Pau-300x300.jpg'),
(26, 'turjo', 'turjo@gmail.com', '12345', 'male', '1564556443_John_Figol-300x300.jpg'),
(27, 'Zubair', 'Zubair@gmail.com', '12345', 'male', '1564663751_John_Figol-300x300.jpg'),
(30, 'Akashi', 'akashi@gmail.com', '12345', 'male', '1568037777_index.jpg'),
(31, 'Tanjiro', 'tanjiro@gmail.com', '12345', 'male', '1568040834_auheadshot2_smallsizeforprofile_2.JPG'),
(32, 'Misaki', 'misaki@gmail.com', '12345', 'female', '1568044667_19.jpg'),
(33, 'Ritsu', 'ritsu@gmail.com', '12345', 'female', '1568087942_14.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
