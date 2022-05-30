-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 01:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `templemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `darshanbooking`
--

CREATE TABLE `darshanbooking` (
  `id` int(11) NOT NULL,
  `dateof` varchar(20) NOT NULL,
  `timeof` varchar(20) NOT NULL,
  `totalmemebers` int(11) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `identityproof` varchar(45) NOT NULL,
  `identityproofno` varchar(45) NOT NULL,
  `message` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `bookingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `darshanbooking`
--

INSERT INTO `darshanbooking` (`id`, `dateof`, `timeof`, `totalmemebers`, `city`, `state`, `country`, `identityproof`, `identityproofno`, `message`, `useremail`, `bookingdate`, `amount`) VALUES
(1, '2022-05-26', '18:14', 12, 'Srikakulam', 'ap', 'indian', 'Passport card', '123231231231', 'no', 'vineelapallapu@gmail.com', '2022-05-19 09:45:05', 1200),
(2, '2022-05-23', '18:21', 45, 'Srikakulam', 'ap', 'indian', 'Passport card', '21221', '123', 'vineelapallapu@gmail.com', '2022-05-19 09:49:02', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `mbl` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Register_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mbl`, `password`, `Register_time`) VALUES
(1, 'sai', 'ram', 'sairam@gamail.com', '8712388818', '123', '2022-05-18 11:30:31'),
(2, 'vineela', 'pallapu', 'vineelapallapu@gmail.com', '7032574838', '555', '2022-05-18 11:32:24'),
(3, 'pavan', 'narayanasetty', 'pavanarayanasetty@gmail.com', '7396095154', '222', '2022-05-18 11:33:43'),
(4, 'priyanka', 'vandranji', 'vpriyanka@gmail.com', '9966993321', '1231', '2022-05-18 11:45:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `darshanbooking`
--
ALTER TABLE `darshanbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `darshanbooking`
--
ALTER TABLE `darshanbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
