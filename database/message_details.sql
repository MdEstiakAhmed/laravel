-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 07:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_details`
--

CREATE TABLE `message_details` (
  `message_id` int(4) NOT NULL,
  `user_id` int(5) NOT NULL,
  `sender_id` int(5) NOT NULL,
  `message_text` varchar(500) NOT NULL,
  `message_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_details`
--

INSERT INTO `message_details` (`message_id`, `user_id`, `sender_id`, `message_text`, `message_time`) VALUES
(1101, 10304, 10001, 'Account activity check request for User id : 10293', '2020-05-02 03:25'),
(1102, 10304, 10001, 'Account activity check request for User id : 10160', '2020-05-03 07:12'),
(1103, 10014, 10001, 'Account activity checked of User id : 10160', '2020-05-08 06:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_details`
--
ALTER TABLE `message_details`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_details`
--
ALTER TABLE `message_details`
  MODIFY `message_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
