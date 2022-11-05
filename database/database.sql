-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2022 lúc 12:02 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tblproduct`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'san pham 1', '3DcAM01', 'assets/SP1.png', 1000000.00),
(2, 'san pham 2', 'USB02', 'assets/SP2.png', 2000000.00),
(3, 'sna pham 3', 'xdfg21', 'assets/SP3.png', 40000000.00),
(4, 'san pham 4', 'HJR21', 'assets/SP4.png', 6000000.00),
(5, 'san pham 5', 'GFS97', 'assets/SP5.png', 459000.00),
(6, 'san pham 6', 'FSDKLEF23', 'assets/SP6.png', 5400000.00),
(7, 'san pham 7', 'DS56', 'assets/SP7.png', 6900000.00),
(8, 'san pham 8', 'QE58', 'assets/SP8.png', 36000000.00);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

CREATE TABLE IF NOT EXISTS `tbl_users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `hoTen` varchar(100) NOT NULL DEFAULT '',
    `username` varchar(50) NOT NULL DEFAULT '',
    `password` varchar(50) NOT NULL,
    `diaChi` varchar(255) DEFAULT NULL,
    `phoneNumber` varchar(255) DEFAULT NULL,
    `email` varchar(255) NOT NULL DEFAULT '',
    `createdAt` date NOT NULL DEFAULT '0000-00-00',
    `idGroup` int(11) NOT NULL DEFAULT '0',
    `birthday` date DEFAULT NULL,
    `gender` tinyint(1) DEFAULT NULL,
    `active` int(11) DEFAULT NULL,
    `randomKey` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`),
    UNIQUE KEY `email` (`email`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--

INSERT INTO `tbl_users`(`id`, `hoTen`, `username`, `password`, `diaChi`, `phoneNumber`, `email`, `createdAt`, `idGroup`, `birthday`, `gender`, `active`, `randomKey`)
VALUES (1, 'client 1', 'client1', 'c4ca4238a0b923820dcc509a6f75849b', 'client14@ueh.com.vn', '0912349999', 'client14@ueh.com.vn', '2019-01-22', 0, '1999-01-01', 0, 1, 'jashdjsahdjahsj23232')

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping_address`
--

CREATE TABLE `tbl_shipping_address` (
                                        `id` int(11) NOT NULL,
                                        `firstName` varchar(30) NOT NULL,
                                        `lastName` varchar(30) NOT NULL,
                                        `username` varchar(30) NOT NULL,
                                        `address` varchar(50) NOT NULL,
                                        `area` varchar(30) NOT NULL,
                                        `province` varchar(30) NOT NULL,
                                        `zip` varchar(10) NOT NULL,
                                        `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping_address`
--

INSERT INTO `tbl_shipping_address` (`id`, `firstName`, `lastName`, `username`, `address`, `area`, `province`, `zip`, `phone`) VALUES
    (2, 'Ocean', 'Chau', 'client14@ueh.com.vn', '30 Cao Thang', 'Quan 3', 'Ho Chi Minh', '1', '0342821701');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_shipping_address`
--
ALTER TABLE `tbl_shipping_address`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_shipping_address`
--
ALTER TABLE `tbl_shipping_address`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
                                    `id` int(11) NOT NULL,
                                    `amount` double NOT NULL,
                                    `paymentMethod` varchar(20) NOT NULL,
                                    `shippingAddressId` int(11) NOT NULL,
                                    `username` varchar(30) NOT NULL,
                                    `orderId` int(11) NOT NULL,
                                    `status` varchar(10) NOT NULL,
                                    `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
                                    `id` int(11) NOT NULL,
                                    `amount` double NOT NULL,
                                    `paymentMethod` varchar(20) NOT NULL,
                                    `shippingAddressId` int(11) NOT NULL,
                                    `username` varchar(30) NOT NULL,
                                    `orderId` int(11) NOT NULL,
                                    `status` varchar(10) NOT NULL,
                                    `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `amount`, `paymentMethod`, `shippingAddressId`, `username`, `orderId`, `status`, `createdAt`) VALUES
                                                                                                                                        (1, 2, 'CREDIT_CARD', 2, 'client14@ueh.com.vn', 1, 'PAID', '2022-11-05 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
