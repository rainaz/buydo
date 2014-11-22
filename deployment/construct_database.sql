-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 10:21 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `current_bid` double NOT NULL,
  `max_bid` double NOT NULL,
  `bid_date` date NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `bid_items`
--

CREATE TABLE IF NOT EXISTS `bid_items` (
  `item_id` int(11) NOT NULL,
  `current_winner_id` int(11) NOT NULL,
  `initial_price` double NOT NULL,
  `current_price` double NOT NULL,
  `current_max_bid` double NOT NULL,
  `end_date` double NOT NULL,
  `seller_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `buy_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `buy_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`buy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE IF NOT EXISTS `buyers` (
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `accused` varchar(50) NOT NULL,
  `date` timestamp NOT NULL,
  `topic` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `feedback_from` int(11) NOT NULL,
  `feedback_to` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(40) NOT NULL,
  `posted_date` date NOT NULL,
  `agreement` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `spec` text NOT NULL,
  `owner_id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE IF NOT EXISTS `sale_items` (
  `item_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity_in_stock` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE IF NOT EXISTS `sellers` (
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `placement_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL,
  `transaction_status` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `creditcard` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `sent_address` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(41) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `start_banned` date NOT NULL,
  `banned_duration` int(11) NOT NULL,
  `banned_reason` varchar(50) NOT NULL,
  `penalty_count` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `buyers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD CONSTRAINT `saleItem_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `items`
  ADD CONSTRAINT `item_owner` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `sale_items`
  ADD CONSTRAINT `sale_item_info` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

ALTER TABLE `bid_items`
  ADD CONSTRAINT `bid_item_info` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

ALTER TABLE `bid_items`
  ADD CONSTRAINT `winner_info` FOREIGN KEY (`current_winner_id`) REFERENCES `buyers` (`user_id`);

ALTER TABLE `complain`
  ADD CONSTRAINT `complainant` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedback_transaction` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`transaction_id`);

ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedback_from_person` FOREIGN KEY (`feedback_from`) REFERENCES `users` (`user_id`);

ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedback_to_person` FOREIGN KEY (`feedback_to`) REFERENCES `users` (`user_id`);

ALTER TABLE `transactions`
  ADD CONSTRAINT `buyer` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`user_id`);

ALTER TABLE `transactions`
  ADD CONSTRAINT `seller` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`user_id`);

ALTER TABLE `transactions`
  ADD CONSTRAINT `item` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);


ALTER TABLE `buy`
  ADD CONSTRAINT `item_bought` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

ALTER TABLE `buy`
  ADD CONSTRAINT `buyer_buy_item` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`user_id`);

ALTER TABLE `bid`
  ADD CONSTRAINT `item_bidded` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

ALTER TABLE `bid`
  ADD CONSTRAINT `buyer_bid_item` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`user_id`);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
