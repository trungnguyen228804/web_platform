-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 09:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_theme1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_parent_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cấp của category',
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_parent_id`, `category_name`, `category_slug`) VALUES
(1, '0', 'Nurse', ''),
(3, '0', 'CNA', ''),
(4, '0', 'Other Medical', ''),
(17, '4', 'Healthcare Worker', ''),
(18, '4', 'Registered Nurse', ''),
(19, '4', 'Nurse Practitioner', ''),
(20, '4', 'LPN', ''),
(21, '4', 'Medical Assistant', ''),
(22, '4', 'CMA', ''),
(23, '4', 'ER Nurse', ''),
(24, '4', 'Respiratory', '');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`) VALUES
(1, 'Navy'),
(2, 'Black'),
(3, 'Royal Blue'),
(4, 'Red'),
(5, 'Orange'),
(6, 'Heliconia');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_quanlity` int(11) NOT NULL,
  `total_money` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `required_date` timestamp NULL DEFAULT NULL,
  `shipped_date` timestamp NULL DEFAULT NULL,
  `order_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_var_id` int(11) NOT NULL,
  `quanlity` tinyint(4) NOT NULL,
  `money` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL COMMENT 'danh mục sản phẩm',
  `product_type_id` int(11) NOT NULL COMMENT 'loại sản phẩm',
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên sản phẩm',
  `product_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'mô tả sản phẩm',
  `product_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'trạng thái sản phẩm(1 là hiện, 2 ẩn)',
  `product_star_range` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'số lượng ngôi sao tối đa 5',
  `product_price_cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'giá gốc',
  `product_price_sale` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'giá khuyến mãi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_type_id`, `product_name`, `product_desc`, `product_status`, `product_star_range`, `product_price_cost`, `product_price_sale`) VALUES
(1, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(2, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(3, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(4, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(5, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(6, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(7, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59'),
(8, 1, 1, 'BACK & BODY HURTS #CNALIFE BB-213', '<div class=\"tablet-tab-item active\">\r\n                            <p><br><strong>Unisex T-shirt</strong></p>\r\n                            <ul>\r\n                                <li>100% pre-shrunk cotton</li>\r\n                                <li>Seamless c', '1', '4', '49.99', '25.59');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_image_avatar` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình ảnh đại diện cho sản phẩm(1: chọn)',
  `product_type_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_image_id`, `product_id`, `product_image_url`, `product_image_avatar`, `product_type_id`, `style_id`, `color_id`) VALUES
(1, 1, '0x360@161726641339d1513930764631.png', '1', 1, 1, 1),
(2, 1, '0x360@161726641339d1513930764631.png', '2', 1, 2, 2),
(3, 1, '0x360@161726641339d1513930764631.png', '2', 1, 3, 2),
(4, 1, '0x360@161726641339d1513930764631.png', '2', 1, 4, 2),
(5, 1, '0x360@161726641339d1513930764631.png', '2', 1, 2, 3),
(6, 1, '0x360@161726641339d1513930764631.png', '2', 1, 3, 3),
(7, 1, '0x360@161726641339d1513930764631.png', '2', 1, 4, 3),
(8, 1, '0x360@161726641339d1513930764631.png', '2', 1, 2, 4),
(9, 1, '0x360@161726641339d1513930764631.png', '2', 1, 3, 4),
(10, 1, '0x360@161726641339d1513930764631.png', '2', 1, 4, 4),
(11, 1, '0x360@161726641339d1513930764631.png', '2', 1, 1, 1),
(12, 1, '0x360@161726641339d1513930764631.png', '2', 1, 1, 1),
(13, 1, '0x360@161726641339d1513930764631.png', '2', 1, 1, 1),
(14, 1, '0x360@161726641339d1513930764631.png', '2', 1, 1, 1),
(15, 1, '0x360@161726641339d1513930764631.png', '2', 1, 1, 1),
(16, 1, '0x360@161726641339d1513930764631.png', '2', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `product_type_id` int(11) NOT NULL,
  `product_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`product_type_id`, `product_type_name`) VALUES
(1, 'T-SHIRT'),
(2, 'TUMBLER'),
(3, 'CANVAS');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_name`) VALUES
(1, 'null'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, '2XL'),
(7, '3XL'),
(8, 'XS');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_name`, `slider_image`, `slider_active`) VALUES
(1, 'Summer sale', 'woman-shopping-summer-sale-banner_23-2148515792.jpg', 1),
(2, 'New arrivals just for you', 'horizontal-banner-online-fashion-sale_23-2148585404.jpg', 1),
(3, 'don\'t miss the deal', 'banner-template-with-online-shopping-design_23-2148550895.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `style_id` int(11) NOT NULL,
  `style_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`style_id`, `style_name`) VALUES
(1, 'null'),
(2, 'Unisex T-Shirt'),
(3, 'V-Neck T-Shirt'),
(4, 'Ladies T-Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_orders_users` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `fk_order_details_orders` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_type_id` (`product_type_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `style_id` (`style_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`style_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `style_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_order_details_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`product_type_id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `product_images_ibfk_2` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`product_type_id`),
  ADD CONSTRAINT `product_images_ibfk_3` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`),
  ADD CONSTRAINT `product_images_ibfk_4` FOREIGN KEY (`style_id`) REFERENCES `styles` (`style_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
