-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 08:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la_carte`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE `admin_information` (
  `ADMIN_ID` int(10) NOT NULL,
  `ADMIN_NAME` varchar(250) NOT NULL,
  `ADMIN_PHONE` tinyint(10) NOT NULL,
  `ADMIN_USERNAME` varchar(50) NOT NULL,
  `ADMIN_PASSWORD` int(50) NOT NULL,
  `ADMIN_EMAIL` char(250) NOT NULL,
  `ADMIN_ADDRESS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `admin_information` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_PHONE`, `ADMIN_USERNAME`, `ADMIN_PASSWORD`, `ADMIN_EMAIL`, `ADMIN_ADDRESS`) VALUES
(1, 'Admin', 55, 'la', 123456, 'admin@s.om', 'tabuk');

-- --------------------------------------------------------

--
-- Table structure for table `cafeteria_information`
--

CREATE TABLE `cafeteria_information` (
  `CAFETERIA_ID` int(10) NOT NULL,
  `ADMIN_ID` int(10) NOT NULL,
  `CAFTERIA_PHONE` int(10) NOT NULL,
  `CAFTERIA_USERNAME` varchar(50) NOT NULL,
  `CAFTERIA_PASSWORD` tinyint(50) NOT NULL,
  `CAFTERIA_EMAIL` char(250) NOT NULL,
  `CAFTERIA_ADDRESS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cafeteria_information`
--

INSERT INTO `cafeteria_information` (`CAFETERIA_ID`, `ADMIN_ID`, `CAFTERIA_PHONE`, `CAFTERIA_USERNAME`, `CAFTERIA_PASSWORD`, `CAFTERIA_EMAIL`, `CAFTERIA_ADDRESS`) VALUES
(1, 1, 54444, 'main', 123, 'main@s.com', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `delivry`
--

CREATE TABLE `delivry` (
  `ORDER_ID` int(10) NOT NULL,
  `EMPLOYEE_ID` int(10) NOT NULL,
  `STAFF_NAME` varchar(250) NOT NULL,
  `STAFF_PHONE` varchar(50) NOT NULL,
  `ADDRESS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivry_information`
--

CREATE TABLE `delivry_information` (
  `DELIVRY_ID` int(10) NOT NULL,
  `DELIVRY_NAME` varchar(50) NOT NULL,
  `EMPLOYEE_PHONE` int(10) NOT NULL,
  `DELIVRY_USERNAME` varchar(250) NOT NULL,
  `DELIVRY_PASSWORD` varchar(250) NOT NULL,
  `DELIVRY_EMAIL` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivry_information`
--

INSERT INTO `delivry_information` (`DELIVRY_ID`, `DELIVRY_NAME`, `EMPLOYEE_PHONE`, `DELIVRY_USERNAME`, `DELIVRY_PASSWORD`, `DELIVRY_EMAIL`) VALUES
(1, 'ali', 54, 'delivry', 'delivry', 'ali@f.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `EMPLOYEE_ID` int(10) NOT NULL,
  `EMPLOYEE_NAME` varchar(50) NOT NULL,
  `EMPLOYEE_PHONE` int(10) NOT NULL,
  `EMPLOYEE_USERNAME` varchar(250) NOT NULL,
  `EMPLOYEE_PASSWORD` varchar(250) NOT NULL,
  `EMPLOYEE_EMAIL` varchar(250) NOT NULL,
  `EMPLOYEE_ADDRESS` varchar(250) NOT NULL,
  `EMPLOYEE_OFFICE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`EMPLOYEE_ID`, `EMPLOYEE_NAME`, `EMPLOYEE_PHONE`, `EMPLOYEE_USERNAME`, `EMPLOYEE_PASSWORD`, `EMPLOYEE_EMAIL`, `EMPLOYEE_ADDRESS`, `EMPLOYEE_OFFICE`) VALUES
(1, 'laila', 5555, 'laila', 'laila', 'laila@laila', 'المبنى الرئيسي', 'Main 35400');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ITEM_ID` int(10) NOT NULL,
  `cafeteria_id` int(10) NOT NULL,
  `ITEM_NAME` varchar(50) NOT NULL,
  `ITEM_PRICE` decimal(50,0) NOT NULL,
  `ITEM_DWSCREPTION` text NOT NULL,
  `ITEM_QUANTITY` int(250) NOT NULL,
  `ITEM_IMG` varchar(30) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ITEM_ID`, `cafeteria_id`, `ITEM_NAME`, `ITEM_PRICE`, `ITEM_DWSCREPTION`, `ITEM_QUANTITY`, `ITEM_IMG`, `category_id`) VALUES
(1, 1, 'قهوة', '10', 'قهوة', 1, '8741616858078.png', 1),
(2, 1, 'شــــاي', '5', 'شاي ربيع', 100, '9481616867981.jpg', 1),
(4, 1, 'كرواسون', '3', 'كرواسون كرواسون', 500, '3561616869033.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `items_category`
--

CREATE TABLE `items_category` (
  `category_id` int(10) NOT NULL,
  `category_title` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items_category`
--

INSERT INTO `items_category` (`category_id`, `category_title`) VALUES
(1, 'المشروبات الساخنة'),
(2, 'الفطائر');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDER_ID` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_STATE` varchar(80) NOT NULL,
  `DELIVRY_ID` int(11) DEFAULT NULL,
  `PAY_METHOD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDER_ID`, `user_id`, `user_type`, `ORDER_DATE`, `ORDER_STATE`, `DELIVRY_ID`, `PAY_METHOD`) VALUES
(1, 1, 'student', '2021-03-27', 'تم تسليم الطلب', NULL, 'كـاش عند الإستلام'),
(4, 1, 'employee', '2021-03-27', 'تم تسليم الطلب', 1, 'كـاش عند الإستلام'),
(5, 1, 'student', '2021-03-27', 'تم تسليم الطلب', NULL, 'كـاش عند الإستلام'),
(6, 1, 'employee', '2021-03-27', 'تم تسليم الطلب', 1, 'كـاش عند الإستلام');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `ORDER_ITEM_ID` int(10) NOT NULL,
  `ORDER_ID` int(10) NOT NULL,
  `ITEM_ID` int(10) NOT NULL,
  `QUANTITY` int(10) NOT NULL,
  `TOTAL_PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`ORDER_ITEM_ID`, `ORDER_ID`, `ITEM_ID`, `QUANTITY`, `TOTAL_PRICE`) VALUES
(1, 1, 1, 1, 10),
(4, 4, 1, 1, 10),
(5, 5, 2, 2, 10),
(6, 5, 4, 3, 9),
(7, 6, 1, 1, 10),
(8, 6, 2, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ORDER_ID` int(10) NOT NULL,
  `PAYMENT_ID` int(10) NOT NULL,
  `PAYMENT_TYPE` text NOT NULL,
  `PAYMENT_TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `STUDENT_ID` int(10) NOT NULL,
  `STUDENT_NAME` varchar(250) NOT NULL,
  `STUDENT_PHONE` int(10) NOT NULL,
  `STUDENT_USERNAME` varchar(50) NOT NULL,
  `STUDENT_PASSWORD` varchar(50) NOT NULL,
  `STUDENT_EMAIL` varchar(250) NOT NULL,
  `STUDENT_ADDRESS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`STUDENT_ID`, `STUDENT_NAME`, `STUDENT_PHONE`, `STUDENT_USERNAME`, `STUDENT_PASSWORD`, `STUDENT_EMAIL`, `STUDENT_ADDRESS`) VALUES
(1, 'std', 5666, 'std', 'std', 's@s.com', 'tabuk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_information`
--
ALTER TABLE `admin_information`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `cafeteria_information`
--
ALTER TABLE `cafeteria_information`
  ADD PRIMARY KEY (`CAFETERIA_ID`);

--
-- Indexes for table `delivry`
--
ALTER TABLE `delivry`
  ADD PRIMARY KEY (`ORDER_ID`,`EMPLOYEE_ID`);

--
-- Indexes for table `delivry_information`
--
ALTER TABLE `delivry_information`
  ADD PRIMARY KEY (`DELIVRY_ID`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ITEM_ID`);

--
-- Indexes for table `items_category`
--
ALTER TABLE `items_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`ORDER_ITEM_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ORDER_ID`,`PAYMENT_ID`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivry_information`
--
ALTER TABLE `delivry_information`
  MODIFY `DELIVRY_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `EMPLOYEE_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ITEM_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items_category`
--
ALTER TABLE `items_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ORDER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `ORDER_ITEM_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
