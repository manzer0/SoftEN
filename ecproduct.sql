-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 09:58 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `codename` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสเรียก',
  `topic` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หัวข้อเรื่อง',
  `detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `created` datetime NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `codename`, `topic`, `detail`, `created`) VALUES
(1, 'howtopay', 'วิธีการสั่งซื้อ', '<div>1. เลือกสินค้าจนเจอสินค้าที่ถูกใจหลังจากนั้นหยิบใส่ตะกร้าพร้อมใส่จำนวนสินค้า</div>\r\n\r\n<div>2. กลับไปเลือกสินค้าใหม่หรือกดสั่งซื้อสินค้า</div>\r\n\r\n<div>3. ยืนยันการสั่งซื้อพร้อมกรอกรายละเอียดการส่งสินค้า</div>', '2015-01-07 16:50:50'),
(2, 'aboutus', 'เกี่ยวกับเรา', '<div>\r\n<div>TheKeeper</div>\r\n</div>', '2016-03-12 21:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `order_date` datetime NOT NULL COMMENT 'วันที่สั่งซื้อ',
  `total` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'ราคารวม',
  `user_id` int(11) NOT NULL COMMENT 'ผู้สั่งซื้อ',
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้สั่งซื้อ',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อีเมล์',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ที่อยู่ผู้รับสินค้า',
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อำเภอ',
  `province` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'จังหวัด',
  `postcode` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสไปรษณีย์',
  `order_status` enum('pending','payments','shipping','delivery') CHARACTER SET utf8 NOT NULL DEFAULT 'pending' COMMENT 'สถานะการสั่งซื้อสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `total`, `user_id`, `fullname`, `email`, `phone`, `address`, `district`, `province`, `postcode`, `order_status`) VALUES
(1, '2014-12-06 18:00:05', '143400.00', 2, 'ธวัชศักดิ์ แตงเอี่ยม', 'bie008o@hotmail.com', '0998726726', '6/5, moo 9', 'บึงคำพร้อย', 'ปทุมธานี', '12150', 'payments'),
(3, '2014-12-08 15:53:00', '56880.00', 2, 'ธวัชศักดิ์ แตงเอี่ยม', 'inonzent@hotmail.com', '0998726726', '6/5, moo 9', 'บึงคำพร้อย', 'ปทุมธานี', '12150', 'payments'),
(8, '2014-12-21 09:39:55', '24500.00', 2, 'ธวัชศักดิ์ แตงเอี่ยม', 'tangeaim@itoffside.com', '0811448167', '89/30 หมู่ 17 ต.บึงคำพร้อย', 'ลำลูกกา', 'ปทุมธานี', '12150', 'payments');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL COMMENT 'รหัสสั่งซื้อ',
  `product_id` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `quantity` int(11) NOT NULL COMMENT 'จำนวนสั่งซื้อ',
  `price` decimal(8,2) NOT NULL COMMENT 'ราคา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL COMMENT 'รหัสหน้าเพจ',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `short_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_item` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `detail`, `created`, `short_detail`, `sort_item`) VALUES
(2, 'Promotions', '<div>โปรโมชั่นจากร้าน ทุกๆเดือน</div>\r\n', '2014-09-08 22:54:59', 'ข่าวสารโปรโมชั่น', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL COMMENT 'รหัสชำระเงิน',
  `pay_money` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'จำนวนโอน',
  `pay_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'วันเวลาโอน',
  `detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0.00' COMMENT 'รายละเอียด',
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT 'รหัสใบสั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `pay_money`, `pay_date`, `detail`, `order_id`) VALUES
(1, '56880.01', '2014-12-12 23:05:00', '<div>ทดสอบตัวอักษร</div>\r\n\r\n<div>ทดสอบ</div>', 3),
(3, '143000.00', '2014-12-12 12:25:00', '', 1),
(4, '24500.00', '2014-12-21 14:20:00', '<div>ทดสอบระบบ<br />\r\n&nbsp;</div>', 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อสินค้า',
  `price` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT 'ราคาสินค้า',
  `brandname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ยี่ห้อสินค้า',
  `detail` text COLLATE utf8_unicode_ci COMMENT 'รายละเอียดสินค้า',
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'ecimage.jpg' COMMENT 'รูปภาพหลักสินค้า',
  `created` datetime DEFAULT NULL COMMENT 'วันที่สร้าง',
  `product_categorie_id` int(11) NOT NULL COMMENT 'รหัสประเภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `brandname`, `detail`, `image`, `created`, `product_categorie_id`) VALUES
(5, 'พระขุนแผนครูบาจันต๊ะรุ่น', '24500.00', 'สมเด็จ', '<div>\r\n<table cellpadding="5" cellspacing="1">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>OS</strong></td>\r\n			<td>iOS 7, upgradable to iOS 7.1.2, planned upgrade to iOS 8</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Processor</strong></td>\r\n			<td>Dual-core 1.3 GHz Cyclone (ARM v8-based)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Display</strong></td>\r\n			<td>4&quot; LED-backlit IPS LCD, capacitive touchscreen, 16M colors</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Internal , ram</strong></td>\r\n			<td>16 GB. , 1 GB. RAM DDR3</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Network</strong></td>\r\n			<td>2G Network : GSM 850 / 900 / 1800 / 1900<br />\r\n			3G Network : HSDPA 850 / 900 / 1700 / 1900 / 2100<br />\r\n			4G Network : LTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Camera</strong></td>\r\n			<td>Back Camera : 8 MP, 3264 x 2448 pixels, autofocus, dual-LED (dual tone) flash<br />\r\n			Front Camera : .2 MP, 720p@30fps</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Chipset</strong></td>\r\n			<td>Apple A7</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>GPU</strong></td>\r\n			<td>PowerVR G6430 (quad-core graphics)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SIM</strong></td>\r\n			<td>Nano-SIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Card slot</strong></td>\r\n			<td>No</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Battery</strong></td>\r\n			<td>Non-removable Li-Po 1560 mAh battery (5.92 Wh)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Dimension</strong></td>\r\n			<td>123.8 x 58.6 x 7.6 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Warranty</strong></td>\r\n			<td>1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', '201603121740311.png', '2014-11-17 17:27:31', 30),
(13, 'พระสมเด็จวัดระฆังฯ100ปี', '20000.00', 'สมเด็จ', '', '201603122152167.png', '2016-03-12 21:52:16', 30),
(14, 'เหรียญพ่อขุนรามคำแหงมหาราช', '30000.00', 'เหรียญ', '', '201603122152421.png', '2016-03-12 21:52:42', 30),
(15, 'พระสมเด็จสำนักปู่สวรรค์', '80000.00', 'สมเด็จ', '', '201603122153152.png', '2016-03-12 21:53:15', 30),
(16, 'เหรียญเจ้าแม่จามเทวีปี', '1000.00', 'เหรียญ', '', '201603122153426.png', '2016-03-12 21:53:42', 30);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `codename` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'รหัสประเภทสินค้า',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ประเภทสินค้า',
  `created` datetime NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `codename`, `name`, `created`) VALUES
(30, 'P001', 'พระพิมพ์ฐานคู่', '2014-11-17 17:17:41'),
(31, 'P002', 'พระพิมพ์ทรงเจดีย์', '2014-11-17 17:18:06'),
(32, 'P003', 'พระพิมพ์ใหญ่', '2014-11-17 17:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อจริง',
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อเข้าใช้',
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อีเมล์',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ที่อยู่',
  `district` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อำเภอ',
  `province` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'จังหวัด',
  `postcode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `created` datetime NOT NULL COMMENT 'วันที่สร้าง',
  `user_type` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'ประเภทสมาชิก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `address`, `district`, `province`, `postcode`, `created`, `user_type`) VALUES
(1, 'ธีรพล', 'แก้วมงคล', 'admin', '010b4b74a8c88043189ffbf1673b51f2', '', '', '', '', '', '', '2014-09-08 22:02:36', 'admin'),
(2, 'ทั่วไป', '', 'guest', 'guest', 'itoffside@itoffside.com', '0811448167', 'none', 'none', 'none', '12150', '2014-12-05 23:08:20', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_payments_orders` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categorie_id` (`product_categorie_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหน้าเพจ', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชำระเงิน', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `FK_payments_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_categorie_id`) REFERENCES `product_categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
