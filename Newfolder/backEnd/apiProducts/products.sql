-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2025 at 03:09 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobodigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `isFavorite` varchar(200) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `stars` varchar(20) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `Os` varchar(100) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `graphics` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `Memory_Storage` varchar(100) NOT NULL,
  `RefreshRate` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `count` varchar(255) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `type`, `isFavorite`, `brand`, `price`, `stars`, `Model`, `processor`, `Os`, `ram`, `graphics`, `display`, `Memory_Storage`, `RefreshRate`, `color`, `count`, `imgSrc`) VALUES
(1, 'mobile 2', '5', 'phone', '1', 'samsung', '3000', '100', '400i', 'micro20', 'Android', '12', '232', '747a', '23', '1233', 'Yellow', '10', '128GB.jpg'),
(2, 'Galaxy S24 Ultra 5G', '2', 'phone', '', 'Samsung', '344', '3', 'Galaxy S24 Ultra', 'Snapdragon 8 Gen 3', 'Android', '10', 'Adreno 750', '4.4', '343', '33', 'Titanium Blackt', '10', '../assets/img/Phones/Samsung/71-EnPs+uQL._AC_SX679_.jpg'),
(3, 'Galaxy S24 Ultra 5G', '2', 'phone', '', 'Samsung', '344', '3', 'Galaxy S24 Ultra', 'Snapdragon 8 Gen 3', 'Android', '10', 'Adreno 750', '4.4', '343', '33', 'Titanium Blackt', '10', '../assets/img/Phones/Samsung/71-EnPs+uQL._AC_SX679_.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
