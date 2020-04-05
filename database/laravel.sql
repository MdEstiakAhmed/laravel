-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 10:35 PM
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
-- Table structure for table `account_block_request`
--

CREATE TABLE `account_block_request` (
  `user_id` int(5) NOT NULL,
  `block_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_warning`
--

CREATE TABLE `account_warning` (
  `user_id` int(11) NOT NULL,
  `warning_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_warning`
--

INSERT INTO `account_warning` (`user_id`, `warning_count`) VALUES
(10001, 0),
(10002, 0),
(10003, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `post_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `comment_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`post_id`, `user_id`, `comment_text`) VALUES
(20001, 10001, 'testing'),
(20002, 10003, 'testing'),
(20003, 10002, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `post_details`
--

CREATE TABLE `post_details` (
  `post_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `post_text` varchar(255) DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_type` varchar(15) NOT NULL,
  `post_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_details`
--

INSERT INTO `post_details` (`post_id`, `user_id`, `post_text`, `post_image`, `post_type`, `post_status`) VALUES
(20001, 10001, 'post checked by account manager', NULL, 'public', 'approve'),
(20002, 10002, 'post checked by post manager', NULL, 'public', 'approve'),
(20003, 10003, 'new post from nahian.', NULL, 'public', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `post_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_id`, `user_id`) VALUES
(20001, 10002),
(20001, 10003),
(20002, 10001),
(20002, 10003),
(20003, 10001),
(20003, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(5) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` varchar(50) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_type` varchar(15) NOT NULL,
  `account_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `first_name`, `last_name`, `phone`, `gender`, `birthdate`, `bio`, `website`, `address`, `image`, `user_type`, `account_status`) VALUES
(10001, 'Jami', 'Joy', '01715872336', 'male', '31/12/1990', 'Hi, I am Jami Joy', 'www.jamijoy.com', '35/A, Bashundhara, Dhaka: 1220', NULL, 'account.manager', 'active'),
(10002, 'Estiak', 'Ahmed', '01766589770', 'male', '28/02/1991', 'Hi, It\'s Estiak', 'www.estiak.com', '40-C, Banani, Dhaka: 1207', NULL, 'post.manager', 'active'),
(10003, 'Md', 'Nahian', '01975897554', 'male', '31/01/1990', 'hello from Nahian.', 'www.nahian.com', '12/C, Gulsan, Dhaka: 1201', NULL, 'user', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_follower`
--

CREATE TABLE `user_follower` (
  `user_id` int(5) NOT NULL,
  `follower_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_follower`
--

INSERT INTO `user_follower` (`user_id`, `follower_id`) VALUES
(10003, 10001),
(10003, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `user_following`
--

CREATE TABLE `user_following` (
  `user_id` int(5) NOT NULL,
  `following_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_following`
--

INSERT INTO `user_following` (`user_id`, `following_id`) VALUES
(10003, 10001),
(10003, 10002);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `username`, `email`, `password`) VALUES
(10001, 'acm', 'acm@gmail.com', 'acm'),
(10002, 'pcm', 'pcm@gmail.com', 'pcm'),
(10003, 'user', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_block_request`
--
ALTER TABLE `account_block_request`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `account_warning`
--
ALTER TABLE `account_warning`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_details`
--
ALTER TABLE `post_details`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `follower_id` (`follower_id`);

--
-- Indexes for table `user_following`
--
ALTER TABLE `user_following`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `following_id` (`following_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_details`
--
ALTER TABLE `post_details`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20005;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_block_request`
--
ALTER TABLE `account_block_request`
  ADD CONSTRAINT `account_block_request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `account_warning`
--
ALTER TABLE `account_warning`
  ADD CONSTRAINT `account_warning_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD CONSTRAINT `post_comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_details` (`post_id`),
  ADD CONSTRAINT `post_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `post_details`
--
ALTER TABLE `post_details`
  ADD CONSTRAINT `post_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `post_like_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_details` (`post_id`),
  ADD CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD CONSTRAINT `user_follower_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`),
  ADD CONSTRAINT `user_follower_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `user_login` (`user_id`);

--
-- Constraints for table `user_following`
--
ALTER TABLE `user_following`
  ADD CONSTRAINT `user_following_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`user_id`),
  ADD CONSTRAINT `user_following_ibfk_2` FOREIGN KEY (`following_id`) REFERENCES `user_login` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
