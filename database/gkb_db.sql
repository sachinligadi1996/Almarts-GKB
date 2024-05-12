-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 09:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gkb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `username`, `password`) VALUES
(1, 'Admin', '8989878678', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(44, 1, 34, 1),
(45, 1, 31, 1),
(46, 1, 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(400) NOT NULL,
  `cat_descr` varchar(400) NOT NULL,
  `c_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_img`, `cat_descr`, `c_status`) VALUES
(54, 'Dry Fruits', 'assets/images/macadamia nuts.webp', 'sd1', ''),
(65, 'grameen', 'assets/images/grameen-removebg-preview.png', 'grammen area', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `mail`, `mobile`, `comments`) VALUES
(1, 'shree', 'chavan', 'shree@gmail.com', '867845654', 'hi heloo????');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_admin_details`
--

CREATE TABLE `gkb_admin_details` (
  `id` int(11) NOT NULL,
  `head_admin_id` varchar(100) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_mob` int(15) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `admin_adhar` int(15) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_add` varchar(200) NOT NULL,
  `admin_add1` varchar(200) NOT NULL,
  `admin_add2` varchar(150) NOT NULL,
  `admin_add3` varchar(200) NOT NULL,
  `admin_add4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_admin_details`
--

INSERT INTO `gkb_admin_details` (`id`, `head_admin_id`, `admin_name`, `admin_mob`, `admin_mail`, `admin_adhar`, `admin_username`, `admin_pass`, `admin_add`, `admin_add1`, `admin_add2`, `admin_add3`, `admin_add4`) VALUES
(6, 'GKB_ADMIN_0001', 'Vishal Barage', 865479521, 'vish@gmail.com', 2147483647, 'vish', '12345', 'Aishwaryam courtyard', 'newalewasti, chickhali', 'pune', 'maharashtra', '416114');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_branch_detail`
--

CREATE TABLE `gkb_branch_detail` (
  `id` int(11) NOT NULL,
  `branch_id` varchar(100) NOT NULL,
  `branch-manager` varchar(200) NOT NULL,
  `branch_mob` varchar(15) NOT NULL,
  `branch_mail` varchar(50) NOT NULL,
  `branch_adhar` int(20) NOT NULL,
  `branch_username` varchar(50) NOT NULL,
  `branch_pass` varchar(50) NOT NULL,
  `branch_add` varchar(100) NOT NULL,
  `branch_add1` varchar(100) NOT NULL,
  `branch_add2` varchar(100) NOT NULL,
  `branch_add3` varchar(100) NOT NULL,
  `branch_add4` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_branch_detail`
--

INSERT INTO `gkb_branch_detail` (`id`, `branch_id`, `branch-manager`, `branch_mob`, `branch_mail`, `branch_adhar`, `branch_username`, `branch_pass`, `branch_add`, `branch_add1`, `branch_add2`, `branch_add3`, `branch_add4`, `status`) VALUES
(3, 'GKB_BRANCH_0001', 'Samadhan Gore', '3125484656', 'sam@gmail.com', 2147483647, 'sam', 'sam123', 'anna pg house', 'Hinjewadi near d mart', 'Pune', 'Maharashtra', '365974', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gkb_commision`
--

CREATE TABLE `gkb_commision` (
  `id` int(20) NOT NULL,
  `ids` int(20) NOT NULL,
  `active` varchar(30) NOT NULL,
  `prime` varchar(40) NOT NULL,
  `tdc` varchar(30) NOT NULL,
  `direct` varchar(30) NOT NULL,
  `sc` varchar(40) NOT NULL,
  `level` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `pvc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_commision`
--

INSERT INTO `gkb_commision` (`id`, `ids`, `active`, `prime`, `tdc`, `direct`, `sc`, `level`, `gst`, `pvc`) VALUES
(4, 12345, '25', '11', '111', '22', '22', '222', '222', '33');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_md_admin`
--

CREATE TABLE `gkb_md_admin` (
  `id` int(11) NOT NULL,
  `md_admin_id` varchar(100) NOT NULL,
  `md_name` varchar(100) NOT NULL,
  `md_mob` varchar(15) NOT NULL,
  `md_mail` varchar(50) NOT NULL,
  `md_username` varchar(50) NOT NULL,
  `md_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_md_admin`
--

INSERT INTO `gkb_md_admin` (`id`, `md_admin_id`, `md_name`, `md_mob`, `md_mail`, `md_username`, `md_pass`) VALUES
(2, 'GKB_MD_0001', 'MD sir', '99654789', 'md@gmail.com', 'md', 'md123');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_md_bank`
--

CREATE TABLE `gkb_md_bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `ac_name` varchar(50) NOT NULL,
  `ac_mob` varchar(15) NOT NULL,
  `ac_no` int(20) NOT NULL,
  `ac_ifsc` varchar(50) NOT NULL,
  `holder_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_md_bank`
--

INSERT INTO `gkb_md_bank` (`id`, `bank_name`, `ac_name`, `ac_mob`, `ac_no`, `ac_ifsc`, `holder_status`) VALUES
(3, 'SBI', 'Prashant chavan', '8975006464', 2147483647, 'SBIN009325', 'Vendor');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_mpayout_forms`
--

CREATE TABLE `gkb_mpayout_forms` (
  `id` int(20) NOT NULL,
  `amember_efee` varchar(200) NOT NULL,
  `no_of_pconsumer` varchar(200) NOT NULL,
  `deduct_pvc` varchar(200) NOT NULL,
  `calculations` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_mpayout_forms`
--

INSERT INTO `gkb_mpayout_forms` (`id`, `amember_efee`, `no_of_pconsumer`, `deduct_pvc`, `calculations`) VALUES
(3, '65555', '5', '71', '5656');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_personal`
--

CREATE TABLE `gkb_personal` (
  `id` int(20) NOT NULL,
  `commision` varchar(100) NOT NULL,
  `bonus` varchar(50) NOT NULL,
  `incentives` varchar(30) NOT NULL,
  `gross` varchar(40) NOT NULL,
  `dvc` varchar(40) NOT NULL,
  `tds` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `deduction` varchar(40) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_personal`
--

INSERT INTO `gkb_personal` (`id`, `commision`, `bonus`, `incentives`, `gross`, `dvc`, `tds`, `gst`, `cgst`, `deduction`, `amount`) VALUES
(2, '123', '3456', '333', '2222', '1111', '333', '222', '333', '333', '3333'),
(3, '1111', '111', '1111', '1111', '111', '111', '11', '111', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_personal_to_plan`
--

CREATE TABLE `gkb_personal_to_plan` (
  `id` int(20) NOT NULL,
  `level` varchar(200) NOT NULL,
  `membership` varchar(200) NOT NULL,
  `member_structure` varchar(200) NOT NULL,
  `margin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_personal_to_plan`
--

INSERT INTO `gkb_personal_to_plan` (`id`, `level`, `membership`, `member_structure`, `margin`) VALUES
(2, '1', 'Prime', 'Add 10 Active Members', '5%'),
(3, '2', 'Smart', 'Add 3 Prime Members', '4%'),
(6, '3', 'Gold', 'Add 3 Smart Members', '3%');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_sales_manager_details`
--

CREATE TABLE `gkb_sales_manager_details` (
  `id` int(11) NOT NULL,
  `sales_manager_id` varchar(100) NOT NULL,
  `sales_manager` varchar(100) NOT NULL,
  `sales_mob` varchar(15) NOT NULL,
  `sales_mail` varchar(50) NOT NULL,
  `sales_adhar` int(15) NOT NULL,
  `sales_username` varchar(100) NOT NULL,
  `sales_pass` varchar(100) NOT NULL,
  `sales_add` varchar(100) NOT NULL,
  `sales_add1` varchar(100) NOT NULL,
  `sales_add2` varchar(100) NOT NULL,
  `sales_add3` varchar(100) NOT NULL,
  `sales_add4` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_sales_manager_details`
--

INSERT INTO `gkb_sales_manager_details` (`id`, `sales_manager_id`, `sales_manager`, `sales_mob`, `sales_mail`, `sales_adhar`, `sales_username`, `sales_pass`, `sales_add`, `sales_add1`, `sales_add2`, `sales_add3`, `sales_add4`, `status`) VALUES
(3, 'GKB_SALES_0001', 'Pranav Sankpal', '123574867', 'pranav@gmail.com', 2147483647, 'ps', '123', 'Sai hos soc.', '3rd house, nigdi', 'pune', 'maharashtra', '548676435', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gkb_to_targets`
--

CREATE TABLE `gkb_to_targets` (
  `id` int(20) NOT NULL,
  `last_payout_id` varchar(200) NOT NULL,
  `communative_id_lpay` varchar(200) NOT NULL,
  `to_block_id_no` varchar(200) NOT NULL,
  `closing_to_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_to_targets`
--

INSERT INTO `gkb_to_targets` (`id`, `last_payout_id`, `communative_id_lpay`, `to_block_id_no`, `closing_to_id`) VALUES
(3, 'GKB_00006', 'GKB_000039', '2313399', 'GKB_000076'),
(4, 'GKB_00002', 'GKB_00008', '23133', 'GKB_000087');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_to_tbalancesheet`
--

CREATE TABLE `gkb_to_tbalancesheet` (
  `id` int(20) NOT NULL,
  `ids` varchar(200) NOT NULL,
  `turnover` varchar(200) NOT NULL,
  `commission_given` varchar(200) NOT NULL,
  `pvc_given` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_to_tbalancesheet`
--

INSERT INTO `gkb_to_tbalancesheet` (`id`, `ids`, `turnover`, `commission_given`, `pvc_given`, `balance`) VALUES
(2, '11', '222', '13', '77', '12');

-- --------------------------------------------------------

--
-- Table structure for table `gkb_vendor_details`
--

CREATE TABLE `gkb_vendor_details` (
  `id` int(11) NOT NULL,
  `vendor_id` varchar(100) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_mob` varchar(15) NOT NULL,
  `vendor_cat` varchar(100) NOT NULL,
  `vendor_mail` varchar(50) NOT NULL,
  `vendor_adhar` varchar(100) NOT NULL,
  `vendor_username` varchar(100) NOT NULL,
  `vendor_pass` varchar(100) NOT NULL,
  `vendor_add` varchar(100) NOT NULL,
  `vendor_add1` varchar(120) NOT NULL,
  `vendor_add2` varchar(100) NOT NULL,
  `vendor_add3` varchar(100) NOT NULL,
  `vendor_add4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gkb_vendor_details`
--

INSERT INTO `gkb_vendor_details` (`id`, `vendor_id`, `vendor_name`, `vendor_mob`, `vendor_cat`, `vendor_mail`, `vendor_adhar`, `vendor_username`, `vendor_pass`, `vendor_add`, `vendor_add1`, `vendor_add2`, `vendor_add3`, `vendor_add4`) VALUES
(7, 'GKB_VEND_0001', 'Pratik Hinge', '21545783356', 'Electronics', 'pratik@gmail.com', '132644154', 'ph', '321', 'samarth departmanet', 'dange chowk', 'pune', 'maharashtra', '4697712');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `prod_code` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'In-Transit',
  `amount_paid` varchar(100) NOT NULL,
  `delivery_person` varchar(100) NOT NULL,
  `delivery_status` varchar(100) NOT NULL DEFAULT 'In-Complete',
  `delivery_otp` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `qty`, `products`, `prod_code`, `order_id`, `status`, `amount_paid`, `delivery_person`, `delivery_status`, `delivery_otp`, `date`, `updated_timestamp`) VALUES
(50, 'Arun Jadhav', 'aj1@gmail.com', '8767564534', 'Mumbai', 'COD', '3', 'Chobani Complete Vanilla Greek Yogurt(3)', 'PORD50928045', 'ORDS21485347', 'Complete', '420', '2', 'Complete', 0, '2023-03-29 19:00:27', '2023-07-25 04:56:16'),
(55, 'Anup Kumar', 'ac1@gmail.com', '8978675645', 'Pune', 'COD', '6', 'Green Diamond Almonds Lightly Salted Vegetables(6)', 'PROD41773751', 'ORDS22575976', 'Complete', '1140', 'Shubham Gill', 'Complete', 0, '2023-04-03 12:37:14', '2023-07-25 04:56:16'),
(58, 'Raju Sharma', 'rs1@gmail.com', '8978898978', 'Efficient Globtech Solutions,Amanora Mall Hadapsar,Pune', 'COD', '', 'Seeds of Change Organic Quinoa, Brown(3), Foster Farms Takeout Crispy Classic Buffalo Wings(2), Seeds of Change Organic Quinoa, Brown(1)', '', 'ORDS90664864', 'Complete', '1173', 'Anand Kale', 'Complete', 0, '2023-07-20 15:25:50', '2023-07-25 04:56:16'),
(59, 'Raju Sharma', 'rs1@gmail.com', '8978898978', 'Efficient Globtech Solutions,Amanora Mall Hadapsar,Pune', 'COD', '', 'Foster Farms Takeout Crispy Classic Buffalo Wings(2), Foster Farms Takeout Crispy Classic Buffalo Wings(1)', '', 'ORDS35246979', 'Complete', '372', 'Anisha  Gowda', 'Complete', 0, '2023-07-20 15:50:10', '2023-07-25 04:56:16'),
(85, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Netbanking', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-2 , Angie’s Boomchickapop Sweet & Salty Kettle Corn-2 , Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 ', '', 'ORDS5571646', 'Complete', '5446', 'Shubham Gill', 'Complete', 0, '2023-07-23 12:51:00', '2023-07-25 04:56:16'),
(86, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Netbanking', '', 'Chobani Complete Vanilla Greek Yogurt-1 ', '', 'ORDS25868923', 'Complete', '197', 'Rahul Kumar', 'Complete', 0, '2023-07-24 10:11:58', '2023-07-25 04:56:16'),
(87, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Debit/Credit Card', '', 'Green Diamond Almonds Lightly Salted Vegetables-1 , Angie’s Boomchickapop Sweet & Salty Kettle Corn-1 ', '', 'ORDS50808084', 'Complete', '510', 'Rahul Kumar', 'Complete', 0, '2023-07-24 17:14:10', '2023-07-25 04:56:16'),
(88, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Foster Farms Takeout Crispy Classic Buffalo Wings-1 ', '', 'ORDS93466273', 'Complete', '120', 'Rahul Kumar', 'Complete', 0, '2023-07-24 17:28:12', '2023-07-25 04:56:16'),
(89, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Netbanking', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 ', '', 'ORDS407209', 'Complete', '250', 'Rahul Kumar', 'Complete', 0, '2023-07-24 17:34:25', '2023-07-25 04:56:16'),
(90, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Debit/Credit Card', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 ', '', 'ORDS47976351', 'Complete', '2233', 'Rahul Kumar', 'Complete', 0, '2023-07-24 17:45:41', '2023-07-25 04:56:16'),
(91, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Netbanking', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 ', '', 'ORDS94598935', 'Complete', '250', 'Rahul Kumar', 'Complete', 0, '2023-07-24 17:48:42', '2023-07-25 04:56:16'),
(92, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Foster Farms Takeout Crispy Classic Buffalo Wings-1 ', '', 'ORDS18607879', 'Complete', '120', 'Rahul Kumar', 'Complete', 0, '2023-07-24 17:52:18', '2023-07-25 04:56:16'),
(123, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 , Seeds of Change Organic Quinoa, Brown-1 , Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 ', '', 'ORDS44499859', 'In-Transit', '2401.25', '', 'In-Complete', 0, '2023-08-09 08:43:27', '2023-08-09 08:43:27'),
(124, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'Netbanking', '', 'Product of Change Organic Guina, Green-1 , Seeds of Change Organic Quinoa, Brown-1 ', '', 'ORDS69252664', 'In-Transit', '352', 'Shubham Gill', 'In-Complete', 0, '2023-08-09 15:43:25', '2023-09-21 09:30:42'),
(125, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Blue Diamond Almonds Lightly Salted Vegetables-1 , Green Diamond Almonds Lightly Salted Vegetables-1 ', '', 'ORDS29661915', 'Complete', '630', 'Rahul Kumar', 'Complete', 6021, '2023-08-10 11:37:55', '2023-08-22 06:00:48'),
(126, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 , Seeds of Change Organic Quinoa, Brown (32 reviews)-1 ', '', 'ORDS52560152', 'Complete', '605', 'Rahul Kumar', 'Complete', 2840, '2023-09-27 07:54:19', '2023-09-27 07:55:18'),
(127, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Angie’s Boomchickapop Sweet & Salty Kettle Corn-1 ', '', 'ORDS45804936', 'Complete', '310', 'Rahul Kumar', 'Complete', 8129, '2023-10-10 07:03:19', '2023-10-10 07:06:47'),
(128, 'Aditya Patil', 'aditya@gmail.com', '88765432100', 'Source Code Software, Office 316, 3rd floor  Xion PSC Pacific, Hinjawadi Village Hinjawadi, Pimpri-Chinchwad Pune, Maharashtra, 411028, India,  09156543405', 'COD', '', 'Chobani Complete Vanilla Greek Yogurt (32 reviews)-1 ', '', 'ORDS89876923', 'Complete', '2233', 'Rahul Kumar', 'Complete', 5195, '2023-10-12 10:48:31', '2023-10-12 10:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `prime_members`
--

CREATE TABLE `prime_members` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_purchase` int(255) NOT NULL,
  `card_bal` int(255) NOT NULL,
  `withdrawal_bal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prime_members`
--

INSERT INTO `prime_members` (`id`, `user_id`, `first_purchase`, `card_bal`, `withdrawal_bal`) VALUES
(7, '1', 5400, 4320, 1080);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prod_name` longtext NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `ven_id` int(11) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `thum1` blob NOT NULL,
  `thum2` blob NOT NULL,
  `thum3` blob NOT NULL,
  `old_price` int(11) NOT NULL,
  `profit` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `p_price` int(10) NOT NULL,
  `pvc` int(10) NOT NULL,
  `cummission` int(10) NOT NULL,
  `new_price` int(11) NOT NULL,
  `product_descr` longtext NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `sizeweight` varchar(50) NOT NULL,
  `life` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `quan_per_case` varchar(100) NOT NULL,
  `para1` longtext NOT NULL,
  `vendor_name` varchar(150) NOT NULL,
  `vendor_descr` longtext NOT NULL,
  `vendor_add` longtext NOT NULL,
  `vendor_contact` int(13) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `cat_name`, `ven_id`, `p_type`, `thum1`, `thum2`, `thum3`, `old_price`, `profit`, `discount`, `p_price`, `pvc`, `cummission`, `new_price`, `product_descr`, `quantity`, `p_status`, `sizeweight`, `life`, `stock`, `quan_per_case`, `para1`, `vendor_name`, `vendor_descr`, `vendor_add`, `vendor_contact`, `product_code`) VALUES
(40, 'Peru', 'Dry Fruits', 0, '', 0x6173736574732f70726f64756374732f6772616d65656e2d72656d6f766562672d707265766965772e706e67, 0x6173736574732f70726f64756374732f6772616d65656e2d72656d6f766562672d707265766965772e706e67, 0x6173736574732f70726f64756374732f6772616d65656e2d72656d6f766562672d707265766965772e706e67, 100, 10, 0, 40, 5, 5, 60, 'tasty', '150', '', '', '', 0, '', '', '', '', '', 0, ''),
(41, 'baddam', 'Dry Fruits', 0, '', 0x6173736574732f70726f64756374732f6772616d65656e2d72656d6f766562672d707265766965772e706e67, 0x6173736574732f70726f64756374732f, 0x6173736574732f70726f64756374732f, 500, 20, 0, 350, 10, 10, 390, 'khvbkjhvdjlbvjl', '', '', '', '', 0, '', '', '', '', '', 0, ''),
(42, 'baddamf', 'Dry Fruits', 0, '', 0x6173736574732f70726f64756374732f, 0x6173736574732f70726f64756374732f, 0x6173736574732f70726f64756374732f, 500, 0, 0, 0, 0, 0, 390, 'khvbkjhvdjlbvjl', '', '', '', '', 0, '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `mobile` int(12) NOT NULL,
  `branch_code` varchar(20) NOT NULL,
  `query` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `date`, `mobile`, `branch_code`, `query`, `status`) VALUES
(1, 'Samadhan Gore', '0000-00-00', 776898089, 'GKB2000', 'Hello i am sam gore shop owner of GKB0112 .there is some issue in sell panel', 0),
(3, 'mahi gore', '2023-12-22', 989897687, 'GKB2000', 'Hey how are admin ,hope are you doing well.....', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_review` varchar(900) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_email`, `user_review`, `status`, `datetime`) VALUES
(1, 'Anil Kumar', '4', 'So good', 'Active', '0000-00-00 00:00:00'),
(2, 'Varun Dhawan', '5', 'Brillient Product.', 'Active', '0000-00-00 00:00:00'),
(3, 'Aditya', '3', 'Good', 'Active', '0000-00-00 00:00:00'),
(4, 'Aditya', '0', 'Good Product', 'Active', '0000-00-00 00:00:00'),
(5, 'Rahul Mishra', '1', 'Very Bad', 'In-Active', '0000-00-00 00:00:00'),
(26, 'pranaav', 'pra@gmail.com', 'eretgrfewdws', 'Active', '0000-00-00 00:00:00'),
(27, 'fffffff', 'pra@gmail.com', 'dffffff', 'Active', '2023-12-13 09:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `adhar_id` varchar(20) NOT NULL,
  `kisan_id` varchar(20) NOT NULL,
  `pan_id` varchar(20) NOT NULL,
  `membership` varchar(150) NOT NULL DEFAULT 'non_prime',
  `refcode` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `billing_address` longtext NOT NULL,
  `shipping_address` longtext NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `mobile`, `email`, `adhar_id`, `kisan_id`, `pan_id`, `membership`, `refcode`, `username`, `password`, `billing_address`, `shipping_address`, `code`, `status`) VALUES
(91, 'GKB_84969', 'prashant chavan', '9960511411', 'pc@gmail.com', '2146546515', '5464654654', '54654566', 'Prime Membership', 'GKB_21656', 'pc', '123', 'pune', 'kolhapur', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_admin_details`
--
ALTER TABLE `gkb_admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_branch_detail`
--
ALTER TABLE `gkb_branch_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_commision`
--
ALTER TABLE `gkb_commision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_md_admin`
--
ALTER TABLE `gkb_md_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_md_bank`
--
ALTER TABLE `gkb_md_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_mpayout_forms`
--
ALTER TABLE `gkb_mpayout_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_personal`
--
ALTER TABLE `gkb_personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_personal_to_plan`
--
ALTER TABLE `gkb_personal_to_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_sales_manager_details`
--
ALTER TABLE `gkb_sales_manager_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_to_targets`
--
ALTER TABLE `gkb_to_targets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_to_tbalancesheet`
--
ALTER TABLE `gkb_to_tbalancesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gkb_vendor_details`
--
ALTER TABLE `gkb_vendor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prime_members`
--
ALTER TABLE `prime_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gkb_admin_details`
--
ALTER TABLE `gkb_admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gkb_branch_detail`
--
ALTER TABLE `gkb_branch_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gkb_commision`
--
ALTER TABLE `gkb_commision`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gkb_md_admin`
--
ALTER TABLE `gkb_md_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gkb_md_bank`
--
ALTER TABLE `gkb_md_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gkb_mpayout_forms`
--
ALTER TABLE `gkb_mpayout_forms`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gkb_personal`
--
ALTER TABLE `gkb_personal`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gkb_personal_to_plan`
--
ALTER TABLE `gkb_personal_to_plan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gkb_sales_manager_details`
--
ALTER TABLE `gkb_sales_manager_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gkb_to_targets`
--
ALTER TABLE `gkb_to_targets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gkb_to_tbalancesheet`
--
ALTER TABLE `gkb_to_tbalancesheet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gkb_vendor_details`
--
ALTER TABLE `gkb_vendor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `prime_members`
--
ALTER TABLE `prime_members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
