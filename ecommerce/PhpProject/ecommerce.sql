-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 27, 2021 at 07:13 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS ', 36000),
(2, 'Nikon DSLR ', 40000),
(3, 'Sony DSLR ', 50000),
(4, 'Olympus DSLR ', 70000),
(5, 'Titan Model #301 ', 4999),
(6, 'Titan Model #501 ', 6999),
(7, 'HMT Milan ', 8999),
(8, 'Faber Luba #111', 13999),
(9, 'H&W ', 999),
(10, 'Luis Phil ', 1999),
(11, 'John Zok ', 3999),
(12, 'Jhalsani ', 4499);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `registration_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `registration_timestamp`) VALUES
(0, '', 'rk@gmail.com', '1234567', 0, '', '', '2021-06-26 10:22:28'),
(34, 'ronak', 'rounak2324@gmail.com', '123456789', 0, 'kota', '404', '2021-06-26 10:22:28'),
(35, 'ronak', 'rounak4356@gmail.com', '123456789', 0, 'kota', '404MN-2', '2021-06-26 10:22:28'),
(36, 'ron', 'rounak23212@gmail.com', '12345678', 9894884784, 'kota', '404MN-2', '2021-06-26 10:22:28'),
(37, 'rounak', 'rounak4564@gmail.com', '12345678', 9876544543, 'kota', '404MN-2', '2021-06-26 10:22:28'),
(38, 'rounak', 'rounak111@gmail.com', '12345678', 0, 'l', 'l', '2021-06-26 14:10:08'),
(39, 'wdwd', 'swwwwws@hdh.ddd', '1234567', 12345, '44', '44', '2021-06-26 14:12:05'),
(40, '111', '11qwerty@wer.ert', '1234567', 3, 'm', 'm', '2021-06-26 14:14:28'),
(41, 'ronak', 'rounak31234@gmail.com', '25d55ad283aa400af464c76d713c07ad', 12, 'M', 'M', '2021-06-26 14:25:52'),
(42, 'rounak', 'rounak2222@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 12, 'kota', '404MN-2', '2021-06-26 14:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added to cart','Confirmed') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `products_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`, `timestamp`) VALUES
(68, 42, 2, 'Confirmed', '2021-06-26 17:16:26'),
(70, 42, 1, 'Confirmed', '2021-06-26 17:16:26'),
(74, 42, 1, 'Confirmed', '2021-06-26 17:16:26'),
(78, 42, 1, 'Confirmed', '2021-06-26 17:16:26'),
(79, 42, 2, 'Confirmed', '2021-06-26 17:16:26'),
(80, 42, 1, 'Added to cart', '2021-06-27 06:59:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
