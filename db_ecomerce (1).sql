-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 11:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`) VALUES
(1, 'Md Arriful Islam', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(4, 'Smart Phone', '                                                                                                   well and comfortable.                                                        ', 1),
(5, 'Man Fasion', '                                                                  Well.                                                        ', 1),
(6, 'Woman Fasion', '                                                                                                   well                                                        ', 1),
(7, 'Profile', '                                                                                                                                    Best                                                                                                                ', 0),
(8, 'dfgvh', 'dfghjk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `district_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `address`, `phone_number`, `district_name`) VALUES
(1, 'dfghj', 'sdfgh', 'dfgh@gmail.com', '', 'dfghjk', '34567', 'sdfghj'),
(2, '', '', 'dfgh@gmail.com', '', 'dfghjk', '34567', 'sdfghj'),
(3, 'Md', 'Arif', 'arif@gmail.com', '', 'satmatha', '12345678', 'Rangpur'),
(4, '', '', 'admin@gmail.com', '', '', '', ''),
(5, 'dfrtgyhuji', 'dfghj', 'dfghjk@gmail.com', '', 'erdtfyhujik ertfyhujikop', '3456789', 'wedrtfgyhuj'),
(6, 'Ahsan', 'habid', 'habid@gmail.com', '', 'Wireless,Mohakhali, Dhaka', '234567890', 'Dhaka'),
(7, 'Said', 'Sujon', 'said@gmail.com', '', 'dfghjk ertgyhuj', '2345678', 'Rangpur'),
(8, '', '', 'admin@gmail.com', '', '', '', ''),
(9, 'fghjk', 'ertyujki', 'admin@gmail.com', '', 'ertyui efrghj rtfgyu', '345678', 'wertyu'),
(10, '', '', 'admin@gmail.com', '', '', '', ''),
(11, 'Arif', 'Khan', 'dfghjk@gmail.com', '', 'sdfgh dfghjk', '23456678', 'sdfghjkl'),
(12, '', '', 'admin@gmail.com', '', '', '', ''),
(13, '', '', 'admin@gmail.com', '', '', '', ''),
(15, 'rtyui', 'eerftgyhuj', 'admin@gmail.com', '', 'wertdfyguhi tgyhujikol', '3456789', 'dfcgvbhjnkml'),
(16, 'Umme', 'Sumona', 'fghj@gmail.com', '', 'gthyjk sdfghjk', '2345678', 'sdfghjkl'),
(17, '', '', 'dfghj@gmail.com', '', '', '', ''),
(18, 'Md', 'Arif', 'arif@gmail.com', '', 'dfgvhbj fghjk', '2345678', 'dfcgvhbjkm'),
(19, '', '', 'dfgh@gmail.com', '', '', '', ''),
(20, 'ertfyuhi', 'rtyu', 'wedrfgh@gmail.com', '', 'sdfgvhj,ewrtyui', '2345678', 'zsdfvgbhnj'),
(21, 'sdfghj', 'asdfgh', 'asdfg@gmail.com', '', 'dcfvgbhnjmk, sdfvgbhnjk', '2345678', 'sdxfcvgbhnj'),
(22, 'erty', 'dfcvgbh', 'fgvbhn@gmail.com', '', 'dfgtyhuj', '345678', 'eretfgyhuj'),
(23, 'Ahsan ', 'habib', 'asd@gmail.com', '', 'wireless,mohakhali', '23456789', 'Mymonshingho'),
(24, 'sdfghj', 'sedrfghj', 'dfgh@gmail.com', '', 'dxfcgvhbjnkm', '2345678', 'erdftgyhj'),
(25, 'rftgyhj', 'ftgyhjk', 'edrftgyh@gmail.com', '', 'sdfghjuk', '2345678', 'dsfghj'),
(26, 'asdfg', 'asdfgh', 'asdfg@gmail.com', '', 'weregthy', '12345', 'efrgthyju'),
(27, 'asadfg', 'sdfgh', 'asdfg@gmail.com', '', 'ertghyjuk', '12345678', 'sadfbgh'),
(28, 'ertfyuhji', 'ertfgyhu', 'werty@gmail.com', '', 'swedtryhu', '2345678', 'edrftgyhuji'),
(29, 'dfghjk', 'fgthyjuj', 'tghjk@gmail.com', '', 'dfgyhujik ', '345678', 'dfgvbhjkl'),
(30, 'dfghjk', 'rtyhj', 'retyu@gmail.com', '', 'fdghjk', '345678', 'dfghjk'),
(31, 'rtyu', 'tgyh/uj', 'ert@gmail.com', '8277e0910d750195b448797616e091ad', 'dfvgbhjuk', '56789', 'dcfvgbhnjk'),
(32, 'fgy/hj', 'rfgyh/j', 'rfgh@gmail.com', 'b6b036a949b91b7b14212fd44e310e28', 'dfvgbhnj', '345678', 'fghbjnkm,'),
(33, 'ftgyh/uj', 'dfgyh ', 'keie@gmail.com', '854fda4da7e794d79b9770407c414d03', 'hbbjshj', '556787', 'jsdhdsjh'),
(34, 'fghj', 'rdftg ', 'yygy@gmail.com', 'e1d6fa15be2fbf3cbe920240ed704235', 'fggggggggggggggggggggg', '555567', 'hjhbhvg'),
(35, 'Arif', 'Islam', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'dhaka', '2345', 'dhaka'),
(36, 'Md', 'Arif', 'arif@gmail.com', '', 'dhaka', '3456789', 'sdcfvgbhnjm'),
(37, 'Shaik', 'Fakir', 'fakir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'sdfgt/hjuk', '345678', 'zedxfcvb'),
(38, 'Naim', 'Dogo', 'naim@gmail.com', '', 'satmatha', '23456789', 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(3) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(5, 'Polo', '                                                                good                                                        ', 1),
(7, 'Stics', '                                                                                                good                                                                                    ', 1),
(8, 'Polo', '                                                                good                                                        ', 1),
(9, 'Brand', 'Better', 1),
(10, 'Samsung', 'Well.', 1),
(11, 'Samphony', 'Well', 1),
(12, 'Walton', 'Well', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_date`) VALUES
(9, 23, 18, 20112.35, 'pending', '2017-07-24 19:13:58'),
(16, 37, 25, 8212994.00, 'pending', '2017-08-23 05:15:09'),
(20, 35, 29, 396.75, 'pending', '2017-09-15 13:30:29'),
(22, 35, 31, 39752.05, 'pending', '2017-10-08 21:42:31'),
(23, 35, 31, 39752.05, 'pending', '2017-10-08 21:43:39'),
(24, 35, 32, 396.75, 'pending', '2017-10-17 21:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, 1, 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(2, 2, 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(3, 3, 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(4, 4, 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(5, 4, 3, 'Z-sticks', 455.00, 3, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(6, 5, 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(7, 5, 3, 'Z-sticks', 455.00, 3, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(8, 5, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(9, 6, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(10, 7, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(11, 7, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(12, 8, 6, 'Phone One', 34567.00, 3, '../assets/admin_assets/product_img/images.jpg'),
(13, 8, 6, 'Phone One', 34567.00, 4, '../assets/admin_assets/product_img/images.jpg'),
(14, 8, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(15, 9, 3, 'Z-sticks', 455.00, 1, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(16, 9, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(17, 10, 3, 'Z-sticks', 455.00, 1, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(18, 10, 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(19, 10, 21, 'Butter-silk', 987.00, 3, '../assets/admin_assets/product_img/6.jpg'),
(20, 10, 1, 'Sansung04', 567456.00, 3, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(21, 11, 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(22, 11, 5, 'kjhkjh', 765.00, 3, '../assets/admin_assets/product_img/10457553_704414979594188_3752423198932451068_n.jpg'),
(23, 12, 11, 'Shirt', 345.00, 1, '../assets/admin_assets/product_img/one.jpg'),
(24, 13, 8, 'Phone Y', 34555.00, 4, '../assets/admin_assets/product_img/download (1).jpg'),
(25, 14, 8, 'Phone Y', 34555.00, 3, '../assets/admin_assets/product_img/download (1).jpg'),
(26, 14, 8, 'Phone Y', 34555.00, 3, '../assets/admin_assets/product_img/download (1).jpg'),
(27, 15, 8, 'Phone Y', 34555.00, 3, '../assets/admin_assets/product_img/download (1).jpg'),
(28, 15, 11, 'Shirt', 345.00, 3, '../assets/admin_assets/product_img/one.jpg'),
(29, 16, 8, 'Phone Y', 34555.00, 3, '../assets/admin_assets/product_img/download (1).jpg'),
(30, 16, 11, 'Shirt', 345.00, 3, '../assets/admin_assets/product_img/one.jpg'),
(31, 16, 7, 'Phone X', 2345678.00, 3, '../assets/admin_assets/product_img/md05803029-350x350.jpg'),
(32, 17, 6, 'Phone One', 34567.00, 3, '../assets/admin_assets/product_img/images.jpg'),
(33, 18, 10, 'Phone abc', 3456.00, 3, '../assets/admin_assets/product_img/download.jpg'),
(34, 19, 7, 'Phone X', 2345678.00, 1, '../assets/admin_assets/product_img/md05803029-350x350.jpg'),
(35, 20, 11, 'Shirt', 345.00, 1, '../assets/admin_assets/product_img/one.jpg'),
(36, 21, 6, 'Phone One', 34567.00, 1, '../assets/admin_assets/product_img/images.jpg'),
(37, 22, 6, 'Phone One', 34567.00, 1, '../assets/admin_assets/product_img/images.jpg'),
(38, 23, 6, 'Phone One', 34567.00, 1, '../assets/admin_assets/product_img/images.jpg'),
(39, 24, 11, 'Shirt', 345.00, 1, '../assets/admin_assets/product_img/one.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(16) NOT NULL,
  `payment_status` varchar(30) NOT NULL DEFAULT 'pending',
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `payment_date`) VALUES
(1, 1, 'cash_on_delivery', 'pending', '2017-07-01 03:14:26'),
(2, 2, 'cash_on_delivery', 'pending', '2017-07-01 03:37:56'),
(3, 3, 'cash_on_delivery', 'pending', '2017-07-02 20:22:30'),
(4, 4, 'cash_on_delivery', 'pending', '2017-07-02 20:46:48'),
(5, 5, 'cash_on_delivery', 'pending', '2017-07-02 21:33:35'),
(6, 6, 'cash_on_delivery', 'pending', '2017-07-03 01:46:41'),
(7, 7, 'cash_on_delivery', 'pending', '2017-07-10 21:24:13'),
(8, 8, 'cash_on_delivery', 'pending', '2017-07-21 18:16:04'),
(9, 9, 'cash_on_delivery', 'pending', '2017-07-24 19:13:58'),
(10, 10, 'cash_on_delivery', 'pending', '2017-07-24 19:21:42'),
(11, 11, 'cash_on_delivery', 'pending', '2017-08-03 16:49:04'),
(12, 12, 'cash_on_delivery', 'pending', '2017-08-06 15:01:19'),
(13, 13, 'cash_on_delivery', 'pending', '2017-08-14 16:32:54'),
(14, 14, 'cash_on_delivery', 'pending', '2017-08-23 03:16:03'),
(15, 15, 'cash_on_delivery', 'pending', '2017-08-23 04:43:08'),
(16, 16, 'cash_on_delivery', 'pending', '2017-08-23 05:15:09'),
(17, 17, 'cash_on_delivery', 'pending', '2017-08-23 21:18:55'),
(18, 18, 'cash_on_delivery', 'pending', '2017-08-30 03:17:18'),
(19, 19, 'cash_on_delivery', 'pending', '2017-09-14 07:10:21'),
(20, 20, 'cash_on_delivery', 'pending', '2017-09-15 13:30:30'),
(21, 21, 'cash_on_delivery', 'pending', '2017-09-15 16:16:06'),
(22, 22, 'cash_on_delivery', 'pending', '2017-10-08 21:42:31'),
(23, 23, 'cash_on_delivery', 'pending', '2017-10-08 21:43:39'),
(24, 24, 'cash_on_delivery', 'pending', '2017-10-17 21:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `stock_quantity` int(7) NOT NULL,
  `product_sku` varchar(100) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `stock_quantity`, `product_sku`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`) VALUES
(24, 'Phone x345', 4, 9, 23412.00, 45, '23', 'well', '<span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice and</span>', '../assets/admin_assets/product_img/7020699-iphone-hd-wallpapers.jpg', 1),
(25, 'HTC', 4, 9, 12345.00, 34, '5', 'well', '<span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice and</span>', '../assets/admin_assets/product_img/HTC-Desire-828-Dual-SIM-Global-White-Pearl.png', 1),
(26, 'I Phone', 4, 9, 66000.00, 45, '4', 'Smart', '<span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice. </span><br><span class="st"><span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice and</span></span>', '../assets/admin_assets/product_img/iPhone-Plus-Blanc-01.jpg', 1),
(27, 'Samsung Galaxy Tab', 4, 10, 55000.00, 56, '6', 'pretty cool.<br>', '<span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice and</span><span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice and</span><span class="st">A <em>smartphone</em> is a handheld personal computer \r\nwith a mobile operating system and an integrated mobile broadband \r\ncellular network connection for voice and</span>', '../assets/admin_assets/product_img/T-Mobile_Galaxy_Tab_10_h_front.jpg', 1),
(28, 'Polo shirt', 5, 8, 2345.00, 123, '12', 'well', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/CSN0027NAV_a.jpg', 1),
(29, 'T-shirt', 5, 9, 234.00, 34, '5', 'well and comfortable.<br>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/100-cotton-high-resolution-printing-One-piece-characters-pattern-printing-high-quality-t-shirts-anime-t.jpg_640x640.jpg', 1),
(30, 'Amazing sunglass', 5, 9, 456.00, 56, '7', 'well and comfortable.<br>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/ray_ban_aviator_sunglasses-t2.jpg', 1),
(31, 'Polo shirt', 5, 5, 678.00, 45, '4', '<span class="st">well and comfortable.</span><span class="st"></span>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/napapijri-shelter-summer-lightweight-jacket-palatine-blue-p15271-169115_zoom.jpg', 1),
(32, 'Three-pice', 6, 9, 3456.00, 45, '5', 'well and comfortable.<br>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/61yFrLrL9iL._UL1500_.jpg', 1),
(33, 'Shari ', 6, 9, 4567.00, 345, '23', 'well and comfortable.<br>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/1550.jpg', 1),
(34, 'Woman hills', 6, 9, 345.00, 123, '5', 'well and comfortable.<br>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/06coup-i.jpg', 1),
(35, 'Hills', 6, 0, 345.00, 56, '5', 'well and comfortable.<br>', '<span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span><span class="st">Styling inspiration and where-to-buy details for \r\neverything from dapper hats down to the exact right pair of boots. \r\nScarves, shoes and shades, too.</span>', '../assets/admin_assets/product_img/camellia-tango-shoes-black-and-red-leather.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `email_address`, `address`, `phone_number`, `district_name`) VALUES
(1, 'Md Arif', 'arif@gmail.com', 'satmatha', '12345678', 'Rangpur'),
(2, 'Md Arif', 'arif@gmail.com', 'satmatha', '12345678', 'Rangpur'),
(3, 'Md Arif', 'arif@gmail.com', 'satmatha', '12345678', 'Rangpur'),
(4, 'dfrtgyhuji dfghj', 'dfghjk@gmail.com', 'erdtfyhujik ertfyhujikop', '3456789', 'wedrtfgyhuj'),
(5, 'Ahsan habid', 'habid@gmail.com', 'Wireless,Mohakhali, Dhaka', '234567890', 'Dhaka'),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, 'Said Sujon', 'said@gmail.com', 'dfghjk ertgyhuj', '2345678', 'Rangpur'),
(9, ' ', 'admin@gmail.com', '', '', ''),
(10, ' ', 'admin@gmail.com', '', '', ''),
(11, ' ', 'admin@gmail.com', '', '', ''),
(12, ' ', 'admin@gmail.com', '', '', ''),
(13, ' ', 'admin@gmail.com', '', '', ''),
(14, 'Umme Sumona', 'fghj@gmail.com', 'gthyjk sdfghjk', '2345678', 'sdfghjkl'),
(15, ' ', 'arif@gmail.com', 'dfgvhbj fghjk', '2345678', 'dfcgvhbjkm'),
(16, ' ', 'arif@gmail.com', 'dfgvhbj fghjk', '2345678', 'dfcgvhbjkm'),
(17, 'erty dfcvgbh', 'fgvbhn@gmail.com', 'dfgtyhuj', '345678', 'eretfgyhuj'),
(18, 'Ahsan  habib', 'asd@gmail.com', 'wireless,mohakhali', '23456789', 'Mymonshingho'),
(19, 'rftgyhj ftgyhjk', 'edrftgyh@gmail.com', 'sdfghjuk', '2345678', 'dsfghj'),
(20, 'asadfg sdfgh', 'asdfg@gmail.com', 'ertghyjuk', '12345678', 'sadfbgh'),
(21, 'ertfyuhji ertfgyhu', 'werty@gmail.com', 'swedtryhu', '2345678', 'edrftgyhuji'),
(22, 'dfghjk fgthyjuj', 'tghjk@gmail.com', 'dfgyhujik ', '345678', 'dfgvbhjkl'),
(23, 'fghj rdftg ', 'yygy@gmail.com', 'fggggggggggggggggggggg', '555567', 'hjhbhvg'),
(24, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(25, 'Shaik Fakir', 'fakir@gmail.com', 'sdfgt/hjuk', '345678', 'zedxfcvb'),
(26, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(27, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(28, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(29, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(30, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(31, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka'),
(32, 'Arif Islam', 'admin@gmail.com', 'dhaka', '2345', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(5) NOT NULL,
  `slider_heading` varchar(100) NOT NULL,
  `slider_para` text NOT NULL,
  `slider_image_one` text NOT NULL,
  `slider_image_two` text NOT NULL,
  `slider_image_three` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_cart`
--

CREATE TABLE `tbl_temp_cart` (
  `temp_cart_id` int(11) NOT NULL,
  `session_id` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_temp_cart`
--

INSERT INTO `tbl_temp_cart` (`temp_cart_id`, `session_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(11, '82ajn81jah0g1k5f89s9n1nac3', 1, 'Sansung04', 567456.00, 4, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(13, 'hrjls73osqvrsslcvke0p3ab61', 3, 'Z-sticks', 455.00, 1, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(14, 'hrjls73osqvrsslcvke0p3ab61', 3, 'Z-sticks', 455.00, 5, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(15, 'nasjmh0c1sr86fpr5v94kglt30', 4, 'New T-shirt', 876.00, 3, '../assets/admin_assets/product_img/11067477_908599832538282_6941374057629028450_n.jpg'),
(16, 'nasjmh0c1sr86fpr5v94kglt30', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(17, 'nasjmh0c1sr86fpr5v94kglt30', 4, 'New T-shirt', 876.00, 3, '../assets/admin_assets/product_img/11067477_908599832538282_6941374057629028450_n.jpg'),
(18, 'e72fcn3u0jc9ppkpa45kdd51l1', 1, 'Sansung04', 567456.00, 3, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(19, 'e72fcn3u0jc9ppkpa45kdd51l1', 1, 'Sansung04', 567456.00, 3, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(20, 'e72fcn3u0jc9ppkpa45kdd51l1', 1, 'Sansung04', 567456.00, 3, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(21, 'b12j35evmhhmktdnaiqcrn1sr6', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(22, '0d1f09fr2d3icl5vgok910lmj4', 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(28, 'd6rs658aji2pdgvr9busd2v256', 5, 'kjhkjh', 765.00, 3, '../assets/admin_assets/product_img/10457553_704414979594188_3752423198932451068_n.jpg'),
(29, 'd6rs658aji2pdgvr9busd2v256', 3, 'Z-sticks', 455.00, 1, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(30, 'd6rs658aji2pdgvr9busd2v256', 1, 'Sansung04', 567456.00, 1, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(31, '7k240dk1c7ccle8gb14bqtdp26', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(32, 'e84kimr882mg9dma8qpkh6r9g2', 5, 'kjhkjh', 765.00, 3, '../assets/admin_assets/product_img/10457553_704414979594188_3752423198932451068_n.jpg'),
(33, '42ad1qgogr3tn5qi84ev6vb9h1', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(34, '42ad1qgogr3tn5qi84ev6vb9h1', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(35, '42ad1qgogr3tn5qi84ev6vb9h1', 5, 'kjhkjh', 765.00, 1, '../assets/admin_assets/product_img/10457553_704414979594188_3752423198932451068_n.jpg'),
(36, 'p5orq61uuqjqmu8qboru0sge47', 6, 'Phone One', 34567.00, 3, '../assets/admin_assets/product_img/images.jpg'),
(37, 'p5orq61uuqjqmu8qboru0sge47', 6, 'Phone One', 34567.00, 4, '../assets/admin_assets/product_img/images.jpg'),
(38, 'p5orq61uuqjqmu8qboru0sge47', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(39, 'upnqkd0lpc8cc7hvo3vreginc2', 3, 'Z-sticks', 455.00, 1, '../assets/admin_assets/product_img/TAMIM340.jpg'),
(40, 'upnqkd0lpc8cc7hvo3vreginc2', 2, 'T-shirt', 5678.00, 3, '../assets/admin_assets/product_img/man_25114.jpg'),
(41, 'upnqkd0lpc8cc7hvo3vreginc2', 21, 'Butter-silk', 987.00, 3, '../assets/admin_assets/product_img/6.jpg'),
(42, 'upnqkd0lpc8cc7hvo3vreginc2', 1, 'Sansung04', 567456.00, 3, '../assets/admin_assets/product_img/1907500_1636165389955038_1232419269343088008_n.jpg'),
(43, 'oa0td8n9kjqv338kl6g9tijll2', 2, 'T-shirt', 5678.00, 1, '../assets/admin_assets/product_img/man_25114.jpg'),
(44, 'oa0td8n9kjqv338kl6g9tijll2', 5, 'kjhkjh', 765.00, 3, '../assets/admin_assets/product_img/10457553_704414979594188_3752423198932451068_n.jpg'),
(45, 'rjhca29ue0sto191gqla61gp66', 11, 'Shirt', 345.00, 1, '../assets/admin_assets/product_img/one.jpg'),
(46, 'lfc56k7h93custlbn1lkr53s06', 8, 'Phone Y', 34555.00, 4, '../assets/admin_assets/product_img/download (1).jpg'),
(47, 'lfc56k7h93custlbn1lkr53s06', 5, 'kjhkjh', 765.00, 3, '../assets/admin_assets/product_img/10457553_704414979594188_3752423198932451068_n.jpg'),
(53, 'aq4o51llkc5sc7rpri407k42k2', 8, 'Phone Y', 34555.00, 3, '../assets/admin_assets/product_img/download (1).jpg'),
(54, 'aq4o51llkc5sc7rpri407k42k2', 11, 'Shirt', 345.00, 3, '../assets/admin_assets/product_img/one.jpg'),
(55, 'aq4o51llkc5sc7rpri407k42k2', 7, 'Phone X', 2345678.00, 3, '../assets/admin_assets/product_img/md05803029-350x350.jpg'),
(56, 'e8l19gqdcgk5ntstk251h65kv4', 6, 'Phone One', 34567.00, 3, '../assets/admin_assets/product_img/images.jpg'),
(57, 'otpbsu95s7576g7pd1a7dqmm85', 10, 'Phone abc', 3456.00, 3, '../assets/admin_assets/product_img/download.jpg'),
(58, '8bjb0fhr9afntg4pfega374qv5', 7, 'Phone X', 2345678.00, 1, '../assets/admin_assets/product_img/md05803029-350x350.jpg'),
(59, 'rr6kg0fkmc4e2uog2d1c8j04i0', 11, 'Shirt', 345.00, 3, '../assets/admin_assets/product_img/one.jpg'),
(60, '9vetdhjfu1im8q05qjrhj9ack2', 6, 'Phone One', 34567.00, 1, '../assets/admin_assets/product_img/images.jpg'),
(61, '42vbrgk4a42cbkc3i7g113g6m2', 12, 'Polo Shirt', 987.00, 3, '../assets/admin_assets/product_img/two.jpg'),
(62, 'cvb0fvn81116aa5r1rtnrlgr75', 6, 'Phone One', 34567.00, 1, '../assets/admin_assets/product_img/images.jpg'),
(64, 'ldq6ntb593g3f31c46pkkh9f22', 11, 'Shirt', 345.00, 1, '../assets/admin_assets/product_img/one.jpg'),
(65, 'hcp9sj2d5o75ade6k4d1nd4b41', 6, 'Phone One', 34567.00, 1, '../assets/admin_assets/product_img/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_temp_cart`
--
ALTER TABLE `tbl_temp_cart`
  ADD PRIMARY KEY (`temp_cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_temp_cart`
--
ALTER TABLE `tbl_temp_cart`
  MODIFY `temp_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
