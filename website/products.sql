-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2022 at 05:14 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) DEFAULT '0.00',
  `quantity` int NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'coloumbia beans', 'coffee beans ', '9.00', '0.00', 10, 'img/coloumbia beans.png\r\n', '2022-04-20 17:58:33'),
(2, 'Arabica Coffee Beans', 'coffee beans ', '12.00', '0.00', 10, 'img/Arabica Coffee Beans.png', '2022-04-20 17:58:33'),
(3, 'Robusta Coffee Beans', 'coffee beans ', '9.00', '0.00', 10, 'img/Robusta Coffee Beans.png', '2022-04-20 17:58:33'),
(4, 'Liberica Coffee Beans', 'coffee beans ', '11.00', '0.00', 10, 'img/Liberica Coffee Beans.png', '2022-04-20 17:58:33'),
(5, 'vanilla Coffee Beans', 'coffee beans ', '11.00', '0.00', 10, 'img/vanilla Coffee Beans.jpg', '2022-04-20 17:58:33'),
(6, 'our cooking book', 'cooking book ', '6.00', '9.00', 10, 'img/our cooking book.png', '2022-04-20 17:58:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
