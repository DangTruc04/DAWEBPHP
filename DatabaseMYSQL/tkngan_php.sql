-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 01:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkngan_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(255) NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin`, `email`, `password`, `name`, `role`) VALUES
('ADMIN01', 'trucdpt', '0306221288@caothang.edu.vn', 'admin123', 'Đặng Phan Thanh Trúc', 1),
('ADMIN02', 'ngantk', '0306221253@caothang.edu.vn', 'admin123', 'Tạ Kiều Ngân', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_img` varchar(255) NOT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `name`, `category_img`, `parent_id`, `deleted`) VALUES
('ACCESSORIES', 'Accessories', 'Category/default.png', '', 1),
('CLOTHING', 'Clothing', 'Category/default.png', '', 1),
('DRE', 'Dres', 'Category/dress.jpg', 'DRE', 1),
('HAI', 'Hair Accessories', 'Category/hair.png', 'ACCESSORIES', 1),
('HAT', 'Hats', 'Category/hat.png', 'ACCESSORIES', 1),
('JEW', 'Jewelry', 'Category/jewerly.png', 'ACCESSORIES', 1),
('LOA', 'Sleep Shoes', 'Category/sleepshoes.png', 'SHOES', 1),
('PUM', 'Pumps', 'Category/pump.png', 'SHOES', 1),
('SHOES', 'Shoes', 'Category/default.png', '', 1),
('SKI', 'Skirts', 'Category/skirts.png', 'CLOTHING', 1),
('SLE', 'Sleepwaer', 'Category/sleepclothing.png', 'CLOTHING', 1),
('SNE', 'Sneaker', 'Category/sneaker.png', 'SHOES', 1),
('SUI', 'Suits', 'Category/suit.png', 'CLOTHING', 1),
('SWE', 'Sweatershirts & Hoodies', 'Category/sweater.png', 'CLOTHING', 1),
('TOP', 'Tops', 'Category/default.png', 'CLOTHING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `day_at` date DEFAULT NULL,
  `st` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `product_id`, `user_id`, `fullname`, `email`, `content`, `day_at`, `st`) VALUES
(1, 'DRE001', 'USER001', 'hangtd', 'tdhang@gmail.com\r\n', 'Good', '2020-05-20', 1),
(9, 'SLE001', '1020', 'ta kieu ngan', 'tkn69426@gmail.com', 'mệt quá hiu hiu hiu!!!!', '2023-12-26', 1),
(10, 'DRE001', '1020', 'ta kieu ngan', 'tkn69426@gmail.com', '12345', '2023-12-27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `ID` varchar(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `thumbnail` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID` int(255) NOT NULL,
  `order_id` int(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID`, `order_id`, `product_id`, `quantity`, `price`, `created`) VALUES
(1, 1, 'DRE001', 2, 74, '2022-07-20'),
(2, 1, 'SWE001', 1, 24, '2022-07-20'),
(3, 2, 'SUI001', 1, 17, '2022-01-23'),
(4, 3, 'JEW002', 3, 39, '2022-08-18'),
(5, 3, 'SLE001', 1, 18, '2022-08-18'),
(6, 4, 'SLE002', 1, 18, '2022-05-15'),
(7, 5, 'SNE001', 1, 150, '2023-05-17'),
(8, 6, 'PUM001', 1, 39, '2023-05-20'),
(9, 7, 'PUM002', 1, 48, '2023-05-28'),
(10, 8, 'DRE001', 20, 740, '2023-12-27 01:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_hd`
--

CREATE TABLE `order_hd` (
  `ID` int(255) NOT NULL,
  `order_date` date NOT NULL,
  `customer` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_money` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_hd`
--

INSERT INTO `order_hd` (`ID`, `order_date`, `customer`, `phone`, `address`, `note`, `status`, `payment_method`, `total_money`, `deleted`) VALUES
(1, '2022-07-07', 'Tần Dĩ Hằng', '0393416400', '117 TP HCM', 'NGAN DE THUONG HIHI', 'Delivered', 'Card', 98, 1),
(2, '2022-01-23', 'La Vực', '0789555164', '6 Hà Nội', '', 'Delivering', 'Cash', 17, 1),
(3, '2022-08-18', 'Nguyễn Quả', '0989440257', '16/85/C Vĩnh Long', NULL, 'Delivering', 'Momo', 75, 1),
(4, '2022-05-15', 'Diệp Lan', '0909756483', '357 TP HCM', NULL, 'Delivering', 'VNpay', 150, 1),
(5, '2023-05-17', 'Trần Bội Kỳ', '0909456331', '6 Quận 1 TP HCM', NULL, 'Cancel', 'Zalopay', 39, 1),
(6, '2023-05-20', 'Giản Tùy Anh', '0389609217', '489 Phan Thiết', NULL, 'Delivered', 'Cash', 74, 1),
(7, '2023-05-28', 'Eliott', '084 569 1057', '971 SaPa', NULL, 'Pending', 'Momo', 48, 1),
(8, '2023-12-27', 'ta kieu ngan', '+0(393)416-40-5', 'tp hcm', '', 'Delivering', 'Card', 740, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` varchar(255) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `vendor` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `variants` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `category_id`, `name`, `status`, `price`, `discount`, `thumbnail`, `vendor`, `description`, `variants`, `created_at`, `deleted`) VALUES
('DRE001', 'DRE', 'Berry Bustier Long Dress', 'Stocking', 37, 0, 'img9.jpg', 'SOSO', 'NULL', 20, '2020-05-20', 1),
('DRE002', 'DRE', 'Core Bustier Dress', 'On backorder', 61, 0, 'DRE/img2.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('DRE003', 'DRE', 'Hazel Hull Silk Shirt Dress', 'Out of stock', 49, 0, 'DRE/img3.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('DRE004', 'DRE', 'Flared Sleeve Shirt Belt Knitted Vest Winter Dress Set', 'Stocking', 34, 0, 'DRE/img4.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('HAI001', 'HAI', 'Think You Hair Band', 'Stocking', 15, 0, 'HAI/img1.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('HAI002', 'HAI', 'Flatta Hair Pin', 'Stocking', 8, 0, 'HAI/img2.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('HAI003', 'HAI', 'Marble Layered Ring Hairpin Set', 'Stocking', 15, 0, 'HAI/img3.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('HAT001', 'HAT', 'Oxford Newsboy Cap', 'Stocking', 19, 0, 'HAT/img1.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('HAT002', 'HAT', 'Beret Web Strap', 'Stocking', 34, 0, 'HAT/img2.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('HAT003', 'HAT', 'Mask Bucket', 'Stocking', 24, 0, 'HAT/img3.jpg', 'CANDY', 'null', 24, '2020-07-24', 1),
('JEW001', 'JEW', 'Lucia Earrings', 'Stocking', 12, 0, 'JEW/img1.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('JEW002', 'JEW', 'One Chain Cubic Ear Cuffs', 'Stocking', 13, 0, 'JEW/img2.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('JEW003', 'JEW', 'Moon Light Silver Asymmetrical Earrings', 'Stocking', 30, 0, 'JEW/img3.jpg', 'CANDY', 'null', 17, '2020-07-24', 1),
('LOA001', 'LOA', 'Heart Red White', 'Stocking', 16, 0, 'LOA/img1.jpg', 'BETY', 'null', 41, '2020-10-31', 1),
('LOA002', 'LOA', 'Heart Pink', 'Stocking', 17, 0, 'LOA/img2.jpg', 'BETY', 'null', 41, '2020-10-31', 1),
('LOA003', 'LOA', 'White Rabbit', 'Stocking', 17, 0, 'LOA/img3.jpg', 'BETY', 'null', 41, '2020-10-31', 1),
('PUM001', 'PUM', 'Black Suede', 'Stocking', 39, 0, 'PUM/img1.jpg', 'BETY', 'null', 41, '2020-10-31', 1),
('PUM002', 'PUM', 'Billini Rozalia', 'Stocking', 48, 0, 'PUM/img2.jpg', 'BETY', 'null', 41, '2020-10-31', 1),
('PUM003', 'PUM', 'Chussures', 'Stocking', 92, 0, 'PUM/img3.jpg', 'BETY', 'null', 41, '2020-10-31', 1),
('SKI001', 'SKI', 'Skirts Autumn Winter', 'Stocking', 39, 0, 'SKI/img1.jpg', 'SOSO', 'null', 20, '0000-00-00', 1),
('SKI002', 'SKI', 'Black Skirts Chains', 'Stocking', 19, 0, 'SKI/img2.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('SKI003', 'SKI', 'Skirts Spring Summer', 'Stocking', 21, 0, 'SKI/img3.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('SLE001', 'SLE', 'Kawaii Pajamas Set Sanrio Kuromi', 'Stocking', 18, 0, 'SLE/img1.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('SLE002', 'SLE', 'Pastel', 'Stocking', 18, 0, 'SLE/img2.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('SLE003', 'SLE', 'Shark Pajamas', 'Stocking', 11, 0, 'SLE/img3.jpg', 'SOSO', 'null', 20, '2020-05-20', 1),
('SNE001', 'SNE', 'Sneaker Teddy', 'Stocking', 150, 0, 'SNE/img1.jpg', 'BETY', 'null', 41, '2020-10-31', NULL),
('SNE002', 'SNE', 'Strumm M10', 'Stocking', 204, 0, 'SNE/img2.jpg', 'BETY', 'null', 41, '2020-10-31', NULL),
('SNE003', 'SNE', 'Chunky Breathable', 'Stocking', 168, 0, 'SNE/img3.jpg', 'BETY', 'null', 41, '2020-10-31', NULL),
('SUI001', 'SUI', 'Cardigan Jacquard V', 'Stocking', 17, 0, 'SUI/img1.jpg', 'SOSO', 'null', 20, '2020-05-20', NULL),
('SUI002', 'SUI', 'DK Uniform Casual', 'Stocking', 31, 0, 'SUI/img2.jpg', 'SOSO', 'null', 20, '2020-05-20', NULL),
('SUI003', 'SUI', 'Shirt Camisa Masculina', 'Stocking', 27, 0, 'SUI/img3.jpg', 'SOSO', 'null', 20, '2020-05-20', NULL),
('SWE001', 'SWE', 'Blank Blanc B03', 'Stocking', 24, 0, 'SWE/img1.jpg', 'SOSO', 'null', 20, '2020-05-20', NULL),
('SWE002', 'SWE', 'Kawaii Cute Zipper Hoodie', 'Stocking', 37, 0, 'SWE/img2.jpg', 'SOSO', 'null', 20, '2020-05-20', NULL),
('SWE003', 'SWE', 'Autumn Winter V-neck Oversized Sweater', 'Stocking', 14, 0, 'SWE/img3.jpg', 'SOSO', 'null', 20, '2020-05-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `product_id` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`product_id`, `product_size`, `product_color`) VALUES
('DRE001', 'L', 'Black'),
('DRE001', 'L', 'White'),
('DRE001', 'M', 'Black'),
('DRE001', 'M', 'White'),
('DRE002', 'L', 'Black'),
('DRE002', 'L', 'White'),
('DRE002', 'M', 'Black'),
('DRE002', 'M', 'White');

-- --------------------------------------------------------

--
-- Table structure for table `truycap`
--

CREATE TABLE `truycap` (
  `id` int(11) NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `visitor_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `truycap`
--

INSERT INTO `truycap` (`id`, `visit_date`, `visitor_ip`) VALUES
(1, '2023-12-26 03:33:51', '::1'),
(2, '2023-12-26 03:37:35', '::1'),
(3, '2023-12-26 03:37:47', '::1'),
(4, '2023-12-26 03:39:48', '::1'),
(5, '2023-12-26 03:40:07', '::1'),
(6, '2023-12-26 03:40:59', '::1'),
(7, '2023-12-26 03:45:25', '::1'),
(8, '2023-12-26 03:48:00', '::1'),
(9, '2023-12-26 03:48:22', '::1'),
(10, '2023-12-26 03:48:58', '::1'),
(11, '2023-12-26 03:49:02', '::1'),
(12, '2023-12-26 03:49:29', '::1'),
(13, '2023-12-26 04:42:54', '::1'),
(14, '2023-12-26 04:44:58', '::1'),
(15, '2023-12-26 04:45:39', '::1'),
(16, '2023-12-26 04:50:02', '::1'),
(17, '2023-12-26 04:51:22', '::1'),
(18, '2023-12-26 04:51:50', '::1'),
(19, '2023-12-26 04:52:26', '::1'),
(20, '2023-12-26 04:52:36', '::1'),
(21, '2023-12-26 04:53:59', '::1'),
(22, '2023-12-26 04:54:25', '::1'),
(23, '2023-12-26 05:00:37', '::1'),
(24, '2023-12-26 05:01:38', '::1'),
(25, '2023-12-26 05:02:01', '::1'),
(26, '2023-12-26 05:02:26', '::1'),
(27, '2023-12-26 05:02:49', '::1'),
(28, '2023-12-26 05:03:07', '::1'),
(29, '2023-12-26 05:03:08', '::1'),
(30, '2023-12-26 05:03:09', '::1'),
(31, '2023-12-26 05:03:22', '::1'),
(32, '2023-12-26 05:03:41', '::1'),
(33, '2023-12-26 05:05:40', '::1'),
(34, '2023-12-26 05:07:21', '::1'),
(35, '2023-12-26 05:07:24', '::1'),
(36, '2023-12-26 05:07:54', '::1'),
(37, '2023-12-26 05:25:48', '::1'),
(38, '2023-12-26 05:26:33', '::1'),
(39, '2023-12-26 05:28:19', '::1'),
(40, '2023-12-26 05:29:19', '::1'),
(41, '2023-12-26 05:29:59', '::1'),
(42, '2023-12-26 05:30:52', '::1'),
(43, '2023-12-26 05:31:22', '::1'),
(44, '2023-12-26 05:31:34', '::1'),
(45, '2023-12-26 05:31:59', '::1'),
(46, '2023-12-26 05:35:48', '::1'),
(47, '2023-12-26 05:36:03', '::1'),
(48, '2023-12-26 05:36:27', '::1'),
(49, '2023-12-26 05:37:52', '::1'),
(50, '2023-12-26 05:38:32', '::1'),
(51, '2023-12-26 05:41:48', '::1'),
(52, '2023-12-26 05:42:17', '::1'),
(53, '2023-12-26 05:42:48', '::1'),
(54, '2023-12-26 05:45:27', '::1'),
(55, '2023-12-26 05:45:36', '::1'),
(56, '2023-12-26 05:45:52', '::1'),
(57, '2023-12-26 05:48:46', '::1'),
(58, '2023-12-26 05:49:13', '::1'),
(59, '2023-12-26 05:55:15', '::1'),
(60, '2023-12-26 05:55:46', '::1'),
(61, '2023-12-26 05:57:06', '::1'),
(62, '2023-12-26 05:57:26', '::1'),
(63, '2023-12-26 05:58:23', '::1'),
(64, '2023-12-26 05:59:39', '::1'),
(65, '2023-12-26 06:00:04', '::1'),
(66, '2023-12-26 23:53:20', '::1'),
(67, '2023-12-26 23:53:48', '::1'),
(68, '2023-12-26 23:55:04', '::1'),
(69, '2023-12-27 00:21:40', '::1'),
(70, '2023-12-27 00:31:53', '::1'),
(71, '2023-12-27 00:32:04', '::1'),
(72, '2023-12-27 00:32:08', '::1'),
(73, '2023-12-27 00:32:14', '::1'),
(74, '2023-12-27 00:32:20', '::1'),
(75, '2023-12-27 00:32:36', '::1'),
(76, '2023-12-27 00:32:49', '::1'),
(77, '2023-12-27 00:32:51', '::1'),
(78, '2023-12-27 00:32:55', '::1'),
(79, '2023-12-27 00:33:12', '::1'),
(80, '2023-12-27 00:33:16', '::1'),
(81, '2023-12-27 00:33:18', '::1'),
(82, '2023-12-27 00:33:20', '::1'),
(83, '2023-12-27 00:33:23', '::1'),
(84, '2023-12-27 00:33:28', '::1'),
(85, '2023-12-27 00:33:29', '::1'),
(86, '2023-12-27 00:33:32', '::1'),
(87, '2023-12-27 00:33:36', '::1'),
(88, '2023-12-27 00:33:39', '::1'),
(89, '2023-12-27 00:33:43', '::1'),
(90, '2023-12-27 00:33:54', '::1'),
(91, '2023-12-27 00:33:59', '::1'),
(92, '2023-12-27 00:34:51', '::1'),
(93, '2023-12-27 00:35:19', '::1'),
(94, '2023-12-27 00:36:29', '::1'),
(95, '2023-12-27 00:36:30', '::1'),
(96, '2023-12-27 00:36:38', '::1'),
(97, '2023-12-27 00:36:56', '::1'),
(98, '2023-12-27 00:36:58', '::1'),
(99, '2023-12-27 00:37:11', '::1'),
(100, '2023-12-27 00:37:37', '::1'),
(101, '2023-12-27 00:37:39', '::1'),
(102, '2023-12-27 00:37:58', '::1'),
(103, '2023-12-27 00:38:30', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `user_avatar` varchar(255) DEFAULT NULL,
  `manager_id` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `status`, `fullname`, `email`, `phone`, `address`, `user_name`, `pass`, `user_avatar`, `manager_id`, `created_at`, `deleted`) VALUES
('1020', 'Active', 'ta kieu ngan', 'tkn69426@gmail.com', '+0(393)416-40-5', 'tp hcm', 'kng', '123', 'img5.jpg', 'ADMIN01', '2023-11-01', 1),
('USER001', 'Disabled', 'Tần Dĩ Hằng', 'tdhang@gmail.com', '+0(868)512-36-8', '234 TP HCM', 'hangtd', '123a@', 'User-ava/img1.jpg', 'ADMIN01', '2021-01-01', 1),
('USER002', 'Disabled', 'Chử Thiệu Lăng', 'ctlang@gmail.com', '0966.222.757', '89/3/7 TP HCM', 'langct', '123a@', 'User-ava/img2.jpg', 'ADMIN01', '2021-01-01', 1),
('USER003', 'Active', 'Diệp Lan', 'dlan@gmail.com', '0973.155.066', '17 Q9 TPHCM', 'land', '123a@', 'User-ava/img3.jpg', 'ADMIN01', '2021-01-01', 1),
('USER004', 'Disabled', 'Hoắc Vân Xuyên', 'hvxuyen@gmail.com', '0963.888.509', '23 Q9 TPHCM', 'xuyenhv', '123a@', 'User-ava/img4.jpg', 'ADMIN01', '2021-01-01', 1),
('USER005', 'Disabled', 'Hàn Trình', 'htrinh@gmail.com', '034.5555.332', '24 Q7 TP HCM', 'trinhh', '123a@', 'User-ava/img5.jpg', 'ADMIN01', '2021-01-01', 1),
('USER006', 'Active', 'Thẩm Thời Thích', 'ttthich@gmail.com', '0969.774.998', '777 Ha Noi', 'thichtt', '123a@', 'User-ava/img6.jpg', 'ADMIN01', '2021-01-01', 1),
('USER007', 'Active', 'Bách Xương Ý', 'bxy@gamil.com', '0971.766.168', '88 Can Tho', 'ybx', '123a@', 'User-ava/img7.jpg', 'ADMIN01', '2021-01-01', 1),
('USER008', 'Active', 'Quý Tĩnh Duyên', 'qtduyen@gmail.com', '0986.08.7557', '105 Da Lat', 'duyenqt', '123a@', 'User-ava/img8.jpg', 'ADMIN01', '2021-01-01', 1),
('USER009', 'Active', 'Yến Tuy', 'ytuy@gmail.com', '0976.265.079', '9 Cong Quynh Q1', 'tuyy', '123a@', 'User-ava/img9.jpg', 'ADMIN02', '2021-01-01', 1),
('USER010', 'Active', 'Trần Bội Mẫn', 'tbman@gmail.com', '0978.996.385', '14 An Duong Vuong Q5', 'mantb', '123a@', 'User-ava/img10.jpg', 'ADMIN02', '2021-01-01', 1),
('USER011', 'Disabled', 'Ninh Quân Diên', '', '0987.985.089', '35 Hong Bang Q5', 'diennq', '123a@', 'User-ava/img11.jpg', 'ADMIN02', '2021-01-01', 1),
('USER012', 'Active', 'Văn Nhân Ách', 'vnach@gmail.com', '0975.30.30.31', '221 Su Van Hanh Q10', 'achvn', '123a@', 'User-ava/img12.jpg', 'ADMIN02', '2021-01-01', 1),
('USER013', 'Active', 'Phó Tinh Hà', 'ptha@gmail.com', '0971.888.153', '302 CMT8', 'hath', '123a@', 'User-ava/img13.jpg', 'ADMIN02', '2021-01-01', 1),
('USER014', 'Disabled', 'Phương Thiệu Nhất', 'ptnhat@gmail.com', '0985.203.403', '479 Lô 2 Q4', 'nhatpt', '123a@', 'User-ava/img14.jpg', 'ADMIN02', '2021-01-01', 1),
('USER015', 'Disabled', 'Thích Tầm Chương', 'ttchuong@gmail.com', '0976.111.557', '1190 Ba Dinh Ha Noi', 'chuongtt', '123a@', 'User-ava/img15.jpg', 'ADMIN02', '2021-01-01', 0),
('USER016', 'Disabled', 'Lý Huỳnh Lam', 'lhlam@gmail.com', '0961.174.178', '1177 Ha Noi ', 'lamlh', '123a@', 'User-ava/img16.jpg', 'ADMIN01', '2021-01-01', 0),
('USER017', 'Disabled', 'La Vực', 'lvuc@gmail.com', '0978.777.311', '3131 Q8', 'vucl', '123a@', 'User-ava/img17.jpg', 'ADMIN02', '2021-01-01', 0),
('USER018', 'Active', 'Phó Vĩnh Kiệt', 'pvkiet@gmail.com', '0967.356.889', '618 Q10', 'kiet', '123a@', 'User-ava/img18.jpg', 'ADMIN#002', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_order_product` (`product_id`);

--
-- Indexes for table `order_hd`
--
ALTER TABLE `order_hd`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`product_id`,`product_size`,`product_color`);

--
-- Indexes for table `truycap`
--
ALTER TABLE `truycap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_hd`
--
ALTER TABLE `order_hd`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `truycap`
--
ALTER TABLE `truycap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
