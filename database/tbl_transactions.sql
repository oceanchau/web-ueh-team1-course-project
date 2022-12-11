-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 07:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uehshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int(11) NOT NULL,
  `time` date NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `orderBy` varchar(50) DEFAULT NULL,
  `price` double UNSIGNED DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `time`, `amount`, `status`, `productId`, `orderBy`, `price`, `name`) VALUES
(1, '2022-12-10', 10, 'success', 9, 'DTD', 500000, NULL),
(2, '2022-12-09', 1, 'success', 9, 'DTD', 100000, NULL),
(3, '2022-12-09', 1, 'success', 8, 'DTD', 100000, NULL),
(4, '2022-12-10', 1, 'success', 7, 'DTD', 10000000, NULL),
(5, '2022-12-10', 3, 'success', 7, 'DTD', 1000000, NULL),
(6, '2022-12-10', 5, 'fail', 7, 'DTD', 1000000, NULL),
(7, '2022-12-10', 3, 'success', 7, 'DTD', 1000000, NULL),
(8, '2022-12-10', 1, 'fail', 9, 'DTD', 1000000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
