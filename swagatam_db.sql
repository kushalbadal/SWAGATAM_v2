-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 09:44 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swagatam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_district` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_district`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(10, 'KushalBadal', 'kushal1@gmail.com', '2853890defa943b5e7dfc1a34d807489', 'IMG_20181017_150234_037.jpg', 'Sarlahi', ' just chill', '9843816844', 'Work on backend'),
(13, 'Simanta', 'simanta@gmail.com', '987262f578b182b5467da12279431757', '0-02-06-ef60b3f7371a631082312c6daca9802aa84057c79e36ef96fad5df82d7e31b3a_88b7c01a.jpg', 'Bhaktapur', ' just chill', '9843816844', 'work at backend'),
(14, 'Sirish', 'sirish@gmail.com', '8e1a985201ffec53dffb9b1be4d08e1e', 'IMG_1374.jpeg', 'Bhaktapur', 'just chill', '9843816844', 'work at backend'),
(15, 'Krishna', 'krishna@gmail.com', '243bd1ce0387f18005abfc43b001646a', 'IMG_1354.jpeg', 'Bhaktapur', 'just chill', '9843816844', 'work at backend');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_image`) VALUES
(6, 'Homestay', '3.jpg'),
(10, 'Adventures', '8.jpg'),
(11, 'Tourists_Guide', 'guide.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `check_in` int(15) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `c_id` int(10) NOT NULL,
  `check_out` int(15) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `ip_add`, `check_in`, `p_price`, `c_id`, `check_out`, `p_id`) VALUES
(1, '::1', 0, '70', 7, 0, 11),
(2, '::1', 0, '70', 1, 0, 11),
(3, '::1', 0, '80', 7, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_image`) VALUES
(6, 'Guide', 'IMG_20181017_150234_037.jpg'),
(7, 'HomeStay', 'IMG_20181017_150234_037.jpg'),
(8, 'Adventures', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_fname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `is_host` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_fname`, `customer_email`, `customer_pass`, `customer_address`, `customer_image`, `customer_ip`, `is_host`, `created_at`, `customer_lname`) VALUES
(1, 'kushal', 'kushal@gmail.com', '6ec44a1207a3d9506418c034679087b6', 'lokanthali', 'IMG_20181017_150234_037.jpg', '::1', 1, '0000-00-00 00:00:00', 'badal'),
(2, 'kushal', 'kushal1@gmail.com', '6ec44a1207a3d9506418c034679087b6', 'lokanthali', 'mypic1.png', '::1', 0, '0000-00-00 00:00:00', 'badal'),
(3, 'kushal', 'kushal12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lokanthali', 'mypic1.png', '::1', 0, '0000-00-00 00:00:00', 'badal'),
(4, 'kushal', 'kushal32@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lokanthali', 'mypic1.png', '::1', 0, '0000-00-00 00:00:00', 'badal'),
(6, 'kushal', 'kushal11@gmail.com', '6ec44a1207a3d9506418c034679087b6', 'lokanthali', 'IMG_20181017_150234_037.jpg', '::1', 0, '2020-07-02 21:29:39', 'badal'),
(7, 'kushal', 'kushal111@gmail.com', '6ec44a1207a3d9506418c034679087b6', 'lokanthali', 'IMG_20181017_150234_037.jpg', '::1', 0, '2020-07-02 23:20:42', 'badal');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `qty`, `size`, `order_date`, `order_status`) VALUES
(26, 11, 1300, 1, 'Small', '2019-12-12', 'pending'),
(27, 16, 300, 1, '', '2019-12-12', 'pending'),
(28, 11, 1300, 3, 'Small', '2019-12-13', 'pending'),
(29, 11, 1300, 3, 'Small', '2019-12-13', 'pending'),
(30, 41, 100, 1, '', '2019-12-14', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `cu_name` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `status_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_id` int(11) NOT NULL,
  `count_comment` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `cu_name`, `status`, `status_at`, `c_id`, `count_comment`) VALUES
(1, 'kushal badal', 'Testing forum', '2020-03-14 22:41:18', 1, 1),
(2, 'kushal badal', 'gaurav lol', '2020-03-15 08:56:07', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hosts`
--

CREATE TABLE `hosts` (
  `host_id` int(10) NOT NULL,
  `host_title` text NOT NULL,
  `host_top` text NOT NULL,
  `host_image` text NOT NULL,
  `host_contact` varchar(255) NOT NULL,
  `host_email` varchar(255) NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `verified` int(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosts`
--

INSERT INTO `hosts` (`host_id`, `host_title`, `host_top`, `host_image`, `host_contact`, `host_email`, `verification_code`, `verified`, `created_at`, `modified_at`) VALUES
(27, 'kushal', '', 'IMG_20181017_150234_037.jpg', '9843816844', 'kushal@gmail.com', '', 0, '0000-00-00 00:00:00', '2020-03-13 06:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_location`
--

CREATE TABLE `order_location` (
  `id` int(11) NOT NULL,
  `state` int(6) NOT NULL,
  `district` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_location`
--

INSERT INTO `order_location` (`id`, `state`, `district`, `area`, `contact`, `order_at`) VALUES
(12, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-12 20:40:14'),
(13, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-12 20:51:22'),
(14, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-12 20:58:18'),
(15, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-12 21:03:05'),
(16, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-12 21:09:15'),
(17, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-12 22:30:23'),
(18, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-13 10:44:00'),
(19, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-13 13:10:45'),
(20, 2, 'sarlahi', 'bhaktipur', '9843816844', '2019-12-14 14:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL,
  `order_at` date NOT NULL,
  `due_amount` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(10) NOT NULL,
  `post` text NOT NULL,
  `post_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `cu_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `cu_name`, `comment`, `comment_at`, `s_id`) VALUES
(9, 'kushal badal', 'good one', '2020-03-15 07:38:08', 11),
(10, 'kushal badal', 'nice one', '2020-03-15 07:38:35', 11),
(11, 'kushal badal', 'testing', '2020-04-17 09:43:14', 16),
(14, 'kushal badal', 'test', '2020-04-17 09:45:55', 16),
(15, 'kushal badal', 'testing', '2020-04-17 09:55:18', 16),
(17, 'kushal badal', 't2', '2020-04-17 09:56:12', 16),
(18, 'kushal badal', 't3', '2020-04-17 09:57:24', 16),
(19, 'kushal badal', 't4', '2020-04-17 09:59:25', 16),
(20, 'kushal badal', 't5', '2020-04-17 10:00:47', 0),
(21, 'kushal badal', 't5', '2020-04-17 10:02:10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(10) NOT NULL,
  `s_cat_id` int(10) NOT NULL,
  `host_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `s_title` text NOT NULL,
  `s_img1` text NOT NULL,
  `s_img2` text NOT NULL,
  `s_img3` text NOT NULL,
  `s_price` int(10) DEFAULT NULL,
  `address` text NOT NULL,
  `s_desc` text NOT NULL,
  `c_id` int(10) NOT NULL,
  `review` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_cat_id`, `host_name`, `date`, `s_title`, `s_img1`, `s_img2`, `s_img3`, `s_price`, `address`, `s_desc`, `c_id`, `review`) VALUES
(4, 7, 'kushal', '2020-04-17 04:17:10', 'HomeStay at bhaktapur', '138521728.jpg', 'dunrob-gues-house.jpg', 'Nepal-700wMountain-ridge-bandipur.jpg', 80, 'Bhaktapur', 'HomeStay at bhaktapur', 1, 1),
(5, 7, 'kushal', '2020-03-15 01:50:35', 'HomeStay at kathmandu', '209764023.jpg', '209764023.jpg', 'Nepal_Pokhara-peace-plaza700w.jpg', 110, 'Kathmandu', 'HomeStay at kathmandu', 1, 0),
(6, 7, 'kushal', '2020-03-15 01:50:43', 'HomeStay at kathmandu', 'Nepal-700wApsara-hotel.jpg', 'peace-eye-guest-house.jpg', 'subha-guest-house.jpg', 120, 'Kathmandu', 'HomeStay at Kathmandu', 1, 0),
(7, 7, 'kushal', '2020-03-15 01:50:48', 'HomeStay at Pokhara', 'Nepal-700w-Chandraban.jpg', 'single bed.jpg', 'triple bed.jpg', 70, 'Pokhara', 'HomeStay at Pokhara', 1, 0),
(8, 7, 'kushal', '2020-03-15 01:50:54', 'HomeStay at Pokhara', 'Nepal-700wtraditional-homes-swotha-2.jpg', 'subha-guest-house.jpg', 'triple bed.jpg', 60, 'Pokhara', 'HomeStay at Pokhara', 1, 0),
(9, 7, 'kushal', '2020-03-15 01:50:59', 'HomeStay at chitwan', 'Nepal-Chitwan-sapana-village-lodge700w.jpg', 'peace-eye-guest-house.jpg', '799bad5a3b514f096e69bbc4a7896cd9.jpg', 70, 'Chitwan', 'HomeStay at chitwan', 1, 0),
(10, 7, 'kushal', '2020-03-15 01:51:06', 'HomeStay at chitwan', 'nepal-700w-mums-garden-resort.jpg', '82075953_1414676632043470_4244513018093764608_n-597.jpg', 'dunrob-gues-house.jpg', 80, 'Chitwan', 'HomeStay at chitwan', 1, 0),
(11, 7, 'kushal', '2020-03-15 01:53:35', 'HomeStay at mustang', 'Nepal-700wApsara-hotel.jpg', '82075953_1414676632043470_4244513018093764608_n-597.jpg', 'Nepal-700wApsara-hotel.jpg', 70, 'Mustang', 'HomeStay at mustang', 1, 2),
(12, 8, 'kushal', '2020-03-15 01:51:18', 'Adventures package for phokhara visit', '1.jpg', '8.jpg', '1.jpg', 50, 'Pokhara', 'Adventures package for phokhara visit', 1, 0),
(13, 8, 'kushal', '2020-03-15 01:51:38', 'Adventures package for phokhara visit', '7.jpg', '8.jpg', '1.jpg', 40, 'Pokhara', 'Adventures package for phokhara visit', 1, 0),
(14, 8, 'kushal', '2020-03-15 01:51:46', 'Adventures package for phokhara visit', '1.jpg', '8.jpg', '6.jpg', 80, 'Pokhara', 'Adventures package for phokhara visit', 1, 0),
(15, 8, 'kushal', '2020-03-15 01:51:50', 'Adventures package for bhaktapur visit', '5.jpg', '2.jpg', 'Patan-Durbar-Square-730x365.jpg', 70, 'Bhaktapur', 'Adventures package for bhaktapur visit', 1, 0),
(16, 6, 'kushal', '2020-04-17 04:20:26', 'Tourist guide for bhaktapur visit', 'Patan-Durbar-Square-730x365.jpg', 'image_processing20180621-3-1ur8hbq.jpg', 'Patan-Durbar-Square-730x365.jpg', 30, 'Bhaktapur', 'Tourist guide for bhaktapur visit', 1, 6),
(17, 6, 'kushal', '2020-03-15 01:52:02', 'Tourist guide for chitwan visit', 'image_processing20180621-3-128uyjy.jpg', 'Nepal-Chitwan-sapana-village-lodge700w.jpg', 'image_processing20180621-3-128uyjy.jpg', 80, 'Chitwan', 'Tourist guide for chitwan visit', 1, 0),
(18, 6, 'kushal', '2020-03-15 01:52:06', 'Adventures package for mustang visit', 'menu_XWWaUemnCh4gY7xIYTav55Y7mIImAyoUnv7FXAQ4.jpg', 'menu_XWWaUemnCh4gY7xIYTav55Y7mIImAyoUnv7FXAQ4.jpg', 'image_processing20180619-3-fsmis6.jpg', 50, 'Mustang', 'Tourist guide for mustang visit', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(14, 'become-utpadak', 'become-utpdak.png', ''),
(15, 'become-utpadak2', 'become-utpdak.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `status_comment`
--

CREATE TABLE `status_comment` (
  `id` int(11) NOT NULL,
  `cu_name` varchar(255) NOT NULL,
  `comment_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` text NOT NULL,
  `status_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_comment`
--

INSERT INTO `status_comment` (`id`, `cu_name`, `comment_at`, `comment`, `status_id`) VALUES
(1, 'kushal badal', '2020-03-14 23:19:11', 'testing status comment', 1),
(2, 'kushal badal', '2020-03-15 08:56:31', 'haha', 2);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(2, 'demo', 'demo', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `is_fav` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `cu_id`, `is_fav`, `s_id`) VALUES
(28, 1, 1, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`host_id`);

--
-- Indexes for table `order_location`
--
ALTER TABLE `order_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `status_comment`
--
ALTER TABLE `status_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hosts`
--
ALTER TABLE `hosts`
  MODIFY `host_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_location`
--
ALTER TABLE `order_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `status_comment`
--
ALTER TABLE `status_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
