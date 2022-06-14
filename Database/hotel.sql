-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2022 lúc 02:59 PM
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(8) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_idCard` varchar(12) NOT NULL,
  `customer_phone` varchar(11) NOT NULL,
  `customer_mail` varchar(50) DEFAULT NULL,
  `numRoom1` int(2) NOT NULL DEFAULT 0,
  `numRoom2` int(2) NOT NULL DEFAULT 0,
  `booking_date` date NOT NULL DEFAULT current_timestamp(),
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `total_price` varchar(12) NOT NULL,
  `note` varchar(200) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'booking',
  `employee` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_name`, `customer_idCard`, `customer_phone`, `customer_mail`, `numRoom1`, `numRoom2`, `booking_date`, `checkin_date`, `checkout_date`, `total_price`, `note`, `status`, `employee`) VALUES
(1, 'Nguyễn Văn Quang', '1914802', '0965724322', NULL, 1, 0, '2022-06-11', '0000-00-00', '0000-00-00', '0', NULL, 'booking', NULL),
(2, 'THiện', '222444', '0123647899', NULL, 1, 0, '2022-06-11', '0000-00-00', '0000-00-00', '0', NULL, 'booking', NULL),
(3, 'thông', '2242466', '0124647899', NULL, 1, 0, '2022-06-11', '0000-00-00', '0000-00-00', '0', NULL, 'booking', NULL),
(4, 'khoa', '2242466', '0124647899', NULL, 1, 2, '2022-06-11', '0000-00-00', '0000-00-00', '0', NULL, 'booking', NULL),
(5, 'khoa', '2242466', '0124647899', NULL, 1, 2, '2022-06-11', '2022-06-11', '2022-06-15', '0', NULL, 'booking', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `confirmbooking`
--

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

INSERT INTO `confirmbooking` (`id`, `customer_name`, `customer_idCard`, `customer_phone`, `checkin_date`, `checkout_date`, `room_number`, `satus`) VALUES
(1, 'Nguyễn Văn Quang', '1914802', '0965724322', '2022-06-11', '2022-06-15', 202, 'Confirm'),
(2, 'Nguyễn Huang', '1914802', '0965724322', '2022-06-11', '2022-06-15', 101, 'Confirm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `imageSrc` varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `userName`, `content`, `rating`, `imageSrc`) VALUES
(1, 'Scott', 'We loved it !!!', '5', 'male2.png'),
(2, 'Lana', 'Nice place', '5', 'female3.png'),
(3, 'Dustin', 'Fantastic experience', '5', 'male1.png');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `room_id` int(3) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Trống'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `status`) VALUES
(101, '1', 'Trống'),
(102, '1', 'Trống'),
(103, '1', 'Trống'),
(104, '2', 'Trống'),
(105, '2', 'Trống'),
(201, '1', 'Trống'),
(202, '1', 'Trống'),
(203, '1', 'Trống'),
(204, '2', 'Trống'),
(205, '2', 'Trống'),
(301, '1', 'Trống'),
(302, '1', 'Trống'),
(303, '1', 'Trống'),
(304, '2', 'Trống'),
(305, '2', 'Trống'),
(401, '1', 'Trống'),
(402, '1', 'Trống'),
(403, '1', 'Trống'),
(404, '2', 'Trống'),
(405, '2', 'Trống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(8) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `PhoneNum` varchar(11) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'employee'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `userName`, `password`, `fullName`, `PhoneNum`, `role`) VALUES
(1, 'haha', '123', 'Kang Dai Ka', '0965724322', 'employee'),
(2, 'admin', 'admin', 'admin', '0965724322', 'admin');

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
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `confirmbooking`
--
ALTER TABLE `confirmbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;