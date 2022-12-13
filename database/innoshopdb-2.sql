-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 07:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innoshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `active`, `img`) VALUES
(1, 'Gia Vị', 1, 'category-dairy-bread-eggs.jpg'),
(2, 'Thực Phẩm', 1, 'category-snack-munchies.jpg'),
(3, 'Bánh quy', 1, 'category-bakery-biscuits.jpg'),
(4, 'Các loại hạt, ngũ cốc', 1, 'ngu-coc-granola-sieu-hat-an-kieng-100-mat-ong.png'),
(5, 'Gạo lứt', 1, 'gao-lut.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `status`, `amount`, `payment`, `username`, `createdAt`) VALUES
(1, 'Cancel', 450000, 'Debit Card', 'thientruc@ueh.com.vn', '2011-10-22 13:16:00'),
(2, 'Completed', 450000, 'Credit Card', 'chauqui@ueh.com.vn', '2011-10-22 13:16:00'),
(3, 'Completed', 360000, 'Debit Card', 'dangduc@ueh.com.vn', '2011-10-22 13:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_products`
--

CREATE TABLE `tbl_order_products` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_products`
--

INSERT INTO `tbl_order_products` (`orderId`, `productId`, `quantity`, `amount`) VALUES
(1, 1, 2, 450000),
(1, 2, 2, 450000),
(2, 2, 2, 450000),
(3, 2, 1, 360000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nameUnsigned` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `detail`, `price`, `status`, `code`, `categoryId`, `img`, `nameUnsigned`) VALUES
(1, 'Napolitanke Ljesnjak', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>,\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 640000, 'In Stock', 'UEH00001', 3, 'product-img-1.jpg', 'napolitanke ljesnjak'),
(2, 'Bánh quy đậu xanh', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 37000, 'In Stock', 'UEH00002', 3, 'product-img-2.jpg', 'banh quy dau xanh'),
(3, 'Bánh dinh dưỡng', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 640000, 'In Stock', 'UEH00003', 3, 'product-img-3.jpg', 'banh dinh duong'),
(4, 'Bánh quy loại 1', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 340000, 'In Stock', 'UEH00004', 3, 'product-img-9.jpg', 'banh quy loai 1'),
(5, 'Ăn vặt', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 990000, 'In Stock', 'UEH00005', 3, 'product-img-6.jpg', 'an vat'),
(6, 'Bánh quy loại 2', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 340000, 'In Stock', 'UEH00006', 2, 'product-img-9.jpg', 'banh quy loai 2'),
(7, 'Bánh tráng trộn', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 990000, 'In Stock', 'UEH00007', 1, 'product-img-6.jpg', 'banh trang tron'),
(8, 'Bánh gạo lứt', '<div class=\"my-8\">\n<div class=\"mb-5\">\n<!-- text -->\n<h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\ntellus iaculis urna\nbibendum\nin lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\nvarius\nhabitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\nadipiscing\nsagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Storage Tips</h5>\n<p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\nvitae varius sed\nmagnis eu\nnisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\nante ipsum\nnetus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\nadipiscing elit.\n</p>\n</div>\n<!-- content -->\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Unit</h5>\n<p class=\"mb-0\">3 units</p>\n</div>\n<div class=\"mb-5\">\n<h5 class=\"mb-1\">Seller</h5>\n<p class=\"mb-0\">DMart Pvt. LTD</p>\n</div>\n<div>\n<h5 class=\"mb-1\">Disclaimer</h5>\n<p class=\"mb-0\">Image shown is a representation and may slightly vary from the\nactual product. Every\neffort\nis made to maintain accuracy of all information displayed.</p>\n</div>\n</div>', 37000, 'In Stock', 'UEH00008', 4, 'product-img-5.jpg', 'banh gao lut');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL,
  `shippingAddress` varchar(3000) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `phoneNumber` int(10) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `password`, `shippingAddress`, `email`, `phoneNumber`, `isAdmin`) VALUES
(1, 'Đỗ Nguyễn Thiên Trúc', 'thientruc@ueh.com.vn', 'c4ca4238a0b923820dcc509a6f75849b', '<p class=\"mb-6\">Jitu Chauhan<br>\n\n                                            4450 North Avenue Oakland, <br>\n\n                                            Nebraska, United States,<br>\n\n                                            402-776-1106</p>', 'thientruc@ueh.com.vn', 789333333, 0),
(2, 'Châu Thanh Tứ Quí', 'chauqui@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', '<p class=\"mb-6\">Viet Nam<br>\n\n                                            200 Cao Đạt, Phường 1 <br>\n\n                                            Quận 5, TP Hồ Chí Minh<br>\n\n                                            0798333333</p>', 'chauqui@ueh.com.vn', 789444444, 0),
(3, 'Đặng Trung Đức', 'trungduc@ueh.com.vn', '6512bd43d9caa6e02c990b0a82652dca', '<p class=\"mb-6\">Viet Nam<br>\n\n                                            279 Nguyen Tri Phuong, Phường 1 <br>\n\n                                            Quận 10,TP Hồ Chí Minh<br>\n\n                                            0798555555</p>', 'trungduc@ueh.com.vn', 789555555, 0),
(9, 'Bùi Quốc Việt', 'quocviet@ueh.com.vn', '202cb962ac59075b964b07152d234b70', '<p class=\"mb-6\">Viet Nam<br>\n\n                                            279 Nguyen Tri Phuong, Phường 1 <br>\n\n                                            Quận 10,TP Hồ Chí Minh<br>\n\n                                            0798666666</p>', 'quocviet@ueh.com.vn', 798666666, 0),
(11, 'admin01', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'admin@gmail.com', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_products`
--
ALTER TABLE `tbl_order_products`
  ADD PRIMARY KEY (`productId`,`orderId`) USING BTREE,
  ADD KEY `orderId` (`orderId`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`,`phoneNumber`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order_products`
--
ALTER TABLE `tbl_order_products`
  ADD CONSTRAINT `tbl_order_products_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `tbl_orders` (`id`),
  ADD CONSTRAINT `tbl_order_products_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tbl_products` (`id`);

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `tbl_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
