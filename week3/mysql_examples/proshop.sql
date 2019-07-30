-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 11:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proshop`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spAddProduct` (IN `no` INT(11), IN `name` VARCHAR(255), IN `description` TEXT, IN `cost` DECIMAL(7,2), IN `number_in_stock` INT(11))  MODIFIES SQL DATA
    DETERMINISTIC
INSERT INTO PRODUCTS VALUES(no, name, description, cost, number_in_stock)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` decimal(7,2) NOT NULL,
  `number_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`no`, `name`, `description`, `cost`, `number_in_stock`) VALUES
(1, 'bat laptop', 'batmans laptop', '450.00', 5),
(2, 'super laptop', 'supermans laptop', '250.00', 2),
(3, 'x mouse', 'wireless mouse', '2.50', 15),
(4, 'y mouse', 'chord based mouse', '1.50', 4),
(5, 'tablet 1', 'blue tablet', '450.00', 5),
(6, 'tablet 2', 'green tablet', '450.00', 5),
(7, 'usb hub', '6 port powered usb hub', '32.50', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
