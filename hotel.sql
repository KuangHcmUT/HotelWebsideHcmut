-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2022 lúc 04:11 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `booking_id` int(8) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_idCard` varchar(12) NOT NULL,
  `customer_phone` varchar(11) NOT NULL,
  `roomtype` varchar(10) NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp(),
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `total_price` varchar(12) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'booking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_name`, `customer_idCard`, `customer_phone`, `roomtype`, `booking_date`, `checkin_date`, `checkout_date`, `total_price`, `status`) VALUES
(8, 'customer', '1914802', '0587003309', 'single', '2022-06-19', '2022-06-13', '2022-06-15', '140', 'Confirm'),
(9, 'customer', '1914802', '0587003309', 'double', '2022-06-19', '2022-06-22', '2022-06-26', '480', 'Confirm'),
(10, 'Quang Nguyen Van', '285752311', '0147852369', 'single', '2022-06-19', '2022-06-22', '2022-06-23', '70', 'booking');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `confirmbooking`
--

DROP TABLE IF EXISTS `confirmbooking`;
CREATE TABLE `confirmbooking` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_idCard` varchar(12) NOT NULL,
  `customer_phone` varchar(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `room_number` int(3) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Confirm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `confirmbooking`
--

INSERT INTO `confirmbooking` (`id`, `customer_name`, `customer_idCard`, `customer_phone`, `checkin_date`, `checkout_date`, `room_number`, `status`) VALUES
(7, 'customer', '1914802', '0587003309', '2022-06-13', '2022-06-15', 101, 'Checked Out'),
(8, 'customer', '1914802', '0587003309', '2022-06-22', '2022-06-26', 104, 'Confirm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(8) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `content` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `imageSrc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `userName`, `content`, `rating`, `imageSrc`) VALUES
(1, 'Scott', 'We loved it !!!', 5, 'male2.png'),
(2, 'Lana', 'Nice place', 5, 'female3.png'),
(3, 'Dustin', 'Fantastic experience', 5, 'male1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `room_id` int(3) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Ready'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `status`) VALUES
(101, 'single', 'Ready'),
(102, 'single', 'Ready'),
(103, 'single', 'Ready'),
(104, 'double', 'Ready'),
(105, 'double', 'Ready'),
(201, 'single', 'Ready'),
(202, 'single', 'Ready'),
(203, 'single', 'Ready'),
(204, 'double', 'Ready'),
(205, 'double', 'Ready'),
(301, 'single', 'Ready'),
(302, 'single', 'Ready'),
(303, 'single', 'Ready'),
(304, 'double', 'Ready'),
(305, 'double', 'Ready'),
(401, 'single', 'Ready'),
(402, 'single', 'Ready'),
(403, 'single', 'Ready'),
(404, 'double', 'Ready'),
(405, 'double', 'Ready');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(8) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `PhoneNum` varchar(11) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `userName`, `password`, `fullName`, `PhoneNum`, `role`) VALUES
(1, 'employee', 'employee', 'employee', '0965724322', 'employee'),
(2, 'admin', 'admin', 'admin', '0965724321', 'admin'),
(6, 'customer', 'customer', 'customer', '0587003309', 'customer'),
(11, 'customer2', 'customer', 'Quang Nguyen Van', '0147852369', 'customer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Chỉ mục cho bảng `confirmbooking`
--
ALTER TABLE `confirmbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_number` (`room_number`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `PhoneNum` (`PhoneNum`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `confirmbooking`
--
ALTER TABLE `confirmbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `confirmbooking`
--
ALTER TABLE `confirmbooking`
  ADD CONSTRAINT `confirmbooking_ibfk_1` FOREIGN KEY (`room_number`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
