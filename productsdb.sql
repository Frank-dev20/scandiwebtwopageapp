-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2022 at 05:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
/* Database: `productsdb`*/
--

-- --------------------------------------------------------

--
/* Table structure for table `product`*/;
--

/* DROP DATABASE IF EXISTS productsDB;*/;
/* CREATE DATABASE IF NOT EXISTS productsDB;*/;

use id19474923_productdb;

/* DROP TABLE IF EXISTS products;*/;
/* CREATE TABLE IF NOT EXISTS product*/;

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `SKU`, `name`, `price`, `img`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES
(1, '30', 'Sikiru Quadri olashina', '900', 'img/IMG_1327.JPG', '1', '800', '', '', '', ''),
(5, '3', 'new program', '766', 'img/IMG_1327.JPG', '2', '', '12', '', '', ''),
(6, '190', 'fwoih', '12', 'img/IMG_1345.JPG', '3', '', '', '12', '12', '12'),
(7, '21', 'new program', '2.46', 'img/IMG_1345.JPG', '2', '', '10', '', '', ''),
(8, '67', 'TEST', '1.57', 'img/IMG_1353.JPG', '1', '2800', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
