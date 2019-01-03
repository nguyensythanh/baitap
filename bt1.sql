-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2019 lúc 09:12 AM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bt1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pull`
--

CREATE TABLE `pull` (
  `id` int(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `sell` float NOT NULL,
  `buy` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `changee` float NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pull`
--

INSERT INTO `pull` (`id`, `currency`, `sell`, `buy`, `status`, `changee`, `created_time`) VALUES
(1, 'VND/USD', 1300, 1305, 1, 0.3, '2019-01-02 06:48:20'),
(2, 'USD/JPY', 1400, 1425, 2, 0.7, '2019-01-02 06:48:20'),
(3, 'VND/USD', 2000, 2042, 2, 0.9, '2019-01-02 06:58:20'),
(4, 'USD/JPY', 2931, 3000, 1, 0.47, '2019-01-02 06:58:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pull`
--
ALTER TABLE `pull`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pull`
--
ALTER TABLE `pull`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
