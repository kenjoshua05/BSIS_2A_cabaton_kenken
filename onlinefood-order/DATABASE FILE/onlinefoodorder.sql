-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 03:08 PM
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
-- Database: `onlinefoodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(12, 'Administrator', 'admin', '202cb962ac59075b964b07152d234b70'),
(13, 'Ken Cabaton', 'kentot', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(21, 'Quick Meals', 'Food_Category_253.jpg', 'Yes', 'Yes'),
(22, 'Hot Snacks', 'Food_Category_296.jpg', 'Yes', 'Yes'),
(23, 'Sweets', 'Food_Category_728.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(21, 'Brownies', 'brown', '50.00', 'Food-Name-8666.jpg', 23, 'No', 'Yes'),
(22, 'Rice Crispy Treats', 'crispy tapos lasang umoy', '30.00', 'Food-Name-8781.jpeg', 23, 'Yes', 'Yes'),
(23, 'Cookies', 'payomo panot', '150.00', 'Food-Name-9619.jpg', 23, 'No', 'Yes'),
(24, 'Donuts', 'donut na dakulu su lubot', '200.00', 'Food-Name-3529.jpg', 23, 'Yes', 'Yes'),
(26, 'Lemon pepper wings', 'oki', '100.00', 'Food-Name-8903.jpg', 22, 'No', 'Yes'),
(27, 'BBQ Chicken Wings', 'bbq', '100.00', 'Food-Name-6966.jpg', 22, 'Yes', 'Yes'),
(28, 'Burger', 'mapapaugol ka sa sarap', '55.00', 'Food-Name-7924.jpg', 21, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(11, 'Smoky BBQ Pizza', '9.00', 5, '45.00', '2022-10-29 04:01:09', 'Cancelled', 'Mary Grace', '09469410298', 'mary@gmail.com', 'United States of Albay'),
(12, 'Mozzarella-Sticks With Dipping Sauce', '4.00', 10, '40.00', '2022-11-05 01:35:58', 'Delivered', 'ken', '09469650290', 'ken@gmail.com', 'Polangui Albay'),
(13, 'Mozzarella-Sticks With Dipping Sauce', '4.00', 1, '4.00', '2022-11-05 01:45:04', 'Delivered', 'ken', '10091289817', 'kenhjs@gmail.com', 'thafsjhG'),
(14, 'Cheeseburger', '65.00', 1, '65.00', '2022-11-05 04:22:22', 'Delivered', 'ken', '09045834951', 'abcd@gmail.com', 'hqwehqgwhgq'),
(15, 'Ham Burger', '60.00', 1, '60.00', '2022-11-06 02:12:58', 'On Delivery', 'jjhsjhd\'', 'hghjs\'', 'ken@gmail.com', 'hdhagd\''),
(16, 'Cheeseburger', '65.00', 1, '65.00', '2022-11-06 02:35:55', 'On Delivery', 'ken', '10091289817', 'ken@gmail.com', 'Polangui Albay'),
(17, 'Chicken Wrap', '100.00', 3, '300.00', '2022-11-06 12:02:43', 'Delivered', 'kenken', '09469410298', 'ken@gmail.com', 'ehebj'),
(18, 'Grilled Cheese Sandwich', '30.00', 3, '90.00', '2022-11-07 11:06:50', 'Delivered', 'kc', '100912898747', 'kc@gmail.com', 'Polangui Albay');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_email` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
